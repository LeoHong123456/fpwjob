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
class consume_controller extends lietou{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->public_action();
		$where="`com_id`='".$this->uid."' order by `id` desc";
		$urlarr=array("c"=>"consume","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("company_pay",$where,$pageurl,"10");
		if($rows&&is_array($rows)){
			foreach($rows as $key=>$val){
				$rows[$key]['sname']=$arr_data['paystate'][$val['order_state']];
				$rows[$key]['order_type']=$arr_data['pay'][$val['order_type']];
			}
		}
		$this->yunset("rows",$rows);
		$this->lietou_tpl('consume');
	}
	function del_action(){
		if($this->usertype!='3' || $this->uid==''){
			$this->layer_msg('非法操作！',8,0,$_SERVER['HTTP_REFERER']);
		}else{
			$oid=$this->obj->DB_delete_all("company_order","`uid`='".$this->uid."' and `id`='".(int)$_GET['id']."' and `order_state`='1'");
			if($oid){
				$this->obj->member_log("取消订单",88,3);
				$this->layer_msg('取消成功！',9,0,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('取消失败！',8,0,$_SERVER['HTTP_REFERER']);
			}
		}
	}
}
?>