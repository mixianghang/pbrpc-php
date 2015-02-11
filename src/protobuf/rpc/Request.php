<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file Request.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 16:10:57
 * @brief 
 *  
 **/

class Protobuf_Rpc_Request extends ProtobufMessage
{
    /* Field index constants */
    const REQUESTHEAD = 1;
    const REQUESTBODY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUESTHEAD => array(
            'name' => 'requestHead',
            'required' => false,
            'type' => 'Protobuf_Rpc_RequestHead'
        ),
        self::REQUESTBODY => array(
            'name' => 'requestBody',
            'repeated' => true,
            'type' => 'Protobuf_Rpc_RequestBody'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::REQUESTHEAD] = null;
        $this->values[self::REQUESTBODY] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'requestHead' property
     *
     * @param ProtobufRpcRequestHead $value Property value
     *
     * @return null
     */
    public function setRequestHead(Protobuf_Rpc_RequestHead $value)
    {
        return $this->set(self::REQUESTHEAD, $value);
    }

    /**
     * Returns value of 'requestHead' property
     *
     * @return ProtobufRpcRequestHead
     */
    public function getRequestHead()
    {
        return $this->get(self::REQUESTHEAD);
    }

    /**
     * Appends value to 'requestBody' list
     *
     * @param ProtobufRpcRequestBody $value Value to append
     *
     * @return null
     */
    public function appendRequestBody(Protobuf_Rpc_RequestBody $value)
    {
        return $this->append(self::REQUESTBODY, $value);
    }

    /**
     * Clears 'requestBody' list
     *
     * @return null
     */
    public function clearRequestBody()
    {
        return $this->clear(self::REQUESTBODY);
    }

    /**
     * Returns 'requestBody' list
     *
     * @return ProtobufRpcRequestBody[]
     */
    public function getRequestBody()
    {
        return $this->get(self::REQUESTBODY);
    }

    /**
     * Returns 'requestBody' iterator
     *
     * @return ArrayIterator
     */
    public function getRequestBodyIterator()
    {
        return new ArrayIterator($this->get(self::REQUESTBODY));
    }

    /**
     * Returns element from 'requestBody' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return ProtobufRpcRequestBody
     */
    public function getRequestBodyAt($offset)
    {
        return $this->get(self::REQUESTBODY, $offset);
    }

    /**
     * Returns count of 'requestBody' list
     *
     * @return int
     */
    public function getRequestBodyCount()
    {
        return $this->count(self::REQUESTBODY);
    }
}
/* vim: set ts=4 sw=4 sts=4 tw=100 */
