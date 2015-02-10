<?php
$includedPath = get_include_path();
$includedPath .= PATH_SEPARATOR.'/home/users/mixianghang/pbrpc/php5.2/pbrpc-client/src';
$includedPath .= PATH_SEPARATOR.'/home/users/mixianghang/pbrpc/php5.2/pbrpc-client/bin/protobuf_php5.2_lib/message';
set_include_path($includedPath);
require_once 'php5.2/RpcChannel.php';
require_once 'RpcController.php';
require_once 'echo.php';

class TestRpcChannel extends PHPUnit_Framework_TestCase {

    private $conf;
    private $channel;


    public function setUp(){

        $this->conf = array( 
            "EchoService" => array (
                "connect_timeout_ms" => 1000,
                "read_timeout_ms" => 1000,
                "write_timeout_ms" => 1000,
                "retry" => 3,
                "server" => array(
                    array (
                        'host' => 'cp01-rdqa-dev399.cp01.baidu.com',
                        'port' =>  10080,
                    ),
                ),
            ),
        );
        $this->channel = new RpcChannel($this->conf);
    }

    public function tearDown(){
        $this->conf = null;
        $this->channel = null;
    }
	public function testInnerMessage(){
		$this->channel->setChannel('EchoService');
		$request = new EchoRequest();
		$response = new EchoResponse();
		$innerMessage = new InnerMessage();
		$innerMessage -> set_name('糜相行');
		$innerMessage -> set_birthdate('1990-11-13');
		$innerMessage -> set_email('mixianghang@baidu.com');
		$innerMessage -> set_phone('15810663067');
		$message = $innerMessage -> SerializeToString();
		$request -> set_message($message);
        $controller = new RpcController();
        $controller->setServiceName("EchoService");
        $controller->setMethodId(0);
		$this->channel -> CallMethod($controller,$request,$response,null);
        if($controller->Fail()){
            echo $controller->getErrorCode();
            echo $controller->getErrorText();
        }
		$resultMessage = $response->message();
		$resultInnerMessage = new InnerMessage();
		$resultInnerMessage -> ParseFromString($resultMessage);
		print_r($resultInnerMessage->name());
		$this->assertEquals($resultInnerMessage->phone(),'15810663067');
	}

    public function baktestCallMethod(){
        $this->channel->setChannel("EchoService");
        $request = new EchoRequest();
        $response = new EchoResponse();
        $controller = new RpcController();
        $controller->setServiceName("EchoService");
        $controller->setMethodId(0);
        //$closure = new RpcClosure("EchoService");
        $request->set_message('nihaoshijie');
        $this->channel->CallMethod($controller,$request,$response,null);
        if($controller->Fail()){
            echo $controller->getErrorCode();
            echo $controller->getErrorText();
        }
        
        //$re = intval($response->result());
        //echo $re;
        echo $response->message();
        $this->assertEquals($response->message(),"helloworld");
    }
 
    public function baktestPerfCallMethod(){
        $this->channel->setChannel("EchoService");
        $i = 0;
        while($i <= 1) {
            $request = new EchoRequest();
            $response = new EchoResponse();
            $controller = new RpcController();
            $controller->setServiceName("EchoService");
            $controller->setMethodId(0);
            //$closure = new RpcClosure("EchoService");
            $person = new person();
            $person->set_name("shqsdf");
            $request->set_s1("shq");
            $request->set_i3(12931);
            $request->set_i4(1827438273);
            $request->set_b13(false);
            $request->set_s14("hello world");
            $request->set_b15($person->SerializeToString());
            $request->set_rs16(0,"fdfd");
            $request->set_rs16(1,"dkdkdkd");
            $request->set_p17($person);

            $this->channel->CallMethod($controller,$request,$response,null);

            if($controller->Fail()){
                echo $controller->getErrorCode();
                echo $controller->getErrorText();
            }
            echo $response->response();

            $request = NULL;
            $response = NULL;
            $controller = NULL;
            $i++;
        }
    }
    public function testCallMethodParamIsNull() {
        $this->channel->setChannel("EchoService");
        $controller = new RpcController();
        $response = null;
        $this->channel->CallMethod($controller,NULL,$response,NULL);
        $this->assertEquals($controller->getErrorCode(),RpcErrorno::PBRPC_RET_PARAM);	
    }

    public function baktestCallMethodWithRequestIsError(){
        $this->channel->setChannel("EchoService");
        $request = new EchoRequest();
        $response = new EchoResponse();
        $controller = new RpcController();
        $controller->setServiceName("EchoService");
        $controller->setMethodId(0);
        //$closure = new RpcClosure("EchoService");
        $person = new person();
        $person->set_name("shqsdf");
        $request->set_b15($person->SerializeToString());
        $request->set_rs16(0,"fdfd");
        $request->set_rs16(1,"dkdkdkd");
        $request->set_p17($person);
        $this->channel->CallMethod($controller,$request,$response,null);
        $this->assertEquals(-15,$controller->getErrorCode());

    }
}

?>
