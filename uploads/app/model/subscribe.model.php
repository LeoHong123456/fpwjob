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
class subscribe_model extends model{
    function GetSubscribeOnce($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('subscribe',$WhereStr,$FormatOptions['field']);
    }
    function UpdateSubscribe($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('subscribe',$ValuesStr,$WhereStr);
    }
    function AddSubscribe($Values=array()){
        return $this->insert_into('subscribe',$Values);
    }
}
?>