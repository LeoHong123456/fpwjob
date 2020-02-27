<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-22 08:58:54
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_member_trainlist.htm" */ ?>
<?php /*%%SmartyHeaderCode:15050932405e507cce119a06-79396781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc9210fb4a5ffca0c6782a59b774023dc8a289aa' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_member_trainlist.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15050932405e507cce119a06-79396781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'total' => 0,
    'userrows' => 0,
    'key' => 0,
    'v' => 0,
    'moblie_promiss' => 0,
    'email_promiss' => 0,
    'Dname' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e507cce1ab095_13521903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e507cce1ab095_13521903')) {function content_5e507cce1ab095_13521903($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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
" rel="stylesheet">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function audall() {
                var codewebarr = "";
                $(".check_all:checked").each(function() {  
                    if(codewebarr == "") {
                        codewebarr = $(this).val();
                    } else {
                        codewebarr = codewebarr + "," + $(this).val();
                    }
                });
                if(codewebarr == "") {
                    parent.layer.msg('您还未选择任何信息！', 2, 8);
                    return false;
                } else {
                    $("input[name=uid]").val(codewebarr);
                    $("#statusbody").val('');
                    $("input[name='status']").attr('checked', false);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    $.layer({
                        type: 1,
                        title: '培训用户审核',
                        closeBtn: [0, true],
                        border: [10, 0.3, '#000', true],
                        area: ['390px', '260px'],
                        page: {
                            dom: "#infobox2"
                        }
                    });
                }
            }
            $(function() {
                $(".status").click(function() {
                    var uid = $(this).attr("pid");
                    var pytoken = $("#pytoken").val();
                    var status = $(this).attr("status");
                    $("#status_" + status).attr("checked", true);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    $("input[name=uid]").val(uid);
                    $.post("index.php?m=train_member&c=lockinfo", {
                        pytoken: pytoken,
                        uid: uid
                    }, function(msg) {
                        $("#lock_info").val(msg);
                        status_div('锁定用户', '390', '260');
                    });
                });
                $(".user_status").click(function() {
                    var uid = $(this).attr("pid");
                    var status = $(this).attr("status");
                    $("#status" + status).attr("checked", true);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    var pytoken = $("#pytoken").val();
                    $("input[name=uid]").val(uid);
                    var pytoken = $("#pytoken").val();
                    $.post("index.php?m=train_member&c=lockinfo", {
                        pytoken: pytoken,
                        uid: uid
                    }, function(msg) {
                        $("#statusbody").val(msg);
                        $.layer({
                            type: 1,
                            title: '培训用户审核',
                            closeBtn: [0, true],
                            border: [10, 0.3, '#000', true],
                            area: ['390px', '260px'],
                            page: {
                                dom: "#infobox2"
                            }
                        });
                    });

                });
            });
        <?php echo '</script'; ?>
>
        <link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <title>后台管理</title>
    </head>

    <body class="body_ifm">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/member_send_email.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="status_div" style="display:none; width: 350px; ">
            <div class="">
                <form class="layui-form" action="index.php?m=train_member&c=lock" target="supportiframe" method="post" id="formstatus">
                    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                        <tr>
                            <th width="80">锁定操作：</th>
                            <td align="left">
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <div class="layui-input-inline">
                                            <input name="status" id="status_1" value="1" title="正常" type="radio" />
                                            <input name="status" id="status_2" value="2" title="锁定" type="radio" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>锁定说明：</th>
                            <td align="left"><textarea id="lock_info" name="lock_info" class="admin_explain_textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan='2' align="center">
								<input type="submit" onclick="loadlayer();" value='确认' class="layui-btn layui-btn-normal">
                                <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
							</td>
                        </tr>
                    </table>
                    <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                    <input name="uid" value="0" type="hidden">
                </form>
            </div>
        </div>
        <div id="infobox2" style="display:none; width: 380px; ">
            <form class="layui-form" action="index.php?m=train_member&c=status" target="supportiframe" method="post" id="formstatus">
                <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                    <tr>
                        <th width="80">审核操作：</th>
                        <td align="left">
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <div class="admin_examine_right" style="width:300px;">
                                        <input name="status" id="status0" value="0" title="未审核" type="radio" />
                                        <input name="status" id="status1" value="1" title="已审核" type="radio" />
                                        <input name="status" id="status3" value="3" title="未通过" type="radio" />
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>审核说明：</th>
                        <td align="left"><textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan='2' align="center"><input type="submit" onclick="loadlayer();" value='确认' class="layui-btn layui-btn-normal">
                            <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
                    </tr>
                </table>
                <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                <input name="uid" value="0" type="hidden">
            </form>
        </div>
        <div class="infoboxp">
        	
        	
        	<div class="tabs_info">
                <ul>
                    <li class="curr">
                        <a href="index.php?m=train_member">全部培训</a>
                    </li>
                    <li>
                        <a href="index.php?m=train_member&c=writtenOffLog">解绑记录</a>
                    </li>
					<li>
                        <a href="index.php?m=train_member&c=member_log">会员日志</a>
                    </li>
                </ul>
            </div>
            
        	
            <div class="admin_new_tip">
                <a href="javascript:;" class="admin_new_tip_close"></a>
                <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                <div class="admin_new_tip_list_cont">
                    <div class="admin_new_tip_list">该页面展示了网站所有的培训会员信息，可对培训会员进行审核删除操作。</div>
                    <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="admin_new_search_box">
                <form action="index.php" name="myform" method="get">
                    <input name="m" value="train_member" type="hidden" />
                    <div class="admin_new_search_name">搜索类型：</div>
                    <div class="admin_Filter_text formselect" did='dtype'>
                        <input type="button" value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>用户名 <?php } elseif ($_GET['type']=='2') {?>机构名称<?php } elseif ($_GET['type']=='3') {?>EMAIL<?php } elseif ($_GET['type']=='4') {?>手机号<?php }?>" class="admin_Filter_but" id="btype">
                        <input type="hidden" name="type" id="type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>" />
                        <div class="admin_Filter_text_box" style="display:none" id='dtype'>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('1','type','用户名')">用户名</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('2','type','机构名称')">机构名称</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('3','type','EMAIL')">EMAIL</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('4','type','手机号')">手机号</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="text" placeholder="输入你要搜索的关键字" value="<?php echo $_GET['keyword'];?>
" name='keyword' class="admin_Filter_search">
                    <input type="submit" name='search' value="搜索" class="admin_Filter_bth">
                    <a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
                </form>
                <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
            <div class="clear"></div>

			<div class="admin_statistics">
            数据统计：
				<em class="admin_statistics_s">总数：<span class="ajaxuserall">0</span></em>
				<em class="admin_statistics_s">未审核：<span class="pxStatusNum1">0</span></em>
				<em class="admin_statistics_s">未通过：<span class="pxStatusNum2">0</span></em>
				<em class="admin_statistics_s">已锁定：<span class="pxStatusNum3">0</span></em>
				搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
			</div>

            <div class="table-list">
                <div class="admin_table_border">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
                        <input name="m" value="train_member" type="hidden" />
                        <input name="c" value="del" type="hidden" />
                        <table width="100%">
                            <thead>
                                <tr class="admin_table_top">
                                    <th><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
                                    <th><?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'uid','m'=>'train_member','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg" /></a><?php } else { ?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'uid','m'=>'train_member','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg" /></a> <?php }?></th>
                                    <th align="left">用户名/机构名称</th>

                                    <th>企业认证</th>
                                    <th>会员日志</th>
                                    <th align="left">手机号/EMAIL</th>
                                    <th>登录/注册</th>
                                    <th>站点</th>

                                    <th>状态</th>
                                    <th>推荐</th>
									<th class="admin_table_th_bg" width="200">操作</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userrows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg" <?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
                                    <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" email="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
" moblie="<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
" /></td>
                                    <td class="ud" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                                    <td class="ud" align="left">
                                        <a href="index.php?m=user_member&c=Imitate&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><img src="../config/ajax_img/suo.png" alt="已锁定" title="已锁定"><?php }?>
                                        <div class="mt8"><?php echo $_smarty_tpl->tpl_vars['v']->value['train_name'];?>
</div>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['email_status']==1) {?>
                                        <img src="../config/ajax_img/1-1.png" title="邮箱已认证" width="20" height="20"> <?php } else { ?>
                                        <img src="../config/ajax_img/1-2.png" title="邮箱未认证" width="20" height="20"> <?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['moblie_status']==1) {?>
                                        <img src="../config/ajax_img/2-1.png" title="手机已认证" width="20" height="20"> <?php } else { ?>
                                        <img src="../config/ajax_img/2-2.png" title="手机未认证" width="20" height="20"> <?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['yyzz_status']==1) {?>
                                        <img src="../config/ajax_img/3-1.png" title="营业执照已认证" width="20" height="20"> <?php } else { ?>
                                        <img src="../config/ajax_img/3-2.png" title="营业执照未认证" width="20" height="20"> <?php }?>
                                    </td>
									<td><a href="index.php?m=train_member&c=member_log&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">查看日志记录</a></td>
                                    <td class="ud" align="left">
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['email']) {?>
                                        <div>
                                            <div class="">
												<span class="admin_new_sj"><?php if ($_smarty_tpl->tpl_vars['v']->value['moblie']) {?>
              
											  <?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>

											  <?php if ($_smarty_tpl->tpl_vars['moblie_promiss']->value) {?><span onClick="send_moblie('<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
');" style="color:green;cursor:pointer;">发信息</span><?php }?> <?php }?>
                                                </span>
                                            </div>
                                            <div class="mt8">
                                                <span class="admin_new_yx">
												<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>

												<?php if ($_smarty_tpl->tpl_vars['email_promiss']->value) {?><span onClick="send_email('<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
');" style="color:green; cursor:pointer;">发邮件</span><?php }?> <?php }?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['login_date']!='') {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['login_date'],"%Y-%m-%d");?>
 <?php } else { ?>

                                        <font color="#FF0000">从未登录</font><?php }?>

                                        <div class="mt8"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reg_date'],"%Y-%m-%d");?>
</div>

                                    </td>
                                    <td>
                                        <div><?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['v']->value['did']];?>
</div>
                                        <div>
                                            <a href="javascript:;" onclick="checksite('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=train_member&c=checksitedid');" class="admin_company_xg_icon">重新分配</a>
                                        </div>
                                    </td>

                                    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><span class="admin_com_Audited">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==0) {?><span class="admin_com_noAudited">未审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?><span class="admin_com_tg">未通过</span><?php } else { ?><span class="admin_com_Lock">锁定</span><?php }?></td>
                                    <td id="rec<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['rec']=="1") {?>
                                        <a href="javascript:void(0);" onClick="rec_up('index.php?m=train_member&c=rec','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','0','rec');"><img src="../config/ajax_img/doneico.gif"></a><?php } else { ?>
                                        <a href="javascript:void(0);" onClick="rec_up('index.php?m=train_member&c=rec','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','1','rec');"><img src="../config/ajax_img/errorico.gif"></a><?php }?> 
									</td>
                                    
                                    <td>
										<a href="javascript:void(0);" class="user_status admin_new_c_bth admin_new_c_bthsh" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
">审核</a>
										<a href="javascript:void(0);" class="status admin_new_c_bth admin_new_c_bthsd" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
">锁定 </a>
										<a href="javascript:void(0);" onClick="resetpw('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_mmcz ">密码</a>
										<a href="index.php?m=train_member&c=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth mt5">修改</a>
										<a href="index.php?m=train_member&c=member_log&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_new_c_rz mt5">日志</a>
										<a href="javascript:void(0);" onClick="layer_del('确定要删除？','index.php?m=train_member&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc mt5">删除</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
                                    <td colspan="14"><label for="chkAll2">全选</label> &nbsp;
                                        <input class="admin_button" type="button" name="delsub" value="删除所选" onclick="return really('del[]')" />
                                        <input class="admin_button" type="button" name="delsub" value="批量审核" onClick="audall();" />
                                        <input class="admin_button" type="button" name="delsub" value="批量选择分站" onClick="checksiteall('index.php?m=train_member&c=checksitedid');" /> <?php if ($_smarty_tpl->tpl_vars['email_promiss']->value) {?>
                                        <input class="admin_button" type="button" value="发邮件" onclick="return confirm_email('确定发邮件吗？','email_div')" /> <?php }?> <?php if ($_smarty_tpl->tpl_vars['moblie_promiss']->value) {?>
                                        <input class="admin_button" type="button" value="发信息" onclick="return confirm_email('确定发信息吗？','moblie_div')" /> <?php }?> </td>
                                </tr>
								<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
									<tr>
										<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
											<td colspan="3"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
											<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
											<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php }?>
										<td colspan="12" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
									</tr>
								<?php }?>
								
                            </tbody>

                        </table>
                        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                    </form>
                </div>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo '<script'; ?>
 type="text/javascript">
            layui.use(['layer', 'form'], function() {
                var layer = layui.layer,
                    form = layui.form,
                    $ = layui.$;
            });

			$(document).ready(function(){
				$.get("index.php?m=train_member&c=pxNum", function(data) {
					var datas = eval('(' + data + ')');
					if(datas.pxAllNum) {
						$('.ajaxuserall').html(datas.pxAllNum);
					}
					if(datas.pxStatusNum1) {
						$('.pxStatusNum1').html(datas.pxStatusNum1);
					}
					if(datas.pxStatusNum2) {
						$('.pxStatusNum2').html(datas.pxStatusNum2);
					}
					if(datas.pxStatusNum3) {
						$('.pxStatusNum3').html(datas.pxStatusNum3);
					}
				});
			});
        <?php echo '</script'; ?>
>
    </body>

</html><?php }} ?>
