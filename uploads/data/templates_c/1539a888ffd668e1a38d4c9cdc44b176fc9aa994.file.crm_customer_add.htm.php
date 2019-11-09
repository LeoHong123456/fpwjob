<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:46:33
         compiled from "/www/fpwjob/uploads/app/template/admin/crm_customer_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:1343793625dc51d59b45b54-90994971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1539a888ffd668e1a38d4c9cdc44b176fc9aa994' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/crm_customer_add.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1343793625dc51d59b45b54-90994971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'get_info' => 0,
    'rating_list' => 0,
    'v' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51d59b5b672_21001379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51d59b5b672_21001379')) {function content_5dc51d59b5b672_21001379($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
" rel="stylesheet" type="text/css" />

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
 src="js/icheck.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">

function CheckMember(){  

	var username=$("#username").val();
	if(username==''){
		layer.msg('用户名不能为空！', 2, 8);return false;
	} 
	if($("input[name='password']").val()==''){
		layer.msg('密码不能为空！', 2, 8);return false;
	}
	var linkman=$("#linkman").val();
	if(linkman==''){
		layer.msg('联系人不能为空！', 2, 8);return false;
	}
	var obj = $("input[name='email']").val();
	var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	if(obj!=""&&!myreg.test(obj)){
		layer.msg('联系邮箱格式错误！', 2, 8);return false;
	}
	if($("input[name='moblie']").val() ==''){
		layer.msg('联系手机不能为空！', 2, 8);return false;
	}else{
	   var obj = $("input[name='moblie']").val(); 
	   if(isjsMobile(obj)==false&&isjsTell(obj)==false){
	     layer.msg('电话格式错误！', 2, 8);return false;
	   }
	}
	if($("input[name='name']").val()==''){
		layer.msg('公司全称不能为空！', 2, 8);return false;
	}
	if($("input[name='address']").val()==''){
		layer.msg('公司地址不能为空！', 2, 8);return false;
	}
	loadlayer();
}

function checkUserName(){
	var username=$.trim($("#username").val());
	var pytoken=$.trim($("#pytoken").val());
	if(username){
		$.post("index.php?m=crm_customer&c=check",{username:username,pytoken:pytoken},function(msg){
			if(msg){
 				layer.tips('已存在该用户！',"#username" , {guide: 1,style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']});
				$("#username").attr("vtype",'1');
			}else if($("#username").attr('vtype')=='1'){
				layer.closeTips();
				$("#username").attr("vtype",'0');
			}
		});
	}
}
<?php echo '</script'; ?>
> 
<title>后台管理</title>
</head>

<body class="body_ifm">
<div class="infoboxp">
	<div class="admin_new_tip">
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		<div class="admin_new_tip_list_cont">
			<div class="admin_new_tip_list">该页面展示了业务员添加客户信息。</div>
		</div>
	</div>

	<div class="clear"></div>

	<div class="admin_add_box">
		<div class="admin_add_box_c">

		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
		
		<form name="myform" <?php if ($_smarty_tpl->tpl_vars['get_info']->value['type']=='') {?>target="supportiframe"<?php }?>  action="index.php?m=crm_customer&c=add" onSubmit="return CheckMember();" method="post" class="layui-form">
			
			<!-- 
				<div class="admin_add_list">
					<div class="admin_add_list_name"><span class="admin_required_icon">*</span> 会员级别</div>
					<div class="admin_add_list_right">
						<div class="">
							<div class="layui-input-block">
								<div class="layui-input-inline">
									<select name="rating_name" id="rating_name" lay-verify="rating_name" >
										<option value="">请选择</option>
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			-->

			<div class="admin_add_list">
				<div class="admin_add_list_name"><span class="admin_required_icon">*</span> 用户名</div>
				<div class="admin_add_list_right">
					<input type="text"  value="" name="username" class="input-text"  onblur="checkUserName();" id="username">		
				</div>
			</div>

			<div class="admin_add_list">
				<div class="admin_add_list_name"><span class="admin_required_icon">*</span> 设置密码</div>
				<div class="admin_add_list_right">
					<input type="password" value="" name="password" class="input-text" />
					<font color="gray"></font>
				</div>
			</div>

			<div class="admin_add_list">
				<div class="admin_add_list_name"><span class="admin_required_icon">*</span> 联系人</div>
				<div class="admin_add_list_right">
					<input type="text"  value="" name="linkman" class="input-text" id="linkman">		
				</div>
			</div>

			<div class="admin_add_list">
				<div class="admin_add_list_name"><span class="admin_required_icon">*</span> 联系手机</div>
				<div class="admin_add_list_right">
					<input type="text" value="" name="moblie" class="input-text" >
					<font color="gray"></font>
 				</div>
			</div>

			<div class="admin_add_list">
				<div class="admin_add_list_name"><span class="admin_required_icon"></span> 固定电话</div>
				<div class="admin_add_list_right">
					<input type="text"  id="areacode" name="areacode" class="input-text" placeholder="如：0527" maxlength="7" style="width:70px;"/>
					<input type="text"  placeholder="固定电话" id="telphone" class="input-text" name='telphone' maxlength="8"style="width:150px;"/>
					<input type="text"  placeholder="分机号" id="exten" class="input-text" name='exten' maxlength="4"style="width:70px;"/>
					<font color="gray"></font>
				</div>
			</div>

			<div class="admin_add_list">
				<div class="admin_add_list_name"><span class="admin_required_icon"></span>联系邮箱</div>
				<div class="admin_add_list_right">
					<input type="text" value="" name="email" class="input-text" >
					<font color="gray"></font>
				</div>
			</div>

			<div class="admin_add_list">
				<div class="admin_add_list_name"><span class="admin_required_icon">*</span> 公司全称</div>
				<div class="admin_add_list_right">
					<input type="text" value="" name="name" class="layui-input" style="width:230px">
					<font color="gray"></font>
				</div>
			</div>

			<div class="admin_add_list">
				<div class="admin_add_list_name"><span class="admin_required_icon">*</span> 公司地址</div>
				<div class="admin_add_list_right">
					<input type="text" value="" name="address" class="layui-input" style="width:230px">
					<font color="gray"></font>
				</div>
			</div>

   			<div class="admin_add_list">
				<div class="admin_add_list_name">    
					<input type="hidden" id="status_1" name="status" value="1"> 
				</div>
			</div>

			<div class="admin_add_list">
				<input class="layui-btn layui-btn-normal" type="submit" name="submit" value="&nbsp;添 加&nbsp;" />
				<input class="admin_save_sub_qx" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
			</div>

			<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
  		</form>

		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

layui.use(['layer', 'form'], function(){
	var form = layui.form,
		laydate = layui.laydate,
		$ = layui.$;
  });//end layui.use()

<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
