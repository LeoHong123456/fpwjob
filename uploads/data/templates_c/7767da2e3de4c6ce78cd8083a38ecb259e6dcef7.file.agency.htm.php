<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:12:41
         compiled from "/www/fpwjob/uploads/app/template/train/agency.htm" */ ?>
<?php /*%%SmartyHeaderCode:6445088665e2e39090301a3-57496117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7767da2e3de4c6ce78cd8083a38ecb259e6dcef7' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/train/agency.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6445088665e2e39090301a3-57496117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subject_index' => 0,
    'v' => 0,
    'subject_name' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'config' => 0,
    'agencykeyword' => 0,
    'keylist' => 0,
    'total' => 0,
    'rows' => 0,
    'train_style' => 0,
    'uid' => 0,
    'usertype' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3909162f40_05866773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3909162f40_05866773')) {function content_5e2e3909162f40_05866773($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="training_content training_w980">
<div class="training_cur ftl">
<div class="training_cur_l ftl"><a href="<?php echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);?>
">首页</a> > 培训机构 </div>
</div>
<div class="training_subject_search ftl ">
<div class="training_subject_search_list ftl">
<div class="training_subject_search_list_left ftl">培训方向</div>
<div class="training_subject_search_list_right ftl">
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','type'=>'sid','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['sid']) {?>training_subject_search_cur<?php }?>">全部</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','type'=>'sid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['sid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
<?php } ?>
</div>
</div>
<div class="training_subject_search_list ftl">
<div class="training_subject_search_list_left ftl">机构性质</div>
<div class="training_subject_search_list_right ftl">
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','type'=>'pr','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['pr']) {?>training_subject_search_cur<?php }?>">全部</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'pr'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['pr']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
<?php } ?>
</div>
</div>
<div class="training_subject_search_list ftl">
<div class="training_subject_search_list_left ftl">机构规模</div>
<div class="training_subject_search_list_right ftl">
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','type'=>'mun','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['mun']) {?>training_subject_search_cur<?php }?>">全部</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'mun'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['mun']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
<?php } ?>
</div>
</div>
<?php if (!$_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>
<div class="training_subject_search_list ftl">
<div class="training_subject_search_list_left ftl">机构地区</div>
<div class="training_subject_search_list_right ftl">
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['provinceid']) {?>training_subject_search_cur<?php }?>">全部</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
<?php } ?>
</div>
</div>
<?php }?>

<?php if ($_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>
	<div class="training_subject_search_list ftl">
	<div class="training_subject_search_list_left ftl">机构城市</div>
	<div class="training_subject_search_list_right ftl">
	<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['cityid']) {?>training_subject_search_cur<?php }?>">全部</a>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
	<?php } ?>
	</div>
	</div>
<?php } elseif ($_GET['provinceid']&&$_GET['cityid']&&!$_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]) {?>
	<div class="training_subject_search_list ftl">
	<div class="training_subject_search_list_left ftl">机构城市</div>
	<div class="training_subject_search_list_right ftl">
	<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if (!$_GET['cityid']) {?>training_subject_search_cur<?php }?>">全部</a>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
	<?php } ?>
	</div>
	</div>
<?php }?>

<?php if ($_GET['cityid']) {?>
<div class="training_subject_search_list ftl">
<div class="training_subject_search_list_left ftl">机构县区</div>
<div class="training_subject_search_list_right ftl">
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['three_cityid']=='') {?>training_subject_search_cur<?php }?>">全部</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','v'=>$_smarty_tpl->tpl_vars['v']->value,'type'=>'three_cityid'),$_smarty_tpl);?>
" class="training_subject_search_tag <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>training_subject_search_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
<?php } ?>
</div>
</div>
<?php }?>

<div class="training_subject_search_list ftl" >
<div class="training_subject_search_list_left ftl">关&nbsp;键&nbsp; 字</div>
<div class="training_subject_search_list_right ftl">
<div class="sub_search">
<form method="get" action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);
}?>">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?><input type="hidden" value="train" name="m" /><?php }?>
<input type="hidden" name="c" value="agency" />
<input type="text" name="keyword" value=""  placeholder="搜索机构" class="Search_Courses_text  ftl">
<input type="submit" value="" class="Search_Courses_bth1 ftl">
</form>
</div>
</div>
</div>

<?php if ($_GET['sid']||$_GET['pr']||$_GET['mun']||$_GET['provinceid']||$_GET['cityid']||$_GET['three_cityid']||$_GET['keyword']) {?>
<div class="Search_close_box">
<div><div class="Search_clear"> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agency'),$_smarty_tpl);?>
"> 清除所选</a></div>
<span class="Search_close_box_s">已选条件：</span></div>
<?php if ($_GET['sid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'sid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">培训方向：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_GET['sid']];?>
</a> <?php }?>
<?php if ($_GET['provinceid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'provinceid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">机构地区：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a> <?php }?>
<?php if ($_GET['cityid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a> <?php }?> 
<?php if ($_GET['three_cityid']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>
</a> <?php }?> 
<?php if ($_GET['pr']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'pr'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">机构性质：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['pr']];?>
</a> <?php }?> 
<?php if ($_GET['mun']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'mun'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">机构规模：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['mun']];?>
</a> <?php }?> 
<?php if ($_GET['keyword']) {?> <a href="<?php echo smarty_function_listurl(array('m'=>'train','c'=>'agency','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_GET['keyword'];?>
</a> <?php }?> 
&nbsp; </div>
<?php }?>
</div>
<div class="training_subject_closex">
<div class="training_subject_title"><span class="training_subject_span">培训机构列表</span>
 <?php if ($_smarty_tpl->tpl_vars['agencykeyword']->value) {?>
<em class="training_subject_tag ftl">您是不是要找： 
<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"8","recom"=>"1","type"=>"10","item"=>"\'keylist\'","nocache"=>"")
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
<div class="clear"></div>
<div class="training_subject_coy">共找到相关的机构 <span class="training_rec_subject_p"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> 条</div>
</div>
<div class="training_subject_content ftl">
<div class="training_subject ftl mt15">

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

<div class="training_kc_list">
<div class="training_jg_boxpic ftl"><?php if ($_smarty_tpl->tpl_vars['v']->value['logo']) {?>
<a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['logo'];?>
" width="120" height="120">
</a>
<?php } else { ?>
<a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_px_icon'];?>
" width="120" height="120">
</a>
<?php }?>
</div>

<div class="training_kc_info">
<div class="training_kc_name"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> 
<?php if ($_smarty_tpl->tpl_vars['v']->value['iscert']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/images/yun_rz.jpg"><?php }?></div>
<div class="training_kc_info_js"><?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {
echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['v']->value['content']),0,45,'utf-8');?>
…<?php }?></div>

<div class="training_kc_p"><span class="training_Courses_span">培训方向：</span> <?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value['sid']];?>
  
<span class="training_Courses_span training_Courses_span_ml">机构课程：</span><?php if ($_smarty_tpl->tpl_vars['v']->value['num']==0) {?>（<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
）<?php } else { ?><a style="color: red;" href="<?php echo smarty_function_url(array('m'=>'train','c'=>'mysubject','id'=>'`$v.uid`'),$_smarty_tpl);?>
">（<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
）</a><?php }?>
</div>
<div class="training_kc_p">
<span class="training_Courses_span">机构地区：</span><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['provinceid']];?>

<span class="training_Courses_span training_Courses_span_ml">机构性质：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value['pr']];?>

<span class="training_Courses_span training_Courses_span_ml">机构规模：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value['mun']];?>

</div>


</div>


<div class="training_Courses_zx ftr">
<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['usertype']->value==4) {?>
<a href="javascript:void(0)" onclick="layer.msg('只有个人用户和hr才可以咨询培训！',2,8);return false;"  class="training_Courses_zx_a">立即咨询</a>
<?php } else { ?>
<a href="javascript:zixun('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','');" class="training_Courses_zx_a">立即咨询</a>
<?php }?>
<?php } else { ?>
<a href="javascript:showlogin(1)" class="training_Courses_zx_a">立即咨询</a>
<?php }?>

</div>
</div>


<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
<div class="seachno">
          <div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/images/search-no.gif" width="144" height="102"></div>
          <div class="listno-content"> <strong>很抱歉，没有找到满足条件的机构</strong><br>
            <span> 建议您：<br>
            1、适当减少已选择的条件<br>
            2、适当删减或更改搜索关键字<br>
            </span> <span> 热门关键字：<br>

     <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"8","recom"=>"1","type"=>"10","item"=>"\'keylist\'","nocache"=>"")
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
"  class="jos_tag_a"target="_blank"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?>
     </span></div>
        </div>
<?php } ?>
</div>

<div class="clear"></div>
<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/right.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div id="zixun" style="width:400px;background:#fff;" class="none">
  <form name="myform" method="post" target="supportiframe" action="<?php echo smarty_function_url(array('m'=>'train','c'=>'zixun'),$_smarty_tpl);?>
" onsubmit="return check_zixun();">
    <ul class="Sign_up_box" style="padding:10px;">
        <li style="margin-top:10px;"><span class="Sign_up_box_span">电话：</span>
        <input type="text" id="phone" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" name="phone" class="txt_input"></li>
        <li style="margin-top:10px;"><span class="Sign_up_box_span">留言：</span>
        <textarea class="txt_textarea" id="content" name="content"></textarea></li>
        <li style="margin-top:10px;"><span class="Sign_up_box_span">&nbsp;</span>
        <input type="submit" name="submit" value="提交" class="txt_input_submit"></li>
        <input type="hidden" name="sid" value="" />
        <input type="hidden" name="s_uid" value="" />
    </ul>
</form>
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
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
