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
class coupon_list_controller extends lietou
{
	function index_action(){
		$this->obj->DB_update_all("coupon_list","`status`='3'","`uid`='".$this->uid."' and `validity`<'".time()."' and `status`='1'");
		$this->public_action();
		$urlarr['c']='coupon_list';
		$urlarr["page"]="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("coupon_list","`uid`='".$this->uid."' order by id desc",$pageurl,"10");
		$this->yunset("class",33);
		$this->lietou_tpl('coupon_list');
	}

	function del_action(){
		if($_GET['id']){
			$nid=$this->obj->DB_delete_all("coupon_list","`uid`='".$this->uid."' and `id`='".intval($_GET['id'])."'");
			if($nid){
				$this->obj->member_log("删除优惠券",24,3);
				$this->layer_msg('删除成功！',9,0,"index.php?c=coupon_list");
			}else{
				$this->layer_msg('删除失败！',8,0,"index.php?c=coupon_list");
			}
		}
	}

}
?>