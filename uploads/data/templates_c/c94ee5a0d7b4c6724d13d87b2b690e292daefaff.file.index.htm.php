<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-20 04:19:47
         compiled from "/www/fpwjob/uploads/app/template/default/map/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:17631877205e4d98636c1263-29106931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c94ee5a0d7b4c6724d13d87b2b690e292daefaff' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/map/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17631877205e4d98636c1263-29106931',
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
  'unifunc' => 'content_5e4d98636fcee9_85953794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4d98636fcee9_85953794')) {function content_5e4d98636fcee9_85953794($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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
<link  href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/map.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="yun_body">
  <div class="yun_content">
  
    
    <div class="current_Location com_current_Location png">
      <div class="fl" >您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <span>地图搜索</span> </div>
    </div>
  
  <div class="clear"></div>
  <div class="yun_map_box">
    <div class="yun_map_box_h1"><span class="yun_map_box_h1_span">地图搜索</span></div>
<div id="map-index" class="module-map action-index">
<div id="website-content" class="wrapper-center">
  <div id="search">
    <div id="title">
    <a class="select" title="job">职位名<i class="triangle"></i></a>
    <a class="nselect" title="company">公司名</a>
    </div>
    <div class="form">
      <input type="text" name="key" id="keyword"   value=""/>
      <input type="hidden" name="searchtype" id="searchtype" value="job" />
      <a id="submitbutton" class="submit yun_bg_color" href="javascript: void(0)">搜索</a> </div>
    <div style="clear:both;"></div>
  </div>
  <div id="map_content">
    <div id="map">
      <div id="map-container" class="inner"></div>
      <div class="map-loader"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/map_loader.gif"/></div>
      <div class="map-loader-box"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/map_loader_box.gif"/></div>
    </div>
    <div id="list">
      <div class="inner">
        <h2>一共找到<span id="count">0</span>个企业</h2>
        <ul id="content"></ul>
        <div id="Pagination" class="pagination"></div>
      </div>
    </div>
    <div style="clear:both;"></div>
  </div>  
  <div class="clear"></div>
</div> 
</div>
</div></div>
</div>
<div class="clear"></div>
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
>weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";<?php echo '</script'; ?>
>
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
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var getdataurl='<?php echo smarty_function_url(array('m'=>'map','c'=>'search'),$_smarty_tpl);?>
';
var marker_icon_url="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/map_markers.png";
var marker_icon_blue="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/map_marker_blue.png";
var x="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_x'];?>
";
var y="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_y'];?>
";
var map_tocity="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_tocity'];?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
