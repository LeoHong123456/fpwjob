<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:37:48
         compiled from "/www/fpwjob/uploads//app/template/default/public_search/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:13766933185dc51b4c6082e5-08369621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0076b122d1ec91b76009243e9c203feeedc67513' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/default/public_search/login.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13766933185dc51b4c6082e5-08369621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51b4c62d216_27922900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51b4c62d216_27922900')) {function content_5dc51b4c62d216_27922900($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php if (!$_COOKIE['uid']) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/tck_logoin.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div class="none" id="onlogin">
	<div class="login_pop_up_box">
		
		<div class="login_pop_up_box_right">
			<div style="position:absolute;right:24px;top:10px;">
				<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']=='1') {?>
				<div class="wxcode_login" title="微信扫一扫登录" style="display:block;"><span class="login_pop_up_box_smlogin">扫码登录</span></div>
				<div class="normal_login none" title="普通登录"></div>
				<?php }?>
			</div>
			<div class="wx_login_show none">
				<div id="wx_login_qrcode" class="wxlogintext">正在获取二维码...</div>
				<div class="wxlogintxt">请使用微信扫一扫登录</div>
			</div>
			<div id="login_normal">
				<div class="login_pop_up_box_title">
					<input type="hidden" name="act" id="act_login" value="0" />
					<ul>
						<li id="acount_login" class="login_pop_up_cur">账号登录</li>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
						<li id="mobile_login">手机动态码登录</li>
						<?php }?>
					</ul>
				</div>
				<div id="login_normal_box">
					<div class="login_pop_up_box_text"><i class="login_pop_up_box_icon login_pop_up_box_icon_zh"></i>
						<input type="text" id="username" placeholder="手机/会员名/邮箱" name="username" class="login_pop_up_box_t" autocomplete="off" />
						<div class="login_pop_up_msg none" id="show_name">
							<div class="login_pop_up_msg_tx">请填写用户名</div>
							<div class="login_pop_up_msg_icon"></div>
						</div>
					</div>
					<div class="login_pop_up_box_text"><i class="login_pop_up_box_icon login_pop_up_box_icon_mm"></i>
						<input type="password" id="password" name="password" placeholder="请输入密码" class="login_pop_up_box_t" autocomplete="off" />
						<div class="login_pop_up_msg none" id="show_pass">
							<div class="login_pop_up_msg_tx">请填写密码</div>
							<div class="login_pop_up_msg_icon"></div>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
				<div class="none" id="login_sj_box">
					<div class="login_pop_up_box_text"><i class="login_pop_up_box_icon login_pop_up_box_icon_sj"></i>
						<input type="text" id="usermoblie" placeholder="请输入手机号码" name="username" class="login_pop_up_box_t" autocomplete="off" />
						<div class="login_pop_up_msg none" id="show_mobile">
							<div class="login_pop_up_msg_tx">请填写正确手机号</div>
							<div class="login_pop_up_msg_icon"></div>
						</div>
					</div>
				</div>
				<?php }?> 
				<?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"前台登录")!==false) {?> 
				<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
				<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
				<div class="logoin_tck_t_list" style="margin-top:20px;">
					<div class="fastlogin_verification ">
						<div id="popup-captcha-publiclogin" data-id='sublogin' data-type='click'></div>
						<input type='hidden' id="popup-submit">
						<input type='hidden' name="geetest_challenge_publiclogin" value=''>
						<input type='hidden' name="geetest_validate_publiclogin" value=''>
						<input type='hidden' name="geetest_seccode_publiclogin" value=''>
					</div>
				</div>
				<style>
					.fastlogin_verification .geetest_holder.geetest_wind {
						min-width: 400px;
					}
				</style>
				<?php } else { ?>
				<div class="login_pop_up_box_yztext"><i class="login_pop_up_box_icon login_pop_up_box_icon_yz"></i>
					<input id="txt_CheckCode" type="text" maxlength="6" name="authcode" autocomplete="off" placeholder="请输入验证码" class="login_pop_up_box_t">
					<div class="login_pop_up_box_yzimg">
						<img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" onclick="checkCode('vcode_img');" style="margin-right:5px; margin-left:5px;cursor:pointer;" />
					</div>
					<div class="login_pop_up_msg none" id="show_code">
						<div class="login_pop_up_msg_tx">请填写验证码</div>
						<div class="login_pop_up_msg_icon"></div>
					</div>
					<input type="hidden" id="login_codekind" value="1" />
				</div>
				<?php }?> 
				<?php } else { ?>
				<input type="hidden" id="login_codekind" value="0" /> 
				<?php }?>
				<div class="clear"></div>
				<div class="none" id="login_sjyz_box">
					<div class="login_pop_up_box_sjtext"><i class="login_pop_up_box_icon login_pop_up_box_icon_dx"></i>
						<input id="dynamiccode" type="text" tabindex="3" maxlength="6" name="authcode" autocomplete="off" placeholder="请输入短信验证码" class="login_pop_up_box_t">
						<div class="login_pop_up_msg none" id="show_dynamiccode">
							<div class="login_pop_up_msg_tx">请填写短信动态码</div>
							<div class="login_pop_up_msg_icon"></div>
						</div>
						<a href="javascript:void(0);" class=" login_pop_up_box_yztext_hq" id="send_msg_tip" onclick="send_msg2('<?php echo smarty_function_url(array('m'=>'login','c'=>'sendmsg'),$_smarty_tpl);?>
');">获取验证码</a>
					</div>
				</div>
				<input type="hidden" id="login_usertype" />
				<input id="loginsubmit" class="login_pop_up_box_bth" type="button" name="loginsubmit" onclick="check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
','vcode_img');" value="登 录">
				<div class="login_pop_up_box_fot">
					<a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
">忘记密码？</a>
					<a href="###" id="onregister" target="_blank" class="login_pop_up_box_rightreg">免费注册</a>
				</div>
				<div class="login_pop_up_box_other">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
" class="login_pop_up_box_other_wx">微信登录</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php" class="login_pop_up_box_other_qq">QQ登录</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
" class="login_pop_up_box_other_sina">微博登录</a>
					<?php }?> 
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/reg_ajax.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	function showlogin(usertype) {
		checkCode('vcode_img');
		$("#login_usertype").val(usertype);
		var reg_moblie = '<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_moblie'];?>
';
		var reg_email = '<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_email'];?>
';
		if(usertype == 1 || usertype == "" || !usertype) {
			if(reg_moblie == '1') {
				var url = '<?php echo smarty_function_url(array('m'=>'register','usertype'=>1,'type'=>2),$_smarty_tpl);?>
';
			} else if(reg_email == '1') {
				var url = '<?php echo smarty_function_url(array('m'=>'register','usertype'=>1,'type'=>3),$_smarty_tpl);?>
';
			} else {
				var url = '<?php echo smarty_function_url(array('m'=>'register','usertype'=>1,'type'=>1),$_smarty_tpl);?>
';
			}
		} else if(usertype == 2) {
			if(reg_moblie == '1') {
				var url = '<?php echo smarty_function_url(array('m'=>'register','usertype'=>2,'type'=>2),$_smarty_tpl);?>
';
			} else if(reg_email == '1') {
				var url = '<?php echo smarty_function_url(array('m'=>'register','usertype'=>2,'type'=>3),$_smarty_tpl);?>
';
			} else {
				var url = '<?php echo smarty_function_url(array('m'=>'register','usertype'=>2,'type'=>1),$_smarty_tpl);?>
';
			}
		} else if(usertype == 3) {
			var url = '<?php echo smarty_function_url(array('m'=>'lietou','c'=>'register'),$_smarty_tpl);?>
';
		} else if(usertype == 4) {
			var url = '<?php echo smarty_function_url(array('m'=>'train','c'=>'register'),$_smarty_tpl);?>
';
		}
		$("#onregister").attr("href", url);
		$.layer({
			id: 'onloginid',
			type: 1,
			title: '会员登录',
			closeBtn: [0, true],
			offset: ['20%', '30%'],
			border: [10, 0.3, '#000', true],
			area: ['500px', '520px'],
			page: {
				dom: "#onlogin"
			}
		});
	}

	function checkajaxlogin(img) {
		var username = $.trim($("#login_username").val());
		var password = $.trim($("#login_password").val());
		var usertype = $.trim($("#login_usertype").val());
		var geetest_challenge;
		var geetest_validate;
		var geetest_seccode;
		var authcode;
		if(username == "" || password == "") {
			layer.closeAll();
			layer.msg('请准确填写用户登录信息！', 2, 8, function() {
				showlogin(usertype);
			});
			return false;
		}
		var code_kind = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';
		var code_web = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
';
		var codesear = new RegExp('前台登录');
		if(codesear.test(code_web)) {

			if(code_kind == '1') {
				authcode = $.trim($("#login_authcode").val());
				if(authcode == '') {
					layer.closeAll();
					layer.msg('请填写验证码！', 2, 8, function() {
						showlogin(usertype);
					});
					return false;
				}
			} else if(code_kind == '3') {

				var geetest_challenge = $('input[name="geetest_challenge_publiclogin"]').val();
				var geetest_validate = $('input[name="geetest_validate_publiclogin"]').val();
				var geetest_seccode = $('input[name="geetest_seccode_publiclogin"]').val();
				if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {

					$("#popup-submit").trigger("click");
					layer.msg('请点击按钮进行验证！', 2, 8, function() {
						showlogin(usertype);
					});
					return false;
				}

			}
		}
		layer.load('登录中,请稍候...');

		$.post("<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
", {
			comid: 1,
			username: username,
			password: password,
			authcode: authcode,
			usertype: usertype,
			geetest_challenge: geetest_challenge,
			geetest_validate: geetest_validate,
			geetest_seccode: geetest_seccode
		}, function(data) {
			layer.closeAll();
			var jsonObject = eval("(" + data + ")");
			if(jsonObject.error == '3') { 
				$('#uclogin').html(jsonObject.msg);
				setTimeout("window.location.href='" + jsonObject.url + "';", 500);
			} else if(jsonObject.error == '2') { 
				$('#uclogin').html(jsonObject.msg);
				setTimeout("location.reload();", 500);
			} else if(jsonObject.error == '1') { 

				location.reload();
				return false;

			} else if(jsonObject.error == '0') { 

				if(codesear.test(code_web)) {
					if(code_kind == '1') {

						checkCode(img);

					} else if(code_kind == '3') {

						$("#popup-submit").trigger("click");

					}
				}
				layer.msg(jsonObject.msg, 2, 8, function() {
					showlogin(usertype);
				});

				return false;

			}
		});
	}
	$(document).ready(function() {

		var handlerPopupLogin = function(captchaObj) {
			

			captchaObj.onSuccess(function() {

				var validate = captchaObj.getValidate();

				if(validate) {
					$("input[name='geetest_challenge_publiclogin']").val(validate.geetest_challenge);
					$("input[name='geetest_validate_publiclogin']").val(validate.geetest_validate);
					$("input[name='geetest_seccode_publiclogin']").val(validate.geetest_seccode);
				}

			});
			$("#popup-submit").click(function() {

				$("input[name='geetest_challenge_publiclogin']").val('');
				$("input[name='geetest_validate_publiclogin']").val('');
				$("input[name='geetest_seccode_publiclogin']").val('');

				captchaObj.reset();
			});

			captchaObj.appendTo("#popup-captcha-publiclogin");

		};

		if($("#popup-captcha-publiclogin").length > 0) {
			$.ajax({
				url: weburl + "/index.php?m=geetest&t=" + (new Date()).getTime(),
				type: "get",
				dataType: "json",
				success: function(data) {

					initGeetest({
						gt: data.gt,
						challenge: data.challenge,
						product: "popup",
						width: "100%",
						offline: !data.success,
						new_captcha: data.new_captcha
					}, handlerPopupLogin);
				}
			});
		}
		var setval;
		$('.wxcode_login').click(function(data) {

			$('.wxcode_login').hide();
			$('.normal_login').show();
			$('#login_normal').hide();
			$('.wx_login_show').show();
			$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'wxlogin'),$_smarty_tpl);?>
', {
				t: 1
			}, function(data) {
				if(data == 0) {
					$('#wx_login_qrcode').html('二维码获取失败..');
				} else {
					$('#wx_login_qrcode').html('<img src="' + data + '" width="100" height="100">');
					setval = setInterval("wxorderstatus()", 2000);
				}
			});

		});
		$('.normal_login').click(function(data) {

			$('.wxcode_login').show();
			$('.normal_login').hide();
			$('#login_normal').show();
			$('.wx_login_show').hide();
			clearInterval(setval);
		});

		
		$('#acount_login').click(function(data) {
			$('#acount_login').removeClass().addClass('login_pop_up_cur');
			$('#mobile_login').removeClass();
			$('#login_normal_box').show();
			$('#login_sj_box').hide();
			$('#login_sjyz_box').hide();
			$('#act_login').val('0');
		});
		$('#mobile_login').click(function(data) {
			$('#mobile_login').removeClass().addClass('login_pop_up_cur');
			$('#acount_login').removeClass();
			$('#login_sj_box').show();
			$('#login_sjyz_box').show();
			$('#login_normal_box').hide();
			$('#act_login').val('1');
		});
	});

	function wxorderstatus() {
		$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'getwxloginstatus'),$_smarty_tpl);?>
', {
			t: 1
		}, function(data) {

			var data = eval('(' + data + ')');
			if(data.url != '' && data.msg != '') {
				layer.msg(data.msg, 2, 9, function() {
					window.location.href = data.url;
				});
			} else if(data.url) {

				window.location.href = '';
			}
		});
	}
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
