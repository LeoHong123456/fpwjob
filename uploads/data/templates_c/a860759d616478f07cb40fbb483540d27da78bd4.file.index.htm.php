<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:19:56
         compiled from "/www/fpwjob/uploads/app/template/default/part/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:1005830615e2e3abc009bd6-71390726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a860759d616478f07cb40fbb483540d27da78bd4' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/part/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1005830615e2e3abc009bd6-71390726',
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
    'city_name' => 0,
    'city_type' => 0,
    'tid' => 0,
    'city_index' => 0,
    'pid' => 0,
    'key' => 0,
    'cid' => 0,
    'partdata' => 0,
    'v' => 0,
    'partclass_name' => 0,
    'pl' => 0,
    'total' => 0,
    'pagenav' => 0,
    'usertype' => 0,
    'uid' => 0,
    'partlist' => 0,
    'partkeyword' => 0,
    'keylist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3abc2062c5_18367199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3abc2062c5_18367199')) {function content_5e2e3abc2062c5_18367199($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
if (!is_callable('smarty_function_ad')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.ad.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
/style/part.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<body  class="body_bg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div >
<div class="wapper">
  <div class="current_Location icon"> 您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <span>兼职</span> </div>
  <div class="yun_part_left">
    <div class="yun_part_left_box">
      <form action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_partdir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'part'),$_smarty_tpl);
}?>" method="get" onsubmit="return search_keyword(this,'请输入职位名称的关键字');">
        <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_partdir']) {?>
        <input type="hidden" name="m" value="part" id="m" />
        <?php }?> 
  
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']==1&&$_smarty_tpl->tpl_vars['config']->value['cityname']&&$_smarty_tpl->tpl_vars['config']->value['cityname']!=$_smarty_tpl->tpl_vars['config']->value['sy_indexcity']) {?>
			<div class="Search_citybox">
				<div class="Search_cityboxname"> 按地区：</div>
				<div class="Search_citybox_right">
					<div class="Search_cityboxright">
						<div class="search_secondcity_list ">
							<?php if (!$_GET['cityid']&&$_GET['three_cityid']) {?> 
								<a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;">
									<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>

								</a> 
							<?php } else { ?>
								
								<?php if ($_GET['cityid']) {?>
									<?php if (is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?> 
										<a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if (!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a> 
										
										<?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?> 
											<a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a> 
										<?php } ?>

									<?php } else { ?> 
									
										<a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a> 

									<?php }?>
					
								<?php } else { ?>
					
									<?php if (is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']])) {?> 
										<a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'cityid'),$_smarty_tpl);?>
" class="city_name <?php if (!$_GET['cityid']) {?>city_name_active<?php }?>">不限</a> 
										
										<?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?> 
											<a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
										<?php } ?>
									<?php } else { ?> 
										<a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a>
									<?php }?>

								<?php }?>

							<?php }?> 
						</div>
					</div>
				</div>
			</div>
        
		<?php } else { ?>

			<div class="Search_citybox">
				<div class="Search_cityboxname"> 按地区：</div>
				<div class="Search_citybox_right">
					<div class="Search_cityall none"> 
						<a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="city_name">全部</a> 
						<?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pid']->key;
?> 
							<a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']==$_smarty_tpl->tpl_vars['pid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['pid']->value];?>
</a> 
						<?php } ?> 
					</div>

					<div class="Search_cityboxright"> 
						<a href="javascript:;" onclick="acityshow('1')" class="search_city_list_cur <?php if ($_GET['provinceid']&&!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>search_city_active<?php }?>  <?php if (!$_GET['provinceid']) {?>none<?php }?>  acity_two" style="text-decoration:none;cursor:pointer;">

							<span class="search_city_p"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</span>
							<i class="search_city_p_jt"></i>
							<i class="search_city_list_line"></i>

						</a> 
						
						<a href="javascript:;" <?php if ($_GET['cityid']) {?>onclick="acityshow('2')"<?php }?> class="search_city_list_cur <?php if ($_GET['cityid']&&is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>search_city_active<?php }?> <?php if (!$_GET['provinceid']||!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>none<?php }?> acity_three" style="text-decoration:none;cursor:pointer;">
							<span class="search_city_p">
								<?php if (!$_GET['cityid']) {?>不限<?php } else {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];
}?>
							</span>
							<i class="search_city_list_line"></i>
						</a> 
						
						<a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="search_city_list_all <?php if (!$_GET['provinceid']) {?>city_name_active<?php }?>">全部</a>

						<div class="search_city_list">
							<?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pid']->key;
?> 
								<a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
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
						<a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a> 
						
						<?php  $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cid']->key => $_smarty_tpl->tpl_vars['cid']->value) {
$_smarty_tpl->tpl_vars['cid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cid']->key;
?> 
							<a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['cid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['cid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['cid']->value];?>
</a> 
						<?php } ?> 
					</div>

					<div class="Search_cityboxclose <?php if (!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>none<?php }?>" id="acity_three"> 
						<a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a> 
						
						<?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?> 
							<a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
						<?php } ?> 
					</div>
				</div>
			</div>
        <?php }?> 

       
        <div class="Search_jobs_form_list">
          <div class="Search_cityboxname"> 按类型：</div>
          <div class="Search_cityboxright ">  
            <a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'part_type','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['part_type']<1) {?>Search_jobs_sub_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'part_type','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['part_type']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?> </div>
        </div>
        <div class="Search_jobs_form_list">
          <div class="Search_cityboxname"> 关键字：</div>
          <input type="text" name="keyword" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入职位名称的关键字<?php }?>" onclick="if(this.value=='请输入职位名称的关键字'){this.value=''}" onblur="if(this.value==''){this.value='请输入职位名称的关键字'}" class="Search_jobs_text ">
          <input type="submit" value="搜索" class="Search_jobs_submit yun_bg_color">
        </div>
      </form>
      <?php if ($_GET['keyword']||$_GET['provinceid']||$_GET['cityid']||$_GET['three_cityid']||$_GET['part_type']||$_GET['cycle']) {?>
      <div class="Search_close_box">
        <div>
          <div class="Search_clear"> <a href="<?php echo smarty_function_url(array('m'=>'part'),$_smarty_tpl);?>
"> 清除所选</a></div>
          <span class="Search_close_box_s">已选条件：</span> </div>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['cityid']==''&&$_smarty_tpl->tpl_vars['config']->value['three_cityid']=='') {?> 
        <?php if ($_GET['provinceid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'provinceid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">工作地点：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a> <?php }?> 
        <?php if ($_GET['cityid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a> <?php }?> 
        <?php }?>
        
        <?php if ($_GET['three_cityid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>
</a> <?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['part_type']]) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'part_type'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">类型：<?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['part_type']];?>
</a> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['cycle']]) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'cycle'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">周期：<?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['cycle']];?>
</a> <?php }?>&nbsp; 
        <?php if ($_GET['keyword']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'part','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_GET['keyword'];?>
</a> <?php }?> </div>
      <?php }?> </div>
    <div class="yun_part_left_tit"> <span class="yun_part_left_tit_s"><i class="yun_part_left_tit_line"></i>兼职招聘</span>
      <div class="job_list_selct fr">
        <div class="part_job_js_box">
          <input class="job_select" id="BillingCycleButton" type="button" value="<?php if ($_GET['cycle']) {
echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['cycle']];
} else { ?>结算方式<?php }?>" onclick="ShowPartDiv('BillingCycle');"/>
          <ul class="job_sel_list none" id="BillingCycle">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_billing_cycle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <li><a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'cycle','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
            <?php } ?>
          </ul>
        </div>
        <ul class="search_Filter_list">
          <li <?php if ($_GET['order']=='lastdate') {?>class="search_Filter_current"<?php }?>> <a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'order','v'=>'lastdate'),$_smarty_tpl);?>
"><span>更新时间</span><i class="search_Filter_icon"></i></a> </li>
          <li <?php if ($_GET['order']=='addtime') {?>class="search_Filter_current"<?php }?>> <a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'order','v'=>'addtime'),$_smarty_tpl);?>
"><span>发布时间</span><i class="search_Filter_icon"></i></a> </li>
          <?php if ($_GET['cycle']) {?>
          <li <?php if ($_GET['order']=='salary') {?>class="search_Filter_current"<?php }?>> <a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'order','v'=>'salary'),$_smarty_tpl);?>
"><span>薪水</span><i class="search_Filter_icon"></i></a> </li>
          <?php }?>
          <li <?php if ($_GET['order']=='hits') {?>class="search_Filter_current"<?php }?>> <a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'order','v'=>'hits'),$_smarty_tpl);?>
"><span>热度</span><i class="search_Filter_icon"></i></a> </li>
        </ul>
      </div>
    </div>
    
   
    
    <?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
global $db,$db_config,$config;
		$time = time();


		//可以做缓存
        eval('$paramer=array("item"=>"\'pl\'","ispage"=>"1","limit"=>"10","cycle"=>"\'auto.cycle\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","order"=>"\'auto.order\'","type"=>"\'auto.part_type\'","keyword"=>"\'auto.keyword\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}

    if(isUseSphinx()){//测试阶段，加false避开执行sphinx查询
      $sphinx = new sphinx();
      $where = array();
      $queryStr = array();

      $queryStr [] = "(@deadline > $time | @deadline = 0)";
      $where[] = array("setFilter", "state", array(1));
      $where[] = array("setFilter", "r_status", array(2), true);

      if($paramer[noid]){
        $where[] = array("setFilter", "id", array($paramer[noid]), true);
      }
      //关键字
      if($paramer[keyword]){
        $where["keywords"] = $paramer["keyword"];
      }
      //城市大类
      if($paramer[provinceid]){
        $where[] = array("setFilter", "provinceid", array($paramer["provinceid"]));
      }
      //城市子类
      if($paramer['cityid']){
        $queryStr [] = "(@provinceid = $paramer[cityid] or 
          @cityid = $paramer[cityid] or
          @three_cityid = $paramer[cityid] )";
      }

      //城市三级子类
      if($paramer['three_cityid']){
        $pThree = explode(",", $paramer[three_cityid]);
        $where[] = array("setFilter", "three_cityid", array($pThree)); 
      }
      if($paramer['cityin']){
        $pThree = explode(",", $paramer[cityin]);
        $where[] = array("setFilter", "three_cityid", array($pThree)); 
      }
      //推荐兼职
      if($paramer[rec]){
        $where[] = array("setFilterRange", "rec_time", $time, 99999999);
      }
      //工作类型
      if($paramer[type]){
        $where[] = array("setFilter", "type", array($paramer[type]) ); 
      }
      //结算周期
      if($paramer[cycle]){
        $where[] = array("setFilter", "billing_cycle", array($paramer[cycle]) ); 
      }

      if(count($queryStr) > 0){
        $where["queryStr"] = $queryStr;
      }

      //排序字段默认为更新时间
      $orderField = "lastupdate";
      if($paramer[order] && $paramer[order]!="lastdate"){
        $orderField = str_replace("'","",$paramer[order]);
      }

      //排序规则 默认为倒序
      $orderType = "DESC";
      if(strtoupper(trim($paramer[sort])) == "ASC"){
        $orderType = "ASC";
      }

      $sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

      if($paramer[ispage]){
        $limitArr = PageNav($paramer,$_GET,"partjob",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
        $ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "partjob");
      }
      else if($paramer[limit]){
        $ids = $sphinx->getIds($where, 0, $paramer[limit], "partjob");
      }
      else{
        $ids = $sphinx->getIds($where, 0, 20, "partjob");
      }
            
      if(count(ids) > 0){
        $ids = implode(",", $ids);
        $where = "id in ($ids) order by field(id, $ids) ";
      }
      else{
        $where = "0";
      }
      
      $limit = "";
    }//end if($config["useSphinx"])
    else{
      $where = "(`deadline`>'$time' or `deadline`=0) and `state`=1 and `r_status`<>2";
        
      if($paramer[noid]){
        $where.=" and `id`<>'".$paramer['noid']."'";
      }
      
      //关键字
      if($paramer[keyword]){
        $where .= " AND `name` LIKE '%".$paramer[keyword]."%'";
      }
      //城市大类
      if($paramer[provinceid]){
        $where .= " AND `provinceid` = $paramer[provinceid]";
      }
      //城市子类
      if($paramer['cityid']){
        $where .= " AND (`provinceid`=$paramer[cityid] or `cityid`=$paramer[cityid] or `three_cityid`=$paramer[cityid])";
      }
      //城市三级子类
      if($paramer['three_cityid']){
        $where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
      }
      if($paramer['cityin']){
        $where .= " AND `three_cityid` IN ($paramer[cityin])";
      }
      //推荐兼职
      if($paramer[rec]){
        $where.=" AND `rec_time`>".time();
      }
      //工作类型
      if($paramer[type]){
        $where .= " AND `type` = $paramer[type]";
      }
      //结算周期
      if($paramer[cycle]){
        $where .= " AND `billing_cycle` = $paramer[cycle]";
      }
      //按照职位名称匹配
      /*if($paramer[keyword]){
        $where1[]="`name` LIKE '%".$paramer[keyword]."%'";
        include PLUS_PATH."/city.cache.php";
        foreach($city_name as $k=>$v){
          if(strpos($v,$paramer[keyword])!==false){
            $cityid[]=$k;
          }
        }
        if(is_array($cityid)){
          foreach($cityid as $value){
            $class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
          }
          $where1[]=@implode(" or ",$class);
        }
        $where.=" AND (".@implode(" or ",$where1).")";
      }*/

      

      //查询条数
      if($paramer[limit]){
        $limit = " limit ".$paramer[limit];
      }
      if($paramer[ispage]){
        $limit = PageNav($paramer,$_GET,"partjob",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
      }
      //排序字段默认为更新时间
      if($paramer[order] && $paramer[order]!="lastdate"){
        $order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
      }else{
        $order = " ORDER BY `lastupdate` ";
      }
      //排序规则 默认为倒序
      if($paramer[sort]){
        $sort = $paramer[sort];
      }else{
        $sort = " DESC";
      }
      $where.=$order.$sort;
    }//end if($config["useSphinx"]) else
		
		$pl = $db->select_all("partjob",$where.$limit);
		if(is_array($pl)){
			foreach($pl as $v){
    			$comuids[]=$v['uid'];
    		}
			$comlist=$db->select_all("company","`uid` in(".@implode(',',$comuids).")","`uid`,`shortname`");
			foreach($pl as $key=>$value){
				$pl[$key] = $db->part_array_action($value,$cache_array);
				$pl[$key][stime] = date("Y-m-d",$value[sdate]);
				$pl[$key][etime] = date("Y-m-d",$value[edate]);
				$pl[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
				$time=$value['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$pl[$key]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$pl[$key]['time'] = "昨天";
				}elseif($time>$beginToday){
					$pl[$key]['time'] = "今天";
				}else{
					$pl[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				foreach($comlist as $v){
    				if($value[uid]==$v[uid]&&$v[shortname]){
    					$pl[$key]['com_name'] = $v[shortname];
    				}
    			}
				//截取职位名称
				if($paramer[namelen]){
					$pl[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
				}
				//构建职位伪静态URL
				$pl[$key][job_url] = Url("part",array("c"=>"show","id"=>$value[id]),"1");
				if($paramer[keyword]){
					$pl[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$pl[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$pl[$key][name_n]);
					$pl[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					/*$pl[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);*/
				}
			}
			if(is_array($pl)){
				if($paramer[keyword]!=""&&!empty($pl)){
					addkeywords('2',$paramer[keyword]);
				}
			}
		}$pl = $pl; if (!is_array($pl) && !is_object($pl)) { settype($pl, 'array');}
foreach ($pl as $_smarty_tpl->tpl_vars['pl']->key => $_smarty_tpl->tpl_vars['pl']->value) {
$_smarty_tpl->tpl_vars['pl']->_loop = true;
?>
    <div class="yun_part_joblist">
    <?php if ($_smarty_tpl->tpl_vars['pl']->value['rec_time']>time()) {?> <div class="yun_part_jobtj"><span class="yun_part_jobtj_n">推荐优选兼职</span></div>  <?php }?>
     <div class="yun_part_jobname"><a href="<?php echo $_smarty_tpl->tpl_vars['pl']->value['job_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['pl']->value['name'];?>
</a></div>
      <div class="yun_part_jobinfo"> <span class="yun_part_jobinfo_add">工作地点：<?php if ($_smarty_tpl->tpl_vars['pl']->value['job_city_three']) {?>
        <?php echo $_smarty_tpl->tpl_vars['pl']->value['job_city_two'];?>
-<?php echo $_smarty_tpl->tpl_vars['pl']->value['job_city_three'];?>

        <?php } elseif ($_smarty_tpl->tpl_vars['pl']->value['job_city_two']) {?>
        <?php echo $_smarty_tpl->tpl_vars['pl']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['pl']->value['job_city_two'];?>

        <?php }?></span> <span class="yun_part_jobinfo_s">招聘人数：<?php echo $_smarty_tpl->tpl_vars['pl']->value['number'];?>
人</span> <span class="yun_part_jobinfo_s">所属类型：<?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['pl']->value['type']];?>
</span> <span class="yun_part_jobinfo_s">更新日期： <?php if ($_smarty_tpl->tpl_vars['pl']->value['time']=='今天'||$_smarty_tpl->tpl_vars['pl']->value['time']=='昨天') {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['pl']->value['time'];?>
</span> <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['pl']->value['time'];?>

        <?php }?></span></div>
      <span class="yun_part_jobxz"><em class="yun_part_jobxz_n"><?php echo $_smarty_tpl->tpl_vars['pl']->value['salary'];?>
</em> <?php echo $_smarty_tpl->tpl_vars['pl']->value['job_salary_type'];?>
 </span> <span class="yun_part_jobjs"><?php echo $_smarty_tpl->tpl_vars['pl']->value['job_billing_cycle'];?>
</span> </div>
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
    <div class="seachno">
      <div class="seachno_left"> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif" width="144" height="102"></div>
      <div class="listno-content" style="margin-left:30px;"> <strong>很抱歉，没有找到满足条件的兼职</strong><br>
        <span> 建议您：<br>
        1、适当减少已选择的条件<br>
        2、适当删减或更改搜索关键字<br>
        </span> </div>
    </div>
    <?php }?>
    <div class="clear"></div>
    <div class="pages fl" style="padding-top:20px; padding-bottom:10px;"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
 </div>
  </div>
  <div class="job_right fr">
    <div class="job_right_one fl">
      <div class="job_part_img"><?php echo smarty_function_ad(array('cid'=>68,'id'=>226),$_smarty_tpl);?>
</div>
      <div class="job_part">
        <div class="job_part_h fl">我要招兼职人才</div>
        <div class="job_state fl"> 发布兼职职位，让优质的求职者投身于你们的工作之中 </div>
        <?php if ($_smarty_tpl->tpl_vars['usertype']->value==2) {?> <a class="job_bth" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=partadd">发布兼职</a> <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <a class="job_bth" onclick="layer.msg('只有企业用户才能发布兼职！', 2, 8)" href="javascript:void(0);">发布兼职</a> <?php } else { ?> <a class="job_bth" onclick="showlogin('2');"  href="javascript:void(0);">发布兼职</a> <?php }?>
        <?php }?> </div>
    </div>
    <div class="yun_part_tjbox">
      <div class="yun_part_tjbox_h1"><i class="yun_part_tjbox_h1_n"></i><span class="yun_part_tjbox_h1_s">优选兼职</span></div>
      <div class="yun_part_tjbox_list">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['partlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partlist']->_loop = false;
global $db,$db_config,$config;
		$time = time();


		//可以做缓存
        eval('$paramer=array("item"=>"\'partlist\'","namelen"=>"10","rec"=>"1","limit"=>"10","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}

    if(isUseSphinx()){//测试阶段，加false避开执行sphinx查询
      $sphinx = new sphinx();
      $where = array();
      $queryStr = array();

      $queryStr [] = "(@deadline > $time | @deadline = 0)";
      $where[] = array("setFilter", "state", array(1));
      $where[] = array("setFilter", "r_status", array(2), true);

      if($paramer[noid]){
        $where[] = array("setFilter", "id", array($paramer[noid]), true);
      }
      //关键字
      if($paramer[keyword]){
        $where["keywords"] = $paramer["keyword"];
      }
      //城市大类
      if($paramer[provinceid]){
        $where[] = array("setFilter", "provinceid", array($paramer["provinceid"]));
      }
      //城市子类
      if($paramer['cityid']){
        $queryStr [] = "(@provinceid = $paramer[cityid] or 
          @cityid = $paramer[cityid] or
          @three_cityid = $paramer[cityid] )";
      }

      //城市三级子类
      if($paramer['three_cityid']){
        $pThree = explode(",", $paramer[three_cityid]);
        $where[] = array("setFilter", "three_cityid", array($pThree)); 
      }
      if($paramer['cityin']){
        $pThree = explode(",", $paramer[cityin]);
        $where[] = array("setFilter", "three_cityid", array($pThree)); 
      }
      //推荐兼职
      if($paramer[rec]){
        $where[] = array("setFilterRange", "rec_time", $time, 99999999);
      }
      //工作类型
      if($paramer[type]){
        $where[] = array("setFilter", "type", array($paramer[type]) ); 
      }
      //结算周期
      if($paramer[cycle]){
        $where[] = array("setFilter", "billing_cycle", array($paramer[cycle]) ); 
      }

      if(count($queryStr) > 0){
        $where["queryStr"] = $queryStr;
      }

      //排序字段默认为更新时间
      $orderField = "lastupdate";
      if($paramer[order] && $paramer[order]!="lastdate"){
        $orderField = str_replace("'","",$paramer[order]);
      }

      //排序规则 默认为倒序
      $orderType = "DESC";
      if(strtoupper(trim($paramer[sort])) == "ASC"){
        $orderType = "ASC";
      }

      $sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

      if($paramer[ispage]){
        $limitArr = PageNav($paramer,$_GET,"partjob",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
        $ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "partjob");
      }
      else if($paramer[limit]){
        $ids = $sphinx->getIds($where, 0, $paramer[limit], "partjob");
      }
      else{
        $ids = $sphinx->getIds($where, 0, 20, "partjob");
      }
            
      if(count(ids) > 0){
        $ids = implode(",", $ids);
        $where = "id in ($ids) order by field(id, $ids) ";
      }
      else{
        $where = "0";
      }
      
      $limit = "";
    }//end if($config["useSphinx"])
    else{
      $where = "(`deadline`>'$time' or `deadline`=0) and `state`=1 and `r_status`<>2";
        
      if($paramer[noid]){
        $where.=" and `id`<>'".$paramer['noid']."'";
      }
      
      //关键字
      if($paramer[keyword]){
        $where .= " AND `name` LIKE '%".$paramer[keyword]."%'";
      }
      //城市大类
      if($paramer[provinceid]){
        $where .= " AND `provinceid` = $paramer[provinceid]";
      }
      //城市子类
      if($paramer['cityid']){
        $where .= " AND (`provinceid`=$paramer[cityid] or `cityid`=$paramer[cityid] or `three_cityid`=$paramer[cityid])";
      }
      //城市三级子类
      if($paramer['three_cityid']){
        $where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
      }
      if($paramer['cityin']){
        $where .= " AND `three_cityid` IN ($paramer[cityin])";
      }
      //推荐兼职
      if($paramer[rec]){
        $where.=" AND `rec_time`>".time();
      }
      //工作类型
      if($paramer[type]){
        $where .= " AND `type` = $paramer[type]";
      }
      //结算周期
      if($paramer[cycle]){
        $where .= " AND `billing_cycle` = $paramer[cycle]";
      }
      //按照职位名称匹配
      /*if($paramer[keyword]){
        $where1[]="`name` LIKE '%".$paramer[keyword]."%'";
        include PLUS_PATH."/city.cache.php";
        foreach($city_name as $k=>$v){
          if(strpos($v,$paramer[keyword])!==false){
            $cityid[]=$k;
          }
        }
        if(is_array($cityid)){
          foreach($cityid as $value){
            $class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
          }
          $where1[]=@implode(" or ",$class);
        }
        $where.=" AND (".@implode(" or ",$where1).")";
      }*/

      

      //查询条数
      if($paramer[limit]){
        $limit = " limit ".$paramer[limit];
      }
      if($paramer[ispage]){
        $limit = PageNav($paramer,$_GET,"partjob",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
      }
      //排序字段默认为更新时间
      if($paramer[order] && $paramer[order]!="lastdate"){
        $order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
      }else{
        $order = " ORDER BY `lastupdate` ";
      }
      //排序规则 默认为倒序
      if($paramer[sort]){
        $sort = $paramer[sort];
      }else{
        $sort = " DESC";
      }
      $where.=$order.$sort;
    }//end if($config["useSphinx"]) else
		
		$partlist = $db->select_all("partjob",$where.$limit);
		if(is_array($partlist)){
			foreach($partlist as $v){
    			$comuids[]=$v['uid'];
    		}
			$comlist=$db->select_all("company","`uid` in(".@implode(',',$comuids).")","`uid`,`shortname`");
			foreach($partlist as $key=>$value){
				$partlist[$key] = $db->part_array_action($value,$cache_array);
				$partlist[$key][stime] = date("Y-m-d",$value[sdate]);
				$partlist[$key][etime] = date("Y-m-d",$value[edate]);
				$partlist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
				$time=$value['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$partlist[$key]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$partlist[$key]['time'] = "昨天";
				}elseif($time>$beginToday){
					$partlist[$key]['time'] = "今天";
				}else{
					$partlist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				foreach($comlist as $v){
    				if($value[uid]==$v[uid]&&$v[shortname]){
    					$partlist[$key]['com_name'] = $v[shortname];
    				}
    			}
				//截取职位名称
				if($paramer[namelen]){
					$partlist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
				}
				//构建职位伪静态URL
				$partlist[$key][job_url] = Url("part",array("c"=>"show","id"=>$value[id]),"1");
				if($paramer[keyword]){
					$partlist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$partlist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$partlist[$key][name_n]);
					$partlist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					/*$partlist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);*/
				}
			}
			if(is_array($partlist)){
				if($paramer[keyword]!=""&&!empty($partlist)){
					addkeywords('2',$paramer[keyword]);
				}
			}
		}$partlist = $partlist; if (!is_array($partlist) && !is_object($partlist)) { settype($partlist, 'array');}
foreach ($partlist as $_smarty_tpl->tpl_vars['partlist']->key => $_smarty_tpl->tpl_vars['partlist']->value) {
$_smarty_tpl->tpl_vars['partlist']->_loop = true;
?>
          <li>
            <div class="yun_part_tjbox_jobname"><a href="<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['partlist']->value['name_n'];?>
</a></div>
            <div class="yun_part_tjbox_jobxz"><em class="yun_part_tjbox_jobxz_n"><?php echo $_smarty_tpl->tpl_vars['partlist']->value['salary'];?>
</em><?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_salary_type'];?>
</div>
            <div class="yun_part_tjbox_jobinfo"> <em class=""><?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_two'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_three'];?>
</em> <span class="yun_part_tjbox_jobtime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['partlist']->value['lastupdate'],"%Y-%m-%d");?>
更新</span> </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
       <?php if ($_smarty_tpl->tpl_vars['partkeyword']->value) {?>
    <div class="yun_part_tjbox">
      <div class="yun_part_tjbox_h1"><i class="yun_part_tjbox_h1_n"></i><span class="yun_part_tjbox_h1_s">热门兼职</span></div>
      <div class="yun_part_tjbox_tag">
         <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"30","type"=>"2","item"=>"\'keylist\'","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}elseif($v['type']=="6"){
						$v['url'] = Url("lietou",array("c"=>"service","keyword"=>$v['key_name']));
						$v['type_name']='猎头';
					}elseif($v['type']=="7"){
						$v['url'] = Url("lietou",array("c"=>"post","keyword"=>$v['key_name']));
						$v['type_name']='猎头职位';
					}else if($v['type']=="9"){
						$v['url'] = Url("train",array("c"=>"subject","keyword"=>$v['key_name']));
						$v['type_name']='培训课程';
					}else if($v['type']=="10"){
						$v['url'] = Url("train",array("c"=>"agency","keyword"=>$v['key_name']));
						$v['type_name']='培训机构';
					}else if($v['type']=="11"){
						$v['url'] = Url("train",array("c"=>"teacher","keyword"=>$v['key_name']));
						$v['type_name']='培训师';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?> 
				  <a href="<?php echo smarty_function_listurl(array('m'=>'part','type'=>'keyword','v'=>$_smarty_tpl->tpl_vars['keylist']->value['key_title']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> 
				  <?php } ?>
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
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/part.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
