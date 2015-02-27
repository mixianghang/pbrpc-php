<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * PbProtocol.php 2015/02/27 14:56:11 mixianghang
 * 
 **************************************************************************/



/**
 * @file PbProtocol.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/27 14:56:11
 * @version 1.0.0
 * @brief 协议层
 *  
 **/

require_once(dirname(__FILE__).'/../RpcErrorno.php');
class PbProtocol {
	//private $_transport;                    //传输层
	private $charset;                       //字符集
	private $accept_charset;                //可接受的字符集
	private $version;                       //版本号
	private $id;                            //请求的唯一标识
	private $contentType;                   //消息类型
	private $errorHandler;					//错误处理
	private $connectionType;                //连接类型
	/*
	 * @brief 构造函数
	 *
	 * @param [in] $transport : class Transport
	 *
	 */
	function __construct($transport = null){
		//$this->_transport = $transport;
		$this->charset = "uft-8";
		$this->accept_charset = "utf-8";
		$this->version = "1.0.0";
		$this->contentType = "html/text";
		$this->errorHandler = new RpcErrorno();
		$this->connectionType = true;
    }
    /*
	 * @brief 序列化rpc协议
	 *
	 * @param [in] $request : class Message
	 * @param [in] $response : class Message
	 * @param $controller : class RpcController
	 * @return buffer
	 *
	 */
    public function encode($request,&$controller) {
        $rpcRequest = new Protobuf_Rpc_Request();
		$requestHead = new Protobuf_Rpc_RequestHead();
		$requestHead->setFromHost($this->getLocalIp());
		$requestHead->setContentType($this->getContentType());
		$requestHead->setConnection($this->getConnectionType());
		$requestHead->setCharset($this->getCharset());
		$requestHead->setAcceptCharset($this->getAcceptCharset());
		$requestHead->setCreateTime($this->getLocalTime());
		$requestHead->setLogId($controller->getLogId());
		$requestBody = new Protobuf_Rpc_RequestBody();
		$requestBody->setVersion($this->getVersion());
		$requestBody->setCharset($this->getCharset());
		$requestBody->setService($controller->getServiceName());
		$requestBody->setMethodId($controller->getMethodId());
		$requestBody->setId($this->genid());
        $requestStr = $request->serializeToString();
		$requestBody->setSerializedRequest($requestStr);
		$rpcRequest->setRequestHead($requestHead);
		$rpcRequest->appendRequestBody($requestBody);
        $requestData = $rpcRequest->serializeToString();
        return $requestData;
    }
    public function decode($responseData,&$controller) {

        $rpcResponse = new Protobuf_Rpc_Response();
        try{
            $rpcResponse->parseFromString($responseData);
        }catch(Exception $e) {
            $controller->setFailed(true);
        	$controller->setErrorCode(RpcErrorno::PBRPC_RET_DESERIALIZE);
		    $controller->setErrorText($e->getMessage());
		  
            return null;
        }
        
        $responseHead = $rpcResponse->getResponseHead();
        
        if($responseHead->getCode() != 0){
            $controller->setFailed(true);
            $controller->setErrorCode($responseHead->getCode());
		    $controller->setErrorText($responseHead->getText());
			return null;
        }
        $responseBody = $rpcResponse->getResponseBodyAt(0);
		if($this->id != $responseBody->getId()){
			$controller->setFailed(true);
			$controller->setErrorCode(RpcErrorno::PBRPC_RET_IDNOTMATCH);
			$controller->setErrorText($this->errorHandler->getErrorText($controller->getErrorCode()));
			return null;
        }
        return $responseBody->getSerializedResponse();
    }
	/*
	 * @brief 获取本地ip
	 * @return string
	 *
	 */
	public function getLocalIp(){
		exec('/sbin/ifconfig',$ipstr);
		$ipstr_chunk1 = explode(":",$ipstr[1]);
		$ipstr_chunk2 = explode(" ",$ipstr_chunk1[1]);
		return $ipstr_chunk2[0];
	}
	/*
	 * @brief 获取本地时间
	 * @return string
	 *
	 */
	public function getLocalTime(){
		date_default_timezone_set('Asia/Shanghai');
		return date('Y-m-d H:i:s',time());
	}
	/*
	 * @brief 设置字符集
	 * @param [in] $charset : string
	 * @return void
	 *
	 */
	public function setCharset($charset){
		$this->charset = $charset;
	}
	/*
	 * @brief 获取字符集
	 * @return string
	 *
	 */
	public function getCharset(){
		return $this->charset;
	}
	/*
	 * @brief 设置可以接受的字符集
	 *
	 * @param [in] $accept_charset : string
	 * @return void
	 *
	 */
	public function setAcceptCharset($accept_charset){
		$this->accept_charset = $accept_charset;
	}
	/*
	 * @brief 获取可接受的字符集
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/25 11:11:10
	 *
	 */
	public function getAcceptCharset(){
		return $this->accept_charset;
	}
	/*
	 * @brief 设置版本号
	 *
	 * @param [in] $version : string
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/25 11:12:10
	 *
	 */
	public function setVersion($version){
		$this->version = $version;
	}
	/*
	 * @brief 获取版本号
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/25 11:13:20
	 *
	 */
	public function getVersion(){
		return $this->version;
	}
	/*
	 * @brief 生成请求的唯一标识
	 *
	 * @return integer
	 * @author songhuiqing
	 * @date 2013/1/25 11:13:50
	 *
	 */
	public function genid(){
		return ++$this->id;
	}
	/*
	 * @brief 设置消息类型
	 *
	 * @param [in] $contentType : string
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/25 11:31:20
	 *
	 */
	public function setContentType($contentType){
		$this->contentType = $contentType;
	}
	/*
	 * @brief 获取消息类型
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/25 11:32:20
	 *
	 */
	public function getContentType(){
		return $this->contentType;
	}
	/*
	 * @brief 设置连接类型
	 *
	 * @param [in] $connectionType : bool
	 * @author songhuiqing
	 * @date 2013/07/17 17:32:30
	 *
	 */
	public function setConnectionType($connectionType){
		$this->connectionType = $connectionType;
	}
	/*
	 * @brief 获取连接类型
	 *
	 * @return bool
	 * @author songhuiqing
	 * @date 2013/07/17 17:34:20
	 *
	 */
	public function getConnectionType(){
		return $this->connectionType;
	}
}
?>
