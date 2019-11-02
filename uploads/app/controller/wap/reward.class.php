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
class reward_controller extends common{
	
	function index_action(){
		$packM = $this->MODEL('pack');
		$shareJob = $packM->getShareJob();
		
		$this->yunset("uid",$this->uid);
		$this->yunset("rows",$shareJob);
		$this->seo('reward');
		$this->yunset("headertitle","赏金职位");
		$this->yunset("topplaceholder","请输入职位关键字,如：会计...");
		$this->yuntpl(array('wap/reward'));
	}
	
	function share_action(){
		$packM = $this->MODEL('pack');
		$shareJob = $packM->getShareJob();
		
		$this->yunset("uid",$this->uid);
		$this->yunset("rows",$shareJob);
		$this->seo('reward');
		$this->yunset("headertitle","分享赚赏金");
		if(is_weixin()){
			$this->yunset('isweixin','1');
		}
		$this->yuntpl(array('wap/rewardshare'));
	}

	function shareshow_action(){
		
		
		
		

		$packM = $this->MODEL('pack');

		if(is_weixin()){
			$wxUser = $packM->getWxOpenid(Url('wap').'index.php?c=reward&a=shareshow&id='.$_GET['id'].'&u='.$_GET['u']);
		}
		
		
		$shareJobOne = $packM->getShareJobOne($_GET['id']);
		if(empty($shareJobOne)){
			header('Location:'.Url('wap',array('c'=>'job','a'=>'view','id'=>$_GET['id'])));
		}else{
			
			if($wxUser['openid'] && !empty($shareJobOne)){
				
				$packM->shareJobLook($shareJobOne,$_GET['u'],$wxUser['openid']);

			}
			$CacheM=$this->MODEL('cache');
			$CacheArr=$CacheM->GetCache(array('job','city','hy','com'));
			$data['job_name']=$shareJobOne['name'];
			$data['company_name']=$shareJobOne['com_name'];
			$data['industry_class']=$CacheArr['industry_name'][$shareJobOne['hy']];
			$data['job_class']=$CacheArr['job_name'][$shareJobOne['job1']].",".$CacheArr['job_name'][$shareJobOne['job1_son']].",".$CacheArr['job_name'][$shareJobOne['job_post']];
			$data['job_desc']=$this->GET_content_desc($shareJobOne['description']);
			$this->data=$data;
			$this->seo('rewardshare');
			$shareJobOne['cityname'] = $CacheArr['city_name'][$shareJobOne['cityid']];
			if($shareJobOne['maxsalary']>0){
				$shareJobOne['salary'] = $shareJobOne['minsalary'].'-'.$shareJobOne['maxsalary'].'元/月';
			}elseif($shareJobOne['minsalary']>0){
				$shareJobOne['salary'] = $shareJobOne['minsalary'].'以上/月';
			}
			$this->yunset('title',$shareJobOne['salary'].' '.$shareJobOne['cityname'].$shareJobOne['com_name'].'现在招聘 '.$shareJobOne['name'].'， 赶紧来看看吧！');
			$this->yunset('description',$data['job_desc']);
			if($this->uid){
				$this->yunset("shareurl",Url('wap',array('c'=>'reward','a'=>'shareshow','id'=>$shareJobOne['id'],'u'=>$this->uid)));
			}else{
				$this->yunset("shareurl",Url('wap',array('c'=>'reward','a'=>'shareshow','id'=>$shareJobOne['id'])));
			}
			if($this->uid&&$this->usertype&&$this->usertype!=1){
				$typename=array('2'=>'企业账户','3'=>'猎头账户','4'=>'培训账户');
				$this->yunset("usertypemsg","您当前帐号名为：<span class='job_user_name_s'>".$this->username.'</span>，属于'.$typename[$this->usertype].'。');
			}

			$this->yunset("row",$shareJobOne);
			$this->yunset("headertitle","分享赚赏金");
			
			$this->yuntpl(array('wap/rewardshareshow'));
		}
	}

	function ajaxreward_action(){
		

		if($_GET['jobid']){
			$packM = $this->MODEL('pack');
		
			$return  = $packM->veriftyUser($_GET['jobid'],$this->uid,$this->usertype);
			
			if($return['error']=='1' || $return['error']=='7' ){
				
				$reward = $this->obj->DB_select_once("company_job_reward","`jobid`='".$return['data']['jobid']."'");
				
				$this->yunset('error',$return['error']);
				$this->yunset('rdata',$return['data']);
				$this->yunset('reward',$reward);
				
			}elseif($return['error']=='12' || $return['error']=='11'){
				
				header('Location: member/index.php?c=talentreward&jobid='.$_GET['jobid']);
			
			}else{

				if($return['error']<1){
					$data['msg']='请先登录个人账户！';
					$data['url']=Url('wap',array('c'=>'login'));
				}elseif($return['error']=='2'){
					$data['msg']='请先创建一份合适的简历！';
					$data['url']=$this->config['sy_wapdomain'].'/member/index.php?c=resume';
				}elseif($return['error']=='10'){
					$data['msg']='您的简历正在审核，暂无法申请！';
					$data['url']=$this->config['sy_wapdomain'].'/member/index.php?c=resume';
				}else{
					$data['msg']=$return['msg'];
					$data['url']=Url('wap',array('c'=>'job','a'=>'view','id'=>$_GET['jobid']));
				}
				
				$this->yunset("layer",$data);
			}
			$this->yunset("backurl",Url('wap',array('c'=>'job','a'=>'view','id'=>$_GET['jobid'])));
			$this->yunset("headertitle","赏金申请");
			$this->yunset("jobid",$_GET['jobid']);
			$this->seo('reward');
			$this->yuntpl(array('wap/sqreward'));
		}
	}
	
	function sqreward_action(){
		
		if($_GET['jobid']){
			$packM = $this->MODEL('pack');
			
			$return  = $packM->sqRewardJob((int)$_GET['jobid'],$this->uid,$this->usertype);
			
			if($return['error']=='1'){
			    
			    if($this->config['sy_push_open']==1){
			        $jobM = $this->MODEL('job');
			        $job = $jobM->GetComjobOne(array('id'=>(int)$_GET['jobid']),array('field'=>'uid,name'));
			        $resumeM = $this->MODEL('resume');
			        $resume = $resumeM->SelectResume(array('uid'=>$this->uid),'`name`');
			        $content = mb_substr('赏金职位：'.$job['name'].'有新的申请', 0, 24, 'UTF-8');
			        $this->makePush($resume['name'], $content, $job['uid']);
			    }
				$data['msg']='申请成功！';
				$data['url']=Url('wap',array('c'=>'job','a'=>'view','id'=>(int)$_GET['jobid']));
			}else{

				if($return['error']<1){
					$data['msg']='请先登录个人账户！';
					$data['url']=Url('wap',array('c'=>'login'));
				}elseif($return['error']=='2'){
					$data['msg']='请先创建一份合适的简历！';
					$data['url']=$this->config['sy_wapdomain'].'/member/index.php?c=resume';
				}elseif($return['error']=='10'){
					$data['msg']='您的简历正在审核，暂无法申请！';
					$data['url']=$this->config['sy_wapdomain'].'/member/index.php?c=resume';
				}elseif($return['error']=='7'){
					$data['msg']='您暂不符合相关要求！';
					$data['url']=Url('wap',array('c'=>'job','a'=>'view','id'=>(int)$_GET['jobid']));
				}else{
					$data['msg']=$return['msg'];
					$data['url']=Url('wap',array('c'=>'job','a'=>'view','id'=>$_GET['jobid']));
				}
				$this->yunset("jobid",$_GET['jobid']);
				
			}
			
			$this->yunset("backurl",Url('wap',array('c'=>'job','a'=>'view','id'=>$_GET['jobid'])));
			$this->yunset("headertitle","赏金申请");
			$this->yunset("layer",$data);
			$this->yuntpl(array('wap/sqreward'));
		}
	    
	}
	
}
?>