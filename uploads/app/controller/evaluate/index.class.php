<?php
/*
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
* 
 */
class index_controller extends evaluate_controller{ 

	
	function index_action(){   		
		if(!isset($_COOKIE['nuid'])){
			$this->cookie->setcookie("nuid",$this->create_uuid(),3600);
		}
		
		$M=$this->MODEL('evaluate'); 
		 
		$evaluateTop = $M->GetExamList(array("top"=>'1'),array("field"=>"`id`,`keyid`,`name`,`description`,`visits`,`pic`,`comnum`","limit"=>5)); 
		$rows=$M->GetExamList(array('hot'=>1,"`keyid`>'0'"),array("orderby"=>"`sort` desc",'limit'=>10));
		 
		
		
		$evaluateRecommend = $M->GetExamList(array('keyid!=0','recommend=1'),array('field'=>'id,keyid,name,visits','limit'=>'0,8')); 
		
		
		$examinee = $M->GetGrade(array("`uid`<>''"),array('orderby'=>'ctime desc',"groupby"=>"uid",'limit'=>'12'));
		$this->seo('evaluate');
		$this->yunset("rows",$rows); 
		$this->yunset("evaluateTop",$evaluateTop); 
		$this->yunset('evaluateRecommend',$evaluateRecommend);
		$this->yunset('examinee',$examinee);
		$this->evaluate_tpl('index'); 
	} 
	function morelist_action(){
		$M=$this->MODEL('evaluate'); 
		$group=$M->GetExamList(array('keyid'=>'0'),array('field'=>"id,name")); 
		if(isset($_GET['gid']) && is_numeric($_GET['gid'])){
			$gid=(int)$_GET['gid'];
		}else{
			$gid=$group[0]['id'];
		} 
		$page_url['m'] = $_GET['m']; 
		$page_url['c'] = $_GET['c']; 
		$page_url['gid'] = $gid; 
		$page_url['page'] = "{{page}}";
		$pageurl=Url('evaluate',$page_url);
		$rows = $M->get_page("evaluate_group","`keyid`='".$gid."' order by `sort` desc",$pageurl,"10");  
		if(!isset($_COOKIE['nuid'])){
			$this->cookie->setcookie("nuid",$this->create_uuid(),time()+3600);
		} 
		$this->seo("morelist");
        $this->yunset($rows);
        $this->yunset("gid",$gid);
        $this->yunset("group",$group); 
		$this->evaluate_tpl('morelist');
	}  
}
?>