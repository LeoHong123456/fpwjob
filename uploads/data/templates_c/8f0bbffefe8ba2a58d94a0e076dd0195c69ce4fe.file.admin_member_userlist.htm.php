<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:47:10
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_member_userlist.htm" */ ?>
<?php /*%%SmartyHeaderCode:20233194525dbd428e30bd29-05740272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0bbffefe8ba2a58d94a0e076dd0195c69ce4fe' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_member_userlist.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20233194525dbd428e30bd29-05740272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'get_type' => 0,
    'total' => 0,
    'userrows' => 0,
    'key' => 0,
    'v' => 0,
    'moblie_promiss' => 0,
    'email_promiss' => 0,
    'source' => 0,
    'Dname' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd428e3e3d21_35135591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd428e3e3d21_35135591')) {function content_5dbd428e3e3d21_35135591($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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
            $(function() {
                $(".status").click(function() {
                    $("input[name=pid]").val($(this).attr("pid"));
                    var uid = $(this).attr("pid");
                    var status = $(this).attr("status");
                    $("#status" + status).attr("checked", true);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    $("input[name=uid]").val(uid);
                    $.get("index.php?m=user_member&c=lockinfo&uid=" + uid, function(msg) {
                        $("#alertcontent").val($.trim(msg));
                        status_div('锁定用户', '350', '240');
                    });
                });
                $(".check").click(function() {
                    $("input[name=pid]").val($(this).attr("pid"));
                    var uid = $(this).attr("pid");
                    var status = $(this).attr("status");
                    $("#state" + status).attr("checked", true);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    $("input[name=uid]").val(uid);
                    $.get("index.php?m=user_member&c=lockinfo&uid=" + uid, function(msg) {
                        $("#statusbody").val($.trim(msg));
                        $.layer({
                            type: 1,
                            title: '个人用户审核',
                            closeBtn: [0, true],
                            border: [10, 0.3, '#000', true],
                            area: ['390px', '240px'],
                            page: {
                                dom: "#info_div"
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
            <div class="" style=" margin-top:10px; ">
                <form class="layui-form" action="index.php?m=user_member&c=status" target="supportiframe" method="post" id="formstatus">
                    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                        <tr>
                            <th width="80">锁定操作：</th>
                            <td align="left">
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <div class="admin_examine_right">
                                            <input name="status" id="status1" value="1" title="正常" type="radio" />
                                            <input name="status" id="status2" value="2" title="锁定" type="radio" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>锁定说明：</th>
                            <td align="left"> <textarea id="alertcontent" name="lock_info" class="admin_explain_textarea"></textarea> </td>
                        </tr>
                        <tr>
                            <td colspan='2' align="center"><input type="submit" value='确认' class="admin_examine_bth">
                                <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></td>
                        </tr>
                        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input name="uid" value="0" type="hidden">
                    </table>
                </form>
            </div>
        </div>
        <div id="info_div" style="display:none; width: 390px; ">
            <div class="" style=" margin-top:10px; ">
                <form class="layui-form" action="index.php?m=user_member&c=ckstatus" target="supportiframe" method="post" id="formstatus">
                    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                        <tr>
                            <th width="80">审核操作：</th>
                            <td align="left">
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <input name="status" id="state0" value="0" title="未审核" type="radio" />
                                        <input name="status" id="state1" value="1" title="正常" type="radio" />
                                        <input name="status" id="state3" value="3" title="未通过" type="radio" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>审核说明：</th>
                            <td align="left"> <textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea> </td>
                        </tr>
                        <tr>
                            <td colspan='2' align="center">
                                <input type="submit" value='确认' class="admin_examine_bth">
                                <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
                            </td>
                        </tr>
                        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input name="uid" value="0" type="hidden">
                    </table>
                </form>
            </div>
        </div>
        <div class="infoboxp">
        	
        	<div class="tabs_info">
                <ul>
                    <li <?php if (!$_GET['c']) {?>class="curr" <?php }?>>
                        <a href="index.php?m=user_member">全部个人</a>
                    </li>
                    <li <?php if ($_GET['c']) {?>class="curr" <?php }?>>
                        <a href="index.php?m=user_member&c=writtenOffLog">解绑记录</a>
                    </li>
					<li>
                        <a href="index.php?m=user_member&c=member_log">会员日志</a>
                    </li>
                </ul>
            </div>
        	
            <div class="admin_new_tip">
                <a href="javascript:;" class="admin_new_tip_close"></a>
                <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                <div class="admin_new_tip_list_cont">
                    <div class="admin_new_tip_list">该页面展示了网站所有的个人会员信息，可对会员进行编辑修改操作。</div>
                    <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="admin_new_search_box">
                <form action="index.php" name="myform" method="get">
                    <input name="m" value="user_member" type="hidden" />
                    <div class="admin_new_search_name">搜索类型：</div>
                    <div class="admin_Filter_text formselect" did='dkeytype'>
                        <input type="button" <?php if ($_smarty_tpl->tpl_vars['get_type']->value['keytype']==''||$_smarty_tpl->tpl_vars['get_type']->value['keytype']=='1') {?> value="用户名" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='2') {?> value="姓名" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='3') {?> value="手机号" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='4') {?> value="EMAIL" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='5') {?> value="用户ID" <?php }?> class="admin_Filter_but" id="bkeytype">

                        <input type="hidden" name="type" id="keytype" <?php if ($_smarty_tpl->tpl_vars['get_type']->value['keytype']==''||$_smarty_tpl->tpl_vars['get_type']->value['keytype']=='1') {?> value="1" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='2') {?> value="2" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='3') {?> value="3" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='4') {?> value="4" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='5') {?> value="5" <?php }?>/>
                        <div class="admin_Filter_text_box" style="display:none" id="dkeytype">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('1','keytype','用户名')">用户名</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('2','keytype','姓名')">姓名</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('3','keytype','手机号')">手机号</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('4','keytype','EMAIL')">EMAIL</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('5','keytype','用户ID')">用户ID</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword' class="admin_new_text">
                    <input type="submit" value="搜索" name='search' class="admin_new_bth">
                    <a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
                    <a href="index.php?m=user_member&c=add" class="admin_new_cz_tj">+ 添加会员</a>
                </form>
                <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="clear"></div>

			<div class="admin_statistics">
            数据统计：
				<em class="admin_statistics_s">总数：<span class="ajaxuserall">0</span></em>
				<em class="admin_statistics_s">未审核：<span class="userStatusNum1">0</span></em>
				<em class="admin_statistics_s">未通过：<span class="userStatusNum2">0</span></em>
				<em class="admin_statistics_s">已锁定：<span class="userStatusNum3">0</span></em>
				搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
			</div>
			
			<div class="clear"></div>

            <div class="table-list">
                <div class="admin_table_border">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
                        <input name="m" value="user_member" type="hidden" />
                        <input name="c" value="del" type="hidden" />
                        <table width="100%">
                            <thead>
                                <tr class="admin_table_top">
                                    <th style="width:20px;">
										<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
									</th>
                                    <th align="left"> 
										<?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?>
											<a href="index.php?m=user_member&order=desc&t=uid">用户ID<img src="images/sanj.jpg" /></a>
										<?php } else { ?>
											<a href="index.php?m=user_member&order=asc&t=uid">用户ID<img src="images/sanj2.jpg" /></a> 
										<?php }?>
									</th>
                                    <th align="left">姓名/用户名</th>
                                    <th align="left">手机号/EMAIL</th>
									<th align="left"> 
										<?php if ($_GET['t']=="reg_date"&&$_GET['order']=="asc") {?>
											<a href="index.php?m=user_member&order=desc&t=reg_date">注册时间<img src="images/sanj.jpg" /></a> 
										<?php } else { ?>
											<a href="index.php?m=user_member&order=asc&t=reg_date">注册时间 <img src="images/sanj2.jpg" /></a> 
										<?php }?>
									</th>
                                    <th> 
										<?php if ($_GET['t']=="login_date"&&$_GET['order']=="asc") {?>
											<a href="index.php?m=user_member&order=desc&t=login_date">最近登录时间<img src="images/sanj.jpg" /></a> 
										<?php } else { ?>
											<a href="index.php?m=user_member&order=asc&t=login_date">最近登录时间 <img src="images/sanj2.jpg" /></a> 
										<?php }?>
									</th>
									<th>简历</th>
                                    <th>来源</th>
                                    <th>站点</th>
                                    <th>审核状态</th>
									<th >操作</th>
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
                                <tr <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg" <?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
                                    <td width="20"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" email="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
" moblie="<?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
" style="margin-left:5px;;" /></td>

                                    <td align="left" class="td1" style="width:60px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                                    
									<td align="left">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                                        <div class="mt5">
                                            <a href="index.php?m=user_member&c=Imitate&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a> 
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><img src="../config/ajax_img/suo.png" alt="已锁定" width="15"><?php }?> 
										</div>
                                    </td>
                                    <td align="left">
                                        <div>
                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['moblie']) {?>
												<span class="admin_new_sj"><?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
</span> 
												<?php if ($_smarty_tpl->tpl_vars['moblie_promiss']->value) {?>
													<a onClick="send_moblie('<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
');" style="color:green; cursor:pointer;">发信息</a> 
												<?php }?> 
											<?php }?>
                                        </div>
                                        <div>
                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['email']) {?>
												<span class="admin_new_yx"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</span> 
												<?php if ($_smarty_tpl->tpl_vars['email_promiss']->value) {?>
													<a onClick="send_email('<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
');" style="color:green; cursor:pointer;">发邮件</a>
												<?php }?>
											<?php }?>
                                        </div>
                                    </td>
                                    <td class="td" align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reg_date'],"%Y-%m-%d");?>
</td>
									
									<td align="center">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['login_date']!='') {?>
											<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['login_date'],"%Y-%m-%d");?>
 
										<?php } else { ?>
											<font color="#FF0000">从未登录</font>
										<?php }?>
									</td>
                                    
									<td align="center">
                                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['resumenum']=='1') {?>
											<div class="mt5">
												<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.resumeid`','look'=>'admin'),$_smarty_tpl);?>
" class="admin_cz_sc" target="_blank">预览简历</a>
											</div>
										<?php } else { ?>
											<a href="index.php?m=admin_resume&c=addresume&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_cz_sc">添加简历</a>
										<?php }?>
                                    </td>
                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['source']->value[$_smarty_tpl->tpl_vars['v']->value['source']];?>
</td>
                                    <td align="center">
                                        <div><?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['v']->value['did']];?>
</div>
                                        <div class="mt5">
                                            <a href="javascript:;" onclick="checksite('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=user_member&c=checksitedid');" class="admin_cz_sc">重新分配</a>
                                        </div>
                                    </td>

                                    <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']=='1') {?><span class="admin_com_Audited">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']=='2') {?><span class="admin_com_Lock">已锁定</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']=='3') {?><span class="admin_com_tg">未通过</span><?php } else { ?><span class="admin_com_noAudited">未审核</span><?php }?></td>
                                     
                                    <td width="180">
										<a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsh check" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
">审核</a>
										<a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsd status" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
">锁定</a>
										<a href="index.php?m=user_member&c=member_log&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_new_c_rz">日志</a>
 										<a href="index.php?m=user_member&c=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_n_sc mt5">修改</a>
										<a href="javascript:void(0);" onClick="resetpw('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_mmcz mt5">密码</a>
										<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=user_member&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
                                         
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
                                    <td colspan="12"><label for="chkAll2">全选</label> &nbsp;
                                        <input class="admin_button" type="button" name="delsub" value="删除所选" onclick="return really('del[]')" /> <?php if ($_smarty_tpl->tpl_vars['email_promiss']->value) {?>
                                        <input class="admin_button" type="button" value="发邮件" onclick="return confirm_email('确定发邮件吗？','email_div')" /> <?php }?> <?php if ($_smarty_tpl->tpl_vars['moblie_promiss']->value) {?>
                                        <input class="admin_button" type="button" value="发信息" onclick="return confirm_email('确定发信息吗？','moblie_div')" /> <?php }?>
                                        <input class="admin_button" type="button" name="delsub" value="批量选择分站" onClick="checksiteall('index.php?m=user_member&c=checksitedid');" />
                                    </td>
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
										<td colspan="10" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
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
        <?php echo '<script'; ?>
 type="text/javascript">
            layui.use(['layer', 'form'], function() {
                var layer = layui.layer,
                    form = layui.form,
                    $ = layui.$;
            });
			$(document).ready(function(){
				$.get("index.php?m=user_member&c=userNum", function(data) {
					var datas = eval('(' + data + ')');
					if(datas.userAllNum) {
						$('.ajaxuserall').html(datas.userAllNum);
					}
					if(datas.userStatusNum1) {
						$('.userStatusNum1').html(datas.userStatusNum1);
					}
					if(datas.userStatusNum2) {
						$('.userStatusNum2').html(datas.userStatusNum2);
					}
					if(datas.userStatusNum3) {
						$('.userStatusNum3').html(datas.userStatusNum3);
					}
				});
			});
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </body>

</html><?php }} ?>
