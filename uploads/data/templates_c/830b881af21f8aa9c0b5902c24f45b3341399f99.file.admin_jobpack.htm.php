<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:39:57
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_jobpack.htm" */ ?>
<?php /*%%SmartyHeaderCode:8235617565e48ffdd58b7c0-61900893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830b881af21f8aa9c0b5902c24f45b3341399f99' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_jobpack.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8235617565e48ffdd58b7c0-61900893',
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
  'unifunc' => 'content_5e48ffdd601a06_91862922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e48ffdd601a06_91862922')) {function content_5e48ffdd601a06_91862922($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
	<?php echo '<script'; ?>
 type="text/javascript">
		function cktimesave(){
			var stime=$("#stime").val();
			var etime=$("#etime").val();
			if(stime&&etime&&toDate(stime)>toDate(etime)){
				layer.msg("结束时间必须大于开始时间！",2,8);return false;
			}
		}
	<?php echo '</script'; ?>
>
	<title>后台管理</title>
</head>

<body class="body_ifm"style="font-size:12px; line-height:20px;">

<div class="infoboxp">
	
	<div class="tabs_info">
		<ul>
			<li class="curr"> <a href="index.php?m=admin_jobpack&uid=<?php echo $_GET['uid'];?>
" <?php if ($_GET['c']!="reward") {?>class="report_uaer_list_on"<?php }?>>分享职位</a></li>
			<li class=""><a href="index.php?m=admin_jobpack&c=reward&uid=<?php echo $_GET['uid'];?>
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
】</font> 的分享职位信息，可对进行删除操作。</div>
			<?php } else { ?>
				<div class="admin_new_tip_list">该页面展示了网站所有的企业分享职位信息，可对会员进行删除操作。</div>
			<?php }?> 		

			<div class="admin_new_tip_list"></div>

		</div>

	</div>


   <div class="table-list" style="margin-top:10px">
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
              <th align="center">推广量</th>
              <th align="center">赏金单价</th>
              <th align="center">赏金总额</th>
              <th align="center">剩余赏金</th>
              
              <th>更新时间</th>
            
              
              <th align="center">操作</th>
             
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
            <td> </td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jobid'];?>
</td>
            <td align="left" ><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td align="center"><span class="admin_jobpack_n4"><?php echo $_smarty_tpl->tpl_vars['v']->value['sharenum'];?>
</span></td>
            <td align="center"><span class="admin_jobpack_n1">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['packmoney']);?>
</span></td>
            <td align="center"><span class="admin_jobpack_n2">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['packprice']);?>
</span></td>
            <td align="center"><span class="admin_jobpack_n3">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['nowprice']);?>
</span></td>
            <td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['lastupdate'],"%Y-%m-%d %H:%M");?>
</td>
            
            <td><a href="javascript:void(0)" onClick="layer_del('删除分享职位将同步删除所有分享赏金相关数据？', 'index.php?m=admin_jobpack&c=delshare&delid=<?php echo $_smarty_tpl->tpl_vars['v']->value['jobid'];?>
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
