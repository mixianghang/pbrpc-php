<?php
/**
 * @brief class for data sending/recving via socket
 *
 * using block mode, with timeout set
 * total timeout is approximately judged
 *
 * @example
 *
**/

//define('SOCK_MIN_TIMEOUT_MS',100);

class CPHPRPCSocketWrapper
{
    protected   $_sock;
    protected   $_sock_clear;

    protected   $_intReadTimeoutUS;
    protected   $_intWriteTimeoutUS;
    protected   $_intConnectTimeoutUS;
    protected   $_strRemoteHost;
    protected   $_intRemotePort;

    public function __construct(
        $intReadTimeoutMS = 1000,
        $intWriteTimeoutMS = 1000,
        $intConnectTimeoutMS = 1000,
        $resourceSock = null
        )    {
        $this->_sock_clear = true;
        $this->_sock    = $resourceSock;
        if ($this->_sock != null) {
            $this->_sock_clear = false;
        }
        $this->setTimeout($intReadTimeoutMS, $intWriteTimeoutMS, $intConnectTimeoutMS);
    }

    public function __destruct() {
        $this->close();
    }

    public function close() {

        if (is_resource($this->_sock)) {
            if ($this->_sock_clear) {
                fclose($this->_sock);
            }
            $this->_sock = null;
        }

    }

    public function setRemote($strRemoteHost, $intRemotePort) {

        $this->_strRemoteHost       = trim($strRemoteHost);
        $this->_intRemotePort       = intval($intRemotePort);
    
    }

    public function setTimeout($intReadTimeoutMS, $intWriteTimeoutMS, $intConnectTimeoutMS = null) {
    
        $this->_intReadTimeoutUS    = intval($intReadTimeoutMS * 1000);
        $this->_intWriteTimeoutUS   = intval($intWriteTimeoutMS * 1000);
        $this->_intConnectTimeoutUS = intval($intConnectTimeoutMS * 1000);
    }

    public function setResource ($resource) {
    
        $this->close ();
        if (is_resource($resource)) {
            $this->_sock = $resource;
            return true;
        }
        return false;
    
    }

    public function connect($strRemoteHost = null, $intRemotePort = null) {
    
        if (!is_null($strRemoteHost) && !is_null($intRemotePort)) {
            $this->setRemote($strRemoteHost, $intRemotePort);
        }
        $this->close();
        $this->_sock    = fsockopen($this->_strRemoteHost, $this->_intRemotePort,
                $intErrorNo, $strErrorMessage, $this->_intConnectTimeoutUS/1000000);
        if (!is_resource($this->_sock)) {
            return false;
        }

        stream_set_blocking($this->_sock, true);
        return true; 

    }

    public function send($strData, $intDataLength, $intTimeoutMs = null) {
        
        if (!is_null($intTimeoutMs)) {
            $this->setTimeout($this->_intReadTimeoutUS / 1000, $intTimeoutMs);
        }

        if (!is_resource($this->_sock)) {
            // maybe send called without connect?
            if (false === $this->connect()) {
                return false;
            }
        }

        $intSecond      = intval($this->_intWriteTimeoutUS / 1000000);
        $intMicroSecond = intval($this->_intWriteTimeoutUS % 1000000);
        stream_set_timeout($this->_sock, $intSecond, $intMicroSecond);
        $intSent        = fwrite($this->_sock, $strData, $intDataLength);
		if ($intSent == $intDataLength) {
            return $intSent;
        } 
        else {
            return false;
        }

    }

    public function receive($intDataLength, $intTimeoutMs = null) {
        
        if (!is_null($intTimeoutMs)) {
            $this->setTimeout($intTimeoutMs, $this->_intWriteTimeoutUS / 1000);
        }

        if (!is_resource($this->_sock)) {
            return false;
        }

        $intSecond      = intval($this->_intReadTimeoutUS / 1000000);
        $intMicroSecond = intval($this->_intReadTimeoutUS % 1000000);

        stream_set_timeout($this->_sock, $intSecond, $intMicroSecond);
        $strData    = '';
        $intLeft    = $intDataLength;
        $tmStart    = gettimeofday();
        
        while ($intLeft > 0) {
            $strReceived = fread($this->_sock, $intLeft);
            $intReceived = strlen($strReceived);
            if (0 == $intReceived) {
                /*
                $status = stream_get_meta_data($this->_sock);
                if ($status['timed_out']) {
                    return false;
                }*/
                return false;
            } 
            else if ($intReceived > 0 && $intReceived <= $intLeft) {
                $strData .= $strReceived;
                $intLeft -= $intReceived;
            } 
            else {
                return false;
            }
            // manual timeout checking
            $tmCurrent = gettimeofday();
            $intUSGone = ($tmCurrent['sec'] - $tmStart['sec']) * 1000000
                    + ($tmCurrent['usec'] - $tmStart['usec']);
            if ($intUSGone > $this->_intReadTimeoutUS) {
                return false;
            }
        }
        /*
        if (!feof($this->_sock)) {
            return false;
        }*/
        return $strData;

    }

    public function receiveAll($intMaxDataLength, $intTimeoutMs = null) {
    
        if (!is_null($intTimeoutMs)) {
            $this->setTimeout($intTimeoutMs, $this->_intWriteTimeoutUS / 1000);
        }

        if (!is_resource($this->_sock)) {
            return false;
        }

        $intSecond      = intval($this->_intReadTimeoutUS / 1000000);
        $intMicroSecond = intval($this->_intReadTimeoutUS % 1000000);
        stream_set_timeout($this->_sock, $intSecond, $intMicroSecond);
        
        $strData    = '';
        $intLeft    = $intMaxDataLength;
        $tmStart    = gettimeofday();
        
        while ($intLeft > 0) {
            $strReceived = fread($this->_sock, $intLeft);
            $intReceived = strlen($strReceived);
            if (0 == $intReceived) {
                return false;
            } 
            else if ($intReceived > 0 && $intReceived <= $intLeft) {
                $strData .= $strReceived;
                $intLeft -= $intReceived;
            } 
            else {
                return false;
            }
            
            // manual timeout checking
            $tmCurrent = gettimeofday();
            $intUSGone = ($tmCurrent['sec'] - $tmStart['sec']) * 1000000
                    + ($tmCurrent['usec'] - $tmStart['usec']);
            if ($intUSGone > $this->_intReadTimeoutUS) {
                return $strData;
            }
        }
        return $strData;

    }

    public function getLastError()
    {

        if (!is_resource($this->_sock)) {
            return array(-1, 'invalid sock');
        }
        $status = stream_get_meta_data($this->_sock);
        if ($status['timed_out']) {
            return array(-1, 'socket time out');
        }
        if ($status['eof']) {
            return array(-1, 'socket read eof');
        }
        /*
        $intErrorNo         = socket_last_error($this->_sock);
        $strErrorMessage    = socket_strerror($intErrorNo);
        return array($intErrorNo, $strErrorMessage);
         */
        return array(-1, 'sock error');

    }
}

/* vim: set et ts=4 */
?>
