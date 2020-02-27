<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 18:05:46
         compiled from "/www/fpwjob/uploads/app/template/wap/forgetpw.htm" */ ?>
<?php /*%%SmartyHeaderCode:13169347395e4913fa3acfe8-63085292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598143fde8571d361de87e518de8a4b944f2c6dc' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/forgetpw.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13169347395e4913fa3acfe8-63085292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4913fa3c5d00_71465164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4913fa3c5d00_71465164')) {function content_5e4913fa3c5d00_71465164($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="password_box">

	<div class="passport-progress">
		<ul>
			<li id="path1" class="currents"><span>1</span>填写账号</li>
			<li id="path2" class="currents_er"><span>2</span>设置新密码<em></em></li>
			<li id="path3" class="currents_er"><span>3</span>完成<em></em></li>
		</ul>
	</div>

	<div class="account">
		<div id="backpicker" class="account_td1">
			<div id="sendtypePicker" class="input_295_34 select_input">
				<span id="pickerText" class="J_listitme_text">通过手机找回密码</span>
                <i class="searchOptions_icon  "></i>
				<input type="hidden" id="sendtype" name="sendtype" value="moblie">
			</div>
		</div>
		<div id="moblieshow" class="J_listitme_group">
			<div class="selecttip">系统将发送验证码短信到您的手机上，请注意查收</div>
			<div class="J_validate_group">
				<div class="account_td1">
					<input class="input_295_34" name="moblie" id="moblie" type="text" placeholder="请输入手机号">
				</div>
				<div class="account_td1">
					<div class="code">
						<input name="moblie_vcode" id="moblie_vcode" type="text" class="input_295_35" placeholder="请输入短信验证码">
						<button class="btn_yellow J_hoverbut" id="send_msg_tip" onclick="send_msg()">获取验证码</button>
					</div>
				</div>
				<div class="reset_btnbox">
					<input type="submit" onclick="forgetPwNext()" value="下一步" class="reset_xia">
				</div>
			</div>
		</div>

		<div id="emailshow" class="J_listitme_group" style="display: none;">
			<div class="selecttip">系统将发送验证码发到您的邮箱中，请注意查收</div>
			<div class="J_validate_group">
				<div class="account_td1">
					<input class="input_295_34" name="email" id="email" type="text" placeholder="请输入邮箱账户">
				</div>
				<div class="account_td1">
					<div class="code">
						<input name="email_vcode" id="email_vcode" type="text" class="input_295_35" placeholder="请输入邮箱验证码">
						<button class="btn_yellow J_hoverbut" id="send_email_tip" onclick="send_email()">获取验证码</button>
					</div>
				</div>
				<div class="reset_btnbox">
					<input type="submit" onclick="forgetPwNext()" value="下一步" class="reset_xia">
				</div>
			</div>
		</div>

		<div id="shensushow" class="J_listitme_group" style="display: none;">
			<div class="selecttip">信息提交后 , 客服人员会电话回访 , 确认身份！</div>
			<div class="J_validate_group">
				<div class="reset">
					<input class="reset_chong_zhi" type="text" name="username" id="username" autocomplete="off" maxlength="20" placeholder="请输入用户名" value="">
					<input class="reset_chong_zhi" type="text" name="linkman" id="linkman" autocomplete="off" maxlength="20" placeholder="请输入联系人" value="">
					<input class="reset_chong_zhi" type="text" name="linkphone" id="linkphone" autocomplete="off" maxlength="20" placeholder="请输入联系电话" value="">
					<input class="reset_chong_zhi" type="text" name="linkemail" id="linkemail" autocomplete="off" placeholder="请输入联系邮箱" value="">
				</div>
			</div>
			<div class="reset_btnbox_xia">
				<input type="submit" onclick="checklink()" value="下一步" class="reset_xia">
			</div>
		</div>
		
		<div id="resetpw" class="J_listitme_group" style="display:none;">
			<div class="J_validate_group">
				<div class="reset">
					<input class="input_295_34" name="password" id="password" type="password" placeholder="请设置新密码">
					<input class="input_295_34" name="passwordconfirm" id="passwordconfirm" type="password" placeholder="请确认新密码">
				</div>
				<div class="reset_btnbox">
					<input type="hidden" id="username" value="">
					<input type="hidden" id="fuid" value="">

					<input type="hidden" id="fmobile" value="">
					<input type="hidden" id="femail" value="">
					<input type="hidden" id="fcode" value="">

					<input type="submit" onclick="editpw()" value="提交修改" class="reset_xia">
				</div>
			</div>
		</div>
		
		<div id="succeed" class="password_cont" style="display:none;">
			<div class="password_cont_success " style="width:100%;">
				<div class="password_cont_success_p" style="padding-left:0;width:100%;text-align:center;">恭喜您！密码重置成功！</div>
				<div class="password_contm-row" style="margin-left:0;width:100%;text-align:center;">
					<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" style="margin:0 auto;width:280px;" class="password_input_btn">立即登录</a>
				</div>
			</div>

		</div>

		<div class="password_cont none" id="finish">
         <div class="password_icon"></div>

        <div class="password_succ">提交成功！</div>
			<div class="password_cgd">请耐心等待，稍后客服人员会联系您！</div>
		</div>
		</div>
		<div class="password_tip">
			<div class="password_tip_t">温馨提示：</div>
			<div>如手机号码已丢失且未绑定邮箱</div>
			<div>请拨打全国统一服务热线</div>
			<div class="password_tip_tel"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
 </div>
			<div class="password_tip_tel_link">
				<a href="tel:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
"><i class="password_tip_tel_link_tel"></i>拨打</a>
			</div>

		</div>
	</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.picker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.poppicker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/forgetpw.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/mobile.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
