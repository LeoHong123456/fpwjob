<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
 
  global $db_config,$db,$config;
  include(dirname(dirname(dirname(__FILE__)))."/model/notice.model.php");
  $notice = new notice_model($db, $db_config['def']);
  $totaltime=time();
  $subscribe=$db->select_all("subscribe","`status`='1' and `type`='2'");
  foreach($subscribe as $k=>$v){
    $ytime=$totaltime-$v['ctime'];
    $vtime=$v['time']*24*60*60;
    if($ytime>$vtime){
      $where = "a.status<>'2' and a.`r_status`<>'2' and b.`open`='1' and a.`uid`=b.`uid`";
      if($v['provinceid']>"0" && $v['cityid']=="0" && $v['three_cityid']=="0"){
        $where.=" and FIND_IN_SET('".$v['provinceid']."',b.city_classid)";
      }elseif($v['provinceid']>"0" &&  $v['cityid']>"0" && $v['three_cityid']=="0"){
        $where.=" and  (FIND_IN_SET('".$v['provinceid']."',b.city_classid) or FIND_IN_SET('".$v['cityid']."',b.city_classid))";
      }elseif($v['provinceid']>"0" &&  $v['cityid']>"0" && $v['three_cityid']>"0"){
        $where.=" and (FIND_IN_SET('".$v['provinceid']."',b.city_classid) or FIND_IN_SET('".$v['cityid']."',b.city_classid) or FIND_IN_SET('".$v['three_cityid']."',b.city_classid))";
      }
      if($v['job1']>"0" && $v['job1_son']=="0" && $v['job_post']=="0"){
        $where.=" and FIND_IN_SET('".$v['job1']."',b.job_classid)";
      }elseif($v['job1']>"0" &&  $v['job1_son']>"0" && $v['job_post']=="0"){
        $where.=" and  (FIND_IN_SET('".$v['job1']."',b.job_classid) or FIND_IN_SET('".$v['job1_son']."',b.job_classid))";
      }elseif($v['job1']>"0" &&  $v['job1_son']>"0" && $v['job_post']>"0"){
        $where.=" and (FIND_IN_SET('".$v['job1']."',b.job_classid) or FIND_IN_SET('".$v['job1_son']."',b.job_classid) or FIND_IN_SET('".$v['job_post']."',b.job_classid))";
      }
      $userlist=$db->select_alls("resume","resume_expect",$where." order by b.lastupdate desc limit 5","b.name");
      $data=array();
      $name=array();
      if($userlist && is_array($userlist)){
        foreach($userlist as $val){
          $name[]=$val['name'];
        }
        $data['resumename']=@implode(",",$name);
        $data['email']=$v['email'];
        $data['type']="comdy";
        $notice->sendEmailType($data);
        
        $db->insert_once("subscriberecord","`sid`='".$v['id']."',`uid`='".$v['uid']."',`type`='".$v['type']."',`content`='".$data['resumename']."',`time`='".time()."'");
        $db->update_all("subscribe","`ctime`='".time()."'","`id`='".$v['id']."'");
      }
    }
  }
?>