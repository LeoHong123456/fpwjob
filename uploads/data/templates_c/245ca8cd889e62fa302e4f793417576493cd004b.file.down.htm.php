<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:56:01
         compiled from "/www/fpwjob/uploads/app/template/admin/down.htm" */ ?>
<?php /*%%SmartyHeaderCode:1808428535dbd44a1a80701-51694684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '245ca8cd889e62fa302e4f793417576493cd004b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/down.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808428535dbd44a1a80701-51694684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'ccname' => 0,
    'list' => 0,
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
  'unifunc' => 'content_5dbd44a1b298a8_09856332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd44a1b298a8_09856332')) {function content_5dbd44a1b298a8_09856332($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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

<body class="body_ifm">
<div class="infoboxp">

	<div class="tabs_info">
		<ul>
			<li <?php if ($_GET['c']=='') {?>class="curr"<?php }?>>
				<a href="index.php?m=admin_userlog&comid=<?php echo $_GET['comid'];?>
">简历下载记录</a>
			</li>
			<li <?php if ($_GET['c']=="trust") {?>class="curr"<?php }?>>
				<a href="index.php?m=admin_userlog&c=trust&comid=<?php echo $_GET['comid'];?>
">简历推送记录</a>
			</li>
			<li <?php if ($_GET['c']=="lookresume") {?>class="curr"<?php }?>>
				<a href="index.php?m=admin_userlog&c=lookresume&comid=<?php echo $_GET['comid'];?>
">简历浏览记录</a>
			</li>
		</ul>
	</div>
	
	<div class="admin_new_tip">
		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		<div class="admin_new_tip_list_cont">
			<?php if ($_GET['comid']!='') {?>
				<div class="admin_new_tip_list">该页面展示了网站企业用户：<font color="#f00">【<?php echo $_smarty_tpl->tpl_vars['ccname']->value;?>
】</font> 的下载简历记录信息，可对记录进行删除操作。</div>
			<?php } else { ?>
				<div class="admin_new_tip_list">该页面展示了网站所有的简历下载信息，可对记录进行删除操作。</div>
			<?php }?>
 			<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
		</div>
	</div>

	<div class="clear"></div>

	<div class="admin_new_search_box"> 
		<form action="index.php" name="myform" method="get">
			<input name="m" value="admin_userlog" type="hidden"/>
			<input name="comid" value="<?php echo $_GET['comid'];?>
" type="hidden"/>
			<div class="admin_new_search_name">搜索类型：</div>
			
			<div class="admin_Filter_text formselect"  did='dtype'>
				<input type="button" value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>企业用户名<?php } elseif ($_GET['type']=='2') {?>公司名称<?php } elseif ($_GET['type']=='3') {?>个人用户名<?php } else { ?>简历名称<?php }?>" class="admin_Filter_but"  id="btype">
				<input type="hidden" id='type' value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>" name='type'>
				<div class="admin_Filter_text_box" style="display:none" id='dtype'>
					<ul>
						<li><a href="javascript:void(0)" onClick="formselect('1','type','企业用户名')">企业用户名</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('2','type','公司名称')">公司名称</a></li> 
						<li><a href="javascript:void(0)" onClick="formselect('3','type','个人用户名')">个人用户名</a></li> 
						<li><a href="javascript:void(0)" onClick="formselect('4','type','简历名称')">简历名称</a></li> 
					</ul>  
				</div>
			</div> 		 
  
			<input class="admin_new_text" type="text" name="keyword" value="<?php echo $_GET['keyword'];?>
" size="25"/>
			<input class="admin_new_bth" type="submit" name="search" value="检索"/>
			<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a>

		</form>
		<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	
	<div class="clear"></div> 


  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" id="myform" method="get" target="supportiframe">
        <input name="m" value="admin_userlog" type="hidden"/>
        <input name="c" value="deldown" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th>
			  <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
			  <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_userlog','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a>
              <?php } else { ?>
              <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_userlog','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a>
              <?php }?>
			  </th>
              <th align="left">企业/猎头用户名</th>
              <th align="left">公司/猎头名称</th>
              <th align="left">个人用户名</th>
              <th align="left">简历名称</th>
              <th>
			   <?php if ($_GET['t']=="downtime"&&$_GET['order']=="asc") {?>
			  <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'downtime','m'=>'admin_userlog','untype'=>'order,t'),$_smarty_tpl);?>
">下载时间<img src="images/sanj.jpg"/></a>
              <?php } else { ?>
              <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'downtime','m'=>'admin_userlog','untype'=>'order,t'),$_smarty_tpl);?>
">下载时间<img src="images/sanj2.jpg"/></a>
              <?php }?>
			  </th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            <?php if ($_smarty_tpl->tpl_vars['v']->value['usertype']==3) {?>
            <td align="left"><a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'headhunter','uid'=>'`$v.comid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_username'];?>
</a></td>
            <td align="left"><a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'headhunter','uid'=>'`$v.comid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</a></td>
            <?php } else { ?>
            <td align="left"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$v.comid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_username'];?>
</a></td>
            <td align="left"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$v.comid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</a></td>
            <?php }?>
            <td align="left"><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></td>
            <td align="left"><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
</a></td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['downtime'],"%Y-%m-%d");?>
</td>
            <td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_userlog&c=deldown&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
          </tr>
          <?php } ?>
          <tr>
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="7" >
            <label for="chkAll2">全选</label>&nbsp;
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
								<td colspan="5" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
							</tr>
						<?php }?>
            </tbody>
        </table>
		<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
