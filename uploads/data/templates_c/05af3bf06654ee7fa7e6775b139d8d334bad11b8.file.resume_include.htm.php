<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 10:41:27
         compiled from "/www/fpwjob/uploads//app/template/default/public_search/resume_include.htm" */ ?>
<?php /*%%SmartyHeaderCode:5651081065e2e4dd7733867-54654133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05af3bf06654ee7fa7e6775b139d8d334bad11b8' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/default/public_search/resume_include.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5651081065e2e4dd7733867-54654133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_job' => 0,
    'v' => 0,
    'Info' => 0,
    'uid' => 0,
    'rating_1' => 0,
    'config' => 0,
    'rating_2' => 0,
    'added' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e4dd77ed392_88039208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e4dd77ed392_88039208')) {function content_5e2e4dd77ed392_88039208($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><div id='job_box' class="none" style="float:left">
    <div class="r_Interview" style="z-index:10">
        <span class="Interview_span">面试职位</span>
        <div class="Interview_text_box">
            <input type="button" value="请选择面试职位" class="Interview_text_box_t" id="name" onClick="search_show('job_name');" />
            <input type="hidden" id="nameid" name="name" value='' />
            <div class="Interview_text_box_list none" id="job_name">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['company_job']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <li>
                        <a href="javascript:;" onclick="selecteInviteJob('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'name', '<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['link_man'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['link_moblie'];?>
');"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="r_Interview" style="z-index:9"><span class="Interview_span">联系人</span><input size='5' id='linkman' value='' class="Interview_text" /></div>
    <div class="r_Interview"><span class="Interview_span">联系电话</span><input size='19' id='linktel' value='' class="Interview_text" /></div>
    <div class="r_Interview"><span class="Interview_span">面试时间</span><input size='40' id='intertime' value='' class="Interview_text" placeholder="请选择面试时间" /></div>
    <div class="r_Interview"><span class="Interview_span">面试地址</span><input size='40' id='address' value='' class="Interview_text" /></div>
    <div class="r_Interview"><span class="Interview_span">面试备注</span><textarea id="content" cols="40" rows="5" class="Interview_textarea_text"></textarea></div>
    <div class="r_Interview " style="padding-bottom:20px;"><span class="Interview_span">&nbsp;</span><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" id="eid">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" id="uid" />
        <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
			<input type="hidden" id="username" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
" />
		<?php }?>
        <input class="resume_sub_yq" id="click_invite" type="button" value="邀请面试" />
    </div>
</div>

<div id="talent_pool_beizhu" class="none">
    <div class="resume_beizu" style="margin-left:18px; margin-top:18px;">
        <textarea id="remark" cols="40" rows="5" class="resume_beizu_text" style="width:340px;height:90px;border:1px solid #ddd"></textarea>
    </div>
    <div style="text-align:center; padding:10px 0;">
        <input type="button" value="保存" onClick="talent_pool('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'talent_pool'),$_smarty_tpl);?>
')" class="resume_beizu_bth" />
    </div>
</div>

<div style="width:550px;height:440px; background:#fff;  display: none; z-index:100000000000" id="tcmsg">
    <div class="job_add_tck">

        <div class="job_add_tck_tip">
            <div class="job_add_tck_hi"><span class="job_add_tck_hi_n">尊敬的企业用户您好！</span></div>
            <div class="job_add_tck_bq">
                <span id="msg_show">很抱歉，您的套餐已用完，请先升级会员</span>
            </div>
            <div class="job_add_tck_bth" id="btn_value">确定</div>
        </div>

        <div class="job_add_tck_cont">
            <div class="job_add_tck_fqtip">成为付费用户即可享受免费服务</div>

            <div class="job_add_tck_tc_box">
                <ul class="job_add_tck_tc_tit" id="rating_type">
                    <li class="job_add_tck_tc_tit_cur">套餐会员</li>
                    <li>时间会员</li>
                    <li>增值包</li>
                </ul>

                <div class="job_add_tck_tc_cont">
                    <ul class="job_add_tck_tc_list" id="rating_1">

                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li>
                            <div class="job_add_tck_tc_list_tit">
                                <span class="job_add_tck_tc_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
                                <span class="job_add_tck_tc_jg">
									<em class="job_add_tck_tc_money">
									<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

										<?php }?> 
											<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

									<?php } else { ?>
										￥<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>

										<?php }?> 
									<?php }?>
									</em>/<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>永久<?php }?>
								</span>
                                <a href="/member/index.php?c=right" class="job_add_tck_tc_buy">购买</a>
                            </div>

                            <span class="job_add_tck_tc_s">发布职位数 <?php echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
</span>
                            <span class="job_add_tck_tc_s">刷新职位数 <?php echo $_smarty_tpl->tpl_vars['v']->value['breakjob_num'];?>
</span>
                            <span class="job_add_tck_tc_s">下载简历数 <?php echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
</span>
                            <span class="job_add_tck_tc_s">邀请面试数 <?php echo $_smarty_tpl->tpl_vars['v']->value['interview'];?>
</span>
                            <span class="job_add_tck_tc_s">发布兼职数 <?php echo $_smarty_tpl->tpl_vars['v']->value['part_num'];?>
</span>
                            <span class="job_add_tck_tc_s">刷新兼职数 <?php echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['v']->value['explains']) {?>
                            <div class="job_add_tck_tcsm">套餐说明：<?php echo $_smarty_tpl->tpl_vars['v']->value['explains'];?>
</div>
                            <?php }?>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="job_add_tck_tc_list" id="rating_2" style="display: none;">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li>
                            <div class="job_add_tck_tc_list_tit">
                                <span class="job_add_tck_tc_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
                                <span class="job_add_tck_tc_jg">
									<em class="job_add_tck_tc_money">
									<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

									   <?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

										<?php }?>
													
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

									<?php } else { ?>
										￥<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>

										<?php }?>
									<?php }?>
									</em>/<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>永久<?php }?>
								</span>
                                <em class="job_add_tck_tc_jg">套餐总数不限</em>
                                <a href="/member/index.php?c=right&act=time" class="job_add_tck_tc_buy">购买</a>
                            </div>

                            <span class="job_add_tck_tc_s">发布职位 <?php if ($_smarty_tpl->tpl_vars['v']->value['job_num']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">刷新职位 <?php if ($_smarty_tpl->tpl_vars['v']->value['breakjob_num']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">下载简历 <?php if ($_smarty_tpl->tpl_vars['v']->value['resume']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">邀请面试 <?php if ($_smarty_tpl->tpl_vars['v']->value['interview']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['interview'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">发布兼职 <?php if ($_smarty_tpl->tpl_vars['v']->value['part_num']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['part_num'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">刷新兼职 <?php if ($_smarty_tpl->tpl_vars['v']->value['breakpart_num']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'];?>
次/日<?php } else { ?>不限<?php }?></span> <?php if ($_smarty_tpl->tpl_vars['v']->value['explains']) {?>
                            <div class="job_add_tck_tcsm">套餐说明：<?php echo $_smarty_tpl->tpl_vars['v']->value['explains'];?>
</div>
                            <?php }?>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="job_add_tck_tc_list" id="add_pack" style="display: none;">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['added']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li>
                            <div class="job_add_tck_tc_list_tit">
                                <span class="job_add_tck_tc_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                                	<span class="job_add_tck_tc_jg">
	                                	套餐价：<em class="job_add_tck_tc_money">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'][0];?>
</em> 元 
	                                </span>
                                </span>
                                <a href="/member/index.php?c=right&act=added&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="job_add_tck_tc_buy">详情</a>
                            </div>
                            <div class="job_add_tck_tc_list_zzb">   
	                        	下载简历：<?php echo $_smarty_tpl->tpl_vars['v']->value['resume'][0];?>
份，	邀请面试：<?php echo $_smarty_tpl->tpl_vars['v']->value['interview'][0];?>
份，	发布职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['job_num'][0];?>
份， 刷新职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['breakjob_num'][0];?>
份， 发布兼职：<?php echo $_smarty_tpl->tpl_vars['v']->value['part_num'][0];?>
份， 刷新兼职：<?php echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'][0];?>
份， 发布猎头职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['lt_job_num'][0];?>
份， 下载高级简历：<?php echo $_smarty_tpl->tpl_vars['v']->value['lt_resume'][0];?>
份
	                        </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    function search_show(id) {
        $("#" + id).show();
    }
    function selecteInviteJob(id, type, name, man, tel) {
        $("#job_" + type).hide();
        $("#" + type).val(name);
        $("#" + type + "id").val(id);
        $("#linkman").val(man);
        $("#linktel").val(tel);
    }

    window.onload = function() {

        $('body').click(function(evt) {
            if($(evt.target).parents("#name").length == 0 && evt.target.id != "name") {
                $('#job_name').hide();
            }
        });
        layui.use(['laydate'], function() {
            var laydate = layui.laydate;

            laydate.render({
                elem: '#intertime',
                type: 'datetime',
                format: 'yyyy-MM-dd HH:mm:ss'
            });
        });
    }
	$(function(){
		$("ul#rating_type").on("click", "li", function() {
	        $(this).addClass("job_add_tck_tc_tit_cur");
	        $(this).siblings('li').removeClass("job_add_tck_tc_tit_cur");

	        var text = this.innerHTML;

	        if(text == '套餐会员') {
	            $("#rating_1").show();
	            $("#rating_2").hide();
	            $("#add_pack").hide();

	        } else if(text == '时间会员') {
	            $("#rating_1").hide();
	            $("#rating_2").show();
	            $("#add_pack").hide();

	        } else if(text == '增值包') {

	            $("#rating_1").hide();
	            $("#rating_2").hide();
	            $("#add_pack").show();

	        }
	    })
	})

    var height = "300px";
    function onResume_invite() {
        $.layer({
            type: 1,
            title: '邀请面试',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['480px', height],
            page: {
                dom: '#invite_server'
            }
        });
    }
<?php echo '</script'; ?>
><?php }} ?>
