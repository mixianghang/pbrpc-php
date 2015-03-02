<?php
/**
 * Auto generated from wmise_data.proto at 2015-02-28 11:00:41
 *
 * wmise package
 */

/**
 * AnnotationType enum
 */
final class Wmise_AnnotationType
{
    const TEXT_FULL = 1;
    const TEXT_SEG = 2;
    const TEXT_SEG_BY_SEP = 3;
    const INT_RANGE = 4;
    const REAL_RANGE = 5;
    const INT_EQUAL = 6;
    const TWO_DIME_RANGE = 7;
    const USER_DEFINE0 = 50;
    const USER_DEFINE1 = 51;
    const USER_DEFINE2 = 52;
    const USER_DEFINE3 = 53;
    const USER_DEFINE4 = 54;
    const USER_DEFINE5 = 55;
    const USER_DEFINE6 = 56;
    const USER_DEFINE7 = 57;
    const USER_DEFINE8 = 58;
    const USER_DEFINE9 = 59;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'TEXT_FULL' => self::TEXT_FULL,
            'TEXT_SEG' => self::TEXT_SEG,
            'TEXT_SEG_BY_SEP' => self::TEXT_SEG_BY_SEP,
            'INT_RANGE' => self::INT_RANGE,
            'REAL_RANGE' => self::REAL_RANGE,
            'INT_EQUAL' => self::INT_EQUAL,
            'TWO_DIME_RANGE' => self::TWO_DIME_RANGE,
            'USER_DEFINE0' => self::USER_DEFINE0,
            'USER_DEFINE1' => self::USER_DEFINE1,
            'USER_DEFINE2' => self::USER_DEFINE2,
            'USER_DEFINE3' => self::USER_DEFINE3,
            'USER_DEFINE4' => self::USER_DEFINE4,
            'USER_DEFINE5' => self::USER_DEFINE5,
            'USER_DEFINE6' => self::USER_DEFINE6,
            'USER_DEFINE7' => self::USER_DEFINE7,
            'USER_DEFINE8' => self::USER_DEFINE8,
            'USER_DEFINE9' => self::USER_DEFINE9,
        );
    }
}

/**
 * CapitalInfo enum
 */
final class Wmise_CapitalInfo
{
    const ALL_LOWER = 0;
    const ALL_UPPER = 1;
    const FIRST_UPPER = 2;
    const OTHER = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'ALL_LOWER' => self::ALL_LOWER,
            'ALL_UPPER' => self::ALL_UPPER,
            'FIRST_UPPER' => self::FIRST_UPPER,
            'OTHER' => self::OTHER,
        );
    }
}

/**
 * QueryNodeType enum
 */
final class Wmise_QueryNodeType
{
    const VALUE = 0;
    const NOT = 1;
    const AND = 2;
    const OR = 3;
    const XOR = 4;
    const RANGE = 5;
    const RANGE_2D = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'VALUE' => self::VALUE,
            'NOT' => self::NOT,
            'AND' => self::AND,
            'OR' => self::OR,
            'XOR' => self::XOR,
            'RANGE' => self::RANGE,
            'RANGE_2D' => self::RANGE_2D,
        );
    }
}

/**
 * AttachMode enum
 */
final class Wmise_AttachMode
{
    const TOKEN_HITS = 1;
    const POS_AND_SEGINFO = 2;
    const POS_AND_SEGDATA = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'TOKEN_HITS' => self::TOKEN_HITS,
            'POS_AND_SEGINFO' => self::POS_AND_SEGINFO,
            'POS_AND_SEGDATA' => self::POS_AND_SEGDATA,
        );
    }
}

/**
 * AnnotationSchema message
 */
class Wmise_AnnotationSchema extends ProtobufMessage
{
    /* Field index constants */
    const SCHEMA_ID = 1;
    const SCHEMA_NAME = 2;
    const TYPE = 3;
    const UP_LOW_CONVERSION = 20;
    const TRANS_CONVERSION = 21;
    const SEPERATORS = 40;
    const INT_MIN = 50;
    const INT_MAX = 51;
    const INT_ACCURACY = 52;
    const REAL_MIN = 60;
    const REAL_MAX = 61;
    const REAL_ACCURACY = 62;
    const MAX_RANGE_LEVEL = 70;
    const X_MIN = 80;
    const X_MAX = 81;
    const Y_MIN = 82;
    const Y_MAX = 83;
    const X_ACCURACY = 84;
    const Y_ACCURACY = 85;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCHEMA_ID => array(
            'default' => 0, 
            'name' => 'schema_id',
            'required' => true,
            'type' => 5,
        ),
        self::SCHEMA_NAME => array(
            'name' => 'schema_name',
            'required' => true,
            'type' => 7,
        ),
        self::TYPE => array(
            'default' => Wmise_AnnotationType::TEXT_FULL, 
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::UP_LOW_CONVERSION => array(
            'default' => true, 
            'name' => 'up_low_conversion',
            'required' => false,
            'type' => 8,
        ),
        self::TRANS_CONVERSION => array(
            'default' => true, 
            'name' => 'trans_conversion',
            'required' => false,
            'type' => 8,
        ),
        self::SEPERATORS => array(
            'name' => 'seperators',
            'required' => false,
            'type' => 7,
        ),
        self::INT_MIN => array(
            'default' => 10, 
            'name' => 'int_min',
            'required' => false,
            'type' => 5,
        ),
        self::INT_MAX => array(
            'default' => 100, 
            'name' => 'int_max',
            'required' => false,
            'type' => 5,
        ),
        self::INT_ACCURACY => array(
            'default' => 1, 
            'name' => 'int_accuracy',
            'required' => false,
            'type' => 5,
        ),
        self::REAL_MIN => array(
            'default' => 10.0, 
            'name' => 'real_min',
            'required' => false,
            'type' => 1,
        ),
        self::REAL_MAX => array(
            'default' => 100.0, 
            'name' => 'real_max',
            'required' => false,
            'type' => 1,
        ),
        self::REAL_ACCURACY => array(
            'default' => 1.0, 
            'name' => 'real_accuracy',
            'required' => false,
            'type' => 1,
        ),
        self::MAX_RANGE_LEVEL => array(
            'default' => 8, 
            'name' => 'max_range_level',
            'required' => false,
            'type' => 5,
        ),
        self::X_MIN => array(
            'default' => 0, 
            'name' => 'x_min',
            'required' => false,
            'type' => 5,
        ),
        self::X_MAX => array(
            'default' => 10000, 
            'name' => 'x_max',
            'required' => false,
            'type' => 5,
        ),
        self::Y_MIN => array(
            'default' => 0, 
            'name' => 'y_min',
            'required' => false,
            'type' => 5,
        ),
        self::Y_MAX => array(
            'default' => 10000, 
            'name' => 'y_max',
            'required' => false,
            'type' => 5,
        ),
        self::X_ACCURACY => array(
            'default' => 100, 
            'name' => 'x_accuracy',
            'required' => false,
            'type' => 5,
        ),
        self::Y_ACCURACY => array(
            'default' => 100, 
            'name' => 'y_accuracy',
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
        $this->values[self::SCHEMA_ID] = null;
        $this->values[self::SCHEMA_NAME] = null;
        $this->values[self::TYPE] = Wmise_AnnotationType::TEXT_FULL;
        $this->values[self::UP_LOW_CONVERSION] = true;
        $this->values[self::TRANS_CONVERSION] = true;
        $this->values[self::SEPERATORS] = null;
        $this->values[self::INT_MIN] = 10;
        $this->values[self::INT_MAX] = 100;
        $this->values[self::INT_ACCURACY] = 1;
        $this->values[self::REAL_MIN] = 10.0;
        $this->values[self::REAL_MAX] = 100.0;
        $this->values[self::REAL_ACCURACY] = 1.0;
        $this->values[self::MAX_RANGE_LEVEL] = 8;
        $this->values[self::X_MIN] = 0;
        $this->values[self::X_MAX] = 10000;
        $this->values[self::Y_MIN] = 0;
        $this->values[self::Y_MAX] = 10000;
        $this->values[self::X_ACCURACY] = 100;
        $this->values[self::Y_ACCURACY] = 100;
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
     * Sets value of 'schema_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSchemaId($value)
    {
        return $this->set(self::SCHEMA_ID, $value);
    }

    /**
     * Returns value of 'schema_id' property
     *
     * @return int
     */
    public function getSchemaId()
    {
        return $this->get(self::SCHEMA_ID);
    }

    /**
     * Sets value of 'schema_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchemaName($value)
    {
        return $this->set(self::SCHEMA_NAME, $value);
    }

    /**
     * Returns value of 'schema_name' property
     *
     * @return string
     */
    public function getSchemaName()
    {
        return $this->get(self::SCHEMA_NAME);
    }

    /**
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'up_low_conversion' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setUpLowConversion($value)
    {
        return $this->set(self::UP_LOW_CONVERSION, $value);
    }

    /**
     * Returns value of 'up_low_conversion' property
     *
     * @return bool
     */
    public function getUpLowConversion()
    {
        return $this->get(self::UP_LOW_CONVERSION);
    }

    /**
     * Sets value of 'trans_conversion' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setTransConversion($value)
    {
        return $this->set(self::TRANS_CONVERSION, $value);
    }

    /**
     * Returns value of 'trans_conversion' property
     *
     * @return bool
     */
    public function getTransConversion()
    {
        return $this->get(self::TRANS_CONVERSION);
    }

    /**
     * Sets value of 'seperators' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSeperators($value)
    {
        return $this->set(self::SEPERATORS, $value);
    }

    /**
     * Returns value of 'seperators' property
     *
     * @return string
     */
    public function getSeperators()
    {
        return $this->get(self::SEPERATORS);
    }

    /**
     * Sets value of 'int_min' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIntMin($value)
    {
        return $this->set(self::INT_MIN, $value);
    }

    /**
     * Returns value of 'int_min' property
     *
     * @return int
     */
    public function getIntMin()
    {
        return $this->get(self::INT_MIN);
    }

    /**
     * Sets value of 'int_max' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIntMax($value)
    {
        return $this->set(self::INT_MAX, $value);
    }

    /**
     * Returns value of 'int_max' property
     *
     * @return int
     */
    public function getIntMax()
    {
        return $this->get(self::INT_MAX);
    }

    /**
     * Sets value of 'int_accuracy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIntAccuracy($value)
    {
        return $this->set(self::INT_ACCURACY, $value);
    }

    /**
     * Returns value of 'int_accuracy' property
     *
     * @return int
     */
    public function getIntAccuracy()
    {
        return $this->get(self::INT_ACCURACY);
    }

    /**
     * Sets value of 'real_min' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setRealMin($value)
    {
        return $this->set(self::REAL_MIN, $value);
    }

    /**
     * Returns value of 'real_min' property
     *
     * @return float
     */
    public function getRealMin()
    {
        return $this->get(self::REAL_MIN);
    }

    /**
     * Sets value of 'real_max' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setRealMax($value)
    {
        return $this->set(self::REAL_MAX, $value);
    }

    /**
     * Returns value of 'real_max' property
     *
     * @return float
     */
    public function getRealMax()
    {
        return $this->get(self::REAL_MAX);
    }

    /**
     * Sets value of 'real_accuracy' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setRealAccuracy($value)
    {
        return $this->set(self::REAL_ACCURACY, $value);
    }

    /**
     * Returns value of 'real_accuracy' property
     *
     * @return float
     */
    public function getRealAccuracy()
    {
        return $this->get(self::REAL_ACCURACY);
    }

    /**
     * Sets value of 'max_range_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMaxRangeLevel($value)
    {
        return $this->set(self::MAX_RANGE_LEVEL, $value);
    }

    /**
     * Returns value of 'max_range_level' property
     *
     * @return int
     */
    public function getMaxRangeLevel()
    {
        return $this->get(self::MAX_RANGE_LEVEL);
    }

    /**
     * Sets value of 'x_min' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setXMin($value)
    {
        return $this->set(self::X_MIN, $value);
    }

    /**
     * Returns value of 'x_min' property
     *
     * @return int
     */
    public function getXMin()
    {
        return $this->get(self::X_MIN);
    }

    /**
     * Sets value of 'x_max' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setXMax($value)
    {
        return $this->set(self::X_MAX, $value);
    }

    /**
     * Returns value of 'x_max' property
     *
     * @return int
     */
    public function getXMax()
    {
        return $this->get(self::X_MAX);
    }

    /**
     * Sets value of 'y_min' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setYMin($value)
    {
        return $this->set(self::Y_MIN, $value);
    }

    /**
     * Returns value of 'y_min' property
     *
     * @return int
     */
    public function getYMin()
    {
        return $this->get(self::Y_MIN);
    }

    /**
     * Sets value of 'y_max' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setYMax($value)
    {
        return $this->set(self::Y_MAX, $value);
    }

    /**
     * Returns value of 'y_max' property
     *
     * @return int
     */
    public function getYMax()
    {
        return $this->get(self::Y_MAX);
    }

    /**
     * Sets value of 'x_accuracy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setXAccuracy($value)
    {
        return $this->set(self::X_ACCURACY, $value);
    }

    /**
     * Returns value of 'x_accuracy' property
     *
     * @return int
     */
    public function getXAccuracy()
    {
        return $this->get(self::X_ACCURACY);
    }

    /**
     * Sets value of 'y_accuracy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setYAccuracy($value)
    {
        return $this->set(self::Y_ACCURACY, $value);
    }

    /**
     * Returns value of 'y_accuracy' property
     *
     * @return int
     */
    public function getYAccuracy()
    {
        return $this->get(self::Y_ACCURACY);
    }
}

/**
 * Section message
 */
class Wmise_Section extends ProtobufMessage
{
    /* Field index constants */
    const SECTION_ID = 1;
    const SECTION_NAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SECTION_ID => array(
            'default' => 0, 
            'name' => 'section_id',
            'required' => true,
            'type' => 5,
        ),
        self::SECTION_NAME => array(
            'name' => 'section_name',
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
        $this->values[self::SECTION_ID] = null;
        $this->values[self::SECTION_NAME] = null;
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
     * Sets value of 'section_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectionId($value)
    {
        return $this->set(self::SECTION_ID, $value);
    }

    /**
     * Returns value of 'section_id' property
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->get(self::SECTION_ID);
    }

    /**
     * Sets value of 'section_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSectionName($value)
    {
        return $this->set(self::SECTION_NAME, $value);
    }

    /**
     * Returns value of 'section_name' property
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->get(self::SECTION_NAME);
    }
}

/**
 * Token message
 */
class Wmise_Token extends ProtobufMessage
{
    /* Field index constants */
    const TOKEN_ID = 1;
    const TOKEN_STR = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOKEN_ID => array(
            'name' => 'token_id',
            'required' => true,
            'type' => 5,
        ),
        self::TOKEN_STR => array(
            'name' => 'token_str',
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
        $this->values[self::TOKEN_ID] = null;
        $this->values[self::TOKEN_STR] = null;
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
     * Sets value of 'token_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTokenId($value)
    {
        return $this->set(self::TOKEN_ID, $value);
    }

    /**
     * Returns value of 'token_id' property
     *
     * @return int
     */
    public function getTokenId()
    {
        return $this->get(self::TOKEN_ID);
    }

    /**
     * Sets value of 'token_str' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTokenStr($value)
    {
        return $this->set(self::TOKEN_STR, $value);
    }

    /**
     * Returns value of 'token_str' property
     *
     * @return string
     */
    public function getTokenStr()
    {
        return $this->get(self::TOKEN_STR);
    }
}

/**
 * DataConfig message
 */
class Wmise_DataConfig extends ProtobufMessage
{
    /* Field index constants */
    const SCHEMAS = 1;
    const SECTIONS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCHEMAS => array(
            'name' => 'schemas',
            'repeated' => true,
            'type' => 'Wmise_AnnotationSchema'
        ),
        self::SECTIONS => array(
            'name' => 'sections',
            'repeated' => true,
            'type' => 'Wmise_Section'
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
        $this->values[self::SCHEMAS] = array();
        $this->values[self::SECTIONS] = array();
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
     * Appends value to 'schemas' list
     *
     * @param Wmise_AnnotationSchema $value Value to append
     *
     * @return null
     */
    public function appendSchemas(Wmise_AnnotationSchema $value)
    {
        return $this->append(self::SCHEMAS, $value);
    }

    /**
     * Clears 'schemas' list
     *
     * @return null
     */
    public function clearSchemas()
    {
        return $this->clear(self::SCHEMAS);
    }

    /**
     * Returns 'schemas' list
     *
     * @return Wmise_AnnotationSchema[]
     */
    public function getSchemas()
    {
        return $this->get(self::SCHEMAS);
    }

    /**
     * Returns 'schemas' iterator
     *
     * @return ArrayIterator
     */
    public function getSchemasIterator()
    {
        return new ArrayIterator($this->get(self::SCHEMAS));
    }

    /**
     * Returns element from 'schemas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_AnnotationSchema
     */
    public function getSchemasAt($offset)
    {
        return $this->get(self::SCHEMAS, $offset);
    }

    /**
     * Returns count of 'schemas' list
     *
     * @return int
     */
    public function getSchemasCount()
    {
        return $this->count(self::SCHEMAS);
    }

    /**
     * Appends value to 'sections' list
     *
     * @param Wmise_Section $value Value to append
     *
     * @return null
     */
    public function appendSections(Wmise_Section $value)
    {
        return $this->append(self::SECTIONS, $value);
    }

    /**
     * Clears 'sections' list
     *
     * @return null
     */
    public function clearSections()
    {
        return $this->clear(self::SECTIONS);
    }

    /**
     * Returns 'sections' list
     *
     * @return Wmise_Section[]
     */
    public function getSections()
    {
        return $this->get(self::SECTIONS);
    }

    /**
     * Returns 'sections' iterator
     *
     * @return ArrayIterator
     */
    public function getSectionsIterator()
    {
        return new ArrayIterator($this->get(self::SECTIONS));
    }

    /**
     * Returns element from 'sections' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_Section
     */
    public function getSectionsAt($offset)
    {
        return $this->get(self::SECTIONS, $offset);
    }

    /**
     * Returns count of 'sections' list
     *
     * @return int
     */
    public function getSectionsCount()
    {
        return $this->count(self::SECTIONS);
    }
}

/**
 * Annotation message
 */
class Wmise_Annotation extends ProtobufMessage
{
    /* Field index constants */
    const SCHEMA_ID = 1;
    const SECTION_ID = 2;
    const STR_VALUE = 3;
    const INT_VALUE = 4;
    const REAL_VALUE = 5;
    const PREFIX = 6;
    const PREFIXS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCHEMA_ID => array(
            'name' => 'schema_id',
            'required' => true,
            'type' => 5,
        ),
        self::SECTION_ID => array(
            'default' => 0, 
            'name' => 'section_id',
            'required' => false,
            'type' => 5,
        ),
        self::STR_VALUE => array(
            'name' => 'str_value',
            'required' => false,
            'type' => 7,
        ),
        self::INT_VALUE => array(
            'name' => 'int_value',
            'required' => false,
            'type' => 5,
        ),
        self::REAL_VALUE => array(
            'name' => 'real_value',
            'required' => false,
            'type' => 1,
        ),
        self::PREFIX => array(
            'name' => 'prefix',
            'required' => false,
            'type' => 7,
        ),
        self::PREFIXS => array(
            'name' => 'prefixs',
            'repeated' => true,
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
        $this->values[self::SCHEMA_ID] = null;
        $this->values[self::SECTION_ID] = 0;
        $this->values[self::STR_VALUE] = null;
        $this->values[self::INT_VALUE] = null;
        $this->values[self::REAL_VALUE] = null;
        $this->values[self::PREFIX] = null;
        $this->values[self::PREFIXS] = array();
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
     * Sets value of 'schema_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSchemaId($value)
    {
        return $this->set(self::SCHEMA_ID, $value);
    }

    /**
     * Returns value of 'schema_id' property
     *
     * @return int
     */
    public function getSchemaId()
    {
        return $this->get(self::SCHEMA_ID);
    }

    /**
     * Sets value of 'section_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectionId($value)
    {
        return $this->set(self::SECTION_ID, $value);
    }

    /**
     * Returns value of 'section_id' property
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->get(self::SECTION_ID);
    }

    /**
     * Sets value of 'str_value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStrValue($value)
    {
        return $this->set(self::STR_VALUE, $value);
    }

    /**
     * Returns value of 'str_value' property
     *
     * @return string
     */
    public function getStrValue()
    {
        return $this->get(self::STR_VALUE);
    }

    /**
     * Sets value of 'int_value' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIntValue($value)
    {
        return $this->set(self::INT_VALUE, $value);
    }

    /**
     * Returns value of 'int_value' property
     *
     * @return int
     */
    public function getIntValue()
    {
        return $this->get(self::INT_VALUE);
    }

    /**
     * Sets value of 'real_value' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setRealValue($value)
    {
        return $this->set(self::REAL_VALUE, $value);
    }

    /**
     * Returns value of 'real_value' property
     *
     * @return float
     */
    public function getRealValue()
    {
        return $this->get(self::REAL_VALUE);
    }

    /**
     * Sets value of 'prefix' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrefix($value)
    {
        return $this->set(self::PREFIX, $value);
    }

    /**
     * Returns value of 'prefix' property
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->get(self::PREFIX);
    }

    /**
     * Appends value to 'prefixs' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPrefixs($value)
    {
        return $this->append(self::PREFIXS, $value);
    }

    /**
     * Clears 'prefixs' list
     *
     * @return null
     */
    public function clearPrefixs()
    {
        return $this->clear(self::PREFIXS);
    }

    /**
     * Returns 'prefixs' list
     *
     * @return string[]
     */
    public function getPrefixs()
    {
        return $this->get(self::PREFIXS);
    }

    /**
     * Returns 'prefixs' iterator
     *
     * @return ArrayIterator
     */
    public function getPrefixsIterator()
    {
        return new ArrayIterator($this->get(self::PREFIXS));
    }

    /**
     * Returns element from 'prefixs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPrefixsAt($offset)
    {
        return $this->get(self::PREFIXS, $offset);
    }

    /**
     * Returns count of 'prefixs' list
     *
     * @return int
     */
    public function getPrefixsCount()
    {
        return $this->count(self::PREFIXS);
    }
}

/**
 * SegInfo message
 */
class Wmise_SegInfo extends ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * SegWord message
 */
class Wmise_SegWord extends ProtobufMessage
{
    /* Field index constants */
    const WORD = 1;
    const CAP_INFO = 2;
    const IS_TRADITION = 3;
    const INFO = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::WORD => array(
            'name' => 'word',
            'required' => true,
            'type' => 7,
        ),
        self::CAP_INFO => array(
            'default' => Wmise_CapitalInfo::OTHER, 
            'name' => 'cap_info',
            'required' => false,
            'type' => 5,
        ),
        self::IS_TRADITION => array(
            'default' => false, 
            'name' => 'is_tradition',
            'required' => false,
            'type' => 8,
        ),
        self::INFO => array(
            'name' => 'info',
            'required' => false,
            'type' => 'Wmise_SegInfo'
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
        $this->values[self::WORD] = null;
        $this->values[self::CAP_INFO] = Wmise_CapitalInfo::OTHER;
        $this->values[self::IS_TRADITION] = false;
        $this->values[self::INFO] = null;
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
     * Sets value of 'word' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWord($value)
    {
        return $this->set(self::WORD, $value);
    }

    /**
     * Returns value of 'word' property
     *
     * @return string
     */
    public function getWord()
    {
        return $this->get(self::WORD);
    }

    /**
     * Sets value of 'cap_info' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCapInfo($value)
    {
        return $this->set(self::CAP_INFO, $value);
    }

    /**
     * Returns value of 'cap_info' property
     *
     * @return int
     */
    public function getCapInfo()
    {
        return $this->get(self::CAP_INFO);
    }

    /**
     * Sets value of 'is_tradition' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsTradition($value)
    {
        return $this->set(self::IS_TRADITION, $value);
    }

    /**
     * Returns value of 'is_tradition' property
     *
     * @return bool
     */
    public function getIsTradition()
    {
        return $this->get(self::IS_TRADITION);
    }

    /**
     * Sets value of 'info' property
     *
     * @param Wmise_SegInfo $value Property value
     *
     * @return null
     */
    public function setInfo(Wmise_SegInfo $value)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'info' property
     *
     * @return Wmise_SegInfo
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }
}

/**
 * TokenHitAttr message
 */
class Wmise_TokenHitAttr extends ProtobufMessage
{
    /* Field index constants */
    const SCHEMA_ID = 1;
    const SECTION_ID = 2;
    const CAP_INFO = 3;
    const IS_TRADITION = 4;
    const MORE_POS = 5;
    const HAS_TOKEN_ID = 6;
    const POS_IDX = 8;
    const FID = 9;
    const FIDS = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCHEMA_ID => array(
            'name' => 'schema_id',
            'required' => true,
            'type' => 5,
        ),
        self::SECTION_ID => array(
            'default' => 0, 
            'name' => 'section_id',
            'required' => false,
            'type' => 5,
        ),
        self::CAP_INFO => array(
            'default' => Wmise_CapitalInfo::OTHER, 
            'name' => 'cap_info',
            'required' => false,
            'type' => 5,
        ),
        self::IS_TRADITION => array(
            'default' => false, 
            'name' => 'is_tradition',
            'required' => false,
            'type' => 8,
        ),
        self::MORE_POS => array(
            'default' => false, 
            'name' => 'more_pos',
            'required' => false,
            'type' => 8,
        ),
        self::HAS_TOKEN_ID => array(
            'default' => false, 
            'name' => 'has_token_id',
            'required' => false,
            'type' => 8,
        ),
        self::POS_IDX => array(
            'default' => 0, 
            'name' => 'pos_idx',
            'required' => false,
            'type' => 5,
        ),
        self::FID => array(
            'default' => 0, 
            'name' => 'fid',
            'required' => false,
            'type' => 5,
        ),
        self::FIDS => array(
            'name' => 'fids',
            'repeated' => true,
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
        $this->values[self::SCHEMA_ID] = null;
        $this->values[self::SECTION_ID] = 0;
        $this->values[self::CAP_INFO] = Wmise_CapitalInfo::OTHER;
        $this->values[self::IS_TRADITION] = false;
        $this->values[self::MORE_POS] = false;
        $this->values[self::HAS_TOKEN_ID] = false;
        $this->values[self::POS_IDX] = 0;
        $this->values[self::FID] = 0;
        $this->values[self::FIDS] = array();
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
     * Sets value of 'schema_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSchemaId($value)
    {
        return $this->set(self::SCHEMA_ID, $value);
    }

    /**
     * Returns value of 'schema_id' property
     *
     * @return int
     */
    public function getSchemaId()
    {
        return $this->get(self::SCHEMA_ID);
    }

    /**
     * Sets value of 'section_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectionId($value)
    {
        return $this->set(self::SECTION_ID, $value);
    }

    /**
     * Returns value of 'section_id' property
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->get(self::SECTION_ID);
    }

    /**
     * Sets value of 'cap_info' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCapInfo($value)
    {
        return $this->set(self::CAP_INFO, $value);
    }

    /**
     * Returns value of 'cap_info' property
     *
     * @return int
     */
    public function getCapInfo()
    {
        return $this->get(self::CAP_INFO);
    }

    /**
     * Sets value of 'is_tradition' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsTradition($value)
    {
        return $this->set(self::IS_TRADITION, $value);
    }

    /**
     * Returns value of 'is_tradition' property
     *
     * @return bool
     */
    public function getIsTradition()
    {
        return $this->get(self::IS_TRADITION);
    }

    /**
     * Sets value of 'more_pos' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setMorePos($value)
    {
        return $this->set(self::MORE_POS, $value);
    }

    /**
     * Returns value of 'more_pos' property
     *
     * @return bool
     */
    public function getMorePos()
    {
        return $this->get(self::MORE_POS);
    }

    /**
     * Sets value of 'has_token_id' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setHasTokenId($value)
    {
        return $this->set(self::HAS_TOKEN_ID, $value);
    }

    /**
     * Returns value of 'has_token_id' property
     *
     * @return bool
     */
    public function getHasTokenId()
    {
        return $this->get(self::HAS_TOKEN_ID);
    }

    /**
     * Sets value of 'pos_idx' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPosIdx($value)
    {
        return $this->set(self::POS_IDX, $value);
    }

    /**
     * Returns value of 'pos_idx' property
     *
     * @return int
     */
    public function getPosIdx()
    {
        return $this->get(self::POS_IDX);
    }

    /**
     * Sets value of 'fid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFid($value)
    {
        return $this->set(self::FID, $value);
    }

    /**
     * Returns value of 'fid' property
     *
     * @return int
     */
    public function getFid()
    {
        return $this->get(self::FID);
    }

    /**
     * Appends value to 'fids' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendFids($value)
    {
        return $this->append(self::FIDS, $value);
    }

    /**
     * Clears 'fids' list
     *
     * @return null
     */
    public function clearFids()
    {
        return $this->clear(self::FIDS);
    }

    /**
     * Returns 'fids' list
     *
     * @return int[]
     */
    public function getFids()
    {
        return $this->get(self::FIDS);
    }

    /**
     * Returns 'fids' iterator
     *
     * @return ArrayIterator
     */
    public function getFidsIterator()
    {
        return new ArrayIterator($this->get(self::FIDS));
    }

    /**
     * Returns element from 'fids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getFidsAt($offset)
    {
        return $this->get(self::FIDS, $offset);
    }

    /**
     * Returns count of 'fids' list
     *
     * @return int
     */
    public function getFidsCount()
    {
        return $this->count(self::FIDS);
    }
}

/**
 * TokenHit message
 */
class Wmise_TokenHit extends ProtobufMessage
{
    /* Field index constants */
    const TID = 1;
    const LID = 2;
    const DOC_SCORE = 3;
    const ATTR = 4;
    const NEXT_POS = 5;
    const SEG_INFO = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TID => array(
            'name' => 'tid',
            'required' => true,
            'type' => 5,
        ),
        self::LID => array(
            'name' => 'lid',
            'required' => true,
            'type' => 5,
        ),
        self::DOC_SCORE => array(
            'name' => 'doc_score',
            'required' => true,
            'type' => 5,
        ),
        self::ATTR => array(
            'name' => 'attr',
            'required' => true,
            'type' => 'Wmise_TokenHitAttr'
        ),
        self::NEXT_POS => array(
            'name' => 'next_pos',
            'required' => false,
            'type' => 5,
        ),
        self::SEG_INFO => array(
            'name' => 'seg_info',
            'required' => false,
            'type' => 'Wmise_SegInfo'
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
        $this->values[self::TID] = null;
        $this->values[self::LID] = null;
        $this->values[self::DOC_SCORE] = null;
        $this->values[self::ATTR] = null;
        $this->values[self::NEXT_POS] = null;
        $this->values[self::SEG_INFO] = null;
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
     * Sets value of 'tid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTid($value)
    {
        return $this->set(self::TID, $value);
    }

    /**
     * Returns value of 'tid' property
     *
     * @return int
     */
    public function getTid()
    {
        return $this->get(self::TID);
    }

    /**
     * Sets value of 'lid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLid($value)
    {
        return $this->set(self::LID, $value);
    }

    /**
     * Returns value of 'lid' property
     *
     * @return int
     */
    public function getLid()
    {
        return $this->get(self::LID);
    }

    /**
     * Sets value of 'doc_score' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocScore($value)
    {
        return $this->set(self::DOC_SCORE, $value);
    }

    /**
     * Returns value of 'doc_score' property
     *
     * @return int
     */
    public function getDocScore()
    {
        return $this->get(self::DOC_SCORE);
    }

    /**
     * Sets value of 'attr' property
     *
     * @param Wmise_TokenHitAttr $value Property value
     *
     * @return null
     */
    public function setAttr(Wmise_TokenHitAttr $value)
    {
        return $this->set(self::ATTR, $value);
    }

    /**
     * Returns value of 'attr' property
     *
     * @return Wmise_TokenHitAttr
     */
    public function getAttr()
    {
        return $this->get(self::ATTR);
    }

    /**
     * Sets value of 'next_pos' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNextPos($value)
    {
        return $this->set(self::NEXT_POS, $value);
    }

    /**
     * Returns value of 'next_pos' property
     *
     * @return int
     */
    public function getNextPos()
    {
        return $this->get(self::NEXT_POS);
    }

    /**
     * Sets value of 'seg_info' property
     *
     * @param Wmise_SegInfo $value Property value
     *
     * @return null
     */
    public function setSegInfo(Wmise_SegInfo $value)
    {
        return $this->set(self::SEG_INFO, $value);
    }

    /**
     * Returns value of 'seg_info' property
     *
     * @return Wmise_SegInfo
     */
    public function getSegInfo()
    {
        return $this->get(self::SEG_INFO);
    }
}

/**
 * QueryValueNode message
 */
class Wmise_QueryValueNode extends ProtobufMessage
{
    /* Field index constants */
    const SCHEMA_ID = 1;
    const SCHEMA_NAME = 2;
    const SECTION_ID = 3;
    const SECTION_NAME = 4;
    const STR_VALUE = 5;
    const INT_VALUE = 6;
    const REAL_VALUE = 7;
    const PREFIX = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCHEMA_ID => array(
            'name' => 'schema_id',
            'required' => false,
            'type' => 5,
        ),
        self::SCHEMA_NAME => array(
            'name' => 'schema_name',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION_ID => array(
            'name' => 'section_id',
            'required' => false,
            'type' => 5,
        ),
        self::SECTION_NAME => array(
            'name' => 'section_name',
            'required' => false,
            'type' => 7,
        ),
        self::STR_VALUE => array(
            'name' => 'str_value',
            'required' => false,
            'type' => 7,
        ),
        self::INT_VALUE => array(
            'name' => 'int_value',
            'required' => false,
            'type' => 5,
        ),
        self::REAL_VALUE => array(
            'name' => 'real_value',
            'required' => false,
            'type' => 1,
        ),
        self::PREFIX => array(
            'name' => 'prefix',
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
        $this->values[self::SCHEMA_ID] = null;
        $this->values[self::SCHEMA_NAME] = null;
        $this->values[self::SECTION_ID] = null;
        $this->values[self::SECTION_NAME] = null;
        $this->values[self::STR_VALUE] = null;
        $this->values[self::INT_VALUE] = null;
        $this->values[self::REAL_VALUE] = null;
        $this->values[self::PREFIX] = null;
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
     * Sets value of 'schema_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSchemaId($value)
    {
        return $this->set(self::SCHEMA_ID, $value);
    }

    /**
     * Returns value of 'schema_id' property
     *
     * @return int
     */
    public function getSchemaId()
    {
        return $this->get(self::SCHEMA_ID);
    }

    /**
     * Sets value of 'schema_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchemaName($value)
    {
        return $this->set(self::SCHEMA_NAME, $value);
    }

    /**
     * Returns value of 'schema_name' property
     *
     * @return string
     */
    public function getSchemaName()
    {
        return $this->get(self::SCHEMA_NAME);
    }

    /**
     * Sets value of 'section_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectionId($value)
    {
        return $this->set(self::SECTION_ID, $value);
    }

    /**
     * Returns value of 'section_id' property
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->get(self::SECTION_ID);
    }

    /**
     * Sets value of 'section_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSectionName($value)
    {
        return $this->set(self::SECTION_NAME, $value);
    }

    /**
     * Returns value of 'section_name' property
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->get(self::SECTION_NAME);
    }

    /**
     * Sets value of 'str_value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStrValue($value)
    {
        return $this->set(self::STR_VALUE, $value);
    }

    /**
     * Returns value of 'str_value' property
     *
     * @return string
     */
    public function getStrValue()
    {
        return $this->get(self::STR_VALUE);
    }

    /**
     * Sets value of 'int_value' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIntValue($value)
    {
        return $this->set(self::INT_VALUE, $value);
    }

    /**
     * Returns value of 'int_value' property
     *
     * @return int
     */
    public function getIntValue()
    {
        return $this->get(self::INT_VALUE);
    }

    /**
     * Sets value of 'real_value' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setRealValue($value)
    {
        return $this->set(self::REAL_VALUE, $value);
    }

    /**
     * Returns value of 'real_value' property
     *
     * @return float
     */
    public function getRealValue()
    {
        return $this->get(self::REAL_VALUE);
    }

    /**
     * Sets value of 'prefix' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrefix($value)
    {
        return $this->set(self::PREFIX, $value);
    }

    /**
     * Returns value of 'prefix' property
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->get(self::PREFIX);
    }
}

/**
 * QueryIntRange message
 */
class Wmise_QueryIntRange extends ProtobufMessage
{
    /* Field index constants */
    const SCHEMA_ID = 1;
    const SCHEMA_NAME = 2;
    const SECTION_ID = 3;
    const SECTION_NAME = 4;
    const PREFIX = 8;
    const MIN = 11;
    const MAX = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCHEMA_ID => array(
            'name' => 'schema_id',
            'required' => false,
            'type' => 5,
        ),
        self::SCHEMA_NAME => array(
            'name' => 'schema_name',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION_ID => array(
            'name' => 'section_id',
            'required' => false,
            'type' => 5,
        ),
        self::SECTION_NAME => array(
            'name' => 'section_name',
            'required' => false,
            'type' => 7,
        ),
        self::PREFIX => array(
            'name' => 'prefix',
            'required' => false,
            'type' => 7,
        ),
        self::MIN => array(
            'name' => 'min',
            'required' => true,
            'type' => 5,
        ),
        self::MAX => array(
            'name' => 'max',
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
        $this->values[self::SCHEMA_ID] = null;
        $this->values[self::SCHEMA_NAME] = null;
        $this->values[self::SECTION_ID] = null;
        $this->values[self::SECTION_NAME] = null;
        $this->values[self::PREFIX] = null;
        $this->values[self::MIN] = null;
        $this->values[self::MAX] = null;
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
     * Sets value of 'schema_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSchemaId($value)
    {
        return $this->set(self::SCHEMA_ID, $value);
    }

    /**
     * Returns value of 'schema_id' property
     *
     * @return int
     */
    public function getSchemaId()
    {
        return $this->get(self::SCHEMA_ID);
    }

    /**
     * Sets value of 'schema_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchemaName($value)
    {
        return $this->set(self::SCHEMA_NAME, $value);
    }

    /**
     * Returns value of 'schema_name' property
     *
     * @return string
     */
    public function getSchemaName()
    {
        return $this->get(self::SCHEMA_NAME);
    }

    /**
     * Sets value of 'section_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectionId($value)
    {
        return $this->set(self::SECTION_ID, $value);
    }

    /**
     * Returns value of 'section_id' property
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->get(self::SECTION_ID);
    }

    /**
     * Sets value of 'section_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSectionName($value)
    {
        return $this->set(self::SECTION_NAME, $value);
    }

    /**
     * Returns value of 'section_name' property
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->get(self::SECTION_NAME);
    }

    /**
     * Sets value of 'prefix' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrefix($value)
    {
        return $this->set(self::PREFIX, $value);
    }

    /**
     * Returns value of 'prefix' property
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->get(self::PREFIX);
    }

    /**
     * Sets value of 'min' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMin($value)
    {
        return $this->set(self::MIN, $value);
    }

    /**
     * Returns value of 'min' property
     *
     * @return int
     */
    public function getMin()
    {
        return $this->get(self::MIN);
    }

    /**
     * Sets value of 'max' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMax($value)
    {
        return $this->set(self::MAX, $value);
    }

    /**
     * Returns value of 'max' property
     *
     * @return int
     */
    public function getMax()
    {
        return $this->get(self::MAX);
    }
}

/**
 * QueryRealRange message
 */
class Wmise_QueryRealRange extends ProtobufMessage
{
    /* Field index constants */
    const SCHEMA_ID = 1;
    const SCHEMA_NAME = 2;
    const SECTION_ID = 3;
    const SECTION_NAME = 4;
    const PREFIX = 8;
    const MIN = 11;
    const MAX = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCHEMA_ID => array(
            'name' => 'schema_id',
            'required' => false,
            'type' => 5,
        ),
        self::SCHEMA_NAME => array(
            'name' => 'schema_name',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION_ID => array(
            'name' => 'section_id',
            'required' => false,
            'type' => 5,
        ),
        self::SECTION_NAME => array(
            'name' => 'section_name',
            'required' => false,
            'type' => 7,
        ),
        self::PREFIX => array(
            'name' => 'prefix',
            'required' => false,
            'type' => 7,
        ),
        self::MIN => array(
            'name' => 'min',
            'required' => true,
            'type' => 1,
        ),
        self::MAX => array(
            'name' => 'max',
            'required' => true,
            'type' => 1,
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
        $this->values[self::SCHEMA_ID] = null;
        $this->values[self::SCHEMA_NAME] = null;
        $this->values[self::SECTION_ID] = null;
        $this->values[self::SECTION_NAME] = null;
        $this->values[self::PREFIX] = null;
        $this->values[self::MIN] = null;
        $this->values[self::MAX] = null;
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
     * Sets value of 'schema_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSchemaId($value)
    {
        return $this->set(self::SCHEMA_ID, $value);
    }

    /**
     * Returns value of 'schema_id' property
     *
     * @return int
     */
    public function getSchemaId()
    {
        return $this->get(self::SCHEMA_ID);
    }

    /**
     * Sets value of 'schema_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchemaName($value)
    {
        return $this->set(self::SCHEMA_NAME, $value);
    }

    /**
     * Returns value of 'schema_name' property
     *
     * @return string
     */
    public function getSchemaName()
    {
        return $this->get(self::SCHEMA_NAME);
    }

    /**
     * Sets value of 'section_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectionId($value)
    {
        return $this->set(self::SECTION_ID, $value);
    }

    /**
     * Returns value of 'section_id' property
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->get(self::SECTION_ID);
    }

    /**
     * Sets value of 'section_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSectionName($value)
    {
        return $this->set(self::SECTION_NAME, $value);
    }

    /**
     * Returns value of 'section_name' property
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->get(self::SECTION_NAME);
    }

    /**
     * Sets value of 'prefix' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrefix($value)
    {
        return $this->set(self::PREFIX, $value);
    }

    /**
     * Returns value of 'prefix' property
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->get(self::PREFIX);
    }

    /**
     * Sets value of 'min' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setMin($value)
    {
        return $this->set(self::MIN, $value);
    }

    /**
     * Returns value of 'min' property
     *
     * @return float
     */
    public function getMin()
    {
        return $this->get(self::MIN);
    }

    /**
     * Sets value of 'max' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setMax($value)
    {
        return $this->set(self::MAX, $value);
    }

    /**
     * Returns value of 'max' property
     *
     * @return float
     */
    public function getMax()
    {
        return $this->get(self::MAX);
    }
}

/**
 * QueryRange2D message
 */
class Wmise_QueryRange2D extends ProtobufMessage
{
    /* Field index constants */
    const SCHEMA_ID = 1;
    const SCHEMA_NAME = 2;
    const SECTION_ID = 3;
    const SECTION_NAME = 4;
    const PREFIX = 8;
    const X_MIN = 11;
    const X_MAX = 12;
    const Y_MIN = 13;
    const Y_MAX = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCHEMA_ID => array(
            'name' => 'schema_id',
            'required' => false,
            'type' => 5,
        ),
        self::SCHEMA_NAME => array(
            'name' => 'schema_name',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION_ID => array(
            'name' => 'section_id',
            'required' => false,
            'type' => 5,
        ),
        self::SECTION_NAME => array(
            'name' => 'section_name',
            'required' => false,
            'type' => 7,
        ),
        self::PREFIX => array(
            'name' => 'prefix',
            'required' => false,
            'type' => 7,
        ),
        self::X_MIN => array(
            'name' => 'x_min',
            'required' => true,
            'type' => 5,
        ),
        self::X_MAX => array(
            'name' => 'x_max',
            'required' => true,
            'type' => 5,
        ),
        self::Y_MIN => array(
            'name' => 'y_min',
            'required' => true,
            'type' => 5,
        ),
        self::Y_MAX => array(
            'name' => 'y_max',
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
        $this->values[self::SCHEMA_ID] = null;
        $this->values[self::SCHEMA_NAME] = null;
        $this->values[self::SECTION_ID] = null;
        $this->values[self::SECTION_NAME] = null;
        $this->values[self::PREFIX] = null;
        $this->values[self::X_MIN] = null;
        $this->values[self::X_MAX] = null;
        $this->values[self::Y_MIN] = null;
        $this->values[self::Y_MAX] = null;
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
     * Sets value of 'schema_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSchemaId($value)
    {
        return $this->set(self::SCHEMA_ID, $value);
    }

    /**
     * Returns value of 'schema_id' property
     *
     * @return int
     */
    public function getSchemaId()
    {
        return $this->get(self::SCHEMA_ID);
    }

    /**
     * Sets value of 'schema_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchemaName($value)
    {
        return $this->set(self::SCHEMA_NAME, $value);
    }

    /**
     * Returns value of 'schema_name' property
     *
     * @return string
     */
    public function getSchemaName()
    {
        return $this->get(self::SCHEMA_NAME);
    }

    /**
     * Sets value of 'section_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectionId($value)
    {
        return $this->set(self::SECTION_ID, $value);
    }

    /**
     * Returns value of 'section_id' property
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->get(self::SECTION_ID);
    }

    /**
     * Sets value of 'section_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSectionName($value)
    {
        return $this->set(self::SECTION_NAME, $value);
    }

    /**
     * Returns value of 'section_name' property
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->get(self::SECTION_NAME);
    }

    /**
     * Sets value of 'prefix' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrefix($value)
    {
        return $this->set(self::PREFIX, $value);
    }

    /**
     * Returns value of 'prefix' property
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->get(self::PREFIX);
    }

    /**
     * Sets value of 'x_min' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setXMin($value)
    {
        return $this->set(self::X_MIN, $value);
    }

    /**
     * Returns value of 'x_min' property
     *
     * @return int
     */
    public function getXMin()
    {
        return $this->get(self::X_MIN);
    }

    /**
     * Sets value of 'x_max' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setXMax($value)
    {
        return $this->set(self::X_MAX, $value);
    }

    /**
     * Returns value of 'x_max' property
     *
     * @return int
     */
    public function getXMax()
    {
        return $this->get(self::X_MAX);
    }

    /**
     * Sets value of 'y_min' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setYMin($value)
    {
        return $this->set(self::Y_MIN, $value);
    }

    /**
     * Returns value of 'y_min' property
     *
     * @return int
     */
    public function getYMin()
    {
        return $this->get(self::Y_MIN);
    }

    /**
     * Sets value of 'y_max' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setYMax($value)
    {
        return $this->set(self::Y_MAX, $value);
    }

    /**
     * Returns value of 'y_max' property
     *
     * @return int
     */
    public function getYMax()
    {
        return $this->get(self::Y_MAX);
    }
}

/**
 * QueryNode message
 */
class Wmise_QueryNode extends ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const VALUE = 2;
    const CHILDREN = 3;
    const INT_RANGE = 4;
    const REAL_RANGE = 5;
    const RANGE_2D = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => 5,
        ),
        self::VALUE => array(
            'name' => 'value',
            'required' => false,
            'type' => 'Wmise_QueryValueNode'
        ),
        self::CHILDREN => array(
            'name' => 'children',
            'repeated' => true,
            'type' => 'Wmise_QueryNode'
        ),
        self::INT_RANGE => array(
            'name' => 'int_range',
            'required' => false,
            'type' => 'Wmise_QueryIntRange'
        ),
        self::REAL_RANGE => array(
            'name' => 'real_range',
            'required' => false,
            'type' => 'Wmise_QueryRealRange'
        ),
        self::RANGE_2D => array(
            'name' => 'range_2d',
            'required' => false,
            'type' => 'Wmise_QueryRange2D'
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
        $this->values[self::TYPE] = null;
        $this->values[self::VALUE] = null;
        $this->values[self::CHILDREN] = array();
        $this->values[self::INT_RANGE] = null;
        $this->values[self::REAL_RANGE] = null;
        $this->values[self::RANGE_2D] = null;
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
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'value' property
     *
     * @param Wmise_QueryValueNode $value Property value
     *
     * @return null
     */
    public function setValue(Wmise_QueryValueNode $value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return Wmise_QueryValueNode
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }

    /**
     * Appends value to 'children' list
     *
     * @param Wmise_QueryNode $value Value to append
     *
     * @return null
     */
    public function appendChildren(Wmise_QueryNode $value)
    {
        return $this->append(self::CHILDREN, $value);
    }

    /**
     * Clears 'children' list
     *
     * @return null
     */
    public function clearChildren()
    {
        return $this->clear(self::CHILDREN);
    }

    /**
     * Returns 'children' list
     *
     * @return Wmise_QueryNode[]
     */
    public function getChildren()
    {
        return $this->get(self::CHILDREN);
    }

    /**
     * Returns 'children' iterator
     *
     * @return ArrayIterator
     */
    public function getChildrenIterator()
    {
        return new ArrayIterator($this->get(self::CHILDREN));
    }

    /**
     * Returns element from 'children' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_QueryNode
     */
    public function getChildrenAt($offset)
    {
        return $this->get(self::CHILDREN, $offset);
    }

    /**
     * Returns count of 'children' list
     *
     * @return int
     */
    public function getChildrenCount()
    {
        return $this->count(self::CHILDREN);
    }

    /**
     * Sets value of 'int_range' property
     *
     * @param Wmise_QueryIntRange $value Property value
     *
     * @return null
     */
    public function setIntRange(Wmise_QueryIntRange $value)
    {
        return $this->set(self::INT_RANGE, $value);
    }

    /**
     * Returns value of 'int_range' property
     *
     * @return Wmise_QueryIntRange
     */
    public function getIntRange()
    {
        return $this->get(self::INT_RANGE);
    }

    /**
     * Sets value of 'real_range' property
     *
     * @param Wmise_QueryRealRange $value Property value
     *
     * @return null
     */
    public function setRealRange(Wmise_QueryRealRange $value)
    {
        return $this->set(self::REAL_RANGE, $value);
    }

    /**
     * Returns value of 'real_range' property
     *
     * @return Wmise_QueryRealRange
     */
    public function getRealRange()
    {
        return $this->get(self::REAL_RANGE);
    }

    /**
     * Sets value of 'range_2d' property
     *
     * @param Wmise_QueryRange2D $value Property value
     *
     * @return null
     */
    public function setRange2d(Wmise_QueryRange2D $value)
    {
        return $this->set(self::RANGE_2D, $value);
    }

    /**
     * Returns value of 'range_2d' property
     *
     * @return Wmise_QueryRange2D
     */
    public function getRange2d()
    {
        return $this->get(self::RANGE_2D);
    }
}

/**
 * MatchedAnnotation message
 */
class Wmise_MatchedAnnotation extends ProtobufMessage
{
    /* Field index constants */
    const NODE = 1;
    const HITS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NODE => array(
            'name' => 'node',
            'required' => true,
            'type' => 'Wmise_QueryNode'
        ),
        self::HITS => array(
            'name' => 'hits',
            'repeated' => true,
            'type' => 'Wmise_TokenHit'
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
        $this->values[self::NODE] = null;
        $this->values[self::HITS] = array();
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
     * Sets value of 'node' property
     *
     * @param Wmise_QueryNode $value Property value
     *
     * @return null
     */
    public function setNode(Wmise_QueryNode $value)
    {
        return $this->set(self::NODE, $value);
    }

    /**
     * Returns value of 'node' property
     *
     * @return Wmise_QueryNode
     */
    public function getNode()
    {
        return $this->get(self::NODE);
    }

    /**
     * Appends value to 'hits' list
     *
     * @param Wmise_TokenHit $value Value to append
     *
     * @return null
     */
    public function appendHits(Wmise_TokenHit $value)
    {
        return $this->append(self::HITS, $value);
    }

    /**
     * Clears 'hits' list
     *
     * @return null
     */
    public function clearHits()
    {
        return $this->clear(self::HITS);
    }

    /**
     * Returns 'hits' list
     *
     * @return Wmise_TokenHit[]
     */
    public function getHits()
    {
        return $this->get(self::HITS);
    }

    /**
     * Returns 'hits' iterator
     *
     * @return ArrayIterator
     */
    public function getHitsIterator()
    {
        return new ArrayIterator($this->get(self::HITS));
    }

    /**
     * Returns element from 'hits' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_TokenHit
     */
    public function getHitsAt($offset)
    {
        return $this->get(self::HITS, $offset);
    }

    /**
     * Returns count of 'hits' list
     *
     * @return int
     */
    public function getHitsCount()
    {
        return $this->count(self::HITS);
    }
}

/**
 * Attachment message
 */
class Wmise_Attachment extends ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const MODE = 2;
    const TOKENHITS = 3;
    const NEXT_POSTS = 4;
    const SECTION_IDS = 5;
    const SEGS = 6;
    const SEGDATAS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => 5,
        ),
        self::MODE => array(
            'name' => 'mode',
            'required' => false,
            'type' => 5,
        ),
        self::TOKENHITS => array(
            'name' => 'tokenhits',
            'repeated' => true,
            'type' => 'Wmise_TokenHit'
        ),
        self::NEXT_POSTS => array(
            'name' => 'next_posts',
            'repeated' => true,
            'type' => 5,
        ),
        self::SECTION_IDS => array(
            'name' => 'section_ids',
            'repeated' => true,
            'type' => 5,
        ),
        self::SEGS => array(
            'name' => 'segs',
            'repeated' => true,
            'type' => 'Wmise_SegInfo'
        ),
        self::SEGDATAS => array(
            'name' => 'segdatas',
            'repeated' => true,
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
        $this->values[self::GID] = null;
        $this->values[self::MODE] = null;
        $this->values[self::TOKENHITS] = array();
        $this->values[self::NEXT_POSTS] = array();
        $this->values[self::SECTION_IDS] = array();
        $this->values[self::SEGS] = array();
        $this->values[self::SEGDATAS] = array();
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
     * Sets value of 'gid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGid($value)
    {
        return $this->set(self::GID, $value);
    }

    /**
     * Returns value of 'gid' property
     *
     * @return int
     */
    public function getGid()
    {
        return $this->get(self::GID);
    }

    /**
     * Sets value of 'mode' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMode($value)
    {
        return $this->set(self::MODE, $value);
    }

    /**
     * Returns value of 'mode' property
     *
     * @return int
     */
    public function getMode()
    {
        return $this->get(self::MODE);
    }

    /**
     * Appends value to 'tokenhits' list
     *
     * @param Wmise_TokenHit $value Value to append
     *
     * @return null
     */
    public function appendTokenhits(Wmise_TokenHit $value)
    {
        return $this->append(self::TOKENHITS, $value);
    }

    /**
     * Clears 'tokenhits' list
     *
     * @return null
     */
    public function clearTokenhits()
    {
        return $this->clear(self::TOKENHITS);
    }

    /**
     * Returns 'tokenhits' list
     *
     * @return Wmise_TokenHit[]
     */
    public function getTokenhits()
    {
        return $this->get(self::TOKENHITS);
    }

    /**
     * Returns 'tokenhits' iterator
     *
     * @return ArrayIterator
     */
    public function getTokenhitsIterator()
    {
        return new ArrayIterator($this->get(self::TOKENHITS));
    }

    /**
     * Returns element from 'tokenhits' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_TokenHit
     */
    public function getTokenhitsAt($offset)
    {
        return $this->get(self::TOKENHITS, $offset);
    }

    /**
     * Returns count of 'tokenhits' list
     *
     * @return int
     */
    public function getTokenhitsCount()
    {
        return $this->count(self::TOKENHITS);
    }

    /**
     * Appends value to 'next_posts' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendNextPosts($value)
    {
        return $this->append(self::NEXT_POSTS, $value);
    }

    /**
     * Clears 'next_posts' list
     *
     * @return null
     */
    public function clearNextPosts()
    {
        return $this->clear(self::NEXT_POSTS);
    }

    /**
     * Returns 'next_posts' list
     *
     * @return int[]
     */
    public function getNextPosts()
    {
        return $this->get(self::NEXT_POSTS);
    }

    /**
     * Returns 'next_posts' iterator
     *
     * @return ArrayIterator
     */
    public function getNextPostsIterator()
    {
        return new ArrayIterator($this->get(self::NEXT_POSTS));
    }

    /**
     * Returns element from 'next_posts' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getNextPostsAt($offset)
    {
        return $this->get(self::NEXT_POSTS, $offset);
    }

    /**
     * Returns count of 'next_posts' list
     *
     * @return int
     */
    public function getNextPostsCount()
    {
        return $this->count(self::NEXT_POSTS);
    }

    /**
     * Appends value to 'section_ids' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSectionIds($value)
    {
        return $this->append(self::SECTION_IDS, $value);
    }

    /**
     * Clears 'section_ids' list
     *
     * @return null
     */
    public function clearSectionIds()
    {
        return $this->clear(self::SECTION_IDS);
    }

    /**
     * Returns 'section_ids' list
     *
     * @return int[]
     */
    public function getSectionIds()
    {
        return $this->get(self::SECTION_IDS);
    }

    /**
     * Returns 'section_ids' iterator
     *
     * @return ArrayIterator
     */
    public function getSectionIdsIterator()
    {
        return new ArrayIterator($this->get(self::SECTION_IDS));
    }

    /**
     * Returns element from 'section_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSectionIdsAt($offset)
    {
        return $this->get(self::SECTION_IDS, $offset);
    }

    /**
     * Returns count of 'section_ids' list
     *
     * @return int
     */
    public function getSectionIdsCount()
    {
        return $this->count(self::SECTION_IDS);
    }

    /**
     * Appends value to 'segs' list
     *
     * @param Wmise_SegInfo $value Value to append
     *
     * @return null
     */
    public function appendSegs(Wmise_SegInfo $value)
    {
        return $this->append(self::SEGS, $value);
    }

    /**
     * Clears 'segs' list
     *
     * @return null
     */
    public function clearSegs()
    {
        return $this->clear(self::SEGS);
    }

    /**
     * Returns 'segs' list
     *
     * @return Wmise_SegInfo[]
     */
    public function getSegs()
    {
        return $this->get(self::SEGS);
    }

    /**
     * Returns 'segs' iterator
     *
     * @return ArrayIterator
     */
    public function getSegsIterator()
    {
        return new ArrayIterator($this->get(self::SEGS));
    }

    /**
     * Returns element from 'segs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_SegInfo
     */
    public function getSegsAt($offset)
    {
        return $this->get(self::SEGS, $offset);
    }

    /**
     * Returns count of 'segs' list
     *
     * @return int
     */
    public function getSegsCount()
    {
        return $this->count(self::SEGS);
    }

    /**
     * Appends value to 'segdatas' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendSegdatas($value)
    {
        return $this->append(self::SEGDATAS, $value);
    }

    /**
     * Clears 'segdatas' list
     *
     * @return null
     */
    public function clearSegdatas()
    {
        return $this->clear(self::SEGDATAS);
    }

    /**
     * Returns 'segdatas' list
     *
     * @return string[]
     */
    public function getSegdatas()
    {
        return $this->get(self::SEGDATAS);
    }

    /**
     * Returns 'segdatas' iterator
     *
     * @return ArrayIterator
     */
    public function getSegdatasIterator()
    {
        return new ArrayIterator($this->get(self::SEGDATAS));
    }

    /**
     * Returns element from 'segdatas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getSegdatasAt($offset)
    {
        return $this->get(self::SEGDATAS, $offset);
    }

    /**
     * Returns count of 'segdatas' list
     *
     * @return int
     */
    public function getSegdatasCount()
    {
        return $this->count(self::SEGDATAS);
    }
}

/**
 * ExtAttachment message
 */
class Wmise_ExtAttachment extends ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
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
}

/**
 * BaseDoc message
 */
class Wmise_BaseDoc extends ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const LID = 2;
    const DOC_SCORE = 3;
    const DIMENSION = 4;
    const SCORE = 5;
    const ATTACH = 6;
    const EXT_ATTACH = 7;
    const ANNOTATIONS = 10;
    const MATCHED_ANNOTATIONS = 11;
    const DEBUG_LOGS = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => true,
            'type' => 5,
        ),
        self::LID => array(
            'default' => -1, 
            'name' => 'lid',
            'required' => false,
            'type' => 5,
        ),
        self::DOC_SCORE => array(
            'default' => 0, 
            'name' => 'doc_score',
            'required' => false,
            'type' => 5,
        ),
        self::DIMENSION => array(
            'name' => 'dimension',
            'required' => false,
            'type' => 7,
        ),
        self::SCORE => array(
            'default' => 0.0, 
            'name' => 'score',
            'required' => false,
            'type' => 1,
        ),
        self::ATTACH => array(
            'name' => 'attach',
            'required' => false,
            'type' => 'Wmise_Attachment'
        ),
        self::EXT_ATTACH => array(
            'name' => 'ext_attach',
            'required' => false,
            'type' => 'Wmise_ExtAttachment'
        ),
        self::ANNOTATIONS => array(
            'name' => 'annotations',
            'repeated' => true,
            'type' => 'Wmise_Annotation'
        ),
        self::MATCHED_ANNOTATIONS => array(
            'name' => 'matched_annotations',
            'repeated' => true,
            'type' => 'Wmise_MatchedAnnotation'
        ),
        self::DEBUG_LOGS => array(
            'name' => 'debug_logs',
            'repeated' => true,
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
        $this->values[self::GID] = null;
        $this->values[self::LID] = -1;
        $this->values[self::DOC_SCORE] = 0;
        $this->values[self::DIMENSION] = null;
        $this->values[self::SCORE] = 0.0;
        $this->values[self::ATTACH] = null;
        $this->values[self::EXT_ATTACH] = null;
        $this->values[self::ANNOTATIONS] = array();
        $this->values[self::MATCHED_ANNOTATIONS] = array();
        $this->values[self::DEBUG_LOGS] = array();
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
     * Sets value of 'gid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGid($value)
    {
        return $this->set(self::GID, $value);
    }

    /**
     * Returns value of 'gid' property
     *
     * @return int
     */
    public function getGid()
    {
        return $this->get(self::GID);
    }

    /**
     * Sets value of 'lid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLid($value)
    {
        return $this->set(self::LID, $value);
    }

    /**
     * Returns value of 'lid' property
     *
     * @return int
     */
    public function getLid()
    {
        return $this->get(self::LID);
    }

    /**
     * Sets value of 'doc_score' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocScore($value)
    {
        return $this->set(self::DOC_SCORE, $value);
    }

    /**
     * Returns value of 'doc_score' property
     *
     * @return int
     */
    public function getDocScore()
    {
        return $this->get(self::DOC_SCORE);
    }

    /**
     * Sets value of 'dimension' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDimension($value)
    {
        return $this->set(self::DIMENSION, $value);
    }

    /**
     * Returns value of 'dimension' property
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->get(self::DIMENSION);
    }

    /**
     * Sets value of 'score' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setScore($value)
    {
        return $this->set(self::SCORE, $value);
    }

    /**
     * Returns value of 'score' property
     *
     * @return float
     */
    public function getScore()
    {
        return $this->get(self::SCORE);
    }

    /**
     * Sets value of 'attach' property
     *
     * @param Wmise_Attachment $value Property value
     *
     * @return null
     */
    public function setAttach(Wmise_Attachment $value)
    {
        return $this->set(self::ATTACH, $value);
    }

    /**
     * Returns value of 'attach' property
     *
     * @return Wmise_Attachment
     */
    public function getAttach()
    {
        return $this->get(self::ATTACH);
    }

    /**
     * Sets value of 'ext_attach' property
     *
     * @param Wmise_ExtAttachment $value Property value
     *
     * @return null
     */
    public function setExtAttach(Wmise_ExtAttachment $value)
    {
        return $this->set(self::EXT_ATTACH, $value);
    }

    /**
     * Returns value of 'ext_attach' property
     *
     * @return Wmise_ExtAttachment
     */
    public function getExtAttach()
    {
        return $this->get(self::EXT_ATTACH);
    }

    /**
     * Appends value to 'annotations' list
     *
     * @param Wmise_Annotation $value Value to append
     *
     * @return null
     */
    public function appendAnnotations(Wmise_Annotation $value)
    {
        return $this->append(self::ANNOTATIONS, $value);
    }

    /**
     * Clears 'annotations' list
     *
     * @return null
     */
    public function clearAnnotations()
    {
        return $this->clear(self::ANNOTATIONS);
    }

    /**
     * Returns 'annotations' list
     *
     * @return Wmise_Annotation[]
     */
    public function getAnnotations()
    {
        return $this->get(self::ANNOTATIONS);
    }

    /**
     * Returns 'annotations' iterator
     *
     * @return ArrayIterator
     */
    public function getAnnotationsIterator()
    {
        return new ArrayIterator($this->get(self::ANNOTATIONS));
    }

    /**
     * Returns element from 'annotations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_Annotation
     */
    public function getAnnotationsAt($offset)
    {
        return $this->get(self::ANNOTATIONS, $offset);
    }

    /**
     * Returns count of 'annotations' list
     *
     * @return int
     */
    public function getAnnotationsCount()
    {
        return $this->count(self::ANNOTATIONS);
    }

    /**
     * Appends value to 'matched_annotations' list
     *
     * @param Wmise_MatchedAnnotation $value Value to append
     *
     * @return null
     */
    public function appendMatchedAnnotations(Wmise_MatchedAnnotation $value)
    {
        return $this->append(self::MATCHED_ANNOTATIONS, $value);
    }

    /**
     * Clears 'matched_annotations' list
     *
     * @return null
     */
    public function clearMatchedAnnotations()
    {
        return $this->clear(self::MATCHED_ANNOTATIONS);
    }

    /**
     * Returns 'matched_annotations' list
     *
     * @return Wmise_MatchedAnnotation[]
     */
    public function getMatchedAnnotations()
    {
        return $this->get(self::MATCHED_ANNOTATIONS);
    }

    /**
     * Returns 'matched_annotations' iterator
     *
     * @return ArrayIterator
     */
    public function getMatchedAnnotationsIterator()
    {
        return new ArrayIterator($this->get(self::MATCHED_ANNOTATIONS));
    }

    /**
     * Returns element from 'matched_annotations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_MatchedAnnotation
     */
    public function getMatchedAnnotationsAt($offset)
    {
        return $this->get(self::MATCHED_ANNOTATIONS, $offset);
    }

    /**
     * Returns count of 'matched_annotations' list
     *
     * @return int
     */
    public function getMatchedAnnotationsCount()
    {
        return $this->count(self::MATCHED_ANNOTATIONS);
    }

    /**
     * Appends value to 'debug_logs' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDebugLogs($value)
    {
        return $this->append(self::DEBUG_LOGS, $value);
    }

    /**
     * Clears 'debug_logs' list
     *
     * @return null
     */
    public function clearDebugLogs()
    {
        return $this->clear(self::DEBUG_LOGS);
    }

    /**
     * Returns 'debug_logs' list
     *
     * @return string[]
     */
    public function getDebugLogs()
    {
        return $this->get(self::DEBUG_LOGS);
    }

    /**
     * Returns 'debug_logs' iterator
     *
     * @return ArrayIterator
     */
    public function getDebugLogsIterator()
    {
        return new ArrayIterator($this->get(self::DEBUG_LOGS));
    }

    /**
     * Returns element from 'debug_logs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDebugLogsAt($offset)
    {
        return $this->get(self::DEBUG_LOGS, $offset);
    }

    /**
     * Returns count of 'debug_logs' list
     *
     * @return int
     */
    public function getDebugLogsCount()
    {
        return $this->count(self::DEBUG_LOGS);
    }
}
