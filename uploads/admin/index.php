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
include(dirname(dirname(__FILE__))."/global.php");

if($_GET['m'] && !preg_match("/^[0-9a-zA-Z\_]*$/",$_GET['m'])){
	$_GET['m'] = 'index';
}
global $config;

if(is_numeric($config['did'])){
    header('Location:/siteadmin/');die;
}
$model = $_GET['m'];
$action = $_GET['c'];
if($model=="")	$model="index";
if($action=="")	$action = "index";

$Module = explode("\\",str_replace("/","\\",getcwd()));
if(end($Module)){$ModuleName=end($Module);}else{$ModuleName='admin';}
require(APP_PATH.'app/public/common.php');
require(APP_PATH.$ModuleName.'/adminCommon.class.php');
require("model/".$model.'.class.php');
$adminDir = $ModuleName;
$conclass=$model.'_controller';
$actfunc=$action.'_action';
session_start();

$views=new $conclass($phpyun,$db,$db_config["def"],"admin");
if(!method_exists($views,$actfunc)){
	$views->DoException();
}

$views->$actfunc();
?>