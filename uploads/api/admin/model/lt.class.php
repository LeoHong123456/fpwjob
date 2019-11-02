<?php
/* *
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class lt_controller extends appadmin
{
	function resumelist_action()
	{
		$where="height_status<>'0'";
		$page=$_POST['page'];
		$limit=$_POST['limit'];
		$order=$_POST['order'];
		$keyword=$this->stringfilter($_POST['keyword']);
		if($keyword)
		{
			include PLUS_PATH."/job.cache.php";
			$where1[]="`name` LIKE '%".$keyword."%'";
			foreach($job_name as $k=>$v){
				if(strpos($v,$keyword)!==false){
					$jobid[]=$k;
				}
			}
			if(is_array($jobid))
			{
				foreach($jobid as $value)
				{
					$class[]="FIND_IN_SET('".$value."',job_classid)";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		if($_POST['height_status'])
		{
			$where.=" AND `height_status`='".(int)$_POST['height_status']."'";
		}
		if($order){
			$where.=" order by ".$order;
		}else{
			$where.=" order by id desc";
		}
		$limit=!$limit?10:$limit;
		if($page){
			$pagenav=($page-1)*$limit;
			$where.=" limit $pagenav,$limit";
		}else{
			$where.=" limit $limit";
		}
		$rows=$this->obj->DB_select_all("reusme_expect",$where);
		if(!empty($rows))
		{
			foreach($rows as $v)
			{
				$uid[]=$v['uid'];
			}
			$member=$this->obj->DB_select_all("member","`uid` in (".pylode(",",$uid).")","`uid`,`username`");
			foreach($rows as $k=>$v)
			{
				foreach($member as $val)
				{
					if($v['uid']==$val['uid'])
					{
						$list[$k]['username']=$v['username'];
					}
				}
				$list[$k]['id']=$v['id'];
				$list[$k]['name']=$v['name'];
				$list[$k]['hy']=$v['hy'];
				$list[$k]['provinceid']=$v['provinceid'];
				$list[$k]['cityid']=$v['cityid'];
				$list[$k]['three_cityid']=$v['three_cityid'];
				$list[$k]['salary']=$v['salary'];
				$list[$k]['job_classid']=$v['job_classid'];
				$list[$k]['report']=$v['report'];
				$list[$k]['type']=$v['type'];
				$list[$k]['rec']=$v['rec'];
				$list[$k]['height_status']=$v['height_status'];
				$list[$k]['status_time']=$v['status_time'];
			}
			$data['error']=1;
			echo json_encode($data);die;
		}else{
			$this->return_appadmin_msg(2,"没有获得信息");
		}
	}

	function resumedel_action()
	{
		if(!$_POST['ids'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
		$this->obj->DB_update_all("resume_expect","`height_status`='0'","`id` in(".$_POST['ids'].")");
		$this->write_appadmin_log("删除高级人才(ID:".$_POST['ids'].")");
		$data['error']=1;
		echo json_encode($data);die;
	}
	function resumestatus_action()
	{
		if(!$_POST['ids']||!$_POST['status'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
		$this->obj->DB_update_all("resume_expect","`height_status`='".(int)$_POST['status']."'","`id` in (".$_POST['ids'].")");
		$this->write_appadmin_log("审核高级人才(ID:".$_POST['ids'].")");
		$data['error']=1;
		echo json_encode($data);die;
	}
	function certlist_action()
	{
		$where="a.`uid`=b.`uid` and a.`type`='4'";
		$page=$_POST['page'];
		$limit=$_POST['limit'];
		$order=$_POST['order'];
		$keyword=$this->stringfilter($_POST['keyword']);
		if($keyword)
		{
			$where.=" and b.`realname` like '%".$keyword."%'";
		}
		if($_POST['status'])
		{
			if($_POST['status']==3)
			{
				$where.=" and `status`='0'";
			}else{
				$where.=" and `status`='".(int)$_POST['status']."'";
			}
		}
		if($order){
			$where.=" order by a.".$order;
		}else{
			$where.=" order by a.id desc";
		}
		$limit=!$limit?10:$limit;
		if($page){
			$pagenav=($page-1)*$limit;
			$where.=" limit $pagenav,$limit";
		}else{
			$where.=" limit $limit";
		}
		$rows=$this->obj->DB_select_alls("company_cert","lt_info",$where,"b.realname,a.uid,a.check,a.ctime,a.status");
		if(!empty($rows))
		{
			foreach($rows as $k=>$v)
			{
				$list[$k]['uid']=$v['uid'];
				$list[$k]['realname']=$v['realname'];
				$list[$k]['check']=$v['check'];
				$list[$k]['ctime']=$v['ctime'];
				$list[$k]['status']=$v['status'];
			}
			$data['error']=1;
			echo json_encode($data);die;
		}else{
			$this->return_appadmin_msg(2,"没有获得信息");
		}
	}
	function certdel_action()
	{
		if(!$_POST['uids'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
	    $cert=$this->obj->DB_select_all("company_cert","`uid` in (".$_POST['uids'].") and `type`='4'");
	    if(is_array($cert))
	    {
	     	foreach($cert as $v)
	     	{
	     		unlink_pic("../".$v['check']);
	     	}
	    }
	    $this->obj->DB_delete_all("company_cert","`uid` in (".$_POST['uids'].") and `type`='4'","");
	    $this->write_appadmin_log("删除猎头认证(UID:".$_POST['uids'].")");
		$data['error']=1;
		echo json_encode($data);die;
	}
	function certstatus_action()
	{
		if(!$_POST['uids']||!$_POST['status'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
		if($_POST['status']=="3")
		{
			$status='0';
		}else{
			$status=(int)$_POST['status'];
		}
		$ltlist=$this->obj->DB_select_all("lt_info","`uid` in (".$_POST['uids'].")","`email`,`uid`,`realname`,`rzid`");
		if($status!="1"){
			$cert_status=0;
		}else{
			$cert_status=1;
		}
		if(is_array($ltlist))
		{
			$notice = $this->MODEL('notice');
			foreach($ltlist as $v)
			{
				$ulen=9-strlen($v['uid']);
				$uid=$v['uid'];
				for($a=1;$a<$ulen;$a++){
					$uid="0".$uid;
				}
				$rzid="YLT".$uid;
				$this->obj->DB_update_all("lt_info","`yyzz_status`='".$cert_status."',`rzid`='".$rzid."'","`uid`='".$uid."'");
				$notice->sendEmailType(array("uid"=>$v['uid'],"name"=>$v['realname'],"email"=>$v['email'],"certinfo"=>$_POST['statusbody'],"comname"=>$v['realname'],"type"=>"comcert"));
 				if($v['rzid']=="" && $_POST['status']=="1")
 				{
 					$this->MODEL('integral')->get_integral_action($v['uid'],"integral_ltcert","猎头执照认证");
 				}
			}
		}
		$id=$this->obj->DB_update_all("company_cert","`status`='".$status."',`statusbody`='".$_POST['statusbody']."'","`uid` IN (".$_POST['uids'].") and `type`='4'");
		$this->write_appadmin_log("审核猎头认证(UID:".$_POST['ids'].")");
		$data['error']=1;
		echo json_encode($data);die;
	}
	function ltlist_action()
	{
		$where="a.uid=b.uid";
		$page=$_POST['page'];
		$limit=$_POST['limit'];
		$order=$_POST['order'];
		$keyword=$this->stringfilter($_POST['keyword']);
		if($keyword)
		{
			$where.=" and (a.`username` like '%".$keyword."%' or b.`realname` like '%".$keyword."%')";
		}
		if($_POST['status'])
		{
			if($_POST['status']==4)
			{
				$where.=" and a.`status`='0'";
			}else{
				$where.=" and a.`status`='".(int)$_POST['status']."'";
			}
		}
		if($_POST['rec'])
		{
			if($_POST['rec']==1)
			{
				$where.=" and b.`rec`='1'";
			}else{
				$where.=" and b.`rec`='0'";
			}
		}
		if($order){
			$where.=" order by a.".$order;
		}else{
			$where.=" order by a.id desc";
		}
		$limit=!$limit?10:$limit;
		if($page){
			$pagenav=($page-1)*$limit;
			$where.=" limit $pagenav,$limit";
		}else{
			$where.=" limit $limit";
		}
		$rows=$this->obj->DB_select_alls("member","lt_info",$where,"a.uid,a.username,email,a.moblie,b.reg_date,b.realname");
		if(!empty($rows))
		{
			foreach($rows as $k=>$v)
			{
				$list[$k]['uid']=$v['uid'];
				$list[$k]['username']=$v['username'];
				$list[$k]['realname']=$v['realname'];
				$list[$k]['email']=$v['email'];
				$list[$k]['moblie']=$v['moblie'];
				$list[$k]['reg_date']=$v['reg_date'];
				$list[$k]['status']=$v['status'];
				$list[$k]['rec']=$v['rec'];
			}
			$data['error']=1;
			echo json_encode($data);die;
		}else{
			$this->return_appadmin_msg(2,"没有获得信息");
		}
	}
	function ltdel_action()
	{
		if(!$_POST['uids'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
		$uids=$_POST['uids'];
		$photo = $this->obj->DB_select_all("lt_info","`uid` in (".$uids.") and `photo`<>''");
		if(is_array($photo))
		{
	    	foreach($photo as $val)
	    	{
	    		unlink_pic(".".$val['photo']);
	    		unlink_pic(".".$val['thumb']);
	    	}
		}
		
		$del_array=array("member","lt_info","lt_job","lt_statis","question","company_order","attention");
		foreach($del_array as $value)
		{
			$this->obj->DB_delete_all($value,"`uid` in (".$uids.")","");
		}
		$this->obj->DB_delete_all("msg","`job_uid` in (".$uids.")","");
		$this->obj->DB_delete_all("atn","`uid` in (".$uids.") or `scid` in (".$uids.")","");
		$this->obj->DB_delete_all("userid_job","`comid` in (".$uids.")","");
		$this->obj->DB_delete_all("down_resume","`comid` in (".$uids.")","");
		$this->obj->DB_delete_all("company_pay","`com_id` in (".$uids.")","");

		$this->obj->DB_delete_all("rebates","`job_uid` in (".$uids.") or `uid` in (".$uids.")"," ");
	    $this->write_appadmin_log("删除猎头用户(UID:".$_POST['uids'].")");
		$data['error']=1;
		echo json_encode($data);die;
	}
	function ltshow_action()
	{
		if(!$_POST['uid'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
		$uid=(int)$_POST['uid'];
		$row=$this->obj->DB_select_once("lt_info","`uid`='".$uid."'");
		if(!empty($row))
		{
			$list['uid']		=$row['uid'];
			$list['realname']	=$row['realname'];
			$list['com_name']	=$row['com_name'];
			$list['title']		=$row['title'];
			$list['content']	=$row['content'];
			$list['client']	=$row['client'];
			$list['email']		=$row['email'];
			$list['moblie']	=$row['moblie'];
			$list['phone']		=$row['phone'];
			$list['hy']			=$row['hy'];
			$list['provinceid']=$row['provinceid'];
			$list['cityid']	=$row['cityid'];
			$list['three_cityid']=$row['three_cityid'];
			$list['exp']		=$row['exp'];
			$list['job']		=$row['job'];
			$list['photo']		=$row['photo'];
			$list['rec']		=$row['rec'];
			foreach($list as $k=>$v){
				if(is_array($v)){
					foreach($v as $key=>$val){
						$list[$k][$key]=isset($val)?$val:'';
					}
				}else{
					$list[$k]=isset($v)?$v:'';
				}
			}
			$data['list']=$list;
			$data['error']=1;
			echo json_encode($data);die;
		}else{
			$this->return_appadmin_msg(2,"没有获得信息");
		}
	}
	function lock_action()
	{
		if(!$_POST['status']||!$_POST['uid'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
		$_POST['uid']=(int)$_POST['uid'];
		$_POST['status']=(int)$_POST['status'];
		$email=$this->obj->DB_select_once("member","`uid`='".$_POST['uid']."'","email");
		$this->obj->DB_update_all("lt_job","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		$this->obj->DB_update_all("lt_info","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		$id=$this->obj->DB_update_all("member","`status`='".$_POST['status']."',`lock_info`='".$_POST['statusbody']."'","`uid`='".$_POST['uid']."'");
		$name=$this->obj->DB_select_once("lt_info","`uid`='".$_POST['uid']."'","`realname`");
    $notice = $this->MODEL('notice');
		$notice->sendEmailType(array("uid"=>$_POST['uid'],"name"=>$name['realname'],"email"=>$email['email'],"lock_info"=>$_POST['statusbody'],"type"=>"lock"));
		if($id)
		{
			$this->write_appadmin_log("猎头会员锁定(UID:".$_POST['uid'].")");
			$data['error']=1;
			echo json_encode($data);die;
		}else{
			$this->return_appadmin_msg(2,"锁定设置失败");
		}
	}
	function joblist_action()
	{
		$where=1;
		$page=$_POST['page'];
		$limit=$_POST['limit'];
		$order=$_POST['order'];
		$keyword=$this->stringfilter($_POST['keyword']);
		if($keyword)
		{
			$where.=" and (`job_name` like '%".$keyword."%' or `com_name` like '%".$keyword."%')";
		}
		if($_POST['status'])
		{
			if($_POST['status']==2)
			{
				$where.=" and `edate`<'".time()."'";
			}elseif($_POST['status']==4){
				$where.=" and `status`='0'";
			}else{
				$where.=" and `status`='".$_POST['status']."'";
			}
		}
		if($order){
			$where.=" order by ".$order;
		}else{
			$where.=" order by id desc";
		}
		$limit=!$limit?10:$limit;
		if($page){
			$pagenav=($page-1)*$limit;
			$where.=" limit $pagenav,$limit";
		}else{
			$where.=" limit $limit";
		}
		$rows=$this->obj->DB_select_all("lt_job",$where);
		if(!empty($rows))
		{
			foreach($rows as $v)
			{
				$uid[]=$v['uid'];
			}
			$member=$this->obj->DB_select_all("member","`uid` in (".pylode(",",$uid).")","`uid`,`username`");
			foreach($rows as $k=>$v)
			{
				foreach($member as $val)
				{
					if($v['uid']==$val['uid'])
					{
						$list[$k]['username']=$v['username'];
					}
				}
				$list[$k]['id']=$v['id'];
				$list[$k]['job_name']=$v['job_name'];
				$list[$k]['com_name']=$v['com_name'];
				$list[$k]['hy']=$v['hy'];
				$list[$k]['exp']=$v['exp'];
				$list[$k]['salary']=$v['salary'];
				$list[$k]['status']=$v['status'];
				$list[$k]['lastupdate']=$v['lastupdate'];
			}
			foreach($list as $k=>$v){
				if(is_array($v)){
					foreach($v as $key=>$val){
						$list[$k][$key]=isset($val)?$val:'';
					}
				}else{
					$list[$k]=isset($v)?$v:'';
				}
			}
			$data['list']=$list;
			$data['error']=1;
			echo json_encode($data);die;
		}else{
			$this->return_appadmin_msg(2,"没有获得信息");
		}
	}
	function jobstatus_action()
	{
		if(!$_POST['ids'] || !$_POST['state'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
		if($_POST['status']=="4")
		{
			$status="0";
		}else{
			$status=(int)$_POST['status'];
		}
		$statusbody=$this->stringfilter($_POST['statusbody']);
		$ids=@explode(",",$_POST['ids']);
		if(is_array($ids))
		{
			foreach($ids as $value)
			{
				if($value)
				{
					$data[] = $this->shjobmsg($value,$status,$statusbody);
				}
			}
			if($data!=""){
				$notice = $this->MODEL('notice');
				foreach($data as $key=>$value){
					$notice->sendEmailType($value);
          $notice->sendSMSType($value);
				}
			}
			$id=$this->obj->DB_update_all("lt_job","`status`='".$status."',`statusbody`='".$statusbody."'","`id` IN (".$_POST['ids'].")");
			if($id)
			{
				$this->write_appadmin_log("审核职位(ID:".$_POST['ids'].")");
				$data['error']=1;
				echo json_encode($data);die;
			}else{
				$this->return_appadmin_msg(2,"审核设置成功");
			}
		}else{
			$this->return_appadmin_msg(2,"参数出错");
		}
	}
	function shjobmsg($jobid,$yesid)
	{
		$data=array();
		$comarr=$this->obj->DB_select_once("lt_job","`id`='".$jobid."'","uid,job_name,status");
		if($yesid==1){
			$data['type']="zzshtg";
		}elseif($yesid==3){
			$data['type']="zzshwtg";
		}
		if($data['type']!=""){
			$uid=$this->obj->DB_select_alls("member","lt_info","a.`uid`='".$comarr['uid']."' and a.`uid`=b.`uid`","a.email,a.moblie,a.uid,a.realname");
			$data['uid']=$uid[0]['uid'];
			$data['name']=$uid[0]['realname'];
			$data['email']=$uid[0]['email'];
			$data['moblie']=$uid[0]['moblie'];
			$data['jobname']=$comarr['job_name'];
			$data['date']=date("Y-m-d");
			return $data;
		}
	}
	function jobdel_action()
	{
		if(!$_POST['ids'])
		{
			$this->return_appadmin_msg(2,"参数出错");
		}
    	$this->obj->DB_delete_all("lt_job","`id` in (".$_POST['ids'].")","");
		$this->write_appadmin_log("删除职位(ID:".$_POST['ids'].")");
		$data['error']=1;
		echo json_encode($data);die;
	}
}
?>