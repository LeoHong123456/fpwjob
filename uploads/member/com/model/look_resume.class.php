<?php
/* *
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
*/
class look_resume_controller extends company{
	function index_action(){
		$this->company_satic();
		$this->public_action();
		$urlarr['c']='look_resume';
		$urlarr["page"]="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("look_resume","`com_id`='".$this->uid."' and `com_status`='0' order by datetime desc",$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $v){
				$resume_id[]=$v['resume_id'];
				$uid[]=$v['uid'];
			}
			$resume=$this->obj->DB_select_alls("resume","resume_expect","a.uid=b.uid and b.`id` in (".pylode(",",$resume_id).")","a.`name`,a.`sex`,a.`exp`,a.`edu`,a.`nametype`,b.`id`,b.`minsalary`,b.`maxsalary`,b.job_classid");
			$userid_msg=$this->obj->DB_select_all("userid_msg","`fid`='".$this->uid."' and `uid` in (".pylode(",",$uid).")","uid");
			if(is_array($resume)){
				include(PLUS_PATH."user.cache.php");
				include(PLUS_PATH."job.cache.php");
				foreach($rows as $key=>$val){
					foreach($resume as $va){
						if($val['resume_id']==$va['id']){
							if($this->config['user_name']=='1'){
								if($va['nametype']==3){
									if($va['sex']==1){
										$rows[$key]['name'] = mb_substr($va['name'],0,1,'utf-8')."先生";
									}else{
										$rows[$key]['name'] = mb_substr($va['name'],0,1,'utf-8')."女士";
									}
								}elseif($va['nametype']==2){
									$rows[$key]['name'] = "NO.".$va['id'];
								}else{
									$rows[$key]['name'] = $va['name'];
								}
							}else if($this->config['user_name']=='2'){
								$rows[$key]['name'] = "NO.".$va['id'];
							}else if($this->config['user_name']=='3'){
								if($va['sex']==1){
									$rows[$key]['name'] = mb_substr($va['name'],0,1,'utf-8')."先生";
								}else{
									$rows[$key]['name'] = mb_substr($va['name'],0,1,'utf-8')."女士";
								}
							}else if($this->config['user_name']=='4'){
								$rows[$key]['name'] = $va['name'];
							}
							$rows[$key]['sex']=$va['sex'];
							$rows[$key]['exp']=$userclass_name[$va['exp']];
							$rows[$key]['edu']=$userclass_name[$va['edu']];
                            $rows[$key]['minsalary']=$va['minsalary'];
							$rows[$key]['maxsalary']=$va['maxsalary'];
							if($va['job_classid']!=""){
								$job_classid=@explode(",",$va['job_classid']);
								$rows[$key]['jobname']=$job_name[$job_classid[0]];
							}
						}
					}
					foreach($userid_msg as $va){
						if($val['uid']==$va['uid']){
							$rows[$key]['userid_msg']=1;
						}
					}
				}
			}
		}
		$JobM=$this->MODEL("job");
		$company = $this->obj->DB_select_once("company","`uid`='".$this->uid."'","`linktel`,`linkphone`,`linkman`,`address`");
		$company_job=$JobM->GetComjobList(array("uid"=>$this->uid,"state"=>1,"r_status"=>1,"status"=>0),array("field"=>"`name`,`id`,`is_link`,`link_type`"));
		if(is_array($company_job)){
			foreach($company_job as $k=>$v){
				$ids[]=$v['id'];
			}
			$ids = pylode(',',$ids);
			$joblink = $this->obj->DB_select_all("company_job_link","`jobid` in ($ids)","`uid`,`jobid`,`link_type`,`link_man`,`link_moblie`");
				foreach($company_job as $k=>$v){
					if($company_job[$k]['is_link']=='1'){
						if($company_job[$k]['link_type']=='1'){
 							$company_job[$k]['link_man']=$company['linkman']; 
							$company_job[$k]['link_moblie']=$company['linktel']?$company['linktel']:$company['linkphone']; 
						}else if($company_job[$k]['link_type']=='2'){
							foreach($joblink as $val){
								if($v['id']==$val['jobid']){
									$company_job[$k]['link_man']=$val['link_man']; 
									$company_job[$k]['link_moblie']=$val['link_moblie']; 
								}
							}
						}
					}else if($joblist[$k]['is_link']=='0'){
						$joblist[$k]['link_man']=""; 
						$joblist[$k]['link_moblie']=""; 
					}
				}
		}
		$this->yunset("company_job",$company_job);
		$this->yunset("rows",$rows);
		$this->yunset("js_def",5);
		$this->com_tpl('look_resume');
	}
	function del_action(){
		if($_POST['delid']||$_GET['id']){
			if(is_array($_POST['delid'])){
				$delid=pylode(",",$_POST['delid']);
				$layer_type='1';
			}else{
				$delid=(int)$_GET['id'];
				$layer_type='0';
			}
			$nid=$this->obj->DB_update_all("look_resume","`com_status`='1'","`id` in (".$delid.") and `com_id`='".$this->uid."'");
			if($nid){
				$this->obj->member_log("删除已浏览简历记录（ID:".$delid."）",26,3);
				$this->layer_msg('删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
			}
		}
	}
}
?>