<?php

class User{

	private $SendRequest;
	
	public function __construct($SendRequest) {
       		$this->SendRequest = $SendRequest;
    }

    
    
	public function getToken($userId, $name, $portraitUri) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($name))
				throw new Exception('Paramer "name" is required');
				
			if (empty($portraitUri))
				throw new Exception('Paramer "portraitUri" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'name' => $name,
    		'portraitUri' => $portraitUri
    		);
    		
    		$ret = $this->SendRequest->curl('/user/getToken.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function refresh($userId, $name = '', $portraitUri = '') {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'name' => $name,
    		'portraitUri' => $portraitUri
    		);
    		
    		$ret = $this->SendRequest->curl('/user/refresh.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function checkOnline($userId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
	
    		$params = array (
    		'userId' => $userId
    		);
    		
    		$ret = $this->SendRequest->curl('/user/checkOnline.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function block($userId, $minute) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($minute))
				throw new Exception('Paramer "minute" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'minute' => $minute
    		);
    		
    		$ret = $this->SendRequest->curl('/user/block.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function unBlock($userId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
	
    		$params = array (
    		'userId' => $userId
    		);
    		
    		$ret = $this->SendRequest->curl('/user/unblock.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function queryBlock() {
    	try{
	
    		$params = array (
    		);
    		
    		$ret = $this->SendRequest->curl('/user/block/query.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function addBlacklist($userId, $blackUserId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($blackUserId))
				throw new Exception('Paramer "blackUserId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'blackUserId' => $blackUserId
    		);
    		
    		$ret = $this->SendRequest->curl('/user/blacklist/add.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function queryBlacklist($userId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
	
    		$params = array (
    		'userId' => $userId
    		);
    		
    		$ret = $this->SendRequest->curl('/user/blacklist/query.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function removeBlacklist($userId, $blackUserId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($blackUserId))
				throw new Exception('Paramer "blackUserId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'blackUserId' => $blackUserId
    		);
    		
    		$ret = $this->SendRequest->curl('/user/blacklist/remove.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
}
?>