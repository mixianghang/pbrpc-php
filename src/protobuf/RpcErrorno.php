<?php
/***************************************************************************
 * 
 * Copyright (c) 2013 Baidu.com, Inc. All Rights Reserved
 * RpcErrorno.php 2013/01/25 09:16:03 songhuiqing Exp  
 * 
 **************************************************************************/
 
 
 
/**
 * @file RpcErrorno.php
 * @author songhuiqing(songhuiqing@baidu.com)
 * @date 2013/01/25 09:16:03
 * @version 1.0.0 
 * @brief 
 *  
 **/

class RpcErrorno{
	const PBRPC_RET_SUCCESS = 0;
	const PBRPC_RET_PARAM = -1;
	const PBRPC_RET_BODYLEN = -2;
	const PBRPC_RET_WRITE = -3;
	const PBRPC_RET_READ = -4;
    const PBRPC_RET_PEARCLOSE = -5;
	const PBRPC_RET_TIMEOUT = -6;
	const PBRPC_RET_SERIALIZE = -7;
	const PBRPC_RET_DESERIALIZE = -8;
	const PBRPC_RET_IDNOTMATCH = -9;
	const PBRPC_RET_UNKNOWN = -10;
    const PBRPC_RET_NOFOUNDMATCH = -11;
    const PBRPC_RET_UNCOMPRESSERROR = -12;
    const PBRPC_RET_SERVICEERROR = -13;
    const PBRPC_RET_SRV_PARAM = -14;
    const PBRPC_RET_SRV_DESERIALIZE = -15;
    const PBRPC_RET_SRV_UNKNOWN = -16;
	private $errorSet = array(
		 0  => "success",
		-1  => "bad parameter",
		-2  => "body len is not correct",
		-3  => "write message is error",
		-4  => "read message is error",
		-5  => "pear is closed",
		-6  => "write or read is timeout",
		-7  => "serialize message is error",
		-8  => "deserialize message is error",
		-9  => "request and response id is not match",
		-10 => "unknown error",
        -11 => "no available machine",
        -12 => "uncompress is error",
        -13 => "pbrpc service is error",
        -14 => "server param is error",
        -15 => "server deserialize fail",
        -16 => "server unsupported operation"
	);
	public function getErrorText($err_no){
		return $this->errorSet[$err_no];
	}
}
?>
