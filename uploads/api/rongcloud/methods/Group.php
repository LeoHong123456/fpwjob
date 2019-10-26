<?php

class Group{

	private $SendRequest;
	
	public function __construct($SendRequest) {
       		$this->SendRequest = $SendRequest;
    }

    
    
	public function create($userId, $groupId, $groupName) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
			if (empty($groupName))
				throw new Exception('Paramer "groupName" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'groupId' => $groupId,
    		'groupName' => $groupName
    		);
    		
    		$ret = $this->SendRequest->curl('/group/create.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function sync($userId, $groupInfo) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($groupInfo))
				throw new Exception('Paramer "groupInfo" is required');
				
	
    		$params = array();
    			$params['userId'] = $userId;
    			
           	foreach ($groupInfo as $key => $value) {
            	$params['group[' . $key . ']'] = $value;
           	}
    		
    		$ret = $this->SendRequest->curl('/group/sync.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function refresh($groupId, $groupName) {
    	try{
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
			if (empty($groupName))
				throw new Exception('Paramer "groupName" is required');
				
	
    		$params = array (
    		'groupId' => $groupId,
    		'groupName' => $groupName
    		);
    		
    		$ret = $this->SendRequest->curl('/group/refresh.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function join($userId, $groupId, $groupName) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
			if (empty($groupName))
				throw new Exception('Paramer "groupName" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'groupId' => $groupId,
    		'groupName' => $groupName
    		);
    		
    		$ret = $this->SendRequest->curl('/group/join.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function queryUser($groupId) {
    	try{
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
	
    		$params = array (
    		'groupId' => $groupId
    		);
    		
    		$ret = $this->SendRequest->curl('/group/user/query.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function quit($userId, $groupId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'groupId' => $groupId
    		);
    		
    		$ret = $this->SendRequest->curl('/group/quit.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function addGagUser($userId, $groupId, $minute) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
			if (empty($minute))
				throw new Exception('Paramer "minute" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'groupId' => $groupId,
    		'minute' => $minute
    		);
    		
    		$ret = $this->SendRequest->curl('/group/user/gag/add.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function lisGagUser($groupId) {
    	try{
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
	
    		$params = array (
    		'groupId' => $groupId
    		);
    		
    		$ret = $this->SendRequest->curl('/group/user/gag/list.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function rollBackGagUser($userId, $groupId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'groupId' => $groupId
    		);
    		
    		$ret = $this->SendRequest->curl('/group/user/gag/rollback.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function dismiss($userId, $groupId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($groupId))
				throw new Exception('Paramer "groupId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'groupId' => $groupId
    		);
    		
    		$ret = $this->SendRequest->curl('/group/dismiss.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
}
?>