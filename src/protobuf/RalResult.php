<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file RalResult.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 10:26:27
 * @brief  protobuf ral请求的结果
 *  
 **/
class Protobuf_RalResult {

    private $_errCode;
    private $_errMsg;
    private $_data;

    public function setErrCode($errCode) {
        $this->_errCode = $errCode;
    }
    
    public function setErrMsg($errMsg) {
        $this->_errMsg = $errMsg;
    }

    public function setData($data) {
        $this->_data = $data;
    }

    public function getErrCode() {
        return $this->_errCode;
    }

    public function getErrMsg() {
        return $this->_errMsg;
    }

    public function getData() {
        return $this->_data;
    }
}

/* vim: set ts=4 sw=4 sts=4 tw=100 */
