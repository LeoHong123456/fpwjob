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
class invite_controller extends company{
	function index_action(){
		if(trim($_GET['keyword'])){
			$resume=$this->obj->DB_select_alls("resume","resume_expect","a.uid=b.uid and a.`r_status`<>'2' and a.`name` like '%".trim($_GET['keyword'])."%' and a.`def_job`=b.`id`","a.`name`,a.`uid`,a.`sex`,a.`nametype`,a.`edu`,b.`job_classid`,a.`exp`,b.`salary`"); 
			if(is_array($resume)){
				foreach($resume as $v){
					$uidarr[]=$v['uid'];
				}
			}
			$where="uid in (".pylode(',',$uidarr).") and ";
			$urlarr['keyword']=trim($_GET['keyword']);
		}
		$urlarr['c']='invite';
		$urlarr["page"]="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("userid_msg",$where." `fid`='".$this->uid."' order by id desc",$pageurl,"10");
		if(is_array($rows) && !empty($rows)){
			if(empty($resume)){
				foreach($rows as $v){
					$uid[]=$v['uid'];
				}
				$where="a.`uid` in (".pylode(",",$uid).") and a.`r_status`<>'2' and a.`def_job`=b.`id`";
				$resume=$this->obj->DB_select_alls("resume","resume_expect",$where,"a.`uid`,a.`name`,a.`sex`,a.`nametype`,a.`edu`,a.`exp`,b.`id`,b.`salary`,b.`job_classid`,`telphone`");
				$down = $this->obj->DB_select_all("down_resume","`uid` in (".pylode(",",$uid).") and `comid`='".$this->uid."'","`uid`");
			}
			if(is_array($down)){
				foreach($down as $va){
					$user[$va['uid']]['down']="1";
				}
			}
			if(is_array($resume)){
				include(PLUS_PATH."user.cache.php");
				include(PLUS_PATH."job.cache.php");
				foreach($resume as $va){
					if($va['job_classid']!=""){
						$job=@explode(",",$va['job_classid']);
						$user[$va['uid']]['jobname']=$job_name[$job[0]];
					}
					$user[$va['uid']]['eid']=$va['id'];
					if($this->config['user_name']=='1' || !$this->config['user_name']){
						if($va['nametype']==3){
							if($va['sex']==1){
								$user[$va['uid']]['name'] = mb_substr($va['name'],0,1,'utf-8')."先生";
							}else{
								$user[$va['uid']]['name'] = mb_substr($va['name'],0,1,'utf-8')."女士";
							}
						}elseif($va['nametype']==2){
							$user[$va['uid']]['name'] = "NO.".$va['id'];
						}else{
							$user[$va['uid']]['name'] = $va['name'];
						}
					}else if($this->config['user_name']=='2'){
						$user[$va['uid']]['name'] = "NO.".$va['id'];
					}else if($this->config['user_name']=='3'){
						if($va['sex']==1){
							$user[$va['uid']]['name'] = mb_substr($va['name'],0,1,'utf-8')."先生";
						}else{
							$user[$va['uid']]['name'] = mb_substr($va['name'],0,1,'utf-8')."女士";
						}
					}else if($this->config['user_name']=='4'){
						$user[$va['uid']]['name'] = $va['name'];
					}
					$user[$va['uid']]['sex']=$va['sex'];
					$user[$va['uid']]['edu']=$userclass_name[$va['edu']];
                    $user[$va['uid']]['exp']=$userclass_name[$va['exp']];
                    $user[$va['uid']]['salary']=$userclass_name[$va['salary']];
                    $user[$va['uid']]['telphone']=$va['telphone'];
				}
			}
			$this->yunset("user",$user);
		}
		$this->public_action();
		$this->company_satic();
		$this->yunset("js_def",5);
		$this->com_tpl('invite');
	}

	function ajax_action(){
		if($_POST['id']){
  			$row=$this->obj->DB_select_once("userid_msg","`fid`='".$this->uid."' and `id`='".(int)$_POST['id']."'");
			$arr['jobname']=$row['jobname'];
			$arr['linkman']=$row['linkman'];
			$arr['linktel']=$row['linktel'];
			$arr['intertime']=$row['intertime'];
			$arr['address']=$row['address'];
			$arr['content']=$row['content'];
			$arr['comname']=$row['fname'];
			$arr['datetime']=date('Y-m-d',$row['datetime']);
			echo json_encode($arr);die;
		}
	}

	function del_action(){
		if($_POST['delid'] || $_GET['id']){
			if($_GET['id']){
				$id=(int)$_GET['id'];
				$layer_type='0';
			}else{
				$id=pylode(",",$_POST['delid']);
				$layer_type='1';
			}
			$nid=$this->obj->DB_delete_all("userid_msg","`id` in (".$id.") and `fid`='".$this->uid."'"," ");
			if($nid)
			{
				$this->obj->member_log("删除已邀请面试的人才",4,3);
				$this->layer_msg('删除成功！',9,$layer_type,"index.php?c=invite");
			}else{
				$this->layer_msg('删除失败！',8,$layer_type,"index.php?c=invite");
			}
		}
	}
}
?>