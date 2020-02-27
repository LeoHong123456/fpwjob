<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:15:35
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_wxxcx.htm" */ ?>
<?php /*%%SmartyHeaderCode:14901812525e48fa27bdb535-66234000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d67d4a00a2cc4e3cb3d8b7870921d99e41da19' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_wxxcx.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14901812525e48fa27bdb535-66234000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wxpaydata' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e48fa27ca0cb6_57482394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e48fa27ca0cb6_57482394')) {function content_5e48fa27ca0cb6_57482394($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	
	<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
	<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
	
	<?php echo '<script'; ?>
>
		$(document).ready(function(){
			$(".input-text").focus(function(){ 
				var msg_id=$(this).attr('id');
				var msg=$('#'+msg_id+' + font').html(); 
				if($.trim(msg)!=''){
					layer.tips(msg, this, {
					guide: 1, 
					style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC'], 
					}); 
					$(".xubox_layer").addClass("xubox_tips_border");
				} 
			}).blur(function () {
				layer.closeAll('tips');
			});
		});
	<?php echo '</script'; ?>
>
	
	<title>后台管理</title>
</head>
<body class="body_ifm">
	<div id="subboxdiv" style="width:100%;height:100%;display:none;position: absolute;"></div>

	<div class="infoboxp"> 
		<div class="admin_new_tip">
			<a href="javascript:;" class="admin_new_tip_close"></a>
			<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<div class="admin_new_tip_list">设置后，可以在小程序里面快捷登录！</div>
                <div class="admin_new_tip_list">设置后，联系授权客服提交代码！</div>
			</div>
		</div>

		<div class="clear"></div>

		<div class="tag_box mt10">
			<div id="right" style="display:block">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form method="post" target="supportiframe" action="" name="config" >
					
					<div id="paysync">
						<table id="alipay" width="100%" class="table_form">
							<tr><td colspan="2" bgcolor="#f0f6fb"><div class="admin_bold">微信小程序设置</div></td></tr>
							<tr class="none">
								<th>APPID:</th>
								<td><input type="text" class="input-text" name="sy_wxpayappid" id="sy_wxpayappid" value="<?php echo $_smarty_tpl->tpl_vars['wxpaydata']->value['sy_wxpayappid'];?>
" size="50" maxlength="255"/><span class="admin_web_tip">绑定支付的APPID（必须配置，公众号平台可查看）</span></td>
							</tr>
							<tr class="none">
							  <th>AppSecret:</th>
							  <td><input type="text" class="input-text" name="sy_wxappsecret" id="sy_wxappsecret" value="<?php echo $_smarty_tpl->tpl_vars['wxpaydata']->value['sy_wxappsecret'];?>
" size="50" maxlength="255"/>
								<span class="admin_web_tip">绑定支付的公众号AppSecret（必须配置，公众号平台可查看）</span></td>
							</tr>
							<tr class="none">
								<th>商户号(MCHID):</th>
								<td><input type="text" class="input-text" name="sy_wxpaymchid" id="sy_wxpaymchid" value="<?php echo $_smarty_tpl->tpl_vars['wxpaydata']->value['sy_wxpaymchid'];?>
" size="50" maxlength="255"/><span class="admin_web_tip">商户号（必须配置，开户邮件中可查看）</span></td>
							</tr >
							<tr class="admin_table_trbg none">
								<th>商户密钥(KEY):</th>
								<td><input type="text" class="input-text" name="sy_wxpaykey" id="sy_wxpaykey" value="<?php echo $_smarty_tpl->tpl_vars['wxpaydata']->value['sy_wxpaykey'];?>
" size="50" maxlength="255"/><span class="admin_web_tip">商户支付密钥，参考开户邮件设置（必须配置，登录商户平台自行设置）</span></td>
							</tr>
							<tr class="admin_table_trbg none">
								<th>证书（pem格式）路径:</th>
								<td><input type="text" class="input-text" name="sy_wxpem_cert" id="sy_wxpem_cert" value="<?php echo $_smarty_tpl->tpl_vars['wxpaydata']->value['sy_wxpem_cert'];?>
" size="50" maxlength="255"/><span class="admin_web_tip">微信商户平台-API安全-下载证书，证书不要存放于网站目录下，防止被恶意下载，请填绝对路径 如D:\wxca\apiclient_cert.pem</span></td>
							</tr>
							<tr class="admin_table_trbg none">
								<th>证书密钥（pem格式）路径:</th>
								<td><input type="text" class="input-text" name="sy_wxpem_key" id="sy_wxpem_key" value="<?php echo $_smarty_tpl->tpl_vars['wxpaydata']->value['sy_wxpem_key'];?>
" size="50" maxlength="255"/><span class="admin_web_tip">微信商户平台-API安全-下载证书，证书不要存放于网站目录下，防止被恶意下载，请填绝对路径 如D:\wxca\apiclient_key.pem</span></td>
							</tr>
							
							<tr>
								<th>xcxAPPID:</th>
								<td><input type="text" class="input-text" name="sy_xcxappid" id="sy_xcxappid" value="<?php echo $_smarty_tpl->tpl_vars['wxpaydata']->value['sy_xcxappid'];?>
" size="50" maxlength="255"/><span class="admin_web_tip">绑定支付的小程序APPID（必须配置，小程序平台可查看）</span></td>
							</tr>
							<tr>
							  <th>xcxAppSecret:</th>
							  <td><input type="text" class="input-text" name="sy_xcxsecret" id="sy_xcxsecret" value="<?php echo $_smarty_tpl->tpl_vars['wxpaydata']->value['sy_xcxsecret'];?>
" size="50" maxlength="255"/>
								<span class="admin_web_tip">绑定支付的小程序AppSecret（必须配置，小程序平台可查看）</span></td>
							</tr>
							<tr>
							<th>&nbsp;</th>
									<td align="left"><input class="admin_button" id="pay_config" type="submit" name="pay_config" value="&nbsp; 修 改 &nbsp;"  />&nbsp;&nbsp;<input class="admin_button" type="reset" name="reset" value="&nbsp; 重 置 &nbsp;" /></td>
							</tr>
						</table>
					</div>
					<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>
