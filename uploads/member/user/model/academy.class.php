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
class academy_controller extends user{
	function index_action(){
		$this->public_action();
        $CacheM=$this->MODEL('cache');
	    $CacheList=$CacheM->GetCache(array('city','school'));
	    $this->yunset($CacheList);
        $city_name=$CacheList['city_name'];
		$urlarr=array("c"=>"atnlt","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("atn","`uid`='".$this->uid."' and `sc_usertype`='5' order by `id` desc",$pageurl,"10");
		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$uids[]=$val['sc_uid'];
			}
			$academy=$this->obj->DB_select_all("school_academy","`id` in(".pylode(',',$uids).")");
			foreach($rows as $key=>$val){
                    $rows[$key]['time']=$val['time'];
				foreach($academy as $v){
					if($val['sc_uid']==$v['id']){
                        $rows[$key]['schoolname_n']=$v['schoolname'];
                        $rows[$key]['provinceid_n']=$city_name[$v['provinceid']];
                        $rows[$key]['cityid_n']=$city_name[$v['cityid']];
						
					}
				}
			}
		}
		$this->yunset("rows",$rows);
 		$this->user_tpl('academy');
	}
	function del_action(){
		if($_GET['id']){
			$this->obj->DB_delete_all("atn","`id`='".intval($_GET['id'])."' AND `uid`='".$this->uid."'");
			$this->obj->member_log("取消关注院校",5,3);
 			$this->layer_msg('取消关注院校成功！',9,0,"index.php?c=academy");
		}
	}
}
?>