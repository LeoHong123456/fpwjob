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
class fav_subject_controller extends user{

	function index_action(){
		$this->public_action();
		$urlarr=array("c"=>"fav_subject","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("px_subject_collect","`uid`='".$this->uid."' order by id desc",$pageurl,"30");

		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$sid[]=$val['sid'];
			}
			$subject=$this->obj->DB_select_all("px_subject","`id` in(".pylode(',',$sid).")","`id`,`name`,`address`,`pic`");
			foreach($rows as $key=>$val){
				foreach($subject as $v){
					if($val['sid']==$v['id']){
						$rows[$key]['name']=$v['name'];
						$rows[$key]['address']=$v['address'];
						if($v['pic']){
							$rows[$key]['pic']=$v['pic'];
						}else{
							$rows[$key]['pic']=$this->config['sy_pxsubject_icon'];
						}
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->user_tpl('fav_subject');
	}
	function del_action(){
		if($_GET['id']){
			$del=(int)$_GET['id'];
			$nid=$this->obj->DB_delete_all("px_subject_collect","`id`='".$del."' and `uid`='".$this->uid."'");
			if($nid){
				$this->obj->member_log("删除收藏的课程",5,3);
				$this->layer_msg('取消成功！',9,0,"index.php?c=fav_subject");
			}else{
				$this->layer_msg('取消失败！',8,0,"index.php?c=fav_subject");
			}
		}
	}
}
?>