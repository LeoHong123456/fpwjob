<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:55:56
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_jobrewardpack.htm" */ ?>
<?php /*%%SmartyHeaderCode:18168021865e4c879cb6f1a1-54880357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5facc64f8b32069e5745c69449cc84d74e5bb7e' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_jobrewardpack.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18168021865e4c879cb6f1a1-54880357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'ccname' => 0,
    'rows' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c879cbe0897_95414773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c879cbe0897_95414773')) {function content_5e4c879cbe0897_95414773($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
	<title>后台管理</title>
</head>

<body class="body_ifm">

<div class="infoboxp">
	
	<div class="tabs_info">
		<ul>
			<li> <a href="index.php?m=admin_jobpack&uid=<?php echo $_GET['uid'];?>
" <?php if ($_GET['c']!="reward") {?>class="report_uaer_list_on"<?php }?>>分享职位</a></li>
			<li  class="curr"><a href="index.php?m=admin_jobpack&c=reward&uid=<?php echo $_GET['uid'];?>
" <?php if ($_GET['c']=="reward") {?>class="report_uaer_list_on"<?php }?>>悬赏职位</a></li>
		</ul>
	</div>

	<div class="admin_new_tip">

		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		
		<div class="admin_new_tip_list_cont">
			<?php if ($_GET['uid']!='') {?>
				<div class="admin_new_tip_list">该页面展示了网站企业：<font color="#f00">【<?php echo $_smarty_tpl->tpl_vars['ccname']->value;?>
】</font> 的悬赏职位信息，可对进行删除操作。</div>
			<?php } else { ?>
				<div class="admin_new_tip_list">该页面展示了网站所有的企业分享职位信息，可对会员进行删除操作。</div>
			<?php }?>
 
		</div>

	</div>


  <div class="table-list" style="margin-top:20px;">
    <div class="admin_table_border">
      <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
        <input name="m" value="admin_memberlog" type="hidden"/>
        <input name="c" value="dellog" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                </label></th>
              <th>职位编号</th>
              <th align="left">公司名称</th>
              <th align="left">职位名称</th>
              <th align="center">赏金总额</th>
              <th align="center">投递赏金</th>
              <th align="center">面试赏金</th>
			  <th align="center">入职赏金</th>
             
              <th>更新时间</th>
            
             
              <th align="center">应聘人数</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jobid'];?>
</td>
            <td align="left" ><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td align="center"><span class="admin_jobpack_n4">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['money']);?>
</span></td>
            <td align="center"><span class="admin_jobpack_n1">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['sqmoney']);?>
</span></td>
            <td align="center"><span class="admin_jobpack_n2">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['invitemoney']);?>
</span></td>
            <td align="center"><span class="admin_jobpack_n3">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['offermoney']);?>
</span></td>
            <td class="td" ><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['lastupdate'],"%Y-%m-%d %H:%M");?>
</td>
            
            <td  align="center">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['sqnum']>0) {?>

				<a href="index.php?m=admin_jobpack&c=rewardlog&jobid=<?php echo $_smarty_tpl->tpl_vars['v']->value['jobid'];
if ($_GET['t']=='r') {?>&t=r<?php }?>" class="admin_cz_sc"><font color='green'><?php echo $_smarty_tpl->tpl_vars['v']->value['sqnum'];?>
人 查看应聘记录</font></a>
			
			<?php } else { ?>

				<font color='red'>暂无应聘</font>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['sqArb']==26) {?>
				<a href="index.php?m=admin_jobpack&c=rewardlog&jobid=<?php echo $_smarty_tpl->tpl_vars['v']->value['jobid'];
if ($_GET['t']=='r') {?>&t=r<?php }?>" class="admin_cz_sc"><font color='red'>仲裁</font></a>
			<?php }?>
            </td>
            <td><a href="javascript:void(0)" onClick="layer_del('删除悬赏职位将同步删除所有悬赏职位相关数据？', 'index.php?m=admin_jobpack&c=delreward&delid=<?php echo $_smarty_tpl->tpl_vars['v']->value['jobid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
          </tr>
          <?php } ?>
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
				<td colspan="9" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
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
  </div>
</body>
</html><?php }} ?>
