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
 
  global $db_config,$db,$config;
  include(dirname(dirname(dirname(__FILE__)))."/model/notice.model.php");
  $notice = new notice_model($db, $db_config['def']);
  $totaltime=time();
  $subscribe=$db->select_all("subscribe","`status`='1' and `type`='1'");
  foreach($subscribe as $k=>$v){
    $ytime=$totaltime-$v['ctime'];
    $vtime=$v['time']*24*60*60;
    if($ytime>$vtime){
       $where="`state`='1' and `job1`='".$v['job1']."' and `job1_son`='".$v['job1_son']."' and `job_post`='".$v['job_post']."' and `provinceid`='".$v['provinceid']."'";
      if($v['cityid']>"0"){
        $where.=" and `cityid`='".$v['cityid']."'";
      }
      if($v['three_cityid']>"0"){
        $where.=" and `three_cityid`='".$v['three_cityid']."'";
      }
      $job=$db->select_all("company_job",$where."order by lastupdate desc limit 5");
      $data=array();
      $name=array();
      if($job && is_array($job)){
        foreach($job as $val){
          $name[]=$val['name'];
        }
        $data['jobname']=@implode(",",$name);
        $data['email']=$v['email'];
        $data['type']="userdy";
        $notice->sendEmailType($data);
        
        $db->insert_once("subscriberecord","`sid`='".$v['id']."',`uid`='".$v['uid']."',`type`='".$v['type']."',`content`='".$data['jobname']."',`time`='".time()."'");
        
        $db->update_all("subscribe","`ctime`='".time()."'","`id`='".$v['id']."'");
      }
    }
  }
?>