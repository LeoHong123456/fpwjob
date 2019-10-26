<?php

class SMS{

	private $SendRequest;
	
	public function __construct($SendRequest) {
       		$this->SendRequest = $SendRequest;
    }

    
    
	public function getImageCode($appKey) {
    	try{
			if (empty($appKey))
				throw new Exception('Paramer "appKey" is required');
				
	
    		$params = array (
    		'appKey' => $appKey
    		);
    		
    		$ret = $this->SendRequest->curl('/getImgCode.json',$params,'urlencoded','sms','GET');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function sendCode($mobile, $templateId, $region, $verifyId = '', $verifyCode = '') {
    	try{
			if (empty($mobile))
				throw new Exception('Paramer "mobile" is required');
				
			if (empty($templateId))
				throw new Exception('Paramer "templateId" is required');
				
			if (empty($region))
				throw new Exception('Paramer "region" is required');
				
	
    		$params = array (
    		'mobile' => $mobile,
    		'templateId' => $templateId,
    		'region' => $region,
    		'verifyId' => $verifyId,
    		'verifyCode' => $verifyCode
    		);
    		
    		$ret = $this->SendRequest->curl('/sendCode.json',$params,'urlencoded','sms','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function verifyCode($sessionId, $code) {
    	try{
			if (empty($sessionId))
				throw new Exception('Paramer "sessionId" is required');
				
			if (empty($code))
				throw new Exception('Paramer "code" is required');
				
	
    		$params = array (
    		'sessionId' => $sessionId,
    		'code' => $code
    		);
    		
    		$ret = $this->SendRequest->curl('/verifyCode.json',$params,'urlencoded','sms','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
}
?>