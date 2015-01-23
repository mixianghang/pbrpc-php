<?php
/***************************************************************************
 * 
 * Copyright (c) 2013 Baidu.com, Inc. All Rights Reserved
 * RpcController.php 2013/1/16 16:40:23 songhuiqing Exp 
 * 
 **************************************************************************/



/**
 * @file RpcController.php
 * @author songhuiqing(songhuiqing@baidu.com)
 * @date 2013/01/16 16:40:23
 * @version 1.0.0 
 * @brief 请求上下文
 *  
 **/

class RpcController{
	private $channel_name;                 //管道名称
	private $log_id;                       //日志id
	private $method;                       //请求方法名
	private $method_id;                    //请求方法id
	private $error_code;                   //错误码
	private $error_text;                   //错误信息
	private $service_name;                 //服务名称
	private $isFailed;                     //失败状态标识
	
	/*
	 * @brief 构造函数
	 *
	 * @author songhuiqing
	 * @date 2013/1/25 11:50:20
	 *
	 */
	function __construct(){
        $this->isFailed = false;
        $this->log_id = 0;
        $this->channel_name = "";
        $this->method_id = 0;
        $this->error_code = 0;
        $this->error_text = "";
        $this->service_name = "";
	}
	/*
	 * @brief 设置服务名称
	 *
	 * @param [in] $service_name : string
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/16 16:22:20
	 *
	 */
	public function setServiceName($service_name){
		$this->service_name = $service_name;
	}
	/*
	 * @brief 获取服务名称
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/16 16:23:20
	 *
	 */
	public function getServiceName(){
		return $this->service_name;
	}
	/*
	 * @brief 设置管道名称
	 *
	 * @param [in] $channel_name : string
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/16 16:24:10
	 *
	 */
	public function setChannel($channel_name){
		$this->channel_name = $channel_name;
	} 
	/*
	 * @brief 获取管道名称
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/16 16:24:50
	 *
	 */
	public function getChannel(){
		return $this->channel_name;
	}
	/*
	 * @brief 设置日志id
	 *
	 * @param [in] $log_id : integer
	 * @return void 
	 * @author songhuiqing
	 * @date 2013/1/16 16:25:10
	 *
	 */
	public function setLogid($log_id){
		return $this->log_id = $log_id;
	}
	/*
	 * @brief 获取日志id
	 *
	 * @return int
	 * @author songhuiqing
	 * @date 2013/1/16 16:26:20
	 *
	 */
	public function getLogid(){
		return $this->log_id;
	}
	/*
	 * @brief 设置方法名称
	 *
	 * @param [in] $method : string
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/16 16:27:10
	 *
	 */
	public function setMethod($method){
		$this->method = $method;
	}
	/*
	 * @brief 获取方法名称
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/16 16:28:10
	 *
	 */
	public function getMethod(){
		return $this->method;
	}
	/*
	 * @brief 设置方法id
	 *
	 * @param [in] $method_id : int
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/16 16:29:20
	 *
	 */ 
	public function setMethodId($method_id){
		$this->method_id = $method_id;
	}
	/*
	 * @brief 获取方法id
	 *
	 * @return int
	 * @author songhuiqing
	 * @date 2013/1/16 16:29:40
	 *
	 */
	public function getMethodId(){
		return $this->method_id;
	}
	/*
	 * @brief 设置错误码
	 *
	 * @param [in] $error_code : int
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/16 16:30:10
	 *
	 */
	public function setErrorCode($error_code){
		$this->error_code = $error_code;
	}
	/*
	 * @brief 获取错误码
	 *
	 * @return int
	 * @author songhuiqing
	 * @date 2013/1/16 16:31:20
	 *
	 */
	public function getErrorCode(){
		return $this->error_code;
	}
	/*
	 * @brief 设置错误信息
	 *
	 * @param [in] $error_text : string
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/16 16:32:20
	 *
	 */
	public function setErrorText($error_text){
		$this->error_text = $error_text;
	}
	/*
	 * @brief 获取错误信息
	 *
	 * @return string
	 * @author songhuiqing
	 * @date 2013/1/16 16:33:20
	 *
	 */
	public function getErrorText(){
		return $this->error_text;
	}
	/*
	 * @brief 设置失败标识
	 *
	 * @param [in] $fail : bool
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/23 17:36:20
	 *
	 */
	public function setFailed($fail){
		$this->isFailed = $fail;
	}
	/*
	 * @brief 是否失败标识
	 *
	 * @return true | false
	 * @author songhuiqing
	 * @date 2013/1/23 17:37:50
	 *
	 */
	public function Fail(){
		return $this->isFailed;
	}
	/*
	 * @brief 重置controller
	 *
	 * @return void
	 * @author songhuiqing
	 * @date 2013/1/29 14:45:20
	 *
	 */
	public function reset(){
		$this->channel_name = "";
		$this->log_id = 0;
		$this->method = "";
		$this->method_id = 0;
		$this->error_code = 0;
		$this->error_text = "";
		$this->service_name = "";
		$this->isFailed = false;
	}
}
?>
