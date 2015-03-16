<?php
/**
 * Auto generated from print.proto at 2015-03-13 11:02:55
 *
 * nihao.wohao package
 */

/**
 * print message
 */
class Ugc_Protobuf_Nihao_Wohao_Print extends ProtobufMessage
{
    /* Field index constants */
    const PRINTSTR = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRINTSTR => array(
            'name' => 'printStr',
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
        $this->values[self::PRINTSTR] = null;
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
     * Sets value of 'printStr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrintStr($value)
    {
        return $this->set(self::PRINTSTR, $value);
    }

    /**
     * Returns value of 'printStr' property
     *
     * @return string
     */
    public function getPrintStr()
    {
        return $this->get(self::PRINTSTR);
    }
}