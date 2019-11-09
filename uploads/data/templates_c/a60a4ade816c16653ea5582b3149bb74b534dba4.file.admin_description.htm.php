<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:38:41
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_description.htm" */ ?>
<?php /*%%SmartyHeaderCode:15419235395dc51b81bcbb97-49725549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a60a4ade816c16653ea5582b3149bb74b534dba4' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_description.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15419235395dc51b81bcbb97-49725549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'is_type' => 0,
    'k' => 0,
    'v' => 0,
    'pytoken' => 0,
    'descrows' => 0,
    'key' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51b81c4b7c5_42613360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51b81c4b7c5_42613360')) {function content_5dc51b81c4b7c5_42613360($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jscolor/jscolor.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
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
      <div class="admin_new_tip_list">该页面展示了网站所有的单页面信息，可对单页面编辑修改操作。</div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="admin_new_search_box">
    <form action="index.php" name="myform" method="get">
      <input name="m" value="description" type="hidden"/>
      <div class="admin_new_search_name">搜索类型：</div>
      <div class="admin_Filter_text formselect"  did='dtype'>
        <input type="button" value="<?php if ($_GET['is_type']) {
echo $_smarty_tpl->tpl_vars['is_type']->value[$_GET['is_type']];
} else { ?>请选择<?php }?>" class="admin_Filter_but"  id="btype">
        <input type="hidden" id='type' value="<?php echo $_GET['is_type'];?>
" name='is_type'>
        <div class="admin_Filter_text_box" style="display:none" id='dtype'>
          <ul>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['is_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li><a href="javascript:void(0)" onClick="formselect('<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
','type','<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <input class="admin_Filter_search"  type="text" name="keyword"  size="25">
      <input  class="admin_Filter_bth" type="submit" name="news_search" value="搜索"/>
      <a href="index.php?m=description&c=add" class=" admin_new_cz_tj">添加单页面</a> <a href="javascript:void(0)" onclick="layer_del('', 'index.php?m=description&c=make');" class="admin_new_cz_tj ">生成所有</a>
    </form>
  </div>
  <div class="clear"></div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=description&c=del" name="myform" method="post" target="supportiframe" id='myform'>
        <input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th> <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> <a href="index.php?m=description&order=desc&t=id">序号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="index.php?m=description&order=asc&t=id">序号<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th align="left">单页面名称</th>
              <th>排序</th>
              <th>左则导航</th>
              <th>类型</th>
              <th> <?php if ($_GET['t']=="ctime"&&$_GET['order']=="asc") {?> <a href="index.php?m=description&order=desc&t=ctime">添加时间<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="index.php?m=description&order=asc&t=ctime">添加时间<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th width="240" >操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['descrows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
            <td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td class="od"><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</td>
            <td class="od"><?php if ($_smarty_tpl->tpl_vars['v']->value['is_nav']==1) {?>显示<?php } else { ?>不显示<?php }?></td>
            <td class="od"><?php if ($_smarty_tpl->tpl_vars['v']->value['is_type']==1) {?>自定义页面<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_type']==2) {?>站内链接<?php } else { ?>外部链接<?php }?></td>
            <td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d");?>
</td>
            <td ><a href="<?php echo smarty_function_url(array('c'=>'get','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" target="_blank"  class="admin_new_c_bth admin_new_c_bth_yl">预览</a> <?php if ($_smarty_tpl->tpl_vars['v']->value['is_type']==1) {?> <a href="javascript:void(0)" onClick="layer_del('', 'index.php?m=description&c=make&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth ">更新</a> <?php }?> <a href="index.php?m=description&c=add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth">修改</a> <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=description&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
          </tr>
          <?php } ?>
          <tr>
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="8"><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
           </tr>
		  <?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
					<td colspan="3"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
					<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
					<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php }?>
				<td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
			</tr>
		<?php }?>
            </tbody>
          
        </table>
      </form>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
