<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file Ral.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 09:32:51
 * @brief  使用protobuf进行序列化与反序列化，使用ral(nshead+string)进行网络通信
 *  
 **/
class Protobuf_Ral {
    private $_serviceName;

    /**
     * @brief  发送protobuf message到服务器
     * @return responseMessage
     * @author mixianghang
     * @date 2015/02/10 10:13:26
    **/
    public function sendSingleMessage($message){
        $result = new Protobuf_RalReuslt();
        //是否是protobufMessage类型的请求数据
        if( !( $message instanceof ProtobufMessage ) ) {
            $errCode = Protobuf_ErrMap::CODE_INVALID_REQ_MSG;
            $errMsg  = Protobuf_ErrMap::getErrMsg($errCode);
            $result->setErrCode($errCode);
            $result->setErrMsg($errMsg);
            return $result;
        }
        //对message进行序列化
        try{
            $msgStr = $message->serializeToString();
        }catch(Exception $e){
            $errCode = Protobuf_ErrMap::CODE_SERIALIZE_ERR;
            $errMsg  = Protobuf_ErrMap::getErrMsg($errCode);
            $result->setErrCode($errCode);
            $result->setErrMsg($errMsg);
            return $result;
        }
        //组装rpc数据
    }
}

/* vim: set ts=4 sw=4 sts=4 tw=100 */
