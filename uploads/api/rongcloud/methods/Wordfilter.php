<?php

class Wordfilter{

	private $SendRequest;
	
	public function __construct($SendRequest) {
       		$this->SendRequest = $SendRequest;
    }

    
    
	public function add($word) {
    	try{
			if (empty($word))
				throw new Exception('Paramer "word" is required');
				
	
    		$params = array (
    		'word' => $word
    		);
    		
    		$ret = $this->SendRequest->curl('/wordfilter/add.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function getList() {
    	try{
	
    		$params = array (
    		);
    		
    		$ret = $this->SendRequest->curl('/wordfilter/list.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
    
	public function delete($word) {
    	try{
			if (empty($word))
				throw new Exception('Paramer "word" is required');
				
	
    		$params = array (
    		'word' => $word
    		);
    		
    		$ret = $this->SendRequest->curl('/wordfilter/delete.json',$params,'urlencoded','im','POST');
    		if(empty($ret))
    			throw new Exception('bad request');
    		return $ret;
    		
    	}catch (Exception $e) {
    		print_r($e->getMessage());
    	}
   }
    
}
?>