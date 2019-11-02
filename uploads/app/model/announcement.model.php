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
class announcement_model extends model{
	
    function UpdateAnnouncement($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('admin_announcement',$ValuesStr,$WhereStr);
    }
    
    function AddAnnouncement($Values=array()){
        return $this->insert_into('admin_announcement',$Values);
    }
    
    function GetAnnouncementOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('admin_announcement',$WhereStr,$FormatOptions['field']);
    }
    
    function DeleteAnnouncement($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('admin_announcement',$WhereStr,"");
    }
}
?>