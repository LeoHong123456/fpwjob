<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 11:36:54
         compiled from "/www/fpwjob/uploads/app/template/wap/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:8231027295dbcf9d6f36c73-22449665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f1baaaa74f07090ce7410c4e2de118cfa2cc21' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/login.htm',
      1 => 1572067844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8231027295dbcf9d6f36c73-22449665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wxid' => 0,
    'wxnickname' => 0,
    'wxpic' => 0,
    'maglogin' => 0,
    'config' => 0,
    'config_wapdomain' => 0,
    'checkurl' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbcf9d704c9a8_89723840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbcf9d704c9a8_89723840')) {function content_5dbcf9d704c9a8_89723840($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style type="text/css">
	body {
		background: #fff
	}
</style>
<div class="login_body">
	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="login_reg"><span class="login_reg_s1">注册</span></a>
	<section class="list">
		<article>
			<?php if ($_smarty_tpl->tpl_vars['wxid']->value&&($_smarty_tpl->tpl_vars['wxnickname']->value||$_smarty_tpl->tpl_vars['wxpic']->value)) {?>
			<div class="lg_at">
				<dl>
					<dt><img style="width:75px;height:75px;border-radius:50px;" src="<?php echo $_smarty_tpl->tpl_vars['wxpic']->value;?>
"/></dt>
					<dd class="lg_at_tit"><?php echo $_smarty_tpl->tpl_vars['wxnickname']->value;?>
</dd>
					<dd class="lg_at_cr">您已登录微信账号</dd>
				</dl>
			</div>

			<div class="lg_bd">
				<div class="lg_bd_z">绑定已有账号</div>
				<div class="lg_bd_r">如果您还没有会员账号，
					<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">请先注册！</a>
				</div>
			</div>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['maglogin']->value&&$_smarty_tpl->tpl_vars['maglogin']->value==1) {?>
			<div class="lg_at">
				<dl>
					<dt><img style="width:75px;height:75px;border-radius:50px;" src="<?php echo $_SESSION['mag']['head'];?>
"/></dt>
					<dd class="lg_at_tit"><?php echo $_SESSION['mag']['name'];?>
</dd>
					<dd class="lg_at_cr">您已经登录<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_magwebname'];?>
账号</dd>
				</dl>
			</div>

			<div class="lg_bd">
				<div class="lg_bd_z">绑定已有账号</div>
				<div class="lg_bd_r">如果您还没有会员账号，
					<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">请先注册！</a>
				</div>
			</div>
			<?php }?>
			
			
			<div id="qfydiv" style="display: none;">
				<div class="lg_at">
					<dl>
						<dt><img style="width:75px;height:75px;border-radius:50px;" id="qfyhead" src=""/></dt>
						<dd class="lg_at_tit" id="qfyname"></dd>
						<dd class="lg_at_cr">您已登录<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qfywebname'];?>
</dd>
					</dl>
				</div>

				<div class="lg_bd">
					<div class="lg_bd_z">绑定已有账号</div>
					<div class="lg_bd_r">如果您还没有会员账号，<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">请先注册！</a></div>
				</div>
			</div>	
			
			<div class="login_box_h1_d">
				<ul class="login_box_h_list">
					<li id="acount_login" class="login_box_h_list_cur">账户密码登录<i class="login_box_h_icon"></i></li>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
					<li id="mobile_login" class="">手机动态码登录 <i class="login_box_h_icon"></i></li>
					<?php }?>
				</ul>
			</div>

			<div class=" ">
				<div class="login_body_cont">
					<form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=login" method="post" onsubmit="return mlogin(this);">
						<input id="qfyuid" name="qfyuid" type="hidden" value=""/>
						<input type="hidden" name="act_login" id="act_login" value="0" />
						<input name="usertype" type="hidden" value="<?php echo $_GET['usertype'];?>
" />
						<input name="wxid" type="hidden" value="<?php echo $_GET['wxid'];?>
" /> 
						<?php if ($_GET['job']) {?>
						<input name="job" type="hidden" value="<?php echo $_GET['job'];?>
" /> 
						<?php }?>

						<dl class="forminputitem" id="login_normal_box" style="padding-top:0px;">
							<dd>
								<div class="c inputitem_w">
									<i class="reg_icon_font login_icon_n1 "></i>
									<input name="username" type="text" id="username" value="<?php echo $_GET['username'];?>
" placeholder="邮箱/手机号/用户名" class="inputitemtxt" />
								</div>
							</dd>
							<dd>
								<div class="c ico_eye_close inputitem_w">
									<i class="reg_icon_font login_icon_n2 "></i>
									<input name="password" type="password" id="password" class="inputitemtxt" placeholder="请输入密码" />
									<em class="viewpwd" id="showPwd" onclick="showPwd(this)"></em>
								</div>
							</dd>
						</dl>

						
						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
						<div class="login_sj_box" id="login_sj_box" style="display:none;">
							<div class="c inputitem_w">
								<i class="reg_icon_font login_icon_n4 "></i>
								<input name="moblie" id="usermoblie" type="number" class="inputitemtxt" value="" placeholder="请输入手机号码" />
								<div class="logoin_msg none" id="show_mobile">
									<div class="logoin_msg_tx">请填写正确的手机号</div>
									<div class="logoin_msg_icon"></div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<?php }?> 
						<?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'前台登录')) {?>
						<div style="margin-bottom:10px;">
							<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
							
							<div id="mask"></div>
							<div id="popup-captcha-mobile" data-id='sublogin' data-type='click'></div>
							<input type='hidden' id="popup-submit" /> 
							<?php } else { ?>
							<div class="c ico_name inputitem_w login_sj_box_mb">
								<i class="reg_icon_font login_icon_tpyz "></i>
								<input class="inputitemtxt" placeholder="请填写验证码，点图片换一换" name="authcode" id="checkcode" type="text" maxlength="6" />
								<div class="rg_img" style="top:12px;">
									<img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');" />
								</div>
							</div>
							<?php }?>
						</div>
						<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
						<div class="login_sj_box_mb" id="login_sjyz_box" style="display:none;">
							<div class="c ico_name inputitem_w">
								<i class="reg_icon_font login_icon_n8 "></i>
								<input name="dynamiccode" type="text" class="inputitemtxt" id="dynamiccode" value="" placeholder="请输入短信验证码" />
								<div class="logoin_msg none" id="show_dynamiccode">
									<div class="logoin_msg_tx">请填写发送的验证码</div>
									<div class="logoin_msg_icon"></div>
								</div>
								<a href="javascript:void(0);" class="login_m_send2" id="send_msg_tip" onclick="send_msg('<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=login&a=sendmsg');">获取动态验证码</a>
							</div>
						</div>
						<?php }?> 
						<?php ob_start();
echo smarty_function_url(array('m'=>'wap','c'=>'forgetpw'),$_smarty_tpl);
$_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['checkurl']->value!=$_tmp1) {?>
						<input type="hidden" name="checkurl" value="<?php echo $_smarty_tpl->tpl_vars['checkurl']->value;?>
" /> 
						<?php }?>
						<div class="login_bth"> <input type="submit" name="submit" id="sublogin" value="登录" class="inputSubmit mt15" /></div>
					</form>
					<div class="login_body_xc">
						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'forgetpw'),$_smarty_tpl);?>
" class="loginuser_pw">忘记密码?</a>
						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="loginuser_reg">新用户注册</a>
					</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1||($_smarty_tpl->tpl_vars['config']->value['wx_rz']==1&&!$_smarty_tpl->tpl_vars['wxid']->value)) {?>
			<div class="login_other">
				<span class="login_other_span">其他方式登录</span> 
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_rz']==1&&!$_smarty_tpl->tpl_vars['wxid']->value) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'wxconnect'),$_smarty_tpl);?>
" title="wx" class="login_other_icon login_other_wx"><i class="iconfont_wx"></i></a>
				<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php" title="QQ" class="login_other_icon login_other_qq"><i class="iconfont_qq"></i></a>
				<?php }?> 
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'sinaconnect'),$_smarty_tpl);?>
" title="sina" class="login_other_icon login_other_xl"><i class="iconfont_sina"></i></a>
				<?php }?> 
				
			
			</div>
			<?php }?>
		</article>
	</section>

</div>
<style>
	#popup-captcha-mobile {
		margin-top: 15px;
	}
	
	#popup-captcha-mobile .geetest_radar_btn {
		border: 1px solid #eee
	}
</style>

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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/mobile.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$(document).ready(function() {
		$("#username,#txt_CheckCode,#usermoblie,#dynamiccode").focus(function() {
			var txAreaVal = $(this).val();
			if(txAreaVal == this.defaultValue) {
				$(this).val("");
			}
		}).blur(function() {
			var txAreaVal = $(this).val();
			if(txAreaVal == this.defaultValue || $(this).val() == "") {
				$(this).val(this.defaultValue);
			}
		}).keydown(function(e) {
			var ev = document.all ? window.event : e;
			if(ev.keyCode == 13) {
				check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
', 'vcode_imgs');
			} else {
				return;
			}

		});
		
		$('#acount_login').click(function(data) {
			$('#acount_login').removeClass().addClass('login_box_h_list_cur');
			$('#mobile_login').removeClass();
			$('#login_normal_box').show();
			$('#login_sj_box').hide();
			$('#login_sjyz_box').hide();
			$('#act_login').val('0');
		});
		$('#mobile_login').click(function(data) {
			$('#mobile_login').removeClass().addClass('login_box_h_list_cur');
			$('#acount_login').removeClass();
			$('#login_sj_box').show();
			$('#login_sjyz_box').show();
			$('#login_normal_box').hide();
			$('#act_login').val('1');
		});
		
		QFH5ready();
	});

	var Timer;
	var smsTimer_time = 90; 
	var smsTimer_flag = 90; 
	var smsTime_speed = 1000; 

	
	function send_msg(url) {
		var moblie = $('#usermoblie').val();
		var code;
		var geetest_challenge;
		var geetest_validate;
		var geetest_seccode;
		if(moblie == "" || moblie == "请输入手机号码") {

			layermsg("请输入手机号码！");
			return false;
		} else {

			var reg = /^\d{5,15}$/;
			if(!reg.test(moblie)) {
				layermsg('手机格式错误！');
				return false;
			}
		}
		var codesear = new RegExp('前台登录');
		if(codesear.test(code_web)) {
			if(code_kind == 1) {
				code = $.trim($("#checkcode").val());
				if(!code) {
					layermsg('请填写图片验证码！');
					return false;
				}
			} else if(code_kind == 3) {

				geetest_challenge = $('input[name="geetest_challenge"]').val();
				geetest_validate = $('input[name="geetest_validate"]').val();
				geetest_seccode = $('input[name="geetest_seccode"]').val();

				if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {
					$("#popup-submit").trigger("click");
					layermsg('请点击按钮进行验证！');
					return false;
				}
			}
		}

		if(smsTimer_time == smsTimer_flag) {
			Timer = setInterval("smsTimer($('#send_msg_tip'))", smsTime_speed);
			$.post(url, {
				moblie: moblie,
				authcode: code,
				geetest_challenge: geetest_challenge,
				geetest_validate: geetest_validate,
				geetest_seccode: geetest_seccode
			}, function(data) {
				
				var jsonObject = eval("(" + data + ")");

				if(jsonObject.error !== 1) {
					clearInterval(Timer);
				}
				layermsg(jsonObject.msg, 2, function() {
					if(code_kind == 1) {

						checkCode('vcode_img');
					} else if(code_kind == 3) {

						$("#popup-submit").trigger("click");
					}
					if(jsonObject.url) {
						window.location.href = jsonObject.url;
						window.event.returnValue = false;
						return false;
					}
				});
			})
		} else {
			layermsg('请勿重复发送！', 2, 8);
			return false;
		}
	}
	
	function testMb(mbNo) {

		var reg = /^\d{5,15}$/;

		return reg.test(mbNo);
	}
	
	function smsTimer(obj) {
		if(smsTimer_flag > 0) {
			$(obj).html('重新发送(' + smsTimer_flag + 's)');
			$(obj).attr({
				'style': 'background:#eaebed;'
			});
			smsTimer_flag--;
		} else {
			$(obj).html('重新发送');
			$(obj).attr({
				'style': 'background:#eaebed;'
			});
			smsTimer_flag = smsTimer_time;
			clearInterval(Timer);
		}
	}
	
	function QFH5ready(){
		if(typeof QFH5 !== "undefined"){
			QFH5.getUserInfo(function(state,data){
		      if(state==1){
		        
		        var uid = data.uid;
		        var username = data.username;
		        var face = data.face;
				document.getElementById('qfyuid').value = uid;
				document.getElementById('qfyname').innerHTML = username;
				document.getElementById('qfyhead').setAttribute('src',face);
				document.getElementById('qfydiv').style.display = 'block';
				layer_load('加载中');
				$.post('index.php?c=login&a=qfybind',{qfyuid:uid},function(data){
					layer.closeAll();
					var jsonObject = eval("(" + data + ")");
					if(jsonObject.error>0){
						window.location.href = wapurl + jsonObject.url;
					}
				})
		      }
		    })
		}
	}
<?php echo '</script'; ?>
>
<div style='display:none;' id='uclogin'></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
