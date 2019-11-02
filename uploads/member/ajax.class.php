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
class ajax_controller extends common{
    function top_resume_action(){
        $eid=$_POST['eid'];
        $expect=$this->obj->DB_select_once("resume_expect","`id`='".$eid."' and `uid`='".$this->uid."'","doc");
        $work=$this->obj->DB_select_num("resume_work","`eid`='".$eid."' and `uid`='".$this->uid."'");
        $edu=$this->obj->DB_select_num("resume_edu","`eid`='".$eid."' and `uid`='".$this->uid."'");
        $project=$this->obj->DB_select_num("resume_project","`eid`='".$eid."' and `uid`='".$this->uid."'");
        if($expect['doc']==0){
        	if($this->config['user_work_regiser']==1){
        		if($work<1){
        			echo 1;die;
        		}
        	}
        	if($this->config['user_edu_regiser']==1){
        		if($edu<1){
        			echo 2;die;
        		}
        	}
        	if($this->config['user_project_regiser']==1){
        		if($project<1){
        			echo 3;die;
        		}
        	}
        }
        echo 4;die;
    }
	function order_type_action(){
		if($this->uid  && $this->username && $this->usertype==2){
			$nid=$this->obj->DB_update_all("company_order","`order_type`='".(int)$_POST['paytype']."'","`order_id`='".(int)$_POST['order']."'");
			if($nid){
				$this->obj->member_log("修改订单付款类型",88,2);
			}
			echo $nid?1:2;
		}
	}
	function ajax_ltjobone_action(){
		include(PLUS_PATH."ltjob.cache.php");
		$jobid=$_POST['str'];
		$data="";
		if(is_array($ltjob_type[$jobid])){
			foreach($ltjob_type[$jobid] as $v){
				$data.="<li> <a onclick=\"selectjobtwo('".$v."','jobtwo','".$ltjob_name[$v]."','jobtype');\" href=\"javascript:;\"> ".$ltjob_name[$v]."</a> </li>";
			}
		}
		echo $data;
	}
	function delupload_action(){
		if(!$this->uid || !$this->username || $this->usertype!=2){
			echo 0;die;
		}else{
			$dir=$_POST[str][0];
			$isuser = $this->obj->DB_select_once("company_show","`picurl`='$dir'");
			if($isuser['uid']==$this->uid){
				echo unlink_pic(".".$dir);
			}else{
				echo 0;die;
			}
		}
	}
	function emailcert_action(){
		session_start();
		
		$this->cookie->SetCookie("delay", "", time() - 60);

		if(md5(strtolower($_POST['authcode']))!=$_SESSION['authcode'] || empty($_SESSION['authcode'])){
			echo 4;die;
		}
		if(!$this->uid || !$this->username){
			echo 0;die;
		}else{
			if($this->config['sy_email_set']!="1"){
				echo 3;die;
			}
			if($this->config['sy_email_cert']=="2"){
				echo 2;die;
			}
			$email=$_POST['email'];
			$randstr=rand(10000000,99999999);
			$sql['status']=0;
			$sql['step']=1;
			$sql['check']=$email;
			$sql['check2']=$randstr;
			$sql['ctime']=mktime();
			$row=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and type='1'");
			if(is_array($row)){
				$where['uid']=$this->uid;
				$where['type']='1';
				$this->obj->update_once("company_cert",$sql,$where);
				$this->obj->member_log("更新邮箱认证",13,2);
				$this->obj->DB_update_all("user_log","`status`='12'","`id`='".$_POST['logid']."'");
			}else{
				$sql['uid']=$this->uid;
				$sql['did']=$this->userdid;
				$sql['type']=1;
				$this->obj->insert_into("company_cert",$sql);
				$this->obj->member_log("添加邮箱认证",13,1);
				$this->obj->DB_update_all("user_log","`status`='12'","`id`='".$_POST['logid']."'");
			}
			$base=base64_encode($this->uid."|".$randstr."|".$this->config['coding']);
			$fdata=$this->forsend(array('uid'=>$this->uid,'usertype'=>$this->usertype));
			$data['uid']=$this->uid;
			$data['name']=$fdata['name'];
 			$data['type']="cert";
			$data['email']=$email;
			$url=Url("qqconnect",array('c'=>'cert','id'=>$base),"1");
			$data['url']="<a href='".$url."'>点击认证</a> 如果您不能在邮箱中直接打开，请复制该链接到浏览器地址栏中直接打开：".$url;
			$data['date']=date("Y-m-d");
			$notice = $this->MODEL('notice');
			$notice->sendEmailType($data);
			echo "1";die;
		}
	}
    function mobliecert_action(){
			session_start();
			if(md5(strtolower($_POST['pcode']))!=$_SESSION['authcode'] || empty($_SESSION['authcode'])){
				echo 6;die;
			}
			if(!$this->config["sy_msguser"] || !$this->config["sy_msgpw"] || !$this->config["sy_msgkey"]||$this->config['sy_msg_isopen']!='1'){
				echo 4;die;
			}
			if(!$this->uid || !$this->username){
				echo 0;die;
			}else{
				$shell=$this->GET_user_shell($this->uid,$_COOKIE['shell']);
				if(!is_array($shell)){echo 5;die;}
				$moblie=$_POST[str];
				$randstr=rand(100000,999999);
				if($this->config['sy_msg_cert']=="2"){
					echo 3;die;
				}else{
					$num=$this->obj->DB_select_num("moblie_msg","`moblie`='".$moblie."' and `ctime`>'".strtotime(date("Y-m-d"))."'");
					if($num>=$this->config['moblie_msgnum']){
						echo 1;die;
					}
					$ip=fun_ip_get();
					$ipnum=$this->obj->DB_select_num("moblie_msg","`ip`='".$ip."' and `ctime`>'".strtotime(date("Y-m-d"))."'");
					if($ipnum>=$this->config['ip_msgnum']){
						echo 2;die;
					}
					$fdata=$this->forsend(array('uid'=>$this->uid,'usertype'=>$this->usertype));
					$data['uid']=$this->uid;
					$data['name']=$fdata['name'];
					$data['type']="cert";
					$data['moblie']=$moblie;
					$data['code']=$randstr;
					$data['date']=date("Y-m-d");
		          	$notice = $this->MODEL('notice');
		          	$result = $notice->sendSMSType($data);
					if($data['status'] != -1){
						$this->cookie->setcookie("moblie_code",$randstr,time()+120);
						$sql['status']=0;
						$sql['step']=1;
						$sql['check']=$moblie;
						$sql['check2']=$randstr;
						$sql['ctime']=mktime();
						$row=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and type='2'");
						if(is_array($row)){
							$where['uid']=$this->uid;
							$where['type']='2';
							$this->obj->update_once("company_cert",$sql,$where);
							$this->obj->member_log("更新手机认证",13,2);
						}else{
							$sql['uid']=$this->uid;
							$sql['did']=$this->userdid;
							$sql['type']=2;
							$this->obj->insert_into("company_cert",$sql);
							$this->obj->member_log("添加手机认证",13,1);
						}
					}
					echo $result['msg'];die;
				}
			}
		}
    function getzphcom_action(){
		if(!$_GET['jobid']){
			$arr['status']=0;
			$arr['content']="您还没有职位，<a href='".Url("login",array(),"1")."'>请先登录</a>";
		}else{
			$_GET['jobid'] = pylode(',',@explode(',',$_GET['jobid']));
			$row=$this->obj->DB_select_all("company_job","`id` in (".$_GET['jobid'].") and `uid`='".$this->uid."' and `r_status`<>'2' and `status`<>'1'","`name`");
			$space=$this->obj->DB_select_all("zhaopinhui_space");
			$zhaopinhui=$this->obj->DB_select_once("zhaopinhui","`id`='".intval($_GET['zid'])."'","`title`,`address`,`starttime`,`endtime`");
			$com=$this->obj->DB_select_once("zhaopinhui_com","`zid`='".intval($_GET['zid'])."' and `uid`='".$this->uid."'");
			foreach($row as $v){
				$data[]=$v['name'];
			}
			$spaces=array();
			foreach($space as $val){
				$spaces[$val['id']]=$val['name'];
			}
			$cname=@implode('、',$data);
			$arr['status']=1;
			$arr['content']=$cname;
			$arr['title']=$zhaopinhui['title'];
			$arr['address']=$zhaopinhui['address'];
			$arr['starttime']=$zhaopinhui['starttime'];
			$arr['endtime']=$zhaopinhui['endtime'];
			if($spaces[$com['sid']]){
				$arr['sid']=$spaces[$com['sid']];
			}else{
				$arr['sid']='无';
			}
			$arr['bid']=$spaces[$com['bid']];
			$arr['cid']=$spaces[$com['cid']];
		}
		echo json_encode($arr);
	}
	function ajax_ltjob_action(){
		include(PLUS_PATH."ltjob.cache.php");
		$jobid=$_POST['id'];
		if(is_array($ltjob_type[$jobid])){
			$data.="<div class=\"m_post_job01\"><ul>";
			foreach($ltjob_type[$jobid] as $v)
			{
				$data.="<li><a href=\"javascript:check_select('".$v."','".$ltjob_name[$v]."','jobtwo');\"> ".$ltjob_name[$v]."</a></li>";
			}
			$data.="</ul></div>";
		}
		echo $data;
	}
	function getjoblist_action(){
		include(PLUS_PATH."job.cache.php");
		if(is_array($_POST[id])){
			$jobid=$_POST[id][0];
		}else{
			$jobid=$_POST[id];
		}
		$data="<option value=''>请选择</option>";
		if(is_array($job_type[$jobid])){
			foreach($job_type[$jobid] as $v){
				$data.="<option value='$v'>".$job_name[$v]."</option>";
			}
		}
		echo $data;
	}
	function getcitylist_action(){
		if($_POST['type']=='province'){
			$self="cityid";
			$son='three_cityid';
		}else{
			$self="three_cityid";
			$son='';
		}
		include(PLUS_PATH."city.cache.php");
		$data='';
		if(is_array($city_type[$_POST['id']])){
			foreach($city_type[$_POST['id']] as $v){
				$data.="<li><a href=\"javascript:void(0);\" onclick=\"getcitylist('".$v."','".$self."','".$city_name[$v]."','".$son."');\">".$city_name[$v]."</a></li>";
			}
		}
		echo $data;die;
	}

	function saveform_action(){

		$value['savetype']=$_POST['savetype'];
		$name=$_POST['name'];
		
		if($value['savetype']=="3"){
			
			$_POST['welfare']=@implode(",",$_POST['welfare']);
			$_POST['content'] = str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'background-color:','background-color:','white-space:'),html_entity_decode($_POST['content'],ENT_QUOTES));

		}
		if($value['savetype']=="4"){

			$firname =@explode("lang%5B%5D=",$_POST['lang']);
			$secname=@implode("",$firname);
			$_POST['lang'] =@str_replace ("&",",",$secname);
			$_POST['description'] = str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'background-color:','background-color:','white-space:'),html_entity_decode($_POST['description'],ENT_QUOTES));
		}
		if($value['savetype']=="5"){
			$firtimee =@explode("worktime%5B%5D=",$_POST['worktime']);
			$sectime=@implode("",$firtimee);
			$_POST['worktime'] =@str_replace ("%3A",":",$sectime);
		}

		$_POST['lastupdate']=time();
		$value['save']=serialize($_POST);

		$num=$this->obj->DB_select_num("lssave","`uid`='".$this->uid."' and `savetype`='".$value['savetype']."'");
		
		if(!$num ){
			$value['uid']=$this->uid;
			$data=$this->obj->insert_into("lssave",$value);
		}else{
			$data=$this->obj->update_once("lssave",$value,"`uid`='".$this->uid."' and `savetype`='".$value['savetype']."'");
		}
		echo $data;die;
	}
	function readform_action(){
		$save=$this->obj->DB_select_once("lssave","`uid`='".$this->uid."'and `savetype`='".intval($_POST['savetype'])."'");
		$save=unserialize($save['save']);
		include PLUS_PATH."/job.cache.php";
		include PLUS_PATH."/com.cache.php";
		include PLUS_PATH."/user.cache.php";
		include PLUS_PATH."/city.cache.php";
		include PLUS_PATH."/hy.cache.php";
		include PLUS_PATH."/industry.cache.php";
		include PLUS_PATH."/part.cache.php";

		$jobclass =@explode(",",$save['job_classid']);
		
		if(is_array($jobclass)){
			foreach($jobclass as $k=>$v){
				$save['job_class'][$k]=$job_name[$v];
			}
			$save['job_class']=@implode(",",$save['job_class']);
		}else{
			$save['job_class']=$job_name[$save['job_classid']];
		}
		
		if($save['savetype']=="2"){
 			$cityclass =@explode(",",$save['city_class']);
			if(is_array($cityclass)){
				foreach($cityclass as $k=>$v){
					$save['city_classname'][$k]=$city_name[$v];
				}
				$save['city_classname']=@implode(",",$save['city_classname']);
			}else{
				$save['city_classname']=$city_name[$save['city_class']];
			}
		}
		if($save['savetype']=="3"&&$save['welfare']){
			$save['welfare'] =@explode(",",$save['welfare']);
			foreach($comdata['job_welfare'] as $v){
				$welfareall[]=array('id'=>$v,'name'=>$comclass_name[$v]);
			}
			$save['welfareall']=$welfareall;
		}
		if($save['savetype']=="4"){
			$save['lang'] =@explode(",",$save['lang']);
		}
		if($save['savetype']=="5"){
 			$save['worktime']=@explode("&",$save['worktime']);
		}

		echo json_encode($save);die;
	}
	
	function sign_action(){
		$IntegralM=$this->MODEL('integral');
	    $date=date("Ymd");
	    $member=$this->obj->DB_select_once("member","`uid`='".$this->uid."' and `usertype`='".$_COOKIE['usertype']."'","`signday`,`signdays`");
	    $lastreg=$this->obj->DB_select_once("member_reg","`uid`='".$this->uid."' and `usertype`='".$_COOKIE['usertype']."' order by `id` desc");
	    
		$lastregdate=date("Ymd",$lastreg['ctime']);
	   
		if($lastregdate!=$date){
	        $yesterday=date("Ymd",strtotime("-1 day"));
			
			if($lastregdate==$yesterday&&intval(date("d"))>1){
	            if($member['signday']>=5){
	                $integral=$this->config['integral_signin']*2;
	            }else{
	                $integral=$this->config['integral_signin'];
	            }
	            $signday=$member['signday']+1;
	            $msg='连续签到'.$signday."天";
	        }else{
	            $signday='1';
	            $integral=$this->config['integral_signin'];
	            $msg='第一次签到';
	        }
	        $arr=array();
	        $nid=$this->obj->insert_into("member_reg",array("uid"=>$this->uid,"usertype"=>$_COOKIE['usertype'],'date'=>$date,"ctime"=>time(),'ip'=>fun_ip_get()));
	        if($nid){
	            $IntegralM->save_integral($this->uid,$integral,$msg);
	            $this->obj->DB_update_all("member","`signday`='".$signday."',`signdays`=`signdays`+'1'","`uid`='".$this->uid."'");
	            $arr['type']=date("j");
	        }else{
	            $arr['type']=-2;
	        }
	        $arr['integral']=$integral.$this->config['integral_pricename'];
	        $arr['signday']=$signday;
	        $arr['signdays']=$member['signdays']+1;
	        echo json_encode($arr);die;
	    }
	}
	function guwenZan_action(){
	    $id=intval($_POST['id']);
	    $zan=$this->obj->DB_select_once('atn',"`conid`='".$id."' and `uid`='".$this->uid."'");
	    if (!$zan){
	        $data['uid']=$this->uid;
	        $data['time']=time();
	        $data['usertype']=$this->usertype;
	        $data['conid']=$id;
	        $this->obj->insert_into('atn',$data);
	        $this->obj->DB_update_all('company_consultant', '`zan`=`zan`+1',"`id`='".$id."'");
	        echo 1;die();
	    }else{
	        echo 2;die();
	    }
	}
}
?>