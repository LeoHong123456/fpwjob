<?php
class SendRequest
{
    private $appKey;
    private $appSecret;

    const   SERVERAPIURL = 'http://api.cn.ronghub.com';    
    const   SMSURL = 'http://api.sms.ronghub.com';          

    
    public function __construct($appKey,$appSecret){
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }

    
    private function createHttpHeader() {
        $nonce = mt_rand();
        $timeStamp = time();
        $sign = sha1($this->appSecret.$nonce.$timeStamp);
        return array(
                'RC-App-Key:'.$this->appKey,
                'RC-Nonce:'.$nonce,
                'RC-Timestamp:'.$timeStamp,
                'RC-Signature:'.$sign,
        );
    }

    
    private function build_query($formData, $numericPrefix = '', $argSeparator = '&', $prefixKey = '') {
        $str = '';
        foreach ($formData as $key => $val) {
            if (!is_array($val)) {
                $str .= $argSeparator;
                if ($prefixKey === '') {
                    if (is_int($key)) {
                        $str .= $numericPrefix;
                    }
                    $str .= urlencode($key) . '=' . urlencode($val);
                } else {
                    $str .= urlencode($prefixKey) . '=' . urlencode($val);
                }
            } else {
                if ($prefixKey == '') {
                    $prefixKey .= $key;
                }
                if (isset($val[0]) && is_array($val[0])) {
                    $arr = array();
                    $arr[$key] = $val[0];
                    $str .= $argSeparator . http_build_query($arr);
                } else {
                    $str .= $argSeparator . $this->build_query($val, $numericPrefix, $argSeparator, $prefixKey);
                }
                $prefixKey = '';
            }
        }
        return substr($str, strlen($argSeparator));
    }

    
    public function curl($action, $params,$contentType='urlencoded',$module = 'im',$httpMethod='POST') {
        switch ($module){
            case 'im':
                $action = self::SERVERAPIURL.$action;
                break;
            case 'sms':
                $action = self::SMSURL.$action;
                break;
            default:
                $action = self::SERVERAPIURL.$action;
        }
        $httpHeader = $this->createHttpHeader();
        $ch = curl_init();
        if ($httpMethod=='POST' && $contentType=='urlencoded') {
            $httpHeader[] = 'Content-Type:application/x-www-form-urlencoded';
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->build_query($params));
        }
        if ($httpMethod=='POST' && $contentType=='json') {
            $httpHeader[] = 'Content-Type:Application/json';
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params) );
        }
        if ($httpMethod=='GET' && $contentType=='urlencoded') {
            $action .= strpos($action, '?') === false?'?':'&';
            $action .= $this->build_query($params);
        }
        curl_setopt($ch, CURLOPT_URL, $action);
        curl_setopt($ch, CURLOPT_POST, $httpMethod=='POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeader);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false); 
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $ret = curl_exec($ch);
        if (false === $ret) {
            $ret =  curl_errno($ch);
        }
        curl_close($ch);
        return $ret;
    }
}