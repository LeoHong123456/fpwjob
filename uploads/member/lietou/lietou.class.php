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
class lietou extends common{
	function public_action(){
		include(PLUS_PATH."com.cache.php");
		$this->yunset("comdata",$comdata);
		$this->yunset("comclass_name",$comclass_name);
		$now_url=@explode("/",$_SERVER['REQUEST_URI']);
		$now_url=$now_url[count($now_url)-1];
		$this->yunset("now_url",$now_url);
 		include(PLUS_PATH."menu.cache.php");
		$this->yunset("menu_name",$menu_name);
		$member=$this->obj->DB_select_once("member","`uid`='".$this->uid."'");
		if($member['restname']=="0"){
			$this->yunset("setname",1);
		}
		$this->yunset('member',$member);
		$user=$this->obj->DB_select_once("lt_info","`uid`='".$this->uid."'");
		$user=$this->lt_array_action($user);
		if($user['photo_big'] == ""){
			$user['photo_big'] = $this->config['sy_weburl']."/".$this->config['sy_lt_icon'];
		}else{
			$user['photo_big'] = str_replace("./",$this->config['sy_weburl']."/",$user['photo_big']);
		}
		$this->yunset("user",$user);
		$giverebatenum=$this->obj->DB_select_num("rebates","`job_uid`='".$this->uid."'");
		$this->yunset('giverebatenum',$giverebatenum);
		$this->lt_satic();
		$this->get_nav();
	}
	function lietou_tpl($tpl){
		$this->yuntpl(array('member/lietou/'.$tpl));
	}
	function get_nav(){
		
		if(in_array($_GET['act'],array('loglist','withdraw','withdrawlist','change','changelist'))){

			$isdef=3;
		}elseif(in_array($_GET['c'],array('info','uppic','binding','passwd','zixun','sysnews','setname','baoming_subject','fav_subject','subject_zixun','fav_agency','atn_teacher'))){

			$isdef=1;

		}elseif(in_array($_GET['c'],array('jobadd','job'))){

			$isdef=2;

		}elseif(in_array($_GET['c'],array('mypay','pay','paylog','consume','paymanage','coupon_list','reward_list','paylogtc','right','log','integral','integral_reduce','payment'))){

			$isdef=3;

		}elseif(in_array($_GET['c'],array('search_resume','down_resume','look_resume','entrust_resume','yp_resume','give_rebates','my_rebates','talent','jobpack','reward'))){

			$isdef=4;
		}
		
		$this->yunset("isdef",$isdef);
	}

	function lt_satic(){
		$statis=$this->obj->DB_select_once("lt_statis","`uid`='".$this->uid."'");
		
		if($statis['rating']){ 
			$rating=$this->obj->DB_select_once("company_rating","`id`='".$statis['rating']."' and `category`='2'");
		}

		if($statis['vip_etime']<time()){

			if($statis['vip_etime'] > 1){
				$nums=0;
			}else if($statis['vip_etime'] < '1' && $statis['rating']!="0"){
				$nums=1;
			}else{
				$nums=0;
			} 

			if($nums==0){
				if($this->config['com_vip_done']=='0'){

					$data['lt_job_num']=$data['lt_breakjob_num']=$data['lt_down_resume']='0';
					$data['oldrating_name']=$statis['rating_name'];

					$statis['rating_name']=$data['rating_name']="过期会员";
					
					$statis['rating_type']=$statis['rating']=$data['rating_type']=$data['rating']="0";  
  					
					$where['uid']=$this->uid;
					
					$this->obj->update_once("lt_statis",$data,$where);
					
				}elseif ($this->config['com_vip_done']=='1'){
					
					$ratingM = $this->MODEL('rating');
					
					$rat_value=$ratingM->ltrating_info();
					
					$this->obj->DB_update_all("lt_statis",$rat_value,"`uid`='".$this->uid."'");
				}
			}
		}

		if($statis['vip_etime']>time() || $statis['vip_etime']==0){
			if($statis['rating_type']=="2"){
				$addltjobnum='1';
			}else if($statis['rating_type']=='1'){
				if($statis['lt_job_num'] > 0){
					$addltjobnum='1';
				}else{
					$addltjobnum='2';
				}
   			}else{
				$addltjobnum='0';
			}
		}else {
			$addltjobnum='0';
		}

 		$statis['integral_format']=number_format($statis['integral']);
		$this->yunset("statis",$statis); 

		
		$this->yunset("addltjobnum",$addltjobnum);
		$statis['addltjobnum']=$addltjobnum;
		return $statis;
	}
	function user_shell(){
		$userinfo=$this->obj->DB_select_once("lt_info","`uid`='".$this->uid."'");
		if($userinfo['realname']==""){
			$this->ACT_layer_msg("请先完善基本资料！",8,$_SERVER['HTTP_REFERER']);
		}
	}

	function get_com($type){
		$statis=$this->lt_satic();  
		if($statis['rating_type'] && $statis['rating']){ 
			$data=array();
			if($type==1){ 
				if($statis['rating_type']=="1"&&$statis['lt_job_num']>0&& ($statis['vip_etime']<1 || $statis['vip_etime']>=time())){
					$data['lt_job_num']=$statis['lt_job_num']-1;
				}elseif($statis['rating_type']=='2' && ($statis['vip_etime']>time() || $statis['vip_etime']=='0')){
					$value=null;
				}else{
					$this->ACT_layer_msg("会员套餐已用完!",8,"index.php?c=right");
				}
				  
			}elseif($type==3){ 
				if($statis['rating_type']=="1"&&$statis['lt_breakjob_num']>0&& ($statis['vip_etime']<1 || $statis['vip_etime']>=time())){  
					$data['lt_breakjob_num']=$statis['lt_breakjob_num']-1;
				}elseif($statis['rating_type']=='2' && ($statis['vip_etime']>time() || $statis['vip_etime']=='0')){
					$value=null;
				}else{
					$this->ACT_layer_msg("会员套餐已用完!",8,"index.php?c=right");
				}
			}
			if($data){
				$this->obj->update_once("lt_statis",$data,array("uid"=>$this->uid));
			}
		}else{
			$this->ACT_layer_msg("会员已到期，请先购买会员！",8,"index.php?c=right");
		}
	}
	 
	function logout_action(){
		$this->logout();
	}
	function resume($table,$where){
		include(LIB_PATH."page.class.php");
		$limit=10;
		$page=$_GET['page']<1?1:$_GET['page'];
		$ststrsql=($page-1)*$limit;
		$page_url = "index.php?c=".$_GET['c']."&page={{page}}";
		$count = $this->obj->DB_select_alls($table,"resume_expect",$where." ORDER BY a.id DESC");
 		$num = count($count);
 		$pages=ceil($num/$limit);
		if($pages>1){
			$page = new page($page,$limit,$num,$page_url);
			$pagenav=$page->numPage();
			$this->yunset("pagenav",$pagenav);	
		}
 		
		
		$list = $this->obj->DB_select_alls($table,"resume_expect",$where."  ORDER BY a.id DESC LIMIT $ststrsql,$limit","a.*,a.id as did,b.*");
		include PLUS_PATH."/user.cache.php";
		include PLUS_PATH."/city.cache.php";
		include PLUS_PATH."/job.cache.php";
		include PLUS_PATH."/industry.cache.php";

		if(is_array($list)){
			$uid=array();
			foreach($list as $val){
				if(in_array($val['uid'],$uid)==false){
					$uid[]=$val['uid'];
				}
			}
			$resume=$this->obj->DB_select_all("resume","`uid` in(".pylode(',',$uid).")","`uid`,`name`");

			foreach($list as $k=>$v){
				foreach($resume as $value){
					if($value['uid']==$v['uid']){
						$list[$k]['name']=$value['name'];
					}
				}
				$list[$k]['salary']=$userclass_name[$v['salary']];
				$list[$k]['hy']=$industry_name[$v['hy']];
				if($v['city_classid']!=""){
				    $city=@explode(",",$v['city_classid']);
				    $citylist=array();
				    foreach($city as $val){
				        $citylist[]=$city_name[$val];
				    }
				    $list[$k]['citylist']=@implode(",",$citylist);
				}
				if($v['job_classid']!=""){
					$job=@explode(",",$v['job_classid']);
					$joblist=array();
					foreach($job as $val){
						$joblist[]=$job_name[$val];
					}
					$list[$k]['joblist']=@implode(",",$joblist);
				}
			}
		}
		$this->yunset("list",$list);
	}
}
?>