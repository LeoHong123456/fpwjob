<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:59:08
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/mypay.htm" */ ?>
<?php /*%%SmartyHeaderCode:19155675315e4c885cd82100-05587576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae6ffffa7feb5d97fe87c9f13d06620d1d57e3b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/mypay.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19155675315e4c885cd82100-05587576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
    'statis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c885cda2a81_00671945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c885cda2a81_00671945')) {function content_5e4c885cda2a81_00671945($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/jianli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--内容部分content-->
<div class="m_content">
	<div class="wrap">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="m_inner_youb fr">
        
        
          <div class="lt_m_tit"><span class="lt_m_tit_s">账户余额</span></div>
			<div class="m_youb_yue01">
				<div class="m_youb_yue"> 
					我的账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：
					<em><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral_format'];?>
</em><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];?>

					<a href="index.php?c=pay&type=integral" class="m_yue_cz01">账户充值</a>
					<a class="m_yue_cz02"  href="javascript:use_card();"  style="width:120px;">使用充值卡充值</a>
					<a href="index.php?c=right" class="m_yue_cz02">查看特权</a>
				</div>

				<div class="m_youb_all">
					<ul>
						<li>总计充值金额：<span> <?php echo $_smarty_tpl->tpl_vars['statis']->value['all_pay'];?>
 元</span></li>
						
						<li>消费金额：<span><em class="ff8"> <?php echo $_smarty_tpl->tpl_vars['statis']->value['consum_pay'];?>
 </em>元</span></li>
					</ul>
				</div>
 			</div>
 		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
function use_card(){
	$.layer({
		type : 1,
		title : '使用充值卡充值',
		closeBtn : [0 , true], 
		border : [10 , 0.3 , '#000', true],
		area : ['350px','170px'],
		page : {dom : '#use_card'}
	}); 
}
<?php echo '</script'; ?>
>
<div id="use_card"  style="display:none; width: 350px;">
  <div class="job_box_div">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?c=mypay&act=card" target="supportiframe" method="post" id='myform'>
      <div class="mypay_box fl" >
       <span class="mypay_name fl" style="width:80px;"> 卡号：</span>
        <input name="card" class="mypay_input fl" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
         </div>
      <div class="mypay_box fl">
       <span class="mypay_name fl" style="width:80px;"> 密码：</span>
        <input name="password" class="mypay_input fl" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
         </div>
      <div class="mypay_box fl"> 
      <span class="mypay_name fl" style="width:80px;"> &nbsp;</span>
      <a class="mypay_bth fl" href="javascript:void(0);" onclick="setTimeout(function(){$('#myform').submit()},0);">确定</a> </div>
    </form>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
