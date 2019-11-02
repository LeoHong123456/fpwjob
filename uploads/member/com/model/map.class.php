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
class map_controller extends company
{
	function index_action(){
		$row=$this->obj->DB_select_once("company","`uid`='".$this->uid."'","x,y,address,provinceid,cityid,three_cityid");
		$this->yunset("row",$row);
		$this->public_action();
		$this->company_satic();
		$this->yunset($this->MODEL('cache')->GetCache(array('city')));
		$this->yunset("js_def",2);
		$this->com_tpl('map');
	}
	function save_action(){
		$IntegralM=$this->MODEL('integral');
	    $_POST=$this->post_trim($_POST);
		if($_POST['savemap']){
			$row = $this->obj->DB_select_once("company","`uid`='".$this->uid."'","`x`,`y`");
			if($row['x'] == "" && $row['y'] == ""){
				$IntegralM->get_integral_action($this->uid,"integral_map","设置企业地图");
			}

			$data['x']=(float)$_POST['xvalue'];
			$data['y']=(float)$_POST['yvalue'];
			
			$oid=$this->obj->update_once("company",$data,array("uid"=>$this->uid));
			if($oid){
				$this->obj->DB_update_all("company_job","`x`='".$data['x']."',`y`='".$data['y']."'","`uid`='".$this->uid."'");
			}
			if ($_POST['type']=='info'){
			    if($oid){
			        $this->obj->member_log("设置企业地图",15);
			        echo 1;
					die;
			    }else{
			        echo 0;
					die;
			    }
			}else{
			    if($oid){
			        $this->obj->member_log("设置企业地图",15);
			        $this->ACT_layer_msg("地图设置成功！",9,"index.php?c=map");
			    }else{
			        $this->ACT_layer_msg("地图设置失败，请稍后再试！",8,$_SERVER['HTTP_REFERER']);
			    }
			}
		}
	}
}
?>