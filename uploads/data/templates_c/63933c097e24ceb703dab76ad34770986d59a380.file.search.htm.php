<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:03:09
         compiled from "/www/fpwjob/uploads/app/template/default/resume/search.htm" */ ?>
<?php /*%%SmartyHeaderCode:17496183075dc5213d32f408-22487642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63933c097e24ceb703dab76ad34770986d59a380' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/resume/search.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17496183075dc5213d32f408-22487642',
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
    'finder' => 0,
    'key' => 0,
    'v' => 0,
    'uid' => 0,
    'usertype' => 0,
    'paras' => 0,
    'resumekeyword' => 0,
    'keylist' => 0,
    'job_index' => 0,
    'job_name' => 0,
    'job_type' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'tid' => 0,
    'city_index' => 0,
    'pid' => 0,
    'cid' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'industry_name' => 0,
    'industry_index' => 0,
    'arr_data1' => 0,
    'arr_data' => 0,
    'j' => 0,
    'uptime' => 0,
    'adtime' => 0,
    'user3' => 0,
    'eid' => 0,
    'lookresume' => 0,
    'talentpool' => 0,
    'useridmsg' => 0,
    'user2' => 0,
    'user' => 0,
    'total' => 0,
    'pagenav' => 0,
    'totalshow' => 0,
    'klist' => 0,
    'userrec' => 0,
    'com' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc5213d7f9931_98833593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc5213d7f9931_98833593')) {function content_5dc5213d7f9931_98833593($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
    </head>

    <body class="body_bg">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="yun_body">
            <div class="yun_content">
                <div class="current_Location com_current_Location png none">
                    <div class="fl">您当前的位置：
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <span>找人才</span>
                    </div>
                </div>

                <div class="clear"></div>

                <form method="get" id="form" action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_resumedir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);
}?>" onsubmit="return search_keyword(this,'请输入关键字');">
                    <div class="jobsearch_newbox">
                        <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_resumedir']) {?><input type="hidden" name="m" value="resume" /> <?php }?>

                        <input type="hidden" name="c" value="search" /> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['finder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" /> <?php } ?>

                           <div class="yun_job_search">
                                <div class="yun_job_search_cont">
                                <div class="yun_job_search_textcont">
                                    <input type="text" name="keyword" value="<?php if ($_GET['keyword']!='') {
echo $_GET['keyword'];
} else { ?>请输入关键字<?php }?>" onclick="if(this.value=='请输入关键字'){this.value=''}" onblur="if(this.value==''){this.value='请输入关键字'}" class="Search_jobs_text" />
                                           </div>
                                    <input type="submit" value="搜索" class="Search_jobs_submit yun_bg_color" />

                                    <div class="Search_jobs_sub_text_bc">
                                        <?php if ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value=='2') {?>
                                        <a href="javascript:void(0)" class="Search_jobs_scq" onclick="addfinder('<?php echo $_smarty_tpl->tpl_vars['paras']->value;?>
','2','0')">+ 保存为简历搜索器</a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value!='2') {?>
                                        <a href="javascript:void(0)" class="Search_jobs_scq" onclick="layer.msg('只有企业会员才可保存！', 2,8);return false;">+ 保存为简历搜索器</a>
                                        <?php } else { ?>
                                        <input value="<?php echo $_smarty_tpl->tpl_vars['paras']->value;?>
" type="hidden" id="finderparas" />
                                        <input value="2" type="hidden" id="finderusertype" />
                                        <a href="javascript:void(0)" class="Search_jobs_scq" onclick="showlogin('2');">+ 保存为简历搜索器</a>
                                        <?php }?>
                                    </div>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['resumekeyword']->value) {?>
                                <div class="jobs_tag">
                                    热门搜索： <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"14","recom"=>"1","type"=>"5","item"=>"\'keylist\'","nocache"=>"")
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
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'keyword','v'=>$_smarty_tpl->tpl_vars['keylist']->value['key_title']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_title'];?>
" class="jos_tag_a"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a>
                                    <?php } ?>
                                </div>
                                <?php } else { ?>
                                <div class="jobs_tag">&nbsp;</div>
                                <?php }?>

                            </div>
                       
                    </div>

                    <div class="Search_jobs_box">
                        <?php if (!$_GET['job1']) {?>
                        <div class="Search_jobs_form_list">
                            <div class="Search_jobs_name"> 职位：</div>
                            <div class="Search_jobs_sub ">
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'job1','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job1']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'job1','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job1']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?> <?php if ($_smarty_tpl->tpl_vars['key']->value>6) {?>job1list<?php }?> <?php if ($_smarty_tpl->tpl_vars['key']->value>6) {?>none<?php }?>"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?></div>
                            <div class="zh_more">
                                <a href="javascript:checkmore('job1list');" id="job1list" rel="nofollow">更多</a>
                            </div>
                        </div>
                        <?php }?> <?php if ($_GET['job1']&&!$_GET['job1_son']) {?>
                        <div class="Search_jobs_form_list">
                            <div class="Search_jobs_name"> 子类：</div>
                            <div class="Search_jobs_sub ">
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'job1_son'),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job1_son']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_GET['job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'job1_son','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job1_son']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> <?php } ?></div>
                        </div>
                        <?php }?> <?php if ($_GET['job1_son']) {?>
                        <div class="Search_jobs_form_list">
                            <div class="Search_jobs_name"> 类别：</div>
                            <div class="Search_jobs_sub ">
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'job1_son','v'=>$_GET['job1_son']),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job_post']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_GET['job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'job_post','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job_post']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']==1&&$_smarty_tpl->tpl_vars['config']->value['cityname']&&$_smarty_tpl->tpl_vars['config']->value['cityname']!=$_smarty_tpl->tpl_vars['config']->value['sy_indexcity']) {?>
                        <div class="Search_citybox">
                            <div class="Search_cityboxname"> 地点：</div>
                            <div class="Search_citybox_right">
                                <div class="Search_cityboxright">
                                    <div class="search_city_list">
                                        <?php if (!$_GET['cityid']&&$_GET['three_cityid']) {?>
                                        <a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>
</a>
                                        <?php } else { ?> <?php if (is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>
                                        <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if (!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
                                        <?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
                                        <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
                                        <?php } ?> <?php } else { ?>
                                        <?php if (is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']])) {?>
		                                    	<a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'cityid'),$_smarty_tpl);?>
" class="city_name <?php if (!$_GET['cityid']) {?>city_name_active<?php }?>">不限</a>
		                                    	<?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
		                                    		<a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
		                                    	<?php } ?> 
		                                    <?php } else { ?>
		                                    	<a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a>
		                                    <?php }?>
                                        <?php }?> <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="Search_citybox">
                            <div class="Search_cityboxname"> 地点：</div>
                            <div class="Search_citybox_right">
                                <div class="Search_cityall none">
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="city_name">全部</a>
                                    <?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pid']->key;
?>
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']==$_smarty_tpl->tpl_vars['pid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['pid']->value];?>
</a>
                                    <?php } ?>
                                </div>
                                <div class="Search_cityboxright">
                                    <a href="javascript:;" onclick="acityshow('1')" class="search_city_list_cur <?php if ($_GET['provinceid']&&!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>search_city_active<?php }?> <?php if (!$_GET['provinceid']) {?>none<?php }?> acity_two" style="text-decoration:none;cursor:pointer;"><span class="search_city_p"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</span><i class="search_city_p_jt"></i><i class="search_city_list_line"></i></a>
                                    <a href="javascript:;" <?php if ($_GET['cityid']) {?>onclick="acityshow('2')" <?php }?> class="search_city_list_cur <?php if ($_GET['cityid']&&is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>search_city_active<?php }?> <?php if (!$_GET['provinceid']||!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>none<?php }?> acity_three" style="text-decoration:none;cursor:pointer;"><span class="search_city_p"><?php if (!$_GET['cityid']) {?>不限<?php } else {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];
}?></span><i class="search_city_list_line"></i></a>
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="search_city_list_all <?php if (!$_GET['provinceid']) {?>city_name_active<?php }?>">全部</a>
                                    <div class="search_city_list">
                                        <?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pid']->key;
?>
                                        <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
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
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
                                    <?php  $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cid']->key => $_smarty_tpl->tpl_vars['cid']->value) {
$_smarty_tpl->tpl_vars['cid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cid']->key;
?>
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['cid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['cid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['cid']->value];?>
</a>
                                    <?php } ?>
                                </div>
                                <div class="Search_cityboxclose <?php if (!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>none<?php }?>" id="acity_three">
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
                                    <?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['userdata']->value['user_tag']) {?>
                        <div class="Search_jobs_form_list search_more">
                            <div class="Search_jobs_name"> 标签：</div>
                            <div class="Search_jobs_sub">
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'tag','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if (!$_GET['tag']) {?>Search_jobs_sub_cur<?php }?>">全部</a>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'tag','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_smarty_tpl->tpl_vars['key']->value>9) {?>none<?php }?> <?php if ($_smarty_tpl->tpl_vars['key']->value>9) {?>taglist<?php }?> <?php if ($_GET['tag']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                <?php } ?>
                            </div>
                            <?php if (count($_smarty_tpl->tpl_vars['userdata']->value['user_tag'])>10) {?>
                            <div class="zh_more">
                                <a href="javascript:checkmore('taglist');" id="taglist" rel="nofollow">更多</a>
                            </div>
                            <?php }?>
                        </div>
                        <?php }?>

                        <div class="Search_jobs_form_list search_more">
                            <div class="Search_jobs_name"> 薪资：</div>
                            <div>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'salary','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['minsalary']==''&&$_GET['maxsalary']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'salary','v'=>'0_2000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['maxsalary']==2000) {?>Search_jobs_sub_cur<?php }?>">2000以下</a>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'salary','v'=>'2000_4000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==2000&&$_GET['maxsalary']==4000) {?>Search_jobs_sub_cur<?php }?>">2000-4000</a>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'salary','v'=>'4000_6000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==4000&&$_GET['maxsalary']==6000) {?>Search_jobs_sub_cur<?php }?>">4000-6000</a>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'salary','v'=>'6000_8000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==6000&&$_GET['maxsalary']==8000) {?>Search_jobs_sub_cur<?php }?>">6000-8000</a>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'salary','v'=>'8000_10000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==8000&&$_GET['maxsalary']==10000) {?>Search_jobs_sub_cur<?php }?>">8000-10000</a>
                                <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'salary','v'=>'10000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==10000) {?>Search_jobs_sub_cur<?php }?>">10000以上</a>
                            </div>
                            <div>
                                <input type="text" name="minsalary" id="min" value="<?php if ($_GET['minsalary']) {
echo $_GET['minsalary'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="job_xz_text" />
                                <span class="job_xz_line">-</span>
                                <input type="text" name="maxsalary" id="max" value="<?php if ($_GET['maxsalary']) {
echo $_GET['maxsalary'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="job_xz_text" />
                                <input type="submit" value="确定" class="job_xz_bth" />
                            </div>
                        </div>

                        <div class="Search_jobs_form_list search_more">
                            <div class="Search_jobs_name"> 更多：</div>

                            <div class="Search_jobs_sub" style="width:1090px;">

                                <div class="Search_jobs_more_chlose">
                                    <span class="Search_jobs_more_chlose_s"><?php if ($_GET['hy']) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];
} else { ?>工作行业<?php }?></span><i class=""></i>
                                    <div class="Search_jobs_more_chlose_hylist none">
                                        <ul>
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['fz_type']!='2'&&$_smarty_tpl->tpl_vars['config']->value['hyclass']=='') {?>
                                            <div class="Search_jobs_form_list">
                                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                                <li>
                                                    <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'hy','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                                </li>
                                                <?php } ?>
                                            </div>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="Search_jobs_more_chlose"><span class="Search_jobs_more_chlose_s"><?php if ($_GET['edu']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['edu']];
} else { ?>学历要求<?php }?></span><i class=""></i>
                                    <div class="Search_jobs_more_chlose_list none">
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <li>
                                                <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'edu','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="Search_jobs_more_chlose"><span class="Search_jobs_more_chlose_s"><?php if ($_GET['exp']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['exp']];
} else { ?>工作经验<?php }?></span><i class=""></i>
                                    <div class="Search_jobs_more_chlose_list none">
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <li>
                                                <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'exp','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="Search_jobs_more_chlose"><span class="Search_jobs_more_chlose_s"><?php if ($_GET['sex']) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} else { ?>性别要求<?php }?></span><i class=""></i>
                                    <div class="Search_jobs_more_chlose_list none">
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <li>
                                                <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'sex','v'=>$_smarty_tpl->tpl_vars['j']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
                                            </li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="Search_jobs_more_chlose"><span class="Search_jobs_more_chlose_s"><?php if ($_GET['report']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['report']];
} else { ?>到岗时间<?php }?></span><i class=""></i>
                                    <div class="Search_jobs_more_chlose_list none">
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <li>
                                                <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'report','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="Search_jobs_more_chlose"><span class="Search_jobs_more_chlose_s"><?php if ($_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']]) {
echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];
} else { ?>更新时间<?php }?></span><i class=""></i>
                                    <div class="Search_jobs_more_chlose_list none">
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <li>
                                                <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'uptime','v'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if ($_GET['job1']||$_GET['job1_son']||$_GET['job_post']||$_GET['provinceid']||$_GET['cityid']||$_GET['three_cityid']||$_GET['hy']||$_GET['minsalary']||$_GET['maxsalary']||$_GET['edu']||$_GET['exp']||$_GET['tag']||$_GET['sex']||$_GET['type']||$_GET['report']||$_GET['uptime']||$_GET['keyword']||$_GET['idcard']||$_GET['work']) {?>
                        <div class="Search_close_box">
                            <div>
                                <div class="Search_clear">
								 <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_userclass']==1) {?>
									<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'search'),$_smarty_tpl);?>
"> 清除所选</a>
									 <?php } else { ?>
									 <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
"> 清除所选</a>
									  <?php }?>
                                    
                                </div>
                                <span class="Search_close_box_s">已选条件：</span>
                            </div>
                            <?php if ($_GET['job1']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'job1'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">职位分类：<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job1']];?>
</a>
                             <?php }?> 
                             <?php if ($_GET['job1_son']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'job1_son'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job1_son']];?>
</a> 
                            <?php }?> 
                            <?php if ($_GET['job_post']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'job_post'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job_post']];?>
</a> 
                            <?php }?>
                             <?php if ($_smarty_tpl->tpl_vars['config']->value['cityid']==''&&$_smarty_tpl->tpl_vars['config']->value['three_cityid']=='') {?> <?php if ($_GET['provinceid']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'provinceid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">工作地点：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a>
                             <?php }?> 
                             <?php if ($_GET['cityid']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a> 
                            <?php }?> 
                            <?php if ($_GET['three_cityid']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'three_cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>
</a> 
                            <?php }?> <?php }?> 
                            <?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']]) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'hy'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">行业：<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</a> 
                            <?php }?>
                             <?php if ($_GET['minsalary']&&$_GET['maxsalary']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'salary'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">薪资：<?php echo $_GET['minsalary'];?>
-<?php echo $_GET['maxsalary'];?>
</a>
                            <?php } elseif ($_GET['minsalary']&&!$_GET['maxsalary']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'salary'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">薪资：<?php echo $_GET['minsalary'];?>
及以上</a>
                            <?php } elseif (!$_GET['minsalary']&&$_GET['maxsalary']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'salary'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">薪资：<?php echo $_GET['maxsalary'];?>
及以下</a>
                            <?php }?> 
                            <?php if ($_GET['edu']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'edu'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">学历：<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['edu']];?>
</a> 
                            <?php }?>
                             <?php if ($_GET['exp']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'exp'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">工作经验：<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['exp']];?>
</a> 
                            <?php }?> 
                            <?php if ($_GET['tag']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'tag'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">个人标签：<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['tag']];?>
</a> 
                            <?php }?> 
                            <?php if ($_GET['sex']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'sex'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">性别：<?php echo $_smarty_tpl->tpl_vars['arr_data1']->value;?>
</a> 
                            <?php }?> 
                            <?php if ($_GET['type']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'type'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">工作类型：<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['type']];?>
</a>
                            <?php }?> 
                            <?php if ($_GET['report']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'report'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">到岗时间：<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['report']];?>
</a>
                            <?php }?> 
                            <?php if ($_GET['adtime']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'adtime'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">发布时间：<?php echo $_smarty_tpl->tpl_vars['adtime']->value[$_GET['adtime']];?>
</a> 
                            <?php }?> 
                            <?php if ($_GET['uptime']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'uptime'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">更新时间：<?php echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];?>
</a> 
                            <?php }?> 
                            <?php if ($_GET['keyword']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_GET['keyword'];?>
</a> 
                            <?php }?> 
                            <?php if ($_GET['idcard']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'idcard'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">有身份验证</a>
                            <?php }?> 
                            <?php if ($_GET['work']) {?>
                            <a href="<?php echo smarty_function_listurl(array('m'=>'resume','untype'=>'work'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">有作品</a>
                            <?php }?> &nbsp;
                        </div>
                        <?php }?>

                        <div class="clear"></div>
                    </div>

                </form>

                <div class="search_h1_box">
                    <div class="search_h1_box_title">
                        <ul class="search_h1_box_list">
                            <li <?php if ($_GET['pic']=='') {?>class="search_job_all " <?php }?> class="search_job_all ">
                                <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'search'),$_smarty_tpl);?>
">所有人才</a><i class="search_h1_box_list_icon"></i></li>
                            <li class="<?php if ($_GET['pic']) {?>search_h1_box_cur<?php }?> job_tj_t">
                                <a href="<?php if ($_GET['pic']) {
echo smarty_function_listurl(array('m'=>'resume','type'=>'tp','v'=>0),$_smarty_tpl);
} else {
echo smarty_function_listurl(array('m'=>'resume','type'=>'tp','v'=>1),$_smarty_tpl);
}?>" style="color:#1296db">照片人才<i class="job_tj_chk"></i><i class="job_zp_icon"></i>
								</a>
                            </li>
                        </ul>

                    </div>
                    <div class="search_user_list_tit search_user_list_tit_bg">
                        <div class="search_Filter"> 
						<?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']!=1||$_smarty_tpl->tpl_vars['uid']->value) {?>
						<span class="Search_jobs_c_a_ln"> 找到 <span class="blod org" id="totalshow">0</span> 位人才满足条件 </span> 
						<?php }?>
						<span class="yun_search_tit">排序方式：</span>

                            <ul class="search_Filter_list">
                                <li <?php if ($_GET['order']=='lastdate') {?>class="search_Filter_current" <?php }?>>
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'order','v'=>'lastdate'),$_smarty_tpl);?>
"><span>更新时间</span><i class="search_Filter_icon"></i></a>
                                </li>
                                <li <?php if ($_GET['order']=='ctime') {?>class="search_Filter_current" <?php }?>>
                                    <a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'order','v'=>'ctime'),$_smarty_tpl);?>
"><span>发布时间</span><i class="search_Filter_icon"></i></a>
                                </li>
                            </ul>
                            <div class="search_Filter_Authenticate ">
                                <a href="<?php if ($_GET['idcard']) {
echo smarty_function_listurl(array('m'=>'resume','type'=>'idcard','v'=>0),$_smarty_tpl);
} else {
echo smarty_function_listurl(array('m'=>'resume','type'=>'idcard','v'=>1),$_smarty_tpl);
}?>">
                                    <div class="checkbox_job search_Filter_Authenticate_mt8 <?php if ($_GET['idcard']) {?>iselect<?php }?>"><i></i></div>
                                    有身份验证</a>
                            </div>
                            <div class="search_Filter_Authenticate ">
                                <a href="<?php if ($_GET['work']) {
echo smarty_function_listurl(array('m'=>'resume','type'=>'work','v'=>0),$_smarty_tpl);
} else {
echo smarty_function_listurl(array('m'=>'resume','type'=>'work','v'=>1),$_smarty_tpl);
}?>">
                                    <div class="checkbox_job search_Filter_Authenticate_mt8 <?php if ($_GET['work']) {?>iselect<?php }?>"><i></i></div>
                                    有作品</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="user_left_sidebar">
                	
                	<?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']==1&&!$_smarty_tpl->tpl_vars['uid']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['user3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user3']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$user3=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"4","post_len"=>"14","item"=>"\'user3\'","key"=>"\'key\'","name"=>"\'userlist3\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    //处理类别字段
		$cache_array = $db->cacheget();
        $fscache_array = $db->fscacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
        $city_index     = $cache_array["city_index"];
		$job_name		= $cache_array["job_name"];
        $job_index		= $cache_array["job_index"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
        $city_parent       = $fscache_array["city_parent"];
        $job_parent     = $fscache_array["job_parent"];

		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}

		
			$where = "a.`defaults`='1' and a.`status`='1' and a.`r_status`='1'";
            //关注我公司的人才--条件
			if($paramer[where_uid]){
				$where .=" AND a.`uid` in (".$paramer['where_uid'].")";
			}
			//黑名单不能查看已拉黑的个人用户简历
			if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
				$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
				if(is_array($blacklist)&&$blacklist){
					foreach($blacklist as $v){
						$buid[]=$v['c_uid'];
					}
				    $where .=" AND a.`uid` NOT IN (".@implode(",",$buid).")";
				}
			}
            //置顶
			if($paramer[topdate]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
			if($paramer[top]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
            //身份认证
			if($paramer[idcard]){
				$where .=" AND a.`idcard_status`='1'";
			}
			//高级人才
			if($paramer[height_status]){
				$where .=" AND a.`height_status`=".$paramer[height_status];
			}else{
				$where .=" AND a.`height_status`='0'";
			}
			//高级人才推荐
			if($paramer[rec]){
				$where .=" AND a.`rec`=1";
			}
			//普通推荐
			if($paramer[rec_resume]){
				$where .=" AND a.`rec_resume`=1";
			}
			//作品
			if($paramer[work]){
				$show=$db->select_all("resume_show","1 group by eid","`eid`");
				if(is_array($show)){
					foreach($show as $v){
						$eid[]=$v['eid'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$eid).")";
			}
			//标签
			if($paramer[tag]){
			    $tagname=$userclass_name[$paramer[tag]];
				$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
				if(is_array($tag)){
					foreach($tag as $v){
						$tagid[]=$v['def_job'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$tagid).")";
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND a.`lastupdate`>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND a.`lastupdate`>$uptime";
	    		}
			}
			//添加时间区间，即审核时间
			if($paramer[adtime]){
				$time=time();
				$adtime = $time-($paramer[adtime]*86400);
				$where.=" AND a.`status_time`>$adtime";
			}
			//是否有照片
			if($paramer[pic]=="0" || $paramer[pic]){
				$where .=" AND a.`photo`<>'' AND a.`phototype`!=1";
			}
            //行业
			if($paramer['hy']!=""){
				$where .= " AND a.`hy` IN (".$paramer['hy'].")";
			}
            $citywhere = "1";
			//城市大类
			if($paramer[provinceid]){
                $citywhere .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer[cityid]){
                $citywhere .= " AND `cityid` = $paramer[cityid]";
			}
			//城市三级子类
			if($paramer[three_cityid]){
                $citywhere .= " AND `three_cityid` = $paramer[three_cityid]";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
                if($city_parent[$paramer[cityin]]=='0'){
					$citywhere .= " AND `provinceid` = $paramer[cityin]";
				}elseif(in_array($city_parent[$paramer[cityin]],$city_index)){
					$citywhere .= " AND `cityid` = $paramer[cityin]";
				}elseif($city_parent[$paramer[cityin]]>0){
					$citywhere .= " AND `three_cityid` = $paramer[cityin]";
				}
			}
            //职位类别
            $jobwhere = "1";
			if($paramer[job1]){
				$jobwhere.=" AND `job1`= $paramer[job1]";
			}
			if($paramer[job1_son]){
                $jobwhere.=" AND `job1_son`= $paramer[job1_son]";
			}
			if($paramer[job_post]){
                $jobwhere.=" AND `job_post`= $paramer[job_post]";
			}
            //职位区间,不建议执行该查询
			if($paramer[jobin]){
                if($job_parent[$paramer[jobin]]=='0'){
					$jobwhere.=" AND `job1`= $paramer[jobin]";
				}elseif(in_array($job_parent[$paramer[jobin]],$job_index)){
					$jobwhere.=" AND `job1_son`= $paramer[jobin]";
				}elseif($job_parent[$paramer[jobin]]>0){
					$jobwhere.=" AND `job_post`= $paramer[jobin]";
				}
			}
			//工作经验
			if($paramer[exp]){
				$where .=" AND a.`exp`=$paramer[exp]";
			}
			//学历
			if($paramer[edu]){
				$where .=" AND a.`edu`=$paramer[edu]";
			}
			//性别
			if($paramer[sex]){
				$where .=" AND a.`sex`=$paramer[sex]";
			}
			//到岗时间
			if($paramer[report]){
				$where .=" AND a.`report`=$paramer[report]";
			}
			//工作性质
			if($paramer[type]){
				$where .= " AND a.`type`=$paramer[type]";
			}
			//关键字
			if($paramer[keyword]){
				$jobid = array();
				$where1[]="a.`name` LIKE '%$paramer[keyword]%'";
				$where1[]="a.`uname` LIKE '%$paramer[keyword]%'";
                //关键字带期望职位搜索(已有城市选择搜索，这个有点累赘，影响效率)
//              $jobid=array();
// 				foreach($job_name as $k=>$v){
// 					if(strpos($v,$paramer[keyword])!==false){
// 						$jobid[]=$k;
// 					}
// 				}
// 				if(!empty($jobid)){
//                  $class=array();
// 					foreach($jobid as $value){
// 						$class[]="FIND_IN_SET('".$value."',`job_classid`)";
// 					}
// 					$where1[]=@implode(" or ",$class);
// 				}
                //关键字带期望城市搜索
			    $cityid=array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
                //只取匹配到的第一个城市，已选省则匹配省下面的城市、未选择城市则按关键字匹配城市
				if(!empty($cityid)){
                    $ckwhere = "1";
                    if(in_array($cityid[0],$city_index)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `provinceid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_two)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `cityid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_three)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `three_cityid` = $cityid[0]";
                    }
                    $cityresume = $db->select_all("resume_city",$ckwhere);
                    if($cityresume){
                        foreach ($cityresume as $v){
                            $where1[]=" `a.id`=".$v['eid'];
                        }
                    }
				}
                $where.=" AND (".@implode(" or ",$where1).")";
			}
			//薪资待遇
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary])."))";
			}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`>=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).")
							or (a.`minsalary`!=0 and  a.`maxsalary`=0))";
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary]).")
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`<=".intval($paramer[maxsalary]).")  
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`=0) 
							or (a.`minsalary`=0 and a.`maxsalary`!=0)
							)";
			}
	        //排序字段默认为更新时间
			if($paramer[order] && $paramer[order]!="lastdate"){
				if($paramer[order]=='topdate'){
					$nowtime=time();
					$order = " ORDER BY if(a.`topdate`>$nowtime,a.`topdate`,a.`lastupdate`)";
				}else{
					$order = " ORDER BY a.`".$paramer[order]."`";
				}
			}else{
				$order = " ORDER BY a.`lastupdate` ";
			}
			//排序规则 默认为倒序
			$sort = $paramer[sort]?$paramer[sort]:'DESC';
			//查询条数
			if($paramer[limit]){
				$limit=" LIMIT ".$paramer[limit];
			}
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
 			}
            $pagewhere = "";$joinwhere = "";
            if($citywhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_cityclass` where ".$citywhere." group by `eid`) b";
                $joinwhere .= " a.`id`=b.`eid` and ";
            }
            if($jobwhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_jobclass` where ".$jobwhere." group by `eid`) c";
                $joinwhere .= " a.`id`=c.`eid` and ";
            }
			if($paramer[ispage]){
				if($paramer["height_status"]){
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl,$pagewhere,$joinwhere);
				}else{
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl,$pagewhere,$joinwhere);
				}
			}
	
			if($paramer[topdate] && $_GET[page]>1){
				$user3 = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere.$where.$order.$sort.$limit;
					$user3=$db->DB_query_all($sql,"all");
				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$user3=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($user3) && is_array($user3)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user3 as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($user3 as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($user3 as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user3[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $user3[$k]['where']=$citywhere;
			    		$user3[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user3[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user3[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user3[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user3[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$user3[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1){
            					$user3[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$user3[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$user3[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1){
									$user3[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$user3[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$user3[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$user3[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $user3[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user3[$k]['nametype']=$val[nametype];
                        $user3[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $user3[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $user3[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $user3[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$user3[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$user3[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user3[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user3[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user3[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				//更新时间显示方式
				$time=$v['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$user3[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user3[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user3[$k]['time'] = date("H:i",$v['lastupdate']);
					$user3[$k]['redtime'] =1;
				}else{
					$user3[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				$user3[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
// 				$user3[$k]['job_city_one']=$city_name[$v['provinceid']];
// 				$user3[$k]['job_city_two']=$city_name[$v['cityid']];
// 				$user3[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$user3[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user3[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user3[$k]["salary_n"] = "面议";
    			}
				$user3[$k]['report_n']=$userclass_name[$v['report']];
				$user3[$k]['type_n']=$userclass_name[$v['type']];
				$user3[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user3[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user3[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user3[$k]['m_name']=$m_name[$v['uid']];
					$user3[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				//$user3[$k]['job_post']=@implode(",",$jobname);
				$user3[$k]['expectjob']=$jobname;
				$kcity_classid=@explode(",",$v['city_classid']);
				$kcity_classid=array_unique($kcity_classid);	
				$cityname=array();
				if(is_array($kcity_classid)){
					foreach($kcity_classid as $val){
					    if($val!=''){
					       
                            $cityname[]=$city_name[$val];
                            
                        }
					}
				}
                //$user3[$k]['citylist']=@implode("/",$cityname);
				$user3[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user3[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$user3[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($user3 as $k=>$v){
               if($paramer['keyword']){
					$user3[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user3[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user3[$k]['job_post']);
					$user3[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user3[$k]['job_post_n']);
					$user3[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user3[$k]['city_name_n']);
				}
            }
			if($paramer['keyword']!=""&&!empty($user3)){
				addkeywords('5',$paramer['keyword']);
			}
		}$user3 = $user3; if (!is_array($user3) && !is_object($user3)) { settype($user3, 'array');}
foreach ($user3 as $_smarty_tpl->tpl_vars['user3']->key => $_smarty_tpl->tpl_vars['user3']->value) {
$_smarty_tpl->tpl_vars['user3']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user3']->key;
?>
							<div class="search_job_list <?php if ($_smarty_tpl->tpl_vars['key']->value%2!='0') {
}?>">
								
								<div class="user_photo_left">
 									<a href="javascript:void(0);" onclick="showlogin('2');">
										<img src="<?php echo $_smarty_tpl->tpl_vars['user3']->value['photo'];?>
" width="80" height="80" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" />
									</a>
									<i class="resume_list_xb resume_list_xb <?php if ($_smarty_tpl->tpl_vars['user3']->value['sex']=='女') {?>resume_list_xb_nv<?php }?>"></i>
								</div>
			
								<div class="usersearch_job_left_siaber" style="width:450px">
 									<a href="javascript:void(0);" onclick="showlogin('2');" class="fl user_name">
										<?php if (in_array($_smarty_tpl->tpl_vars['user3']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['user3']->value['uname'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['user3']->value['username_n'];?>
 <?php }?>
									</a>
									<span class="user_listinfo fl"><?php if ($_smarty_tpl->tpl_vars['user3']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['user3']->value['age'];?>
岁<?php }?><i class="user_listinfo_line">|</i><?php echo $_smarty_tpl->tpl_vars['user3']->value['exp_n'];?>
经验<i class="user_listinfo_line">|</i><?php echo $_smarty_tpl->tpl_vars['user3']->value['edu_n'];?>
学历 </span> <?php if ($_smarty_tpl->tpl_vars['user3']->value['idcard_status']=='1') {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/sf.png" title="身份已认证" class="user_rz_img png fl" /><?php }?> <?php if ($_smarty_tpl->tpl_vars['user3']->value['ispic']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/profile.png" title="有形象照" class="user_rz_img png fl" /><?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['user3']->value['id'],$_smarty_tpl->tpl_vars['lookresume']->value)) {?><span class="co_fav"><i></i><em>已浏览</em></span><?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['user3']->value['id'],$_smarty_tpl->tpl_vars['talentpool']->value)) {?><span class="co_fav"><i></i><em>已收藏</em></span><?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['user3']->value['uid'],$_smarty_tpl->tpl_vars['useridmsg']->value)) {?><span class="co_fav"><i></i><em>已邀请</em></span><?php }?> <?php if ($_smarty_tpl->tpl_vars['user3']->value['rec_resume']) {?><img width="15" height="15" src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/tui.png" title="站长推荐" class="user_rz_img png fl"/><?php }?>
									<div class="user_listinfo_city">期望地点：
										<?php if ($_smarty_tpl->tpl_vars['user3']->value['expectcity']) {?> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user3']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
											<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> 
												<span class="user_tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
											<?php }?> 
											<?php } ?> 
										<?php }?>
									</div>
									<div class="user_listinfo_job">期望职位： 
										<?php if ($_smarty_tpl->tpl_vars['user3']->value['expectjob']) {?> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user3']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
												<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class="user_tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?> 
											<?php } ?> 
										<?php }?>
									</div>
			
									<div class="user_listinfo_mytag">
										<?php if ($_smarty_tpl->tpl_vars['user3']->value['tag']) {?>
											<ul class="user_tag_user">
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user3']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
													<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> 
														<li class="user_tag_user_a"><i class="user_tag_user_icon"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
													<?php }?> 
												<?php } ?>
											</ul>
										<?php } else { ?>
											<div class="user_tag_user_p">求职状态：<?php echo $_smarty_tpl->tpl_vars['user3']->value['user_jobstatus_n'];?>
 </div>
										<?php }?>
									</div>
								</div>
								
								<div class="user_want">TA想找<span class="user_want_s"><?php echo $_smarty_tpl->tpl_vars['user3']->value['name'];?>
</span>工作</div>
								<div class="yun_look_right">
									<span class="yun_look_time">
										<?php if ($_smarty_tpl->tpl_vars['user3']->value['redtime']==1||$_smarty_tpl->tpl_vars['user3']->value['time']=='昨天') {?>
											<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['user3']->value['time'];?>
</span> 
										<?php } else { ?> 
											<?php echo $_smarty_tpl->tpl_vars['user3']->value['time'];?>
 
										<?php }?>
									</span>
 									<a href="javascript:void(0);" onclick="showlogin('2');" class="yun_look_bth">查看</a>
								</div>
							</div>
						<?php } ?>
						<div class=" search_nologin_user_bg">
	                    <div class="search_nologin_tip_t">成为企业会员，高效挑选人才！</div>
                       
	                    <div class="search_nologin_tip_p"> 登录或注册后可以查看更多简历信息~</div>
							<dl class="search_nologin_tip_wx">
							  <dt><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
"  width="130" height="130"></dt>
							  <dd>扫一扫，让招聘更轻松</dd>
							</dl>
	                    <div class="search_nologin_tip_bth">
	                        <a href="javascript:void(0);" onclick="showlogin('2');" class="search_nologin_tip_bth_have">登录账号</a>
	                        <a href="<?php echo smarty_function_url(array('m'=>'register'),$_smarty_tpl);?>
">注册会员</a>
	                    </div>               
                        
                       <div class="search_nologin_tip_tel">如有需要任何贴心的服务：<span class="search_nologin_tip_tel_n"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
                       
	                </div>
 	                
						
					
					<?php } else { ?>
						<?php if ($_GET['page']<2) {?>
						
						<?php  $_smarty_tpl->tpl_vars['user2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user2']->_loop = false;
$user2=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"5","topdate"=>"1","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","idcard"=>"\'auto.idcard\'","edu"=>"\'auto.edu\'","order"=>"\'auto.order\'","work"=>"\'auto.work\'","exp"=>"\'auto.exp\'","tag"=>"\'auto.tag\'","sex"=>"\'auto.sex\'","keyword"=>"\'auto.keyword\'","hy"=>"\'auto.hy\'","provinceid"=>"\'auto.provinceid\'","report"=>"\'auto.report\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","adtime"=>"\'auto.adtime\'","pic"=>"\'auto.pic\'","typeids"=>"\'auto.typeids\'","type"=>"\'auto.type\'","job1"=>"\'auto.job1\'","job1_son"=>"\'auto.job1_son\'","job_post"=>"\'auto.job_post\'","uptime"=>"\'auto.uptime\'","post_len"=>"14","item"=>"\'user2\'","name"=>"\'userlist2\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    //处理类别字段
		$cache_array = $db->cacheget();
        $fscache_array = $db->fscacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
        $city_index     = $cache_array["city_index"];
		$job_name		= $cache_array["job_name"];
        $job_index		= $cache_array["job_index"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
        $city_parent       = $fscache_array["city_parent"];
        $job_parent     = $fscache_array["job_parent"];

		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}

		
			$where = "a.`defaults`='1' and a.`status`='1' and a.`r_status`='1'";
            //关注我公司的人才--条件
			if($paramer[where_uid]){
				$where .=" AND a.`uid` in (".$paramer['where_uid'].")";
			}
			//黑名单不能查看已拉黑的个人用户简历
			if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
				$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
				if(is_array($blacklist)&&$blacklist){
					foreach($blacklist as $v){
						$buid[]=$v['c_uid'];
					}
				    $where .=" AND a.`uid` NOT IN (".@implode(",",$buid).")";
				}
			}
            //置顶
			if($paramer[topdate]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
			if($paramer[top]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
            //身份认证
			if($paramer[idcard]){
				$where .=" AND a.`idcard_status`='1'";
			}
			//高级人才
			if($paramer[height_status]){
				$where .=" AND a.`height_status`=".$paramer[height_status];
			}else{
				$where .=" AND a.`height_status`='0'";
			}
			//高级人才推荐
			if($paramer[rec]){
				$where .=" AND a.`rec`=1";
			}
			//普通推荐
			if($paramer[rec_resume]){
				$where .=" AND a.`rec_resume`=1";
			}
			//作品
			if($paramer[work]){
				$show=$db->select_all("resume_show","1 group by eid","`eid`");
				if(is_array($show)){
					foreach($show as $v){
						$eid[]=$v['eid'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$eid).")";
			}
			//标签
			if($paramer[tag]){
			    $tagname=$userclass_name[$paramer[tag]];
				$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
				if(is_array($tag)){
					foreach($tag as $v){
						$tagid[]=$v['def_job'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$tagid).")";
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND a.`lastupdate`>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND a.`lastupdate`>$uptime";
	    		}
			}
			//添加时间区间，即审核时间
			if($paramer[adtime]){
				$time=time();
				$adtime = $time-($paramer[adtime]*86400);
				$where.=" AND a.`status_time`>$adtime";
			}
			//是否有照片
			if($paramer[pic]=="0" || $paramer[pic]){
				$where .=" AND a.`photo`<>'' AND a.`phototype`!=1";
			}
            //行业
			if($paramer['hy']!=""){
				$where .= " AND a.`hy` IN (".$paramer['hy'].")";
			}
            $citywhere = "1";
			//城市大类
			if($paramer[provinceid]){
                $citywhere .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer[cityid]){
                $citywhere .= " AND `cityid` = $paramer[cityid]";
			}
			//城市三级子类
			if($paramer[three_cityid]){
                $citywhere .= " AND `three_cityid` = $paramer[three_cityid]";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
                if($city_parent[$paramer[cityin]]=='0'){
					$citywhere .= " AND `provinceid` = $paramer[cityin]";
				}elseif(in_array($city_parent[$paramer[cityin]],$city_index)){
					$citywhere .= " AND `cityid` = $paramer[cityin]";
				}elseif($city_parent[$paramer[cityin]]>0){
					$citywhere .= " AND `three_cityid` = $paramer[cityin]";
				}
			}
            //职位类别
            $jobwhere = "1";
			if($paramer[job1]){
				$jobwhere.=" AND `job1`= $paramer[job1]";
			}
			if($paramer[job1_son]){
                $jobwhere.=" AND `job1_son`= $paramer[job1_son]";
			}
			if($paramer[job_post]){
                $jobwhere.=" AND `job_post`= $paramer[job_post]";
			}
            //职位区间,不建议执行该查询
			if($paramer[jobin]){
                if($job_parent[$paramer[jobin]]=='0'){
					$jobwhere.=" AND `job1`= $paramer[jobin]";
				}elseif(in_array($job_parent[$paramer[jobin]],$job_index)){
					$jobwhere.=" AND `job1_son`= $paramer[jobin]";
				}elseif($job_parent[$paramer[jobin]]>0){
					$jobwhere.=" AND `job_post`= $paramer[jobin]";
				}
			}
			//工作经验
			if($paramer[exp]){
				$where .=" AND a.`exp`=$paramer[exp]";
			}
			//学历
			if($paramer[edu]){
				$where .=" AND a.`edu`=$paramer[edu]";
			}
			//性别
			if($paramer[sex]){
				$where .=" AND a.`sex`=$paramer[sex]";
			}
			//到岗时间
			if($paramer[report]){
				$where .=" AND a.`report`=$paramer[report]";
			}
			//工作性质
			if($paramer[type]){
				$where .= " AND a.`type`=$paramer[type]";
			}
			//关键字
			if($paramer[keyword]){
				$jobid = array();
				$where1[]="a.`name` LIKE '%$paramer[keyword]%'";
				$where1[]="a.`uname` LIKE '%$paramer[keyword]%'";
                //关键字带期望职位搜索(已有城市选择搜索，这个有点累赘，影响效率)
//              $jobid=array();
// 				foreach($job_name as $k=>$v){
// 					if(strpos($v,$paramer[keyword])!==false){
// 						$jobid[]=$k;
// 					}
// 				}
// 				if(!empty($jobid)){
//                  $class=array();
// 					foreach($jobid as $value){
// 						$class[]="FIND_IN_SET('".$value."',`job_classid`)";
// 					}
// 					$where1[]=@implode(" or ",$class);
// 				}
                //关键字带期望城市搜索
			    $cityid=array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
                //只取匹配到的第一个城市，已选省则匹配省下面的城市、未选择城市则按关键字匹配城市
				if(!empty($cityid)){
                    $ckwhere = "1";
                    if(in_array($cityid[0],$city_index)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `provinceid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_two)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `cityid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_three)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `three_cityid` = $cityid[0]";
                    }
                    $cityresume = $db->select_all("resume_city",$ckwhere);
                    if($cityresume){
                        foreach ($cityresume as $v){
                            $where1[]=" `a.id`=".$v['eid'];
                        }
                    }
				}
                $where.=" AND (".@implode(" or ",$where1).")";
			}
			//薪资待遇
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary])."))";
			}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`>=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).")
							or (a.`minsalary`!=0 and  a.`maxsalary`=0))";
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary]).")
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`<=".intval($paramer[maxsalary]).")  
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`=0) 
							or (a.`minsalary`=0 and a.`maxsalary`!=0)
							)";
			}
	        //排序字段默认为更新时间
			if($paramer[order] && $paramer[order]!="lastdate"){
				if($paramer[order]=='topdate'){
					$nowtime=time();
					$order = " ORDER BY if(a.`topdate`>$nowtime,a.`topdate`,a.`lastupdate`)";
				}else{
					$order = " ORDER BY a.`".$paramer[order]."`";
				}
			}else{
				$order = " ORDER BY a.`lastupdate` ";
			}
			//排序规则 默认为倒序
			$sort = $paramer[sort]?$paramer[sort]:'DESC';
			//查询条数
			if($paramer[limit]){
				$limit=" LIMIT ".$paramer[limit];
			}
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
 			}
            $pagewhere = "";$joinwhere = "";
            if($citywhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_cityclass` where ".$citywhere." group by `eid`) b";
                $joinwhere .= " a.`id`=b.`eid` and ";
            }
            if($jobwhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_jobclass` where ".$jobwhere." group by `eid`) c";
                $joinwhere .= " a.`id`=c.`eid` and ";
            }
			if($paramer[ispage]){
				if($paramer["height_status"]){
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl,$pagewhere,$joinwhere);
				}else{
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl,$pagewhere,$joinwhere);
				}
			}
	
			if($paramer[topdate] && $_GET[page]>1){
				$user2 = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere.$where.$order.$sort.$limit;
					$user2=$db->DB_query_all($sql,"all");
				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$user2=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($user2) && is_array($user2)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user2 as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($user2 as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($user2 as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user2[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $user2[$k]['where']=$citywhere;
			    		$user2[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user2[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user2[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user2[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user2[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$user2[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1){
            					$user2[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$user2[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$user2[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1){
									$user2[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$user2[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$user2[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$user2[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $user2[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user2[$k]['nametype']=$val[nametype];
                        $user2[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $user2[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $user2[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $user2[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$user2[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$user2[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user2[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user2[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user2[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				//更新时间显示方式
				$time=$v['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$user2[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user2[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user2[$k]['time'] = date("H:i",$v['lastupdate']);
					$user2[$k]['redtime'] =1;
				}else{
					$user2[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				$user2[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
// 				$user2[$k]['job_city_one']=$city_name[$v['provinceid']];
// 				$user2[$k]['job_city_two']=$city_name[$v['cityid']];
// 				$user2[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$user2[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user2[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user2[$k]["salary_n"] = "面议";
    			}
				$user2[$k]['report_n']=$userclass_name[$v['report']];
				$user2[$k]['type_n']=$userclass_name[$v['type']];
				$user2[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user2[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user2[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user2[$k]['m_name']=$m_name[$v['uid']];
					$user2[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				//$user2[$k]['job_post']=@implode(",",$jobname);
				$user2[$k]['expectjob']=$jobname;
				$kcity_classid=@explode(",",$v['city_classid']);
				$kcity_classid=array_unique($kcity_classid);	
				$cityname=array();
				if(is_array($kcity_classid)){
					foreach($kcity_classid as $val){
					    if($val!=''){
					       
                            $cityname[]=$city_name[$val];
                            
                        }
					}
				}
                //$user2[$k]['citylist']=@implode("/",$cityname);
				$user2[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user2[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$user2[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($user2 as $k=>$v){
               if($paramer['keyword']){
					$user2[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user2[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user2[$k]['job_post']);
					$user2[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user2[$k]['job_post_n']);
					$user2[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user2[$k]['city_name_n']);
				}
            }
			if($paramer['keyword']!=""&&!empty($user2)){
				addkeywords('5',$paramer['keyword']);
			}
		}$user2 = $user2; if (!is_array($user2) && !is_object($user2)) { settype($user2, 'array');}
foreach ($user2 as $_smarty_tpl->tpl_vars['user2']->key => $_smarty_tpl->tpl_vars['user2']->value) {
$_smarty_tpl->tpl_vars['user2']->_loop = true;
?> 
						
						<div class="search_job_list <?php if ($_smarty_tpl->tpl_vars['key']->value%2!='0') {
}?>">
						
							<div class="user_photo_left">
								<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user2']->value['id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['user2']->value['photo'];?>
" width="80" height="80" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" /></a>
								<i class="resume_list_xb resume_list_xb <?php if ($_smarty_tpl->tpl_vars['user2']->value['sex']=='女') {?>resume_list_xb_nv<?php }?>"></i>
							</div>
							
							<div class="usersearch_job_left_siaber" style="width:450px;">
								<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user2']->value['id']),$_smarty_tpl);?>
" target="_blank" class="fl user_name"> <?php if (in_array($_smarty_tpl->tpl_vars['user2']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['user2']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['user2']->value['username_n'];
}?></a>
								<span class="user_listinfo fl">
									<?php if ($_smarty_tpl->tpl_vars['user2']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['user2']->value['age'];?>
岁<?php }?>
									<i class="user_listinfo_line">|</i>
									<?php echo $_smarty_tpl->tpl_vars['user2']->value['exp_n'];?>
经验
									<i class="user_listinfo_line">|</i>
									<?php echo $_smarty_tpl->tpl_vars['user2']->value['edu_n'];?>
学历 
								</span> 
									
									<?php if ($_smarty_tpl->tpl_vars['user2']->value['idcard_status']=='1') {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/sf.png" title="身份已认证" class="user_rz_img png fl" /><?php }?> 
									<?php if ($_smarty_tpl->tpl_vars['user2']->value['ispic']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/profile.png" title="有形象照" class="user_rz_img png fl" /><?php }?> 
									<?php if (in_array($_smarty_tpl->tpl_vars['user2']->value['id'],$_smarty_tpl->tpl_vars['lookresume']->value)) {?><span class="co_fav"><i></i><em>已浏览</em></span><?php }?> 
									<?php if (in_array($_smarty_tpl->tpl_vars['user2']->value['id'],$_smarty_tpl->tpl_vars['talentpool']->value)) {?><span class="co_fav"><i></i><em>已收藏</em></span><?php }?> 
									<?php if (in_array($_smarty_tpl->tpl_vars['user2']->value['uid'],$_smarty_tpl->tpl_vars['useridmsg']->value)) {?><span class="co_fav"><i></i><em>已邀请</em></span><?php }?> 
									<?php if ($_smarty_tpl->tpl_vars['user2']->value['rec_resume']) {?><img width="15" height="15" src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/tui.png" title="站长推荐" class="user_rz_img png fl"/><?php }?>
	
								<div class="user_listinfo_city">期望地点：
									<?php if ($_smarty_tpl->tpl_vars['user2']->value['expectcity']) {?> 
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user2']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
										<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> 
											<span class="user_tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
										<?php }?> 
										<?php } ?> 
									<?php }?>
								</div>
	
								<div class="user_listinfo_job">期望职位： 
									<?php if ($_smarty_tpl->tpl_vars['user2']->value['expectjob']) {?> 
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user2']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
										<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> 
											<span class="user_tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
										<?php }?> 
										<?php } ?> 
									<?php }?>
								</div>
	
								<?php if ($_smarty_tpl->tpl_vars['user2']->value['tag']) {?>
									<ul class="user_tag_user">
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user2']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
											<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <li class="user_tag_user_a"><i class="user_tag_user_icon"></i><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li><?php }?> 
										<?php } ?>
									</ul>
								<?php } else { ?>
									<div class="user_tag_user_p"><?php echo $_smarty_tpl->tpl_vars['user2']->value['user_jobstatus_n'];?>
</div>
								<?php }?>
								
							</div>
							<div class="user_want">TA想找<span class="user_want_s"><?php echo $_smarty_tpl->tpl_vars['user2']->value['name'];?>
</span>工作</div>
							<div class="yun_look_right">
								<span class="yun_look_time"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/Top.gif"></span>
								<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user2']->value['id']),$_smarty_tpl);?>
" target="_blank" class="yun_look_bth ">查看</a>
							</div>
						</div>
						<?php } ?> 
						<?php }?>
					
						<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$user=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"20","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","noid"=>"1","idcard"=>"\'auto.idcard\'","edu"=>"\'auto.edu\'","order"=>"\'auto.order\'","work"=>"\'auto.work\'","exp"=>"\'auto.exp\'","tag"=>"\'auto.tag\'","sex"=>"\'auto.sex\'","keyword"=>"\'auto.keyword\'","hy"=>"\'auto.hy\'","provinceid"=>"\'auto.provinceid\'","report"=>"\'auto.report\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","adtime"=>"\'auto.adtime\'","pic"=>"\'auto.pic\'","typeids"=>"\'auto.typeids\'","type"=>"\'auto.type\'","job1"=>"\'auto.job1\'","job1_son"=>"\'auto.job1_son\'","job_post"=>"\'auto.job_post\'","uptime"=>"\'auto.uptime\'","post_len"=>"14","ispage"=>"1","item"=>"\'user\'","key"=>"\'key\'","name"=>"\'userlist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    //处理类别字段
		$cache_array = $db->cacheget();
        $fscache_array = $db->fscacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
        $city_index     = $cache_array["city_index"];
		$job_name		= $cache_array["job_name"];
        $job_index		= $cache_array["job_index"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
        $city_parent       = $fscache_array["city_parent"];
        $job_parent     = $fscache_array["job_parent"];

		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}

		
			$where = "a.`defaults`='1' and a.`status`='1' and a.`r_status`='1'";
            //关注我公司的人才--条件
			if($paramer[where_uid]){
				$where .=" AND a.`uid` in (".$paramer['where_uid'].")";
			}
			//黑名单不能查看已拉黑的个人用户简历
			if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
				$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
				if(is_array($blacklist)&&$blacklist){
					foreach($blacklist as $v){
						$buid[]=$v['c_uid'];
					}
				    $where .=" AND a.`uid` NOT IN (".@implode(",",$buid).")";
				}
			}
            //置顶
			if($paramer[topdate]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
			if($paramer[top]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
            //身份认证
			if($paramer[idcard]){
				$where .=" AND a.`idcard_status`='1'";
			}
			//高级人才
			if($paramer[height_status]){
				$where .=" AND a.`height_status`=".$paramer[height_status];
			}else{
				$where .=" AND a.`height_status`='0'";
			}
			//高级人才推荐
			if($paramer[rec]){
				$where .=" AND a.`rec`=1";
			}
			//普通推荐
			if($paramer[rec_resume]){
				$where .=" AND a.`rec_resume`=1";
			}
			//作品
			if($paramer[work]){
				$show=$db->select_all("resume_show","1 group by eid","`eid`");
				if(is_array($show)){
					foreach($show as $v){
						$eid[]=$v['eid'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$eid).")";
			}
			//标签
			if($paramer[tag]){
			    $tagname=$userclass_name[$paramer[tag]];
				$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
				if(is_array($tag)){
					foreach($tag as $v){
						$tagid[]=$v['def_job'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$tagid).")";
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND a.`lastupdate`>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND a.`lastupdate`>$uptime";
	    		}
			}
			//添加时间区间，即审核时间
			if($paramer[adtime]){
				$time=time();
				$adtime = $time-($paramer[adtime]*86400);
				$where.=" AND a.`status_time`>$adtime";
			}
			//是否有照片
			if($paramer[pic]=="0" || $paramer[pic]){
				$where .=" AND a.`photo`<>'' AND a.`phototype`!=1";
			}
            //行业
			if($paramer['hy']!=""){
				$where .= " AND a.`hy` IN (".$paramer['hy'].")";
			}
            $citywhere = "1";
			//城市大类
			if($paramer[provinceid]){
                $citywhere .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer[cityid]){
                $citywhere .= " AND `cityid` = $paramer[cityid]";
			}
			//城市三级子类
			if($paramer[three_cityid]){
                $citywhere .= " AND `three_cityid` = $paramer[three_cityid]";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
                if($city_parent[$paramer[cityin]]=='0'){
					$citywhere .= " AND `provinceid` = $paramer[cityin]";
				}elseif(in_array($city_parent[$paramer[cityin]],$city_index)){
					$citywhere .= " AND `cityid` = $paramer[cityin]";
				}elseif($city_parent[$paramer[cityin]]>0){
					$citywhere .= " AND `three_cityid` = $paramer[cityin]";
				}
			}
            //职位类别
            $jobwhere = "1";
			if($paramer[job1]){
				$jobwhere.=" AND `job1`= $paramer[job1]";
			}
			if($paramer[job1_son]){
                $jobwhere.=" AND `job1_son`= $paramer[job1_son]";
			}
			if($paramer[job_post]){
                $jobwhere.=" AND `job_post`= $paramer[job_post]";
			}
            //职位区间,不建议执行该查询
			if($paramer[jobin]){
                if($job_parent[$paramer[jobin]]=='0'){
					$jobwhere.=" AND `job1`= $paramer[jobin]";
				}elseif(in_array($job_parent[$paramer[jobin]],$job_index)){
					$jobwhere.=" AND `job1_son`= $paramer[jobin]";
				}elseif($job_parent[$paramer[jobin]]>0){
					$jobwhere.=" AND `job_post`= $paramer[jobin]";
				}
			}
			//工作经验
			if($paramer[exp]){
				$where .=" AND a.`exp`=$paramer[exp]";
			}
			//学历
			if($paramer[edu]){
				$where .=" AND a.`edu`=$paramer[edu]";
			}
			//性别
			if($paramer[sex]){
				$where .=" AND a.`sex`=$paramer[sex]";
			}
			//到岗时间
			if($paramer[report]){
				$where .=" AND a.`report`=$paramer[report]";
			}
			//工作性质
			if($paramer[type]){
				$where .= " AND a.`type`=$paramer[type]";
			}
			//关键字
			if($paramer[keyword]){
				$jobid = array();
				$where1[]="a.`name` LIKE '%$paramer[keyword]%'";
				$where1[]="a.`uname` LIKE '%$paramer[keyword]%'";
                //关键字带期望职位搜索(已有城市选择搜索，这个有点累赘，影响效率)
//              $jobid=array();
// 				foreach($job_name as $k=>$v){
// 					if(strpos($v,$paramer[keyword])!==false){
// 						$jobid[]=$k;
// 					}
// 				}
// 				if(!empty($jobid)){
//                  $class=array();
// 					foreach($jobid as $value){
// 						$class[]="FIND_IN_SET('".$value."',`job_classid`)";
// 					}
// 					$where1[]=@implode(" or ",$class);
// 				}
                //关键字带期望城市搜索
			    $cityid=array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
                //只取匹配到的第一个城市，已选省则匹配省下面的城市、未选择城市则按关键字匹配城市
				if(!empty($cityid)){
                    $ckwhere = "1";
                    if(in_array($cityid[0],$city_index)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `provinceid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_two)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `cityid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_three)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `three_cityid` = $cityid[0]";
                    }
                    $cityresume = $db->select_all("resume_city",$ckwhere);
                    if($cityresume){
                        foreach ($cityresume as $v){
                            $where1[]=" `a.id`=".$v['eid'];
                        }
                    }
				}
                $where.=" AND (".@implode(" or ",$where1).")";
			}
			//薪资待遇
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary])."))";
			}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`>=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).")
							or (a.`minsalary`!=0 and  a.`maxsalary`=0))";
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary]).")
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`<=".intval($paramer[maxsalary]).")  
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`=0) 
							or (a.`minsalary`=0 and a.`maxsalary`!=0)
							)";
			}
	        //排序字段默认为更新时间
			if($paramer[order] && $paramer[order]!="lastdate"){
				if($paramer[order]=='topdate'){
					$nowtime=time();
					$order = " ORDER BY if(a.`topdate`>$nowtime,a.`topdate`,a.`lastupdate`)";
				}else{
					$order = " ORDER BY a.`".$paramer[order]."`";
				}
			}else{
				$order = " ORDER BY a.`lastupdate` ";
			}
			//排序规则 默认为倒序
			$sort = $paramer[sort]?$paramer[sort]:'DESC';
			//查询条数
			if($paramer[limit]){
				$limit=" LIMIT ".$paramer[limit];
			}
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
 			}
            $pagewhere = "";$joinwhere = "";
            if($citywhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_cityclass` where ".$citywhere." group by `eid`) b";
                $joinwhere .= " a.`id`=b.`eid` and ";
            }
            if($jobwhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_jobclass` where ".$jobwhere." group by `eid`) c";
                $joinwhere .= " a.`id`=c.`eid` and ";
            }
			if($paramer[ispage]){
				if($paramer["height_status"]){
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl,$pagewhere,$joinwhere);
				}else{
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl,$pagewhere,$joinwhere);
				}
			}
	
			if($paramer[topdate] && $_GET[page]>1){
				$user = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere.$where.$order.$sort.$limit;
					$user=$db->DB_query_all($sql,"all");
				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$user=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($user) && is_array($user)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($user as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($user as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $user[$k]['where']=$citywhere;
			    		$user[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$user[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1){
            					$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$user[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1){
									$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $user[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user[$k]['nametype']=$val[nametype];
                        $user[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $user[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$user[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				//更新时间显示方式
				$time=$v['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$user[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user[$k]['time'] = date("H:i",$v['lastupdate']);
					$user[$k]['redtime'] =1;
				}else{
					$user[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				$user[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
// 				$user[$k]['job_city_one']=$city_name[$v['provinceid']];
// 				$user[$k]['job_city_two']=$city_name[$v['cityid']];
// 				$user[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$user[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user[$k]["salary_n"] = "面议";
    			}
				$user[$k]['report_n']=$userclass_name[$v['report']];
				$user[$k]['type_n']=$userclass_name[$v['type']];
				$user[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user[$k]['m_name']=$m_name[$v['uid']];
					$user[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				//$user[$k]['job_post']=@implode(",",$jobname);
				$user[$k]['expectjob']=$jobname;
				$kcity_classid=@explode(",",$v['city_classid']);
				$kcity_classid=array_unique($kcity_classid);	
				$cityname=array();
				if(is_array($kcity_classid)){
					foreach($kcity_classid as $val){
					    if($val!=''){
					       
                            $cityname[]=$city_name[$val];
                            
                        }
					}
				}
                //$user[$k]['citylist']=@implode("/",$cityname);
				$user[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$user[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($user as $k=>$v){
               if($paramer['keyword']){
					$user[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['job_post']);
					$user[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['job_post_n']);
					$user[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['city_name_n']);
				}
            }
			if($paramer['keyword']!=""&&!empty($user)){
				addkeywords('5',$paramer['keyword']);
			}
		}$user = $user; if (!is_array($user) && !is_object($user)) { settype($user, 'array');}
foreach ($user as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
							<div class="search_job_list <?php if ($_smarty_tpl->tpl_vars['key']->value%2!='0') {
}?>">
								
								<div class="user_photo_left">
									<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
" target="_blank">
										<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" width="80" height="80" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" />
									</a>
									<i class="resume_list_xb resume_list_xb <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=='女') {?>resume_list_xb_nv<?php }?>"></i>
								</div>
			
								<div class="usersearch_job_left_siaber" style="width:450px">
									<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
" target="_blank" class="fl user_name">
										<?php if (in_array($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['user']->value['uname'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['user']->value['username_n'];?>
 <?php }?>
									</a>
									<span class="user_listinfo fl"><?php if ($_smarty_tpl->tpl_vars['user']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
岁<?php }?><i class="user_listinfo_line">|</i><?php echo $_smarty_tpl->tpl_vars['user']->value['exp_n'];?>
经验<i class="user_listinfo_line">|</i><?php echo $_smarty_tpl->tpl_vars['user']->value['edu_n'];?>
学历 </span> <?php if ($_smarty_tpl->tpl_vars['user']->value['idcard_status']=='1') {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/sf.png" title="身份已认证" class="user_rz_img png fl" /><?php }?> <?php if ($_smarty_tpl->tpl_vars['user']->value['ispic']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/profile.png" title="有形象照" class="user_rz_img png fl" /><?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['lookresume']->value)) {?><span class="co_fav"><i></i><em>已浏览</em></span><?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['talentpool']->value)) {?><span class="co_fav"><i></i><em>已收藏</em></span><?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['user']->value['uid'],$_smarty_tpl->tpl_vars['useridmsg']->value)) {?><span class="co_fav"><i></i><em>已邀请</em></span><?php }?> <?php if ($_smarty_tpl->tpl_vars['user']->value['rec_resume']) {?><img width="15" height="15" src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/tui.png" title="站长推荐" class="user_rz_img png fl"/><?php }?>
									<div class="user_listinfo_city">期望地点：
										<?php if ($_smarty_tpl->tpl_vars['user']->value['expectcity']) {?> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
											<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> 
												<span class="user_tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
											<?php }?> 
											<?php } ?> 
										<?php }?>
									</div>
									<div class="user_listinfo_job">期望职位： 
										<?php if ($_smarty_tpl->tpl_vars['user']->value['expectjob']) {?> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
												<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class="user_tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?> 
											<?php } ?> 
										<?php }?>
									</div>
			
									<div class="user_listinfo_mytag">
										<?php if ($_smarty_tpl->tpl_vars['user']->value['tag']) {?>
											<ul class="user_tag_user">
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
													<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> 
														<li class="user_tag_user_a"><i class="user_tag_user_icon"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
													<?php }?> 
												<?php } ?>
											</ul>
										<?php } else { ?>
											<div class="user_tag_user_p">求职状态：<?php echo $_smarty_tpl->tpl_vars['user']->value['user_jobstatus_n'];?>
 </div>
										<?php }?>
									</div>
								</div>
								
								<div class="user_want">TA想找<span class="user_want_s"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span>工作</div>
								<div class="yun_look_right">
									<span class="yun_look_time">
										<?php if ($_smarty_tpl->tpl_vars['user']->value['redtime']==1||$_smarty_tpl->tpl_vars['user']->value['time']=='昨天') {?>
											<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['user']->value['time'];?>
</span> 
										<?php } else { ?> 
											<?php echo $_smarty_tpl->tpl_vars['user']->value['time'];?>
 
										<?php }?>
									</span>
									<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
" target="_blank" class="yun_look_bth ">查看</a>
								</div>
							</div>
						<?php } ?>
						
						<div class="clear"></div>
						<?php if ($_smarty_tpl->tpl_vars['total']->value!=0||is_array($_smarty_tpl->tpl_vars['user2']->value)) {?>
							<div class="search_pages">
								<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;
echo $_smarty_tpl->tpl_vars['totalshow']->value;?>
</div>
							</div>
						<?php } else { ?>
							<div class="seachno">
								<div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif" width="144" height="102" /></div>
								<div class="listno-content"> 
									<strong>很抱歉，没有找到满足条件的人才</strong><br>
									<span> 建议您：<br>1、适当减少已选择的条件<br>2、适当删减或更改搜索关键字<br></span> 
									<span> 热门关键字：<br>
										<?php  $_smarty_tpl->tpl_vars['klist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['klist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"10","recom"=>"1","type"=>"5","item"=>"\'klist\'","nocache"=>"")
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
foreach ($list as $_smarty_tpl->tpl_vars['klist']->key => $_smarty_tpl->tpl_vars['klist']->value) {
$_smarty_tpl->tpl_vars['klist']->_loop = true;
?>
											<a href="<?php echo smarty_function_listurl(array('m'=>'resume','type'=>'keyword','v'=>$_smarty_tpl->tpl_vars['klist']->value['key_title']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['klist']->value['key_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['klist']->value['key_name'];?>
</a> 
										<?php } ?>
									</span> 
								</div>
							</div>
						<?php }?>
					
					<?php }?>
            	</div>
            	
            <div class="user_recommendation">
                <div class="job_recommendation_title"><span class="job_recommendation_span"><i class="job_recommendation_span_line"></i>简历推荐</span></div>
                <div class="userresume_recommendation">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['userrec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userrec']->_loop = false;
$userrec=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"18","post_len"=>"18","rec_resume"=>"1","item"=>"\'userrec\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    //处理类别字段
		$cache_array = $db->cacheget();
        $fscache_array = $db->fscacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
        $city_index     = $cache_array["city_index"];
		$job_name		= $cache_array["job_name"];
        $job_index		= $cache_array["job_index"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
        $city_parent       = $fscache_array["city_parent"];
        $job_parent     = $fscache_array["job_parent"];

		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}

		
			$where = "a.`defaults`='1' and a.`status`='1' and a.`r_status`='1'";
            //关注我公司的人才--条件
			if($paramer[where_uid]){
				$where .=" AND a.`uid` in (".$paramer['where_uid'].")";
			}
			//黑名单不能查看已拉黑的个人用户简历
			if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
				$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
				if(is_array($blacklist)&&$blacklist){
					foreach($blacklist as $v){
						$buid[]=$v['c_uid'];
					}
				    $where .=" AND a.`uid` NOT IN (".@implode(",",$buid).")";
				}
			}
            //置顶
			if($paramer[topdate]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
			if($paramer[top]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
            //身份认证
			if($paramer[idcard]){
				$where .=" AND a.`idcard_status`='1'";
			}
			//高级人才
			if($paramer[height_status]){
				$where .=" AND a.`height_status`=".$paramer[height_status];
			}else{
				$where .=" AND a.`height_status`='0'";
			}
			//高级人才推荐
			if($paramer[rec]){
				$where .=" AND a.`rec`=1";
			}
			//普通推荐
			if($paramer[rec_resume]){
				$where .=" AND a.`rec_resume`=1";
			}
			//作品
			if($paramer[work]){
				$show=$db->select_all("resume_show","1 group by eid","`eid`");
				if(is_array($show)){
					foreach($show as $v){
						$eid[]=$v['eid'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$eid).")";
			}
			//标签
			if($paramer[tag]){
			    $tagname=$userclass_name[$paramer[tag]];
				$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
				if(is_array($tag)){
					foreach($tag as $v){
						$tagid[]=$v['def_job'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$tagid).")";
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND a.`lastupdate`>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND a.`lastupdate`>$uptime";
	    		}
			}
			//添加时间区间，即审核时间
			if($paramer[adtime]){
				$time=time();
				$adtime = $time-($paramer[adtime]*86400);
				$where.=" AND a.`status_time`>$adtime";
			}
			//是否有照片
			if($paramer[pic]=="0" || $paramer[pic]){
				$where .=" AND a.`photo`<>'' AND a.`phototype`!=1";
			}
            //行业
			if($paramer['hy']!=""){
				$where .= " AND a.`hy` IN (".$paramer['hy'].")";
			}
            $citywhere = "1";
			//城市大类
			if($paramer[provinceid]){
                $citywhere .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer[cityid]){
                $citywhere .= " AND `cityid` = $paramer[cityid]";
			}
			//城市三级子类
			if($paramer[three_cityid]){
                $citywhere .= " AND `three_cityid` = $paramer[three_cityid]";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
                if($city_parent[$paramer[cityin]]=='0'){
					$citywhere .= " AND `provinceid` = $paramer[cityin]";
				}elseif(in_array($city_parent[$paramer[cityin]],$city_index)){
					$citywhere .= " AND `cityid` = $paramer[cityin]";
				}elseif($city_parent[$paramer[cityin]]>0){
					$citywhere .= " AND `three_cityid` = $paramer[cityin]";
				}
			}
            //职位类别
            $jobwhere = "1";
			if($paramer[job1]){
				$jobwhere.=" AND `job1`= $paramer[job1]";
			}
			if($paramer[job1_son]){
                $jobwhere.=" AND `job1_son`= $paramer[job1_son]";
			}
			if($paramer[job_post]){
                $jobwhere.=" AND `job_post`= $paramer[job_post]";
			}
            //职位区间,不建议执行该查询
			if($paramer[jobin]){
                if($job_parent[$paramer[jobin]]=='0'){
					$jobwhere.=" AND `job1`= $paramer[jobin]";
				}elseif(in_array($job_parent[$paramer[jobin]],$job_index)){
					$jobwhere.=" AND `job1_son`= $paramer[jobin]";
				}elseif($job_parent[$paramer[jobin]]>0){
					$jobwhere.=" AND `job_post`= $paramer[jobin]";
				}
			}
			//工作经验
			if($paramer[exp]){
				$where .=" AND a.`exp`=$paramer[exp]";
			}
			//学历
			if($paramer[edu]){
				$where .=" AND a.`edu`=$paramer[edu]";
			}
			//性别
			if($paramer[sex]){
				$where .=" AND a.`sex`=$paramer[sex]";
			}
			//到岗时间
			if($paramer[report]){
				$where .=" AND a.`report`=$paramer[report]";
			}
			//工作性质
			if($paramer[type]){
				$where .= " AND a.`type`=$paramer[type]";
			}
			//关键字
			if($paramer[keyword]){
				$jobid = array();
				$where1[]="a.`name` LIKE '%$paramer[keyword]%'";
				$where1[]="a.`uname` LIKE '%$paramer[keyword]%'";
                //关键字带期望职位搜索(已有城市选择搜索，这个有点累赘，影响效率)
//              $jobid=array();
// 				foreach($job_name as $k=>$v){
// 					if(strpos($v,$paramer[keyword])!==false){
// 						$jobid[]=$k;
// 					}
// 				}
// 				if(!empty($jobid)){
//                  $class=array();
// 					foreach($jobid as $value){
// 						$class[]="FIND_IN_SET('".$value."',`job_classid`)";
// 					}
// 					$where1[]=@implode(" or ",$class);
// 				}
                //关键字带期望城市搜索
			    $cityid=array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
                //只取匹配到的第一个城市，已选省则匹配省下面的城市、未选择城市则按关键字匹配城市
				if(!empty($cityid)){
                    $ckwhere = "1";
                    if(in_array($cityid[0],$city_index)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `provinceid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_two)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `cityid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_three)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `three_cityid` = $cityid[0]";
                    }
                    $cityresume = $db->select_all("resume_city",$ckwhere);
                    if($cityresume){
                        foreach ($cityresume as $v){
                            $where1[]=" `a.id`=".$v['eid'];
                        }
                    }
				}
                $where.=" AND (".@implode(" or ",$where1).")";
			}
			//薪资待遇
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary])."))";
			}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`>=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).")
							or (a.`minsalary`!=0 and  a.`maxsalary`=0))";
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary]).")
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`<=".intval($paramer[maxsalary]).")  
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`=0) 
							or (a.`minsalary`=0 and a.`maxsalary`!=0)
							)";
			}
	        //排序字段默认为更新时间
			if($paramer[order] && $paramer[order]!="lastdate"){
				if($paramer[order]=='topdate'){
					$nowtime=time();
					$order = " ORDER BY if(a.`topdate`>$nowtime,a.`topdate`,a.`lastupdate`)";
				}else{
					$order = " ORDER BY a.`".$paramer[order]."`";
				}
			}else{
				$order = " ORDER BY a.`lastupdate` ";
			}
			//排序规则 默认为倒序
			$sort = $paramer[sort]?$paramer[sort]:'DESC';
			//查询条数
			if($paramer[limit]){
				$limit=" LIMIT ".$paramer[limit];
			}
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
 			}
            $pagewhere = "";$joinwhere = "";
            if($citywhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_cityclass` where ".$citywhere." group by `eid`) b";
                $joinwhere .= " a.`id`=b.`eid` and ";
            }
            if($jobwhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_jobclass` where ".$jobwhere." group by `eid`) c";
                $joinwhere .= " a.`id`=c.`eid` and ";
            }
			if($paramer[ispage]){
				if($paramer["height_status"]){
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl,$pagewhere,$joinwhere);
				}else{
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl,$pagewhere,$joinwhere);
				}
			}
	
			if($paramer[topdate] && $_GET[page]>1){
				$userrec = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere.$where.$order.$sort.$limit;
					$userrec=$db->DB_query_all($sql,"all");
				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$userrec=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($userrec) && is_array($userrec)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($userrec as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($userrec as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($userrec as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($userrec[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $userrec[$k]['where']=$citywhere;
			    		$userrec[$k]['edu_n']=$userclass_name[$val['edu']];
				        $userrec[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$userrec[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$userrec[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $userrec[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$userrec[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1){
            					$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$userrec[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1){
									$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $userrec[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $userrec[$k]['nametype']=$val[nametype];
                        $userrec[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $userrec[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$userrec[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$userrec[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$userrec[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				//更新时间显示方式
				$time=$v['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$userrec[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$userrec[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$userrec[$k]['time'] = date("H:i",$v['lastupdate']);
					$userrec[$k]['redtime'] =1;
				}else{
					$userrec[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				$userrec[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
// 				$userrec[$k]['job_city_one']=$city_name[$v['provinceid']];
// 				$userrec[$k]['job_city_two']=$city_name[$v['cityid']];
// 				$userrec[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$userrec[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $userrec[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$userrec[$k]["salary_n"] = "面议";
    			}
				$userrec[$k]['report_n']=$userclass_name[$v['report']];
				$userrec[$k]['type_n']=$userclass_name[$v['type']];
				$userrec[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$userrec[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$userrec[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$userrec[$k]['m_name']=$m_name[$v['uid']];
					$userrec[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				//$userrec[$k]['job_post']=@implode(",",$jobname);
				$userrec[$k]['expectjob']=$jobname;
				$kcity_classid=@explode(",",$v['city_classid']);
				$kcity_classid=array_unique($kcity_classid);	
				$cityname=array();
				if(is_array($kcity_classid)){
					foreach($kcity_classid as $val){
					    if($val!=''){
					       
                            $cityname[]=$city_name[$val];
                            
                        }
					}
				}
                //$userrec[$k]['citylist']=@implode("/",$cityname);
				$userrec[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$userrec[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$userrec[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($userrec as $k=>$v){
               if($paramer['keyword']){
					$userrec[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$userrec[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$userrec[$k]['job_post']);
					$userrec[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$userrec[$k]['job_post_n']);
					$userrec[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$userrec[$k]['city_name_n']);
				}
            }
			if($paramer['keyword']!=""&&!empty($userrec)){
				addkeywords('5',$paramer['keyword']);
			}
		}$userrec = $userrec; if (!is_array($userrec) && !is_object($userrec)) { settype($userrec, 'array');}
foreach ($userrec as $_smarty_tpl->tpl_vars['userrec']->key => $_smarty_tpl->tpl_vars['userrec']->value) {
$_smarty_tpl->tpl_vars['userrec']->_loop = true;
?>
                        <li>
                            <div class="userresume_people_box">
                                <div class="userresume_people_box_rt fl">
									
									<?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']==1&&!$_smarty_tpl->tpl_vars['uid']->value) {?>
										<a href="javascript:;" onClick="showlogin('2');">
									<?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['userrec']->value['user_url'];?>
" target="_blank">
									<?php }?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['userrec']->value['photo'];?>
" width="50" height="50" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" />
									</a><i class="userresume_people_box_rt_tj"></i></div>
                                <div class="userresume_people_box_ft fl">
                                    <div class="userresume_people_box_ft_nm">

										<?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']==1&&!$_smarty_tpl->tpl_vars['uid']->value) {?>
											<a href="javascript:;" onClick="showlogin('2');">
										<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['userrec']->value['user_url'];?>
" target="_blank">
										<?php }?>
											<?php if (in_array($_smarty_tpl->tpl_vars['userrec']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {?>
												<?php echo $_smarty_tpl->tpl_vars['userrec']->value['uname'];?>

											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['userrec']->value['username_n'];?>

											<?php }?>
										</a>
                                    </div>
                                    <div class="userresume_people_box_ft_v"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['exp_n'];?>
经验<i class="userresume_line">|</i><?php echo $_smarty_tpl->tpl_vars['userrec']->value['edu_n'];?>
学历</div>
                                    <div class="userresume_people_box_ft_y"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['job_post_n'];?>
</div>
                                </div>

                            </div>
                        </li>
                        <?php } ?>
                    </ul>

                </div>

            </div>
            <div class="yun_content">
                <div class="recomme_det">
                    <h3 class=""><span class="recomme_det_hh">企业推荐</span></h3>

                    <div class="co_recom">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['com'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['com']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"8","rec"=>"1","item"=>"\'com\'","nocache"=>"")
;');$com=array();
		
		$time = time();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr['arr'];
		$Purl =  $ParamerArr['purl'];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		} 
		
		$cache_array = $db->cacheget();

		//使用sphinx查询代替mysql查询（查询出id/uid,再到mysql查询内容）
		if(isUseSphinx()){
			$sphinx = new sphinx();
            $where = array();
            $queryStr = array();

            $where [] = array("setFilter", "name_not_empty", array(1));
            $where [] = array("setFilter", "hy_not_empty", array(1));
    
			//关键字
			if($paramer['keyword']){
				$where["keywords"] = $paramer["keyword"];
			}				
			//公司行业
			if($paramer['hy']){
				$where [] = array("setFilter", "hy", array($paramer["hy"]));
			}
			//公司体制
			if($paramer['pr']){
				$where [] = array("setFilter", "pr", array($paramer["pr"]));
			}
			//公司规模
			if($paramer['mun']){
				$where [] = array("setFilter", "mun", array($paramer["mun"]));
			}

			$comclass_name = $cache_array["comclass_name"];
            //福利待遇
			if($paramer[welfare]){
		    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company","`name`<>'' and `hy`<>'' and FIND_IN_SET('".$welfarename."',`welfare`)","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				if($welfareid){
					$where [] = array("setFilter", "uid", $welfareid);
				}
			}

			//公司地点
			if($paramer['provinceid']){
				$where [] = array("setFilter", "provinceid", array($paramer["provinceid"]) );
			}
			//城市二级子类
			if($paramer['cityid']){
				$queryStr[] = "(@provinceid = $paramer[cityid] or @cityid = $paramer[cityid])";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$queryStr[] = "(@provinceid = $paramer[three_cityid] or @cityid = $paramer[three_cityid] or @three_cityid = @paramer[three_cityid])";
			}

			//所在地 市区
			if($paramer['cityin']){
				$queryStr[] = "(@provinceid in ($paramer[cityin]) or @cityid in ($paramer[cityin]) or @three_cityid in ($paramer[cityin]) )";
			}
			//联系人不为空
			if($paramer['linkman']){
				$where [] = array("setFilter", "linkman_not_empty", array(1));
			}
			//联系人电话不为空
			if($paramer['linktel']){
				$where [] = array("setFilter", "linktel_not_empty", array(1));
			}
			//联系人邮箱不为空
			if($paramer['linkmail']){
				$where [] = array("setFilter", "linkmail_not_empty", array(1));
			}
			//是否有企业LOGO
			if($paramer['logo']){
				$where [] = array("setFilter", "logo_not_empty", array(1));
			}
			//是否被锁定
			if($paramer['r_status']){
				$where [] = array("setFilter", "r_status", array($paramer["r_status"]));
			}else{
				$where [] = array("setFilter", "r_status", array(2), true);
			}
			//是否已经验证
			if($paramer['cert']){
				$where [] = array("setFilter", "yyzz_status", array(1));
			}
			//更新时间区间
			if($paramer['uptime']){
				$uptime = $time-$paramer['uptime']*3600;
				$where [] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
			}
			if($paramer['jobtime']){
				$where [] = array("setFilter", "jobtime_not_empty", array(1));
			}

			//推荐，猎头页面展示
			if($paramer['rec']){
				$Purl["rec"]='1';
				$where [] = array("setFilter", "rec", array(1));
				$where [] = array("setFilterRange", "hottime", time(), 9999999999);
			}
			
			//排序字段默认为更新时间
              $orderField = "jobtime";
              if($paramer[order]){
                $orderField = str_replace("'","",$paramer[order]);
              }
              //排序规则 默认为倒序
              $orderType = "DESC";
              if(strtoupper(trim($paramer[sort])) == "ASC"){
                $orderType = "ASC";
              }
        
              $sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");
        
        			if($paramer[ispage]){
        				if($paramer['rec']==1&&$Purl["m"]=="lietou"){
        					$islt = "1";		
        				}else{
        					$islt = "0";		
        				}
        
                $limitArr = PageNav($paramer,$_GET,"company",$where,$Purl,"", $islt,$_smarty_tpl);
                $ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company");
              }
              else if($paramer[limit]){
                $ids = $sphinx->getIds($where, 0, $paramer[limit], "company");
              }
              else{
                $ids = $sphinx->getIds($where, 0, 20, "company");
              }
                    
              if(count(ids) > 0){
                $ids = implode(",", $ids);
                $where = "uid in ($ids) order by field(uid, $ids) ";
              }
              else{
                $where = "0";
              }
              
              $limit = "";
			
		}//end if(isUseSphinx())
		else{
			$where="`name`<>''"; 
		
			/*if(!is_array($this->company_rating)){
				$comrat = $db->select_all($db_config['def']."company_rating");
				$this->company_rating=$comrat;
			}else{
				$comrat = $this->company_rating;
			}*/
			//关键字
			if($paramer['keyword']){
				$where.=" AND `name` LIKE '%".$paramer['keyword']."%'";
			}				
			//公司行业
			if($paramer['hy']){
				$where .= " AND `hy` = '".$paramer['hy']."'";
			}
			//公司体制
			if($paramer['pr']){
				$where .= " AND `pr` = '".$paramer['pr']."'";
			}
			//公司规模
			if($paramer['mun']){
				$where .= " AND `mun` = '".$paramer['mun']."'";
			}
	        $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
	        //福利待遇
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company","`name`<>'' and `hy`<>'' and FIND_IN_SET('".$welfarename."',`welfare`)","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//公司地点
			if($paramer['provinceid']){
				$where .= " AND `provinceid` = '".$paramer['provinceid']."'";
			}
			//城市二级子类
			if($paramer['cityid']){
				$where .= " AND (`provinceid` = '".$paramer['cityid']."' OR `cityid` = '".$paramer['cityid']."')";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`provinceid` = '".$paramer['three_cityid']."' OR `three_cityid` = '".$paramer['three_cityid']."')";
			}
			//所在地 市区
			if($paramer['cityin']){
				$where .= " AND (`provinceid` in(".$paramer['cityin'].") OR `cityid` in(".$paramer['cityin'].") or `three_cityid` in(".$paramer['cityin']."))";
			}
			//联系人不为空
			if($paramer['linkman']){
				$where .= " AND `linkman`<>''";
			}
			//联系人电话不为空
			if($paramer['linktel']){
				$where .= " AND `linktel`<>''";
			}
			//联系人邮箱不为空
			if($paramer['linkmail']){
				$where .= " AND `linkmail`<>''";
			}
			//是否有企业LOGO
			if($paramer['logo']){
				$where .= " AND `logo`<>''";
			}
			//是否被锁定
			if($paramer['r_status']){
				$where .= " AND `r_status`='".$paramer['r_status']."'";
			}else{
				$where .= " AND `r_status`<>'2'";
			}
			//是否已经验证
			if($paramer['cert']){
				$where .= " AND `yyzz_status`='1'";
			}
			//更新时间区间
			if($paramer['uptime']){
				$uptime = $time-$paramer['uptime']*3600;
				$where.=" AND `lastupdate`>'".$uptime."'";
			}
			if($paramer['jobtime']){
				$where.=" AND `jobtime`<>''";
			}
			//推荐，猎头页面展示
			
			if($paramer['rec']){
				$Purl["rec"]='1';
				$where.=" AND `rec`='1' AND `hottime`>'".time()."'";
			}
			//查询条数
			if($paramer['limit']){
				$limit=" limit ".$paramer['limit'];
			}
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer['where']){
				$where = $paramer['where'];
			}
			//处理类别字段
			$cache_array = $db->cacheget();
			if($paramer['ispage']){ 
				if($paramer['rec']==1&&$Purl["m"]=="lietou"){
					$limit = PageNav($paramer,$_GET,"company",$where,$Purl,"","1",$_smarty_tpl);
				}else{
					$limit = PageNav($paramer,$_GET,"company",$where,$Purl,"","0",$_smarty_tpl);
				}
			}
			//排序字段默认为更新时间
			if($paramer['order']){
				if($paramer['order']=="lastＵpdate"){
					$paramer['order']="lastupdate";
				}
				$order = " ORDER BY `".$paramer['order']."`  ";
			}else{
				$order = " ORDER BY `jobtime` ";
			}
			//排序规则 默认为倒序
			if($paramer['sort']){
				$sort = $paramer['sort'];
			}else{
				$sort = " DESC";
			}
			$where.=$order.$sort;
			
		}

		$Query = $db->query("SELECT * FROM $db_config[def]company where ".$where.$limit);
		$ListId=array();
		$com=array();
		while($rs = $db->fetch_array($Query)){
			$com[] = $db->array_action($rs,$cache_array);
			$ListId[] = $rs['uid'];
		}  
		//调用会员等级
		include_once  PLUS_PATH."/comrating.cache.php";
		if(!empty($ListId)){
		$statis = $db->select_all("company_statis","`uid` in (".@implode(",",$ListId).")","`uid`,`rating`");
		foreach($ListId as $key=>$value){
		       foreach($statis as $v){
		               foreach($comrat as $val){
			                if($value==$v['uid'] && $val['id']==$v['rating']){						
							$com[$key]['color'] = $val['com_color'];
							if($val['com_pic']&&file_exists(APP_PATH.$val['com_pic'])){
								$com[$key]['ratlogo'] = $val['com_pic'];
    						}
							$com[$key]['ratname'] = $val['name'];
						    }
					  }
				}
			}
		}
		//对应留言
		if($paramer['ismsg']){
			$Msgid = @implode(",",$ListId);
			$msglist = $db->select_alls("company_msg","resume","a.`cuid` in ($Msgid) and a.`uid`=b.`uid` order by a.`id` desc","a.cuid,a.content,b.name,b.photo,b.def_job");
			if(is_array($ListId) && is_array($msglist)){
				foreach($com as $key=>$value){
					foreach($msglist as $k=>$v){
						if($value['uid']==$v['cuid']){
							$com[$key]['msg'][$k]['content'] = $v['content'];
							$com[$key]['msg'][$k]['name'] = $v['name'];
							$com[$key]['msg'][$k]['photo'] = $v['photo'];
							$com[$key]['msg'][$k]['eid'] = $v['def_job'];
						}
					}
				}
			}
		}
		//是否需要查询对应职位
		if($paramer['isjob']){
			//查询职位
			$JobId = @implode(",",$ListId);
			$JobList=$db->select_all("company_job","`uid` IN ($JobId) and r_status<>'2' and status<>'1' and state=1  order by `lastupdate` desc","`id`,`uid`,`status`,`name`");
			if(is_array($ListId) && is_array($JobList)){
				foreach($com as $key=>$value){
					$com[$key]['jobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($value['uid']==$v['uid']){
							$id = $v['id'];
							$com[$key]['newsjob'] = $v['name'];
							$com[$key]['newsjob_status'] = $v['status'];
							$com[$key]['r_status'] = $v['r_status'];

							$v = $db->array_action($value,$cache_array);
							$v['job_url'] = Url("job",array("c"=>"comapply","id"=>$JobList[$k]['id']),"1");
							$v['id']= $id;
							$v['name'] = $com[$key]['newsjob'];
							$com[$key]['joblist'][] = $v;
							$com[$key]['jobnum'] = $com[$key]['jobnum']+1;
						}
					}
					/*
					foreach($comrat as $k=>$v){
						if($value['rating']==$v['id']){
							$com[$key]['color'] = $v['com_color'];
							$com[$key]['ratlogo'] = $v['com_pic'];
						}
					}*/
				}
			}
		}
		//是否需要查询对应资讯
		if($paramer['isnews']){
			//查询资讯
			$JobId = @implode(",",$ListId);
			$NewsList=$db->select_all("company_news","`uid` IN ($JobId) and status=1  order by `id` desc");
			if(is_array($ListId) && is_array($NewsList)){
				foreach($com as $key=>$value){
					$com[$key]['newsnum'] = 0;
					foreach($NewsList as $k=>$v){
						if($value['uid']==$v['uid']){
							$com[$key]['newslist'][] = $v;
							$com[$key]['newsnum'] = $com[$key]['newsnum']+1;
						}
					}
				}
			}
		}
		//是否需要查询对应环境展示
		if($paramer['isshow']){
			//查询环境展示
			$JobId = @implode(",",$ListId);
			$ShowList=$db->select_all("company_show","`uid` IN ($JobId) order by `id` desc");
			if(is_array($ListId) && is_array($ShowList)){
				foreach($com as $key=>$value){
					$com[$key]['shownum'] = 0;
					foreach($ShowList as $k=>$v){
						if($value['uid']==$v['uid']){
							$com[$key]['showlist'][] = $v;
							$com[$key]['shownum'] = $com[$key]['shownum']+1;
						}
					}
				}
			}
		}
		if($paramer['ltjob']){//高级职位
			//查询职位
			$JobId = @implode(",",$ListId);
			$JobList=$db->select_all("lt_job","`uid` IN ($JobId) and status=1  order by `id` desc");
			if(is_array($ListId) && is_array($JobList)){
				foreach($com as $key=>$value){
					$jobname=array();
                    $com[$key]['ltjobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($com[$key]['ltjobnum']>=$paramer['ltjob']){continue;}
						if($value['uid']==$v['uid']){
							$url = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
							$v['job_url'] = $url;
							$jobname[] = "<a href='".$url."'>".$v['job_name']."</a>";
                            $com[$key]['ltjoblist'][] = $v;
                            $com[$key]['ltjobnum'] = $com[$key]['ltjobnum']+1;
						}
					}
					$com[$key]['ltjob'] = @implode(",",$jobname);
				}
			}
		}
		//企业黄页 是否关注  201305_gl
		if($paramer['firm']){
			if($_COOKIE[uid]){$atnlist = $db->select_all("atn","`uid`='$_COOKIE[uid]'");}
			if(is_array($com)){
				foreach($com as $key=>$value){
					if(!empty($atnlist)){
						foreach($atnlist as $v){
							if($value['uid'] == $v['sc_uid']){
								$com[$key]['atn'] = "取消关注";
                                $com[$key]['atnstatus'] = "1";
								break;
							}else{
								$com[$key]['atn'] = "关注";
							}
						}
					}else{
						$com[$key]['atn'] = "关注";
					}
				}
			}
		}
		if(is_array($com)){
			foreach($com as $key=>$value){
				if($value['shortname']){
    				$com[$key]['name']=$value['shortname'];
    			}
				$com[$key]['com_url'] = Url("company",array("c"=>"show","id"=>$value['uid']));
				$com[$key]['joball_url'] = Url("company",array("c"=>"show","id"=>$value['uid'],"tp"=>"post")); 
				if(!$value['logo'] || $value['logo_status']!=0 || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$value['logo']))){
				    $com[$key]['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$com[$key]['logo'] = str_replace("./",$config['sy_weburl']."/",$value['logo']);
				} 
				//获得福利待遇名称
				if(is_array($com[$key]['welfare'])&&$com[$key]['welfare']){
					foreach($com[$key]['welfare'] as $val){
						$com[$key]['welfarename'][]=$val;
					}
				}
			}
			if($paramer['keyword']!=""&&!empty($com)){
				addkeywords('4',$paramer['keyword']);
			}
		}$com = $com; if (!is_array($com) && !is_object($com)) { settype($com, 'array');}
foreach ($com as $_smarty_tpl->tpl_vars['com']->key => $_smarty_tpl->tpl_vars['com']->value) {
$_smarty_tpl->tpl_vars['com']->_loop = true;
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['com']->value['com_url'];?>
"> <div class="co_recom_imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['com']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" /></div>
                                    <p class=""><?php echo mb_substr($_smarty_tpl->tpl_vars['com']->value['name'],0,13,'utf-8');?>
</p>
                                </a>
                            </li>
                            <?php }
if (!$_smarty_tpl->tpl_vars['com']->_loop) {
?>
                            <div class="pc_notip">暂无推荐企业</div>
                            <?php } ?>
                        </ul>
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
>
            var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",
                integral_pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';
        <?php echo '</script'; ?>
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
        <!--[if IE 6]>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		DD_belatedPNG.fix('.png,.user_photo_bg');
		<?php echo '</script'; ?>
>
		<![endif]-->
        <?php echo '<script'; ?>
>
            $(function() {

                $("#form").submit(function(e) {
                    var min = $("#min").val();
                    var max = $("#max").val();
                    if(min && max && parseInt(max) < parseInt(min)) {
                        $("#min").val(max);
                        $("#max").val(min);
                    }
                });
            });
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
