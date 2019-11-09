<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 18:27:08
         compiled from "/www/fpwjob/uploads/app/template/default/redeem/list.htm" */ ?>
<?php /*%%SmartyHeaderCode:10745813035dc542fc0e5cb2-51249943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097a3b037acd7465be885f55bc75a0d31b657dfe' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/redeem/list.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10745813035dc542fc0e5cb2-51249943',
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
    'redeem_index' => 0,
    'v' => 0,
    'redeem_name' => 0,
    'redeem_type' => 0,
    'intinfo' => 0,
    'integlist' => 0,
    'val' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc542fc151e81_90892128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc542fc151e81_90892128')) {function content_5dc542fc151e81_90892128($_smarty_tpl) {?><?php if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
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
/style/yun_job_fairs.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<body class="Integral_body">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div class="yun_Integral">
		<div class="yun_Integral_list_content">
			<div class="yun_Integral_search">
				<span class="yun_Integral_search_name">商品分类：</span>
				<div class="yun_Integral_search_right"> 
					<a href="<?php echo smarty_function_listurl(array('m'=>'redeem','c'=>'list','untype'=>'nid'),$_smarty_tpl);?>
" <?php if ($_GET['nid']=='') {?> class="yun_Integral_cur" <?php }?>">全部</a>      
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['redeem_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<a href="<?php echo smarty_function_listurl(array('m'=>'redeem','c'=>'list','type'=>'nid','untype'=>'tnid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" <?php if ($_GET['nid']==$_smarty_tpl->tpl_vars['v']->value) {?>class="yun_Integral_cur"<?php }?>><?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
					<?php } ?>
				</div>
			</div>
			<?php if ($_GET['nid']!=''&&$_smarty_tpl->tpl_vars['redeem_type']->value[$_GET['nid']]) {?>
			<div class="yun_Integral_search">
				<span class="yun_Integral_search_name">商品子类：</span>
				<div class="yun_Integral_search_right"> 
					<a href="<?php echo smarty_function_listurl(array('m'=>'redeem','c'=>'list','type'=>'tnid','v'=>0),$_smarty_tpl);?>
" <?php if ($_GET['tnid']=='') {?> class="yun_Integral_cur" <?php }?>">全部</a>      
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['redeem_type']->value[$_GET['nid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<a href="<?php echo smarty_function_listurl(array('m'=>'redeem','c'=>'list','type'=>'tnid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" <?php if ($_GET['tnid']==$_smarty_tpl->tpl_vars['v']->value) {?>class="yun_Integral_cur"<?php }?>><?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
					<?php } ?>
				</div>
			</div>
			
			<?php }?>
			<div class="yun_Integral_search">
				<span class="yun_Integral_search_name"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
范围：</span>
				<div class="yun_Integral_search_right">
					<a href="<?php echo smarty_function_listurl(array('m'=>'redeem','c'=>'list','untype'=>'intinfo'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['intinfo']->value=='') {?>class="yun_Integral_cur"<?php }?>>全部</a>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['integlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<a href="<?php echo smarty_function_listurl(array('m'=>'redeem','c'=>'list','type'=>'intinfo','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['intinfo']->value==$_smarty_tpl->tpl_vars['v']->value) {?>class="yun_Integral_cur"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
					<?php } ?> 
				</div>
			</div>
		</div>

  <!--全部商品-->
  <div class="yun_Integral_box">
    <div class="yun_Integral_box_h1"><span class="yun_Integral_box_h1_name">全部商品</span></div>
    <div class="yun_Integral_cont">
      <div class="yun_Integral_cont_w">
	  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
$val=array();$time=time();eval('$paramer=array("item"=>"\'val\'","nid"=>"\'auto.nid\'","tnid"=>"\'auto.tnid\'","limit"=>"15","intinfo"=>"\'auto.intinfo\'","ispage"=>"1","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`=1 ";
		if($paramer[hot]){
			$where.=" AND `hot`=".$paramer[hot]."";
		}
		if($paramer[rec]){
			$where.=" AND `rec`=".$paramer[rec]."";
		}
		if($paramer[nid]){
			$where.=" AND `nid`=".$paramer[nid]."";
		}
		if($paramer[tnid]){
			$where.=" AND `tnid`=".$paramer[tnid]."";
		}
		if($paramer[intinfo]){
			$bninfo=@explode('_',$paramer[intinfo]);
			if($bninfo[1]){
				$where.=" and `integral` between '".$bninfo[0]."' and '".$bninfo[1]."'";
			}else{
				$where.=" and `integral` <".$bninfo[0]."";
			}
			
		}
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"reward",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
		}
		//排序字段（默认按照开始时间排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY integral ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$val=$db->select_all("reward",$where.$limit);
		if(is_array($val)){
			foreach($val as $key=>$value){
				if(!$value['pic'] || !file_exists(APP_PATH.$value['pic'])){
					$val[$key]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$val[$key]['pic']= $config['sy_weburl']."/".$value['pic'];
				}
				if($paramer[islt]==6){
					$val[$key][url] = Url("wap",array("c"=>"redeem","a"=>"show","id"=>$value[id]));
				}else{
					$val[$key][url] = Url("redeem",array("c"=>"show","id"=>$value[id]));
				}
			}
		}
		$val = $val; if (!is_array($val) && !is_object($val)) { settype($val, 'array');}
foreach ($val as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
        <div class="yun_Integral_cont_list"> 
        <div class="yun_Integral_cont_list_a">
       
          <dl class="yun_Integral_list_dl">
            <dt> <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" width="189" height="167"/></a></dt>
            <dd class="yun_Integral_list_dl_name"> <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a></dd>
            <dd class="yun_Integral_list_dl_n">所需<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
: <?php echo $_smarty_tpl->tpl_vars['val']->value['integral'];?>
</dd>
          </dl>
          </a> </div>
          </div>
        <?php }
if (!$_smarty_tpl->tpl_vars['val']->_loop) {
?>
       <!--没搜索到-->
        <div class="seachno" style="width:1000px;">
          <div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif" width="144" height="102"></div>
          <div class="listno-content"> <strong>很抱歉，没有找到满足条件的商品</strong><br>
            <span> 建议您：<br>
            适当减少已选择的条件
            </span> 
            </div>
        </div>
        </div>
        <?php } ?> 
        <div class="clear"></div>
        <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
