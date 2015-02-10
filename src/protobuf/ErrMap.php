<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file ErrMap.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 10:47:40
 * @brief 
 *  
 **/
class Protobuf_ErrMap {
    const CODE_SUCCESS = 10000;
    const CODE_INVALID_REQ_MSG = 10001;
    const CODE_SERIALIZE_ERR   = 10002;
    const CODE_UNSERIALIZE_ERR = 10003;
    const CODE_RAL_ERR         = 10004;
    const CODE_SERVER_ERR      = 10005;
    static private $_msgArray = array(
        self::CODE_SUCCESS         => '成功',
        self::CODE_INVALID_REQ_MSG => '错误的请求信息',
        self::CODE_SERIALIZE_ERR   => '序列化失败',
        self::CODE_UNSERIALIZE_ERR => '反序列化失败',
        self::CODE_RAL_ERR         => 'ral调用失败',
        self::CODE_SERVER_ERR      => '服务器返回错误',
    );
    public static function getErrMsg($errCode) {
        if( array_key_exists($errCode,self::$_msgArray) ) {
            return self::$_msgArray[$errCode];
        } else {
            return false;
        }
    }
}
/* vim: set ts=4 sw=4 sts=4 tw=100 */
