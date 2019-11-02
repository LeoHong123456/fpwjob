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
class resume_controller extends company{
    function index_action(){
		include(CONFIG_PATH."db.data.php");
		unset($arr_data['sex'][3]);
		$this->yunset("arr_data",$arr_data);
        $uptime=array(1=>'今天',3=>'最近3天',7=>'最近7天',30=>'最近一个月',90=>'最近三个月');
        $this->yunset('uptime',$uptime);
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache (array('city','user','job','hy'));
        $date=date("Y",0);
        $time=date("Y",time());
        $this->yunset("date",$date);
        $this->yunset("time",$time);
        $this->yunset($CacheList);
        $this->yunset("type",$_GET['type']);
        $this->public_action();
        $this->company_satic();
        $this->yunset("js_def",5);
        $this->com_tpl('resume');
    }
}