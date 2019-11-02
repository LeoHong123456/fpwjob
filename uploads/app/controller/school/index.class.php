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
class index_controller extends school_controller{
	function index_action(){
        $this->public_action();
        $CacheM=$this->MODEL('cache');
	    $CacheList=$CacheM->GetCache(array('job','city','com','user','hy','diploma'));
	    $this->yunset($CacheList);
	    $rowsws=$this->obj->DB_select_all("company_job","`is_graduate`='1' and `state` =1 and `status` = 0 ORDER BY rec_time DESC,lastupdate DESC limit 4","`rec_time`,`lastupdate`,`name`,`id`");
		$this->yunset("rowsws",$rowsws);
        $this->seo('school');
		$this->school_tpl('index');
	}
    function schoollist_action(){
        $CacheM=$this->MODEL('cache');
	    $CacheList=$CacheM->GetCache(array('city','school'));
	    $this->yunset($CacheList);
        $city_name=$CacheList['city_name'];
        $schoolclass_name=$CacheList['schoolclass_name'];
         if($_GET['provieid']){
            $academy=$this->obj->DB_select_all("school_academy","`provinceid`='".$_GET['provieid']."'");
            if($academy){
                 if(is_array($academy)){
                    foreach($academy as $v){
                        $HotjobList['url'] = Url("school",array('c'=>'academyshow','id'=>$v['id']));
                        $HotjobList['id']=$v['id'];
                        $HotjobList['photo']=$v['photo'];
                        $HotjobList['schoolname']=$v['schoolname'];
                        $HotjobList['provinceid']=$city_name[$v['provinceid']];
                        $HotjobList['cityid']=$city_name[$v['cityid']];
                        $HotjobList['school_categty']=$schoolclass_name[$v['school_categty']];
                        $Hotjob=Array(
                            'url'=>$HotjobList['url'],
                            'id'=>$HotjobList['id'],
                            'photo'=>$HotjobList['photo'],
                            'schoolname'=>$HotjobList['schoolname'],
                            'provinceid'=>$HotjobList['provinceid'],
                            'cityid'=>$HotjobList['cityid'],
                            'school_categty'=>$HotjobList['school_categty']
                        ); 
                          $data[]= $Hotjob;
                    } 
                }
                
            }else{
                 $data=null;
            }
             echo $_GET['callback']."(".str_replace("\\/", "/",json_encode($data)).")";
        }
    }

    function academy_action(){
        if($_GET[city]){
	        $city=explode("_",$_GET[city]);
	        $_GET['provinceid']=$city[0];
	        $_GET['cityid']=$city[1];
	        $_GET['three_cityid']=$city[2];
	    }
        
		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('city','school'));
	    $this->yunset($CacheList);
        $this->public_action();
        $this->yunset('def','3');
        $this->seo('school_academy');
		$this->school_tpl('school_academy');
    }
    function academyshow_action(){
        
        if($_GET['id']){
            $CacheM=$this->MODEL('cache');
            $CacheList=$CacheM->GetCache(array('city','school'));
            $this->yunset($CacheList);
            $row=$this->obj->DB_select_once("school_academy","`id`='".$_GET['id']."'");
            if($row){
              $this->yunset("row",$row);
            }
            $time=time();
            
            $academy=$this->obj->DB_select_all("school_academy","`id`!='".$_GET['id']."'");
            if($academy&&is_array($academy)){
                    foreach($academy as $v){
                        $uids[]=$v['id'];
                    }
                   $xjh=$this->obj->DB_select_all('school_xjh',"`schoolid` in(".pylode(',',$uids).") and `status`='1' and `stime`>'".$time."' group by schoolid",'`schoolid`,count(schoolid) as xjhnum');
                    foreach($academy as $key=>$val){
                        $academy[$key]['id']=$val['id'];
                        $academy[$key]['schoolname']=$val['schoolname'];
                        $academy[$key]['photo']=$val['photo'];
                         foreach($xjh as $v){
                            if($val['id']==$v['schoolid']){
                                $academy[$key]['atnnum']=$v['xjhnum'];
                            }
                        }
                       
                    }
            }
            $rows=$this->obj->DB_select_num("atn","`sc_uid`='".$_GET['id']."' and `uid`='".$this->uid."'");
            if($rows){
                 $this->yunset("rows",$rows);
            }
            
        }
        $this->yunset("academy",$academy);
        $this->public_action();
        $this->seo('school_academy_show');
        $this->yunset('def','3');
		$this->school_tpl('school_academy_show');
    }
	function xjh_action(){
		if($_GET[city]){
	        $city=explode("_",$_GET[city]);
	        $_GET['provinceid']=$city[0];
	        $_GET['cityid']=$city[1];
	        $_GET['three_cityid']=$city[2];
	    }
		$CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('school','city'));
		$this->yunset($CacheList);
		$adtime=array('1'=>'今天','3'=>'最近3天','7'=>'最近7天','15'=>'最近15天','30'=>'最近一个月','90'=>'最近三个月');
        $this->yunset("adtime",$adtime);
		$this->public_action();
		$this->seo('xjh');
		$this->yunset('def','2');
		$this->school_tpl('xjh');
	}
	function job_action(){
		if($_GET[job]){
	        $job=explode("_",$_GET[job]);
	        $_GET['job1']=$job[0];
	        $_GET['job1_son']=$job[1];
	        $_GET['job_post']=$job[2];
	    }
	    if($_GET[city]){
	        $city=explode("_",$_GET[city]);
	        $_GET['provinceid']=$city[0];
	        $_GET['cityid']=$city[1];
	        $_GET['three_cityid']=$city[2];
	    }
		if($_GET[job1son]){
	       
	        $_GET['job1_son']=$_GET[job1son];
	    }
		if($_GET[jobpost]){
	       
	        $_GET['job_post']=$_GET[jobpost];
	    }
	    
	    if($_GET[tp]==1){
	        $_GET['urgent']=1;
	    }
	    if($_GET[tp]==2){
	        $_GET['rec']=1;
	    }
	    if($_GET[all]){
	        $allurl=explode("_",$_GET[all]);
	        $_GET['hy']=$allurl[0];
	        $_GET['edu']=$allurl[1];
	        $_GET['exp']=$allurl[2];
	        $_GET['sex']=$allurl[3];
	        $_GET['report']=$allurl[4];
	        $_GET['uptime']=$allurl[5];
	    }
	    if ($_GET['salary']){
	        $salary=explode('_', $_GET['salary']);
	        $_GET['minsalary']=$salary[0];
	        $_GET['maxsalary']=$salary[1];
	    }
        include(CONFIG_PATH."db.data.php");		
		$this->yunset("arr_data",$arr_data);
		$arr_data1=$arr_data['sex'][$_GET['sex']];
		$this->yunset("arr_data1",$arr_data1);
		if($this->config['province']){
			$_GET['provinceid'] = $this->config['province'];
		}
		if($this->config['cityid']){
			$_GET['cityid'] = $this->config['cityid'];
		}
		if($this->config['three_cityid']){
			$_GET['three_cityid'] = $this->config['three_cityid'];
		}
        $uptime=array('1'=>'今天','3'=>'最近3天','7'=>'最近7天','30'=>'最近一个月','90'=>'最近三个月');
        $this->yunset("uptime",$uptime);
		$sdate=array('1'=>'一天内',"3"=>'三天内','7'=>'七天内',"15"=>'十五天内','30'=>'一个月内',"60"=>'两个月内');
		$this->yunset("sdate",$sdate);
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('job','city','com','hy'));
	    $this->yunset($CacheList);
		$FinderParams=array('hy','job','city','job1','job1_son','job_post','provinceid','cityid','three_cityid','minsalary','maxsalary','edu','exp','sex','type','report','sdate','uptime');
		foreach($_GET as $k=>$v){
			if(in_array($k,$FinderParams)&&$v!=""&&$v!="0"){ 
				$finder[$k]=$v; 
			}
		}
		unset($finder['city']);unset($finder['job']);unset($finder['all']);unset($finder['tp']);unset($finder['minsalary']);unset($finder['maxsalary']);
		$this->yunset('finder',$finder);
		if($this->config['cityid']){
			unset($finder['cityid']);
		}

		if($finder&&is_array($finder)){
			foreach($finder as $key=>$val){
				$para[]=$key."=".$val;
			}
			$paras=@implode('##',$para);
			$this->yunset("paras",$paras);
		}
		

		
		if($_COOKIE['lookjob'] || $_COOKIE['favjob'] || $_COOKIE['useridjob']){
			$this->yunset(array('lookjob'=>@explode(',',$_COOKIE['lookjob']),'favjob'=>@explode(',',$_COOKIE['favjob']),'useridjob'=>@explode(',',$_COOKIE['useridjob'])));
		}else{
			$historyM = $this->MODEL('history');
			$lookjob = $historyM->lookJobHistory($this->uid);
			$favjob  = $historyM->favjobHistory($this->uid);
			$useridjob  = $historyM->useridjobHistory($this->uid);
			
			$this->cookie->SetCookie("lookjob",$lookjob,time() + 86400);
      		$this->cookie->SetCookie("favjob",$favjob,time() + 86400);
			$this->cookie->SetCookie("useridjob",$useridjob,time() + 86400);
			
			$this->yunset(array('lookjob'=>@explode(',',$lookjob),'favjob'=>@explode(',',$favjob),'useridjob'=>@explode(',',$useridjob)));
		}
		$url = $_SERVER["REQUEST_URI"];
		$citys = strstr(strstr($url, '-list', TRUE), '-city');
		$citys = str_replace("-city_","",$citys);
		$citys = @explode('_',$citys);
		if($citys[0]){
			$_GET['provinceid']=$citys[0];
		}
		if($citys[1]){
			$_GET['cityid']=$citys[1];
		}
		if($citys[2]){
			$_GET['three_cityid']=$citys[2];
		}
		$lists = strstr(strstr($url, '.html', TRUE), '-list_');
		$lists = str_replace("-list_","",$lists);
		$lists = @explode('_',$lists);
		if($lists[0]){
			$_GET['edu']=$lists[0];
		}
		if($lists[1]){
			$_GET['uptime']=$lists[1];
		}
		if($lists[2]){
			$_GET['pr']=$lists[2];
		}
		if($lists[3]){
			$_GET['job1']=$lists[3];
		}
		if($lists[4]){
			$_GET['job1_son']=$lists[4];
		}
		if($lists[5]){
			$_GET['job_post']=$lists[5];
		}
		if($lists[6]){
			$_GET['page']=$lists[6];
		}
		$key = @explode('.html?',$url);
		if($key[1]){
			$_GET['keyword']=$key[1];
		}
		$this->seo("ws");
		$this->yunset('def','1');
		$_GET['is_graduate']=1;
		$this->public_action();
		$this->school_tpl('job');
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
    function add_school_academy_action(){
        $id=$_POST['id'];
        $uid=$this->uid;
        $usertype=$this->usertype;
        $value['uid']=$uid;
        $value['sc_uid']=$id;
        $value['usertype']=$usertype;
        $value['sc_usertype']=5;
        $value['time']=time();
        $nid=$this->obj->insert_into('atn',$value);
        if($nid){
            
            $arr['msg']='关注成功！';
			$arr['status']=9;
        }else{
            
            $arr['msg']='关注失败！';
			$arr['status']=8;
        }
        echo json_encode($arr);die;
    }
    function del_xjh_action(){
        $this->obj->DB_delete_all("atn","`xjhid`='".intval($_GET['id'])."' AND `uid`='".$this->uid."'");
		$this->obj->member_log("取消关注宣讲会");
 		$this->layer_msg('取消关注宣讲会成功！',9,0,"index.php?m=school&c=xjh",5,3);
    }
    function del_school_academy_action(){
        
        if($_GET['id']){
			$this->obj->DB_delete_all("atn","`sc_uid`='".intval($_GET['id'])."' AND `uid`='".$this->uid."'");
			$this->obj->member_log("取消关注院校",5,3);
 			$this->layer_msg('取消关注院校成功！',9,0,"index.php?m=school&c=academyshow&id=".$_GET['id']);
		}
    }
	function report_action(){
		session_start();
		$AskM=$this->MODEL('ask');
		if(md5(strtolower($_POST['authcode']))!=$_SESSION['authcode']  || empty($_SESSION['authcode'])){
			unset($_SESSION['authcode']);
			echo 1;die;
		}
		$row=$AskM->GetReportOne(array('p_uid'=>$this->uid,'eid'=>(int)$_POST['id'],'c_uid'=>(int)$_POST['x_uid'],'usertype'=>$this->usertype));
		if(is_array($row)){
			echo 2;die;
		}
		$data=array('c_uid'=>(int)$_POST['x_uid'],'inputtime'=>time(),'p_uid'=>$this->uid,'usertype'=>(int)$this->usertype,'eid'=>(int)$_POST['id'],'r_name'=>$this->stringfilter($_POST['c_name']),'username'=>$this->username,'r_reason'=>$this->stringfilter($_POST['e_reason']).'@'.$this->stringfilter($_POST['r_reason']),'did'=>$this->userdid,'type'=>'3');
		$nid=$AskM->AddReport($data);
		if($nid){
			echo 3;die;
		}else{
			echo 4;die;
		}
	}

}
?>