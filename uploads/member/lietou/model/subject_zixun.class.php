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
class subject_zixun_controller extends lietou{
	function index_action(){
		$this->public_action();
		$urlarr=array("c"=>"subject_zixun","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("px_zixun","`uid`='".$this->uid."' order by id desc",$pageurl,"20");

		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$sid[]=$val['s_uid'];
			}
			$train=$this->obj->DB_select_all("px_train","`uid` in(".pylode(',',$sid).")","`uid`,`name`,`logo`");
			$sub=$this->obj->DB_select_all("px_subject","`uid` in(".pylode(',',$sid).") and `status`=1 and `r_status`<>2","`id`,`uid`,`name`");
			foreach($sub as $v){
				$url=Url('train',array("c"=>"subshow","id"=>$v['id']));
				$subname[$v['uid']][]="<a href='".$url."' target='_bank'>".$v['name']."</a>";
			}
			foreach($rows as $key=>$val){
				foreach($train as $v){
					if($val['s_uid']==$v['uid']){
						$rows[$key]['name']=$v['name'];
						if($v['logo']){
							$rows[$key]['logo']=$v['logo'];
						}else{
							$rows[$key]['logo']=$this->config['sy_px_icon'];
						}
					}
				}
				foreach($subname as $k=>$v){
					if($val['s_uid']==$k){
						$rows[$key]['num']=count($v);
						$i=0;
						foreach($v as $value){
							if($i<2){
								$sublist[$key][]=$value;
							}
							$i++;
						}
						$rows[$key]['subname']=@implode(",",$sublist[$key]);
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->lietou_tpl('subject_zixun');
	}
	function del_action(){
		if($_GET['id']){
			$del=(int)$_GET['id'];
			$nid=$this->obj->DB_delete_all("px_zixun","`id`='".$del."' and `uid`='".$this->uid."'");
			if($nid){
				$this->obj->member_log("删除培训机构留言",18,3);
				$this->layer_msg('删除成功！',9,0,"index.php?c=subject_zixun");
			}else{
				$this->layer_msg('删除失败！',8,0,"index.php?c=subject_zixun");
			}
		}
	}
}
?>