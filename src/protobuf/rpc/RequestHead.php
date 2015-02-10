<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file RequestHead.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 16:01:21
 * @brief 
 *  
 **/
class Protobuf_Rpc_RequestHead extends ProtobufMessage
{
    /* Field index constants */
    const FROM_HOST = 1;
    const CONTENT_TYPE = 2;
    const CONNECTION = 3;
    const CHARSET = 4;
    const ACCEPT_CHARSET = 5;
    const CREATE_TIME = 6;
    const LOG_ID = 7;
    const COMPRESS_TYPE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROM_HOST => array(
            'name' => 'from_host',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT_TYPE => array(
            'name' => 'content_type',
            'required' => false,
            'type' => 5,
        ),
        self::CONNECTION => array(
            'name' => 'connection',
            'required' => false,
            'type' => 8,
        ),
        self::CHARSET => array(
            'name' => 'charset',
            'required' => false,
            'type' => 7,
        ),
        self::ACCEPT_CHARSET => array(
            'name' => 'accept_charset',
            'required' => false,
            'type' => 7,
        ),
        self::CREATE_TIME => array(
            'name' => 'create_time',
            'required' => false,
            'type' => 7,
        ),
        self::LOG_ID => array(
            'name' => 'log_id',
            'required' => false,
            'type' => 5,
        ),
        self::COMPRESS_TYPE => array(
            'name' => 'compress_type',
            'required' => false,
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
        $this->values[self::FROM_HOST] = null;
        $this->values[self::CONTENT_TYPE] = null;
        $this->values[self::CONNECTION] = null;
        $this->values[self::CHARSET] = null;
        $this->values[self::ACCEPT_CHARSET] = null;
        $this->values[self::CREATE_TIME] = null;
        $this->values[self::LOG_ID] = null;
        $this->values[self::COMPRESS_TYPE] = null;
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
     * Sets value of 'from_host' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromHost($value)
    {
        return $this->set(self::FROM_HOST, $value);
    }

    /**
     * Returns value of 'from_host' property
     *
     * @return string
     */
    public function getFromHost()
    {
        return $this->get(self::FROM_HOST);
    }

    /**
     * Sets value of 'content_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setContentType($value)
    {
        return $this->set(self::CONTENT_TYPE, $value);
    }

    /**
     * Returns value of 'content_type' property
     *
     * @return int
     */
    public function getContentType()
    {
        return $this->get(self::CONTENT_TYPE);
    }

    /**
     * Sets value of 'connection' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setConnection($value)
    {
        return $this->set(self::CONNECTION, $value);
    }

    /**
     * Returns value of 'connection' property
     *
     * @return bool
     */
    public function getConnection()
    {
        return $this->get(self::CONNECTION);
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
     * Sets value of 'accept_charset' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAcceptCharset($value)
    {
        return $this->set(self::ACCEPT_CHARSET, $value);
    }

    /**
     * Returns value of 'accept_charset' property
     *
     * @return string
     */
    public function getAcceptCharset()
    {
        return $this->get(self::ACCEPT_CHARSET);
    }

    /**
     * Sets value of 'create_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATE_TIME, $value);
    }

    /**
     * Returns value of 'create_time' property
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->get(self::CREATE_TIME);
    }

    /**
     * Sets value of 'log_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLogId($value)
    {
        return $this->set(self::LOG_ID, $value);
    }

    /**
     * Returns value of 'log_id' property
     *
     * @return int
     */
    public function getLogId()
    {
        return $this->get(self::LOG_ID);
    }

    /**
     * Sets value of 'compress_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCompressType($value)
    {
        return $this->set(self::COMPRESS_TYPE, $value);
    }

    /**
     * Returns value of 'compress_type' property
     *
     * @return int
     */
    public function getCompressType()
    {
        return $this->get(self::COMPRESS_TYPE);
    }
}

/* vim: set ts=4 sw=4 sts=4 tw=100 */
