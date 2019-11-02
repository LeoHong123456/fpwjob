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

include(dirname(dirname(dirname(__FILE__)))."/global.php");
$pageType = 'wap';
$model = $_GET['m'];
$action = $_GET['c'];
if($model=="")	$model="index";
if($action=="")	$action = "index";

$usertype=$_COOKIE['usertype'];
if($usertype==2){
	$model="com";
}elseif($usertype==3){
	$model="lietou";
}elseif($usertype==4){
	$model="train";
}else{
	$model="index";
}

require(APP_PATH.'app/public/common.php');
require('wap.controller.php');
require("model/".$model.'.class.php');

$conclass=$model.'_controller';
$actfunc=$action.'_action';
$views=new $conclass($phpyun,$db,$db_config["def"],"wap_member");
if(!method_exists($views,$actfunc)){
	$views->DoException();
}

$views->$actfunc();
?>