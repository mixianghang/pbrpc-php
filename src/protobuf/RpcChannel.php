<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * RpcChannel.php 2014/01/27 14:44:56 songhuiqing Exp 
 * 
 **************************************************************************/



/**
 * @file RpcChannel.php
 * @author songhuiqing(songhuiqing@baidu.com)
 * @date 2013/06/24 11:02:20
 * @version 1.0.1 
 * @brief php客户端
 *  
 **/

require_once(dirname(__FILE__).'/RpcErrorno.php');
require_once(dirname(__FILE__).'/RpcController.php');
require_once(dirname(__FILE__).'/PbProtocol.php');
require_once(dirname(__FILE__).'/RpcTransport.php');
class Protobuf_RpcChannel{
    
    private $protocol;                     //协议层            class PbProtocol
    private $transport;                    //传输层            class RpcTransport
    private $channelName;                  //通讯管道名称      string
	private $hasChannel;                   //已设置channel标志 bool
    private $errorHandler;                 //错误处理          class RpcErrorno
    private $configManager;
    
    /*
	 * @brief construct method
	 *
	 * @author songhuiqing
	 * @param [in] $protocol : class PbProtocol
	 * @date 2013/06/24 11:13:20
	 *
	 */
	function __construct($conf){
        $this->configManager = $conf;
        $this->transport = new RpcTransport($this->configManager);
        $this->protocol = new PbProtocol();
		$this->hasChannel = false;
		$this->errorHandler = new RpcErrorno();
    }
    
	/*
	 * @brief 调用用户方法
	 *
	 * @author songhuiqing
	 * @param [in] $controller : class RpcController
	 * @param [in] $request : class Message
	 * @param [in] $response : class Message
	 * @return void
	 *
	 * @date 2013/06/24 11:14:03
	 *
	 */
    public function CallMethod(&$controller,$request,&$response) {
        if($controller === null) {
            return ;
        }
		if($request === null || $response === null) {
			$controller->setFailed(true);
			$controller->setErrorCode(RpcErrorno::PBRPC_RET_PARAM);
            $controller->setErrorText($this->errorHandler->getErrorText($controller->getErrorCode()));
            return ;
		}
		if($this->isHasChannel()){
			$controller->setChannel($this->channel);
		}else{
			$controller->setChannel($controller->getServiceName());
		}
        //serialize request
        $requestBuffer = $this->protocol->encode($request,$controller);
        if(null === $requestBuffer){
			$controller->setFailed(true);
			$controller->setErrorCode(RpcErrorno::PBRPC_RET_SERIALIZE);
			$controller->setErrorText($this->errorHandler->getErrorText($controller->getErrorCode()));
			return ;
        }
        //block talk
        $responseData = null;
		//print_r('start to talk');
        $ret = $this->transport->talk($requestBuffer,$responseData,$controller);
		//var_dump($responseData);
	//	var_dump($controller);
        if(!$ret){
            $controller->setFailed(true);
			return ;
        }

        //deserialize response
        $deserialize_result = $this->protocol->decode($responseData,$controller);
        if(null === $deserialize_result) {
            return ;
        }
        
        try {
            $response->ParseFromString($deserialize_result);
        } catch (Exception $e) {
            $controller->setFailed(true);
            $controller->setErrorCode(RpcErrorno::PBRPC_RET_DESERIALIZE);
            $controller->setErrorText($e->getMessage());
        }
	}
	/*
	 * @brief 设置通讯管道名称
	 *
	 * @author songhuiqing
	 * @param [in] $channel_name : string
	 * @return void
	 * 
	 * @date 2013/1/16 15:05:20
	 *
	 */
	public function setChannel($channel_name){
		$this->channel = $channel_name;
		$this->hasChannel = true;
	}
	/*
	 * @brief 获取通讯管道名称
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/23 17:31:20
	 *
	 */
	public function getChannel(){
		$this->hasChannel = false;
		return $this->channel;
	}
	/*
	 * @brief 是否已设置通讯管道
	 *
	 * @return bool
	 * @author songhuiqing
	 * @date 2013/1/23 17:32:20
	 *
	 */
	public function isHasChannel(){
		return $this->hasChannel;
	}
}
?>
