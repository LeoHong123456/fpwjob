<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:59:54
         compiled from "/www/fpwjob/uploads//app/template/member/com/yqms.htm" */ ?>
<?php /*%%SmartyHeaderCode:11279437125dbd458a632b35-03733712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a24eddf0c6e1b85ba71716437c0b221b06567a' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/com/yqms.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11279437125dbd458a632b35-03733712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_job' => 0,
    'v' => 0,
    'config' => 0,
    'statis' => 0,
    'com_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd458a6aac93_31164283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd458a6aac93_31164283')) {function content_5dbd458a6aac93_31164283($_smarty_tpl) {?><div id='job_box' style="display:none;float:left">
	<div class="resume_yqbox">
		<dl style="z-index:1000">
			<dt>面试职位：</dt>
			<dd>
				<div class="Interview_text_box">
					<input type="button" value="请选择" class="Interview_text_box_t" id="name" onclick="search_show('job_name');">
					<input type="hidden" id="nameid" name="name" value="">
					<div class="Interview_text_box_list none" id="job_name" style="display: none;">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['company_job']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>  
								<li>
									<a href="javascript:;" onclick="selecteInviteJob('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'name', '<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['link_man'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['link_moblie'];?>
');"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,12,'utf-8');?>
</a>
								</li>    
							<?php } ?> 
						</ul>
					</div>
				</div>
			</dd>
		</dl>
		<dl><dt>联系人：</dt><dd><input size='20'  id='linkman' value='' class="resume_yqbox_text"></dd></dl>
		<dl><dt>联系电话：</dt><dd><input size='20'  id='linktel' value='' class="resume_yqbox_text"></dd></dl>
		<dl><dt>面试时间：</dt><dd><input size='34' id='intertime' value='' class="resume_yqbox_text"></dd></dl>
		<dl><dt>面试地址：</dt><dd><input size='34' id='address' value='' class="resume_yqbox_text"></dd></dl>
		<dl><dt>面试备注：</dt><dd> <textarea id="content" cols="40" rows="5" class="resume_yqbox_textarea"></textarea></dd></dl>
		<dl id="resume_job" style="height:50px;">
			<dt>&nbsp;</dt>
			<dd> 
				<input type="hidden" id="uid" value="">
				<input type="hidden" id="username" value="">
				<input class="resume_sub_yq" id="click_invite" type="button" value="邀请面试"  >
			</dd>
		</dl>
	</div>
</div>

<div id="invite_server"  style="display:none; ">
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
						<span id="need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_interview'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_interview'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

		
		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="dkjf" name="dkjf" onkeyup="checkNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list jfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="dkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>
		<div id="zf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_interview']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_invite" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
						<div class="job_redpack_list_name">支付方式：</div>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
							<div class="job_redpack_pay">
								<a href="javascript:;" onclick="inviteOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
							</div> 
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
							<div class="job_redpack_pay">
								<a href="javascript:;" onclick="inviteOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
							</div>
						<?php }?>
					<?php } else { ?>
						<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_invite_id" value=""/>
					<input type="hidden" value="邀请面试金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="zf_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_interview']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
			<input type='button' value='确认支付' onClick="qrzf();" class='job_redpack_list_c_bth'>
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


<div id="payshow" style="width:470px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
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

<?php echo '<script'; ?>
>
layui.use(['laydate'], function(){
	var laydate = layui.laydate;
	  laydate.render({
	  elem: '#intertime'
	  ,type: 'datetime'
	  ,format:'yyyy-MM-dd HH:mm:ss'
	});
});

function selecteInviteJob(id,type,name,man,tel){
	$("#job_"+type).hide();
	$("#"+type).val(name);
	$("#"+type+"id").val(id);
	$("#linkman").val(man);
	$("#linktel").val(tel);
}


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

function checkNum(integral,integral_pro){
	var dkjf = $("#dkjf").val();
 	if(dkjf){
		$(".jfdkh_m").show();
	} 
	var need = $("#need").text();
	var need_jifen = accMul(need, integral_pro);
  	if(parseInt(dkjf) > parseInt(need_jifen)){
		
		$("#dkjf").val(parseInt(need_jifen));
		$("#dkjfh").html(0);
		$("#zf_div").hide();
		$("#zf_btn").show();

	}
 	if(parseInt(dkjf) > parseInt(integral)){
		$("#dkjf").val(parseInt(integral));

		var dkjfh = accSub(need , accDiv(integral,integral_pro));
		
		if(dkjfh <= 0){
			$("#dkjfh").html(0);
			$("#zf_div").hide();
			$("#zf_btn").show();
		}else{
			$("#dkjfh").html(dkjfh);
			$("#zf_div").show();
			$("#zf_btn").hide();
		}
	}else{
		var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		if(dkjfh<=0){
			$("#dkjfh").html(0);
			$("#zf_div").hide();
			$("#zf_btn").show();
		}else{
			$("#dkjfh").html(dkjfh);
			$("#zf_div").show();
			$("#zf_btn").hide();
		}
	}	
 }

 function qrzf(){
	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{invite:1},function(data){
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
					$.layer({
						type : 1,
						offset: ['100px', ''],
						title :'邀请面试', 
						closeBtn : [0 , true],
						border : [10 , 0.3 , '#000', true],
						area : ['380px','auto'],
						page : {dom :"#job_box"} 
					});
				}); 
    		}
		}
	})
}

function inviteOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var dkjf = $('#dkjf').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {invite:1,dkjf:dkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_invite_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_invite').submit();
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
			area : ['470px','300px'],
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
<?php }} ?>
