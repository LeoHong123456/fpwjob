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
class site_model extends model{
	
	function GetSiteDomian($keyword,$id='1'){
       $Site = $this->DB_select_all("domain","`title` LIKE '%". $_POST['keyword'] ."%'");
		if(is_array($Site) && !empty($Site)){
			
			foreach($Site as $value){
				
				$siteHtml.='<option></option><option  value='.$value['id'].'>'.$value['title'].'</option>';
				
			}
			echo $siteHtml;
		}else{
			return 1;
		}
    }
	
    function UpDid($Table=array(),$Did,$Where){		
		foreach($Table as $value){		
			$this->DB_update_all($value,"`did`='".$Did."'",$Where);
		}        
    }	
}
?>