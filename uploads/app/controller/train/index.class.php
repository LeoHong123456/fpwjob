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
class index_controller extends train_controller{
	function index_action(){
		$M=$this->MODEL('train');
		$UserinfoM=$this->MODEL('userinfo');		
		
		if($this->config['did']){
		$recsubject=$M->GetSubjectList(array("`r_status`<>'2'",'status'=>1,'pause_status'=>1,'rec'=>1,'did'=>$this->config['did']),array('orderby'=>'id desc','limit'=>8,'field'=>"`id`,`uid`,`name`,`price`,`pic`"));
		}else{
		$recsubject=$M->GetSubjectList(array("`r_status`<>'2'",'status'=>1,'pause_status'=>1,'rec'=>1),array('orderby'=>'id desc','limit'=>8,'field'=>"`id`,`uid`,`name`,`price`,`pic`"));		
		}
		if(is_array($recsubject)){
			foreach($recsubject as $v){
				$uid[]=$v['uid'];
				$ids[]=$v['id'];
			}
			
			$NumList = $this->obj->DB_select_all('px_baoming',"`sid` IN (".pylode(',',$ids).") group by sid","`sid`,count(*) as num");
			
			if(is_array($NumList)){
				
				foreach($NumList as $key=>$value){
					$BmNum[$value['sid']] = $value['num'];
				}
			}
			$reccom=$M->GetTrainAll(array("`uid` in (".pylode(",",$uid).")"),array('field'=>"uid,name"));
			foreach($recsubject as $k=>$v){
				if($BmNum[$v['id']]){
					$recsubject[$k]['baomingnum']=$BmNum[$v['id']];
				}else{
					$recsubject[$k]['baomingnum']=0;
				}
				$recsubject[$k]['price']=floatval($v['price']);
				foreach($reccom as $val){
					if($v['uid']==$val['uid']){
						
						$recsubject[$k]['comname']=$val['name'];
					}
				}
				if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
				    $recsubject[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
				}else{
				    $recsubject[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
				}
			}
		}
		$this->yunset("recsubject",$recsubject);
		
		if($this->config['did']){
		$rectrain=$UserinfoM->GetUserinfoList(array("`r_status`<>'2' and `name`<>''",'rec'=>1,'did'=>$this->config['did']),array('usertype'=>4,'orderby'=>'uid desc','limit'=>12,'field'=>'uid,name,logo,content'));
		}else{
		$rectrain=$UserinfoM->GetUserinfoList(array("`r_status`<>'2' and `name`<>''",'rec'=>1),array('usertype'=>4,'orderby'=>'uid desc','limit'=>12,'field'=>'uid,name,logo,content'));
		}
		
		
		foreach ($rectrain as $k=>$v){
		    if(!$v['logo'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['logo']))){
		        $rectrain[$k]['logo']=$this->config['sy_weburl']."/".$this->config['sy_px_icon'];
		    }else{
		        $rectrain[$k]['logo']=str_replace("./",$this->config['sy_weburl']."/",$v['logo']);
		    }
		}
		$this->yunset("rectrain",$rectrain);
		
		if($this->config['did']){
		$NewSubjectList=$M->GetSubjectList(array('status'=>1,'pause_status'=>1,'r_status <>'=>2,'did'=>$this->config['did']),array('field'=>'id,uid,name,price,pic','orderby'=>'ctime desc','limit'=>8));
		}else{
		$NewSubjectList=$M->GetSubjectList(array('status'=>1,'pause_status'=>1,'r_status <>'=>2),array('field'=>'id,uid,name,price,pic','orderby'=>'ctime desc','limit'=>8));
		}
		if(is_array($NewSubjectList)){
			$uid = $ids = $BmNum=array();
			foreach($NewSubjectList as $v){
				$uid[]=$v['uid'];
				$ids[]=$v['id'];
			}
			$NumList = $this->obj->DB_select_all('px_baoming',"`sid` IN (".pylode(',',$ids).") group by sid","`sid`,count(*) as num");
			
			if(is_array($NumList)){
				
				foreach($NumList as $key=>$value){
					$BmNum[$value['sid']] = $value['num'];
				}
			}
			$reccom=$M->GetTrainAll(array("`uid` in (".pylode(",",$uid).")"),array('field'=>"uid,name"));
			foreach($NewSubjectList as $k=>$v){
				if($BmNum[$v['id']]){
					$NewSubjectList[$k]['baomingnum']=$BmNum[$v['id']];
				}else{
					$NewSubjectList[$k]['baomingnum']=0;
				}
				$NewSubjectList[$k]['price']=floatval($v['price']);
				foreach($reccom as $val){
					if($v['uid']==$val['uid']){
						
						
						$NewSubjectList[$k]['comname']=$val['name'];
					}
				}
				if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
				    $NewSubjectList[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
				}else{
				    $NewSubjectList[$k]['pic']=$this->config['sy_weburl']."/".$v['pic'];
				}
			}
		}
		$this->yunset("newsubject",$NewSubjectList);
		
		if($this->config['did']){
		$teacher=$M->GetTeacherList(array("`r_status`<>'2'",'status'=>1,'rec'=>1,'did'=>$this->config['did']),array('orderby'=>'id desc','limit'=>10),array('field'=>"id,uid,name,pic,sid"));
		}else{
		$teacher=$M->GetTeacherList(array("`r_status`<>'2'",'status'=>1,'rec'=>1),array('orderby'=>'id desc','limit'=>10),array('field'=>"id,uid,name,pic,sid"));
		}
				
	    foreach ($teacher as $k=>$v){
	        if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
	            $teacher[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxteacher_icon'];
	        }else{
	            $teacher[$k]['pic']=$this->config['sy_weburl']."/".$v['pic'];
	        }
		}
		$this->yunset("teacher",$teacher);
		$CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('subject'));
		$this->yunset($CacheList);
		
		if($this->config['did']){
			$newslist=$M->GetNewsList(array("`r_status`<>'2'",'status'=>1,'did'=>$this->config['did']),array('orderby'=>'id desc','limit'=>8,'field'=>"id,uid,title,ctime"));
		}else{
			$newslist=$M->GetNewsList(array("`r_status`<>'2'",'status'=>1),array('orderby'=>'id desc','limit'=>8,'field'=>"id,uid,title,ctime"));
		}
		$this->yunset("newslist",$newslist);
     
    include PLUS_PATH."keyword.cache.php";
    if(is_array($keyword)){
      foreach($keyword as $k=>$v){
        if($v['type']=='9'&&$v['tuijian']=='1'){
          $subjectkeyword[]=$v;
        }
      }
    }
    $this->yunset("subjectkeyword",$subjectkeyword);
    
		$this->public_action();
		$this->seo('train_index');
		$this->train_tpl('index');
	}
	function register_action(){
		$this->public_action();
		$this->seo("register");
		if($this->config['reg_user_stop']!=1){		 
			$this->train_tpl('stopreg');
		}else{ 
			if($this->uid!=""&&$this->username!=""){
				$this->logout(false);
			}
			if($_POST){
				$_POST=$this->post_trim($_POST);
				 
				if(trim($_POST['password'])&&trim($_POST['password'])!=trim($_POST['passconfirm'])){
					$arr['status']=8;
					$arr['msg']='两次输入密码不一致！';
				}
				if(CheckRegUser($_POST['username'])==false && CheckRegEmail($_POST['email'])==false &&$arr['status']==''){
					$arr['status']=8;
					$arr['msg']='用户名包含特殊字符！';
				}
				if(CheckRegEmail($_POST['email'])==false && $arr['status']==''){
					$arr['status']=8;
					$arr['msg']='Email格式不规范！';
				}
				if($this->uid!=""&&$this->username!=""&&$arr['status']==''){
					$arr['status']=8;
					$arr['msg']='您已经登录了！';
				}
				
				if($_POST['username']!=""&&$arr['status']==''){
					$UserinfoM=$this->MODEL('userinfo');
					$IntegralM=$this->MODEL('integral');
					$M=$this->MODEL('train');
					$nid = $UserinfoM->GetMemberNum(array('username'=>$_POST['username']," or `email`='".$_POST['email']."'"),array('field'=>"uid"));
					if($nid){
						$arr['status']=8;
						$arr['msg']='账户名或邮箱已存在！';
					}else{
						$msgChecked = false;
						if($this->config['reg_real_name_check']=="1"){
							if(!isset($_POST['realname']) || trim($_POST['realname']) == ''){
								$arr['status']=8;
								$arr['msg']='请输入真实姓名！';
								 
								echo json_encode($arr);die;
							}

							if($_POST['moblie_code']){
								$Member=$this->MODEL('userinfo');

								$regCertMobile = $Member->GetCompanyCert(array("type"=>'2',"check"=>$_POST['moblie']));

								if($regCertMobile['check2']!=$_POST['moblie_code'] || $regCertMobile['check2']==''){
									$arr['status']=8;
									$arr['msg']= '短信验证码错误！';
									 
									echo json_encode($arr);die;
								}
							}
							else{
								$arr['status']=8;
								$arr['msg']= '短信验证码错误！';
								 
								echo json_encode($arr);die;
							}
							$msgChecked = true;
						}
						
						
						if(!$msgChecked){
							if(strstr($this->config['code_web'],'注册会员')&&$arr['status']==''){
							    session_start();
			    				if ($this->config['code_kind']==3){
							         
									if(!gtauthcode($this->config)){
										$arr['status']=8;
			    						$arr['msg']='请点击按钮进行验证！';
									}
							    }else{
							        if(md5(strtolower($_POST['authcode']))!=$_SESSION['authcode'] || empty($_SESSION['authcode'])){
							            $arr['status']=8;
			    						$arr['msg']='验证码错误！';
			    						unset($_SESSION['authcode']);
							        }
							    }
							}
						}
						
						$salt = substr(uniqid(rand()), -6);
						$pass = md5(md5($_POST['password']).$salt);
						$ip = fun_ip_get();
						
						$data=array('username'=>$_POST['username'],'email'=>$_POST['email'],'moblie'=>$_POST['moblie'],'password'=>$pass,'usertype'=>4,'status'=>$this->config['px_status'],'salt'=>$salt,'reg_date'=>time(),'reg_ip'=>$ip,'regcode'=>(int)$_COOKIE['regcode'],'did'=>$this->config['did']);
						$userid=$UserinfoM->AddMember($data);
						if($userid){
							
							if($_COOKIE['regcode']!=""){
								
								if($this->config['integral_invite_reg_type']=="1"){
									$auto=true;
								}else{
									$auto=false;
								}
								$IntegralM->company_invtal((int)$_COOKIE['regcode'],$this->config['integral_invite_reg'],$auto,"邀请注册",true,2,'integral',23);
							}
							$this->regemail($_POST);
							$arr['status']=$this->config['px_status'];

							$pxData = array('uid'=>$userid,'linkmail'=>$_POST['email'],'linktel'=>$_POST['moblie'],'did'=>$this->config['did']);
							
							if(isset($_POST['realname']) && trim($_POST['realname']) != ''){
								$pxData['linkman'] = addslashes($_POST['realname']);
							}
							
							if($this->config['reg_real_name_check']=="1"){
								$pxData['moblie_status'] = 1;
							}
							$UserinfoM->insert_into("px_train", $pxData);
							
							$UserinfoM->insert_into("px_train_statis",array('uid'=>$userid));
							$Friend=$this->MODEL("friend");

							if($this->config['integral_reg']!="")
							{
								$IntegralM->company_invtal($userid,$this->config['integral_reg'],true,"注册",true,2,'integral','26');
							}
							if($this->config['reg_coupon']){
								$coupon=$this->obj->DB_select_once("coupon","`id`='".$this->config['reg_coupon']."'");
								$cdata.="`uid`='".$userid."',";
								$cdata.="`number`='".time()."',";
								$cdata.="`ctime`='".time()."',";
								$cdata.="`coupon_id`='".$coupon['id']."',";
								$cdata.="`coupon_name`='".$coupon['name']."',";
								$validity=time()+$coupon['time']*86400;
								$cdata.="`validity`='".$validity."',";
								$cdata.="`coupon_amount`='".$coupon['amount']."',";
								$cdata.="`coupon_scope`='".$coupon['scope']."'";
								$this->obj->DB_insert_once("coupon_list",$cdata);
							}
							if($this->config['px_status']==1){
								$arr['status']=1;
								$arr['msg']='注册成功！';
								$this->MODEL('integral')->get_integral_action($userid,"integral_login","会员登录");
								$UserinfoM->UpdateMember(array("login_date"=>time(),"login_ip"=>$ip),array("uid"=>$userid));
								$this->cookie->add_cookie($userid,$_POST['username'],$salt,$_POST['email'],$pass,4,1,$this->config['did']);
							}else{
								$arr['status']=0;
							}
						}else{
							$arr['status']=8;
							$arr['msg']='注册失败！';
						}
					}
				}
				 
				echo json_encode($arr);die;
			}else{
				$this->train_tpl('register');
			}
		}
	}
	function regemail($post){
		$notice = $this->MODEL('notice');
    $notice->sendEmailType(array("username"=>$post['username'],"password"=>$post['password'],"email"=>$post['email'],"type"=>"reg",'uid'=>$post['uid']));
		
		if($this->config['sy_msguser']!="" && $this->config['sy_msgpw']!="" && $this->config['sy_msgkey']!=""&&$this->config['sy_msg_isopen']=='1'){
      $notice->sendSMSType(array("username"=>$post['username'],"password"=>$post['password'],"moblie"=>$post['moblie'],"type"=>"reg",'uid'=>$post['uid']));
		}
	}
	function login_action(){

		$cookie=$_COOKIE['checkurl'];
		$this->yunset("cookie",$cookie);
		if($_POST){
			$username=$this->stringfilter($_POST['username']);
			if($this->uid!=""&&$this->username!=""){
				echo "您已经登录了！";die;
			}
			if(strstr($this->config['code_web'],"前台登录") && $_POST['path']!="index"){
			
			   session_start();
			   if ($this->config['code_kind']==3){
			        
				  
					if(!gtauthcode($this->config)){
						echo "请点击按钮进行验证！";die;
					}
			    }else{
			        
			        if(md5(strtolower($_POST['authcode']))!=$_SESSION['authcode'] || empty($_SESSION['authcode'])){
			            unset($_SESSION['authcode']);
			            echo "验证码错误!";die;
			        }
			    }
			}
			if(CheckRegUser($username)==false && CheckRegEmail($username)==false){
				echo "无效的用户名!";die;
			}
            $UserinfoM=$this->MODEL('userinfo');
			$user=$UserinfoM->GetMemberOne(array('username'=>$username,'usertype'=>4));
			if(!$user && CheckMoblie($username)){
				$user = $UserinfoM->GetMemberOne(array('moblie'=>$username,'usertype'=>4));
				$binding=$UserinfoM->GetUserinfoOne(array("`uid`=".$user['uid']." and `moblie_status`=1"),array('usertype'=>$user['usertype'],'field'=>"uid"));
				if(!$binding){
					echo "手机号未绑定，不能登录！";die;
 				}
			}
			if(!$user&&CheckRegEmail($username)){
				$user = $UserinfoM->GetMemberOne(array('email'=>$username,'usertype'=>4));
 				
				$binding=$UserinfoM->GetUserinfoOne(array("`uid`=".$user['uid']." and `email_status`=1"),array('usertype'=>$user['usertype'],'field'=>"uid"));
				if(!$binding){
					echo "邮箱未绑定，不能登录！";die;
 				}
			}
			if(is_array($user)){
				if($user['status']=="2"){
					echo 2;die();
				}elseif($user['status']=="3"){
					echo 3;die();
				}elseif($user['status']!="1"){
					echo 5;die();
				}
				$pass = md5(md5($_POST['password']).$user['salt']);
				if($user['password']==$pass){
					$ip = fun_ip_get();
					$UserinfoM->UpdateMember(array('login_ip'=>$ip,'login_date'=>time(),"login_hits`=`login_hits`+1"),array('uid'=>$user['uid']));
					
					$state_content = "登录成功";
					$this->obj->DB_insert_once("login_log","`uid`='".$user['uid']."',`content`='".$state_content."',`ip`='".$ip."',`usertype`='".$user['usertype']."',`ctime`='".time()."'");
					$this->cookie->unset_cookie();
					$this->cookie->add_cookie($user['uid'],$user['username'],$user['salt'],$user['email'],$user['password'],4);
					
					$time=strtotime(date("Y-m-d"));
					$row=$UserinfoM->GetCompanyPayOne(array('com_id'=>$user['uid'],"`pay_time`>'".$time."'",'pay_remark'=>'会员登录'));
					if(empty($row)){
						$this->MODEL('integral')->get_integral_action($user['uid'],"integral_login","会员登录");
					}
					echo 1;die;
				}else{
					echo "密码不正确！";die;
				}
			}else{
				echo "没有该培训用户!";die;
			}
		}
		if($this->uid!=""&&$this->username!=""){
			$this->ACT_msg("index.php","您已经登录了！");
		}
		$this->public_action();
		$this->seo("login");
		$this->train_tpl('login');
	}
    
	function subject_action(){
		if($_GET[all]){
	    	$all=explode("_",$_GET[all]);
			$_GET['nid']=$all[0];
	    	$_GET['tnid']=$all[1];
	    	$_GET['type']=$all[2];
	    }
		if($_GET[orderby]){
	    	$orderby=explode("_",$_GET[orderby]);
			$_GET['order']=$orderby[0];
	    	$_GET['t']=$orderby[1];
	    }
		
        $HotkeyM=$this->MODEL('hotkey');
		$this->right();
		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('subject','subjecttype'));
        $this->yunset($CacheList);
		$this->public_action();
		$this->yunset("def","1");
		$urlarr['c']=$_GET['c'];
		$where="`r_status`<>'2' and `status`='1' and `pause_status`='1'";
		if($this->config['did']){				    
			$where.=" and `did`='".$this->config['did']."'";
		}
		if((int)$_GET['minprice']){
			$urlarr['minprice']=(int)$_GET['minprice'];
			$where.=" and `price`>='".(int)$_GET['minprice']."'";
		}
		if($_GET['maxprice']){
			$urlarr['maxprice']=(int)$_GET['maxprice'];
			$where.=" and `price`<='".(int)$_GET['maxprice']."'";
		}
		if((int)$_GET['nid']){
			$urlarr['nid']=(int)$_GET['nid'];
			$where.=" and `nid`='".(int)$_GET['nid']."'";
		}
		if((int)$_GET['tnid']){
			$urlarr['tnid']=(int)$_GET['tnid'];
			$where.=" and `tnid`='".(int)$_GET['tnid']."'";
		}
		if((int)$_GET['type']){
			$urlarr['type']=(int)$_GET['type'];
			$where.=" and `type`='".(int)$_GET['type']."'";
		}
		if((int)$_GET['rec']){
			$urlarr['rec']=(int)$_GET['rec'];
			$where.=" and `rec`='".(int)$_GET['rec']."'";
		}
		if($_GET['keyword']){
			$urlarr['keyword']=$_GET['keyword'];
			$where.=" and `name` like '%".trim($_GET['keyword'])."%'";
		}
		if($_GET['order']){
			$where.=" order by ".$_GET['order']." ".$_GET['t'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `id` desc";
		}

		$urlarr['page']="{{page}}";
		$pageurl=Url("train",$urlarr);
		$rows=$this->get_page("px_subject",$where,$pageurl,"10");
		if(!empty($rows) && $_GET['keyword']){
			$this->addkeywords("9",$_GET['keyword']);
		}
		if($_GET['t']=='desc'){
			$this->yunset('t','asc');
		}else{
			$this->yunset('t','desc');
		}
		if($rows&&is_array($rows)){
			$uid = $ids = $BmNum=array();
			foreach($rows as $v){
				$uid[]=$v['uid'];
				$ids[]=$v['id'];
			}
			$NumList = $this->obj->DB_select_all('px_baoming',"`sid` IN (".pylode(',',$ids).") group by sid","`sid`,count(*) as num");
			
			if(is_array($NumList)){
				
				foreach($NumList as $key=>$value){
					$BmNum[$value['sid']] = $value['num'];
				}
			}

			$UserinfoM=$this->MODEL('userinfo');
			$train=$UserinfoM->GetUserinfoList(array("`uid` in (".pylode(",",$uid).")"),array('field'=>"`uid`,`name`",'usertype'=>4));
			foreach($rows as $k=>$v){
				if($v['type']!=""){
					$type_name=array();
			        $type=@explode(",",$v['type']);
			        foreach($type as $val){
			            $type_name[]=$CacheList['subject_type_name'][$val];
			        }
			       $rows[$k]['type']=@implode(',',$type_name);
			    }
				if($BmNum[$v['id']]){
					$rows[$k]['baomingnum']=$BmNum[$v['id']];
				}else{
					$rows[$k]['baomingnum']=0;
				}
				foreach($train as $key=>$val){
					if($v['uid']==$val['uid']){
						$rows[$k]['comname']=$val['name'];
					}
				}
				if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$v['pic']))){
				    $rows[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
				}else{
				    $rows[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
				}
			}
		}

		$this->yunset("rows",$rows);
     
    include PLUS_PATH."keyword.cache.php";
    if(is_array($keyword)){
      foreach($keyword as $k=>$v){
        if($v['type']=='9'&&$v['tuijian']=='1'){
          $subjectkeyword[]=$v;
        }
      }
    }
    $this->yunset("subjectkeyword",$subjectkeyword);
    
		
		$this->seo("subject");
		$this->train_tpl('subject');
	}
	function right(){
        $M=$this->MODEL('train');
        $UserinfoM=$this->MODEL('userinfo');
		
		
		if($this->config['did']){
			$rectrain=$UserinfoM->GetUserinfoList(array("`r_status`<>'2'  and `name`<>''",'rec'=>1,'did'=>$this->config['did']),array('usertype'=>4,'orderby'=>'uid desc','limit'=>4));		
		}else{
			$rectrain=$UserinfoM->GetUserinfoList(array("`r_status`<>'2'  and `name`<>''",'rec'=>1),array('usertype'=>4,'orderby'=>'uid desc','limit'=>4));		
		}
		
		if(is_array($rectrain)){
			foreach($rectrain as $k=>$v){
                $UIDList[]=$v['uid'];
			}
		}
        $UIDS=implode(',',$UIDList);
        $NumList=$M->GetSubjectList(array('`uid` in ('.implode(',',$UIDList).')','status'=>1,'pause_status'=>1),array('groupby'=>'uid','field'=>'count(*) as num,`uid`'));
        if(is_array($rectrain)){
			foreach($rectrain as $k=>$v){
                $rectrain[$k]['num']=0;
                foreach($NumList as $kk=>$vv){
                    if($v['uid']==$vv['uid']){
                        $rectrain[$k]['num']=$vv['num'];
                    }
                }
                if(!$v['logo'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$v['logo']))){
                    $rectrain[$k]['logo']=$this->config['sy_weburl']."/".$this->config['sy_px_icon'];
                }else{
                    $rectrain[$k]['logo']=str_replace("./",$this->config['sy_weburl']."/",$v['logo']);
                }
            }
        }
		$this->yunset("rectrain",$rectrain);
						
		if($this->config['did']){		
			$reclist=$M->GetSubjectList(array("`r_status`<>'2'",'rec'=>1,'status'=>1,'pause_status'=>1,'did'=>$this->config['did']),array('orderby'=>'ctime desc','limit'=>3,'field'=>"id,uid,name,price,pic"));
		}else{
			$reclist=$M->GetSubjectList(array("`r_status`<>'2'",'rec'=>1,'status'=>1,'pause_status'=>1),array('orderby'=>'ctime desc','limit'=>3,'field'=>"id,uid,name,price,pic"));
		}				
		foreach($recsubject as $v){
				$uid[]=$v['uid'];
				$ids[]=$v['id'];
		}
		$uid = $ids = $BmNum=array();
		if(is_array($reclist)){
			foreach($reclist as $v){
				
				$ids[]=$v['id'];
			}
		}
		
		$NumList = $this->obj->DB_select_all('px_baoming',"`sid` IN (".pylode(',',$ids).") group by sid","`sid`,count(*) as num");
		
		if(is_array($NumList)){
			
			foreach($NumList as $key=>$value){
				$BmNum[$value['sid']] = $value['num'];
			}
		}
		foreach ($reclist as $k=>$v){
			
			if($BmNum[$v['id']]){
				$reclist[$k]['baomingnum']=$BmNum[$v['id']];
			}else{
				$reclist[$k]['baomingnum']=0;
			}
			$reclist[$k]['price']=floatval($v['price']);
			
		    if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$v['pic']))){
		        $reclist[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
		    }else{
		        $reclist[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
		    }
		}
		$this->yunset('reclist',$reclist);
	}
	function intro_action(){
		
		if($this->uid&&$this->usertype!='4'){		
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
		$this->reclist((int)$_GET['id']);
		$this->agency();
		$this->public_action();
		$this->seo("agency_intro");
		$this->yunset("def","3");
		$this->train_tpl('intro');
	}
    
	function mysubject_action(){
        $M=$this->MODEL('train');
		
		if($this->uid&&$this->usertype!='4'){		
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
		$where="`r_status`<>'2' and `status`='1' and `pause_status`='1' and uid='".(int)$_GET['id']."'";
		$urlarr['id']=$_GET['id'];
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url("train",$urlarr);
		$rows=$this->get_page("px_subject",$where." order by `id` desc",$pageurl,"10");
		
		if(is_array($rows)){
			foreach($rows as $k=>$v){
				$sid[]=$v['id'];
			}
			$baoming=$M->GetBaomingList(array('uid'=>$this->uid,"`sid` in (".pylode(",",$sid).")"));
			if(is_array($baoming)){
				foreach($rows as $key=>$val){
				$rows[$key]['price']=floatval($val['price']);
					foreach($baoming as $k=>$v){
						if($v['sid']==$val['id']){
							$rows[$key]['baoming']=$v['sid'];
						}
					}
				}
			}
		}
		$this->reclist((int)$_GET['id']);
		$this->agency();
		$this->public_action();
		$this->yunset('rows',$rows);
		$this->seo("mysubject");
		$this->yunset("def","3");
		$this->train_tpl('mysubject');
	}
	function reclist($id){
		$FriendM=$this->MODEL('friend');
        $M=$this->MODEL('train');
		
		$zixun=$M->GetZixunList(array('s_uid'=>$id),array('orderby'=>'id desc','limit'=>4));
		if(is_array($zixun)){
			foreach($zixun as $v){
				$uid[]=$v['uid'];
			}
			$result=$this->obj->DB_select_all("member","`uid` in (".pylode(',',$uid).") ","uid,username,usertype");
			$resume=$this->obj->DB_select_all("resume","`uid` in (".pylode(',',$uid).") ","uid,photo");
			$company=$this->obj->DB_select_all("company","`uid` in (".pylode(',',$uid).") ","uid,logo");
			$lietou=$this->obj->DB_select_all("lt_info","`uid` in (".pylode(',',$uid).") ","uid,photo");
			$train=$this->obj->DB_select_all("px_train","`uid` in (".pylode(',',$uid).") ","uid,logo");
			foreach ($result as $key=>$val){
				foreach ($resume as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==1){
						$result[$key]['pic']=$v['photo'];
					}
				}
				foreach ($company as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==2){
						$result[$key]['pic']=$v['logo'];
					}
				}
				foreach ($lietou as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==3){
						$result[$key]['pic']=$v['photo'];
					}
				}
				foreach ($train as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==4){
						$result[$key]['pic']=$v['logo'];
					}
				}
			}
			foreach($zixun as $key=>$value){
				foreach($result as $v){
					if($v['uid']==$value['uid']){
						$zixun[$key]['name']=$v['username'];
						if($v['pic']){
							$zixun[$key]['pic']=$v['pic'];
						}else{
							$zixun[$key]['pic']=$this->config['sy_friend_icon'];
						}
					}
				}
			}
		}
		$this->yunset("zixun",$zixun);

		
		$reclist=$M->GetSubjectList(array("`r_status`<>'2'",'rec'=>1,'status'=>1,'pause_status'=>1),array('orderby'=>'ctime desc','limit'=>3,'field'=>"id,name,price,pic"));
		foreach ($reclist as $k=>$v){
			$reclist[$k]['price']=floatval($v['price']);
		    if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
		        $reclist[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
		    }else{
		        $reclist[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
		    }
		}
		$this->yunset("reclist",$reclist);
	}
    
	function subshow_action(){
		if((int)$_GET['id']){
            $M=$this->MODEL('train');
            $UserinfoM=$this->MODEL('userinfo');
			$CompanyM=$this->MODEL("company");
			$AskM=$this->MODEL('ask');
			$CacheM=$this->MODEL('cache');
			$CacheList=$CacheM->GetCache(array('city','subject'));
			$this->yunset($CacheList);
			$M->UpdateSubject(array("`hits`=`hits`+1"),array('id'=>(int)$_GET['id']));
			
			$row=$M->GetSubjectOne(array('id'=>(int)$_GET['id'],"and ((`status`='1' and `pause_status`='1') or `uid`='".$this->uid."')"));
			if($row['id']==''){
				$this->ACT_msg($this->config['sy_weburl'],"没有找到该课程！");
			}
			if ($row['r_status']==2){
			    $this->ACT_msg($this->config['sy_weburl'],"发布该课的机构已被锁定！");
			}else{
			    $CacheList=$CacheM->GetCache('subjecttype');
			    $subject_type_name=$CacheList['subject_type_name'];
			    if(!$row['pic']){
			        $row['pic']=$this->config['sy_pxsubject_icon'];
			    }
			    if($row['type']!=""){
			        $type=@explode(",",$row['type']);
			        $type_name=array();
			        foreach($type as $v){
			            $type_name[]=$subject_type_name[$v];
			        }
			        $row['type']=@implode(',',$type_name);
			    }
				 if($row['teachid']!=""){
					 $teach=$this->obj->DB_select_all("px_teacher","`id` in(".$row['teachid'].") and status='1'");
					foreach($teach as $v){
						$teachname[$v['id']]=$v['name'];
					}
			        $teachid=@explode(",",$row['teachid']);
			        $teach_name=array();
			        foreach($teachid as $v){
			            $teach_name[]=$teachname[$v];
			        }
			        $row['teach']=@implode('/',$teach_name);
			    }
				$row['price']=floatval($row['price']);
			    $this->yunset("row",$row);
			    
			    $collect_num=$M->GetSubjectCollectNum(array('sid'=>$row['id']));
			    $this->yunset("collect_num",$collect_num);
			    
			    $traininfo=$UserinfoM->GetUserinfoOne(array("`r_status`<>'2'",'uid'=>$row['uid']),array("usertype"=>"4"));
			    $this->yunset("train",$traininfo);
			    
			    $otherlist=$M->GetSubjectList(array("`r_status`<>'2'",'uid'=>$row['uid'],"`id`<>'".(int)$_GET['id']."'",'status'=>1,'pause_status'=>1),array('orderby'=>'ctime desc','field'=>"id,name,price,ctime,nid,tnid,hours,provinceid,cityid,pic,uid"));
			    if($otherlist&&is_array($otherlist)){
			        foreach($otherlist as $v){
			            $uid[]=$v['uid'];
			        }
			        foreach($otherlist as $k=>$v){
						$otherlist[$k]['price']=floatval($v['price']);
			            $num=$M->GetBaomingNum(array('sid'=>$v['id'],'s_uid'=>$v['uid']));
			            $otherlist[$k]['baomingnum']=$num;
			        }
			    }
			    $this->yunset("otherlist",$otherlist);
			    
			    if($this->uid&&$this->usertype!='4'){
			        if($this->usertype==1){
			            $member=$UserinfoM->GetUserinfoOne(array("uid"=>$this->uid),array("field"=>'name,telphone',"usertype"=>'1'));
			            $user['name']=$member['name'];
			            $user['phone']=$member['telphone'];
			        }elseif($this->usertype==2){
			            $member=$CompanyM->GetCompanyInfo(array("uid"=>$this->uid),array("field"=>'linkman,linktel'));
			            $user['name']=$member['linkman'];
			            $user['phone']=$member['linktel'];
			        }elseif($this->usertype==3){
			            $member=$this->MODEL('lietou')->GetLtinfo(array("uid"=>$this->uid),array("field"=>'realname,moblie,phone'));
			            $user['name']=$member['realname'];
			            if($member['moblie']){
			                $user['phone']=$member['moblie'];
			            }elseif($member['phone']){
			                $user['phone']=$member['phone'];
			            }
			        }
			        $this->yunset("user",$user);
			        $collect=$M->GetSubjectCollectOne(array('uid'=>$this->uid,'sid'=>(int)$_GET['id']));
			        $this->yunset("collect",$collect);
			        $baoming=$M->GetBaomingOne(array('uid'=>$this->uid,'sid'=>(int)$_GET['id']));
			        $this->yunset("baoming",$baoming);
			    }
			}
		}
		
		if($this->uid&&$this->usertype!='4'){
			$isatn=$AskM->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$row['uid'],"tid"=>''),array('field'=>'uid'));
			$this->yunset("isatn",$isatn);
		}
		$this->reclist((int)$row['uid']);
		$this->public_action();
		$this->yunset("def","1");
		$data['px_subject_name']=$row['name'];
		$this->data=$data;
		$this->seo("subject_show");
		$this->train_tpl('subject_show');
	}
    
	function collect_action(){
		if($_POST['id']){
			if(!$this->uid){
				echo -3;die;
			}elseif($this->usertype==4){
				echo -1;die;
			}
            $M=$this->MODEL('train');
			$subject=$M->GetSubjectOne(array('id'=>(int)$_POST['id']),array('field'=>"`uid`"));
			if(empty($subject)){
				echo -2;die;
			}
			$info=$M->GetSubjectCollectOne(array('uid'=>$this->uid,'sid'=>(int)$_POST['id']));
			if(empty($info)){
				$this->obj->insert_into('px_subject_collect',array('sid'=>(int)$_POST['id'],'s_uid'=>$subject['uid'],'uid'=>$this->uid,'ctime'=>time()));
				$num=$M->GetSubjectCollectNum(array('sid'=>(int)$_POST['id']));
				echo $num;die;
			}else{
				echo 0;die;
			}
		}
	}
	function agency_action(){
	    $M=$this->MODEL('train');
	    if($_GET[city]){
	    	$city=explode("_",$_GET[city]);
	    	$_GET['provinceid']=$city[0];
	    	$_GET['cityid']=$city[1];
	    	$_GET['three_cityid']=$city[2];
	    }
		if($_GET[all]){
	    	$all=explode("_",$_GET[all]);
			$_GET['sid']=$all[3];
	    	$_GET['mun']=$all[4];
	    	$_GET['pr']=$all[5];
	    }
		$where="`r_status`<>'2' and `name`<>'' and `sid`<>''";
		if($this->config['did']){				    
			$where.=" and `did`='".$this->config['did']."'";
		}
		if((int)$_GET['sid']){
			$where.=" and `sid`='".(int)$_GET['sid']."'";
		}
		if((int)$_GET['pr']){
			$where.=" and `pr`='".(int)$_GET['pr']."'";
		}
		if((int)$_GET['provinceid']){
			$where.=" and `provinceid`='".(int)$_GET['provinceid']."'";
		}
		if((int)$_GET['cityid']){
			$where.=" and `cityid`='".(int)$_GET['cityid']."'";
		}
		if((int)$_GET['three_cityid']){
			$where.=" and `threecityid`='".(int)$_GET['three_cityid']."'";
		}
		if((int)$_GET['mun']){
			$where.=" and `mun`='".(int)$_GET['mun']."'";
		}
		if((int)$_GET['rec']){
			$where.=" and `rec`='".(int)$_GET['rec']."'";
		}
		if($_GET['keyword']){
			$where.=" and `name` like '%".trim($_GET['keyword'])."%'";
		}
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url("train",$urlarr);
		$rows=$this->get_page("px_train",$where." order by `uid` desc",$pageurl,"20");
		

		
		
		if(is_array($rows)){
			foreach($rows as $k=>$v){
				$uid[] = $v['uid'];
			}
			$NumList = $this->obj->DB_select_all('px_subject',"`uid` IN (".pylode(',',$uid).") AND `status`='1' AND `pause_status`='1' group by uid","`uid`,count(*) as num");
			if(is_array($NumList)){
				
				foreach($NumList as $key=>$value){
					$SubNum[$value['uid']] = $value['num'];
				}
			
			}
			foreach($rows as $k=>$v){
				if(strpos($v['cert'],"3")){
					$rows[$k]['iscert']=1;
				}
				if($SubNum[$v['uid']]){
					$rows[$k]['num'] = $SubNum[$v['uid']];
				}else{
					$rows[$k]['num'] = 0;
				}
				
				if(!$v['logo'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$v['logo']))){
				    $rows[$k]['logo']=$this->config['sy_weburl']."/".$this->config['sy_px_icon'];
				}else{
				    $rows[$k]['logo']=str_replace("./",$this->config['sy_weburl']."/",$v['logo']);
				}
			}
			if($_GET['keyword']){
				$this->addkeywords("10",$_GET['keyword']);
			}
		}
		$this->yunset('rows',$rows);
		$this->right();
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('com','city','subject'));
		$this->yunset($CacheList);
		
		include PLUS_PATH."keyword.cache.php";
		if(is_array($keyword)){
			foreach($keyword as $k=>$v){
				if($v['type']=='10'&&$v['tuijian']=='1'){
					$agencykeyword[]=$v;
				}
			}
		}
		$this->yunset("agencykeyword",$agencykeyword);
		
		$this->public_action();
		$this->yunset("def","3");
		$this->seo("agency");
		
		$this->train_tpl('agency');
	}
	function agency(){
		if((int)$_GET['id']){
			$id=(int)$_GET['id'];
            $UserinfoM=$this->MODEL('userinfo');
            $M=$this->MODEL('train');
			$row=$M->GetTrainInfo(array('uid'=>$id));
			if($row['r_status']==2){
				$this->ACT_msg($this->config['sy_weburl'],"该机构已被锁定！");
			}elseif($row['uid']==''){
				$this->ACT_msg($this->config['sy_weburl'],"没有找到该机构！");
			}
			if(!$row['logo']||!file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$row['logo']))){
			    $row['logo']=$this->config['sy_weburl']."/".$this->config['sy_px_icon'];
			}else{
			    $row['logo']=str_replace("./",$this->config['sy_weburl']."/",$row['logo']);
			}
			$row['shortcontent']=$this->CloseTags(mb_substr($row['content'],0,600,'utf-8'));
			$row['content']=$this->CloseTags($row['content']);
			$this->yunset("row",$row);
			$banner=$M->GetBannerOne(array('uid'=>$id));
			if(!$banner['pic']||!file_exists(str_replace('./',APP_PATH,$banner['pic']))){
			    $banner['pic']=$this->config['sy_weburl']."/".$this->config['sy_px_banner'];
			}else{
			    $banner['pic']=str_replace("./",$this->config['sy_weburl']."/",$banner['pic']);
			}
			$this->yunset("banner",$banner);
			$data['px_agency_name']=$row['name'];
			$this->data=$data;
		}
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('com','city','subject'));
		$this->yunset($CacheList);
	}
    
	function agencyshow_action(){
        $M=$this->MODEL('train');
		$AskM=$this->MODEL('ask');
		$id=(int)$_GET['id'];		
		
		if($this->uid&&$this->usertype!='4'){		
			$isatn=$AskM->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>$id,"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
		$show=$M->GetShowList(array('uid'=>$id));
		$this->yunset("show",$show);
		$sublist=$M->GetSubjectList(array("`r_status`<>'2'",'status'=>1,'pause_status'=>1,'uid'=>$id),array('orderby'=>'ctime desc','limit'=>6));
		if($sublist&&is_array($sublist)){
			foreach($sublist as $v){
				$uid[]=$v['uid'];
			}
			foreach($sublist as $k=>$v){
				$sublist[$k]['price']=floatval($v['price']);
				$num=$this->MODEL('train')->GetBaomingNum(array('sid'=>$v['id'],'s_uid'=>$v['uid']));
				$sublist[$k]['baomingnum']=$num;
				if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$v['pic']))){
				    $sublist[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
				}else{
				    $sublist[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
				}
			}
		}
		$this->yunset('sublist',$sublist);
		$this->reclist($id);
		$this->agency();
		$this->public_action();
		$this->yunset("def","3");
		$this->seo("agency_show");
		$this->train_tpl('agency_show');
	}
	function news_action(){
		
		if($this->uid&&$this->usertype!='4'){
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
 
		$urlarr['id']=$_GET['id'];
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url("train",$urlarr);
		$rows=$this->get_page("px_train_news","`uid`='".(int)$_GET['id']."' and `status`=1 order by `ctime` desc",$pageurl,"20");
		$this->reclist((int)$_GET['id']);
		$this->agency();
		$this->public_action();
		$this->yunset('rows',$rows);
		$this->seo("px_news");
		$this->yunset("def","3");
		$this->train_tpl('news');
	}
	function newsshow_action(){
		
		if($this->uid&&$this->usertype!='4'){
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
		$this->reclist((int)$_GET['id']);
		$this->agency();
		$this->public_action();
		if($_GET['nid']){
            $M=$this->MODEL('train');
            if ($_GET['id']){
                $news=$M->GetNewsOne(array('id'=>(int)$_GET['nid'],'uid'=>intval($_GET['id'])));
            }else{
                $news=$M->GetNewsOne(array('id'=>(int)$_GET['nid']," and (`uid`='".$this->uid."' or `status`='1')"));
            }
			$this->yunset("news",$news);
			$data['news_title']=$news['title'];
			$this->data=$data;
		}
		$this->seo("px_news_show");
		$this->train_tpl('news_show');
	}
    
	function baoming_action(){
		if($_POST['submit']){
            $M=$this->MODEL('train');
			$info=$M->GetSubjectOne(array('id'=>(int)$_POST['sid']));
			if(!$this->uid){
				$this->ACT_layer_msg("您还没有登录，请先登录！",8,$_SERVER['HTTP_REFERER']);
			}elseif($this->usertype==4){
				$this->ACT_layer_msg("只有个人用户和hr才可以报名！",8,$_SERVER['HTTP_REFERER']);
			}elseif($info['status']!='1'){
				$this->ACT_layer_msg("该课程还未通过审核！",8,$_SERVER['HTTP_REFERER']);
			}else if($info['pause_status']=='2'){
				$this->ACT_layer_msg("该课程已下架！",8,$_SERVER['HTTP_REFERER']);
			}
			$row=$M->GetBaomingOne(array('uid'=>$this->uid,'sid'=>$_POST['sid']));
			if(empty($row)){
				$baomingid=$M->AddBaoming(array('uid'=>$this->uid,'sid'=>$_POST['sid'],'s_uid'=>$_POST['s_uid'],'name'=>$_POST['name'],'phone'=>$_POST['phone'],'content'=>$_POST['content'],'ctime'=>time(),'did'=>$this->userdid));
				$member=$this->obj->DB_select_once("member","`uid`=".$this->uid,"username");
				if($_POST['isprice']==1){
					$dingdan=mktime().rand(10000,99999);
					$data['order_id']=$dingdan;
					$data['order_price']=$_POST['price'];
					$data['order_time']=mktime();
					$data['order_state']="1";
					
					$data['order_remark']=$_POST['content'];
					$data['uid']=$this->uid;
					$data['did']=$this->userdid;
					$data['type']=6;
					$data['sid']=$baomingid;
					$id=$this->obj->insert_into("company_order",$data);
					if($id){
						$this->obj->member_log("培训报名，订单ID".$dingdan,88);
						$this->automsg("用户 ".sub_string($member['username'])." 报名课程：".$info['name']."提交订单成功",$_POST['s_uid']);
						$this->ACT_layer_msg("下单成功，请付款！",9,$this->config['sy_weburl']."/member/index.php?c=payment&id=".$id);
					}else{
						$this->ACT_layer_msg("提交失败，请重新报名课程！",8,$_SERVER['HTTP_REFERER']);
					}
				}else{
					$this->automsg("用户 ".sub_string($member['username'])." 成功报名课程：".$info['name'],$_POST['s_uid']);
					$this->ACT_layer_msg("报名成功！",9,$_SERVER['HTTP_REFERER']);
				}
				
			}else{
				$this->ACT_layer_msg("请不要重复报名！",8,$_SERVER['HTTP_REFERER']);
			}
		}
	}
    
	function zixun_action(){
		if($_POST['submit']){
			if(!$this->uid){
				$this->ACT_layer_msg("您还没有登录，请先登录！",8,$_SERVER['HTTP_REFERER']);
			}
			if($this->usertype==4){
				$this->ACT_layer_msg("只有个人用户和hr才可以咨询课程！",8,$_SERVER['HTTP_REFERER']);
			}
			if($_POST['phone']==''){
				$this->ACT_layer_msg("联系电话不能为空！",8);
			}
			if(!CheckMoblie($_POST['phone'])){
				$this->ACT_layer_msg("请正确填写联系电话！",8);				
			}
			if($_POST['content']==''){
				$this->ACT_layer_msg("内容不能为空！",8);
			}
            $M=$this->MODEL('train');
			$this->obj->insert_into("px_zixun",array('uid'=>$this->uid,'sid'=>$_POST['sid'],'s_uid'=>$_POST['s_uid'],'phone'=>$_POST['phone'],'content'=>$_POST['content'],'ctime'=>time(),'did'=>$this->userdid));
			$this->automsg("您收到一份咨询",$_POST['s_uid']);
			$this->ACT_layer_msg("咨询成功！",9,$_SERVER['HTTP_REFERER']);
		}
		
		if($this->uid&&$this->usertype!='4'){
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}

		$urlarr['id']=$_GET['id'];
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url("train",$urlarr);
		$where.=" order by id desc";
		$FriendM=$this->MODEL('friend');
		$rows=$this->get_page("px_zixun","`s_uid`='".(int)$_GET['id']."' order by `ctime` desc",$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $v){
				$uid[]=$v['uid'];
			}
		}
		$result=$this->obj->DB_select_all("member","`uid` in (".pylode(',',$uid).") ","uid,username");
		$resume=$this->obj->DB_select_all("resume","`uid` in (".pylode(',',$uid).") ","uid,photo");
		$company=$this->obj->DB_select_all("company","`uid` in (".pylode(',',$uid).") ","uid,logo");
		$lietou=$this->obj->DB_select_all("lt_info","`uid` in (".pylode(',',$uid).") ","uid,photo");
		$train=$this->obj->DB_select_all("px_train","`uid` in (".pylode(',',$uid).") ","uid,logo");
		foreach ($result as $key=>$val){
			foreach ($resume as $v){
				if($val['uid']==$v['uid']){
					$result[$key]['pic']=$v['photo'];
				}
			}
			foreach ($company as $v){
				if($val['uid']==$v['uid']){
					$result[$key]['pic']=$v['logo'];
				}
			}
			foreach ($lietou as $v){
				if($val['uid']==$v['uid']){
					$result[$key]['pic']=$v['photo'];
				}
			}
			foreach ($train as $v){
				if($val['uid']==$v['uid']){
					$result[$key]['pic']=$v['logo'];
				}
			}
		}
		foreach($rows as $key=>$value){
			foreach($result as $v){
				if($v['uid']==$value['uid']){
					$rows[$key]['name']=$v['username'];
					if(!$v['pic']||!file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
						$rows[$key]['pic']=$this->config['sy_weburl']."/".$this->config['sy_friend_icon'];
					}else{
						$rows[$key]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
					}
				}
			}
		}
        $M=$this->MODEL('train');
		$this->yunset('rows',$rows);
		
		$reclist=$M->GetSubjectList(array("`r_status`<>'2'",'rec'=>1,'status'=>1,'pause_status'=>1),array('orderby'=>'ctime desc','limit'=>4,'field'=>"id,name,price,pic"));
		foreach ($reclist as $k=>$v){
			$reclist[$k]['price']=floatval($v['price']);
		    if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
		        $reclist[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
		    }else{
		        $reclist[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
		    }
		}
		$this->yunset("reclist",$reclist);
		$this->agency();
		$this->public_action();
		$this->seo("zixun");
		$this->yunset("def","3");
		$this->train_tpl('zixun');
	}
	function link_action(){
		
		if($this->uid&&$this->usertype!='4'){
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
		$this->reclist((int)$_GET['id']);
		$this->agency();
		$this->public_action();
		$this->seo("px_link");
		$this->yunset("def","3");
		$this->train_tpl('link');
	}
	function show_action(){
		
		if($this->uid&&$this->usertype!='4'){
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
		$urlarr['id']=$_GET['id'];
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url("train",$urlarr);
		$rows=$this->get_page("px_train_show","`uid`='".(int)$_GET['id']."' order by `id` desc",$pageurl,"10");
		$this->reclist((int)$_GET['id']);
		$this->agency();
		$this->yunset('rows',$rows);
		$this->public_action();
		$this->seo("px_show");
		$this->yunset("def","3");
		$this->train_tpl('show');
	}
	function team_action(){
		
		if($this->uid&&$this->usertype!='4'){
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
		$urlarr['id']=$_GET['id'];
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url("train",$urlarr);
		$rows=$this->get_page("px_teacher","`r_status`<>'2' and `uid`='".(int)$_GET['id']."' and `status`='1' order by `ctime` desc",$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $k=>$v){
    			if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
    		        $rows[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxteacher_icon'];
    		    }else{
    		        $rows[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
    		    }
			}
		}
		$this->yunset('rows',$rows);
		$this->reclist((int)$_GET['id']);
		$this->agency();
		$this->yunset($this->MODEL('cache')->GetCache(array('hy')));
		$this->public_action();
		$this->seo("team");
		$this->yunset("def","3");
		$this->train_tpl('team');
	}
    
	function teacher_action(){
		if($_GET[city]){
			$city=explode("_",$_GET[city]);
			$_GET['provinceid']=$city[0];
			$_GET['cityid']=$city[1];
			$_GET['three_cityid']=$city[2];
		}
		if($_GET[all]){
	    	$all=explode("_",$_GET[all]);
			$_GET['sid']=$all[3];
	    }
		$where="`r_status`<>'2' and `status`='1'";
		if($this->config['did']){				    
			$where.=" and `did`='".$this->config['did']."'";
		}
		if((int)$_GET['sid']){
			$urlarr['sid']=(int)$_GET['sid'];
			$where.=" and `sid`='".(int)$_GET['sid']."'";
		}
		if((int)$_GET['provinceid']){
			$urlarr['provinceid']=(int)$_GET['provinceid'];
			$where.=" and `provinceid`='".(int)$_GET['provinceid']."'";
		}
		if((int)$_GET['cityid']){
			$urlarr['cityid']=(int)$_GET['cityid'];
			$where.=" and `cityid`='".(int)$_GET['cityid']."'";
		}
		if((int)$_GET['three_cityid']){
			$urlarr['three_cityid']=(int)$_GET['three_cityid'];
			$where.=" and `threecityid`='".(int)$_GET['three_cityid']."'";
		}
		if((int)$_GET['hy']){
			$urlarr['hy']=(int)$_GET['hy'];
			$where.=" and `hy`='".(int)$_GET['hy']."'";
		}
		if((int)$_GET['rec']){
			$urlarr['rec']=(int)$_GET['rec'];
			$where.=" and `rec`='".(int)$_GET['rec']."'";
		}
		if($_GET['keyword']){
			$urlarr['keyword']=trim($_GET['keyword']);
			$where.=" and `name` like '%".trim($_GET['keyword'])."%'";
		}
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url('train',$urlarr);
		$rows=$this->get_page("px_teacher",$where." order by `ctime` desc",$pageurl,"20");
		if(is_array($rows)){
			foreach($rows as $v){
				$uid[]=$v['uid'];
			}
            $UserinfoM=$this->MODEL('userinfo');
			$train=$UserinfoM->GetUserinfoList(array("`uid` in (".pylode(",",$uid).")"),array('field'=>"`uid`,`name`",'usertype'=>4));
			$atn=$this->obj->DB_select_all('atn',"`uid`='".$this->uid."' and `tid`<>''");
			foreach($rows as $k=>$v){
				foreach($train as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['train_name']=$val['name'];
						$rows[$k]['num']=$this->MODEL('train')->GetSubjectNum(array("`uid`='".$v['uid']."'",'status'=>1,'pause_status'=>1," FIND_IN_SET('".$v['id']."',`teachid`)"));
					}
					
				}
				
				if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
				    $rows[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxteacher_icon'];
				}else{
				    $rows[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
				}
				if(!empty($atn)){
				    foreach ($atn as $val){
				        if($v['uid']==$val['sc_uid']&&$v['id']==$val['tid']){
				            $rows[$k]['atn']=1;
				        }
				    }
				}
			}
			if($_GET['keyword']){
				$this->addkeywords("11",$_GET['keyword']);
			}
		}
		$this->yunset("rows",$rows);

		$this->right();
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('hy','city','subject'));
		$this->yunset($CacheList);
    
    include PLUS_PATH."keyword.cache.php";
    if(is_array($keyword)){
      foreach($keyword as $k=>$v){
        if($v['type']=='11'&&$v['tuijian']=='1'){
          $teacherkeyword[]=$v;
        }
      }
    }
    $this->yunset("teacherkeyword",$teacherkeyword);
    
		$this->public_action();
		$this->yunset('def','2');
		$this->seo('teacher');
		$this->train_tpl('teacher');
	}
    
	function teamshow_action(){
		
		if($this->uid&&$this->usertype!='4'){
			$isatn=$this->MODEL('ask')->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id'],"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
        $M=$this->MODEL('train');
		$this->reclist((int)$_GET['id']);
		$this->agency();
		$this->public_action();
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','subject')));
		if((int)$_GET['nid']){
			$teacher=$M->GetTeacherOne(array("`r_status`<>'2'",'id'=>(int)$_GET['nid']));
			if($teacher['id']==''){
				$this->ACT_msg($this->config['sy_weburl'],"没有找到相关讲师！");
			}
			if(!$teacher['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$teacher['pic']))){
			    $teacher['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxteacher_icon'];
			}else{
			    $teacher['pic']=str_replace("./",$this->config['sy_weburl']."/",$teacher['pic']);
			}
			$this->yunset("teacher",$teacher);
			$data['px_teacher_name']=$teacher['name'];
			$this->data=$data;
			$teachsub=$M->GetSubjectList(array("`r_status`<>'2'",'status'=>'1','pause_status'=>'1'," FIND_IN_SET('".(int)$_GET['nid']."',`teachid`)"));
			if(is_array($teachsub)){
				foreach($teachsub as $k=>$v){
					$sid[]=$v['id'];
				}
				$baoming=$M->GetBaomingList(array('uid'=>$this->uid,"`sid` in (".pylode(",",$sid).")"));
				if(is_array($baoming)){
					foreach($teachsub as $key=>$val){
						$teachsub[$k]['price']=floatval($v['price']);
						foreach($baoming as $k=>$v){
							if($v['sid']==$val['id']){
								$teachsub[$key]['baoming']=$v['sid'];
							}
						}
					}
				}
			}
			$this->yunset("teachsub",$teachsub);
		}
		$this->yunset("def","3");
		$this->seo('teamshow');
		$this->train_tpl('team_show');
	}
	function ajaxget_subject_action(){
        $M=$this->MODEL('train');
		$picsubject=$M->GetSubjectList(array("`r_status`<>'2'",'nid'=>(int)$_POST['id'],'status'=>1,'pause_status'=>1,"`pic`<>''"),array('orderby'=>'id desc','limit'=>6,'field'=>"`id`,`pic`,`name`,`price`"));
		if(is_array($picsubject)){
			foreach($picsubject as $v){
				$url=Url('train',array('c'=>'subshow','id'=>$v[id]));
				$html.='<dl class="training_new_Courses_top_list ftl mt10"><dt><a href="'.$url.'" title="'.$v[name].'"><img src="'.$this->config[sy_weburl].'/'.$v[pic].'" width="150" height="100"></a></dt><dd class="training_new_Courses_top_list_name"><a href="'.$url.'" class="training_new_Courses_top_list_name_a" title="'.$v[name].'">'.$v[name].'</a></dd><dd class="training_new_Courses_top_list_Price">￥'.$v[price].'</dd></dl>';
			}
		}
		echo $html;die;
	}
	function saveshow_action(){
		if($_GET['ajax']){
            if (!empty($_FILES)){
                $pic=$name='';
                $M=$this->MODEL('train');
				$UploadM=$this->MODEL('upload');
                $data=array();
                $tempFile = $_FILES['Filedata'];
                $upload=$UploadM->Upload_pic("../data/upload/show/");
                $pic=$upload->picture($tempFile);
                $name=@explode('.',$_FILES['Filedata']['name']);
                $picurl=str_replace("../data/upload/show","./data/upload/show",$pic);
                $data=array('picurl'=>$picurl,'title'=>$this->stringfilter($name[0]),'ctime'=>time(),'uid'=>(int)$_POST['uid']);
                $id=$this->obj->insert_into('px_train_show',$data);
                if($id){
                    echo $name[0]."||".$picurl."||".$id;die;
                }else{
                    echo "2";die;
                }
            }
        }
	}
}
?>