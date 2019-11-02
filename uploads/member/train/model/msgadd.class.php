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
class msgadd_controller extends train
{
	function index_action()
	{
		if($_POST['submit'])
		{
			$data['content']=trim($_POST['content']);
			$data['uid']=$this->uid;
			$data['username']=$this->username;
			$data['ctime']=mktime();
			$nid=$this->obj->insert_into("message",$data);
			if($nid)
			{
				$this->obj->member_log("反馈问题");
				$this->ACT_layer_msg("提交成功！",9,"index.php?c=msg");
			}else{
				$this->ACT_layer_msg("提交失败！",8,"index.php?c=msg");
			}
		}
		$this->public_action();
		$this->train_tpl('msgadd');
	}
}
?>