<?php
require_once('pb_message.php');
class RequestHead extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBString";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBBool";
    $this->values["3"] = "";
    $this->fields["4"] = "PBString";
    $this->values["4"] = "";
    $this->fields["5"] = "PBString";
    $this->values["5"] = "";
    $this->fields["6"] = "PBString";
    $this->values["6"] = "";
    $this->fields["7"] = "PBInt";
    $this->values["7"] = "";
    $this->fields["8"] = "PBInt";
    $this->values["8"] = "";
  }
  function from_host()
  {
    return $this->_get_value("1");
  }
  function set_from_host($value)
  {
    return $this->_set_value("1", $value);
  }
  function content_type()
  {
    return $this->_get_value("2");
  }
  function set_content_type($value)
  {
    return $this->_set_value("2", $value);
  }
  function connection()
  {
    return $this->_get_value("3");
  }
  function set_connection($value)
  {
    return $this->_set_value("3", $value);
  }
  function charset()
  {
    return $this->_get_value("4");
  }
  function set_charset($value)
  {
    return $this->_set_value("4", $value);
  }
  function accept_charset()
  {
    return $this->_get_value("5");
  }
  function set_accept_charset($value)
  {
    return $this->_set_value("5", $value);
  }
  function create_time()
  {
    return $this->_get_value("6");
  }
  function set_create_time($value)
  {
    return $this->_set_value("6", $value);
  }
  function log_id()
  {
    return $this->_get_value("7");
  }
  function set_log_id($value)
  {
    return $this->_set_value("7", $value);
  }
  function compress_type()
  {
    return $this->_get_value("8");
  }
  function set_compress_type($value)
  {
    return $this->_set_value("8", $value);
  }
}
class RequestBody extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBString";
    $this->values["1"] = "";
    $this->fields["2"] = "PBString";
    $this->values["2"] = "";
    $this->fields["3"] = "PBString";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBString";
    $this->values["6"] = "";
  }
  function version()
  {
    return $this->_get_value("1");
  }
  function set_version($value)
  {
    return $this->_set_value("1", $value);
  }
  function charset()
  {
    return $this->_get_value("2");
  }
  function set_charset($value)
  {
    return $this->_set_value("2", $value);
  }
  function service()
  {
    return $this->_get_value("3");
  }
  function set_service($value)
  {
    return $this->_set_value("3", $value);
  }
  function method_id()
  {
    return $this->_get_value("4");
  }
  function set_method_id($value)
  {
    return $this->_set_value("4", $value);
  }
  function id()
  {
    return $this->_get_value("5");
  }
  function set_id($value)
  {
    return $this->_set_value("5", $value);
  }
  function serialized_request()
  {
    return $this->_get_value("6");
  }
  function set_serialized_request($value)
  {
    return $this->_set_value("6", $value);
  }
}
class ResponseHead extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBString";
    $this->values["2"] = "";
    $this->fields["3"] = "PBString";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
  }
  function code()
  {
    return $this->_get_value("1");
  }
  function set_code($value)
  {
    return $this->_set_value("1", $value);
  }
  function text()
  {
    return $this->_get_value("2");
  }
  function set_text($value)
  {
    return $this->_set_value("2", $value);
  }
  function from_host()
  {
    return $this->_get_value("3");
  }
  function set_from_host($value)
  {
    return $this->_set_value("3", $value);
  }
  function compress_type()
  {
    return $this->_get_value("4");
  }
  function set_compress_type($value)
  {
    return $this->_set_value("4", $value);
  }
}
class ResponseBody extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBString";
    $this->values["1"] = "";
    $this->fields["2"] = "PBString";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
  }
  function serialized_response()
  {
    return $this->_get_value("1");
  }
  function set_serialized_response($value)
  {
    return $this->_set_value("1", $value);
  }
  function version()
  {
    return $this->_get_value("2");
  }
  function set_version($value)
  {
    return $this->_set_value("2", $value);
  }
  function error()
  {
    return $this->_get_value("3");
  }
  function set_error($value)
  {
    return $this->_set_value("3", $value);
  }
  function id()
  {
    return $this->_get_value("4");
  }
  function set_id($value)
  {
    return $this->_set_value("4", $value);
  }
}
class RpcRequest extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "RequestHead";
    $this->values["1"] = "";
    $this->fields["2"] = "RequestBody";
    $this->values["2"] = array();
  }
  function requestHead()
  {
    return $this->_get_value("1");
  }
  function set_requestHead($value)
  {
    return $this->_set_value("1", $value);
  }
  function requestBody($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_requestBody()
  {
    return $this->_add_arr_value("2");
  }
  function set_requestBody($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function remove_last_requestBody()
  {
    $this->_remove_last_arr_value("2");
  }
  function requestBody_size()
  {
    return $this->_get_arr_size("2");
  }
}
class RpcResponse extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "ResponseHead";
    $this->values["1"] = "";
    $this->fields["2"] = "ResponseBody";
    $this->values["2"] = array();
  }
  function responseHead()
  {
    return $this->_get_value("1");
  }
  function set_responseHead($value)
  {
    return $this->_set_value("1", $value);
  }
  function responseBody($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_responseBody()
  {
    return $this->_add_arr_value("2");
  }
  function set_responseBody($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function remove_last_responseBody()
  {
    $this->_remove_last_arr_value("2");
  }
  function responseBody_size()
  {
    return $this->_get_arr_size("2");
  }
}
?>
