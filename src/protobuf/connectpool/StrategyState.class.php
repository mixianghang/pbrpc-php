<?php
/***************************************************************************
 * 
 * Copyright (c) 2009 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/

/**
 * @file StrategyState.class.php
 * @author niuzp(niuzhangpeng@baidu.com)
 * @brief 
 *  
 **/

/*
 * @brief: 有状态算法，对服务进行打分，根据当前分数情况进行server的选择。
 *         这个算法使用eacc提供的get、put等方法将机器信息存储在共享内存中，
 *         使用的时候需要安装eacc的扩展
 *
 */
class StrategyState extends Strategy
{
    /*
     * @var MIN_SCORE_DEFAULT  server最低分数
     * @var MAX_SCORE_DEFAULT  server最高分数
     * @var SCORE_ADD_DEFAULT  连接成功加分值
     * @var SCORE_SUB_DEFAULT  连接失败减分值
     * @var CONNTIME_INTERVAL_DEFAULT  服务宕机后多长时间不进行连接,单位秒
     *
     */
    const MIN_SCORE_DEFAULT = 1000;
    const MAX_SCORE_DEFAULT = 1500;
    const SCORE_ADD_DEFAULT = 10;
    const SCORE_SUB_DEFAULT = 100;
    const CONNTIME_INTERVAL_DEFAULT = 120;

    private $_maxScore;
    private $_minScore;
    private $_scoreAdd;
    private $_scoreSub;
    private $_timeIntervalSec;

    /*
     * @brief: 构造函数：若传入配置数组，并且包含相应的配置字段，则使用用户指定的参数。
     *           否则，使用默认参数。
     */
    public function __construct($arrConfig)
    {
        $this->_arrConfig = $arrConfig;
        $this->_minScore = isset($arrConfig["StrategyState_MIN_SCORE"]) ? 
            intval($arrConfig["StrategyState_MIN_SCORE"]) : self::MIN_SCORE_DEFAULT;
        $this->_maxScore = isset($arrConfig["StrategyState_MAX_SCORE"]) ? 
            intval($arrConfig["StrategyState_MAX_SCORE"]) : self::MAX_SCORE_DEFAULT;
        $this->_scoreAdd = isset($arrConfig["StrategyState_SCORE_ADD"]) ? 
            intval($arrConfig["StrategyState_SCORE_ADD"]) : self::SCORE_ADD_DEFAULT;
        $this->_scoreSub = isset($arrConfig["StrategyState_SCORE_SUB"]) ? 
            intval($arrConfig["StrategyState_SCORE_SUB"]) : self::SCORE_SUB_DEFAULT;
        $this->_timeIntervalSec = isset($arrConfig["StrategyState_TIME_INTERVAL_SEC"]) ?
            intval($arrConfig["StrategyState_TIME_INTERVAL_SEC"]) : self :: CONNTIME_INTERVAL_DEFAULT;
        return true;
    }

    /*
     * @brief: 从一组机器中选择一个出来，根据分数等信息。
     *
     */
    public function selectServer($arrServers, $intBalanceCode=false)
    {
        $serverCount = count($arrServers);
        if($serverCount == 0)
        {
            return false;
        }
        $index = $this->_currentIndex;
        //如果有指定balanceCode，则第一次使用balanceCode
        if($this->_isFirstSelect == 1)
        {
            if($intBalanceCode !== false)
            {
                $index = intval($intBalanceCode);
                if($index >= $serverCount)
                {
                    $index = 0;
                }
            }
            else
            {
                $index = rand(0, $serverCount-1);
            }
        }
        else  //连接失败后的重选
        {
            $index = ($index + 1) % $serverCount;
        }
        $server = $arrServers[$index];
        $arrInfo = $this->_getServerInfo($server);
        if ($arrInfo['score'] < $this->_minScore)
        {
            //和上次连接间隔较短时，不进行连接尝试
            if (time() - $arrInfo['time'] < $this->_timeIntervalSec)
            {
                $server = false;
            }
            else
            {
                $this->_initServerInfo($server); //过段时间后，重新尝试
            }
        }
        $this->_currentIndex = $index;
        $this->_isFirstSelect = 0;
        return $server;
    }

    /*
     * @brief: 从共享内存中获取参数服务器的分数信息
     *
     */
    private function _getServerInfo($arrServer)
    {
        $strKey = $arrServer['host'].':'.$arrServer['port'];
        $arrValue = eaccelerator_get($strKey);
        if (NULL === $arrValue) 
        {  
            // the key doesn't exist or the key was expired.
            $this->_initServerInfo($arrServer);
        }
        $arrValue = eaccelerator_get($strKey);
        if (NULL === $arrValue)
        {
            $arrValue = array (
                'score'  =>  $this->_minScore,
                'time'   =>  time(),
                );
        }
        return $arrValue;
    }

    /*
     * @brief: 初始化机器分数等信息
     *
     */
    private function _initServerInfo($arrServer)
    {
        $strKey = $arrServer['host'].':'.$arrServer['port'];
        $arrValue = array (
            'score'  =>  $this->_minScore + $this->_scoreAdd * 10,
            'time'   =>  time (),
            );
        $bolRes = eaccelerator_put ($strKey,$arrValue);
        return $bolRes;
    }

    /*
     * @brief: 标记该机器有一次连接失败
     *
     */
    public function markFail($arrServer)
    {
        $arrInfo = $this->_getServerInfo($arrServer);
        $arrInfo['score'] -= $this->_scoreSub;
        $arrInfo['time'] = time ();
        $strKey = $arrServer['host'].':'.$arrServer['port'];
        $bolRes = eaccelerator_put($strKey,$arrInfo);
        return $bolRes;
    }

    /*
     * @brief: 标记该机器有一次连接成功
     *
     */
    public function markSucc($arrServer)
    {
        $arrInfo = $this->_getServerInfo ($arrServer);
        if ($arrInfo['score'] < $this->_maxScore)
        {
            $arrInfo['score'] += $this->_scoreAdd;
            $arrInfo['time'] = time ();
            $strKey = $arrServer['host'].':'.$arrServer['port'];
            $bolRes = eaccelerator_put ($strKey,$arrInfo);
            return $bolRes;
        }
        else
        {
            return true;
        }
    }
}
?>
