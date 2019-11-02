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
class search_controller extends company
{
	function index_action(){
		$this->public_action();
		$urlarr["c"]="search";
		$where="`uid`='".$this->uid."'";
		if(trim($_GET['keyword'])){
			$where.=" and name like '%".trim($_GET['keyword'])."%'";
			$urlarr['keyword']=trim($_GET['keyword']);
		}
		$urlarr["page"]="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("company_job",$where,$pageurl,"10","`id`,`name`,`state`,`sdate`,`edate`,`lastupdate`,`jobhits`");
		if(is_array($rows) && !empty($rows))
		{
			foreach($rows as $v)
			{
				$jobid[]=$v['id'];
			}
			$jobrows=$this->obj->DB_select_all("userid_job","`job_id` in (".pylode(',',$jobid).")");
			if(is_array($jobrows))
			{
				foreach($jobrows as $v)
				{
					$jobnum[$v['job_id']]++;
				}
			}
		}
		$this->company_satic();
		$this->yunset("jobnum",$jobnum);
		$this->yunset("js_def",3);
		$this->com_tpl('search');
	}
}
?>