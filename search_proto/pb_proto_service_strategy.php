<?php
/**
 * Auto generated from service_strategy.proto at 2015-02-28 11:00:41
 *
 * wmise package
 */

/**
 * CustomContext message
 */
class Wmise_CustomContext extends ProtobufMessage
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
 * ResultShard message
 */
class Wmise_ResultShard extends ProtobufMessage
{
    /* Field index constants */
    const INDEX = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEX => array(
            'name' => 'index',
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
        $this->values[self::INDEX] = null;
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
     * Sets value of 'index' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->get(self::INDEX);
    }
}

/**
 * ResultItem message
 */
class Wmise_ResultItem extends ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const LID = 2;
    const SCORE = 3;
    const DEBUG_LOGS = 10;
    const RESULT_SHARD = 100;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => true,
            'type' => 5,
        ),
        self::LID => array(
            'name' => 'lid',
            'required' => true,
            'type' => 5,
        ),
        self::SCORE => array(
            'default' => 0.0, 
            'name' => 'score',
            'required' => false,
            'type' => 1,
        ),
        self::DEBUG_LOGS => array(
            'name' => 'debug_logs',
            'repeated' => true,
            'type' => 7,
        ),
        self::RESULT_SHARD => array(
            'name' => 'result_shard',
            'required' => false,
            'type' => 'Wmise_ResultShard'
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
        $this->values[self::LID] = null;
        $this->values[self::SCORE] = 0.0;
        $this->values[self::DEBUG_LOGS] = array();
        $this->values[self::RESULT_SHARD] = null;
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

    /**
     * Sets value of 'result_shard' property
     *
     * @param Wmise_ResultShard $value Property value
     *
     * @return null
     */
    public function setResultShard(Wmise_ResultShard $value)
    {
        return $this->set(self::RESULT_SHARD, $value);
    }

    /**
     * Returns value of 'result_shard' property
     *
     * @return Wmise_ResultShard
     */
    public function getResultShard()
    {
        return $this->get(self::RESULT_SHARD);
    }
}
