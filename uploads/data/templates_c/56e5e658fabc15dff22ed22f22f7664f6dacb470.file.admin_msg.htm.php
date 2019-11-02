<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:56:02
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_msg.htm" */ ?>
<?php /*%%SmartyHeaderCode:12607730285dbd44a2c57ba4-35512375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e5e658fabc15dff22ed22f22f7664f6dacb470' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_msg.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12607730285dbd44a2c57ba4-35512375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'get_type' => 0,
    'mes_list' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd44a2cc5b91_85082571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd44a2cc5b91_85082571')) {function content_5dbd44a2cc5b91_85082571($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">

<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站所有的求职咨询信息，可对求职咨询进行审核删除操作。</div>
<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
<form action="index.php" name="myform" method="get">
    <input name="m" value="admin_msg" type="hidden"/> 
     <div class="admin_new_search_name">检索类型：</div>
     <div class="admin_Filter_text formselect" did='dtype'>
          <input type="button" <?php if ($_smarty_tpl->tpl_vars['get_type']->value['type']=='1'||$_smarty_tpl->tpl_vars['get_type']->value['type']=='') {?> value="咨询人" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['type']=='2') {?> value="咨询职位" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['type']=='3') {?> value="咨询公司" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['type']=='4') {?> value="咨询内容" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['type']=='5') {?> value="回复内容"<?php }?> class="admin_Filter_but" id="btype">
          <input type="hidden" name="type" id="type" value="<?php if ($_smarty_tpl->tpl_vars['get_type']->value['type']) {
echo $_smarty_tpl->tpl_vars['get_type']->value['type'];
} else { ?>1<?php }?>"/>
          <div class="admin_Filter_text_box" style="display:none" id="dtype">
            <ul> 
              <li><a href="javascript:void(0)" onClick="formselect('1','type','咨询人')">咨询人</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('2','type','咨询职位')">咨询职位</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('3','type','咨询公司')">咨询公司</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('4','type','咨询内容')">咨询内容</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('5','type','回复内容')">回复内容</a></li>
            </ul>
          </div>
        </div>
     
	 <input type="text" placeholder="输入你要搜索的关键字" value="<?php echo $_GET['keyword'];?>
" name='keyword' class="admin_new_text">
        <input type="submit" name='search' value="搜索" class="admin_new_bth">
	<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a></form>


  
  <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
<div class="clear"></div> 



  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" id='myform' method="get" target="supportiframe">
        <input name="m" value="admin_msg" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
              <th>
			  <?php if ($_GET['order']=="asc") {?>
			  <a href="index.php?m=admin_msg&order=desc">编号<img src="images/sanj.jpg"/></a>
              <?php } else { ?>
              <a href="index.php?m=admin_msg&order=asc">编号<img src="images/sanj2.jpg"/></a>
              <?php }?>
			  </th>
              <th align="left" style="width:200px;">咨询内容</th>
              <th align="left" style="width:200px;">回复内容</th>
              <th align="left">咨询人</th>
              <th align="left" style="width:200px;">职位/公司</th>
			  <th align="left">咨询时间</th>
			  <th align="left">回复时间</th>
              <th align="center" class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mes_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td> 
            <td align="left"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['content'],0,20,"utf-8");?>
</td>  
            <td align="left"><?php if (mb_substr($_smarty_tpl->tpl_vars['v']->value['reply'],0,20,"utf-8")) {
echo mb_substr($_smarty_tpl->tpl_vars['v']->value['reply'],0,20,"utf-8");
} else { ?>未回复内容<?php }?></td>  
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
            <td align="left"> <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?> <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$v.jobid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"> <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?> <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobcomshow','id'=>'`$v.jobid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"> <?php } else { ?> <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobshow','id'=>'`$v.jobid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"> <?php }?>
              <?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['job_name'],0,20,'utf-8');?>
</a><div class="mt5"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</div></td>
			 <td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],"%Y-%m-%d");?>
</td>
			  <td align="left"><?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reply_time'],"%Y-%m-%d")) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reply_time'],"%Y-%m-%d");
} else { ?>未回复<?php }?></td>
           
            <td><span onClick="showdiv4('houtai_div','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=admin_msg&c=msgshow')" class="admin_new_c_bth admin_new_c_bth_yl" style="cursor:pointer;"> 预览</span> <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_msg&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
        
          </tr>
         
          <?php } ?>
          <tr>
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="9" >
            <label for="chkAll2">全选</label>&nbsp;
            <input  class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
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
		<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>
<div id="houtai_div" style=" display:none;height:180px; ">
	<form id="formstatus" method="post" target="supportiframe" action="index.php?m=admin_company_job&c=status">
	  <table class="table_form "  id="infobox"> 
			<tr><td>评论内容：</td><td><textarea name="beizhu"  style="width:300px;height:80px;border:1px solid #ddd;"id="beizhu"  class="text" readonly></textarea ></td></tr>
			<tr><td>回复内容：</td><td><textarea name="reply" id="reply" style="width:300px;height:80px;border:1px solid #ddd;"  class="text" readonly></textarea></td></tr> 
	  </table>
	  <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
	 </form>
</div>  
</body>
</html><?php }} ?>
