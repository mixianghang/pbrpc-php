<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file RequestBody.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 16:01:40
 * @brief 
 *  
 **/
class Protobuf_Rpc_RequestBody extends ProtobufMessage
{
    /* Field index constants */
    const VERSION = 1;
    const CHARSET = 2;
    const SERVICE = 3;
    const METHOD_ID = 4;
    const ID = 5;
    const SERIALIZED_REQUEST = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VERSION => array(
            'name' => 'version',
            'required' => false,
            'type' => 7,
        ),
        self::CHARSET => array(
            'name' => 'charset',
            'required' => false,
            'type' => 7,
        ),
        self::SERVICE => array(
            'name' => 'service',
            'required' => true,
            'type' => 7,
        ),
        self::METHOD_ID => array(
            'name' => 'method_id',
            'required' => true,
            'type' => 5,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => 5,
        ),
        self::SERIALIZED_REQUEST => array(
            'name' => 'serialized_request',
            'required' => false,
            'type' => 7,
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
        $this->values[self::VERSION] = null;
        $this->values[self::CHARSET] = null;
        $this->values[self::SERVICE] = null;
        $this->values[self::METHOD_ID] = null;
        $this->values[self::ID] = null;
        $this->values[self::SERIALIZED_REQUEST] = null;
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
     * Sets value of 'version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->get(self::VERSION);
    }

    /**
     * Sets value of 'charset' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCharset($value)
    {
        return $this->set(self::CHARSET, $value);
    }

    /**
     * Returns value of 'charset' property
     *
     * @return string
     */
    public function getCharset()
    {
        return $this->get(self::CHARSET);
    }

    /**
     * Sets value of 'service' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setService($value)
    {
        return $this->set(self::SERVICE, $value);
    }

    /**
     * Returns value of 'service' property
     *
     * @return string
     */
    public function getService()
    {
        return $this->get(self::SERVICE);
    }

    /**
     * Sets value of 'method_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMethodId($value)
    {
        return $this->set(self::METHOD_ID, $value);
    }

    /**
     * Returns value of 'method_id' property
     *
     * @return int
     */
    public function getMethodId()
    {
        return $this->get(self::METHOD_ID);
    }

    /**
     * Sets value of 'id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return int
     */
    public function getId()
    {
        return $this->get(self::ID);
    }

    /**
     * Sets value of 'serialized_request' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSerializedRequest($value)
    {
        return $this->set(self::SERIALIZED_REQUEST, $value);
    }

    /**
     * Returns value of 'serialized_request' property
     *
     * @return string
     */
    public function getSerializedRequest()
    {
        return $this->get(self::SERIALIZED_REQUEST);
    }
}

/* vim: set ts=4 sw=4 sts=4 tw=100 */
