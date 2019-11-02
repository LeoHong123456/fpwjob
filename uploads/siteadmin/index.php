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
include(dirname(dirname(__FILE__)).'/global.php');

//判断是否处于分站下,未处于分站下应当跳转到总站后台
global $config;
if(!is_numeric($config['did'])){
    header('Location:/admin/');die;
}

$DirNameList=explode('\\',dirname(__FILE__));
//默认情况下，调用app/controller下与当前目录名相同的模块
//如当前目录名为ask，则默认调用的是app/controller/ask/下的控制器
//若需要调用与当前目录名不同的模块，则请修改此处的$ModuleName
//$ModuleName='job'，则此时将调用app/controller/job/下的控制器
$DirName=end($DirNameList);$ModuleName='siteadmin';$siteAdminDir='siteadmin';
$_GET['a']=$_GET['c'];$_GET['c']=$_GET['m'];//$_GET['m']='';
session_start(); 
include(LIB_PATH.'init.php');
?>