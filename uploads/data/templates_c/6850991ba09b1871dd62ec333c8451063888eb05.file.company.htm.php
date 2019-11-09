<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:09:10
         compiled from "/www/fpwjob/uploads/app/template/default/register/company.htm" */ ?>
<?php /*%%SmartyHeaderCode:738688285dc522a66acad7-86637000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6850991ba09b1871dd62ec333c8451063888eb05' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/register/company.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '738688285dc522a66acad7-86637000',
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
    'type' => 0,
    'reg_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc522a67adac6_77341017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc522a67adac6_77341017')) {function content_5dc522a67adac6_77341017($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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
>
            var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",
                integral_pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',
                pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',
                code_web = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
',
                code_kind = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';
        <?php echo '</script'; ?>
>
    </head>

    <body class="register_bg">
        <div class="register_header">
            <div class="reg_w980">
                <div class="reg_logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
" class="png" /></a>
                </div>
                <div class="reg_msg">招聘者注册</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" class="reg_fh yun_text_color fr">返回首页</a>
            </div>
        </div>
        <div class="reg_content">
            <div class="logoin_cont fl">

                <div class="register_left">
                    <div class="reg_newtit_box">
                        <ul class="reg_newtit">
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_moblie']=='1') {?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?>reg_newtit_cur<?php }?>">
                                <a class="reg_h1_icon" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>2,'type'=>2),$_smarty_tpl);?>
"><i class="reg_newtit_icon"></i>手机注册</a>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_email']=='1') {?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['type']->value==3) {?>reg_newtit_cur<?php }?>">
                                <a class="reg_h1_icon" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>2,'type'=>3),$_smarty_tpl);?>
"><i class="reg_newtit_icon"></i>邮箱注册</a>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_user']=='1') {?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>reg_newtit_cur<?php }?>">
                                <a class="reg_h1_icon" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>2,'type'=>1),$_smarty_tpl);?>
"><i class="reg_newtit_icon"></i>用户名注册</a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>

                    <?php if (($_smarty_tpl->tpl_vars['type']->value==2||$_smarty_tpl->tpl_vars['type']->value=='')&&$_smarty_tpl->tpl_vars['config']->value['reg_moblie']) {?>
                    <div class="register_Switching_box" id="regtype2">
                        <ul class="register_list">
                            <li class="mt30"><em><font color="#FF0000">*</font> 手机号：</em>
                                <input type="text" class="logoin_text tips_class" id="moblie" onBlur="reg_checkAjax('moblie');" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" placeholder="请输入您的手机号码" />
                                <span class="reg_tips reg_tips_red none" id="ajax_moblie"></span>
                            </li>
                            <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
                            <li class="mt30">
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
                                <em><font color="#FF0000">*</font> 安全验证：</em>
                                <div class="reg_verification">
                                    <div id="popup-captcha" data-id='subreg' data-type='click'></div>
                                    <input type='hidden' id="popup-submit">
                                </div>
                                <?php } else { ?>

                                <em><font color="#FF0000">*</font> 验证码：</em>
                                <div class="reg_textbox">
                                    <input id="CheckCode" type="text" class="logoin_textw150 tips_class" onBlur="reg_checkAjax('CheckCode');" maxlength="6" placeholder="请输入图片验证码" onfocus="checkCode('vcode_img')" autocomplete="off"/>
                                    <a href="javascript:void(0);" onclick="checkCode('vcode_img');" class="registe_yzm"><img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /></a>
                                </div>
                                <span class="reg_tips reg_tips_red none" id="ajax_CheckCode"></span> <?php }?>
                            </li>

                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_regcode']==1||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 短信验证：</em>
                                <div class="reg_textbox"><input type="text" id="moblie_code" class="logoin_text tips_class" onBlur="reg_checkAjax('moblie_code');" placeholder="请输入短信验证码" />
                                    <i class="reg_textbox_line"></i>
                                    <a class="reg_dxyz" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取短信验证</span></a>
                                </div>
                                <span class="reg_tips reg_tips_red none" id="ajax_moblie_code"></span>
                            </li>
                            <?php }?>

                            <li class="mt30"><em><font color="#FF0000">*</font> 密&nbsp;&nbsp;码：</em>
                                <span id="pass2"><input type="password" onkeyup="uppassword(2)" id="password" onBlur="reg_checkAjax('password');" class="logoin_text tips_class" value="" placeholder="请输入6-20位（字母、数字、符号）"/></span>
                                <span class="reg_tips reg_tips_red none" id="ajax_password"></span>
                            </li>
                            <li><em>&nbsp;</em>
                                <div class="kg_lgn_psw_strong">
                                    <div class="kg_lgn_psw_txt">密码强度:</div>
                                    <div class="kg_lgn_psw_strong_cnt">
                                        <span id="pass1_2" class="psw_span">危险</span>
                                        <span id="pass2_2" class="psw_span ">一般</span>
                                        <span id="pass3_2" class="psw_span ">安全</span>
                                    </div>
                                    <div class="psw_xs" onmousemove="showtip(2)" onmouseout="hidetip(2)">
                                        <a href="javascript:void(0);" onclick="showpw(2)" id="showpw2" class="psw_xs_a">显示密码</a>
                                        <i class="psw_xs_icon"></i>
                                        <div class="psw_xs_tips none" id="tip2">你可以点击这里检查已填写的密码</div>
                                    </div>
                                </div>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
                            <li class="mt20"><em><font color="#FF0000">*</font> 确认密码：</em>
                                <span id="pass1"><input type="password" id="passconfirm" onBlur="reg_checkAjax('passconfirm');" class="logoin_text tips_class" value=""/placeholder="请确认您输入的密码"></span>
                                <span class="reg_tips reg_tips_red none" id="ajax_passconfirm"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comname']=='1') {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 公司名称：</em>
                                <input type="text" id="unit_name" class="logoin_text tips_class" onBlur="reg_checkAjax('unit_name');" placeholder="请输入您贵公司名称" />
                                <span class="reg_tips reg_tips_red none" id="ajax_unit_name"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comaddress']=='1') {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 公司地址：</em>
                                <input type="text" id="address" class="logoin_text tips_class" onBlur="reg_checkAjax('address');" placeholder="请输入您的公司地址" />
                                <span class="reg_tips reg_tips_red none" id="ajax_address"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1||$_smarty_tpl->tpl_vars['config']->value['reg_comlink']==1) {?>
                            <li class="mt30">
                                <em><font color="#FF0000">*</font> 联系人真实姓名：</em>
                                <input type="text" id="linkman" class="logoin_text tips_class" onBlur="reg_checkAjax('linkman');" placeholder="请输入您的真实姓名" />
                                <span class="reg_tips reg_tips_red none" id="ajax_linkman"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comemail']=='1') {?>
                            <li class="mt30 reg_re2"><em><font color="#FF0000">*</font> 邮&nbsp;&nbsp;箱：</em>
                                <input type="text" class="logoin_text tips_class" id="email1" onkeyup="get_def_email(this.value,'1');" placeholder="请输入您的邮箱" />
                                <div class="reg_email_box none" id="defemail1"></div>
                                <span class="reg_tips reg_tips_red none" id="ajax_email1"></span>
                            </li>
                            <?php }?>

                            <li class="mt30"><em>&nbsp;</em><input type="button" class="register_submit" id='subreg' value="立即注册" onclick="check_user(2,'vcode_img');" /></li>
                            <li class="m10">
                                <em>&nbsp;</em>
                                <div class="reg_xy">
                                    点击注册即表示您同意
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/about/service.html" target="_blank" class="reg_yhxy">用户协议</a>
                                    <input type="checkbox" id="xieyi2" class="logoin_check none" value="1" checked="checked" />
                                </div>
                            </li>

                        </ul>
                    </div>

                    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==3&&$_smarty_tpl->tpl_vars['config']->value['reg_email']==1) {?>
                    <div class="register_Switching_box" id="regtype3">
                        <ul class="register_list">
                            <li class="mt30 reg_re"><em><font color="#FF0000">*</font> 邮&nbsp;&nbsp;箱：</em>
                                <input type="text" class="logoin_text tips_class" id="email3" onkeyup="get_def_email(this.value,'3');" placeholder="请输入您的邮箱作为账号" />
                                <div class="reg_email_box none" id="defemail3"></div>
                                <span class="reg_tips reg_tips_red none" id="ajax_email3"></span>
                            </li>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comtel']==1||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 手机号码：</em>
                                <input type="text" class="logoin_text tips_class" id="moblie" onBlur="reg_checkAjax('moblie');" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" placeholder="请输入您的手机号码" />
                                <span class="reg_tips reg_tips_red none" id="ajax_moblie"></span>
                            </li>
                            <?php }?> <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
                            <li class="mt30">
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
                                <em><font color="#FF0000">*</font> 安全验证：</em>
                                <div class="reg_verification">
                                    <div id="popup-captcha" data-id='subreg' data-type='click'></div>
                                    <input type='hidden' id="popup-submit">
                                </div>
                                <?php } else { ?>
                                <em><font color="#FF0000">*</font> 验证码：</em>
                                <div class="reg_textbox"><input id="CheckCode" type="text" class="logoin_textw150 tips_class" onBlur="reg_checkAjax('CheckCode');" maxlength="6" placeholder="请输入图片验证码" onfocus="checkCode('vcodeimg')" autocomplete="off"/>
                                    <a href="javascript:void(0);" onclick="checkCode('vcodeimg');" class="registe_yzm"> <img id="vcodeimg" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" />
                                    </a>
                                </div>
                                <span class="reg_tips reg_tips_red none" id="ajax_CheckCode"></span> <?php }?>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 短信验证：</em>
                                <div class="reg_textbox"><input type="text" id="moblie_code" class="logoin_text tips_class" onBlur="reg_checkAjax('moblie_code');" placeholder="请输入短信验证" /><i class="reg_textbox_line"></i>
                                    <a class="reg_dxyz" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取短信验证</span></a>
                                </div>
                                <span class="reg_tips reg_tips_red none" id="ajax_moblie_code"></span>
                            </li>
                            <?php }?>

                            <li class="mt30"><em><font color="#FF0000">*</font> 密&nbsp;&nbsp;码：</em>
                                <span id="pass3"><input type="password" onkeyup="uppassword(3)" id="password" onBlur="reg_checkAjax('password');" class="logoin_text tips_class"placeholder="请输入6-20位（字母、数字、符号）" value=""/></span>
                                <span class="reg_tips reg_tips_red none" id="ajax_password"></span>
                            </li>
                            <li><em>&nbsp;</em>
                                <div class="kg_lgn_psw_strong">
                                    <div class="kg_lgn_psw_txt">密码强度:</div>
                                    <div class="kg_lgn_psw_strong_cnt">
                                        <span id="pass1_3" class="psw_span">危险</span>
                                        <span id="pass2_3" class="psw_span ">一般</span>
                                        <span id="pass3_3" class="psw_span ">安全</span>
                                    </div>
                                    <div class="psw_xs" onmousemove="showtip(3)" onmouseout="hidetip(3)">
                                        <a href="javascript:void(0);" onclick="showpw(3);" id="showpw3" class="psw_xs_a">显示密码</a>
                                        <i class="psw_xs_icon"></i>
                                        <div class="psw_xs_tips none" id="tip3">你可以点击这里检查已填写的密码</div>
                                    </div>
                                </div>
                            </li>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
                            <li class="mt20"><em><font color="#FF0000">*</font> 确认密码：</em>
                                <span id="pass1"><input type="password" id="passconfirm" onBlur="reg_checkAjax('passconfirm');" class="logoin_text tips_class" value=""placeholder="请确认您输入的密码"></span>
                                <span class="reg_tips reg_tips_red none" id="ajax_passconfirm"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comname']=='1') {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 公司名称：</em>
                                <input type="text" id="unit_name" class="logoin_text tips_class" onBlur="reg_checkAjax('unit_name');" placeholder="请输入您贵公司名称" />
                                <span class="reg_tips reg_tips_red none" id="ajax_unit_name"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comaddress']=='1') {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 公司地址：</em>
                                <input type="text" id="address" class="logoin_text tips_class" onBlur="reg_checkAjax('address');" placeholder="请输入您的公司地址" />
                                <span class="reg_tips reg_tips_red none" id="ajax_address"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comlink']==1||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
                            <li class="mt30">
                                <em><font color="#FF0000">*</font> 联系人真实姓名：</em>
                                <input type="text" id="linkman" class="logoin_text tips_class" onBlur="reg_checkAjax('linkman');" />
                                <span class="reg_tips reg_tips_red none" id="ajax_linkman"></span>
                            </li>
                            <?php }?>

                            <li class="mt30"><em>&nbsp;</em><input type="button" class="register_submit" id="subreg" value="立即注册" onclick="check_user(3,'vcodeimg');" /></li>
                            <li class="m10">
                                <em>&nbsp;</em>
                                <div class="reg_xy">
                                    点击注册即表示您同意
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/about/service.html" target="_blank" class="reg_yhxy">用户协议</a>
                                    <input type="checkbox" id="xieyi3" class="logoin_check none" value="1" checked="checked" />
                                </div>
                            </li>

                        </ul>
                    </div>

                    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==1&&$_smarty_tpl->tpl_vars['config']->value['reg_user']==1) {?>
                    <div class="register_Switching_box" id="regtype1">
                        <ul class="register_list">
                            <li class="mt30"><em><font color="#FF0000">*</font> 用户名：</em>
                                <input type="text" id="username1" class="logoin_text tips_class" onBlur="reg_checkAjax('username1');" placeholder="请输入用户名作为账号" />
                                <span class="reg_tips reg_tips_red none" id="ajax_username1"></span>
                            </li>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comtel']==1||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 联系手机：</em>
                                <input type="text" id="moblie" class="logoin_text tips_class" onBlur="reg_checkAjax('moblie');" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" placeholder="请输入您的手机号码" />
                                <span class="reg_tips reg_tips_red none" id="ajax_moblie"></span>
                            </li>
                            <?php }?> <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
                            <li class="mt30">
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
                                <em><font color="#FF0000">*</font> 安全验证：</em>
                                <div class="reg_verification">
                                    <div id="popup-captcha" data-id='subreg' data-type='click'></div>
                                    <input type='hidden' id="popup-submit">
                                </div>
                                <?php } else { ?>

                                <em><font color="#FF0000">*</font> 验证码：</em>
                                <div class="reg_textbox">
                                    <input id="CheckCode" type="text" class="logoin_textw150 tips_class" onBlur="reg_checkAjax('CheckCode');" maxlength="6" placeholder="请输入图片验证码" onfocus="checkCode('vcode_imgs')" autocomplete="off"/>
                                    <a href="javascript:void(0);" onclick="checkCode('vcode_imgs');" class="registe_yzm"><img id="vcode_imgs" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /></a>
                                </div>
                                <span class="reg_tips reg_tips_red none" id="ajax_CheckCode"></span> <?php }?>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 短信验证：</em>
                                <div class="reg_textbox"><i class="reg_textbox_line"></i><input type="text" id="moblie_code" class="logoin_text tips_class" onBlur="reg_checkAjax('moblie_code');" placeholder="请输入短信验证码" />
                                    <a class="reg_dxyz" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取短信验证</span></a>
                                </div>
                                <span class="reg_tips reg_tips_red none" id="ajax_moblie_code"></span>
                            </li>
                            <?php }?>

                            <li class="mt30"><em><font color="#FF0000">*</font> 密&nbsp;&nbsp;码：</em>
                                <span id="pass1"><input type="password" onkeyup="uppassword(1)" id="password" onBlur="reg_checkAjax('password');" class="logoin_text tips_class" value="" placeholder="请输入6-20位（字母、数字、符号）"/></span>
                                <span class="reg_tips reg_tips_red none" id="ajax_password"></span>
                            </li>
                            <li class="reg_re"><em>&nbsp;</em>
                                <div class="kg_lgn_psw_strong">
                                    <div class="kg_lgn_psw_txt">密码强度:</div>
                                    <div class="kg_lgn_psw_strong_cnt">
                                        <span id="pass1_1" class="psw_span">危险</span>
                                        <span id="pass2_1" class="psw_span ">一般</span>
                                        <span id="pass3_1" class="psw_span ">安全</span>
                                    </div>
                                    <div class="psw_xs" onmousemove="showtip(1)" onmouseout="hidetip(1)">
                                        <a href="javascript:void(0);" onclick="showpw(1);" id="showpw1" class="psw_xs_a">显示密码</a>
                                        <i class="psw_xs_icon"></i>
                                        <div class="psw_xs_tips none" id="tip1">你可以点击这里检查已填写的密码</div>
                                    </div>
                                </div>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
                            <li class="mt20"><em><font color="#FF0000">*</font> 确认密码：</em>
                                <span id="pass1"><input type="password" id="passconfirm" onBlur="reg_checkAjax('passconfirm');" class="logoin_text tips_class" value="" placeholder="请确认您输入的密码"/></span>
                                <span class="reg_tips reg_tips_red none" id="ajax_passconfirm"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comname']=='1') {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 公司名称：</em>
                                <input type="text" id="unit_name" class="logoin_text tips_class" onBlur="reg_checkAjax('unit_name');" placeholder="请输入您贵公司名称" />
                                <span class="reg_tips reg_tips_red none" id="ajax_unit_name"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comaddress']=='1') {?>
                            <li class="mt30"><em><font color="#FF0000">*</font> 公司地址：</em>
                                <input type="text" id="address" class="logoin_text tips_class" onBlur="reg_checkAjax('address');" placeholder="请输入您的公司地址" />
                                <span class="reg_tips reg_tips_red none" id="ajax_address"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comlink']==1||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
                            <li class="mt30">
                                <em><font color="#FF0000">*</font> 联系人：</em>
                                <input type="text" id="linkman" class="logoin_text tips_class" onBlur="reg_checkAjax('linkman');" placeholder="请输入您的联系称呼" />
                                <span class="reg_tips reg_tips_red none" id="ajax_linkman"></span>
                            </li>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comemail']=='1') {?>
                            <li class="mt30 reg_re2"><em><font color="#FF0000">*</font> 邮&nbsp;&nbsp;箱：</em>
                                <input type="text" class="logoin_text tips_class" id="email1" onkeyup="get_def_email(this.value,'1');" placeholder="请输入您的邮箱" />
                                <div class="reg_email_box none" id="defemail1"></div>
                                <span class="reg_tips reg_tips_red none" id="ajax_email1"></span>
                            </li>
                            <?php }?>

                            <li class="mt30"><em>&nbsp;</em><input type="button" class="register_submit" id='subreg' value="立即注册" onclick="check_user('1','vcode_imgs');" /></li>
                            <li class="m10">
                                <em>&nbsp;</em>
                                <div class="reg_xy">
                                    点击注册即表示您同意
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/about/service.html" target="_blank" class="reg_yhxy">用户协议</a>
                                    <input type="checkbox" id="xieyi1" class="logoin_check none" value="1" checked="checked" />
                                </div>
                            </li>
                        </ul>
                    </div>
                    <?php }?>

                    <input type="hidden" id="default" value="-1" />
                    <input type="hidden" id="def" value="" />
                    <input type="hidden" id="event" value="" />
                    <input type="hidden" id="allnum" value="0" />
                    <input type="hidden" id="send" value="0" />
                    <input type="hidden" id="usertype" value="2" />
                    <input type="hidden" id="defEmail" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_def_email'];?>
" />
                </div>
                <div class="register_right">
                    <span class="register_right_or">or</span>
                    <div class="register_right_reg">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['reg_url']->value;?>
">我要找工作 ></a>
                    </div>
                    <div class="register_right_c">
                        已有账号
                        <div class="">
                            <a href="<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
">立即登录 ></a>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1||$_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
                    <div class="register_right_c">使用合作网站账号登录 </div>

                    <div class="box_third">

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
                        <a href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
"><i class="l-icon weixin-icon"></i></a>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php"><i class="l-icon qq-icon"></i></a> <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {
}?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
                        <a href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
"><i class="l-icon sina-icon"></i></a> <?php }?>
                    </div>
                    <?php }?> </div>
            </div>
        </div>
        <style>
            .icon2 {
                background-image: none;
                background-repeat: no-repeat;
            }
        </style>
        <div class="clear"></div>
        
        <div class="" style="width:550px; background:#fff; margin:20px auto; display: none;" id="written_off">
            <div class="reg_have_tip">
                <i class="reg_have_tip_icon"></i>
                <div class="reg_have_tip_tit"><span id="zy_type">该手机号已被注册为企业账号</span></div>
                <div class="reg_have_tip_zc" id="zy_name"></div>
            </div>

            <div class="reg_have_tip_p_c">
                <div class="reg_have_tip_p">1. 如果是你本人，但不记得密码，您可以找回密码
                    <a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
" class="reg_have_tip_bth">找回密码</a>
                </div>
                <div class="reg_have_tip_p">
					<span id="desc_toast">2. 解除手机号与该账号的绑定，解除绑定后，您无法 继续用该手机号登录</span>
                    <a href="javascript:void(0);" onclick="CheckPW()" class="reg_have_tip_bth">解除绑定</a>
                </div>
            </div>
			
            <div class="reg_have_tip_kf">如有疑问可拨打客服服务热线：<span class="reg_have_tip_kf_tel"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
			<input type="hidden" id="zy_uid" value="" />
			<input type="hidden" id="zy_mobile" value="" />
			<input type="hidden" id="zy_email" value="" />
        </div>
        
        <div class="none" id="postpw">
          		<ul class="reg_have_jc">
              	<li> 
                 	<span class="reg_have_jc_name"><font color="#FF3300">*</font> 登录密码：</span>
              		<input id="pw" type='password' class="reg_have_jc_name_text" placeholder="请输入登录密码" />
            	</li>
             	<li> 
                 	<span class="reg_have_jc_name"><font color="#FF3300">*</font> 验&nbsp;证&nbsp;码：</span>
                   	<input type="text" id="code" class="reg_have_jc_name_textyz"  maxlength="6" onfocus="checkCode('vcode_imgss')" autocomplete="off"/>
                  	<a><img id="vcode_imgss" onclick="checkCode('vcode_imgss');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /></a>
            	</li>
           		<li> 
                  	<span class="reg_have_jc_name">&nbsp; </span>
                  	<input class="reg_have_jc_bth" type="button" value="确认解绑" onclick="post_pass('vcode_imgss');" />
             	</li>
          	</ul>
        </div>
        
        <div class="" style="width:600px; background:#fff; margin:20px auto; display: none;" id="like_company"> 
		    <div class="reg_com_name_cont">
		        <div class="reg_com_name_h1"> 您好！您注册的企业名称与以下名称相似</div>
		        <div class="reg_com_name_tit"><span class="reg_comname">公司名称</span><span class="reg_comuser">联系人</span><span class="reg_comtel">联系电话</span> </div>
                <div class="reg_com_name_list_cont" id="like_com_list">
                	
			        <div class="reg_com_name_list">
			        	<span class="reg_comname">宿迁<font color="#FF0000">鸟巢</font>信息技术有限公司</span>
			        	<span class="reg_comuser">张**</span>
			        	<span class="reg_comtel">138187***62</span>
			        	<span class="reg_comcz"><a href="###" class="reg_combth">认领企业</a></span>
			       	</div>
			        
		      	</div>
		        <div class="reg_com_name_p"> 以上企业都不是 </div>
		        <div class="reg_com_name_bth">
		            <a href="javascript:void(0);" onclick="CloseToast();">继续注册</a>
		        </div>
		    </div>
		</div>
         
         
        <div class="clear"></div>
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
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/reg_ajax.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
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
		  DD_belatedPNG.fix('.png,.#bg');
		<?php echo '</script'; ?>
>
		<![endif]-->
		
		<?php echo '<script'; ?>
>
		<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
			$(document).ready(function () {
				$(document).keydown(function (e) {
			        var ev = document.all ? window.event : e;
			        if (ev.keyCode == 13) {
			            check_user(1,'vcode_imgs');
			        }
			    });
			    $("#xieyi1").keyup(function (event) {
			        var myEvent = event || window.event;
			        if (myEvent.keyCode == 13) { check_user(1,'vcode_imgs'); } else { return; };
			    });
			})
		<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>
			$(document).ready(function () {		
				$(document).keydown(function (e) {
			        var ev = document.all ? window.event : e;
			        if (ev.keyCode == 13) {
			            check_user(2,'vcode_img');
			        }
			    });
			    $("#xieyi2").keyup(function (event) {
			        var myEvent = event || window.event;
			        if (myEvent.keyCode == 13) { check_user(2,'vcode_img'); } else { return; };
			    });
			})
		<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==3) {?>
			$(document).ready(function () {		
				$(document).keydown(function (e) {
			        var ev = document.all ? window.event : e;
			        if (ev.keyCode == 13) {
			            check_user(3,'vcodeimg');
			        }
			    });
			    $("#xieyi3").keyup(function (event) {
			        var myEvent = event || window.event;
			        if (myEvent.keyCode == 13) { check_user(3,'vcodeimg'); } else { return; };
			    });
			})
		<?php }?>
		<?php echo '</script'; ?>
>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
