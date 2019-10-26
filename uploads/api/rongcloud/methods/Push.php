<?php

class Push{

	private $SendRequest;
	
	public function __construct($SendRequest) {
       		$this->SendRequest = $SendRequest;
    }

    
    
	public function setUserPushTag($userTag) {
    	try{
			if (empty($userTag))
				throw new Exception('Paramer "userTag" is required');
				
	
    		$params = json_decode($userTag,TRUE);
    		
    		$ret = $this->SendRequest->curl('/user/tag/set.json',$params,'json','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function broadcastPush($pushMessage) {
    	try{
			if (empty($pushMessage))
				throw new Exception('Paramer "pushMessage" is required');
				
	
    		$params = json_decode($pushMessage,TRUE);
    		
    		$ret = $this->SendRequest->curl('/push.json',$params,'json','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
}
?>