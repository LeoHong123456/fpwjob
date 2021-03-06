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
class job_controller extends common{
	function index_action(){
		$CacheM=$this->MODEL('cache');
		$CacheArr=$CacheM->GetCache(array('job','city','hy','com'));
		if($_GET['jobin']){
			$job_classid=@explode(',',$_GET['jobin']);
			$jobname=$CacheArr['job_name'][$job_classid[0]];
			$this->yunset("jobname",mb_substr($jobname,0,6,'utf-8'));
		}
		$uptime=array(1=>'今天',3=>'最近3天',7=>'最近7天',30=>'最近一个月',90=>'最近三个月');
		$this->yunset("uptime",$uptime);
		$this->yunset($CacheArr);
		$this->yunset("headertitle","职位搜索");
		foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$this->seo("com_search");
		$searchurl=@implode("&",$searchurl);
		$this->yunset('backurl',Url('wap'));
		
		$this->yunset("topplaceholder","请输入职位关键字,如：会计...");
		$this->yunset("searchurl",$searchurl);
		$this->yuntpl(array('wap/job'));
	}
	function search_action(){
		$this->index_action();
	}
	function view_action(){
		$JobM=$this->MODEL('job');
		$CacheM=$this->MODEL('cache');
		$ResumeM=$this->MODEL('resume');
		$UserinfoM=$this->MODEL('userinfo');
		$CacheArr=$CacheM->GetCache(array('job','city','hy','com'));
		$job=$JobM->GetComjobOne(array("id"=>(int)$_GET['id'],'`r_status`<>2'));
		
		if($this->uid==$job['uid']){
			if($job['state']=="2"){
				$this->yunset('entype','1');
			}
		}else{
			if($job['state']=="0"){
				$this->ACT_msg($_SERVER['HTTP_REFERER'],"职位审核中！");
			}elseif($job['state']=="2"){
				$this->yunset('entype','1');
			}elseif($job['state']=="3"){
				$this->ACT_msg($_SERVER['HTTP_REFERER'],"该职位未通过审核！");
			}elseif($job['status']=="1"){
				$this->ACT_msg($_SERVER['HTTP_REFERER'],"该职位已下架！");
			}
		}
		include(CONFIG_PATH."db.data.php");		
		$this->yunset("arr_data",$arr_data);
		
		if($job['lang']){
			$lang = @explode(",",$job['lang']);
			$job['lang']=$lang; 
		}
		$userid_job=$this->obj->DB_select_num("userid_job","`job_id`='".(int)$_GET['id']."'and `uid`='".$this->uid."'");
		$invite_job=$this->obj->DB_select_num("userid_msg","`jobid`='".(int)$_GET['id']."'and `uid`='".$this->uid."'");
		$fav_job=$this->obj->DB_select_num("fav_job","`job_id`='".(int)$_GET['id']."'and `uid`='".$this->uid."'");
		$report_job=$this->obj->DB_select_num("report","`eid`='".(int)$_GET['id']."'and `p_uid`='".$this->uid."' and `c_uid`='".$job['uid']."'");
		$company_msg=$this->obj->DB_select_once("company_msg","`jobid`='".(int)$_GET['id']."'","'content'");
		$this->yunset("company_msg",$company_msg);
		
		$job['userid_job']=$userid_job;
		$job['invite_job']=$invite_job;
		$job['fav_job']=$fav_job;
		$job['report_job']=$report_job;
		$company=$UserinfoM->GetUserinfoOne(array('uid'=>$job['uid']),array('field'=>"`shortname`,`ant_num`,`name`,`pr`,`mun`,`hy`,`linkqq`,`logo`,`address`,`busstops`,`linktel`,`linkman`,`linkphone`,`email_status`,`moblie_status`,`yyzz_status`,`logo`,`logo_status`,`content`,`x`,`y`,`welfare`,`infostatus`","usertype"=>2));
		if(!$company['logo'] || $company['logo_status']!='0'||!file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$company['logo']))){
		    $company['logo']=$this->config['sy_weburl']."/".$this->config['sy_unit_icon'];
		}else{
		    $company['logo']=str_replace("./",$this->config['sy_weburl']."/",$company['logo']);
		}
		$welfare = @explode(",",$company['welfare']);
		  foreach($welfare as $k=>$v){
			if(!$v){
			  unset($welfare[$k]);
			}
		  }
		$job['welfare']=$welfare;
		
		$job['description']=str_replace(array("ti<x>tle","“","”"),array("title"," "," "),$job['description']);
		$job['description']=htmlspecialchars_decode($job['description']);
		preg_match_all('/<img(.*?)src=("|\'|\s)?(.*?)(?="|\'|\s)/',$job['description'],$res);
		if(!empty($res[3])){
		    foreach($res[3] as $v){
		        if(strpos($v,'http:')===false && strpos($v,'https:')===false){
		            $job['description'] = str_replace($v,$this->config['sy_weburl'].$v,$job['description']);
		        }
		    }
		}
		$Info=array_merge_recursive($job,$company);
		if($company['shortname']){
			$company['name']=$company['shortname'];
		}
		if($Info['linkman']){
			$operatime=time()-$Info['operatime'];
			if($Info['operatime']==''){
				$Info['operatime']='0';
			}else if($operatime<3600){
				$Info['operatime']='一小时以内';
			}else if($operatime>=3600&&$operatime<86400){
				$Info['operatime']=floor($operatime/3600).'小时';
			}else if($operatime>=86400){
				$Info['operatime']=floor($operatime/86400).'天';
			}  
			$allnum=$JobM->GetUserJobNum(array("com_id"=>$Info['uid'],"job_id"=>$Info['id']));
			$Info['snum']=$allnum;
			$replynum=$JobM->GetUserJobNum(array("com_id"=>$Info['uid'],"job_id"=>$Info['id'],"`is_browse`>'1'")); 
 			
 			if($allnum==0){
 				$this->yunset("pre",0);
 			}else{
 				$pre=round(($replynum / $allnum)*100); 
				$this->yunset("pre",$pre);
 			}
 			
		}
		$comrat=$UserinfoM->GetRatinginfoOne(array("id"=>$job['rating']));
		if($comrat['com_pic']&&file_exists(str_replace('./',APP_PATH.'/',$comrat['com_pic']))){
			$comrat['com_pic']=str_replace('./',$this->config['sy_weburl'].'/',$comrat['com_pic']);
		}else{
			$comrat['com_pic']='';
		}
		if($this->usertype=="1"&&$this->uid){
			$ResumeM=$this->MODEL('resume');
			$resume=$ResumeM->GetResumeExpectNum(array('uid'=>$this->uid,"`r_status`<>'2' and `job_classid`<>''","open"=>'1'));
			if($resume){
				
				$look_job=$JobM->GetLookJobOne(array("uid"=>$this->uid,"jobid"=>(int)$_GET['id']));
				if(!empty($look_job)){
					$JobM->UpdateLookJob(array("datetime"=>time()),array("uid"=>$this->uid,"jobid"=>(int)$_GET['id']));
				}else{
					
					$value['uid']=$this->uid;
					$value['did']=$this->userdid;
					$value['jobid']=(int)$_GET['id'];
					$value['com_id']=$job['uid'];
					$value['datetime']=time();
					$member=$this->obj->DB_select_once("member","`uid`=".$this->uid."","username");
					$this->automsg("用户 ".sub_string($member['username'])." 浏览了您的职位：".$job['name'],$job['uid']);
					$JobM->AddLookJob($value);
				}
			}
		}
		if($_GET['type']){
			if(!$this->uid || !$this->username ){
				$data['msg']='请先登录！';
				$data['url']='index.php?c=login';
				$data['state']='1';
				echo json_encode($data);die;
			}elseif($this->usertype!=1){
				$data['msg']='您不是个人用户！';
				$data['url']=$_SERVER['HTTP_REFERER'];
				 $data['state']='2';
				echo json_encode($data);die;
			}else {
				if($_GET['type']=='sq'){
					$row=$JobM->GetUserJobNum(array("uid"=>$this->uid,"job_id"=>(int)$_GET['id']));
					$resume=$ResumeM->SelectExpectOne(array("uid"=>$this->uid,"defaults"=>1,"r_status"=>'1'),"id,uname,integrity");
					$resumess=$ResumeM->SelectExpectOne(array("uid"=>$this->uid,"defaults"=>1,"r_status"=>'0'),"id,integrity");
					if(!$resume['id'] && !$resumess['id']){
						$data['msg']='您还没有合适的简历，请先添加简历！';
						$data['url']='member/index.php?c=resume';
							
						echo json_encode($data);die;
					}else if(!$resume['id'] && $resumess['id']){
						$data['msg']='简历正在审核中，请联系管理员';
						$data['url']='member/index.php?c=resume';
							
						echo json_encode($data);die;
					}else if($this->config['user_sqintegrity']&&$resume['integrity']<$this->config['user_sqintegrity']){
						$data['msg']='该简历完整度未达到'.$this->config['user_sqintegrity'].'%,请先完善简历！';
						$data['url']='member/index.php?c=resume';
							
						echo json_encode($data);die;
					}else if(intval($row)>0){
						$data['msg']='您已经投递过该简历，请不要重复投递！';
						$data['url']=$_SERVER['HTTP_REFERER'];
							
						echo json_encode($data);die;
					}else{
						$info=$JobM->GetComjobOne(array("id"=>(int)$_GET['id']));
						$value['job_id']=$_GET['id'];
						$value['com_name']=$info['com_name'];
						$value['job_name']=$info['name'];
						$value['com_id']=$info['uid'];
						$value['uid']=$this->uid;
						$value['eid']=$resume['id'];
						$value['datetime']=mktime();
						$nid=$JobM->AddUseridJob($value);
						if($nid){
							$UserinfoM->UpdateUserStatis("`sq_job`=`sq_job`+1",array("uid"=>$value['com_id']),array('usertype'=>'2'));
							$UserinfoM->UpdateUserStatis("`sq_jobnum`=`sq_jobnum`+1",array("uid"=>$value['uid']),array('usertype'=>'1'));
							$ComM=$this->MODEL("company");
							$notice = $this->MODEL('notice');

							if($info['link_type']=='1' || $info['link_type']=='0'){
								$job_link=$ComM->GetCompanyInfo(array("uid"=>$info['uid']),array("field"=>"`linktel`"));
								$info['mobile']=$job_link['linktel'];
							}else{
								$job_link=$JobM->GetComjoblinkOne(array("jobid"=>(int)$_GET['id']),array("field"=>"`link_moblie`"));
								$info['mobile']=$job_link['link_moblie'];
							}

							if($info['is_email']=='1'){
								$email_link=$ComM->GetCompanyInfo(array("uid"=>$info['uid']),array("field"=>"`linkmail`"));
								$info['email']=$email_link['linkmail'];
 							}else if($info['is_email']=='2'){
								$email_link=$JobM->GetComjoblinkOne(array("jobid"=>(int)$_GET['id'],"is_email"=>"2"),array("field"=>"`email`"));
								$info['email']=$email_link['email'];
 							}

							if($this->config['sy_email_set']=="1" && $this->config['sy_email_sqzw']==1){
								if($info['email'] && $info['is_email']!='3'){
									$contents=@file_get_contents(Url("resume",array("c"=>"sendresume","job_link"=>'1',"id"=>$resume['id'])));
										
									$emailData['email'] = $info['email'];
									$emailData['subject'] = "您收到一份新的求职简历！——".$this->config['sy_webname'];
									$emailData['content'] = $contents;
									$notice->sendEmail($emailData);
								}
							}
							if($this->config['sy_msg_isopen']=='1' && $this->config['sy_msg_sqzw']==1){
								if($info['mobile'] && $info['is_link']!='0'){
									$data=array('uid'=>$info['uid'],'name'=>$info['com_name'],'cuid'=>'','cname'=>'','type'=>'sqzw','jobname'=>$info['name'],'date'=>date("Y-m-d"),'moblie'=>$info['mobile']);
									
									$notice->sendSMSType($data);
								}
							}
							$this->automsg("您收到一份新的求职简历！",$info['uid']);
							
							if($this->config['sy_push_open']==1){
							    $content = mb_substr('职位：'.$info['name'].'有新简历投递', 0, 24, 'UTF-8');
							    $this->makePush($resume['uname'], $content, $info['uid']);
							}
							$JobM->UpdateComjob(array("`snum`=`snum`+1"),array("id"=>(int)$_GET['id']));
							$this->obj->member_log("我申请了职位：".$info['name'],6);
							if((int)$_GET['id']){
							    $Weixin=$this->MODEL('weixin');
							    $Weixin->sendWxJob($this->uid,(int)$_GET['id']);
							}
							$data['msg']='投递成功！';
							$data['url']=$_SERVER['HTTP_REFERER'];
				            
							echo json_encode($data);die;
						}else{
							$data['msg']='投递失败！';
							$data['url']=$_SERVER['HTTP_REFERER'];
					
							echo json_encode($data);die;
						}
					}
				}else if($_GET['type']=='fav'){
					$rows=$ResumeM->GetFavjobOne(array("uid"=>$this->uid,'job_id'=>(int)$_GET['id']));
					if($rows['id']){
						$data['msg']='您已经收藏过该职位，请不要重复收藏！';
						$data['url']=$_SERVER['HTTP_REFERER'];
						 
						echo json_encode($data);die;
					}
					$job=$JobM->GetComjobOne(array("id"=>(int)$_GET['id']));
					$value['job_id'] = $job['id'];
					$value['com_name'] = $job['com_name'];
					$value['job_name'] = $job['name'];
					$value['com_id'] = $job['uid'];
					$value['uid'] = $this->uid;
					$value['datetime'] = time();
					$nid=$JobM->AddFavJob($value);
					if($nid){
						$UserinfoM->UpdateUserStatis("`fav_jobnum`=`fav_jobnum`+1",array("uid"=>$this->uid),array('usertype'=>'1'));
						$member=$this->obj->DB_select_once("member","`uid`=".$this->uid."","username");
						$this->automsg("用户 ".sub_string($member['username'])." 收藏了您的职位：".$job['name'],$job['uid']);
						$data['msg']='收藏成功！';
						$data['url']=$_SERVER['HTTP_REFERER'];
						 
						echo json_encode($data);die;
					}else{
						$data['msg']='收藏失败！';
						$data['url']=$_SERVER['HTTP_REFERER'];
						 
						echo json_encode($data);die;
					}
				}
			}
		}

		if($this->uid!=$job['uid']){
		    if($this->config['com_login_link']=="1"){
		    	if($job['is_link']!='1'){
		    		$look_msg=2;
		    	}else{
		    		$look_msg=1;
		    	}
	        }elseif($this->config['com_login_link']=="2"){
	       		$look_msg=2;
	       	}elseif($this->uid==''){
	       		$look_msg=3;
	       	}elseif($this->usertype!=1){
	       		$look_msg=31;
	       	}elseif($this->config['com_login_link']=="3"){
	     		$look_msg=1;
			}elseif($this->config['com_login_link']=="4"){
	       		$row=$ResumeM->GetResumeExpectNum(array("uid"=>$this->uid));
	         	if($row<1){
	            	$look_msg=4; 
	        	}else{
	        		$look_msg=1;
	        	}
	     	}elseif($this->config['com_login_link']=="5"){
	         	$sendresume=$this->obj->DB_select_num("userid_job","`uid`='".$this->uid."' and `job_id`='".(int)$_GET['id']."'");
	        	if($sendresume<1){
	             	$look_msg=5; 
	         	}else{
	         		$look_msg=1;
	         	}
	     	}
	   	}else{
	   		$look_msg=1;
	   	}
     	
     	if($job['link_type']==2){
   			$link=$JobM->GetComjoblinkOne(array('jobid'=>$job['id']),array('field'=>'`link_man`,`link_moblie`'));
        	$job['linkman']=$link['link_man'];
        	if($link['link_moblie']){
            	if($look_msg==3){
                	$job['linktel']= substr_replace($link['link_moblie'],'****',4,4);
           		}elseif($look_msg==1){
                	$job['linktel']=$link['link_moblie'];
               	}
            }
       	}else{
        	$job['linkman']=$company['linkman'];
         	if($company['linktel']){
            	if($look_msg==3){
                	$job['linktel']= substr_replace($company['linktel'],'****',4,4);
             	}elseif($look_msg==1){
                	$job['linktel']=$company['linktel'];
            	}
          	}
  		}
            
		if($job['rewardpack']=='1'){
			$reward = $this->obj->DB_select_once("company_job_reward","`jobid`='".$job['id']."'");
			$this->yunset('reward',$reward);
		}

		$data['job_name']=$job['name'];
		$data['company_name']=$job['com_name'];
		$data['industry_class']=$CacheArr['industry_name'][$job['hy']];
		$data['job_class']=$CacheArr['job_name'][$job['job1']].",".$CacheArr['job_name'][$job['job1_son']].",".$CacheArr['job_name'][$job['job_post']];
		
		
		
		if($job['minsalary'] && $job['maxsalary']){
			$data['job_salary'] = "￥".$job['minsalary']."-".$job['maxsalary'];
		}else if($job['minsalary']){
			$data['job_salary'] = "￥".$job['minsalary']."以上";
		}else{
			$data['job_salary'] = "面议";
		}
		
		$data['job_desc']=$this->GET_content_desc($job['description']);
		$this->data=$data;
		 
		if($company['linkphone']){$company['phone']=str_replace('-','',$company['linkphone']);}
		if($this->uid&&$this->usertype&&$this->usertype!=1){
			 
			$typename=array('2'=>'企业账户','3'=>'猎头账户','4'=>'培训账户');
			$this->yunset("usertypemsg","您当前帐号名为：<span class='job_user_name_s'>".$this->username.'</span>，属于'.$typename[$this->usertype].'。');
		}
		if(strpos($_SERVER['HTTP_REFERER'],'ajaxreward')||strpos($_SERVER['HTTP_REFERER'],'sqreward')){
			$backurl = Url('wap',array('c'=>'job'));
			$this->yunset("backurl",$backurl);
		}
		$job['sex'] =$arr_data['sex'][$job['sex']];
		$this->seo("comapply");
		$this->yunset("look_msg",$look_msg);
		$this->yunset("job",$job);
		$this->yunset("Info",$Info);
		$this->yunset("comrat",$comrat);
		$this->yunset($CacheArr);
		$this->yunset("company",$company);
		$this->yunset("headertitle","职位详情");
		$this->yunset("shareurl",Url('wap',array('c'=>'job','a'=>'share','id'=>$job['id'])));
		
		$user_agent = ( !isset($_SERVER['HTTP_USER_AGENT'])) ? FALSE : $_SERVER['HTTP_USER_AGENT'];
		if ($_COOKIE['mapx']>0 && $_COOKIE['mapy']>0 && strpos($user_agent, 'Android') && is_weixin()){
		    $this->yunset(array('mapx'=>$_COOKIE['mapx'],'mapy'=>$_COOKIE['mapy']));
		}else{
		    $this->yunset(array('mapx'=>0,'mapy'=>0));
		}
		$this->yuntpl(array('wap/job_show'));
	}
	
	function report_action(){ 
		if($this->usertype!='1'){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='只有个人会员才可举报！';
			echo json_encode($data);die;
		}
		$M=$this->MODEL('job');
        $AskM=$this->MODEL('ask');
		$jobid=intval($_POST['id']);
        session_start();
		
		$job=$M->GetComjobOne(array("id"=>$jobid),array('field'=>'`uid`,`com_name`'));
		if($job['uid']==''){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='非法操作！';
			echo json_encode($data);die;
		}
		if($this->config['user_report']!='1'){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='管理员未开启举报功能！';
			echo json_encode($data);die; 
		}
		if(md5(strtolower($_POST['authcode']))!=$_SESSION['authcode'] || empty($_SESSION['authcode'])){
			unset($_SESSION['authcode']);
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='验证码错误！';
			echo json_encode($data);die;  
		}
		$row=$AskM->GetReportOne(array('p_uid'=>$this->uid,'eid'=>(int)$_POST['id'],'c_uid'=>$job['uid'],'usertype'=>$this->usertype));
		if(is_array($row)){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='您已举报过该用户！';
			echo json_encode($data);die;  
		}
        $data=array('c_uid'=>$job['uid'],'inputtime'=>time(),'p_uid'=>$this->uid,'usertype'=>(int)$this->usertype,'eid'=>$jobid,'r_name'=>$job['com_name'],'username'=>$this->username,'r_reason'=>trim($_POST['reason']),'did'=>$this->userdid);
		$nid=$AskM->AddReport($data);
		if($nid){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='举报成功！';
			echo json_encode($data);die;  
		}else{
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='举报失败！';
			echo json_encode($data);die;  
		}
	}
	function ltjob_action(){
		$LietouM=$this->MODEL('lietou');
		$CacheM=$this->MODEL('cache');
		$CacheArr=$CacheM->GetCache(array('lt','city','lthy','ltjob'));
		$job=$LietouM->GetLietoujobOne(array("id"=>(int)$_GET['id']));
		if($job['uid']){
			$info=$LietouM->GetLtinfo(array("uid"=>$job['uid']));
			$this->yunset("info",$info);
		}
 		$social = @explode(",",$job['social']);
		foreach($social as $k=>$v){
			if(!$v){
				unset($social[$k]);
			}
		}
		$language = @explode(",",$job['language']);
		foreach($language as $k=>$v){
			if(!$v){
				unset($language[$k]);
			}
		}
		$job['language']=$language;
		$job['social']=$social;
		$lang = @explode(",",$job['lang']);
		$job['lang']=$lang;
		$this->yunset($CacheArr);
		$this->yunset("title",$job['job_name']);
		$this->yunset("job",$job); 
		$this->yunset("headertitle","职位详情");
		$this->yunset("shareurl",Url('wap',array('c'=>'ltjob','a'=>'share','id'=>$job['id'])));
		$this->yuntpl(array('wap/ltjob'));
	}
	function applyjobuid_action(){
	    include(CONFIG_PATH."db.data.php");
	    unset($arr_data['sex'][3]);
	    $this->yunset("arr_data",$arr_data);
		$CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('job','city','com','user','hy'));
		$JobM=$this->MODEL('job');
		if(intval($_GET['jobid'])&&intval($_GET['id'])){
			$Resume=$this->MODEL("resume");
			$row=$Resume->SelectTemporaryResume(array("id"=>intval($_GET['id'])));
			$jobids=@explode(',',$row['job_classid']);
			$jobname=array();
			foreach($jobids as $v){
				$jobname[]=$CacheList['job_name'][$v];
			}
			$row['jobname']=@implode('、',$jobname);
			$this->yunset('row',$row);
		}
		$job=$JobM->GetComjobOne(array("id"=>(int)$_GET['jobid']));
		$data['job_name']=$job['name'];
		$data['company_name']=$job['com_name'];
		$data['job_desc']=$this->GET_content_desc($job['description']);
		
		$data['industry_class']=$CacheList['industry_name'][$job['hy']];
		$data['job_class']=$CacheList['job_name'][$job['job1']].",".$CacheList['job_name'][$job['job1_son']].",".$CacheList['job_name'][$job['job_post']];
		if($job['minsalary'] && $job['maxsalary']){
			$data['job_salary'] = "￥".$job['minsalary']."-".$job['maxsalary'];
		}else if($Job['minsalary']){
			$data['job_salary'] = "￥".$job['minsalary']."以上";
		}else{
			$data['job_salary'] = "面议";
		}
		$this->data=$data;
		$this->seo("comapply"); 
        $this->yunset('job',$job);
        $this->yunset($CacheList);
		$this->yunset("headertitle","快速申请");
		$this->yuntpl(array('wap/applyjobuid'));
	}
	function applylogin_action(){
		$CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('job','city','com','user','hy'));
		$JobM=$this->MODEL('job');
		$job=$JobM->GetComjobOne(array("id"=>(int)$_GET['jobid']));
		$data['job_name']=$job['name'];
		$data['company_name']=$job['com_name'];
		$data['job_desc']=$this->GET_content_desc($job['description']);
		$data['industry_class']=$CacheList['industry_name'][$job['hy']];
		$data['job_class']=$CacheList['job_name'][$job['job1']].",".$CacheList['job_name'][$job['job1_son']].",".$CacheList['job_name'][$job['job_post']];
		if($job['minsalary'] && $job['maxsalary']){
			$data['job_salary'] = "￥".$job['minsalary']."-".$job['maxsalary'];
		}else if($Job['minsalary']){
			$data['job_salary'] = "￥".$job['minsalary']."以上";
		}else{
			$data['job_salary'] = "面议";
		}
		$this->data=$data;
		$this->seo("comapply");
		$this->yunset('job',$job);
		$this->yunset($CacheList);
		$url=Url('wap',array("c"=>"job","a"=>"applyjobuid",'jobid'=>intval($_GET['jobid']),"id"=>intval($_GET['id'])));
		$this->yunset('backurl',$url);
		$this->yunset("headertitle","设置密码");
		$this->yuntpl(array('wap/applylogin'));
	}
	function share_action(){
		$this->get_moblie();
		include(CONFIG_PATH."db.data.php");		
		$this->yunset("arr_data",$arr_data);
		$JobM=$this->MODEL('job');
		$ResumeM=$this->MODEL('resume');
		$CacheM=$this->MODEL('cache');
		$UserinfoM=$this->MODEL('userinfo');
		$CacheArr=$CacheM->GetCache(array('job','city','hy','com'));
		$job=$JobM->GetComjobOne(array("id"=>(int)$_GET['id']));
		
		$lang = @explode(",",$job['lang']);
		$job['lang']=$lang;
		$job['sex']=$arr_data['sex'][$job['sex']];
		$company=$UserinfoM->GetUserinfoOne(array("uid"=>$job['uid']),array("usertype"=>'2','field'=>'*'));
		$welfare = @explode(",",$company['welfare']);
		  foreach($welfare as $k=>$v){
			if(!$v){
			  unset($welfare[$k]);
			}
		  }
		$job['welfare']=$welfare;

		if($company['linkphone']){
			$company['phone']=str_replace('-','',$company['linkphone']);
		}
		$company['content']=strip_tags($company['content']);
		$job['description']=strip_tags($job['description'],"<br>");

		if($this->uid!=$job['uid']){
		    if($this->config['com_login_link']=="1"){
		    	if($job['is_link']!='1'){
		    		$look_msg=2;
		    	}else{
		    		$look_msg=1;
		    	}
	        }elseif($this->config['com_login_link']=="2"){
	       		$look_msg=2;
	       	}elseif($this->uid==''){
	       		$look_msg=3;
	       	}elseif($this->usertype!=1){
	       		$look_msg=31;
	       	}elseif($this->config['com_login_link']=="3"){
	     		$look_msg=1;
			}elseif($this->config['com_login_link']=="4"){
	       		$row=$ResumeM->GetResumeExpectNum(array("uid"=>$this->uid));
	         	if($row<1){
	            	$look_msg=4; 
	        	}else{
	        		$look_msg=1;
	        	}
	     	}elseif($this->config['com_login_link']=="5"){
	         	$sendresume=$this->obj->DB_select_num("userid_job","`uid`='".$this->uid."' and `job_id`='".(int)$_GET['id']."'");
	        	if($sendresume<1){
	             	$look_msg=5; 
	         	}else{
	         		$look_msg=1;
	         	}
	     	}
	   	}else{
	   		$look_msg=1;
	   	}
     	
     	if($job['link_type']==2){
   			$link=$JobM->GetComjoblinkOne(array('jobid'=>$job['id']),array('field'=>'`link_man`,`link_moblie`'));
        	$job['linkman']=$link['link_man'];
        	if($link['link_moblie']){
            	if($look_msg==3){
                	$job['linktel']= substr_replace($link['link_moblie'],'****',4,4);
           		}elseif($look_msg==1){
                	$job['linktel']=$link['link_moblie'];
               	}
            }
       	}else{
        	$job['linkman']=$company['linkman'];
         	if($company['linktel']){
            	if($look_msg==3){
                	$job['linktel']= substr_replace($company['linktel'],'****',4,4);
             	}elseif($look_msg==1){
                	$job['linktel']=$company['linktel'];
            	}
          	}
  		}
		
		 

		$this->yunset("look_msg",$look_msg);
		$this->yunset("job",$job);
		$this->yunset($CacheArr);
		$this->yunset("company",$company);
		$data['job_name']=$job['name'];
		$data['company_name']=$job['com_name'];
		$data['industry_class']=$CacheArr['industry_name'][$job['hy']];
		$data['job_class']=$CacheArr['job_name'][$job['job1']].",".$CacheArr['job_name'][$job['job1_son']].",".$CacheArr['job_name'][$job['job_post']];
		$data['job_desc']=$this->GET_content_desc($job['description']);

		if($job['minsalary'] && $job['maxsalary']){
			$data['job_salary'] = "￥".$job['minsalary']."-".$job['maxsalary'];
		}else if($job['minsalary']){
			$data['job_salary'] = "￥".$job['minsalary']."以上";
		}else{
			$data['job_salary'] = "面议";
		}

		$this->data=$data;
		$this->seo("comapply");

		$this->yunset("headertitle",$job['name'].'-'.$job['com_name'].'-'.$this->config['sy_webname']);

		$this->yunset("job_style",$this->config['sy_weburl']."/app/template/wap/job");
		$this->yuntpl(array('wap/job/index'));
	}
	function GetHits_action() {
	    $id=intval($_GET['id']);
	    if($id){
	        $JobM=$this->MODEL('job');
	        $JobM->AddJobHits($id);
	        $hits=$JobM->GetComjobOne(array('id'=>$id),array('field'=>'jobhits'));
	        echo 'document.write('.$hits['jobhits'].')';
	    }
	}
	function msg_action(){
		
		if($this->uid==''||$this->username==''){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='请先登录！';
			echo json_encode($data);die;				
		}
		if($this->usertype!="1"){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='只有个人用户才可以留言！';
			echo json_encode($data);die;				
		}
		$M=$this->MODEL("job");
		$black=$M->GetBlackOne(array('p_uid'=>$this->uid,'c_uid'=>(int)$_POST['job_uid']));
		if(!empty($black)){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='该企业暂不接受相关咨询！';
			echo json_encode($data);die;				
		}
		if(trim($_POST['reason'])==""){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='留言内容不能为空！';
			echo json_encode($data);die;
		}
		if(trim($_POST['authcode'])==""){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='验证码不能为空！';
			echo json_encode($data);die;
		}
		session_start();
		if(md5(strtolower($_POST['authcode']))!=$_SESSION['authcode'] || empty($_SESSION['authcode'])){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='验证码错误！';
			echo json_encode($data);die;
		}
		$id=$M->AddMsg(array('uid'=>$this->uid,'username'=>$this->username,'jobid'=>trim($_POST['jobid']),'job_uid'=>trim($_POST['job_uid']),'content'=>trim($_POST['reason']),'com_name'=>trim($_POST['com_name']),'job_name'=>trim($_POST['job_name']),'type'=>'1','datetime'=>time()));
		if($id){
			$this->automsg("您有一个留言，请及时查看",trim($_POST['job_uid']));
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='留言成功，请等待回复！';
			echo json_encode($data);die;  
		}else{
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='留言失败！';
			echo json_encode($data);die;  
		}
	}
	function jobmap_action(){
	    $this->get_moblie();
	    $this->yunset("title","企业位置"); 
	    $comid = intval($_GET['id']);
	    $companyM = $this->MODEL('company');
	    $com = $companyM->GetCompanyInfo(array('uid'=>$comid),array('field'=>'`uid`,`name`,`cityid`,`address`,`x`,`y`'));
	    $CacheM=$this->MODEL('cache');
	    $CacheArr=$CacheM->GetCache(array('city'));
	    $cityname = $CacheArr['city_name'][$com['cityid']];
	    $this->yunset('cityname',$cityname);
	    $this->yunset('com',$com);
	    $user_agent = ( !isset($_SERVER['HTTP_USER_AGENT'])) ? FALSE : $_SERVER['HTTP_USER_AGENT'];
	    if ($_COOKIE['mapx']>0 && $_COOKIE['mapy']>0 && strpos($user_agent, 'Android') && is_weixin()){
	        $this->yunset(array('mapx'=>$_COOKIE['mapx'],'mapy'=>$_COOKIE['mapy']));
	    }else{
	        $this->yunset(array('mapx'=>0,'mapy'=>0));
	    }
	    $this->yuntpl(array('wap/job_map'));
	}
	
	function distance_action(){
	    $x = $_POST['x'];
	    $y = $_POST['y'];
	    $this->cookie->setcookie('mapx', $x, time()+1800);
	    $this->cookie->setcookie('mapy', $y, time()+1800);
	}
}
?>