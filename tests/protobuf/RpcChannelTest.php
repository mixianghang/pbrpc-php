<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file RpcChannelTest.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/27 16:23:18
 * @brief 
 *  
 **/
require_once('../echo.php');
require_once('../../src/autoload.php');
$rpcChannelTest = new RpcChannelTest();
$testData = $rpcChannelTest->rpcChannelData();
if( is_array($testData) && ( !empty($testData) ) ) {
    foreach($testData as $testItem) {
        list($rpcChannel,$message,$serviceName) = $testItem;
        $rpcChannelTest->testRpcChannel($rpcChannel,$message,$serviceName);
    }
}
class RpcChannelTest {
    public function testRpcChannel($rpcChannel,$message,$serviceName){
        $controller = new RpcController();
        $controller->setServiceName($serviceName);
        $controller->setMethodId(0);
        $echoResponse = new EchoResponse();
        var_dump($message);
        $rpcChannel->callMethod($controller,$message,$echoResponse);
        if($controller->Fail()){
            echo $controller->getErrorCode();
            echo $controller->getErrorText();
        } else {
            var_dump($message);
            var_dump($echoResponse);
            if( $message->getMessage() != $echoResponse->getMessage() ) {
                echo 'wrong';
            } else {
                echo $echoResponse->getMessage();
            }
        }
    }
    public function rpcChannelData() {
        $echoReq1 = new EchoRequest();
        $echoReq1->setMessage('echoReq1');
        $config = array( 
            "EchoService" => array (
                "connect_timeout_ms" => 1000,
                "read_timeout_ms" => 1000,
                "write_timeout_ms" => 1000,
                "retry" => 3,
                "server" => array(
                    array (
                        'host' => '127.0.0.1',
                        'port' =>  8894,
                    ),
                ),
            ),
        );
        $rpcChannel = new RpcChannel($config);
        return array(
            array(
                $rpcChannel,
                $echoReq1,
                'EchoService',
            ),
        );
    }
}


/* vim: set ts=4 sw=4 sts=4 tw=100 */
