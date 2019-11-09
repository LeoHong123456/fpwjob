<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 21:30:28
         compiled from "/www/fpwjob/uploads//app/template/member/user/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:16079635845dc56df42ef9f7-82317827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa09a0e7d7ec64dcc175d7b4584b28b284483a52' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/user/footer.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16079635845dc56df42ef9f7-82317827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'com_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc56df4335be0_31732361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc56df4335be0_31732361')) {function content_5dc56df4335be0_31732361($_smarty_tpl) {?>
<div class="Commissioned_Resume_box" style="position:absolute; display:none; background: white;width: 548px;">
    <div class="Commissioned_Resume_cont  ">
        <div class="com_resume_ct">委托简历给管理员，管理员将您的简历推荐给企业</div>
        <table class="Commissioned_table" cellpadding="1" cellspacing="1" style="width:510px;">
            <tbody>
                <tr>
                    <th>简历名称</th>
                    <th>电话号码</th>
                    <th>简历类型</th>
                    <th>更新日期</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div id="entr_resume" style="display:none;">
	<div class="admin_Operating_sh" style="padding:10px; ">
    	<div class="stick_tm">
        	<input type="hidden" id="wteid" name="wteid" value="">
            <input type="hidden" name="mywt" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['pay_trust_resume'];?>
">
        </div>
    
 	    	<div class="stick_rage">
	       		<span>应付金额：<em>  <?php echo $_smarty_tpl->tpl_vars['config']->value['pay_trust_resume'];?>
  元</em></span> <br/>
	     	</div>
	      	
			<form name="alipayment"  id="payform_wt" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_recom_listbth" style="padding-top:30px;">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="wtResume('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> <div class="job_redpack_pay_p">微信支付</div></a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
				 	<div class="job_redpack_pay">
						<a href="javascript:;" onclick="wtResume('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div><div class="job_redpack_pay_p">支付宝支付</div></a>
					</div>
					<?php }?> 
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;margin-top:10px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?> 
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_wt_id" value=""/>
					<input type="hidden" value="委托简历金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
				<div class="job_recom_listtel">客服电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
			</form>
      </div>
</div>


<?php echo '<script'; ?>
>

function accMul(arg1, arg2) {

	var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

	try { m += s1.split(".")[1].length } catch (e) { }

	try { m += s2.split(".")[1].length } catch (e) { }

	return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

}

function cktopspan(day,price){
	var disval=$('input[name="dis"]:checked ').val();
	if(disval&&day!=disval){
		$("input[name=dis][value="+disval+"]").attr("checked",false);
	}
	$("input[name=dis][value="+day+"]").attr("checked",true);
	var needs=accMul(day,price);
	$("#price").html(needs);
}
function buyResumeTop(pay_type){
	
	$('#pay_type').val(pay_type);
 	var resumeid = $('#eid').val();
 	var days = $("input[name='dis']:checked").val();
  	var index = layer.load('执行中，请稍候...',0);
  	
  	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=resume&act=resumeOrder",  
        data: {resumeid:resumeid,days:days},  
        success: function(data){  
        	layer.close(index);
          var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_zd_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_zd').submit();
    		}
        }  
  	});
}

function wtResume(pay_type){
	
	$('#pay_type').val(pay_type);
 	var resumeid = $('#wteid').val();
   	var index = layer.load('执行中，请稍候...',0);
  	
  	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=resume&act=resumeOrder",  
        data: {wteid:resumeid},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_wt_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_wt').submit();
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
<div id="resumetop" style="display:none;">
    <div class="admin_Operating_sh" style="padding:10px; ">
    <div class="resume_settop_tip">简历置顶是在求职网是让简历显示在更好的位置上,不用手动刷新自己的简历,就能让自己的简历保
持在简历中心列表的第一页,方便招聘公司更容易看到您的简历，增加求职成功的机会。</div>
   		<div class="stick_msg">置顶简历：<i id="resumename"></i></div>
      	<div class="stick_msg">结束时间：<span id='topdate' class="stick_msg_time"></span></div>
       	<div class="stick_tm">
              <div class="stick_tm_ft">置顶时长：</div>
              <ul class="stick_tm_box">
                   <lable for="dis1">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="1" name="dis" checked="checked" onclick="cktop('1','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('1','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">1天</span>
                          </li>
                   </lable>
                   <lable for="dis3">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="3" name="dis" onclick="cktop('3','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('3','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">3天</span>
                          </li>
                   </lable>
                   <lable for="dis7">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="7" name="dis" onclick="cktop('7','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('7','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">7天</span>
                          </li>
                   </lable>
                   <lable for="dis15">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="15" name="dis" onclick="cktop('15','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('15','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">15天</span>
                          </li>
                   </lable>
                   <lable for="dis30">
                          <li >
                              <input type="radio" class="stick_tm_box_radio" value="30" name="dis" onclick="cktop('30','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('30','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">30天</span>
                          </li>
                   </lable>
              </ul>
              <input type="hidden" id="eid" name="eid" value="">
              <input type="hidden" name="myxs" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
">
         </div>

         <div class="stick_rage">
              <span>应付金额：<em id="price"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
</em>元</span> <br/>

          </div>
      	<form name="alipayment"  id="payform_zd" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
		
        
        <div class="job_recom_listbth">
			<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
			<div class="job_redpack_list_name">支付方式：</div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
			<div class="job_redpack_pay">
				<a href="javascript:;" onclick="buyResumeTop('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
			</div> 
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
		 	<div class="job_redpack_pay">
				<a href="javascript:;" onclick="buyResumeTop('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
			</div>
			<?php }?>
			<?php } else { ?>
			<div class="con_banner_no" style="width:300px;margin-top:10px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
			<?php }?> 
			<input type="hidden" value="" id="pay_type" name="pay_type"/>
			<input type="hidden" name="dingdan" id="order_zd_id" value=""/>
			<input type="hidden" value="简历置顶金额"  name="subject"/>
			<input type="hidden" name="pay_bank" value="directPay">
		</div>
	
	</form>
      </div>
</div>
<input type="hidden" name="orderid" id="orderid" value=""/>

<div id="wxpayTx"  style="display:none;">
  <div class="wx_payment">
  <div class="wx_payment_cont"><div class="wx_payment_ewm">正在加载微信二维码,请稍候....</div> </div><div class="wx_payment_h2">二维码有效时长2小时，请尽快支付</div>
  <div class="wx_payment_tip">
  <div class="wx_payment_tip_left"><i class="wx_payment_tip_line1"></i><i class="wx_payment_tip_line2"></i><i class="wx_payment_tip_line3"></i></div> 
  <div class="wx_payment_tip_right">请使用微信扫一扫<br>扫描二维码支付</div>
  </div>
  </div>
</div>  

<div id="payshow" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
<div class="payment_tip">请在新打开的支付页面上完成付款，付款完成前请不要关闭此窗口。<br>如您在支付过程中遇到问题，请联系客服：<span class="payment_tip_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
<div class="payment_bottom"><a href="index.php?c=paylog" class="payment_bottombutt">已完成付款</a><a href="javascript:;" onclick="rePay();" class="payment_bottom_bth2">重新支付</a></div>
</div>

<div class="clear"></div>
<div class=foot>
<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];
echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
  
<div class="">地址:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
  电话(Tel):<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
  EMAIL:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
</div>
</div>
     
</div>
<div id="uclogin" style="display:none"></div>
<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==2) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_easemob.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==3) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_rongcloud.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>

<input type='hidden' id="layindex" value="">
</body>
</html><?php }} ?>
