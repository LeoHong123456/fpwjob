<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 11:48:23
         compiled from "/www/fpwjob/uploads/app/template/wap/wap_diy.htm" */ ?>
<?php /*%%SmartyHeaderCode:16122194445dbcfc872e4646-13174105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '430421604e0411b06f9668c4fc7b862fbd765942' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/wap_diy.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16122194445dbcfc872e4646-13174105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sort' => 0,
    'sortval' => 0,
    'tplmoblie' => 0,
    'hd' => 0,
    'lunbo' => 0,
    'config_wapdomain' => 0,
    'searchurl' => 0,
    'vv' => 0,
    'nav' => 0,
    'pv' => 0,
    'indexnav1' => 0,
    'indexnav2' => 0,
    'indexnav3' => 0,
    'alist' => 0,
    'username' => 0,
    'adlist' => 0,
    'adlist_74' => 0,
    'rlistcss' => 0,
    'rlist' => 0,
    'keylist' => 0,
    'newjob_list' => 0,
    'config' => 0,
    'waflist' => 0,
    'hotjoblist' => 0,
    'job_list' => 0,
    'urgentjob_list' => 0,
    'user1' => 0,
    'eid' => 0,
    'user' => 0,
    'indexnews2' => 0,
    'indexnews3' => 0,
    'indexnews1' => 0,
    'tplistrec' => 0,
    'tplisthot' => 0,
    'tplistnew' => 0,
    'sutrec' => 0,
    'suthot' => 0,
    'sutnew' => 0,
    'zph' => 0,
    'job_index' => 0,
    'kone' => 0,
    'v' => 0,
    'job_name' => 0,
    'job_type' => 0,
    'ktwo' => 0,
    'val' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbcfc879917c9_62386981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbcfc879917c9_62386981')) {function content_5dbcfc879917c9_62386981($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_formatpicurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.formatpicurl.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
.tips{display:none;}
.job_fair_state{ margin-bottom:10px;}
</style>

<?php  $_smarty_tpl->tpl_vars['sortval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sortval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sortval']->key => $_smarty_tpl->tpl_vars['sortval']->value) {
$_smarty_tpl->tpl_vars['sortval']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['sortval']->value=='hd') {?>

<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hdshow']!=2) {?> 
<?php if ($_smarty_tpl->tpl_vars['hd']->value) {?>
<section>
<div class="swiper_banner">
	<div class="swiper-container" id="imgswiper">
		<div class="swiper-wrapper">
			<?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['lunbo']->value['pic']) {?>
			<div class="swiper-slide">
			<a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['url'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%'/></a>
			</div>
			<?php }?>
		<?php } ?>
		</div>
	</div> 
	</div>
</section>
<?php } else { ?>
<section>
	<div class="swiper-container" id="imgswiper">
		<div class="swiper-wrapper">
			<?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[50];if(is_array($add_arr) && !empty($add_arr)){
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
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
			<div class="swiper-slide">
			<a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['src'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%'/></a>
			</div>
			<?php } ?>
		</div>
	</div>
    </div>
</section>
<?php }?>
<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['sortval']->value=='search') {?>

<div class="clear"></div>
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['searchshow']!=2) {?> 
<section> 
<div class="index_search_cont" >
   <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php">
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['searchurl']) {?>
       <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchurl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['searchurl']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?>
       <input type="hidden" name="c" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['c'];?>
" />
        <?php if ($_smarty_tpl->tpl_vars['vv']->value['a']) {?>
        <input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['a'];?>
" />
         <?php }?>
        <?php }?>
        <?php } ?>
      <?php } else { ?>
      <input type="hidden" name="c" value="job" />
      <?php }?>
      <div class="index_formFiled index_formFiled_text">
        <input type="text" value="" name="keyword" class="index_input_search" placeholder="<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['search']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['search'];
} else { ?>请输入职位关键字，如：会计...<?php }?> ">
        <input type="submit" value="搜职位" class="index_input_btn">
        <i class="index_input_btn_icon iconfont_index_search"></i>
      </div>
    </form>
</div>
</section>
<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['sortval']->value=='nav') {?>

<?php if ($_smarty_tpl->tpl_vars['nav']->value) {?>
	<div class="index_nav_content clear" style="padding-bottom:10px;
    ">
    <nav>
     <?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value) {
$_smarty_tpl->tpl_vars['pv']->_loop = true;
?>
      <dl class="nav_diylist">
        <a href="<?php echo $_smarty_tpl->tpl_vars['pv']->value['navurl'];?>
">
        <dt class="" 
        ><img src="<?php echo $_smarty_tpl->tpl_vars['pv']->value['pic'];?>
"></img></dt>
        <dd><?php echo $_smarty_tpl->tpl_vars['pv']->value['name'];?>
</dd>
        </a>
      </dl>
      <?php } ?>
    </nav>
  </div>
   <?php }?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='indexnav') {?>
    
   <div class="clear"></div>
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['indexnav']!=2) {?>
<div class="index_nav_yd">
<?php if ($_smarty_tpl->tpl_vars['indexnav1']->value) {?>
<div class="index_nav_yd_left">
<a href="<?php echo $_smarty_tpl->tpl_vars['indexnav1']->value['indexnavurl'];?>
">
<div class="index_nav_yd_left_tit"><?php echo $_smarty_tpl->tpl_vars['indexnav1']->value['name'];?>
</div>

<?php if ($_smarty_tpl->tpl_vars['indexnav1']->value['pic']) {?><div ><img class="index_nav_diy_left_icon" src="<?php echo $_smarty_tpl->tpl_vars['indexnav1']->value['pic'];?>
"></div> <?php }?>
<div class="index_nav_yd_left_job"><?php echo $_smarty_tpl->tpl_vars['indexnav1']->value['desc'];?>
</div>
</a>
</div>
<?php } else { ?>
<div class="index_nav_yd_left">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'map'),$_smarty_tpl);?>
">
<div class="index_nav_yd_left_tit">周边工作</div>

<div class="index_nav_yd_left_icon"></div>
<div class="index_nav_yd_left_job">好工作其实就在你身边</div>
</a>
</div>
<?php }?>
<div class="index_nav_yd_right">
<?php if ($_smarty_tpl->tpl_vars['indexnav2']->value) {?>
<div class="index_nav_yd_right_t">
 <a href="<?php echo $_smarty_tpl->tpl_vars['indexnav2']->value['indexnavurl'];?>
"><div class="index_nav_yd_right_t_name"><?php echo $_smarty_tpl->tpl_vars['indexnav2']->value['name'];?>
</div>
<div class="index_nav_yd_right_t_p"><?php echo $_smarty_tpl->tpl_vars['indexnav2']->value['desc'];?>
</div>
<?php if ($_smarty_tpl->tpl_vars['indexnav2']->value['pic']) {?><i class=""><img class="index_nav_diy_right_icon" src="<?php echo $_smarty_tpl->tpl_vars['indexnav2']->value['pic'];?>
"></i> <?php }?>
</a>
</div>
<?php } else { ?>
<div class="index_nav_yd_right_t">
 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'tiny'),$_smarty_tpl);?>
"><div class="index_nav_yd_right_bname">普工专区</div>
<div class="index_nav_yd_right_t_p">普工.技工.一线员工</div>
<i class="index_nav_yd_right_icon"></i>
</a>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['indexnav3']->value) {?>
<div class="index_nav_yd_right_b">
 <a href="<?php echo $_smarty_tpl->tpl_vars['indexnav3']->value['indexnavurl'];?>
">
 <div class="index_nav_yd_right_bname"><?php echo $_smarty_tpl->tpl_vars['indexnav3']->value['name'];?>
</div>
 <div class="index_nav_yd_right_bp"><?php echo $_smarty_tpl->tpl_vars['indexnav3']->value['desc'];?>
</div>
 <?php if ($_smarty_tpl->tpl_vars['indexnav3']->value['pic']) {?><i class=""><img class="index_nav_diy_right_bicon" src="<?php echo $_smarty_tpl->tpl_vars['indexnav3']->value['pic'];?>
"></i> <?php }?>
 </a></div>
 <?php } else { ?>
<div class="index_nav_yd_right_b">
 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once'),$_smarty_tpl);?>
">
 <div class="index_nav_yd_right_bname">店铺招聘</div>
 <div class="index_nav_yd_right_bp">钱多事少，火速入职</div>
 <i class="index_nav_yd_right_bicon"></i>
 </a></div>
 <?php }?>
</div>
</div>
<?php }?>
<div class="clear"></div>
  <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='notice') {?>
     
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['notice']!=2) {?>
<section>
<div class="yun_wap_notice sxl"><span class="yun_wap_notice_tit"><i class="yun_wap_notice_tit_s"></i></span>
<ul class="yun_wap_notice_list sxlist" style="padding-left: 70px; height: 30px;overflow: hidden;">
<?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
$alist=array();$time=time();eval('$paramer=array("limit"=>"4","item"=>"\'alist\'","t_len"=>"15","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = 1;
		//分站
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}else if($config['sy_web_site']=="1"){
			$where.=" and `did`='0'";
		}  
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"admin_announcement",$where,$Purl,"",0,$_smarty_tpl);
		}
		//排序字段 默认按照xuanshang排序
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer[order]."`";
		}else{
			$where.="  ORDER BY `datetime`";
		}
		//排序方式默认倒序
		if($paramer[sort]){
			$where.=" ".$paramer[sort];
		}else{
			$where.=" DESC";
		}

		$alist=$db->select_all("admin_announcement",$where.$limit);
		if(is_array($alist)){
			foreach($alist as $key=>$value){
				//截取标题
				if($paramer[t_len]){
					$alist[$key][title_n] = mb_substr($value['title'],0,$paramer[t_len],"utf-8");
				}
				$alist[$key][time]=date("Y-m-d",$value[datetime]);
				$alist[$key][url] = Url("announcement",array("id"=>$value[id]),"1");
			}
		}$alist = $alist; if (!is_array($alist) && !is_object($alist)) { settype($alist, 'array');}
foreach ($alist as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value) {
$_smarty_tpl->tpl_vars['alist']->_loop = true;
?>
<li style="width: 100%;height: 30px;line-height: 30px;"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'announcement','id'=>$_smarty_tpl->tpl_vars['alist']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title_n'];?>
</a></li>
<?php } ?>
</ul></div>
</section>
<?php }?>
     <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='reglogin') {?>
       
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['reglogin']!=2) {?>
<?php if (!$_smarty_tpl->tpl_vars['username']->value) {?> 
<section>
  <div class="index_warp_content mt10">
    <div class="index_login">
      <div class="index_login_p"><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['reglogindesc']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['reglogindesc'];
} else { ?>您尚未登录，马上登录轻松管理信息<?php }?></div>
      <div class="index_logoin_sub"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="index_logoin_bth"  <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['logincolor']) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['logincolor'];?>
;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['login']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['login'];
} else { ?>登录<?php }?></a>      
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
"  class="index_logoin_bth index_reg_bth"  <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['regcolor']) {?>style="background: <?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['regcolor'];?>
;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['reg']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['reg'];
} else { ?>注册<?php }?></a>            
      </div>
    </div>
  </div>
</section>
<?php }?>
<?php }?>
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='ad') {?>
        
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['ad']!=2) {?>
<?php if ($_smarty_tpl->tpl_vars['adlist']->value) {?>
<section>
<div class="yun_companyList">
    <ul class="clearfix">
    <?php  $_smarty_tpl->tpl_vars['pv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pv']->key => $_smarty_tpl->tpl_vars['pv']->value) {
$_smarty_tpl->tpl_vars['pv']->_loop = true;
?>
   <li><a href="<?php echo $_smarty_tpl->tpl_vars['pv']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pv']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['pv']->value['name'];?>
"></a></li>
      <?php } ?>
    </ul>
</div>
</section>
 <?php } else { ?>
 <section>
<div class="yun_companyList">
    <ul class="clearfix">
    <?php  $_smarty_tpl->tpl_vars['adlist_74'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_74']->_loop = false;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[74];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 12;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_74']->key => $_smarty_tpl->tpl_vars['adlist_74']->value) {
$_smarty_tpl->tpl_vars['adlist_74']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['adlist_74']->value['html'];?>
</li>
    <?php } ?>
    </ul>
</div>
</section>
 
 <?php }?>
<?php }?>
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='rewardjob') {?>
         
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjob']!=2) {?> 
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titsj"></i>赏金职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">赏金职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titsj"></i>赏金职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class=" wap_tit4_icon_sj"></i><font color="#666">赏金职位</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5 mt15"><span class="wap_tit5_bg">赏金职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <div class="clear"></div>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobcss']==2) {?>
  <div class="wap_diy_sjcont"> 
   <?php  $_smarty_tpl->tpl_vars['rlistcss'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlistcss']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'rewardjobnum\']","namelen"=>"6","comlen"=>"8","reward"=>"1","item"=>"\'rlistcss\'","nocache"=>"")
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

		if($paramer[reward]=='1'){
			$where="`rewardpack`='1'";

		}elseif($paramer[share]=='1'){
		
			$where="`sharepack`='1'";
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
			 
		
		$where .= " AND `r_status`='1' AND `state`=1 and `status`='0' ";
		
		
		//按照职位名称匹配
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";

			$where.=" AND (".@implode(" or ",$where1).")";
		}

		//筛除重复
		if($paramer[noids]==1 && !empty($noids)){
			$where.=" AND `id` NOT IN (".@implode(',',$noids).")";
		}
	

		//查询条数
		if($paramer[limit]){
			$limit = " limit ".$paramer[limit];
		}

		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
          
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
		 
		$rlistcss = $db->select_all("company_job",$where.$limit);
		if(is_array($rlistcss)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($rlistcss as $key=>$value){
				$comuid[] = $value['uid'];
				$jobid[] = $value['id'];
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`shortname`,`yyzz_status`,`logo`,`pr`,`hy`,`mun`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value['shortname']){
    						$value['shortname'] =$value['shortname'];
    					}
						if(!$value['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,$value['logo']))){
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
			if($jobids){
				if($paramer[reward]=='1'){
					
					$rewardList=$db->select_all("company_job_reward","`jobid` IN (".$jobids.")");
					
				}elseif($paramer[share]=='1'){ 

					$rewardList=$db->select_all("company_job_share","`jobid` IN (".$jobids.")","`jobid`,`packmoney`,`packprice`,`packnum`");
				
				}
				if(is_array($rewardList)){
						foreach($rewardList as $key=>$value){
							
							$rewadArr[$value['jobid']] = $value;
						}
					}
			}
			    
			
			$noids=array();
			foreach($rlistcss as $key=>$value){
				if($paramer[bid]){
					$noids[] = $value[id];
				}
				$rlistcss[$key] = $db->array_action($value,$cache_array);
				$rlistcss[$key][stime] = date("Y-m-d",$value[sdate]);
				$rlistcss[$key][etime] = date("Y-m-d",$value[edate]);
				if($arr_data['sex'][$value['sex']]){
    				$rlistcss[$key][sex_n]=$arr_data['sex'][$value['sex']];
    			}
				$rlistcss[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);

				if($value[minsalary] && $value[maxsalary]){
					$rlistcss[$key][job_salary] =$value[minsalary]."~".$value[maxsalary];
				}elseif($value[minsalary]){
					$rlistcss[$key][job_salary] =$value[minsalary]."以上";
				}else{
                    $rlistcss[$key][job_salary] ="面议";
                }
				if($r_uid[$value['uid']][shortname]){
    				$rlistcss[$key][com_name] =$r_uid[$value['uid']][shortname];
    			}
				$rlistcss[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
				$rlistcss[$key][logo] =$r_uid[$value['uid']][logo];
				$rlistcss[$key][pr_n] =$r_uid[$value['uid']][pr_n];
				$rlistcss[$key][hy_n] =$r_uid[$value['uid']][hy_n];
				$rlistcss[$key][mun_n] =$r_uid[$value['uid']][mun_n];
				if($paramer[reward]=='1'){
					$rlistcss[$key][sqmoney] =floatval( $rewadArr[$value['id']][sqmoney]);
					$rlistcss[$key][invitemoney] =floatval( $rewadArr[$value['id']][invitemoney]);
					$rlistcss[$key][offermoney] =floatval( $rewadArr[$value['id']][offermoney]);
					$rlistcss[$key][money] =floatval( $rewadArr[$value['id']][money]);
					$rlistcss[$key][r_exp] = $rewadArr[$value['id']][exp];
					$rlistcss[$key][r_edu] = $rewadArr[$value['id']][edu];
					$rlistcss[$key][r_project] = $rewadArr[$value['id']][project];
					$rlistcss[$key][r_skill] = $rewadArr[$value['id']][skill];
				}

				if($paramer[share]=='1'){
					$rlistcss[$key][packmoney] = $rewadArr[$value['id']][packmoney];
					$rlistcss[$key][packnum] = $rewadArr[$value['id']][packnum];
					$rlistcss[$key][packprice] = $rewadArr[$value['id']][packprice];
					
				}
				

				$time=$value['lastupdate'];
				//今天开始时间戳
				$beginToday=time(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=time(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$rlistcss[$key]['time'] ="一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$rlistcss[$key]['time'] ="昨天";
				}elseif($time>$beginToday){	
					$rlistcss[$key]['time'] = date("H:i",$value['lastupdate']);
					$rlistcss[$key]['redtime'] =1;
				}else{
					$rlistcss[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				//获得福利待遇名称
				if(is_array($rlistcss[$key]['welfare'])&&$rlistcss[$key]['welfare']){
					foreach($rlistcss[$key]['welfare'] as $val){
						//$rlistcss[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
						$rlistcss[$key]['welfarename'][]=$val;
					}

				}
				//截取公司名称
				if($paramer[comlen]){
					if($r_uid[$value['uid']][shortname]){
    					$rlistcss[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
    				}else{
    					$rlistcss[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
    				}
					
				}
				//截取职位名称
				if($paramer[namelen]){
					if($value['rec_time']>time()){
						$rlistcss[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
					}else{
						$rlistcss[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
					}
				}else{
					if($value['rec_time']>time()){
						$rlistcss[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
					}else{
						$rlistcss[$key]['name_n'] = $value['name'];
					}
				}
				//构建职位伪静态URL
				$rlistcss[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
				$rlistcss[$key][job_wapurl] = Url("wap",array("c"=>"job","a"=>"view","id"=>$value[id]),"1");
				//构建企业伪静态URL
				$rlistcss[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
				foreach($comrat as $k=>$v){
					if($value[rating]==$v[id]){
						$rlistcss[$key][color] = str_replace("#","",$v[com_color]);
						$rlistcss[$key][ratlogo] = $v[com_pic];
						$rlistcss[$key][ratname] = $v[name];
					}
				}
				if($paramer[keyword]){
					$rlistcss[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$rlistcss[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
					$rlistcss[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$rlistcss[$key][name_n]);
					$rlistcss[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$rlistcss[$key][com_n]);
					$rlistcss[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					$rlistcss[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
    			}
			}

			if(is_array($rlistcss)){
				if($paramer[keyword]!=""&&!empty($rlistcss)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$rlistcss = $rlistcss; if (!is_array($rlistcss) && !is_object($rlistcss)) { settype($rlistcss, 'array');}
foreach ($rlistcss as $_smarty_tpl->tpl_vars['rlistcss']->key => $_smarty_tpl->tpl_vars['rlistcss']->value) {
$_smarty_tpl->tpl_vars['rlistcss']->_loop = true;
?>
<div class="wap_diy_sjlist">
<a href="<?php echo $_smarty_tpl->tpl_vars['rlistcss']->value['job_url'];?>
" class="wap_diy_sjlist_a">
<div class="wap_diy_sj_n"><span class="wap_diy_sj_n_s"><i class="wap_diy_sj_n_dw">￥</i><?php echo $_smarty_tpl->tpl_vars['rlistcss']->value['money'];?>
</span>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobdate']!=2) {?> 
<span class="wap_diy_sj_n_time"><?php echo $_smarty_tpl->tpl_vars['rlistcss']->value['time'];?>
</span>
 <?php }?> 
</div>
<div class="wap_diy_sjbox">
<div class="wap_diy_sj_jobname"><?php echo $_smarty_tpl->tpl_vars['rlistcss']->value['name_n'];?>
 </div> 
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobsalary']!=2) {?> 
<div class="wap_diy_sj_xz"><?php if ($_smarty_tpl->tpl_vars['rlistcss']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['rlistcss']->value['job_salary'];?>
</div> 
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobcom']!=2) {?>   
<div class="wap_diy_sj_comname"><?php echo $_smarty_tpl->tpl_vars['rlistcss']->value['com_n'];?>
</div> 
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobreward']!=2) {?> 
<div class="wap_diy_sj_tj">
<span class="wap_diy_sj_tj_s"><i class="wap_diy_sj_tj_s_n">￥<?php echo $_smarty_tpl->tpl_vars['rlistcss']->value['sqmoney'];?>
</i>投递</span>
<span class="wap_diy_sj_tj_s"><i class="wap_diy_sj_tj_s_n">￥<?php echo $_smarty_tpl->tpl_vars['rlistcss']->value['invitemoney'];?>
</i>面试</span>
<span class="wap_diy_sj_tj_s wap_diy_sj_tj_send"><i class="wap_diy_sj_tj_s_n">￥<?php echo $_smarty_tpl->tpl_vars['rlistcss']->value['offermoney'];?>
</i>入职</span>
</div> 
<?php }?> 
</div> 
</a>
</div> 
<?php } ?>


</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobcss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobcss']=='') {?>
 <div class="clear"></div>
 <?php  $_smarty_tpl->tpl_vars['rlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlist']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'rewardjobnum\']","namelen"=>"6","comlen"=>"8","reward"=>"1","item"=>"\'rlist\'","nocache"=>"")
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

		if($paramer[reward]=='1'){
			$where="`rewardpack`='1'";

		}elseif($paramer[share]=='1'){
		
			$where="`sharepack`='1'";
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
			 
		
		$where .= " AND `r_status`='1' AND `state`=1 and `status`='0' ";
		
		
		//按照职位名称匹配
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";

			$where.=" AND (".@implode(" or ",$where1).")";
		}

		//筛除重复
		if($paramer[noids]==1 && !empty($noids)){
			$where.=" AND `id` NOT IN (".@implode(',',$noids).")";
		}
	

		//查询条数
		if($paramer[limit]){
			$limit = " limit ".$paramer[limit];
		}

		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
          
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
		 
		$rlist = $db->select_all("company_job",$where.$limit);
		if(is_array($rlist)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($rlist as $key=>$value){
				$comuid[] = $value['uid'];
				$jobid[] = $value['id'];
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`shortname`,`yyzz_status`,`logo`,`pr`,`hy`,`mun`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value['shortname']){
    						$value['shortname'] =$value['shortname'];
    					}
						if(!$value['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,$value['logo']))){
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
			if($jobids){
				if($paramer[reward]=='1'){
					
					$rewardList=$db->select_all("company_job_reward","`jobid` IN (".$jobids.")");
					
				}elseif($paramer[share]=='1'){ 

					$rewardList=$db->select_all("company_job_share","`jobid` IN (".$jobids.")","`jobid`,`packmoney`,`packprice`,`packnum`");
				
				}
				if(is_array($rewardList)){
						foreach($rewardList as $key=>$value){
							
							$rewadArr[$value['jobid']] = $value;
						}
					}
			}
			    
			
			$noids=array();
			foreach($rlist as $key=>$value){
				if($paramer[bid]){
					$noids[] = $value[id];
				}
				$rlist[$key] = $db->array_action($value,$cache_array);
				$rlist[$key][stime] = date("Y-m-d",$value[sdate]);
				$rlist[$key][etime] = date("Y-m-d",$value[edate]);
				if($arr_data['sex'][$value['sex']]){
    				$rlist[$key][sex_n]=$arr_data['sex'][$value['sex']];
    			}
				$rlist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);

				if($value[minsalary] && $value[maxsalary]){
					$rlist[$key][job_salary] =$value[minsalary]."~".$value[maxsalary];
				}elseif($value[minsalary]){
					$rlist[$key][job_salary] =$value[minsalary]."以上";
				}else{
                    $rlist[$key][job_salary] ="面议";
                }
				if($r_uid[$value['uid']][shortname]){
    				$rlist[$key][com_name] =$r_uid[$value['uid']][shortname];
    			}
				$rlist[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
				$rlist[$key][logo] =$r_uid[$value['uid']][logo];
				$rlist[$key][pr_n] =$r_uid[$value['uid']][pr_n];
				$rlist[$key][hy_n] =$r_uid[$value['uid']][hy_n];
				$rlist[$key][mun_n] =$r_uid[$value['uid']][mun_n];
				if($paramer[reward]=='1'){
					$rlist[$key][sqmoney] =floatval( $rewadArr[$value['id']][sqmoney]);
					$rlist[$key][invitemoney] =floatval( $rewadArr[$value['id']][invitemoney]);
					$rlist[$key][offermoney] =floatval( $rewadArr[$value['id']][offermoney]);
					$rlist[$key][money] =floatval( $rewadArr[$value['id']][money]);
					$rlist[$key][r_exp] = $rewadArr[$value['id']][exp];
					$rlist[$key][r_edu] = $rewadArr[$value['id']][edu];
					$rlist[$key][r_project] = $rewadArr[$value['id']][project];
					$rlist[$key][r_skill] = $rewadArr[$value['id']][skill];
				}

				if($paramer[share]=='1'){
					$rlist[$key][packmoney] = $rewadArr[$value['id']][packmoney];
					$rlist[$key][packnum] = $rewadArr[$value['id']][packnum];
					$rlist[$key][packprice] = $rewadArr[$value['id']][packprice];
					
				}
				

				$time=$value['lastupdate'];
				//今天开始时间戳
				$beginToday=time(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=time(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$rlist[$key]['time'] ="一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$rlist[$key]['time'] ="昨天";
				}elseif($time>$beginToday){	
					$rlist[$key]['time'] = date("H:i",$value['lastupdate']);
					$rlist[$key]['redtime'] =1;
				}else{
					$rlist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				//获得福利待遇名称
				if(is_array($rlist[$key]['welfare'])&&$rlist[$key]['welfare']){
					foreach($rlist[$key]['welfare'] as $val){
						//$rlist[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
						$rlist[$key]['welfarename'][]=$val;
					}

				}
				//截取公司名称
				if($paramer[comlen]){
					if($r_uid[$value['uid']][shortname]){
    					$rlist[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
    				}else{
    					$rlist[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
    				}
					
				}
				//截取职位名称
				if($paramer[namelen]){
					if($value['rec_time']>time()){
						$rlist[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
					}else{
						$rlist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
					}
				}else{
					if($value['rec_time']>time()){
						$rlist[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
					}else{
						$rlist[$key]['name_n'] = $value['name'];
					}
				}
				//构建职位伪静态URL
				$rlist[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
				$rlist[$key][job_wapurl] = Url("wap",array("c"=>"job","a"=>"view","id"=>$value[id]),"1");
				//构建企业伪静态URL
				$rlist[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
				foreach($comrat as $k=>$v){
					if($value[rating]==$v[id]){
						$rlist[$key][color] = str_replace("#","",$v[com_color]);
						$rlist[$key][ratlogo] = $v[com_pic];
						$rlist[$key][ratname] = $v[name];
					}
				}
				if($paramer[keyword]){
					$rlist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$rlist[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
					$rlist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$rlist[$key][name_n]);
					$rlist[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$rlist[$key][com_n]);
					$rlist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					$rlist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
    			}
			}

			if(is_array($rlist)){
				if($paramer[keyword]!=""&&!empty($rlist)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$rlist = $rlist; if (!is_array($rlist) && !is_object($rlist)) { settype($rlist, 'array');}
foreach ($rlist as $_smarty_tpl->tpl_vars['rlist']->key => $_smarty_tpl->tpl_vars['rlist']->value) {
$_smarty_tpl->tpl_vars['rlist']->_loop = true;
?>


<div class="index_sj_job_list_box" style="padding:10px 0 10px 0; margin-top:10px;">
            <div class="index_sj_job_list_box_pd" style="min-height:70px;">
   
   
     <a href="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['job_url'];?>
">
       <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobreward']!=2) {?> 
      
      <div class="index_rewardjobs_money">
                            <span class="index_rewardjobs_money_n">￥<?php echo $_smarty_tpl->tpl_vars['rlist']->value['money'];?>
</span>
                            <div class="index_rewardjobs_list_fs"> <span class="index_rewardjobs_list_fs_name">投递:￥<?php echo $_smarty_tpl->tpl_vars['rlist']->value['sqmoney'];?>
</span><span class="index_rewardjobs_list_fs_name">面试:￥<?php echo $_smarty_tpl->tpl_vars['rlist']->value['invitemoney'];?>
</span><span class="index_rewardjobs_list_fs_name">入职:￥<?php echo $_smarty_tpl->tpl_vars['rlist']->value['offermoney'];?>
</span></div><span class="index_rewardjobs_list_ls">领赏</span>
                        </div>
    
     <?php }?> 
     
     <div class="index_rewardjobs_name"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['name_n'];?>
  </div>
     
  <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobcom']!=2) {?>   
  <div class="index_sj_comname"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['com_n'];?>
</div> 
  <?php }?>  
  <div class="index_rewardjobs_info"> <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobsalary']!=2) {?> 
    		<?php if ($_smarty_tpl->tpl_vars['rlist']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['rlist']->value['job_salary'];?>

     <?php }?>   <span class="index_rewardjob_line">|</span><?php echo mb_substr($_smarty_tpl->tpl_vars['rlist']->value['job_city_two'],0,4,"utf-8");?>
 <?php if ($_smarty_tpl->tpl_vars['rlist']->value['job_exp']) {?>
                <span class="index_rewardjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['rlist']->value['job_exp'];?>
经验
                <?php }
if ($_smarty_tpl->tpl_vars['rlist']->value['job_edu']) {?>
                <span class="index_rewardjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['rlist']->value['job_edu'];?>
学历
                <?php }?>
                            </div>
                            
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['rewardjobdate']!=2) {?> 
    	 <div class="index_rewardjobs_name_time"> <?php echo $_smarty_tpl->tpl_vars['rlist']->value['time'];?>
更新</div>
     <?php }?>
    
     
    
          </a>
            </div>
            </div>

<?php } ?>
<?php }?>
<?php }?> 
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='hotjob') {?>
        
     <div class="clear"></div>

<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotjob']!=2) {?>
<section>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_tithot"></i>热门职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">热门职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_tithot"></i>热门职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_hot"></i><font color="#d81e06">热门职位</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5 mt15"><span class="wap_tit5_bg">热门职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
 
 <div class="index_wap_hotjob ">
  <div class="clear"></div>
  <ul  class="index_hotlist"> <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'hotjobnum\']","type"=>"3","recom"=>"1","item"=>"\'keylist\'","iswap"=>"1","nocache"=>"")
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
  <li> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</span></a></li>
  <?php } ?> </ul>  <div class="clear"></div>
  </div>
  <div class="clear"></div>
</section>
<?php }?> 
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='newjob') {?>
        
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjob']!=2) {?>
<section>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titzw"></i>最新职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">最新职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titzw"></i>最新职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_zw"></i><font color="#2383f0">最新职位</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5 mt15"><span class="wap_tit5_bg">最新职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>

  <div class="index_warp_jobcontent">
    <?php  $_smarty_tpl->tpl_vars['newjob_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newjob_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'newjobnum\']","order"=>"\'lastdate\'","item"=>"\'newjob_list\'","nocache"=>"")
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
		
		
			
		$newjob_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($newjob_list) && !empty($newjob_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($newjob_list as $key=>$value){
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
			foreach($newjob_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($newjob_list[$key]);
					continue;
				}else{
					$newjob_list[$key] = $db->array_action($value,$cache_array);
					$newjob_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$newjob_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$newjob_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$newjob_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$newjob_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$newjob_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$newjob_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$newjob_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$newjob_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$newjob_list[$key][logo] =$r_uid[$value['uid']][logo];
					$newjob_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$newjob_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$newjob_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$newjob_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$newjob_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$newjob_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$newjob_list[$key]['redtime'] =1;
					}else{
						$newjob_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$newjob_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$newjob_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$newjob_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$newjob_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$newjob_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$newjob_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$newjob_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$newjob_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$newjob_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$newjob_list[$key][ratlogo] = $v[com_pic];
							}else{
								$newjob_list[$key][ratlogo] ='';
							}
							$newjob_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$newjob_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$newjob_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$newjob_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$newjob_list[$key][name_n]);
						$newjob_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$newjob_list[$key][com_n]);
						$newjob_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$newjob_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($newjob_list)){
				if($paramer[keyword]!=""&&!empty($newjob_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$newjob_list = $newjob_list; if (!is_array($newjob_list) && !is_object($newjob_list)) { settype($newjob_list, 'array');}
foreach ($newjob_list as $_smarty_tpl->tpl_vars['newjob_list']->key => $_smarty_tpl->tpl_vars['newjob_list']->value) {
$_smarty_tpl->tpl_vars['newjob_list']->_loop = true;
?>
    <div class="newjob_list">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['newjob_list']->value['id']),$_smarty_tpl);?>
">
   <h3><?php echo mb_substr($_smarty_tpl->tpl_vars['newjob_list']->value['name'],0,12,'utf-8');?>
 </h3>


   <div class="newjob_list_com">
   
  
   <span class="newjob_list_com_p">
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobcity']!=2) {?>
    <?php echo $_smarty_tpl->tpl_vars['newjob_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['newjob_list']->value['job_city_two'];?>
<i class="newjob_list_com_line">|</i>
   <?php }?>
    
    
  	<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobcom']!=2) {?>
   <?php echo mb_substr($_smarty_tpl->tpl_vars['newjob_list']->value['com_name'],0,22,'utf-8');?>

   
   <?php }?>
   </span>
	
	<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobcom']!=2) {?>
   <?php if ($_smarty_tpl->tpl_vars['newjob_list']->value['yyzz_status']=='1') {?>
   <i class="job_qy_rz_icon"></i>
   <?php }?>

   <?php if ($_smarty_tpl->tpl_vars['newjob_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['newjob_list']->value['ratlogo']!="0") {?> 
   <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['newjob_list']->value['ratlogo'];?>
" width="14" height="14"/> 
   <?php }?>
<?php }?>

   </div>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobsalary']!=2) {?>
    <div class="newjob_list_com_xz"><?php if ($_smarty_tpl->tpl_vars['newjob_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['newjob_list']->value['job_salary'];?>
</div>
    <?php }?>
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobwelfare']!=2) {?>
    <?php if ($_smarty_tpl->tpl_vars['newjob_list']->value['welfarename']) {?>
   <div class="index_wap_joblist_comcity mt10">
   <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newjob_list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
   <span class="index_wap_joblist_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span>
   <?php } ?></div>
   <?php }?>
  <?php }?>
	
    
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['newjobdate']!=2) {?>
          <div class="newjob_list_com_time">
          	<?php if ($_smarty_tpl->tpl_vars['newjob_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['newjob_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['newjob_list']->value['redtime']=='1') {?>
         		<?php echo $_smarty_tpl->tpl_vars['newjob_list']->value['time'];?>

			<?php } else { ?>
      			<?php echo $_smarty_tpl->tpl_vars['newjob_list']->value['time'];?>

   			<?php }?>
   			</div>
   			 <?php }?>
          </a>
   </div>
   
    <?php } ?> </div>
    
    
</section>
<?php }?> 
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='hotcom') {?>
         
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcom']!=2) {?>
<section>
 
  <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titmq"></i>名企招聘</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcommore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">名企招聘</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcommore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titmq"></i>名企招聘</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcommore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_mq"></i><font color="#ff9c00">名企招聘</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcommore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">名企招聘</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcommore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
 
  <div class="index_warp_jobcontent">
    <?php  $_smarty_tpl->tpl_vars['hotjoblist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hotjoblist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'hotjoblist\'","limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'hotcomnum\']","nocache"=>"")
;');$hotjoblist=array();
		
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
		if($config[sy_web_site]=="1"){
			$jobwhere="";
			if($config[province]>0 && $config[province]!=""){
				$jobwhere.=" and `provinceid`='$config[province]'";
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$jobwhere.=" and `cityid`='$config[cityid]'";
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$jobwhere.=" and `three_cityid`='$config[three_cityid]'";
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$jobwhere.=" and `hy`='".$config[hyclass]."'";
			} 
			if($jobwhere){
				$comlist=$db->select_all("company","1 ".$jobwhere,"`uid`");
				if(is_array($comlist)){
					foreach($comlist as $v){
						$cuid[]=$v[uid];
					}
				}
				$hotwhere=" and `uid` in (".@implode(",",$cuid).")";
			} 
		}
		

		$time = time();
		$where = "`time_start`<$time AND `time_end`>$time".$hotwhere;$order = " ORDER BY `sort` ";$sort = 'DESC';
		if($paramer['limit']){
				$limit=" limit ".$paramer['limit'];
			}
		$where.=$order.$sort;
        $Query = $db->query("SELECT * FROM $db_config[def]hotjob where ".$where.$limit); 
		while($rs = $db->fetch_array($Query)){
			$hotjoblist[] = $rs;
			$ListId[] =  $rs[uid];
		}

		//是否需要查询对应职位
		$JobId = @implode(",",$ListId);
		$comList=$db->select_all("company","`uid` IN ($JobId)","`shortname`,`uid`,`hy`,`provinceid`,`cityid`,`three_cityid`");
		
		$JobList=$db->select_all("company_job","`uid` IN ($JobId) and state=1 and r_status='1' and status='0' $jobwhere");
		$statis=$db->select_all("company_statis","`uid` IN ($JobId)","`uid`,`comtpl`");
		if(is_array($ListId)){
			//处理类别字段
			$cache_array = $db->cacheget();
			foreach($hotjoblist as $key=>$value){
				foreach($comList as $v){
					if($value['uid']==$v['uid']){
						if($v['shortname']){
							$hotjoblist[$key]["username"]= $v[shortname];
						}
						$hotjoblist[$key]["hy"]= $cache_array[industry_name][$v[hy]];
						$hotjoblist[$key]["job_city_one"]= $cache_array[city_name][$v[provinceid]];
						$hotjoblist[$key]["job_city_two"]= $cache_array[city_name][$v[cityid]];
					}
				}
				$i=0;$j=0;
				$hotjoblist[$key]["num"]=0;
				if(is_array($JobList)){
					

					foreach($JobList as $ke=>$va){ 
						if($value[uid]==$va[uid]){
							if($j<3){
								$hotjob_url = Url("job",array("c"=>"comapply","id"=>"$va[id]"),"1");
								$curl=  Url("company",array("c"=>"show","id"=>$value[uid]));
								$va[name] = mb_substr($va[name],0,8,"utf-8");
								$hotjoblist[$key]["hotjob"].="<div class='index_mq_box_cont_showjoblist'><a href=\"$hotjob_url\">".$va[name]."</a></div>";
								
							}else{
                                if($j==3){
                                    $hotjoblist[$key]["hotjob"].="<div class='index_mq_box_cont_showjobmore'><a href=\"$curl\">更多职位</a></div>";
							     }
							}
                            $j++;
						}
					}

					
					$hotjoblist[$key]["job"].="<div class=\"area_left\"> ";
					
					foreach($JobList as $k=>$v){
						if($value[uid]==$v[uid] && $i<5){
							$job_url = Url("job",array("c"=>"comapply","id"=>"$v[id]"),"1");
							$v[name] = mb_substr($v[name],0,10,"utf-8");
							$hotjoblist[$key]["job"].="<a href='".$job_url."'>".$v[name]."</a>";
							$i++;
						}
						if($value[uid]==$v[uid]){
							$hotjoblist[$key]["num"]=$hotjoblist[$key]["num"]+1;
						}
					}

					foreach($statis as $v){
						if($value['uid']==$v['uid']){
							if($v['comtpl'] && $v['comtpl']!="default"){
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]))."#job";
							}else{
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]));
							}
						}
					}
					$com_url = Url("company",array("c"=>"show","id"=>$value[uid]));
					$hotjoblist[$key]["job"].="</div><div class=\"area_right\"><a href='".$com_url."'>".$value["username"]."</a></div>";
					$hotjoblist[$key]["url"]=$com_url;
				}
			}
		}$hotjoblist = $hotjoblist; if (!is_array($hotjoblist) && !is_object($hotjoblist)) { settype($hotjoblist, 'array');}
foreach ($hotjoblist as $_smarty_tpl->tpl_vars['hotjoblist']->key => $_smarty_tpl->tpl_vars['hotjoblist']->value) {
$_smarty_tpl->tpl_vars['hotjoblist']->_loop = true;
?>
    <div class="indexcom_list_box"> 
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['hotjoblist']->value['uid']),$_smarty_tpl);?>
"  class="">
      <div class="indexcom_list_t_box">
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcomlogo']!=2) {?>
      <div class="indexcom_list_logo_box"><img src="<?php echo smarty_function_formatpicurl(array('path'=>$_smarty_tpl->tpl_vars['hotjoblist']->value['hot_pic'],'type'=>'comlogo'),$_smarty_tpl);?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" alt="<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['username'];?>
" width="45" height="45"></div>
      <?php }?>
      <div class="indexcom_list_box_c">
        <h3><?php echo mb_substr($_smarty_tpl->tpl_vars['hotjoblist']->value['username'],0,22,'utf-8');?>
 </h3>
        </div>
        <div class="indexcom_list_box_js">
        <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcomhy']!=2) {?>
        <span class="indexcom_list_box_js_s indexcom_list_box_js_s_hy"><i class="indexcom_list_box_js_icon indexcom_list_box_js_icon_hy"></i><?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['hy'];?>
</span> 
        <?php }?>
        
         <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['hotcomcity']!=2) {?>
        <span class="indexcom_list_box_js_s"><i class="indexcom_list_box_js_icon indexcom_list_box_js_icon_map"></i><?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['job_city_one'];
if ($_smarty_tpl->tpl_vars['hotjoblist']->value['job_city_two']) {?>-<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['job_city_two'];
}?></span>
        <?php }?>
      </div>
            
        </div>
            </a> 

    
        </div>

    <?php } ?> </div>
</section> 
<?php }?>
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='recjob') {?>
       
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjob']!=2) {?>
<section>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_tittj"></i>推荐职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">推荐职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_tittj"></i>推荐职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_tj"></i><font color="#42a30d">推荐职位</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">推荐职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','rec'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
 
  <div class="index_warp_jobcontent">
  
  
    <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'recjobnum\']","rec"=>"1","item"=>"\'job_list\'","nocache"=>"")
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
?>
    <div class="index_wap_joblist">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job_list']->value['id']),$_smarty_tpl);?>
">
   <h3>
   <?php echo mb_substr($_smarty_tpl->tpl_vars['job_list']->value['name'],0,12,'utf-8');?>

    <?php if ($_smarty_tpl->tpl_vars['job_list']->value['urgent_time']>time()) {?><i class="urgent">急招</i><?php }?>
  </h3>


   <div class="index_wap_joblist_comname">
   <span class="index_wap_joblist_comname_p">
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobcity']!=2) {?>
   <?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_one'];
echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_two'];?>

    <?php }?>
   
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobcom']!=2) {?>
   <?php echo mb_substr($_smarty_tpl->tpl_vars['job_list']->value['com_name'],0,22,'utf-8');?>

    <?php }?>
   
   </span>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobcom']!=2) {?>
   <?php if ($_smarty_tpl->tpl_vars['job_list']->value['yyzz_status']=='1') {?>
   <i class="job_qy_rz_icon"></i>
   <?php }?>

   <?php if ($_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!="0") {?> 
   <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job_list']->value['ratlogo'];?>
" width="14" height="14"/> 
   <?php }?>
 <?php }?>
   </div>
   
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobwelfare']!=2) {?>
    <?php if ($_smarty_tpl->tpl_vars['job_list']->value['welfarename']) {?>
   <div class="index_wap_joblist_comcity">
   <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
   <span class="index_wap_joblist_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span>
   <?php } ?></div>
   <?php }?>
      <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobsalary']!=2) {?>
    <div class="index_wap_joblist_xz"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];?>
</div>
     <?php }?>
     
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['recjobdate']!=2) {?>
          <div class="index_wap_joblist_time">
          <?php if ($_smarty_tpl->tpl_vars['job_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['job_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['job_list']->value['redtime']=='1') {?>
         <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];
} else {
echo $_smarty_tpl->tpl_vars['job_list']->value['time'];
}?></div>
   
   <?php }?>
          </a>
   </div>
   
    <?php } ?> </div>
    
    
</section>
<?php }?> 
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='urgentjob') {?>
            
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjob']!=2) {?>
<section>

<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titjp"></i>紧急职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','urgent'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">紧急职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','urgent'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titjp"></i>紧急职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','urgent'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_jp"></i><font color="#e61717">紧急职位</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','urgent'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">紧急职位</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','urgent'=>1),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
 
  <div class="index_warp_jobcontent">
  
  
    <?php  $_smarty_tpl->tpl_vars['urgentjob_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['urgentjob_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'urgentjobnum\']","urgent"=>"1","item"=>"\'urgentjob_list\'","nocache"=>"")
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
		
		
			
		$urgentjob_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($urgentjob_list) && !empty($urgentjob_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($urgentjob_list as $key=>$value){
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
			foreach($urgentjob_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($urgentjob_list[$key]);
					continue;
				}else{
					$urgentjob_list[$key] = $db->array_action($value,$cache_array);
					$urgentjob_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$urgentjob_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$urgentjob_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$urgentjob_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$urgentjob_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$urgentjob_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$urgentjob_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$urgentjob_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$urgentjob_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$urgentjob_list[$key][logo] =$r_uid[$value['uid']][logo];
					$urgentjob_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$urgentjob_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$urgentjob_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$urgentjob_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$urgentjob_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$urgentjob_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$urgentjob_list[$key]['redtime'] =1;
					}else{
						$urgentjob_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$urgentjob_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$urgentjob_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$urgentjob_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$urgentjob_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$urgentjob_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$urgentjob_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$urgentjob_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$urgentjob_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$urgentjob_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$urgentjob_list[$key][ratlogo] = $v[com_pic];
							}else{
								$urgentjob_list[$key][ratlogo] ='';
							}
							$urgentjob_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$urgentjob_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$urgentjob_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$urgentjob_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$urgentjob_list[$key][name_n]);
						$urgentjob_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$urgentjob_list[$key][com_n]);
						$urgentjob_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$urgentjob_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($urgentjob_list)){
				if($paramer[keyword]!=""&&!empty($urgentjob_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$urgentjob_list = $urgentjob_list; if (!is_array($urgentjob_list) && !is_object($urgentjob_list)) { settype($urgentjob_list, 'array');}
foreach ($urgentjob_list as $_smarty_tpl->tpl_vars['urgentjob_list']->key => $_smarty_tpl->tpl_vars['urgentjob_list']->value) {
$_smarty_tpl->tpl_vars['urgentjob_list']->_loop = true;
?>
    <div class="index_wap_joblist">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['urgentjob_list']->value['id']),$_smarty_tpl);?>
">
   <h3><?php echo mb_substr($_smarty_tpl->tpl_vars['urgentjob_list']->value['name'],0,12,'utf-8');?>
</h3>


   <div class="index_wap_joblist_comname">
   <span class="index_wap_joblist_comname_p">
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobcity']!=2) {?>
   <?php echo $_smarty_tpl->tpl_vars['urgentjob_list']->value['job_city_one'];
echo $_smarty_tpl->tpl_vars['urgentjob_list']->value['job_city_two'];?>

    <?php }?>
    
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobcom']!=2) {?>
   <?php echo mb_substr($_smarty_tpl->tpl_vars['urgentjob_list']->value['com_name'],0,22,'utf-8');?>

    <?php }?>
   </span>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobcom']!=2) {?>
   <?php if ($_smarty_tpl->tpl_vars['urgentjob_list']->value['yyzz_status']=='1') {?>
   <i class="job_qy_rz_icon"></i>
   <?php }?>

   <?php if ($_smarty_tpl->tpl_vars['urgentjob_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['urgentjob_list']->value['ratlogo']!="0") {?> 
   <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['urgentjob_list']->value['ratlogo'];?>
" width="14" height="14" /> 
   <?php }?>
 <?php }?>
   </div>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobwelfare']!=2) {?>
    <?php if ($_smarty_tpl->tpl_vars['urgentjob_list']->value['welfarename']) {?>
   <div class="index_wap_joblist_comcity">
   <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['urgentjob_list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
   <span class="index_wap_joblist_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span>
   <?php } ?></div>
   <?php }?>
    <?php }?>
    
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobsalary']!=2) {?>
    <div class="index_wap_joblist_xz">
		
	<?php if ($_smarty_tpl->tpl_vars['urgentjob_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['urgentjob_list']->value['job_salary'];?>

	
	</div> <?php }?>
	
	 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['urgentjobdate']!=2) {?>
          <div class="index_wap_joblist_time"><?php if ($_smarty_tpl->tpl_vars['urgentjob_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['urgentjob_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['urgentjob_list']->value['redtime']=='1') {?>
         <?php echo $_smarty_tpl->tpl_vars['urgentjob_list']->value['time'];?>


<?php } else { ?>
      <?php echo $_smarty_tpl->tpl_vars['urgentjob_list']->value['time'];?>

   
   <?php }?></div> <?php }?>
          </a>
   </div>
   
    <?php } ?> </div>
    
    
</section>
<?php }?>
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='resume') {?>
        
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resume']!=2) {?>
<section>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_tituser"></i>最新简历</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">最新简历</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_tituser"></i>最新简历</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_user"></i><font color="#0090ff">最新简历</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">最新简历</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
 
   <div class="index_warp_jobcontent">
     <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumepic']==2) {?>
  <div class="user_img_box" >
   <?php  $_smarty_tpl->tpl_vars['user1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user1']->_loop = false;
$user1=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'resumenum\']","order"=>"\'topdate\'","post_len"=>"14","islt"=>"4","item"=>"\'user1\'","nocache"=>"")
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
				$user1 = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere.$where.$order.$sort.$limit;
					$user1=$db->DB_query_all($sql,"all");
				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$user1=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($user1) && is_array($user1)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user1 as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($user1 as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($user1 as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user1[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $user1[$k]['where']=$citywhere;
			    		$user1[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user1[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user1[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user1[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user1[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$user1[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1){
            					$user1[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$user1[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$user1[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1){
									$user1[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$user1[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$user1[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$user1[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $user1[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user1[$k]['nametype']=$val[nametype];
                        $user1[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $user1[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $user1[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $user1[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$user1[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$user1[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user1[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user1[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user1[$k]['username_n'] = $val['name'];
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
					$user1[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user1[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user1[$k]['time'] = date("H:i",$v['lastupdate']);
					$user1[$k]['redtime'] =1;
				}else{
					$user1[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				$user1[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
// 				$user1[$k]['job_city_one']=$city_name[$v['provinceid']];
// 				$user1[$k]['job_city_two']=$city_name[$v['cityid']];
// 				$user1[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$user1[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user1[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user1[$k]["salary_n"] = "面议";
    			}
				$user1[$k]['report_n']=$userclass_name[$v['report']];
				$user1[$k]['type_n']=$userclass_name[$v['type']];
				$user1[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user1[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user1[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user1[$k]['m_name']=$m_name[$v['uid']];
					$user1[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
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
				//$user1[$k]['job_post']=@implode(",",$jobname);
				$user1[$k]['expectjob']=$jobname;
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
                //$user1[$k]['citylist']=@implode("/",$cityname);
				$user1[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user1[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$user1[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($user1 as $k=>$v){
               if($paramer['keyword']){
					$user1[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user1[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user1[$k]['job_post']);
					$user1[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user1[$k]['job_post_n']);
					$user1[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user1[$k]['city_name_n']);
				}
            }
			if($paramer['keyword']!=""&&!empty($user1)){
				addkeywords('5',$paramer['keyword']);
			}
		}$user1 = $user1; if (!is_array($user1) && !is_object($user1)) { settype($user1, 'array');}
foreach ($user1 as $_smarty_tpl->tpl_vars['user1']->key => $_smarty_tpl->tpl_vars['user1']->value) {
$_smarty_tpl->tpl_vars['user1']->_loop = true;
?>
  <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['user1']->value['id']),$_smarty_tpl);?>
"  class=""><div class="user_img_list"><div class="user_img"><?php if ($_smarty_tpl->tpl_vars['user1']->value['photo']!='') {?> <img src="<?php echo $_smarty_tpl->tpl_vars['user1']->value['photo'];?>
"> <?php } else { ?> <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
"> <?php }?></div><div class="user_imgname"><?php if (in_array($_smarty_tpl->tpl_vars['user1']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['user1']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['user1']->value['username_n'];
}?></div></div></a>
  <?php } ?> 
</div> 
  <?php } else { ?>
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
$user=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'resumenum\']","order"=>"\'topdate\'","post_len"=>"14","city_len"=>"3","islt"=>"4","item"=>"\'user\'","nocache"=>"")
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
?>
    <div class="indexcom_list_box"> 
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
"  class="">
      <div class="indexcom_list_t_box">
     
      <div class="indexcom_list_box_c">
        <h3><?php if (in_array($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['user']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['user']->value['username_n'];
}?></h3>
        </div>
        <div class="indexcom_list_box_js">
         <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumeexp']!=2) {?>
        <span class="indexcom_list_box_js_s indexcom_list_box_js_s_hy" style="margin-left:1px;padding-left:10px;">经验：<?php echo $_smarty_tpl->tpl_vars['user']->value['exp_n'];?>
</span> 
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumecity']!=2) {?>
        <span class="indexcom_list_box_js_s"  style="margin-left:1px;"><i class="indexcom_list_box_js_icon indexcom_list_box_js_icon_map"></i><?php echo $_smarty_tpl->tpl_vars['user']->value['city_name_n'];?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumeedu']!=2) {?>
        <span class="indexcom_list_box_js_s"  style="margin-left:1px;padding-left:10px;">学历： <?php echo $_smarty_tpl->tpl_vars['user']->value['edu_n'];?>
</span>
        <?php }?>
      </div>
       <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['resumeexpect']!=2) {?>
      <div class="indexcom_list_box_js"  style="padding: 1px 0px 11px 0;">
        <em><span class="indexcom_list_box_js_s indexcom_list_box_js_s_hy" style="margin-left:1px;padding-left:10px;display: inline-block;color: #666;">意向职位：</span>
        <span style="font-weight: bold;color: #C30;"><?php echo $_smarty_tpl->tpl_vars['user']->value['job_post_n'];?>
</span></em> 
        
      </div>
           <?php }?>  
        </div>
            </a> 
        </div>
      
         

    <?php } ?> 
      <?php }?></div>
    
       
</section>
<?php }?> 
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='article') {?>
       
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['article']!=2) {?>
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlecss']==3) {?>
       
<section>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titnews"></i>职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titnews"></i>职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_news"></i><font color="#d5870d">职场资讯</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
 
  <div class="index_warp_jobcontent">
  <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articleclass']==2) {?>
  
    <?php  $_smarty_tpl->tpl_vars['indexnews2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indexnews2']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$indexnews2=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","type"=>"\'tj\'","item"=>"\'indexnews2\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($indexnews2[$rs['nid']]['pic'])<$piclimit){
              $indexnews2[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($indexnews2[$rs['nid']]['arclist'])<$paramer[limit]){
          $indexnews2[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $indexnews2[] = $rs;
        }//end while
      }$indexnews2 = $indexnews2; if (!is_array($indexnews2) && !is_object($indexnews2)) { settype($indexnews2, 'array');}
foreach ($indexnews2 as $_smarty_tpl->tpl_vars['indexnews2']->key => $_smarty_tpl->tpl_vars['indexnews2']->value) {
$_smarty_tpl->tpl_vars['indexnews2']->_loop = true;
?>
    <div class="index_wap_joblist">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['indexnews2']->value['id']),$_smarty_tpl);?>
">
   <h3>
   <?php echo $_smarty_tpl->tpl_vars['indexnews2']->value['title'];?>

  </h3>
    <div class="index_wap_joblist_xz" style="color:#b9b5b5"><?php echo $_smarty_tpl->tpl_vars['indexnews2']->value['time'];?>
</div></a>
   </div>
   
    <?php } ?>
  <?php } elseif ($_smarty_tpl->tpl_vars['tplmoblie']->value['articleclass']==3) {?>
  
      <?php  $_smarty_tpl->tpl_vars['indexnews3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indexnews3']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$indexnews3=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","order"=>"\'hits\'","item"=>"\'indexnews3\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($indexnews3[$rs['nid']]['pic'])<$piclimit){
              $indexnews3[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($indexnews3[$rs['nid']]['arclist'])<$paramer[limit]){
          $indexnews3[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $indexnews3[] = $rs;
        }//end while
      }$indexnews3 = $indexnews3; if (!is_array($indexnews3) && !is_object($indexnews3)) { settype($indexnews3, 'array');}
foreach ($indexnews3 as $_smarty_tpl->tpl_vars['indexnews3']->key => $_smarty_tpl->tpl_vars['indexnews3']->value) {
$_smarty_tpl->tpl_vars['indexnews3']->_loop = true;
?>
      <div class="index_wap_joblist">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['indexnews3']->value['id']),$_smarty_tpl);?>
">
   <h3>
   <?php echo $_smarty_tpl->tpl_vars['indexnews3']->value['title'];?>

  </h3>
    <div class="index_wap_joblist_xz" style="color:#b9b5b5"><?php echo $_smarty_tpl->tpl_vars['indexnews3']->value['time'];?>
</div></a>
   </div>
   
    <?php } ?>
  <?php } else { ?>
  
       <?php  $_smarty_tpl->tpl_vars['indexnews1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indexnews1']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$indexnews1=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","item"=>"\'indexnews1\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($indexnews1[$rs['nid']]['pic'])<$piclimit){
              $indexnews1[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($indexnews1[$rs['nid']]['arclist'])<$paramer[limit]){
          $indexnews1[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $indexnews1[] = $rs;
        }//end while
      }$indexnews1 = $indexnews1; if (!is_array($indexnews1) && !is_object($indexnews1)) { settype($indexnews1, 'array');}
foreach ($indexnews1 as $_smarty_tpl->tpl_vars['indexnews1']->key => $_smarty_tpl->tpl_vars['indexnews1']->value) {
$_smarty_tpl->tpl_vars['indexnews1']->_loop = true;
?>
       <div class="index_wap_joblist">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['indexnews1']->value['id']),$_smarty_tpl);?>
">
   <h3>
   <?php echo $_smarty_tpl->tpl_vars['indexnews1']->value['title'];?>

  </h3>
    <div class="index_wap_joblist_xz" style="color:#b9b5b5"><?php echo $_smarty_tpl->tpl_vars['indexnews1']->value['time'];?>
</div></a>
   </div>
   
    <?php } ?>
  <?php }?>
    
    </div>
</section>
 <?php } elseif ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlecss']==2) {?>
 
<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titnews"></i>职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titnews"></i>职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_news"></i><font color="#d5870d">职场资讯</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
 
  <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articleclass']==2) {?>
  <div class="news_in_list"  style="background: #fff;" id="articlecss2" <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlecss']!=2) {?> style="display:none" <?php }?>>
  
  
    <?php  $_smarty_tpl->tpl_vars['tplistrec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tplistrec']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$tplistrec=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","type"=>"\'tj\'","item"=>"\'tplistrec\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($tplistrec[$rs['nid']]['pic'])<$piclimit){
              $tplistrec[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($tplistrec[$rs['nid']]['arclist'])<$paramer[limit]){
          $tplistrec[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $tplistrec[] = $rs;
        }//end while
      }$tplistrec = $tplistrec; if (!is_array($tplistrec) && !is_object($tplistrec)) { settype($tplistrec, 'array');}
foreach ($tplistrec as $_smarty_tpl->tpl_vars['tplistrec']->key => $_smarty_tpl->tpl_vars['tplistrec']->value) {
$_smarty_tpl->tpl_vars['tplistrec']->_loop = true;
?>
    <div class="news_in_list_box">
  <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['tplistrec']->value['id']),$_smarty_tpl);?>
">
  <div class="news_in_list_box_left">
   <h2><?php echo $_smarty_tpl->tpl_vars['tplistrec']->value['title'];?>
</h2>
   <div class="news_in_list_w65">
   <div class="news_in_list_p"><?php echo mb_substr($_smarty_tpl->tpl_vars['tplistrec']->value['description'],0,47,'utf-8');?>
</div>
   <div class="news_in_list_date">
   <span class="news_in_eye_n"><i class="news_in_eye"></i><?php echo $_smarty_tpl->tpl_vars['tplistrec']->value['hits'];?>
</span>
   <span class="news_in_eye_n"><i class="news_in_date"></i><?php echo $_smarty_tpl->tpl_vars['tplistrec']->value['time'];?>
</span></div>
   </div>
  
  <div class="news_in_cont_img"><img src="<?php echo $_smarty_tpl->tpl_vars['tplistrec']->value['picurl'];?>
" width="120" height="80"></div>
   </div></a>
   </div>
    <?php } ?>
  <?php } elseif ($_smarty_tpl->tpl_vars['tplmoblie']->value['articleclass']==3) {?>
  
      <?php  $_smarty_tpl->tpl_vars['tplisthot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tplisthot']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$tplisthot=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","order"=>"\'hits\'","item"=>"\'tplisthot\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($tplisthot[$rs['nid']]['pic'])<$piclimit){
              $tplisthot[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($tplisthot[$rs['nid']]['arclist'])<$paramer[limit]){
          $tplisthot[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $tplisthot[] = $rs;
        }//end while
      }$tplisthot = $tplisthot; if (!is_array($tplisthot) && !is_object($tplisthot)) { settype($tplisthot, 'array');}
foreach ($tplisthot as $_smarty_tpl->tpl_vars['tplisthot']->key => $_smarty_tpl->tpl_vars['tplisthot']->value) {
$_smarty_tpl->tpl_vars['tplisthot']->_loop = true;
?>
      <div class="news_in_list_box">
  <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['tplisthot']->value['id']),$_smarty_tpl);?>
">
  <div class="news_in_list_box_left">
   <h2><?php echo $_smarty_tpl->tpl_vars['tplisthot']->value['title'];?>
</h2>
   <div class="news_in_list_w65">
   <div class="news_in_list_p"> <?php echo mb_substr($_smarty_tpl->tpl_vars['tplisthot']->value['description'],0,47,'utf-8');?>
</div>
   <div class="news_in_list_date">
   <span class="news_in_eye_n"><i class="news_in_eye"></i><?php echo $_smarty_tpl->tpl_vars['tplisthot']->value['hits'];?>
</span>
   <span class="news_in_eye_n"><i class="news_in_date"></i><?php echo $_smarty_tpl->tpl_vars['tplisthot']->value['time'];?>
</span></div>
   </div>
  
  <div class="news_in_cont_img"><img src="<?php echo $_smarty_tpl->tpl_vars['tplisthot']->value['picurl'];?>
" width="120" height="80"></div> 
    </div></a>
   </div>
   
    <?php } ?>
  <?php } else { ?>
  
       <?php  $_smarty_tpl->tpl_vars['tplistnew'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tplistnew']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$tplistnew=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","item"=>"\'tplistnew\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($tplistnew[$rs['nid']]['pic'])<$piclimit){
              $tplistnew[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($tplistnew[$rs['nid']]['arclist'])<$paramer[limit]){
          $tplistnew[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $tplistnew[] = $rs;
        }//end while
      }$tplistnew = $tplistnew; if (!is_array($tplistnew) && !is_object($tplistnew)) { settype($tplistnew, 'array');}
foreach ($tplistnew as $_smarty_tpl->tpl_vars['tplistnew']->key => $_smarty_tpl->tpl_vars['tplistnew']->value) {
$_smarty_tpl->tpl_vars['tplistnew']->_loop = true;
?>
       
         
  <div class="news_in_list_box">
  <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['tplistnew']->value['id']),$_smarty_tpl);?>
">
  <div class="news_in_list_box_left">
   <h2><?php echo $_smarty_tpl->tpl_vars['tplistnew']->value['title'];?>
</h2>
   <div class="news_in_list_w65">
   <div class="news_in_list_p"> <?php echo mb_substr($_smarty_tpl->tpl_vars['tplistnew']->value['description'],0,47,'utf-8');?>
</div>
   <div class="news_in_list_date">
   <span class="news_in_eye_n"><i class="news_in_eye"></i><?php echo $_smarty_tpl->tpl_vars['tplistnew']->value['hits'];?>
</span>
   <span class="news_in_eye_n"><i class="news_in_date"></i><?php echo $_smarty_tpl->tpl_vars['tplistnew']->value['time'];?>
</span></div>
   </div>
  <div class="news_in_cont_img"><img src="<?php echo $_smarty_tpl->tpl_vars['tplistnew']->value['picurl'];?>
"  width="120" height="80"></div>  </div></a>
   </div>
   
    <?php } ?>

    

        				
</div>
   <?php }?>
  <?php } else { ?>
  
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titnews"></i>职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titnews"></i>职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_news"></i><font color="#d5870d">职场资讯</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">职场资讯</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlemore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    
    
    
    <ul class="news_in_imglist" style="background: #fff;"  id="articlecss1" <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articlecss']==2||$_smarty_tpl->tpl_vars['tplmoblie']->value['articlecss']==3) {?> style="display:none" <?php }?>>
		   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['articleclass']==2) {?>
  
    <?php  $_smarty_tpl->tpl_vars['sutrec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sutrec']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$sutrec=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","type"=>"\'tj\'","item"=>"\'sutrec\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($sutrec[$rs['nid']]['pic'])<$piclimit){
              $sutrec[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($sutrec[$rs['nid']]['arclist'])<$paramer[limit]){
          $sutrec[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $sutrec[] = $rs;
        }//end while
      }$sutrec = $sutrec; if (!is_array($sutrec) && !is_object($sutrec)) { settype($sutrec, 'array');}
foreach ($sutrec as $_smarty_tpl->tpl_vars['sutrec']->key => $_smarty_tpl->tpl_vars['sutrec']->value) {
$_smarty_tpl->tpl_vars['sutrec']->_loop = true;
?>
    <li>
   <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['sutrec']->value['id']),$_smarty_tpl);?>
">
		
		<img src="<?php echo $_smarty_tpl->tpl_vars['sutrec']->value['picurl'];?>
"  width="120" height="80"> 
		
		<div class="news_in_imglist_p"> <?php echo $_smarty_tpl->tpl_vars['sutrec']->value['title'];?>
</div>
		</a>
		</li>
    <?php } ?>
  <?php } elseif ($_smarty_tpl->tpl_vars['tplmoblie']->value['articleclass']==3) {?>
  
      <?php  $_smarty_tpl->tpl_vars['suthot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['suthot']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$suthot=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","order"=>"\'hits\'","item"=>"\'suthot\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($suthot[$rs['nid']]['pic'])<$piclimit){
              $suthot[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($suthot[$rs['nid']]['arclist'])<$paramer[limit]){
          $suthot[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $suthot[] = $rs;
        }//end while
      }$suthot = $suthot; if (!is_array($suthot) && !is_object($suthot)) { settype($suthot, 'array');}
foreach ($suthot as $_smarty_tpl->tpl_vars['suthot']->key => $_smarty_tpl->tpl_vars['suthot']->value) {
$_smarty_tpl->tpl_vars['suthot']->_loop = true;
?>
      <li>
   <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['suthot']->value['id']),$_smarty_tpl);?>
">
		
		<img src="<?php echo $_smarty_tpl->tpl_vars['suthot']->value['picurl'];?>
" width="120" height="80"> 
		
		<div class="news_in_imglist_p"> <?php echo $_smarty_tpl->tpl_vars['suthot']->value['title'];?>
</div>
		</a>
		</li>
    <?php } ?>
  <?php } else { ?>
  
       <?php  $_smarty_tpl->tpl_vars['sutnew'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sutnew']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$sutnew=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'articlenum\']","t_len"=>"16","d_len"=>"24","item"=>"\'sutnew\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($sutnew[$rs['nid']]['pic'])<$piclimit){
              $sutnew[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($sutnew[$rs['nid']]['arclist'])<$paramer[limit]){
          $sutnew[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $sutnew[] = $rs;
        }//end while
      }$sutnew = $sutnew; if (!is_array($sutnew) && !is_object($sutnew)) { settype($sutnew, 'array');}
foreach ($sutnew as $_smarty_tpl->tpl_vars['sutnew']->key => $_smarty_tpl->tpl_vars['sutnew']->value) {
$_smarty_tpl->tpl_vars['sutnew']->_loop = true;
?>
   <li>
   <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['sutnew']->value['id']),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['sutnew']->value['picurl'];?>
" width="120" height="80">
		
		<div class="news_in_imglist_p"> <?php echo $_smarty_tpl->tpl_vars['sutnew']->value['title'];?>
</div>
		</a>
		</li>
    <?php } ?>
  <?php }?>
		
		
	</ul>   
  
   <?php }?>
<?php }?> 
        <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['sortval']->value=='zph') {?>
       
      <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['zph']!=2) {?>
<section>
 <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titzph"></i>招聘会</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['zphmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">招聘会</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['zphmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titzph"></i>招聘会</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['zphmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_zph"></i><font color="#6bbb16">招聘会</font></span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['zphmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">招聘会</span><?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['zphmore']!=2) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph'),$_smarty_tpl);?>
" class="wap_titmore">更多>></a><?php }?></div></div></div><?php }?>
  <div class="index_warp_jobcontent">
  
  
    <?php  $_smarty_tpl->tpl_vars['zph'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zph']->_loop = false;
$zph=array();$time=time();eval('$paramer=array("ispage"=>"1","limit"=>"$_smarty_tpl->tpl_vars[\'tplmoblie\']->value[\'zphnum\']","item"=>"\'zph\'","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "1";
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}
		//$time = date("Y-m-d",time());
        $time = time();
		//未开始
		if($paramer[state]=='1'){//尚未开始
			$where .=" AND unix_timestamp(`starttime`)>'$time'";
		}elseif($paramer[state]=='2'){//进行中
			$where .=" AND unix_timestamp(`starttime`)<'$time' AND unix_timestamp(`endtime`)>'$time'";
		}elseif($paramer[state]=='3'){//已结束
			$where .=" AND unix_timestamp(`endtime`)<'$time'";
		}else{//尚未结束
        	//$where .=" AND `endtime`>'$time'";
			$where .=" AND unix_timestamp(`endtime`)>'$time'";
		}
		
		
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"zhaopinhui",$where,$Purl,"",6,$_smarty_tpl);
		}
		//排序字段（默认按照开始时间排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY unix_timestamp(`starttime`) ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$zph=$db->select_all("zhaopinhui",$where.$limit);
		if(is_array($zph)){
			foreach($zph as $key=>$v){
				$array_zid[]=$v[id];
			}
			$rows=$db->select_all("zhaopinhui_com","`zid` in (".implode(',',$array_zid).") and `status`=1","`uid`,`zid`,`jobid`");
			$zph_com=array();
			foreach($rows as $key=>$v){ 
				$jobarr=explode(',',$v[jobid]);
				$zph_com[$v[zid]][comnum]++;
				$zph_com[$v[zid]][jobnum]=$zph_com[$v[zid]][jobnum]+count($jobarr);
			}
			
			foreach($zph as $key=>$v){
				$zph[$key]["starttime_n"]=date('Y',strtotime($v[starttime])).'年'.date('n',strtotime($v[starttime]))."月";
				$zph[$key]["stime"]=strtotime($v[starttime])-mktime();
				
				$comnum=$zph_com[$v[id]][comnum]?$zph_com[$v[id]][comnum]:0;
				$jobnum=$zph_com[$v[id]][jobnum]?$zph_com[$v[id]][jobnum]:0;
				
				$zph[$key]["comnum"]=$comnum;
				$zph[$key]["jobnum"]=$jobnum;
				
				$zph[$key]["etime"]=strtotime($v[endtime])-mktime();
				if($paramer[len]){
					$zph[$key]["title"]=mb_substr($v['title'],0,$paramer[len],"utf-8");
				}
				$zph[$key]["url"]=Url("zph",array("c"=>'show',"id"=>$v['id']),"1");
				 $weekarray=array("日","一","二","三","四","五","六",);            
                $zph[$key]["week"] = $weekarray[date('w',strtotime($v['starttime']))];	
				if(!$v['is_themb']||!file_exists(str_replace('./',APP_PATH,$v['is_themb']))){
					$zph[$key]['is_themb'] = $config['sy_weburl']."/".$config['sy_zph_icon'];
				}else{
					$zph[$key]['is_themb']= $config['sy_weburl']."/".$v['is_themb'];
				}
			}
		}$zph = $zph; if (!is_array($zph) && !is_object($zph)) { settype($zph, 'array');}
foreach ($zph as $_smarty_tpl->tpl_vars['zph']->key => $_smarty_tpl->tpl_vars['zph']->value) {
$_smarty_tpl->tpl_vars['zph']->_loop = true;
?>
           <div class="job_list_box job_fair_state_ov" style="padding:15px 10px; margin-top:0px;border:none;border-bottom:1px solid #eee"> 
           <?php if ($_smarty_tpl->tpl_vars['zph']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zph']->value['etime']>'0') {?>
           <div class="job_fair_state ">已开始</div>
         <?php } elseif ($_smarty_tpl->tpl_vars['zph']->value['stime']>'0') {?>
         <div class="job_fair_state job_fair_state_yd">预定中</div>      
         <?php }?>
         <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph','a'=>'show','id'=>'`$zph.id`'),$_smarty_tpl);?>
">
         <div class="zphname"><?php echo $_smarty_tpl->tpl_vars['zph']->value['title'];?>
</div>
         <div class="zphtime"><i class="zphtime_icon"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zph']->value['starttime'],"%Y-%m-%d");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zph']->value['endtime'],"%Y-%m-%d");?>
</div>
         <div class="zphadd"><i class="zphadd_icon"></i><?php echo $_smarty_tpl->tpl_vars['zph']->value['address'];?>
</div>
         </a>
         </div>  
          <?php } ?> </div>
    
    
</section>
<?php }?> 
        <?php }?>   
<?php if ($_smarty_tpl->tpl_vars['sortval']->value=='jobclass') {?>

<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['jobclassone']!=2) {?>
<section>
 	<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==1||$_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']=='') {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit1"><span class="wap_tit1_bg"><i class="wap_titlb"></i>职位类别</span></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==2) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit2"><span class="wap_tit2_bg">职位类别</span></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==3) {?><div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit3"><span class="wap_tit3_bg"><i class="wap_titlb"></i>职位类别</span></div></div></div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==4) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit4"><span class="wap_tit4_bg" ><i class="wap_tit4_icon_lb"></i><font color="#0180CC">职位类别</font></span></div></div></div><?php }?>
   	<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['heardercss']==5) {?> <div class="wap_tit"><div class="bg<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
} else {
echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"><div class="wap_tit5"><span class="wap_tit5_bg">职位类别</span></div></div></div><?php }?>


	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['kone'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['kone']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<div class="wap_category_list"> 
		<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['jobclassonenumall']!=1&&$_smarty_tpl->tpl_vars['tplmoblie']->value['jobclassonenum']) {?>
			<?php if ($_smarty_tpl->tpl_vars['kone']->value<$_smarty_tpl->tpl_vars['tplmoblie']->value['jobclassonenum']) {?>
      			<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','jobin'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"> <div class="wap_category_name" ><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</div> </a>
           		
           		<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['jobclasstwo']!=2) {?>
           		<div class="wap_category_p">
              		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['ktwo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['ktwo']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
             			<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['jobclasstwonumall']!=1&&$_smarty_tpl->tpl_vars['tplmoblie']->value['jobclasstwonum']) {?>
	          				<?php if ($_smarty_tpl->tpl_vars['ktwo']->value<$_smarty_tpl->tpl_vars['tplmoblie']->value['jobclasstwonum']) {?>
          						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','jobin'=>$_smarty_tpl->tpl_vars['val']->value),$_smarty_tpl);?>
"> <span class="wap_category_a"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</span></a>
								 
							<?php }?>
            			<?php } else { ?>
            				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','jobin'=>$_smarty_tpl->tpl_vars['val']->value),$_smarty_tpl);?>
"> <span class="wap_category_a"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</span></a>
                 			
            			<?php }?>
					<?php } ?>
					 </div> 
	             <?php }?>
	            
         		
			<?php }?>
		<?php } else { ?>
			<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','jobin'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"> <div class="wap_category_name" ><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</div> </a>
			<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['jobclasstwo']!=2) {?>
			<div class="wap_category_p">
				<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['ktwo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['ktwo']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['jobclasstwonumall']!=1&&$_smarty_tpl->tpl_vars['tplmoblie']->value['jobclasstwonum']) {?>
						<?php if ($_smarty_tpl->tpl_vars['ktwo']->value<$_smarty_tpl->tpl_vars['tplmoblie']->value['jobclasstwonum']) {?>
							<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','jobin'=>$_smarty_tpl->tpl_vars['val']->value),$_smarty_tpl);?>
"> <span class="wap_category_a"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</span></a>
						<?php }?>
					<?php } else { ?>
						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','jobin'=>$_smarty_tpl->tpl_vars['val']->value),$_smarty_tpl);?>
"> <span class="wap_category_a"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</span></a>
					<?php }?>
				<?php } ?>
				 </div> 
			<?php }?>
		<?php }?>
		 </div> 
	<?php } ?> 

</section>
<?php }?> 
<?php }?>   
<?php } ?>
<style>
.swiper-container {
    width: 100%;
    height: 160px;
} 
.wap_titmore{ position:absolute;right:15px;top:8px; font-size:12px;}
.wap_tit1,.wap_tit2,.wap_tit3,.wap_tit4,.wap_tit5{ position:relative}
.wap_tit2 .wap_titmore,.wap_tit4 .wap_titmore,.wap_tit5 .wap_titmore{top:12px;}
.wap_tit3 .wap_titmore{top:12px;color:#fff}
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
		var myimgswiper = new Swiper ('#imgswiper', {
			direction: 'horizontal'
			,autoplay:true
			,loop: true
		});        
		var mySwiper = new Swiper ('#navswiper', {
			direction: 'horizontal'
			,pagination: {
				el: '.swiper-pagination',
			  }
			});      
    }); 
	marquee("2000",".sxl .sxlist");
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
