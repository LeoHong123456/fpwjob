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
class atn_teacher_controller extends lietou{
	function index_action(){
		$this->public_action();
		$urlarr=array("c"=>"atn_teacher","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("atn","`uid`='".$this->uid."' and `tid`<>'' and `sc_usertype`='4' order by `id` desc",$pageurl,"20");
		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$tids[]=$val['tid'];
			}
			$tids=array_unique($tids);
			$teacher=$this->obj->DB_select_all("px_teacher","`id` in(".pylode(',',$tids).") and `status`=1 and `r_status`<>2","`name`,`id`,`pic`");
			$where=1;
			foreach ($tids as $k=>$v){
			    if($k==0){
			        $where1=" and (FIND_IN_SET('".$v."',`teachid`)";
			    }else{
			        $where1.=" or FIND_IN_SET('".$v."',`teachid`)";
			    }
			}
			$where1.=")";
			$subject=$this->obj->DB_select_all("px_subject",$where.$where1." and `status`=1 and `r_status`<>2","`uid`,`name`,`id`,`teachid`");
			foreach($subject as $v){
				$url=Url('train',array("c"=>"subshow","id"=>$v['id']));
				$teachids=explode(',', $v['teachid']);
				if (!empty($teachids)){
				    if (count($teachids)>1){
				       foreach ($teachids as $val){
				           $sname[$val][]="<a href='".$url."' target='_bank'>".$v['name']."</a>";
				       }
				    }else{
				        $sname[$v['teachid']][]="<a href='".$url."' target='_bank'>".$v['name']."</a>";
				    }
				}
			}
			foreach($rows as $key=>$val){
				foreach($teacher as $v){
					if($val['tid']==$v['id']){
						$rows[$key]['teacher']=$v['name'];
						if($v['pic']){
							$rows[$key]['pic']=$v['pic'];
						}else{
							$rows[$key]['pic']=$this->config['sy_pxteacher_icon'];
						}
					}
				}
				foreach($sname as $k=>$v){
					if($val['tid']==$k){
						$rows[$key]['snum']=count($v);
						$i=0;
						foreach($v as $value){
							if($i<2){
								$slist[$key][]=$value;
							}
							$i++;
						}
						$rows[$key]['sname']=@implode(",",$slist[$key]);
					}
				}
			}
		}
		$this->yunset("rows", $rows);
 		$this->lietou_tpl('atn_teacher');
	}
	function del_action(){
		if($_GET['id']){
			$this->obj->DB_delete_all("atn","`id`='".intval($_GET['id'])."' AND `uid`='".$this->uid."'");
			$this->obj->DB_update_all("px_teacher","`ant_num`=`ant_num`-1","`id`='".intval($_GET['tid'])."'");
			$this->obj->member_log("取消关注讲师",5,3);
 			$this->layer_msg('取消关注讲师成功！',9,0,"index.php?c=atn_teacher");
		}
	}
}
?>