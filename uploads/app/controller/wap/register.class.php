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
class register_controller extends common{
	function index_action(){
	    
	    $this->magbind();
		if($_COOKIE['wxid']){
			$this->yunset("wxid",$_COOKIE['wxid']);
			$this->yunset("wxnickname",$_COOKIE['wxnickname']);
			$this->yunset("wxpic",$_COOKIE['wxpic']);
		}

		$type = intval($_GET['type']);
		switch($type){
			case 1:
				if($this->config['reg_user'] != 1){
					$this->ACT_msg("index.php","用户名注册已关闭！");
				}
				break;
			case 2:
				if($this->config['reg_moblie'] != 1){
					$this->ACT_msg("index.php","手机注册已关闭！");
				}
				break;
			case 3:
				if($this->config['reg_email'] != 1){
					$this->ACT_msg("index.php","email注册已关闭！");
				}
				break;
			default:
				if($this->config['reg_moblie']){
					$type = 2;
				}
				else if($this->config['reg_email']){
					$type = 3;
				}
				else{
					$type = 1;
				}
		}
		$this->yunset('type', $type);

		$this->get_moblie();
		$M=$this->MODEL('article');
		$content=$M->GetDescriptionOnce(array('id'=>'5'),array('field'=>'content'));
		$this->yunset("content",$content);
		if($this->uid!=""&&$this->username!=""){
			$this->logout(false);
		}
		if($this->config['reg_user_stop']!=1){
			$data['msg']='网站已关闭注册！';
			$data['url']='index.php';
			$this->ACT_msg("index.php","网站已关闭注册！");
 		}
		if((int)$_GET['uid']){
			$time=time()+3600;
			$this->cookie->setcookie('regcode',(int)$_GET['uid'],$time);
		}
		
		if($_POST['submit']){
			$UserinfoM=$this->MODEL('userinfo');
			$usertype=$_POST['usertype']?$_POST['usertype']:1;
			$ip = fun_ip_get();
			session_start();
			if($this->config['sy_reg_interval']>0 && $this->config['sy_reg_interval']!=''){
				$intervaltime=time()-3600*$this->config['sy_reg_interval'];
				$regnum=$UserinfoM->GetMemberNum(array('reg_ip'=>$ip,"`reg_date`<'".$intervaltime."'"));
				if($regnum){
					$data['msg']='请勿频繁注册！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
			}

			if($_POST['regway']=='1'){
				$username=$_POST['username'];
				if($username==''){
					$data['msg']='用户名不能为空！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}elseif(mb_strlen($username)<2||mb_strlen($username)>16){
					$data['msg']='用户名应在2-16位字符之间！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}elseif(CheckRegUser($username)==false && CheckRegEmail($username)==false){
					$data['msg']='用户名不得包含特殊字符！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
				
				$usernameNum = $UserinfoM->GetMemberNum(array("username"=>$username));
				if($usernameNum>0){
					$data['msg']='用户名已存在，请重新输入！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
			}

			
			$needMobile = false;
			if($_POST['regway'] == 2){
				$needMobile = true;
			}
			else if($this->config['reg_real_name_check'] == 1){
				$needMobile = true;
			}
			else if($usertype == 2 && $this->config['reg_comtel'] =='1'){
				$needMobile = true;
			}
			else if($usertype == 1 && $this->config['reg_usertel'] =='1'){
				$needMobile = true;
			}
			if($needMobile){
				if($_POST['moblie']==""){
					$data['msg']='手机号码不能为空！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}elseif(!CheckMoblie($_POST['moblie'])){
					$data['msg']='手机格式错误！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}

				$moblieNum = $UserinfoM->GetMemberNum(array("moblie"=>$_POST['moblie']));
				if($moblieNum>0){
					$data['msg']='手机已存在，请重新输入！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
			}

			
			$needEmail = false;
			if($_POST['regway'] == 3){
				$needEmail = true;
			}
			else if($usertype == 1 && $this->config['reg_useremail'] =='1'){
				$needEmail = true;
			}
			else if($usertype == 2 && $this->config['reg_comemail'] =='1'){
				$needEmail = true;
			}
			if($needEmail){
				if($_POST['email']==""){
					$data['msg']='邮箱不能为空！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}elseif(CheckRegEmail($_POST['email'])==false){
					$data['msg']='邮箱格式错误！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
				
				$emailNum = $UserinfoM->GetMemberNum(array("email"=>$_POST['email']));
				if($emailNum>0){
					$data['msg']='邮箱已存在，请重新输入！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
			}

			
			$needMsg = false;
			if($_POST['regway'] == 2 && $this->config['sy_msg_regcode']=='1'){
				$needMsg = true;
			}
			else if($this->config['reg_real_name_check'] == 1){
				$needMsg = true;
			}
			if($needMsg){
				$regCertMobile = $UserinfoM->GetCompanyCert(array("type"=>'2',"check"=>$_POST['moblie']),array('field'=>'check2'));
				if($_POST['moblie_code']==''){
					$data['msg']='短信验证码不能为空！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}elseif($regCertMobile['check2']!=$_POST['moblie_code']){
					$data['msg']='短信验证码错误！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
			}

			
			if(!$needMsg){
				
				if(strpos($this->config['code_web'],'注册会员')!==false){
			    if ($this->config['code_kind']==3){
					 
					if(!gtauthcode($this->config,'mobile')){
						$data['msg']='请点击按钮进行验证！';
						$this->layer_msg($data['msg'],9,0,'',2);
					}
			    }else{
			        if($_POST['checkcode']==''){
			            $data['msg']='验证码不能为空！';
			            $this->layer_msg($data['msg'],9,0,'',2);
			        }elseif(md5(strtolower($_POST['checkcode']))!=$_SESSION['authcode']){
			            $data['msg']='验证码错误！';
						 unset($_SESSION['authcode']);
			            $this->layer_msg($data['msg'],10,0,'',2);
			        }
			        unset($_SESSION['authcode']);
			    }
				}
			}

			if($_POST['password']==''){
				$data['msg']='密码不能为空！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif(mb_strlen($_POST['password'])<6||mb_strlen($_POST['password'])>20){
				$data['msg']='密码长度应在6-20位！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}
			if($this->config['reg_passconfirm'] =='1'){
				if($_POST['passconfirm']==''){
					$data['msg']='确认密码不能为空！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}elseif(mb_strlen($_POST['passconfirm'])<6||mb_strlen($_POST['passconfirm'])>20){
					$data['msg']='确认密码长度应在6-20位！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}elseif($_POST['password']!=$_POST['passconfirm']){
					$data['msg']='两次输入密码不一致！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
			}

			if($usertype == 1){
				if($this->config['reg_username'] =='1' || $this->config['reg_real_name_check'] == 1){
					if($_POST['name']=="")
					{
						$data['msg']='真实姓名不得为空！！';
						$this->layer_msg($data['msg'],9,0,'',2);
					}

					if(CheckRegUser($_POST['name'])==false){
						$data['msg']='真实姓名不得包含特殊字符！！';
						$this->layer_msg($data['msg'],9,0,'',2);
					}
				}
			}
			else if($usertype == 2){
				$_POST['name']=$_POST['comname'];
				
				if($this->config['reg_comname'] =='1'){
					if($_POST['name']==""){
						$data['msg']='请正确填写企业名称！';
						$this->layer_msg($data['msg'],9,0,'',2);
					}else{
						$comnameNum = $this->obj->DB_select_num("company","`name`='".$_POST['name']."'");
						if($comnameNum>0){
							$data['msg']='企业名称已被使用！';
							$this->layer_msg($data['msg'],9,0,'',2);
						}
					}
				}

				if($this->config['reg_comaddress'] =='1'){
					if($_POST['address']==""){
						$data['msg']='请正确填写企业地址！';
						$this->layer_msg($data['msg'],9,0,'',2);
					}
				}

				if($this->config['reg_comlink'] =='1' || $this->config['reg_real_name_check'] == 1) {
					if(CheckRegUser($_POST['linkman'])==false || $_POST['linkman']==""){
						$data['msg']='请正确填写企业联系人！';
						$this->layer_msg($data['msg'],9,0,'',2);
					}
				}
			}

			if($_POST['regway']=='2'){
				$_POST['username'] = $username =  $_POST['moblie'];					
			}elseif($_POST['regway']=='3'){  
				$_POST['username'] = $username =  $_POST['email'];
			}

			if($this->config['sy_uc_type']=="uc_center"){
				$ucinfo = $this->uc_open();
				if(strtolower($ucinfo['UC_CHARSET']) =='utf8' || strtolower($ucinfo['UC_DBCHARSET'])=='utf8'){
						$ucusername = $_POST['username'];
					}else{
						$ucusername = $username;
				}
				
				if(!$_POST['email']){
					$_POST['email'] = $ucinfo['UC_EMAIL'];
				}
				$uid=uc_user_register($ucusername,$_POST['password'],$_POST['email'],$_POST['moblie']);
				if($uid<=0){
					$data['msg']='该用户或邮箱已存在！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}else{
					list($uid,$ucusername,$password,$email,$salt)=uc_user_login($ucusername,$_POST['password']);
					$pass = md5(md5($_POST['password']).$salt);
					$ucsynlogin=uc_user_synlogin($uid);
				}
			}elseif($this->config['sy_pw_type']=="pw_center"){
				include(APP_PATH."/api/pw_api/pw_client_class_phpapp.php");
				$password=trim($_POST['password']);
				$email=$_POST['email'];
				$pw=new PwClientAPI($username,$password,$email);
				$pwuid=$pw->register();
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5($password).$salt);
			}else{
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5(trim($_POST['password'])).$salt);
			}
			if($_POST['usertype']=='1'){
				$status = $this->config['user_state'];
			}elseif($_POST['usertype']=='2'){
				$status = $this->config['com_status'];
			}
			if($_COOKIE['wxid']){
				$source = '9';
			}elseif($_SESSION['wx']['openid']){
				$source = '4';
			}elseif($_SESSION['qq']['openid']){
				$source = '8';
			}elseif($_SESSION['sina']['openid']){
				$source = '10';
			}else{
				$source = '2';
			}

			$idata=array('username'=>$username,'password'=>$pass,'email'=>$_POST['email'],'moblie'=>$_POST['moblie'],'usertype'=>$usertype,'status'=>$status,'salt'=>$salt,'source'=>$source,'reg_date'=>time(),'reg_ip'=>$ip,'regcode'=>(int)$_COOKIE['regcode'],'did'=>$this->config['did']);
			
			$userid=$UserinfoM->AddMember($idata);
			if(!$userid){
				$user_id = $UserinfoM->GetMemberOne(array("username"=>$username),array("field"=>"uid"));
				$userid = $user_id['uid'];
			}
			if($userid){
				if($_SESSION['qq']['openid']){
				    $qqdata= array('qqid'=>$_SESSION['qq']['openid']);
				    if($_SESSION['qq']['unionid']){
				        $qqdata['qqunionid']=$_SESSION['qq']['unionid'];
				    }
				    $UserinfoM->UpdateMember($qqdata,array("uid"=>$userid));
					unset($_SESSION['qq']);
				}
				if($_SESSION['wx']['openid']){
					$udate = array('wxid'=>$_SESSION['wx']['openid']);

					if($_SESSION['wx']['unionid']){
						$udate['unionid']  = $_SESSION['wx']['unionid'];
					}
					$UserinfoM->UpdateMember($udate,array("uid"=>$userid));
					unset($_SESSION['wx']);
				}
				if($_SESSION['sina']['openid']){

					$UserinfoM->UpdateMember(array("sinaid"=>$_SESSION['sina']['openid']),array("uid"=>$userid));
					unset($_SESSION['sina']);
				}
				
				if($_COOKIE['wxid']){
					$UserinfoM->UpdateMember(array('wxid'=>''),array('wxid'=>$_COOKIE['wxid']));
					$UserinfoM->UpdateMember(array('wxid'=>$_COOKIE['wxid']),array('uid'=>$userid));
					$this->cookie->setcookie("wxid",'',time() - 86400);
				}
				if($_COOKIE['unionid']){
					$UserinfoM->UpdateMember(array('unionid'=>''),array('unionid'=>$_COOKIE['unionid']));
					$UserinfoM->UpdateMember(array('unionid'=>$_COOKIE['unionid']),array('uid'=>$userid));
					$this->cookie->setcookie("unionid",'',time() - 86400);
				}
				
				if($_COOKIE['wxloginid']){
					$UserinfoM->UpdateWxlogin(array('wxid'=>$_COOKIE['wxid'],'unionid'=>$_COOKIE['unionid'],'status'=>'1'),array('wxloginid'=>$_COOKIE['wxloginid']));
					$this->cookie->setcookie("wxloginid",'',time() - 86400);
				}
				if($this->config['sy_pw_type']=="pw_center"){
					$UserinfoM->UpdateMember(array('pwuid'=>$pwuid),array('uid'=>$userid));
				}
				
				if($_SESSION['mag']["user_id"]){
				    $UserinfoM->UpdateMember(array("maguid"=>''),array("maguid"=>$_SESSION['mag']["user_id"]));
				    $UserinfoM->UpdateMember(array("maguid"=>$_SESSION['mag']["user_id"]),array("uid"=>$userid));
				    unset($_SESSION['mag']);
				}
				
				if ($_POST['qfyuid']!=''){
				    $UserinfoM->UpdateMember(array("qfyuid"=>''),array("qfyuid"=>$_POST['qfyuid']));
				    $UserinfoM->UpdateMember(array("qfyuid"=>$_POST['qfyuid']),array("uid"=>$userid));
				    unset($_POST['qfyuid']);
				}
				if($usertype=='2'){
					
					$conid = $UserinfoM->Guwen();
					$_POST['conid'] = $conid['conid'];
					if($conid['crmid']){
						$_POST['crm_uid'] = $conid['crmid'];
						$_POST['crm_time'] = time();
					}
				}

				
				if($needMsg){
					$_POST['moblie_status'] = 1;
				}
				$UserinfoM->RegisterMember($_POST,array('uid'=>$userid,'usertype'=>$usertype));
				$IntegralM = $this->MODEL('integral');
				if($_COOKIE['regcode']!=""){
					if($this->config['integral_invite_reg_type']=="1"){
						$auto=true;
					}else{
						$auto=false;
					}
					$IntegralM->company_invtal((int)$_COOKIE['regcode'],$this->config['integral_invite_reg'],$auto,"邀请注册",true,2,'integral',23);
				}

				if($this->config['integral_reg']>0){
					$IntegralM->company_invtal($userid,$this->config['integral_reg'],true,"注册",true,2,'integral','26');
				}
				$_POST['uid']=$userid;
				$this->regemail($_POST);
        
				if($usertype==1){
					if($this->config['user_state']!="1"){
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
						$data['msg']='注册成功，等待管理员审核！';
						$data['url']=Url('wap',array('c'=>'register','a'=>'regok'));
						$data['msg'] = '';
						$this->layer_msg($data['msg'],9,0,$data['url'],2);
					}else{
						$this->MODEL('integral')->get_integral_action($userid,"integral_login","会员登录");
						$UserinfoM->UpdateMember(array("login_date"=>time(),"login_ip"=>$ip),array("uid"=>$userid));
						$this->cookie->add_cookie($userid,$username,$salt,$_POST['email'],$pass,$usertype,1);
						$url='member/index.php?c=info';
					}
				}else{
					
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
						
						
						
						
						
					
						$this->MODEL('integral')->get_integral_action($userid,"integral_login","会员登录");
						$UserinfoM->UpdateMember(array("login_date"=>time(),"login_ip"=>$ip),array("uid"=>$userid));
						$this->cookie->add_cookie($userid,$username,$salt,$_POST['email'],$pass,$usertype,1);
						$url='member/index.php?c=info';
					
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
				$data['msg']='恭喜您，已成功注册会员！';
				$data['url']=$url;
				$this->layer_msg($data['msg'],9,0,$data['url'],2);
			}
		}
	   
		$this->seo("register");
		if($_GET['usertype']==2){
			$this->yunset("headertitle","企业注册");
		    $this->yuntpl(array('wap/reg_com'));
		}elseif($_GET['usertype']==3){
			if($this->config['sy_lietou_web']!=1){
			    $data['msg']='猎头注册已关闭！';
			    $data['url']='index.php';
			    $this->ACT_msg("index.php","猎头注册已关闭！");
		    }
			$this->yunset("headertitle","猎头注册");
		    $this->yuntpl(array('wap/reg_lt'));
		}elseif($_GET['usertype']==4){
		    if($this->config['sy_train_web']!=1){
			    $data['msg']='培训注册已关闭！';
			    $data['url']='index.php';
			}
			$this->yunset("headertitle","培训注册");
		    $this->yuntpl(array('wap/reg_train'));
		 }elseif($_GET['usertype']==1){
			$this->yunset("headertitle","个人注册");
		    $this->yuntpl(array('wap/reg_user'));
		}else{
			$this->yunset("headertitle","选择注册类型");
		    $this->yuntpl(array('wap/register'));
			
		}
	}
	function regemail($post){
	    if ($post['username']){
	        $username=$post['username'];
	    }else{
	        if ($post['moblie']){
	            $username=$post['moblie'];
	        }else{
	            $username=$post['email'];
	        }
	    }
      	$notice = $this->MODEL('notice');
	    if($this->config['sy_email_set']=="1"){
       	 $notice->sendEmailType(array("username"=>$username,"password"=>$post['password'],"email"=>$post['email'],"cname"=>$username,"type"=>"reg",'uid'=>$post['uid']));
	    }
		if($this->config["sy_msguser"]!="" && $this->config["sy_msgpw"]!="" && $this->config["sy_msgkey"]!=""&&$this->config['sy_msg_isopen']=='1'){
      		$notice->sendSMSType(array("username"=>$username,"password"=>$post['password'],"moblie"=>$post['moblie'],"type"=>"reg",'uid'=>$post['uid']));
		}
	}
	function regok_action(){ 
		$this->yunset("headertitle","会员注册");
		$this->seo("register");
		$this->yuntpl(array('wap/registerok'));
	} 
	function ajaxreg_action(){
	    $post = array_keys($_POST);
	    $key_name = $post[0];
	    if(!in_array($key_name,array('username','email'))){
	        exit();
	    }
	    $Member=$this->MODEL("userinfo");
	    if($key_name=="username"){
	        $username=$_POST['username'];
			
	        if(CheckRegUser($username)==false && CheckRegEmail($username)==false){
	            echo 2;die;
	        }
	        if($this->config['sy_uc_type']=="uc_center"){
	            $this->uc_open();
	            $user = uc_get_user($username);
	        }else{
	            $user = $Member->GetMemberNum(array("username"=>$username));
	        }
	        if($this->config['sy_regname']!=""){
	            $regname=@explode(",",$this->config['sy_regname']);
	            if(in_array($username,$regname)){
	                echo 3;die;
	            }
	        }
	    }elseif($key_name=="email"){
	        if(CheckRegEmail($_POST['email'])==false){
	            echo 2;die;
	        }
	        $user = $Member->GetMemberNum(array("`email`='".$_POST['email']."' or `username`='".$_POST['email']."'"));
	    }
	    if($user){echo 1;}else{echo 0;}
	}
	
	
	function regcomname_action(){

		if($_POST['comname']){
			
			$company = $this->obj->DB_select_all("company","`name` like '%".trim($_POST['comname'])."%'","`uid`,`name`,`linkman`,`linkphone`,`linktel`");
			
			foreach ($company as $val){
				$uids[] = $val['uid'];
			}
			
			$ComMember = $this->obj->DB_select_all("member","`uid` in (".@implode(',',$uids).")","`uid`,`claim`,`source`,`email`"); 
						
			foreach($company as $key=>$val){
				foreach($ComMember as $k => $v){
					if($val['uid']==$v['uid']){
						$company[$key]['claim']=$v['claim'];
						$company[$key]['source']=$v['source'];
						$company[$key]['email']=$v['email'];
 					}
				}
			}
			$html="";
 			if($company && is_array($company)){
 				foreach($company as $val){
 					
 					$val['name']= str_replace($_POST['comname'],"<font color=\"#FF0000\">".$_POST['comname']."</font>",$val['name']);
 					$val['linkman'] = mb_substr($val['linkman'], 0,1)."**";
 					
 					if ($val['linktel']){
					    $val['linktel']=substr_replace($val['linktel'],'****',4,4);
					}elseif ($Info['linkphone']){
					    $val['linktel']=substr_replace($val['linkphone'],'****',4,4);
					}
 					



						$html.="<div class=\"reg_wap_comlist\"><div class=\" \">".$val['name']."</div><div class=\"reg_wap_comlist_tel\">联系人：".$val['linkman']."</br><div class=\"reg_wap_comlist_tel_n\">联系电话：".$val['linktel']."</div></div><a href=\"".Url(forgetpw)."\" class=\"reg_wap_combth\">申诉</a></div>";

 					
				} 
				echo $html;die;
 			}else{
				echo 0;
			}
		}
	}
	
	
	
	function regmoblie_action(){
	    if($_POST['moblie']){
	    	
 			$Member=$this->MODEL("userinfo");
			
			$resume_info = $Member->GetUserinfoOne(array("`telphone`= '".$_POST['moblie']."' and `moblie_status`='1'"),array('usertype'=>'1','field'=>"uid,name"));
			$company_info = $Member->GetUserinfoOne(array("`linktel`= '".$_POST['moblie']."' and `moblie_status`='1'"),array('usertype'=>'2','field'=>"uid,name"));
			$lt_info = $Member->GetUserinfoOne(array("`moblie`= '".$_POST['moblie']."' and `moblie_status`='1'"),array('usertype'=>'3','field'=>"uid,realname"));
			$px_info = $Member->GetUserinfoOne(array("`linktel`= '".$_POST['moblie']."' and `moblie_status`='1'"),array('usertype'=>'4','field'=>"uid,name"));
			
			$m_info = $Member->GetMemberOne(array("moblie='".$_POST['moblie']."' or `username`='".$_POST['moblie']."'"),array('field'=>"`uid`,`usertype`,`username`,`moblie`"));
			
			if($resume_info){
				$data['name']=$resume_info['name'];
				$data['uid']=$resume_info['uid'];
				$data['usertype']='1';
			}else if($company_info){
				$data['name']=$company_info['name'];
				$data['uid']=$company_info['uid'];
				$data['usertype']='2';
			}else if($lt_info){
				$data['name']=$lt_info['realname'];
				$data['uid']=$lt_info['uid'];
				$data['usertype']='3';
			}else if($px_info){
				$data['name']=$px_info['name'];
				$data['uid']=$px_info['uid'];
				$data['usertype']='4';
			}else if($m_info){
				
				if($m_info['usertype']=='1'){
					$info = $Member->GetUserinfoOne(array("`uid`= '".$m_info['uid']."'"),array('usertype'=>'1','field'=>"name"));
					$data['name']=$info['name'];
				}else if($m_info['usertype']=='2'){
					$info = $Member->GetUserinfoOne(array("`uid`= '".$m_info['uid']."'"),array('usertype'=>'2','field'=>"name"));
					$data['name']=$info['name'];
				}else if($m_info['usertype']=='3'){
					$info = $Member->GetUserinfoOne(array("`uid`= '".$m_info['uid']."'"),array('usertype'=>'3','field'=>"realname"));
					$data['name']=$info['realname'];
				}else if($m_info['usertype']=='4'){
					$info = $Member->GetUserinfoOne(array("`uid`= '".$m_info['uid']."'"),array('usertype'=>'4','field'=>"name"));
					$data['name']=$info['name'];
				}
				$data['uid']=$m_info['uid'];
				$data['usertype']=$m_info['usertype'];
			}
			if($data!=""){
				echo json_encode($data);die;
			}
			
			if($this->config['sy_web_mobile']!=""){
				$regnamer=@explode(";",$this->config['sy_web_mobile']);
				if(in_array($_POST['moblie'],$regnamer)){
					echo 2;die;
				}
			}
			echo 0;die;
		}
	}
	
	
	function regemail_action(){
	    if($_POST['email']){
			$Member=$this->MODEL("userinfo");
			
			$resume_info = $Member->GetUserinfoOne(array("`email`= '".$_POST['email']."' and `email_status`='1'"),array('usertype'=>'1','field'=>"uid,name"));
			$company_info = $Member->GetUserinfoOne(array("`linkmail`= '".$_POST['email']."' and `email_status`='1'"),array('usertype'=>'2','field'=>"uid,name"));
			$lt_info = $Member->GetUserinfoOne(array("`email`= '".$_POST['email']."' and `email_status`='1'"),array('usertype'=>'3','field'=>"uid,realname"));
			$px_info = $Member->GetUserinfoOne(array("`linkmail`= '".$_POST['email']."' and `email_status`='1'"),array('usertype'=>'4','field'=>"uid,name"));
			
			$m_info = $Member->GetMemberOne(array("email='".$_POST['email']."' or `username`='".$_POST['email']."'"),array('field'=>"`uid`,`usertype`,`username`,`email`"));
			
			if($resume_info){
				$data['name']=$resume_info['name'];
				$data['uid']=$resume_info['uid'];
				$data['usertype']='1';
			}else if($company_info){
				$data['name']=$company_info['name'];
				$data['uid']=$company_info['uid'];
				$data['usertype']='2';
			}else if($lt_info){
				$data['name']=$lt_info['realname'];
				$data['uid']=$lt_info['uid'];
				$data['usertype']='3';
			}else if($px_info){
				$data['name']=$px_info['name'];
				$data['uid']=$px_info['uid'];
				$data['usertype']='4';
			}else if($m_info){
				
				if($m_info['usertype']=='1'){
					$info = $Member->GetUserinfoOne(array("`uid`= '".$m_info['uid']."'"),array('usertype'=>'1','field'=>"name"));
					$data['name']=$info['name'];
				}else if($m_info['usertype']=='2'){
					$info = $Member->GetUserinfoOne(array("`uid`= '".$m_info['uid']."'"),array('usertype'=>'2','field'=>"name"));
					$data['name']=$info['name'];
				}else if($m_info['usertype']=='3'){
					$info = $Member->GetUserinfoOne(array("`uid`= '".$m_info['uid']."'"),array('usertype'=>'3','field'=>"realname"));
					$data['name']=$info['realname'];
				}else if($m_info['usertype']=='4'){
					$info = $Member->GetUserinfoOne(array("`uid`= '".$m_info['uid']."'"),array('usertype'=>'4','field'=>"name"));
					$data['name']=$info['name'];
				}
				
				$data['uid']=$m_info['uid'];
				$data['usertype']=$m_info['usertype'];
			}
			if($data!=null){
				echo json_encode($data);die;
			}
			echo 0;die;
		}
	}
	
	function writtenoff_action(){
		
		$Member=$this->MODEL("userinfo");
		
		$user = $Member->GetMemberOne(array("`uid`='".$_POST['zyuid']."'"),array("field"=>"username,moblie,email,uid,password,salt,usertype"));
		
 		$pass = md5(md5($_POST['pw']).$user['salt']);
		
		if($user['password']!=$pass){
			
			echo 2;die;
			
		}else{
 			
			if($_POST[mobile]!=""){
				if($user['username'] == $_POST['mobile']){
					$str = md5(uniqid(mt_rand(), true));   
					$new = "yun".substr($str,0,8);
					$newid = $this->obj->DB_update_all("member"," `username` = '".$new."', `restname`='0' ","`uid`='".$_POST['zyuid']."'");
				}
				if($user['moblie'] == $_POST['mobile']){
					$this->obj->DB_update_all("member","`moblie`=''","`uid`='".$_POST['zyuid']."'");
				}
				if($user['usertype']=='1'){
					$nid = $this->obj->DB_update_all("resume","`telphone`='', `moblie_status`='0' ","`uid`='".$_POST['zyuid']."'");
				}else if($user['usertype']=='2'){
					$nid = $this->obj->DB_update_all("company","`linktel`='', `moblie_status`='0' ","`uid`='".$_POST['zyuid']."'");
				}else if($user['usertype']=='3'){
					$nid = $this->obj->DB_update_all("lt_info","`moblie`='', `moblie_status`='0' ","`uid`='".$_POST['zyuid']."'");
				}else if($user['usertype']=='4'){
					$nid = $this->obj->DB_update_all("px_train","`linktel`='', `moblie_status`='0' ","`uid`='".$_POST['zyuid']."'");
				}
				if($newid){
					$value="`uid`='".(int)$user['uid']."',";
					$value.="`usertype`='".(int)$user['usertype']."',";
					$value.="`content`='账号解绑：修改用户名《".$user['username']."》，新用户名《".$new."》',";
					$value.="`opera`='12',";
					$value.="`type`='2',";
					$value.="`ip`='".fun_ip_get()."',";
					$value.="`ctime`='".time()."'";
					$this->obj->DB_insert_once("member_log",$value);
				}
				
				if($nid){
					$value="`uid`='".(int)$user['uid']."',";
					$value.="`usertype`='".(int)$user['usertype']."',";
					$value.="`content`='解除绑定手机：".$_POST['mobile']."',";
					$value.="`opera`='12',";
					$value.="`type`='2',";
					$value.="`ip`='".fun_ip_get()."',";
					$value.="`ctime`='".time()."'";
					$this->obj->DB_insert_once("member_log",$value);
				}
				
			}else if($_POST['email']!=""){
				if($user['username'] == $_POST['email']){
					$str = md5(uniqid(mt_rand(), true));   
					$new = "yun".substr($str,0,8);
					$newid = $this->obj->DB_update_all("member"," `username` = '".$new."', `restname`='0' ","`uid`='".$_POST['zyuid']."'");
				}
				if($user['email'] == $_POST['email']){
					$this->obj->DB_update_all("member","`email`=''","`uid`='".$_POST['zyuid']."'");
				}
				if($user['usertype']=='1'){
					$nid = $this->obj->DB_update_all("resume","`email`='', `email_status`='0' ","`uid`='".$_POST['zyuid']."'");
				}else if($user['usertype']=='2'){
					$nid = $this->obj->DB_update_all("company","`linkmail`='', `email_status`='0' ","`uid`='".$_POST['zyuid']."'");
				}else if($user['usertype']=='3'){
					$nid = $this->obj->DB_update_all("lt_info","`email`='', `email_status`='0' ","`uid`='".$_POST['zyuid']."'");
				}else if($user['usertype']=='4'){
					$nid = $this->obj->DB_update_all("px_train","`linkmail`='', `email_status`='0' ","`uid`='".$_POST['zyuid']."'");
				}
				if($newid){
					$value="`uid`='".(int)$user['uid']."',";
					$value.="`usertype`='".(int)$user['usertype']."',";
					$value.="`content`='账号解绑：修改用户名《".$user['username']."》，新用户名《".$new."》',";
					$value.="`opera`='12',";
					$value.="`type`='2',";
					$value.="`ip`='".fun_ip_get()."',";
					$value.="`ctime`='".time()."'";
					$this->obj->DB_insert_once("member_log",$value);
				}
				
				if($nid){
					$value="`uid`='".(int)$user['uid']."',";
					$value.="`usertype`='".(int)$user['usertype']."',";
					$value.="`content`='解除绑定邮箱：".$_POST['email']."',";
					$value.="`opera`='12',";
					$value.="`type`='2',";
					$value.="`ip`='".fun_ip_get()."',";
					$value.="`ctime`='".time()."'";
					$this->obj->DB_insert_once("member_log",$value);
				}
			}
			
			echo 1;die;
			
		}					
	}
	
	function ltsave_action(){
		if($this->uid || $this->username){
			$data['msg']='您已登录！';
			$data['url']='member/index.php';
			$this->layer_msg($data['msg'],9,0,$data['url'],2);
		}
		if($this->config['reg_user_stop']!=1){
			$data['msg']='网站已关闭注册！';
			$data['url']='index.php';
			$this->layer_msg($data['msg'],9,0,$data['url'],2);
		}
		if($_POST['submit']){
			$UserinfoM=$this->MODEL('userinfo');
			$LietouM=$this->MODEL('lietou');
			$FriendM=$this->MODEL('friend');
			$usertype=$_POST['usertype'];
			$ip = fun_ip_get();
			session_start();
			if($this->config['sy_reg_interval']>0 && $this->config['sy_reg_interval']!=''){
				$intervaltime=time()-3600*$this->config['sy_reg_interval'];
				$regnum=$UserinfoM->GetMemberNum(array('reg_ip'=>$ip,"`reg_date`<'".$intervaltime."'"));
				if($regnum){
					$data['msg']='请勿频繁注册！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}
			}
			$username=$_POST['username'];
			$usernameNum = $UserinfoM->GetMemberNum(array("username"=>$username));
			$emailNum = $UserinfoM->GetMemberNum(array("email"=>$_POST['email']));
			$moblieNum = $UserinfoM->GetMemberNum(array("moblie"=>$_POST['moblie']));
			if($username==''){
				$data['msg']='用户名不能为空！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif(mb_strlen($username)<2||mb_strlen($username)>16){
				$data['msg']='用户名应在2-16位字符之间！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif(CheckRegUser($username)==false && CheckRegEmail($username)==false){
				$data['msg']='用户名不得包含特殊字符！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($usernameNum>0){
				$data['msg']='用户名已存在，请重新输入！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($_POST['password']==''){
				$data['msg']='密码不能为空！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif(mb_strlen($_POST['password'])<6||mb_strlen($_POST['password'])>20){
				$data['msg']='密码长度应在6-20位！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($_POST['passconfirm']==''){
				$data['msg']='确认密码不能为空！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif(mb_strlen($_POST['passconfirm'])<6||mb_strlen($_POST['passconfirm'])>20){
				$data['msg']='确认密码长度应在6-20位！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($_POST['password']!=$_POST['passconfirm']){
				$data['msg']='两次输入密码不一致！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($_POST['email']==""){
				$data['msg']='邮箱不能为空！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif(CheckRegEmail($_POST['email'])==false){
				$data['msg']='邮箱格式错误！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($emailNum>0){
				$data['msg']='邮箱已存在，请重新输入！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($_POST['moblie']==""){
				$data['msg']='手机号码不能为空！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif(!CheckMoblie($_POST['moblie'])){
				$data['msg']='手机格式错误！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($moblieNum>0){
				$data['msg']='手机已存在，请重新输入！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}

			$msgChecked = false;
			
			if($this->config['reg_real_name_check'] == 1){
				$regCertMobile = $UserinfoM->GetCompanyCert(array("type"=>'2',"check"=>$_POST['moblie']),array('field'=>'check2'));
				if($_POST['moblie_code']==''){
					$data['msg']='短信验证码不能为空！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}elseif($regCertMobile['check2']!=$_POST['moblie_code']){
					$data['msg']='短信验证码错误！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}

				$msgChecked = true;
			}

			
			if(!$msgChecked){
				if(strpos($this->config['code_web'],'注册会员')!==false){
			    if ($this->config['code_kind']==3){
			       
				 
					if(!gtauthcode($this->config,'mobile')){
						$data['msg']='请点击按钮进行验证！';
						$this->layer_msg($data['msg'],9,0,'',2);
					}
			    }else{
			    	if($_POST['checkcode']==''){
    					$data['msg']='验证码不能为空！';
    					$this->layer_msg($data['msg'],9,0,'',2);
    				}elseif(md5(strtolower($_POST['checkcode']))!=$_SESSION['authcode']){
    					$data['msg']='验证码错误！';
    					$this->layer_msg($data['msg'],9,0,'',2);
    				}
			        unset($_SESSION['authcode']);
			    }
				}
			}
			
			if($this->config['sy_uc_type']=="uc_center"){
				$this->uc_open();
				$uid=uc_user_register($username,$_POST['password'],$_POST['email'],$_POST['moblie']);
				if($uid<=0){
					$data['msg']='该用户或邮箱已存在！';
					$this->layer_msg($data['msg'],9,0,'',2);
				}else{
					list($uid,$username,$password,$email,$salt)=uc_user_login($_POST['username'],$_POST['password']);
					$pass = md5(md5($_POST['password']).$salt);
					$ucsynlogin=uc_user_synlogin($uid);
				}
			}elseif($this->config['sy_pw_type']=="pw_center"){
				include(APP_PATH."/api/pw_api/pw_client_class_phpapp.php");
				$password=trim($_POST['password']);
				$email=$_POST['email'];
				$pw=new PwClientAPI($username,$password,$email);
				$pwuid=$pw->register();
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5($password).$salt);
			}else{
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5(trim($_POST['password'])).$salt);
			}
			if($_POST['usertype']=='3'){
				$status = $this->config['lt_status'];
			}elseif($_POST['usertype']=='4'){
				$status = $this->config['px_status'];
			}
			if($_COOKIE['wxid']){
				$source = '9';
			}elseif($_SESSION['wx']['openid']){
				$source = '4';
			}elseif($_SESSION['qq']['openid']){
				$source = '8';
			}elseif($_SESSION['sina']['openid']){
			    $source = '10';
			}else{
				$source = '2';
			}
			$idata=array('username'=>$username,'password'=>$pass,'email'=>$_POST['email'],'moblie'=>$_POST['moblie'],'usertype'=>$usertype,'status'=>$status,'salt'=>$salt,'source'=>$source,'reg_date'=>time(),'reg_ip'=>$ip,'did'=>$this->config['did']);
			$userid=$UserinfoM->AddMember($idata);
			if(!$userid){
				$user_id = $UserinfoM->GetMemberOne(array("username"=>$username),array("field"=>"uid"));
				$userid = $user_id['uid'];
			}else{
				if($_COOKIE['wxid']){
					$UserinfoM->UpdateMember(array('wxid'=>''),array('wxid'=>$_COOKIE['wxid']));
					$UserinfoM->UpdateMember(array('wxid'=>$_COOKIE['wxid']),array('uid'=>$userid));
					$this->cookie->setcookie("wxid",'',time() - 86400);
				}
				if($_COOKIE['unionid']){
					$UserinfoM->UpdateMember(array('unionid'=>''),array('unionid'=>$_COOKIE['unionid']));
					$UserinfoM->UpdateMember(array('unionid'=>$_COOKIE['unionid']),array('uid'=>$userid));
					$this->cookie->setcookie("unionid",'',time() - 86400);
				}
				if($this->config['sy_pw_type']=="pw_center"){
					$UserinfoM->UpdateMember(array('pwuid'=>$pwuid),array('uid'=>$userid));
				}
				
				if($_SESSION['mag']["user_id"]){
				    $UserinfoM->UpdateMember(array("maguid"=>''),array("maguid"=>$_SESSION['mag']["user_id"]));
				    $UserinfoM->UpdateMember(array("maguid"=>$_SESSION['mag']["user_id"]),array("uid"=>$userid));
				    unset($_SESSION['mag']);
				}
				
				if ($_POST['qfyuid']!=''){
				    $UserinfoM->UpdateMember(array("qfyuid"=>''),array("qfyuid"=>$_POST['qfyuid']));
				    $UserinfoM->UpdateMember(array("qfyuid"=>$_POST['qfyuid']),array("uid"=>$userid));
				    unset($_POST['qfyuid']);
				}
				if($usertype==3){
					$ltrating =$this->config['lt_rating'];
					$row = $UserinfoM->GetRatinginfoOne(array('id'=>$ltrating));
					if($row['service_time']>0){
						$time=time()+86400*$row['service_time'];
					}else{
						$time=0;
					}
					$value1=array(
							'uid'=>$userid,
							'rating'=>$ltrating,
							'rating_name'=>$row['name'],
							'rating_type'=>$row['type'],
							'lt_job_num'=>$row['lt_job_num'],
							'lt_down_resume'=>$row['lt_resume'],
							'lt_editjob_num'=>$row['lt_editjob_num'],
							'lt_breakjob_num'=>$row['lt_breakjob_num'],
							'vip_etime'=>$time
					);
					$value2=array(
							'uid'=>$userid,
							'email'=>$_POST['email'],
							'moblie'=>$_POST['moblie'],
							'realname'=>$_POST['name'],
							'did'=>$this->config['did']
					);
					if($this->config['reg_real_name_check'] == 1){
						$value2['moblie_status'] = 1;
					}
					$UserinfoM->InsertReg('lt_statis',$value1);
					if($this->config['integral_reg']>0){
						$this->MODEL('integral')->company_invtal($userid,$this->config['integral_reg'],true,"注册",true,2,'integral','26');
					}

					$LietouM->AddLtInfo($value2);
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
                    $notice = $this->MODEL('notice');
                    $notice->sendEmailType(array("username"=>$_POST['username'],"password"=>$_POST['password'],"email"=>$_POST['email'],"type"=>"reg",'uid'=>$userid));
					
					if($this->config['sy_msguser']!="" && $this->config['sy_msgpw']!="" && $this->config['sy_msgkey']!=""&&$this->config['sy_msg_isopen']=='1'){
                        $notice->sendSMSType(array("username"=>$_POST['username'],"password"=>$_POST['password'],"moblie"=>$_POST['moblie'],"type"=>"reg",'uid'=>$userid));
					}
					
					if($this->config['lt_status']!="1"){
						$data['msg']='注册成功，等待管理员审核！';
						$data['url']=Url('wap',array('c'=>'register','a'=>'regok'));
						$this->layer_msg($data['msg'],9,0,$data['url'],2);
					}else{
						$this->MODEL('integral')->get_integral_action($userid,"integral_login","会员登录");
						$UserinfoM->UpdateMember(array("login_date"=>time(),"login_ip"=>$ip),array("uid"=>$userid));
						$this->cookie->add_cookie($userid,$username,$salt,$_POST['email'],$pass,$usertype);
						$url='member/index.php?c=info';
					}
				}elseif($usertype==4){
					$pxData = array('uid'=>$userid,'linkmail'=>$_POST['email'],'linktel'=>$_POST['moblie'],'did'=>$this->config['did'], 'linkman' => addslashes($_POST['name']));
					if($this->config['reg_real_name_check'] == 1){
						$pxData['moblie_status'] = 1;
					}
					$UserinfoM->insert_into("px_train", $pxData);
					$UserinfoM->insert_into("px_train_statis",array('uid'=>$userid));
					if($this->config['integral_reg']>0){
						$this->MODEL('integral')->company_invtal($userid,$this->config['integral_reg'],true,"注册",true,2,'integral','26');
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
                    $notice = $this->MODEL('notice');
                    $notice->sendEmailType(array("username"=>$_POST['username'],"password"=>$_POST['password'],"email"=>$_POST['email'],"type"=>"reg",'uid'=>$userid));
                    $notice->sendSMSType(array("username"=>$_POST['username'],"password"=>$_POST['password'],"moblie"=>$_POST['moblie'],"type"=>"reg",'uid'=>$userid));

					if($this->config['px_status']!="1"){
						$data['msg']='注册成功，等待管理员审核！';
						$data['url']=Url('wap',array('c'=>'register','a'=>'regok'));
						$this->layer_msg($data['msg'],9,0,$data['url'],2);
					}else{
						$this->MODEL('integral')->get_integral_action($userid,"integral_login","会员登录");
						$UserinfoM->UpdateMember(array("login_date"=>time(),"login_ip"=>$ip),array("uid"=>$userid));
						$this->cookie->add_cookie($userid,$username,$salt,$_POST['email'],$pass,$usertype);
						$url='member/index.php?c=info';
					}
				}
				if($this->config['reg_coupon']){
					$coupon=$this->obj->DB_select_once("coupon","`id`='".$this->config['reg_coupon']."'");
					$cdata.="`uid`='".$_POST['uid']."',";
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
				$data['msg']='恭喜您，已成功注册会员！';
				$data['url']=$url;
				$this->layer_msg($data['msg'],9,0,$data['url'],2);
			}
		}
	}
	
	function magbind(){
	    if ($this->config['sy_maglogin']==1 && !$_POST){
	        session_start();
	        if (!$_SESSION['mag']["user_id"]){
	            $this->getMag();
	        }
	        if($_SESSION['mag']["user_id"]){
	            $userinfoM = $this->MODEL('userinfo');
	            $userinfo = $userinfoM->GetMemberOne(array("maguid"=>$_SESSION['mag']["user_id"]),array("field"=>"`uid`,`usertype`,`username`,`email`,`password`,`salt`,`status`,`did`"));
	            $time = time();
	            if (!$userinfo['uid']){
	                $this->yunset("maglogin",1);
	            }else{
	                
	                if($userinfo['status']=="2"){
	                    header('Location: '.Url('wap',array('c'=>'login','a'=>'loginlock','type'=>1)));
	                    exit();
	                }
	                
	                if($userinfo['usertype']=="2" && $this->config['com_status']!="1" && $userinfo['status']!="1"){
	                    header('Location: '.Url('wap',array('c'=>'login','a'=>'loginlock','type'=>2)));
	                    exit();
	                }
	                $ip = fun_ip_get();
	                $logdate=date("Ymd",$userinfo['login_date']);
	                $nowdate=date("Ymd",$time);
	                if($logdate!=$nowdate){
	                    $this->MODEL('integral')->get_integral_action($userinfo['uid'],"integral_login","会员登录");
	                }
	                $userinfoM->UpdateMember(array("login_ip"=>$ip,"login_date"=>$time,"`login_hits`=`login_hits`+1"),array("uid"=>$userinfo['uid']));
	                $this->cookie->add_cookie($userinfo['uid'],$userinfo['username'],$userinfo['salt'],$userinfo['email'],$userinfo['password'],$userinfo['usertype'],1,$userinfo['did']);
	                $this->wapheader('member/index.php');
	            }
	        }
	    }
	}
	function getMag(){
	    $userAgent = $_SERVER['HTTP_USER_AGENT'];
	    $info = strstr($userAgent, "MAGAPPX");
	    $info=explode("|",$info);
	    $agent=array('token'=>$info[7]);
	    if ($agent['token']){
	        $Url = $this->config['sy_magweburl']."/mag/cloud/cloud/getUserInfo?token=".$agent['token']."&secret=".$this->config['sy_magsecret'];
	        $CurlReturn = CurlGet($Url);
	        $result=json_decode($CurlReturn,true);
	        if ($result['success']==true){
	            
	            if(strpos($result['data']['head'],$this->config['sy_magimgurl'])===false){
	                $headData = @explode("?",$result['data']['head']);
	                $head = $this->getImage($headData[0], 'user');
	            }else{
	                $head = $result['data']['head'];
	            }
	            $_SESSION['mag']["user_id"] = $result['data']['user_id'];
	            $_SESSION['mag']["name"] = $result['data']['name'];
	            $_SESSION['mag']["head"] = $head;
	        }
	    }
	}
	
	function getImage($url,$path){
	    $CurlReturn = CurlGet($url);
	    $time = time();
	    $filename = $time.'.jpg';
	    $picDir = date('Ymd', $time);
	    $dirName = APP_PATH . '/data/upload/'.$path.'/' . $picDir;
	    if (!file_exists($dirName)){
	        mkdir($dirName, 0777, true);
	    }
	    $res = fopen($dirName . '/' . $filename, 'a');
	    fwrite($res, $CurlReturn);
	    fclose($res);
	    return $this->config['sy_weburl'].'/data/upload/'.$path.'/' . $picDir.'/'.$filename;
	}
}
?>