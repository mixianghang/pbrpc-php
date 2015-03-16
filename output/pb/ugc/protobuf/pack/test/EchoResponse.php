<?php
/**
 * Auto generated from echo.proto at 2015-03-13 11:02:55
 *
 * pack.test package
 */

/**
 * EchoResponse message
 */
class Ugc_Protobuf_Pack_Test_EchoResponse extends ProtobufMessage
{
    /* Field index constants */
    const MESSAGE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MESSAGE => array(
            'name' => 'message',
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
        $this->values[self::MESSAGE] = null;
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
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }
}