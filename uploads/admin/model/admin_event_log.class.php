<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class admin_event_log_controller extends adminCommon{
	function set_search(){
		$search_list[]=array("param"=>"usertype","name"=>'用户类型',"value"=>array("1"=>"个人用户","2"=>"企业用户"));
		$search_list[]=array("param"=>"times","name"=>'滞留时间',"value"=>array("1"=>"1分钟内","2"=>"1-2分钟内","3"=>"2-5分钟内","4"=>"5分钟以上"));
		$search_list[]=array("param"=>"opera","name"=>'操作行为',"value"=>array("1"=>"基本信息","2"=>"简历","3"=>"职位","4"=>"财务","5"=>"账户认证"));
		$search_list[]=array("param"=>"status","name"=>'行为结果',"value"=>array("3"=>"未操作","1"=>"操作完成","2"=>"操作失败"));
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		
		$this->set_search();
	    $where=$mwhere="1";
		
		if($_GET['keyword']){
			if($_GET['type']==1){
				$mwhere.=" and `username` like '%".trim($_GET['keyword'])."%'";
			}
		}
		if($_GET['usertype']){
			$where.=" and `usertype`='".$_GET['usertype']."'"; 
			$urlarr['usertype']=$_GET['usertype'];
		}

		if($_GET['times']){
			if($_GET['times']==1){
				$where.=" and `second` < '60'"; 
			}else if($_GET['times']==2){
				$where.=" and `second` > '60' and `second` < '120'"; 
			}else if($_GET['times']==3){
				$where.=" and `second` > '120' and `second` < '300'"; 
			}else if($_GET['times']==4){
				$where.=" and `second` > '300'"; 
			}
			$urlarr['times']=$_GET['times'];
		}

		if($_GET['time']){
			$times=@explode('~',$_GET['time']);
	        $where.=" and `timein` >='".strtotime($times[0]."00:00:00")."' and `timein` <='".strtotime($times[1]."23:59:59")."'";
	        $urlarr['time']=$_GET['time'];
	    }

		if($_GET['opera']){
			
			if($_GET['opera']==1){
				$where.=" and `opera`= 10 or `opera`=11 ";
			}else if($_GET['opera']==2){
				$where.=" and `opera`=21 or `opera`=22";
			}else if($_GET['opera']==3){
				$where.=" and `opera`>30 and `opera`<39";
			}else if($_GET['opera']==4){
				$where.=" and `opera`>40 and `opera`<49";
			}else if($_GET['opera']==5){
				$where.=" and `opera`=12 or `opera`=13";
			}
			$urlarr['opera']=$_GET['opera'];
		}

		if($_GET['status']){
			if($_GET['status']==1){
				$where.=" and `status`=1  or `status`=10 or `status`=11 or `status`=12";
			}else if($_GET['status']==2){
				$where.=" and `status`=2";
			}else{
				$where.=" and `status`=0 ";
			}

			$urlarr['status']=$_GET['status'];
		}
		
		if($mwhere!='1'){
			$username=$this->obj->DB_select_all("member",$mwhere,"`username`,`uid`");
			if($username && is_array($username)){
			    $muids=array();
			    foreach($username as $val){
			        $muids[]=$val['uid'];
			    }
			    $where.=" and `uid` in (".@implode(',',$muids).")";
			}else{
			    $where="";
			}
		}
		 
		$where .=" order by `timeout` desc";
 		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("user_log",$where,$pageurl,$this->config['sy_listnum']);
		if(is_array($rows)&&$rows){
			foreach($rows as $v){
				$uids[]=$v['uid'];
				if($v['orderid']!=''){
					$orderids[]=$v['orderid'];
				}
			}

 			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uids).")","`username`,`uid`");
			$orders=$this->obj->DB_select_all("company_order","`order_id` in (".@implode(",",$orderids).")","`order_id`,`order_type`,`order_state`");
			include (APP_PATH."/config/db.data.php");

			foreach($rows as $k=>$v){
				foreach($member as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['username']=$val['username'];
					}
				}
				
				if($v['second']>60){
					
					$h = floor(($v['second'] % (3600*24)) / 3600);
					$m = floor((($v['second'] % (3600*24)) % 3600) / 60);
					$s = floor((($v['second'] % (3600*24)) % 3600 % 60));

 					if($h!='0'){
						$rows[$k]['seconds']=$h.'时'.$m.'分';
					}else if($m!='0'){
						if($m>4){
							$rows[$k]['seconds']='5分钟以上';
						}else{
							$rows[$k]['seconds']=$m.'分'.$s.'秒';
						}
					} 
				}else{
					$rows[$k]['seconds']=$v['second'].'秒';
				}
				
				foreach($orders as $val){
					if($v['orderid']==$val['order_id']){
						$rows[$k]['order_type_n']=$arr_data['pay'][$val['order_type']];
						$rows[$k]['order_state']=$val['order_state'];
					}
				}
			}
		}

		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_event_log'));
	}

	function del_action(){
		$this->check_token();
		
	    if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
	    		if(is_array($del)){
					$layer_type=1;
					$this->obj->DB_delete_all("user_log","`id` in(".@implode(',',$del).")","");
					$del=@implode(',',$del);
		    	}else{
					$this->obj->DB_delete_all("user_log","`id`='$del'");
					$layer_type=0;
		    	}
				$this->layer_msg('记录(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg('请选择您要删除的信息！',8,0,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	}
}

?>