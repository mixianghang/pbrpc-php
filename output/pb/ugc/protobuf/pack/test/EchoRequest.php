<?php
/**
 * Auto generated from echo.proto at 2015-03-13 11:02:55
 *
 * pack.test package
 */

/**
 * EchoRequest message
 */
class Ugc_Protobuf_Pack_Test_EchoRequest extends ProtobufMessage
{
    /* Field index constants */
    const MESSAGE = 1;
    const NESTED_MESSAGE = 2;
    const PRINTT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MESSAGE => array(
            'name' => 'message',
            'required' => true,
            'type' => 7,
        ),
        self::NESTED_MESSAGE => array(
            'name' => 'nested_message',
            'required' => false,
            'type' => 'Ugc_Protobuf_Pack_Test_EchoRequest_NestedMessage'
        ),
        self::PRINTT => array(
            'name' => 'printT',
            'required' => false,
            'type' => 'Ugc_Protobuf_Nihao_Wohao_Print'
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
        $this->values[self::NESTED_MESSAGE] = null;
        $this->values[self::PRINTT] = null;
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

    /**
     * Sets value of 'nested_message' property
     *
     * @param Ugc_Protobuf_Pack_Test_EchoRequest_NestedMessage $value Property value
     *
     * @return null
     */
    public function setNestedMessage(Ugc_Protobuf_Pack_Test_EchoRequest_NestedMessage $value)
    {
        return $this->set(self::NESTED_MESSAGE, $value);
    }

    /**
     * Returns value of 'nested_message' property
     *
     * @return Ugc_Protobuf_Pack_Test_EchoRequest_NestedMessage
     */
    public function getNestedMessage()
    {
        return $this->get(self::NESTED_MESSAGE);
    }

    /**
     * Sets value of 'printT' property
     *
     * @param Ugc_Protobuf_Nihao_Wohao_Print $value Property value
     *
     * @return null
     */
    public function setPrintT(Ugc_Protobuf_Nihao_Wohao_Print $value)
    {
        return $this->set(self::PRINTT, $value);
    }

    /**
     * Returns value of 'printT' property
     *
     * @return Ugc_Protobuf_Nihao_Wohao_Print
     */
    public function getPrintT()
    {
        return $this->get(self::PRINTT);
    }
}