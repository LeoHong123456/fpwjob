<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 11:33:50
         compiled from "/www/fpwjob/uploads/app/template/wap/ltjobrecshow.htm" */ ?>
<?php /*%%SmartyHeaderCode:12633407505e2e5a1e22fc51-70623858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84bcae46f39a5c33c51dbb3f931f70a4eae049c0' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/ltjobrecshow.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12633407505e2e5a1e22fc51-70623858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'job' => 0,
    'wap_style' => 0,
    'config' => 0,
    'uid' => 0,
    'myself' => 0,
    'Info' => 0,
    'usertype' => 0,
    'atn' => 0,
    'userjob' => 0,
    'favjob' => 0,
    'layer' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e5a1e342823_65410007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e5a1e342823_65410007')) {function content_5e2e5a1e342823_65410007($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_lt.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
	.img_auto img{max-width:100%;}
</style>
<div class="ltjobrec_show_job_box">
    <div class="ltjobrec_show_job">
        <div class="ltjobrec_show_jobname">
        	<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>

        	<span class="ltjobrec_show_jobxz">
        		<?php if ($_smarty_tpl->tpl_vars['job']->value['minsalary']>0&&$_smarty_tpl->tpl_vars['job']->value['maxsalary']>0) {?>
        			￥<?php echo floatval($_smarty_tpl->tpl_vars['job']->value['minsalary']);?>
-<?php echo floatval($_smarty_tpl->tpl_vars['job']->value['maxsalary']);?>
万
        		<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['minsalary']>0) {?>
        			￥<?php echo floatval($_smarty_tpl->tpl_vars['job']->value['minsalary']);?>
万以上
        		<?php } else { ?>
        			面议
        		<?php }?>
        	</span>
        </div>
        
        <div class="ltjobrec_show_jobtj">
        	<?php echo $_smarty_tpl->tpl_vars['job']->value['provinceid_info'];?>
 
        	<?php echo $_smarty_tpl->tpl_vars['job']->value['cityid_info'];?>
 
        	<?php echo $_smarty_tpl->tpl_vars['job']->value['three_cityid_info'];?>

        	
        	<span class="lt_hunter_info_line">|</span>
        	<?php echo $_smarty_tpl->tpl_vars['job']->value['exp_info'];?>
经验
        	
        	<span class="lt_hunter_info_line">|</span>
        	<?php echo $_smarty_tpl->tpl_vars['job']->value['edu_info'];?>

        	
        </div>

        <div class="ltjobrec_show_jobyh"><?php if ($_smarty_tpl->tpl_vars['job']->value['welfare']) {?>职位诱惑：<?php echo $_smarty_tpl->tpl_vars['job']->value['welfare'];
}?></div>
        
        <div class="stamp_exceed" style="z-index: 100;">
            <?php if ($_smarty_tpl->tpl_vars['job']->value['zp_status']=='1') {?><img title="已下架" src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/images/stamp.png"> <?php }?>
        </div>
        
    </div>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rec_rebates']=="1"&&$_smarty_tpl->tpl_vars['job']->value['rebates']>"0") {?>
    <div class="ltjobrec_show_sj">
    	推荐获得赏金：<span class="ltjobrec_show_sj_n"><?php echo $_smarty_tpl->tpl_vars['job']->value['rebates'];?>
</span><?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rebates_name']) {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['lt_rebates_name'];?>
 <?php } else { ?>元<?php }?>
    	<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
	    	<?php if ($_smarty_tpl->tpl_vars['myself']->value) {?>
	        	<a href="javascript:void(0)" onclick="layermsg('本人发布，无法推荐！');" class="ltjobrec_show_sj_a">立即推荐</a>
	        <?php } else { ?>
	        	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'recuser','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="ltjobrec_show_sj_a">立即推荐</a>
	        <?php }?>
        <?php } else { ?>
        	<a href="javascript:void(0)"  onclick="loginmsg()"class="ltjobrec_show_sj_a">立即推荐</a>
        <?php }?>
    </div>
    <?php }?>
    
</div>

<div class="ltjobrec_show_job_box">
    <div class="ltjobrec_show_jobinfo">
        <div class="lt_hunter_tit">职位描述</div>

        <div class="ltjobrec_show_jobinfo_t">基本情况</div>
        <div class="ltjobrec_show_jobinfo_p">
            <div>性别要求：<?php echo $_smarty_tpl->tpl_vars['job']->value['sex'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['job']->value['language']) {?>
            <div>语言要求：<?php echo $_smarty_tpl->tpl_vars['job']->value['language'];?>
</div><?php }?>
            <div>年龄要求：<?php echo $_smarty_tpl->tpl_vars['job']->value['age_info'];?>
 </div>

            <div>所属部门：<?php echo $_smarty_tpl->tpl_vars['job']->value['department'];?>
</div>
            <div>汇报对象：<?php echo $_smarty_tpl->tpl_vars['job']->value['report'];?>
</div>
            <div>薪资构成：<?php echo $_smarty_tpl->tpl_vars['job']->value['constitute'];?>
</div>

            <!-- <div>截止日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['edate'],'Y-m-d');?>
</div> -->
        </div>
        <div class="ltjobrec_show_jobinfo_t">岗位介绍</div>
        <div class="ltjobrec_show_jobinfo_p muipreview" id="job_desc"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_desc'];?>
</div>

        <div class="ltjobrec_show_jobinfo_t">任职要求</div>
        <div class="ltjobrec_show_jobinfo_p muipreview" id="eligible"><?php echo $_smarty_tpl->tpl_vars['job']->value['eligible'];?>
</div>
    </div>
</div>

<div class="ltjobrec_show_job_box">
    <div class="ltjobrec_show_jobinfo">
        <div class="lt_hunter_tit">企业简介</div>
        <div class="ltjobrec_show_jobinfo_p img_auto muipreview" id="desc"> <?php echo $_smarty_tpl->tpl_vars['job']->value['desc'];?>
</div>
    </div>
</div>

<div class="ltjobrec_show_job_box">
    <div class="ltjobrec_show_jobinfo">
        <div class="lt_hunter_tit">职位发布人</div>
        <div class="ltjobrec_show_job_fber">
            <div class="ltjobrec_show_job_pic">
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'hunter','uid'=>'`$Info.uid`'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['photo'];?>
" width="50" height="50" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
','2')" /></a>
            </div>
            <div class="ltjobrec_show_job_fbname">
                <a class="itwap_job_ds_pp_nm" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'hunter','uid'=>'`$Info.uid`'),$_smarty_tpl);?>
"> <?php echo $_smarty_tpl->tpl_vars['Info']->value['realname'];?>
</a>
            </div>
            <div class="ltjobrec_show_job_fbhy"><?php echo $_smarty_tpl->tpl_vars['Info']->value['hy_info'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
            <a href="javascript:void(0);" onclick="ltatn('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
');" id="guanzhu<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" class="lt_hunter_info_gz"><?php if (is_array($_smarty_tpl->tpl_vars['atn']->value)) {?>取消关注<?php } else { ?>+关注<?php }?></a>
            <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
            <a href="javascript:void(0)" onclick="layermsg('只有个人用户才能关注！')" class="lt_hunter_info_gz">+关注</a>
            <?php } else { ?>
            <a href="javascript:void(0)" onclick="loginmsg()" class="lt_hunter_info_gz">+关注</a>
            <?php }?> <?php }?>
        </div>
        <div class="ltjobrec_show_job_fbly">
            <input type="hidden" id="job_uid" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
" />
            <input type="hidden" id="jobid" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" />
            <input type="hidden" id="job_name" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
" />
            <input type="hidden" id="com_name" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
" />
            <div class="itwap_job_ds_word_top"><i class="itwap_job_ds_word_icon"></i>给我留言</div>
            <div class="itwap_job_ds_textarea"><textarea id="msg_content" name="content" placeholder="请输入您对该职位的疑问。比如所在地、年薪、福利等，我会及时给您回复！期待与您合作！"></textarea></div>
            <div class="itwap_job_ds_yzm">
             <input class="" id="msg_CheckCode" type="text" placeholder="请输入验证码" value="" maxlength="6" name="authcode" />
                <img class="itwap_job_ds_yzm_img" id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');" />
                </div>
                   <div class="itwap_job_ds_yzm_fs">
                 <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
                <input class="" type="button" onclick="ltmsg('vcode_img')" value="提交"> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                <input class="" type="button" value="提交" onclick="layermsg('只有个人用户才能留言')"> <?php } else { ?>
                <input class="" type="button" value="提交" onclick="loginmsg()"> <?php }?> <?php }?>

            </div>  </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>

    <div class="yun_chat_new" onclick="jobChat('<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
',<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_type'];?>
,'<?php echo $_smarty_tpl->tpl_vars['userjob']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
','lt')"><span class="yun_chat_new_bth">聊聊</span></div>
    <?php }?>

    <div class="itwap_bottom">
        <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1&&$_smarty_tpl->tpl_vars['uid']->value) {?> <?php if ($_smarty_tpl->tpl_vars['userjob']->value) {?>
        <div class="itwap_bottom_li" style="background:#989390">
            <a>已申请</a>
        </div>
        <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['job']->value['notuserjob']=='') {?>
        <div class="itwap_bottom_li">
            <a href="javascript:void(0);" onclick="ypjob('3','<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');">立即申请</a>
        </div>
        <?php } else { ?>
        <div class="itwap_bottom_li" style="background:#989390">
            <a>立即申请</a>
        </div>
        <?php }?> <?php }?> <?php if ($_smarty_tpl->tpl_vars['favjob']->value) {?>
        <div class="itwap_bottom_ysc">
            <a href="javascript:;">已收藏</a>
        </div>
        <?php } else { ?>
        <div class="itwap_bottom_sc">
            <a href="javascript:;" id="ltjob<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" onclick="fav_hjob('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');">收藏</a>
        </div>
        <?php }?> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <?php if ($_smarty_tpl->tpl_vars['job']->value['notuserjob']=='') {?>
        <div class="itwap_bottom_li">
            <a href="javascript:void(0);" onclick="layermsg('只有个人用户才能申请')">立即申请</a>
        </div>
        <?php } else { ?>
        <div class="itwap_bottom_li" style="background:#989390">
            <a>立即申请</a>
        </div>
        <?php }?>
        <div class="itwap_bottom_sc">
            <a href="javascript:void(0);" onclick="layermsg('只有个人用户才能收藏')">收藏</a>
        </div>
        <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['job']->value['notuserjob']=='') {?>
        <div class="itwap_bottom_li">
            <a href="javascript:void(0);" onclick="loginmsg()">立即申请</a>
        </div>
        <?php } else { ?>
        <div class="itwap_bottom_li" style="background:#989390">
            <a>立即申请</a>
        </div>
        <?php }?>
        <div class="itwap_bottom_sc">
            <a href="javascript:void(0);" onclick="loginmsg()">收藏</a>
        </div>
        <?php }?> <?php }?>
        <div class="itwap_bottom_fx">
            <a href="javascript:void(0);" data-url='<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'share','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
' id="shareClick">分享</a>
        </div>
    </div>
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
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/lt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/chat/chat.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
' type='text/javascript'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    	function loginmsg(){
    	    layermsg('请先登录！',2,function(){window.location.href = 'index.php?c=login'}); 
        }
    <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['layer']->value) {?>
    <input id="layermsg" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['msg'];?>
" type="hidden">
    <input id="layerurl" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['url'];?>
" type="hidden">
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            islayer();
        });
    <?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
>
        var config = {
            url: '<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'share','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
',
            title: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
',
            desc: '',
            img: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
            img_title: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
',
            from: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
        };
        var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
"
    <?php echo '</script'; ?>
>
    <div style="width:100%;height:60px;"></div>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/nativeshare.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public_previewimage.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/itwap.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
    </body>

    </html><?php }} ?>
