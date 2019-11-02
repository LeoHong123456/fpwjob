<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:25:14
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_haibao_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:4013827155dbd3d6a0008f0-49258323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f32e58e70e17d2bc3eb285aaa2bc0f61404aa5f4' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_haibao_config.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4013827155dbd3d6a0008f0-49258323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd3d6a036031_43707490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd3d6a036031_43707490')) {function content_5dbd3d6a036031_43707490($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta http-equiv="Pragma" content="no-cache" /> 
	<meta http-equiv="Cache-Control" content="no-cache" /> 
	<meta http-equiv="Expires" content="0" />
	
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
	<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
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
		<div class="admin_new_tip">
			<a href="javascript:;" class="admin_new_tip_close"></a>
			<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<div class="admin_new_tip_list">如果你已经注册PHPYUN海报系统账户，请先进行账户验证后，再进行海报配置参数保存。</div>
				<div class="admin_new_tip_list">请先注册PHPYUN海报系统帐户，<a href="http://haibao.phpyun.com" target="_blank" style="color:blue;">点击注册</a>。</div>
			</div>
		</div>
		
		<div class="clear"></div>
		<div style="height:10px;"></div>

		<div class="main_tag">
			<div class="tag_box">
				<form action="" method="post" class="layui-form">
					<table width="100%" class="table_form">
						<tr>
							<th width="200" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
							<td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
						</tr>
						<tr class="admin_table_trbg">
							<th width="200">是否开启：</th>
							<td> 
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input id="sy_haibao_isopen_1" type="radio" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_haibao_isopen']=='1') {?>checked=""<?php }?> lay-filter="isopen" value="1" name="sy_haibao_isopen" title="开启" >
											
											<input id="sy_haibao_isopen_2" type="radio" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_haibao_isopen']!='1') {?>checked=""<?php }?> lay-filter="isopen" value="2" name="sy_haibao_isopen" title="关闭" >
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr class="admin_table_trbg">
							<th width="200">帐户：</th>
							<td>
								<input id="sy_haibaouserid" name="sy_haibaouserid" type="hidden" value="" >
								<input class="input-text tips_class" type="text" name="sy_haibaouser" id="sy_haibaouser" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_haibaouser'];?>
" size="30" maxlength="255" />  
							</td>
						</tr>
						<tr>
							<th width="200">密码：</th>
							<td><input class="input-text tips_class" type="password" name="sy_haibaopw" id="sy_haibaopw" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_haibaopw'];?>
" size="30" maxlength="255"/></td>  
						</tr>
						<tr class="admin_table_trbg">
							<th width="200">KEY：</th>
							<td><input class="input-text tips_class" type="text" name="sy_haibaokey" id="sy_haibaokey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_haibaokey'];?>
" size="50" maxlength="255"/>  
							<span class="admin_web_tip"> 运营网站加密串</span></td>
						</tr>

						<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_haibaouserid']) {?>
						<tr>
							<td colspan="2" align="center">
								<input class="layui-btn layui-btn-normal" id="check" type="button" name="" value="验证" />
							</td>
						</tr>
						<?php }?>

						<tr>
							<th width="160">海报运营站：</th>
							<td>
								<input class="input-text input_text_rp" type="text" name="sy_hburl" id="sy_hburl" value="" disabled="disabled"/>
							</td>
						</tr>
						<tr>
							<th width="160">海报数量：</th>
							<td>
								<input class="input-text input_text_rp" type="text" name="sy_haibaonum" id="sy_haibaonum" value="0" disabled="disabled"/> 条 / 天
							</td>
						</tr>
						<tr>
							<th width="160">今日剩余海报数量：</th>
							<td>
								<input class="input-text input_text_rp" type="text" name="rest_haibaonum" id="rest_haibaonum" value="0" disabled="disabled"/> 条 
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input class="layui-btn layui-btn-normal" id="config" type="button" name="haibaoconfig" value="提交" />
								&nbsp;&nbsp;
								<input class="layui-btn layui-btn-normal" type="reset" value="重置" />
							</td>
						</tr>
					</table>
					<input type="hidden" id="pytoken" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				</form>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
> 
		layui.use(['layer', 'form'], function(){
			var layer = layui.layer
			,form = layui.form
			,$ = layui.$;

			var sy_seo_rewrite = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_seo_rewrite'];?>
';

			form.on('radio(isopen)', function (data) {
				
 				if(data.value==1 && sy_seo_rewrite!='1'){
					parent.layer.msg('请先开启网站伪静态！', 2, 9,function(){
						window.location.reload();
					});
				};
				 
			});
			 
		});

		$(function(){
			$("#config").click(function(){
				
				var huser = $("#sy_haibaouser").val();
				var hpw = $("#sy_haibaopw").val();
				var hkey = $("#sy_haibaokey").val();
				if(huser==""){
					parent.layer.msg('请填写账户名称', 2, 8);
					return false;
				}
				if(hpw==""){
					parent.layer.msg('请填写账户密码', 2, 8);
					return false;
				}
				if(hkey==""){
					parent.layer.msg('请填写账户key值', 2, 8);
					return false;
				}


  				$.post("index.php?m=admin_haibao&c=save",{
					config : $("#config").val(),
					sy_haibaouser : $("#sy_haibaouser").val(),
					sy_haibaouserid : $("#sy_haibaouserid").val(),
					sy_haibao_isopen : $("input[name=sy_haibao_isopen]:checked").val(), 
					sy_haibaokey :$("#sy_haibaokey").val(),
					pytoken : $("#pytoken").val(),
					sy_haibaopw : $("#sy_haibaopw").val(),
 				},function(data,textStatus){
					config_msg(data);
				});
			});
			
			$("#check").click(function(){
				$.post("index.php?m=admin_haibao&c=get_restnum",{
					pytoken : $("#pytoken").val(),
					haibaouser : $("#sy_haibaouser").val(),
					key : $("#sy_haibaokey").val()
				},function(data){
					if(data){
						data = eval('('+data+')');
						if(data.mid){
							$("#sy_haibaouserid").val(data.mid);
						}else{
							parent.layer.msg('账号信息填写错误！', 2, 8);
							return false;
						}
						if(data.hbnum){
							$("#sy_haibaonum").val(data.hbnum);
						}else{
							$("#sy_haibaonum").val(0);
						}
						if(data.nums){
							$("#rest_haibaonum").val(data.hbnum-data.nums);
						}else{
							$("#rest_haibaonum").val(0);
						}
						if(data.weburl){
							$("#sy_hburl").val(data.weburl);
						}
					}else{
						parent.layer.msg('账号信息填写错误！', 2, 8);
						return false;
					}
				});
			})
			
			'<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_haibaouserid']) {?>'
				$.post("index.php?m=admin_haibao&c=get_restnum",{
					pytoken : $("#pytoken").val(),
					haibaouser : $("#sy_haibaouser").val(),
					key : $("#sy_haibaokey").val()
				},function(data){
					
					if(data){
						data = eval('('+data+')');
						if(data.hbnum){
							$("#sy_haibaonum").val(data.hbnum);
						}else{
							$("#sy_haibaonum").val(0);
						}

						if(data.nums){
							$("#rest_haibaonum").val(data.hbnum-data.nums);
						}else{
							$("#rest_haibaonum").val(0);
						}
						if(data.mid){
							$("#sy_haibaouserid").val(data.mid);
						}
						if(data.weburl){
							$("#sy_hburl").val(data.weburl);
						}
					}
				});
			'<?php }?>'
		})
	<?php echo '</script'; ?>
>
 </body>
</html><?php }} ?>
