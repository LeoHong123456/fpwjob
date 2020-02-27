<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:15:13
         compiled from "/www/fpwjob/uploads/app/template/train/subject.htm" */ ?>
<?php /*%%SmartyHeaderCode:17734427855e2e39a1d91549-91948792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaecdb3ab8de55e74f8b19c70253ffd149e35741' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/train/subject.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17734427855e2e39a1d91549-91948792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subject_index' => 0,
    'v' => 0,
    'subject_name' => 0,
    'subject_type' => 0,
    'subject_type_index' => 0,
    'subject_type_name' => 0,
    'config' => 0,
    'subjectkeyword' => 0,
    'keylist' => 0,
    'total' => 0,
    'rows' => 0,
    'uid' => 0,
    'usertype' => 0,
    'train_style' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e39a1eaa437_46848447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e39a1eaa437_46848447')) {function content_5e2e39a1eaa437_46848447($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="training_content training_w980">
<div class="training_cur ftl">
<div class="training_cur_l ftl"><a href="<?php echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);?>
">首页</a> > 培训课程 </div>
</div>

<div class="training_subject_search ftl ">

<div class="training_subject_search_list ftl">
<div class="training_subject_search_list_left ftl">课程分类</div>
<div class="training_subject_search_list_right ftl">
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'nid','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['nid']) {?>training_subject_search_cur<?php }?>">全部</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'nid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['nid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
<?php } ?>
</div>
</div>
<?php if ($_GET['nid']!=''&&$_GET['nid']!="0") {?>
<div class="training_subject_search_list ftl">
<div class="training_subject_search_list_left ftl">课程子类</div>
<div class="training_subject_search_list_right"><a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'tnid','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['tnid']) {?>training_subject_search_cur<?php }?>">全部</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_type']->value[$_GET['nid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'tnid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['tnid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
<?php } ?>
</div>
</div>
<?php }?>
<div class="training_subject_search_list ftl" >
<div class="training_subject_search_list_left ftl">开课类型</div>
<div class="training_subject_search_list_right"><a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'type','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['type']) {?>training_subject_search_cur<?php }?>">全部</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_type_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'type','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subject_type_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
<?php } ?>
</div>
</div>
<div class="training_subject_search_list ftl" >
<div class="training_subject_search_list_left ftl">关&nbsp;键&nbsp; 字</div>
<div class="training_subject_search_list_right ftl">

<div class="sub_search">
<form method="get" action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);
}?>">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?><input type="hidden" value="train" name="m" /><?php }?>
<input type="hidden" name="c" value="subject" />
<input type="text" name="keyword" value="" placeholder="搜索课程" class="Search_Courses_text  ftl">
<input type="submit" value="" class="Search_Courses_bth1 ftl">
</form>

</div>
</div>
</div>
<?php if ($_GET['type']||$_GET['nid']||$_GET['tnid']||$_GET['keyword']) {?>
<div class="Search_close_box">
<div><div class="Search_clear"> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subject'),$_smarty_tpl);?>
"> 清除所选</a></div>
<span class="Search_close_box_s">已选条件：</span></div>
<?php if ($_GET['nid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','untype'=>'nid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">课程分类：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_GET['nid']];?>
</a> <?php }?>
<?php if ($_GET['tnid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','untype'=>'tnid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_GET['tnid']];?>
</a> <?php }?>
<?php if ($_GET['type']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','untype'=>'type'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">上课时间：<?php echo $_smarty_tpl->tpl_vars['subject_type_name']->value[$_GET['type']];?>
</a> <?php }?> 
<?php if ($_GET['keyword']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_GET['keyword'];?>
</a> <?php }?> 
&nbsp; </div>
<?php }?>

</div>
<div class="training_subject_closex">
<div class="training_subject_title"><span class="training_subject_span">课程列表</span>
<?php if ($_smarty_tpl->tpl_vars['subjectkeyword']->value) {?>
<em class="training_subject_tag ftl">您是不是要找： 
<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"8","recom"=>"1","type"=>"9","item"=>"\'keylist\'","nocache"=>"")
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
?> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
" class="training_subject_tag_a" target="_blank"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?>
</em>
<?php } else { ?>
<em class="training_subject_tag ftl">&nbsp;</em>
<?php }?>
</div>
<div class="training_subject_c_box ftl  ">

<div class="training_subject_Sort ftl"><span class="sub_search_n ftl">共<span class="training_cur_b"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>个课程</span>
<div class="sltBar">
<ul class="sUl">
<li><a class="i_s <?php if ($_GET['order']=='') {?>i_s_curr<?php } else { ?>i_si<?php }?>" href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subject'),$_smarty_tpl);?>
">默认排序</a></li>
<?php if ($_GET['orderby']=='ctime_asc') {?>
<li><a class="i_s <?php if ($_GET['order']=='ctime') {?>i_s_curr<?php } else { ?>i_si<?php }?>" href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'orderby','v'=>'ctime_desc'),$_smarty_tpl);?>
"><i class="<?php if ($_GET['order']=='ctime'&&$_GET['t']=='asc') {?>i_s_up<?php } elseif ($_GET['order']=='ctime'&&$_GET['t']=='desc') {?>i_s_down<?php }?> png "></i>最新发布</a></li>
<?php } else { ?>
<li><a class="i_s <?php if ($_GET['order']=='ctime') {?>i_s_curr<?php } else { ?>i_si<?php }?>" href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'orderby','v'=>'ctime_asc'),$_smarty_tpl);?>
"><i class="<?php if ($_GET['order']=='ctime'&&$_GET['t']=='asc') {?>i_s_up<?php } elseif ($_GET['order']=='ctime'&&$_GET['t']=='desc') {?>i_s_down<?php }?> png "></i>最新发布</a></li>
<?php }?>
<?php if ($_GET['orderby']=='hits_asc') {?>
<li><a class="i_s <?php if ($_GET['order']=='hits') {?>i_s_curr<?php } else { ?>i_si<?php }?>" href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'orderby','v'=>'hits_desc'),$_smarty_tpl);?>
"><i class="<?php if ($_GET['order']=='hits'&&$_GET['t']=='asc') {?> i_s_up<?php } elseif ($_GET['order']=='hits'&&$_GET['t']=='desc') {?> i_s_down<?php }?> png"></i>关注度</a></li>
<?php } else { ?>
<li><a class="i_s <?php if ($_GET['order']=='hits') {?>i_s_curr<?php } else { ?>i_si<?php }?>" href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'subject','type'=>'orderby','v'=>'hits_asc'),$_smarty_tpl);?>
"><i class="<?php if ($_GET['order']=='hits'&&$_GET['t']=='asc') {?> i_s_up<?php } elseif ($_GET['order']=='hits'&&$_GET['t']=='desc') {?> i_s_down<?php }?> png"></i>关注度</a></li>
<?php }?>

<li>
<form method="get" action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);
}?>">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?><input type="hidden" value="train" name="m" /><?php }?>
<input type="hidden" name="c" value="subject" />
<span class="input-text input-price"><span><input name="minprice" class="price-field" type="text"></span><b>￥</b></span>
-
<span class="input-text input-price"><span><input name="maxprice" class="price-field" type="text"></span><b>￥</b></span>
<input type="submit" value="确定" class="training_subject_Sort_sub">
</form>
</li>
</ul>
</div>
</div>
</div>
<div class="training_subject_content ftl">
<div class="training_kc_box ftl mt15">

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="training_kc_list">
<div class="training_kc_boxpic ftl"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank">
<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="280" height="158" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);">
</a></div>

<div class="training_kc_info" style="width:440px;">
<div class="training_kc_name"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
<div class="training_kc_jg"><span class="training_kc_jg_n">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span> 元</div>
<div class="training_kc_p" ><span class="training_Courses_span">课程分类：</span><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value['tnid']];?>
  <span class="training_Courses_span training_Courses_span_ml">开课类型：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</div>

<div class="training_kc_p" ><span class="training_Courses_span">机构名称：</span> <?php echo $_smarty_tpl->tpl_vars['v']->value['comname'];?>
</div>
<div class="training_kc_p">
<span class="training_Courses_span" >培训地址：</span> <?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</div>

</div>




<div class="training_Courses_zx ftr"><a <?php if ($_smarty_tpl->tpl_vars['uid']->value) {
if ($_smarty_tpl->tpl_vars['usertype']->value==4) {?> href="javascript:;" onclick="layer.msg('只有个人用户和hr才可以咨询课程！',2,8)"<?php } else { ?>href="javascript:zixun('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"<?php }
} else { ?>href="javascript:showlogin('1');"<?php }?> class="training_Courses_zx_a">立即咨询</a>
<div class="training_Courses_zx_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['baomingnum'];?>
人报名</div>

</div>


</div>

<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
<div class="seachno">
  <div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/images/search-no.gif" width="144" height="102"></div>
  <div class="listno-content"> <strong>很抱歉，没有找到满足条件的课程</strong><br>
    <span> 建议您：<br>
    1、适当减少已选择的条件<br>
    2、适当删减或更改搜索关键字<br>
    </span> <span> 热门关键字：<br>
<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"8","recom"=>"1","type"=>"9","item"=>"\'keylist\'","nocache"=>"")
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
?> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
" class="jos_tag_a" target="_blank"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?></span></div>
</div>
<?php } ?>
</div>
<div class="clear"></div>
<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/right.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<div id="zixun" style="width:400px;background:#fff; " class="none">
  <form name="myform" method="post" target="supportiframe" action="<?php echo smarty_function_url(array('m'=>'train','c'=>'zixun'),$_smarty_tpl);?>
" onsubmit="return check_zixun();">
    <ul class="Sign_up_box" style="padding:10px;">
        <li style="margin-top:10px;"><span class="Sign_up_box_span">电话：</span>
        <input type="text" id="phone" name="phone" class="txt_input" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')"></li>
        <li style="margin-top:10px;"><span class="Sign_up_box_span">留言：</span>
        <textarea class="txt_textarea" id="content" name="content"></textarea></li>
        <li style="margin-top:10px;"><span class="Sign_up_box_span">&nbsp;</span>
        <input type="submit" name="submit" value="提交" class="txt_input_submit"></li>
        <input type="hidden" name="sid" value="" />
        <input type="hidden" name="s_uid" value="" />
    </ul>
</form>
</div></div>

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
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/js/train_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
