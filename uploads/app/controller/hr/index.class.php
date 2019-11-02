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
class index_controller extends common{
	function index_action()
	{
		if($this->config['sy_hr_web']=="2")
		{
			header("location:".Url('error'));
		}
		$this->seo("hrindex");
		$this->yun_tpl(array('index'));
	}
	function list_action()
	{
		if($this->config['sy_hr_web']=="2")
		{
			header("location:".Url('error'));
		}
		$this->yunset("keyword",$_GET['keyword']);
		$this->yunset("id",$_GET['id']);
		$Hr=$this->MODEL("hr");
		$class=$Hr->GetToolboxClassOne(array("id"=>(int)$_GET['id']));
		$list=$Hr->GetToolboxClassAll();
		$this->yunset("list",$list);
		$this->yunset("class",$class);
		if(trim($_GET['keyword'])){
			$data['hr_class']=trim($_GET['keyword']);
		}else{
			$data['hr_class']=$class['name'];
		}
		$data['hr_desc']=$class['content'];
		$this->data=$data;
		$this->seo("hrlist");
		$this->yun_tpl(array('list'));
	}
	function ajax_action(){
		if($_POST['id']){
            $ID=(int)$_POST['id'];
			$Hr=$this->MODEL("hr");
			$Hr->UpdateToolboxDoc(array("`downnum`=`downnum`+1"),array("id"=>$ID));
			$row=$Hr->GetToolboxDocOne(array("id"=>$ID));
			echo $this->config['sy_weburl'].$row['url'];die;
		}
	}
}
?>
