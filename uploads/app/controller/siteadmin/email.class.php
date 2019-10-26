<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class email_controller extends siteadmin_controller{
	
	function index_action(){
		$this->siteadmin_tpl(array('admin_send_email'));
	}

	
	function send_action(){ 
		extract($_POST);
		
		$UserInfoM=$this->MODEL('userinfo');

		if($email_title==''||$content==''){
			$arr['msg']="邮件标题均不能为空！";
			$arr['status']=2;
			echo json_encode($arr);die;
		} 
		$emailarr=$user=$com=$lt=$px=$userinfo=array();
		
		if($utype!='5'){
			$userrows=$this->obj->DB_select_all("member","`usertype`='".$utype."'","email,`uid`,`usertype`");
		}else if($utype=='5'){
			$email_user=@explode(',',$_POST['email_user']); 
			$email_user=array_filter($email_user);
			foreach($email_user as $v){
			    if(CheckRegEmail($v)){
			        $earr[]=$v;
			    }
			}
			$userrows=$this->obj->DB_select_all("member","`email` in('".@implode("','",$email_user)."')","email,`uid`,`usertype`");  
		}
		 
		if(is_array($userrows)&&$userrows){
			foreach($userrows as $v){
				if($v['usertype']=='1'){$user[]=$v['uid'];}
				if($v['usertype']=='2'){$com[]=$v['uid'];}
				if($v['usertype']=='3'){$lt[]=$v['uid'];}
				if($v['usertype']=='4'){$px[]=$v['uid'];}
				$emailarr[$v['uid']]=$v["email"];

			}

			if($user&&is_array($user)){
 				$resume=$UserInfoM->GetUserinfoList(array("`uid` in(".@implode(",",$user).")"),array("field"=>"`name`,`uid`","usertype"=>1)); 
 				foreach($resume as $val){
					$userinfo[$val['uid']]=$val['name'];
				}
			}
			if($com&&is_array($com)){
				$company=$UserInfoM->GetUserinfoList(array("`uid` in(".@implode(',',$com).")"),array("usertype"=>2,"field"=>"`name`,`uid`","usertype"=>2)); 
				foreach($company as $val){
					$userinfo[$val['uid']]=$val['name'];
				}
			}
			if($lt&&is_array($lt)){
 				$lt_info=$UserInfoM->GetUserinfoList(array("`uid` in(".@implode(',',$lt).")"),array("field"=>"`realname`,`uid`","usertype"=>3)); 
				foreach($lt_info as $val){
					$userinfo[$val['uid']]=$val['realname'];
				}
			} 
			if($px&&is_array($px)){
 				$px_train=$UserInfoM->GetUserinfoList(array("`uid` in(".@implode(',',$px).")"),array("field"=>"`name`,`uid`","usertype"=>4)); 
				foreach($px_train as $val){
					$userinfo[$val['uid']]=$val['name'];
				}
			} 
		} 

		
		  
		if(!count($emailarr)){ 
			$arr['msg']="没有符合条件的邮箱，请先检查！";
			$arr['status']=2;
			echo json_encode($arr);die;
		}else{
			set_time_limit(10000);

			$pagesize	=	intval($pagelimit);
			$sendok		=	intval($sendok);
			$sendno		=	intval($sendno?$sendno:0);
			$value		=	intval($value);

			
			$result=$this->send_email($emailarr,$email_title,$content,$userinfo,$pagesize,$sendok,$sendno,$value);
			
			if($result){
				$toSize = $pagesize * $result['page'];

				if(count($emailarr) > $toSize){
					$npage=$result['page'];							
					$spage=$npage*$pagesize+1;
					$topage=($npage+1)*$pagesize;
					$name=$spage."-".$topage;
					
					$data['status']="3";
					$data['value']=$npage;
					$data['msg']="发送成功:".$result['sendok'].",失败:".$result['sendno'];
					$data['sendok']=$result['sendok'];
					$data['sendno']=$result['sendno'];

 					echo json_encode($data);die;
				 
				}else{
					 
					$data['status']="1";
					$data['value']=0;
					$data['msg']="发送成功:".$result['sendok'].",失败:".$result['sendno'];
 					echo json_encode($data);die;
				}
			}
			
		}
	}

	function send_email($email=array(),$emailtitle="",$emailcoment="",$userinfo=array(),$pagesize,$snedok,$snedno,$value){
		
		$notice = $this->MODEL('notice');
		$sendok = intval($sendok);
		$sendno = intval($sendno);

		if($value=='0'){
			$i = 1;
			foreach($email as $key => $v){
					
				if($i <=$pagesize){
					$emailData['email'] = $v;
					$emailData['subject'] = $emailtitle;
					$emailData['content'] = stripslashes($emailcoment);
					$emailData['uid'] = $key;
					$emailData['name'] = $userinfo[$key];
					$emailData['cname'] = "系统";
					if($v){
						$sendid = $notice->sendEmail($emailData);
					}
					if($sendid['status'] != -1){
						$state=1;
						$sendok++;
					}else{
						$state=0;
						$sendno++;
					}
				}
				$i++;
			}
			$result['sendok'] = $sendok;
			$result['sendno'] = $sendno;
			$result['page'] = 1;

		}else{
			$page=$value;
			$start = $page*$pagesize;
			$end = ($page+1)*$pagesize;

			$i=1;

			foreach($email as $key=>$v){

				if($i > $start && $i <= $end){
					
					$emailData['email'] = $v;
					$emailData['subject'] = $emailtitle;
					$emailData['content'] = stripslashes($emailcoment);
					$emailData['uid'] = $key;
					$emailData['name'] = $userinfo[$key]['name'];
					$emailData['cname'] = "系统";
						
					if($v){
						$sendid = $notice->sendEmail($emailData);
					}
					if($sendid['status'] != -1){
						$state=1;
						$sendok++;
					}else{
						$state=0;
						$sendno++;
					}
				}
				$i++;
			}

			$page = $page + 1;
			$result['sendok'] = $sendok;
			$result['sendno'] = $sendno;
			$result['page'] = $page;
			 
		}
		return $result;
	}

	 
	
	
}

?>