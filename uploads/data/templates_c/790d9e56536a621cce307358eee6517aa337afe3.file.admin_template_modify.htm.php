<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:54:22
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_template_modify.htm" */ ?>
<?php /*%%SmartyHeaderCode:13895971505dbd443ebaa5a4-30935707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '790d9e56536a621cce307358eee6517aa337afe3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_template_modify.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13895971505dbd443ebaa5a4-30935707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'tp_info' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd443ec01aa4_30900787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd443ec01aa4_30900787')) {function content_5dbd443ec01aa4_30900787($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="images/codecss/codemirror.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
">
<link rel="stylesheet" href="images/codecss/paraiso-dark.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
">
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
 src="js/codejs/codemirror.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/codejs/javascript.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/codejs/active-line.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/codejs/matchbrackets.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
<div class="admin_new_tip_list">可以通过后台自带即可编辑器自由修改。它是管控网站所有模板目录。在修改前记得要备份模板。在修改出错时可以替换！不影响网站正常显示！</div>
    
</div>
</div>

  <div class="infoboxp_top mt10">
    <h6>修改模板</h6>
  </div>
 

<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" action="index.php?m=admin_tpl&c=savetpl"  target="supportiframe" id="formstatus" method="post">
	<div class="table-list">
    <div class="admin_table_border" style="width:100%; overflow:hidden">
    <table class="table_form table_form_bg" style="border:none;width:100%">
		<tr >
			
			<td><span style=" display:inline-block">文件名：</span><?php echo $_smarty_tpl->tpl_vars['tp_info']->value['name'];?>
<input readonly type="hidden" class="input-text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['tp_info']->value['name'];?>
"><span style="width:120px; margin-left:50px; display:inline-block; text-align:right;">所在路径：</span><?php echo $_smarty_tpl->tpl_vars['tp_info']->value['path'];?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tp_info']->value['path'];?>
" name="tp_path"></td>
           </tr>
 
        <tr>
			<td>
			<div style="background-color:#f7f7f8;padding:0 10px;height: 30px;line-height: 30px;border-top: 1px solid #ddd;border-left: 1px solid #ddd;border-right: 1px solid #ddd;width:1131px;">code</div>
 			<textarea  id="code" name="code" cols="200" rows="38"><?php echo $_smarty_tpl->tpl_vars['tp_info']->value['content'];?>
</textarea></td>
		</tr>
		<tr>
			<td >
            <div style="width:500px; text-align:right">
            <input class="admin_button" type="submit" name="submit" value="&nbsp;提  交&nbsp;"  />
     		<input class="admin_button" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
            <input type="hidden" name="safekey" value="<?php echo $_smarty_tpl->tpl_vars['tp_info']->value['safekey'];?>
" >
            <input  type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['tp_info']->value['dir'];?>
"  />
        	</div>
			</td>
		</tr>
	</table> 
	<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    </div> </div>
</form>

</div>
<style type="text/css">
    .CodeMirror{border:1px solid #ddd;font-size:13px;width:1150px;height:400px;}
    .CodeMirror-code pre{padding:4px 5px;color:#333;font-family:Courier New;}
    .CodeMirror-gutter{width:40px;}
</style>
<?php echo '<script'; ?>
>
  var editor = CodeMirror.fromTextArea(document.getElementById("code"),{
	  lineNumbers: true,
	  styleActiveLine: true,
	  matchBrackets: true
	  });
 // editor.setOption("theme", "paraiso-dark");
 editor.setOption("theme", "neat");
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
