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
class school_controller extends common{
	function index_action(){
        $CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('school','city'));
		$this->yunset($CacheList);
		$rowsws=$this->obj->DB_select_all("company_job","`is_graduate`='1' and `state` =1 and `status` = 0 ORDER BY rec_time DESC,lastupdate DESC limit 5","`rec_time`,`lastupdate`,`name`,`id`");
		$this->yunset("rowsws",$rowsws);
		$hd = $this->obj->DB_select_all("tplmobliepic","`type`='hd'");
		foreach($hd as $k=>$v){
			if($v['pic']&&file_exists(str_replace('./',APP_PATH, $v['pic']))){
				$hd[$k]['pic']=str_replace('./', $this->config['sy_weburl'].'/', $v['pic']);
			}else{
				$hd[$k]['pic']='';
			}
		}
		$this->yunset("hd",$hd);
		$this->seo('school');
		$this->yunset("headertitle","校园招聘");
		$this->yuntpl(array('wap/school'));
	}
	function schoolacademy_action(){
        foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);
		$CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('school','city'));
		$this->yunset($CacheList);
		$this->seo('school_academy');
		$this->yunset("headertitle","院校列表");
		$this->yunset("topplaceholder","请输入关键");
		$this->yuntpl(array('wap/school_academy'));
	}
    function schoolacademyshow_action(){
        
		$CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('school','city'));
		$this->yunset($CacheList);
        $row=$this->obj->DB_select_once("school_academy","`id`='".$_GET['id']."'");
        if($row){
            $this->yunset("row",$row);
        }
        $rows=$this->obj->DB_select_num("atn","`sc_uid`='".$_GET['id']."' and `uid`='".$this->uid."'");
		if($rows){
            $this->yunset("rows",$rows);
        }
        $this->seo('school_academy_show');
		$this->yunset("headertitle","院校详情信息");
		$this->yuntpl(array('wap/school_academy_show'));
	}
	function job_action(){
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
		foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$this->seo("com_search");
		$searchurl=@implode("&",$searchurl);

		$backurl=Url('wap',array('c'=>'school'));

		$this->yunset('backurl',$backurl);
		
		$this->yunset("searchurl",$searchurl);
		$_GET['is_graduate']=1;
		$this->seo('ws');
		$this->yunset("headertitle","网申职位列表");
		$this->yunset("topplaceholder","请输入关键字");
		$this->yuntpl(array('wap/wangshen'));
	}
	function xjh_action(){
		foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);
		$CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('school','city'));
		$this->yunset($CacheList);
		$adtime=array('1'=>'今天','3'=>'最近3天','7'=>'最近7天','15'=>'最近15天','30'=>'最近一个月','90'=>'最近三个月');
		$this->yunset("adtime",$adtime);
		$this->seo('xjh');
		$this->yunset("headertitle","宣讲会");
		$this->yunset("topplaceholder","请输入关键");
		$this->yuntpl(array('wap/school_xjh'));
	}
	function atnxjh_action(){
		if(!$this->uid||!$this->username){
			$arr['msg']='请先登录！';
			$arr['status']=8;
		}elseif($this->uid==$_POST['comid']){
			$arr['msg']='本人发布，无法关注！';
			$arr['status']=8;
		}
		$atnnum=$this->obj->DB_select_num('atn',"`uid`='".$this->uid."' and `xjhid`='".$_POST['id']."'");
		if($atnnum){
			$arr['msg']='您已关注！';
			$arr['status']=8;
		}else{
			$mem=$this->obj->DB_select_once('member',"`uid`='".$_POST['comid']."'",'usertype');
			$nid=$this->obj->insert_into('atn',array('uid'=>$this->uid,'usertype'=>$this->usertype,'sc_uid'=>$_POST['comid'],'sc_usertype'=>$mem['usertype'],'xjhid'=>$_POST['id'],'time'=>time()));
			if($nid){
				$arr['msg']='关注成功！';
				$arr['status']=9;
			}else{
				$arr['msg']='关注失败！';
				$arr['status']=8;
			}
		}
		echo json_encode($arr);die;
	}
	
	function atnxjhdel_action(){
 	 	$nid = $this->obj->DB_delete_all("atn","`xjhid`='".intval($_POST['id'])."' AND `uid`='".$this->uid."'");
 		if($nid){
			$arr['msg']='取消关注成功！';
			$arr['status']=9;
		}else{
			$arr['msg']='取消关注失败！';
			$arr['status']=8;
		}
		
		echo json_encode($arr);die;
	}
	
	function report_action(){
		session_start();
		$AskM=$this->MODEL('ask');
		if(md5(strtolower($_POST['authcode']))!=$_SESSION['authcode'] || empty($_SESSION['authcode'])){
			unset($_SESSION['authcode']);
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='验证码错误！';
			echo json_encode($data);die;  
		}
		$row=$AskM->GetReportOne(array('p_uid'=>$this->uid,'eid'=>(int)$_POST['id'],'c_uid'=>$_POST['x_uid'],'usertype'=>$this->usertype));
		if(is_array($row)){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='您已报错过该宣讲会！';
			echo json_encode($data);die;  
		}
		$data=array('c_uid'=>$_POST['x_uid'],'inputtime'=>time(),'p_uid'=>$this->uid,'usertype'=>(int)$this->usertype,'eid'=>$_POST['id'],'r_name'=>$_POST['c_name'],'username'=>$this->username,'r_reason'=>trim($_POST['e_reason']).'@'.trim($_POST['r_reason']),'did'=>$this->userdid,'type'=>'3');
		$nid=$AskM->AddReport($data);
		if($nid){
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='提交成功！';
			echo json_encode($data);die;  
		}else{
			$data['url']=$_SERVER['HTTP_REFERER'];
			$data['msg']='提交失败！';
			echo json_encode($data);die;  
		}
	}
	
}
?>