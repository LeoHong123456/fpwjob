<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-26 22:58:21
         compiled from "/www/fpwjob/uploads/app/template/wap/once_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:4271174305e56878d20d239-98869494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d026b8cef241b6c440e434bfa8fc8e1e7096369' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/once_add.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4271174305e56878d20d239-98869494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'num' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e56878d27dec4_39901516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e56878d27dec4_39901516')) {function content_5e56878d27dec4_39901516($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/webapppic/cropper.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/yun_wap_member.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/compress.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>var wapurl="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
"<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    (function() {
        var num = '<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
';
		
        if(parseInt(num) > 0 ) {
            layer.open({
                content: '您还有<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
个订单未付款，是否继续发布！',
                btn: ['去付款', '继续发布'],
                shadeClose: false,
                yes: function() {
                    setTimeout(function() {
                        location.href = wapurl+"index.php?c=once&a=paylog";
                    }, 0);
                }
            });
        }

    })()
<?php echo '</script'; ?>
>
<div id="app" class="mui-views">
    <div class="mui-view">
        <div class="mui-pages"></div>
    </div>
</div>


<div id="main" class="mui-page">
    
    <div class="mui-page-content">
    	
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <ul class="yun_newwap_box">
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">我想招聘</span>
                        <span class="yun_newwap_text_box"> 
							<input type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" class="reinputText" placeholder="请填写招聘名称,如厨师">
			            </span>
                    </li>
				 
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">工作薪资</span>
                        <span class="yun_newwap_text_box"> 
							<input type="text" id="salary" name="salary" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['salary'];?>
"  class="reinputText" placeholder="请填写工资">
			            </span>
                    </li>
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">工作地点</span>
                        <span class="yun_newwap_text_box"> 
							<input type="text" id="address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
"  class="reinputText" placeholder="请填写工作地点">
			            </span>
                    </li>
                    <li>
                        <a href="#contenthtml"><span class="yun_newwap_text_name">招聘要求</span><div class="yun_newwap_text_box yun_newwap_text_box_p" id="contentshow"><?php if ($_smarty_tpl->tpl_vars['row']->value['require']) {
echo $_smarty_tpl->tpl_vars['row']->value['require'];
} else { ?>请填写<?php }?></div></a>
                    </li>
                </ul>

                <ul class="yun_newwap_box mt15">
                    
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">店面名称</span>
                        <div class="yun_newwap_text_box">
                            <input type="text" id="companyname" name="companyname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['companyname'];?>
" class="reinputText" placeholder="请填写店铺名称">
                        </div>
                    </li>
                    
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">联&nbsp;系&nbsp; 人</span>
                        <div class="yun_newwap_text_box">
                            <input type="text" id="linkman" name="linkman" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
" class="reinputText" placeholder="请填写联系人">
                        </div>
                    </li>
                    
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">联系电话</span>
                        <div class="yun_newwap_text_box">
                            <input type="text" id="phone" name="phone" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
" class="reinputText" placeholder="请填写联系电话">
                        </div>
                    </li>
                    
                    <li class=""><span class="yun_newwap_text_name">店面形象</span>
                        <div class="yun_newwap_text_box">
                        	<span class="once_cont_wate_list_photo_pic" id="previewshow" style="right:30px;"> <img id="previewimg" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
 "   width="35" height="35"></span>
                            <div class="once_cont_wate_list_photo">
                           		<div class="yunset_list_file"> 
                            	<input type="file" id="pic" name="pic" onchange="previewImage(this,'preview')" accept="image/*"  />
                           		</div>
                           		<input type='hidden' name='preview' value='' id='preview'>  
                            </div>
                        </div>
                    </li>

                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">招聘有效期</span>
                        <div class=" yun_newwap_text_time">
                            <input type="text" id="edate" name="edate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo $_smarty_tpl->tpl_vars['row']->value['edate'];
} else { ?>60<?php }?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" maxlength="3" class=" " placeholder="请输入招聘有效期">
                            <span class="yun_newwap_text_time_dw">天</span>
                        </div>
                    </li>

                </ul>

                <div class="yun_newwap_box_ts">提示：密码可用于刷新/修改/删除此信息</div>
                <ul class="yun_newwap_box ">
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['id']=='') {?>
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">设置密码</span>
                        <div class="yun_newwap_text_box">
                            <input type="password" id="password" name="password" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" class=" " placeholder="请输入密码">
                        </div>
                    </li>
                    <?php } else { ?>
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</span>
                        <div class="yun_newwap_text_box">
                            <input type="password" id="password" name="password" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" class=" " placeholder="请输入密码">
                        </div>
                    </li>
					<?php }?> <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"店铺招聘")!==false) {?> <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">安全验证</span>
                        <div class="yun_newwap_text_box">
                            <div id="mask"></div>
                            <div id="popup-captcha-mobile" data-id='subreg' data-type='click'></div>
                            <input type='hidden' id="popup-submit">
                        </div>
                    </li>
                    <style>
                        .geetest_holder.geetest_wind {
                            min-width: 160px;
                        }
                    </style>
                    <?php } else { ?>
                    <li class="yun_newwap_text"><span class="yun_newwap_text_name">验证码</span>
                        <div class="yun_newwap_yz">
                            <input type="text" id="checkcode" name="checkcode" id="checkcode" value="" placeholder="请输入图片验证码">
                            <div class="yun_newwap_yz_img">
                                <img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');" />
                            </div>
                        </div>
                    </li>
                    <?php }?>
					<?php }?>
                </ul>
                <div class="yun_newwap_bth ">
					<input id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="hidden" /> 
					<button id="oncesubmit" type="button" class="mui-btn mui-btn-block mui-btn-primary">提交操作</button>
				</div>
            </div>
        </div>
    </div>
</div>


<div id="contenthtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <div class="yun_wap_info_brief">
                    <div class="yun_wap_info_brief_c">
                        <div class="yun_wap_info_brief_tit"> 招聘要求 </div>
                        <textarea class="textAreaMsg tip contenttext" id="content" name="require" placeholder="请填写招聘的具体要求，如性别、学历、年龄、工作经验和工作待遇等"><?php echo $_smarty_tpl->tpl_vars['row']->value['require'];?>
</textarea></div>
                    <a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
    var code_web = "<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
";
	var formData = new FormData(),newuploadpic;
<?php echo '</script'; ?>
>

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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/mobile.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/onceadd.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
	$(document).ready(function() {
		if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('contenthtml')){
			document.getElementById('contenthtml').addEventListener('touchmove', function (e) { e.stopPropagation();}, {passive: false});
		}
	})
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
