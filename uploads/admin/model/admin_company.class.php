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
class admin_company_controller extends adminCommon{
	function set_search(){ 
		$rating=$this->obj->DB_select_all("company_rating","`category`='1' order by `sort` asc","`id`,`name`");
		if(!empty($rating)){
			foreach($rating as $k=>$v){
                 $ratingarr[$v['id']]=$v['name'];
			}
		}
		include(CONFIG_PATH."db.data.php");
		$source=$arr_data['source'];
		$adtime=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$lotime=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$status=array('1'=>'已审核','2'=>'已锁定','3'=>'未通过','4'=>'未审核');
		$edtime=array('1'=>'7天内','2'=>'一个月内','3'=>'半年内','4'=>'一年内','5'=>'已到期');
		$search_list[]=array("param"=>"rating","name"=>'会员等级',"value"=>$ratingarr);
		$search_list[]=array("param"=>"time","name"=>'到期时间',"value"=>$edtime);
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>$status);
		$search_list[]=array('param'=>'source','name'=>'数据来源','value'=>$source);
		$search_list[]=array("param"=>"rec","name"=>'知名企业',"value"=>array("1"=>"是","2"=>"否","3"=>"已到期"));
		$search_list[]=array("param"=>"gw","name"=>'企业顾问',"value"=>array("1"=>"已分配","2"=>"未分配"));
		$search_list[]=array("param"=>"lotime","name"=>'最近登录',"value"=>$lotime);
		$search_list[]=array("param"=>"adtime","name"=>'最近注册',"value"=>$adtime);
		$this->yunset("source",$source);
		$this->yunset("ratingarr",$ratingarr);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$where=$swhere=$mwhere="1";
		$uids=array();
		if($_GET['status']){
			if($_GET['status']=='4'){
				$mwhere.=" and `status`='0'";
			}else if($_GET['status']){
				$mwhere.=" and `status`='".intval($_GET['status'])."'";
			}
			$urlarr['status']=intval($_GET['status']);
		}
		if($_GET['rating']){
			$swhere="`rating`='".$_GET['rating']."'";
			$urlarr['rating']=$_GET['rating'];
		}
		if($_GET['rec']){
       		if($_GET['rec']=='1'){
 				$where.= "  and `rec`=1 and `hottime` > '".time()."'";
       		}else if($_GET['rec']=='2'){
 				$where.= "  and `rec`=0 ";
       		}else if($_GET['rec']=='3'){
				$where.= "  and `rec`=1 and `hottime` <= '".time()."' ";
			}
			$urlarr['rec']=$_GET['rec'];
       }
 		if($_GET['gw']){
       	   if($_GET['gw']=='1'){
 				$where.= "  and `conid`!=0 ";
       	   }else{
 				$where.= "  and `conid`=0 ";
       	   }
			$urlarr['gw']=$_GET['gw'];
       }
		if($_GET['hy']){
			$where .= " and `hy` = '".$_GET['hy']."' ";
			$urlarr['hy']=$_GET['hy'];
		}
		if($_GET['provinceid']){
			$where .= " and `provinceid` = '".$_GET['provinceid']."' ";
			$urlarr['provinceid']=$_GET['provinceid'];
		}
		if($_GET['cityid']){
			$where .= " and `cityid` = '".$_GET['cityid']."' ";
			$urlarr['cityid']=$_GET['cityid'];
		}
		 if($_GET['pr']){
			$where .= " and `pr` = '".$_GET['pr']."' ";
			$urlarr['pr']=$_GET['pr'];
		}
		 if($_GET['mun']){
			$where .= " and `mun` = '".$_GET['mun']."' ";
			$urlarr['mun']=$_GET['mun'];
		}
	    if(trim($_GET['keywords'])){
			$where .= " and `name` like '%".trim($_GET['keywords'])."%' ";
			$urlarr['keywords']=$_GET['keywords'];
		}
	   if(trim($_GET['keyword'])){
            if($_GET['type']=='1'){
				$where.= "  AND `name` like '%".trim($_GET['keyword'])."%' ";
            }elseif($_GET['type']=='2'){
				$mwhere.=" and `username` like '%".trim($_GET['keyword'])."%'";
            }elseif($_GET['type']=='3'){
				$where.= "  AND `linkman` like '%".trim($_GET['keyword'])."%' ";
            }elseif($_GET['type']=='4'){
				$where.= "  AND `linktel` like '%".trim($_GET['keyword'])."%' ";
            }elseif($_GET['type']=='5'){
				$where.= "  AND `linkmail` like '%".trim($_GET['keyword'])."%' ";
            }elseif($_GET['type']=='6'){
				$where.=" AND `uid` like '%" .trim($_GET['keyword']). "%' ";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
		
		if($_GET['adtime']){
			if($_GET['adtime']=='1'){
				$mwhere .=" and `reg_date`>'".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$mwhere .=" and `reg_date`>'".strtotime('-'.intval($_GET['adtime']).' day')."'";
			}
			$urlarr['adtime']=$_GET['adtime'];
		}

		if($_GET['lotime']){
			if($_GET['lotime']=='1'){
				$mwhere .=" and `login_date`>'".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$mwhere .=" and `login_date`>'".strtotime('-'.intval($_GET['lotime']).' day')."'";
			}
			$urlarr['lotime']=$_GET['lotime'];
		}
		if($_GET['source']){
			$mwhere .=" and `source` = '".$_GET['source']."'";
			$urlarr['source']=$_GET['source'];
		}
		if($mwhere!='1'){
			$username=$this->obj->DB_select_all("member",$mwhere." and `usertype`='2'","`username`,`uid`,`reg_date`,`login_date`,`status`,`source`");
			if ($username && is_array($username)){
			    $muids=array();
			    foreach($username as $val){
			        $muids[]=$val['uid'];
			    }
			    $where.=" and `uid` in (".@implode(',',$muids).")";
			}else{
			    $where="";
			}
		}
		
        if ($_GET['time']){
            if(intval($_GET['time'])==1){
                $num="+7 day";
            }elseif(intval($_GET['time'])==2){
                $num="+1 month";
            }elseif(intval($_GET['time'])==3){
                $num="+6 month";
            }elseif(intval($_GET['time'])==4){
                $num="+1 year";
            }
            if(intval($_GET['time'])==5){
                $comidlist=array();
                
                $expired=$this->obj->DB_select_all("company_statis","`rating`=0 and `vip_etime`='0'","`uid`");
                foreach ($expired as $v){
                    if (!in_array($v['uid'], $comidlist)){
                        $comidlist[]=$v['uid'];
                    }
                }
                
                $static=$this->obj->DB_select_all("company_statis",$swhere." and `vip_etime`>'0' and `vip_etime`<'".time()."'","`uid`");
                foreach($static as $v){
                    if (!in_array($v['uid'], $comidlist)){
                        $comidlist[]=$v['uid'];
                    }
                }
                if (!empty($comidlist)){
                    $swhere.=" and `uid` in (".@implode(",",$comidlist).")";
                }else{
					$swhere.="`uid`='0'";
				}
            }else{
                $swhere.=" and `vip_etime`>'".time()."' and `vip_etime`<'".strtotime($num)."'";
            }
            if ($where!='1' && $where!=""){
                $comstatic = $this->obj->DB_select_all("company_statis",$swhere,"`uid`");
                if ($comstatic){
                    foreach ($comstatic as $v){
                        $comuids[]=$v['uid'];
                    }
                    $where .= " and `uid` in (".@pylode(',', $comuids).")";
                }
                $comidlist=array();
                $companylist = $this->obj->DB_select_all('company',$where,"`uid`,`name`,`shortname`,`email_status`,`moblie_status`,`yyzz_status`,`hottime`,`rec`,`did`,`conid`");
                foreach ($companylist as $v){
                    $comidlist[]=$v['uid'];
                }
                
                if (!empty($comidlist)){
                    $swhere.=" and `uid` in (".@implode(",",$comidlist).")";
                }else{
                    $swhere.=" and `uid`='0'";
                }
            }
            if ($where==""){
                $swhere="";
            }
            if($_GET['order']){
                $swhere.=" order by ".$_GET['t']." ".$_GET['order'];
                $urlarr['order']=$_GET['order'];
                $urlarr['t']=$_GET['t'];
            }else{
                $swhere.=" order by `vip_etime` desc";
            }
            $urlarr['time']=intval($_GET['time']);
            $urlarr['page']="{{page}}";
            $pageurl=Url($_GET['m'],$urlarr,'admin');
            $rows=$this->get_page("company_statis",$swhere,$pageurl,$this->config['sy_listnum']);
            if(is_array($rows)&&$rows){
                foreach($rows as $v){
                    $uids[]=$v['uid'];
                }
                if($mwhere=='1'&&empty($username)){
                    $username=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uids).")","`username`,`uid`,`reg_date`,`login_date`,`reg_ip`,`status`,`source`,`login_ip`");
                }
                if (empty($companylist)){
                    $companylist=$this->obj->DB_select_all("company","`uid` in (".@implode(",",$uids).")","`uid`,`name`,`shortname`,`email_status`,`moblie_status`,`yyzz_status`,`hottime`,`rec`,`did`,`conid`");
                }
                foreach($rows as $k=>$v){
                    foreach ($companylist as $val){
                        if ($v['uid']==$val['uid']){
                            $rows[$k]['shortname']=$val['shortname'];
                            $rows[$k]['email_status']=$val['email_status'];
                            $rows[$k]['moblie_status']=$val['moblie_status'];
                            $rows[$k]['yyzz_status']=$val['yyzz_status'];
                            $rows[$k]['hottime']=$val['hottime'];
                            $rows[$k]['rec']=$val['rec'];
                            $rows[$k]['conid']=$val['conid'];
                            if(strlen($val['name'])>24){
                                $rows[$k]['name']=mb_substr($val['name'],"0","12","utf-8")."...";
                            }else{
                                $rows[$k]['name']=$val['name'];
                            }
                            if($val['did']<1){
                                $rows[$k]['did'] = 0;
                            }
                        }
                    }
                    foreach($username as $val){
                        if($v['uid']==$val['uid']){
                            $rows[$k]['username']=$val['username'];
                            $rows[$k]['reg_date']=$val['reg_date'];
                            $rows[$k]['reg_ip']=$val['reg_ip'];
                            $rows[$k]['login_date']=$val['login_date'];
                            $rows[$k]['status']=$val['status'];
                            $rows[$k]['source']=$val['source'];
                            $rows[$k]['login_ip']=$val['login_ip'];
                        }
                    }
                }
                $con = $this->obj->DB_select_all("company_consultant");
                foreach($rows as $k=>$v){
                    foreach($con as $val){
                        if($v['conid']==$val['id']){
                            $rows[$k]['con']=$val['username'];
                        }
                    }
                }
            }
        }else{
            if($swhere!='1'){
                $expireduids=array();
                $list=$this->obj->DB_select_all("company_statis",$swhere,"`uid`,`pay`,`rating`,`rating_name`,`vip_etime`");
                foreach($list as $val){
                    $expireduids[]=$val['uid'];
                }
                $where.=" and `uid` in (".@implode(',',$expireduids).")";
            }
            if($_GET['order']){
                $where.=" order by ".$_GET['t']." ".$_GET['order'];
                $urlarr['order']=$_GET['order'];
                $urlarr['t']=$_GET['t'];
            }else{
                $where.=" order by uid desc";
            }
            $urlarr['page']="{{page}}";
            $pageurl=Url($_GET['m'],$urlarr,'admin');
            $rows=$this->get_page("company",$where,$pageurl,$this->config['sy_listnum']);
            
            if(is_array($rows)&&$rows){
                foreach($rows as $v){
                    $uids[]=$v['uid'];
                }
                if($mwhere=='1'&&empty($username)){
                    $username=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uids).")","`username`,`uid`,`reg_date`,`login_date`,`reg_ip`,`status`,`source`,`login_ip`");
                }
                if (empty($list)){
                    $list=$this->obj->DB_select_all("company_statis","`uid` in (".@implode(",",$uids).")","`uid`,`pay`,`integral`,`rating`,`rating_name`,`vip_etime`,`msg_num`");
                }
                $con = $this->obj->DB_select_all("company_consultant");
				 $job=$this->obj->DB_select_all("company_job","`uid` in (".@implode(",",$uids).")","uid");
				$yyzz=$this->obj->DB_select_all("company_cert","`uid` in (".@implode(",",$uids).") and `type`=3 ","`check`,`uid`,`status`");
                foreach($rows as $k=>$v){
                    
                    
                    
                    if($v['did']<1){
                        $rows[$k]['did'] = 0;
                    }
                    foreach($username as $val){
                        if($v['uid']==$val['uid']){
                            $rows[$k]['username']=$val['username'];
                            $rows[$k]['reg_date']=$val['reg_date'];
                            $rows[$k]['reg_ip']=$val['reg_ip'];
                            $rows[$k]['login_date']=$val['login_date'];
                            $rows[$k]['status']=$val['status'];
                            $rows[$k]['source']=$val['source'];
                            $rows[$k]['login_ip']=$val['login_ip'];
                        }
                    }
                    foreach($list as $val){
                        if($v['uid']==$val['uid']){
                            $rows[$k]['rating']=$val['rating'];
                            $rows[$k]['pay']=$val['pay'];
                            $rows[$k]['rating_name']=$val['rating_name'];
                            $rows[$k]['vip_etime']=$val['vip_etime'];
                            $rows[$k]['integral']=$val['integral'];
                        }
                    }
                    foreach($con as $val){
                        if($v['conid']==$val['id']){
                            $rows[$k]['con']=$val['username'];
                        }
                    }
					$rows[$k]['jobnum']=0;
					foreach($job as $val){
                        if($v['uid']==$val['uid']){
                            $rows[$k]['jobnum']++;
                        }
                    }
					$rows[$k]['yyzz_n']='未认证';
					foreach($yyzz as $val){
                        if($v['uid']==$val['uid']){
                            if($rows[$k]['yyzzurl'] && file_exists(str_replace('./', APP_PATH, $info['yyzzurl']))){
								$rows[$k]['yyzzurl']=str_replace("./",$this->config['sy_weburl']."/",$val['check']);
							}else{
								$rows[$k]['yyzzurl']=$this->config['sy_weburl']."/".$val['check'];
							}
							if($val['status']==1){
								$rows[$k]['yyzz_n']='已审核';
							}elseif($val['status']==2){
								$rows[$k]['yyzz_n']='未通过';
							}elseif($val['status']==0){
								$rows[$k]['yyzz_n']='未审核';
							}
                        }
                    }
                }
            }
        }
		$guweninfo=$this->obj->DB_select_all("company_consultant","`id`>'0'");
		$this->yunset("guweninfo",$guweninfo);
		$nav_user=$this->obj->DB_select_alls("admin_user","admin_user_group","a.`m_id`=b.`id` and a.`uid`='".$_SESSION["auid"]."'");
		$power=unserialize($nav_user[0]["group_power"]);
		if(in_array('141',$power)){
			$this->yunset("email_promiss", '1');
			$this->yunset("moblie_promiss", '1');
		} 

		$where=str_replace(array("(",")"),array("[","]"),$where);
		
		include PLUS_PATH."/domain_cache.php";
		$Dname[0] = '总站';
		if(is_array($site_domain)){
			foreach($site_domain as $key=>$value){
				$Dname[$value['id']]  =  $value['webname'];
			}
		}
		$this->yunset("Dname", $Dname);
		
		$this->yunset("where", $where);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_company'));
	}
	
	
	function writtenOffLog_action(){
		$where = "1 ";
		$where.=" and `usertype`='2' and `opera`='12'";
		
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
				$member=$this->obj->DB_select_all("member","`username` like '%".trim($_GET['keyword'])."%' and `usertype`='2'","`uid`,`username`");
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
			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).") and `usertype`='2'","`uid`,`username`");
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
		$this->yuntpl(array('admin/admin_com_written_off_log'));
	}
	
	function delwflog_action(){
		$this->check_token();
		
		if($_GET['del']=='allcom'){
	    	$this->obj->DB_delete_all("member_log","`usertype`='2' and `opera`='12'","");
			$this->layer_msg('已清空企业解绑日志！',9,0,$_SERVER['HTTP_REFERER']);
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

	function edit_action(){
		if((int)$_GET['id']){
			$com_info = $this->obj->DB_select_once("member","`uid`='".$_GET['id']."'");
			$row = $this->obj->DB_select_once("company","`uid`='".$_GET['id']."'");
			$statis = $this->obj->DB_select_once("company_statis","`uid`='".$_GET['id']."'");
			$rating_list = $this->obj->DB_select_all("company_rating","`category`=1");
			if($row['linkphone']){
				$linkphone=@explode('-',$row['linkphone']);
				$row['phoneone']=$linkphone[0];
				$row['phonetwo']=$linkphone[1];
				$row['phonethree']=$linkphone[2]; 
			}
			
			if ($row['welfare']){
				$row['arraywelfare']=explode(',', $row['welfare']);
			}
			$this->yunset("statis",$statis);
			$this->yunset("row",$row);
			$this->yunset("rating_list",$rating_list);
			$this->yunset("rating",$_GET['rating']);
			$this->yunset("lasturl",$_SERVER['HTTP_REFERER']);
			$this->yunset("com_info",$com_info);
			$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','com')));

		}
		$this->yuntpl(array('admin/admin_member_comedit'));
	}
	function comeditsave_action(){
		
		if(CheckRegUser($_POST['username'])==false && CheckRegEmail($_POST['username'])==false){
	        $this->ACT_layer_msg("用户名不得包含特殊字符！",8);
	    }
	    $mem = $this->obj->DB_select_once("member","`uid`='".$_POST['uid']."'");
	    if($mem['username']!=$_POST['username'] && $_POST['username']!=""){
	        $num = $this->obj->DB_select_num("member","`username`='".$_POST['username']."'");
	        if($num>0){
	            $this->ACT_layer_msg("用户名已存在！",8);
	        }else{
	            $this->obj->DB_update_all("member","`username`='".$_POST['username']."'","`uid`='".$_POST['uid']."'");
	        }
	    }
	    $user_email = $this->obj->DB_select_once("member","`email`='".$_POST['email']."' AND  `email`<>'' and `uid`<>'".$_POST['uid']."'",'uid');
	    $user_mobile = $this->obj->DB_select_once("member","`moblie`='".$_POST['moblie']."' AND  `moblie`<>'' and `uid`<>'".$_POST['uid']."'",'uid');
	    $company=$this->obj->DB_select_once("company","`uid`='".$_POST['uid']."'","name,comqcode");
	    if(is_array($user_email)){
	        $this->ACT_layer_msg( "邮箱已存在！",8);
	    }elseif(is_array($user_mobile)){
	        $this->ACT_layer_msg( "手机号已存在！",8);
	    }else{
	        $value="`r_status`='".$_POST['status']."',";
	        if($_POST['status']=='2'){
	            if($mem['status']!='2'){
	                $notice = $this->MODEL('notice');
	                $retval = $notice->sendEmailType(array("email"=>$mem['email'],"lock_info"=>$_POST['lock_info'],"uid"=>$mem['uid'],"name"=>$company['name'],"type"=>"lock"));
	                if($retval['status'] == -1){
	                    $this->ACT_layer_msg( $retval['msg'], 8);
	                }
	            }
	        }
	        $post['uid']=$_POST['uid'];
	        $post['password']=$_POST['password'];
	        $post['email']=$_POST['email'];
	        $post['moblie']=$_POST['moblie'];
	        $post['status']=$_POST['status'];
	        $post['address']=$_POST['address'];
	        if(trim($post['password'])){
	            $nid = $this->uc_edit_pw($post,1,"index.php?m=com_member");
	        }
	        $linkphone=array();
	        if($_POST['phoneone']){
	            $linkphone[]=$_POST['phoneone'];
	        }
	        if($_POST['phonetwo']){
	            $linkphone[]=$_POST['phonetwo'];
	        }
	        if($_POST['phonethree']){
	            $linkphone[]=$_POST['phonethree'];
	        }
	        $_POST['linkphone']=pylode('-',$linkphone);
	        if($_POST['comqcode']!=$company['comqcode']){
				$comqcode = $this->checksrc($_POST['comqcode'],$company['comqcode']);
	        }else{
				$comqcode = $company['comqcode'];
			}
	        
	        $value.="`address`='".$_POST['address']."',";
	        $value.="`name`='".$_POST['name']."',";
	        $value.="`shortname`='".$_POST['shortname']."',";
	        $value.="`hy`='".$_POST['hy']."',";
	        $value.="`pr`='".$_POST['pr']."',";
	        $value.="`provinceid`='".$_POST['provinceid']."',";
	        $value.="`cityid`='".$_POST['cityid']."',";
	        $value.="`three_cityid`='".$_POST['three_cityid']."',";
	        $value.="`mun`='".$_POST['mun']."',";
	        $value.="`linkphone`='".$_POST['linkphone']."',";
	        $value.="`linktel`='".$_POST['moblie']."',";
	        $value.="`money`='".$_POST['money']."',";
	        $value.="`moneytype`='".intval($_POST['moneytype'])."',";
	        
	        $value.="`linkman`='".$_POST['linkman']."',";
	        $value.="`linkjob`='".$_POST['linkjob']."',";
	        $value.="`linkqq`='".$_POST['linkqq']."',";
	        $value.="`website`='".$_POST['website']."',";
	        $content=str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'','',''),$_POST['content']);
	        $value.="`content`='".$content."',";
	        $value.="`busstops`='".$_POST['busstops']."',";
	        $value.="`admin_remark`='".$_POST['admin_remark']."',";
	        $value.="`linkmail`='".$_POST['email']."',";
	        $value.="`infostatus`='".intval($_POST['infostatus'])."',";
	        $value.="`welfare`='".@implode(',',$_POST['welfare'])."',";
	        $value.="`comqcode`='".$comqcode."'";
	        $this->obj->DB_update_all("company",$value,"`uid`='".$_POST['uid']."'");

	        
	        $this->obj->DB_update_all("member","`email`='".$_POST['email']."',`moblie`='".$_POST['moblie']."',`lock_info`='".$_POST['lock_info']."',`status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");

			$statis = $this->obj->DB_select_once("company_statis","`uid`='".$_POST['uid']."'");
	        
			$ratingid = (int)$_POST['ratingid'];
			
			if($ratingid != $statis['rating']){
	            $newrating=$this->obj->DB_select_once("company_rating","`id`='".$ratingid."'","`name`,`time_start`,`time_end`,`yh_price`,`service_price`");
	            $ratingM = $this->MODEL('rating');
	            $rat_value=$ratingM->rating_info($ratingid);
	            
				
 				$this->obj->DB_update_all("company_job","`rating`='".$ratingid."'","`uid`='".$_POST['uid']."'");
				
				if($newrating['time_start']<time() && $newrating['time_end']>time()){
					$price = $newrating['yh_price'];
				}else{
					$price = $newrating['service_price'];
				}

				$dingdan=mktime().rand(10000,99999);
				$order['order_id']=$dingdan;
				$order['order_price']=$price;
				$order['type']='1';
				$order['order_time']=time();
				$order['order_state']="2";
				$order['order_remark']=trim("管理员修改会员套餐");
				$order['uid']=$_POST['uid'];
				$order['did']=$this->config['did'];
				$order['rating']=$ratingid;
				$order['order_type']="adminpay";
 			 
				if(!empty($statis)){
					$this->obj->DB_update_all("company_statis",$rat_value,"`uid`='".$_POST['uid']."'");
					if((int)$order['order_price']>0){
						$this->obj->insert_into("company_order",$order);
					}
				} 
 				$this->MODEL('log')->admin_log("企业会员(ID".$_POST['uid'].")更新为【".$newrating['name']."】");


	        }else{
	            if($_POST['vip_etime']){
	                $value3.="`vip_etime`='".strtotime($_POST['vip_etime'])."',";
	            }else{
	                $value3.="`vip_etime`='0',";
	            }
	            $value3.="`job_num`='".$_POST['job_num']."',";
	            $value3.="`down_resume`='".$_POST['down_resume']."',";
 	            $value3.="`invite_resume`='".$_POST['invite_resume']."',";
	            $value3.="`breakjob_num`='".$_POST['breakjob_num']."',";
	            $value3.="`part_num`='".$_POST['part_num']."',";
 	            $value3.="`breakpart_num`='".$_POST['breakpart_num']."',";
	            $value3.="`zph_num`='".$_POST['zph_num']."',";
 	            $value3.="`lt_job_num`='".$_POST['lt_job_num']."',";
	            $value3.="`lt_down_resume`='".$_POST['lt_down_resume']."',";
 	            $value3.="`lt_breakjob_num`='".$_POST['lt_breakjob_num']."'";
	            $this->obj->DB_update_all("company_statis",$value3,"`uid`='".$_POST['uid']."'");
	        }
	        $value2.="`com_name`='".$_POST['name']."',";
	        $value2.="`pr`='".$_POST['pr']."',";
	        $value2.="`mun`='".$_POST['mun']."',";
	        $value2.="`com_provinceid`='".$_POST['provinceid']."',";
	        $value2.="`welfare`='".@implode(',',$_POST['welfare'])."',";
	        $value2.="`rating`='".$ratingid."',";
	        if($_POST['status']=='1'){
	            $rstatus='1';
	        }else{
	            $rstatus='2';
	        }
	        $value2.="`r_status`='".$rstatus."'";
	        $this->obj->DB_update_all("company_job",$value2,"`uid`='".$_POST['uid']."'");
	        $this->obj->update_once("partjob",array('r_status'=>$rstatus,"com_name"=>$_POST['name']),array("uid"=>$_POST['uid']));
	        
	        if($_POST['name']!=$company['name']){
	            $this->obj->update_once("userid_job",array("com_name"=>$_POST['name']),array("com_id"=>$_POST['uid']));
	            $this->obj->update_once("fav_job",array("com_name"=>$_POST['name']),array("com_id"=>$_POST['uid']));
	            $this->obj->update_once("report",array("r_name"=>$_POST['name']),array("c_uid"=>$_POST['uid']));
	            $this->obj->update_once("blacklist",array("com_name"=>$_POST['name']),array("c_uid"=>$_POST['uid']));
	            $this->obj->update_once("msg",array("com_name"=>$_POST['name']),array("job_uid"=>$_POST['uid']));
	            $this->obj->update_once("hotjob",array("username"=>$_POST['name']),array("uid"=>$_POST['uid']));
	        }
	        delfiledir("../data/upload/tel/".$_POST['uid']);
	        $lasturl=str_replace("&amp;","&",$_POST['lasturl']);
	        $this->ACT_layer_msg( "企业会员(ID:".$_POST['uid'].")修改成功！",9,$lasturl,2,1);
	    }
	}
	function rating_action(){
		$ratingid = (int)$_POST['ratingid'];
		$statis = $this->obj->DB_select_once("company_statis","`uid`='".$_POST['uid']."'");
		$rating_info=$this->obj->DB_select_once("company_rating","`id`='".$ratingid."'","`name`,`time_start`,`time_end`,`yh_price`,`service_price`");
		
		if($ratingid!=$statis['rating']){
			$ratingM = $this->MODEL('rating');

			$this->obj->DB_update_all("company_job","`rating`='".$ratingid."'","`uid`='".$_POST['uid']."'");
				
			if($rating_info['time_start']<time() && $rating_info['time_end']>time()){
				$price = $rating_info['yh_price'];
			}else{
				$price = $rating_info['service_price'];
			}

			$dingdan=mktime().rand(10000,99999);
			$order['order_id']=$dingdan;
			$order['order_price']=$price;
			$order['type']='1';
			$order['order_time']=time();
			$order['order_state']="2";
			$order['order_remark']=trim("管理员修改会员套餐");
			$order['uid']=$_POST['uid'];
			$order['did']=$this->config['did'];
			$order['rating']=$ratingid;
			$order['order_type']="adminpay";
 		 
 			$this->MODEL('log')->admin_log("企业会员(ID".$_POST['uid'].")更新为【".$newrating['name']."】");

			if(is_array($statis) && !empty($statis)){
				$value=$ratingM->rating_info($ratingid);
				
				$this->obj->DB_update_all("company_statis",$value,"`uid`='".$_POST['uid']."'");
 				
				if((int)$order['order_price']>0){
					$this->obj->insert_into("company_order",$order);
				}				
				
				$this->MODEL('log')->admin_log("企业会员(ID".$_POST['uid'].")更新为【".$rating_info['name']."】"); 

			}else{
				
				$value="`uid`='".$_POST['uid']."',";
				$value.=$ratingM->rating_info($ratingid);
				$this->obj->DB_insert_once("company_statis",$value);
				$this->MODEL('log')->admin_log("企业会员(ID".$_POST['uid'].")添加会员等级");

			}

			echo "1";die;
		}else{
			echo 0;die;
		}
	}
	function add_action(){
		$rating_list = $this->obj->DB_select_all("company_rating","`category`=1");
		if($_POST['submit']){
			extract($_POST);
			if($username==""||mb_strlen($username)<2||mb_strlen($username)>16){
				$data['msg']= "会员名不能为空或不符合要求！";
				$data['type']='8';
			}elseif($password==""||mb_strlen($password)<6||mb_strlen($password)>20){
				$data['msg']= "密码不能为空或不符合要求！";
				$data['type']='8';
			}elseif(CheckRegUser($username)==false && CheckRegEmail($username)==false){
				$data['msg']= "用户名不得包含特殊字符！";
				$data['type']='8';
			}else{
				if($this->config['sy_uc_type']=="uc_center"){
					$this->uc_open();
					$user = uc_get_user($username);
				}else{
					if ($username!=""){
						$user = $this->obj->DB_select_once("member","`username`='$username'");
					}
					if ($email!=""){
						$comemail = $this->obj->DB_select_once("member","`email`='$email'");
					}
					if ($moblie!=""){
						$commoblie = $this->obj->DB_select_once("company","`linktel`='$moblie'");
					}
					if ($name!=""){
						$comname = $this->obj->DB_select_once("company","`name`='$name'");
					}
				}
				if(is_array($user)){
					$data['msg']= "用户名已存在！";
					$data['type']='8';
				}elseif(is_array($comemail)){
					$data['msg']= "邮箱已存在！";
					$data['type']='8';
				}elseif(is_array($commoblie)){
					$data['msg']= "联系手机已存在！";
					$data['type']='8';
				}elseif(is_array($comname)){
					$data['msg']= "公司全称已存在！";
					$data['type']='8';
				}else{
					$ip = fun_ip_get();
					$time = time();
					if($this->config['sy_uc_type']=="uc_center"){
						$uid=uc_user_register($_POST['username'],$_POST['password'],$_POST['email']);
						if($uid<0){
							switch($uid){
								case "-1":$data['msg']='用户名不合法!';
								break;
								case "-2":$data['msg']='包含不允许注册的词语!';
								break;
								case "-3":$data['msg']='用户名已经存在!';
								break;
								case "-4":$data['msg']='Email 格式有误!';
								break;
								case "-5":$data['msg']='Email 不允许注册!';
								break;
								case "-6":$data['msg']='该 Email 已经被注册!';
								break;
							}
							$this->ACT_layer_msg($data['msg'],8);
						}else{
							list($uid,$username,$email,$password,$salt)=uc_get_user($username);
							$value = "`username`='$username',`password`='$password',`email`='$email',`usertype`='2',`address`='$address',`status`='$status',`salt`='$salt',`moblie`='$moblie',`reg_date`='$time',`reg_ip`='$ip'";
						}
					}else{
						$salt = substr(uniqid(rand()), -6);
						$pass = md5(md5($password).$salt);
						$value = "`username`='$username',`password`='$pass',`email`='$email',`usertype`='2',`address`='$address',`status`='$status',`salt`='$salt',`moblie`='$moblie',`reg_date`='$time',`reg_ip`='$ip'";
					}
					$nid = $this->obj->DB_insert_once("member",$value);
					$uid = $nid;
					
					if($uid>0){
						if($areacode&&$telphone){
							$linkphone=$areacode.'-'.$telphone;
							if($exten){
								$linkphone.='-'.$exten;
							}
						}
						$arr="`uid`='".$uid."',";
						$arr.="`name`='".$name."',";
						$arr.="`shortname`='".$shortname."',";
						$arr.="`hy`='".$hy."',";
						$arr.="`pr`='".$pr."',";
						$arr.="`mun`='".$mun."',";
						$arr.="`provinceid`='".$provinceid."',";
						$arr.="`cityid`='".$cityid."',";
						$arr.="`three_cityid`='".$three_cityid."',";
						$arr.="`address`='".$address."',";
						$arr.="`linkman`='".$linkman."',";
						$arr.="`linktel`='".$moblie."',";
						$arr.="`linkphone`='".$linkphone."',";
						$arr.="`linkmail`='".$email."',";
						$content=str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'','',''),$content);
						$arr.="`content`='".$content."'";
						$this->obj->DB_insert_once("company",$arr);
						$value=$this->MODEL('userinfo')->FetchRatingInfo(array("uid"=>$uid),array("id"=>$_POST['rating_name']));
						$value['did']=$this->config['did'];
						$this->MODEL('userinfo')->InsertReg("company_statis",$value);
						if($integral>0){
							$this->MODEL('integral')->company_invtal($uid,$integral,true,"管理员赠送",true,2,'integral',23);
						}
						
						$notice = $this->MODEL('notice');
						if($sendmsg&&$moblie){
							if($this->config["sy_msguser"]!="" && $this->config["sy_msgpw"]!="" && $this->config["sy_msgkey"]!=""&&$this->config['sy_msg_isopen']=='1'){
								$notice->sendSMSType(array("name"=>$username,"username"=>$username,"password"=>$password,"moblie"=>$moblie,"type"=>"reg",'uid'=>$uid));
							}
						}
						if($sendemail&&$email){
							$notice->sendEmailType(array("name"=>$username,"username"=>$username,"password"=>$password,"email"=>$email,"type"=>"reg",'uid'=>$uid));
						}
						$data['msg']="会员(ID:".$uid.")添加成功";
						$data['type']='9';
					}
				}
			}
			if($_POST['type']){
				echo "<script type='text/javascript'>window.location.href='index.php?m=admin_company_job&c=show&uid=".$nid."'</script>";die;
			}else{
				if($data['type']=='9'){
					$this->ACT_layer_msg($data['msg'],$data['type'],"index.php?m=admin_company",2,1);
				}else{
					$this->ACT_layer_msg($data['msg'],$data['type']);
				}
			}

		}
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','com')));
		$this->yunset("get_info",$_GET);
		$this->yunset("rating_list",$rating_list);
		$this->yuntpl(array('admin/admin_member_comadd'));
	}
	
	function getstatis_action(){
		if($_POST['uid']){
			$rating	= $this->obj->DB_select_once("company_statis","`uid`='".intval($_POST['uid'])."'");
			if($rating['vip_etime']>0){
				$rating['vipetime'] = date("Y-m-d",$rating['vip_etime']);
			}else{
				$rating['vipetime'] = '不限';
			}
			echo json_encode($rating);
		}
	}
	function getrating_action(){
		if($_POST['id']){
			$rating	= $this->obj->DB_select_once("company_rating","`id`='".intval($_POST['id'])."' and `category`='1'");
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
	function uprating_action(){
		
 		if($_POST['rating'] == ''){
			
			$this->ACT_layer_msg( "请选择会员等级！",8,$_SERVER['HTTP_REFERER']);

		}else if($_POST['ratuid']){

			$uid = intval($_POST['ratuid']);

			$statis = $this->obj->DB_select_once("company_statis","`uid`='".$uid."'");

			unset($_POST['ratuid']);
			unset($_POST['pytoken']);
			
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
			$ratinginfo = $this->obj->DB_select_once("company_rating","`id`='".$_POST['rating']."'");
			$statisSqlValue.=",`rating_type`='".$ratinginfo['type']."'";

			if($statis['rating'] != $_POST['rating'] || ($statis['rating'] == $_POST['rating'] && $statis['vip_etime'] < time() && (int)$_POST['addday'] <0)){
				
				$statisSqlValue.=",`vip_stime`='".time()."'";
				$this->obj->DB_update_all("company_job","`rating`='".$_POST['rating']."'","`uid`='".$uid."'");
				$this->obj->DB_update_all("hotjob","`rating_id`='".$_POST['rating']."',`rating`='".$_POST['rating_name']."'","`uid`='".$uid."'");
				

				if($ratinginfo['time_start']<time() && $ratinginfo['time_end']>time()){
					$price = $ratinginfo['yh_price'];
				}else{
					$price = $ratinginfo['service_price'];
				}

				$dingdan=mktime().rand(10000,99999);
				$order['order_id']=$dingdan;
				$order['order_price']=$price;
				$order['type']='1';
				$order['order_time']=mktime();
				$order['order_state']="2";
				$order['order_remark']=trim("管理员修改会员套餐");
				$order['uid']=$uid;
				$order['did']=$this->config['did'];
				$order['rating']=$_POST['rating'];
				$order['order_type']="adminpay";
 			}

			if(!empty($statis)){
				$id = $this->obj->DB_update_all("company_statis",$statisSqlValue,"`uid`='".$uid."'");
				if((int)$order['order_price']>0){
					$this->obj->insert_into("company_order",$order);
				}
			}else{
				$this->obj->DB_insert_once("company_statis",$statisSqlValue.",`uid`='".$uid."'");
				$id = true;
			}
			$id?$this->ACT_layer_msg("企业会员等级(ID:".$uid.")修改成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("修改失败！",8,$_SERVER['HTTP_REFERER']);
		}else{
			$this->ACT_layer_msg( "非法操作！",8,$_SERVER['HTTP_REFERER']);
		}

	}
	 
	function del_action(){
		$this->check_token();
	    if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
				$del_array=array("member","company","company_job","company_cert","company_news","company_order","company_product","company_show","banner","company_statis","question","attention","lt_job","hotjob","invoice_record","px_zixun","px_subject_collect","special_com","zhaopinhui_com","partjob","answer","answer_review","evaluate_log","subscribe","subscriberecord","coupon_list","friend_state");

	    		if(is_array($del)){
	    			$layer_type=1;
	    			$uids = @implode(",",$del);
	    			foreach($del as $k=>$v){
	    				delfiledir("../data/upload/tel/".intval($v));
	    			}
				    $company=$this->obj->DB_select_all("company","`uid` in (".$uids.") and `logo`!=''","logo,firmpic");
				    if(is_array($company)){
				    	foreach($company as $v){
				    		unlink_pic(".".$v['logo']);
				    		unlink_pic(".".$v['firmpic']);
				    	}
				    }
		    	    $cert=$this->obj->DB_select_all("company_cert","`uid` in (".$uids.") and `type`='3'","check");
		    	    if(is_array($cert)){
				    	foreach($cert as $v){
				    		unlink_pic("../".$v['check']);
				    	}
				    }
		    	    $product=$this->obj->DB_select_all("company_product","`uid` in (".$uids.")","pic");
		    	    if(is_array($product)){
		    	    	foreach($product as $val){
		    	    		unlink_pic("../".$val['pic']);
		    	    	}
		    	    }
		    	    $show=$this->obj->DB_select_all("company_show","`uid` in (".$uids.")","picurl");
		    	    if(is_array($show)){
		    	    	foreach($show as $val){
		    	    		unlink_pic("../".$val['picurl']);
		    	    	}
		    	    }
		    	    $uhotjob=$this->obj->DB_select_all("hotjob","`uid` in (".$uids.")","hot_pic");
		    	    if(is_array($uhotjob)){
		    	    	foreach($uhotjob as $val){
		    	    		unlink_pic("../".$val['hot_pic']);
		    	    	}
		    	    }
		    	  	$banner=$this->obj->DB_select_all("banner","`uid` in (".$uids.")","pic");
		    	    if(is_array($banner)){
		    	    	foreach($banner as $val)
		    	    	{
		    	    		unlink_pic($val['pic']);
		    	    	}
		    	    }
		    	    

					foreach($del_array as $value){
						$this->obj->DB_delete_all($value,"`uid` in (".$uids.")","");
					}
					$this->obj->DB_delete_all("email_msg","`uid` in (".$uids.") or `cuid` in (".$uids.")"," ");
					$this->obj->DB_delete_all("company_msg","`cuid` in (".$uids.")"," ");
					$this->obj->DB_delete_all("talent_pool","`cuid` in (".$uids.")"," ");
					$this->obj->DB_delete_all("user_entrust_record","`comid` in (".$uids.")"," ");
					$this->obj->DB_delete_all("ad_order","`comid` in (".$uids.")"," ");
		    	    $this->obj->DB_delete_all("company_pay","`com_id` in (".$uids.")"," ");
					$this->obj->DB_delete_all("atn","`uid` in (".$uids.") or `sc_uid` in (".$uids.")","");
					$this->obj->DB_delete_all("look_resume","`com_id` in (".$uids.")","");
					$this->obj->DB_delete_all("fav_job","`com_id` in (".$uids.")","");
					$this->obj->DB_delete_all("userid_msg","`fid` in (".$uids.")","");
					$this->obj->DB_delete_all("userid_job","`com_id` in (".$uids.")","");
					$this->obj->DB_delete_all("look_job","`com_id` in (".$uids.")","");

		    	    $this->obj->DB_delete_all("msg","`job_uid` in (".$uids.")","");
		    	    $this->obj->DB_delete_all("blacklist","`c_uid` in (".$uids.")","");
		    	    $this->obj->DB_delete_all("rebates","`job_uid` in (".$uids.") or `uid` in (".$uids.")"," ");
		    	    $this->obj->DB_delete_all("report","`p_uid` in ($uids) or `c_uid` in ($uids)","");
					$this->obj->DB_delete_all("part_apply","`comid` in (".$uids.")","");
					$this->obj->DB_delete_all("part_collect","`comid` in (".$uids.")","");
					$this->obj->DB_delete_all("member_log","`uid` in (".$uids.")","");
					$this->obj->DB_delete_all("down_resume","`comid` in (".$uids.")","");
					$this->obj->DB_delete_all("school_xjh","`uid` in (".$uids.")","");
					$this->obj->DB_delete_all("user_log","`uid` in (".$uids.")","");
		    	}else{
		    		$layer_type=0;
					$uids=$del = intval($del);
		    		
		    		delfiledir("../data/upload/tel/".$del);
				    $company=$this->obj->DB_select_once("company","`uid`='".$del."' and `logo`!=''","logo,firmpic");
				    unlink_pic(".".$company['logo']);
				    unlink_pic(".".$company['firmpic']);
		    	    $cert=$this->obj->DB_select_once("company_cert","`uid`='".$del."' and `type`='3'","check");
		    	    unlink_pic("../".$cert['check']);
		    	    $product=$this->obj->DB_select_all("company_product","`uid`='".$del."'","pic");
		    	    if(is_array($product)){
		    	    	foreach($product as $v){
		    	    		unlink_pic("../".$v['pic']);
		    	    	}
		    	    }
		    	    $show=$this->obj->DB_select_all("company_show","`uid`='".$del."'","picurl");
		    	    if(is_array($show)){
		    	    	foreach($show as $v){
		    	    		unlink_pic("../".$v['picurl']);
		    	    	}
		    	    }
			    	$uhotjob=$this->obj->DB_select_all("hotjob","`uid`='".$del."'","hot_pic");
		    	    if(is_array($uhotjob)){
		    	    	foreach($uhotjob as $val){
		    	    		unlink_pic("../".$val['hot_pic']);
		    	    	}
		    	    }
		    	    $banner=$this->obj->DB_select_once("banner","`uid`='".$del."'","pic");
					unlink_pic($banner['pic']);
					foreach($del_array as $value){
						$this->obj->DB_delete_all($value,"`uid`='".$del."'","");
					}
					$this->obj->DB_delete_all("email_msg","`uid`='".$del."' or `cuid`='".$del."'"," ");
					$this->obj->DB_delete_all("company_msg","`cuid`='".$del."'"," ");
					$this->obj->DB_delete_all("talent_pool","`cuid`='".$del."'"," ");
					$this->obj->DB_delete_all("user_entrust_record","`comid`='".$del."'"," ");
					$this->obj->DB_delete_all("ad_order","`comid`='".$del."'"," ");
					$this->obj->DB_delete_all("company_pay","`com_id`='".$del."'"," ");
		    	    $this->obj->DB_delete_all("atn","`uid`='".$del."' or `sc_uid`='".$del."'","");
		    	    $this->obj->DB_delete_all("look_resume","`com_id`='".$del."'","");
		    	    $this->obj->DB_delete_all("look_job","`com_id`='".$del."'","");
		    	    $this->obj->DB_delete_all("fav_job","`com_id`='".$del."'","");
		    	    $this->obj->DB_delete_all("userid_msg","`fid`='".$del."'","");
		    	    $this->obj->DB_delete_all("userid_job","`com_id`='".$del."'","");

		    	    $this->obj->DB_delete_all("msg","`job_uid`='".$del."'","");
		    	    $this->obj->DB_delete_all("blacklist","`c_uid`='".$del."'","");
		    	    $this->obj->DB_delete_all("rebates","`job_uid`='".$del."' or `uid` ='".$del."'"," ");
		    	    $this->obj->DB_delete_all("report","`p_uid`='".$del."' or `c_uid`='".$del."'","");
					$this->obj->DB_delete_all("part_apply","`comid` ='".$del."'","");
					$this->obj->DB_delete_all("part_collect","`comid` ='".$del."'","");
					$this->obj->DB_delete_all("member_log","`uid` ='".$del."'","");
					$this->obj->DB_delete_all("down_resume","`comid` ='".$del."'",""); 
					$this->obj->DB_delete_all("school_xjh","`uid`='".$del."'","");
		    	}
	    		$this->layer_msg( "公司(ID:".$uids.")删除成功！",9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "请选择您要删除的公司！",8,1);
	    	}
	    }
	}
	function lockinfo_action(){
		$userinfo = $this->obj->DB_select_once("member","`uid`=".$_POST['uid'],"`lock_info`");
		echo $userinfo['lock_info'];die;
	}
	function lock_action(){
		$_POST['uid']=intval($_POST['uid']);
		if(($_POST['status']==2 || $_POST['status']==3)&&$_POST['lock_info']==''){
			$this->ACT_layer_msg("请填写锁定说明！",8);
		}
		// if($_POST['status']==3 &&$_POST['statusip']){//限制IP
			// $ip=$this->config['sy_bannedip']?$this->config['sy_bannedip']."|".$_POST['statusip']:$_POST['statusip'];
			// $ip=str_replace($_POST['statusip'],$this->config['sy_bannedip']);
			// $this->obj->DB_update_all("admin_config","`config`='".$ip."'","`name`='sy_bannedip'");
			// $this->web_config();
			// $_POST['status']=2;//状态重置为2;为了方便统一状态
		// }

		// $email=$this->obj->DB_select_once("company","`uid`='".$_POST['uid']."'","`linkmail`,`name`");
		// $this->obj->DB_update_all("partjob","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		// $this->obj->DB_update_all("company_job","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		// $this->obj->DB_update_all("company","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		// $this->obj->DB_update_all("lt_job","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		// $id=$this->obj->DB_update_all("member","`status`='".$_POST['status']."',`lock_info`='".$_POST['lock_info']."'","`uid`='".$_POST['uid']."'");
		if($_POST['status']==4 &&$_POST['statusip']){
			$ip=$this->config['sy_bannedip']?$this->config['sy_bannedip']."|".$_POST['statusip']:$_POST['statusip'];
			$this->obj->DB_update_all("admin_config","`config`='".$ip."'","`name`='sy_bannedip'");
			$this->web_config();
         	 $id=$this->obj->DB_update_all("member","`status`='".$_POST['status']."',`lock_info`='".$_POST['lock_info']."'","`uid`='".$_POST['uid']."'");
			$_POST['status']=2;
            $email=$this->obj->DB_select_once("company","`uid`='".$_POST['uid']."'","`linkmail`,`name`");
            $this->obj->DB_update_all("partjob","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
            $this->obj->DB_update_all("company_job","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
            $this->obj->DB_update_all("company","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
            $this->obj->DB_update_all("lt_job","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
		}else{
          $mb= $this->obj->DB_select_once("member","`uid`='".$_POST['uid']."'","`status`");
          if($mb['status']==4){
             $ip=str_replace($_POST['statusip'],"",$this->config['sy_bannedip']);
         	 $this->obj->DB_update_all("admin_config","`config`='".$ip."'","`name`='sy_bannedip'");
          }
          $email=$this->obj->DB_select_once("company","`uid`='".$_POST['uid']."'","`linkmail`,`name`");
          $this->obj->DB_update_all("partjob","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
          $this->obj->DB_update_all("company_job","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
          $this->obj->DB_update_all("company","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
          $this->obj->DB_update_all("lt_job","`r_status`='".$_POST['status']."'","`uid`='".$_POST['uid']."'");
          $id=$this->obj->DB_update_all("member","`status`='".$_POST['status']."',`lock_info`='".$_POST['lock_info']."'","`uid`='".$_POST['uid']."'");
        }
		
		//只有锁定才发邮件
		if($_POST['status']=='2'){
			$notice = $this->MODEL('notice');
			$notice->sendEmailType(array("email"=>$email['linkmail'],"uid"=>$_POST['uid'],"name"=>$email['name'],"lock_info"=>$_POST['lock_info'],"type"=>"lock"));
		}
		$id?$this->ACT_layer_msg("企业会员(ID:".$_POST['uid'].")锁定设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg( "设置失败！",8,$_SERVER['HTTP_REFERER']);
	}
	
	
	function checkguwen_action(){
		$crmUser = $this->obj->DB_select_once('company_consultant',"`id`='".(int)$_POST['gid']."'");
		
 		$value="`conid`='".$_POST['gid']."',";
		
		$value.="`addtime`='".time()."'";
		if($crmUser['crm_uid']>0){
			$value.=",`crm_uid`='".$crmUser['crm_uid']."'";
			$value.=",`crm_time`='".time()."'";
		}
		$where="`uid` in (".$_POST['comid'].")";
		$nid=$this->obj->DB_update_all("company",$value,$where);
		$member=$this->obj->DB_select_all("member","`uid` in (".$_POST['comid'].")");

		if (is_array($member)&&!empty($member)){
			if ($nid){
				$comid=explode(',',$_POST['comid']);
				$consultant = $this->obj->DB_select_once("company_consultant","`id`='".$_POST['gid']."'","username");
				foreach($comid as $v){
					$this->automsg('为您分配招聘顾问：'.$consultant['username'],$v);
				}
		 		$this->ACT_layer_msg("顾问分配成功！",9,$_SERVER['HTTP_REFERER']);
		 	}else{
		 		$this->ACT_layer_msg("顾问分配失败！",8,$_SERVER['HTTP_REFERER']);
		 	}
		}else{
		 	$this->ACT_layer_msg( "非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
	}

	function status_action(){
		 extract($_POST);
		 $member=$this->obj->DB_select_all("member","`uid` in (".$uid.")","`email`,`moblie`,`uid`");
		 if(is_array($member)&&$member){
			 $company=$this->obj->DB_select_all("company","`uid` in (".$uid.")","`name`,`uid`");
			 $info=array();
			 
			foreach($company as $val){
				$info[$val['uid']]=$val['name'];
			}
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

				$result = $notice->sendEmailType(array("uid"=>$v['uid'],"name"=>$info[$v['uid']],"email"=>$v['email'],
				"moblie"=>$v['moblie'],"auto_statis"=>$_POST['states'],"status_info"=>$statusbody,"date"=>date("Y-m-d H:i:s"),"type"=>"userstatus"));
				$result = $notice->sendSMSType(array("uid"=>$v['uid'],"name"=>$info[$v['uid']],"email"=>$v['email'],
				"moblie"=>$v['moblie'],"auto_statis"=>$_POST['states'],"status_info"=>$statusbody,"date"=>date("Y-m-d H:i:s"),"type"=>"userstatus"));
			}
			if(trim($statusbody)){
				$lock_info=$statusbody;
			}
			 
			$aid = @implode(",",$idlist);
			$id=$this->obj->DB_update_all("member","`status`='".$status."',`lock_info`='".$lock_info."'","`uid` IN (".$aid.")");
			if($id){
				if($status=="1"){
					$rstatus='1';
				}else{
					$rstatus='2';
				}
				$this->obj->DB_update_all("partjob","`r_status`='".$rstatus."'","`uid` IN (".$aid.")");
				$this->obj->DB_update_all("company","`r_status`='".$rstatus."'","`uid` IN (".$aid.")");
				$this->obj->DB_update_all("company_job","`r_status`='".$rstatus."'","`uid` IN (".$aid.")");
				$this->obj->DB_update_all("lt_job","`r_status`='".$rstatus."'","`uid` IN (".$aid.")");
				$this->ACT_layer_msg("企业会员审核(ID:".$aid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				$this->ACT_layer_msg("审核设置失败！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg( "非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
	}

	function hotjobinfo_action(){
		if($_GET['id']){
			
			$hotjob=$this->obj->DB_select_once("hotjob","`uid`='".(int)$_GET['id']."'");

		}else if($_GET['uid']){

			$row = $this->obj->DB_select_alls("company","company_statis","a.`uid`='".(int)$_GET['uid']."' and b.`uid`='".(int)$_GET['uid']."'","a.`content`,a.`name` as username,b.`rating` as rating_id,b.`rating_name` as rating,a.`uid`,a.`logo` as hot_pic");
			$row=$row[0];
			$row['content']=@explode(' ',trim(strip_tags($row['content'])));
			if(is_array($row['content'])&&$row['content']){
				foreach($row['content'] as $val){
					$row['beizhu'].=trim($val);
				}
			}else{
				$row['beizhu']=$row['content'];
			}
			$hotjob=$row;
			$hotjob['time_start']=time();
		}
		$this->yunset('source','company');
		$this->yunset("hotjob",$hotjob);
		$this->yuntpl(array('admin/admin_hotjob_info'));
	}
	function save_action(){
	    $UploadM = $this->MODEL('upload');
	    extract($_POST);

	    if($_FILES['file']['tmp_name'] !="" && is_uploaded_file($_FILES['file']['tmp_name'])){
 
	        $upload=$UploadM->Upload_pic("../data/upload/hotpic/");
	        $pictures=$upload->picture($_FILES['file']);
	        $picmsg=$UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER']);
	        if($picmsg['status']==$pictures){
	            $this->ACT_layer_msg($picmsg['msg'],8);
	        }else{
	            $pic = str_replace("../data/upload","./data/upload",$pictures);
	        }
	    }else{
	        if($_POST['hotad']){
	            $defpic=".".$defpic;
	            $url=@explode("/",$defpic);
	            $url2=str_replace($url[4],date("Ymd"),$defpic);
	            $name=@explode(".",$url[5]);
	            $url2=str_replace($name[0],time(),$url2);
	            if(!file_exists('../data/upload/company/'.date("Ymd")))
	            {
	                mkdir ('../data/upload/company/'.date("Ymd"));
	            }
	            copy($defpic,$url2);
	            $pic = str_replace("../data/upload","./data/upload",$url2);
	        }
	    }
	    $com=$this->obj->DB_select_once("company","`uid`='".$uid."'","`did`,`logo`");
	    if($_POST['hotad']){
	        
			$start = strtotime($time_start);
	        $end = strtotime($time_end);
			if($start>=$end){
				 $this->ACT_layer_msg("结束日期必须大于开始日期！",8);
			}

	        $nid=$this->obj->DB_insert_once("hotjob","`uid`='$uid',`username`='$username',`sort`='$sort',`rating_id`='$rating_id',`rating`='$rating',`hot_pic`='$pic',`service_price`='$service_price',`beizhu`='$beizhu',`time_start`='$start',`time_end`='$end',`did`='".$com['did']."'");

	        $this->obj->DB_update_all("company","`hottime`='".$end."', `rec`='1'","`uid`='".$uid."'");
			$this->automsg('管理员操作：您的企业已被设置为名企招聘，时间：'.$time_start.'-'.$time_end,$uid);
	        $this->ACT_layer_msg("名企招聘(ID:".$nid.")设定成功！",9,"index.php?m=admin_company",2,1);

	    }elseif($_POST['hotup']){
	        $start = strtotime($time_start);
	        $end = strtotime($time_end);
			if($start>=$end){
				 $this->ACT_layer_msg("结束日期必须大于开始日期！",8);
			}
	        $value = "`service_price`='$service_price',`time_start`='$start',`time_end`='$end',`beizhu`='$beizhu',`sort`='$sort',`did`='".$com['did']."'";
	        if($pic!=""){
	            $hot=$this->obj->DB_select_once("hotjob","`id`='$id'");
	            unlink_pic("../".$hot['hot_pic']);
	            $value.=",`hot_pic`='$pic'";
	        }else{
				$pic = $com['logo'];
			}
	        $this->obj->DB_update_all("hotjob",$value,"`id`='$id'");
	        $this->obj->DB_update_all("company","`hottime`='".$end."' , `rec`='1' ","`uid`='".$uid."'");
			$this->automsg('管理员操作：您的企业已被设置为名企招聘，时间：'.$time_start.'-'.$time_end,$uid);
	        $this->ACT_layer_msg("名企招聘(ID:".$id.")修改成功！",9,"index.php?m=admin_company",2,1);
	    }
	}
	function delhot_action(){
		$this->check_token();
	    if(isset($_GET['id'])){
	    	$hot=$this->obj->DB_select_once("hotjob","`uid`='".$_GET['id']."'");
			unlink_pic("../".$hot['hot_pic']);
			$result=$this->obj->DB_delete_all("hotjob","`uid`='".$_GET['id']."'" );
			if($result){
				$this->obj->DB_update_all("company","`hottime`='',`rec`='0'","`uid`='".$hot['uid']."'");
				$this->automsg('管理员操作：名企招聘已取消',$_GET['id']);
				$this->layer_msg('名企招聘(ID:'.$_GET['id'].')删除成功！',9,0,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('删除失败！',8,0,$_SERVER['HTTP_REFERER']);
			}
		}
	}
	function Imitate_action(){
		extract($_GET);
		$user_info = $this->obj->DB_select_once("member","`uid`='".$uid."'");
		$this->cookie->add_cookie($user_info['uid'],$user_info['username'],$user_info['salt'],$user_info['email'],$user_info['password'],$user_info['usertype'],1,$user_info['did']);
		if($_GET['type']){
			$url = '/index.php?c=tongji';
		}
		header('Location: '.$this->config['sy_weburl'].'/member'.$url);
	}
	function xls_action(){
		if($_POST['where']){
			$gettype=$_POST['type'];
			$_POST['where']=str_replace(array("[","]","an d","\&acute;","\\"),array("(",")","and","'",""),$_POST['where']);
			if(in_array("lastdate",$_POST['type']) || in_array("rating",$_POST['type']) || in_array("vip_stime",$_POST['type'])){
				foreach($_POST['type'] as $v){
					if($v=="lastdate"){
						$type[]="lastupdate";
					}elseif($v!="rating" && $v!="vip_stime"){
						$type[]=$v;
					}
				}
				$_POST['type']=$type;
			}
			$select=@implode(",",$_POST['type']);
			if(strstr($select,"rating") && strstr($select,"uid")==false){
				$select=$select.",uid";
			}
			if(strstr($select,'money')){
			    $select=$select.',`moneytype`';
			}
			
			if($_POST['uid']){
			    $uids=@explode(',',$_POST['uid']);
			    $_POST['where']="`uid` in(".pylode(',',$uids).")";
			}
			
			$limit=intval($_POST['limit']);
			if($limit){
			    $_POST['where'].=" limit ".$limit;
			}
			$list=$this->obj->DB_select_all("company",$_POST['where'],$select);
			if(!empty($list)){
				if(in_array("rating",$gettype)){
					foreach($list as $v){
						$uid[]=$v['uid'];
					}
					$rating=$this->obj->DB_select_all("company_statis","uid in (".@implode(",",$uid).")","uid,rating_name,vip_stime");
					foreach($list as $k=>$v){
						foreach($rating as $val){
							if($v['uid']==$val['uid']){
								$list[$k]['rating']=$val['rating_name'];
								$list[$k]['vip_stime']=$val['vip_stime'];
							}
						}
					}
				}
				$this->yunset("list",$list);
				$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','com')));
				$this->yunset("type",$gettype);
				$this->MODEL('log')->admin_log("导出公司信息");
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attachment; filename=company.xls");
				$this->yuntpl(array('admin/admin_company_xls'));
			}
		}
	}
	function check_username_action(){
		$username=$_POST['username'];
		$member=$this->obj->DB_select_once("member","`username`='".$username."'","`uid`");
		echo $member['uid'];die;
	}

	function checksitedid_action(){
		if($_POST['uid']){
			$uids=@explode(',',$_POST['uid']);
			$uid = pylode(',',$uids);
			if($uid){
				$siteDomain = $this->MODEL('site');
				$Table = array('member','company','company_statis','company_job','company_cert','company_news','company_order','company_product','invoice_record','partjob','hotjob');
				$siteDomain->UpDid(array('report'),$_POST['did'],"`p_uid` IN (".$uid.")");
				$siteDomain->UpDid(array('userid_msg'),$_POST['did'],"`fid` IN (".$uid.")");
				$siteDomain->UpDid(array('down_resume','company_pay'),$_POST['did'],"`com_id` IN (".$uid.")");
				$siteDomain->UpDid(array('look_resume','ad_order'),$_POST['did'],"`comid` IN (".$uid.")");
				$siteDomain->UpDid($Table,$_POST['did'],"`uid` IN (".$uid.")");
				$this->ACT_layer_msg( "会员(ID:".$_POST['uid'].")分配站点成功！",9,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("请正确选择需分配用户！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg( "参数不全请重试！",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function saveusername_action(){
		if($_POST['username']){
			if(CheckRegUser($_POST['username'])==false && CheckRegEmail($_POST['username'])==false){
					echo 2;die;
			}
			$username=$_POST['username'];
			$M=$this->MODEL("userinfo");
			$num=$M->GetMemberNum(array("username"=>$username));
			if($num>0){
				echo 1;die;
			}else{
				$M->UpdateMember(array("username"=>$username),array("uid"=>$_POST['uid']));
				$this->automsg('管理员为您修改用户名：'.$username,intval($_POST['uid']));
				echo 0;die;
			}
		}
	}
	function getinfo_action(){
	    if($_POST['comid']){
	        $info= $this->obj->DB_select_once("company","`uid`='".intval($_POST['comid'])."'");
	        $member=$this->obj->DB_select_once("member","`uid`='".$info['uid']."'","`username`,`reg_ip`,`status`");
	        $statis=$this->obj->DB_select_once("company_statis","`uid`='".$info['uid']."'","`rating`");
	        $yyzz=$this->obj->DB_select_once("company_cert","`uid`='".$info['uid']."' and `type`=3 ","`check`");
	        $conid=$info['conid'];
	        if ($conid){
	        	$adviser=$this->obj->DB_select_once("company_consultant","`id`=$conid");
	        	$info['adviser']=$adviser['username'];
	        }else{
	        	$info['adviser']=null;
	        }
	        $info['username']=$member['username'];
	        $info['reg_ip']=$member['reg_ip'];
	        $info['status']=$member['status'];
	        $info['rating']=$statis['rating'];
	        $info['yyzzurl']=str_replace("./",$this->config['sy_weburl']."/",$yyzz['check']);
            if ($info['linktel']){
                $info['phone']=$info['linktel'];
            }else{
                $info['phone']=$info['linkphone'];
            }
			$integralNum=$this->obj->DB_select_num("company_pay","`com_id`='".$info['uid']."' and `type`=1");
			$info['integralNum']=$integralNum;
			$orderNum=$this->obj->DB_select_num("company_order","`uid`='".$info['uid']."'");
			$info['orderNum']=$orderNum;
			$downNum=$this->obj->DB_select_num("down_resume","`comid`='".$info['uid']."'");
			$info['downNum']=$downNum;
			$applyNum=$this->obj->DB_select_num("userid_job","`com_id`='".$info['uid']."'");
			$info['applyNum']=$applyNum;
			$inviteNum=$this->obj->DB_select_num("userid_msg","`fid`='".$info['uid']."'");
			$info['inviteNum']=$inviteNum;
			$showNum=$this->obj->DB_select_num("company_show","`uid`='".$info['uid']."'");
			$info['showNum']=$showNum;
			$jobNum=$this->obj->DB_select_num("company_job","`uid`='".$info['uid']."'");
			$info['jobNum']=$jobNum;
	        echo json_encode($info);
	    }
	}

	function sendsysmsg_action(){
        if($_POST['content']==""){
            $this->ACT_layer_msg("请填写内容！",8);
        }
        $data['content']=$_POST['content'];
        $data['ctime']=time();
        $data['fa_uid']=$_POST['sysmsg_user'];
        $data['username']=$_POST['sys_username'];
        $nid=$this->obj->insert_into("sysmsg",$data);
        if ($nid){
            $this->ACT_layer_msg("系统消息发送成功！",9,$_SERVER['HTTP_REFERER'],2,1);
        }else{
            $this->ACT_layer_msg("用户不存在！",8,$_SERVER['HTTP_REFERER']);
        }
	}
	
	function log_search(){
		$opera=array('1'=>'职位','9'=>'兼职','2'=>'财务','3'=>'下载简历','23'=>'举报','4'=>'邀请面试','5'=>'收藏关注','6'=>'申请报名','7'=>'基本信息','8'=>'修改密码','11'=>'修改账号','13'=>'认证绑定','12'=>'账号解绑','14'=>'招聘会/专题','15'=>'地图设置','16'=>'上传图片','17'=>'积分兑换','18'=>'消息','19'=>'问答','24'=>'优惠券','25'=>'悬赏推荐','26'=>'浏览/屏蔽');
		$search_list[]=array("param"=>"operas","name"=>'操作类型',"value"=>$opera);
		
 		$parr=array('1'=>'增加','2'=>'变更','3'=>'删除','4'=>'刷新');
		$search_list[]=array("param"=>"parrs","name"=>'操作内容',"value"=>$parr);
	    
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
	    $search_list[]=array("param"=>"end","name"=>'操作时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
	}
	function member_log_action(){
		$this->log_search();
	    
		$where = $mwhere= '1';
		$where .=" and `usertype`='2'";
		if($_GET['uid']!=''){
			$where.=" and `uid`='".intval($_GET['uid'])."'";
			$urlarr['uid']=intval($_GET['uid']);
		}

		if($_GET['keyword']){
			if($_GET['type']=='1'){
				$where.= " and `uid` like '%".trim($_GET['keyword'])."%' ";
			}else if($_GET['type']=='2'){
				$mwhere.= " and `name` like '%".trim($_GET['keyword'])."%' ";
			}else if($_GET['type']=='3'){
				$where.= " and `content` like '%".trim($_GET['keyword'])."%' ";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}

		if($mwhere!='1'){
			$com=$this->obj->DB_select_all("company",$mwhere,"`uid`,`name`");
			if ($com && is_array($com)){
			    $muids=array();
			    foreach($com as $val){
			        $muids[]=$val['uid'];
			    }
			    $where.=" and `uid` in (".@implode(',',$muids).")";
			}else{
			    $where="";
			}
		}

	    if($_GET['operas']=='2'){
			$where.= " and (`opera`='88' or `content` like '%订单%') ";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='26'){
	        $where.=" and (`opera`='".$_GET['operas']."' or `content` like '%浏览%')";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='25'){
	        $where.=" and (`opera`='".$_GET['operas']."' or `content` like '%悬赏%')";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='24'){
	        $where.=" and (`opera`='".$_GET['operas']."' or `content` like '%优惠券%')";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='23'){
	        $where.=" and (`opera`='".$_GET['operas']."' or `content` like '%举报%')";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='19'){
	        $where.=" and (`opera`='".$_GET['operas']."' or `content` like '%问答%')";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='13'){
	        $where.=" and (`opera`='".$_GET['operas']."' or `content` like '%认证%')";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='6'){
	        $where.=" and (`opera`='".$_GET['operas']."' or `content` like '%申请%')";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']=='5'){
	        $where.=" and (`opera`='".$_GET['operas']."' or `content` like '%收藏%')";
	        $urlarr['operas']=$_GET['operas'];
	    }else if($_GET['operas']!=""){
			$where.=" and `opera`='".$_GET['operas']."'";
	        $urlarr['operas']=$_GET['operas'];
		}
	    if($_GET['parrs']){
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
				$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).")","`uid`,`username`");
				$company=$this->obj->DB_select_all("company","`uid` in (".@implode(",",$uid).")","`uid`,`name`");
	        }
	        foreach($rows as $k=>$v){
	            foreach($member as $val){
	                if($v['uid']==$val['uid']){
	                    $rows[$k]['username']=$val['username'];
	                }
	            }
				foreach($company as $val){
	                if($v['uid']==$val['uid']){
	                    $rows[$k]['comname']=$val['name'];
	                }
	            }
	        }
	    }

		$UserInfoM = $this->MODEL('userinfo');
		$uinfo=$UserInfoM->GetMemberOne(array('uid'=>$_GET['uid']),array("field"=>"uid,username"));
	    $this->yunset("uinfo",$uinfo);
	    $this->yunset("rows",$rows);
	    $this->yuntpl(array('admin/admin_company_member_log'));
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
		$where .=" and `usertype`='2'";
		
		if($_GET['uid']!=''){
			$where.=" and `uid`='".intval($_GET['uid'])."'";
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
				$com=$this->obj->DB_select_all("company","`name` like '%".trim($_GET['keyword'])."%' ","`uid`,`name`");
				foreach($com as $v){
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
			$company=$this->obj->DB_select_all("company","`uid` in (".@implode(",",$uid).")","`uid`,`name`");
			foreach($rows as $k=>$v){
				foreach($company as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['comname']=$val['name'];
					}
				}
			}
		}
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"end","name"=>'操作时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_company_login_log'));
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
	function mcomtpl_action(){
	    $comid=intval($_GET['comid']);
	    $list=$this->obj->DB_select_all("company_tpl","`status`='1' and (`service_uid`='0' or FIND_IN_SET('".$comid."',service_uid)) order by id desc");
	    $this->yunset("list",$list);
		$this->yunset("comid",$comid);
	    $statis=$this->obj->DB_select_once("company_statis","`uid`='".$comid."'","`comtpl`");
	    $this->yunset('statis',$statis);
	    $this->yuntpl(array('admin/admin_company_mcomtpl'));
	}
	function msettpl_action(){
	    $this->check_token();
	    $tpl=$this->obj->DB_select_once("company_tpl","`id`='".intval($_GET['id'])."'","`url`");
	    $oid=$this->obj->update_once("company_statis",array("comtpl"=>$tpl['url']),array("uid"=>intval($_GET['comid'])));
	    if ($oid){
			$this->automsg('管理员为您设置企业模板：'.$tpl['url'],intval($_GET['comid']));
	        $this->layer_msg('设置成功！',9);
	    }else{
	        $this->layer_msg('设置失败！',9);
	    }
	}
	function guwen_action(){
		$company=$this->obj->DB_select_once("company","`uid`='".$this->uid."'");
		
		$guweninfo=$this->obj->DB_select_all("company_consultant","`id`");
		$this->yunset($company);
		$this->yunset($guweninfo);
       
	}
	
	function reset_companypassword_action(){
		$this->check_token();
		$data['password']="123456";
		$data['uid']=$_GET['uid'];
		$this->uc_edit_pw($data,1,$_SERVER['HTTP_REFERER']);
		$this->MODEL('log')->admin_log("企业会员（ID:".$_GET['uid']."）重置密码成功");
		echo "1";
	}
	function companyNum_action(){
		$MsgNum=$this->MODEL('msgNum');
		echo $MsgNum->companyNum();
	}
	function directrecom_action(){
	    if($_GET['eid']&&$_GET['uid']&&$_GET['id']&&$_GET['comid']){
	        $eid=intval($_GET['eid']);
			$uid=intval($_GET['uid']);
	        $id=intval($_GET['id']);
	        $comid=intval($_GET['comid']);
	       
			$record=$this->obj->DB_select_once("user_entrust_record","`jobid`='".$id."' and `eid`='".$eid."'");
	       
			if(!empty($record)){
	            $arr['msg']='请勿重复推送！';
	            $arr['type']='8';
	        }else{
				
				$resume=$this->obj->DB_select_once("resume_expect","`id`='".$eid."' and `uid`='".$uid."'","`uname`");
	            $company=$this->obj->DB_select_once("company","`uid`='".$comid."'","`linkmail`,`uid`,`did`,`name`");
	            
				$id=$this->obj->DB_insert_once("user_entrust_record","`jobid`='".$id."',`eid`='".$eid."',`uid`='".$uid."',`comid`='".$comid."',`ctime`='".time()."',`did`='".$company['did']."'");
	            
				if($id){
					$contents=file_get_contents($this->config['sy_weburl']."/index.php?m=resume&c=sendresume&id=".$eid."&type=charge");
					$emailData['email']		= $company['linkmail'];
					$emailData['subject']	= $this->config['sy_webname']."向您推荐了简历！";
					$emailData['content']	= $contents;
					$emailData['uid']		= $comid;
					$emailData['name']		= $company['name'];
					
					$notice = $this->MODEL('notice');
					$notice->sendEmail($emailData);
	                
					$this->automsg('管理员为您推送了简历：'.$resume['uname'],intval($comid));

	                $arr['msg']='推送成功！';
	                $arr['type']='9';
	            }else{
	                $arr['msg']='推送失败';
	                $arr['type']='8';
	            }
	        }
	        echo json_encode($arr);die;
	    }
	}
}
?>