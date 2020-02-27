<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-29 04:56:45
         compiled from "/www/fpwjob/uploads/app/template/default/forgetpw/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:10963163135e30a00dbbcc52-26970721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515bdadcea117102d4938bd95de4e7d113c4e39e' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/forgetpw/index.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10963163135e30a00dbbcc52-26970721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e30a00dbdce81_94507270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e30a00dbdce81_94507270')) {function content_5e30a00dbdce81_94507270($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/login.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
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
    </head>
	
    <body>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--内容部分-->
        <div class="yun_content">
            <form class="layui-form">
                <div class="password_content_cont fl m15">
                    <div class="password_content_cpd">
                        <div class="password_content_h1"><span class="password_content_h1_span">找回密码</span></div>

                        <div class="password">
                            <div class="flowsteps">

                                <ul>
                          <li class="flowsfrist" id="nav1">
                          <i class="flowsfrist_icon flowsfrist_icon_zh"></i>
                          <span class="flowsfrist_line"></span><em>填写账号</em>
                          </li>
                     
                      <li id="nav2">
                      <i class="flowsfrist_icon flowsfrist_icon_ps"></i>
                      <span class="flowsfrist_line"></span><em>重置密码</em>
                      </li>
                     
                     <li id="nav3">
                     <i class="flowsfrist_icon flowsfrist_icon_cg"></i><em id="shensu_e">密码修改成功</em>
                     </li>
                                </ul>

                            </div>

                            <div class="clear"></div>

                          	<div class="account_all" >

                                <div class="password_chlose"  id="pw_style">
                                
                                        <select name="pwtype" lay-filter="pwtype">
                                            <option value="1">通过手机找回密码</option>
                                            <option value="2">通过邮箱找回密码</option>
                                            <option value="3">账号申诉</option>
                                        </select>
                                   
                                    <input type="hidden" id="sendtype" name="sendtype" value="mobile">
                                </div>

                                <div class="clear"></div>

                                <div class="tele_show listitme_group" id="mobile_type">
                                    <div class="selec_ttip">系统将发送验证码短信到您的手机上，请注意查收</div>

                                    <div class="validate_group">
                                        <div class="account_td1">
                                            <input class="input_295_34" name="mobile" id="mobile" type="text" placeholder="请输入手机号" onblur="isChecked('mobile')">
                                         </div>
                                        
                                        <div class="account_td1">
                                            <div class="code_all">
                                                <input name="mobile_vcode" id="mobile_vcode" type="text" class="input_295_35" placeholder="请输入短信验证码" >
                                                <input type="button" class="btn_yell J_hoverbut msg_tip" id="send_msg_tip" onclick="send_msg()" value="获取验证码">
                                            </div>
                                        </div>
                                        
                                        <div class="btnbox">
                                            <input type="button" value="下一步" class="btn_reg J_hoverbut" onclick="forgetPwNext()">
                                        </div>
                                    </div>
                                </div>

                                <div class="tele_show listitme_group" style="display: none;" id="email_type">

                                    <div class="selec_ttip">系统将发送验证码发到您的邮箱中，请注意查收</div>
                                    <div class="validate_group">
                                        <div class="account_td1">
                                            <input class="input_295_34" name="email" id="email" type="text" placeholder="请输入邮箱账户" onblur="isChecked('email')">
                                        </div>
                                        <div class="account_td1">
                                            <div class="code_all">
                                                <input name="email_vcode" id="email_vcode" type="text" class="input_295_35" placeholder="请输入邮箱验证码">
                                                <input type="button" class="btn_yell J_hoverbut msg_tip" id="send_email_tip" onclick="send_email()" value="获取验证码">
                                            </div>
                                        </div>
                                        <div class="btnbox">
                                            <input type="button" value="下一步" class="btn_reg J_hoverbut" onclick="forgetPwNext()">
                                        </div>
                                    </div>
                                </div>

                                <div class="tele_show listitme_group" style="display: none;" id="shensu_type">
                                    <div class="selec_ttip">信息提交后 , 客服人员会电话回访 , 确认身份！</div>
                                    <div class="validate_group">
                                        <div class="reset_all">
                                            <input class="reset_chong_zhi" type="text" name="username" id="username" autocomplete="off" maxlength="20" placeholder="请输入用户名" value="">
                                            <input class="reset_chong_zhi" type="text" name="linkman" id="linkman" autocomplete="off" maxlength="20" placeholder="请输入联系人" value="">
                                            <input class="reset_chong_zhi" type="text" name="linkphone" id="linkphone" autocomplete="off" maxlength="20" placeholder="请输入联系电话" value="">
                                            <input class="reset_chong_zhi" type="text" name="linkemail" id="linkemail" autocomplete="off" maxlength="20" placeholder="请输入联系邮箱" value="">

                                            <div class="btnbox">
                                                <input type="button" value="下一步" class="btn_reg J_hoverbut" onclick="checklink()">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="verification" style="display:none;" id="resetpw">
                        <div class="reset_all">
                            <input class="reset_chong_zhi" type="password" name="password" id="password" autocomplete="off" maxlength="20" placeholder="请输入新密码" value="" onblur="isChecked('password')" onkeyup="uppassword(2)">
                        </div>
                        
                        <div class="safety">
							<div id="pass1_2" class="slist_dan">危险</div>
                            <div id="pass2_2" class="slist_dan">一般</div>
                            <div id="pass3_2" class="slist_dan">安全</div>
                            <div class="clear"></div>
                        </div>
                        <div class="reset_all">
                            <input class="reset_chong_zhi" type="password" name="passwordconfirm" id="passwordconfirm" autocomplete="off" maxlength="20" placeholder="请确认新密码" value="" onblur="isChecked('passwordconfirm')">
                        </div>
                        <div class="btnbox">
                            <input type="hidden" id="uname" value="">
							<input type="hidden" id="fuid" value="">
							
							<input type="hidden" id="fmobile" value="">
							<input type="hidden" id="femail" value="">
							<input type="hidden" id="fcode" value="">

                            <input type="button" value="下一步" class="btn_reg J_hoverbut" onclick="editpw()">
                        </div>
                    </div>
                    
                    <div class="password_cont none" id="pw_success">
                    	<div class="password_cgd_i"></div>
                       	<div class="password_cgd_w">恭喜您！密码重置成功！</div>
                       	<div class="password_cgd_w_bth">
                         	<a href="<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
" class="uesr_submit">立即登录</a>
                    	</div>
                 	</div>
                        
                 	<div class="password_cont none" id="finish">
                       	<div class="password_cgd" style="width:100%; text-align:center">请耐心等待，稍后客服人员会联系您！</div>
                      	<div class="password_cgd_bth"  style="width:100%; text-align:center">
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" class="uesr_submit">返回首页</a>
                     	</div>
                 	</div>
                    <div class="clear"></div>
                     <div class="password_tip">
                                    <div class="password_tip_t">温馨提示</div>
                                    <p>如手机号码已丢失且未绑定邮箱</p>
                                    <p>请联系在线客服,或拨打全国统一服务热线</p>
                                    <div class="password_tip_tel"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
 </div>
                                </div>
                </div>
            </form>
        </div>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/forgetpw.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
        <!--[if IE 6]>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		DD_belatedPNG.fix('.png');
		<?php echo '</script'; ?>
>
		<![endif]-->

        <?php echo '<script'; ?>
>
            layui.use(['form', 'layer'], function() {
                var form = layui.form,
					$ = layui.$;

                form.on('select(pwtype)', function(data) {
                    if(data.value == 1) {
                        $("#mobile_type").show();
                        $("#email_type").hide();
                        $("#shensu_type").hide();
                        $("#sendtype").val("mobile");
                    } else if(data.value == 2) {
                        $("#mobile_type").hide();
                        $("#email_type").show();
                        $("#shensu_type").hide();
                        $("#sendtype").val("email");
                    } else if(data.value == 3) {
                        $("#mobile_type").hide();
                        $("#email_type").hide();
                        $("#shensu_type").show();
                        $("#sendtype").val("shensu");
                    }
                });
            });
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
