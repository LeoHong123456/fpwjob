<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:54:05
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_template.htm" */ ?>
<?php /*%%SmartyHeaderCode:3671596065dbd442d840180-71537303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a9e31040f071f658afabc7978ded03c790daad' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_template.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3671596065dbd442d840180-71537303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'floder' => 0,
    'key' => 0,
    'v' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd442d879921_44260314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd442d879921_44260314')) {function content_5dbd442d879921_44260314($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">可以通过后台自带即可编辑器自由修改。它是管控网站所有模板目录。在修改前记得要备份模板。在修改出错时可以替换！不影响网站正常显示！</div>
</div>
</div>
<div class="clear"></div>
<div class="admin_new_search_box">
<div class="admin_new_select">
<a href="javascript:location.reload();" class="admin_new_cz_tj" style="margin-left:0px;">刷新当前页</a>
</div></div>
<div class="clear"></div>

<div class="table-list">
<div class="admin_table_border">  
<table width="100%" style="background:#fff">
	<thead>
	<tr class="admin_table_top">
			<th align="left">文件名</th>
            <th align="left">文件路径</th>
             <th align="left">文件大小</th>
		
			<th align="left">最后更新时间</th>
			<th align="left" class="admin_table_th_bg">操作</th>
		</tr>
	</thead>
	<tbody>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['floder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
 	
    <tr align="left"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?>>
    	<td align="left" class="td1"><span><a href="index.php?m=admin_tpl&c=template&dir=<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><img src="images/folder.gif"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></span></td> 
        <td  align="left" class="ud"><?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
</td>
    	<td class="ud" align="left"></td>
   	 	<td class="od" align="left"></td>
    	<td> <a href="index.php?m=admin_tpl&c=template&dir=<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"class="admin_cz_bj"><?php if ($_smarty_tpl->tpl_vars['v']->value['name']=='返回上一级') {?>返回目录<?php } else { ?>查看目录<?php }?></a></td>
  </tr>
 
  <?php } ?>
   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
 	
    <tr align="left">
    	<td align="left" class="td1"><span><a href="index.php?m=admin_tpl&c=template&c=modify&path=<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><img src="images/file.gif"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></span></td> 
        <td  align="left" class="ud"><?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
</td>
    	<td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
</td>
   	 	<td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</td>
    	<td> <a href="index.php?m=admin_tpl&c=modify&path=<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"class="admin_cz_bj">修改文件</a></td>
  </tr>
 
  <?php } ?>
  </tbody>
  </table> 
</div>
</div>
</div>
</body>
</html><?php }} ?>
