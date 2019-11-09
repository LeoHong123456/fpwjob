<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:47:35
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_q_class_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:13337570405dc51d970a5660-08161553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58aeaf4ce26bb67bd10799461029fe9d6d8765ee' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_q_class_list.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13337570405dc51d970a5660-08161553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pid' => 0,
    'order' => 0,
    'q_class' => 0,
    'key' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51d97116302_03884618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51d97116302_03884618')) {function content_5dc51d97116302_03884618($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<div class="admin_new_tip_list">该页面展示了网站所有的问答类别信息，可对问答类别进行添加删除操作。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
 <form action="index.php"  name="myform" method="get">
 <input name="m" value="comnews" type="hidden"/>
 <input type="hidden" name="status" value="<?php echo $_GET['status'];?>
"/>
	<div class="admin_new_search_name">搜索类型：</div>
     <div class="admin_Filter_text formselect" did='dq_type'>
        <input type="button" <?php if ($_GET['type']==''||$_GET['type']=='1') {?> value="标题"<?php }?> class="admin_Filter_but" id="bq_type">
        <input type="hidden" name="type" id="q_type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/>
        <div class="admin_Filter_text_box" style="display:none" id="dq_type">
          <ul> 
            <li><a href="javascript:void(0)" onClick="formselect('1','q_type','标题')">标题</a></li>
          </ul>
        </div>
      </div>
		<input type="text" placeholder="输入你要搜索的关键字" value="<?php echo $_GET['keyword'];?>
" name='keyword' class="admin_Filter_search">
		<input type="submit"  value="搜索" class="admin_Filter_bth">
    <a href="index.php?m=question_class&c=add&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" class="admin_new_cz_tj"> + 添加类别</a>
    </form>
   
  </div>
<div class="clear"></div> 
<div class="table-list admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

<form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
<input name="m" value="question_class" type="hidden"/>
<input name="c" value="del" type="hidden"/>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
		     <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th><a href="index.php?m=question_class&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&t=id">编号<?php if ($_smarty_tpl->tpl_vars['order']->value=="desc") {?><img src="images/sanj.jpg"/><?php } else { ?><img src="images/sanj2.jpg"/><?php }?></a></th>
			<th align="left" style="width:650px;">标题</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['q_class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
	    <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span>
        </td>
   	 	<td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
		<td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d");?>
</td>
    	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['pid']=='0') {?><a href="index.php?m=question_class&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="status admin_cz_sh" >管理子类</a><?php }?>
        <a href="index.php?m=question_class&c=add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="status admin_new_c_bth" >修改</a>
		<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=question_class&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
  </tr>
  <?php } ?>
  <tr >
    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
    <td colspan="4" >
    <label for="chkAll2">全选</label>&nbsp;
    <input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
   </tr>
   <?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
					<td colspan="1"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
					<td colspan="1"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
					<td colspan="1"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php }?>
				<td colspan="3" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
			</tr>
		<?php }?>
  </tbody>
  </table>
  <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</form>
</div>
</div>
</body>
</html><?php }} ?>
