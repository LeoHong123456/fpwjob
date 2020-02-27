<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-22 00:40:31
         compiled from "/www/fpwjob/uploads/app/template/train/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:11443238325e5007ff28cb83-90641036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf5771299c98dfaeed0c214b655ef962014f07fa' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/train/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11443238325e5007ff28cb83-90641036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad_l' => 0,
    'config' => 0,
    'recsubject' => 0,
    'v' => 0,
    'rectrain' => 0,
    'newsubject' => 0,
    'teacher' => 0,
    'subject_name' => 0,
    'newslist' => 0,
    'subjectkeyword' => 0,
    'keylist' => 0,
    'train_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5007ff35f022_99717587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5007ff35f022_99717587')) {function content_5e5007ff35f022_99717587($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<div class="clear"></div>
<div class="hunter_bar">
  <div class="hunter_banner_con">
    <div class="layui-carousel" id="test1" lay-filter="test1">
      <div carousel-item=""> <?php  $_smarty_tpl->tpl_vars['ad_l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad_l']->_loop = false;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[35];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['ad_l']->key => $_smarty_tpl->tpl_vars['ad_l']->value) {
$_smarty_tpl->tpl_vars['ad_l']->_loop = true;
?>
        <div><a href="<?php echo $_smarty_tpl->tpl_vars['ad_l']->value['src'];?>
" target="_blank" style="display:block;width:100%;height:100%;"><img src="<?php echo $_smarty_tpl->tpl_vars['ad_l']->value['pic'];?>
"></a></div>
        <?php } ?> </div>
    </div>
  </div>
</div>
<div class="clear"></div>
<div class="training_index_search ftl">
  <div class="training_index_search_left">
    <div class="training_index_search_s ftl">
      <form method="get" action="index.php" onsubmit="check_search();">
        <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_traindir']) {?>
        <input type="hidden" value="train" name="m" />
        <?php }?>
        <input type="hidden" name="c" value="subject" />
        <div class="training_index_search_select ftl" id="selectslist">
          <input type="button" id="subname" value="找课程" class="training_index_search_but"onclick="check_search_type();">
          <div class="training_index_search_select_list none" id="selects">
            <ul class="training_index_search_select_ul">
              <li><a href="javascript:search_type('subject','找课程');">找课程</a></li>
              <li><a href="javascript:search_type('agency','找机构');">找机构</a></li>
              <li><a href="javascript:search_type('teacher','找培训师');">找培训师</a></li>
            </ul>
          </div>
        </div>
        <input type="text" value="请输入关键字查询" name="keyword" class="training_index_search_text  ftl" onblur="if(this.value==''){this.value='请输入关键字查询'}" onclick="if(this.value=='请输入关键字查询'){this.value=''}">
        <input type="submit" value="搜索" class="training_index_search_bth">
      </form>
    </div>

  </div>
</div>
<div class="clear"></div>
<div class="clear"></div>
<div class="training_w980">
  <div class="training_index_tit"><span class="training_index_tit_s">精品课程</span> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subject','rec'=>1),$_smarty_tpl);?>
" class="training_index_tit_more">更多精品课程 ></a> </div>
  <div class="training_tj_box">
    <div class="training_tj_box_c">
      <ul class="training_tj_list">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recsubject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li>
          <div class="training_tj_img"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank" > <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);" width="280" height="158"></a></div>
          <div class="training_tj_box_info">
            <div class="training_tj_box_name"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
            <div class="training_tj_box_comname"><?php echo $_smarty_tpl->tpl_vars['v']->value['comname'];?>
</div>
            <div class="training_tj_box_b"><span class="training_tj_box_jg">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span> <span class="training_tj_box_user"><?php echo $_smarty_tpl->tpl_vars['v']->value['baomingnum'];?>
人报名</span></div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<div class="training_index_jg">
  <div class="training_w980">
    <div class="training_index_tit"><span class="training_index_tit_s">入驻机构</span> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agency','rec'=>1),$_smarty_tpl);?>
" target="_blank"  class="training_index_tit_more">查看更多 ></a> </div>
    <div class="training_tj_box">
      <div class="training_tj_box_c">
        <ul class="training_index_jg_list">
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rectrain']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <li>
            <div><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
" target="_blank" > <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['logo'];?>
" width="100" height="100" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_px_icon'];?>
',2);" /></a></div>
            <div class="training_index_jg_name"> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
" class="
      " title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> 
               
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<div class="training_w980">
  <div class="training_index_tit"><span class="training_index_tit_s">最新课程</span><em class="training_index_tit_e">快速筛选你所需要的课程，全面提升你的职场能力</em> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subject','order'=>'ctime','t'=>'desc'),$_smarty_tpl);?>
" class="training_index_tit_more">查看所有课程 ></a> </div>
  <div class="training_tj_box">
    <div class="training_tj_box_c">
      <ul class="training_tj_list">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsubject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li>
          <div class="training_tj_img"> <a  href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank" > <img  src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);" width="280" height="158"></a></div>
          <div class="training_tj_box_info">
            <div class="training_tj_box_name"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
            <div class="training_tj_box_comname"><?php echo $_smarty_tpl->tpl_vars['v']->value['comname'];?>
</div>
            <div class="training_tj_box_b"><span class="training_tj_box_jg">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span> <span class="training_tj_box_user"><?php echo $_smarty_tpl->tpl_vars['v']->value['baomingnum'];?>
人报名</span></div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="training_index_tit"><span class="training_index_tit_s">明星讲师</span> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'teacher','rec'=>1),$_smarty_tpl);?>
" target="_blank" class="training_index_tit_more">查看更多 ></a> </div>
  <div class="training_tj_box">
    <div class="training_tj_box_c">
      <ul class="training_index_js">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teacher']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li>
          <div class="training_index_img"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'teamshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank" ><img  src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="225" height="225" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);"></a></div>
          <div class="training_index_js_name"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'teamshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
          <div class="training_index_sc">擅长领域：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value['sid']];?>
</div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<div class="training_index_newsbox">
  <div class="training_w980">
    <div class="training_index_tit"><span class="training_index_tit_s">机构新闻</span></div>
    <div class="training_tj_box">
      <div class="training_tj_box_c">
        <ul class="training_index_newslist">
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <li> <i class="training_index_news_line"></i> <i class="training_index_news_quan"></i> <span class="training_index_newstime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],'%Y-%m-%d');?>
</span>
            <div class="training_index_newslist_box"> <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'newsshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" target="_blank" class="training_index_news_name" ><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,20,'utf-8');?>
</a> </div>
            <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'newsshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" target="_blank" class="training_index_newsxq" >查看详情></a> </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
  <div class="training_w980">
<?php if ($_smarty_tpl->tpl_vars['subjectkeyword']->value) {?>

    <div class="training_index_search_hot ftl"> 热门搜索：
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
?> 
      	<a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
" class="training_subject_tag_a" target="_blank"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> 
      <?php } ?> 
      </div>
      <?php } else { ?>
      <div class="training_index_search_hot ftl"> &nbsp;</div>
      <?php }?>
      </div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
/js/slides.jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/js/jquery.flexslider.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
 
layui.use(['carousel'], function(){
  var carousel = layui.carousel;
  carousel.render({
    elem: '#test1'
    ,width: '100%'
    ,height: '380px'
  });
});
$(window).load(function() {
	$('.flexslider').flexslider({
		directionNav: true,
		pauseOnAction: false
	});
});
$(document).ready(function () {
    
    $('body').click(function (evt) {
        if (!$(evt.target).parent().hasClass('training_index_search_select') && !$(evt.target).hasClass('training_index_search_select') && evt.target.id != 'selectslist') {
            $('.training_index_search_select_list').hide();
        }
    });
})

function check_search_type(){
	$(".training_index_search_select_list").show();
}
function search_type(type,name){
	$("input[name=c]").val(type);
	$("#subname").val(name);
	$(".training_index_search_select_list").hide();
}
function check_search(){
	var keyword=$("input[name=keyword]").val();
	if(keyword=="请输入关键字查询"){
		$("input[name=keyword]").val('');
	}
}
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
