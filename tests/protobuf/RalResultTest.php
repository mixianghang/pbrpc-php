<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file RalResultTest.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 13:43:10
 * @brief 
 *  
 **/
class RalResultTest extends PHPUnit_Framework_TestCase{

    /**
     * @dataProvider ralResultData
     */
    public function testGetSet($errCode,$errMsg,$data) {
        $ralResult = new Protobuf_RalResult();
        $ralResult->setErrCode($errCode);
        $ralResult->setErrMsg($errMsg);
        $ralResult->setData($data);
        $this->assertEquals($errCode,$ralResult->getErrCode(),'errcode not equal');
        $this->assertEquals($errMsg,$ralResult->getErrMsg(),'errmsg not equal');
        $this->assertEquals($data,$ralResult->getData(),'data not equal');
    }
    public function ralResultData(){
        return array(
            array(
                101,
                'welcome to this world!',
                'thank you very much',
            ),
            array(
                102,
                'thanks very much',
                'this is the best part of the world',
            ),
        );
    }
}
/* vim: set ts=4 sw=4 sts=4 tw=100 */
