<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 16:11:12
         compiled from "/www/fpwjob/uploads/app/template/train/agency_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:14475691055e2feca0e8eb75-79486784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8e14052d26f514023cda29ecc1b7ba956e41847' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/train/agency_show.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14475691055e2feca0e8eb75-79486784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'show' => 0,
    'config' => 0,
    'v' => 0,
    'sublist' => 0,
    'subject_name' => 0,
    'city_name' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2feca0ef3fc9_40568795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2feca0ef3fc9_40568795')) {function content_5e2feca0ef3fc9_40568795($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="training_content training_w980">
  <div class="training_cur ftl">
    <div class="training_cur_l ftl"><a href="<?php echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);?>
">首页</a> > 机构首页 </div>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/top.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="Courses_content_box  ftl">
    <div class="Courses_Table_detail ftl mt10">
      <div class="training_tit"><span class="training_span ftl">机构简介</span></div>
      <div class="Agency_Int_p">
      <?php if (mb_strlen($_smarty_tpl->tpl_vars['row']->value['content'],'utf-8')>600) {
echo $_smarty_tpl->tpl_vars['row']->value['shortcontent'];?>
...
      <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'intro','id'=>'`$row.uid`'),$_smarty_tpl);?>
" class="Agency_Int_p_a">查看详情</a>
      <?php } else {
echo $_smarty_tpl->tpl_vars['row']->value['content'];
}?> 
     </div>
    </div>
	
	<div class="Courses_Table_detail  ftl mt10">
		<div class="training_tit"><span class="training_span ftl">机构环境</span></div>
		<div class="company_box_pic">
			<ul id="rolling_img1">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<li style="margin-left:10px;">
						<a href="javascript:void(0);">
						<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" lay-src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"></a><br>
						<?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,13,'utf-8');?>

					</li>
				<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                    <div class="com_msg_no">
                 <p>暂未上传机构环境的图片</p>
            
            </div>
				<?php } ?>
			</ul>
		</div>
	</div>

    <div class="Courses_Table_detail  ftl mt10">
      <div class="training_tit"><span class="training_span ftl">培训课程</span></div>
	 
      <div class="train_class">
           <ul> 
		    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sublist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
               <li>
                   <div class="train_class_img"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
"><img style="width:150px;height:90px;" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"/></a></div>
                   <div class="train_class_tit"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,15,'utf-8');?>
</a></div>
                   <div class="train_class_lb">课程类别：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value['tnid']];?>
</div>
                   <div class="train_class_m"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d");?>
发布</div>
                   <div class="train_class_city"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['cityid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['threecityid']];?>
</div>
                   <div class="train_class_dw">
                   <div class="train_class_tm"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['hours'],0,6,'utf-8');?>
课时</div>
                   <?php if ($_smarty_tpl->tpl_vars['v']->value['baomingnum']=='') {?>
				   0人报名
				   <?php } else { ?>
				   <?php echo $_smarty_tpl->tpl_vars['v']->value['baomingnum'];?>
人报名
                  
				    <?php }?>
                   <div class="train_class_money"><i class="train_class_my">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</i></div>
                    
                   </div>
               </li>  
			    <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
        
                <div class="com_msg_no">
                 <p>暂无培训课程信息</p>
            </div>
		<?php } ?>
      
           </ul>
     </div>
    </div>
  </div>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/reclist.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/ScrollPic.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
	setTimeout(function(){
		layer.photos({
			photos: '#rolling_img1',
			anim: 5
		});
	},1000);
})
<!--//--><![CDATA[//><!--
var li_num=$("#rolling_img1 li").length;
if(li_num>3){
	var scrollPic_02 = new ScrollPic();
	scrollPic_02.scrollContId   = "rolling_img1"; 
	scrollPic_02.arrLeftId      = "LeftArr";
	scrollPic_02.arrRightId     = "RightArr";
	scrollPic_02.frameWidth     = 880;
	scrollPic_02.pageWidth      = 231; 
	scrollPic_02.speed          = 10; 
	scrollPic_02.space          = 10; 
	scrollPic_02.autoPlay       = true; 
	scrollPic_02.autoPlayTime   = 2; 
	scrollPic_02.initialize();
}
//--><!]]> 
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
