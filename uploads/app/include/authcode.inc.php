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

error_reporting(0);

include(dirname(dirname(dirname(__FILE__)))."/data/plus/config.php");

include(dirname(dirname(dirname(__FILE__)))."/app/include/verify.class.php");

$capth = new verify($config['code_width'],$config['code_height'],$config['code_strlength'],$config['code_filetype'],$config['code_type']);

$capth->entry(); 

?>