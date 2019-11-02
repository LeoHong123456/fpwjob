<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 11:46:10
         compiled from "/www/fpwjob/uploads/app/template/default/job/search.htm" */ ?>
<?php /*%%SmartyHeaderCode:10295153605dbcfc02a0fb68-14217998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd9d50bc537b93dcce1662a70a94dfd052e77de7' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/job/search.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10295153605dbcfc02a0fb68-14217998',
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
    'comdata' => 0,
    'comclass_name' => 0,
    'industry_name' => 0,
    'industry_index' => 0,
    'arr_data1' => 0,
    'arr_data' => 0,
    'j' => 0,
    'uptime' => 0,
    'sdate' => 0,
    'zd_list' => 0,
    'lookjob' => 0,
    'waflist' => 0,
    'useridjob' => 0,
    'favjob' => 0,
    'job_list' => 0,
    'total' => 0,
    'pagenav' => 0,
    'totalshow' => 0,
    'klist' => 0,
    'adlist_7' => 0,
    'blist' => 0,
    'com' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbcfc02df3f54_70799257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbcfc02df3f54_70799257')) {function content_5dbcfc02df3f54_70799257($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/class.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
    </head>

    <body class="body_bg">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="yun_body">
            <div class="yun_content">
                <div class="current_Location com_current_Location png none">
                    <div class="fl">您当前的位置：
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <span>找工作</span> 
                    </div>
                </div>
                
                <div class="clear"></div>
               	
               	<form action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_jobdir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);
}?>" method="get" id="form" onsubmit="return search_keyword(this,'请输入职位名称或公司，例如：销售');">
                     
                <div class="jobsearch_newbox">
                       
                        <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_jobdir']) {?><input type="hidden" name="m" value="job" id="m" /> <?php }?>
                        
                        <input type="hidden" name="c" value="search" /> 
                        
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['finder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        	<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" /> 
                        <?php } ?>
                        
                        
                            <div class="yun_job_search">
                                <div class="yun_job_search_cont">
                                <div class="yun_job_search_textcont">
                                    <input type="text" name="keyword" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入职位名称或公司，例如：销售<?php }?>" onclick="if(this.value=='请输入职位名称或公司，例如：销售'){this.value=''}" onblur="if(this.value==''){this.value='请输入职位名称或公司，例如：销售'}" class="Search_jobs_text " />
                                    </div>
                                    <input type="submit" value="搜索" class="Search_jobs_submit yun_bg_color" />
                                    
                                    <div class="Search_jobs_sub_text_bc">
                                        <?php if ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value=='1') {?>
                                        	<a href="javascript:void(0)" class="Search_jobs_scq" onclick="addfinder('<?php echo $_smarty_tpl->tpl_vars['paras']->value;?>
','1','0')">+ 保存为职位搜索器</a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value!='1') {?>
                                        	<a href="javascript:void(0)" class="Search_jobs_scq" onclick="layer.msg('只有个人会员才可保存！', 2,8);return false;">+ 保存为职位搜索器</a>
                                        <?php } else { ?>
                                        	<a href="javascript:void(0)" class="Search_jobs_scq" onclick="showlogin('1');">+ 保存为职位搜索器</a>
                                        <?php }?>
                                    </div>
                                </div>
                                
                                <div class="jobs_tag"> 
                                	热门搜索：
                                	<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"12","recom"=>"1","type"=>"3","item"=>"\'keylist\'","nocache"=>"")
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
                                    	<a href="<?php echo smarty_function_listurl(array('type'=>'keyword','v'=>$_smarty_tpl->tpl_vars['keylist']->value['key_title']),$_smarty_tpl);?>
" class="jos_tag_a" title="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> 
                                    <?php } ?> 
                                </div>
                            </div>
                        </div>
                    
               
                
                <div class="clear"></div>
                
                <div class="Search_jobs_box">

                    <?php if (!$_GET['job1']) {?>
                    <div class="Search_jobs_form_list">
                        <div class="Search_jobs_name"> 职位：</div>
                        <div class="Search_jobs_sub ">
                            <div class="Search_jobs_sub_Box ">
                                <a href="<?php echo smarty_function_listurl(array('type'=>'job1','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job1']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a> 
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                	<a href="<?php echo smarty_function_listurl(array('type'=>'job1','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job1']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php } elseif ($_smarty_tpl->tpl_vars['key']->value>6) {?>job1list none<?php }?>"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="zh_more">
                            <a href="javascript:checkmore('job1list');" id="job1list" rel="nofollow">更多</a>
                        </div>
                    </div>
                    <?php }?> 
                    
                    <?php if ($_GET['job1']&&!$_GET['job1_son']) {?>
                    <div class="Search_jobs_form_list">
                        <div class="Search_jobs_name"> 子类：</div>
                        <div class="Search_jobs_sub ">
                            <a href="<?php echo smarty_function_listurl(array('type'=>'job1_son'),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job1_son']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a> 
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_GET['job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            	<a href="<?php echo smarty_function_listurl(array('type'=>'job1_son','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job1_son']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> 
                            <?php } ?>
                        </div>
                    </div>
                    <?php }?> 
                    
                    <?php if ($_GET['job1_son']&&is_array($_smarty_tpl->tpl_vars['job_type']->value[$_GET['job1_son']])) {?>
                    <div class="Search_jobs_form_list">
                        <div class="Search_jobs_name"> 类别：</div>
                        <div class="Search_jobs_sub ">
                            <a href="<?php echo smarty_function_listurl(array('type'=>'job1_son','v'=>$_GET['job1_son']),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job_post']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a> 
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_GET['job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            	<a href="<?php echo smarty_function_listurl(array('type'=>'job_post','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['job_post']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> 
                            <?php } ?>
                       	</div>
                    </div>
                    <?php }?>
                   
                   
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']==1&&$_smarty_tpl->tpl_vars['config']->value['cityname']&&$_smarty_tpl->tpl_vars['config']->value['cityname']!=$_smarty_tpl->tpl_vars['config']->value['sy_indexcity']) {?>
                    <div class="Search_citybox">
                        <div class="Search_cityboxname"> 地点：</div>
                        <div class="Search_citybox_right">
                            <div class="Search_cityboxright">
                                <div class="search_city_list search_city_listw1100">
                                    <?php if (!$_GET['cityid']&&$_GET['three_cityid']) {?>
                                    	<a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>
</a>
                                    <?php } else { ?> 
	                                    <?php if ($_GET['cityid']) {?> 
		                                    <?php if (is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>
			                                    <a href="<?php echo smarty_function_listurl(array('untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if (!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
			                                    <?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
			                                    	<a href="<?php echo smarty_function_listurl(array('type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
			                                    <?php } ?> 
		                                    <?php } else { ?>
		                                    	<a class="city_name city_name_active" style="text-decoration:none;cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a>
		                                    <?php }?> 
		                              	<?php } else { ?> 
		                              		<?php if (is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']])) {?>
		                                    	<a href="<?php echo smarty_function_listurl(array('untype'=>'cityid'),$_smarty_tpl);?>
" class="city_name <?php if (!$_GET['cityid']) {?>city_name_active<?php }?>">不限</a>
		                                    	<?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
		                                    		<a href="<?php echo smarty_function_listurl(array('type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
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
                        <div class="Search_cityboxname"> 地点：</div>
                        <div class="Search_citybox_right">
                            <div class="Search_cityall none">
                                <a href="<?php echo smarty_function_listurl(array('type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="city_name">全部</a>
                                <?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pid']->key;
?>
                                <a href="<?php echo smarty_function_listurl(array('type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
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
                                <a href="<?php echo smarty_function_listurl(array('type'=>'provinceid','v'=>0),$_smarty_tpl);?>
" class="search_city_list_all <?php if (!$_GET['provinceid']) {?>city_name_active<?php }?>">全部</a>
                                <div class="search_city_list">
                                    <?php  $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->key => $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pid']->key;
?>
                                    <a href="<?php echo smarty_function_listurl(array('type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['pid']->value),$_smarty_tpl);?>
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
                                <a href="<?php echo smarty_function_listurl(array('untype'=>'cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&!$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
                                <?php  $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cid']->key => $_smarty_tpl->tpl_vars['cid']->value) {
$_smarty_tpl->tpl_vars['cid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cid']->key;
?>
                                <a href="<?php echo smarty_function_listurl(array('type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['cid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['cityid']==$_smarty_tpl->tpl_vars['cid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['cid']->value];?>
</a>
                                <?php } ?>
                            </div>
                            <div class="Search_cityboxclose <?php if (!$_GET['cityid']||!is_array($_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']])) {?>none<?php }?>" id="acity_three">
                                <a href="<?php echo smarty_function_listurl(array('untype'=>'three_cityid'),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['provinceid']&&$_GET['cityid']&&!$_GET['three_cityid']) {?>city_name_active<?php }?>">不限</a>
                                <?php  $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tid']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_GET['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tid']->key => $_smarty_tpl->tpl_vars['tid']->value) {
$_smarty_tpl->tpl_vars['tid']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tid']->key;
?>
                                <a href="<?php echo smarty_function_listurl(array('type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['tid']->value),$_smarty_tpl);?>
" class="city_name <?php if ($_GET['three_cityid']==$_smarty_tpl->tpl_vars['tid']->value) {?>city_name_active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['tid']->value];?>
</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                   
                    
                    <div class="Search_jobs_form_list search_more">
                        <div class="Search_jobs_name"> 薪资：</div>
                        <div>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'salary','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['minsalary']==''&&$_GET['maxsalary']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'salary','v'=>'0_2000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['maxsalary']==2000) {?>Search_jobs_sub_cur<?php }?>">2000以下</a>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'salary','v'=>'2000_4000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==2000&&$_GET['maxsalary']==4000) {?>Search_jobs_sub_cur<?php }?>">2000-4000</a>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'salary','v'=>'4000_6000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==4000&&$_GET['maxsalary']==6000) {?>Search_jobs_sub_cur<?php }?>">4000-6000</a>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'salary','v'=>'6000_8000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==6000&&$_GET['maxsalary']==8000) {?>Search_jobs_sub_cur<?php }?>">6000-8000</a>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'salary','v'=>'8000_10000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==8000&&$_GET['maxsalary']==10000) {?>Search_jobs_sub_cur<?php }?>">8000-10000</a>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'salary','v'=>'10000'),$_smarty_tpl);?>
" class="Search_jobs_cxz <?php if ($_GET['minsalary']==10000) {?>Search_jobs_sub_cur<?php }?>">10000以上</a>
                        </div>
                        <input type="text" name="minsalary" id="min" value="<?php if ($_GET['minsalary']) {
echo $_GET['minsalary'];
} else {
if ($_GET['maxsalary']) {?>0<?php }
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="job_xz_text" />
                        <span class="job_xz_line">-</span>
                        <input type="text" name="maxsalary" id="max" value="<?php if ($_GET['maxsalary']) {
echo $_GET['maxsalary'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="job_xz_text" />
                        <input type="submit" value="确定" class="job_xz_bth" />
                    </div>
                   
                    <?php if ($_smarty_tpl->tpl_vars['comdata']->value['job_welfare']) {?>
                    <div class="Search_jobs_form_list search_more">
                        <div class="Search_jobs_name">福利：</div>
                        <div class="Search_jobs_sub">
                            <a href="<?php echo smarty_function_listurl(array('type'=>'welfare','v'=>0),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_GET['welfare']=='0'||$_GET['welfare']=='') {?>Search_jobs_sub_cur<?php }?>">全部</a>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'welfare','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
" class="Search_jobs_sub_a <?php if ($_smarty_tpl->tpl_vars['key']->value>9) {?>none<?php }?> <?php if ($_smarty_tpl->tpl_vars['key']->value>9) {?>welfarelist<?php }?> <?php if ($_GET['welfare']==$_smarty_tpl->tpl_vars['v']->value) {?>Search_jobs_sub_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> 
                            <?php } ?>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['comdata']->value['job_welfare'])>10) {?>
                        <div class="zh_more">
                            <a href="javascript:checkmore('welfarelist');" id="welfarelist" rel="nofollow">更多</a>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                    
                    <div class="Search_jobs_form_list search_more">
                        <div class="Search_jobs_name"> 更多：</div>
                        <div class="Search_jobs_sub" style="width:1090px;">
                            <div class="Search_jobs_more_chlose">
                                <span class="Search_jobs_more_chlose_s"><?php if ($_GET['hy']) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];
} else { ?>公司行业<?php }?></span><i class=""></i>
                                <div class="Search_jobs_more_chlose_hylist none">
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <li>
                                            <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('type'=>'hy','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="Search_jobs_more_chlose">
                                <span class="Search_jobs_more_chlose_s">
          							<?php if ($_GET['edu']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['edu']];
} else { ?>学历要求<?php }?>
          						</span>
          						<i class=""></i>
                                <div class="Search_jobs_more_chlose_list none">
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <li>
                                            <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('type'=>'edu','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="Search_jobs_more_chlose"><span class="Search_jobs_more_chlose_s"><?php if ($_GET['exp']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['exp']];
} else { ?>工作经验<?php }?></span><i class=""></i>
                                <div class="Search_jobs_more_chlose_list none">
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <li>
                                            <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('type'=>'exp','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
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
                                            <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('type'=>'sex','v'=>$_smarty_tpl->tpl_vars['j']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="Search_jobs_more_chlose"><span class="Search_jobs_more_chlose_s"><?php if ($_GET['report']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['report']];
} else { ?>到岗时间<?php }?></span><i class=""></i>
                                <div class="Search_jobs_more_chlose_list none">
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <li>
                                            <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('type'=>'report','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
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
                                            <a href="javascript:;" onclick="showurl('<?php echo smarty_function_listurl(array('type'=>'uptime','v'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
                                        </li><?php } ?>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <?php if ($_GET['job1']||$_GET['job1_son']||$_GET['job_post']||$_GET['provinceid']||$_GET['cityid']||$_GET['three_cityid']||$_GET['hy']||$_GET['edu']||$_GET['exp']||$_GET['sex']||$_GET['type']||$_GET['report']||$_GET['uptime']||$_GET['minsalary']||$_GET['maxsalary']||$_GET['keyword']||$_GET['cert']||$_GET['welfare']) {?>
                    <div class="Search_close_box">
                        <div>
                            <div class="Search_clear">
							 <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_comclass']==1) {?>
							<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'search'),$_smarty_tpl);?>
"> 清除所选</a>
							 <?php } else { ?>
							 <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
"> 清除所选</a>
							<?php }?>
                            </div>
                            <span class="Search_close_box_s">已选条件：</span>
                        </div>
                        <?php if ($_GET['job1']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'job1'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">职位分类：<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job1']];?>
</a>
                        <?php }?> <?php if ($_GET['job1_son']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'job1_son'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job1_son']];?>
</a>
                        <?php }?> <?php if ($_GET['job_post']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'job_post'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job_post']];?>
</a>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['cityid']==''&&$_smarty_tpl->tpl_vars['config']->value['three_cityid']=='') {?> <?php if ($_GET['provinceid']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'provinceid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">工作地点：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>
</a> <?php }?> <?php if ($_GET['cityid']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];?>
</a> <?php }?> <?php }?> <?php if ($_GET['three_cityid']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'three_cityid'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>
</a>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']]) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'hy'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">行业：<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</a> <?php }?> <?php if ($_GET['edu']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'edu'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">学历：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['edu']];?>
</a> <?php }?> <?php if ($_GET['exp']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'exp'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">工作经验：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['exp']];?>
</a> <?php }?> <?php if ($_GET['sex']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'sex'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">性别：<?php echo $_smarty_tpl->tpl_vars['arr_data1']->value;?>
</a> <?php }?> <?php if ($_GET['type']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'type'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">类型：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['type']];?>
</a> <?php }?> <?php if ($_GET['report']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'report'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">到岗时间：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['report']];?>
</a> <?php }?> <?php if ($_GET['sdate']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'sdate'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">发布时间：<?php echo $_smarty_tpl->tpl_vars['sdate']->value[$_GET['sdate']];?>
</a> <?php }?> <?php if ($_GET['uptime']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'uptime'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">更新时间：<?php echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];?>
</a> <?php }?> <?php if ($_GET['minsalary']&&$_GET['maxsalary']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'salary'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">薪资：<?php echo $_GET['minsalary'];?>
-<?php echo $_GET['maxsalary'];?>
</a>
                        <?php } elseif ($_GET['minsalary']&&!$_GET['maxsalary']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'salary'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">薪资：<?php echo $_GET['minsalary'];?>
及以上</a>
                        <?php } elseif (!$_GET['minsalary']&&$_GET['maxsalary']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'salary'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">薪资：<?php echo $_GET['maxsalary'];?>
及以下</a>
                        <?php }?> <?php if ($_GET['keyword']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac"><?php echo $_GET['keyword'];?>
</a> <?php }?> <?php if ($_GET['cert']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'cert'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">执照已认证企业</a><?php }?> <?php if ($_GET['welfare']) {?>
                        <a href="<?php echo smarty_function_listurl(array('untype'=>'welfare'),$_smarty_tpl);?>
" class="Search_jobs_c_a disc_fac">福利待遇：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['welfare']];?>
</a> <?php }?> &nbsp; 
                    </div>
                    <?php }?>
                
                    <div class="clear"></div>
                </div>
                
                </form>

                <div class="search_h1_box">
                    <div class="search_h1_box_title">
                        <ul class="search_h1_box_list">
                            <li <?php if ($_GET['urgent']==''&&$_GET['rec']=='') {?>class="search_job_all " <?php }?> class="search_job_all">
                                <a href="<?php echo smarty_function_listurl(array('type'=>'tp','v'=>0),$_smarty_tpl);?>
">所有职位</a><i class="search_h1_box_list_icon"></i></li>
                            <li class="<?php if ($_GET['urgent']) {?>search_h1_box_cur<?php }?> job_jp_t">
                                <a href="<?php if ($_GET['urgent']) {
echo smarty_function_listurl(array('type'=>'tp','v'=>0),$_smarty_tpl);
} else {
echo smarty_function_listurl(array('type'=>'tp','v'=>1),$_smarty_tpl);
}?>">
                                    <font color="#f65502">紧急职位</font>
                                    <i class="job_jp_chk"></i>
                                    <i class="job_jp_icon"></i>
                                </a>
                            </li>
                            <li class="<?php if ($_GET['rec']) {?>search_h1_box_cur<?php }?> job_tj_t">
                                <a href="<?php if ($_GET['rec']) {
echo smarty_function_listurl(array('type'=>'tp','v'=>0),$_smarty_tpl);
} else {
echo smarty_function_listurl(array('type'=>'tp','v'=>2),$_smarty_tpl);
}?>">
                                    <font color="#1296db">推荐职位</font>
                                    <i class="job_tj_chk"></i>
                                    <i class="job_tj_icon"></i>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="search_h1_box_t fr">重要提示：用人单位不得以任何名义收取求职者任何形式的费用，如您发现类似情况请举报！</div>
                    </div>
                    
                    <div class="search_user_list_tit search_user_list_tit_bg">
                        <div class="search_Filter">
                            <span class="Search_jobs_c_a_ln">
                            	找到 <span class="blod org" id='totalshow'> 0 </span> 个职位满足条件
                            </span>
                            <span class="yun_search_tit">排序方式：</span>
                            <ul class="search_Filter_list">
                                <li <?php if ($_GET['order']=='lastdate') {?>class="search_Filter_current" <?php }?>>
                                    <a href="<?php echo smarty_function_listurl(array('type'=>'order','v'=>'lastdate'),$_smarty_tpl);?>
"><span>更新时间</span><i class="search_Filter_icon"></i></a>
                                </li>
                                <li <?php if ($_GET['order']=='sdate') {?>class="search_Filter_current" <?php }?>>
                                    <a href="<?php echo smarty_function_listurl(array('type'=>'order','v'=>'sdate'),$_smarty_tpl);?>
"><span>发布时间</span><i class="search_Filter_icon"></i></a>
                                </li>
                            </ul>
                            <div class="search_Filter_Authenticate">
                                <a href="<?php if ($_GET['cert']) {
echo smarty_function_listurl(array('type'=>'cert','v'=>0),$_smarty_tpl);
} else {
echo smarty_function_listurl(array('type'=>'cert','v'=>3),$_smarty_tpl);
}?>">
                                    <div class="checkbox_job search_Filter_Authenticate_mt8 <?php if ($_GET['cert']) {?>iselect_cert<?php }?>" style="_margin-top:14px;"><b></b></div>
                                    <em>执照已认证企业</em>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="left_job_all fl">
                	
                	 
                	
                    <div class="job_left_sidebar">
                        
                       
                       
                     	
	                    <?php if ($_GET['page']<2) {?>
						<?php  $_smarty_tpl->tpl_vars['zd_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zd_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("namelen"=>"30","comlen"=>"30","report"=>"\'auto.report\'","hy"=>"\'auto.hy\'","job1"=>"\'auto.job1\'","welfare"=>"\'auto.welfare\'","job1_son"=>"\'auto.job1_son\'","job_post"=>"\'auto.job_post\'","jobids"=>"\'auto.jobids\'","pr"=>"\'auto.pr\'","mun"=>"\'auto.mun\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","type"=>"\'auto.type\'","edu"=>"\'auto.edu\'","exp"=>"\'auto.exp\'","sex"=>"\'auto.sex\'","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","keyword"=>"\'auto.keyword\'","cert"=>"\'auto.cert\'","urgent"=>"\'auto.urgent\'","bid"=>"1","uptime"=>"\'auto.uptime\'","key"=>"\'key\'","item"=>"\'zd_list\'","name"=>"\'zdlist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
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
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

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
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
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
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
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
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$zd_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($zd_list) && !empty($zd_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($zd_list as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($zd_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($zd_list[$key]);
					continue;
				}else{
					$zd_list[$key] = $db->array_action($value,$cache_array);
					$zd_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$zd_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$zd_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$zd_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$zd_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$zd_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$zd_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$zd_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$zd_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$zd_list[$key][logo] =$r_uid[$value['uid']][logo];
					$zd_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$zd_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$zd_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$zd_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$zd_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$zd_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$zd_list[$key]['redtime'] =1;
					}else{
						$zd_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$zd_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$zd_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$zd_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$zd_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$zd_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$zd_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$zd_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$zd_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$zd_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$zd_list[$key][ratlogo] = $v[com_pic];
							}else{
								$zd_list[$key][ratlogo] ='';
							}
							$zd_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$zd_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$zd_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$zd_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$zd_list[$key][name_n]);
						$zd_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$zd_list[$key][com_n]);
						$zd_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$zd_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($zd_list)){
				if($paramer[keyword]!=""&&!empty($zd_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$zd_list = $zd_list; if (!is_array($zd_list) && !is_object($zd_list)) { settype($zd_list, 'array');}
foreach ($zd_list as $_smarty_tpl->tpl_vars['zd_list']->key => $_smarty_tpl->tpl_vars['zd_list']->value) {
$_smarty_tpl->tpl_vars['zd_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['zd_list']->key;
?> 
						<div class="search_job_list <?php if ($_smarty_tpl->tpl_vars['key']->value%2!='0') {
}?>">

							<div class="search_job_left_siaber">
								<div class="search_user_list_neme search_user_list_w240">
									<a href="<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_url'];?>
" class="search_job_jobs_name " target="_blank"><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['name_n'];?>
</a>
	
									<?php if ($_smarty_tpl->tpl_vars['zd_list']->value['urgent_time']>time()) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/jobjp.png" title="紧急招聘" class="co_zzjp png" /><?php }?> <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['rec_time']>time()) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/jobtj.png" title="站长推荐" class="co_zzjp png" /><?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['zd_list']->value['id'],$_smarty_tpl->tpl_vars['lookjob']->value)) {?><span class="co_fav"><i></i><em>已浏览</em></span><?php }?>
	
								</div>
								<div class="company_det"><span class="job_search_xz"><?php if ($_smarty_tpl->tpl_vars['zd_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['zd_list']->value['job_salary'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['job_exp']) {?><span class="search_job_list_box_s"><em class="com_search_job_em"><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_exp'];?>
经验</em> </span><?php }?>
									<span class="search_job_list_box_line">|</span>
									<span class="search_job_list_box_s"><em class="com_search_job_em"><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_edu'];?>
学历 </em></span>
									<span class="search_job_list_box_line">|</span>
									<span class="search_job_list_box_s"><em class="com_search_job_em"><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_city_two'];?>
</em></span>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['zd_list']->value['welfarename']) {?>
								<div class="job_welfare_tag">
									<?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zd_list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
									<span class="job_welfare_tag_s"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span> <?php } ?>
								</div>
								<?php } else { ?>
								<div class="job_describe_p">
									<?php if ($_smarty_tpl->tpl_vars['zd_list']->value['job_number']) {?><span class="job_describe_p_s">招聘<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_number'];?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['job_age']) {?> <span class="job_describe_p_s">年龄<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_age'];?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['sex_n']) {?><span class="job_describe_p_s">性别<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['sex_n'];?>
</span><?php }?>
								</div>
								<?php }?>
							</div>
							
							<div class="company_det_c_name">
								<div class="search_job_com_t_name">
									<a href="<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['com_url'];?>
" target="_blank" class="search_job_com_name"><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['com_n'];?>
</a>
									<?php if ($_smarty_tpl->tpl_vars['zd_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['zd_list']->value['ratlogo']!="0") {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['ratlogo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['ratname'];?>
" width="16"  /><?php }
if ($_smarty_tpl->tpl_vars['zd_list']->value['yyzz_status']=='1') {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/disc_icon10.png" title="营业执照已审核" class="png"> <?php }?>
								</div>
								<div class="company_det_hy">
									<div class=""><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['hy_n'];?>
<i class="company_det_hy_line">|</i><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['pr_n'];?>
<i class="company_det_hy_line">|</i><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['mun_n'];?>
</div>
									<span class="resume_list_jobzd"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/Top.gif"></span>
								</div>
							</div>
						
							<div class="yun_joblist_ope">
	
								<?php if (in_array($_smarty_tpl->tpl_vars['zd_list']->value['id'],$_smarty_tpl->tpl_vars['useridjob']->value)) {?>
									<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$zd_list.id`'),$_smarty_tpl);?>
" target="_blank" class="search_job_Apply_fast_ysq">已申请</a>
								<?php } else { ?>
									<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$zd_list.id`'),$_smarty_tpl);?>
" target="_blank" class="search_job_Apply_fast">申请</a>
								<?php }?>
								
								<div class="yun_job_operation_d">
	
									<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> <?php if (in_array($_smarty_tpl->tpl_vars['zd_list']->value['id'],$_smarty_tpl->tpl_vars['favjob']->value)) {?>
									<a href="javascript:fav_job('<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['id'];?>
','1');" class="yun_job_operation_ysc" rel="nofollow">已收藏</a>
									<?php } else { ?>
									<a href="javascript:fav_job('<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['id'];?>
','1');" class="yun_job_operation_sc scjobid<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['id'];?>
" rel="nofollow">收藏</a>
									<?php }?> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
									<a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能收藏',2,8)" class="yun_job_operation_sc" rel="nofollow">收藏</a>
									<?php } else { ?>
									<a href="javascript:void(0);" onclick="showlogin('1');" class="yun_job_operation_sc" rel="nofollow">收藏</a>
									<?php }?> <?php }?>
								</div>
							</div>
						
						</div>
						<?php } ?> 
	                	<?php }?>
                		
                		 

                		<?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("namelen"=>"30","comlen"=>"30","noids"=>"1","ispage"=>"1","report"=>"\'auto.report\'","welfare"=>"\'auto.welfare\'","rec"=>"\'auto.rec\'","hy"=>"\'auto.hy\'","job1"=>"\'auto.job1\'","job1_son"=>"\'auto.job1_son\'","job_post"=>"\'auto.job_post\'","jobids"=>"\'auto.jobids\'","pr"=>"\'auto.pr\'","mun"=>"\'auto.mun\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","ltype"=>"\'auto.ltype\'","three_cityid"=>"\'auto.three_cityid\'","type"=>"\'auto.type\'","edu"=>"\'auto.edu\'","exp"=>"\'auto.exp\'","sex"=>"\'auto.sex\'","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","keyword"=>"\'auto.keyword\'","key"=>"\'key\'","sdate"=>"\'auto.sdate\'","cert"=>"\'auto.cert\'","urgent"=>"\'auto.urgent\'","uptime"=>"\'auto.uptime\'","order"=>"\'auto.order\'","limit"=>"20","item"=>"\'job_list\'","name"=>"\'joblist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
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
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

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
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
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
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
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
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$job_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job_list) && !empty($job_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_list as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_list[$key]);
					continue;
				}else{
					$job_list[$key] = $db->array_action($value,$cache_array);
					$job_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_list[$key][logo] =$r_uid[$value['uid']][logo];
					$job_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_list[$key]['redtime'] =1;
					}else{
						$job_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job_list[$key][ratlogo] = $v[com_pic];
							}else{
								$job_list[$key][ratlogo] ='';
							}
							$job_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][name_n]);
						$job_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][com_n]);
						$job_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_list)){
				if($paramer[keyword]!=""&&!empty($job_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_list']->key;
?>
		                <div class="search_job_list <?php if ($_smarty_tpl->tpl_vars['key']->value%2!='0') {
}?>">
		
		                    <div class="search_job_left_siaber">
		                        <div class="search_user_list_neme search_user_list_w240">
		                            <a href="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_url'];?>
" class="search_job_jobs_name " target="_blank"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];?>
</a>
		                            <?php if ($_smarty_tpl->tpl_vars['job_list']->value['urgent_time']>time()) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/jobjp.png" title="紧急招聘" class="co_zzjp png" /><?php }?> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['rec_time']>time()) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/jobtj.png" title="站长推荐" class="co_zzjp png" /><?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['job_list']->value['id'],$_smarty_tpl->tpl_vars['lookjob']->value)) {?><span class="co_fav"><i></i><em>已浏览</em></span><?php }?>
		                        </div>
		                        <div class="company_det"><span class="job_search_xz"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_exp']) {?><span class="search_job_list_box_s"><em class="com_search_job_em"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_exp'];?>
经验</em> </span><span class="search_job_list_box_line">|</span><?php }?>
		                            <span class="search_job_list_box_s"><em class="com_search_job_em"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_edu'];?>
学历 </em></span>
		                            <span class="search_job_list_box_line">|</span>
		                            <span class="search_job_list_box_s"><em class="com_search_job_em"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_two'];?>
</em></span>
		                        </div>
		                        <?php if ($_smarty_tpl->tpl_vars['job_list']->value['welfarename']) {?>
		                        <div class="job_welfare_tag">
		                            <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
		                            <span class="job_welfare_tag_s"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span> <?php } ?>
		                        </div>
		                        <?php } else { ?>
		                        <div class="job_describe_p">
		                            <?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_number']) {?><span class="job_describe_p_s">招聘<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_number'];?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_age']) {?> <span class="job_describe_p_s">年龄<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_age'];?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['sex_n']) {?> <span class="job_describe_p_s">性别<?php echo $_smarty_tpl->tpl_vars['job_list']->value['sex_n'];?>
</span><?php }?>
		                        </div>
		                        <?php }?>
		                    </div>
		                    
		                    <div class="company_det_c_name">
		                        <div class="search_job_com_t_name">
		                            <a href="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['com_url'];?>
" target="_blank" class="search_job_com_name"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['com_n'];?>
</a>
		                            <?php if ($_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!="0") {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job_list']->value['ratlogo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['ratname'];?>
" width="16" /><?php }?> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['yyzz_status']=='1') {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/disc_icon10.png" title="营业执照已审核" class="png"> <?php }?>
		                        </div>
		                        <div class="company_det_hy">
		                            <div class=""><?php echo $_smarty_tpl->tpl_vars['job_list']->value['hy_n'];?>
<i class="company_det_hy_line">|</i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['pr_n'];?>
<i class="company_det_hy_line">|</i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['mun_n'];?>
</div>
		                            <div class="company_det_hy_time">
		                            	更新时间： <?php if ($_smarty_tpl->tpl_vars['job_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['job_list']->value['redtime']=='1') {?>
		                                <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
</span> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
 <?php }?>
		                            </div>
		                        </div>
		                    </div>
		
		                    <div class="yun_joblist_ope">
		                        <?php if (in_array($_smarty_tpl->tpl_vars['job_list']->value['id'],$_smarty_tpl->tpl_vars['useridjob']->value)) {?>
		                        	<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job_list.id`'),$_smarty_tpl);?>
" target="_blank" class="search_job_Apply_fast_ysq">已申请</a>
		                        <?php } else { ?>
		                        	<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job_list.id`'),$_smarty_tpl);?>
" target="_blank" class="search_job_Apply_fast ">申请</a>
		                        <?php }?>
		                        <div class="yun_job_operation_d">
		                            <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> <?php if (in_array($_smarty_tpl->tpl_vars['job_list']->value['id'],$_smarty_tpl->tpl_vars['favjob']->value)) {?>
			                            <a href="javascript:fav_job('<?php echo $_smarty_tpl->tpl_vars['job_list']->value['id'];?>
','1');" class="yun_job_operation_ysc">已收藏</a> <?php } else { ?>
			                            <a href="javascript:fav_job('<?php echo $_smarty_tpl->tpl_vars['job_list']->value['id'];?>
','1');" class="yun_job_operation_sc scjobid<?php echo $_smarty_tpl->tpl_vars['job_list']->value['id'];?>
">收藏</a><?php }?> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
			                            <a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能收藏', 2, 8)" class="yun_job_operation_sc" rel="nofollow">收藏</a>
		                            <?php } else { ?>
		                            	<a href="javascript:void(0);" onclick="showlogin('1');" class="yun_job_operation_sc" rel="nofollow">收藏</a>
		                            <?php }?> <?php }?>
		                        </div>
		                    </div>
		                    
		                </div>
		                <?php } ?> 
		                
		                <?php if ($_smarty_tpl->tpl_vars['total']->value!=0||is_array($_smarty_tpl->tpl_vars['zd_list']->value)) {?>
                		
                		<div class="clear"></div>
		                <div class="search_pages">
		                    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;
echo $_smarty_tpl->tpl_vars['totalshow']->value;?>
</div>
		                </div>
                		<input value='<?php echo $_GET['ltype'];?>
' type='hidden' id='ltype' /> 
                		
                		<?php } else { ?>
		                
		                <div class="seachno">
		                    <div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif" width="144" height="102"></div>
		                    <div class="listno-content"> <strong>很抱歉，没有找到满足条件的职位</strong><br>
		                        <span> 建议您：<br>1、适当减少已选择的条件<br>2、适当删减或更改搜索关键字<br></span> 
		                        <span> 热门关键字：<br>
			            			<?php  $_smarty_tpl->tpl_vars['klist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['klist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"7","recom"=>"1","type"=>"3","item"=>"\'klist\'","nocache"=>"")
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
			            				<a href="<?php echo smarty_function_listurl(array('type'=>'keyword','v'=>$_smarty_tpl->tpl_vars['klist']->value['key_title']),$_smarty_tpl);?>
" class="jos_tag_a" title="<?php echo $_smarty_tpl->tpl_vars['klist']->value['key_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['klist']->value['key_name'];?>
</a> 
			            			<?php } ?>
			                   	</span> 
			                </div>
			           	</div>
			           	
		                <?php }?>
		                
		                	
		                
            		</div>
        
					          	
        		</div>
        		    <div class="yun_job_list_right">
                    <div class="yun_job_list_right_banner">
                	<?php  $_smarty_tpl->tpl_vars['adlist_7'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_7']->_loop = false;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[7];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 5;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_7']->key => $_smarty_tpl->tpl_vars['adlist_7']->value) {
$_smarty_tpl->tpl_vars['adlist_7']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['adlist_7']->value['html'];?>

<?php } ?>
</div>
		        <div class="job_recommendation">
		            <div class="job_recommendation_title"><span class="job_recommendation_span"><i class="job_recommendation_span_line"></i>精选职位推荐</span>
		                <a href="javascript:void(0)" onclick="exchange();" class="job_right_box_more png" rel="nofollow">换一组</a>
		            </div>
		            <ul class="job_recommendation_list">
		                <input type="hidden" value='2' id='exchangep' /> 
		                <?php  $_smarty_tpl->tpl_vars['blist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blist']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("namelen"=>"15","comlen"=>"19","rec"=>"1","limit"=>"10","item"=>"\'blist\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
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
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

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
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
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
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
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
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$blist = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($blist) && !empty($blist)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($blist as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($blist as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($blist[$key]);
					continue;
				}else{
					$blist[$key] = $db->array_action($value,$cache_array);
					$blist[$key][stime] = date("Y-m-d",$value[sdate]);
					$blist[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$blist[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$blist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$blist[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$blist[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$blist[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$blist[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$blist[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$blist[$key][logo] =$r_uid[$value['uid']][logo];
					$blist[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$blist[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$blist[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$blist[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$blist[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$blist[$key]['time'] = date("H:i",$value['lastupdate']);
						$blist[$key]['redtime'] =1;
					}else{
						$blist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$blist[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$blist[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$blist[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$blist[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$blist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$blist[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$blist[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$blist[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$blist[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$blist[$key][ratlogo] = $v[com_pic];
							}else{
								$blist[$key][ratlogo] ='';
							}
							$blist[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$blist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$blist[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$blist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$blist[$key][name_n]);
						$blist[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$blist[$key][com_n]);
						$blist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$blist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($blist)){
				if($paramer[keyword]!=""&&!empty($blist)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$blist = $blist; if (!is_array($blist) && !is_object($blist)) { settype($blist, 'array');}
foreach ($blist as $_smarty_tpl->tpl_vars['blist']->key => $_smarty_tpl->tpl_vars['blist']->value) {
$_smarty_tpl->tpl_vars['blist']->_loop = true;
?>
		                <li>
		                    <a href="<?php echo $_smarty_tpl->tpl_vars['blist']->value['job_url'];?>
" class="job_recommendation_jobname"><?php echo $_smarty_tpl->tpl_vars['blist']->value['name_n'];?>
</a> <a href="<?php echo $_smarty_tpl->tpl_vars['blist']->value['com_url'];?>
" class="job_recommendation_Comname"><?php echo $_smarty_tpl->tpl_vars['blist']->value['com_n'];?>
</a>
		                    <div class="job_recommendation_msg"> 
		                    	<span class=""><em class="job_right_box_list_c"><?php if ($_smarty_tpl->tpl_vars['blist']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['blist']->value['job_salary'];?>
 </em></span>
 		                       
		                  	</div>
		                   
		                </li>
		                <?php } ?>
		            </ul>
		        </div>
		         </div>
		        <div class="yun_content">
		            <div class="recomme_det">
		                <h3 class=""><span class="recomme_det_hh">推荐企业</span></h3>
		                <div class="co_recom">
		                    <ul>
		                        <?php  $_smarty_tpl->tpl_vars['com'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['com']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"8","rec"=>"1","logo"=>"1","item"=>"\'com\'","nocache"=>"")
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
" target="_blank"> <div class="co_recom_imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['com']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" width="100" height="100" />
                                       </div>
			                                <p><?php echo mb_substr($_smarty_tpl->tpl_vars['com']->value['name'],0,13,'utf-8');?>
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
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/com_index.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
		DD_belatedPNG.fix('.png,.search_job_data,.yun_job_operation_sc');
		<?php echo '</script'; ?>
>
		<![endif]-->
        <?php echo '<script'; ?>
>
            $(document).ready(function() {
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
 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
