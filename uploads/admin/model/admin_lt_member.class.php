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
class admin_lt_member_controller extends adminCommon{
	
	function set_search(){
		$rating=$this->obj->DB_select_all("company_rating","`category`='2' and `display`='1' order by `sort` asc","`id`,`name`");
		if(!empty($rating)){
			foreach($rating as $k=>$v){
                 $ratingarr[$v['id']]=$v['name'];
			}
		}
		$search_list[]=array("param"=>"rec","name"=>'推荐状态',"value"=>array("1"=>"已推荐","2"=>"未推荐"));
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"已审核","3"=>"未通过","2"=>"已锁定","4"=>"未审核"));
		$search_list[]=array("param"=>"rating","name"=>'会员等级',"value"=>$ratingarr);

		$re_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"register","name"=>'注册时间',"value"=>$re_time);

		$lo_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"login","name"=>'登录时间',"value"=>$lo_time);
		$this->yunset("ratingarr",$ratingarr);
		$this->yunset("search_list",$search_list);
	}

	function index_action(){
		$this->set_search();
		$where=$swhere='1';
		$mwhere=array();
		if(trim($_GET['keyword'])!=""){
			if($_GET['type']=="1"){
				$mwhere[]=" `username` LIKE '%".trim($_GET['keyword'])."%'";
			}elseif($_GET['type']=="2"){
				$where.=" and `com_name` LIKE '%".trim($_GET['keyword'])."%'";
			}elseif($_GET['type']=="3"){
				$where.=" and `email` LIKE '%".trim($_GET['keyword'])."%'";
			}else{
				$where.=" and `moblie` LIKE '%".trim($_GET['keyword'])."%'";
			}
			$urlarr['keyword']=$_GET['keyword'];
			$urlarr['type']=$_GET['type'];
		}
		if($_GET['rating']){
			$swhere="`rating`='".$_GET['rating']."'";
			$urlarr['rating']=$_GET['rating'];
		}
		if($swhere!='1'){
			$expireduids=array();
			$list=$this->obj->DB_select_all("lt_statis",$swhere,"`uid`,`pay`,`rating`,`rating_name`,`vip_etime`");
			foreach($list as $val){
				$expireduids[]=$val['uid'];
			}
			$where.=" and `uid` in (".@implode(',',$expireduids).")";
		}
		if($_GET['login']){
			if($_GET['login']=='1'){
				$mwhere[]=" `login_date` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$mwhere[]=" `login_date` >= '".strtotime('-'.(int)$_GET['login'].'day')."'";
			}
			$urlarr['login']=$_GET['login'];
		}
		if($_GET['register']){
			if($_GET['register']=='1'){
				$mwhere[]=" `reg_date` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$mwhere[]=" `reg_date` >= '".strtotime('-'.(int)$_GET['register'].'day')."'";
			}
			$urlarr['register']=$_GET['register'];
		}
		if ($_GET['rec']=='1'){
			$where.=" and `rec`='1'";
			$urlarr['rec']=$_GET['rec'];
		}elseif ($_GET['rec']=='2'){
			$where.=" and `rec`='0'";
			$urlarr['rec']='2';
		}
		if($_GET['status']){
			if ($_GET['status']=='4'){
				$mwhere[]=" `status`='0'";
				$urlarr['status']=$_GET['status'];
			}else{
				$mwhere[]=" `status`='".$_GET['status']."'";
				$urlarr['status']=$_GET['status'];
			}
		}

		if(count($mwhere)){

			$member=$this->obj->DB_select_all("member",@implode(' and ',$mwhere)." and `usertype`='3'","`uid`,`login_date`,`reg_date`,`username`,`login_ip`");
			foreach($member as $val){
				$uid[]=$val['uid'];
			}
			$where.=" and `uid` in(".pylode(',',$uid).")";
		}
		if($_GET['order']){
			$where.=" order by `uid` ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `uid` desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("lt_info",$where,$pageurl,$this->config['sy_listnum']);
		if($rows&&count($rows)){			
			$uid=array();
			foreach($rows as $val){
				$uid[]=$val['uid'];
			}
			$member=$this->obj->DB_select_all("member","`uid` in(".pylode(',',$uid).") and `usertype`='3'","`uid`,`login_date`,`reg_date`,`username`,`status`,`login_ip`");			
			$statis =$this->obj->DB_select_all("lt_statis","`uid` in(".pylode(',',$uid).")","`uid`,`rating_name`,`rating`,`vip_etime`");
			
			foreach($rows as $key=>$val){
				foreach($member as $v){
					if($val['uid']==$v['uid']){
						$rows[$key]['login_date']=$v['login_date'];
						$rows[$key]['username']=$v['username'];
						$rows[$key]['reg_date']=$v['reg_date'];
						$rows[$key]['status']=$v['status'];
						$rows[$key]['login_ip']=$v['login_ip'];
					}
				}
				foreach($statis as $v){
					if($val['uid']==$v['uid']){
						$rows[$key]['rat_name'] = $v['rating_name'];
						$rows[$key]['rating'] = $v['rating'];
						$rows[$key]['vip_etime'] = $v['vip_etime'];
					}
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
		
 		$this->yunset('rows',$rows);
		$this->yuntpl(array('admin/admin_member_ltlist'));
	}

	function log_search(){
	
		$opera=array('10'=>'职位','2'=>'财务','3'=>'下载简历','5'=>'收藏关注','6'=>'应聘委托','7'=>'基本信息','8'=>'修改密码','11'=>'修改账号','13'=>'认证绑定','12'=>'账号解绑','16'=>'图片','17'=>'积分兑换','18'=>'消息','19'=>'问答','24'=>'优惠券','25'=>'悬赏推荐','26'=>'浏览');
		$search_list[]=array("param"=>"operas","name"=>'操作类型',"value"=>$opera);
		
		$parr=array('1'=>'增加','2'=>'修改','3'=>'删除','4'=>'刷新');
		$search_list[]=array("param"=>"parrs","name"=>'操作内容',"value"=>$parr);
	    
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
	    $search_list[]=array("param"=>"end","name"=>'操作时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
	}
	
	function member_log_action(){

		$this->log_search();
 		
		$where = $mwhere = "1";
		$where .=" and `usertype`='3'";

		if($_GET['uid']!=''){
			$where .=' and `uid`='.intval($_GET['uid']).'';
			$urlarr['uid']=intval($_GET['uid']);
		}
		
		if($_GET['keyword']){
			if($_GET['type']=='2'){
				$where.= " and `content` like '%".trim($_GET['keyword'])."%' ";
				 
			}else if($_GET['type']=='1'){
				$lt_info = $this->obj->DB_select_all("lt_info","`com_name` like '%".trim($_GET['keyword'])."%'","`uid`,`com_name`");
				if ($lt_info && is_array($lt_info)){
					$ltuids=array();
					foreach($lt_info as $val){
						$ltuids[]=$val['uid'];
					}
					$where.=" and `uid` in (".@implode(',',$ltuids).")";
				}
			}else if($_GET['type']=='3'){
				$where.= " and `uid` like '%".trim($_GET['keyword'])."%' ";
				
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];

		}
		if($_GET['operas']=='10'){
			$where.= " and (`opera`='".$_GET['operas']."' or `opera`='1') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='2'){
			$where.= " and (`opera`='88' or `content` like '%订单%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='3'){
			$where.= " and `opera`='3' and `content` like '%简历%' ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='5'){
			$where.= " and (`opera`='5' or `content` like '%收藏%' or `content` like '%关注%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='6'){
			$where.= " and (`opera`='6' or `content` like '%应聘%' or `content` like '%委托%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='13'){
			$where.= " and (`opera`='13' or `content` like '%认证%' or `content` like '%资格证书%' ) ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='16'){
			$where.= " and (`opera`='16' or `content` like '%头像%' ) ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='17'){
			$where.= " and (`opera`='17' or `content` like '%兑换%' ) ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='18'){
			$where.= " and (`opera`='18' or `content` like '%咨询%' or `content` like '%留言%' ) ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='19'){
			$where.= " and (`opera`='19' or `content` like '%问答%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='24'){
			$where.= " and (`opera`='24' or `content` like '%优惠券%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='25'){
			$where.= " and (`opera`='25' or `content` like '%悬赏%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='26'){
			$where.= " and (`opera`='26' or `content` like '%浏览%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']!=""){
	        $where.=" and `opera`='".$_GET['operas']."'";
	        $urlarr['operas']=$_GET['operas'];
	    }
	    if($_GET['parr']){
	        $where.=" and `type`='".$_GET['parrs']."'";
	        $urlarr['parrs']=$_GET['parrs'];
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
		$urlarr['c']='member_log';
		$urlarr['page']="{{page}}";
	    $pageurl=Url($_GET['m'],$urlarr,'admin');
	    $rows=$this->get_page("member_log",$where,$pageurl,$this->config['sy_listnum']);
	    if(is_array($rows)){
			foreach($rows as $v){
				$uid[]=$v['uid'];
	        }
			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).")","`uid`,`username`");
			$ltinfo=$this->obj->DB_select_all("lt_info","`uid` in (".@implode(",",$uid).")","`uid`,`com_name`");
	        foreach($rows as $k=>$v){
	            foreach($member as $val){
	                if($v['uid']==$val['uid']){
	                    $rows[$k]['username']=$val['username'];
	                }
	            }
				foreach($ltinfo as $val){
	                if($v['uid']==$val['uid']){
	                    $rows[$k]['com_name']=$val['com_name'];
	                }
	            }
	        }
	    }
		$UserInfoM = $this->MODEL('userinfo');
		$uinfo=$UserInfoM->GetMemberOne(array('uid'=>$_GET['uid']),array("field"=>"uid,username"));
	    $this->yunset("uinfo",$uinfo);
	    $this->yunset("rows",$rows);
	    $this->yuntpl(array('admin/admin_lt_member_log'));
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
		$where .=" and `usertype`='3'";
		
		if($_GET['uid']!=''){
			$where .=' and `uid`='.intval($_GET['uid']).'';
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
				$lt_info=$this->obj->DB_select_all("lt_info","`com_name` like '%".trim($_GET['keyword'])."%' ","`uid`,`com_name`");
				foreach($lt_info as $v){
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
			$lt=$this->obj->DB_select_all("lt_info","`uid` in (".@implode(",",$uid).")","`uid`,`com_name`");
			foreach($rows as $k=>$v){
				foreach($lt as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['comname']=$val['com_name'];
					}
				}
			}
		}
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"end","name"=>'操作时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_lt_login_log'));
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
		$where.=" and `usertype`='3' and `opera`='12'";
		
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
				$member=$this->obj->DB_select_all("member","`username` like '%".trim($_GET['keyword'])."%' and `usertype`='3'","`uid`,`username`");
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
			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).") and `usertype`='3'","`uid`,`username`");
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
		$this->yuntpl(array('admin/admin_lt_written_off_log'));
	}
	
	function delwflog_action(){
		$this->check_token();
		
		if($_GET['del']=='allcom'){
	    	$this->obj->DB_delete_all("member_log","`usertype`='3' and `opera`='12'","");
			$this->layer_msg('已清空猎头解绑日志！',9,0,$_SERVER['HTTP_REFERER']);
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
	
	function lock_action(){
		$email=$this->obj->DB_select_once("member","`uid`='".$_POST['uid']."'","email");
		$this->obj->DB_update_all("lt_job","`r_status`='".(int)$_POST['status']."'","`uid`='".$_POST['uid']."'");
		$this->obj->DB_update_all("lt_info","`r_status`='".(int)$_POST['status']."'","`uid`='".$_POST['uid']."'");
		$id=$this->obj->DB_update_all("member","`status`='".$_POST['status']."',`lock_info`='".$_POST['lock_info']."'","`uid`='".$_POST['uid']."'");
		$name=$this->obj->DB_select_once("lt_info","`uid`='".$_POST['uid']."'","`realname`");
		
    $notice = $this->MODEL('notice');
		$notice->sendEmailType(array("uid"=>$_POST['uid'],"name"=>$name['realname'],"email"=>$email['email'],"lock_info"=>$_POST['lock_info'],"type"=>"lock"));
		$id?$this->ACT_layer_msg("猎头用户锁定(ID:".$_POST['uid'].")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("设置失败！",8,$_SERVER['HTTP_REFERER']);
	}
	function lockinfo_action(){
		$userinfo = $this->obj->DB_select_once("member","`uid`=".$_POST['uid'],"`lock_info`");
		echo $userinfo['lock_info'];die;
	}
	function status_action(){
		$_POST['uid']=(int)$_POST['uid'];
 		$id=$this->obj->DB_update_all("member","`status`='".$_POST['status']."',`lock_info`='".$_POST['statusbody']."'","`uid`='".$_POST['uid']."'");
		$userinfo = $this->obj->DB_select_once("member","`uid`='".$_POST['uid']."'","`email`");
		$name=$this->obj->DB_select_once("lt_info","`uid`='".$_POST['uid']."'","`realname`");
		if($_POST['status']>0){
		    if($_POST['status']==1){
		        $_POST['states'] = '审核通过！';
		    }else{
		        $_POST['states'] = '审核未通过！';
		    }
		}
    $notice = $this->MODEL('notice');
		$notice->sendEmailType(array("uid"=>$_POST['uid'],"name"=>$name['realname'],"email"=>$userinfo['email'],"auto_statis"=>$_POST['states'],"status_info"=>$_POST['statusbody'],"date"=>date("Y-m-d H:i:s"),"type"=>"userstatus"));
 		if($id){
 			if($_POST['status']==1){
 				$rstatus='1';
 			}else{
 				$rstatus='2';
 			}
 			$this->obj->DB_update_all("lt_job","`r_status`='".$rstatus."'","`uid`='".$_POST['uid']."'");
			$this->obj->DB_update_all("lt_info","`r_status`='".$rstatus."'","`uid`='".$_POST['uid']."'");
			$this->ACT_layer_msg("猎头用户审核(ID:".$_POST['uid'].")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
 		}else{
 			$this->ACT_layer_msg( "设置失败！",8,$_SERVER['HTTP_REFERER']);
 		}
	}
	function edit_action(){
	    $CacheList=$this->MODEL('cache')->GetCache(array('lt','city','ltjob','lthy'));
		$this->yunset($CacheList);
	    if((int)$_GET['id']){
        	$com_info = $this->obj->DB_select_once("member","`uid`='".$_GET['id']."'");
        	$row = $this->obj->DB_select_once("lt_info","`uid`='".$_GET['id']."'");
        	if($row['job']){
        	$job=@explode(",",$row['job']);
        	foreach ($job as $v){
        		$jobname[]=$CacheList['ltjob_name'][$v];
        	}
            }
        	$jobname=@implode(",",$jobname);
        	$this->yunset("jobname",$jobname);
        	if($row['hy']){
        		$hy=@explode(",",$row['hy']);
        		foreach ($hy as $v){
        			$hyname[]=$CacheList['lthy_name'][$v];
        		}
        	}
        	$hyname=@implode(",",$hyname);
        	$this->yunset("hyname",$hyname);
        	
        	
        	$rating_list = $this->obj->DB_select_all("company_rating","`category`='2' order by sort asc ");
        	$stati = $this->obj->DB_select_once("lt_statis","`uid`='".$_GET['id']."'");
        	$this->yunset("statis",$stati);
        	$this->yunset("row",$row);
        	$this->yunset("rating_list",$rating_list);
        	$this->yunset("rating",$_GET['rating']);
        	$this->yunset("lasturl",$_SERVER['HTTP_REFERER']);
        	$this->yunset("com_info",$com_info);
		}
		if($_POST['com_update']){
			$_POST['job'] = pylode(",",$_POST['job']);
			$_POST['hy'] = pylode(",",$_POST['hy']);
			$mem = $this->obj->DB_select_once("member","`uid`='".$_POST['uid']."'");
			if($mem['username']!=$_POST['username'] && $_POST['username']!=""){
				$num = $this->obj->DB_select_num("member","`username`='".$_POST['username']."'");
				if($num>0){
					$this->ACT_layer_msg("用户名已存在！",8,$_SERVER['HTTP_REFERER'],2,1);
				}else{
					$this->obj->DB_update_all("member","`username`='".$_POST['username']."'","`uid`='".$_POST['uid']."'");
				}
			}
			
			$moblienum=$this->obj->DB_select_num("member","moblie='".$_POST['moblie']."' and `uid`<>'".$_POST['uid']."'");
			$phonenum=$this->obj->DB_select_num("lt_info","phone='".$_POST['phone']."' and `uid`<>'".$_POST['uid']."'");
			$emailnum=$this->obj->DB_select_num("member","email='".$_POST['email']."' and `uid`<>'".$_POST['uid']."'");
			if($_POST['email']&&CheckRegEmail($_POST['email']==false)){
				$this->ACT_layer_msg("E-mail格式错误！",8);
			}elseif($_POST['email']&&$emailnum){
				$this->ACT_layer_msg("E-mail已存在！",8);
			}
			if($_POST['moblie']&&!CheckMoblie($_POST['moblie'])){
				$this->ACT_layer_msg("联系电话格式错误！",8);
			}elseif($_POST['moblie']&&$moblienum){
				$this->ACT_layer_msg("联系电话已存在！",8);
			}
			if($_POST['phone']&& CheckTell($_POST['phone'])==false){
				$this->ACT_layer_msg("座机格式错误！",8);
			}elseif($_POST['phone']&&$phonenum){
				$this->ACT_layer_msg("座机已存在！",8);
			}
			$post['uid']=$_POST['uid'];
			$post['password']=$_POST['password'];
			$post['email']=$_POST['email'];
			$post['moblie']=$_POST['moblie'];
			$post['status']=(int)$_POST['status'];
			
			if($post['password']){
				$nid = $this->uc_edit_pw($post,1,"index.php?m=admin_lt_member");
			}else{
				$this->obj->DB_update_all("member","`moblie`='".$post['moblie']."',`email`='".$post['email']."',`status`='".$post['status']."'","`uid`='".$post['uid']."'");
			}
			$this->obj->DB_update_all("lt_job","`r_status`='".$post['r_status']."',`com_name`='".$_POST['com_name']."'","`uid`=".$_POST['uid']." ");
			$rat=@explode(",",$_POST['rating_name']);
			
			
			$values= "rating='".$rat[0]."',";
			$values.= "rating_name='".$rat[1]."',";
			$values.= "lt_job_num='".$_POST['lt_job_num']."',";
			$values.= "lt_editjob_num='".$_POST['lt_editjob_num']."',";
			$values.= "lt_breakjob_num='".$_POST['lt_breakjob_num']."',";
			$values.= "lt_down_resume='".$_POST['lt_down_resume']."'";
			$this->obj->DB_update_all("lt_statis",$values,"`uid`='".$post['uid']."'");
			unset($_POST['rating_name']);unset($_POST['username']);unset($_POST['password']);unset($_POST['status']);unset($_POST['uid']);unset($_POST['lasturl']);unset($_POST['com_update']);
			unset($_POST['lt_job_num']);unset($_POST['lt_editjob_num']);unset($_POST['lt_breakjob_num']);unset($_POST['lt_down_resume']);
			$_POST['r_status']=(int)$_POST["status"]; 
			
			delfiledir("../data/upload/tel/".$post['uid']);
			$this->obj->update_once("lt_info",$_POST,array("uid"=>$post['uid'])); 
			$this->ACT_layer_msg("猎头用户(ID:".$post['uid'].")修改成功！",9,"index.php?m=admin_lt_member",2,1);
		}
		$this->yuntpl(array('admin/admin_member_ltedit'));
	}

	function rating_action(){
		$rating_name = $_POST['rat'];
		$rat_arr = @explode("+",$rating_name);
		$statis = $this->obj->DB_select_all("lt_statis","`uid`='".$_POST['uid']."'");
		$ratingM = $this->MODEL('rating');
		if(is_array($statis)){
			$value=$ratingM->ltrating_info($rat_arr[0]);
			$this->obj->DB_update_all("lt_statis",$value,"`uid`='".$_POST['uid']."'");
		}else{
			$value="`uid`='".$_POST['uid']."',";
			$value.=$ratingM->ltrating_info($rat_arr[0]);
			$this->obj->DB_insert_once("lt_statis",$value);
		}
		echo "1";die;

	}

	function add_action(){
		$rating_list = $this->obj->DB_select_all("company_rating","`category`='2'");
		if($_POST['submit']){
			extract($_POST);
			if($username==""||mb_strlen($username)<2||mb_strlen($username)>16){
				$msg = "会员名不能为空或不符合要求！";$type=8;
			}elseif($password==""||mb_strlen($password)<6||mb_strlen($password)>20){
				$msg = "密码不能为空或不符合要求！";$type=8;
			}else{
				if($this->config['sy_uc_type']=="uc_center"){
					$this->uc_open();
					$user = uc_get_user($username);
				}else{
					$user = $this->obj->DB_select_once("member","`username`='$username' OR `email`='$email'");
				}

				if(is_array($user)){
					$msg = "用户名或邮箱已存在！";$type=8;
				}else{
					$ip = fun_ip_get();
					$time = time();
					if($this->config['sy_uc_type']=="uc_center"){
						$uid=uc_user_register($_POST['username'],$_POST['password'],$_POST['email']);
						if($uid<0){
							$this->ACT_layer_msg("该邮箱已存在！",8,"index.php?m=admin_lt_member&c=add");
						}else{
							list($uid,$username,$email,$password,$salt)=uc_get_user($username);
							$value = "`username`='$username',`password`='$password',`email`='$email',`usertype`='3',`address`='$address',`status`='$satus',`salt`='$salt',`moblie`='$moblie',`reg_date`='$time',`reg_ip`='$ip'";
						}
					}else{
						$salt = substr(uniqid(rand()), -6);
						$pass = md5(md5($password).$salt);
						$value = "`username`='$username',`password`='$pass',`email`='$email',`usertype`='3',`address`='$address',`status`='$satus',`salt`='$salt',`moblie`='$moblie',`reg_date`='$time',`reg_ip`='$ip'";

					}
					$nid = $this->obj->DB_insert_once("member",$value);
					$new_info = $this->obj->DB_select_once("member","`username`='$username'");
					$uid = $new_info["uid"];
					if($uid>0){
						$ratingM = $this->MODEL('rating');
						$this->obj->DB_insert_once("lt_info","`uid`='$uid',`moblie`='$moblie',`email`='$email'");
						$rat_arr = @explode("+",$rating_name);
						$value = "`uid`='$uid',";
						$value.=$ratingM->ltrating_info($rat_arr[0]);
						$this->obj->DB_insert_once("lt_statis",$value);
						$msg="猎头会员(ID:".$uid.")添加成功";$type=9;
					}
				}
			}
			$this->ACT_layer_msg($msg,$type,"index.php?m=admin_lt_member&c=add",2,1);
			die;
		}
		$this->yunset("rating_list",$rating_list);
		$this->yuntpl(array('admin/admin_member_ltadd'));
	}
	
	function getstatis_action(){
		if($_POST['uid']){
			$rating	= $this->obj->DB_select_once("lt_statis","`uid`='".intval($_POST['uid'])."'","`rating`,`rating_name`,`lt_job_num`,`lt_down_resume`,`lt_editjob_num`,`lt_breakjob_num`,`integral`,`vip_etime`");
			if($rating['vip_etime']>0){
				$rating['vipetime'] = date("Y-m-d",$rating['vip_etime']);
			}else{
				$rating['vipetime'] = '不限';				
			}
			echo json_encode($rating);
		}
	}
	function uprating_action(){
		
	 	if($_POST['rating'] == ''){
			$this->ACT_layer_msg( "请选择会员等级！",8,$_SERVER['HTTP_REFERER']);
		}else if($_POST['ratuid']){
			$uid = intval($_POST['ratuid']);
			$statis = $this->obj->DB_select_once("lt_statis","`uid`='".$uid."'");
			unset($_POST['ratuid']);unset($_POST['pytoken']);
			if((int)$_POST['addday']>0){
				if((int)$_POST['oldetime']>0){
					$_POST['vip_etime'] = intval($_POST['oldetime'])+intval($_POST['addday'])*86400;
				}else{
					$_POST['vip_etime'] = time()+intval($_POST['addday'])*86400;
				}
			}else{
				$_POST['vip_etime'] = intval($_POST['oldetime']);
			}
			unset($_POST['addday']);
			unset($_POST['oldetime']);
			foreach($_POST as $key=>$value){
				$statisValue[] = "`$key`='$value'";
			}
			$statisSqlValue = @implode(',',$statisValue);
			$ratinginfo = $this->obj->DB_select_once("company_rating","`id`='".$_POST['rating']."'","`type`");
			$statisSqlValue.=",`rating_type`='".$ratinginfo['type']."'";
  			$id = $this->obj->DB_update_all("lt_statis",$statisSqlValue,"`uid`='".$uid."'");
			$id?$this->ACT_layer_msg("猎头会员等级(ID:".$uid.")修改成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("修改失败！",8,$_SERVER['HTTP_REFERER']);
		}else{
			$this->ACT_layer_msg( "非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function getrating_action(){
		if($_POST['id']){
			$rating	= $this->obj->DB_select_once("company_rating","`id`='".intval($_POST['id'])."' and `category`='2'");
			if($rating['service_time']>0){
				$rating['oldetime'] = time()+$rating['service_time']*86400;
				$rating['vipetime'] = date("Y-m-d",(time()+$rating['service_time']*86400));
			}else{
				$rating['oldetime'] = 0;
				$rating['vipetime'] = '不限';
			}			
			echo json_encode($rating);
		}
	}
	function del_action(){
		$this->check_token();
	    if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
				$del_array=array("member","lt_info","lt_job","lt_statis","friend_state","question","company_order","attention","px_zixun","px_subject_collect","answer","answer_review","evaluate_log","invoice_record","coupon_list","friend_state"); 
	    		if(is_array($_GET['del'])){
					$layer_type='1';
	    			$uids = @implode(",",$_GET['del']);
					$del=$uids ;
					$photo = $this->obj->DB_select_all("lt_info","`uid` in (".$uids.") and `photo`<>''");
					if(is_array($photo)){
				    	foreach($photo as $val){
				    		unlink_pic(".".$val['photo']);
				    		unlink_pic(".".$val['thumb']);
				    	}
					}
					
					
					foreach($del_array as $value){
						$this->obj->DB_delete_all($value,"`uid` in (".$uids.")","");
					}
					$this->obj->DB_delete_all("email_msg","`uid` in (".$uids.") or `cuid` in (".$uids.")"," ");
					$this->obj->DB_delete_all("msg","`job_uid` in (".$uids.")","");
					$this->obj->DB_delete_all("friend","`uid` in (".$uids.") or `nid` in (".$uids.")",""); 
					$this->obj->DB_delete_all("atn","`uid` in (".$uids.") or `sc_uid` in (".$uids.")","");
					$this->obj->DB_delete_all("userid_job","`comid` in (".$uids.")","");
					$this->obj->DB_delete_all("down_resume","`comid` in (".$uids.")","");
					$this->obj->DB_delete_all("company_pay","`com_id` in (".$uids.")","");

					$this->obj->DB_delete_all("rebates","`job_uid` in (".$uids.") or `uid` in (".$uids.")"," ");
					$this->obj->DB_delete_all("fav_job","`com_id` in (".$uids.") or `uid` in (".$uids.")"," ");
					$this->obj->DB_delete_all("member_log","`uid` in (".$uids.") or `uid` in (".$uids.")"," ");
		    	}else{
					$layer_type='0';
		    		$photo = $this->obj->DB_select_once("lt_info","`uid`='$del' and `photo`!=''");
		    		if(is_array($photo)){
	    	    		unlink_pic(".".$photo['photo']);
	    	    		unlink_pic(".".$photo['photo_big']);
		    		}
					foreach($del_array as $value){
						$this->obj->DB_delete_all($value,"`uid`='".$del."'","");
					}
					$this->obj->DB_delete_all("email_msg","`uid`='".$del."' or `cuid`='".$del."'"," ");
					$this->obj->DB_delete_all("msg","`job_uid`='$del'","");
					$this->obj->DB_delete_all("atn","`uid`='$del' or `sc_uid`='$del'","");
					$this->obj->DB_delete_all("userid_job","`comid`='$del'","");
					$this->obj->DB_delete_all("down_resume","`comid`='$del'","");
					$this->obj->DB_delete_all("company_pay","`com_id`='$del'","");

					$this->obj->DB_delete_all("rebates","`job_uid`='$del' or `uid` ='$del'"," ");
					$this->obj->DB_delete_all("fav_job","`com_id`='$del'"," ");
					$this->obj->DB_delete_all("member_log","`uid`='$del'"," ");
		    	}
				$this->layer_msg('猎头会员(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg('请选择您要删除的会员！',8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	}
	function lt_rec_action(){
		$this->check_token();
		$nid=$this->obj->DB_update_all("lt_info","`".$_GET['type']."`='".$_GET['rec']."'","`uid`='".$_GET['id']."'");
		if($nid && ($_GET['rec']==1)){
			$this->automsg("管理员操作：设置猎头推荐",$_GET['id']);
		}elseif($nid && ($_GET['rec']==0)){
			$this->automsg("管理员操作：取消猎头推荐设置",$_GET['id']);
		}
		$this->MODEL('log')->admin_log("猎头会员(ID:".$_GET['id'].")推荐设置成功！");
		echo $nid?1:0;die;
	}
	function recup_action(){
		extract($_GET);
		$this->check_token();
		if($id){
			$nid=$this->obj->DB_update_all("member","`$type`='".$rec."'","`uid`='$id'");
			echo $nid?1:0;die;
		}
	}

	function checksitedid_action(){
		if($_POST['uid']){
			$uids=@explode(',',$_POST['uid']);
			$uid = pylode(',',$uids);
			if($uid){
				$siteDomain = $this->MODEL('site');
				$Table = array('member','company_cert','lt_info','lt_job','lt_statis','company_order','invoice_record');
				$siteDomain->UpDid(array('report'),$_POST['did'],"`p_uid` IN (".$uid.")");
				$siteDomain->UpDid(array('down_resume'),$_POST['did'],"`comid` IN (".$uid.")");
				$siteDomain->UpDid(array('company_pay','userid_job','look_resume'),$_POST['did'],"`com_id` IN (".$uid.")");
				$siteDomain->UpDid($Table,$_POST['did'],"`uid` IN (".$uid.")");
				$this->ACT_layer_msg( "会员(ID:".$_POST['uid'].")分配站点成功！",9,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("请正确选择需分配用户！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg( "参数不全请重试！",8,$_SERVER['HTTP_REFERER']);
		}
	}

	function ltNum_action(){
 		$MsgNum=$this->MODEL('msgNum');
		echo $MsgNum->ltNum();
	}
}
?>