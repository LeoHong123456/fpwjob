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
class announcement_controller extends common{
	function index_action(){
		if((int)$_GET['id']){
			$id=(int)$_GET['id'];
			$M=$this->MODEL('announcement');
			$row=$M->GetAnnouncementOne(array("id"=>$id));
			$row['content']=str_replace(array("&nbsp;","&"),array(" ","&amp;"),$row['content']);
			preg_match_all('/<img(.*?)src=("|\'|\s)?(.*?)(?="|\'|\s)/',$row['content'],$res);
			
			if(!empty($res[3])){
				foreach($res[3] as $v){
					if(strpos($v,'http:')===false && strpos($v,'https:')===false){
					  
						$row['content'] = str_replace($v,$this->config['sy_weburl'].$v,$row['content']);
					}
				}
			}
			$this->yunset("row",$row);
			
			$data['gg_title']=$row['title'];
			$data['gg_desc']=$this->GET_content_desc($row['description']);
			$this->data=$data;
			$this->seo("announcement");

			$this->yunset("headertitle","网站公告");
			$this->yuntpl(array('wap/announcements'));
		}else{
			$this->yunset("title","公告列表");
			$this->yunset("headertitle","网站公告");
	        $this->seo("announcement_index");
			$this->yuntpl(array('wap/announcement'));
		}
		
	}	
}
?>