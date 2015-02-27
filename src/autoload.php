<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file aotoload.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 11:24:53
 * @brief 
 *  
 **/
$dirName = dirname(__DIR__);
$includedPath = get_include_path();
$includedPath .= PATH_SEPARATOR.$includedPath;
set_include_path($includedPath);
require_once('protobuf/Ral.php');
require_once('protobuf/RalResult.php');
require_once('protobuf/ErrMap.php');
require_once('protobuf/Rpc.php');
require_once('protobuf/RpcChannel.php');
require_once('protobuf/rpc/RequestHead.php');
require_once('protobuf/rpc/RequestBody.php');
require_once('protobuf/rpc/Request.php');
require_once('protobuf/rpc/Response.php');
require_once('protobuf/rpc/ResponseHead.php');
require_once('protobuf/rpc/ResponseBody.php');

/* vim: set ts=4 sw=4 sts=4 tw=100 */
