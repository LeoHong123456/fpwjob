<?php
/*
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
 */
class index_controller extends common{
	function index_action(){
		if((int)$_GET['id']){
			$id=(int)$_GET['id'];
			$gonggao=$this->obj->DB_select_once("admin_announcement","`id`='$id'");
			if($gonggao['id']==''){
				$this->ACT_msg($this->config['sy_weburl'],"没有找到该公告！");
			}
			$annou_last=$this->obj->DB_select_once("admin_announcement","`id`<'$id' order by `id` desc");
			if(!empty($annou_last)){
				$annou_last['url']=Url('announcement',array('id'=>$annou_last['id']));
			}
			$annou_next=$this->obj->DB_select_once("admin_announcement","`id`>'$id' order by `id` asc");
			if(!empty($annou_next)){
				$annou_next['url']=Url('announcement',array('id'=>$annou_next['id']));
			}
			$info=$gonggao;
			$data['gg_title']=$gonggao['title'];
			$description=$gonggao['description']?$gonggao['description']:$gonggao['content'];
			$data['gg_desc']=$this->GET_content_desc($gonggao['description']);
			$this->data=$data;
			$info["last"]=$annou_last;
			$info["next"]=$annou_next;
			$this->yunset("Info",$info);
	        $this->seo("announcement");
            $this->yun_tpl(array('show'));
		}else{
	        $this->seo("announcement_index");
			$this->yun_tpl(array('index'));
		}
	}
    function show_action(){

	    $this->seo("announcement");
        $this->yun_tpl(array('show'));
    }
}
?>
