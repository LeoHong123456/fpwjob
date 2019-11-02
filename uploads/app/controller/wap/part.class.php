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
class part_controller extends common{
	function index_action(){
		$this->rightinfo();
		if($this->config['sy_part_web']=="2"){
			$data['msg']='很抱歉！该模块已关闭！';
			$data['url']='index.php';
			$this->yunset("layer",$data);
		}
		$this->get_moblie();
		$CacheM=$this->MODEL('cache');
        $CacheArr=$CacheM->GetCache(array('part','city'));
		$this->yunset($CacheArr);
		foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);
		$this->yunset('backurl',Url('wap'));
		$this->seo("part_index");
		$this->yunset("topplaceholder","请输入兼职关键字,如：小时工...");
		$this->yunset("headertitle","兼职");
		$this->yuntpl(array('wap/part'));
	}
	function show_action(){
		include(CONFIG_PATH."db.data.php");		
		$this->yunset("arr_data",$arr_data);
		if($this->config['sy_part_web']=="2"){
			$data['msg']='很抱歉！该模块已关闭！';
			$data['url']='index.php';
			$this->yunset("layer",$data);
		}
		$this->rightinfo();
		$this->get_moblie();
		if((int)$_GET['id']){
			$id=(int)$_GET['id'];
			$M=$this->MODEL("part");
			$job=$M->GetPartJobOne(array("id"=>$id));
			$job['sex'] =$arr_data['sex'][$job['sex']];
			if($job['id']){
			    $morning=array('0101','0201','0301','0401','0501','0601','0701');
			    $noon=array('0102','0202','0302','0402','0502','0602','0702');
			    $afternoon=array('0103','0203','0303','0403','0503','0603','0703');
			    $this->yunset(array('morning'=>$morning,'noon'=>$noon,'afternoon'=>$afternoon));
			    $job['worktime']=explode(',', $job['worktime']);
			    $UserInfoM=$this->MODEL('userinfo');
			    $com=$UserInfoM->GetUserinfoOne(array('uid'=>$job['uid']),array('usertype'=>2));
			    if($com['shortname']){
			    	$job['com_name']=$com['shortname'];
			    }
				$this->yunset("job",$job);
				$M->AddPartJobHits($id);
				if($this->usertype==1){
					$apply=$M->GetPartApplyOne(array("uid"=>$this->uid,"jobid"=>$id));
					$this->yunset("apply",$apply);
					$collect=$M->GetPartCollectOne(array("uid"=>$this->uid,"jobid"=>$id));
					$this->yunset("collect",$collect);
				}
				$this->yunset($this->MODEL('cache')->GetCache(array('city','part')));
			}else{
				$data['msg']='该兼职暂无法展示！';
				$data['url']='index.php';
				$this->yunset("layer",$data);
			}
		}
		$data['part_name']=$job['name'];
		$this->data=$data;
		$this->seo("part_show");
		$this->yunset("headertitle","兼职");
		$this->yuntpl(array('wap/part_show'));
	}
	function collect_action(){
		if($this->usertype!=1){
			echo 1;die;
		}else{
			$M=$this->MODEL("part");
			$row=$M->GetPartCollectOne(array("uid"=>$this->uid,"jobid"=>(int)$_POST['jobid']));
			if(!empty($row)){
				echo 2;die;
			}else{
				$data['uid']=$this->uid;
				$data['jobid']=(int)$_POST['jobid'];
				$data['comid']=(int)$_POST['comid'];
				$data['ctime']=time();
				$M->AddPartCollect($data);
				echo 0;die;
			}
		}
	}
	function apply_action(){
		if($this->usertype!=1){
			echo 1;die;
		}else{
			if($this->config['com_resume_partapply']==1){
				$Resume=$this->MODEL("resume");
				$arr=$Resume->SelectExpectOne(array("uid"=>$this->uid));
				if(empty($arr)){
					echo 3;die;
				}
			}
			$M=$this->MODEL("part");
			$job=$M->GetPartJobOne(array("id"=>(int)$_POST['jobid']));
			if($job['edate']<time()&&$job['edate']!=0){
					echo 5;die;
			}
			if($job['edate']&&$job['deadline']<time()){
				echo 4;die;
			}
			$row=$M->GetPartApplyOne(array("uid"=>$this->uid,"jobid"=>(int)$_POST['jobid']));
			if(!empty($row)){
				echo 2;die;
			}else{
				$data['uid']=$this->uid;
				$data['jobid']=$job['id'];
				$data['comid']=$job['uid'];
				$data['ctime']=time();
				$M->AddPartApply($data);
			    if($this->config['sy_email_set']=="1"){
        			$Member=$this->MODEL("userinfo");
        		    $user=$Member->GetUserinfoOne(array("uid"=>$job['uid']),array('usertype'=>2));
        		    $cuser=$Member->GetMemberOne(array("uid"=>$this->uid));
			        $fdata=$this->forsend(array("uid"=>$job['uid'],"usertype"=>"2"));
			        $data['type']="partapply";
			        $data['name']=$fdata['name'];
			        $data['uid']=$job['uid'];
			        $data['username']=$cuser['username'];
			        $data['email']=$user['linkmail'];
			        $data['moblie']=$user['linktel'];
			        $data['jobname']=$job['name'];
			        $notice = $this->MODEL('notice');
                    $notice->sendEmailType($data);
                    $notice->sendSMSType($data);
			    }
			    
			    if($this->config['sy_push_open']==1){
			        $resumeM = $this->MODEL('resume');
			        $resume = $resumeM->SelectResume(array('uid'=>$this->uid),'`name`');
			        $content = mb_substr('兼职：'.$job['name'].'有新的申请', 0, 24, 'UTF-8');
			        $this->makePush($resume['name'], $content, $job['uid']);
			    }
				$this->automsg('兼职：'.$job['name'].'有新的申请',$job['uid']);
				echo 0;die;
			}
		}
	}
}
?>