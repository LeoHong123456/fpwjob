<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:51:39
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_model_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:10587918185dbd439b337397-06049347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1c0e250b42d35a9f6b85a2a26e5015d1b776dc3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_model_config.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10587918185dbd439b337397-06049347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'newModel' => 0,
    'mconfig' => 0,
    'key' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd439b36ee65_65041985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd439b36ee65_65041985')) {function content_5dbd439b36ee65_65041985($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php echo '<script'; ?>
>
function tip(id){
	layer.tips('关闭模块后请在导航设置中对相应导航作隐藏或删除处理！', '#'+id,{time:2,guide: 2,style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC']});
	$(".xubox_layer").addClass("xubox_tips_border");
}
<?php echo '</script'; ?>
>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">如果关闭模块，请对系统->导航管理里面删除或取消显示！</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>
<div class="main_tag">
<div class="tag_box">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form name="myform" target="supportiframe" action="index.php?m=model_config&c=save" method="post" class="layui-form">
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="180" bgcolor="#f0f6fb"><span class="admin_bold">模块名称</span></th>
          <td width="220" bgcolor="#f0f6fb"><span class="admin_bold">状态</span></td>
		  <td width="350" bgcolor="#f0f6fb"><span class="admin_bold">二级域名<span class="admin_web_tip">（默认HTTP，未绑定则留空）</span></span></td>
		  <td width="200" bgcolor="#f0f6fb"><span class="admin_bold">指向目录</span></td>
		  <td width="200" bgcolor="#f0f6fb"><span class="admin_bold">综合设置</span></td>
    </tr>
	<?php  $_smarty_tpl->tpl_vars['mconfig'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mconfig']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newModel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mconfig']->key => $_smarty_tpl->tpl_vars['mconfig']->value) {
$_smarty_tpl->tpl_vars['mconfig']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['mconfig']->key;
?>
	<tr class="admin_com_td_bg">
			<th width="180"><?php echo $_smarty_tpl->tpl_vars['mconfig']->value['value'];?>
：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-block">
              <input name="sy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_web" value="1" title="开启"
                <?php if ($_smarty_tpl->tpl_vars['mconfig']->value['web']=="1") {?>
                 checked 
                <?php }?>
                 type="radio"/>
              <input name="sy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_web" value="2" title="关闭"
                <?php if ($_smarty_tpl->tpl_vars['mconfig']->value['web']=="2") {?>
                 checked 
                <?php }?>
               type="radio"/>
          </div>
        </div>
			</td>
			<td>

            <div class="layui-form-item">
                  <div class="layui-input-block">
                  <div  style="float:left">
				  <input name="sy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
ssl" value="1" title="HTTPS"
                <?php if ($_smarty_tpl->tpl_vars['mconfig']->value['ssl']=="1") {?>
                 checked 
                <?php }?>
                 type="checkbox"/>
                 
                 </div>
                    <div class="layui-input-inline">
                      <input name="sy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
domain" autocomplete="off" class="layui-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mconfig']->value['domain'];?>
"
                       size="30" maxlength="255"/>
                    </div>
                  </div>
                </div>
             </td>
			<td>
            <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
dir" autocomplete="off" class="layui-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mconfig']->value['dir'];?>
"
                       size="20" maxlength="255"/>
                    </div>
                  </div>
                </div>
            </td>
			<td>
			<?php if ($_smarty_tpl->tpl_vars['key']->value!='error') {?>
			  <input type='button' value='导航设置' class='navset admin_button' data-config='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' data-name='<?php echo $_smarty_tpl->tpl_vars['mconfig']->value['value'];?>
'> 
			 <input type='button' class="seoset admin_button" value='SEO设置'  data-config='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'>
			  <?php }?>
			</td>
		</tr>
	<?php } ?>
    <input type="hidden" value="company"  name="sy_companydir">
    <tr class="admin_com_td_bg">
	    <th>&nbsp;</th>
          <td colspan="3" align="left">
		<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input class="layui-btn layui-btn-normal"  type="submit" name="config" value="保存" />&nbsp;&nbsp;
        <input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
	</tr>
</table>
</form>
</div>
</div>
</div>
<?php echo '<script'; ?>
>
layui.use(['layer', 'form'], function(){});	

$(function(){
	$('.navset').click(function(){
		var config = $(this).attr('data-config');
		var name = $(this).attr('data-name');
    layer.open({
    	type : 2  
    	,title : '设置导航'
    	,content : 'index.php?m=model_config&c=setnav&config='+config+'&name='+name
    	,skin : 'layui-layer-molv'
    	,maxmin: true  
    	,area: ['900px', '450px']
    });
	}); 

	$('.seoset').click(function(){
		var config = $(this).attr('data-config');
    layer.open({
    	type : 2  
    	,title : '设置SEO'
    	,content : 'index.php?m=model_config&c=setseo&config='+config
    	,skin : 'layui-layer-lan'
    	,maxmin: true  
    	,area: ['900px', '450px']
    	,moveOut : true
    });
	}); 
});
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
