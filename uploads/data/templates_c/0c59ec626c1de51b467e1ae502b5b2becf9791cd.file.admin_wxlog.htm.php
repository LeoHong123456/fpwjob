<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:54:49
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_wxlog.htm" */ ?>
<?php /*%%SmartyHeaderCode:17986370255dbd445932fab0-20440247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c59ec626c1de51b467e1ae502b5b2becf9791cd' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_wxlog.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17986370255dbd445932fab0-20440247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'logList' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd445938d4c1_63544508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd445938d4c1_63544508')) {function content_5dbd445938d4c1_63544508($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
<div class="admin_new_tip_list">微信红包记录功能主要记录网站发给用户的红包记录，记录上有用户名、金额、发送时间、状态等参数。</div>
</div>
</div>
<div class="clear"></div>
<input type="hidden" name="m" value="admin_company">
<input type="hidden" name="status" value="">
<input type="hidden" name="rec" value="">
<input type="hidden" name="time" value="">
<input type="hidden" name="rating" value="">
  <div class="admin_new_search_box">
    <form action="index.php" name="myform" method="get">
      
        <input name="m" value="wx" type="hidden"/>
        <input name="c" value="wxlog" type="hidden"/>
		<input type="hidden" name="type" value="<?php echo $_GET['type'];?>
"/>
		<input type="hidden" name="usertype" value="<?php echo $_GET['usertype'];?>
"/>
		<input type="hidden" name="time" value="<?php echo $_GET['time'];?>
"/>
     
      <div class="admin_new_search_name">搜索类型：</div>
      <div class="admin_Filter_text formselect" did="dwx_type"> 
	  <input type="button" <?php if ($_GET['wtype']=='1'||$_GET['wtype']=='') {?> value="微信昵称" <?php } elseif ($_GET['wtype']=='2') {?> value="已绑定用户" <?php }?> class="admin_Filter_but" id="bwx_type">
	  		   <input type="hidden" name="wtype" id="wx_type" value="<?php if ($_GET['wtype']) {
echo $_GET['wtype'];
} else { ?>1<?php }?>"/>
	  		   <div class="admin_Filter_text_box" style="display:none" id="dwx_type">
				  <ul>
					  <li><a href="javascript:void(0)" onClick="formselect('1','wx_type','微信昵称')">微信昵称</a></li>
					  <li><a href="javascript:void(0)" onClick="formselect('2','wx_type','已绑定用户')">已绑定用户</a></li>	
				  </ul>  
			  </div>
	    </div>	
        <input class="admin_Filter_search" type="text" name="keyword"  size="25" />
        <input class="admin_Filter_bth"  type="submit" name="news_search" value="检索用户"/>
   
    </form>
   </div>
  <div class="clear"></div>
  
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" id='myform' method="get">
        <input name="m" value="wx" type="hidden"/>
        <input name="c" value="dellog" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              
              <th>编号</th>
              <th align="left">微信昵称</th>
              <th align="left">红包金额</th>
              <th align="left">红包类型</th>
			  <th align="left">已绑定用户</th>
			  <th align="left">用户类型</th>
			  <th align="left">红包提示</th>
              <th align="left">发放时间</th>
			  <th align="left">发放状态</th>
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['logList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr align="center">
            
            <td align="left" class="td1" style="text-align:center;"><span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
			<td class="ud" align="left">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['re_nick'];?>
</td>
			<td class="ud" align="left">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['total_amount'];?>
</td>
             <td class="ud" align="left">&nbsp;<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?>关注微信公众号<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?>绑定微信账户<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==3) {?>创建首份简历<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==4) {?>企业完善资料<?php }?></td>
            <td class="ud" align="left">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
			<td class="ud" align="left">&nbsp;<?php if ($_smarty_tpl->tpl_vars['v']->value['usertype']==1) {?>个人<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['usertype']==2) {?>企业<?php }?></td>
			<td class="ud" align="left">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['msg'];?>
</td>
            <td class="ud" align="left">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],"%Y-%m-%d %H:%M:%S");?>
</td>
            <td align="left"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><font color='green'>成功</font><?php } else { ?><font color='red'>失败</font><?php }?></td>
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
				<td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
			</tr>
		<?php }?>
            </tbody>
        </table>
		<input type="hidden" name="pytoken"  id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
