<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class hotkey_model extends model{
    function GetHotkeyNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('hot_key',$WhereStr);
    }
    function GetHotkeyOne($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('hot_key',$WhereStr,$FormatOptions['field']);
    }
    function GetHotkeyList($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options); 
        return $this->DB_select_all('hot_key',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function UpdateHotkey($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('hot_key',$ValuesStr,$WhereStr);
    }
}
?>