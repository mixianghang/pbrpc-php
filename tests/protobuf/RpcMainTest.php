<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file RpcTest.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/11 13:57:54
 * @brief 
 *  
 **/
require_once('../echo.php');
require_once('../../src/aotoload.php');
$rpcTest = new RpcTest();
$testData = $rpcTest->rpcTestData();
if( is_array($testData) && ( !empty($testData) ) ) {
    foreach($testData as $testItem) {
        list($requestStr,$serviceName,$methodId) = $testItem;
        $rpcTest->testRpcEncode($requestStr,$serviceName,$methodId);
    }
}
class RpcTest{
    
    /**
     * @brief 
     * @return  
     * @author mixianghang
     * @date 2015/02/11 14:20:02
     * @dataProvider rpcData
    **/
    public function testRpcEncode($requestStr,$serviceName,$methodId){
        //$echoReq = new EchoRequest();
        //$echoReq->parseFromString($requestStr);
        $rpc = new Protobuf_Rpc($requestStr,$serviceName,$methodId);
        $requestData = $rpc->encode();
        $rpcRequest = new Protobuf_Rpc_Request();
        $rpcRequest->parseFromString($requestData);
        $rpcRequestBody = $rpcRequest->getRequestBodyAt(0);
        if( $requestStr != $rpcRequestBody->getSerializedRequest() ) {
            echo 'wrong 1';
            return;
        }
        if( $serviceName != $rpcRequestBody->getService() ) {
            echo 'wrong2';
            return ;
        }
        if( $methodId != $rpcRequestBody->getMethodId()) {
            echo 'wrong3';
            return ;
        }
        echo 'success';

    }
    
    /**
     * @brief 
     * @return  
     * @author mixianghang
     * @date 2015/02/11 14:30:54
    **/
    public function rpcTestData() {
        $echoReq1 = new EchoRequest();
        $echoReq1->setMessage('echoReq1');
        return array(
            array(
                $echoReq1->serializeToString(),
                'echoSerice',
                '123',
            ),
        );
    }
}

/* vim: set ts=4 sw=4 sts=4 tw=100 */
