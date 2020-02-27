<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 14:48:05
         compiled from "/www/fpwjob/uploads/app/template/default/hr/list.htm" */ ?>
<?php /*%%SmartyHeaderCode:2670175695e2e87a5d26eb9-43796358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ada5a39fabc8e44524d02e1d944fb59a84541e0' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/hr/list.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2670175695e2e87a5d26eb9-43796358',
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
    'list' => 0,
    'v' => 0,
    'class' => 0,
    'lists' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e87a5d86373_20259606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e87a5d86373_20259606')) {function content_5e2e87a5d86373_20259606($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/news.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<body class="body_bg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_body">
<div class="yun_content">
<div class="current_Location icon com_current_Location png"><div class="fl">您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'hr'),$_smarty_tpl);?>
">工具箱</a></div></div>
<div class="clear"></div>
<div class="Toolbox_content_box">
<div class="Toolbox_content_box_left">
<div class="Toolbox_content_h1 yun_bg_color"><span class="Toolbox_content_span">HR必备工具</span></div>
<ul class="Toolbox_content_nav">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<li <?php if ($_GET['id']==$_smarty_tpl->tpl_vars['v']->value['id']) {?>class="Toolbox_content_nav_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'hr','c'=>'list','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
<?php } ?>
</ul>
</div>
<div class="Toolbox_content_box_right">
<?php if (is_array($_smarty_tpl->tpl_vars['class']->value)) {?>
<div class=" Toolbox_left02">
    <div class="Toolbox_list_show ">
        <div class="Toolbox_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['class']->value['pic'];?>
" width="72" height="72"></div>
        <div class="Toolbox_list_cont">
            <div class="Toolbox_list_h1">
            <a href="<?php echo smarty_function_url(array('m'=>'hr','c'=>'list','id'=>'`$class.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
</a>
            </div>
            <div class="Toolbox_list_p"><?php echo $_smarty_tpl->tpl_vars['class']->value['content'];?>
</div>
        </div>
       
    </div>

</div>
<?php }?>
<ul class="Toolbox_content_list">
<?php  $_smarty_tpl->tpl_vars['lists'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lists']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("id"=>"\'auto.id\'","keyword"=>"\'auto.keyword\'","ispage"=>"1","limit"=>"52","item"=>"\'lists\'","nocache"=>"")
;');$List=array();
		
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
		$where = "`is_show`='1'";
		global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		if($paramer['id']){
			$where.=" and `cid`='".$paramer['id']."'";
		}
		
		if($paramer['keyword']){
			$where.=" AND `name` LIKE '%".$paramer['keyword']."%'";
		}
		
		
		if($paramer['limit']){
			$limit=" LIMIT ".$paramer['limit'];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"toolbox_doc",$where,$Purl,'','0',$_smarty_tpl);
		}
		
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer['order']."`";
		}else{
			$where.="  ORDER BY `id`";
		}
		
		if($paramer['sort']){
			$where.=" ".$paramer['sort'];
		}else{
			$where.=" DESC";
		}
		$List=$db->select_all("toolbox_doc",$where.$limit);$List = $List; if (!is_array($List) && !is_object($List)) { settype($List, 'array');}
foreach ($List as $_smarty_tpl->tpl_vars['lists']->key => $_smarty_tpl->tpl_vars['lists']->value) {
$_smarty_tpl->tpl_vars['lists']->_loop = true;
?>
<li><a href="javascript:downhr('<?php echo $_smarty_tpl->tpl_vars['lists']->value['id'];?>
');" title="<?php echo $_smarty_tpl->tpl_vars['lists']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['lists']->value['name'];?>
</a></li>                        
<?php } ?>
       <?php if (!$_smarty_tpl->tpl_vars['lists']->value) {?>
	<div class="Toolbox_content_msg">暂无信息</div>
	   <?php }?>

</ul>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
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
" language="javascript"><?php echo '</script'; ?>
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
>
function downhr(id){
    $.post("<?php echo smarty_function_url(array('m'=>'hr','c'=>'ajax'),$_smarty_tpl);?>
", { id: id }, function (data) {
		window.location.href=data;
	})
}
function checkkey(){
	var keyword=$("input[name=key]").val();
	if(keyword=="" || keyword=="请输入关键字"){
		layer.msg('请输入关键字！', 2, 8);return false;
	}
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
