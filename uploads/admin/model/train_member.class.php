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
class train_member_controller extends adminCommon{
	
	function set_search(){
		$search_list[]=array("param"=>"rec","name"=>'推荐状态',"value"=>array("1"=>"已推荐","2"=>"未推荐"));
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"已审核","4"=>"未审核","3"=>"未通过","2"=>"已锁定"));
		$re_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"r_time","name"=>'注册时间',"value"=>$re_time);
		$last_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"l_time","name"=>'登录时间',"value"=>$last_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$where="`usertype`='4' ";
		if(trim($_GET['keyword'])){
			if($_GET['type']=="1"){
				$where .=" and `username` LIKE'%".trim($_GET['keyword'])."%'";
			}elseif($_GET['type']=='3'){
				$where .=" and `email` LIKE'%".trim($_GET['keyword'])."%'";
			}elseif($_GET['type']=='4'){
				$where .=" and `moblie` LIKE'%".trim($_GET['keyword'])."%'";
			}elseif($_GET['type']=="2"){
				$cwhere="`name` LIKE'%".trim($_GET['keyword'])."%'";
				$train=$this->obj->DB_select_all("px_train",$cwhere,"`uid`,`name`,`rec`,email_status,moblie_status,yyzz_status");
				if(is_array($train)){
					foreach($train as $v){
						$uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$uid).")";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
		if($_GET['l_time']){
			if($_GET['l_time']=='1'){
				$where.=" and `login_date` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `login_date` >= '".strtotime('-'.(int)$_GET['l_time'].'day')."'";
			}
			$urlarr['l_time']=$_GET['l_time'];
		}
		if($_GET['r_time']){
			if($_GET['r_time']=='1'){
				$where.=" and `reg_date` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `reg_date` >= '".strtotime('-'.(int)$_GET['r_time'].'day')."'";
			}
			$urlarr['r_time']=$_GET['r_time'];
		}
		if($_GET['status']){
			if($_GET['status']=="1"){
				$where .= " and `status`='1'";
			}elseif($_GET['status']=="3"){
				$where .= " and `status`='3'";
			}elseif($_GET['status']=="2"){
				$where .= " and `status`='2'";
			}else{
				$where .= " and `status`='0'";
			}
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['rec']){
			if($_GET['rec']=='2'){
				$re='0';
			}else{
				$re=$_GET['rec'];
			}
            $rec=$this->obj->DB_select_all("px_train","`rec`='".$re."'","`uid`");
            if(is_array($rec) && !empty($rec)){
            	foreach($rec as $v){
            		$r_uid[]=$v['uid'];
            	}
            	$r_uids=@implode(",",$r_uid);
            }
			$where .= " and `uid` in ($r_uids)";
			$urlarr['rec']=$_GET['rec'];
		}
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `uid` desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url("train_member",$urlarr,'admin');
		$userrows=$this->get_page("member",$where,$pageurl,$this->config['sy_listnum']);
		if(is_array($userrows)){
			if($_GET['type']!="2" || !trim($_GET['keyword'])){
				foreach($userrows as $v){
					$uid[]=$v['uid'];
				}
				$train=$this->obj->DB_select_all("px_train","`uid` in (".@implode(",",$uid).")","uid,name,rec,email_status,moblie_status,yyzz_status");
			}
			foreach($userrows as $k=>$v){
				foreach($train as $val){
					if($v['uid']==$val['uid']){
						$userrows[$k]['train_name']=$val['name'];
						$userrows[$k]['email_status']=$val['email_status'];
						$userrows[$k]['moblie_status']=$val['moblie_status'];
						$userrows[$k]['yyzz_status']=$val['yyzz_status'];
						$userrows[$k]['rec']=$val['rec'];
					}
				}
				if($v['did']<1){
					$userrows[$k]['did'] = 0;
				}
			}
		}
		
		include PLUS_PATH."/domain_cache.php";
		$Dname[0] = '总站';
		if(is_array($site_domain)){
			foreach($site_domain as $key=>$value){
				$Dname[$value['id']]  =  $value['webname'];
			}
		}
		$this->yunset("Dname", $Dname);
		
		$this->yunset("userrows",$userrows);
		$lotime=array('1'=>'一天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$this->yunset("lotime",$lotime);
		$this->yunset("get_type",$_GET);
		$this->yuntpl(array('admin/admin_member_trainlist'));
	}

	function log_search(){
		$opera=array('7'=>'基本信息','8'=>'修改密码','11'=>'修改账号','13'=>'认证绑定','12'=>'账号解绑','20'=>'培训师','21'=>'课程','6'=>'预约报名','22'=>'新闻','16'=>'图片','17'=>'积分兑换','18'=>'消息','19'=>'问答');
		$search_list[]=array("param"=>"operas","name"=>'操作类型',"value"=>$opera);
		 
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
	    $search_list[]=array("param"=>"end","name"=>'操作时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
	}

	function member_log_action(){
		$this->log_search();

		$where = $mwhere = "1";
		$where .= " and `usertype`='4'";
		
		if($_GET['uid']!=""){
			$where .=" and `uid` ='".intval($_GET['uid'])."'";
			$urlarr['uid']=intval($_GET['uid']);
		}
		if($_GET['keyword']){
			if($_GET['type']=='1'){
				$px = $this->obj->DB_select_all("px_train","`name` like '%".trim($_GET['keyword'])."%'","`uid`,`name`");
				if ($px && is_array($px)){
					$pxuids=array();
					foreach($px as $val){
						$pxuids[]=$val['uid'];
					}
					$where.=" and `uid` in (".@implode(',',$pxuids).")";
				}
			}else if($_GET['type']=='2'){
				$where.= " and `content` like '%".trim($_GET['keyword'])."%' ";
			}else if($_GET['type']=='3'){
				$where.= " and `uid` like '%".trim($_GET['keyword'])."%' ";
			}

			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
	    if($_GET['operas']=='21'){
	        $where.= " and (`opera`='".$_GET['operas']."' or `content` like '%课程%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='20'){
	        $where.= " and (`opera`='".$_GET['operas']."' or `content` like '%培训师%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='19'){
	        $where.= " and (`opera`='".$_GET['operas']."' or `content` like '%问答%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='18'){
	        $where.= " and (`opera`='".$_GET['operas']."' or `content` like '%留言%' or `content` like '%消息%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='17'){
	        $where.= " and (`opera`='".$_GET['operas']."' or `content` like '%兑换%' ) ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='16'){
	        $where.= " and (`opera`='".$_GET['operas']."' or `content` like '%环境%' or `content` like '%LOGO%' ) ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='13'){
	        $where.= " and (`opera`='".$_GET['operas']."' or `content` like '%执照%' or `content` like '%绑定%' ) ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='7'){
	        $where.= " and `content` like '%资料%' ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']!=""){
			$where.=" and `opera`='".$_GET['operas']."'";
	        $urlarr['operas']=$_GET['operas'];
		}
	     
	    if($_GET['end']){
	        if($_GET['end']=='1'){
	            $where.=" and `ctime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
	        }else{
	            $where.=" and `ctime` >= '".strtotime('-'.(int)$_GET['end'].'day')."'";
	        }
	        $urlarr['end']=$_GET['end'];
	    }
	    if($_GET['time']){
			$times=@explode('~',$_GET['time']);
	        $where.=" and `ctime` >='".strtotime($times[0]."00:00:00")."' and `ctime` <='".strtotime($times[1]."23:59:59")."'";
	        $urlarr['time']=$_GET['time'];
	    }
	    if($_GET['order']){
	        $where.=" order by ".$_GET['t']." ".$_GET['order'];
	        $urlarr['order']=$_GET['order'];
	        $urlarr['t']=$_GET['t'];
	    }else{
	        $where.=" order by `id` desc";
	    }

		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
	    $pageurl=Url($_GET['m'],$urlarr,'admin');
	    $rows=$this->get_page("member_log",$where,$pageurl,$this->config['sy_listnum']);
	    if(is_array($rows)){
			foreach($rows as $v){
				$uid[]=$v['uid'];
	        }
			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).")","`uid`,`username`");
			$train=$this->obj->DB_select_all("px_train","`uid` in (".@implode(",",$uid).")","`uid`,`name`");
	        foreach($rows as $k=>$v){
	            foreach($member as $val){
	                if($v['uid']==$val['uid']){
	                    $rows[$k]['username']=$val['username'];
	                }
	            }
				foreach($train as $val){
	                if($v['uid']==$val['uid']){
	                    $rows[$k]['name']=$val['name'];
	                }
	            }
	        }
	    }
		$UserInfoM = $this->MODEL('userinfo');
		$uinfo=$UserInfoM->GetMemberOne(array('uid'=>$_GET['uid']),array("field"=>"uid,username"));
	    $this->yunset("uinfo",$uinfo);
	    $this->yunset("rows",$rows);
	    $this->yuntpl(array('admin/admin_train_member_log'));
	}
	
	function memberlogdel_action(){
	    $this->check_token();
	    if($_GET['del']){
	        $del=$_GET['del'];
	        if($del){
	            if(is_array($del)){
	                $layer_type=1;
	                $this->obj->DB_delete_all("member_log","`id` in (".@implode(',',$del).")","");
	                $del=@implode(',',$del);
	            }else{
	                $this->obj->DB_delete_all("member_log","`id`='".$del."'");
	                $layer_type=0;
	            }
	            $this->layer_msg('会员日志(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
	        }else{
	            $this->layer_msg('请选择您要删除的信息！',8,0,$_SERVER['HTTP_REFERER']);
	        }
	    }
	}

	function loginLog_action(){
		$where = $mwhere = "1";
		$where .=" and `usertype`='4'";
		if($_GET['uid']!=""){
			$where .=" and `uid` ='".intval($_GET['uid'])."'";
			$urlarr['uid']=intval($_GET['uid']);
		}
		if(trim($_GET['keyword'])){
			if($_GET['type']=='1'){
				$member=$this->obj->DB_select_all("member","`username` like '%".trim($_GET['keyword'])."%' ","`uid`,`username`");
				foreach($member as $v){
					$uid[]=$v['uid'];
				}
				$where.=" and `uid` in (".@implode(",",$uid).")";
			}else if($_GET['type']=='2'){
				$pxinfo=$this->obj->DB_select_all("px_train","`name` like '%".trim($_GET['keyword'])."%' ","`uid`,`name`");
				foreach($pxinfo as $v){
					$uid[]=$v['uid'];
				}
				$where.=" and `uid` in (".@implode(",",$uid).")";
			}else if($_GET['type']=='3'){
				$where.=" and `uid` like '%".trim($_GET['keyword'])."%'";
			}
			$urlarr['keyword']=$_GET['keyword'];
			$urlarr['type']=$_GET['type'];
		}
		
		if($_GET['time']){
			$time=@explode('~',$_GET['time']);
			$where.=" and `ctime` >='".strtotime($time[0]."00:00:00")."' and `ctime` <='".strtotime($time[1]."23:59:59")."'";
			$urlarr['time']=$_GET['time'];
		}
		if($_GET['end']){
			if($_GET['end']=='1'){
				$where.=" and `ctime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `ctime` >= '".strtotime('-'.(int)$_GET['end'].'day')."'";
			}
			$urlarr['end']=$_GET['end'];
		} 
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `id` desc";
		}

		$urlarr['c']="loginLog";
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("login_log",$where,$pageurl,$this->config['sy_listnum']);		
		if(is_array($rows)){
			foreach($rows as $v){
				$uid[]=$v['uid'];
			}
			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).")","`uid`,`username`");
			foreach($rows as $k=>$v){
				foreach($member as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['username']=$val['username'];
					}
				}
			}
			$px=$this->obj->DB_select_all("px_train","`uid` in (".@implode(",",$uid).")","`uid`,`name`");
			foreach($rows as $k=>$v){
				foreach($px as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['name']=$val['name'];
					}
				}
			}
		}
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"end","name"=>'操作时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_px_login_log'));
	}

	function loginLogdel_action(){
	    $this->check_token();
	    if($_GET['del']){
	        $del=$_GET['del'];
	        if($del){
	            if(is_array($del)){
	                $layer_type=1;
	                $this->obj->DB_delete_all("login_log","`id` in (".@implode(',',$del).")","");
	                $del=@implode(',',$del);
	            }else{
	                $this->obj->DB_delete_all("login_log","`id`='".$del."'");
	                $layer_type=0;
	            }
	            $this->layer_msg('会员登录日志(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
	        }else{
	            $this->layer_msg('请选择您要删除的信息！',8,0,$_SERVER['HTTP_REFERER']);
	        }
	    }
	}
	
	function writtenOffLog_action(){
		$where = "1 ";
		$where.=" and `usertype`='4' and `opera`='12'";
		
		if($_GET['end']){
			if($_GET['end']=='1'){
				$where.=" and `ctime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `ctime` >= '".strtotime('-'.(int)$_GET['end'].'day')."'";
			}
			$urlarr['end']=$_GET['end'];
		} 
		
		
		if(trim($_GET['keyword'])){
			if($_GET['type']==1){
				$member=$this->obj->DB_select_all("member","`username` like '%".trim($_GET['keyword'])."%' and `usertype`='4'","`uid`,`username`");
				foreach($member as $v){
					$uid[]=$v['uid'];
				}
				$where.=" and `uid` in (".@implode(",",$uid).")";
			}else{
				$where.=" and `content` like '%".trim($_GET['keyword'])."%'";
			}
			$urlarr['keyword']=$_GET['keyword'];
			$urlarr['type']=$_GET['type'];
		}
		if($_GET['time']){
			$time=@explode('~',$_GET['time']);
			$where.=" and `ctime` >='".strtotime($time[0]."00:00:00")."' and `ctime` <='".strtotime($time[1]."23:59:59")."'";
			$urlarr['time']=$_GET['time'];
		}
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `id` desc";
		}
		$urlarr["c"]=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		
		$rows=$this->get_page("member_log",$where,$pageurl,$this->config['sy_listnum']);
		
		if(is_array($rows)){
			foreach($rows as $v){
				$uid[]=$v['uid'];
			}
			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).") and `usertype`='4'","`uid`,`username`");
			foreach($rows as $k=>$v){
				foreach($member as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['username']=$val['username'];
					}
				}
			}
		}
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"end","name"=>'操作时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
		$this->yunset("type",$_GET['type']);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_train_written_off_log'));
	}
	
	function delwflog_action(){
		$this->check_token();
		
		if($_GET['del']=='allcom'){
	    	$this->obj->DB_delete_all("member_log","`usertype`='4' and `opera`='12'","");
			$this->layer_msg('已清空培训解绑日志！',9,0,$_SERVER['HTTP_REFERER']);
	    }elseif($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
	    		if(is_array($del)){
					$layer_type=1;
					$this->obj->DB_delete_all("member_log","`id` in (".@implode(',',$del).")","");
					$del=@implode(',',$del);
		    	}else{
					$this->obj->DB_delete_all("member_log","`id`='".$del."'");
					$layer_type=0;
		    	}
				$this->layer_msg('会员日志(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg('请选择您要删除的信息！',8,0,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	}
	
	function lockinfo_action(){
		$row=$this->obj->DB_select_once("member","`uid`='".$_POST['uid']."'","`lock_info`");
		echo $row['lock_info'];die;
	}
	function status_action(){
		 extract($_POST);
		 $id = @explode(",",$uid);
		 $member=$this->obj->DB_select_all("member","`uid` in (".$uid.")","`email`,`uid`");
		 if(is_array($member)&&$member){
        $notice = $this->MODEL('notice');
		     foreach($member as $v){
		         $idlist[] =$v['uid'];
		         if($status>0){
		             if($status==1){
		                 $_POST['states'] = '审核通过！';
		             }else{
		                 $_POST['states'] = '审核未通过！';
		             }
		         }
		         $notice->sendEmailType(array("uid"=>$v['uid'],"name"=>$info[$v['uid']],"email"=>$v['email'],"auto_statis"=>$_POST['states'],"status_info"=>$statusbody,"date"=>date("Y-m-d H:i:s"),"type"=>"userstatus"));
		     }
			$aid = @implode(",",$idlist);
			$id=$this->obj->DB_update_all("member","`status`='".$status."',`lock_info`='".$statusbody."'","`uid` IN (".$aid.")");
			if($id){
				if($status==1){
					$rstatus="1";
				}else{
					$rstatus="2";
				}
				$this->obj->DB_update_all("px_subject","`r_status`='".$rstatus."'","`uid`='".$_POST['uid']."'");
				$this->obj->DB_update_all("px_teacher","`r_status`='".$rstatus."'","`uid`='".$_POST['uid']."'");
				$this->obj->DB_update_all("px_train","`r_status`='".$rstatus."'","`uid`='".$_POST['uid']."'");
				$this->obj->DB_update_all("px_train_news","`r_status`='".$rstatus."'","`uid`='".$_POST['uid']."'");
				$this->ACT_layer_msg("培训会员审核(ID:".$aid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				$this->ACT_layer_msg("审核设置失败！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg( "非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function lock_action(){
		$this->obj->DB_update_all("px_subject","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		$this->obj->DB_update_all("px_teacher","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		$this->obj->DB_update_all("px_train","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		$this->obj->DB_update_all("px_train_news","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		$train=$this->obj->DB_select_once("px_train","`uid`='".$_POST['uid']."'");
		$id=$this->obj->DB_update_all("member","`status`='".$_POST['status']."',`lock_info`='".$_POST['lock_info']."'","`uid`='".$_POST['uid']."'");
		$notice = $this->MODEL('notice');
		$notice->sendEmailType(array("email"=>$train['linkmail'],"uid"=>$_POST['uid'],"name"=>$train['name'],"lock_info"=>$_POST['lock_info'],"type"=>"lock"));
		$id?$this->ACT_layer_msg("培训会员(ID:".$_POST['uid'].")锁定设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg( "设置失败！",8,$_SERVER['HTTP_REFERER']);
	}
	function rec_action(){
		$this->check_token();
		if($_GET['rec']=='1'){
			$val=",`r_status`='1'";
		}
		$nid=$this->obj->DB_update_all("px_train","`rec`='".$_GET['rec']."'".$val,"`uid`='".$_GET['id']."'");
		if($nid && ($_GET['rec']==1)){
			$this->automsg("管理员操作：设置培训机构推荐",$_GET['id']);
		}elseif($nid && ($_GET['rec']==0)){
			$this->automsg("管理员操作：取消培训机构推荐设置",$_GET['id']);
		}

		$this->MODEL('log')->admin_log("培训机构推荐(ID:".$_GET['id'].")设置成功");
		echo $nid?1:0;die;
	}
	function edit_action(){
		if($_GET['id']){
			$com_info = $this->obj->DB_select_once("member","`uid`='".$_GET['id']."'");
			$this->yunset("com_info",$com_info);
			$row = $this->obj->DB_select_once("px_train","`uid`='".$_GET['id']."'");
			$this->yunset("row",$row);
            $this->yunset($this->MODEL('cache')->GetCache(array('com','city','subject')));
		}
		if($_POST['submit']){
			$_POST['uid']=(int)$_POST['uid'];
			$mvalue='';
			
			$mem = $this->obj->DB_select_once("member","`uid`='".$_POST['uid']."'");
			if($mem['username']!=$_POST['username'] && $_POST['username']!=""){
				$num = $this->obj->DB_select_num("member","`username`='".$_POST['username']."'");
				if($num>0){
					$this->ACT_layer_msg("用户名已存在！",8,$_SERVER['HTTP_REFERER'],2,1);
				}else{
					$mvalue.="`username`='".$_POST['username']."',"; 
				}
			}
			$moblienum=$this->obj->DB_select_num("member","moblie='".$_POST['moblie']."' and `uid`<>'".$_POST['uid']."'");
			$emailnum=$this->obj->DB_select_num("member","email='".$_POST['email']."' and `uid`<>'".$_POST['uid']."'");
			$linkphonenum=$this->obj->DB_select_num("px_train","linkphone='".$_POST['linkphone']."' and `uid`<>'".$_POST['uid']."'");
			if($_POST['email']&& CheckRegEmail($_POST['email'])==false){
				$this->ACT_layer_msg("联系邮箱格式错误！",8);
			}elseif($_POST['email']&&$emailnum){
				$this->ACT_layer_msg("联系邮箱已存在！",8);
			}
			if($_POST['linkphone']&& CheckTell($_POST['linkphone'])==false){
				$this->ACT_layer_msg("联系电话格式错误！",8);
			}elseif($_POST['linkphone']&&$linkphonenum){
				$this->ACT_layer_msg("联系电话已存在！",8);
			}
			if($_POST['moblie']&&!CheckMoblie($_POST['moblie'])){
				$this->ACT_layer_msg("手机号码格式错误！",8);
			}elseif($_POST['moblie']&&$moblienum){
				$this->ACT_layer_msg("手机号码已存在！",8);
			}
			
			
			if($_POST['password']){
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5($_POST['password']).$salt);
				$mvalue.="`password`='".$pass."',";
				$mvalue.="`salt`='".$salt."',";
			}
			$mvalue.="`status`='".$_POST['status']."',";
			if($_POST['status']=="2"){
				$this->obj->DB_update_all("px_subject","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
				$this->obj->DB_update_all("px_teacher","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
				$this->obj->DB_update_all("px_train","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
				$mvalue.="`lock_info`='".$_POST['lock_info']."',";
			}
			$mvalue.="`email`='".$_POST['email']."',";
			$mvalue.="`moblie`='".$_POST['moblie']."'";
			$this->obj->DB_update_all("member",$mvalue,"`uid`='".$_POST['uid']."'");
			
			$value.="`name`='".$_POST['name']."',";
			$value.="`linkmail`='".$_POST['email']."',";
			$value.="`linktel`='".$_POST['moblie']."',";
			$value.="`linkphone`='".$_POST['linkphone']."',";
			$value.="`linkqq`='".$_POST['linkqq']."',";
			$value.="`address`='".$_POST['address']."',";
			$value.="`sid`='".$_POST['sid']."',";
			$value.="`pr`='".$_POST['pr']."',";
			$value.="`mun`='".$_POST['mun']."',";
			$value.="`provinceid`='".$_POST['provinceid']."',";
			$value.="`cityid`='".$_POST['cityid']."',";
			$value.="`sdate`='".$_POST['sdate']."',";
			$value.="`threecityid`='".$_POST['threecityid']."',";
			$value.="`linkman`='".$_POST['linkman']."',";
			$value.="`website`='".$_POST['website']."',";
			$content=str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'','',''),$_POST['content']);
			$value.="`content`='".$content."'";
			delfiledir("../data/upload/tel/".$_POST['uid']);
			$this->obj->DB_update_all("px_train",$value,"`uid`='".$_POST['uid']."'");
			$this->ACT_layer_msg("培训会员(ID:".$_POST['uid'].")修改成功！",9,"index.php?m=train_member",2,1);
		}
		$this->yuntpl(array('admin/admin_member_trainedit'));
	}
	function del_action(){
		$this->check_token();
	    if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
				$del_array=array("member","px_train","px_banner","px_subject","px_teacher","px_train_news","px_train_show","px_train_statis","answer","answer_review","company_order","evaluate_log","attention","invoice_record","company_cert","member_log","friend_state"); 
	    		if(is_array($_GET['del'])){
					$layer_type='1';
	    			$uids = @implode(",",$_GET['del']);
					$del=$uids ;
					$photo = $this->obj->DB_select_all("px_train","`uid` in (".$uids.") and `logo`<>''");
					if(is_array($photo)){
				    	foreach($photo as $val){
				    		unlink_pic("../".$val['logo']);
				    	}
					}
					$banner = $this->obj->DB_select_all("px_banner","`uid` in (".$uids.") and `pic`<>''");
					if(is_array($banner)){
				    	foreach($banner as $val){
				    		unlink_pic($val['pic']);
				    	}
					}
					foreach($del_array as $value){
						$this->obj->DB_delete_all($value,"`uid` in (".$uids.")","");
					}
					$this->obj->DB_delete_all("email_msg","`uid` in (".$uids.") or `cuid` in (".$uids.")"," ");
					$this->obj->DB_delete_all("px_baoming","`s_uid` in (".$uids.")","");
					$this->obj->DB_delete_all("px_subject_collect","`s_uid` in (".$uids.")","");
					$this->obj->DB_delete_all("px_zixun","`s_uid` in (".$uids.")","");
					$this->obj->DB_delete_all("msg","`job_uid` in (".$uids.")","");
					$this->obj->DB_delete_all("atn","`uid` in (".$uids.") or `sc_uid` in (".$uids.")","");

					$this->obj->DB_delete_all("company_cert","`uid` in (".$uids.")",""); 
		    	}else{
					$layer_type='0';
					$photo = $this->obj->DB_select_all("px_train","`uid`='".$del."' and `logo`<>''");
					if(is_array($photo)){
				    	unlink_pic("../".$photo['logo']);
					}
					$banner = $this->obj->DB_select_all("px_banner","`uid`='".$del."' and `pic`<>''");
					if(is_array($banner)){
				    	unlink_pic($banner['pic']);
					}
					$show = $this->obj->DB_select_all("px_train","`uid`='".$del."' and `picurl`<>''");
					if(is_array($show)){
				    	unlink_pic(".".$show['picurl']);
					}
					foreach($del_array as $value){
						$this->obj->DB_delete_all($value,"`uid`='".$del."'","");
					}
					$this->obj->DB_delete_all("email_msg","`uid`='".$del."' or `cuid`='".$del."'"," ");
					$this->obj->DB_delete_all("px_baoming","`s_uid`='".$del."'","");
					$this->obj->DB_delete_all("px_subject_collect","`s_uid`='".$del."'","");
					$this->obj->DB_delete_all("px_zixun","`s_uid`='".$del."'","");
					$this->obj->DB_delete_all("msg","`job_uid`='".$del."'","");
					$this->obj->DB_delete_all("atn","`uid`='".$del."' or `sc_uid`='".$del."'","");

					$this->obj->DB_delete_all("company_cert","`uid`='".$del."'",""); 
		    	}
				$this->layer_msg('培训会员(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg('请选择您要删除的会员！',8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	}

	function checksitedid_action(){
		if($_POST['uid']){
			$uids=@explode(',',$_POST['uid']);
			$uid = pylode(',',$uids);
			if($uid){
				$siteDomain = $this->MODEL('site');
				$Table = array('member','px_train','px_subject','company_cert','company_order','px_train_news','px_teacher');
				$siteDomain->UpDid(array("company_pay"),$_POST['did'],"`com_id` IN (".$uid.")");
				$siteDomain->UpDid(array("px_zixun"),$_POST['did'],"`s_uid` IN (".$uid.")");
				$siteDomain->UpDid($Table,$_POST['did'],"`uid` IN (".$uid.")");
				$this->ACT_layer_msg( "会员(ID:".$_POST['uid'].")分配站点成功！",9,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("请正确选择需分配用户！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg( "参数不全请重试！",8,$_SERVER['HTTP_REFERER']);
		}
	}

	function pxNum_action(){
		
		$MsgNum = $this->MODEL('msgNum');
		echo $MsgNum->pxNum();

	}
}

?>