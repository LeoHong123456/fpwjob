<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:25:17
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_elog_fk.htm" */ ?>
<?php /*%%SmartyHeaderCode:19920701795dbd3d6daf2213-37202623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2daef6edb28b43f0e52c49ac38ef2e7876f4268c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_elog_fk.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19920701795dbd3d6daf2213-37202623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'sdate' => 0,
    'edate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd3d6db05d85_10567376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd3d6db05d85_10567376')) {function content_5dbd3d6db05d85_10567376($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/echarts_plain.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<title>后台管理</title>
</head>
<body class="body_ifm">

<div class="infoboxp"> 
	<div class="admin_new_tip">
		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		<div class="admin_new_tip_list_cont">
			<div class="admin_new_tip_list">该页面展示：用户行为 【未操作】、【未完成】操作情况数据提醒。</div>
			<div class="admin_new_tip_list">查数据范围：<?php echo $_smarty_tpl->tpl_vars['sdate']->value;?>
 ~ <?php echo $_smarty_tpl->tpl_vars['edate']->value;?>
</div>
		</div>
	</div>

	<div class="clear"></div>
	
	<div class="admin_statistics">
		数据统计：
			<em class="admin_statistics_s">账户充值：<span id="payNum">0</span></em>
			<em class="admin_statistics_s">会员套餐：<span id="serverNum">0</span></em>
			<em class="admin_statistics_s">新建简历：<span id="resumeNum">0</span></em>
			<em class="admin_statistics_s">职位发布：<span id="jobNum">0</span></em>
			<em class="admin_statistics_s">账户认证：<span id="bdNum">0</span></em>
			<em class="admin_statistics_s">基本信息：<span id="infoNum">0</span></em>
	</div>    
	
	<div class="clear"></div>

	<div class="">
		<table class="admin_tj_table">
			
			<tr>
				<td>
					<a href="index.php?m=admin_elog_fk&c=integral&days=1" class="admin_tj_list_box">
						<div class="admin_tj_list">
							<div class="admin_tj_icon_bg admin_tj_icon_bg_e"><i class="admin_tj_icon admin_tj_icon_cz"></i></div>
							<div class="admin_tj_p">账户充值</div>
							
						</div>
					</a>
				</td>
				 
				<td>
					<a href="index.php?m=admin_elog_fk&c=vip&days=1" class="admin_tj_list_box">
						<div class="admin_tj_list">
							<div class="admin_tj_icon_bg admin_tj_icon_bg_c"><i class="admin_tj_icon admin_tj_icon_jianli"></i></div>
							<div class="admin_tj_p">会员套餐</div>
						</div>
					</a> 
				</td>
			</tr>
			<tr>
				<td>
					<a href="index.php?m=admin_elog_fk&c=resume&days=1" class="admin_tj_list_box">
						<div class="admin_tj_list">
							<div class="admin_tj_icon_bg admin_tj_icon_bg_c"><i class="admin_tj_icon admin_tj_icon_td"></i></div>
							<div class="admin_tj_p">新建简历</div>
						</div>
					</a> 
				</td>
			
				<td>
					<a href="index.php?m=admin_elog_fk&c=job&days=1" class="admin_tj_list_box">
						<div class="admin_tj_list">	
							<div class="admin_tj_icon_bg admin_tj_icon_bg_b"><i class="admin_tj_icon admin_tj_icon_sj"></i></div>
							<div class="admin_tj_p">职位发布</div>
						</div>
					</a>
				</td>
			</tr>
			
			<tr>
				<td>
					<a href="index.php?m=admin_elog_fk&c=binding&days=1" class="admin_tj_list_box">
						<div class="admin_tj_list">
							<div class="admin_tj_icon_bg"><i class="admin_tj_icon admin_tj_icon_zc"></i></div>
							<div class="admin_tj_p">账户认证</div>
						</div>
					</a>
				</td>
				<td>
					<a href="index.php?m=admin_elog_fk&c=basic&days=1" class="admin_tj_list_box">
						<div class="admin_tj_list">
							<div class="admin_tj_icon_bg admin_tj_icon_bg_c"><i class="admin_tj_icon admin_tj_icon_xz"></i></div>
							<div class="admin_tj_p">基本信息</div>
						</div>
					</a>
				</td>
			</tr>

		</table>
	</div>

	<?php echo '<script'; ?>
>

		$(document).ready(function(){
			$.get("index.php?m=admin_elog_fk&c=getFkNum", function(data) {
				
				var datas = eval('(' + data + ')');
				
				if(datas.payNum) {
					$('#payNum').html(datas.payNum);
				}
				
				if(datas.serverNum) {
					$('#serverNum').html(datas.serverNum);
				}
				
				if(datas.resumeNum) {
					$('#resumeNum').html(datas.resumeNum);
				}
				
				if(datas.jobNum) {
					$('#jobNum').html(datas.jobNum);
				}

				if(datas.bdNum) {
					$('#bdNum').html(datas.bdNum);
				}
				
				if(datas.infoNum) {
					$('#infoNum').html(datas.infoNum);
				}

			});
		});

	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
