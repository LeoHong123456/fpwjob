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
class crmsync_controller extends adminCommon{

	function index_action(){
		

		$usercount = $this->obj->DB_select_num("company","`sync`='0' AND `name`<>'' AND (`linkphone`<>'' OR  `linktel`<>'')");
		$this->yunset("usercount",$usercount);
		$this->yunset("config",$this->config);
		$this->yuntpl(array('admin/admin_crmsync'));
	}
	
	function sync_action(){	
		set_time_limit(0);
		if($_POST['count'] && $_POST['limit']){
			
			$company = $this->obj->DB_select_all("company","`sync`='0' AND `name`<>'' AND (`linkphone`<>'' OR  `linktel`<>'') ORDER BY uid DESC limit ".$_POST['limit'],"`uid`,`name`,`hy`,`mun`,`provinceid`,`cityid`,`address`,`website`,`linkman`,`linkphone`,`linktel`,`linkmail`");
			if(is_array($company)){
				include PLUS_PATH."/com.cache.php";
				include PLUS_PATH."/industry.cache.php";
				include PLUS_PATH."/city.cache.php";				
				foreach($company as $key=>$value){ 
					$jsonvalue['uid'] = $value['uid'];
					$jsonvalue['name'] = $value['name'];
					$jsonvalue['hy'] = $industry_name[$value['hy']];
					$jsonvalue['comnum'] = $comclass_name[$value['mun']];
					$jsonvalue['area'] = $city_name[$value['provinceid']].$city_name[$value['cityid']];
					$jsonvalue['address'] =$value['address'];
					$jsonvalue['url'] = $value['website'];
					$jsonvalue['linkman'] = $value['linkman'];
					if(!$value['linkphone']){
						$jsonvalue['moblie'] = $value['linktel'];
					}else{
						$jsonvalue['moblie'] = $value['linkphone'];
					}
					$jsonvalue['email'] = $value['linkmail'];
					$Arr[] = $jsonvalue;
				}
				
				$Crmjson['crmjson'] = json_encode($Arr);
				
				$Crmjson['crmkey']  = $this->config['crmkey'];
				$Crmjson['crmname'] = $this->config['crmname'];
				
				
				$url = $this->config['sy_weburl'].'/crm/index.php?m=sync';
				
				$response = CurlPost($url,$Crmjson);
	
				$nowcount = count($company);
				$response = json_decode($response);
			
				if($response->state == '1')
				{
					if($response->uids)
					{
						$this->obj->DB_update_all("company","`sync`='1'","`uid` IN (".$response->uids.")");
						$nowcount = count(explode(',',$response->uids));
					}
					$count = $_POST['count']-$nowcount;
					if($count<=0)
					{
						echo json_encode(array('state'=>'0'));
					}else{
						echo json_encode(array('state'=>'1','count'=>$count));
					}
				}else{
					echo json_encode(array('state'=>'2'));
				}
			}
		}else{
			echo json_encode(array('state'=>'2'));
		}
	}

	
	function save_action(){
 		if($_POST["config"]){
		 unset($_POST["config"]);
		   foreach($_POST as $key=>$v){
		    	$config=$this->obj->DB_select_num("admin_config","`name`='$key'");
			   if($config==false){
				$this->obj->DB_insert_once("admin_config","`name`='$key',`config`='".$v."'");
			   }else{
				$this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='$key'");
			   }
		 	}
			$this->web_config(); 
			$this->ACT_layer_msg("网站配置设置成功！",9,1);
		 }
	}
}
?>