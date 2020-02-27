<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-20 17:51:44
         compiled from "/www/fpwjob/uploads/app/template/default/tiny/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:692960675e4e56b0e302f0-46393511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03331af8892e87f01b1fb297360a89fb55b2cb10' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/tiny/add.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '692960675e4e56b0e302f0-46393511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'title' => 0,
    'info' => 0,
    'arr_data' => 0,
    'j' => 0,
    'v' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4e56b0e73e95_92696272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4e56b0e73e95_92696272')) {function content_5e4e56b0e73e95_92696272($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/microresume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body class="once_bg">

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="yun_content">
		<div class="current_Location png"> 您当前的位置：
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> >
			<a href="<?php echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);?>
">普工专区</a> > 发布简历
		</div>
    
    <form  method="post" action="<?php echo smarty_function_url(array('m'=>'tiny'),$_smarty_tpl);?>
" onSubmit="return check_resume_tiny()" target="supportiframe" class="layui-form">
      <div class="once_add_box">
    <div class="once_title">快速发布求职信息</div>
      <div class="once_add_cont">
            <div class="once_title_p"><i class="once_title_p_icon once_title_p_icon_zw"></i>个人信息</div>
      <div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>姓名：</span>
         <div class="once_add_list_text">	 <input  type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
" name="username" id="username" class="once_add_list_input"/>
        </div></div>
        
        <div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>性别：</span> 
         <div class="once_add_list_text" style="position:relative"> 
           <input type="hidden" id="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sex'];?>
" />
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
             <span class="yun_info_sex <?php if ($_smarty_tpl->tpl_vars['info']->value['sex']==$_smarty_tpl->tpl_vars['j']->value) {?>yun_info_sex_cur<?php }?>" id="sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" onclick="checksex('<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
')"><i class="usericon_sex usericon_sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> 
          <?php } ?>   
        </div></div>
        <div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>联系手机：</span>
         <div class="once_add_list_text">	 <input type="text" name="mobile" id="mobile" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mobile'];?>
" class="once_input_simple once_input_simple_w240" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div></div>
      <div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>工作年限：</span>
       <div class="once_add_list_text">	 <div class="tiny_exp_text" style="border:none;">
            <select id="expid" name="exp">
              <option value=''>请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <option value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['info']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
              <?php } ?>
            </select>
        </div>
        </div>
       
        </div>
       <div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>想找工作：</span>
        <div class="once_add_list_text">	  <input type="text" id="job" name="job" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['job'];?>
" class="once_add_list_input "/>
          <span class="once_fb_list_tip"> 如：服装厂操作工</span> </div>
          </div>
     <div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>自我介绍：</span> <div class="once_add_list_text">
          <textarea id="production" name="production" class="once_simplew_textarea"placeholder="请输入你擅长的技能，例如：电机熟练工，能吃苦耐劳"><?php echo $_smarty_tpl->tpl_vars['info']->value['production'];?>
</textarea>
        </div></div>
               <div class="once_title_p"><i class="once_title_p_icon once_title_p_icon_zh"></i>账户信息</div>
               
       <div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>设置密码：</span>
         <div class="once_add_list_text">	 <input type="password" name="password" id="password" value="" class="once_add_list_input"  onkeyup="this.value=this.value.replace(/^ +| +$/g,'')"/>
          <em class="once_add_list_text_dw">密码可用于刷新/修改/删除信息！</em> </div></div>
        <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"店铺招聘")!==false) {?>
			

			<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>	
		
         <div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>极速验证：</span>
           <div class="once_add_list_text">	 <div class="tiny_verification">
			<div id="popup-captcha" data-id='botton' data-type='click'></div>
			<input type='hidden' id="popup-submit">
           
            </div>
            </div></div>
			<?php } else { ?>
			
			<div class="once_add_list"><span class="once_add_list_name"><i class="once_add_list_name_bt">*</i>验证码：</span>
			 <div class="once_add_list_text">	 <input type="text" id="authcode" name="authcode" class="once_add_list_input " maxlength="6"/>
			  <a><img id="vcodeimgs" onclick="checkCode('vcodeimgs');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php"/></a> 
			</div></div>
		
			  <?php }?>
			 
		 <?php } else { ?>
			<input id="authcode" type="hidden" value="12345" maxlength="6" name="authcode"/>
        <?php }?>
		
     <div class="once_add_list"><span class="once_add_list_name">&nbsp;</span> 
       <div class="once_add_list_text">	   <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"/>
          <input class="once_add_list_bth" type="submit" value="发布信息" id="botton" name="submit" />
       </div></div>
      </div>
      </div>
    </form>
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
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/fast.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 type="text/javascript">
function checksex(id){
	$(".yun_info_sex").removeClass('yun_info_sex_cur');
	$("#sex"+id).addClass('yun_info_sex_cur');
	$("#sex").val(id); 
}
layui.use(['form'],function(){});
<?php echo '</script'; ?>
>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" class="none"></iframe>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
