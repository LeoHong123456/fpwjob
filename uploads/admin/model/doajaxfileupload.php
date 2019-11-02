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
		$files=$_FILES['fileToUpload'];
		move_uploaded_file($files['tmp_name'],"../../data/web_img/water.png");
		echo "{";
		echo		"url: 'dddddd',\n";
		echo		"s_thumb: 'dddddddddd'\n";
		echo "}";

?>