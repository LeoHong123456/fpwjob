<?php

class Chatroom{

	private $SendRequest;
	
	public function __construct($SendRequest) {
       		$this->SendRequest = $SendRequest;
    }

    
    
	public function create($chatRoomInfo) {
    	try{
			if (empty($chatRoomInfo))
				throw new Exception('Paramer "chatRoomInfo" is required');
				
	
    		$params = array();
    			
           	foreach ($chatRoomInfo as $key => $value) {
            	$params['chatroom[' . $key . ']'] = $value;
           	}
    		
    		$ret = $this->SendRequest->curl('/chatroom/create.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function join($userId, $chatroomId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/join.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function query($chatroomId) {
    	try{
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/query.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function queryUser($chatroomId, $count, $order) {
    	try{
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
			if (empty($count))
				throw new Exception('Paramer "count" is required');
				
			if (empty($order))
				throw new Exception('Paramer "order" is required');
				
	
    		$params = array (
    		'chatroomId' => $chatroomId,
    		'count' => $count,
    		'order' => $order
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/user/query.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function stopDistributionMessage($chatroomId) {
    	try{
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/message/stopDistribution.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function resumeDistributionMessage($chatroomId) {
    	try{
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/message/resumeDistribution.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function addGagUser($userId, $chatroomId, $minute) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
			if (empty($minute))
				throw new Exception('Paramer "minute" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'chatroomId' => $chatroomId,
    		'minute' => $minute
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/user/gag/add.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function ListGagUser($chatroomId) {
    	try{
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/user/gag/list.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function rollbackGagUser($userId, $chatroomId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/user/gag/rollback.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function addBlockUser($userId, $chatroomId, $minute) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
			if (empty($minute))
				throw new Exception('Paramer "minute" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'chatroomId' => $chatroomId,
    		'minute' => $minute
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/user/block/add.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function getListBlockUser($chatroomId) {
    	try{
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/user/block/list.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function rollbackBlockUser($userId, $chatroomId) {
    	try{
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'userId' => $userId,
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/user/block/rollback.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function addPriority($objectName) {
    	try{
			if (empty($objectName))
				throw new Exception('Paramer "objectName" is required');
				
	
    		$params = array (
    		'objectName' => $objectName
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/message/priority/add.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function destroy($chatroomId) {
    	try{
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
	
    		$params = array (
    		'chatroomId' => $chatroomId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/destroy.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function addWhiteListUser($chatroomId, $userId) {
    	try{
			if (empty($chatroomId))
				throw new Exception('Paramer "chatroomId" is required');
				
			if (empty($userId))
				throw new Exception('Paramer "userId" is required');
				
	
    		$params = array (
    		'chatroomId' => $chatroomId,
    		'userId' => $userId
    		);
    		
    		$ret = $this->SendRequest->curl('/chatroom/user/whitelist/add.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
}
?>