<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 /**
 * @file ResponseHead.php
 * @author mixianghang(mixianghang@outlook.com)
 * @date 2015/02/10 16:02:09
 * @brief 
 *  
 **/
class Protobuf_Rpc_ResponseHead extends ProtobufMessage
{
    /* Field index constants */
    const CODE = 1;
    const TEXT = 2;
    const FROM_HOST = 3;
    const COMPRESS_TYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::TEXT => array(
            'name' => 'text',
            'required' => false,
            'type' => 7,
        ),
        self::FROM_HOST => array(
            'name' => 'from_host',
            'required' => false,
            'type' => 7,
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
        $this->values[self::CODE] = null;
        $this->values[self::TEXT] = null;
        $this->values[self::FROM_HOST] = null;
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
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value)
    {
        return $this->set(self::TEXT, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText()
    {
        return $this->get(self::TEXT);
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
