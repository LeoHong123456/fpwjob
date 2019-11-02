<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class index_controller extends common{
	
	function index_action(){
		
		$this->seo("reward");
		$this->yun_tpl(array('index'));
	}
	function job_action(){
		 
		if($_GET['job1son']){
			$_GET['job1_son']=$_GET['job1son'];
		}
		if($_GET['jobpost']){
			$_GET['job_post']=$_GET['jobpost'];
		}
		if($this->config['province']){
			$_GET['provinceid'] = $this->config['province'];
		}
		if($this->config['cityid']){
			$_GET['cityid'] = $this->config['cityid'];
		}
		if($this->config['three_cityid']){
			$_GET['three_cityid'] = $this->config['three_cityid'];
		}
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('job','city'));
	    $this->yunset($CacheList);
		
		
		$this->seo("reward");
		$this->yun_tpl(array('job'));
	}
	

	function ajaxjob_action(){

	    $packM = $this->MODEL('pack');
	
		$return  = $packM->veriftyUser($_POST['jobid'],$this->uid,$this->usertype);
		
		echo json_encode($return);
	}

	function sqjob_action(){

	    $packM = $this->MODEL('pack');
	
		$return  = $packM->sqRewardJob($_POST['jobid'],$this->uid,$this->usertype);
		if($return['error']=='1'){
		    
		    if($this->config['sy_push_open']==1){
		        $jobM = $this->MODEL('job');
		        $job = $jobM->GetComjobOne(array('id'=>$_POST['jobid']),array('field'=>'uid,name'));
		        $resumeM = $this->MODEL('resume');
		        $resume = $resumeM->SelectResume(array('uid'=>$this->uid),'`name`');
		        $content = mb_substr('赏金职位：'.$job['name'].'有新的申请', 0, 24, 'UTF-8');
		        $this->makePush($resume['name'], $content, $job['uid']);
		    }
		}
		echo json_encode($return);
	}
	
}
?>