<?php
/***************************************************************************
 * 
 * Copyright (c) 2013 Baidu.com, Inc. All Rights Reserved
 * RpcClosure.php 2013/1/17 13:37:37 songhuiqing Exp 
 * 
 **************************************************************************/
 
 
 
/**
 * @file RpcClosure.php
 * @author songhuiqing(songhuiqing@baidu.com)
 * @date 2013/01/17 13:37:37
 * @version 1.0.0 
 * @brief 回调函数类
 *  
 **/

class RpcClosure{
	private $class;             //类名
	private $done;              //方法名
	private $isAClassMethod;    //是否是类方法
	private $isAMethod;         //是否是类外方法
	/*
	 * @brief 构造函数
	 *
	 * @param [in] $class : string
	 * @param [in] $done : string
	 * @author songhuiqing
	 * @date 2013/1/17 13:37:50
	 *
	 */
	function __constructor($class,$done){
		$this->class = $class;
		$this->done = $done;
		if($this->class === ""){
			$this->isAMethod = true;
		}
		$this->isAClassMethod = true;
	}
	/*
	 * @brief 方法执行
	 *
	 * @exception Exception 构造方法出现错误
	 * @author songhuiqing
	 * @date 2013/1/17 13:38:20
	 *
	 */
	public function Run(){
		if($this->isAMethod){
			call_user_func($this->done);
		}else if($this->isAClassMethod){
			call_user_func($this->class,$this->done);
		}else{
			throw new Exception("contruct rpcClosure is error");
		}
	}
}
?>
