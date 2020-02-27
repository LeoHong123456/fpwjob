<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:04:37
         compiled from "/www/fpwjob/uploads/app/template/member/com/hr.htm" */ ?>
<?php /*%%SmartyHeaderCode:20866176905e4a10d5adc4f1-72049294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db0057684c9381322fab9b29e708eaa191e7459a' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/hr.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20866176905e4a10d5adc4f1-72049294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'JobList' => 0,
    'one' => 0,
    'StateList' => 0,
    'now_url' => 0,
    'rows' => 0,
    'v' => 0,
    'com_style' => 0,
    'pagenav' => 0,
    'jobnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a10d5b7cce0_99428026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a10d5b7cce0_99428026')) {function content_5e4a10d5b7cce0_99428026($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="w1000">
    <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class=right_box>
            <div class=admincont_box>
                <div class="com_tit"><span class="com_tit_span">我的简历</span></div>
                <div class="job_list_tit">
                    <ul class="">
                        <li <?php if ($_GET['c']=="hr") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=hr" title="应聘简历">应聘简历</a>
                        </li>
                        <li <?php if ($_GET['c']=="down") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=down" title="您已下载的简历记录">已下载简历</a>
                        </li>
                        <li <?php if ($_GET['c']=="talent_pool") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=talent_pool" title="加入人才库的简历">收藏简历</a>
                        </li>
                        <li <?php if ($_GET['c']=="look_resume") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=look_resume" title="您浏览简历的记录">浏览简历</a>
                        </li>
                        <li <?php if ($_GET['c']=="record") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=record" title="网站为您推荐的简历">网站推荐简历</a>
                        </li>
                    </ul>
                </div>

                <div class="com_body">
                    <div class=admin_textbox_04>
                        <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                        <div class="hr_tip_box">
                            <div class="hr_subMetx">
                                <span class="hr_resumesearch_span fltL">招聘职位：</span>
                                <div class="text_seclet text_seclet_cur2 re">
                                    <input id="qypr" class="SpFormLBut text_seclet_w250" type="button" onclick="search_show('job_qypr');" <?php if ($_smarty_tpl->tpl_vars['current']->value['id']) {?>value="<?php echo $_smarty_tpl->tpl_vars['current']->value['name'];?>
" <?php } else { ?>value="全部职位" <?php }?>>

                                    <div id="job_qypr" class="cus-sel-opt-panel " style="display: none;">
                                        <ul class="Search_Condition_box_list">
                                            <li>
                                                <a href="index.php?c=hr&state=<?php echo $_GET['state'];?>
&resumetype=<?php echo $_GET['resumetype'];?>
&keyword=<?php echo $_GET['keyword'];?>
">全部职位</a>
                                            </li>
                                            <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['JobList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                                            <li>
                                                <a href="index.php?c=hr&jobid=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one']->value['type'];?>
&state=<?php echo $_GET['state'];?>
&resumetype=<?php echo $_GET['resumetype'];?>
&keyword=<?php echo $_GET['keyword'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];
if ($_smarty_tpl->tpl_vars['one']->value['type']==2) {?>（猎）<?php }?></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <form action="index.php" method="get">
                                    <div class="joblist_search_box" style="border-radius:3px;">
                                        <input name="c" type="hidden" value="hr">
                                        <input name="resumetype" type="hidden" value="<?php echo $_GET['resumetype'];?>
">
                                        <input name="jobid" type="hidden" value="<?php echo $_GET['jobid'];?>
">
                                        <input name="state" type="hidden" value="<?php echo $_GET['state'];?>
">
                                        <input name="keyword" type="text" class="joblist_search_box_text" placeholder="请输入姓名查找" value="<?php echo $_GET['keyword'];?>
">
                                        <input type="submit" class="joblist_search_bth" value=" ">
                                    </div>
                                </form>
                            </div>
                            <div class="hr_subMetx">
                                <span class="hr_resumesearch_span fltL">人才类型：</span>
                                <a href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&state=<?php echo $_GET['state'];?>
&keyword=<?php echo $_GET['keyword'];?>
" class="hr_subMetx_a <?php if ($_GET['resumetype']=='') {?>hr_subMetx_cur<?php }?>">不限</a>

                                <a class="hr_subMetx_a <?php if ($_GET['resumetype']=='1') {?>hr_subMetx_cur<?php }?>" href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&state=<?php echo $_GET['state'];?>
&resumetype=1&keyword=<?php echo $_GET['keyword'];?>
">普通人才</a>

                                <a class="hr_subMetx_a <?php if ($_GET['resumetype']=='2') {?>hr_subMetx_cur<?php }?>" href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&state=<?php echo $_GET['state'];?>
&resumetype=2&keyword=<?php echo $_GET['keyword'];?>
">高级人才</a>
                            </div>

                            <div class="hr_subMetx">
                                <span class="hr_resumesearch_span fltL">简历状态：</span>

                                <a class="hr_subMetx_a <?php if ($_GET['state']=='') {?>hr_subMetx_cur<?php }?>" href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&resumetype=<?php echo $_GET['resumetype'];?>
&keyword=<?php echo $_GET['keyword'];?>
">不限</a>

                                <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                                <a <?php if ($_GET['state']==$_smarty_tpl->tpl_vars['one']->value['id']) {?>class="hr_subMetx_cur" <?php }?> href="index.php?c=hr&jobid=<?php echo $_GET['jobid'];?>
&state=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
&resumetype=<?php echo $_GET['resumetype'];?>
&keyword=<?php echo $_GET['keyword'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=hrset" target="supportiframe" method="post" id='myform'>

                            <div class="clear"></div>
                            <table class="com_table mt20">
                                <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                                <tr>
                                    <th width="20">&nbsp;</th>
                                    <th>姓名</th>
                                    <th>意向职位</th>
                                    <th>基本信息</th>
                                    <th>申请职位 </th>
                                    <th>申请时间</th>
                                    <th>简历状态</th>
                                    <th>操作</th>
                                </tr>

                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="delid[]" eid="<?php echo $_smarty_tpl->tpl_vars['v']->value['eid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="job_hr_list_boxcheckbox_c"></td>
                                    <td>
                                        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
" target="_blank" class="yun_m_jobname_a">
                                            <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
&nbsp; <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']==1) {?>
                                            <span class="job_hr_job_cz_line">(未查看)</span> <?php }?>
                                        </a>

                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['height_status']==2) {?><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/yun_gj.png" title="高级简历"><?php }?>
                                    </td>
                                    <td width="220"><span class="" style="color:#f60; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
</span>
                                    </td>
                                    <td align="center">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
经验<span class="job_hr_job_cz_line">|</span> <?php echo $_smarty_tpl->tpl_vars['v']->value['edu'];?>
学历

                                    </td>

                                    <td align="center">
                                        <a <?php if ($_smarty_tpl->tpl_vars['v']->value['type']=='1') {?> href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$v.job_id`'),$_smarty_tpl);?>
" <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='2') {?> href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobcomshow','id'=>'`$v.job_id`'),$_smarty_tpl);?>
" <?php }?> target="_blank" class="uesr_name_a">
                                            <?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>

                                        </a>
                                    </td>

                                    <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],'%Y-%m-%d');?>
</td>

                                    <td align="center">
                                        <div class="hr_resume_chlose " onmousemove="isBrowseShow('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" onmouseout="isBrowseHide('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');">

                                            <div class="hr_resume_zt">
                                                <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='1') {?>未查看 <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='2') {?>已查看 <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='3') {?>等待通知 <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='4') {?>拒绝面试 <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='5') {?>无法联系 <?php }?>
                                            </div>

                                            <div class="hr_resume_box hr_resume_chlose_cur" style="display:none;" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                                <ul>
                                                    <li><span class="hr_resume_box_list browsej" browse='1' sid='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'>未查看</span></li>
                                                    <li><span class="hr_resume_box_list browsej" browse='2' sid='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'>已查看</span></li>
                                                    <li><span class="hr_resume_box_list browsej" browse='3' sid='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'>等待通知</span></li>
                                                    <li><span class="hr_resume_box_list browsej" browse='4' sid='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'>拒绝面试</span></li>
                                                    <li><span class="hr_resume_box_list browsej" browse='5' sid='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'>无法联系</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>

                                    <td align="center">
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']!=4) {?> <?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']==1) {?> <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']==5) {?>
                                        <span class="job_hr_bth_bj">无法联系</span> <?php } else { ?>
                                        <span class="job_hr_bth_bj">已邀请</span> <?php }?> <?php } else { ?>
                                        <a href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" jobid="<?php echo $_smarty_tpl->tpl_vars['v']->value['job_id'];?>
" jobname="<?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>
" class=" com_bth cblue sq_resume job_hr_bth " jobtype='<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
'>邀请</a>

                                        <a href="javascript:void(0)" sid='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' browse='4' class=" com_bth cblue browsej job_hr_bth">拒绝</a>
                                        <?php }?> <?php } else { ?>
                                        <span class="job_hr_job_cz_a">已拒绝</span> <?php }?>

                                        <a href="javascript:void(0)" onclick="layer_del('确定要删除该条职位申请吗？', 'index.php?c=hr&act=hrset&delid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class=" com_bth cblue">删除</a>
                                    </td>
                                </tr>

                                <tr>

                                </tr>
                                <?php } ?>

                                <tr>
                                    <td colspan="7" class="table_end">
                                        <div class="com_Release_job_bot" style="margin-top:10px;">
                                            <span class="com_Release_job_qx">
												<input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)' class="com_Release_job_qx_check">全选
											</span>
                                            <input class="c_btn_02" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
                                            <input class='c_btn_02' type="button" name="subdel" value="批量阅读" onclick="return really_read('delid[]');" style="margin-left:10px;">
                                        </div>
                                        <div class="diggg mt10 fltR"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                                    </td>
                                </tr>
                                <?php } else { ?>
                                <tr>
                                    <td colspan="7" class="table_end">
                                        <div class="msg_no">
                                            <?php if ($_GET['keyword']!='') {?>
                                            <p>没有搜索到相关简历记录！</p>
                                            <?php } else { ?>
                                            <p>亲爱的用户，目前还没有人才申请贵公司职位</p>
                                            <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit">我要主动找人才</a>
                                            <?php }?>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                            </table>
                        </form>

                        <div class="clear"></div>
                        <div class="wxts_box wxts_box_mt30">
                            <div class="wxts">温馨提示：</div>
                            1. 共有（<span class="f60"><?php if ($_smarty_tpl->tpl_vars['jobnum']->value) {
echo $_smarty_tpl->tpl_vars['jobnum']->value;
} else { ?>0<?php }?></span>）份简历申请贵公司发布的职位 <br> 2.对于求职者来说即使是被拒绝，也胜过毫无音讯的等待。
                            <br> 3.请邀约或者设置为不合适给求职者投递的简历，做一个回馈
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
	
	function isBrowseShow(id){
    	$("#"+id).show();
    }
    function isBrowseHide(id){
    	$("#"+id).hide();
    }
    
    $(document).ready(function() {
        $(".browsej").click(function() {
            var browse = $(this).attr('browse');
            var id = $(this).attr('sid');
            $.post("index.php?c=hr&act=hrset", {
                id: id,
                browse: browse
            }, function(data) {
                location.reload();
            });
        });

    });
    
    
    
<?php echo '</script'; ?>
>
<style>
    .admin_resume_dc {
        width: 100%;
        float: left
    }
    
    .admin_resume_dc_p {
        width: 650px;
        float: left;
        padding: 10px 0;
    }
    
    .admin_resume_dc_s {
        display: block;
        width: 110px;
        height: 30px;
        line-height: 30px;
        float: left;
        padding-left: 10px;
        margin: 5px 0px 0px 5px;
        border: 1px solid #eee;
        cursor: pointer
    }
    
    .admin_resume_dc_n {
        width: 110px;
        float: left;
        height: 30px;
        line-height: 30px;
        text-align: right;
    }
    
    .admin_resume_dc_ntext {
        width: 118px;
        border: 1px solid #ddd;
        height: 30px;
        line-height: 30px;
        float: left;
    }
    
    .admin_resume_dc_tip {
        float: left;
        height: 30px;
        line-height: 30px;
    }
    
    .admin_resume_dc_sub {
        width: 650px;
        text-align: center;
        border-top: 1px solid #ddd;
        float: left;
        padding-top: 10px;
    }
    
    .admin_resume_dc_bth1 {
        width: 90px;
        height: 30px;
        background: #f60;
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }
    
    .admin_resume_dc_bth2 {
        width: 90px;
        height: 30px;
        background: #eee;
        color: #333;
        border: none;
        cursor: pointer;
        margin-left: 10px;
        font-size: 16px;
    }
</style>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
