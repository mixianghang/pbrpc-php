<?php
/***************************************************************************
 * 
 * Copyright (c) 2009 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/

/**
 * @file ConnectionSocket.class.php
 * @author niuzp(niuzhangpeng@baidu.com)
 * @brief 
 *  
 **/

/*
 * @brief: socket连接类,需要实现connect方法。
 *
 */
class ConnectionSocket extends Connection
{
    /**
     * @brief 实现Connection类的连接方法，进行socket实际连接。
     *
     * @param [in] server   : 被连接机器信息
     * @param [in] intTimeout   : 超时时间，单位ms。
     * @param [in] arrAuth   :  某些连接可能用到授权信息
     * @return
     * @retval
     * @see 
     * @note 
     * @author niuzhangpeng
     * @date 2009/08/29 17:15:52
     **/ 
    function connect($server, $intTimeout, $arrAuth)
    {
        $host = $server['host'];
        $port = $server['port'];
        $floatTimeoutSec = (float)($intTimeout / 1000.0);
        $socket = @fsockopen ($host,$port,$intErrno,$strError,$floatTimeoutSec);
        if(is_resource($socket) === false)
        {
            return false;
        }
        return $socket;
    }
}
?>
