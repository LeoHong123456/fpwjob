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
class admin_right_controller extends siteadmin_controller
{
	function index_action(){
		global $db_config;
		$this->yunset("db_config",$db_config);

		include(APP_PATH.'version.php');
		$this->yunset("version",$version);
		$base=base64_encode($db_config["coding"]."|phpyun|".$this->config["sy_webname"]."|phpyun|".$this->config["sy_weburl"]."|phpyun|".$this->config["sy_webemail"]."|phpyun|".$version);
		$this->yunset("base",$base);
		$nav_user=$this->obj->DB_select_alls("admin_user","admin_user_group","a.`m_id`=b.`id` and a.`uid`='".$_SESSION['auid']."'");
		$soft=$_SERVER['SERVER_SOFTWARE'];
		$kongjian=round(@disk_free_space(".")/(1024*1024),2);
		$banben=$this->db->mysql_server(1);
		$yonghu=@get_current_user();
		$server=$_SERVER['SERVER_NAME'];
		$today=strtotime(date("Y-m-d 00:00:00"));
		$comcert=$this->obj->DB_select_num("company_cert","`type`='3' and `status`='0'");
		$company_job=$this->obj->DB_select_num("company_job","`state`='0'",'id');
		$company=$this->obj->DB_select_num("member","`status`='0' and `usertype`='2'",'uid');
		$once_job=$this->obj->DB_select_num("once_job","`status`='0' and `edate`>'".time()."'");
		$admin_link=$this->obj->DB_select_num("admin_link","`link_state`='0' ");
		$company_order=$this->obj->DB_select_num("company_order","`order_state`='3' ");
		$comproduct=$this->obj->DB_select_num("company_product","`status`='0' ");
		$comnews=$this->obj->DB_select_num("company_news","`status`='0' ");
		if(is_dir("../admin"))$dirname[]="admin";
		if(is_dir("../install"))$dirname[]="install";
		$this->yunset("dirname",@implode(',',$dirname));
		$mruser=$nav_user[0]['username']=="admin" && $nav_user[0]['password']==md5('admin')?1:0;
		$this->yunset("comproduct",$comproduct);
		$this->yunset("comnews",$comnews);
		$this->yunset("mruser",$mruser);
		$this->yunset("comcert",$comcert);
		$this->yunset("company_job",$company_job);
		$this->yunset("company",$company);
		$this->yunset("once_job",$once_job);
		$this->yunset("admin_link",$admin_link);
		$this->yunset("company_order",$company_order);
		$this->yunset("soft",$soft);
		$this->yunset("kongjian",$kongjian);
		$this->yunset("banben",$banben);
		$this->yunset("yonghu",$yonghu);
		$this->yunset("server",$server);
		$this->yunset("nav_user",$nav_user[0]);
		$power=unserialize($nav_user[0]['group_power']);
		$menurows=$this->obj->DB_select_all("admin_navigation","`id` in (".@implode(",",$power).")","`url`");
		if(is_array($menurows)){
			foreach($menurows as $v){
				$url[]=$v['url'];
			}
		}
		$this->yunset("url",$url);
		$this->siteadmin_tpl(array('admin_right'));
	}
	function getweb_action(){
		$this->tj("member","reg_date","个人注册统计","usertype=1 and ");
	}
	function comtj_action(){
		$this->tj("member","reg_date","企业注册统计","usertype=2 and");
	}
	function resumetj_action(){
		$this->tj("resume_expect","ctime","简历统计");
	}
	function newstj_action(){
		$this->tj("news_base","datetime","新闻统计");
	}
	function adtj_action(){
		$this->tj("adclick","addtime","广告点击统计");
	}
	function jobtj_action(){
		$this->tj("company_job","lastupdate","职位统计");
	}
	function wzptj_action(){
		$this->tj("once_job","ctime","店铺招聘统计");
	}
	function wjltj_action(){
		$this->tj("resume_tiny","ctime","普工简历统计");
	}
	function payordertj_action(){
		$this->tj("company_order","order_time","充值统计");
	}

	function tj($tablename,$field,$name,$where=''){
		$TimeDate = $this->day();
		$sdate = $TimeDate['sdate'];
		$edate = $TimeDate['edate'];
		$days = $TimeDate['days'];
		$RegWhere = $where." $field >= ".strtotime($sdate)." AND $field <= ".strtotime($edate.' 23:59:59');
		$RegStats = $this->obj->DB_select_all($tablename," $RegWhere GROUP BY td ORDER BY td DESC","FROM_UNIXTIME(`$field`,'%Y%m%d') as td,count(*) as cnt");
		if(is_array($RegStats))
		{
			$AllNum = 0;
			foreach($RegStats as $key=>$value)
			{
				$AllNum +=$value['cnt'];
				$Date[$value['td']] = $value;
			}
			if($days>0)
			{
				for($i=0;$i<=$days;$i++){
					$onday = date("Ymd", strtotime(' -'. $i . 'day'));
					$td    = date('m-d', strtotime(' -'. $i . 'day'));
					$date    = date('Y-m-d', strtotime(' -'. $i . 'day'));
					if(!empty($Date[$onday]))
					{
						$Date[$onday]['td'] = $td;
						$Date[$onday]['date'] = $date;
						$List[$onday] = $Date[$onday];
					}else{
						$List[$onday] = array('td'=>$td,'cnt'=>0,'date'=>$date);
					}
				}
			}
		}
		ksort($List);
		$this->yunset('AllNum',$AllNum);
		$this->yunset('list',$List);
		$this->yunset('name',$name);
		$this->siteadmin_tpl(array('admin_right_web'));
	}
	
	function day(){
		if((int)$_GET['days']>0)
		{
			$days = (int)$_GET['days'];
			$sdate = date('Y-m-d',(time()-$days*86400));
			$edate = date('Y-m-d');
		}elseif($_GET['sdate']){
			$sdate = $_GET['sdate'];
			$days = ceil(abs(time() - strtotime($sdate))/86400);
			if($_GET['edate'])
			{
				$edate = $_GET['edate'];
				$days = ceil(abs(strtotime($edate) - strtotime($sdate))/86400);			}
		}else{
			$days = 30;
			$sdate = date('Y-m-d',(time()-$days*86400));
			$edate = date('Y-m-d');
		}
		return array('sdate'=>$sdate,'days'=>$days,'edate'=>$edate);
	}

	
	function downresumedt_action(){
		$this->dt("down_resume","downtime","下载简历动态","1 order by downtime desc");
	}
	function lookjobdt_action(){
		$this->dt("look_job","datetime","职位浏览动态","1 order by datetime desc");
	}
	function lookresumedt_action(){
		$this->dt("look_resume","datetime","简历浏览动态","1 order by datetime desc");
	}
	function useridjobdt_action(){
		$this->dt("userid_job","datetime","职位申请动态","1 order by datetime desc");
	}
	function favjobdt_action(){
		$this->dt("fav_job","datetime","职位收藏动态","1 order by datetime desc");
	}		
	function payorderdt_action(){
		$this->dt("company_order","order_time","充值动态","1 order by order_time desc");
	}	
	function dt($tablename,$field,$name,$where=1){
		$List = $this->obj->DB_select_all($tablename,$where." limit 21");
		if(is_array($List)){
			foreach($List as $v){									
				$uid[]=$v['uid'];	
				$comid[]=$v['comid'];
				$com_id[]=$v['com_id'];		
				$jobid[]=$v['jobid'];	
			}			
			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$comid).")");	
			$member2=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).")");
			$member3=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$com_id).")");
			$resume=$this->obj->DB_select_all("resume","`uid` in (".@implode(",",$uid).")");	
			$job=$this->obj->DB_select_all("company_job","`id` in (".@implode(",",$jobid).")");	
			foreach($List as $k=>$v){
				foreach($resume as $val){
					if($v['uid']==$val['uid']){
						$List[$k]['username']=$val['name'];
					}
				}
				foreach($job as $val){
					if($v['jobid']==$val['id']){
						$List[$k]['jobname']=$val['name'];
					}
				}
				foreach($member as $val){					
					if($v['comid']==$val['uid']){
						$List[$k]['comusername']=$val['username'];												
					}					
				}
				foreach($member2 as $val){					
					if($v['uid']==$val['uid']){
						$List[$k]['username']=$val['username'];						
					}					
				}
				foreach($member3 as $val){					
					if($v['com_id']==$val['uid']){
						$List[$k]['comusername']=$val['username'];												
					}					
				}	
							
				$time=time()-$v['downtime'];
				if($time>86400 && $time<604800){
					$List[$k]['time'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$List[$k]['time'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$List[$k]['time'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$List[$k]['time'] = "刚刚";
				}else{
					$List[$k]['time'] = date("Y-m-d",$v['downtime']);
				}
				
				$times=time()-$v['datetime'];
				if($times>86400 && $times<604800){
					$List[$k]['times'] = ceil($times/86400)."天前";
				}elseif($times>3600 && $times<86400){
					$List[$k]['times'] = ceil($times/3600)."小时前";
				}elseif($times>60 && $times<3600){
					$List[$k]['times'] = ceil($times/60)."分钟前";
				}elseif($times<60){
					$List[$k]['times'] = "刚刚";
				}else{
					$List[$k]['times'] = date("Y-m-d",$v['datetime']);
				}
				
				$timess=time()-$v['order_time'];
				if($timess>86400 && $timess<604800){
					$List[$k]['timess'] = ceil($timess/86400)."天前";
				}elseif($timess>3600 && $timess<86400){
					$List[$k]['timess'] = ceil($timess/3600)."小时前";
				}elseif($timess>60 && $timess<3600){
					$List[$k]['timess'] = ceil($timess/60)."分钟前";
				}elseif($timess<60){
					$List[$k]['timess'] = "刚刚";
				}else{
					$List[$k]['timess'] = date("Y-m-d",$v['order_time']);
				}			
			}
		}		
		$this->yunset('list',$List);
		$this->yunset('name',$name);
		$this->yunset('type',"dt");
		$this->yuntpl(array('admin/admin_right_web'));
	}

	
	function userrz_action(){
		$this->rz("member_log","ctime","个人会员日志","usertype=1 order by ctime desc");
	}
	function comrz_action(){
		$this->rz("member_log","ctime","企业会员日志","usertype=2 order by ctime desc");
	}
	function lietoutz_action(){
		$this->rz("member_log","ctime","猎头会员日志","usertype=3 order by ctime desc");
	}
	function traintz_action(){
		$this->rz("member_log","ctime","培训会员日志","usertype=4 order by ctime desc");
	}
	
	function rz($tablename,$field,$name,$where=1){
		$List = $this->obj->DB_select_all($tablename,$where." limit 21");		
		if(is_array($List)){
			foreach($List as $v){			
				$uid[]=$v['uid'];		
			}			
			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uid).")","username,uid");			
			foreach($List as $k=>$v){
				foreach($member as $val){
					if($v['uid']==$val['uid']){
						$List[$k]['username']=$val['username'];
					}					
				}
				$time=time()-$v['ctime'];
				if($time>86400 && $time<604800){
					$List[$k]['time'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$List[$k]['time'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$List[$k]['time'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$List[$k]['time'] = "刚刚";
				}else{
					$List[$k]['time'] = date("Y-m-d",$v['ctime']);
				}
			}
		}				
		$this->yunset('list',$List);		
		$this->yunset('name',$name);
		$this->yunset('type',"rz");
		$this->yuntpl(array('admin/admin_right_web'));
	}
}
?>