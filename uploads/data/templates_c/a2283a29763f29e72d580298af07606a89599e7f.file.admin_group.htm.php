<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:24:18
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_group.htm" */ ?>
<?php /*%%SmartyHeaderCode:3633335255e48fc32900693-09749865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2283a29763f29e72d580298af07606a89599e7f' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_group.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3633335255e48fc32900693-09749865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'admin_group' => 0,
    'navigation' => 0,
    'v' => 0,
    'power' => 0,
    'one_menu' => 0,
    'val' => 0,
    'two_menu' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e48fc32950357_02647131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e48fc32950357_02647131')) {function content_5e48fc32950357_02647131($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="./images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="./images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="./images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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

</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">管理员根据网站运营需求，添加不同类型的管理员！管理员类型分为：“CRM、超级管理员、分站管理员”用户权限组成相关设置，超级管理员可以根据运营需求设置。</div>
</div>
</div>
<div class="clear"></div>



<div class="clear"></div>
<div class="common-form">
<div class="tag_box mt10">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" target="supportiframe" action="index.php?m=admin_user&c=savagroup" method="post" id="myform" class="layui-form">
<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['admin_group']->value[0];?>
" name="groupid" />
<table width="100%"  class="table_form ">
           <tbody>
  <tr class="admin_table_trbg">
    <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>   
  </tr>
 </tbody>
	<tr>
		<th width="100">用户组名称</th>
		<td  style="padding-left:10px;">
        <input type="text" name="group_name" id="realname" class="input-text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['admin_group']->value[1];?>
">
        </td>
	</tr>
	
   
	<tr>
		<th>用户组权限</th>
		<td>
        <div class="layui-collapse" lay-filter="test">
        
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <div class="layui-colla-item"  id="power<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <h2 class="layui-colla-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

            <input type="hidden" name="power[]" value="<?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['power']->value)) {
echo $_smarty_tpl->tpl_vars['v']->value['id'];
}?>" id="group<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >
            </h2>
            <div class="layui-colla-content layui-show">
              <p>
              <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['one_menu']->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
           <div class="layui-colla-item">
            <h2 class="layui-colla-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>

               <input type="hidden" name="power[]"  value="<?php if (in_array($_smarty_tpl->tpl_vars['val']->value['id'],$_smarty_tpl->tpl_vars['power']->value)) {
echo $_smarty_tpl->tpl_vars['val']->value['id'];
}?>" id="group<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" >

            </h2>
            <div class="layui-colla-content  layui-show">
              <p>
              
              <div class="layui-form-item">
        			<div class="layui-input-block" id="power<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"> 
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['two_menu']->value[$_smarty_tpl->tpl_vars['val']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                    <input type="checkbox" name="power[]" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" id="group<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" t1="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" t2="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['value']->value['id'],$_smarty_tpl->tpl_vars['power']->value)) {?>checked="checked"<?php }?>  lay-filter="power" >
                	<?php } ?></div></div>
              
              </p>
            </div>
          </div>
              <?php } ?>
              </p>
            </div>
          </div>
		<?php } ?>

		</div>

    	</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center" height="40" style="border-top:1px solid #CCC;">
           <input class="layui-btn layui-btn-normal" name="add_group" type="submit" value="提交" id="dosubmit">
</td>
</table>
</form>
</div>
</div></div>
<?php echo '<script'; ?>
 language="javascript">


  layui.use(['layer', 'form','element'], function(){
    var layer = layui.layer
    ,form = layui.form
	,element = layui.element
    ,$ = layui.$;
	  form.on('checkbox(power)', function(data){

		var id = data.elem.id;
		var t1 = $('#'+id).attr('t1');
		var t2 = $('#'+id).attr('t2');
		if(data.elem.checked){
			
			$("#group"+t1).val(t1);
			$("#group"+t2).val(t2);
			
			
		}else{
			var t1checked = 0;
			var t2checked = 0;
			$('#power'+t1+' input[type="checkbox"]:checked').each(function(){
			    t1checked = 1;
				return false;
		    });
			$('#power'+t2+' input[type="checkbox"]:checked').each(function(){
			    t2checked = 1;
				return false;
		    });
			if(t1checked!=1){
				$("#group"+t1).val('');
			}
			if(t2checked!=1){
				$("#group"+t2).val('');
			}
		}
	});
  });


<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
