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
class index_controller extends train
{
	function index_action()
	{
		$statis=$this->train_satic();
		$statis['integral']=number_format($statis['integral']);
 		$this->yunset("statis",$statis);
		$zixun=$this->obj->DB_select_all("px_zixun","`s_uid`='".$this->uid."' order by id desc limit 4");
		if(is_array($zixun)){
			foreach($zixun as $v){
				$uid[]=$v['uid'];
			}
			$minfo=$this->obj->DB_select_all('member','uid in('.pylode(',',$uid).')','uid,username');
			foreach($zixun as $k=>$v){
				foreach($minfo as $val){
					if($v['uid']==$val['uid']){
						$zixun[$k]['nickname']=$val['username'];
					}
				}
			}
		}
		$this->yunset("zixun",$zixun);
		$baoming=$this->obj->DB_select_alls("px_baoming","px_subject","a.sid=b.id and a.`s_uid`='".$this->uid."' order by a.id desc limit 4","a.*,b.name as sub_name");
		$this->yunset("baoming",$baoming);
		$subject_num=$this->obj->DB_select_num("px_subject","`uid`='".$this->uid."'");
		$this->yunset("subject_num",$subject_num);
		
		$baoming_num=$this->obj->DB_select_num("px_baoming","`s_uid`='".$this->uid."'");
		$this->yunset("baoming_num",$baoming_num);
		
		$zixun_num=$this->obj->DB_select_num("px_zixun","`s_uid`='".$this->uid."'");
		$this->yunset("zixun_num",$zixun_num);
		
		$this->public_action();
		$this->train_tpl('index');
	}
}
?>