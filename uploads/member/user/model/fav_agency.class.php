<?php
/* *
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class fav_agency_controller extends user{
	function index_action(){
		$this->public_action();
		$urlarr=array("c"=>"fav_agency","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("atn","`uid`='".$this->uid."' and `tid`='' and `sc_usertype`='4' order by id desc",$pageurl,"20");

		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$sid[]=$val['sc_uid'];
			}
			$train=$this->obj->DB_select_all("px_train","`uid` in(".pylode(',',$sid).")","`uid`,`name`,`logo`");
			$sub=$this->obj->DB_select_all("px_subject","`uid` in(".pylode(',',$sid).")  and `status`=1 and `r_status`<>2","`id`,`uid`,`name`");
			foreach($sub as $v){
				$url=Url('train',array("c"=>"subshow","id"=>$v['id']));
				$subname[$v['uid']][]="<a href='".$url."' target='_bank'>".$v['name']."</a>";
			}
			foreach($rows as $key=>$val){
				foreach($train as $v){
					if($val['sc_uid']==$v['uid']){
						$rows[$key]['name']=$v['name'];
						if($v['logo']){
							$rows[$key]['logo']=$v['logo'];
						}else{
							$rows[$key]['logo']=$this->config['sy_px_icon'];
						}
					}
				}
				foreach($subname as $k=>$v){
					if($val['sc_uid']==$k){
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
		$this->user_tpl('fav_agency');
	}
	function del_action(){
		if($_GET['id']){
			$del=(int)$_GET['id'];
			$nid=$this->obj->DB_delete_all("atn","`id`='".$del."' and `uid`='".$this->uid."'  and `tid`='' and `sc_usertype`='4'");
			if($nid){
				$this->obj->member_log("取消关注的培训机构",5,3);
				$this->layer_msg('取消成功！',9,0,"index.php?c=fav_agency");
			}else{
				$this->layer_msg('取消失败！',8,0,"index.php?c=fav_agency");
			}
		}
	}
}
?>