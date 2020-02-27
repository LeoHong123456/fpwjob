<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:38:32
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_com_cert.htm" */ ?>
<?php /*%%SmartyHeaderCode:11011646045e48ff886e3608-33932909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8ba92d9290ac5f73f3a8bd8b29992134575d13e' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_com_cert.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11011646045e48ff886e3608-33932909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'total' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e48ff88793431_74522452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e48ff88793431_74522452')) {function content_5e48ff88793431_74522452($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
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
"><?php echo '</script'; ?>
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

        <link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <title>后台管理</title>
    </head>

    <body class="body_ifm">
        <div class="infoboxp">

            <div class="admin_new_tip">
                <a href="javascript:;" class="admin_new_tip_close"></a>
                <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                <div class="admin_new_tip_list_cont">
                    <div class="admin_new_tip_list">该页面展示了网站所有的企业认证管理，可对企业认证进行审核删除操作。</div>
                    <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="admin_new_search_box">
                <form action="index.php" method="get" name="myform">
                    <input type="hidden" name="m" value="comcert" />
                    <div class="admin_new_search_name">关键字：</div>
                    <input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword' class="admin_new_text">
                    <input type="submit" value="搜索" name='search' class="admin_new_bth">
                    <a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
                </form>

                <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="clear"></div>
			
			<div class="admin_statistics">
            数据统计：
				<em class="admin_statistics_s">总数：<span class="ajaxComCertAll">0</span></em>
				<em class="admin_statistics_s">未审核：<span class="ajaxComCert1">0</span></em>
				<em class="admin_statistics_s">未通过：<span class="ajaxComCert2">0</span></em>
				搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
 			</div>

            <div class="table-list">
                <div class="admin_table_border">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form action="index.php?m=<?php echo $_GET['m'];?>
&c=del" name="myform" method="post" target="supportiframe" id='myform'>
                        <table width="100%">
                            <thead>
                                <tr class="admin_table_top">
                                    <th style="width:20px;">
										<label for="chkall">
											<input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
										</label>
									</th>
                                    <th> <?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'uid','m'=>'comcert','untype'=>'order,t'),$_smarty_tpl);?>
">用户ID<img src="images/sanj.jpg" /></a> <?php } else { ?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'uid','m'=>'comcert','untype'=>'order,t'),$_smarty_tpl);?>
">用户ID<img src="images/sanj2.jpg" /></a> <?php }?> </th>
                                    <th align="left">公司名称</th>
                                    <th>查看</th>
                                    <th> <?php if ($_GET['t']=="ctime"&&$_GET['order']=="asc") {?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'ctime','m'=>'comcert','untype'=>'order,t'),$_smarty_tpl);?>
">申请时间<img src="images/sanj.jpg" /></a> <?php } else { ?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'ctime','m'=>'comcert','untype'=>'order,t'),$_smarty_tpl);?>
">申请时间<img src="images/sanj2.jpg" /></a> <?php }?> </th>
                                    <th>状态</th>
                                    <th width="150">操作</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg" <?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
                                    <td><input type="checkbox" class="check_all" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
                                    <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</span></td>
                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                                    <td>
                                        <div class="admin_table_w84"><?php if ($_smarty_tpl->tpl_vars['v']->value['check']) {?>
                                            <a href="javascript:void(0)" class="preview layui-btn layui-btn-small" url="<?php echo $_smarty_tpl->tpl_vars['v']->value['check'];?>
">点击查看</a><?php } else { ?>无<?php }?></div>
                                    </td>
                                    <td class="td" width="100"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d");?>
</td>
                                    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><span class="admin_com_Audited">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==0) {?><span class="admin_com_noAudited">未审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><span class="admin_com_tg">未通过</span><?php }?></td>
                                    <td>
                                        <a href="javascript:;" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" url="<?php echo $_smarty_tpl->tpl_vars['v']->value['check'];?>
" jgdm="<?php echo $_smarty_tpl->tpl_vars['v']->value['jgdm'];?>
" comname="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
" class="admin_new_c_bth admin_new_c_bth_yl status">审核</a>
                                        <a href="javascript:;" onClick="layer_del('确定要删除？','index.php?m=comcert&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
                                    <td colspan="8"><label for="chkAll2">全选</label>
                                        <input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /> &nbsp;&nbsp;
                                        <input class="admin_button" type="button" name="delsub" value="批量审核" onClick="audall();" /></td>
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
										<td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
									</tr>
								<?php }?>
                            </tbody>

                        </table>
                        <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                    </form>
                </div>
            </div>
        </div>
        <div id="preview" style="display:none;width:450px ">
            <div style="height:380px; overflow:auto;width:450px;">

                <form class="layui-form" name="formstatus" id="formstatus" action="index.php?m=comcert&c=status" target="supportiframe" method="post" onSubmit="return tcdiv('formstatus');">
                    <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">

                    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                        <tr>
                            <th>公司名称：</th>
                            <td align="left"><span id="comname"></span></td>
                        </tr>
                        <tr>
                            <tr>
                                <th>认证图片：</th>
                                <td align="left">
                                    <div class="job_box_div" style="float:left;border:1px solid #eee;"></div>
                                    <a target="_blank" href="" id='preview_url' style="line-height:70px; padding-left:10px;">查看原图</a>
                                </td>
                            </tr>
                            <tr>
                                <th width="80">审核操作：</th>
                                <td align="left">
                                    <div class="layui-form-item">
                                        <div class="layui-input-block">
                                            <input name="status" id="plstatus0" value="0" title="未审核" type="radio" />
                                            <input name="status" id="plstatus1" value="1" title="正常" type="radio" />
                                            <input name="status" id="plstatus2" value="2" title="未通过" type="radio" />
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['com_free_status']=='1') {?>
                            <tr>
                                <th width="80">同步操作：</th>
                                <td align="left">
                                    <div class="layui-form-item">
                                        <div class="layui-input-block">
                                            <input name="job_status" value="1" title="审核" type="checkbox" />
                                            	【说明：所有未审核职位同步审核成功】
                                     	</div>
                                    </div>
                                </td>
                            </tr>
                            <?php }?>

                            <tr>
                                <th>审核说明：</th>
                                <td align="left"> <textarea id="alertcontent" name="statusbody" class="admin_explain_textarea"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan='2' align="center">
                                    <div class="admin_Operating_sub"> <input type="submit" value='确认' class="admin_examine_bth"> <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
                                </td>
                            </tr>

                    </table>
                    <input name="uid" value="0" type="hidden">
                </form>

            </div>
        </div>
        <div id="infobox2" style="display:none; width: 400px; ">
            <div id="infobox">
                <form class="layui-form" action="index.php?m=comcert&c=status" target="supportiframe" method="post" id="formstatus" onSubmit="return tcdiv('formstatus');">
                    <table cellspacing='1' cellpadding='1' class="admin_examine_table" width="400px;">
                        <tr style="width:370px;">
                            <th width="90" style="float:left;padding-top:10px;">审核操作：</th>
                            <td align="left">
                               
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <div class="admin_examine_right" style="width:280px;">
                                            <input name="status" id="status0" value="0" title="未审核" type="radio" />
                                            <input name="status" id="status1" value="1" title="正常" type="radio" />
                                            <input name="status" id="status2" value="2" title="未通过" type="radio" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="90">审核说明：</th>
                            <td align="left"> <textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea>
                        </tr>
                        <tr>
                            <td colspan='2' align="center">
                                <input type="submit" value='确认' class="admin_examine_bth">
                                <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
                        </tr>
                        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input name="uid" value="0" type="hidden">
                    </table>
                </form>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            layui.use(['layer', 'form', 'element'], function() {
                var layer = layui.layer,
                    form = layui.form,
                    element = layui.element,
                    $ = layui.$;

            });

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
                    $.layer({
                        type: 1,
                        title: '批量审核',
                        closeBtn: [0, true],
                        offset: ['100px', ''],
                        border: [10, 0.3, '#000', true],
                        area: ['420px', '250px'],
                        page: {
                            dom: "#infobox2"
                        }
                    });
                }
            }
             
            $(function() {
                $(".status").click(function() {
                    var uid = $(this).attr("uid");
                    var url = $(this).attr("url");
                    var comname = $(this).attr("comname");
                    var status = $(this).attr("status");
                    preview(url, uid, status, comname);
                });
            });

            function preview(url, uid, status, comname) {
                $(".job_box_div").html("<img src='" + url + "' style='width:180px;height:70px' />");
                $("#preview_url").attr("href", url);
                var pytoken = $('#pytoken').val();
                $("#plstatus" + status).attr("checked", true);
                layui.use(['form'], function() {
                    var form = layui.form;
                    form.render();
                });
                $("#comname").html(comname);
                $("input[name=uid]").val(uid);
                $.post("index.php?m=comcert&c=sbody", {
                    uid: uid,
                    pytoken: pytoken
                }, function(msg) {
                    $("#alertcontent").val(msg);
                });
                $.layer({
                    type: 1,
                    title: '查看图片',
                    closeBtn: [0, true],
                    offset: ['80px', ''],
                    border: [10, 0.3, '#000', true],
                    area: ['450px', 'auto'],
                    page: {
                        dom: '#preview'
                    }
                });
            }
            $(document).ready(function() {
                $(".preview").click(function() {
                    var pic_url = $(this).attr('url');
                    layer.page("<img src=" + pic_url + " style='width:500px;height:500px;' >",
                        '查看企业营业执照', ['500px', '500px'], 'auto', {
                            maxmin: true
                        }
                    );

                });
					
				$.get("index.php?m=comcert&c=comCertNum", function(data) {
					var datas = eval('(' + data + ')');
					if(datas.comCertAll) {
						$('.ajaxComCertAll').html(datas.comCertAll);
					}
					if(datas.comCert1) {
						$('.ajaxComCert1').html(datas.comCert1);
					}
					if(datas.comCert2) {
						$('.ajaxComCert2').html(datas.comCert2);
					}
				});


            });

            function tcdiv(name) {
                parent.layer.load('执行中，请稍后...', 0);
            }
        <?php echo '</script'; ?>
>
    </body>

</html><?php }} ?>
