<?php
/***************************************************************************
 * 
 * Copyright (c) 2013 Baidu.com, Inc. All Rights Reserved
 * Transport.php 2013/01/16 16:30:18 songhuiqing Exp 
 * 
 **************************************************************************/



/**
 * @file RpcTransport.php
 * @author songhuiqing(songhuiqing@baidu.com)
 * @date 2013/01/16 16:30:18
 * @version 1.0.0
 * @brief 传输层
 *  
 **/

require_once(dirname(__FILE__).'/../RpcErrorno.php');
require_once(dirname(__FILE__).'/../../include/connectpool/ConnectionMan.class.php');
require_once(dirname(__FILE__).'/../Socket.php');
require_once(dirname(__FILE__).'/../Transport.php');

class RpcTransport implements Transport {
	private $key;                     //负载均衡因子     int
	private $hasKey;                  //设置均衡因子标识 bool
	private $errorHandler;			  //错误处理         class RpcErrorno
	private $configManager;           //配置管理         array
	private $id;                      //nshead id
	private $version;                 //nshead version
	private $logid;                   //nshead logid
	private $provider;                //nshead provider
	/*
	 * @brief 构造函数
	 *
	 * @author songhuiqing
	 * @date 2013/1/25 11:51:50
	 *
	 */
	function __construct($conf){
		$this->hasKey = false;
		$this->key = -1;
		$this->errorHandler = new RpcErrorno();
		$this->id = 0;
		$this->version = 1000;
		$this->logid = 0;
		$this->provider = "sat-pbrpc";
		$this->configManager = $conf;
	}
	/*
	 * @brief 设置负载均衡因子标识
	 *
	 * @param [in] $key : int
	 * @author songhuiqing
	 * @date 2013/1/16 16:31:20
	 *
	 */
	public function setKey($key){
		$this->hasKey = true;
		$this->key = $key;
	}
	/*
	 * @brief 设置负载均衡标识
	 *
	 * @return bool
	 * @author songhuiqing
	 * @date 2013/1/16 16:31:20
	 *
	 */
	public function hasKey(){
		return $this->hasKey;
	}
	public function getKey(){
		if($this->hasKey){
			return $this->key;
		}else{
			return rand();
		}
	}
	/*
	 * @brief 重置负载均衡标识
	 *
	 * @author songhuiqing
	 * @date 2013/1/16 16:32:20
	 *
	 */
	public function unsetKey(){
		$this->hasKey = false;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setVersion($version){
		$this->version = $version;
	}
	public function setLogid($logid){
		$this->logid = $logid;
	}
	public function setProvider($provider){
		$this->provider = $provider;
	}
	public function setError($err){
		$this->err = $err;
	}
	public function getError(){
		return $this->err;
	}
	/*
	 * @brief 序列化nshead
	 *
	 * @author songhuiqing
	 * @param [in] $request : Message
	 * @return binary
	 *
	 * @date 2013/07/08 15:51:20
	 *
	 */
	public function serialize($request){

		$bodylen = strlen($request);
		
		$nshead = pack("SSIa16III",
				$this->id,
				$this->version,
				$this->logid,
				$this->provider,
				0xfb709394,
				0,
				$bodylen);
		$send = $nshead.$request;
		
		return $send;
	}
	/*
	 * @brief 反序列化nshead
	 *
	 * @author songhuiqing
	 * @param [in] $nshead_data : binary
	 * @return Nshead
	 *
	 * @date 2013/07/08 15:51:40
	 *
	 */
	public function deserialize($nshead_data){
		$head = unpack("Sid/Sversion/Ilogid/a16provider/Imagic_num/Ireserved/Ibody_len",$nshead_data);
		return $head;
	}
	/*
	 * @brief 同步阻塞通信
	 *
	 * @param [in] $request : class RpcRequest
	 * @param [in and out] $response : class Message
	 * @param [in and out] $controller : class RpcController
	 * @return success : class RpcResponse | fail : false
	 *
	 * @author songhuiqing
	 * @date 2013/07/08 15:53:20
	 *
	 */
	public function talk($request,&$response,&$controller){
		
		$service = $this->configManager[$controller->getChannel()];
		$read_timeout_ms = 1000;
		$write_timeout_ms = 1000;
		$connect_timeout_ms = 1000;
		if(isset($service['read_timeout_ms'])){
			$read_timeout_ms = $service['read_timeout_ms'];
		}
		if(isset($service['write_timeout_ms'])){
			$write_timeout_ms = $service['write_timeout_ms'];
		}
		if(isset($service['connect_timeout_ms'])){
			$connect_timeout_ms = $service['connect_timeout_ms'];
		}

		$socketfd = null;
		$selServer = array();
		
		if(self::getSocket($service,$connect_timeout_ms,$socketfd,$selServer,$controller) === false){
			return false;	
		}
		$sock = new CPHPRPCSocketWrapper($read_timeout_ms,$write_timeout_ms,$connect_timeout_ms,$socketfd);
		$err = null;

		if(null === $socketfd){
			$retry = 1;
			if(isset($service['retry'])){
				$retry = $service['retry'];
			}

			for($i = 0;$i < $retry;$i++){
				if($sock->connect($selServer['host'],$selServer['port']) == false){
					$err = $sock->getLastError();
				}else{
					break;
				}
			}
		}
		
		$senddata = $this->serialize($request);
		if($senddata === null){
			$controller->setErrorCode(RpcErrorno::PBRPC_RET_SERIALIZE);
			$controller->setErrorText($this->errorHandler->getErrorText($controller->getErrorCode()));
			fclose($socketfd);
			return false;
		}	
		if($err === null && $sock->send($senddata,strlen($senddata)) == false){
			if($err === null){
				$err = $sock->getLastError();
			}
			$controller->setErrorCode(RpcErrorno::PBRPC_RET_WRITE);
			$controller->setErrorText("send fail err:[$err]");
			fclose($socketfd);
			return false;
		}

		$nshead = $sock->receive(36);
		if($nshead === false){
			$err = $sock->getLastError();
			$controller->setErrorCode(RpcErrorno::PBRPC_RET_READ);
			$controller->setErrorText("nshead is null err:[$err]");
			fclose($socketfd);
			return false;
		}else{
			$head = $this->deserialize($nshead);
            $response = $sock->receive($head['body_len']);
            fclose($socketfd);
		}
			
		return true;
	}
	/*
	 * @brief 获取fd
	 *
	 * @author songhuiqing
	 * @param [in] $service : array
	 * @param [in] $connect_timeout_ms : int
	 * @param [in and out] $sd : socket fd
	 * @param [in and out] $selServer : array 选中的server
	 *
	 * @date 2013/07/08 16:20:20
	 *
	 */
	private function getSocket($service,$connect_timeout_ms,&$sd,&$selServer,&$controller){
		$machineList = $service['server'];

		$arrStrategy = null;
		$balanceCode = 0;
		if(isset($service['strategy'])){
			$arrStrategy = $service['strategy'];
		}

		if($this->key < 0){
			$balanceCode = rand();
		}else{
			$balanceCode = $this->key;
		}
		
		if(count($machineList) == 0){
			$controller->setErrorCode(RpcErrorno::$PBRPC_RET_NOFOUNDMATCH);
			$controller->setErrorText($this->errorHandler->getErrorText($controller->getErrorCode()));
			return false;
		}
		$balanceCode = $balanceCode % count($machineList);
		
		$sd = ConnectionMan::getSocket($selServer,$machineList,$connect_timeout_ms,$arrStrategy,$balanceCode);
		
		if($sd == false){
			$err = ConnectionMan::getLastErrno();
		}else{
			return true;
		}
		$controller->setErrorCode(RpcErrorno::PBRPC_RET_READ);
		$controller->setErrorText("connect fail err[$err]");
		return false;
	}
}
?>
