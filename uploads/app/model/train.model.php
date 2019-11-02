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
class train_model extends model{
    function GetSubjectNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('px_subject',$WhereStr);
    }
	function GetTrainInfo($Where=array(),$Options=array('field'=>null,'orderby'=>null,'groupby'=>null,'limit'=>null)){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('px_train',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
	function GetTrainAll($Where=array(),$Options=array('field'=>null,'orderby'=>null,'groupby'=>null,'limit'=>null)){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('px_train',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
	function GetPxNum($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_num('px_train',$WhereStr,$FormatOptions['field']);
    }
    function GetSubjectOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('px_subject',$WhereStr,$FormatOptions['field']);
    }
    function GetBaomingOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('px_baoming',$WhereStr,$FormatOptions['field']);
    }
    function GetBaomingList($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('px_baoming',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function AddBaoming($Values=array()){
        return $this->insert_into('px_baoming',$Values);
    }
    function GetBaomingNum($Where=array()){
    	$WhereStr=$this->FormatWhere($Where);
    	return $this->DB_select_num('px_baoming',$WhereStr);
    }
    function GetBannerOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('px_banner',$WhereStr,$FormatOptions['field']);
    }
	function GetBannerAll($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('px_banner',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetSubjectCollectOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('px_subject_collect',$WhereStr,$FormatOptions['field']);
    }
    function GetSubjectCollectNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('px_subject_collect',$WhereStr);
    }
    function GetSubjectList($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('px_subject',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetTeacherOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('px_teacher',$WhereStr,$FormatOptions['field']);
    }
    function GetTeacherList($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('px_teacher',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
	function UpdateTeacher($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('px_teacher',$ValuesStr,$WhereStr);
    }
	function DeleteTeacher($Where=array()){
		$WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('px_teacher',$WhereStr,"");
    }
	function DeleteSubject($Where=array()){
		$WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('px_subject',$WhereStr,"");
    }
	function UpdateTrain($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('px_train',$ValuesStr,$WhereStr);
    }
    function GetNewsOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('px_train_news',$WhereStr,$FormatOptions['field']);
    }
    function GetNewsList($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('px_train_news',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
	function UpdateTrainNews($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('px_train_news',$ValuesStr,$WhereStr);
    }
	function DeleteTrainNews($Where=array()){
		$WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('px_train_news',$WhereStr,"");
    }
    function AddShow($Values=array()){
        return $this->insert_into('px_train_show',$Values);
    }
    function GetShowList($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('px_train_show',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetZixunList($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('px_zixun',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function UpdateSubject($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values); 
        return $this->DB_update_all('px_subject',$ValuesStr,$WhereStr);
    }
	function DeleteTrain($uids=''){
		$this->DB_delete_all("email_msg","`uid` in (".$uids.") or `cuid` in (".$uids.")"," ");
		$this->DB_delete_all("px_baoming","`s_uid` in (".$uids.")","");	
		$this->DB_delete_all("px_subject_collect","`s_uid` in (".$uids.")","");
		$this->DB_delete_all("px_zixun","`s_uid` in (".$uids.")","");
		$this->DB_delete_all("msg","`job_uid` in (".$uids.")","");
		$this->DB_delete_all("atn","`uid` in (".$uids.") or `scid` in (".$uids.")","");

		$this->DB_delete_all("member_log","`uid` in (".$uids.")","");
    }
}
?>