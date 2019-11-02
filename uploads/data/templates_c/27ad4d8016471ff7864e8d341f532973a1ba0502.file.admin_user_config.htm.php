<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:56:05
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_user_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:11303631535dbd44a5c9f865-20727367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ad4d8016471ff7864e8d341f532973a1ba0502' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_user_config.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11303631535dbd44a5c9f865-20727367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd44a5d08ed1_39113714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd44a5d08ed1_39113714')) {function content_5dbd44a5d08ed1_39113714($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
        <title>后台管理</title>
    </head>

    <body class="body_ifm">
        <form class="layui-form">
            <div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
            <div class="infoboxp">
                <div class="tabs_info">
                    <ul>
                        <li class="curr">
                            <a href="index.php?m=admin_userset">个人设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_userset&c=logo">头像设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_userset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_userset&c=userspend">消费设置</a>
                        </li>
                    </ul>
                </div>
                <div class="admin_new_tip">
                    <a href="javascript:;" class="admin_new_tip_close"></a>
                    <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                    <div class="admin_new_tip_list_cont">
                        <div class="admin_new_tip_list">通过个人设置，可以实现“简历审核、个人身份证认证”等设置。管理员根据自己运营需求自由设置。</div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="main_tag mt10">
                    <div class="tag_box">
                        <div class="">
                            <table width="100%" class="table_form">
                                <tr class="admin_table_trbg">
                                    <th width="220" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
                                    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
                                </tr>
                                <tr>
                                    <th width="220">个人会员审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_state" value="0" title="审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_state']!=1) {?>checked<?php }?>>
                                                <input type="radio" name="user_state" value="1" title="不审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_state']==1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">个人简历审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="resume_status" value="0" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_status']!=1) {?>checked<?php }?>>
                                                <input type="radio" name="resume_status" value="1" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_status']==1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">个人会员邮件激活：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="user_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_status']!=1) {?>checked<?php }?>>
                                                <a href="javascript:jihuo();" class="layui-btn layui-btn-normal">以前用户全部激活</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="admin_table_trbg">
                                    <th width="220">强制身份认证：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_enforce_identitycert" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_enforce_identitycert']==1) {?>checked<?php }?>>
                                                <input type="radio" name="user_enforce_identitycert" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_enforce_identitycert']!=1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">强制创建简历：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_resume_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_resume_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="user_resume_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_resume_status']!=1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">简历创建要求：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input name="resume_create_edu" title="教育经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary">
                                                <input name="resume_create_exp" title="工作经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary">
                                                <input name="resume_create_project" title="项目经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">简历置顶要求：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input name="user_edu_regiser" title="教育经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_edu_regiser']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary">
                                                <input name="user_work_regiser" title="工作经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_work_regiser']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary">
                                                <input name="user_project_regiser" title="项目经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_project_regiser']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary">
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="220">开启高级简历审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_height_resume" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_height_resume']==1) {?>checked<?php }?>>
                                                <input type="radio" name="user_height_resume" value="2" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_height_resume']==2) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 
                                <tr>
                                    <th width="220">个人身份证审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_idcard_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_idcard_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="user_idcard_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_idcard_status']!=1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">个人委托简历审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_trust_status" value="0" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_trust_status']==0) {?>checked<?php }?>>
                                                <input type="radio" name="user_trust_status" value="1" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_trust_status']==1) {?>checked<?php }?>>
                                                <span class="admin_web_tip">关闭则默认通过审核</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

								<tr class="admin_table_trbg">
                                    <th width="220">个人头像审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_photo_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_photo_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="user_photo_status" value="2" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_photo_status']==2) {?>checked<?php }?>>
                                                <span class="admin_web_tip">关闭则默认通过审核</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th width="220">拥有简历才可报名兼职：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_resume_partapply" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_resume_partapply']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_resume_partapply" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_resume_partapply']!=1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="admin_table_trbg">
                                    <th width="220">个人搜索器数量：</th>
                                    <td>
                                        <input class="input-text tips_class" type="text" name="user_finder" id="user_finder" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['user_finder'];?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /> 个 <span class="admin_web_tip">数量太多，发送订阅邮件会很慢，为空则不限</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">个人会员发布简历数：</th>
                                    <td>
                                        <input class="input-text tips_class" type="text" name="user_number" id="user_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['user_number'];?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /> 份
                                        <span class="admin_web_tip">为空则不限</span>

                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">个人会员向网站委托简历数：</th>
                                    <td>
                                        <input class="input-text tips_class" type="text" name="user_trust_number" id="user_trust_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['user_trust_number'];?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /> 份
                                        <span class="admin_web_tip">为空或0则关闭委托</span>
                                    </td>
                                </tr>

                                

                                <tr class="admin_table_trbg">
                                    <th width="220">姓名展示：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_name" value="1" title="用户自定义" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']==1) {?>checked<?php }?>>
                                                <input type="radio" name="user_name" value="2" title="编号" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']==2) {?>checked<?php }?>>
                                                <input type="radio" name="user_name" value="3" title="性别称呼" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']==3) {?>checked<?php }?>>
                                                <input type="radio" name="user_name" value="4" title="真实姓名" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']==4) {?>checked<?php }?>>
                                                <span class="admin_web_tip">编号：如NO.12，性别称呼：如冯先生/女士，真实姓名：如冯云鹏</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">个人简历头像：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="user_pic" value="1" title="用户自定义" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_pic']==1) {?>checked<?php }?>>
                                                <input type="radio" name="user_pic" value="2" title="显示" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_pic']==2) {?>checked<?php }?>>
                                                <input type="radio" name="user_pic" value="3" title="不显示" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_pic']==3) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">申请职位要求简历完整度达到：</th>
                                    <td><input class="input-text tips_class" type="text" name="user_sqintegrity" id="user_sqintegrity" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['user_sqintegrity'];?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" />%</td>
                                </tr>
                                <tr>
                                    <th width="220">个人简历刷新类型：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="resume_sx" value="1" title="登录后自动刷新" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_sx']==1) {?>checked<?php }?>>
                                                <input type="radio" name="resume_sx" value="2" title="弹出框手动刷新" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_sx']==2) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="">
                                    <th>&nbsp;</th>
                                    <td align="left">
                                        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                                        <input class="layui-btn layui-btn-normal admin_buttonpz" id="config" type="button" name="config" value="提交">&nbsp;&nbsp;
                                        <input class="layui-btn layui-btn-normal admin_buttonpz" type="reset" value="重置" /></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
                <?php echo '<script'; ?>
>
                    layui.use(['layer', 'form'], function() {
                        var layer = layui.layer,
                            form = layui.form,
                            $ = layui.$;
                    });
                    $(function() {
                        $("#config").click(function() {

                            $.post("index.php?m=admin_userset&c=save", {
                                config: $("#config").val(),
                                user_number: $("#user_number").val(),
                                user_finder: $("#user_finder").val(),
                                user_work_regiser: $("input[name=user_work_regiser]").is(":checked") ? 1 : 0,
                                user_edu_regiser: $("input[name=user_edu_regiser]").is(":checked") ? 1 : 0,
                                user_project_regiser: $("input[name=user_project_regiser]").is(":checked") ? 1 : 0,
                                 
                                
                                user_integrity_eighty: $("input[name=user_integrity_eighty]:checked").val(),
                                user_trust_number: $("#user_trust_number").val(),
                                user_imgwidth: $("#user_imgwidth").val(),
                                user_imgheight: $("#user_imgheight").val(),
                                user_state: $("input[name=user_state]:checked").val(),
                                resume_status: $("input[name=resume_status]:checked").val(),
                                user_status: $("input[name=user_status]:checked").val(),
                                user_enforce_identitycert: $("input[name=user_enforce_identitycert]:checked").val(),
                                user_resume_status: $("input[name=user_resume_status]:checked").val(),
                                user_height_resume: $("input[name=user_height_resume]:checked").val(),
								user_idcard_status: $("input[name=user_idcard_status]:checked").val(),

                                com_resume_partapply: $("input[name=com_resume_partapply]:checked").val(),
                                resume_sx: $("input[name=resume_sx]:checked").val(),
                                pytoken: $("#pytoken").val(),
                                user_trust_status: $("input[name=user_trust_status]:checked").val(),
                                user_photo_status: $("input[name=user_photo_status]:checked").val(),
                                user_name: $("input[name=user_name]:checked").val(),
                                user_pic: $("input[name=user_pic]:checked").val(),
                                
                                user_sqintegrity: $("#user_sqintegrity").val(),
                                resume_create_edu: $("input[name=resume_create_edu]").is(":checked") ? 1 : 0,
                                resume_create_exp: $("input[name=resume_create_exp]").is(":checked") ? 1 : 0,
                                resume_create_project: $("input[name=resume_create_project]").is(":checked") ? 1 : 0
                            }, function(data, textStatus) {
                                config_msg(data);
                            });
                        });
                    })

                    function jihuo() {
                        var pytoken = $("#pytoken").val();
                        $.get('index.php?m=admin_userset&c=jihuo&pytoken=' + pytoken, function(data) {
                            if(data) {
                                parent.layer.msg('激活成功！', 2, 9);
                            } else {
                                parent.layer.msg('激活失败！', 2, 8);
                            }
                        })
                    }
                <?php echo '</script'; ?>
>
            </div>
        </form>
    </body>

</html><?php }} ?>
