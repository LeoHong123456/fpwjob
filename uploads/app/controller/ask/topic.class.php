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
class topic_controller extends ask_controller{  
	function index_action(){
		$M=$this->MODEL('ask');
		$recom=$M->GetHotUser(array("`add_time`>'".strtotime("-30 day")."'"),array('groupby'=>"uid","orderby"=>'num',"desc"=>'desc',"limit"=>6,"field"=>"uid,count(id) as num,sum(support) as support,nickname,pic"));
		foreach($recom as $v){
			$uids[]=$v['uid'];
		}
		$userinfo=$this->obj->DB_select_all('member','`uid` in('.implode(',',$uids).')','`uid`,`username`');
		$resume=$this->obj->DB_select_all('resume','`uid` in('.implode(',',$uids).')','`uid`,`photo`');
		$company=$this->obj->DB_select_all('company','`uid` in('.implode(',',$uids).')','`uid`,`logo`');
		foreach($recom as $k=>$v){
			if(!$v['nickname']){
				foreach($userinfo as $va){
					if($va['uid']==$v['uid']){
						$recom[$k]['nickname']=$va['username'];
					}
				}
			}
			if($v['pic']&&file_exists(str_replace("./",APP_PATH,$v['pic']))){
				$pic=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
			}else{
				foreach($resume as $va){
					if($va['uid']==$v['uid']){
						if($va['photo']&&file_exists(str_replace("./",APP_PATH,$va['photo']))){
							$pic=str_replace("./",$this->config['sy_weburl']."/",$va['photo']);
						}
					}
				}
				foreach($company as $va){
					if($va['uid']==$v['uid']){
						if($va['logo']&&file_exists(str_replace("./",APP_PATH,$va['logo']))){
							$pic=str_replace("./",$this->config['sy_weburl']."/",$va['logo']);
						}
					}
				}
			}
			if($pic){
				$recom[$k]['pic']=$pic;
			}else{
				$recom[$k]['pic']=$this->config['sy_weburl'].'/'.$this->config['sy_friend_icon'];
			}
			$pic='';
		}
		if($_GET['pid']){
			$CacheM=$this->MODEL('cache');
			$CacheList=$CacheM->GetCache(array('ask'));
			$data['ask_class_name']=$CacheList['ask_name'][$_GET['pid']];
			$data['ask_desc']=strip_tags($CacheList['ask_intro'][$_GET['pid']]);
		
		}else{
			$data['ask_class_name']='';
			$data['ask_desc']='';
		}
		$this->data=$data;
		$this->yunset('recom',$recom);
		$this->yunset("navtype","topic");
		$this->seo("ask_topic");
		$this->ask_tpl('topic');
	}
}
?>