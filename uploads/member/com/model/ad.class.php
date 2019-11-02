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
class ad_controller extends company
{
	function index_action()
	{
		$this->public_action();
		$this->company_satic();
		$this->yunset("js_def",4);
		$rows=$this->obj->DB_select_all("ad_class","`type`='1'");
		if($rows&&is_array($rows)){
			foreach($rows as $k=>$v){
				if($v['href']&&file_exists(str_replace('./',APP_PATH,$v['href']))){
					$rows[$k]['hrefn']=str_replace('./',$this->config['sy_weburl'].'/',$v['href']);
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->yunset("js_def",4);
		$this->com_tpl('ad');
	}
	function adinfo_action()
	{
		if($_GET['id'])
		{
			$row=$this->obj->DB_select_once("ad_class","`id`='".(int)$_GET['id']."' and `type`='1'");
			if($row['id'])
			{
				$this->public_action();
				$this->company_satic();
				$this->yunset("js_def",4);
				$this->yunset("row",$row);
				$this->com_tpl('buyad');
			}else{
				$this->ACT_msg("index.php?c=ad","非法操作！");
			}
		}
	}
}
?>