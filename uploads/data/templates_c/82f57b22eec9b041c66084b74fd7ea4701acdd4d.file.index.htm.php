<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:10:07
         compiled from "/www/fpwjob/uploads/app/template/default/advice/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:16125962865dc522df4e1e62-24412373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82f57b22eec9b041c66084b74fd7ea4701acdd4d' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/advice/index.htm',
      1 => 1572067844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16125962865dc522df4e1e62-24412373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc522df50ac34_89585210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc522df50ac34_89585210')) {function content_5dc522df50ac34_89585210($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/yun_seach.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="all_body">

<form action="index.php?m=advice&c=savequestion" method="post" onsubmit="return addconsultant();" target="supportiframe">
    <div class="suggest_main">
        <div class="suggest_head">您的建议让我们每天变的更好</div>
        <div class="top_tips">用户您好，请将您的意见、想法、建议或投诉内容告诉我们，以帮助我们为全体用户提供更加优质的服务。我们将在第一时间及时回复您的反馈，如您的问题比较紧急，请致电服务热线 ：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
 </div>
        <div class="suggest_list_group">
            <div class="suggest_list_cell">
                <div class="list_cell_left">意见类型</div>
                <div class="list_cell_right">
                    <div class="suggest_type_cell"><div class="suggest_type" data-code="1"><input type="hidden" name="infotype" id="ctime" value="" class="suggest_type" data-code="1"/>建议</div></div>
                    <div class="suggest_type_cell"><div class="suggest_type" id="suggest_type" data-code="2">意见</div></div>
                    <div class="suggest_type_cell"><div class="suggest_type" data-code="3">求助</div></div>
                    <div class="suggest_type_cell"><div class="suggest_type" data-code="4">投诉</div></div>
                    <div class="clear"></div>
                    <input type="hidden" name="infotype" value=""  />
                </div>
                <div class="clear"></div>
            </div>
			<div class="suggest_list_cell">
                <div class="list_cell_left">联系人</div>
                <div class="list_cell_right"><input type="text" class="suggest_input" name="username" id="username" placeholder="请输入您的姓名！"/></div>
                <div class="clear"></div>
            </div>
			<input type="hidden" name="ctime" id="ctime" value=""/>
            <div class="suggest_list_cell">
                <div class="list_cell_left">联系手机</div>
                <div class="list_cell_right"><input type="text" class="suggest_input" name="telphone" id="telphone" placeholder="请输入您的手机号码以便和您沟通，您的信息仅工作人员可见！"></div>
                <div class="clear"></div>
            </div>
            <div class="suggest_list_cell">
                <div class="list_cell_left">反馈内容</div>
                <div class="list_cell_right">
                    <textarea class="suggest_area" id="content" name="content" placeholder="请详细描述您遇到的问题，有助于我们快速定位并解决问题"></textarea>
                </div>
				<div class="clear"></div>
				</div>
        <div class="list_cell_left">验证码</div>
		<div class="" style="float:left">
		<input class="list_yzm_bx" type="text" name="authcode" maxlength="6" id="txt_CheckCode" value="验证码"/>
		</div>
		<div class="list_yzm" style="float:left;left:70%;margin-left:10px;">
		<img id="vcode_imgs"src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" onclick="checkCode('vcode_imgs');" />
		</div>
		<div class="clear"></div>
            <div class="suggest_list_cell" style="margin-top:20px;">
                <div class="list_cell_left">&nbsp;</div>
                <div class="list_cell_right">
                    <input type="submit" class="btn_yellow suggest_btn" id="J_suggest_submit" value="提 交" />
                </div>
                </div>
                </div>
                </div>
				</form>
                <div class="clear"></div>
            
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" class="dn"></iframe>
<?php echo '<script'; ?>
 language="javascript">  
function addconsultant(){
	var infotype=$.trim($('input[name="infotype"]').val());
	var username=$.trim($("#username").val());
	var telphone=$.trim($("#telphone").val());
	var content=$.trim($("#content").val());
	var authcode="";
	var unlock="";
	var reg= /^\d{5,15}$/;
	if(infotype==''){layer.msg("请选择意见类型",2,8);return false;}
	if(username==''){layer.msg("联系人不能为空！",2,8);return false;}
	if(telphone==''){
		layer.msg("手机号码不能为空！",2,8);return false;
	}else if(!reg.test(telphone)){
		layer.msg("手机号码格式错误！",2,8);return false;
	}
	if(content==''){layer.msg("反馈内容不能为空！",2,8);return false;}
	if(code_kind==1){
		authcode=$("#txt_CheckCode").val();
		if(authcode==""||authcode=="验证码"){
			layer.msg("验证码不能为空！",2,8);return false;
		}
	}
} 
$(document).ready(function(){
	$("#username,#telphone,#content,#txt_CheckCode").focus(function(){
		var txValue = $(this).val();
		if( txValue == this.defaultValue){$(this).val("");}
	
	});
	
    $('.suggest_type').click(function(event) {
        $('.suggest_type').each(function(index, el) {
            $(this).removeClass('selected');
        });
        $(this).addClass('selected');
        $('input[name="infotype"]').val($(this).data('code'));
		

    });
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
