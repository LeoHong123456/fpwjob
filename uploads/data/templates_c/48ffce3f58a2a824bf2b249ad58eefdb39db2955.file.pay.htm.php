<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:46:29
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/pay.htm" */ ?>
<?php /*%%SmartyHeaderCode:2018602315dc52b6597bba6-86156144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48ffce3f58a2a824bf2b249ad58eefdb39db2955' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/pay.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2018602315dc52b6597bba6-86156144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
    'integralclass_index' => 0,
    'integralclass_name' => 0,
    'integralclass_discount' => 0,
    'k' => 0,
    'v' => 0,
    'nopayorder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc52b659cf845_42024229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc52b659cf845_42024229')) {function content_5dc52b659cf845_42024229($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/jianli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 <style>.my_table_msg th{ text-align:right}</style>
<div class="m_content">
  <div class="wrap">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="m_inner_youb fr">
            <div class="lt_m_tit"><span class="lt_m_tit_s">账户充值</span></div>
		<div class="com_body">
        <div class='admin_note_pay2'>
		 <div class="resume_Prompt_box"><div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>当前<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换比为1元=<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
if ($_smarty_tpl->tpl_vars['config']->value['integral_min_recharge']>0) {?>，单次最低充值<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_min_recharge'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
。<?php }?></div></div>
          <div class="admin_note2">
            <iframe id="fdingdan"  name="fdingdan" onload="returnmessage('fdingdan');" style="display:none"></iframe>
           
              <form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" onsubmit="return pay_form('请输入充值数量！');">
			  <input type="hidden" id="integral" name="price_int" value="<?php echo $_smarty_tpl->tpl_vars['integralclass_name']->value[$_smarty_tpl->tpl_vars['integralclass_index']->value[0]];?>
" />
			<input type="hidden" id="integralid" name="integralid" data-discount="<?php echo $_smarty_tpl->tpl_vars['integralclass_discount']->value[$_smarty_tpl->tpl_vars['integralclass_index']->value[0]];?>
" value="<?php echo $_smarty_tpl->tpl_vars['integralclass_index']->value[0];?>
" />
              
              
              <div class="payment_list">
				<div class="payment_list_s mt10">充值数量：</div>
				<div class="payment_list_r">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['integralclass_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<span class="payment_list_text <?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?>payment_list_cur<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data-integral="<?php echo $_smarty_tpl->tpl_vars['integralclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" data-discount="<?php echo $_smarty_tpl->tpl_vars['integralclass_discount']->value[$_smarty_tpl->tpl_vars['v']->value];?>
">
				 <div class="payment_list_text_n"><i class="payment_list_text_icon"></i><?php echo $_smarty_tpl->tpl_vars['integralclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
<em class="payment_list_text_dw"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</em></div>
				 <?php if ($_smarty_tpl->tpl_vars['integralclass_discount']->value[$_smarty_tpl->tpl_vars['v']->value]>0) {?>
				<em class="payment_list_text_zk"><?php echo $_smarty_tpl->tpl_vars['integralclass_discount']->value[$_smarty_tpl->tpl_vars['v']->value]/10;?>
折</em>
				 <?php }?>
				 </span>
				<?php } ?>

				<div class="payment_list_zdy"><input type="text" id="autointegral" onblur="comautointegral();" class="payment_list_input" placeholder="自定义" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" maxlength="6">积分</div>
				</div>
				 <div class="payment_list"><div class="payment_list_s" style="line-height:40px;">金额：</div><div class="payment_list_r"><span class="payintegral" id="payintegral">0</span>元<input type="hidden" name="price" size="10"  id="user_vip_price"></div></div>
				<div class="payment_list"><div class="payment_list_s" style="line-height:92px;">支付备注：</div><div class="payment_list_r"><textarea name="remark" id="remark" cols="40" class="payment_list_textarea"></textarea></div></div>
			   
				<div class="payment_list coupon"><div class="payment_list_s">&nbsp;</div><div class="payment_list_r">
				<input type="submit" name="submit" class="payment_list_other" value="提交订单">
				</div>
				</div>
				</div>
              </form>
            </div>
        </div>
      </div>

      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<div id="remind_order" style="display:none; width:320px;">
<div class="pay_tip_box" >
            <div class="pay_tip_top" >
            <div class="pay_tip_box_ts">温馨提示</div>
            您有 <font color="#FF3300"><?php echo $_smarty_tpl->tpl_vars['nopayorder']->value;?>
</font> 个订单未付款，是否继续充值！</div>
             <div class="">
                   <a class="pay_tip_box_bth" href="index.php?c=paylog" >去付款</a>
                <a class="pay_tip_box_bth_jx" href="javascript:void(0);" onclick="layer.closeAll()">继续充值</a>
           
    </div>
</div>         
    </div>
<?php echo '<script'; ?>
> 
<?php if ($_GET['id']&&$_GET['type']=='vip') {?>
$(document).ready(function(){
	check_rating_coupon('<?php echo $_GET['id'];?>
');
});
<?php }?>
var integralclass=[];
'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['integralclass_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
	integralclass.push({
		id : '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		integral : '<?php echo $_smarty_tpl->tpl_vars['integralclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
',
		discount : '<?php echo $_smarty_tpl->tpl_vars['integralclass_discount']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	}) 
'<?php } ?>'
function comautointegral(){
	var proportion='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';
	var integral=parseInt($("#autointegral").val());
	if(integral){
		var min_recharge='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_min_recharge'];?>
';
		if(min_recharge>0&&integral<min_recharge){
			integral=min_recharge;
			$("#autointegral").val(integral);
			$("#integral").val(integral);
		}else{
			$("#autointegral").val(integral);
			$("#integral").val(integral);
		}
		var integralval=integral;
		var discountarr=[];
		for(var i in integralclass) {
			if(integralval>=parseInt(integralclass[i]['integral'])){
				discountarr.push({
				'discount':integralclass[i]['discount'],
				'id':integralclass[i]['id']
				});
			}
		}
		if(discountarr.length>0){
			var discount=discountarr[discountarr.length-1].discount;
			$("#integralid").val(discountarr[discountarr.length-1].id);
		}else{
			var discount=0;
			$("#integralid").val('');
		}
		$("#integralid").attr('data-discount',parseInt(discount));
		if(parseInt(discount)>0){
			var price=integral/proportion*parseInt(discount)/100;
		}else{
			var price=integral/proportion;
		}
		price=Math.floor(price * 100) / 100;
		$("#user_vip_price").val(price);
		$("#payintegral").html(price);
		$(".payment_list_text").removeClass('payment_list_cur');
	}
}
$(document).ready(function(){
	"<?php if ($_smarty_tpl->tpl_vars['nopayorder']->value) {?>"
		$.layer({
            type: 1,
            title: '付款提醒',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['320px', '220px'],
            page: { dom: '#remind_order' }
        });
	"<?php }?>"
	var proportion='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';
	if($.trim($("#integral").val())){
		var integral=$.trim($("#integral").val());
		var integralid=$.trim($("#integralid").val());
		
		var discount=$.trim($("#integralid").attr('data-discount'));
		if(parseInt(discount)>0){
			var price=integral/proportion*parseInt(discount)/100;
		}else{
			var price=integral/proportion;
		}
		$("#integralid").val(integralid);
		$("#integralid").attr('data-discount',parseInt(discount));
		price=Math.floor(price * 100) / 100;
		$("#user_vip_price").val(price);
		$("#payintegral").html(price);
	}
	$(".payment_list_text").click(function() {
		var val=$(this).attr('data-integral');
		var valid=$(this).attr('data-id');
		var discount=$(this).attr('data-discount');
		$(".payment_list_text").removeClass('payment_list_cur');
		$(this).addClass('payment_list_cur');
		$("#autointegral").val('');
        $("#integral").val(val);
		
		if(parseInt(discount)>0){
			var price=val/proportion*parseInt(discount)/100;
		}else{
			var price=val/proportion;
		}
		$("#integralid").val(valid);
		$("#integralid").attr('data-discount',parseInt(discount));
		price=Math.floor(price * 100) / 100;
		$("#user_vip_price").val(price);
		$(".payintegral").html(price);
    });
	$("#autointegral").keyup(function(e) {
		if($(this).val()){
			var integralval=$(this).val();
			var discountarr=[];
			for(var i in integralclass) {
				if(parseInt(integralval)>=parseInt(integralclass[i]['integral'])){
					discountarr.push({
					'discount':integralclass[i]['discount'],
					'id':integralclass[i]['id']
					});
				}
			}
			if(discountarr.length>0){
				var discount=discountarr[discountarr.length-1].discount;
				$("#integralid").val(discountarr[discountarr.length-1].id);
			}else{
				var discount=0;
			}
			$("#integralid").attr('data-discount',parseInt(discount));
			$(".payment_list_text").removeClass('payment_list_cur');
			$("#integral").val(integralval);
			if(parseInt(discount)>0){
				var price=integralval/proportion*parseInt(discount)/100;
			}else{
				var price=integralval/proportion;
			}
			price=Math.floor(price * 100) / 100;
			$("#user_vip_price").val(price);
			$("#payintegral").html(price);
		}else{
			$("#integral").val('0');
			$("#user_vip_price").val('0');
			$("#payintegral").html('0');
		}
	});
});
<?php echo '</script'; ?>
> 
<input name='integral_min_recharge' value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_min_recharge'];?>
" type="hidden"/>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
