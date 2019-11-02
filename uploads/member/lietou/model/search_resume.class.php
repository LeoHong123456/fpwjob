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
class search_resume_controller extends lietou
{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		unset($arr_data['sex'][3]);
		$this->yunset("arr_data",$arr_data);
		$this->yunset("getinfo",$_GET);
		$uptime=array(1=>'今天',3=>'最近3天',7=>'最近7天',30=>'最近一个月',90=>'最近三个月');
        $this->yunset("uptime",$uptime);
        $this->yunset('ltstyle',$this->config['sy_weburl'].'/app/template/lietou');
		$this->yunset("type",$_GET['type']);
		$this->yunset($this->MODEL('cache')->GetCache(array('job','user','hy','city')));
		$this->public_action();
		$this->yunset("class",25);
		$this->lietou_tpl('search_resume');
	}
}
?>