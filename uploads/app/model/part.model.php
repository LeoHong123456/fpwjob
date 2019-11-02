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
class part_model extends model{
	
    function GetPartJobOne($Where=array(),$Options=array()){
		$WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('partjob',$WhereStr,$FormatOptions['field']);
    }
    
    function AddPartJobHits($id){
        $this->DB_update_all("partjob","`hits`=`hits`+1","`id`='".$id."'");
    }
	
    function GetPartCollectOne($Where=array(),$Options=array()){
		$WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('part_collect',$WhereStr,$FormatOptions['field']);
    }
    
    function AddPartCollect($Values=array()){
        return $this->insert_into('part_collect',$Values);
    }
	
    function GetPartApplyOne($Where=array(),$Options=array()){
		$WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('part_apply',$WhereStr,$FormatOptions['field']);
    }
    
    function AddPartApply($Values=array()){
        return $this->insert_into('part_apply',$Values);
    }
}
?>