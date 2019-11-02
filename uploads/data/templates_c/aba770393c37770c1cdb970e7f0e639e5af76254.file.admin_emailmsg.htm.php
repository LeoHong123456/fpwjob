<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:54:53
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_emailmsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:5531055345dbd445dec9231-25391076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aba770393c37770c1cdb970e7f0e639e5af76254' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_emailmsg.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5531055345dbd445dec9231-25391076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
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
  'unifunc' => 'content_5dbd445e010085_54206181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd445e010085_54206181')) {function content_5dbd445e010085_54206181($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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

<?php echo '<script'; ?>
>
	function ckemailmsg(){
		var sdate=$("#sdate").val();
		var edate=$("#edate").val(); 
		if(sdate&&edate&&toDate(edate)<toDate(sdate)){
			layer.msg("结束时间必须大于开始时间！",2,8);return false;
		}
	}
<?php echo '</script'; ?>
>
<body class="body_ifm">

<div class="infoboxp">
	<div class="admin_new_tip">
		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		<div class="admin_new_tip_list_cont">
			<div class="admin_new_tip_list">该页面展示了网站所有的邮件发送记录。</div>
			<div class="admin_new_tip_list">可输入关键字进行搜索，也可进行针对邮箱、发送人、时间进行精准搜索。</div>
		</div>
	</div>

	<div class="clear"></div>

	<div class="admin_new_search_box">
		<form action="index.php" name="myform" method="get" style="float:left" onsubmit="return ckemailmsg()">
			<input name="m" value="emailconfiglist" type="hidden"/>
			<input type="hidden" name="state" value="<?php echo $_GET['state'];?>
"/>
			
			<div class="admin_new_search_name">搜索类型：</div>
			
			<div class="admin_Filter_text formselect" did="dtype">
				<input type="button" <?php if ($_GET['type']==''||$_GET['type']=='1') {?> value="邮箱"<?php } elseif ($_GET['type']=='2') {?> value="发送人" <?php } elseif ($_GET['type']=='3') {?> value="接收人"<?php } elseif ($_GET['type']=='4') {?> value="发信邮箱"<?php }?> class="admin_Filter_but" id="btype">
				<input type="hidden" name="type" id="type" <?php if ($_GET['type']=='') {?>value="1"<?php } else { ?>value="<?php echo $_GET['type'];?>
"<?php }?>/>
				
				<div class="admin_Filter_text_box" style="display:none" id="dtype">
					<ul>
						<li><a href="javascript:void(0)" onClick="formselect('1','type','邮箱')">邮箱</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('2','type','发送人')">发送人</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('3','type','接收人')">接收人</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('4','type','发信邮箱')">发信邮箱</a></li>
					</ul>
				</div>
			</div>
			
			<input class="admin_Filter_search" type="text" name="keyword"  size="25" style="float:left">
			<div class="admin_new_search_name">时间：</div>
			<input class="admin_Filter_search" type="text" name="date" id="date" style="float:left;" value="<?php echo $_GET['date'];?>
"> 
			<input class="admin_Filter_bth" type="submit" name="news_search" value="检索"/>
		</form>
	</div>
	
	<div class="clear"></div>

	<div class="table-list">
    <div class="admin_table_border">
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
		<form action="index.php?m=emailconfiglist&c=del" target="supportiframe" name="myform" method="post" id='myform'>
			<table width="100%">
				<thead>
					<tr class="admin_table_top">
						<th><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/></label></th>
						<th align="left" width="50px"> 
							<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> 
								<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'emailconfiglist','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a> 
							<?php } else { ?> 
								<a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'emailconfiglist','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a> 
							<?php }?> 
						</th>
						<th align="left">邮箱</th>
						<th align="left">发送人</th>
						<th align="left">接收人</th>
						<th align="left">标题</th>
						<th> 
							<?php if ($_GET['t']=="ctime"&&$_GET['order']=="asc") {?> 
								<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'ctime','m'=>'emailconfiglist','untype'=>'order,t'),$_smarty_tpl);?>
">时间<img src="images/sanj.jpg"/></a> 
							<?php } else { ?> 
								<a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'ctime','m'=>'emailconfiglist','untype'=>'order,t'),$_smarty_tpl);?>
">时间<img src="images/sanj2.jpg"/></a> 
							<?php }?> 
						</th>
						<th>状态</th>
						<th class="admin_table_th_bg">操作</th>
					</tr>
				</thead>
				
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
						<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
						<td align="left"><?php if ($_smarty_tpl->tpl_vars['v']->value['cname']) {
echo $_smarty_tpl->tpl_vars['v']->value['cname'];
} else { ?>系统<?php }?></td>
						<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
						<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M");?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?><font color="green">成功</font><?php } else { ?><font color="red">失败</font><?php }?></td>
						<td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=emailconfiglist&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
					</tr>
				<?php } ?>
				<tr>
					<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
					<td colspan="9" >
						<label for="chkAll2">全选</label>&nbsp;
						<input class="admin_button"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
					</td>
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
						<td colspan="7" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
			<input type="hidden" name="pytoken"  id='pytoken'  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
		</form>
    </div>
	</div>
</div>
<?php echo '<script'; ?>
>
	layui.use(['laydate'], function(){
		var laydate = layui.laydate,
			$ = layui.$;

		laydate.render({
			elem: '#date',
			range:'~'
		});
	});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
