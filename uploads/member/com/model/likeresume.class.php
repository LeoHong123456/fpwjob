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
class likeresume_controller extends company{
	function index_action(){
		if($_GET['jobid']){
			
			$id=(int)$_GET['jobid'];
			$job=$this->obj->DB_select_once("company_job","`id`='".$id."'");
			$this->yunset("job",$job);

			$msg=$this->obj->DB_select_all("userid_msg","`fid`='".$this->uid."' AND jobid='".$id."' group by `uid`","`uid`");
			
			$select="a.id,a.uid,a.city_classid,a.job_classid,a.report,a.minsalary,a.maxsalary,b.edu,b.sex,b.marriage,b.exp,b.name";
			
			if($msg&&is_array($msg)){
				$uids=array();
				foreach($msg as $val){
					$uids[]=$val['uid'];
				}

				$where = "a.`id`=b.`def_job` and b.`uid` not in(".pylode(',',$uids).")";
				$where.=" and (FIND_IN_SET('".$job['job_post']."',a.job_classid) or FIND_IN_SET('".$job['job1']."',a.job_classid) or FIND_IN_SET('".$job['job1_son']."',a.job_classid)) ";

				$where.=" and (FIND_IN_SET('".$job['provinceid']."',a.city_classid) or FIND_IN_SET('".$job['cityid']."',a.city_classid) or FIND_IN_SET('".$job['three_cityid']."',a.city_classid)) ";

				$resume=$this->obj->DB_select_alls("resume_expect","resume",$where,$select);

			}else{

				$where = "a.`id`=b.`def_job`";

				$where.=" and (FIND_IN_SET('".$job['job_post']."',a.job_classid) or FIND_IN_SET('".$job['job1']."',a.job_classid) or FIND_IN_SET('".$job['job1_son']."',a.job_classid)) ";

				$where.=" and (FIND_IN_SET('".$job['provinceid']."',a.city_classid) or FIND_IN_SET('".$job['cityid']."',a.city_classid) or FIND_IN_SET('".$job['three_cityid']."',a.city_classid)) ";

				$resume=$this->obj->DB_select_alls("resume_expect","resume",$where,$select);
			} 

			if(is_array($resume)){ 
				include PLUS_PATH."/job.cache.php";
				include PLUS_PATH."/city.cache.php";
				include PLUS_PATH."/user.cache.php";
				include PLUS_PATH."/com.cache.php";
				include(CONFIG_PATH."db.data.php");
		        unset($arr_data['sex'][3]);
		        $this->yunset("arr_data",$arr_data);
				$this->yunset("userclass_name",$userclass_name);
				$this->yunset("comclass_name",$comclass_name);

				foreach($resume as $k=>$v){
					
					if ($v['sex']=='152'){
						$resume[$k]['sex']='女';
					}elseif ($v['sex']=='153'){
						$resume[$k]['sex']='男';
					}else {
						$resume[$k]['sex']=$arr_data['sex'][$v['sex']];
					}
					
					$job_classid=explode(",",$v['job_classid']);
					$jobname=array();
					if(is_array($job_classid)){
						foreach($job_classid as $v1){
							$jobname[]=$job_name[$v1];
						}
					}
					$resume[$k]['job_name']=implode(",",$jobname);
					
					$city_classid=@explode(",",$v['city_classid']);
					$citysname=array();
					if(is_array($city_classid)){
						foreach($city_classid as $v2){
							$citysname[]=$city_name[$v2];
						}
					}
					$resume[$k]['citys_name']=implode(",",$citysname);


						
					
					$pre=60;
					 
					if($comclass_name[$job['edu']]==$userclass_name[$v['edu']] || $comclass_name[$job['edu']]=="不限"){
						$pre=$pre+5;
					}
					if($job['sex']==$v['sex']){
						$pre=$pre+5;
					}
					if($comclass_name[$job['marriage']]==$userclass_name[$v['marriage']] || $comclass_name[$job['marriage']]=="不限"){
						$pre=$pre+5;
					}
					if($comclass_name[$job['report']]==$userclass_name[$v['report']] || $comclass_name[$job['report']]=="不限"){
						$pre=$pre+5;
					}
					if($comclass_name[$job['exp']]==$userclass_name[$v['exp']] || $comclass_name[$job['exp']]=="不限"){
						$pre=$pre+5;
					}
					$resume[$k]['pre']=$pre;
				}
				$sort = array(
					'direction' => 'SORT_DESC',
					'field'     => 'pre',    
				);
				$arrSort = array();
				foreach($resume AS $uniqid => $row){
				    foreach($row AS $key=>$value){
				        $arrSort[$key][$uniqid] = $value;
				    }
				}
				if($sort['direction']){
				    array_multisort($arrSort[$sort['field']], constant($sort['direction']), $resume);
				}
				
				$this->yunset("resume",$resume);
			}
		}
		$JobM=$this->MODEL("job");
		$company_job=$JobM->GetComjobList(array("uid"=>$this->uid,"state"=>1," `r_status`<>'2' and `status`<>'1'"),array("field"=>"`name`,`id`"));
		$this->yunset("company_job",$company_job);
		$this->public_action();
		$this->company_satic();
		$this->yunset("js_def",3);
		$this->com_tpl('likeresume');
	}
}
?>