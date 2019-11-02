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
class YunQrcode {

	
	static function generatePng2($inputContent,$size){
		require_once LIB_PATH."phpqrcode.php";
		return QRcode::png($inputContent, false, QR_ECLEVEL_L, $size);
	}
}


?>