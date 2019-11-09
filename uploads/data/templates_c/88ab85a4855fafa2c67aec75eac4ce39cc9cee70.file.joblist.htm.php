<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:44:17
         compiled from "/www/fpwjob/uploads/app/template/member/com/joblist.htm" */ ?>
<?php /*%%SmartyHeaderCode:17386394385dc51cd17737c0-41339327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88ab85a4855fafa2c67aec75eac4ce39cc9cee70' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/joblist.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17386394385dc51cd17737c0-41339327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'w1' => 0,
    'w0' => 0,
    'w3' => 0,
    'w4' => 0,
    'w5' => 0,
    'audit' => 0,
    'config' => 0,
    'rows' => 0,
    'job' => 0,
    'addjobnum' => 0,
    'pagenav' => 0,
    'statis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51cd1825805_40050307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51cd1825805_40050307')) {function content_5dc51cd1825805_40050307($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class=right_box>
            <div class=admincont_box>

                <div class="yun_com_tit">
                    <span class="yun_com_tit_s">职位管理</span>
                </div>

                <div class="job_list_tit">
                    <ul class="">
                        <li <?php if ($_GET['w']=="1") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=job&w=1">招聘中的职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w1']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w1']->value;?>
)<?php }?></span></a>
                        </li>

                        <li <?php if ($_GET['w']=="0") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=job&w=0">待审核职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w0']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w0']->value;?>
)<?php }?></span></a>
                        </li>

                        <li <?php if ($_GET['w']=="3") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=job&w=3">未通过职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w3']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w3']->value;?>
)<?php }?></span></a>
                        </li>

                        <li <?php if ($_GET['w']=="4") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=job&w=4">已下架职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w4']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w4']->value;?>
)<?php }?></span></a>
                        </li>

                        <li <?php if ($_GET['w']=="5") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=job&w=5">所有职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w5']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w5']->value;?>
)<?php }?></span></a>
                        </li>
                    </ul>
                </div>

                <div class="com_body">

                    <div class="clear"></div>
                    <?php if ($_smarty_tpl->tpl_vars['audit']->value>0) {?>
                    <div class="admin_new_tip mt20">
                        <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                        <div class="admin_new_tip_list_cont">
                            <div class="admin_new_tip_list">
                                你有
                                <font color="#FF0000"><?php echo $_smarty_tpl->tpl_vars['audit']->value;?>
</font> 个待审核职位，我们将在24小时内审核，如需马上审核，请联系客服：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webtel'];?>

                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <div class="clear"></div>

                    <div class="joblist_search">
                        <form action="index.php" method="get">
                            <div class="joblist_search_box">
                                <input name="c" type="hidden" value="job">
                                <input name="w" type="hidden" value="1">
                                <input name="keyword" type="text" class="joblist_search_box_text" placeholder="请输入职位关键字">
                                <input name="" type="submit" class="joblist_search_bth" value=" ">
                            </div>
                        </form>
                    </div>

                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form action="index.php?c=job&act=opera" target="supportiframe" method="post" id='myform'>

                        <div class="clear"></div>
                        <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
                        <div class="yun_m_joblist">

                            <div class="yun_m_joblistcheckboxbox">
                                <input type="checkbox" name="checkboxid[]" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="com_job_list_check">
                            </div>

                            <div class="yun_m_jobname">
                                <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.id`'),$_smarty_tpl);?>
" class="yun_m_jobname_a" target="_blank"><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</a>
                                <i class="job_share">
								<div class="job_share_img" style="display:none">
									<img src="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','a'=>'qrcode','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" width="130" height="130"/>
								</div>
							</i>
                            </div>

                            <div class="yun_m_joblist_left">

                                <div class="yun_m_joblist_left_p">
                                    状态：<span class="yun_m_joblist_left_zt">招聘中</span>
                                    <span class="yun_m_joblist_left_eye">被浏览：<?php echo $_smarty_tpl->tpl_vars['job']->value['jobhits'];?>
</span>
                                </div>
                                <div class="yun_m_joblist_left_p">
                                    应聘简历：<?php echo $_smarty_tpl->tpl_vars['job']->value['jobnum'];?>

                                    <a href="index.php?c=hr&jobid=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['type'];?>
">查看</a>
                                </div>
                                <div class="yun_m_joblist_left_p"> 更新日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],'%Y-%m-%d');?>
 </div>

                            </div>

                            <div class="yun_m_joblist_gxtime"> 更新日期<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],'%Y-%m-%d');?>
 </div>

                            <div class="yun_m_joblist_cont">

                                <div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['rec_time']>time()&&$_smarty_tpl->tpl_vars['job']->value['rec']==1) {?>yun_m_joblist_extension_cur<?php }?> yun_m_joblist_extension_cur_hov" dtype="rec" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
                                    <i class="yun_m_joblist_extension_icon"></i>
                                    <i class="yun_m_joblist_tip_icon"></i>
                                    <div class="yun_m_joblist_extension_p">推荐</div>
                                    <a href="javascript:void(0);" onclick="rec('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['rec']=='1'&&$_smarty_tpl->tpl_vars['job']->value['rec_time']>time()) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['rec_time'],'%Y-%m-%d');
} else { ?>0<?php }?>')" class="yun_m_joblist_extension_bth"></a>
                                </div>

                                <div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()&&$_smarty_tpl->tpl_vars['job']->value['urgent']==1) {?> yun_m_joblist_extension_cur<?php }?>" dtype="urgent" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
                                    <i class="yun_m_joblist_extension_icon yun_m_joblist_extension_icon_urgent"></i>
                                    <i class="yun_m_joblist_tip_icon"></i>
                                    <div class="yun_m_joblist_extension_p">紧急</div>
                                    <a href="javascript:void(0);" onclick="urgent('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['urgent']=='1'&&$_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['urgent_time'],'%Y-%m-%d');
} else { ?>0<?php }?>')" class="yun_m_joblist_extension_bth"></a>
                                </div>

                                <div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['xsdate']>time()&&$_smarty_tpl->tpl_vars['job']->value['xsdate']) {?>yun_m_joblist_extension_cur<?php }?>" dtype="jingjia" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
                                    <i class="yun_m_joblist_extension_icon yun_m_joblist_extension_icon_zd"></i>
                                    <i class="yun_m_joblist_tip_icon"></i>
                                    <div class="yun_m_joblist_extension_p">置顶</div>
                                    <a href="javascript:void(0);" onclick="jingjia('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['xs']=='1'&&$_smarty_tpl->tpl_vars['job']->value['xsdate']>time()) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['xsdate'],'%Y-%m-%d');
} else { ?>0<?php }?>');" class="yun_m_joblist_extension_bth"></a>
                                </div>

                                <div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['rewardpack']==1) {?>yun_m_joblist_extension_cur<?php }?>" dtype="reward" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
                                    <i class="yun_m_joblist_extension_icon yun_m_joblist_extension_icon_reward"></i>
                                    <i class="yun_m_joblist_tip_icon"></i>
                                    <div class="yun_m_joblist_extension_p">悬赏</div>
                                    <a href="javascript:void(0);" onclick="rewardlistpay('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="yun_m_joblist_extension_bth"></a>
                                </div>

                                <div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['autotime']>time()) {?>yun_m_joblist_extension_cur<?php }?>" dtype="autojob" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
                                    <i class="yun_m_joblist_extension_icon yun_m_joblist_extension_icon_sx"></i>
                                    <i class="yun_m_joblist_tip_icon"></i>
                                    <div class="yun_m_joblist_extension_p">自动刷新</div>
                                    <a href="javascript:void(0);" onclick="autojobs('','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['autotime']>time()) {
echo $_smarty_tpl->tpl_vars['job']->value['autodate'];
}?>');" class="yun_m_joblist_extension_bth"></a>
                                </div>

                                <div class="yun_m_joblist_tip" id="tip<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">职位推荐，显著提高浏览量更多用户看得见！</div>

                            </div>

                            <div class="yun_m_joblist_right">
                                <a href="javascript:void(0)" onclick="refreshJob('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="yun_m_joblist_right_a">刷新</a>

                                <?php if ($_smarty_tpl->tpl_vars['job']->value['status']=="1") {?>
                                <a href="javascript:onstatus('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','2');" class="yun_m_joblist_right_a">上架</a>
                                <?php } else { ?>
                                <a href="javascript:onstatus('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','1');" class="yun_m_joblist_right_a">下架</a>
                                <?php }?>

                                <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.id`'),$_smarty_tpl);?>
" target="_blank" title="预览" class="yun_m_joblist_right_a">预览</a>

                                <a href="index.php?c=jobadd&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="yun_m_joblist_right_a">修改</a>

                                <a href="javascript:void(0)" onclick="layer_del('确定要删除该职位？', 'index.php?c=job&act=opera&del=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="yun_m_joblist_right_a">删除</a>

                                <div class="yun_m_joblist_right_resume">
                                    <a href="index.php?c=likeresume&jobid=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"> 自动匹配简历>></a>
                                </div>
                            </div>
                        </div>

                        <?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
                        <div class="com_msg_no">
                            <p>亲爱的用户，目前您还没有招聘中的职位信息</p>
                            <a href="javascript:;" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="com_msg_no_bth com_submit">发布职位</a>
                        </div>
                        <?php } ?> <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                        <div class="com_Release_job_bot mt10">
                            <span class="com_Release_job_qx">
								<input id='checkAll' type="checkbox" onclick='m_checkAll(this.form)' class="com_Release_job_qx_check">全选
							</span>

                            <!-- <input class="c_btn_02 c_btn_02_w110" type="button" value="批量延长有效期" onclick="allgotime();"> -->
                            <input class="c_btn_02 c_btn_02_w110" type="button" value="批量自动刷新" onclick="return autojobs('checkboxid[]');">
                            <input class="c_btn_02 c_btn_02_w110" type="button" value="批量刷新职位" onclick="return RefreshSelectJob('checkboxid[]');">
                            <input class="c_btn_02 c_btn_02_w110" type="button" value="一键下架招聘" onclick="return allonstatus('checkboxid[]');">
                            <input class="c_btn_02 c_btn_02_w110" type="button" value="批量删除职位" onclick="return really('checkboxid[]');">
                        </div>
                        <input type="hidden" id="autodj" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
" />
                        <input type="hidden" id="refreshjobids" value="" /> <?php }?>
                    </form>

                    <div class="clear"></div>
                    <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>

                    <div class="wxts_box wxts_box_mt30">
                        <div class="wxts">温馨提示：</div>
                        1、 贵公司还可以发布（<span class="f60"><?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>time()||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']=="0") {
if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==1) {
echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];
} else { ?>不限<?php }
} else { ?>0<?php }?></span>）条职位信息<br> 2、如贵公司要快速招聘人才，建议成为我们的会员，获取更多的展示机会，以帮助您快速找到满意的人才。
                        <a href="index.php?c=right" class="wxts_sj">立即升级</a> <br> 3、请贵公司保证职位信息的真实性、合法性，并及时更新职位信息，如被举报或投诉，确认发布的信息违反相关规定后，本站将会关闭贵公司的招聘服务，敬请谅解！ <br> 4、参加紧急的招聘职位;我们将在首页紧急招聘 模块显示，并有紧急图标显示。<br> 5、参加自动刷新的招聘职位;使招聘职位信息置于列表前端，更有利于吸引客户的注意
                        <br> 6、参加置顶服务的招聘职位；我们将在首页列表模块显示 ！
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
	
	var sxdj = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
';
 	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
 	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';
	
    //批量刷新职位
    function RefreshSelectJob(name) {

        var chk_value = [];
        var i = 0;
        $('input[name="' + name + '"]:checked').each(function() {
            chk_value.push($(this).val());
            i++;
        });

        if(chk_value.length == 0) {
            layer.msg("请选择要刷新的职位！", 2, 8);
            return false;
        } else {

            $("#refreshjobids").val(chk_value);
            var jobid = $("#refreshjobids").val();

            var breakjob_num = '<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
';
            var num = accSub(chk_value.length, breakjob_num);
            var sxneed = accMul(sxdj, num);

            if(online == 3) {
                var sxneed = accMul(sxneed, pro);
            }

            var ajaxUrl = weburl + "/member/index.php?c=job&act=refresh_job";

            $.post(ajaxUrl, {
                jobid: jobid
            }, function(data) {
                data = eval('(' + data + ')');
                if(data.error == 1) {
                    layer.msg(data.msg, 2, 9, function() {
                        window.location.href = 'index.php?c=job&w=1';
                    });
                } else if(data.error == 2) {

                    if(online == 3) {
                        var msg = '很抱歉，您的套餐已用完，继续操作将会消费 <span class="job_add_tck_bq_money">' + sxneed + ' </span>积分';
                    } else {
                        var msg = '很抱歉，您的套餐已用完，继续操作将会消费 <span class="job_add_tck_bq_money">' + sxneed + ' </span>元';
                    }

                    var msglayer = layer.open({
                        type: 1,
                        title: '刷新职位',
                        closeBtn: 1,
                        border: [10, 0.3, '#000', true],
                        area: ['550px', 'auto'],
                        content: $("#tcmsg")
                    });

                    $("#msg_show").html(msg);
                    $("#pay_jobid").val(chk_value);
                    $("#pay_need").val(sxneed);
					$("#btn_value").html('<a href="javascript:void(0);" onclick="onRefresh();">确定</a>');
                    
                } else {
                    if(data.url) {
                        layer.msg(data.msg, 2, 9, function() {
                            window.location.href = data.url;
                        });
                    } else {
                        layer.msg(data.msg, 2, 8);
                    }
                }
            });
        }
    }

    function allonstatus() {
        var allid = [];
        var i = 0;
        $('input[name="checkboxid[]"]:checked').each(function() {
            allid.push($(this).val());
            i++;
        });
        if(allid.length == 0) {
            layer.msg("请选择要下架的职位！", 2, 8);
            return false;
        } else {
            onstatus(allid, 1);
        }
    }

    function onstatus(id, status) { //上架 下架 设置
        $.post("index.php?c=job&act=opera", {
            id: id,
            status: status
        }, function(data) {
            if(data == 1) {
                layer.msg('设置成功！', 2, 9, function() {
                    window.location.reload();
                });
                return false;
            } else {
                layer.msg('设置失败！', 2, 8);
            }
        })
    }

    $(document).ready(function() {
        $(".job_share").hover(function() {

            var html = $(this).find('.job_share_img').html();
            layer.tips(html, this, {
                guide: 1,
                style: ['background-color:#5EA7DC;', '#5EA7DC']
            });
            $(".xubox_layer").addClass("xubox_tips_border");
        }, function() {
            layer.closeTips();
        });

        $(".job_list_extension_box").hover(function() {
            $(this).find('.job_list_extension_box_list').show();
        }, function() {
            $(this).find('.job_list_extension_box_list').hide();
        })
        $(".job_tck_list").click(function() {
            var cron = $(this).attr('data-cron');
            var name = $(this).attr('data-name');
            $("#autotype").val(cron);
            $(".job_box_in").html(name);
            $(".job_tck_box_pot").hide();
        });
        $(".job_box_in").click(function(e) {
            $(".job_tck_box_pot").toggle();
        });
        $(document).bind("click", function(e) {
            if(e.target.className != 'job_box_in') {
                $(".job_tck_box_pot").hide();
            }
        });
        $('.yun_m_joblist_extension').hover(function() {
            var type = $(this).attr('dtype');
            var pid = $(this).attr('pid');
            $('.yun_m_joblist_extension').removeClass('yun_m_joblist_extension_cur_hov');
            $(this).addClass('yun_m_joblist_extension_cur_hov');
            if(type == 'rec') {
                $('#tip' + pid).html('职位推荐，显著提高浏览量更多用户看得见');
            } else if(type == 'urgent') {
                $('#tip' + pid).html('紧急招聘，强烈提升职位曝光度');
            } else if(type == 'jingjia') {
                $('#tip' + pid).html('职位置顶,快速提升关注度置顶推广让您的职位长期处于焦点位置');
            } else if(type == 'reward') {
                $('#tip' + pid).html('悬赏职位，优质人才主动寻获，招聘更精准');
            } else if(type == 'autojob') {
                $('#tip' + pid).html('自动刷新，让职位管理轻松更高效');
            }
        });
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/jobpay.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/jobserver.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/com_tc_server.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
