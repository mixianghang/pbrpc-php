<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * Transport.php 2013/01/27 12:55:09 songhuiqing Exp
 * 
 **************************************************************************/
 
 
 
/**
 * @file Transport.php
 * @author songhuiqing(songhuiqing@baidu.com)
 * @date 2014/01/27 12:55:09
 * @version 1.0.0
 * @brief 网络通讯层接口类
 *  
 **/
interface Transport {
    public function talk($request,&$response,&$controller);
}

?>
