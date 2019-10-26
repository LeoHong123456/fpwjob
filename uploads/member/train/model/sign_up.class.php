<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class sign_up_controller extends train
{
	function index_action()
	{
		if($_POST['status']=="1"){
			if(is_array($_POST['delid'])){
    			$delid=pylode(",",$_POST['delid']);
	    	}
	    	$oid=$this->obj->DB_update_all("px_baoming","`status`='1'","`id` in (".$delid.") and `s_uid`='".$this->uid."'");
			if($oid){
				$this->obj->member_log("报名信息设为已联系",6,2);
				$this->layer_msg('设置成功！',9,1,"index.php?c=sign_up");
			}else{
				$this->layer_msg('设置失败！',8,0,"index.php?c=sign_up");
			}
		}
		if($_POST['delid'] || $_GET['delid']){
    		if(is_array($_POST['delid'])){
    			$delid=pylode(",",$_POST['delid']);
				$layer_type='1';
	    	}else{
	    		$delid=(int)$_GET['delid'];
				$layer_type='0';
	    	}
			$this->obj->DB_delete_all("company_order","`sid` in (".$delid.") and `type`='6'","");
			$oid=$this->obj->DB_delete_all("px_baoming","`id` in (".$delid.") and `s_uid`='".$this->uid."'","");
			if($oid){
				$this->obj->member_log("删除报名信息",6,3);
				$this->layer_msg('删除成功！',9,$layer_type,"index.php?c=sign_up");
			}else{
				$this->layer_msg('删除失败！',8,$layer_type,"index.php?c=sign_up");
			}
	    }
		$_GET['status']=intval($_GET['status']);
		if($_GET['status']=="1"){
			$where="`status`='1' and ";
			$urlarr['status']=$_GET['status'];
		}elseif($_GET['status']=="2"){
			$where="`status`='0' and ";
			$urlarr['status']=$_GET['status'];
		}
		$urlarr['c']="news";
		$urlarr['page']="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("px_baoming",$where."`s_uid`='".$this->uid."' order by id desc",$pageurl,"10");
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		if(is_array($rows)){
			foreach($rows as $v){
				$sid[]=$v['sid'];
				$ids[]=$v['id'];
			}
			$subject=$this->obj->DB_select_all("px_subject","`id` in (".pylode(",",$sid).")","id,name,isprice");
			$order=$this->obj->DB_select_all("company_order","`sid` in (".pylode(",",$ids).")","order_state,sid");
			foreach($rows as $k=>$v){
				foreach($subject as $val){
					if($v['sid']==$val['id']){
						$rows[$k]['sub_name']=$val['name'];
						$rows[$k]['isprice']=$val['isprice'];
					}
				}
				foreach($order as $val){
					if($v['id']==$val['sid']){
						$rows[$k]['order_state']=$val['order_state'];
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('sign_up');
	}
}
?>