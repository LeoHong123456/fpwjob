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
class friend_model extends model{
    
    function GetStateAll($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('friend_state',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    
    function GetStatePage($Where=array(),$Options=array("limit"=>11)){
        $WhereStr=$this->FormatWhere($Where);
        $num=$this->DB_select_num('friend_state',$WhereStr);
        return ceil($num/$Options['limit']);
    }
    function InsertFriendState($Values=array()){
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_insert_once('friend_state',$ValuesStr);
    }

}
?>