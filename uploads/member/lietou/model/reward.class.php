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
class reward_controller extends lietou{
	function index_action(){
		$this->public_action();
		$this->yunset("class",14);
		$packM = $this->MODEL('pack');
		$job = $packM->getRewardJob((int)$_GET['jobid'],'1');
		$this->yunset('job',$job);
		$urlarr=array("c"=>"talent","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("lt_talent","`uid`='".$this->uid."' order by id desc",$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $key=>$value){
				$id[] = $value['id'];
			}
			
			$rewardList = $this->obj->DB_select_all('company_job_rewardlist',"`eid` IN (".pylode(',',$id).") AND `status` NOT IN ('18','19','20','21','23','26','27','28','29')");
			if(is_array($rewardList)){ 
				foreach($rewardList as $key=>$value){
					$rewardStatusId[] = $value['eid'];
				}
				foreach($rows as $key=>$value){
					if(in_array($value['id'],$rewardStatusId)){
						$rows[$key]['rewardstatus'] = '1';
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		
		$CacheM = $this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('com'));
        $this->yunset($CacheList);
		$this->yunset($this->MODEL('cache')->GetCache(array('city','user')));
		$this->lietou_tpl('talent_reward');
	}
	
	function sqjob_action(){	
		$packM = $this->MODEL('pack');
		$return  = $packM->sqRewardJob($_POST['jobid'],$this->uid,$this->usertype,$_POST['eid']);
		echo json_encode($return);
	}
}
?>