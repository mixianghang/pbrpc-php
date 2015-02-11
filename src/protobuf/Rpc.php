<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file Rpc.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 17:06:28
 * @brief PRC message的encode与decode
 *  
 **/

class Protobuf_Rpc {
	private $charset         = 'utf-8';     //字符集
	private $accept_charset  = 'utf-8';     //可接受的字符集
	private $version         = '1.0.0';     //版本号
	private $id;                            //请求的唯一标识
	private $contentType     = 'html/text';  //消息类型
	private $connectionType  = true;        //连接类型
    private $serviceName;                   //serviceName
    private $methodId;                      //methodId
    private $requestStr;

    public function __construct($requestStr, $serviceName, $methodId) {
        $this->requestStr  = $requestStr;
        $this->serviceName = $serviceName;
        $this->methodId    = $methodId;
    }

    /**
     * @brief 
     * @return  
     * @author mixianghang
     * @date 2015/02/10 17:27:34
    **/
    public function encode() {
        $rpcRequest = new Protobuf_Rpc_Request();
		$requestHead = new Protobuf_Rpc_RequestHead();
		$requestHead->setFromHost($this->getLocalIp());
		$requestHead->setContentType($this->getContentType());
		$requestHead->setConnection($this->getConnectionType());
		$requestHead->setCharset($this->getCharset());
		$requestHead->setAcceptCharset($this->getAcceptCharset());
		$requestHead->setCreateTime($this->getLocalTime());
		//$requestHead->setLogId($controller->getLogId());
		$requestBody = new Protobuf_Rpc_RequestBody();
		$requestBody->setVersion($this->getVersion());
		$requestBody->setCharset($this->getCharset());
		$requestBody->setService($this->getServiceName());
		$requestBody->setMethodId($this->getMethodId());
		$requestBody->setId($this->genid());
		$requestBody->setSerializedRequest($this->getRequestStr());
		$rpcRequest->setRequestHead($requestHead);
		$rpcRequest->appendRequestBody($requestBody);

        $requestData = $rpcRequest->serializeToString();
	
        return $requestData;
    }
    public function decode($responseData) {

        $rpcResponse = new Protobuf_Rpc_Response();
        try{
            $rpcResponse->parseFromString($responseData);
        }catch(Exception $e) {
            return null;
        }
        
        $responseHead = $rpcResponse->getResponseHead();
        
        if($responseHead->getCode() != 0){
			return null;
        }
        $responseBody = $rpcResponse->getResponseBodyAt(0);
		if($this->id != $responseBody->id()){
			return null;
        }
        return $responseBody->getSerializedResponse();
    }
	/*
	 * @brief 获取本地ip
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/25 11:27:30
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
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/25 11:27:50
	 *
	 */
	public function getLocalTime(){
		date_default_timezone_set('Asia/Shanghai');
		return date('Y-m-d H:i:s',time());
	}
	/*
	 * @brief 设置字符集
	 *
	 * @param [in] $charset : string
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/25 11:09:10
	 *
	 */
	public function setCharset($charset){
		$this->charset = $charset;
	}
	/*
	 * @brief 获取字符集
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/25 11:10:20
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
	 * @author songhuiqing
	 * @date 2013/1/25 11:10:50
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

    /**
     * @brief 设置service名称
     * @return  
     * @author mixianghang
     * @date 2015/02/11 10:16:34
    **/
    public function setServiceName($serviceName) {
        $this->serviceName = $serviceName;
    }

    /**
     * @brief 获取service名称
     * @return string 
     * @author mixianghang
     * @date 2015/02/11 10:19:59
    **/
    public function getServiceName() {
        return $this->serviceName;
    }

    /**
     * @brief 设置methodId
     * @return  
     * @author mixianghang
     * @date 2015/02/11 10:16:34
    **/
    public function setMethodId($methodId) {
        $this->methodId = $methodId;
    }

    /**
     * @brief 获取method id
     * @return string 
     * @author mixianghang
     * @date 2015/02/11 10:19:59
    **/
    public function getMethodId() {
        return $this->methodId;
    }
    
    /**
     * @brief 设置请求字符串
     * @return  
     * @author mixianghang
     * @date 2015/02/11 10:48:15
    **/
    public function setRequestStr($requestStr) {
        $this->requestStr = $requestStr;
    }
    
    /**
     * @brief 获取请求字符串
     * @return string 
     * @author mixianghang
     * @date 2015/02/11 10:48:44
    **/
    public function getRequestStr() {
        return $this->requestStr;
    }
}
/* vim: set ts=4 sw=4 sts=4 tw=100 */
