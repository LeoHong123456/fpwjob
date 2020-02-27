<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 16:11:12
         compiled from "/www/fpwjob/uploads//app/template/train/top.htm" */ ?>
<?php /*%%SmartyHeaderCode:8922372305e2feca0f0f872-17587628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68b77652fa8d0010f801f606f950d2a69c7b91c9' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/train/top.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8922372305e2feca0f0f872-17587628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
    'config' => 0,
    'row' => 0,
    'uid' => 0,
    'usertype' => 0,
    'isatn' => 0,
    'subject_name' => 0,
    'city_name' => 0,
    'comclass_name' => 0,
    'train_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2feca1040014_06552240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2feca1040014_06552240')) {function content_5e2feca1040014_06552240($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><div class="Agency_banner ftl "><img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_px_banner'];?>
',2);" width="1200" height="160"></div>
  <div class="Agency_nav ftl">
    <div class="Agency_logo"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_px_icon'];?>
',2);" width="120" height="120"></div>
    <ul class="Agency_nav_ul">
      <li <?php if ($_GET['c']=="agencyshow") {?>class="Agency_nav_ul_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>'`$row.uid`'),$_smarty_tpl);?>
">机构首页</a></li>
      <li <?php if ($_GET['c']=="intro") {?>class="Agency_nav_ul_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'intro','id'=>'`$row.uid`'),$_smarty_tpl);?>
">机构简介</a></li>
      <li <?php if ($_GET['c']=="show") {?>class="Agency_nav_ul_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'show','id'=>'`$row.uid`'),$_smarty_tpl);?>
">机构环境</a></li>
      <li <?php if ($_GET['c']=="team"||$_GET['c']=="teamshow") {?>class="Agency_nav_ul_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'team','id'=>'`$row.uid`'),$_smarty_tpl);?>
">师资团队</a></li>
      <li <?php if ($_GET['c']=="mysubject") {?>class="Agency_nav_ul_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'mysubject','id'=>'`$row.uid`'),$_smarty_tpl);?>
">机构课程</a></li>
      <li <?php if ($_GET['c']=="news"||$_GET['c']=="newsshow") {?>class="Agency_nav_ul_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'news','id'=>'`$row.uid`'),$_smarty_tpl);?>
">机构新闻</a></li>
      <li <?php if ($_GET['c']=="zixun") {?>class="Agency_nav_ul_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'zixun','id'=>'`$row.uid`'),$_smarty_tpl);?>
">咨询留言</a></li>
      <li <?php if ($_GET['c']=="link") {?>class="Agency_nav_ul_cur"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'link','id'=>'`$row.uid`'),$_smarty_tpl);?>
">联系我们</a></li>
    </ul>
  </div>
  <div class="Agency_Int ftl">
    <div class="Agency_Int_left">
      <h1 class="Agency_Int_Name"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
 <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'zixun','id'=>'`$row.uid`'),$_smarty_tpl);?>
" class="Agency_Int_Consulting">咨询</a>&nbsp;&nbsp;
      <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
      <?php if ($_smarty_tpl->tpl_vars['usertype']->value!='4') {?>
      <?php if ($_smarty_tpl->tpl_vars['isatn']->value['id']) {?> 
      <a href="javascript:void(0)" onclick="teacheratn('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atn_train'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' class="Agency_Int_Consultings">取消关注</a>
      <?php } else { ?>
      <a href="javascript:void(0)" onclick="teacheratn('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atn_train'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' class="Agency_Int_Consultings">关注</a>
      <?php }?>
      <?php } else { ?> 
      <a href="javascript:void(0)" onclick="layer.msg('只有个人用户和hr才能关注', 2, 8)" class="Agency_Int_Consultings">关注</a>
		<?php }?> 
      <?php } else { ?>
      <a href="javascript:void(0)" onclick="showlogin('1');" class="Agency_Int_Consultings">关注</a>
      <?php }?> &nbsp;&nbsp;
      <span class="Agency_Int_spans">已有<font id="antnum<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['ant_num'];?>
</font>人关注</span>
            
      </h1>
      <span class="Agency_Int_span">培训方向：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['row']->value['sid']];?>
</span><span class="Agency_Int_span">所属地区：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['threecityid']];?>
</span><span class="Agency_Int_span">成立时间：<?php echo $_smarty_tpl->tpl_vars['row']->value['sdate'];?>
 </span><span class="Agency_Int_span">机构性质：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['pr']];?>
 </span><span class="Agency_Int_span">机构规模：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['mun']];?>
</span>    
    </div>
  </div>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/js/train_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
function showImgDelay(imgObj,imgSrc,maxErrorNum){   
	if(maxErrorNum>0){ 
        imgObj.onerror=function(){
            showImgDelay(imgObj,imgSrc,maxErrorNum-1);
        };
		
        setTimeout(function(){
            imgObj.src=imgSrc;
        },500);
		maxErrorNum=parseInt(maxErrorNum)-parseInt(1);
    }
}
<?php echo '</script'; ?>
><?php }} ?>
