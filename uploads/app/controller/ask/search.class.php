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
class search_controller extends ask_controller{ 
	function index_action(){
		
		$M=$this->MODEL('ask'); 
 		$hotuser=$M->GetHotUser(array("`add_time`>'".strtotime("-30 day")."'"),array('groupby'=>"uid","orderby"=>'num',"desc"=>'desc',"limit"=>10,"field"=>"uid,count(id) as num,sum(support) as support,nickname,pic"));
		foreach($hotuser as $k=>$v){
			if($v['pic']){
				$hotuser[$k]['pic']=$this->config['sy_weburl'].'/'.$v['pic'];
			}else{
				$hotuser[$k]['pic']=$this->config['sy_weburl'].'/'.$this->config['sy_friend_icon'];
			}
		}
		if(trim($_GET['keyword'])){$this->addkeywords(12,trim($_GET['keyword']));}
 		$this->atnask($M);
 		$this->hotclass();
		$this->yunset("getinfo",$_GET);  
		
		if($_GET['cid']){
			$CacheM=$this->MODEL('cache');
			$CacheList=$CacheM->GetCache(array('ask'));

			$qclass = $this->obj->DB_select_once("q_class","`id`='".$_GET['cid']."'","`pid`");
			
			if($qclass['pid']){
				$data['seacrh_class']=$CacheList['ask_name'][$qclass['pid']];
				$data['ask_class_name']=$CacheList['ask_name'][$_GET['cid']];
			}else{
				$data['seacrh_class']=$CacheList['ask_name'][$qclass['pid']];
				$data['ask_class_name']=$CacheList['ask_name'][$_GET['cid']];
			}
			$data['ask_desc']=strip_tags($CacheList['ask_intro'][$_GET['cid']]);
		
		}else{
			$data['ask_class_name']='';
			$data['ask_desc']='';
		}
		$this->data=$data;

		$this->yunset("hotuser",$hotuser);   
		$this->yunset("navtype","topic");
		$this->seo('ask_search');
		$this->ask_tpl('search');
	}
}
?>