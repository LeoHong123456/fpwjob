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


class log_model extends model{
	function admin_log($content, $opera = '', $type = '', $opera_id=''){
		if($_SESSION['auid'] && $_SESSION['ausername']&&$content){
			$value="`uid`='".$_SESSION['auid']."',";
			$value.="`username`='".$_SESSION['ausername']."',";
			$value.="`content`='".$content."',";
			$value.="`did`='".$this->config['did']."',";
			$value.="`ctime`='".time()."'";

			$value.=",`ip`='".fun_ip_get()."',";
			$value .= "`opera`='".$opera."',`type`='".$type."',`opera_id`='".$opera_id."'";
			
			$this->DB_insert_once("admin_log",$value);
		}
	}

	function member_log($content,$opera='',$type=''){
		if($_COOKIE['uid']){
			$value="`uid`='".(int)$_COOKIE['uid']."',";
			$value.="`usertype`='".(int)$_COOKIE['usertype']."',";
			$value.="`content`='".$content."',";
			$value.="`opera`='".$opera."',";
			$value.="`type`='".$type."',";
			$value.="`ip`='".fun_ip_get()."',";
			$value.="`ctime`='".time()."'";
			$this->DB_insert_once("member_log",$value);
		}
	}

	function addUserLog($data){
		if($data){
			$value="`uid`='".(int)$data['uid']."',";
			$value.="`usertype`='".(int)$data['usertype']."',";
			$value.= "`url`='".$data['url']."',";
			$value.= "`refer`='".$data['refer']."',";
			$value.= "`opera`='".$data['opera']."',";
			$value.= "`orderid`='".$data['orderid']."',";
			$value.= "`timein`='".$data['timeIn']."',";
			$out = $data['timeIn']+$data['second'];
			$value.="`timeout`='".$out."',";
			$value.="`second`='".$data['second']."'";
			$nid = $this->DB_insert_once("user_log",$value);
			return $nid;
		}
	}

	function updateUserLog($data){
		if($data['id']){
			$ul = $this->DB_select_once("user_log","`id`='".$data['id']."'","`timein`");
			$out = $ul['timein']+$data['second'];
			$value="`timeout`='".$out."',";
			$value.="`second`='".$data['second']."'";
			$nid = $this->DB_update_all("user_log",$value,"`id`='".$data['id']."'");
		}
	}
}
