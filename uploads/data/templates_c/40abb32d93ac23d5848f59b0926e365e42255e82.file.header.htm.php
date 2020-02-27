<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:39:18
         compiled from "/www/fpwjob/uploads//app/template/member/com/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:19969647245e2e3f462a8181-15301257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40abb32d93ac23d5848f59b0926e365e42255e82' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/com/header.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19969647245e2e3f462a8181-15301257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'com_style' => 0,
    'company' => 0,
    'username' => 0,
    'addjobnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3f462e9192_38104777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3f462e9192_38104777')) {function content_5e2e3f462e9192_38104777($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html>
<head>
<title>企业用户后台管理系统 - <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</title>
<meta http-equiv=Content-Type content="text/span; charset=utf-8"/>
<meta http-equiv=X-UA-Compatible content="IE=edge"/>
<?php echo '<script'; ?>
>var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<link href="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/m_style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" rel="stylesheet"/>
<meta content="MSHTML 6.00.6000.16939" name=GENERATOR/> 
<?php echo '<script'; ?>
>

 
function killerrors() {return true;}
window.onerror = killerrors;
var integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';  
<?php echo '</script'; ?>
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
</head>
<body>
<div class="body_box">
<header>

<div class="header">
	<div class="header_fixed">
		<div class="header-logo fltL">
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_logo'];?>
" class="png" ></a>
		</div>
		<ul class="yun_m_headernav">
			<li class="yun_m_headernav_cur"><a  href="index.php">企业中心</a></li>
			<li><a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" target="_blank">找人才 </a></li>
			<li><a href="<?php echo smarty_function_url(array('m'=>'tiny'),$_smarty_tpl);?>
" target="_blank">找普工</a></li>
			<li><a href="<?php echo smarty_function_url(array('m'=>'ask'),$_smarty_tpl);?>
" target="_blank">问答</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" target="_blank">人才网首页</a></li>
		</ul>

		<div class="">
			<div class="header_m_navright">
	 
 				<div class="yun_m_headertx"  onMouseOver="headerInfoShow('show')" onMouseOut="headerInfoShow('hide')"> 
					<a href="index.php?c=uppic"> 
						<img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="25" height="25" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
','2')"/>
					</a> 
					
					<div class="yun_m_headertx_hi">你好！<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
					<i class="yun_m_headertx_hi_icon"></i>
					<div class="yun_m_header_info" style="display:none;">
						<a href="index.php?c=info" class="yun_m_header_info_a">编辑资料</a>
						<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$uid`'),$_smarty_tpl);?>
" target="_blank" class="yun_m_header_info_a"> 预览主页</a>
						<a href="index.php?c=comtpl" class="yun_m_header_info_a">模板设置</a>
						<a href="javascript:void(0)" onClick="logout('index.php?act=logout')" title="退出登录" class="yun_m_header_info_a">退出登录</a>
					</div> 
				</div> 

 				<div class="yun_m_headermsg" onMouseOver="tzmsgNumShow('show')" onMouseOut="tzmsgNumShow('hide')">
					<i class="yun_m_headermsg_icon"></i>
					<span class="yun_m_headermsg_n" id="tzmsgNum" style="display:none">0</span>
					<div class="yun_m_headermsg_box" style="display:none">
						<div class="yun_m_headermsg_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=hr">职位申请  <em class="yun_m_headermsg_list_n" id="jobApplyNum">(0)</em></a>
						</div>
						
						<div class="yun_m_headermsg_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=sysnews">系统消息  <em class="yun_m_headermsg_list_n" id="sysmsgNum">(0)</em></a>
						</div>
				
						<div class="yun_m_headermsg_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=msg">求职咨询  <em class="yun_m_headermsg_list_n" id="jobAskNum">(0)</em></a> 
						</div>
						
						<div class="yun_m_headermsg_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=jobpack&act=rewardlog&state=1">赏金投递  <em class="yun_m_headermsg_list_n" id="jobpackNum">(0)</em></a> 
						</div>
						<div class="yun_m_headermsg_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=pl">面试评价  <em class="yun_m_headermsg_list_n" id="ComMsgNum">(0)</em></a> 
						</div>
					</div>
				</div>
 				<a  href="javascript:void(0)"  onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" class="header_m_nav_fb">发布职位</a>

			</div>
		</div>
	</div>
</div>
<div class="clear"></div> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/issuejob_server.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</header><?php }} ?>
