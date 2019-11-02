<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:45:24
         compiled from "/www/fpwjob/uploads/app/template/wap/member/user/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:289021405dbd4224995982-83204094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15259066900aafae7ed37bd8b3cf82f3f59f444c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/member/user/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289021405dbd4224995982-83204094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'signstate' => 0,
    'user' => 0,
    'config' => 0,
    'username' => 0,
    'chatunread' => 0,
    'expect' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd42249e82f1_84115983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd42249e82f1_84115983')) {function content_5dbd42249e82f1_84115983($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
    .header_h {
        display: none;
    }
</style>
<div class="yun_usermember_topbg">
    <span class="yun_com_member_index_set"><a class="yun_com_member_index_set_icon" href="index.php?c=set"></a></span>
    <a class="yun_user_membersysnews" href="index.php?c=sysnews"><i class="yun_com_membersysnews_n" id="sysmsgnum"></i></a>
</div>
<div class="yun_usermember_info">
    <div class="yun_usermember_info_box">
        <div class="yun_usermember_info_box_c">
            <div class="yun_usermember_info_cont">
                <div class="yun_usermember_qd">
                    <?php if ($_smarty_tpl->tpl_vars['signstate']->value==1) {?>
                    <span class="yun_usermember_qdbth">已签到</span> <?php } else { ?>
                    <a href="javascript:void(0);" onClick="sign();"><span class="yun_usermember_qdbth">签到</span></a>
                    <?php }?>
                </div>
                <div class="yun_usermember_info_photo">
                    <a href="index.php?c=photo">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==1) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"> <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);"> <?php }?>
                    </a>
                </div>

                <a href="index.php?c=set">
                    <div class="yun_usermember_info_name"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
                </a>
                <div class="yun_usermember_info_rz">

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['moblie_status']=="1") {?>
                    <a href="index.php?c=bindingbox&type=moblie"><span class="yun_usermember_info_rz_s yun_usermember_info_rz_s_cur"><i class="rz_icon rz_iconsj"></i>已认证</span></a>
                    <?php } else { ?>
                    <a href="index.php?c=bindingbox&type=moblie"><span class="yun_usermember_info_rz_s "><i class="rz_icon rz_iconsj"></i>未认证</span></a>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['user']->value['email_status']=="1") {?>
                    <a href="index.php?c=bindingbox&type=email"> <span class="yun_usermember_info_rz_s yun_usermember_info_rz_s_cur"><i class="rz_icon rz_iconyx"></i>已绑定</span></a>
                    <?php } else { ?>
                    <a href="index.php?c=bindingbox&type=email"><span class="yun_usermember_info_rz_s "><i class="rz_icon rz_iconyx"></i>未绑定</span></a>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['user']->value['idcard_status']=="1") {?>
                    <a href="index.php?c=idcard"> <span class="yun_usermember_info_rz_s yun_usermember_info_rz_s_cur"><i class="rz_icon rz_iconsm"></i>已实名</span></a>
                    <?php } else { ?>
                    <a href="index.php?c=idcard"> <span class="yun_usermember_info_rz_s "><i class="rz_icon rz_iconsm"></i>未实名</span></a>
                    <?php }?>

                </div>

            </div>
            <ul class="yun_usermember_tj">
                <li>
                    <a href="index.php?c=invite&back=1">
                        <span class="yun_usermember_tj_n" id="yqnum"></span> <i class="yun_usermember_tj_n_new" id="wkyqnum"></i> 面试通知
                    </a>
                </li>
                <li>
                    <a href="index.php?c=sq&back=1"><span class="yun_usermember_tj_n" id="sq_jobnum"></span>申请记录</a>
                </li>
                <li>
                    <a href="index.php?c=collect&back=1"><span class="yun_usermember_tj_n" id="fav_jobnum"></span>收藏记录</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<ul class="yun_usermember_nav">
    <li>
        <a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['user']->value['def_job'];?>
"><i class="yun_usermember_nav_icon"></i>简历管理</a>
    </li>
     <li>
            <a href="index.php?c=info"><i class="yun_usermember_nav_icon yun_usermember_nav_iconinfo"></i>基本资料<span class="yun_mnav_tip">完善基本资料</span></a>
        </li>
</ul>
<ul class="yun_usermember_nav">
    <li>
        <a href="index.php?c=jobcolumn"><i class="yun_usermember_nav_icon yun_usermember_nav_iconjob"></i>职位管理</a>
    </li>
    <li>
        <a href="index.php?c=collect"><i class="yun_usermember_nav_icon yun_usermember_nav_iconsc"></i>收藏&关注</a>
    </li>
    <li>
        <a href="index.php?c=partapply"><i class="yun_usermember_nav_icon yun_usermember_nav_iconjz"></i>兼职管理</a>
    </li>
    <li>
        <a href="index.php?c=rebates"><i class="yun_usermember_nav_icon yun_usermember_nav_iconsj"></i>赏金职位</a>
    </li>
</ul>

<ul class="yun_usermember_nav">
	<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_ask_web']==1) {?>
    <li>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
"><i class="yun_usermember_nav_icon yun_usermember_nav_iconask"></i>职场问答</a>
    </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_train_web']==1) {?>
    <li>
        <a href="index.php?c=fav_subject"><i class="yun_usermember_nav_icon yun_usermember_nav_iconpx"></i>职业培训</a>
    </li>
    <?php }?>
</ul>

<ul class="yun_usermember_nav">
    <li>
        <a href="index.php?c=finance"><i class="yun_usermember_nav_icon yun_usermember_nav_iconcw"></i>财务管理</a>
    </li>
</ul>

<ul class="yun_usermember_nav" style="padding-bottom:20px;">
    <li>
        <a href="index.php?c=set"><i class="yun_usermember_nav_icon yun_usermember_nav_iconzh"></i>账户设置</a>
    </li>
</ul>

<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
<div class="chat_wap">
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'chat'),$_smarty_tpl);?>
">聊聊<?php if ($_smarty_tpl->tpl_vars['chatunread']->value>0) {?><i class="yun_chat_new_bth_n"><?php echo $_smarty_tpl->tpl_vars['chatunread']->value;?>
</i><?php }?></a>
</div>
<?php }?>
<!--编辑基本信息引导匡-->
<div id="yingdaoone" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['user']->value['name']!=" ") {?>display:none;<?php }?>">
    <div style="width:100%; position:absolute;left:0px;top:140px;">
        <div style="padding:20px;">
            <div class="index_yd_box">
                <div class="index_yd_box_h1">亲，你还没有填写基本信息</div>
                <div class="user_resume_index_tip_p">
                    <a href="index.php?c=info" class="user_resume_index_tip_sub">编辑</a>
                </div>
                <div class="user_resume_index_tip_p2">
                    <a href="javascript:Close_yd('yingdaoone');" class="user_resume_index_tip_p2_a">下次再说</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value['name']=='') {?>
<!--创建简历引导匡-->
<div id="yingdaofour" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['expect']->value['integrity']) {?>display:none;<?php }?>">

    <div class="resume_refresh_box">
        <div class="resume_refresh_box_c">
            <div class="resume_refresh">温馨提示：</div>
            <div class="resume_refresh_p1">你没有创建简历，无法申请职位</div>
            <div class="resume_refresh_p2"> 为了更快的找到满意工作~</div>

            <div class="resume_refresh_bth">
                <?php if ($_smarty_tpl->tpl_vars['user']->value['idcard_status']!=1&&$_smarty_tpl->tpl_vars['config']->value['user_enforce_identitycert']==1) {?> 
                <a href="javascript:void(0)" onclick="fidcard()" class="resume_refresh_bth_a">创建简历</a>
				<?php } else { ?>
				<a href="index.php?c=addresume" class="resume_refresh_bth_a">创建简历</a>
				<?php }?>
            </div>
            <a href="javascript:Close_yd('yingdaofour');" class="resume_refresh_bth_qx"></a>

        </div>
    </div>
</div>

<?php }?> 

 
<?php if ($_smarty_tpl->tpl_vars['expect']->value['integrity']&&$_smarty_tpl->tpl_vars['expect']->value['lastupdate']<$_smarty_tpl->tpl_vars['time']->value&&$_COOKIE['exprefresh']!=1&&$_smarty_tpl->tpl_vars['config']->value['resume_sx']==2) {?> <!--刷新简历引导匡-->
    <div id="yingdaotwo" style="width:100%;height:100%; background:rgba(0,0,0,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['user']->value['name']!=" "&&$_smarty_tpl->tpl_vars['expect']->value['lastupdate']>$_smarty_tpl->tpl_vars['time']->value) {?>display:none;<?php }?>">
        <div class="resume_refresh_box">
            <div class="resume_refresh_box_c">
                <div class="resume_refresh">温馨提示：</div>
                <div class="resume_refresh_p1">不让简历石沉大海，每天坚持刷新简历</div>
                <div class="resume_refresh_p2"> 让企业在第一时间找到你~</div>

                <div class="resume_refresh_bth">
                    <a id="refresh" class="resume_refresh_bth_a">立即刷新</a>
                </div>
                <a href="javascript:Close_yd('yingdaotwo');" class="resume_refresh_bth_qx"></a>

            </div>
        </div>
    </div>
    <?php }?>
    <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
        function Close_yd(id) {
            $("#" + id).hide();
        }
        mui.init({
            swipeBack: true //启用右滑关闭功能
        });
        //简历刷新
        if(document.getElementById("refresh")) {
            document.getElementById("refresh").addEventListener('tap', function() {
                $.get(wapurl + "member/index.php?c=resumeset&update=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
", function(data) {
                    layermsg(data ? '刷新成功！' : '刷新失败！', 2, function() {
                        mui.openWindow({
                            url: wapurl + "member/",
                        });
                    });
                });
            });
        }
		function fidcard(){
			layermsg('请先完成身份认证！', 2, function() {
				location.href = 'index.php?c=idcard';
			});
		}
    <?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
