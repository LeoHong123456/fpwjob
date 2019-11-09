<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:43:00
         compiled from "/www/fpwjob/uploads//app/template/member/com/issuejob_server.htm" */ ?>
<?php /*%%SmartyHeaderCode:562364815dc51c845a6743-34400651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc53abb7a353ce2aaaae7029903b139572d81688' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/com/issuejob_server.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562364815dc51c845a6743-34400651',
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
  'unifunc' => 'content_5dc51c8467a6d7_85415348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51c8467a6d7_85415348')) {function content_5dc51c8467a6d7_85415348($_smarty_tpl) {?><?php echo '<script'; ?>
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
 

function checkIssueNum(integral,integral_pro){
	var dkjf = $("#issue_dkjf").val();
 	if(dkjf){
		$(".issue_jfdkh_m").show();
	} 
	var need = $("#issue_need").text();
	var need_jifen = accMul(need, integral_pro);

	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#issue_dkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#issue_dkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
  	 
	if(dkjfh<=0){
		$("#issue_dkjfh").html(0);
		$("#issuezf_div").hide();
		$("#issuezf_btn").show();
	}else{
		$("#issue_dkjfh").html(dkjfh);
		$("#issuezf_div").show();
		$("#issuezf_btn").hide();
	}
	 	
}


function checkIssuepNum(integral,integral_pro){
	var dkjf = $("#issuep_dkjf").val();
 	if(dkjf){
		$(".issuep_jfdkh_m").show();
	} 
	var need = $("#issuep_need").text();
	var need_jifen = accMul(need, integral_pro);
  	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#issuep_dkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#issuep_dkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
	
	if(dkjfh<=0){
		$("#issuep_dkjfh").html(0);
		$("#issuepzf_div").hide();
		$("#issuepzf_btn").show();
	}else{
		$("#issuep_dkjfh").html(dkjfh);
		$("#issuepzf_div").show();
		$("#issuepzf_btn").hide();
	}
		
}

function myFunction(_this) {
    _this.value = _this.value.replace(/[^0-9]/g, '');
}

function issuezf(){
  	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{issuejob:1},function(data){
		if(data){
			layer.closeAll();
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
					window.location.href='index.php?c=jobadd';
				}); 
    		}
		}
	})
}

function issuepzf(){
  	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{issuepart:1},function(data){
		if(data){
			layer.closeAll();
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
					window.location.href='index.php?c=partadd';
				}); 
    		}
		}
	})
}

function issueJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var issue_dkjf = $('#issue_dkjf').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {issuejob:1,issue_dkjf:issue_dkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_issue_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_issue').submit();
    		}
        }  
  	});
}

function issuePartOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var issuep_dkjf = $('#issuep_dkjf').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {issuepart:1,issuep_dkjf:issuep_dkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_issuep_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_issuep').submit();
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
			page : {dom :"#payshow_issue"}
		});
	}
}
function rePay(){
	var orderId = $("#orderid").val();
	location.href="index.php?c=payment&id="+orderId;
}
<?php echo '</script'; ?>
>
  
 <div id="issue_job"  style="display:none; ">
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
						<span id="issue_need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="issue_need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="issue_dkjf" name="issue_dkjf" onkeyup="checkIssueNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list issue_jfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="issue_dkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>
		<div id="issuezf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_job']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_issue" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="issueJobOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="issueJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php }?>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_issue_id" value=""/>
					<input type="hidden" value="发布职位金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="issuezf_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_job']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none" <?php }?> class="job_tck_bth_pd">
			<input type='button' value='确认支付' onClick="issuezf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>
 
 <div id="issue_part"  style="display:none; ">
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
						<span id="issuep_need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_partjob'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="issuep_need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_partjob'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="issuep_dkjf" name="issuep_dkjf" onkeyup="checkIssuepNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list issuep_jfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="issuep_dkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>
		<div id="issuepzf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_partjob']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_issuep" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="issuePartOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="issuePartOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php }?>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_issuep_id" value=""/>
					<input type="hidden" value="发布兼职金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="issuepzf_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_partjob']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
			<input type='button' value='确认支付' onClick="issuepzf();" class='job_redpack_list_c_bth'>
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

 <div id="payshow_issue" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
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
