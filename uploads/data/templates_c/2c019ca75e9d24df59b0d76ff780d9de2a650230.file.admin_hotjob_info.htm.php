<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 17:18:33
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_hotjob_info.htm" */ ?>
<?php /*%%SmartyHeaderCode:20109479355e2eaae998b584-95237661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c019ca75e9d24df59b0d76ff780d9de2a650230' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_hotjob_info.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20109479355e2eaae998b584-95237661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'source' => 0,
    'pytoken' => 0,
    'hotjob' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2eaae99dbe46_64896212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2eaae99dbe46_64896212')) {function content_5e2eaae99dbe46_64896212($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  DD_belatedPNG.fix('#bg');
<?php echo '</script'; ?>
>
<![endif]-->
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<title>后台管理</title>
<style>
.comy_time_text{
	float: none !important;
	width: 90px !important;
}
</style>
</head>
<body> 
	<div id="houtai_div"> 
		<div class="common-form" style="width:610px;">
			<form name="myform" action="<?php if ($_smarty_tpl->tpl_vars['source']->value=='company') {?>index.php?m=admin_company&c=save<?php } else { ?>index.php?m=admin_hotjob&c=save<?php }?>" method="post" id="myform" enctype="multipart/form-data" onsubmit="return check_form();" target="supportiframe"> 
		   <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			<table width="100%" class="table_form contentWrap"> 
				<tr>
					<th align="right"><div  style="width:80px;">企业名称：</div></td>
					<td id="comname" align="left">
					<div class="com_a_name"><?php echo $_smarty_tpl->tpl_vars['hotjob']->value['username'];?>
<input name="username" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['username'];?>
"></div>
					</td>
				
					<th align="right" class="comp_hotjob_line"><div  style="width:80px;">会员级别：</div></td>
					<td id="ratname" align="left">
						<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['rating'];?>
<input name="rating" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['rating'];?>
">
                        <input name="rating_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['rating_id'];?>
">
					</td>
				</tr>
                				<tr>
                
				
                <th align="right">服务价格：</td>
					<td align="left">
					<input type="text" name="service_price" id="service_price" class="comp_text_w90" size="5" value="<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['service_price'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"><span class="comp_text_span">元</span>
					</td>
                    	<th align="right" class="comp_hotjob_line">显示排序：</td>
					<td align="left">
						<input class="comp_text_w90" id="sort" value="<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['sort'];?>
" name="sort" size="5"> <span class="comp_text_span">大前小后</span>
					</td>
				
				</tr>
				
				  <tr>
					<th align="right">名企时间：</td>
					<td align="left" colspan="4">
						<input id="time" class="comy_time_text" type="text" readonly value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hotjob']->value['time_start'],'%Y-%m-%d');?>
" name="time_start"/>
						
						<input type="text" name="time_end" id="time_end" class="comy_time_text"
							readonly value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hotjob']->value['time_end'],'%Y-%m-%d');?>
"/>
					</td>
				</tr>
				<tr>
					<th align="right">企业展示LOGO：</td>
					<td id="logo" align="left"   colspan="4">
						<div class="com_in_logo">
							<?php if ($_smarty_tpl->tpl_vars['hotjob']->value['hot_pic']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['hot_pic'];?>
"  width="60" height="60"><?php }?>
						</div> 
						 
						<div class="com_hot_pic_text">
							<input type="hidden" name="defpic" id="hot_pic" value="<?php if ($_smarty_tpl->tpl_vars['hotjob']->value['hot_pic']) {
echo $_smarty_tpl->tpl_vars['hotjob']->value['hot_pic'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];
}?>" >
							<button type="button" class="layui-btn layui-btn-normal" id="noupload">选择图片</button>
							<input type="hidden" id="laynoupload" value="1"/>
						</div>
					</td>
				</tr>
				
				<tr>
					<th align="right">名企备注：</td>
					<td id="beizhu1" name="beizhu1" align="left"  colspan="4">
					   <textarea id="beizhu" name="beizhu" rows="5" class="comp_text_textarea"><?php echo $_smarty_tpl->tpl_vars['hotjob']->value['beizhu'];?>
</textarea>
					   <br/><span>200字以内</span>
					</td>
				</tr>
			<tr>
			<td colspan="4" align="center">
				<input name="uid" id="com_uid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['uid'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['hotjob']->value['id']) {?>
					 <input id="hotjob_id"  name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['id'];?>
">
					<input class="layui-btn layui-btn-normal" name="hotup" type="submit" value="修改" id="dosubmit">  
				<?php } else { ?>
				  <input class="layui-btn layui-btn-normal" name="hotad" type="submit" value="提交" id="dosubmit">
				<?php }?>
			</td>
			 </table>
			 </form>
		</div> 
	</div>  

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>  
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
 src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>  
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
layui.use(['laydate'], function(){
	var laydate = layui.laydate
	,$ = layui.$;

	laydate.render({
		elem: '#time'
	});

	laydate.render({
		elem: '#time_end'
	});
});
function check_form(){
	var hot_pic=$("#hot_pic").val(); 
	var pic=$("input[name=file]").val();
	var time = $("#time").val();
	if(time==""){ 
		parent.layer.msg('名企开始时间不能为空！', 2,8);
		return false
	}
	
	var time_end = $("#time_end").val();
	if(time_end == ''){
		parent.layer.msg('名企结束时间不能为空！', 2,8);
		return false
	}

	if(hot_pic=="" && pic==""){
		parent.layer.msg('企业展示LOGO不能为空！', 2, 8);
		return false
	}

 	var beizhu=$("#beizhu").val();
	if(beizhu.length>200){
		parent.layer.msg('不能超过200字以内', 2, 8);
		return false
	}
}

<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
