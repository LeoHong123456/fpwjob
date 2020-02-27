<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-25 13:54:59
         compiled from "/www/fpwjob/uploads/app/template/wap/train.htm" */ ?>
<?php /*%%SmartyHeaderCode:19879944495e54b6b3dc37d9-51317648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9175c9abfb749f12e25a00b6f8e6c00275ce6be8' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/train.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19879944495e54b6b3dc37d9-51317648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lunbo' => 0,
    'usertype' => 0,
    'recsubject' => 0,
    'v' => 0,
    'rectrain' => 0,
    'newsubject' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e54b6b3e2db22_83928613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54b6b3e2db22_83928613')) {function content_5e54b6b3e2db22_83928613($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_train.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="train_banner"><!--<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/images/7.png">-->
<div class="swiper_banner" >
	<div class="swiper-container" id="imgswiper">
		<div class="swiper-wrapper">
<?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[81];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
<div class="swiper-slide">
<a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['src'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%'/></a>
</div>
<?php } ?>
</div>
	</div>
    	</div>
</div>
<div class="train_index_nav">
<div class="train_index_nav_c">
<ul class="train_index_nav_list">
<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subject'),$_smarty_tpl);?>
"><i class="train_indexnav_icon train_nav_icon_kc"></i>课程</a></li>
<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'teacher'),$_smarty_tpl);?>
"><i class="train_indexnav_icon train_nav_icon_js"></i>讲师</a></li>
<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agency'),$_smarty_tpl);?>
"><i class="train_indexnav_icon train_nav_icon_jg"></i>机构</a></li>
<li>
<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='4') {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/wap/member/index.php?c=addsubject"><i class="train_indexnav_icon train_nav_icon_fb"></i>发布</a>
<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value&&$_smarty_tpl->tpl_vars['usertype']->value!='4') {?>
<a href="javascript:void(0)" onclick="istrainlogin()"><i class="train_indexnav_icon train_nav_icon_fb"></i>发布</a>
<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=='') {?>
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
"><i class="train_indexnav_icon train_nav_icon_fb"></i>发布</a>
<?php }?> 
</li>
<ul>
</div>
</div>
<div class="train_index_bg">
<div class="train_index_tit"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subject','rec'=>1),$_smarty_tpl);?>
">为你推荐课程</a></div>
<div class="clear"></div>
<ul class="train_index_list_box">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recsubject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<li>
<div  class="train_index_list">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subshow','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" class=""><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"></a>
<div class="train_index_kcname"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
<div class="train_index_jgname"><?php echo $_smarty_tpl->tpl_vars['v']->value['comname'];?>
</div>
<span class="train_index_money">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['price']);?>
</span>
</div>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?> 
	<div class="wap_notip">暂无推荐课程</div>
 <?php } ?> 
</ul>
<div class="clear"></div>
<div class="train_index_more"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subject'),$_smarty_tpl);?>
">更多课程</a></div>
</div>
<div class="clear"></div>

<div class="train_index_tit mt10"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agency','rec'=>1),$_smarty_tpl);?>
">推荐培训机构</a></div>
<div class="clear"></div>
<ul class="train_index_jglist">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rectrain']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<li>
<div class="train_index_jglist_c">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agencyshow','id'=>$_smarty_tpl->tpl_vars['v']->value['uid']),$_smarty_tpl);?>
" class="train_index_jglist_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['logo'];?>
"></a>
<div class="train_index_jglist_name"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agencyshow','id'=>$_smarty_tpl->tpl_vars['v']->value['uid']),$_smarty_tpl);?>
" class=""><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
</div>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?> 
	<div class="wap_notip">暂无推荐机构</div>
 <?php } ?> 
</ul>
<div class="clear"></div>
<div class="train_index_more mt10"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agency'),$_smarty_tpl);?>
">更多机构</a></div>
<div class="clear"></div>
<div class="train_index_bg mt10">
<div class="train_index_tit"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subject','order'=>'ctime','t'=>'desc'),$_smarty_tpl);?>
">最新课程</a></div>
<div class="clear"></div>
<ul class="train_index_list_box">
 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsubject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<li>
<div  class="train_index_list">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subshow','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" class=""><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"></a>
<div class="train_index_kcname"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
<div class="train_index_jgname"><?php echo $_smarty_tpl->tpl_vars['v']->value['comname'];?>
</div>
<span class="train_index_money">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['price']);?>
</span>
</div>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?> 
	<div class="wap_notip">暂无最新课程</div>
 <?php } ?>
</ul>
<div class="clear"></div>
<div class="train_index_more"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subject'),$_smarty_tpl);?>
">更多课程</a></div>


</div>
<style>
.swiper-container {
    width: 100%;
    height: 190px;
} 
</style>
<style>
.tips{display:none;}
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
		var myimgswiper = new Swiper ('#imgswiper', {
			direction: 'horizontal'
			,autoplay:true
			,loop: true
		  });      
    }); 
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
