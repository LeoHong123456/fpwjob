<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:31:01
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_right.htm" */ ?>
<?php /*%%SmartyHeaderCode:14360873405dbd3ec58e7219-91134875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950ed22e3230420fc98dfe8f2621e6b76d457579' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_right.htm',
      1 => 1572667770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14360873405dbd3ec58e7219-91134875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'dirname' => 0,
    'mruser' => 0,
    'nav_user' => 0,
    'version' => 0,
    'soft' => 0,
    'kongjian' => 0,
    'banben' => 0,
    'phpbanben' => 0,
    'yonghu' => 0,
    'server' => 0,
    'pytoken' => 0,
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd3ec59148c2_35334586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd3ec59148c2_35334586')) {function content_5dbd3ec59148c2_35334586($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
<?php echo '<script'; ?>
 src="../js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<title>后台管理</title>
<?php echo '<script'; ?>
> 
function killerrors() {return true;}
window.onerror = killerrors;
function logout(){
	if (confirm("您确定要退出控制面板吗？"))
	top.location = 'index.php?c=logout';
	return false;
}
var integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';  
<?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="./js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  DD_belatedPNG.fix('.png,.header .logo,.header .nav li a,.header .nav li.on,.left_menu h3 span.on');
<?php echo '</script'; ?>
>
<![endif]-->
</head>
<body style="font-size:14px; padding-bottom:0; ">
<div id="yunshengji"></div>
<?php if ($_smarty_tpl->tpl_vars['dirname']->value||$_smarty_tpl->tpl_vars['mruser']->value==1) {?>
<div class="admin_indextip">
<?php if ($_smarty_tpl->tpl_vars['dirname']->value) {?>为了您的网站安全考虑，强烈建议将 admin,install 文件夹名改为其它名称！<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['mruser']->value==1) {?>您还没有更改默认的管理员用户名和密码!<a href="index.php?m=admin_user&c=pass" class="admin_index_info_box_a">【马上修改】</a><?php }?>
</div>
<?php }?>
<div class="clear"></div>
<div class="index_sj_table">
<div style="padding-right:15px;">
<table width="100%">
<tr>
<td width="12%" ><div class="admin_index_todayuser" ><div class="admin_index_todayuser_icon"><i class="admin_index_todayuser_icon_u"></i></div>
<div class="admin_index_todayuser_name">今日新增会员总数</div>
<div class="admin_index_todayuser_n" id="ajax_new_member_num">0</div>
</td>
<td width="12%"><div class="admin_index_todayuser admin_index_todaymoney" >
<div class="admin_index_todayuser_icon"><i class="admin_index_todayuser_icon_m"></i></div>
<div class="admin_index_todayuser_name">今日总收益</div>
<?php if (!in_array('161',$_smarty_tpl->tpl_vars['nav_user']->value['group_power'])) {?>
        <div class="admin_index_today_sy_tip">您的权限未能查看，请联系管理员开通财务权限。</div>
    <?php } else { ?>
    
<div class="admin_index_todayuser_n" id="ajax_money_total">0</div>
   <?php }?>
</div></td>
<td width="20%" ><div class="admin_index_todayuser_mx">
<div class="admin_index_todayuser_mx_name">今日新增企业</div>
<div class="admin_index_todayuser_mx_img"><i class="admin_index_todayuser_mx_img_qicon"></i></div>
<div class="admin_index_todayuser_mx_list">
<div class="admin_index_todayuser_mx_list_nmane"><a href="index.php?m=admin_company&adtime=1">企业会员</a></div>
<span class="admin_index_todayuser_mx_list_qyn"><div id="ajax_new_company_num">0</div></span></div>
<div class="admin_index_todayuser_mx_list"><div class="admin_index_todayuser_mx_list_nmane"><a href="index.php?m=admin_company_job&adtime=1">新增职位</a></div>
<span class="admin_index_todayuser_mx_list_frn"><div id="ajax_new_job_num">0</div></span></div>
</div>

</td>
<td width="20%" ><div class="admin_index_todayuser_mx">
<div class="admin_index_todayuser_mx_name">今日新增人才</div>
<div class="admin_index_todayuser_mx_img"><i class="admin_index_todayuser_mx_img_icon"></i></div>
<div class="admin_index_todayuser_mx_list">
<div class="admin_index_todayuser_mx_list_nmane"> <a href="index.php?m=user_member&adtime=1">个人会员</a></div>
<span class="admin_index_todayuser_mx_list_qyn"><div id="ajax_new_user_num">0</div></span></div>
<div class="admin_index_todayuser_mx_list"><div class="admin_index_todayuser_mx_list_nmane"><a href="index.php?m=admin_resume&adtime=1">新增简历</a></div>
<span class="admin_index_todayuser_mx_list_frn"> <div id="ajax_new_resume_num">0</div></span></div>
</div>
</td>
<td width="40%" ><div class="admin_index_today_sy">

<div class="admin_index_today_sy_name">今日收益概况</div>
 <?php if (!in_array('161',$_smarty_tpl->tpl_vars['nav_user']->value['group_power'])) {?>
        <div class="admin_index_today_sy_tip">您的权限未能查看，请联系管理员开通财务权限。</div>
    <?php } else { ?>

<div class="admin_index_today_sy_list">
<div class="admin_index_today_sy_list_n">￥<span id="ajax_money_vip">0</span></div>
 <a href="index.php?m=company_order&typedd=1&order_state=2&time=1">会员套餐</a>
</div>
<div class="admin_index_today_sy_list">
<div class="admin_index_today_sy_list_n">￥<span id="ajax_money_integral">0</span></div> 
<a href="index.php?m=company_order&typedd=2&order_state=2&time=1">积分充值</a>
</div>
<div class="admin_index_today_sy_list admin_index_today_sy_list_end">
<div class="admin_index_today_sy_list_n">￥<span id="ajax_money_service">0</span></div> 
<a href="index.php?m=company_order&typedd=5&order_state=2&time=1">增值服务</a></div>
 
</div>
       <?php }?>

</div></td>
</tr>
</table>
</div></div>
<div class="clear"></div>


<div class="clear"></div>
<div class="admin_index_bgboxpd">
<div class="admin_index_bgbox msgNum">
<div class="admin_index_bgbox_tit"><i class="admin_index_bgbox_tit_icon"></i>待处理事项</div>
<div class="admin_index_dshbox">
<a href="index.php?m=admin_company&status=4" class="admin_index_dsh_qy ajaxcompany_hide"><div class="admin_index_db_n"><span class="ajaxcompany" >0</span></div>待审核企业会员</a>
<a href="index.php?m=admin_company_job&state=4"class="admin_index_dsh_zw ajaxjob_hide"><div class="admin_index_db_n"><span class="ajaxjob" >0</span></div>待审核职位</a>
<a href="index.php?m=admin_partjob&state=4"class="admin_index_dsh_jz ajaxpartjob_hide"><div class="admin_index_db_n"><span class="ajaxpartjob" >0</span></div>待审核兼职</a>
<a href="index.php?m=comproduct&status=3"class="admin_index_dsh_cp ajaxcomproduct_hide"><div class="admin_index_db_n"><span class="ajaxcomproduct" >0</span></div>待审核企业产品</a>
<a href="index.php?m=comnews&status=3"class="admin_index_dsh_xw ajaxcomnews_hide"><div class="admin_index_db_n"><span class="ajaxcomnews" >0</span></div>待审核企业新闻</a>
<a href="index.php?m=comcert&status=3"class="admin_index_dsh_rz ajaxcomcert_hide"><div class="admin_index_db_n"><span class="ajaxcomcert" >0</span></div>待审核企业认证</a>
<a href="index.php?m=admin_company_pic&status=1"class="admin_index_dsh_logo ajaxcomlogo_hide"><div class="admin_index_db_n"><span class="ajaxcomlogo" >0</span></div>待审核企业LOGO</a>
 <a href="index.php?m=user_member&status=4"class="admin_index_dsh_user ajaxuser_hide"><div class="admin_index_db_n"><span class="ajaxuser" >0</span></div>待审核个人会员</a>
<a href="index.php?m=admin_resume&status=4"class="admin_index_dsh_jl ajaxresume_hide"><div class="admin_index_db_n"><span class="ajaxresume" >0</span></div>待审核简历</a>
<a href="index.php?m=usercert&status=2"class="admin_index_dsh_rz ajaxusercert_hide"><div class="admin_index_db_n"><span class="ajaxusercert" >0</span></div>待审核个人认证</a>
<a href="index.php?m=admin_trust&status=3"class="admin_index_dsh_wt ajaxresumetrust_hide"><div class="admin_index_db_n"><span class="ajaxresumetrust" >0</span></div>待审核委托简历</a>
<a href="index.php?m=admin_user_pic&status=1"class="admin_index_dsh ajaxuserpic_hide"><div class="admin_index_db_n"><span class="ajaxuserpic" >0</span></div>待审核个人头像</a>
 <a href="index.php?m=admin_lt_member&status=4" class="admin_index_dsh_lt ajaxlt_hide"><div class="admin_index_db_n"><span class="ajaxlt" >0</span></div>待审核猎头会员</a>
<a href="index.php?m=admin_lt_job&status=4" class="admin_index_dsh_ltzw ajaxltjob_hide"><div class="admin_index_db_n"><span class="ajaxltjob" >0</span></div>待审核猎头职位</a>
<a href="index.php?m=height_user&status=1" class="admin_index_dsh_gjrc ajaxheightuser_hide"><div class="admin_index_db_n"><span class="ajaxheightuser" >0</span></div>待审核高级人才简历</a>
<a href="index.php?m=admin_lt_cert&status=0"class="admin_index_dsh_rz ajaxltcert_hide"><div class="admin_index_db_n"><span class="ajaxltcert" >0</span></div>待审核猎头认证</a>
 <a href="index.php?m=train_member&status=4" class="admin_index_dsh_px ajaxtrain_hide"><div class="admin_index_db_n"><span class="ajaxtrain" >0</span></div>待审核培训会员</a>
<a href="index.php?m=teacher&status=3" class="admin_index_dsh_pxs ajaxteacher_hide"><div class="admin_index_db_n"><span class="ajaxteacher" >0</span></div>待审核培训师</a>
<a href="index.php?m=admin_subject&status=3"class="admin_index_dsh_pxkc ajaxsubject_hide"><div class="admin_index_db_n"><span class="ajaxsubject" >0</span></div>待审核培训课程</a>
<a href="index.php?m=traincert&status=3"class="admin_index_dsh_rz ajaxtraincert_hide"><div class="admin_index_db_n"><span class="ajaxtraincert" >0</span></div>待审核培训认证</a>
<a href="index.php?m=trainnews&status=3"class="admin_index_dsh_xw ajaxtrainnews_hide"><div class="admin_index_db_n"><span class="ajaxtrainnews" >0</span></div>待审核培训新闻</a>
 <a href="index.php?m=admin_once&status=3"class="admin_index_dsh_dp ajaxonce_hide"><div class="admin_index_db_n"><span class="ajaxonce" >0</span></div>待审核店铺招聘</a>
 <a href="index.php?m=admin_tiny&status=2"class="admin_index_dsh_pg ajaxtiny_hide"><div class="admin_index_db_n"><span class="ajaxtiny" >0</span></div>待审核普工简历</a>
 <a href="index.php?m=admin_school_graduate&state=4"class="admin_index_dsh_yjs ajaxschoolgraduate_hide"><div class="admin_index_db_n"><span class="ajaxschoolgraduate" >0</span></div>待审核应届毕业生职位</a>
<a href="index.php?m=admin_school_xjh&status=3"class="admin_index_dsh_xjh ajaxschoolxjh_hide"><div class="admin_index_db_n"><span class="ajaxschoolxjh" >0</span></div>待审核宣讲会</a>
 <a href="index.php?m=zhaopinhui&c=com&status=3"class="admin_index_dsh_ch ajaxzphcom_hide"><div class="admin_index_db_n"><span class="ajaxzphcom" >0</span></div>待审核参会企业</a>
 <a href="index.php?m=admin_question&status=0"class="admin_index_dsh_wd ajaxask_hide"><div class="admin_index_db_n"><span class="ajaxask" >0</span></div>待审核问答</a>
 <a href="index.php?m=reward_list&status=-1"class="admin_index_dsh_dh ajaxredeem_hide"><div class="admin_index_db_n"><span class="ajaxredeem" >0</span></div>待审核商品兑换</a>
 <a href="index.php?m=invoice&status=0"class="admin_index_dsh_fp ajaxinvoice_hide"><div class="admin_index_db_n"><span class="ajaxinvoice" >0</span></div>待审核发票</a>
<a href="index.php?m=company_order&order_state=3"class="admin_index_dsh_cz ajaxorder_hide"><div class="admin_index_db_n"><span class="ajaxorder" >0</span></div>待处理充值订单</a>
<a href="index.php?m=admin_withdraw&order_state=0"class="admin_index_dsh_tx ajaxwithdraw_hide"><div class="admin_index_db_n"><span class="ajaxwithdraw" >0</span></div>待审核赏金提现</a>
 <a href="index.php?m=ad_order&status=-1"class="admin_index_dsh_gg ajaxadorder_hide"><div class="admin_index_db_n"><span class="ajaxadorder" >0</span></div>待审核广告订单</a>
 <a href="index.php?m=special"class="admin_index_dsh_qyzt ajaxspecialcom_hide"><div class="admin_index_db_n"><span class="ajaxspecialcom" >0</span></div>待审核企业专题</a>

 <a href="index.php?m=report"class="admin_index_dsh_jb ajaxreportjob_hide"><div class="admin_index_db_n"><span class="ajaxreportjob" >0</span></div>待处理举报职位</a>
<a href="index.php?m=report&ut=2"class="admin_index_dsh_jb ajaxreportresume_hide"><div class="admin_index_db_n"><span class="ajaxreportresume" >0</span></div>待处理举报简历</a>
<a href="index.php?m=report&type=1"class="admin_index_dsh_jb ajaxreportask_hide"><div class="admin_index_db_n"><span class="ajaxreportask" >0</span></div>待处理举报问答</a>
<a href="index.php?m=admin_appeal"class="admin_index_dsh_ss ajaxappeal_hide"><div class="admin_index_db_n"><span class="ajaxappeal" >0</span></div>待处理账号申诉</a>
<a href="index.php?m=report&type=2"class="admin_index_dsh_ts ajaxreportgw_hide"><div class="admin_index_db_n"><span class="ajaxreportgw" >0</span></div>待处理投诉顾问</a>
<a href="index.php?m=report&type=3"class="admin_index_dsh_jb ajaxreportxjh_hide"><div class="admin_index_db_n"><span class="ajaxreportxjh" >0</span></div>待处理举报宣讲会</a>

 <a href="index.php?m=link&state=2"class="admin_index_dsh_lj ajaxlink_hide"><div class="admin_index_db_n"><span class="ajaxlink" >0</span></div>待审核友情链接</a>
</div>
</div>
</div>



    
<div class="admin_index_center">
<div class="admin_index_Data">
<div class="admin_index_Data_bor">
<div class="admin_message_h1">
<div class="admin_message_h1_tit">
    <span class="admin_message_h1_s admin_message_h1_cur" data-a="index_tj">月数据统计</span>
    <span class="admin_message_h1_s" data-a="index_dt">网站动态</span>
    <span class="admin_message_h1_s" data-a="index_rz">会员日志</span>
    </div>
</div>
    <div class="admin_index_Data_cont" style=" position:relative"  id="index_tj">
    <div class="admin_index_Data_cont_box">
        <div class="admin_index_Data_cont_left">
            <div class="admin_index_fw" id="main22">
                <iframe name="right" id="tbrightMain" src="index.php?m=admin_right&c=getweb" frameborder="false" scrolling="auto" style="border:none;" width="100%" height="300" allowtransparency="true"></iframe>
            </div>
        </div>
        <div class="admin_index_date_list">
            <ul>
                <li class="admin_index_tj_jl"><a href="javascript:clicktb('resumetj');"><div class="admin_tj_n"><span class="ajax_resume">0</span></div>简历统计</a><i class="admin_tj_sjx"></i></li>
                <li class="admin_index_tj_zw"><a href="javascript:clicktb('jobtj');"><div class="admin_tj_n"><span class="ajax_job">0</span></div>职位统计</a><i class="admin_tj_sj"></i></li>
                <li class="admin_index_tj_qy"><a href="javascript:clicktb('comtj');"><div class="admin_tj_n"><span class="ajax_company">0</span></div>企业注册统计</a><i class="admin_tj_sj"></i></li>
                <li  class="admin_index_tj_gr"><a href="javascript:clicktb('getweb');"><div class="admin_tj_n"><span class="ajax_user">0</span></div>个人注册统计</a><i class="admin_tj_sjx"></i></li>
                <li class="admin_index_tj_wx"><a href="javascript:clicktb('newstj');"><div class="admin_tj_n"><span class="ajax_news">0</span></div>新闻统计</a><i class="admin_tj_sjx"></i></li>
                <li class="admin_index_tj_gg"><a href="javascript:clicktb('adtj');"><div class="admin_tj_n"><span class="ajax_gg">0</span></div>广告点击统计</a><i class="admin_tj_sj"></i></li>
                <li  class="admin_index_tj_dp"><a href="javascript:clicktb('wzptj');"><div class="admin_tj_n"><span class="ajax_once">0</span></div>店铺招聘统计</a><i class="admin_tj_sj"></i></li>
                <li class="admin_index_tj_pg"><a href="javascript:clicktb('wjltj');"><div class="admin_tj_n"><span class="ajax_tiny">0</span></div>普工简历统计</a><i class="admin_tj_sjx"></i></li>
            </ul>
        </div>
    </div>
    </div>
    <div class="admin_index_Data_cont" style="position:relative; display:none" id="index_dt">
   
 <div class="admin_index_Data_cont_rz">
 <div class="admin_index_Data_cont_rz_tit">
         <ul>
                <li><a href="javascript:clicktbdt('downresumedt');">下载简历动态</a></li>
                <li><a href="javascript:clicktbdt('useridjobdt');">职位申请动态</a></li>
                <li><a href="javascript:clicktbdt('lookjobdt');" >职位浏览动态</a></li>
                <li><a href="javascript:clicktbdt('lookresumedt');" >简历浏览动态</a></li>
                <li><a href="javascript:clicktbdt('favjobdt');" >职位收藏动态</a></li>
                <li><a href="javascript:clicktbdt('payorderdt');" >充值动态</a></li>
            </ul> <div class="admin_index_date_list_r"  id="tbrightMaindthy">
	          
	        </div>
            </div>
      
        <div class="admin_index_Data_cont_left" >
            <div class="" id="main22">
                <iframe name="right" id="tbrightMaindt" src="index.php?m=admin_right&c=downresumedt" frameborder="false" scrolling="auto" style="border:none;" width="100%" height="300" allowtransparency="true"></iframe>
            </div>
        </div>

    </div>
    </div>
   
     <div class="admin_index_Data_cont" style="position:relative; display:none" id="index_rz">
     <div class="admin_index_Data_cont_rz">
      <div class="admin_index_Data_cont_rz_tit">
       <ul>
                <li><a href="javascript:clicktbrz('userrz');">个人会员日志</a></li>
                <li><a href="javascript:clicktbrz('comrz');">企业会员日志</a></li>
                <li><a href="javascript:clicktbrz('lietoutz');">猎头会员日志</a></li>
                <li><a href="javascript:clicktbrz('traintz');">培训会员日志</a></li>
            </ul>
             <div class="admin_index_date_list_r" id="tbrightMainrzhy">
	            </div>
            </div>
        <div class="admin_index_Data_cont_left" >
            <div class="" id="main22">
                <iframe name="right" id="tbrightMainrz" src="index.php?m=admin_right&c=userrz" frameborder="false" scrolling="auto" style="border:none;" width="100%" height="300" allowtransparency="true"></iframe>
            </div>
        </div>
     
    </div>
    </div>
</div>
</div>
</div>

<div class="mainindex_box">
<div class="mainindex_box_cont_c">
 <div class="mainindex_box_cont"><i class="admin_index_bgbox_tit_icon" style="top:25px;"></i>
   <div class="mainleft">
      <div class="maininfo">
              <div class="admin_indexdt"><div class="mainboxtop"><h6>官方动态</h6></div><ul class="" id="yunzx"></ul></div>
      </div>
  </div>                                
 
  <div class="mainright">
    <div class="maininfo">
    <div class="mainboxtop"><h6>开发团队</h6></div>
        <div class="maincontent">
        <p>开发团队:LEO</p>
        <p>联系电话：09163044437</p>
	<p>官方网站：<a href="https://www.fpwjob.com/" target="_blank">https://www.fpwjob.com/</a>
	<p>咨询QQ：1513314683</p>
        </div>
    </div>
  </div> 
  </div> 
 </div>
</div> 

<div class="mainindex_box" style="margin-top:20px;">
	<div class="mainindex_box_cont_c">
		<div class="mainindex_box_cont">
			<i class="admin_index_bgbox_tit_icon" style="top:25px;"></i>
			<div class="mainmsg">
				<div class="mainboxtop"><h6>系统信息</h6></div>
				<div class="">
					<span class="mainmsg_list">PHPYun程序版本： <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 [ <font id="version_msg">无须更新!</font>]</span>
					<span class="mainmsg_list">服务器软件：<?php echo $_smarty_tpl->tpl_vars['soft']->value;?>
</span>
					<span class="mainmsg_list">可用空间(磁盘区)：<?php echo $_smarty_tpl->tpl_vars['kongjian']->value;?>
&nbsp;M</span>
					<span class="mainmsg_list">MySQL 版本：<?php echo $_smarty_tpl->tpl_vars['banben']->value;?>
</span>
					<span class="mainmsg_list">PHP 版本：<?php echo $_smarty_tpl->tpl_vars['phpbanben']->value;?>
</span>
					<span class="mainmsg_list">用户 - 服务器：<?php echo $_smarty_tpl->tpl_vars['yonghu']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['server']->value;?>
</span>
				</div>   
			</div>
		</div> 
	</div>
</div>

<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"/>
<?php echo '<script'; ?>
>
function dk(){$("#edition_box_yun").show();$(".edition_box_bg").show();}
function gb(){$("#edition_box_yun").hide();$(".edition_box_bg").hide();}
function clicktb(name){
	$("#tbrightMain").attr("src","index.php?m=admin_right&c="+name);
}
function clicktbdt(name){
	$("#tbrightMaindt").attr("src","index.php?m=admin_right&c="+name);
	$.post("index.php?m=admin_right&c="+name+"hy",{rand:Math.random()},function(data){
		$("#tbrightMaindthy").html(data);
	})
}
function clicktbrz(name){
	$("#tbrightMainrz").attr("src","index.php?m=admin_right&c="+name);
	$.post("index.php?m=admin_right&c="+name+"hy",{rand:Math.random()},function(data){
		$("#tbrightMainrzhy").html(data);
	})
}
$(document).ready(function(){
	$(".admin_message_h1_s").click(function(){
		$(".admin_message_h1_s").attr("class","admin_message_h1_s");
		$(this).attr("class","admin_message_h1_s admin_message_h1_cur");
		var a=$(this).attr("data-a");
		$(".admin_index_Data_cont").hide();
		$("#"+a).show();
	});
	$.post("index.php?m=admin_right&c=downresumedthy",{rand:Math.random()},function(data){
		$("#tbrightMaindthy").html(data);
	});
	$.post("index.php?m=admin_right&c=userrzhy",{rand:Math.random()},function(data){
		$("#tbrightMainrzhy").html(data);
	})
})
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://init.phpyun.com/site.php?site=<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
"> 
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
 type="text/javascript">
$(document).ready(function(){
	$.post("index.php?m=admin_right&c=ajax_statis", {pytoken: '<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
'}, function(data){
		var o = eval( '(' + data + ')' );
		$('#ajax_new_member_num').html(o.memberNum);
		$('#ajax_new_user_num').html(o.userNum);
		$('#ajax_new_resume_num').html(o.resumeNum);
		$('#ajax_new_company_num').html(o.companyNum);
		$('#ajax_new_job_num').html(o.jobNum);

		if(o.moneyTotal){
		  $('#ajax_money_total').html(o.moneyTotal);
		}
		if(o.moneyVip){
		  $('#ajax_money_vip').html(o.moneyVip);
		}
		if(o.moneyIntegral){
		  $('#ajax_money_integral').html(o.moneyIntegral);
		}
		if(o.moneyService){
		  $('#ajax_money_service').html(o.moneyService);
		}
		if(o.moneyJob){
		  $('#ajax_money_job').html(o.moneyJob);
		}

		$('#ajax_check_user').html(o.checkUserNum);
		$('#ajax_check_company').html(o.checkCompanyNum);
		$('#ajax_check_resume').html(o.checkResumeNum);
		$('#ajax_check_job').html(o.checkJobNum);
		$('#ajax_check_order').html(o.checkOrderNum);
		$('#ajax_check_pay').html(o.checkPayNum);

		if(o.resumeNumMon) {
			$('.ajax_resume').html(o.resumeNumMon);
		}
		if(o.jobNumMon) {
			$('.ajax_job').html(o.jobNumMon);
		}
		if(o.companyNumMon) {
			$('.ajax_company').html(o.companyNumMon);
		}
		if(o.userNumMon) {
			$('.ajax_user').html(o.userNumMon);
		}
		if(o.newsNumMon) {
			$('.ajax_news').html(o.newsNumMon);
		}
		if(o.ggNumMon) {
			$('.ajax_gg').html(o.ggNumMon);
		}
		if(o.onceNumMon) {
			$('.ajax_once').html(o.onceNumMon);
		}
		if(o.tinyNumMon) {
			$('.ajax_tiny').html(o.tinyNumMon);
		}
	});

	$.get("index.php?c=msgNum", function(data) {
		var datas = eval('(' + data + ')');
		
		if(datas.msgNum=='0'){

			$('.msgNum').hide();

		}else{
			
			$('.msgNum').show();
			
			if(datas.company_job) {
				$('.ajaxjob').html(datas.company_job);
			}else{
				$('.ajaxjob_hide').hide();
			}
			
			if(datas.company) {
				$('.ajaxcompany').html(datas.company);
			}else{
				$('.ajaxcompany_hide').hide();
			}
			if(datas.partjob) {
				$('.ajaxpartjob').html(datas.partjob);
			}else{
				$('.ajaxpartjob_hide').hide();
			}
			if(datas.company_product) {
				$('.ajaxcomproduct').html(datas.company_product);
			}else{
				$('.ajaxcomproduct_hide').hide();
			}
			if(datas.company_news) {
				$('.ajaxcomnews').html(datas.company_news);
			}else{
				$('.ajaxcomnews_hide').hide();
			}
			if(datas.company_cert) {
				$('.ajaxcomcert').html(datas.company_cert);
			}else{
				$('.ajaxcomcert_hide').hide();
			}
			if(datas.comlogo) {
				$('.ajaxcomlogo').html(datas.comlogo);
			}else{
				$('.ajaxcomlogo_hide').hide();
			}
			if(datas.userNum) {
				$('.ajaxuser').html(datas.userNum);
			}else{
				$('.ajaxuser_hide').hide();
			}
			if(datas.resume_expect) {
				$('.ajaxresume').html(datas.resume_expect);
			}else{
				$('.ajaxresume_hide').hide();
			}
			if(datas.usercertNum) {
				$('.ajaxusercert').html(datas.usercertNum);
			}else{
				$('.ajaxusercert_hide').hide();
			}
			if(datas.resumetrust) {
				$('.ajaxresumetrust').html(datas.resumetrust);
			}else{
				$('.ajaxresumetrust_hide').hide();
			}
			if(datas.userpic) {
				$('.ajaxuserpic').html(datas.userpic);
			}else{
				$('.ajaxuserpic_hide').hide();
			}
			if(datas.ltNum) {
				$('.ajaxlt').html(datas.ltNum);
			}else{
				$('.ajaxlt_hide').hide();
			}
			if(datas.ltjob) {
				$('.ajaxltjob').html(datas.ltjob);
			}else{
				$('.ajaxltjob_hide').hide();
			}
			if(datas.ltheightuser) {
				$('.ajaxheightuser').html(datas.ltheightuser);
			}else{
				$('.ajaxheightuser_hide').hide();
			}
			if(datas.ltcert) {
				$('.ajaxltcert').html(datas.ltcert);
			}else{
				$('.ajaxltcert_hide').hide();
			}
			if(datas.trainNum) {
				$('.ajaxtrain').html(datas.trainNum);
			}else{
				$('.ajaxtrain_hide').hide();
			}
			if(datas.teacher) {
				$('.ajaxteacher').html(datas.teacher);
			}else{
				$('.ajaxteacher_hide').hide();
			}
			if(datas.subject) {
				$('.ajaxsubject').html(datas.subject);
			}else{
				$('.ajaxsubject_hide').hide();
			}
			if(datas.traincert) {
				$('.ajaxtraincert').html(datas.traincert);
			}else{
				$('.ajaxtraincert_hide').hide();
			}
			if(datas.trainnews) {
				$('.ajaxtrainnews').html(datas.trainnews);
			}else{
				$('.ajaxtrainnews_hide').hide();
			}
			if(datas.once_job) {
				$('.ajaxonce').html(datas.once_job);
			}else{
				$('.ajaxonce_hide').hide();
			}
			if(datas.tiny) {
				$('.ajaxtiny').html(datas.tiny);
			}else{
				$('.ajaxtiny_hide').hide();
			}
			if(datas.schooljob) {
				$('.ajaxschoolgraduate').html(datas.schooljob);
			}else{
				$('.ajaxschoolgraduate_hide').hide();
			}
			if(datas.schoolxjh) {
				$('.ajaxschoolxjh').html(datas.schoolxjh);
			}else{
				$('.ajaxschoolxjh_hide').hide();
			}
			if(datas.zphcom) {
				$('.ajaxzphcom').html(datas.zphcom);
			}else{
				$('.ajaxzphcom_hide').hide();
			}
			if(datas.ask) {
				$('.ajaxask').html(datas.ask);
			}else{
				$('.ajaxask_hide').hide();
			}
			if(datas.redeem) {
				$('.ajaxredeem').html(datas.redeem);
			}else{
				$('.ajaxredeem_hide').hide();
			}
			if(datas.invoiceNum) {
				$('.ajaxinvoice').html(datas.invoiceNum);
			}else{
				$('.ajaxinvoice_hide').hide();
			}
			if(datas.order) {
				$('.ajaxorder').html(datas.order);
			}else{
				$('.ajaxorder_hide').hide();
			}
			if(datas.withdrawNum) {
				$('.ajaxwithdraw').html(datas.withdrawNum);
			}else{
				$('.ajaxwithdraw_hide').hide();
			}
			if(datas.adorder) {
				$('.ajaxadorder').html(datas.adorder);
			}else{
				$('.ajaxadorder_hide').hide();
			}
			if(datas.specialcom) {
				$('.ajaxspecialcom').html(datas.specialcom);
			}else{
				$('.ajaxspecialcom_hide').hide();
			}
			if(datas.reportjob) {
				$('.ajaxreportjob').html(datas.reportjob);
			}else{
				$('.ajaxreportjob_hide').hide();
			}
			if(datas.reportresume) {
				$('.ajaxreportresume').html(datas.reportresume);
			}else{
				$('.ajaxreportresume_hide').hide();
			}
			if(datas.reportask) {
				$('.ajaxreportask').html(datas.reportask);
			}else{
				$('.ajaxreportask_hide').hide();
			}
			if(datas.reportgw) {
				$('.ajaxreportgw').html(datas.reportgw);
			}else{
				$('.ajaxreportgw_hide').hide();
			}
			if(datas.reportxjh) {
				$('.ajaxreportxjh').html(datas.reportxjh);
			}else{
				$('.ajaxreportxjh_hide').hide();
			}
			if(datas.appealnum) {
				$('.ajaxappeal').html(datas.appealnum);
			}else{
				$('.ajaxappeal_hide').hide();
			}
			if(datas.linkNum) {
				$('.ajaxlink').html(datas.linkNum);
			}else{
				$('.ajaxlink_hide').hide();
			}
		}
	});
});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
