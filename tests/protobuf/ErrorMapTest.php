<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file ErrorMapTest.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 15:19:40
 * @brief 
 *  
 **/
class ErrorMapTest extends PHPUnit_Framework_TestCase{
    public function testErrMap(){
        $validErrorCode = 10001;
        $invalidErrorCode = 1001;
        $validResult = true;
        $invalidResult = false;
        $this->assertNotEquals($validResult,Protobuf_ErrMap::getErrMsg($validErrorCode));
        $this->assertEquals($invalidResult,Protobuf_ErrMap::getErrMsg($invalidErrorCode));
    }
}

/* vim: set ts=4 sw=4 sts=4 tw=100 */
