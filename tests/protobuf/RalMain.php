<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file RalMain.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/11 18:33:31
 * @brief 
 *  
 **/
require_once('../echo.php');
require_once('../../src/aotoload.php');
$ralMain = new RalMain();
$testData = $ralMain->ralData();
if( is_array($testData) && ( !empty($testData) ) ) {
    foreach($testData as $testItem) {
        list($message,$serviceName) = $testItem;
        $ralMain->testRal($message,$serviceName);
    }
}
class RalMain {
    public function testRal($message,$serviceName){
        $ral = new Protobuf_Ral();
        $result = $ral->sendSingleMessage($message,$serviceName);
        if ( !( $result instanceof Protobuf_RalResult ) || $result->getErrCode() != Protobuf_ErrMap::CODE_SUCCESS ) {
            echo 'test wrong1';
            var_dump($result);
        } else {
            $responseData = $result->getData();
            $echoResponse = new EchoResponse();
            $echoResponse->parseFromString($responseData);
            if( $message->getMessage() != $echoResponse->getMessage() ) {
                echo 'test wrong2';
                var_dump($echoResponse);
            } else {
                echo 'success';
            }
        }
    }
    public function ralData() {
        $echoReq1 = new EchoRequest();
        $echoReq1->setMessage('echoReq1');
        return array(
            array(
                $echoReq1,
                'EchoService',
            ),
        );
    }
}

/* vim: set ts=4 sw=4 sts=4 tw=100 */

