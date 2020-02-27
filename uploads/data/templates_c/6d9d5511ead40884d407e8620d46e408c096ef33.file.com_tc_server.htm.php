<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:39:18
         compiled from "/www/fpwjob/uploads//app/template/member/com/com_tc_server.htm" */ ?>
<?php /*%%SmartyHeaderCode:20483829825e2e3f466b4609-88936221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d9d5511ead40884d407e8620d46e408c096ef33' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/com/com_tc_server.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20483829825e2e3f466b4609-88936221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'statis' => 0,
    'com_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3f4683a863_88074669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3f4683a863_88074669')) {function content_5e2e3f4683a863_88074669($_smarty_tpl) {?><?php echo '<script'; ?>
>
 

function accAdd(arg1,arg2){ 
	var r1,r2,m; 
	try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0} 
	try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0} 
	m=Math.pow(10,Math.max(r1,r2)) 
	return (arg1*m+arg2*m)/m 
} 
function accSub(arg1,arg2){ 
	return accAdd(arg1,-arg2); 
} 
function accMul(arg1, arg2) {
	var m = 0, s1 = arg1.toString(), s2 = arg2.toString();
	try { m += s1.split(".")[1].length } catch (e) { }
	try { m += s2.split(".")[1].length } catch (e) { }
	return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)
}
function accDiv(arg1,arg2){    
	var t1=0,t2=0,r1,r2;    
	try{t1=arg1.toString().split(".")[1].length}catch(e){}    
	try{t2=arg2.toString().split(".")[1].length}catch(e){}    
	with(Math){        
		r1=Number(arg1.toString().replace(".",""));        
		r2=Number(arg2.toString().replace(".",""));        
		return (r1/r2)*pow(10,t2-t1);    
	}
}

function myFunction(_this) {
    _this.value = _this.value.replace(/[^0-9]/g, '');
}



function checkSxNum(integral,integral_pro){
	var dkjf = $("#sxdkjf").val();
 	if(dkjf){
		$(".sxjfdkh_m").show();
	} 
	var need = $("#sxneed").text();
	var need_jifen = accMul(need, integral_pro);
  	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#sxdkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#sxdkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
	 
	if(dkjfh<=0){
		$("#sxdkjfh").html(0);
		$("#sxzf_div").hide();
		$("#sxzf_btn").show();
	}else{
		$("#sxdkjfh").html(dkjfh);
		$("#sxzf_div").show();
		$("#sxzf_btn").hide();
	}
 
}


function checkSxpNum(integral,integral_pro){
	var dkjf = $("#sxpdkjf").val();
 	if(dkjf){
		$(".sxpjfdkh_m").show();
	} 
	var need = $("#sxpneed").text();
	var need_jifen = accMul(need, integral_pro);
	
	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#sxpdkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#sxpdkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}

	if(dkjfh<=0){
		$("#sxpdkjfh").html(0);
		$("#sxpzf_div").hide();
		$("#sxpzf_btn").show();
	}else{
		$("#sxpdkjfh").html(dkjfh);
		$("#sxpzf_div").show();
		$("#sxpzf_btn").hide();
	}
}


function checkIssueLtNum(integral,integral_pro){
	var dkjf = $("#issuelt_dkjf").val();
 	if(dkjf){
		$(".issuelt_jfdkh_m").show();
	} 
	var need = $("#issuelt_need").text();
	var need_jifen = accMul(need, integral_pro);

	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#issuelt_dkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#issuelt_dkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}

	if(dkjfh<=0){
		$("#issuelt_dkjfh").html(0);
		$("#issueltzf_div").hide();
		$("#issueltzf_btn").show();
	}else{
		$("#issuelt_dkjfh").html(dkjfh);
		$("#issueltzf_div").show();
		$("#issueltzf_btn").hide();
	}
 
}
 

function checkSxltNum(integral,integral_pro){
	var dkjf = $("#sxltdkjf").val();
 	if(dkjf){
		$(".sxltjfdkh_m").show();
	} 
	var need = $("#sxltneed").text();
	var need_jifen = accMul(need, integral_pro);

	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#sxltdkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#sxltdkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
  	 
	if(dkjfh<=0){
		$("#sxltdkjfh").html(0);
		$("#sxltzf_div").hide();
		$("#sxltzf_btn").show();
	}else{
		$("#sxltdkjfh").html(dkjfh);
		$("#sxltzf_div").show();
		$("#sxltzf_btn").hide();
	}
 	
}
 

 
function sxzf(){ 
	var sxjobid = $('#sxjobid').val();
  	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{sxjobid:sxjobid},function(data){
		if(data){
			layer.closeAll('loading');
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='';
				}); 
    		}
		}
	})
}

function sxpzf(){
	var sxpartid = $('#partjobid').val();
  	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{sxpartid:sxpartid},function(data){
		if(data){
			layer.closeAll('loading');
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='';
				}); 
    		}
		}
	})
}

function issueltzf(){
  	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{issueltjob:1},function(data){
		if(data){
			layer.closeAll('loading');
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='index.php?c=lt_job&act=add';
				}); 
    		}
		}
	})
}

function sxltzf(){
	var sxltjobid = $('#sxltjobid').val();
  	var lt_breakjob_num = $('#lt_breakjob_num_sy').val();
 	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{sxltjobid:sxltjobid,lt_breakjob_num:lt_breakjob_num},function(data){
		if(data){
			layer.closeAll('loading');
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='';
				}); 
    		}
		}
	})
}

 
function issueLtJobOrder(pay_type){ 
 	$('#pay_type').val(pay_type);
 	var issuelt_dkjf = $('#issuelt_dkjf').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {issueltjob:1,issuelt_dkjf:issuelt_dkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_issuelt_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_issuelt').submit();
    		}
        }  
  	});
}

function refreshLtJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var sxltjobid = $('#sxltjobid').val();
  	var sxltdkjf = $('#sxltdkjf').val();
	var lt_breakjob_num = $('#lt_breakjob_num_sy').val();
 	var index = layer.load('执行中，请稍候...',0);
 	
 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {sxltjobid:sxltjobid,sxltdkjf:sxltdkjf,lt_breakjob_num:lt_breakjob_num},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_refreshpart_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_refresh').submit();
    		}
        }  
  	});
}

function refreshPartOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var sxpartid = $('#partjobid').val();
  	var sxpdkjf = $('#sxpdkjf').val();
  	var index = layer.load('执行中，请稍候...',0);
 	
 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {sxpartid:sxpartid,sxpdkjf:sxpdkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_refreshpart_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_refresh').submit();
    		}
        }  
  	});
}

function refreshJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var sxjobid = $('#sxjobid').val();
  	var sxdkjf = $('#sxdkjf').val();
  	var index = layer.load('执行中，请稍候...',0);
 	
 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {sxjobid:sxjobid,sxdkjf:sxdkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_refresh_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_refresh').submit();
    		}
        }  
  	});
}
 
function wxorderstatus(orderid) { 
	$.post('<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/api/wxpay/wxorder.php',{orderid:orderid},function(data){
		if(data==1){
			window.location.href='';
		}
	});
}

function pay_forms(){
	var pay_type=$("#pay_type").val();
	if(pay_type==''){
		layer.msg('请选择支付方式！', 2,8);
	}else if(pay_type == 'wxpay'){ 
		var orderId = $("#orderid").val();
		$.post('index.php?c=payment&act=wxurl',{orderId:orderId},function(data){
			$('.wx_payment_ewm').html(data);
			$.layer({
				type : 1,
				title :'微信扫码支付', 
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['320px','400px'],
				page : {dom :"#wxpayTx"}
			});
			setInterval("wxorderstatus("+orderId+")", 3000); 
		})
		return false;  
	} else{
		$.layer({
			type : 1,
			title :'提示',
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['450px','280px'],
			page : {dom :"#payshow"}
		});
	}
}
function rePay(){
	var orderId = $("#orderid").val();
	location.href="index.php?c=payment&id="+orderId;
}
<?php echo '</script'; ?>
>


 <div id="refresh"  style="display:none; ">
	<div class="job_recom_box">
		<input type="hidden" name="sxjobid" id="sxjobid" value=""/>
 
 		<div class="job_recom_list">

			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>

			<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
						<span id="sxneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="sxneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
</span>元
					<?php }?>
				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="sxdkjf" name="sxdkjf" onkeyup="checkSxNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>

		<div class="job_recom_list sxjfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="sxdkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>

		<div id="sxzf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_jobefresh']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?> style="display:none" <?php }?>>
			<form name="alipayment"  id="payform_refresh" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
						<div class="job_redpack_list_name">支付方式：</div>
						
						<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
						<div class="job_redpack_pay">
							<a href="javascript:;" onclick="refreshJobOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
						</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
						<div class="job_redpack_pay">
							<a href="javascript:;" onclick="refreshJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
						</div>
						<?php }?>

					<?php } else { ?>

						<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>

					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_refresh_id" value=""/>
					<input type="hidden" value="刷新职位金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="sxzf_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_jobefresh']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?> style="display:none" <?php }?> class="job_tck_bth_pd">
			<input type='button' value='确认支付' onClick="sxzf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>



 <div id="part_refresh"  style="display:none; ">
	<div class="job_recom_box">
		<input type="hidden" name="partjobid" id="partjobid" value=""/>
 
 		<div class="job_recom_list">
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>

			<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
						<span id="sxpneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_partjobefresh'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="sxpneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_partjobefresh'];?>
</span>元
					<?php }?>				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="sxpdkjf" name="sxpdkjf" onkeyup="checkSxpNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list sxpjfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="sxpdkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>
		<div id="sxpzf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_partjobefresh']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?> style="display:none" <?php }?>>
			<form name="alipayment"  id="payform_refresh" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="refreshPartOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="refreshPartOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php }?>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_refreshpart_id" value=""/>
					<input type="hidden" value="刷新兼职金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="sxpzf_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_partjobefresh']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?> style="display:none" <?php }?> class="job_tck_bth_pd">
			<input type='button' value='确认支付' onClick="sxpzf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>

 <div id="issue_ltjob"  style="display:none;">
	<div class="job_recom_box">
 		<div class="job_recom_list">
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>

			<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
						<span id="issuelt_need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_lt_job'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="issuelt_need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_job'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="issuelt_dkjf" name="issuelt_dkjf" onkeyup="checkIssueLtNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list issuelt_jfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="issuelt_dkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>
		<div id="issueltzf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_lt_job']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_issuelt" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="issueLtJobOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="issueLtJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php }?>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_issuelt_id" value=""/>
					<input type="hidden" value="发布职位金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="issueltzf_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_lt_job']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
			<input type='button' value='确认支付' onClick="issueltzf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>

 <div id="ltjob_refresh"  style="display:none; ">
	<div class="job_recom_box">
		<input type="hidden" name="sxltjobid" id="sxltjobid" value=""/>
 		<input type="hidden" id="lt_breakjob_num_sy" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_breakjob_num'];?>
"/>

 		<div class="job_recom_list">
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>

			<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
						<span id="sxltneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_lt_jobefresh'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="sxltneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_jobefresh'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="sxltdkjf" name="sxltdkjf" onkeyup="checkSxltNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list sxltjfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="sxltdkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>
		<div id="sxltzf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_lt_jobefresh']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_refresh" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="refreshLtJobOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="refreshLtJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php }?>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_refresh_ltjob_id" value=""/>
					<input type="hidden" value="刷新猎头职位金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="sxltzf_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_lt_jobefresh']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
			<input type='button' value='确认支付' onClick="sxltzf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>

<input type="hidden" name="orderid" id="orderid" value=""/>
  
 <div id="wxpayTx"  style="display:none;">
	<div class="wx_payment">
		<div class="wx_payment_cont"><div class="wx_payment_ewm">正在加载微信二维码,请稍候....</div> </div><div class="wx_payment_h2">二维码有效时长为2小时，请尽快支付</div>
		
		<div class="wx_payment_tip">
			<div class="wx_payment_tip_left">
				<i class="wx_payment_tip_line1"></i>
				<i class="wx_payment_tip_line2"></i>
				<i class="wx_payment_tip_line3"></i>
			</div> 
			<div class="wx_payment_tip_right">请使用微信扫一扫<br>扫描二维码支付</div>
		</div>
	</div>
</div>  

 <div id="payshow" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
	<div class="payment_tip">
		请在新打开的支付页面上完成付款，付款完成前请不要关闭此窗口。<br>
		如您在支付过程中遇到问题，请联系客服：<span class="payment_tip_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span>
	</div>
	
	<div class="payment_bottom">
		<a href="index.php?c=paylog" class="payment_bottombutt">已完成付款</a>
		<a href="javascript:;" onclick="rePay();" class="payment_bottom_bth2">重新支付</a>
	</div>
</div>


<?php }} ?>
