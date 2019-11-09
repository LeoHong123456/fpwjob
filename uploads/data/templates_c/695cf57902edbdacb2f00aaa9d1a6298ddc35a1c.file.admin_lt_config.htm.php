<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-09 09:05:35
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_lt_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:10523085995dc610df2e8df5-12145788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '695cf57902edbdacb2f00aaa9d1a6298ddc35a1c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_lt_config.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10523085995dc610df2e8df5-12145788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lt_rows' => 0,
    'v' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc610df3382c9_09402012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc610df3382c9_09402012')) {function content_5dc610df3382c9_09402012($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	
<title>后台管理</title>
</head>

<body class="body_ifm">
	<div class="infoboxp">
		<div class="tabs_info">
			<ul>
				<li class="curr"><a href="index.php?m=admin_ltset">猎头设置</a></li> 
				<li><a href="index.php?m=admin_ltset&c=logo">头像设置</a></li> 
				<li><a href="index.php?m=admin_ltset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a></li> 
				<li><a href="index.php?m=admin_ltset&c=spend">消费设置</a></li>
			</ul>
		</div>

		<div class="admin_new_tip">
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<div class="admin_new_tip_list">该页面展示了网站的猎头设置信息，可对猎头进行猎头设置操作。</div>
			</div>
		</div>

		<div class="clear"></div>
  
		<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
		
		<div class="main_tag mt10">
			<div class="tag_box">
				<div>
					<form class="layui-form">
						<table width="100%" class="table_form">
							<tr class="admin_table_trbg">
								<th width="220" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
								<td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
							</tr>
							
							<tr>
								<th width="220">开启猎头会员审核：</th>
								<td>
									<div class="layui-form-item">
										<div class="layui-input-block">
											<div class="layui-input-inline">
												<input name="lt_status" id="lt_status_0" value="1" title="不审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_status']==1) {?> checked  <?php }?> type="radio"/>
												
												<input name="lt_status" id="lt_status_1" value="0" title="审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_status']!=1) {?> checked <?php }?> type="radio"/>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr class="admin_table_trbg">
								<th width="220">强制邮箱认证：</th>
								<td>
									<input type="checkbox" name="lt_enforce_emailcert" id="lt_enforce_emailcert" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_enforce_emailcert']=="1") {?> checked <?php }?> />
								</td>
							</tr>
							
							<tr>
								<th width="220">强制手机认证：</th>
								<td>
									<input type="checkbox" name="lt_enforce_mobilecert" id="lt_enforce_mobilecert" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_enforce_mobilecert']=="1") {?> checked <?php }?> />
								</td>
							</tr>
							
							<tr class="admin_table_trbg">
								<th width="220">强制猎头执照认证：</th>
								<td>
									<input type="checkbox" name="lt_enforce_licensecert" id="lt_enforce_licensecert" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_enforce_licensecert']=="1") {?> checked <?php }?> />
								</td>
							</tr>
							<tr>
								<th width="220">猎头发布职位审核：</th>
								<td>
									<input type="checkbox" name="lt_job_status" id="lt_job_status" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_job_status']=="0") {?> checked <?php }?> />
								</td>
							</tr>
							
							<tr class="admin_table_trbg">
								<th width="220">猎头认证审核：</th>
								<td>
									<input type="checkbox" name="lt_cert_status" id="lt_cert_status" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_cert_status']=="1") {?> checked <?php }?> />
								</td>
							</tr>
							
							<tr>
								<th width="220">推荐人才返利：</th>
								<td>
									<input type="checkbox" name="lt_rec_rebates" id="lt_rec_rebates" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rec_rebates']=="1") {?> checked <?php }?> />
								</td>
							</tr>
							
							<tr class="admin_table_trbg" id='rebates_name' <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rec_rebates']==0) {?>style="display:none"<?php }?>>
								<th width="220">返利单位：</th>
								<td>
									<input type="text " name="lt_rebates_name" class="input-text tips_class" id="lt_rebates_name" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['lt_rebates_name'];?>
" >
									<span class="admin_web_tip">默认为元，例：金币</span>
								</td>
							</tr>
							
							<tr>
								<th width="220">猎头注册默认等级：</th>
								<?php if (is_array($_smarty_tpl->tpl_vars['lt_rows']->value)) {?>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<div class="layui-input-inline">
													<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lt_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
														<input name="lt_rating" id="lt_rating_0"  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rating']==$_smarty_tpl->tpl_vars['v']->value['id']) {?> checked <?php }?> type="radio"/>
													<?php } ?>
												</div>
											</div>
										</div>
									</td>
								<?php } else { ?>
									<td>
										暂无等级，<a href="index.php?m=userconfig&c=comclass" style="color:red;">添加会员等级</a>
										<input type="hidden" name="com_rating" value="0">
									</td>
								<?php }?>
							</tr>
							
							<tr class="admin_table_trbg">
								 <th style="border-bottom:none;">&nbsp;</th>
          <td align="left" style="border-bottom:none;"> 
									<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
									<input class="layui-btn layui-btn-normal" id="ltconfig" type="button" name="config" value="提交" />&nbsp;&nbsp;
									<input class="layui-btn layui-btn-normal" type="reset" value="重置" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 type="text/javascript">
		layui.use(['layer', 'form'], function(){
			var layer = layui.layer
				,form = layui.form
				,$ = layui.$;
		});

		$(function(){
			$("#ltconfig").click(function(){
				$.post("index.php?m=admin_ltset&c=save",{
					config : $("#ltconfig").val(),
 					lt_status : $("input[name=lt_status]:checked").val(),
					lt_enforce_emailcert : $("input[name=lt_enforce_emailcert]").is(":checked") ? 1:0,
					lt_enforce_mobilecert : $("input[name=lt_enforce_mobilecert]").is(":checked") ? 1:0,
 					lt_enforce_licensecert : $("input[name=lt_enforce_licensecert]").is(":checked") ? 1:0,
 					lt_job_status : $("input[name=lt_job_status]").is(":checked") ? 0:1,
 					lt_cert_status : $("input[name=lt_cert_status]").is(":checked") ? 1:0,
					lt_rec_rebates : $("input[name=lt_rec_rebates]").is(":checked") ? 1:0,
 					pytoken : $("#pytoken").val(),
 					lt_rebates_name : $("#lt_rebates_name").val(),
					lt_rating : $("input[name=lt_rating]:checked").val()
				},function(data,textStatus){
					config_msg(data);
				});
			});
			$("input[name='lt_rec_rebates']").click(function(){
				$("#rebates_name").toggle();
			});
		})
	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
