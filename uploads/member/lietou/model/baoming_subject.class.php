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
class baoming_subject_controller extends lietou{

	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$urlarr=array("c"=>"baoming_subject","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("px_baoming","`uid`='".$this->uid."' order by id desc",$pageurl,"10");

		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$sid[]=$val['sid'];
				$s_uid[]=$val['s_uid'];
				$ids[]=$val['id'];
			}
			$subject=$this->obj->DB_select_all("px_subject","`id` in(".pylode(',',$sid).")","`id`,`name`,`pic`,`price`,`isprice`");
			$train=$this->obj->DB_select_all("px_train","`uid` in(".pylode(',',$s_uid).")","`uid`,`name`");
			$order=$this->obj->DB_select_all("company_order","`sid` in(".pylode(',',$ids).") and `type`=6","`id`,`sid`,`order_state`");
			foreach($rows as $key=>$val){
				foreach($subject as $v){
					if($val['sid']==$v['id']){
						$rows[$key]['name']=$v['name'];
						if($v['pic']){
							$rows[$key]['pic']=$v['pic'];
						}else{
							$rows[$key]['pic']=$this->config['sy_pxsubject_icon'];
						}
						$rows[$key]['price']=$v['price'];
						$rows[$key]['isprice']=$v['isprice'];
					}
				}
				foreach($train as $v){
					if($val['s_uid']==$v['uid']){
						$rows[$key]['train_name']=$v['name'];
					}
				}
				foreach($order as $v){
					if($val['id']==$v['sid']){
						$rows[$key]['order_state']=$v['order_state'];
						$rows[$key]['oid']=$v['id'];
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->lietou_tpl('baoming_subject');
	}

	function del_action(){
		if($_GET['id']){
			$del=(int)$_GET['id'];
			$nid=$this->obj->DB_delete_all("px_baoming","`id`='".$del."' and `uid`='".$this->uid."'");
			$this->obj->DB_delete_all("company_order","`sid`='".$del."' and `uid`='".$this->uid."'");
			if($nid){
				$this->obj->member_log("取消报名的课程",6,3);
				$this->layer_msg('取消成功！',9,0,"index.php?c=baoming_subject");
			}else{
				$this->layer_msg('取消失败！',8,0,"index.php?c=baoming_subject");
			}
		}
	}
}
?>