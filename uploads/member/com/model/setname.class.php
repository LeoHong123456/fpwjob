<?php
/* *
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
*/
class setname_controller extends company
{
	function index_action(){
		if($_POST['username']){
			$user=$this->obj->DB_select_once("member","`uid`='".$this->uid."'");
			if($user['restname']=="1"){
				echo "您无权修改账户！";die;
			}
			$username=$_POST['username'];
			if(mb_strlen($username)<2 || mb_strlen($username)>16){
				echo "请输入2-16位字符！";die;
				
			}elseif(CheckRegUser($username)==false && CheckRegEmail($username)==false){
				
				echo "请输入2-16用户名不得包含特殊字符！";die;
			}
			$num = $this->obj->DB_select_num("member","`username`='".$username."'");
			if($num>0){
				echo "用户名已存在！";die;
			}
			if($this->config['sy_regname']!=""){
				$regname=@explode(",",$this->config['sy_regname']);
				if(in_array($username,$regname)){
					echo "该用户名禁止使用！";die;
				}
			}
			$oldpass = md5(md5($_POST['password']).$user['salt']);
			if($user['password']!=$oldpass){
				echo "密码错误！";die;
			}
			 
		    $data['username']=$username;
		    $data['restname']=1;
			$this->obj->update_once('member',$data,array('uid'=>$this->uid));
			$this->cookie->unset_cookie();
			$this->obj->member_log("修改账户",11);
			echo 1;die;
		}
		$user=$this->obj->DB_select_once("member","`uid`='".$this->uid."'");
		if($user['restname']=="1"){
			$this->ACT_msg("index.php?c=binding", "您无权修改账户！");
		}
		$this->public_action();
		$this->yunset("js_def",7);
		$this->com_tpl('setname');
	}
}
?>