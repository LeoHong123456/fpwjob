<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:44:39
         compiled from "/www/fpwjob/uploads/app/template/school/xjh.htm" */ ?>
<?php /*%%SmartyHeaderCode:8703488195e2e40876c62d2-51078794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff38d4e5d8f7c8d5540fbe5146b2d1aa0bdab36b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/school/xjh.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8703488195e2e40876c62d2-51078794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'city_index' => 0,
    'value' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'key' => 0,
    'cid' => 0,
    'tid' => 0,
    'schoolata' => 0,
    'schoolclass_name' => 0,
    'adtime' => 0,
    'xjhlist' => 0,
    'uid' => 0,
    'usertype' => 0,
    'pagenav' => 0,
    'totalshow' => 0,
    'rlist' => 0,
    'school_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e40877e4ae7_59468763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e40877e4ae7_59468763')) {function content_5e2e40877e4ae7_59468763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
</head>
<body class="body_bg">
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['schoolstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="school_w1200"> 
  <div class="clear"></div>
  <div class="Search_jobs_box"> 
      
   <div class="Search_jobs_tit"><span class="Search_jobs_tit_s">筛选</span> 
     <div class="searchBox" >
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/school/" method="get" id="form" onsubmit="return search_keyword(this,'请输入公司名称');">
     
	  <input type="hidden" name="c" value="<?php echo $_GET['c'];?>
">
     
            <input type="text" name="keyword" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入公司名称<?php }?>" onclick="if(this.value=='请输入公司名称'){this.value=''}" onblur="if(this.value==''){this.value='请输入公司名称'}" class="searchBox_text ">
            <input type="submit" value=" " class="searchBox_bth">
        
    </form>
  </div>  </div>
    
    <div class="Search_citybox">
      <div class="Search_cityboxname"> 宣讲地区</div>
      <div class="Search_citybox_right">
        <div class="Search_cityall none"> <a href="<?php echo smarty_function_url(array('m'=>'school','c'=>'xjh','untype'=>'provinceid'),$_smarty_tpl);?>
" class="city_name">全部</a>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']==$_smarty_tpl->tpl_vars['value']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['value']->value];?>
</a>
		<?php } ?>
		</div>
        <div class="Search_cityboxright">
		  <a href="javascript:;" onclick="acityshow('1')" class="search_city_list_cur <?php if ($_GET['provinceid']&&!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>search_city_active<?php }?> <?php if ($_GET['provinceid']=='') {?>none<?php }?> acity_two" style="text-decoration:none;cursor:pointer;"><span class="search_city_p"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</span><i class="search_city_p_jt"></i><i class="search_city_list_line"></i></a>
		  <a href="javascript:;" <?php if ($_GET['cityid']) {?>onclick="acityshow('2')"<?php }?> class="search_city_list_cur <?php if ($_GET['cityid']&&is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>search_city_active<?php }?> <?php if ($_GET['cityid']=='') {?>none<?php }?> acity_three" style="text-decoration:none;cursor:pointer;"><span class="search_city_p"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</span><i class="search_city_list_line"></i></a>
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'provinceid'),$_smarty_tpl);?>
" class="search_city_list_all <?php if ($_GET['provinceid']=='') {?>city_name_active<?php }?>">全部</a>
          <div class="search_city_list">
		  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
if ($_smarty_tpl->tpl_vars['key']->value<16) {?>
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']==$_smarty_tpl->tpl_vars['value']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['value']->value];?>
</a>
		  <?php }
} ?>
          <a href="javascript:;" class="search_city_list_more" id="acity">更多</a>
		</div>
        <div class="Search_cityboxclose <?php if (!$_GET['provinceid']||($_GET['provinceid']&&$_GET['cityid']&&is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]))) {?>none<?php }?>" id="acity_two"> 
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
		  <?php  $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cid']->key => $_smarty_tpl->tpl_vars['cid']->value) {
$_smarty_tpl->tpl_vars['cid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cid']->key;
?>
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['cid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['cid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['cid']->value];?>
</a>
		  <?php } ?>
		  </div>
		  <div class="Search_cityboxclose <?php if (!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>none<?php }?>" id="acity_three"> 
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
		  <?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
		  <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
		  <?php } ?>
		  </div>
      </div>
    </div>
  </div>
  
  <div class="Search_jobs_form_list">
    <div class="Search_jobs_name"> 院校层次</div>
    <div class="Search_jobs_sub ">
      <div class="Search_jobs_sub_Box ">
        <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'level'),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['level']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schoolata']->value['school_level']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','type'=>'level','v'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['level']==$_smarty_tpl->tpl_vars['value']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_smarty_tpl->tpl_vars['value']->value];?>
</a>
        <?php } ?>
      </div>
    </div>
    
  </div>
  
  
  <div class="Search_jobs_form_list">
    <div class="Search_jobs_name"> 举办时间</div>
    <div class="Search_jobs_sub ">
      <div class="Search_jobs_sub_Box "> 
      <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'adtime'),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['adtime']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a>
      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adtime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
      <a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','type'=>'adtime','v'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['adtime']==$_smarty_tpl->tpl_vars['key']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
      <?php } ?>
      </div>
    </div>
  </div>
  <?php if ($_GET['provinceid']||$_GET['cityid']||$_GET['level']||$_GET['adtime']||$_GET['keyword']) {?>
  <div class="Search_close_box">
         <div>
          <div class="Search_clear"> <a href="<?php echo smarty_function_url(array('m'=>'school','c'=>'xjh'),$_smarty_tpl);?>
"> 清除所选</a></div>
         <span class="Search_close_box_s">已选条件：</span>
         </div>
		 <?php if ($_GET['provinceid']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'provinceid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">城市：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a>&nbsp; <?php }?>
		 <?php if ($_GET['cityid']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a>&nbsp; <?php }?>
		 <?php if ($_GET['level']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'level'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">院校层次：<?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_GET['level']];?>
</a>&nbsp; <?php }?>
		 <?php if ($_GET['adtime']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'adtime'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">举办时间：<?php echo $_smarty_tpl->tpl_vars['adtime']->value[$_GET['adtime']];?>
</a>&nbsp; <?php }?>
         <?php if ($_GET['keyword']) {?><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">关键字：<?php echo $_GET['keyword'];?>
</a>&nbsp; <?php }?>
		 </div>
  
  <?php }?>
</div>
<div class="yun_school_xjh_tit">
<ul class="yun_school_xjh_tit_list"><li <?php if (!$_GET['tp']) {?>class="yun_school_job_titcur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'school','c'=>'xjh'),$_smarty_tpl);?>
">近期宣讲会</a></li><li <?php if ($_GET['tp']) {?>class="yun_school_job_titcur"<?php }?>><a href="<?php echo smarty_function_listurl(array('m'=>'school','c'=>'xjh','type'=>'tp','v'=>1),$_smarty_tpl);?>
">往期宣讲会</a></li></ul>
<span class="yun_school_job_titn">为您找到 <font color="#f00" id="totalshow">0</font> 条宣讲会信息</span> </div>
<div class="yun_school_job_left">
<ul>
<?php  $_smarty_tpl->tpl_vars['xjhlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xjhlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("comlen"=>"10","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","level"=>"\'auto.level\'","adtime"=>"\'auto.adtime\'","tp"=>"\'auto.tp\'","keyword"=>"\'auto.keyword\'","limit"=>"10","ispage"=>"1","item"=>"\'xjhlist\'","nocache"=>"")
;');$xjhlist=array();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`=1";
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid]=$config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}
		//关键字
		if($paramer["keyword"]){
			$com=$db->select_all("company","`name` like '%".$paramer["keyword"]."%'","uid");
			foreach($com as $v){
				$cuids[]=$v[uid];
			}
			$where.=" AND `uid` in (".@implode(",",$cuids).")";
		}
		//城市
		if($paramer["provinceid"]){
			$where.=" AND `provinceid`='".$paramer["provinceid"]."'";
		}
		if($paramer["cityid"]){
			$where.=" AND `cityid`='".$paramer["cityid"]."'";
		}
		if($paramer["three_cityid"]){
			$where.=" AND `three_cityid`='".$paramer["three_cityid"]."'";
		}
		//所属行业：
		if($paramer["level"]){
			$sch=$db->select_all("school_academy","`school_level`='".$paramer["level"]."'","id");
			foreach($sch as $v){
				$sids[]=$v[id];
			}
			$where.=" AND `schoolid` in (".@implode(",",$sids).")";
		}
		//用户uid
		if($paramer["uid"]){
			$where.=" AND `uid`='".$paramer["uid"]."'";
		}
		//院校uid
		if($paramer["sid"]){
			$where.=" AND `schoolid`='".$paramer["sid"]."'";
		}
		//近期，往期
		if($paramer["tp"]){
			$where.=" AND `etime`<'".time()."'";
		}else{
			$where.=" AND `etime`>'".time()."'";
		}
		if($paramer[adtime]){
			if($paramer[adtime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			if($paramer["tp"]){
					$where.=" AND stime>$beginToday";
				}else{
					$where.=" AND stime<$beginToday";
				}
    		}else{
    			$time=time();
				if($paramer["tp"]){
					$adtime = $time-($paramer[adtime]*86400);
					$where.=" AND stime>$adtime";
				}else{
					$adtime = $time+($paramer[adtime]*86400);
					$where.=" AND stime<$adtime";
				}
    		}
		}
		if($paramer["limit"]){
			$limit= " limit $paramer[limit]";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"school_xjh",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"0",$_smarty_tpl);
         
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order]";
		}else{
			$where .= " ORDER BY  `ctime`  ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		$xjhlist=$db->select_all("school_xjh",$where.$limit);
		if(is_array($xjhlist)){
			$cache_array = $db->cacheget();
			foreach($xjhlist as $v){
                $xjhid[]=$v['id'];
				$comuid[]=$v['uid'];
				$suid[]=$v['schoolid'];
    		}
            $atnlist=$db->select_all("atn","`xjhid` IN (".@implode(',',$xjhid).") and `uid`='".$_COOKIE['uid']."'");
			$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`logo`");
			$academy=$db->select_all("school_academy","`id` IN (".@implode(',',$suid).")","`id`,`schoolname`");
			$week=array("周日","周一","周二","周三","周四","周五","周六");
			foreach($xjhlist as $k=>$v){
				$xjhlist[$k]["city_two"] = $cache_array['city_name'][$v["cityid"]];
				$xjhlist[$k]["xjh_url"] = Url("school",array("c"=>"xjhshow","id"=>$v['id']));
				$xjhlist[$k]["com_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
				$xjhlist[$k]["sch_url"] = Url("school",array("c"=>"academyshow","id"=>$v['schoolid']));
				$xjhlist[$k]["ctime"] = date("Y-m-d",$v["ctime"]);
				$xjhlist[$k]["xjh_date"] = date("Y-m-d",$v["stime"]);
				$xjhlist[$k]["xjh_shour"] = date("H:i",$v["stime"]);
				$xjhlist[$k]["xjh_ehour"] = date("H:i",$v["etime"]);
				$xjhlist[$k]["xjh_week"] = $week[date("w",$v["stime"])];
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
						if($paramer[comlen]){
							$xjhlist[$k]["com_name"]=mb_substr($val['name'],0,$paramer[comlen],"utf-8");
						}else{
							$xjhlist[$k]["com_name"]=$val['name'];
						}
						if(!$val['logo'] || !file_exists(str_replace("./",APP_PATH,$val['logo']))){
							$xjhlist[$k]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$xjhlist[$k]['pic'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
						}
    				}
				}
				foreach($academy as $val){
					if($v['schoolid']==$val['id']&&$val['schoolname']){
    					$xjhlist[$k]["sch_name"]=$val['schoolname'];
    				}
				}
                foreach($atnlist as $val){
					if($v['id']==$val['xjhid']){
    					$xjhlist[$k]["xjhid_n"]=$val['xjhid'];
    				}
				}
			}
		}$xjhlist = $xjhlist; if (!is_array($xjhlist) && !is_object($xjhlist)) { settype($xjhlist, 'array');}
foreach ($xjhlist as $_smarty_tpl->tpl_vars['xjhlist']->key => $_smarty_tpl->tpl_vars['xjhlist']->value) {
$_smarty_tpl->tpl_vars['xjhlist']->_loop = true;
?>
<li>
<div class="yun_school_job_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['pic'];?>
"width="80" height="80"></div>
<div class="yun_school_job_cont">
<div class="yun_school_job_name"><span>  <?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['xjh_date'];?>
(<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['xjh_week'];?>
)<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['xjh_shour'];?>
-<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['xjh_ehour'];?>
</span></div> 
<div class="">
<div class="yun_school_xjh_info">
<a href="<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['com_url'];?>
" class="yun_school_xjh_a"> <?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['com_name'];?>
</a> <span class="yun_school_xjh_info_s">宣讲城市：</span><?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['city_two'];?>
 <span class="yun_school_xjh_info_s">宣讲高校：</span><a href="<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['sch_url'];?>
" class="yun_school_xjh_a"> <?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['sch_name'];?>
</a></div>
地址：<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['address'];?>

 </div> </div>
 <div class="yun_school_xjh_zt">
 <?php if ($_smarty_tpl->tpl_vars['xjhlist']->value['stime']<time()&&$_smarty_tpl->tpl_vars['xjhlist']->value['etime']>time()) {?>
 <font color="green">举办中</font>
 <?php } elseif ($_smarty_tpl->tpl_vars['xjhlist']->value['etime']<time()) {?>
 <font color="red">已举办</font>
 <?php } elseif ($_smarty_tpl->tpl_vars['xjhlist']->value['stime']>time()) {?>
 <?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?>
 <a href="javascript:;" onclick="showlogin()" class="school_show_listgz">关注</a>
 <?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['xjhlist']->value['xjhid_n']) {?>
        <a href="javascript:;"  onclick="layer_del('您确定要取消关注？', '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_url(array('m'=>'school','c'=>'del_xjh','id'=>$_tmp1),$_smarty_tpl);?>
');"  class="school_show_listgzygz">取消关注</a>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
         <a href="javascript:;" onclick="atnxjh('<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['uid'];?>
')" class="school_show_listgz">关注</a>
        <?php } else { ?>
            <a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能关注', 2, 8)" class="school_show_listgz">关注</a> 
        <?php }?>
    <?php }?>
    <?php }?>
 <?php }?>
 </div>
 <div class="yun_school_xjh_zt">
 <?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?>
 <a href="javascript:;" onclick="showlogin('1')" style="color:green;">我要报错</a>
 <?php } else { ?>
    <a href="javascript:;" onclick="reportxjh('<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['com_name'];?>
')" style="color:green;">我要报错</a>
 <?php }?>
 </div>
</li>

<?php }
if (!$_smarty_tpl->tpl_vars['xjhlist']->_loop) {
?>

<div class="school_show_nomsg">暂无宣讲会信息</div>
<?php } ?>
</ul>
<div class="clear"></div>
   <div class="search_pages">
          <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;
echo $_smarty_tpl->tpl_vars['totalshow']->value;?>
</div></div>
</div>

<div class="yun_school_xjh_right">
<div class="yun_school_xjh_right_tit">名企宣讲会信息推荐</div>
<ul class="yun_school_xjh_rlist">
<?php  $_smarty_tpl->tpl_vars['rlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("comlen"=>"8","limit"=>"5","item"=>"\'rlist\'","nocache"=>"")
;');$rlist=array();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`=1";
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid]=$config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}
		//关键字
		if($paramer["keyword"]){
			$com=$db->select_all("company","`name` like '%".$paramer["keyword"]."%'","uid");
			foreach($com as $v){
				$cuids[]=$v[uid];
			}
			$where.=" AND `uid` in (".@implode(",",$cuids).")";
		}
		//城市
		if($paramer["provinceid"]){
			$where.=" AND `provinceid`='".$paramer["provinceid"]."'";
		}
		if($paramer["cityid"]){
			$where.=" AND `cityid`='".$paramer["cityid"]."'";
		}
		if($paramer["three_cityid"]){
			$where.=" AND `three_cityid`='".$paramer["three_cityid"]."'";
		}
		//所属行业：
		if($paramer["level"]){
			$sch=$db->select_all("school_academy","`school_level`='".$paramer["level"]."'","id");
			foreach($sch as $v){
				$sids[]=$v[id];
			}
			$where.=" AND `schoolid` in (".@implode(",",$sids).")";
		}
		//用户uid
		if($paramer["uid"]){
			$where.=" AND `uid`='".$paramer["uid"]."'";
		}
		//院校uid
		if($paramer["sid"]){
			$where.=" AND `schoolid`='".$paramer["sid"]."'";
		}
		//近期，往期
		if($paramer["tp"]){
			$where.=" AND `etime`<'".time()."'";
		}else{
			$where.=" AND `etime`>'".time()."'";
		}
		if($paramer[adtime]){
			if($paramer[adtime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			if($paramer["tp"]){
					$where.=" AND stime>$beginToday";
				}else{
					$where.=" AND stime<$beginToday";
				}
    		}else{
    			$time=time();
				if($paramer["tp"]){
					$adtime = $time-($paramer[adtime]*86400);
					$where.=" AND stime>$adtime";
				}else{
					$adtime = $time+($paramer[adtime]*86400);
					$where.=" AND stime<$adtime";
				}
    		}
		}
		if($paramer["limit"]){
			$limit= " limit $paramer[limit]";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"school_xjh",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"0",$_smarty_tpl);
         
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order]";
		}else{
			$where .= " ORDER BY  `ctime`  ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		$rlist=$db->select_all("school_xjh",$where.$limit);
		if(is_array($rlist)){
			$cache_array = $db->cacheget();
			foreach($rlist as $v){
                $xjhid[]=$v['id'];
				$comuid[]=$v['uid'];
				$suid[]=$v['schoolid'];
    		}
            $atnlist=$db->select_all("atn","`xjhid` IN (".@implode(',',$xjhid).") and `uid`='".$_COOKIE['uid']."'");
			$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`logo`");
			$academy=$db->select_all("school_academy","`id` IN (".@implode(',',$suid).")","`id`,`schoolname`");
			$week=array("周日","周一","周二","周三","周四","周五","周六");
			foreach($rlist as $k=>$v){
				$rlist[$k]["city_two"] = $cache_array['city_name'][$v["cityid"]];
				$rlist[$k]["xjh_url"] = Url("school",array("c"=>"xjhshow","id"=>$v['id']));
				$rlist[$k]["com_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
				$rlist[$k]["sch_url"] = Url("school",array("c"=>"academyshow","id"=>$v['schoolid']));
				$rlist[$k]["ctime"] = date("Y-m-d",$v["ctime"]);
				$rlist[$k]["xjh_date"] = date("Y-m-d",$v["stime"]);
				$rlist[$k]["xjh_shour"] = date("H:i",$v["stime"]);
				$rlist[$k]["xjh_ehour"] = date("H:i",$v["etime"]);
				$rlist[$k]["xjh_week"] = $week[date("w",$v["stime"])];
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
						if($paramer[comlen]){
							$rlist[$k]["com_name"]=mb_substr($val['name'],0,$paramer[comlen],"utf-8");
						}else{
							$rlist[$k]["com_name"]=$val['name'];
						}
						if(!$val['logo'] || !file_exists(str_replace("./",APP_PATH,$val['logo']))){
							$rlist[$k]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$rlist[$k]['pic'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
						}
    				}
				}
				foreach($academy as $val){
					if($v['schoolid']==$val['id']&&$val['schoolname']){
    					$rlist[$k]["sch_name"]=$val['schoolname'];
    				}
				}
                foreach($atnlist as $val){
					if($v['id']==$val['xjhid']){
    					$rlist[$k]["xjhid_n"]=$val['xjhid'];
    				}
				}
			}
		}$rlist = $rlist; if (!is_array($rlist) && !is_object($rlist)) { settype($rlist, 'array');}
foreach ($rlist as $_smarty_tpl->tpl_vars['rlist']->key => $_smarty_tpl->tpl_vars['rlist']->value) {
$_smarty_tpl->tpl_vars['rlist']->_loop = true;
?>
<li>
<a href="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['com_url'];?>
" class="yun_school_xjh_right_jobname"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['com_name'];?>
</a> 
<div class="yun_school_xjh_right_jobinfo">[<?php echo $_smarty_tpl->tpl_vars['rlist']->value['city_two'];?>
] <?php echo $_smarty_tpl->tpl_vars['rlist']->value['sch_name'];?>
</div>
<div class="yun_school_xjh_right_jobtime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rlist']->value['stime'],'%m月%d日');?>
</div>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['rlist']->_loop) {
?>

<div class="">暂无宣讲会信息</div>
<?php } ?>
</ul>
</div>

</div>
<div class="clear"></div>
<div class="none" id="xjhreport">
  <div style="background:none;padding: 10px 20px 20px;">
    <input id="x_uid" value="" type="hidden"/>
    <input id="id" value="" type="hidden"/>
    <input id="c_name" value="" type="hidden"/>
    <div style="margin-bottom:10px;"><span style="width:120px; float:left;">错误宣讲会信息</span><em>
      <textarea rows="2" cols="38" id="e_reason" style="width:338px;height:60px;"></textarea>
      </em>
    </div>
    <div style="margin-bottom:10px;"><span style="width:120px; float:left;">正确的宣讲会信息</span><em>
      <textarea rows="2" cols="38" id="r_reason" style="width:338px;height:60px;"></textarea>
      </em>
    </div>
    <div style="margin-bottom:10px;"> <span style="width:120px; float:left;">验 证 码</span>
      <input type="text" style="height:30px;" id="report_authcode" style="float:left; margin-right:5px;" maxlength="4"/>
      <img id="vcodeimg" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /> 
      <a href="javascript:void(0);" onclick="checkCode('vcodeimg');">看不清?</a></div>
    <div> <span style="width:120px; float:left;">&nbsp;</span>
      <a class="yun_school_job_sq" onclick="xjhSub('vcodeimg');">提交</a>
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
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['school_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
</body><?php }} ?>
