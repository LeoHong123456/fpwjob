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
class admin_jobpack_controller extends adminCommon{
    
    function index_action()
	{
		$urlarr=array("c"=>"index","page"=>"{{page}}");
		$where="1 ";
		if($_GET['uid']){
			$where .=" and `uid`='".$_GET['uid']."'";
			$urlarr['uid']=$_GET['uid'];

			$ccom = $this->obj->DB_select_once("company","`uid`='".$_GET['uid']."'","`name`");
			$this->yunset("ccname",$ccom['name']);

		}
		if($_GET['order'] && $_GET['t']){
			$where.="order by lastupdate ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}
		$pageurl=Url('admin_jobpack',$urlarr,'admin');
		$rows=$this->get_page("company_job_share", $where, $pageurl, $this->config['sy_listnum']);
		if (is_array($rows)) {
    		foreach ($rows as $val) {
                $id_arr[] = $val['jobid'];
            }
            
            $id_str = @implode(',', $id_arr);
    		$where = "`id` in (" . $id_str . ") ";
    		$job=$this->obj->DB_select_all("company_job", $where,"`id`,`name`,`com_name`,`lastupdate`");
			if(is_array($job)){
				foreach($job as $key=>$value){
					
					$jobrows[$value['id']] = $value;
				}
			}
    		
			$shareNum_rows = $this->obj->DB_select_all("company_job_sharelog", "`jobid` IN (".$id_str.") group by jobid","count(jobid) as num,jobid");
			foreach ($shareNum_rows as $val) {
                $shareNum[$val['jobid']] = $val;
            }
    		foreach ($rows as $key=>$val) {
				
                $rows[$key]['name'] = $jobrows[$val['jobid']]['name'];
				$rows[$key]['com_name'] = $jobrows[$val['jobid']]['com_name'];
                $rows[$key]['nowprice'] = sprintf("%.2f", $val['packnum']*$val['packmoney']);
                $rows[$key]['sharenum'] = intval($shareNum[$val['jobid']]['num']);
				$rows[$key]['lastupdate'] = $jobrows[$val['jobid']]['lastupdate'];
            }
		}
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_jobpack'));
	}

	function reward_action(){
		
		$where = "1";
		if($_GET['uid']){
			$where .=" and `uid`='".$_GET['uid']."'";
			$urlarr['uid']=$_GET['uid'];

			$ccom = $this->obj->DB_select_once("company","`uid`='".$_GET['uid']."'","`name`");
			$this->yunset("ccname",$ccom['name']);

		}
		$where.=" order by uid desc";

		$urlarr=array("c"=>"reward","page"=>"{{page}}");
		$pageurl=Url('admin_jobpack',$urlarr,'admin');

 		$rows=$this->get_page("company_job_reward",$where,$pageurl,$this->config['sy_listnum']);
		
		if(is_array($rows) && !empty($rows)){
			$jobids=array();
			foreach($rows as $v){
				$jobids[]=$v['jobid'];
			}
			$joblist = $this->obj->DB_select_all("company_job","`id` IN (".@implode(',',$jobids).")");

			
			$sqNum = $this->obj->DB_select_all("company_job_rewardlist","`jobid` IN (".@implode(',',$jobids).") group by jobid","count(*) as num,jobid");
			
			$sqArb = $this->obj->DB_select_all("company_job_rewardlist","`jobid`IN (".@implode(',',$jobids).") and `status`='26'","`status`,`jobid`");
		
			foreach($rows as $k=>$v){
				
				foreach($joblist as $val){
					if($v['jobid']==$val['id']){
						$rows[$k]['name']=$val['name'];
						$rows[$k]['com_name']=$val['com_name'];
						$rows[$k]['status']=$val['status'];
						$rows[$k]['lastupdate']=$val['lastupdate'];
					}
				}
				foreach($sqNum as $val){
					if($v['jobid']==$val['jobid']){
						$rows[$k]['sqnum']=$val['num'];						
					}
				}
			    foreach($sqArb as $val){					
					if($v['jobid']==$val['jobid']){	
						$rows[$k]['sqArb']=$val['status'];
					}
				} 
			}
		}
		
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_jobrewardpack'));
	}
	
	function rewardlog_action()
	{
		$urlarr=array("c"=>"rewardlog","page"=>"{{page}}");
		$where="`jobid`='" . $_GET['jobid'] . "' ";
		if($_GET['jobid']){
			$where.=" AND `jobid`='".(int)$_GET['jobid']."'";
			$urlarr['jobid']=$_GET['jobid'];
		}
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("company_job_rewardlist",$where." order by datetime DESC",$pageurl,'10');
		if(is_array($rows) && !empty($rows)){
			$jobids=array();
			foreach($rows as $v){
				$jobids[]=$v['jobid'];
				
				if($v['usertype']=='3'){
					$lteid[]=$v['eid'];
				}else{
					$eid[]=$v['eid'];
				}
				$rewardid[] = $v['id'];
			}
			
			$joblist = $this->obj->DB_select_all("company_job","`id` IN (".@implode(',',$jobids).")");
			
			
			include PLUS_PATH."/user.cache.php";
			include PLUS_PATH."/job.cache.php";
			
			if(!empty($eid)){
				$ulist = $this->obj->DB_select_all("resume_expect","`id` IN (".@implode(',',$eid).")");

			}
			if(!empty($lteid)){
				$ltulist = $this->obj->DB_select_all("lt_talent","`id` IN (".@implode(',',$lteid).")");

			}
			
			$M			=	$this->MODEL('pack');
			$log = $this->obj->DB_select_all("company_job_rewardlog","`rewardid` IN (".@implode(',',$rewardid).") ORDER BY id ASC");
			if(is_array($log)){
				foreach($log as $value){
					$logList[$value['rewardid']][] = $value;
					
				}
			}
			foreach($rows as $k=>$v){
				
				
					$rows[$k]['log'] = $M->getStatusInfo($v['id'],2,$v['status'],$logList[$v['id']]);
				
				foreach($joblist as $val){
					if($v['jobid']==$val['id']){
						$rows[$k]['name']=$val['name'];
					}
				}
				if(is_array($ulist)){
					foreach($ulist as $val){
						if($v['eid']==$val['id']){
							$rows[$k]['reid']=$val['id'];
							$rows[$k]['uname']=$val['uname'];
							$rows[$k]['edu']=$userclass_name[$val['edu']];
							$rows[$k]['exp']=$userclass_name[$val['exp']];
							if($val['job_classid']){
								$class = @explode(',',$val['job_classid']);
								foreach($class as $v){
									$classname[] = $job_name[$v];
								}
								$rows[$k]['jobclass']=@implode(',',$classname);
								unset($classname);
							}
						}
					}
				}
				if(is_array($ltulist)){
					foreach($ltulist as $val){
						if($v['eid']==$val['id']){
							$rows[$k]['uname']=mb_substr($val['name'],0,1,'utf-8').'**';
							$rows[$k]['edu']=$userclass_name[$val['edu']];
							$rows[$k]['exp']=$userclass_name[$val['exp']];
							
							$rows[$k]['jobclass']=$val['jobname'];
								
						}
					}
				}
				
			}
		}
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_jobrewardlog'));
	}

	function getreward_action(){
		if($_POST){

			$M	=	$this->MODEL('pack');
			

			$Info = $M->getRewardAll($_POST['rewardid'],26);

			echo json_encode($Info);
		}
	}

	function getarb_action(){
		if($_POST){

			$M	=	$this->MODEL('pack');
			

			$return	=  $M->logStatus((int)$_POST['rewardid'],(int)$_POST['status'],$_SESSION['auid'],'admin',array('content'=>$_POST['content']));
				
			 if($return['error']==''){
				
				 echo json_encode(array('error'=>'ok'));
					
			 }else{
				 
				 
				 echo json_encode(array('error'=>$return['error']));
			 }
		}
	}
	
	function delshare_action(){
		if((int)$_GET['delid']){
			$this->check_token();
			$layer_type='0';
		}
		$info=$this->obj->DB_select_once("company_job","`id`='".intval($_GET['delid'])."'","`uid`,`name`");
		$id=$this->obj->DB_delete_all("company_job_share","`jobid`='".(int)$_GET['delid']."'","");
		$this->obj->DB_delete_all("company_job_sharelog","`jobid`='".(int)$_GET['delid']."'","");
		$this->obj->DB_update_all("company_job","`sharepack`='0'","`id`='".(int)$_GET['delid']."'");
		$this->automsg('管理员操作：删除职位《'.$info['name'].'》分享',$info['uid']);
		isset($id)?$this->layer_msg('删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
	}

	function delreward_action(){
		if((int)$_GET['delid']){
			$this->check_token();
			$layer_type='0';
		}
		$info=$this->obj->DB_select_once("company_job","`id`='".intval($_GET['delid'])."'","`uid`,`name`");
		$id=$this->obj->DB_delete_all("company_job_reward","`jobid`='".(int)$_GET['delid']."'");
		$this->obj->DB_delete_all("company_job_rewardlist","`jobid`='".(int)$_GET['delid']."'");
		$this->obj->DB_delete_all("company_job_rewardlog","`jobid`='".(int)$_GET['delid']."'");
		$this->obj->DB_update_all("company_job","`rewardpack`='0'","`id`='".(int)$_GET['delid']."'");
		$this->automsg('管理员操作：删除职位《'.$info['name'].'》悬赏',$info['uid']);
		isset($id)?$this->layer_msg('删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
	}
}
