<?php
 
function smarty_function_webspecial($paramer,&$smarty){
		 global $config;
 		include(PLUS_PATH."/indextpl.cache.php");
		if($_GET['tpltype']){
			$tplindex=$indextpl[$_GET['tpltype']];
		}else{
			$time=time();
			foreach($indextpl as $key=>$v){
				if($v['status']==1 && $v['stime']<$time && $v['etime']>$time){
					$tplindex=$v;
					break;
				}
			}
		}
		
		if($tplindex['pic']&&file_exists(APP_PATH.$tplindex['pic'])){
			$tplindex['pic']=$config['sy_weburl'].'/'.$tplindex['pic'];
			$content='';
			if($tplindex['pic']){
				if($tplindex['height']>0){
					$height='$(".hp_head").css("margin-top","50px");';
				}
				
				$content.='<script>
						window.onload = function() {
							$("body").css("background","#f8f8f8 url('.$tplindex['pic'].') no-repeat center top");
							$(".hp_head").css("background","none");
							'.$height.'
						}; 
					 </script>';					
			}
			if($tplindex['se']==1){
				$content.='<script src="'.$config['sy_weburl'].'/js/grayscale.js" language="javascript"></script>
					 <script>grayscale(document.body);</script>';
			}
			return $content;
		}
	}
?>