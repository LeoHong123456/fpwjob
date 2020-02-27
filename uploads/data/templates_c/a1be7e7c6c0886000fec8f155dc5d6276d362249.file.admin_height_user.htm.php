<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:57:23
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_height_user.htm" */ ?>
<?php /*%%SmartyHeaderCode:722216915e4c87f3626a51-05802424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1be7e7c6c0886000fec8f155dc5d6276d362249' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_height_user.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722216915e4c87f3626a51-05802424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'total' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c87f36c1d03_13156827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c87f36c1d03_13156827')) {function content_5e4c87f36c1d03_13156827($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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

        <link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <title>后台管理</title>
    </head>

    <body class="body_ifm">
        <div id="infobox2" style="display:none; width: 390px; ">

            <form class="layui-form" action="index.php?m=height_user&c=status" target="supportiframe" method="post" id="formstatus">
                <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                    <tr>
                        <th width="80">审核操作：</th>
                        <td align="left">
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input name="status" id="status1" value="1" title="未审核" type="radio" />
                                    <input name="status" id="status2" value="2" title="正常" type="radio" />
                                    <input name="status" id="status3" value="3" title="未通过" type="radio" />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>审核说明：</th>
                        <td><textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan='2' align="center"> <input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
                            <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
                    </tr>
                </table>
                <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                <input name="pid" value="0" type="hidden">
            </form>

        </div>

        <div class="infoboxp">

            <div class="admin_new_tip">
                <a href="javascript:;" class="admin_new_tip_close"></a>
                <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                <div class="admin_new_tip_list_cont">
                    <div class="admin_new_tip_list">该页面展示了网站所有的高级人才管理信息，可对高级人才进行审核，删除操作。</div>
                    <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="admin_new_search_box">
                <form action="index.php" name="myform" method="get">
                    <input name="m" value="height_user" type="hidden" />
                    <input type="hidden" name="searchsalary" value="<?php echo $_GET['searchsalary'];?>
" />
                    <input type="hidden" name="searchtype" value="<?php echo $_GET['searchtype'];?>
" />
                    <input type="hidden" name="searchreport" value="<?php echo $_GET['searchreport'];?>
" />
                    <input type="hidden" name="rec" value="<?php echo $_GET['rec'];?>
" />
                    <input type="hidden" name="status" value="<?php echo $_GET['status'];?>
" />
                    <div class="admin_new_search_name">搜索类型：</div>
                    <div class="admin_Filter_text formselect" did='dsearchrname'>
                        <input type="button" value="<?php if ($_GET['searchrname']=='1'||$_GET['searchrname']=='') {?>用户名<?php } else { ?>简历名称<?php }?>" class="admin_Filter_but" id="bsearchrname">
                        <input type="hidden" id='searchrname' value="<?php if ($_GET['searchrname']) {
echo $_GET['searchrname'];
} else { ?>1<?php }?>" name='searchrname'>
                        <div class="admin_Filter_text_box" style="display:none" id='dsearchrname'>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('1','searchrname','用户名')">用户名</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('2','searchrname','简历名称')">简历名称</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input class="admin_Filter_search" type="text" name="keyword" size="25" />
                    <input class="admin_Filter_bth" type="submit" name="news_search" value="检索" />

                    <a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
                </form>

                <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="clear"></div>

			<div class="admin_statistics">
				总数：<span class="ajaxresumeall">0</span>；
				未审核：<span class="ajaxresumestatus1">0</span>；
				未通过：<span class="ajaxresumestatus2">0</span>；
				已锁定：<span class="ajaxresumestatus3">0</span>；
				搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
			</div>

            <div class="table-list">
                <div class="admin_table_border">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
                        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input name="m" value="height_user" type="hidden" />
                        <input name="c" value="del" type="hidden" />
                        <table width="100%">
                            <thead>
                                <tr class="admin_table_top">
                                    <th width="3%">
										<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
									</th>
                                    <th width="8%"> <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'height_user','untype'=>'order,t'),$_smarty_tpl);?>
">简历编号<img src="images/sanj.jpg" /></a> <?php } else { ?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'height_user','untype'=>'order,t'),$_smarty_tpl);?>
">简历编号<img src="images/sanj2.jpg" /></a> <?php }?> </th>
                                    <th align="left" width="8%">用户名</th>
                                    <th align="left" width="150">简历名称</th>
                                    <th align="left" width="200">意向职位</th>
                                    <th>工作地点</th>
                                    <th>待遇要求</th>
                                    <th>工作性质</th>
                                    <th>到岗时间</th>
                                    <th>审核状态</th>
                                    <th>推荐</th>
                                    <th> <?php if ($_GET['t']=="time"&&$_GET['order']=="asc") {?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'time','m'=>'height_user','untype'=>'order,t'),$_smarty_tpl);?>
">审核时间<img src="images/sanj.jpg" /></a> <?php } else { ?>
                                        <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'time','m'=>'height_user','untype'=>'order,t'),$_smarty_tpl);?>
">审核时间<img src="images/sanj2.jpg" /></a> <?php }?> </th>
                                    <th class="admin_table_th_bg">操作</th>
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
                                <tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg" <?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                    <td><input type="checkbox" class="check_all" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
                                    <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
                                    <td class="gd" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                                    <td class="ud" align="left">
                                        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.id`','type'=>2,'look'=>'admin'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                                    </td>
                                    <td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
</td>
                                    <td class="gd"><?php echo $_smarty_tpl->tpl_vars['v']->value['city_class_name'];?>
</td>
                                    <td class="td"><?php if ($_smarty_tpl->tpl_vars['v']->value['minsalary']&&$_smarty_tpl->tpl_vars['v']->value['maxsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['v']->value['maxsalary'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
以上<?php } else { ?>面议<?php }?></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['type_n'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['report_n'];?>
</td>
                                    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['height_status']==2) {?><span class="admin_com_Audited">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['height_status']==1) {?><span class="admin_com_noAudited">未审核</span><?php } else { ?><span class="admin_com_tg">未通过</span><?php }?></td>
                                    <td id="rec<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['rec']=="1") {?>
                                        <a href="javascript:void(0);" onClick="rec_up('index.php?m=height_user&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','rec');"><img src="../config/ajax_img/doneico.gif"></a><?php } else { ?>
                                        <a href="javascript:void(0);" onClick="rec_up('index.php?m=height_user&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','rec');"><img src="../config/ajax_img/errorico.gif"></a><?php }?> </td>
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['status_time'],"%Y-%m-%d");?>
</td>
                                    <td>
                                        <a href="javascript:void(0);" class="status admin_new_c_bth admin_new_c_bthsh" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['height_status'];?>
">审核</a>
                                        <div class=" mt5">
                                            <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.id`','type'=>2,'look'=>'admin'),$_smarty_tpl);?>
" class="admin_new_c_bth admin_new_c_bth_yl" target="_blank"> 预览</a>
                                        </div>
                                        <div class=" mt5">
                                            <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=height_user&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
                                    <td colspan="13">
                                        <label for="chkAll2">全选</label>&nbsp;
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
										<td colspan="11" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
									</tr>
								<?php }?>
                            </tbody>

                        </table>
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
                    $("input[name=pid]").val(codewebarr);
                    $("#statusbody").val('');
                    $("input[name='status']").attr('checked', false);
                    $.layer({
                        type: 1,
                        title: '批量审核',
                        closeBtn: [0, true],
                        border: [10, 0.3, '#000', true],
                        area: ['390px', '240px'],
                        page: {
                            dom: "#infobox2"
                        }
                    });
                }
            }
            $(function() {
                $(".status").click(function() {
                    var pid = $(this).attr("pid");
                    var status = $(this).attr("status");
                    $("#status" + status).attr("checked", true);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    $("input[name=pid]").val(pid);
                    var pytoken = $("#pytoken").val();
                    $.post("index.php?m=height_user&c=lockinfo", {
                        pytoken: pytoken,
                        pid: pid
                    }, function(msg) {
                        $("#statusbody").val(msg);
                        $.layer({
                            type: 1,
                            title: '审核',
                            closeBtn: [0, true],
                            border: [10, 0.3, '#000', true],
                            area: ['390px', '240px'],
                            page: {
                                dom: "#infobox2"
                            }
                        });
                    });
                });
            });
			$(document).ready(function(){
				$.get("index.php?m=height_user&c=gresumeNum", function(data) {
					var datas = eval('(' + data + ')');
					if(datas.resumeAllNum) {
						$('.ajaxresumeall').html(datas.resumeAllNum);
					}
					if(datas.resumeStatusNum1) {
						$('.ajaxresumestatus1').html(datas.resumeStatusNum1);
					}
					if(datas.resumeStatusNum2) {
						$('.ajaxresumestatus2').html(datas.resumeStatusNum2);
					}
					if(datas.resumeStatusNum3) {
						$('.ajaxresumestatus3').html(datas.resumeStatusNum3);
					}
				});
			});
        <?php echo '</script'; ?>
>
    </body>

</html><?php }} ?>
