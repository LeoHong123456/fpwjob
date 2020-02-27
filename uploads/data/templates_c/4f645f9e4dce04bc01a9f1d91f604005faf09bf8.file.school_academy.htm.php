<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 23:20:31
         compiled from "/www/fpwjob/uploads/app/template/school/school_academy.htm" */ ?>
<?php /*%%SmartyHeaderCode:4050748095e30513f605915-72058230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f645f9e4dce04bc01a9f1d91f604005faf09bf8' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/school/school_academy.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4050748095e30513f605915-72058230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'tid' => 0,
    'city_index' => 0,
    'pid' => 0,
    'key' => 0,
    'cid' => 0,
    'schoolata' => 0,
    'v' => 0,
    'schoolclass_name' => 0,
    'academy_name' => 0,
    'total' => 0,
    'pagenav' => 0,
    'totalshow' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e30513f741a89_18226566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e30513f741a89_18226566')) {function content_5e30513f741a89_18226566($_smarty_tpl) {?><?php if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<div class="clear"></div>
</head>
<body class="body_bg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['schoolstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="school_w1200">

  <div class="clear"></div>
  <div class="Search_jobs_box"> 
   <div class="Search_jobs_tit"><span class="Search_jobs_tit_s">筛选</span>   
   <div class="searchBox">
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/school/" method="get" id="form" onsubmit="return search_keyword(this,'请输入院校名称');">
	  <input type="hidden" name="c" value="<?php echo $_GET['c'];?>
">
    
            <input type="text" name="keyword" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入院校名称<?php }?>" onclick="if(this.value=='请输入院校名称'){this.value=''}" onblur="if(this.value==''){this.value='请输入院校名称'}" class="searchBox_text ">
            <input type="submit" value="" class="searchBox_bth">
         
    </form>
  </div>
   </div> 
    
    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']==1&&$_smarty_tpl->tpl_vars['config']->value['cityname']&&$_smarty_tpl->tpl_vars['config']->value['cityname']!=$_smarty_tpl->tpl_vars['config']->value['sy_indexcity']) {?>
		  <div class="Search_citybox">
          <div class="Search_cityboxname"> 所在城市</div>
          <div class="Search_citybox_right">
          <div class="Search_cityboxright">
		  <div class="search_city_list">
		  <?php if (!$_GET['cityid']&&$_GET['three_cityid']) {?>
		  <a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>
</a>
		  <?php } else { ?>
			  <?php if (is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>
			  <a href="<?php echo smarty_function_listurl(array('m'=>'school','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if (!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
			  <?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
			  <a href="<?php echo smarty_function_listurl(array('m'=>'school','type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
			  <?php } ?>
			  <?php } else { ?>
			  <a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a>
			  <?php }?>
		   <?php }?>
		  </div>
          </div>
         </div>
         </div>
		  <?php } else { ?>
          <div class="Search_citybox">
          <div class="Search_cityboxname"> 所在城市</div>
          <div class="Search_citybox_right">
		  <div class="Search_cityall none">
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="city_name">全国</a>
		  <?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pid']->key;
?>
          <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']==$_smarty_tpl->tpl_vars['pid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['pid']->value];?>
</a>
          <?php } ?>
		  </div>
          <div class="Search_cityboxright">
          <a href="javascript:;" onclick="acityshow('1')" class="search_city_list_cur <?php if ($_GET['provinceid']&&!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>search_city_active<?php }?> <?php if (!$_GET['provinceid']) {?>none<?php }?> acity_two" style="text-decoration:none;cursor:pointer;"><span class="search_city_p"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</span><i class="search_city_p_jt"></i><i class="search_city_list_line"></i></a>
		  <a href="javascript:;" <?php if ($_GET['cityid']) {?>onclick="acityshow('2')"<?php }?> class="search_city_list_cur <?php if ($_GET['cityid']&&is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>search_city_active<?php }?> <?php if (!$_GET['provinceid']||!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>none<?php }?> acity_three" style="text-decoration:none;cursor:pointer;"><span class="search_city_p"><?php if (!$_GET['cityid']) {?>不限<?php } else {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];
}?></span><i class="search_city_list_line"></i></a>
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="search_city_list_all <?php if (!$_GET['provinceid']) {?>city_name_active<?php }?>">全国</a>
          <div class="search_city_list">
		  <?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pid']->key;
?>
          <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&!$_GET['cityid']) {
if ($_smarty_tpl->tpl_vars['key']->value>13) {?>none<?php }
} elseif ($_GET['cityid']) {
if ($_smarty_tpl->tpl_vars['key']->value>12) {?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['key']->value>14) {?>none<?php }
}?> <?php if ($_GET['provinceid']==$_smarty_tpl->tpl_vars['pid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['pid']->value];?>
</a>
          <?php } ?>
		  </div>
          <a href="javascript:;" class="search_city_list_more" id="acity">更多</a>
          </div>
          <div class="Search_cityboxclose <?php if (!$_GET['provinceid']||($_GET['provinceid']&&$_GET['cityid']&&is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]))) {?>none<?php }?>" id="acity_two"> 
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','untype'=>'cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
		  <?php  $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cid']->key => $_smarty_tpl->tpl_vars['cid']->value) {
$_smarty_tpl->tpl_vars['cid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cid']->key;
?>
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['cid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['cid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['cid']->value];?>
</a>
		  <?php } ?>
		  </div>
		  <div class="Search_cityboxclose <?php if (!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>none<?php }?>" id="acity_three"> 
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
		  <?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
		  <?php } ?>
		  </div>
         </div>
         </div>
        <?php }?>
  
  
  <div class="Search_jobs_form_list">
    <div class="Search_jobs_name">学科类别</div>
    <div class="Search_jobs_sub ">
      <div class="Search_jobs_sub_Box "> 
         
           <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'categty','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['categty']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a> 
		  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schoolata']->value['school_categty']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'categty','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_smarty_tpl->tpl_vars['key']->value>9) {?>none<?php }?> <?php if ($_smarty_tpl->tpl_vars['key']->value>9) {?>taglist<?php }?> <?php if ($_GET['categty']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?></div>
		  <?php if (count($_smarty_tpl->tpl_vars['schoolata']->value['school_categty'])>10) {?>
		  <div class="zh_more"> <a href="javascript:checkmore('taglist');" id="taglist" rel="nofollow">更多</a> </div>
		  <?php }?>
    </div>
  </div>
  <div class="Search_jobs_form_list">
    <div class="Search_jobs_name">办学层次</div>
    <div class="Search_jobs_sub ">
      <div class="Search_jobs_sub_Box "> 
       <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'level','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['level']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a> 
		  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schoolata']->value['school_level']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','type'=>'level','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_smarty_tpl->tpl_vars['key']->value>9) {?>none<?php }?> <?php if ($_smarty_tpl->tpl_vars['key']->value>9) {?>taglist<?php }?> <?php if ($_GET['level']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?></div>
		  <?php if (count($_smarty_tpl->tpl_vars['schoolata']->value['school_level'])>10) {?>
		  <div class="zh_more"> <a href="javascript:checkmore('taglist');" id="taglist" rel="nofollow">更多</a> </div>
		  <?php }?>
    </div>
  </div>
 <?php if ($_GET['provinceid']||$_GET['cityid']||$_GET['categty']||$_GET['level']||$_GET['keyword']) {?>
  <div class="Search_close_box">
  
         <div>
          <div class="Search_clear"> <a href="<?php echo smarty_function_url(array('m'=>'school','c'=>'academy'),$_smarty_tpl);?>
"> 清除所选</a></div>
         <span class="Search_close_box_s">已选条件：</span>
         </div>
		 <?php if ($_GET['provinceid']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','untype'=>'provinceid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">城市：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a>&nbsp; <?php }?>
		 <?php if ($_GET['cityid']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','untype'=>'cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a>&nbsp; <?php }?>

		 <?php if ($_GET['categty']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','untype'=>'categty'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">学科类别：<?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_GET['categty']];?>
</a>&nbsp; <?php }?>
		 <?php if ($_GET['level']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','untype'=>'level'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">办学层次：<?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_GET['level']];?>
</a>&nbsp; <?php }?>
          <?php if ($_GET['keyword']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'academy','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_GET['keyword'];?>
</a>&nbsp; <?php }?>
		 </div>
          
<?php }?>
  </div>
<div class="yun_school_yx_tit"><span class="yun_school_yx_tit_s">为您找到 <font color="#f00" id="totalshow">0</font> 所高校</span></div>
<div class="yun_school_yx_listbox">
<ul class="yun_school_yx_list">
<?php  $_smarty_tpl->tpl_vars['academy_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['academy_name']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("ispage"=>"1","noids"=>"1","namelen"=>"30","comlen"=>"30","keyword"=>"\'auto.keyword\'","level"=>"\'auto.level\'","categty"=>"\'auto.categty\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","key"=>"\'key\'","limit"=>"20","item"=>"\'academy_name\'","name"=>"\'academy_name1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
   
		$cache_array = $db->cacheget();
		$city_name= $cache_array["city_name"];
		$schoolclass_name= $cache_array["schoolclass_name"];
		$where='1';
		if($config['sy_web_site']=="1"){
			if($config[provinceid]>0 && $config[provinceid]!=""){
				$paramer[provinceid] = $config[provinceid];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}

		}
        //关键字
        if($paramer[keyword]){
			$where.=" AND `schoolname` LIKE '%".$paramer['keyword']."%'";
		}
		if($paramer[provinceid]){
			$where .= " AND provinceid = $paramer[provinceid]";
		}
		
		if($paramer[cityid]){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
        if($paramer[three_cityid]){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		
		if($paramer[school_department]){
            $where .= " AND `school_department` = $paramer[school_department]";

		}
		if($paramer[level]){
            $where .= " AND `school_level` = $paramer[level]";
		}
        if($paramer[categty]){
            $where .= " AND `school_categty` = $paramer[categty]";
		}
        if($paramer[schoolinternet]){
            $where .= " AND `schoolinternet` = $paramer[schoolinternet]";
		}

		if($paramer[order]){
			$order = " ORDER BY `".$paramer[order]."`";
		}else{
			$order = " ORDER BY lastupdate ";
		}
		$sort = $paramer[sort]?$paramer[sort]:'DESC';
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}
		if($paramer[where]){
			$where = $paramer[where];
		}

        if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"school_academy",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
          
		} 
		$where.=$order.$sort;
		$academy_name=$db->select_all("school_academy",$where.$limit);	
		if($academy_name && is_array($academy_name)){
			foreach($academy_name as $k=>$v){
                $academy_name[$k]['id']=$v['id'];
                $academy_name[$k]['schoolname']=$v['schoolname'];
				$academy_name[$k]['provinceid']=$city_name[$v['provinceid']];
				$academy_name[$k]['cityid']=$city_name[$v['cityid']];
				$academy_name[$k]['three_cityid']=$city_name[$v['three_cityid']];
				$academy_name[$k]['school_department']=$schoolclass_name[$v['school_department']];
                $academy_name[$k]['school_level']=$schoolclass_name[$v['school_level']];
				$academy_name[$k]['school_categty']=$schoolclass_name[$v['school_categty']];
				$academy_name[$k]['schooltag']=$schoolclass_name[$v['schooltag']];
				$academy_name[$k]['address']=$v['address'];
				$academy_name[$k]['schoolemail']=$v['schoolemail'];
				$academy_name[$k]['schoolinternet']=$v['schoolinternet'];
				$academy_name[$k]['photo']=$v['photo'];
				$academy_name[$k]['diploma_url']=Url("talent",array("c"=>"show","id"=>$v['id']),"1");
				$academy_name[$k]['lastupdate'] = date("Y-m-d",$v['lastupdate']);
				$academy_name[$k]['downtime'] = date("Y-m-d H:i",$v['downtime']);
				}
			}
			foreach($academy_name as $k=>$v){
               if($paramer['keyword']){					
                    $academy_name[$k]['provinceid']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['provinceid']);
					$academy_name[$k]['cityid']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['cityid']);
					$academy_name[$k]['three_cityid']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['three_cityid']);
					$academy_name[$k]['school_department']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['school_department']);
                    $academy_name[$k]['school_level']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['school_level']);
					$academy_name[$k]['school_categty']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['school_categty']);
					$academy_name[$k]['schooltag']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['schooltag']);

                    
                    
                    $academy_name[$k]['address']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['address']);
					$academy_name[$k]['schoolemail']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['schoolemail']);
					$academy_name[$k]['schoolinternet']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['schoolinternet']);
					$academy_name[$k]['schoolname']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['schoolname']);

				}
            }$academy_name = $academy_name; if (!is_array($academy_name) && !is_object($academy_name)) { settype($academy_name, 'array');}
foreach ($academy_name as $_smarty_tpl->tpl_vars['academy_name']->key => $_smarty_tpl->tpl_vars['academy_name']->value) {
$_smarty_tpl->tpl_vars['academy_name']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['academy_name']->key;
?> 

<li>
<div class="yun_school_yx_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['photo'];?>
" width="80" height="80"></div>
<div class="yun_school_yx_name"><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['academy_name']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_url(array('m'=>'school','c'=>'academyshow','id'=>$_tmp1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['academy_name']->value['schoolname'];?>
</a></div>
<div class="yun_school_yx_p">学校所在地：<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['provinceid'];?>
-<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['cityid'];?>
</div>
<div class="yun_school_yx_p">办学层次：<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['school_level'];?>
</div>
<div class="yun_school_yx_p">学科类别：<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['school_categty'];?>
</div>
</li>
<?php } ?>

</ul>
        <?php if ($_smarty_tpl->tpl_vars['total']->value!=0||is_array($_smarty_tpl->tpl_vars['academy_name']->value)) {?>
        <div class="clear"></div>
        <div class="search_pages">
          <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;
echo $_smarty_tpl->tpl_vars['totalshow']->value;?>
</div> &nbsp;<br/>
        </div>
        <?php } else { ?> 
        
        <div class="seachno">
          <div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif" width="144" height="102"></div>
          <div class="listno-content"> <strong>很抱歉，没有找到满足条件的院校</strong><br>
            <span> 建议您：<br>
            1、适当减少已选择的条件<br>
            2、适当删减或更改搜索关键字<br>
            </span> 
           </div>
        </div>
        <?php }?>
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
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body><?php }} ?>
