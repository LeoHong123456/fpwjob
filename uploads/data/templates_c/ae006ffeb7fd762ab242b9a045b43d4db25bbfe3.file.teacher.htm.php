<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:21:18
         compiled from "/www/fpwjob/uploads/app/template/train/teacher.htm" */ ?>
<?php /*%%SmartyHeaderCode:7678144475e2e3b0e6547c4-40042090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae006ffeb7fd762ab242b9a045b43d4db25bbfe3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/train/teacher.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7678144475e2e3b0e6547c4-40042090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subject_index' => 0,
    'v' => 0,
    'subject_name' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'config' => 0,
    'teacherkeyword' => 0,
    'keylist' => 0,
    'total' => 0,
    'rows' => 0,
    'usertype' => 0,
    'uid' => 0,
    'train_style' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3b0e828570_31000870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3b0e828570_31000870')) {function content_5e2e3b0e828570_31000870($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="training_content training_w980">
  <div class="training_cur ftl">
    <div class="training_cur_l ftl"><a href="<?php echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);?>
">首页</a> > 培训师 </div>
  </div>
  <div class="training_subject_search ftl ">
    <div class="training_subject_search_list ftl">
      <div class="training_subject_search_list_left ftl">擅长领域</div>
      <div class="training_subject_search_list_right ftl"> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','type'=>'sid','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['sid']) {?>training_subject_search_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'sid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['sid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?> </div>
    </div>
    <?php if (!$_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>
    <div class="training_subject_search_list ftl">
      <div class="training_subject_search_list_left ftl">所在地区</div>
      <div class="training_subject_search_list_right ftl"> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['provinceid']) {?>training_subject_search_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?> </div>
    </div>
    <?php }?>
    
    <?php if ($_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>
    <div class="training_subject_search_list ftl">
      <div class="training_subject_search_list_left ftl">所在城市</div>
      <div class="training_subject_search_list_right ftl"> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['cityid']) {?>training_subject_search_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?> </div>
    </div>
    <?php } elseif ($_GET['provinceid']&&$_GET['cityid']&&!$_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]) {?>
    <div class="training_subject_search_list ftl">
      <div class="training_subject_search_list_left ftl">所在城市</div>
      <div class="training_subject_search_list_right ftl"> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['cityid']) {?>training_subject_search_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?> </div>
    </div>
    <?php }?>
    
    <?php if ($_GET['cityid']&&$_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]) {?>
    <div class="training_subject_search_list ftl">
      <div class="training_subject_search_list_left ftl">所在县区</div>
      <div class="training_subject_search_list_right ftl"> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['three_cityid']) {?>training_subject_search_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'three_cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?> </div>
    </div>
    <?php }?>
    <div class="training_subject_search_list ftl" >
      <div class="training_subject_search_list_left ftl">擅长行业</div>
      <div class="training_subject_search_list_right  ftl"> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','type'=>'hy','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['hy']) {?>training_subject_search_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'hy'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['hy']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?> </div>
    </div>
    <div class="training_subject_search_list ftl">
      <div class="training_subject_search_list_left ftl">关&nbsp;键&nbsp; 字</div>
      <div class="training_subject_search_list_right ftl">
        <div class="sub_search">
          <form method="get" action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);
}?>">
            <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?>
            <input type="hidden" value="train" name="m" />
            <?php }?>
            <input type="hidden" name="c" value="teacher" />
            <input type="text" name="keyword" value="" placeholder="搜索培训师"  class="Search_Courses_text  ftl">
            <input type="submit" value="" class="Search_Courses_bth1 ftl">
          </form>
        </div>
      </div>
    </div>
    <?php if ($_GET['sid']||$_GET['hy']||$_GET['provinceid']||$_GET['cityid']||$_GET['three_cityid']||$_GET['keyword']) {?>
    <div class="Search_close_box">
      <div>
        <div class="Search_clear"> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'teacher'),$_smarty_tpl);?>
"> 清除所选</a></div>
        <span class="Search_close_box_s">已选条件：</span></div>
      <?php if ($_GET['sid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'sid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">擅长领域：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_GET['sid']];?>
</a> <?php }?>
      <?php if ($_GET['provinceid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'provinceid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">所在地区：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a> <?php }?>
      <?php if ($_GET['cityid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a> <?php }?> 
      <?php if ($_GET['three_cityid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>
</a> <?php }?> 
      <?php if ($_GET['hy']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'hy'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">擅长行业：<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</a> <?php }?> 
      <?php if ($_GET['keyword']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'teacher','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_GET['keyword'];?>
</a> <?php }?> 
      &nbsp; </div>
    <?php }?> </div>
  <div class="training_subject_closex">
    <div class="training_subject_title"> <span class="training_subject_span">培训师列表</span> <?php if ($_smarty_tpl->tpl_vars['teacherkeyword']->value) {?> <em class="training_subject_tag ftl">您是不是要找： 
      <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"8","recom"=>"1","type"=>"11","item"=>"\'keylist\'","nocache"=>"")
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
</a> <?php } ?> </em> <?php } else { ?> <em class="training_subject_tag ftl">&nbsp;</em> <?php }?> </div>
    <div class="training_subject_c_box ftl  ">
      <div class="training_subject_Sort ftl">
        <div class="training_subject_coy">共找到相关的讲师 <span class="training_rec_subject_p"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> 条</div>
      </div>
    </div>
  </div>
  <div class="training_subject_content ftl">
    <div class="training_subject ftl mt15"> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <div class="training_kc_list">
        <div class="training_jg_boxpic ftl"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'teamshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
" target="_bank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="120" height="120"></a> </div>
        <div class="training_kc_info">
          <div class="training_kc_name"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'teamshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
" target="_bank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> <span class="training_Courses_zy"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value['sid']];?>
讲师</a> </div>
          <div class="training_kc_info_js"><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['v']->value['content']),0,45,'utf-8');?>
...</div>
          <div class="training_kc_p"><span class="training_Courses_span">所属机构：</span> <?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['train_name'],0,12,'utf-8');?>
 
            <?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['cityid']]) {?> <span class="training_Courses_span training_Courses_span_ml">所在地区：</span> <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['cityid']];
if ($_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['threecityid']]) {?> - <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['threecityid']];
}?>
            
            <?php }?></div>
          <div class="training_kc_p"><span class="training_Courses_span">擅长行业：</span><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value['hy']];?>
 <span class="training_Courses_span training_Courses_span_ml">课程：</span><?php if ($_smarty_tpl->tpl_vars['v']->value['num']==0) {?>（<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
）<?php } else { ?><a style="color: red;" href="<?php echo smarty_function_url(array('m'=>'train','c'=>'teamshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
" target="_bank">（<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
）</a><?php }?> </div>
        </div>
        <div class="training_Courses_zx ftr"> <?php if ($_smarty_tpl->tpl_vars['usertype']->value!=4) {?>
          <?php if ($_smarty_tpl->tpl_vars['v']->value['atn']==1) {?> <a href="javascript:void(0);" id="atn_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="pxatn('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atncompany'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="training_Courses_zx_a " style="background:#ccc">取消关注</a> <?php } else { ?> <a href="javascript:void(0);" id="atn_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="pxatn('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atncompany'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="training_Courses_zx_a">关注TA</a> <?php }?>
          <?php } else { ?>
          <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <a href="javascript:void(0);" onclick="layer.msg('只有个人用户和hr才能关注', 2, 8)" class="training_Courses_zx_a">关注TA</a> <?php } else { ?> <a href="javascript:void(0);"  onclick="showlogin('1');" class="training_Courses_zx_a">关注TA</a> <?php }?>
          <?php }?> <span class="training_Courses_zx_ar">
          <label><i id="antnum<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  class="crop-add-yb_i"><?php echo $_smarty_tpl->tpl_vars['v']->value['ant_num'];?>
</i>人已关注 </label>
          </span> </div>
      </div>
      <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
      <div class="seachno">
        <div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/images/search-no.gif" width="144" height="102"></div>
        <div class="listno-content"> <strong>很抱歉，没有找到满足条件的讲师</strong><br>
          <span> 建议您：<br>
          1、适当减少已选择的条件<br>
          2、适当删减或更改搜索关键字<br>
          </span> <span> 热门关键字：<br>
          <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"8","recom"=>"1","type"=>"11","item"=>"\'keylist\'","nocache"=>"")
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
" class="jos_tag_a"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?> </span></div>
      </div>
      <?php } ?> </div>
    
    <div class="clear"></div>
    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
     
  </div>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/right.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
