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

if($_GET['id']){
	
	$id = intval($_GET['id']);
	include_once("../outside/".$id.".php");
	$list = $content;
	echo "document.write('$list');";
}
?>