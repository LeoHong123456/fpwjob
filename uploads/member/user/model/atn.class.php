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
class atn_controller extends user{
	function index_action(){
		$this->public_action();
		$urlarr=array("c"=>"atn","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("atn","`uid`='".$this->uid."' and `sc_usertype`='2' and (`xjhid`=0 OR `xjhid` is NULL) group by sc_uid order by `id` desc",$pageurl,"10");
		include PLUS_PATH."/com.cache.php";
		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$uids[]=$val['sc_uid'];
			}
            $time=time();
			$job=$this->obj->DB_select_all("company_job","`uid` in(".pylode(',',$uids).") and `status`<>1","`uid`,`name`,`id`");
			$company=$this->obj->DB_select_all("company","`uid` in(".pylode(',',$uids).")","`uid`,`name`,`pr`,`mun`,`sdate`");
			foreach($job as $v){
				$url=Url('job',array("c"=>"comapply","id"=>$v['id']));
				$jobname[$v['uid']][]="<a href='".$url."' target='_bank'>".$v['name']."</a>";
				
			}
			foreach($rows as $key=>$val){
				foreach($company as $v){
					if($val['sc_uid']==$v['uid']){
						$rows[$key]['com_name']=$v['name'];
						$rows[$key]['com_pr']=$comclass_name[$v['pr']];
						$rows[$key]['com_mun']=$comclass_name[$v['mun']];
						$sdate=explode('-',$v['sdate']);
						$rows[$key]['com_sdate']=$sdate[0];
					}
				}
				foreach($jobname as $k=>$v){
					if($val['sc_uid']==$k){
						$rows[$key]['jobnum']=count($v);
						$i=0;
						foreach($v as $value){
							if($i<2){
								$joblist[$key][]=$value;
							}
							$i++;
						}
						$rows[$key]['jobname']=@implode(",",$joblist[$key]);
					}
				}
			}
		}
		$this->yunset("rows", $rows);
 		$this->user_tpl('atn');
	}
	function del_action(){
		if($_GET['id']){
			$this->obj->DB_delete_all("atn","`id`='".intval($_GET['id'])."' AND `uid`='".$this->uid."'");
			$this->obj->DB_update_all("company","`ant_num`=`ant_num`-1","`uid`='".intval($_GET['uid'])."'");
			$this->obj->member_log("取消关注企业",5,3);
 			$this->layer_msg('取消关注成功企业！',9,0,"index.php?c=atn");
		}
	}
}
?>