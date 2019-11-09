<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:48:30
         compiled from "/www/fpwjob/uploads/app/template/default/evaluate/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:372730505dc51dcebcdfd9-83916421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25f5958258565ac239d09934edae9b8149e292d0' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/evaluate/index.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '372730505dc51dcebcdfd9-83916421',
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
    'rows' => 0,
    'item' => 0,
    'adlist_90' => 0,
    'evaluateRecommend' => 0,
    'examinee' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51dcec2a044_59524542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51dcec2a044_59524542')) {function content_5dc51dcec2a044_59524542($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ad')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.ad.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/evaluate.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"/>
</head>
<body>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
 <div class="cp_content">
<div class="wrap">
    <div class="current_Location  png">您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a>  >  <span>测评</span>
</div>
<div class="clear"></div>
<div class="evaluate_left">
<div class=""><?php echo smarty_function_ad(array('cid'=>89,'id'=>360),$_smarty_tpl);?>
</div>

<div class="evaluate_left_tit"><i class="evaluate_left_tit_icon"></i><span class="evaluate_left_tit_s">最受欢迎的职业测聘</span></div>
	<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

<div class="evaluate_left_list">
<div class="evaluate_left_list_pic"><a href="<?php echo smarty_function_url(array('m'=>'evaluate','c'=>'exampaper','titleid'=>'`$item.id`','gid'=>'`$item.keyid`'),$_smarty_tpl);?>
" target="_blank"> 
					  <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" width="220" height="140" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_cplogo'];?>
',2);"/></a></div>
<div class="evaluate_left_list_r">
<div class="evaluate_left_list_h1"><a href="<?php echo smarty_function_url(array('m'=>'evaluate','c'=>'exampaper','titleid'=>'`$item.id`','gid'=>'`$item.keyid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></div>
<div class="evaluate_left_list_p"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div>
<div class="evaluate_left_list_info"><?php echo $_smarty_tpl->tpl_vars['item']->value['visits'];?>
人访问过</div>
</div>
<a href="<?php echo smarty_function_url(array('m'=>'evaluate','c'=>'exampaper','titleid'=>'`$item.id`','gid'=>'`$item.keyid`'),$_smarty_tpl);?>
"  target="_blank" class="evaluate_left_list_bth">开始测试</a>
</div>

				<?php } ?>
                
             <div class="evaluate_left_list_more">
				<a class="" href="<?php echo smarty_function_url(array('m'=>'evaluate','c'=>'morelist'),$_smarty_tpl);?>
">查看更多测聘 ></a>
			</div>
			<?php }?>   



</div>
<div class="evaluate_right">
<div class="evaluate_right_banner">
<?php  $_smarty_tpl->tpl_vars['adlist_90'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_90']->_loop = false;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[90];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 5;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_90']->key => $_smarty_tpl->tpl_vars['adlist_90']->value) {
$_smarty_tpl->tpl_vars['adlist_90']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['adlist_90']->value['html'];?>

<?php } ?>


</div>



<div class="evaluate_right_box"><div class="evaluate_right_box_h1"><i class="evaluate_right_box_h1_n"></i><span class="evaluate_right_box_h1_s">热门测评</span></div>
<div class="evaluate_right_hot">
      <ul>
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['evaluateRecommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
              <li><a href="<?php echo smarty_function_url(array('m'=>'evaluate','c'=>'exampaper','titleid'=>'`$item.id`','gid'=>'`$item.keyid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a> <span class="evaluate_right_hot_yl"><?php echo $_smarty_tpl->tpl_vars['item']->value['visits'];?>
 次</span></li>
              <?php } ?>
            </ul>

</div>
</div>

<div class="evaluate_right_box mt20"><div class="evaluate_right_box_h1"><i class="evaluate_right_box_h1_n"></i><span class="evaluate_right_box_h1_s">他们也参加了测评</span></div>
<div class="evaluate_right_user">
  <ul>
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['examinee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
            <li><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>$_smarty_tpl->tpl_vars['list']->value['uid']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['pic'];?>
" width="48"  height="48" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);"/></a>
            <div class="evaluate_right_user_name"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['nickname'],0,4,"utf-8");?>
</div></li>
            <?php } ?>
            </ul>

</div>
</div>

</div>







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
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/evaluate.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.cp_top_arr');
<?php echo '</script'; ?>
>
<![endif]--> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
