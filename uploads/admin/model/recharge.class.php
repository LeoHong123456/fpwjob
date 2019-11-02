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
class recharge_controller extends adminCommon{
	function index_action(){
		
		extract($_POST);
		if(isset($_POST['insert'])){
			$userarr=str_replace('，', ',', trim($userarr));
			$userarr=@explode(',',trim($userarr));
			if(is_array($userarr)){
				$uidarr=array();
				$snum=$fnum=0;
				foreach($userarr as $k=>$v){
					$userarr=$this->obj->DB_select_once("member","`username`='".trim($v)."'");
					if(is_array($userarr)){
						$snum++;
						$uidarr[$k]['uid']=$userarr['uid'];
						$uidarr[$k]['usertype']=$userarr['usertype'];
						$uids[]=$userarr['uid'];
					}else{
						$fnum++;
						$fname[]=$v;
					}
				}
			}
			unset($_POST['userarr']);
			unset($_POST['type']);
			unset($_POST['fs']);
			unset($_POST['price_int']);
			unset($_POST['order_price']);
			unset($_POST['insert']);
			unset($_POST['remark']); 
			$num=$price_int;
			$msg=$price_int.$this->config['integral_pricename']; 
			$fsmsg=$fs==1?"充值":"扣除";
			if(is_array($uidarr)){
				foreach($uidarr as $v){ 
					if($v['usertype']=="1"){
						$table="member_statis";
					}elseif($v['usertype']=="2"){
						$table="company_statis";
					}elseif($v['usertype']=="3"){
						$table="lt_statis";
					}
					if($fs==2){
						$statis=$this->obj->DB_select_once($table,"`uid`='".$v['uid']."'","pay,integral");
						if($statis['integral']<$num){
							$num=$statis['integral'];
						} 
					}
					$nid=$this->pay_member($table,$v['uid'],$num,$remark,$v['usertype'],$fs);
				}
			}
			if($nid){
				if($fnum){
					$nummsg="，".$fnum."个用户名(".@implode(',',$fname).")不存在";
				}
				$this->ACT_layer_msg($snum."个会员(ID:".@implode(',',$uids).")".$fsmsg.$msg."成功".$nummsg."！",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				if($fnum){
					$fmsg="用户名(:".@implode(',',$fname).")不存在，";
				}
				$this->ACT_layer_msg($fmsg.$fsmsg."失败！",8);
			}
		}else{
		    $rating_list = $this->obj->DB_select_all("company_rating","`category`=1 AND `display`=1");
		    $this->yunset("rating_list",$rating_list);
		}
		$this->yuntpl(array('admin/admin_recharge'));
	}
	function pay_member($table,$uid="",$num,$remark,$usertype,$fs){
		$dingdan=mktime().rand(10000,99999);

		if($fs==1){
			$type=true;
			$integral_v="`integral`=`integral`+$num";
			$_POST['order_type']="adminpay";
		}else{
			$type=false;
			$integral_v="`integral`=`integral`-$num";
			$_POST['order_type']="admincut";
		}
		$_POST['order_id']=$dingdan;
		$_POST['order_price']=$num/$this->config['integral_proportion'];
		$_POST['order_time']=mktime();
		$_POST['order_state']="2";
		$_POST['order_remark']=$remark;
		$_POST['uid']=$uid; 
		$_POST['type']=2; 
		$_POST['integral']=$num;
		$nid=$this->obj->DB_update_all($table,$integral_v,"`uid`='".$uid."'"); 
		if($fs==2)$_POST['type']=5;
		if($nid){
			$this->MODEL('integral')->insert_company_pay($num,2,$uid,$remark,1,'',$type); 
			$nid=$this->obj->insert_into("company_order",$_POST);
		}
		return $nid;
	}
	function ajax_viptype_action(){
		extract($_POST);
		$vip = $this->obj->DB_select_once("company_rating","`id`='$id'");
		if(is_array($vip)){
			if($vip['service_price']==""){
				$vip['service_price']="0";
			}
			echo $vip['service_price'];
		}
	}
	function comvip_action(){
	    if ($_POST['username']=='' && $_POST['comname']==''){
	        $this->ACT_layer_msg('用户名和企业名称不能全为空',8);
	    }
	    if ($_POST['ratingid']==''){
	        $this->ACT_layer_msg('请选择开通等级',8);
	    }
	    if ($_POST['vipprice']==''){
	        $this->ACT_layer_msg('请填写开通价格',8);
	    }
	    if ($_POST['username']!=''){
	        $member = $this->obj->DB_select_once("member","`username`='".trim($_POST['username'])."' AND `usertype`=2",'`uid`');
	        if (!$member){
	            $this->ACT_layer_msg('企业用户名('.$_POST['username'].')不存在',8);
	        }
	    }elseif ($_POST['comname']!=''){
	        $member = $this->obj->DB_select_once("company","`name`='".trim($_POST['comname'])."'",'`uid`');
	        if (!$member){
	            $this->ACT_layer_msg('企业名称('.$_POST['username'].')不存在',8);
	        }
	    }
	    $rating = $this->obj->DB_select_once("company_rating","`id`='".intval($_POST['ratingid'])."'");
	    
	    $leijia = intval($_POST['leijia']);
	    $ratingM = $this->MODEL('rating');
	    $newstatis=$ratingM->rating_info($rating['id'],$member['uid'],$leijia);
	    $nid=$this->obj->DB_update_all("company_statis",$newstatis,"`uid`='".$member['uid']."'");
	    if ($nid){
	        $time=time();
	        $dingdan=$time.rand(10000,99999);
	        $order['order_id']=$dingdan;
	        $order['order_price']=$_POST['vipprice'];
	        $order['type']='1';
	        $order['order_time']=$time;
	        $order['order_state']="2";
	        $order['order_remark']="管理员开通会员套餐";
	        $order['uid']=$member['uid'];
	        $order['did']=$this->config['did'];
	        $order['rating']=$rating['id'];
	        $order['order_type']="adminpay";
	        $this->obj->insert_into("company_order",$order);
	        $this->ACT_layer_msg("企业会员(ID".$member['uid'].")开通会员套餐【".$rating['name']."】成功",9,$_SERVER['HTTP_REFERER'],2,1);
	    }else{
	        $this->ACT_layer_msg('开通会员套餐失败',8,$_SERVER['HTTP_REFERER']);
	    }
	}
	function searchname_action(){
	    if ($_POST['username']==''){
	        $this->ACT_layer_msg('用户名不能为空',8);
	    }
	    $member = $this->obj->DB_select_all("member","`username` like '%".trim($_POST['username'])."%' AND `usertype`=2 limit 10",'`uid`,`username`');
	    if ($member){
	        foreach ($member as $v){
	            $comid[]=$v['uid'];
	        }
	        $company = $this->obj->DB_select_all("company","`uid` in (".@pylode(',', $comid).") limit 10",'`uid`,`name`');
	        foreach ($member as $k=>$v){
	            $namelist[$k]['username']=$v['username'];
	            foreach ($company as $val){
	                if ($v['uid']==$val['uid']){
	                    $namelist[$k]['comname']=$val['name'];
	                }
	            }
	        }
	        $data['error']=0;
	        $data['namelist']=$namelist;
	    }else{
	        $data['error']=-1;
	    }
	    echo json_encode($data);die;
	}
	function searchcom_action(){
	    if ($_POST['comname']==''){
	        $this->ACT_layer_msg('企业名称不能为空',8);
	    }
	    $company = $this->obj->DB_select_all("company","`name` like '%".trim($_POST['comname'])."%' limit 10",'`uid`,`name`');
	    if ($company){
	        foreach ($company as $v){
	            $comid[]=$v['uid'];
	        }
	        $member = $this->obj->DB_select_all("member","`uid` in (".@pylode(',', $comid).") limit 10",'`uid`,`username`');
	        foreach ($company as $k=>$v){
	            $namelist[$k]['comname']=$v['name'];
	            foreach ($member as $val){
	                if ($v['uid']==$val['uid']){
	                    $namelist[$k]['username']=$val['username'];
	                }
	            }
	        }
	        $data['error']=0;
	        $data['namelist']=$namelist;
	    }else{
	        $data['error']=-1;
	    }
	    echo json_encode($data);die;
	}
}
?>