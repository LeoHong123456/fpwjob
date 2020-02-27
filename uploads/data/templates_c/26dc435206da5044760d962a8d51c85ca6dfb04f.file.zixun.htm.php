<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-29 07:51:35
         compiled from "/www/fpwjob/uploads/app/template/train/zixun.htm" */ ?>
<?php /*%%SmartyHeaderCode:6959948225e30c907e216a4-87306056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26dc435206da5044760d962a8d51c85ca6dfb04f' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/train/zixun.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6959948225e30c907e216a4-87306056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'uid' => 0,
    'rows' => 0,
    'v' => 0,
    'config' => 0,
    'pagenav' => 0,
    'reclist' => 0,
    'train_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e30c907e85381_10257883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e30c907e85381_10257883')) {function content_5e30c907e85381_10257883($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="training_content training_w980">
	<div class="training_cur ftl">
		<div class="training_cur_l ftl"><a href="<?php echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);?>
">首页</a> > 培训课程 </div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/top.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="Courses_content_box  ftl mt10">
		<div class="Courses_Table_detail ftl">
			<div class="training_tit ftl"><span class="training_span ftl">咨询</span></div>
			<div class="Consulting_sub">
				<form action="<?php echo smarty_function_url(array('m'=>'train','c'=>'zixun'),$_smarty_tpl);?>
" method="post" name="myform" target="supportiframe" id='myform' onsubmit="return checkzx()">
					<div class="Consulting_sub_l">
						<div class="Consulting_sub_left ftl "><span class="Consulting_sub_cor">*</span> 联系电话：</div>
						<input  class="messaget_kuang01 messaget_kuang01fl" type="text" name="phone" id="phone" size="30" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')">
						<span class="Consulting_sub_cor Consulting_sub_corfl">(建议填写手机号码，方便联系您！)</span>
					</div>
					<div class="Consulting_sub_l">
						<div class="Consulting_sub_left ftl "><span class="Consulting_sub_cor">*</span> 内　　容：</div>
						<textarea  class="messaget_kuang" name="content" id="content"></textarea>
					</div>

					<div class="Consulting_sub_l">
						<div class="Consulting_sub_left ftl ">&nbsp;</div>
						<input type="hidden" name="s_uid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
">
						<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
						<input  class="messaget_sub" name="submit" type="submit" value="提交">
					</div>
				</form>
			</div>
			<div class="training_tit ftl mt10" style="margin-top:30px;"><span class="training_span ftl">咨询列表</span></div>
			<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<div class="Courses_right_Advisory ftl mt10" style="margin-bottom:10px;">
						<div class="Courses_right_Advisory_photo Courses_right_Advisory_photo_r ftl"> <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$v.uid`'),$_smarty_tpl);?>
"> <img width="45" height="45" style="border:1px solid #ddd;border-radius:50px;" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);"> </a> </div>
						
						<div class="Courses_right_Advisory_r Courses_right_Advisory_rw600 ftl">
							<div class="Courses_right_Advisory_r_name ">
								<a class="course_nm" href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$v.uid`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%m月%d日");?>
 
							</div>
						</div>
						
						<div class="Courses_right_Advisory_box Courses_right_Advisory_box_690 Courses_right_Advisory_b ftl">
							<i class="Courses_right_Advisory_box_icon"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

							<?php if ($_smarty_tpl->tpl_vars['v']->value['reply']!='') {?>
								<div class="Courses_right_Advisory_hf ftl mt10">企业回复：<?php echo $_smarty_tpl->tpl_vars['v']->value['reply'];?>
</div>
							<?php }?>
						</div>
					</div>
				<?php } ?>

				<div class="clear"></div>
				<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
				 
			<?php } else { ?>
				<div class="clear"></div>
				<div class="com_msg_no"><p>没有咨询内容</p> </div>   
			<?php }?>
		</div> 
	</div>
	<div class="Courses_right ftr mt10">
		<div class="Courses_right_tj ftl">
			<div class="training_tit ftl"><span class="training_span ftl">推荐课程</span></div>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reclist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<dl class="Courses_right_tj_list ftl">
						<dt>
							<a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);" width="80" height="60">
							</a>
						</dt>
						<dd style="width:140px;">
							<a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" class="Courses_right_tj_list_name"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,20,'utf-8');?>
</a>
							<span class="Courses_right_tj_list_price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span>
						</dd>
					</dl>
				<?php } ?>
			</div>
		</div>
	</div>	
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/js/train_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";<?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.pagination li a ');
<?php echo '</script'; ?>
>
<![endif]-->
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
