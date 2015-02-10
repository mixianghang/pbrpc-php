<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file Response.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 16:10:42
 * @brief 
 *  
 **/

class Protobuf_Rpc_Response extends ProtobufMessage
{
    /* Field index constants */
    const RESPONSEHEAD = 1;
    const RESPONSEBODY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSEHEAD => array(
            'name' => 'responseHead',
            'required' => false,
            'type' => 'ProtobufRpcResponseHead'
        ),
        self::RESPONSEBODY => array(
            'name' => 'responseBody',
            'repeated' => true,
            'type' => 'ProtobufRpcResponseBody'
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
        $this->values[self::RESPONSEHEAD] = null;
        $this->values[self::RESPONSEBODY] = array();
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
     * Sets value of 'responseHead' property
     *
     * @param ProtobufRpcResponseHead $value Property value
     *
     * @return null
     */
    public function setResponseHead(ProtobufRpcResponseHead $value)
    {
        return $this->set(self::RESPONSEHEAD, $value);
    }

    /**
     * Returns value of 'responseHead' property
     *
     * @return ProtobufRpcResponseHead
     */
    public function getResponseHead()
    {
        return $this->get(self::RESPONSEHEAD);
    }

    /**
     * Appends value to 'responseBody' list
     *
     * @param ProtobufRpcResponseBody $value Value to append
     *
     * @return null
     */
    public function appendResponseBody(ProtobufRpcResponseBody $value)
    {
        return $this->append(self::RESPONSEBODY, $value);
    }

    /**
     * Clears 'responseBody' list
     *
     * @return null
     */
    public function clearResponseBody()
    {
        return $this->clear(self::RESPONSEBODY);
    }

    /**
     * Returns 'responseBody' list
     *
     * @return ProtobufRpcResponseBody[]
     */
    public function getResponseBody()
    {
        return $this->get(self::RESPONSEBODY);
    }

    /**
     * Returns 'responseBody' iterator
     *
     * @return ArrayIterator
     */
    public function getResponseBodyIterator()
    {
        return new ArrayIterator($this->get(self::RESPONSEBODY));
    }

    /**
     * Returns element from 'responseBody' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return ProtobufRpcResponseBody
     */
    public function getResponseBodyAt($offset)
    {
        return $this->get(self::RESPONSEBODY, $offset);
    }

    /**
     * Returns count of 'responseBody' list
     *
     * @return int
     */
    public function getResponseBodyCount()
    {
        return $this->count(self::RESPONSEBODY);
    }
}
/* vim: set ts=4 sw=4 sts=4 tw=100 */
