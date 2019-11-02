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
class right_controller extends lietou{
	function index_action(){
		$rows=$this->obj->DB_select_all("company_rating","`display`='1' and `service_price` > 0 and `category`='2' and `type`='1' order by `type` asc,`sort` asc");
		if(is_array($rows)){
			$coupon=$this->obj->DB_select_all("coupon","1","`id`,`name`");
			foreach($rows as $k=>$v){
				foreach($coupon as $val){
					if($v['coupon']==$val['id']){
						$rows[$k]['coupon']=$val['name'];
					}
				}
			}
		}
		$this->public_action();
		$this->yunset("rows",$rows);
		$this->yunset("class","29");
		$this->lietou_tpl('member_right');
	}
	function time_action(){
		$rows=$this->obj->DB_select_all("company_rating","`display`='1' and `service_price` > 0 and `category`='2' and `type`='2' order by `type` asc,`sort` asc");
		if(is_array($rows)){
			$coupon=$this->obj->DB_select_all("coupon","1","`id`,`name`");
			foreach($rows as $k=>$v){
				foreach($coupon as $val){
					if($v['coupon']==$val['id']){
						$rows[$k]['coupon']=$val['name'];
					}
				}
			}
		}

		$this->public_action();
		$this->yunset("rows",$rows);
		$this->yunset("class","29");
		$this->lietou_tpl('member_time');
	}
	function added_action(){
		$id=intval($_GET['id']);
		$rows=$this->obj->DB_select_all("lt_service","`display`='1' order by `id` ");
		if ($id){
			$info=$this->obj->DB_select_all("lt_service_detail","`type`='".$id."' order by `service_price` asc");
		}else{
			$row=$this->obj->DB_select_once("lt_service","`display`='1'","id");
			$info=$this->obj->DB_select_all("lt_service_detail","`type` = '".$row['id']."' order by `service_price` asc");
		}
		$statis=$this->obj->DB_select_once("lt_statis","`uid`='".$this->uid."'");
		if ($statis){
			$rating=$statis['rating'];
			$discount=$this->obj->DB_select_once("company_rating","`id`=$rating");
			$this->yunset("discount",$discount);
		}
		$this->public_action();
		$this->yunset("statis",$statis);
		$this->yunset("info",$info);
		$this->yunset("rows",$rows);
		$this->lietou_tpl('added');
	}
}
?>