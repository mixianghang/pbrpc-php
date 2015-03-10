<?php
/**
 * Auto generated from rtse_rpc.proto at 2015-03-10 16:18:14
 */

/**
 * PbRequest message
 */
class PbRequest extends ProtobufMessage
{
    /* Field index constants */
    const REQUEST = 1;
    const PROVIDER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST => array(
            'name' => 'request',
            'required' => true,
            'type' => 7,
        ),
        self::PROVIDER => array(
            'name' => 'provider',
            'required' => true,
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
        $this->values[self::REQUEST] = null;
        $this->values[self::PROVIDER] = null;
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
     * Sets value of 'request' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRequest($value)
    {
        return $this->set(self::REQUEST, $value);
    }

    /**
     * Returns value of 'request' property
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->get(self::REQUEST);
    }

    /**
     * Sets value of 'provider' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProvider($value)
    {
        return $this->set(self::PROVIDER, $value);
    }

    /**
     * Returns value of 'provider' property
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->get(self::PROVIDER);
    }
}

/**
 * PbResponse message
 */
class PbResponse extends ProtobufMessage
{
    /* Field index constants */
    const RESPONSE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE => array(
            'name' => 'response',
            'required' => true,
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
        $this->values[self::RESPONSE] = null;
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
     * Sets value of 'response' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResponse($value)
    {
        return $this->set(self::RESPONSE, $value);
    }

    /**
     * Returns value of 'response' property
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->get(self::RESPONSE);
    }
}
