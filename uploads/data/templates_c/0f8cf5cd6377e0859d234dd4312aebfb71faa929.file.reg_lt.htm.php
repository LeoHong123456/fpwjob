<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-20 10:02:32
         compiled from "/www/fpwjob/uploads/app/template/wap/reg_lt.htm" */ ?>
<?php /*%%SmartyHeaderCode:20134481925e4de8b8b462f1-51767063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f8cf5cd6377e0859d234dd4312aebfb71faa929' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/reg_lt.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20134481925e4de8b8b462f1-51767063',
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
    'content' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4de8b8b975c0_81195176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4de8b8b975c0_81195176')) {function content_5e4de8b8b975c0_81195176($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style type="text/css">
    body {
        background: #fff
    }
</style>
<div class="yunwapreg_box">
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="login_reg"><span class="login_reg_s1">其他类型</span></a>
    <div class="reg_t_other"></div>
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
			</div>	
			
            <div class="regform">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=register&a=ltsave" onsubmit="return checkRegLt(this);" autocomplete="off">
                    <input id="qfyuid" name="qfyuid" type="hidden" value=""/>
                    <input name="usertype" id="usertype" type="hidden" value="3" />
                    <dl class="forminputitem" style="padding-top:0px;">
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n3 "></i>
                                <input class="inputitemtxt" placeholder="请填写用户名" name="username" id="username" type="text" onblur="check_username();">
                                <span class="reg_yes" style="display: none;" id="username_yes"></span>
                            </div>
                        </dd>
                        <dd>
                            <div class="c ico_pwd2 inputitem_w">
                                <i class="reg_icon_font login_icon_n2"></i>
                                <input class="inputitemtxt" onfocus="this.type='password'" placeholder="请填写密码，建议填写6-20位字母数字组合" name="password" id="password" type="text" onblur="check_password();">
                                <span class="reg_yes" style="display: none;" id="password_yes"></span>
                                <em class="viewpwd"></em></div>
                        </dd>
                        <dd>
                            <div class="c ico_pwd2 inputitem_w">
                                <i class="reg_icon_font login_icon_n2 "></i>
                                <input class="inputitemtxt" onfocus="this.type='password'" placeholder="请确认填写的密码" name="passconfirm" id="passconfirm" type="text" onblur="check_passconfirm();">
                                <span class="reg_yes" style="display: none;" id="passconfirm_yes"></span>
                                <em class="viewpwd"></em></div>
                        </dd>

                        <dd>
                            <div class="c inputitem_w ico_email">
                                <i class="reg_icon_font login_icon_n3 "></i>
                                <input class="inputitemtxt" placeholder="请填写您的邮箱" name="email" id="email" type="text" onblur="check_email();">
                                <span class="reg_yes" style="display: none;" id="email_yes"></span>
                            </div>
                        </dd>
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n4 "></i>
                                <input class="inputitemtxt" placeholder="请填写您的手机号码" name="moblie" id="moblie" type="tel" onblur="check_moblie();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
                                <span class="reg_yes" style="display: none;" id="moblie_yes"></span>
                            </div>
                        </dd>
                        <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
                        <dd>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
                            
                            <div id="mask"></div>
                            <div id="popup-captcha-mobile" data-id='subreg' data-type='click'></div>
                            <input type='hidden' id="popup-submit"> <?php } else { ?>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n8 "></i>
                                <div class="reg_yzm_box">  <input class="inputitemtxt" placeholder="请填写验证码，点图片换一换" name="checkcode" id="checkcode" type="text" maxlength="6" onblur="check_code()"/>
                                <div class="rg_img">
                                    <img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');" />
                                </div>
                                </div>
                                <span class="reg_yes reg_yes_yz" style="display: none;" id="checkcode_yes"></span>
                            </div>
                            <?php }?>
                        </dd>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n9 "></i>
                                <input class="inputitemtxt" placeholder="请填写短信验证码" name="moblie_code" id="moblie_code" type="text" onblur="check_moblie_code()"/>
                             
                                    <a class="login_m_send2" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取短信验证码</span></a>
                               
                                <span class="reg_yes reg_yes_yz"  style="display: none;" id="moblie_code_yes"></span>
                            </div>
                        </dd>

                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n6 "></i>
                                <input class="inputitemtxt" placeholder="请填写您的真实姓名" name="name" id="name" type="text" onblur="check_realname()">
                                <span class="reg_yes"  style="display: none;" id="realname_yes"></span>
                            </div>
                        </dd>
                        <?php }?>

                        <input type="hidden" id="send" value="0" />
                        <input type="hidden" id="isRealnameCheck" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_real_name_check'];?>
" />
                        <input type="submit" name="submit" id="subreg" value="提交" class="inputSubmit">
                        </dd>
                        <dd>
                            <div class="photochk" style="width:100%; padding:10px 0;">
                                <input id="xieyi" type="checkbox" name="xieyi" value="1" class="inputChk" checked="checked">
                                <em style="width:100%">我已阅读并同意《<a href="javascript:void(0);" onclick="showservices()"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
注册协议</a>》</em></div>
                        </dd>
                        <dd>
                    </dl>
                </form>
            </div>
        
        </article>
    </section>
 <style>
		#popup-captcha-mobile{ margin-top:15px; margin-bottom:15px;}
		#popup-captcha-mobile .geetest_radar_btn{border:1px solid #eee}
		 </style>
    
    <div style="width:100%;height:100%; background:rgba(51,51,51,0.5); position:fixed;left:0px;top:0px;z-index:100000000000;display:none" id="services">
        <div style="width:100%; position:absolute;left:0px;top:40px;">
            <div class="reg_xybox">
                <div class="reg_xybox_tit"><span class="reg_xybox_tit_s">注册协议</span>
                    <a href="javascript:void(0);" onclick="$('#services').hide();" class="reg_xybox_tit_a">关闭</a>
                </div>
                <div class="reg_xybox_p">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value['content'];?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="" style="padding:0px 10px; position:fixed;top:80px; z-index:10000001; display: none;" id="written_off">
        <div style="padding:10px;width:320px; background:#fff;">
            <div class="reg_have_tip">
                <i class="reg_have_tip_icon"></i>
                <div class="reg_have_tip_tit"><span id="zy_type">该手机号已被注册为企业账号</span></div>
                <div class="reg_have_tip_zc" id="zy_name"></div>
            </div>
            <div class="reg_have_tip_p">
                1.如果是你本人，但不记得密码，您可以找回密码
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'forgetpw'),$_smarty_tpl);?>
" class="reg_have_tip_bth">找回密码</a>
            </div>
            <div class="reg_have_tip_p">
				<span id="desc_toast">2. 解除手机号与该账号的绑定，解除绑定后，您无法 继续用该手机号登录</span>
                <a href="javascript:void(0);" onclick="CheckPW();" class="reg_have_tip_bth">解除绑定</a>
            </div>
            <div class="reg_have_tip_kf">如有疑问可拨打客服服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
            <input type="hidden" id="zy_uid" value="" />
            <input type="hidden" id="zy_mobile" value="" />
       		<input type="hidden" id="zy_email" value="" />

        </div>
    </div>

    <div class="tiny_show_tckbox" style="position:absolute;left:50%;bottom:220px; margin-left:-85px; z-index:10000;display:none;" id="postpw">
        <div class="tiny_show_tckbox_cont pw">
        </div>
    </div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
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
/js/reg_ajax.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
