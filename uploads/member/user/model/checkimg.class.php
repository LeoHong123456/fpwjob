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
class checkimg_controller extends user{
	function index_action(){
		if($_POST["subuppic"]){
			$UploadM=$this->MODEL('upload');
			$upload=$UploadM->Upload_pic("../data/upload/user/",false);
			$pictures=$upload->picture($_FILES['file']);
			$UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER']);
			if($pictures){
				list($width, $height, $type, $attr) = getimagesize($pictures);
				$f1="<img src='$pictures' id='ImageDrag'>";
				$f2="<img src='$pictures' id='ImageIcon'>";
				echo '<script language="javascript">parent.$("#ImageDragContainer").html("'.$f1.'");parent.$("#IconContainer").html("'.$f2.'");parent.$("#bigImage").val("'.$pictures.'");parent.run('.$width.','.$height.');</script>';
				echo "<script>location.href='index.php?m=index&c=checkimg'</script>";exit;
			}else{
				echo "<script>alert('上传文件失败');</script>";
				echo "<script>location.href=''</script>";exit;
			}
		}
		$this->user_tpl('checkimg');
	}
}
?>