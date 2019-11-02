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
 session_start();
include(dirname(dirname(__FILE__)).'/global.php');
include_once(LIB_PATH.'public.wapdomain.php');
$pageType = 'wapadmin';
$Dir = str_replace("/","\\",dirname(__FILE__));
$DirNameList=explode('\\',$Dir);
$ModuleName=end($DirNameList);
$DirName   = end($DirNameList);
//判断是否来源于微信

include(LIB_PATH.'init.php');
?>