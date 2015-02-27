<?php
/***************************************************************************
 * 
 * Copyright (c) 2009 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/

/**
 * @file Connection.class.php
 * @author niuzp(niuzhangpeng@baidu.com)
 * @brief 
 *  
 **/

/*
 * @brief: 连接抽象类
 *
 */
abstract class Connection
{
    protected $_curConnection = '';
    protected $_server = array();

    /**
     * @brief 抽象连接方法, 由子类继承实现。
     *
     * @param [in] server   : 被连接机器信息
     * @param [in] intTimeout   : 超时时间，单位ms
     * @param [in] arrAuth   :  某些连接可能用到授权信息
     * @return
     * @retval
     * @see 
     * @note 
     * @author niuzhangpeng
     * @date 2009/08/29 17:15:52
     **/ 
    abstract function connect($server, $intTimeout, $arrAuth);
}
?>
