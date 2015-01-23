<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * Protocol.php 2014/01/27 11:44:00 songhuiqing Exp
 * 
 **************************************************************************/
 
 
 
/**
 * @file Protocol.php
 * @author songhuiqing(songhuiqing@baidu.com)
 * @date 2014/01/27 11:44:00
 * @version 1.0.0
 * @brief 协议类接口  
 *  
 **/

interface Protocol {
    public function encode($rpcRequest,&$controller);
    public function decode($rpcResponse,&$controller);
}

?>

