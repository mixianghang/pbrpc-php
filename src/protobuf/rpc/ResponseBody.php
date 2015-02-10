<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file ResponseBody.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 16:01:55
 * @brief 
 *  
 **/
class Protobuf_Rpc_ResponseBody extends ProtobufMessage
{
    /* Field index constants */
    const SERIALIZED_RESPONSE = 1;
    const VERSION = 2;
    const ERROR = 3;
    const ID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERIALIZED_RESPONSE => array(
            'name' => 'serialized_response',
            'required' => false,
            'type' => 7,
        ),
        self::VERSION => array(
            'name' => 'version',
            'required' => false,
            'type' => 7,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => 5,
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
        $this->values[self::SERIALIZED_RESPONSE] = null;
        $this->values[self::VERSION] = null;
        $this->values[self::ERROR] = null;
        $this->values[self::ID] = null;
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
     * Sets value of 'serialized_response' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSerializedResponse($value)
    {
        return $this->set(self::SERIALIZED_RESPONSE, $value);
    }

    /**
     * Returns value of 'serialized_response' property
     *
     * @return string
     */
    public function getSerializedResponse()
    {
        return $this->get(self::SERIALIZED_RESPONSE);
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
     * Sets value of 'error' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setError($value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return int
     */
    public function getError()
    {
        return $this->get(self::ERROR);
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
}

/* vim: set ts=4 sw=4 sts=4 tw=100 */
