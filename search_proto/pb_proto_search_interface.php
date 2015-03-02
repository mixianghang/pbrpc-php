<?php
/**
 * Auto generated from search_interface.proto at 2015-02-28 11:00:41
 *
 * wmise package
 */

/**
 * Experiment message
 */
class Wmise_Experiment extends ProtobufMessage
{
    /* Field index constants */
    const KEY = 1;
    const VALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'key',
            'required' => true,
            'type' => 7,
        ),
        self::VALUE => array(
            'name' => 'value',
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
        $this->values[self::KEY] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return string
     */
    public function getKey()
    {
        return $this->get(self::KEY);
    }

    /**
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }
}

/**
 * RequestMeta message
 */
class Wmise_RequestMeta extends ProtobufMessage
{
    /* Field index constants */
    const HASH = 1;
    const IP = 2;
    const TERMINAL = 3;
    const BUSINESS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HASH => array(
            'name' => 'hash',
            'required' => false,
            'type' => 5,
        ),
        self::IP => array(
            'name' => 'ip',
            'required' => true,
            'type' => 7,
        ),
        self::TERMINAL => array(
            'name' => 'terminal',
            'required' => true,
            'type' => 7,
        ),
        self::BUSINESS => array(
            'name' => 'business',
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
        $this->values[self::HASH] = null;
        $this->values[self::IP] = null;
        $this->values[self::TERMINAL] = null;
        $this->values[self::BUSINESS] = null;
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
     * Sets value of 'hash' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHash($value)
    {
        return $this->set(self::HASH, $value);
    }

    /**
     * Returns value of 'hash' property
     *
     * @return int
     */
    public function getHash()
    {
        return $this->get(self::HASH);
    }

    /**
     * Sets value of 'ip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIp($value)
    {
        return $this->set(self::IP, $value);
    }

    /**
     * Returns value of 'ip' property
     *
     * @return string
     */
    public function getIp()
    {
        return $this->get(self::IP);
    }

    /**
     * Sets value of 'terminal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTerminal($value)
    {
        return $this->set(self::TERMINAL, $value);
    }

    /**
     * Returns value of 'terminal' property
     *
     * @return string
     */
    public function getTerminal()
    {
        return $this->get(self::TERMINAL);
    }

    /**
     * Sets value of 'business' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBusiness($value)
    {
        return $this->set(self::BUSINESS, $value);
    }

    /**
     * Returns value of 'business' property
     *
     * @return string
     */
    public function getBusiness()
    {
        return $this->get(self::BUSINESS);
    }
}

/**
 * ResponseError message
 */
class Wmise_ResponseError extends ProtobufMessage
{
    /* Field index constants */
    const CODE = 1;
    const MSG = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => true,
            'type' => 6,
        ),
        self::MSG => array(
            'name' => 'msg',
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
        $this->values[self::CODE] = null;
        $this->values[self::MSG] = array();
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
     * Appends value to 'msg' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendMsg($value)
    {
        return $this->append(self::MSG, $value);
    }

    /**
     * Clears 'msg' list
     *
     * @return null
     */
    public function clearMsg()
    {
        return $this->clear(self::MSG);
    }

    /**
     * Returns 'msg' list
     *
     * @return string[]
     */
    public function getMsg()
    {
        return $this->get(self::MSG);
    }

    /**
     * Returns 'msg' iterator
     *
     * @return ArrayIterator
     */
    public function getMsgIterator()
    {
        return new ArrayIterator($this->get(self::MSG));
    }

    /**
     * Returns element from 'msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getMsgAt($offset)
    {
        return $this->get(self::MSG, $offset);
    }

    /**
     * Returns count of 'msg' list
     *
     * @return int
     */
    public function getMsgCount()
    {
        return $this->count(self::MSG);
    }
}

/**
 * SearchRequest message
 */
class Wmise_SearchRequest extends ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const LIMIT = 2;
    const START = 3;
    const TIMEOUT = 4;
    const EXPS = 5;
    const QUERY = 6;
    const CACHE = 7;
    const QUERY_NODE = 8;
    const CCXT = 9;
    const DIMENSION = 10;
    const RETRIEVE_TIMEOUT = 21;
    const RETRIEVE_DEPTH = 22;
    const RECALL_DOCS = 23;
    const SERVING_FACTOR = 31;
    const DEBUG_ON_RESPONCE = 41;
    const DEBUG_ON_SERVER = 42;
    const DEBUG_LEVEL = 43;
    const RESULTS = 50;
    const REQUEST_META = 1000;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'default' => 0, 
            'name' => 'id',
            'required' => false,
            'type' => 5,
        ),
        self::LIMIT => array(
            'default' => 10, 
            'name' => 'limit',
            'required' => false,
            'type' => 5,
        ),
        self::START => array(
            'default' => 0, 
            'name' => 'start',
            'required' => false,
            'type' => 5,
        ),
        self::TIMEOUT => array(
            'default' => 100, 
            'name' => 'timeout',
            'required' => false,
            'type' => 5,
        ),
        self::EXPS => array(
            'name' => 'exps',
            'repeated' => true,
            'type' => 'Wmise_Experiment'
        ),
        self::QUERY => array(
            'name' => 'query',
            'required' => false,
            'type' => 7,
        ),
        self::CACHE => array(
            'default' => true, 
            'name' => 'cache',
            'required' => false,
            'type' => 8,
        ),
        self::QUERY_NODE => array(
            'name' => 'query_node',
            'required' => false,
            'type' => 'Wmise_QueryNode'
        ),
        self::CCXT => array(
            'name' => 'ccxt',
            'required' => false,
            'type' => 'Wmise_CustomContext'
        ),
        self::DIMENSION => array(
            'name' => 'dimension',
            'required' => false,
            'type' => 7,
        ),
        self::RETRIEVE_TIMEOUT => array(
            'default' => 500, 
            'name' => 'retrieve_timeout',
            'required' => false,
            'type' => 5,
        ),
        self::RETRIEVE_DEPTH => array(
            'default' => 2000, 
            'name' => 'retrieve_depth',
            'required' => false,
            'type' => 5,
        ),
        self::RECALL_DOCS => array(
            'default' => 1000, 
            'name' => 'recall_docs',
            'required' => false,
            'type' => 5,
        ),
        self::SERVING_FACTOR => array(
            'default' => 2.0, 
            'name' => 'serving_factor',
            'required' => false,
            'type' => 1,
        ),
        self::DEBUG_ON_RESPONCE => array(
            'default' => false, 
            'name' => 'debug_on_responce',
            'required' => false,
            'type' => 8,
        ),
        self::DEBUG_ON_SERVER => array(
            'default' => false, 
            'name' => 'debug_on_server',
            'required' => false,
            'type' => 8,
        ),
        self::DEBUG_LEVEL => array(
            'default' => 0, 
            'name' => 'debug_level',
            'required' => false,
            'type' => 5,
        ),
        self::RESULTS => array(
            'name' => 'results',
            'repeated' => true,
            'type' => 'Wmise_ResultItem'
        ),
        self::REQUEST_META => array(
            'name' => 'request_meta',
            'required' => true,
            'type' => 'Wmise_RequestMeta'
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
        $this->values[self::ID] = 0;
        $this->values[self::LIMIT] = 10;
        $this->values[self::START] = 0;
        $this->values[self::TIMEOUT] = 100;
        $this->values[self::EXPS] = array();
        $this->values[self::QUERY] = null;
        $this->values[self::CACHE] = true;
        $this->values[self::QUERY_NODE] = null;
        $this->values[self::CCXT] = null;
        $this->values[self::DIMENSION] = null;
        $this->values[self::RETRIEVE_TIMEOUT] = 500;
        $this->values[self::RETRIEVE_DEPTH] = 2000;
        $this->values[self::RECALL_DOCS] = 1000;
        $this->values[self::SERVING_FACTOR] = 2.0;
        $this->values[self::DEBUG_ON_RESPONCE] = false;
        $this->values[self::DEBUG_ON_SERVER] = false;
        $this->values[self::DEBUG_LEVEL] = 0;
        $this->values[self::RESULTS] = array();
        $this->values[self::REQUEST_META] = null;
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
     * Sets value of 'limit' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLimit($value)
    {
        return $this->set(self::LIMIT, $value);
    }

    /**
     * Returns value of 'limit' property
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->get(self::LIMIT);
    }

    /**
     * Sets value of 'start' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStart($value)
    {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return int
     */
    public function getStart()
    {
        return $this->get(self::START);
    }

    /**
     * Sets value of 'timeout' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTimeout($value)
    {
        return $this->set(self::TIMEOUT, $value);
    }

    /**
     * Returns value of 'timeout' property
     *
     * @return int
     */
    public function getTimeout()
    {
        return $this->get(self::TIMEOUT);
    }

    /**
     * Appends value to 'exps' list
     *
     * @param Wmise_Experiment $value Value to append
     *
     * @return null
     */
    public function appendExps(Wmise_Experiment $value)
    {
        return $this->append(self::EXPS, $value);
    }

    /**
     * Clears 'exps' list
     *
     * @return null
     */
    public function clearExps()
    {
        return $this->clear(self::EXPS);
    }

    /**
     * Returns 'exps' list
     *
     * @return Wmise_Experiment[]
     */
    public function getExps()
    {
        return $this->get(self::EXPS);
    }

    /**
     * Returns 'exps' iterator
     *
     * @return ArrayIterator
     */
    public function getExpsIterator()
    {
        return new ArrayIterator($this->get(self::EXPS));
    }

    /**
     * Returns element from 'exps' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_Experiment
     */
    public function getExpsAt($offset)
    {
        return $this->get(self::EXPS, $offset);
    }

    /**
     * Returns count of 'exps' list
     *
     * @return int
     */
    public function getExpsCount()
    {
        return $this->count(self::EXPS);
    }

    /**
     * Sets value of 'query' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQuery($value)
    {
        return $this->set(self::QUERY, $value);
    }

    /**
     * Returns value of 'query' property
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->get(self::QUERY);
    }

    /**
     * Sets value of 'cache' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setCache($value)
    {
        return $this->set(self::CACHE, $value);
    }

    /**
     * Returns value of 'cache' property
     *
     * @return bool
     */
    public function getCache()
    {
        return $this->get(self::CACHE);
    }

    /**
     * Sets value of 'query_node' property
     *
     * @param Wmise_QueryNode $value Property value
     *
     * @return null
     */
    public function setQueryNode(Wmise_QueryNode $value)
    {
        return $this->set(self::QUERY_NODE, $value);
    }

    /**
     * Returns value of 'query_node' property
     *
     * @return Wmise_QueryNode
     */
    public function getQueryNode()
    {
        return $this->get(self::QUERY_NODE);
    }

    /**
     * Sets value of 'ccxt' property
     *
     * @param Wmise_CustomContext $value Property value
     *
     * @return null
     */
    public function setCcxt(Wmise_CustomContext $value)
    {
        return $this->set(self::CCXT, $value);
    }

    /**
     * Returns value of 'ccxt' property
     *
     * @return Wmise_CustomContext
     */
    public function getCcxt()
    {
        return $this->get(self::CCXT);
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
     * Sets value of 'retrieve_timeout' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRetrieveTimeout($value)
    {
        return $this->set(self::RETRIEVE_TIMEOUT, $value);
    }

    /**
     * Returns value of 'retrieve_timeout' property
     *
     * @return int
     */
    public function getRetrieveTimeout()
    {
        return $this->get(self::RETRIEVE_TIMEOUT);
    }

    /**
     * Sets value of 'retrieve_depth' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRetrieveDepth($value)
    {
        return $this->set(self::RETRIEVE_DEPTH, $value);
    }

    /**
     * Returns value of 'retrieve_depth' property
     *
     * @return int
     */
    public function getRetrieveDepth()
    {
        return $this->get(self::RETRIEVE_DEPTH);
    }

    /**
     * Sets value of 'recall_docs' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecallDocs($value)
    {
        return $this->set(self::RECALL_DOCS, $value);
    }

    /**
     * Returns value of 'recall_docs' property
     *
     * @return int
     */
    public function getRecallDocs()
    {
        return $this->get(self::RECALL_DOCS);
    }

    /**
     * Sets value of 'serving_factor' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setServingFactor($value)
    {
        return $this->set(self::SERVING_FACTOR, $value);
    }

    /**
     * Returns value of 'serving_factor' property
     *
     * @return float
     */
    public function getServingFactor()
    {
        return $this->get(self::SERVING_FACTOR);
    }

    /**
     * Sets value of 'debug_on_responce' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setDebugOnResponce($value)
    {
        return $this->set(self::DEBUG_ON_RESPONCE, $value);
    }

    /**
     * Returns value of 'debug_on_responce' property
     *
     * @return bool
     */
    public function getDebugOnResponce()
    {
        return $this->get(self::DEBUG_ON_RESPONCE);
    }

    /**
     * Sets value of 'debug_on_server' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setDebugOnServer($value)
    {
        return $this->set(self::DEBUG_ON_SERVER, $value);
    }

    /**
     * Returns value of 'debug_on_server' property
     *
     * @return bool
     */
    public function getDebugOnServer()
    {
        return $this->get(self::DEBUG_ON_SERVER);
    }

    /**
     * Sets value of 'debug_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDebugLevel($value)
    {
        return $this->set(self::DEBUG_LEVEL, $value);
    }

    /**
     * Returns value of 'debug_level' property
     *
     * @return int
     */
    public function getDebugLevel()
    {
        return $this->get(self::DEBUG_LEVEL);
    }

    /**
     * Appends value to 'results' list
     *
     * @param Wmise_ResultItem $value Value to append
     *
     * @return null
     */
    public function appendResults(Wmise_ResultItem $value)
    {
        return $this->append(self::RESULTS, $value);
    }

    /**
     * Clears 'results' list
     *
     * @return null
     */
    public function clearResults()
    {
        return $this->clear(self::RESULTS);
    }

    /**
     * Returns 'results' list
     *
     * @return Wmise_ResultItem[]
     */
    public function getResults()
    {
        return $this->get(self::RESULTS);
    }

    /**
     * Returns 'results' iterator
     *
     * @return ArrayIterator
     */
    public function getResultsIterator()
    {
        return new ArrayIterator($this->get(self::RESULTS));
    }

    /**
     * Returns element from 'results' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_ResultItem
     */
    public function getResultsAt($offset)
    {
        return $this->get(self::RESULTS, $offset);
    }

    /**
     * Returns count of 'results' list
     *
     * @return int
     */
    public function getResultsCount()
    {
        return $this->count(self::RESULTS);
    }

    /**
     * Sets value of 'request_meta' property
     *
     * @param Wmise_RequestMeta $value Property value
     *
     * @return null
     */
    public function setRequestMeta(Wmise_RequestMeta $value)
    {
        return $this->set(self::REQUEST_META, $value);
    }

    /**
     * Returns value of 'request_meta' property
     *
     * @return Wmise_RequestMeta
     */
    public function getRequestMeta()
    {
        return $this->get(self::REQUEST_META);
    }
}

/**
 * SearchResponse message
 */
class Wmise_SearchResponse extends ProtobufMessage
{
    /* Field index constants */
    const RESULTS = 1;
    const NUM_RESULTS = 2;
    const END_IDX = 3;
    const ESTIMATED_NUM_RESULTS = 4;
    const DOCS_RETRIEVED = 5;
    const DOCS_RECALLED = 6;
    const SEARCH_TIME = 7;
    const EXPS = 10;
    const STATISTICS = 11;
    const DEBUG_LOGS = 20;
    const MONITOR_LOG = 21;
    const RESPONSE_ERROR = 1000;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESULTS => array(
            'name' => 'results',
            'repeated' => true,
            'type' => 'Wmise_ResultItem'
        ),
        self::NUM_RESULTS => array(
            'name' => 'num_results',
            'required' => false,
            'type' => 5,
        ),
        self::END_IDX => array(
            'name' => 'end_idx',
            'required' => false,
            'type' => 5,
        ),
        self::ESTIMATED_NUM_RESULTS => array(
            'name' => 'estimated_num_results',
            'required' => false,
            'type' => 5,
        ),
        self::DOCS_RETRIEVED => array(
            'name' => 'docs_retrieved',
            'required' => false,
            'type' => 5,
        ),
        self::DOCS_RECALLED => array(
            'name' => 'docs_recalled',
            'required' => false,
            'type' => 5,
        ),
        self::SEARCH_TIME => array(
            'name' => 'search_time',
            'required' => false,
            'type' => 5,
        ),
        self::EXPS => array(
            'name' => 'exps',
            'repeated' => true,
            'type' => 'Wmise_Experiment'
        ),
        self::STATISTICS => array(
            'name' => 'statistics',
            'repeated' => true,
            'type' => 'Wmise_Experiment'
        ),
        self::DEBUG_LOGS => array(
            'name' => 'debug_logs',
            'repeated' => true,
            'type' => 7,
        ),
        self::MONITOR_LOG => array(
            'name' => 'monitor_log',
            'required' => false,
            'type' => 7,
        ),
        self::RESPONSE_ERROR => array(
            'name' => 'response_error',
            'required' => false,
            'type' => 'Wmise_ResponseError'
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
        $this->values[self::RESULTS] = array();
        $this->values[self::NUM_RESULTS] = null;
        $this->values[self::END_IDX] = null;
        $this->values[self::ESTIMATED_NUM_RESULTS] = null;
        $this->values[self::DOCS_RETRIEVED] = null;
        $this->values[self::DOCS_RECALLED] = null;
        $this->values[self::SEARCH_TIME] = null;
        $this->values[self::EXPS] = array();
        $this->values[self::STATISTICS] = array();
        $this->values[self::DEBUG_LOGS] = array();
        $this->values[self::MONITOR_LOG] = null;
        $this->values[self::RESPONSE_ERROR] = null;
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
     * Appends value to 'results' list
     *
     * @param Wmise_ResultItem $value Value to append
     *
     * @return null
     */
    public function appendResults(Wmise_ResultItem $value)
    {
        return $this->append(self::RESULTS, $value);
    }

    /**
     * Clears 'results' list
     *
     * @return null
     */
    public function clearResults()
    {
        return $this->clear(self::RESULTS);
    }

    /**
     * Returns 'results' list
     *
     * @return Wmise_ResultItem[]
     */
    public function getResults()
    {
        return $this->get(self::RESULTS);
    }

    /**
     * Returns 'results' iterator
     *
     * @return ArrayIterator
     */
    public function getResultsIterator()
    {
        return new ArrayIterator($this->get(self::RESULTS));
    }

    /**
     * Returns element from 'results' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_ResultItem
     */
    public function getResultsAt($offset)
    {
        return $this->get(self::RESULTS, $offset);
    }

    /**
     * Returns count of 'results' list
     *
     * @return int
     */
    public function getResultsCount()
    {
        return $this->count(self::RESULTS);
    }

    /**
     * Sets value of 'num_results' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNumResults($value)
    {
        return $this->set(self::NUM_RESULTS, $value);
    }

    /**
     * Returns value of 'num_results' property
     *
     * @return int
     */
    public function getNumResults()
    {
        return $this->get(self::NUM_RESULTS);
    }

    /**
     * Sets value of 'end_idx' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEndIdx($value)
    {
        return $this->set(self::END_IDX, $value);
    }

    /**
     * Returns value of 'end_idx' property
     *
     * @return int
     */
    public function getEndIdx()
    {
        return $this->get(self::END_IDX);
    }

    /**
     * Sets value of 'estimated_num_results' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEstimatedNumResults($value)
    {
        return $this->set(self::ESTIMATED_NUM_RESULTS, $value);
    }

    /**
     * Returns value of 'estimated_num_results' property
     *
     * @return int
     */
    public function getEstimatedNumResults()
    {
        return $this->get(self::ESTIMATED_NUM_RESULTS);
    }

    /**
     * Sets value of 'docs_retrieved' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocsRetrieved($value)
    {
        return $this->set(self::DOCS_RETRIEVED, $value);
    }

    /**
     * Returns value of 'docs_retrieved' property
     *
     * @return int
     */
    public function getDocsRetrieved()
    {
        return $this->get(self::DOCS_RETRIEVED);
    }

    /**
     * Sets value of 'docs_recalled' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocsRecalled($value)
    {
        return $this->set(self::DOCS_RECALLED, $value);
    }

    /**
     * Returns value of 'docs_recalled' property
     *
     * @return int
     */
    public function getDocsRecalled()
    {
        return $this->get(self::DOCS_RECALLED);
    }

    /**
     * Sets value of 'search_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSearchTime($value)
    {
        return $this->set(self::SEARCH_TIME, $value);
    }

    /**
     * Returns value of 'search_time' property
     *
     * @return int
     */
    public function getSearchTime()
    {
        return $this->get(self::SEARCH_TIME);
    }

    /**
     * Appends value to 'exps' list
     *
     * @param Wmise_Experiment $value Value to append
     *
     * @return null
     */
    public function appendExps(Wmise_Experiment $value)
    {
        return $this->append(self::EXPS, $value);
    }

    /**
     * Clears 'exps' list
     *
     * @return null
     */
    public function clearExps()
    {
        return $this->clear(self::EXPS);
    }

    /**
     * Returns 'exps' list
     *
     * @return Wmise_Experiment[]
     */
    public function getExps()
    {
        return $this->get(self::EXPS);
    }

    /**
     * Returns 'exps' iterator
     *
     * @return ArrayIterator
     */
    public function getExpsIterator()
    {
        return new ArrayIterator($this->get(self::EXPS));
    }

    /**
     * Returns element from 'exps' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_Experiment
     */
    public function getExpsAt($offset)
    {
        return $this->get(self::EXPS, $offset);
    }

    /**
     * Returns count of 'exps' list
     *
     * @return int
     */
    public function getExpsCount()
    {
        return $this->count(self::EXPS);
    }

    /**
     * Appends value to 'statistics' list
     *
     * @param Wmise_Experiment $value Value to append
     *
     * @return null
     */
    public function appendStatistics(Wmise_Experiment $value)
    {
        return $this->append(self::STATISTICS, $value);
    }

    /**
     * Clears 'statistics' list
     *
     * @return null
     */
    public function clearStatistics()
    {
        return $this->clear(self::STATISTICS);
    }

    /**
     * Returns 'statistics' list
     *
     * @return Wmise_Experiment[]
     */
    public function getStatistics()
    {
        return $this->get(self::STATISTICS);
    }

    /**
     * Returns 'statistics' iterator
     *
     * @return ArrayIterator
     */
    public function getStatisticsIterator()
    {
        return new ArrayIterator($this->get(self::STATISTICS));
    }

    /**
     * Returns element from 'statistics' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Wmise_Experiment
     */
    public function getStatisticsAt($offset)
    {
        return $this->get(self::STATISTICS, $offset);
    }

    /**
     * Returns count of 'statistics' list
     *
     * @return int
     */
    public function getStatisticsCount()
    {
        return $this->count(self::STATISTICS);
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
     * Sets value of 'monitor_log' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMonitorLog($value)
    {
        return $this->set(self::MONITOR_LOG, $value);
    }

    /**
     * Returns value of 'monitor_log' property
     *
     * @return string
     */
    public function getMonitorLog()
    {
        return $this->get(self::MONITOR_LOG);
    }

    /**
     * Sets value of 'response_error' property
     *
     * @param Wmise_ResponseError $value Property value
     *
     * @return null
     */
    public function setResponseError(Wmise_ResponseError $value)
    {
        return $this->set(self::RESPONSE_ERROR, $value);
    }

    /**
     * Returns value of 'response_error' property
     *
     * @return Wmise_ResponseError
     */
    public function getResponseError()
    {
        return $this->get(self::RESPONSE_ERROR);
    }
}
require_once 'pb_proto_service_strategy.php';require_once 'pb_proto_wmise_data.php';