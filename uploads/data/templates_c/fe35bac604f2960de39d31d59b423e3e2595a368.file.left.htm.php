<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:05:41
         compiled from "/www/fpwjob/uploads//app/template/member/lietou//left.htm" */ ?>
<?php /*%%SmartyHeaderCode:3779002515dc521d50f4029-17512700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe35bac604f2960de39d31d59b423e3e2595a368' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/lietou//left.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3779002515dc521d50f4029-17512700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isdef' => 0,
    'uid' => 0,
    'addltjobnum' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc521d51abe65_53468215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc521d51abe65_53468215')) {function content_5dc521d51abe65_53468215($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><div class="m_cont_inner">

    <?php if ($_smarty_tpl->tpl_vars['isdef']->value==1) {?>
    <div class="m_inner_zuob fl">
        <div class="m_inner_gl_name"><span class="all_word">账号管理</span><span class="all_cirle"></span></div>
        <div class="m_zuob_list <?php if ($_GET['c']=='info') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=info"><i class="left_icon left_icon_info"></i>基本信息</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='uppic') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=uppic"><i class="left_icon left_icon_tx"></i>上传头像</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='binding') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=binding"><i class="left_icon left_icon_rz"></i>认证管理</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='passwd') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=passwd"><i class="left_icon left_icon_mm"></i>修改密码</a>
        </div>
        <div class="m_zuob_list  <?php if ($_GET['c']=='zixun') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=zixun"><i class="left_icon left_icon_zx"></i>求职咨询</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='sysnews') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=sysnews"><i class="left_icon left_icon_xx"></i>系统消息</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='baoming_subject'||$_GET['c']=='fav_subject'||$_GET['c']=='fav_agency'||$_GET['c']=='atn_teacher'||$_GET['c']=='subject_zixun') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=baoming_subject"><i class="left_icon left_icon_px"></i>我的培训</a>
        </div>
        <div class="m_zuob_list">
            <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>$_smarty_tpl->tpl_vars['uid']->value),$_smarty_tpl);?>
" target="_blank"><i class="left_icon left_icon_ask"></i>我的问答</a>
        </div>
        <?php if ($_GET['c']=='setname') {?>
        <div class="m_zuob_list m_zuob_cur">
            <a href="index.php?c=setname"><i class="left_icon left_icon_fbz"></i>修改账户</a>
        </div>
        <?php }?>
    </div>
    <?php }?> <?php if ($_smarty_tpl->tpl_vars['isdef']->value==2) {?>
    <div class="m_inner_zuob fl">
        <div class="m_inner_gl_name"><span class="all_word">职位管理</span><span class="all_cirle"></span></div>
        <div class="m_zuob_list <?php if ($_GET['c']=='jobadd') {?>m_zuob_cur<?php }?>">
            <a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addltjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_job'];?>
','lietou','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');"><i class="left_icon left_icon_fbzw"></i>发布新职位</a>
        </div>

        <div class="m_zuob_list <?php if ($_GET['s']=='1') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=job&s=1"><i class="left_icon left_icon_fbz"></i>发布中的职位</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['s']=='0'&&$_GET['zp_status']!='1') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=job&s=0"><i class="left_icon left_icon_fbzw left_icon_dsh"></i>待审核的职位</a>
        </div>

        <div class="m_zuob_list <?php if ($_GET['s']=='3') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=job&s=3"><i class="left_icon  left_icon_wtg"></i>未通过的职位</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['zp_status']=='1') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=job&zp_status=1"><i class="left_icon  left_icon_xj"></i>已下架的职位</a>
        </div>
    </div>
    <?php }?> <?php if ($_smarty_tpl->tpl_vars['isdef']->value==3) {?>
    <div class="m_inner_zuob fl">
        <div class="m_inner_gl_name"><span class="all_word">财务管理</span><span class="all_cirle"></span></div>
        <div class="m_zuob_list <?php if ($_GET['c']=='mypay') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=mypay"><i class="left_icon left_icon_zhzx"></i>账户中心</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='pay') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=pay"><i class="left_icon left_icon_cz"></i>立刻充值</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='paylogtc') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=paylogtc"><i class="left_icon left_icon_hy"></i>我的会员</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='right'&&($_GET['act']==''||$_GET['act']=='time'||$_GET['act']=='added')) {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=right"><i class="left_icon left_icon_hyfw"></i>会员服务</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='integral'||$_GET['c']=='integral_reduce'||$_GET['c']=='reward_list') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=integral"><i class="left_icon left_icon_dj"></i><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='paylog'||$_GET['c']=='consume'||$_GET['act']=='withdrawlist'||$_GET['act']=='changelist') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=paylog"><i class="left_icon left_icon_mx"></i>财务明细</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='jobpack'&&($_GET['act']=='loglist'||$_GET['act']=='withdraw'||$_GET['act']=='change')) {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=jobpack&act=loglist"><i class="left_icon left_icon_sj"></i>赏金收益</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='coupon_list') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=coupon_list"><i class="left_icon left_icon_yhq"></i>优惠券</a>
        </div>

    </div>
    <?php }?> <?php if ($_smarty_tpl->tpl_vars['isdef']->value==4) {?>
    <div class="m_inner_zuob fl">
        <div class="m_inner_gl_name"><span class="all_word">招聘管理</span><span class="all_cirle"></span></div>
        <div class="m_zuob_list <?php if ($_GET['c']=='yp_resume') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=yp_resume"><i class="left_icon left_icon_jl"></i>应聘来的简历</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='search_resume') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=search_resume"><i class="left_icon left_icon_src"></i>搜人才</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='entrust_resume') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=entrust_resume"><i class="left_icon left_icon_wt"></i>委托来的简历</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='down_resume') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=down_resume"><i class="left_icon left_icon_xz"></i>已下载的简历</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='look_resume') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=look_resume"><i class="left_icon left_icon_ll"></i>浏览过的简历</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='give_rebates'||$_GET['c']=='my_rebates') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=give_rebates"><i class="left_icon left_icon_xs"></i>猎头悬赏</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='talent') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=talent"><i class="left_icon left_icon_jlk"></i>简历库</a>
        </div>
        <div class="m_zuob_list <?php if ($_GET['c']=='jobpack') {?>m_zuob_cur<?php }?>">
            <a href="index.php?c=jobpack"><i class="left_icon left_icon_sj"></i>悬赏申请</a>
        </div>
    </div>
    <?php }?><?php }} ?>
