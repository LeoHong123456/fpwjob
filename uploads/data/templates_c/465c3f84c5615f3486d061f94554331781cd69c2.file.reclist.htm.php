<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 16:11:13
         compiled from "/www/fpwjob/uploads//app/template/train/reclist.htm" */ ?>
<?php /*%%SmartyHeaderCode:20126078165e2feca1045298-87134721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '465c3f84c5615f3486d061f94554331781cd69c2' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/train/reclist.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20126078165e2feca1045298-87134721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reclist' => 0,
    'v' => 0,
    'config' => 0,
    'uid' => 0,
    'zixun' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2feca1085ef5_12172172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2feca1085ef5_12172172')) {function content_5e2feca1085ef5_12172172($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><div class="Courses_right ftr mt10">
<div class="Courses_right_tj ftl">
  <div class="training_tit ftl"><span class="training_span ftl">推荐课程</span></div>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reclist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<dl class="Courses_right_tj_list ftl">
	<dt><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
">
     <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="60" height="60" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);">
    </a></dt>
	<dd><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" class="Courses_right_tj_list_name"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,20,'utf-8');?>
</a>
	<span class="Courses_right_tj_list_price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span></dd>
	</dl>
	<?php } ?>
</div>
<div class="Courses_right_tj ftl mt10">
<div class="training_tit ftl"><span class="training_span ftl">咨询留言</span>
<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
<a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'zixun','id'=>'`$row.uid`'),$_smarty_tpl);?>
" class="Courses_right_tj_a">我要留言</a>
<?php } else { ?>
<a href="javascript:void(0)" onclick="showlogin('1');" class="Courses_right_tj_a">我要留言</a>
<?php }?> 
</div>
<?php if ($_smarty_tpl->tpl_vars['zixun']->value) {?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zixun']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="Courses_right_Advisory ftl  mt10">
<div class="Courses_right_Advisory_photo ftl"><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$v.uid`'),$_smarty_tpl);?>
"><img src=".<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="28" height="28" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);"></a></div>
<div class="Courses_right_Advisory_r ftl">
<div class="Courses_right_Advisory_r_name"><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$v.uid`'),$_smarty_tpl);?>
" class="Courses_right_Advisory_r_name_a" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%m月%d日");?>
</div>
</div>
<div class="Courses_right_Advisory_box ftl"><i class="Courses_right_Advisory_box_icon"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
</div>
<?php } ?>
<div class="Courses_right_Advisory_more ftl mt10"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'zixun','id'=>'`$row.uid`'),$_smarty_tpl);?>
">查看更多</a></div>
<?php } else { ?>
<div class="t_msg_no">该机构还没有留言!</div>
<?php }?>
</div>
</div>
<?php echo '<script'; ?>
>
function showImgDelay(imgObj,imgSrc,maxErrorNum){   
	if(maxErrorNum>0){ 
        imgObj.onerror=function(){
            showImgDelay(imgObj,imgSrc,maxErrorNum-1);
        };
		
        setTimeout(function(){
            imgObj.src=imgSrc;
        },500);
		maxErrorNum=parseInt(maxErrorNum)-parseInt(1);
    }
}
<?php echo '</script'; ?>
><?php }} ?>
