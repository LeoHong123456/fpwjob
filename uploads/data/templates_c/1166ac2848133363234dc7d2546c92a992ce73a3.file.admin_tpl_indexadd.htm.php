<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:54:01
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_tpl_indexadd.htm" */ ?>
<?php /*%%SmartyHeaderCode:1798221325dbd4429c5e2c3-99187375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1166ac2848133363234dc7d2546c92a992ce73a3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_tpl_indexadd.htm',
      1 => 1572667770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798221325dbd4429c5e2c3-99187375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd4429c93ec4_87087524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd4429c93ec4_87087524')) {function content_5dbd4429c93ec4_87087524($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
<div class="admin_new_tip_list">根据节假日或重大节日设置首页主题模板，<a href="https://www.phpyun.com/bbs/forum.php?mod=forumdisplay&fid=3&filter=typeid&typeid=11" target="_blank" style="color:red;">点击下载主题模板</a>。 </div>
</div>
</div>
<div class="clear"></div>



<div class="tag_box mt10">

	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
    <form action="index.php?m=admin_tpl_index&c=save" method="post" class="layui-form" enctype="multipart/form-data" target="supportiframe">
    <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    <table width="100%" class="table_form">
    <tr>
              <td colspan="2" bgcolor="#f0f6fb"><div class="admin_bold">添加首页模板主题</div></td>
            </tr>
    	<tr class="admin_table_trbg">
            <th width="160">主题名称：</th>
            <td><input class="input-text" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" size="30" maxlength="255"/><span class="admin_web_tip">如：墨画风格</span></td>
        </tr>
        
        <tr class="admin_table_trbg">
            <th width="160">顶部高度：</th>
            <td><input class="input-text" type="text" name="height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['height'];?>
" size="30" maxlength="255"/>px <span class="admin_web_tip">提示：不设置，将有部分图片无法显示</span></td>
        </tr>
        
       <tr>
          <th width="160">灰色：</th>
          <td>
           
              <div class="layui-input-inline">
                <input lay-skin="switch" name="se" lay-filter="se" lay-text="开启|关闭"
                 <?php if ($_smarty_tpl->tpl_vars['row']->value['se']=="1") {?> checked <?php }?>
                 type="checkbox"/>
                <input type="hidden" name="se" id="se" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['se'];?>
"/>
              </div>
          
            <span class="admin_web_tip">提示：开启，网站首页变成黑白色</span>
          </td>
        </tr>
        <tr>
          <th width="160">状态：</th>
          <td height="35">
         
              <div class="layui-input-inline">
                <input lay-skin="switch" name="status_switch" lay-filter="status" lay-text="开启|关闭"
                 <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=="1") {?> checked <?php }?>
                 type="checkbox"/>
                <input type="hidden" name="status" id="status" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
"/>
             
            </div>
          </td>
        </tr>
        
        <tr>
        <th>展示时间：</th>
        <td>
       	 <div class="layui-input-inline">
        <input type="text" name="time" id="time" lay-verify="date" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
" placeholder="yyyy-MM-dd ~ yyyy-MM-dd" autocomplete="off" class="layui-input" size="30">
          </div>
            </td>
      </tr>
        
        <tr class="admin_table_trbg">
            <th width="160">主题图片：</th>
            <td>
			<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'pic',imgid: 'imgicon'}">上传图片</button>
			<input type="hidden" id="layupload_type" value="2"/>
			<input type="hidden" id="upload_path" value="tplindex"/>
			<input type="hidden" name="pic" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
"/>
			<img id="imgicon" src="../<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" width="180" height="60" <?php if (!$_smarty_tpl->tpl_vars['row']->value['pic']) {?>class="none"<?php }?>>
            </td>
        </tr>

        <tr class="admin_table_trbg">
         <th style="border-bottom:none;">&nbsp;</th>
          <td align="left" style="border-bottom:none;"> 
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" name="id">
            <input class="layui-btn layui-btn-normal" id="qqconfig" type="submit" name="msgconfig" value="提交" />&nbsp;&nbsp;
            <input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
        </tr>

    </table>
    </form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
  layui.use(['form', 'laydate'], function(){
    var form = layui.form,
	    laydate = layui.laydate
      $ = layui.$;
 	  laydate.render({
		elem: '#time',
		range:'~'
	  });
	form.on('switch(se)', function(data){
      var v = this.checked ? 1 : 0;
      $("#se").val(v);
    });
    form.on('switch(status)', function(data){
      var v = this.checked ? 1 : 0;
      $("#status").val(v);
    });
  });
  document.getElementById('onchange').onchange = function(){
      document.getElementById('onchange').click();
      document.getElementById('color').value = this.value;
  };
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
</body>
</html><?php }} ?>
