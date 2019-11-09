<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:12:52
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/info.htm" */ ?>
<?php /*%%SmartyHeaderCode:5481526155dc52384508aa0-91762714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ce19dc468a24544771234636841c0c22bc19f3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/info.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5481526155dc52384508aa0-91762714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'config' => 0,
    'lietou_style' => 0,
    'row' => 0,
    'user' => 0,
    'city_index' => 0,
    'v' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'ltdata' => 0,
    'ltclass_name' => 0,
    'hy' => 0,
    'lthy_name' => 0,
    'job' => 0,
    'ltjob_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc5238459a0d2_29421967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc5238459a0d2_29421967')) {function content_5dc5238459a0d2_29421967($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/class.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/newclass.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/ltindustry.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/ltjob.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/newclass.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/jobadd.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/pop_up.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript">

		function get_def_email(email,type){
			var postemail=email.split("@");
			var configemail = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_def_email'];?>
";
			var def_email=configemail.split("|");
			var emails=[];
			if($.trim(postemail[1])!=""){
				$.each(def_email,function(index,data){ 
					if(data.indexOf(postemail[1])>-1){
						emails.push(data);
					};
				});
			}else{
				emails=def_email;
			}
			var html='';
			$.each(emails,function(index,data){ 
				if(index==0){
					$class=" reg_email_box_list_hover";
				}else{
					$class="";
				}
				html+='<div class="reg_email_box_list'+$class+' email'+index+'" aid="'+type+'" onclick="click_email('+index+','+type+');" onmousemove="hover_email('+index+');"><span class="eg_email_box_list_left">'+postemail[0]+'</span>'+data+'</div>';
			})
			$(".reg_email_box").html(html);
			$(".reg_email_box").show();
		}
		function hover_email(id){
			$(".reg_email_box_list_hover").removeClass("reg_email_box_list_hover");
			$(".email"+id).addClass("reg_email_box_list_hover");
			$("#default").val(id);
		}
		function click_email(id,type){
			var email=$(".email"+id).html();
			email=email.replace('<span class="eg_email_box_list_left">','');
			email=email.replace('</span>','');
			email=email.replace('<SPAN class=eg_email_box_list_left>','');
			email=email.replace('</SPAN>','');
			var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(myreg.test(email)){
				$("#email").val(email);
			}else{
				$("#email").val('');
			}
			$("#email"+type).val(email);
			$(".reg_email_box").hide();
			blurinfotype("email");
		}
	<?php echo '</script'; ?>
>

	<style type="text/css">
		.reg_email_box_list{width:100%;height:27px; line-height:27px; font-size:14px;color:#666; text-indent:5px;}
		.reg_email_box_list_hover{ background:#F1FBFF; cursor:pointer}
		.reg_email_box_list .eg_email_box_list_left{color:#C00;}
		.reg_email_box{ position:absolute;width:222px;border:1px solid #D0D0D0; max-height:180px; _height:expression(this.scrollHeight > 160 ? "160px" : "auto"); overflow:auto; overflow-x:hidden;background:#FFF; margin-left:150px; margin-top:33px;}
	</style>
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="m_content">
		<div class="wrap">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<div class="m_inner_youb fl">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
				<form class="layui-form" action="index.php?c=info&act=save" target="supportiframe" method="post" onSubmit="return CheckPost_info();" name="MyForm">
			
					<div class="yun_lt_infobox">
						<div class="yun_lt_infotop">
							<div class="m_inner_name">
								<div class="m_name_left fl"><em>*</em>姓名</div>
								<div class="m_name_right fl">
									<input type="text" class="m_inner_username_text fl" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
" name="realname" id="realname" onclick="oninfotype('realname');" onblur="blurinfotype('realname')" date="请填写真实姓名">
									<span id="by_realname"></span>
								</div>
								<div class="clear"></div>
							</div> 
							
							<div class="m_inner_name">
								<div class="m_name_left fl">头像</div>
								<div class="m_name_right fl">
									<img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo_big'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);"/>
									<div class="m_name_right_pic">	
										<button type="button" class="yun_bth_pic adminupload" lay-data="{imgid: 'logo',path: 'lietou'}">上传头像</button>
										<input type="hidden" id="layupload_type" value="2"/>
										<input type="hidden" id="upload_path" value="lietou"/>
									</div>
								</div>
							</div>     
						</div>

						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>所在公司</div>
							<div class="m_name_right reg_re fl">
								<input type="text" class="m_username_text fl" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['com_name'];?>
" name="com_name" id="com_name" onclick="oninfotype('com_name');" onblur="blurinfotype('com_name')" date="请填写所在公司">
								<span id="by_com_name"></span> 
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>公司座机</div>
							<div class="m_name_right fl">
								<input type="text" class="m_username_text fl" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
" name="phone" id="phone" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" onclick="oninfotype('phone');" onblur="blurinfotype('phone')" date="请正确填写公司座机">（如： 025 - 3526485） 
								<span id="by_phone"></span> 
							</div>
							<div class="clear"></div>
						</div>

						<div class="m_inner_name">
							<div class="m_name_left fl">联系邮箱</div>
							<div class="m_name_right fl">
								<?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>
									<span class="info_email_ok"><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</span>
									<a href="index.php?c=binding" style="color:#1178c3;padding-left:10px;">重新认证</a>
									<input type="hidden" id="email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
">
								<?php } else { ?>
									<input type="text" class="m_username_text fl" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
" name="email" id="email" date="请正确填写联系邮箱" onkeyup="get_def_email(this.value,'1');">
									<span id="by_email"></span>
								<?php }?>
							</div>
							<div class="reg_email_box" id="defemail1" style=" display:none;z-index:200;"></div>
							<div class="clear"></div>
						</div>

						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>手机号码</div>
							<div class="m_name_right fl">
								<?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>
									<span class="info_sj_ok"><?php echo $_smarty_tpl->tpl_vars['row']->value['moblie'];?>
</span> <a href="index.php?c=binding" style="color:#1178c3;padding-left:10px; float:left; display:inline-block">重新认证</a>
									<input type="hidden" id="moblie" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['moblie'];?>
">
								<?php } else { ?>
									<input type="text" class="m_username_text fl" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['moblie'];?>
" name="moblie" id="moblie" onclick="oninfotype('moblie');" onblur="blurinfotype('moblie')" date="请正确填写手机号码" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
									<span id="by_moblie"></span>
								<?php }?>
							</div>
							<div class="clear"></div>
						</div>

						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>目前所在地</div>
							<div class="m_name_right fl">
								<div style="width:100px; float:left; margin-right:10px;">
									<div class="layui-input-inline">
										<select name="provinceid" id="provinceid" lay-filter="citys">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>	
								<div style="width:100px; float:left; margin-right:10px;">
									<div class="layui-input-inline">
										<select name="cityid"  id="cityid" lay-filter="citys_t"  date="请选择所在地">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div style="width:100px; float:left; margin-right:10px;" <?php if (!$_smarty_tpl->tpl_vars['row']->value['three_cityid']) {?>class="none"<?php }?> id="cityshow">
									<div class="layui-input-inline ">
										<select name="three_cityid"  id="three_cityid" lay-filter="three_cityid">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<span id="by_cityid" ></span>
							</div>
							<div class="clear"></div>
						</div>
			
						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>工作经验</div>
							<div class="m_name_right fl">
								<div class="layui-input-inline fl" onblur="blurinfotype('exp')">
									<select name="exp" id="exp" lay-filter="exp"  date="请选择工作经验">
										<option value="">请选择</option>
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ltdata']->value['lt_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ltclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										<?php } ?>
									</select>
								</div>
								<span id="by_exp"></span>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>目前头衔</div>
							<div class="m_name_right fl">
								<div class="layui-input-inline fl" onblur="blurinfotype('title')">
									<select name="title" id="title" lay-filter="title"  date="请选择目前头衔">
										<option value="">请选择</option>
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ltdata']->value['lt_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['title']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ltclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										<?php } ?>
									</select>
								</div>
								<span id="by_title"></span>
							</div>
							<div class="clear"></div>
						</div>

						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>擅长行业</div>
							<div class="m_name_right fl">
								<div id="qw_hy">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
 										<span class="m_name_fw" id="lthy<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><em><?php echo $_smarty_tpl->tpl_vars['lthy_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</em>
											<input type="button" class="m_fw_submit" onclick="del_type2('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
');"/>
											<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" name="qw_hy[]" />
										</span> 
 									<?php } ?>
								</div>
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['hy'];?>
" name="hyids" id="hyids" />
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['hyname'];?>
" name="hynames" id="hynames" />
								<a href="javascript:void(0);" onclick="index_industry_new(5, '#hynames', '#hyids', '', '<?php echo $_smarty_tpl->tpl_vars['row']->value['hy'];?>
', input_check_show2);" class="m_name_tj m_name_tj01">重选行业</a>
								<span id="by_hy"></span>
							</div>
							<div class="clear"></div>
						</div>

						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>擅长职位</div>
							<div class="m_name_right fl"> 
								<div id="job">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
										<span class="m_name_fw" id="sk<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">
											<em><?php echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</em>
											<input type="button" class="m_fw_submit" onclick="del_type('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
');"/>
											<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" name="job[]" />
										</span>
									<?php } ?>
								</div>
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['job'];?>
" name="jobids" id="jobids" />
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['jobname'];?>
" name="jobnames" id="jobnames" />
								<a href="javascript:void(0);" onclick="index_ltjob_new(5, '#jobnames', '#jobids', '', '<?php echo $_smarty_tpl->tpl_vars['row']->value['job'];?>
', input_check_show);" class="m_name_tj m_name_tj01">添加职位</a>
								<span id="by_job"></span>
							</div>
							<div class="clear"></div>
						</div>

						<div class="m_inner_name">
							<div class="m_name_left fl"><em>*</em>顾问介绍</div>
							<div class="m_name_right fl">
								<textarea class="m_name_textarea" name="content" id="content" onclick="oninfotype('content');" onblur="blurinfotype('content')" date="请填写顾问介绍"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea>
								<span id="by_content"></span>
							</div>
							<div class="clear"></div>
						</div>
						<div class="m_inner_name">
							<div class="m_name_left fl">合作过的用户</div>
							<div class="m_name_right fl">
								<textarea class="m_name_textarea" name="client"><?php echo $_smarty_tpl->tpl_vars['row']->value['client'];?>
</textarea>
								<div class="m_d_mz">多个客户以（,半角逗号）隔开</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="m_inner_name">
							<div class="m_inner_bc">
								<input type="submit" name="submit" class="layui-btn layui-btn-normal " value="保　存">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
 
<input type="hidden" id="jobaddtype" value="ltinfo" />
<?php echo '<script'; ?>
 type="text/javascript">
	layui.use(['form'], function(){
		var $ = layui.$,
			form = layui.form;
		form.on('select(citys)', function(data){
			var html = "<option value=''>请选择</option>";
			if(data.value){
				$.each(ct[data.value], function(k, v){
					html += "<option value='" + v + "'>" + cn[v] + "</option>";
				});
			}

			if(data.elem.name=='provinceid'){
				$("#cityid").html(html);
				$("#three_cityid").html("<option value=''>请选择</option>");
				blurinfotype("provinceid");
			}
			form.render('select');   
		});

		form.on('select(citys_t)', function(data){
			var htmlt = "<option value=''>请选择</option>";
			if(data.value){
				blurinfotype("cityid");

 				$.each(ct[data.value], function(k, v){
					htmlt += "<option value='" + v + "'>" + cn[v] + "</option>";
				});

				$("#cityshow").show();
			}
			if(data.elem.name=='cityid'){
				$("#three_cityid").html(htmlt);
			}
			form.render('select');   
		});
	});
<?php echo '</script'; ?>
>
<style>
	.reg_email_box{width:201px;margin-left:145px;}
</style>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
