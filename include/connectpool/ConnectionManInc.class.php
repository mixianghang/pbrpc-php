<?php
/***************************************************************************
 * 
 * Copyright (c) 2009 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/

/**
 * @file ConnectionManInc.class.php
 * @author niuzp(niuzhangpeng@baidu.com)
 * @brief 
 *  
 **/

/*
 * @brief: 常量定义
 *
 */
class ConnectionManInc
{
    const CONNECTION_TYPE_SOCKET = "Socket";
    const CONNECTION_TYPE_MYSQLI = "Mysqli";

    const CONNECTION_CLASS_PREFIX = "Connection";
    const STRATEGY_CLASS_PREFIX = "Strategy";

    const DEFAULT_STRATEGY = "Simple";

    const ERR_EMPTY_SERVER = -1;          /**< 传出机器列表为空       */
    const ERR_NO_STRATEGY = -2;           /**< 策略类错误       */
    const ERR_NO_CONNECTION = -3;         /**< 连接类错误       */
    const ERR_ALL_FAILED = -4;            /**< 所有机器连接均失败       */
}

?>
