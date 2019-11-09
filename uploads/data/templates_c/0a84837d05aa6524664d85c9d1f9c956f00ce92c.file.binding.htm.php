<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:05:41
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/binding.htm" */ ?>
<?php /*%%SmartyHeaderCode:21319104455dc521d50574a5-82245699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a84837d05aa6524664d85c9d1f9c956f00ce92c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/binding.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21319104455dc521d50574a5-82245699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'setname' => 0,
    'lt' => 0,
    'cert' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc521d50b67e2_59631137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc521d50b67e2_59631137')) {function content_5dc521d50b67e2_59631137($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </head>

    <body>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/binding.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        
        <div class="m_content">
            <div class="wrap">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div class="m_inner_youb fl">
                    <div class="m_youb_rech01">
                        <?php if ($_smarty_tpl->tpl_vars['setname']->value==1) {?>
                        <div class="Binding_hint"><span class="Binding_hint_left">您有一次修改账户名的机会<b>（仅限一次）</b></span>
                            <a href="index.php?c=setname">立即修改</a>
                        </div>
                        <?php }?>
                        <div class="m_youb_rech">
                            <?php if ($_smarty_tpl->tpl_vars['lt']->value['moblie_status']==1) {?>
                            <div class="yz_icon_box yz_icon_box01"><i class="yz_icon yz_icon_sj"></i></div>
                            <div class="yz_name">绑定手机</div>
                            <div class="yz_name_qs"><em class="c30"><?php echo $_smarty_tpl->tpl_vars['lt']->value['moblie'];?>
</em> 绑定后可使用<br>该手机登录账号或找回密码</div>
                            <div class="">
                                <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=moblie');" class="yz_bd_bth_qx">取消绑定</a>
                            </div>
                            <?php } else { ?>
                            <div class="yz_icon_box"><i class="yz_icon yz_icon_sj"></i></div>
                            <div class="yz_name">绑定手机</div>
                            <div class="yz_name_qs"><em class="c30"><?php echo $_smarty_tpl->tpl_vars['lt']->value['moblie'];?>
</em> 绑定后可使用<br>该手机登录账号或找回密码</div>
                            <div class="">
                                <a href="javascript:getshow('moblie','绑定手机号码');" class="yz_bd_bth">立即绑定</a>
                            </div>
                            <?php }?>
                            <div class="clear"></div>
                        </div>
                        <div class="m_youb_rech">
                            <?php if ($_smarty_tpl->tpl_vars['lt']->value['email_status']==1) {?>
                            <div class="yz_icon_box yz_icon_box01"><i class="yz_icon yz_icon_yx"></i></div>
                            <div class="yz_name">邮箱验证</div>
                            <div class="yz_name_qs"><em class="c30"><?php echo $_smarty_tpl->tpl_vars['lt']->value['email'];?>
</em> 邮箱已验证<br>可以通过邮箱随时取回账户密码。</div>
                            <div class="">
                                <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=email');" class="yz_bd_bth_qx">取消绑定</a>
                            </div>
                            <?php } else { ?>
                            <div class="yz_icon_box"><i class="yz_icon yz_icon_yx"></i></div>
                            <div class="yz_name">邮箱验证</div>
                            <div class="yz_name_qs"><em class="c30"><?php echo $_smarty_tpl->tpl_vars['lt']->value['email'];?>
</em> 邮箱验证后<br>可以通过邮箱随时取回账户密码。</div>
                            <div class="">
                                <a href="javascript:getshow('email','绑定邮箱');" class="yz_bd_bth">立即绑定</a>
                            </div>
                            <?php }?>
                            <div class="clear"></div>
                        </div>

                        <div class="m_youb_rech">
                            <?php if ($_smarty_tpl->tpl_vars['lt']->value['yyzz_status']==1) {?>
                            <div class="yz_icon_box yz_icon_box01"><i class="yz_icon yz_icon_zy"></i></div>
                            <div class="yz_name">职业资格</div>
                            <div class="yz_name_qs">已验证职业资格<br>发布职位吧</div>
                            <div class="">
                                <a href="javascript:getyyzzlt('上传职业资格','600','300');" class="yz_bd_bth" style="background:#396">重新上传</a>
                            </div>
                            <?php } else { ?>
                            <div class="yz_icon_box "><i class="yz_icon yz_icon_zy"></i></div>
                            <div class="yz_name">职业资格</div>
								<?php if (!empty($_smarty_tpl->tpl_vars['cert']->value)) {?> 
									<?php if ($_smarty_tpl->tpl_vars['cert']->value['status']==2) {?>
									<div class="yz_name_qs">审核未通过<br>&nbsp;
										<?php if ($_smarty_tpl->tpl_vars['cert']->value['statusbody']) {?>原因：<?php echo $_smarty_tpl->tpl_vars['cert']->value['statusbody'];
}?></div>
									<div class=" ">
										<a href="javascript:getyyzzlt('上传职业资格','600','350');" class="yz_bd_bth " style="background:#396">重新上传</a>
									</div>
									<?php } else { ?>
									<div class="yz_name_qs">职业资格已上传<br>请等待管理员审核</div>
									<div class="">
										<a href="javascript:getyyzzlt('上传职业资格','600','350');" class="yz_bd_bth">重新上传</a>
									</div>
									<?php }?> 
								<?php } else { ?>
								<div class="yz_name_qs">当前未上传职业资格<br>可能会影响您的招聘效果</div>
								<div class="">
									<a href="javascript:getyyzzlt('上传职业资格','600','350');" class="yz_bd_bth">未验证</a>
								</div>
								<?php }?> 
							<?php }?>

                            <div class="clear"></div>
                        </div>
                        <div class="m_youb_rech">
                            <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>
                            <div class="yz_icon_box yz_icon_box01"><i class="yz_icon yz_icon_qq"></i></div>
                            <div class="yz_name">绑定QQ</div>
                            <div class="yz_name_qs">已绑定QQ号<br>可使用QQ快速登录</div>
                            <div class="">
                                <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=qqid');" class="yz_bd_bth_qx">取消绑定</a>
                            </div>
                            <?php } else { ?>
                            <div class="yz_icon_box"><i class="yz_icon yz_icon_qq"></i></div>
                            <div class="yz_name">绑定QQ</div>
                            <div class="yz_name_qs">未绑定QQ号 授权绑定后
                                <br>可使用QQ快速登录
                            </div>

                            <div class="">
                                <a href="<?php echo smarty_function_url(array('m'=>'qqconnect','login'=>1),$_smarty_tpl);?>
" class="yz_bd_bth">立即绑定</a>
                            </div>
                            <?php }?>
                            <div class="clear"></div>
                        </div>

                        <div class="m_youb_rech">
                            <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']) {?>
                            <div class="yz_icon_box yz_icon_box01"><i class="yz_icon yz_icon_sina"></i></div>
                            <div class="yz_name">新浪微博</div>
                            <div class="yz_name_qs">已绑定新浪微博<br>可使用新浪微博快速登录</div>
                            <div class="">
                                <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=sinaid');" class="yz_bd_bth_qx">取消绑定</a>
                            </div>
                            <?php } else { ?>
                            <div class="yz_icon_box"><i class="yz_icon yz_icon_sina"></i></div>
                            <div class="yz_name">新浪微博</div>
                            <div class="yz_name_qs">未绑定新浪微博授权绑定后<br>可使用新浪微博快速登录</div>
                            <div class="">
                                <a href="<?php echo smarty_function_url(array('m'=>'sinaconnect','login'=>1),$_smarty_tpl);?>
" class="yz_bd_bth">立即绑定</a>
                            </div>
                            <?php }?>
                            <div class="clear"></div>
                        </div>
                        <div class="m_youb_rech fl">

                            <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']||$_smarty_tpl->tpl_vars['member']->value['wxid']) {?>
                            <div class="yz_icon_box yz_icon_box01"><i class="yz_icon yz_icon_wx"></i></div>
                            <div class="yz_name">绑定微信</div>
                            <div class="yz_name_qs">已绑定微信<br>可使用微信扫描登录</div>
                            <div class="">
                                <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=wxid');" class="yz_bd_bth_qx">取消绑定</a>
                            </div>

                            <?php } else { ?>
                            <div class="yz_icon_box "><i class="yz_icon yz_icon_wx"></i></div>
                            <div class="yz_name">绑定微信</div>
                            <div class="yz_name_qs">未绑定微信授权绑定后<br>可使用微信扫描登录</div>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']!='1') {?>
                            <div class="">
                                <a href="javascript:void(0)" onclick="layer.msg('对不起，微信绑定已关闭！');return false;" class="yz_bd_bth">立即绑定</a>
                            </div>
                            <?php } else { ?>
                            <div class="">
                                <a href="<?php echo smarty_function_url(array('m'=>'wxconnect','login'=>1),$_smarty_tpl);?>
" class="yz_bd_bth">立即绑定</a>
                            </div>
                            <?php }?> <?php }?>
                        </div>
                        <div class="clear"></div>

                    </div>

                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="clear"></div>
        </div>
        
        
        <div id="email" style="display:none;">
            <div class="Binding_pop_box" style="padding:10px;width:480px;height:255px; background:#fff">
                <div class="Binding_pop_box_msg">修改后的邮箱将作为新的登录账号</div>
                <div style="padding:20px 0">
                    <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>新的邮箱：</span>
                        <input type="text" name="email" class="Binding_pop_box_list_text Binding_pop_box_list_textw200" /></div>
                    <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>
                        <input type="text" name="email_code" class="Binding_pop_box_list_text" style="width:100px;" />
                        <img id="vcode_img" src="../app/include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;" />
                        <a href="javascript:void(0);" onclick="checkCode('vcode_img');">看不清</a>
                    </div>
                    <div class="Binding_pop_sub" style="margin-top:20px;">
                        <span class="Binding_pop_box_list_left">&nbsp;</span>
                        <input class=" xubox_botton_emali" type="submit" onclick="sendbemail('vcode_img');" value="发送" />
                        <input class=" xubox_botton_emali  xubox_botton_emali_qx" type="button" value="取消" onclick="layer.close($('#layindex').val());" />
                    </div>
                </div>
            </div>
        </div>
        

        
        <div id="moblie" style=" display:none;">
            <div class="Binding_pop_box" style="padding:10px;width:480px;overflow:auto; background:#fff;">
                <div class="Binding_pop_box_msg">绑定完成后，您可以使用该手机号码登录账号、找回密码</div>
                <div style="padding:20px 0">
                    <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>手机号码：</span>
                        <input type="text" name="moblie" class="Binding_pop_box_list_text Binding_pop_box_list_textw200" /></div>
						<div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>
						<input type="text" name="phoneimg_code" maxlength="4" class="Binding_pop_box_list_text" />
						<img id="pcode_img" onclick="checkCode('pcode_img');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;">
						
					</div>
                    <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>短信验证码：</span>
                        <input type="text" id="moblie_code" class="Binding_pop_box_list_text" style="width:90px;" />
                        <a href="javascript:;" onclick="sendmoblie('pcode_img');" class="Binding_pop_bth" id="time">免费获取短信</a>
                    </div>
                    <div class="Binding_pop_sub" style="margin-top:20px;">
                        <span class="Binding_pop_box_list_left">&nbsp;</span>
                        <input class="xubox_botton_emali" onclick="check_moblie();" type="submit" value="保存" />
                        <input class="xubox_botton_emali xubox_botton_emali_qx" type="button" value="取消" onclick="layer.close($('#layindex').val());" />
                    </div>
                </div>
            </div>
        </div>
        

        
        <div id="yyzz" style=" display:none;">
            <div class="Binding_pop_box" style="padding:10px;width:370px;height:200px; background:#fff;">
                <div class="Binding_pop_box_msg">职业资格验证，有利于更好的招聘人才</div>
                <div>
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form id="certform" name="MyForm" target="supportiframe" method="post" action="index.php?c=binding&act=savecert" enctype="multipart/form-data">
                        <div class="fl" style="width:100%;">
                            <div class="Binding_pop_box_list" style="width:250px;">
                                <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>职业资格：</span>
                                <button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'check',imgid: 'imgicon',parentid: 'imgparent',imga: 'checka'}">上传图片</button>
                                <input type="hidden" id="layupload_type" value="2" />
                                <input type="hidden" id="upload_path" value="cert" />
                                <input type="hidden" id="cert_pic" name="check" value="<?php echo $_smarty_tpl->tpl_vars['cert']->value['check'];?>
" />
								<input type="hidden" id="old_cert" value="<?php echo $_smarty_tpl->tpl_vars['cert']->value['check'];?>
" />
                                <div class="Binding_pop_box_list" style="width:250px;">
                                    <span class="Binding_pop_box_list_left"></span>
                                    <input class="xubox_botton_emali" onclick="check_lt_cert()" type="button" value="保存">
                                </div>
                            </div>
                            <div id="imgparent" class="Binding_pop_box_zg <?php if (!$_smarty_tpl->tpl_vars['cert']->value['check']) {?>none<?php }?>" style="width:90px;">
                                <dl>
                                    <dt style="position:relative">
									<div id="newbind" class="Binding_pop_box_msg_cont_new none">新</div>
									<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
" width="40" height="40" />
									</dt>
                                    <dd style="padding-top:10px;">
                                        <a id="checka" class="bing_see_y" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
">查看原图</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <input type="hidden" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['lt']->value['moblie'];?>
" />
        <input type="hidden" id="linkmail" value="<?php echo $_smarty_tpl->tpl_vars['lt']->value['email'];?>
" />
        <input type="hidden" id="send" value="0" />
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
