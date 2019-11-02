<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:32:48
         compiled from "/www/fpwjob/uploads/app/template/admin/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:14257825505dbd3f30dc1c87-58822991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '760f862cf703e8e54337a35dc2990f8f4e329e60' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/index.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14257825505dbd3f30dc1c87-58822991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'navigation' => 0,
    'v' => 0,
    'navigation_url' => 0,
    'nav_user' => 0,
    'admin_lasttime' => 0,
    'pytoken' => 0,
    'one_menu' => 0,
    'val' => 0,
    'menu' => 0,
    'two_menu' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd3f30e46219_94929138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd3f30e46219_94929138')) {function content_5dbd3f30e46219_94929138($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="off">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
 - 后台管理中心</title>
        <link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/admin_new.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="../js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="../js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
">
        <?php echo '<script'; ?>
 src="../js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <!--[if IE 6]>
		<?php echo '<script'; ?>
 src="./js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		  DD_belatedPNG.fix('.png,.header .logo,.header .nav li a,.header .nav li.on,.left_menu h3 span.on,.admin_adv_search_bth,admin_infoboxp_tj');
		<?php echo '</script'; ?>
>
		<![endif]-->
        <?php echo '<script'; ?>
 type="text/javascript">
            var pc_hash = 'l9Yqpa'

            function check_web(id) {
                $("html").removeClass("on");
                var timestamp = Math.round(new Date().getTime() / 1000);
                var pytoken = $("#pytoken").val();
                $.get("index.php?c=topmenu&id=" + id, function(data) {
                    document.getElementById("current_pos").innerHTML = data;
                })
            }
        <?php echo '</script'; ?>
>
    </head>

    <body scroll="no">
        <div class="admin_new_heder">
            <div class="admin_new_logo"><img src="images/admin_new_logo.png?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"></div>

             <ul class="admin_new_heder_nav" id="top_menu">
                <li id="_M1000" class="on top_menu">
                    <a href="javascript:_M(1000,'index.php?m=admin_right')" onclick="check_web('1000');" hidefocus="true" style="outline:none;">首页</a>
                </li>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <li id="_M<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="top_menu">
                    <a class="<?php echo $_smarty_tpl->tpl_vars['v']->value['classname'];?>
" href="javascript:_M(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['navigation_url']->value[$_smarty_tpl->tpl_vars['v']->value['id']];?>
')" hidefocus="true" style="outline:none;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                </li>
                <?php } ?>
            </ul>

            <div class="admin_new_header_admin_box">
                <div class="admin_new_header_admin" onmouseover="headerShow('show','admin_new_header_cz_box')" onmouseout="headerShow('hide','admin_new_header_cz_box')">

                    <div class=""><?php echo $_smarty_tpl->tpl_vars['nav_user']->value['name'];?>
</div>
                    <div class=""><?php echo $_smarty_tpl->tpl_vars['nav_user']->value['group_name'];?>
 </div>
                    <div class="admin_new_header_admintx"><img src="images/mr.png" width="30" height="30"></div>
                    <i class="arrow"></i>
                    <div class="admin_new_header_cz_box" style="display:none">
                        <div class="admin_new_header_cz_box_t"><span class="admin_new_header_cz_box_t_s">最近登录</span>
                            <a href="javascript:_MP(47,'index.php?m=admin_user&c=pass');" class="admin_new_header_cz_xg">修改密码</a>
                        </div>
                        <div class="admin_new_header_cz_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['admin_lasttime']->value,"%Y-%m-%d %H:%M:%S");?>
 </div>
                        <div class="admin_new_header_cz_box_t"><span class="admin_new_header_cz_box_t_s">常用操作</span></div>
                        <div class="admin_new_header_cd">
                            <a href="javascript:_MP(16,'index.php?m=admin_company');">公司管理</a>
                            <a href="javascript:_MP(33,'index.php?m=admin_resume');">简历管理</a>
                            <a href="javascript:_MP(41,'index.php?m=admin_hotjob');">名企管理</a>
                            <a href="javascript:_MP(55,'index.php?m=admin_news&c=news')">添加新闻</a>
                        </div>
                    </div>
                </div>
                <div class="admin_new_header_cz">
                    <div class="admin_new_header_msg" onmouseover="headerShow('show','admin_new_msg_box')" onmouseout="headerShow('hide','admin_new_msg_box')">
                        <a class="admin_new_header_msg_icon" style="height:53px" title="查看消息"></a>
                        <em class="admin_new_header_msg_new" style="display:none;"></em>
                        <div class="admin_new_msg_box" style="display:none" >
                            <div class="admin_new_msg_h1">待审核提示</div>
                            <ul class="admin_new_msg_list">
                                <li class="c_xx1">
                                    <a href="javascript:_MP(40,'index.php?m=admin_company_job&state=4');">待审核职位<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx1">0</em> )</span></a>
                                </li>
                                <li class="c_xx2">
                                    <a href="javascript:_MP(16,'index.php?m=admin_company&status=4')">待审核企业<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx2">0</em> )</span></a>
                                </li>
                                <li class="c_xx7">
                                    <a href="javascript:_MP(33,'index.php?m=admin_resume&status=4')">待审核简历<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx7">0</em> )</span></a>
                                </li>
								<li class="c_xx11">
                                    <a href="javascript:_MP(34,'index.php?m=usercert&status=2')">待审核个人认证<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx11">0</em> )</span></a>
                                </li>
                                <li class="c_xx8">
                                    <a href="javascript:_MP(184,'index.php?m=admin_appeal');">会员申诉<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx8">0</em> )</span></a>
                                </li>
								<li class="c_xx12">
                                    <a href="javascript:_MP(194,'index.php?m=link&state=2');">待审核友情链接<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx12">0</em> )</span></a>
                                </li>
                                <li class="c_xx3">
                                    <a href="javascript:_MP(47,'index.php?m=comcert&status=3')">待审核企业认证<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx3">0</em> )</span></li>
                                <li class="c_xx4">
                                    <a href="javascript:_MP(48,'index.php?m=admin_once&status=3');">待审核店铺招聘<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx4">0</em> )</span></a>
                                </li>
                                <li class="c_xx5">
                                    <a href="javascript:_MP(44,'index.php?m=comproduct&status=3');">待审核企业产品<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx5">0</em> )</span></a>
                                </li>
                                <li class="c_xx6">
                                    <a href="javascript:_MP(45,'index.php?m=comnews&status=3');">待审核企业新闻<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx6">0</em> )</span></a>
                                </li>
                                <li class="c_xx9">
                                    <a href="javascript:_MP(165,'index.php?m=invoice&status=0');">待审核企业发票<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx9">0</em> )</span></a>
                                </li>
                                <li class="c_xx10">
                                    <a href="javascript:_MP(167,'index.php?m=admin_withdraw&order_state=0');">待审核赏金提现<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx10">0</em> )</span></a>
                                </li>
								<li class="c_xx13"><a href="javascript:_MP(42,'index.php?m=admin_partjob&state=4');">待审核兼职<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx13">0</em> )</span></a></li>
								<li class="c_xx14"><a href="javascript:_MP(345,'index.php?m=admin_company_pic&status=1');">待审核企业LOGO<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx14">0</em> )</span></a></li>
								<li class="c_xx15"><a href="javascript:_MP(17,'index.php?m=user_member&status=4');">待审核个人会员<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx15">0</em> )</span></a></li>
								<li class="c_xx16"><a href="javascript:_MP(35,'index.php?m=admin_trust&status=3');">待审核委托简历<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx16">0</em> )</span></a></li>
								<li class="c_xx17"><a href="javascript:_MP(346,'index.php?m=admin_user_pic&status=1');">待审核个人头像<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx17">0</em> )</span></a></li>
								<li class="c_xx18"><a href="javascript:_MP(18,'index.php?m=admin_lt_member&status=4');">待审核猎头会员<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx18">0</em> )</span></a></li>
								<li class="c_xx19"><a href="javascript:_MP(19,'index.php?m=admin_lt_job&status=4');">待审核猎头职位<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx19">0</em> )</span></a></li>
								<li class="c_xx20"><a href="javascript:_MP(20,'index.php?m=height_user&status=1');">待审核高级人才简历<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx20">0</em> )</span></a></li>
								<li class="c_xx21"><a href="javascript:_MP(21,'index.php?m=admin_lt_cert&status=0');">待审核猎头认证<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx21">0</em> )</span></a></li>
								<li class="c_xx22"><a href="javascript:_MP(25,'index.php?m=train_member&status=4');">待审核培训会员<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx22">0</em> )</span></a></li>
								<li class="c_xx23"><a href="javascript:_MP(26,'index.php?m=teacher&status=3');">待审核培训师<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx23">0</em> )</span></a></li>
								<li class="c_xx24"><a href="javascript:_MP(27,'index.php?m=admin_subject&status=3');">待审核培训课程<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx24">0</em> )</span></a></li>
								<li class="c_xx25"><a href="javascript:_MP(28,'index.php?m=traincert&status=3');">待审核培训认证<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx25">0</em> )</span></a></li>
								<li class="c_xx26"><a href="javascript:_MP(30,'index.php?m=trainnews&status=3');">待审核培训新闻<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx26">0</em> )</span></a></li>

								<li class="c_xx27"><a href="javascript:_MP(36,'index.php?m=admin_tiny&status=2');">待审核普工简历<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx27">0</em> )</span></a></li>
								<li class="c_xx28"><a href="javascript:_MP(341,'index.php?m=admin_school_graduate&state=4');">待审核应届毕业生职位<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx28">0</em> )</span></a></li>
								<li class="c_xx29"><a href="javascript:_MP(342,'index.php?m=admin_school_xjh&status=3');">待审核宣讲会<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx29">0</em> )</span></a></li>
								<li class="c_xx30"><a href="javascript:_MP(63,'index.php?m=zhaopinhui&c=com&status=3');">待审核参会企业<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx30">0</em> )</span></a></li>
								<li class="c_xx31"><a href="javascript:_MP(66,'index.php?m=admin_question&status=0');">待审核问答<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx31">0</em> )</span></a></li>
								<li class="c_xx32"><a href="javascript:_MP(77,'index.php?m=reward_list&status=-1');">待审核商品兑换<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx32">0</em> )</span></a></li>
								<li class="c_xx33"><a href="javascript:_MP(162,'index.php?m=company_order&order_state=3');">待处理充值订单<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx33">0</em> )</span></a></li>
								<li class="c_xx34"><a href="javascript:_MP(85,'index.php?m=ad_order&status=-1');">待审核广告订单<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx34">0</em> )</span></a></li>
								<li class="c_xx35"><a href="javascript:_MP(49,'index.php?m=special');">待审核企业专题<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx35">0</em> )</span></a></li>
								<li class="c_xx36"><a href="javascript:_MP(178,'index.php?m=report');">待处理举报职位<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx36">0</em> )</span></a></li>
								<li class="c_xx37"><a href="javascript:_MP(178,'index.php?m=report&ut=2');">待处理举报简历<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx37">0</em> )</span></a></li>
								<li class="c_xx38"><a href="javascript:_MP(180,'index.php?m=report&type=1');">待处理举报问答<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx38">0</em> )</span></a></li>
								<li class="c_xx39"><a href="javascript:_MP(181,'index.php?m=report&type=2');">待处理投诉顾问<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx39">0</em> )</span></a></li>
								<li class="c_xx40"><a href="javascript:_MP(353,'index.php?m=report&type=3');">待处理举报宣讲会<span class="admin_new_msg_list_n">( <em class="admin_new_msg_list_n_cur" id="xx40">0</em> )</span></a></li>

                        </div>
                    </div>

                    <div class="admin_new_header_home">
                        <a class="admin_new_header_home_icon" title="新窗口打开人才网首页" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" target="_blank" id="site_homepage"></a>
                    </div>
                    <div class="admin_new_header_map">
                        <a class="admin_new_header_map_icon" href="javascript:void(0)" onclick="adminmap()" title="后台地图"></a>
                    </div>
                    <div class="admin_new_header_hc">
                        <a class="admin_new_header_hc_icon" title="清除缓存" href="javascript:void(0)" target="right" onclick="layer_del('','index.php?m=index&c=del_cache');"></a>
                    </div>
                    <div class="admin_new_header_close">
                        <a class="admin_new_header_close_icon" href="javascript:void(0)" onclick="layer_logout('index.php?m=index&c=logout');" title="安全退出管理中心"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">

        <div id="content" style="width:auto;">
            <div class="col-left left_menu">
                <div class="navLeftTab">
                     <ul class="navLeftTab_list" id="leftid_1000">
                        <li class="navLeftTab_cur" aid=1000>
                            <a href="javascript:M_left('1000');"><i class="navLeftTab_list_icon navLeftTab_list_icon_sj" onclick="shortcut_menu()"></i><span class="navLeftTab_list_name">快捷</span></a>
                        </li>
                    </ul>

                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <ul class="navLeftTab_list" style="display:none;" id="leftid_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['one_menu']->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                        <li aid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" id="leftstyle_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
                            <a href="javascript:M_left('<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
');"><i class="navLeftTab_list_icon <?php echo $_smarty_tpl->tpl_vars['val']->value['classname'];?>
"></i><span class="navLeftTab_list_name"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</span></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                 </div>
                <div id="leftMain"> </div>
                <a href="javascript:;" id="openClose" style="outline-style:none;outline-color:invert;outline-width:medium;height:539px;" hidefocus="hidefocus" class="open" title="展开与关闭"><span class="hidden"> </span></a>
            </div>
            <div class="col-1 lf cat-menu" id="display_center_id" style="display:none" height="100%">
                <div class="content"> </div>
            </div>
            <div class="col-auto">
                <div class="crumbs-admin-top">
                    <div class="crumbs">
                        <span id="current_pos">管理首页</span> </div>
                </div>
                <div>
                    <div style="position:relative; overflow:hidden">
                        <iframe name="right" id="rightMain" src="index.php?m=admin_right" frameborder="false" scrolling="auto" style="border:none;" width="100%" height="470" allowtransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <ul class="tab-web-panel hidden" style="position: absolute; z-index: 999; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); left: 680px; top: 82px; display: none; background-position: initial initial; background-repeat: initial initial; ">
            <li style="margin:0">
                <a href="javascript:site_select(1, '默认站点', '#', '1')">默认站点</a>
            </li>
        </ul>
        <div style="display:none;">
             <div id="DIV_M1000">
                <ul id='keyid_1000' class="left_mune_ul">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <li id="_MP<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="sub_menu" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['keyid'];?>
' data_id='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' data_url='<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
'>
                        <a href="javascript:_MP(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
');" onclick="check_web(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
);" hidefocus="true" style="outline:none;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <div id="DIV_M<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['one_menu']->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                <ul id="keyid_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="left_mune_ul" style="display:none;">
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['two_menu']->value[$_smarty_tpl->tpl_vars['val']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <li id="_MP<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="sub_menu" data_id='<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
' data_url='<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
'>
                        <a href="javascript:_MP(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
');" onclick="check_web(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
);" hidefocus="true" style="outline:none;"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </div>
            <?php } ?>
         </div>
         <div id="shortcut_menu" style="display:none; width:710px;top:0px ">
            <div style="height:450px; overflow:auto;overflow-x:hidden;_width:710px">
                <div class="common-form">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <table width="100%" bgcolor="#dfdfdf">
                        <tr>
                            <td height="30" style="padding-left:10px"><strong><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['one_menu']->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                <table width="100%" bgcolor="#f7f7f7">
                                    <tr>
                                        <td height="30" style="padding-left:40px;"><strong><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</strong></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['two_menu']->value[$_smarty_tpl->tpl_vars['val']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                            <div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
' type='checkbox' <?php if ($_smarty_tpl->tpl_vars['value']->value['menu']=='2') {?>checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</div>
                                            <?php } ?> </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <?php } ?>
                    <div style="text-align:center"><input class="layui-btn layui-btn-normal" type="button" value="提交" onclick="check_menu();"></div>
                </div>
            </div>
        </div>
         <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function() {
                $(".admin_index_city_list").hover(function() {
                    $(".admin_index_city_list").show();
                }, function() {
                    $(".admin_index_city_list").hide();
                });
                $.get("index.php?c=msgNum", function(data) {
                    var datas = eval('(' + data + ')');
                    if(datas.msgNum > 0) {
                        if(datas.msgNum > 99) {
                            datas.msgNum = '99+';
                            $('.admin_new_header_msg_new').width(28);
                        }
                        if(datas.msgNum) {
                            $('.admin_new_header_msg_new').html(datas.msgNum);
                            $('.admin_new_header_msg_new').show();
                        }
                        if(datas.company_job) {
                            $('#xx1').html(datas.company_job);
                        }else{
							$('.c_xx1').hide();
						}
                        if(datas.company) {
                            $('#xx2').html(datas.company);
                        }else{
							$('.c_xx2').hide();
						}
                        if(datas.company_cert) {
                            $('#xx3').html(datas.company_cert);
                        }else{
							$('.c_xx3').hide();
						}
                        if(datas.once_job) {
                            $('#xx4').html(datas.once_job);
                        }else{
							$('.c_xx4').hide();
						}
                        if(datas.company_product) {
                            $('#xx5').html(datas.company_product);
                        }else{
							$('.c_xx5').hide();
						}
                        if(datas.company_news) {
                            $('#xx6').html(datas.company_news);
                        }else{
							$('.c_xx6').hide();
						}
                        if(datas.resume_expect) {
                            $('#xx7').html(datas.resume_expect);
                        }else{
							$('.c_xx7').hide();
						}
                        if(datas.appealnum) {
                            $('#xx8').html(datas.appealnum);
                        }else{
							$('.c_xx8').hide();
						}
                        if(datas.invoiceNum) {
                            $('#xx9').html(datas.invoiceNum);
                        }else{
							$('.c_xx9').hide();
						}
                        if(datas.withdrawNum) {
                            $('#xx10').html(datas.withdrawNum);
                        }else{
							$('.c_xx10').hide();
						}
						if(datas.usercertNum) {
                            $('#xx11').html(datas.usercertNum);
                        }else{
							$('.c_xx11').hide();
						}
						if(datas.linkNum) {
                            $('#xx12').html(datas.linkNum);
                        }else{
							$('.c_xx12').hide();
						}
						if(datas.partjob) {
							$('#xx13').html(datas.partjob);
						}else{
							$('.c_xx13').hide();
						}
						
						if(datas.comlogo) {
							$('#xx14').html(datas.comlogo);
						}else{
							$('.c_xx14').hide();
						}
						if(datas.userNum) {
							$('#xx15').html(datas.userNum);
						}else{
							$('.c_xx15').hide();
						}
						if(datas.resumetrust) {
							$('#xx16').html(datas.resumetrust);
						}else{
							$('.c_xx16').hide();
						}
						if(datas.userpic) {
							$('#xx17').html(datas.userpic);
						}else{
							$('.c_xx17').hide();
						}
						if(datas.ltNum) {
							$('#xx18').html(datas.ltNum);
						}else{
							$('.c_xx18').hide();
						}
						if(datas.ltjob) {
							$('#xx19').html(datas.ltjob);
						}else{
							$('.c_xx19').hide();
						}
						if(datas.ltheightuser) {
							$('#xx20').html(datas.ltheightuser);
						}else{
							$('.c_xx20').hide();
						}
						if(datas.ltcert) {
							$('#xx21').html(datas.ltcert);
						}else{
							$('.c_xx21').hide();
						}
						if(datas.trainNum) {
							$('#xx22').html(datas.trainNum);
						}else{
							$('.c_xx22').hide();
						}
						if(datas.teacher) {
							$('#xx23').html(datas.teacher);
						}else{
							$('.c_xx23').hide();
						}
						if(datas.subject) {
							$('#xx24').html(datas.subject);
						}else{
							$('.c_xx24').hide();
						}
						if(datas.traincert) {
							$('#xx25').html(datas.traincert);
						}else{
							$('.c_xx25').hide();
						}
						if(datas.trainnews) {
							$('#xx26').html(datas.trainnews);
						}else{
							$('.c_xx26').hide();
						}
						if(datas.tiny) {
							$('#xx27').html(datas.tiny);
						}else{
							$('.c_xx27').hide();
						}
						if(datas.schooljob) {
							$('#xx28').html(datas.schooljob);
						}else{
							$('.c_xx28').hide();
						}
						if(datas.schoolxjh) {
							$('#xx29').html(datas.schoolxjh);
						}else{
							$('.c_xx29').hide();
						}
						if(datas.zphcom) {
							$('#xx30').html(datas.zphcom);
						}else{
							$('.c_xx30').hide();
						}
						if(datas.ask) {
							$('#xx31').html(datas.ask);
						}else{
							$('.c_xx31').hide();
						}
						if(datas.redeem) {
							$('#xx32').html(datas.redeem);
						}else{
							$('.c_xx32').hide();
						}
						if(datas.order) {
							$('#xx33').html(datas.order);
						}else{
							$('.c_xx33').hide();
						}
						if(datas.adorder) {
							$('#xx34').html(datas.adorder);
						}else{
							$('.c_xx34').hide();
						}
						if(datas.specialcom) {
							$('#xx35').html(datas.specialcom);
						}else{
							$('.c_xx35').hide();
						}
						if(datas.reportjob) {
							$('#xx36').html(datas.reportjob);
						}else{
							$('.c_xx36').hide();
						}
						if(datas.reportresume) {
							$('#xx37').html(datas.reportresume);
						}else{
							$('.c_xx37').hide();
						}
						if(datas.reportask) {
							$('#xx38').html(datas.reportask);
						}else{
							$('.c_xx38').hide();
						}
						if(datas.reportgw) {
							$('#xx39').html(datas.reportgw);
						}else{
							$('.c_xx39').hide();
						}
						if(datas.reportxjh) {
							$('#xx40').html(datas.reportxjh);
						}else{
							$('.c_xx40').hide();
						}
                    }
                })
            })

            function check_menu() {
                var chk_value = [];
                var pytoken = $("#pytoken").val();
                $('input[name="shortcut_menu[]"]:checked').each(function() {
                    chk_value.push($(this).val());
                });
                if(chk_value.length == 0) {
                    parent.layer.msg('请至少选择一个！', 2, 8);
                    return false;
                } else {
                    $.post("index.php?c=shortcut_menu", {
                        chk_value: chk_value,
                        pytoken: pytoken
                    }, function(msg) {
                        parent.layer.msg('设置成功！', 2, 9, function() {
                            location = location;
                        });
                        return false;
                    });
                }
            }

            function shortcut_menu() {
                $.layer({
                    type: 1,
                    title: '快捷菜单管理',
                    closeBtn: [0, true],
                    border: [10, 0.3, '#000', true],
                    shade: [0.5, '#000'],
                    area: ['710px', '510px'],
                    page: {
                        dom: '#shortcut_menu'
                    }
                });
            }
           
            $('#DIV_M1000').clone().appendTo('#leftMain');

            function windowW() {
                if($(window).width() < 980) {
                    $('.header').css('width', 980 + 'px');
                    $('#content').css('width', 980 + 'px');
                    $('body').attr('scroll', '');
                    $('body').css('overflow', '');
                }
            }
            windowW();
            $(window).resize(function() {
                if($(window).width() < 980) {
                    windowW();
                } else {
                    $('.header').css('width', 'auto');
                    $('#content').css('width', 'auto');
                    $('body').attr('scroll', 'no');
                    $('body').css('overflow', 'hidden');
                }
            });
            window.onresize = function() {
                var heights = document.documentElement.clientHeight - 150;
                document.getElementById('rightMain').height = heights + 30;
                var openClose = $("#rightMain").height() + 39;
                $('#center_frame').height(openClose + 9);
                $("#openClose").height(openClose + 30);
            }
            window.onresize();
            
            $("#openClose").click(function() {
                if($(this).data('clicknum') == 1) {
                    $("html").removeClass("on");
                    $(".left_menu").removeClass("left_menu_on");
                    $(this).removeClass("close");
                    $(this).data('clicknum', 0);
                } else {
                    $(".left_menu").addClass("left_menu_on");
                    $(this).addClass("close");
                    $("html").addClass("on");
                    $(this).data('clicknum', 1);
                }
                return false;
            });

            function _M(menuid, targetUrl) {
                $('.top_menu').removeClass("on");
                $('#_M' + menuid).addClass("on");
                $("#menuid").val(menuid);
                $("#bigid").val(menuid);
                var menu = "#DIV_M" + menuid;
                $('#leftMain').html("");
                $(menu).clone().appendTo($("#leftMain"));
                $(".left_menu").removeClass("left_menu_on");
                $("#openClose").removeClass("close");
                $("#openClose").data('clicknum', 0);
                $('#keyid_' + menuid).find("li:lt(1)").addClass("on fb blue");
                $("#rightMain").attr('src', targetUrl);

                $(".navLeftTab_list").hide();
                $("#leftid_" + menuid).show();
                $("#leftid_" + menuid).find("li:lt(1)").addClass("navLeftTab_cur");
                var aid = $("#leftid_" + menuid).find("li:lt(1)").attr("aid");
                M_left(aid);
            }

            function M_left(id) {
                $(".left_mune_ul").hide();
                $("#keyid_" + id).show();
                $(".navLeftTab_list>li").attr("class", '');
                $("#leftstyle_" + id).addClass("navLeftTab_cur");
                $("#keyid_" + id).find("li:lt(1)").addClass("sub_menu on fb blue");
                var url = $("#keyid_" + id).find("li:lt(1)").attr("data_url");
                var data_id = $("#keyid_" + id).find("li:lt(1)").attr("data_id");
                if(id != '1000') {
                    check_web(data_id);
                } else {
                    url = 'index.php?m=admin_right';
                }
                $("#rightMain").attr('src', url);
            }

            function _MP(menuid, targetUrl) {
                $("#menuid").val(menuid);
                $("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em>添加</em></a>');
                $("#rightMain").attr('src', targetUrl);
                $('.sub_menu').removeClass("on fb blue");
                $('#_MP' + menuid).addClass("on fb blue");
                $("#current_pos").data('clicknum', 1);
            }

            function admin_site(id) {
                var pytoken = $("#pytoken").val();
                $.post("index.php?c=site", {
                    id: id,
                    pytoken: pytoken
                }, function(data) {
                    window.location.href = "index.php";
                })
            }

            function for_menu(id) {
                $("#keyid_" + id).slideToggle();
                $("#span_" + id).toggleClass("on");
                return false;
            }
            $(function() {
                $.get('<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/index.php?m=cron');
            });

            function headerShow(type, cla) {
                if(type == 'show') {
                    $('.' + cla).show();
                } else {
                    $('.' + cla).hide();
                }
            }
        <?php echo '</script'; ?>
>
    </body>

</html><?php }} ?>
