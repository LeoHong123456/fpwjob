<?php

class Message{

	private $SendRequest;
	
	public function __construct($SendRequest) {
       		$this->SendRequest = $SendRequest;
    }

    
    
	public function publishPrivate($fromUserId, $toUserId,  $objectName, $content, $pushContent = '', $pushData = '', $count = '', $verifyBlacklist = 0, $isPersisted = 1, $isCounted = 1, $isIncludeSender = 0) {
    	try{
			if (empty($fromUserId))
				throw new Exception('Paramer "fromUserId" is required');
				
			if (empty($toUserId))
				throw new Exception('Paramer "toUserId" is required');
				
			if (empty($objectName))
				throw new Exception('Paramer "$objectName" is required');
				
			if (empty($content))
				throw new Exception('Paramer "$content" is required');
				
	
    		$params = array (
    		'fromUserId' => $fromUserId,
    		'toUserId' => $toUserId,
    		'objectName' => $objectName,
    		'content' => $content,
    		'pushContent' => $pushContent,
    		'pushData' => $pushData,
    		'count' => $count,
    		'verifyBlacklist' => $verifyBlacklist,
    		'isPersisted' => $isPersisted,
    		'isCounted' => $isCounted,
    		'isIncludeSender' => $isIncludeSender
    		);
    		
    		$ret = $this->SendRequest->curl('/message/private/publish.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function publishTemplate($templateMessage) {
    	try{
			if (empty($templateMessage))
				throw new Exception('Paramer "templateMessage" is required');
				
	
    		$params = json_decode($templateMessage,TRUE);
    		
    		$ret = $this->SendRequest->curl('/message/private/publish_template.json',$params,'json','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function PublishSystem($fromUserId, $toUserId,  $objectName, $content, $pushContent = '', $pushData = '', $isPersisted, $isCounted) {
    	try{
			if (empty($fromUserId))
				throw new Exception('Paramer "fromUserId" is required');
				
			if (empty($toUserId))
				throw new Exception('Paramer "toUserId" is required');
				
			if (empty($objectName))
				throw new Exception('Paramer "$objectName" is required');
				
			if (empty($content))
				throw new Exception('Paramer "$content" is required');
				
	
    		$params = array (
    		'fromUserId' => $fromUserId,
    		'toUserId' => $toUserId,
    		'objectName' => $objectName,
    		'content' => $content,
    		'pushContent' => $pushContent,
    		'pushData' => $pushData,
    		'isPersisted' => $isPersisted,
    		'isCounted' => $isCounted
    		);
    		
    		$ret = $this->SendRequest->curl('/message/system/publish.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function publishSystemTemplate($templateMessage) {
    	try{
			if (empty($templateMessage))
				throw new Exception('Paramer "templateMessage" is required');
				
	
    		$params = json_decode($templateMessage,TRUE);
    		
    		$ret = $this->SendRequest->curl('/message/system/publish_template.json',$params,'json','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function publishGroup($fromUserId, $toGroupId,  $objectName, $content, $pushContent = '', $pushData = '', $isPersisted, $isCounted, $isIncludeSender) {
    	try{
			if (empty($fromUserId))
				throw new Exception('Paramer "fromUserId" is required');
				
			if (empty($toGroupId))
				throw new Exception('Paramer "toGroupId" is required');
				
			if (empty($objectName))
				throw new Exception('Paramer "$objectName" is required');
				
			if (empty($content))
				throw new Exception('Paramer "$content" is required');
				
	
    		$params = array (
    		'fromUserId' => $fromUserId,
    		'toGroupId' => $toGroupId,
    		'objectName' => $objectName,
    		'content' => $content,
    		'pushContent' => $pushContent,
    		'pushData' => $pushData,
    		'isPersisted' => $isPersisted,
    		'isCounted' => $isCounted,
    		'isIncludeSender' => $isIncludeSender
    		);
    		
    		$ret = $this->SendRequest->curl('/message/group/publish.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function publishDiscussion($fromUserId, $toDiscussionId,  $objectName, $content, $pushContent = '', $pushData = '', $isPersisted, $isCounted, $isIncludeSender) {
    	try{
			if (empty($fromUserId))
				throw new Exception('Paramer "fromUserId" is required');
				
			if (empty($toDiscussionId))
				throw new Exception('Paramer "toDiscussionId" is required');
				
			if (empty($objectName))
				throw new Exception('Paramer "$objectName" is required');
				
			if (empty($content))
				throw new Exception('Paramer "$content" is required');
				
	
    		$params = array (
    		'fromUserId' => $fromUserId,
    		'toDiscussionId' => $toDiscussionId,
    		'objectName' => $objectName,
    		'content' => $content,
    		'pushContent' => $pushContent,
    		'pushData' => $pushData,
    		'isPersisted' => $isPersisted,
    		'isCounted' => $isCounted,
    		'isIncludeSender' => $isIncludeSender
    		);
    		
    		$ret = $this->SendRequest->curl('/message/discussion/publish.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function publishChatroom($fromUserId, $toChatroomId,  $objectName, $content) {
    	try{
			if (empty($fromUserId))
				throw new Exception('Paramer "fromUserId" is required');
				
			if (empty($toChatroomId))
				throw new Exception('Paramer "toChatroomId" is required');
				
			if (empty($objectName))
				throw new Exception('Paramer "$objectName" is required');
				
			if (empty($content))
				throw new Exception('Paramer "$content" is required');
				
	
    		$params = array (
    		'fromUserId' => $fromUserId,
    		'toChatroomId' => $toChatroomId,
    		'objectName' => $objectName,
    		'content' => $content
    		);
    		
    		$ret = $this->SendRequest->curl('/message/chatroom/publish.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function broadcast($fromUserId,  $objectName, $content, $pushContent = '', $pushData = '', $os = '') {
    	try{
			if (empty($fromUserId))
				throw new Exception('Paramer "fromUserId" is required');
				
			if (empty($objectName))
				throw new Exception('Paramer "$objectName" is required');
				
			if (empty($content))
				throw new Exception('Paramer "$content" is required');
				
	
    		$params = array (
    		'fromUserId' => $fromUserId,
    		'objectName' => $objectName,
    		'content' => $content,
    		'pushContent' => $pushContent,
    		'pushData' => $pushData,
    		'os' => $os
    		);
    		
    		$ret = $this->SendRequest->curl('/message/broadcast.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function getHistory($date) {
    	try{
			if (empty($date))
				throw new Exception('Paramer "date" is required');
				
	
    		$params = array (
    		'date' => $date
    		);
    		
    		$ret = $this->SendRequest->curl('/message/history.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function deleteMessage($date) {
    	try{
			if (empty($date))
				throw new Exception('Paramer "date" is required');
				
	
    		$params = array (
    		'date' => $date
    		);
    		
    		$ret = $this->SendRequest->curl('/message/history/delete.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
}
?>