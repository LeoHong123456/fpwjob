<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:26:31
         compiled from "/www/fpwjob/uploads//app/template/member/com/left.htm" */ ?>
<?php /*%%SmartyHeaderCode:2483706605dbd3db7eb35f4-05870234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d348d07f191a3704de88ea316ea5ebb9e9e7940' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/com/left.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2483706605dbd3db7eb35f4-05870234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'js_def' => 0,
    'newResumeNum' => 0,
    'addjobnum' => 0,
    'uid' => 0,
    'addpartjobnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd3db80feb17_28207468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd3db80feb17_28207468')) {function content_5dbd3db80feb17_28207468($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><div class="sidebar">
	<div class="left_box">
		<div class="left_box_nav">
			
			<ul class="left_box_nav_list">
				<li <?php if ($_GET['c']=='') {?> class="left_box_nav_cur"<?php }?> data-def='1'>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/">首页
						<i class="left_box_nav_icon"></i>
						<i class="left_box_nav_line"></i>
					</a>
				</li>
					
				<li <?php if ($_GET['c']=="job"||$_smarty_tpl->tpl_vars['js_def']->value==3) {?> class="left_box_nav_cur"<?php }?> data-def='3'>
					<a href="javascript:;">职位
						<i class="left_box_nav_icon left_box_nav_icon_zw"></i>
						<i class="left_box_nav_line"></i>
					</a>
				</li>
				
				<li <?php if ($_GET['c']=="hr"||$_smarty_tpl->tpl_vars['js_def']->value==5) {?> class="left_box_nav_cur"<?php }?> data-def='5'>
					<a href="javascript:;">简历
						<i class="left_box_nav_icon left_box_nav_icon_jl"></i>
						<i class="left_box_nav_line"></i>
						<?php if ($_smarty_tpl->tpl_vars['newResumeNum']->value>0) {?>
						<i class="left_box_nav_new"></i>
						<?php }?>
					</a>
				</li>
				
				<li <?php if ($_GET['c']=="paylogtc"||$_smarty_tpl->tpl_vars['js_def']->value==4) {?> class="left_box_nav_cur"<?php }?> data-def='4'>
					<a href="javascript:;">财务
						<i class="left_box_nav_icon left_box_nav_icon_cw"></i>
						<i class="left_box_nav_line"></i>
					</a>
				</li>
				
				<li <?php if ($_GET['c']=="vs"||$_smarty_tpl->tpl_vars['js_def']->value==7) {?> class="left_box_nav_cur"<?php }?> data-def='7'>
					<a href="javascript:;">设置
						<i class="left_box_nav_icon left_box_nav_icon_sz"></i>
						<i class="left_box_nav_line"></i>
					</a>
				</li>
				
				<li <?php if ($_GET['c']=="info"||$_smarty_tpl->tpl_vars['js_def']->value==2) {?> class="left_box_nav_cur"<?php }?> data-def='2'>
					<a href="javascript:;">资料
						<i class="left_box_nav_icon left_box_nav_icon_zl"></i>
						<i class="left_box_nav_line"></i>
					</a>
				</li>
			</ul>

		</div>

		
			<ul class="left_nav_ul  <?php if ($_smarty_tpl->tpl_vars['js_def']->value!=1) {?>none<?php }?>" id='def1'>
				<li><span><a href="index.php?c=info" title="基本信息"><i class="com_left_icon com_left_icon_info"></i>基本信息</a></span></li>
				<li>
					<span><a href="javascript:void(0)"  onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" title="发布职位" style="color:red;"><i class="com_left_icon com_left_icon_info"></i>发布职位</a></span> 
				</li>
                	<li><span>
						<a href="index.php?c=job&w=1" title="职位管理"><i class="com_left_icon com_left_icon_zwgl"></i>职位管理</a>
					</span></li>
                 <li <?php if ($_GET['c']=="right"&&$_GET['act']==''||$_GET['c']=="right"&&$_GET['act']=="time"||$_GET['c']=="right"&&$_GET['act']=="added") {?> class="style01 left_nav_hover" <?php } else { ?> class="style12" <?php }?>>
					<span>
						<a href="index.php?c=right" style="color:red;">
							<i class="com_left_icon com_left_icon_fw"></i>VIP招聘服务
							<i class="com_icon com_icon_new"></i>
						</a>
					</span>
				</li>
				<li <?php if ($_GET['c']=="hr"||$_GET['c']=="down"||$_GET['c']=="talent_pool"||$_GET['c']=="look_resume"||$_GET['c']=="record") {?> class="style01 left_nav_hover" <?php } else { ?> class="style01" <?php }?>>
					<span><a href="index.php?c=hr" title="我的简历"><i class="com_left_icon com_left_icon_jl"></i>我的简历</a></span> 
				</li>
                 <li <?php if ($_GET['c']=="invite") {?> class="style01 left_nav_hover" <?php } else { ?> class="style03" <?php }?>>
					<span><a href="index.php?c=invite" title="已邀请面试的人才" style="color:red;"><i class="com_left_icon com_left_icon_yq"></i>面试邀请</a></span>
				</li>
				<li><span><a href="index.php?c=paylogtc" title="会员套餐"><i class="com_left_icon com_left_icon_info"></i>我的服务</a></span></li>
				
         		<li <?php if ($_GET['c']=="tongji") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07"<?php }?>>
					<span><a href="index.php?c=tongji"><i class="com_left_icon com_left_icon_fx"></i>招聘分析</a></span>
				</li>
                <li <?php if ($_GET['c']=="pay") {?> class="style01 left_nav_hover" <?php } else { ?> class="style05" <?php }?>>
					<span>
						<a href="index.php?c=pay" title="充值<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
">
							<font color="#FF0000"><i class="com_left_icon com_left_icon_cz"></i>充值<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</font>
						</a>
					</span>
				</li>  
                <li <?php if ($_GET['c']=="binding") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span><a href="index.php?c=binding"><i class="com_left_icon com_left_icon_bd"></i>账户绑定</a></span>
				</li>
                <li><span><a href="index.php?c=sysnews" title="网站公告"><i class="com_left_icon com_left_icon_info"></i>系统消息</a></span></li>
			</ul>
		
		
		
			<ul class="left_nav_ul   <?php if ($_smarty_tpl->tpl_vars['js_def']->value!=2) {?>none<?php }?>" id='def2'>
				<li <?php if ($_GET['c']=="info") {?> class="style01 left_nav_hover" <?php } else { ?> class="style01"<?php }?>>
					<span><a href="index.php?c=info" title="基本信息"><i class="com_left_icon com_left_icon_info"></i>基本信息</a></span> 
				</li>
				<li <?php if ($_GET['c']=="uppic") {?> class="style01 left_nav_hover" <?php } else { ?> class="style08" <?php }?>>
					<span><a href="index.php?c=uppic" title="企业LOGO"><i class="com_left_icon com_left_icon_logo"></i>企业Logo</a></span> 
				</li>
				<li <?php if ($_GET['c']=="map") {?> class="style01 left_nav_hover" <?php } else { ?> class="style02" <?php }?>>
					<span><a href="index.php?c=map" title="企业地图"><i class="com_left_icon com_left_icon_map"></i>企业地图</a></span> 
				</li>
				<li <?php if ($_GET['c']=="news") {?> class="style01 left_nav_hover" <?php } else { ?> class="style03" <?php }?>>
					<span><a href="index.php?c=news" title="企业新闻"><i class="com_left_icon com_left_icon_news"></i>企业新闻</a></span> 
				</li>
				<li <?php if ($_GET['c']=="show") {?> class="style01 left_nav_hover" <?php } else { ?> class="style05" <?php }?>>
					<span><a href="index.php?c=show" title="企业环境"><i class="com_left_icon com_left_icon_hj"></i>企业环境</a></span> 
				</li>
				<li <?php if ($_GET['c']=="product") {?> class="style01 left_nav_hover" <?php } else { ?> class="style04" <?php }?>>
					<span><a href="index.php?c=product" title="企业产品"><i class="com_left_icon com_left_icon_cp"></i>企业产品</a></span> 
				</li>
				<li <?php if ($_GET['c']=="comtpl") {?> class="style01 left_nav_hover" <?php } else { ?> class="style09" <?php }?>>
					<span><a href="index.php?c=comtpl" title="模板切换"><i class="com_left_icon com_left_icon_mb"></i>企业模板</a></span>
				</li>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_train_web']==1) {?>
                <li <?php if ($_GET['c']=="baoming_subject"||$_GET['c']=="fav_subject"||$_GET['c']=="atn_teacher"||$_GET['c']=="fav_agency"||$_GET['c']=="subject_zixun") {?> class="style01 left_nav_hover" <?php } else { ?> class="style11" <?php }?>>
					<span><a href="index.php?c=baoming_subject" title="培训管理"><i class="com_left_icon com_left_icon_xin"></i>培训管理</a></span> 
				</li>
                <?php }?>
				<li <?php if ($_GET['c']=="binding") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span><a href="index.php?c=binding"  style="color:red;"><i class="com_left_icon com_left_icon_bd"></i>账户认证</a></span>
				</li> 
			</ul>
	

		
			<ul class="left_nav_ul  <?php if ($_smarty_tpl->tpl_vars['js_def']->value!=5) {?>none<?php }?>" id='def5'>
					<li <?php if ($_GET['c']=="resume") {?> class="style01 left_nav_hover" <?php } else { ?> class="style06"<?php }?>>
						<span>
							<a href="index.php?c=resume" class="f60">
								<i class="com_left_icon com_left_icon_search"></i>搜人才
								<i class="com_icon com_icon_new"></i>
							</a>
						</span>
					</li>
				<li <?php if ($_GET['c']=="hr"||$_GET['c']=="down"||$_GET['c']=="talent_pool"||$_GET['c']=="look_resume"||$_GET['c']=="record") {?> class="style01 left_nav_hover" <?php } else { ?> class="style01" <?php }?>>
					<span><a href="index.php?c=hr" title="我的简历"><i class="com_left_icon com_left_icon_jl"></i>我的简历</a></span> 
				</li>
				<li <?php if ($_GET['c']=="invite") {?> class="style01 left_nav_hover" <?php } else { ?> class="style03" <?php }?>>
					<span><a href="index.php?c=invite" title="已邀请面试的人才" style="color:red;"><i class="com_left_icon com_left_icon_yq"></i>面试邀请</a></span>
				</li>
				<li <?php if ($_GET['c']=="subscribe") {?> class="style01 left_nav_hover" <?php } else { ?> class="style06" <?php }?>>
					<span><a href="index.php?c=subscribe"><i class="com_left_icon com_left_icon_info"></i>人才订阅</a></span> 
				</li>
				<li <?php if ($_GET['c']=="finder") {?> class="style01 left_nav_hover" <?php } else { ?> class="style06" <?php }?>>
					<span><a href="index.php?c=finder"><i class="com_left_icon com_left_icon_sq"></i>人才搜索器</a></span> 
				</li>
				<li <?php if ($_GET['c']=="attention_me") {?> class="style01 left_nav_hover" <?php } else { ?> class="style06" <?php }?>>
					<span><a href="index.php?c=attention_me" ><i class="com_left_icon com_left_icon_gz"></i>关注我的人才</a></span> 
				</li>
				<li <?php if ($_GET['c']=="look_job") {?> class="style01 left_nav_hover" <?php } else { ?> class="style06" <?php }?>>
					<span><a href="index.php?c=look_job"><i class="com_left_icon com_left_icon_eye"></i>被浏览的职位</a></span> 
				</li>
				<?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rec_rebates']==1) {?>
					<li <?php if ($_GET['c']=="my_rebates"||$_GET['c']=="give_rebates") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
						<span><a href="index.php?c=my_rebates" title="猎头悬赏"><i class="com_left_icon com_left_icon_lt"></i>猎头悬赏</a></span>
					</li>
				<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_ask_web']==1) {?>
				<li class="style09">
					<span>
						<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>$_smarty_tpl->tpl_vars['uid']->value),$_smarty_tpl);?>
" target="_blank" title="我的问答">
							<i class="com_left_icon com_left_icon_ask"></i>我的问答
						</a>
					</span> 
				</li>
                <?php }?>
			</ul>
		

		
			<ul class="left_nav_ul  <?php if ($_smarty_tpl->tpl_vars['js_def']->value!=3) {?>none<?php }?>" id='def3'> 
				<li <?php if ($_GET['c']=="jobadd") {?> class="style01 left_nav_hover" <?php } else { ?> class="style03" <?php }?>>
					<span>
						<a href="javascript:void(0)"  onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" class="f60 bold">
							<i class="com_left_icon com_left_icon_fb"></i>发布新职位
						</a>
					</span> 
				</li>
				<li <?php if ($_GET['c']=="job") {?> class="style01 left_nav_hover" <?php } else { ?> class="style03" <?php }?>>
					<span>
						<a href="index.php?c=job&w=1" title="发布中的职位" style="color:red;"><i class="com_left_icon com_left_icon_zwgl"></i>职位管理</a>
					</span>
				</li>
				<li <?php if ($_GET['c']=="jobpack") {?> class="style01 left_nav_hover" <?php } else { ?> class="style03" <?php }?>>
					<span>
						<a href="index.php?c=jobpack" title="赏金推广职位"><i class="com_left_icon com_left_icon_hbtgl"></i>赏金推广职位</a>
					</span>
				</li>
				<li <?php if ($_GET['c']=="zhaopinhui") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span><a href="index.php?c=zhaopinhui"><i class="com_left_icon com_left_iconzph"></i>招聘会记录</a></span>
				</li>    
				<li <?php if ($_GET['c']=="special") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span><a href="index.php?c=special" style="color:red;"><i class="com_left_icon com_left_icon_zt"></i>专题招聘</a></span>
				</li>
				<li <?php if ($_GET['c']=="partadd") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span>
						<a onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addpartjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_partjob'];?>
','part','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" title="发布兼职" class="f60 bold" style="cursor:pointer"><i class="com_left_icon com_left_icon_jz"></i>发布兼职</a>
					</span> 
				</li>
				<li <?php if ($_GET['c']=="partok"||$_GET['c']=="part") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span><a href="index.php?c=partok&w=1" title="全部兼职"><i class="com_left_icon com_left_icon_jzgl"></i>兼职管理</a></span>
				</li>
				<li <?php if ($_GET['c']=="partapply") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span><a href="index.php?c=partapply" title="兼职报名"><i class="com_left_icon com_left_iconbm"></i>兼职报名</a></span>
				</li>
				<li <?php if ($_GET['c']=="lt_job") {?> class="style01 left_nav_hover" <?php } else { ?> class="style04" <?php }?>>
					<span><a href="index.php?c=lt_job" title="猎头职位"><i class="com_left_icon com_left_icon_lt"></i>猎头职位</a></span>
				</li>
				<li <?php if ($_GET['c']=="tongji") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span><a href="index.php?c=tongji"><i class="com_left_icon com_left_icon_fx"></i>招聘分析</a></span>
				</li>    
				<li <?php if ($_GET['c']=="xjh") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span><a href="index.php?c=xjh"><i class="com_left_icon com_left_icon_zt"></i>宣讲会</a></span>
				</li>
			</ul>
		
		
		

			<ul class="left_nav_ul  <?php if ($_smarty_tpl->tpl_vars['js_def']->value!=4) {?>none<?php }?>" id='def4'>
			
				<li <?php if ($_GET['c']=="pay") {?> class="style01 left_nav_hover" <?php } else { ?> class="style05" <?php }?>>
					<span>
						<a href="index.php?c=pay" title="充值<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
">
							<font color="#FF0000"><i class="com_left_icon com_left_icon_cz"></i>充值<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</font>
						</a>
					</span>
				</li>  

				<li <?php if ($_GET['c']=="paylogtc") {?> class="style01 left_nav_hover" <?php } else { ?> class="style08" <?php }?>>
					<span><a href="index.php?c=paylogtc" title="我的服务"><i class="com_left_icon com_left_icon_myhy"></i>我的服务</a></span>
				</li>
					
				<li <?php if ($_GET['c']=="right"&&$_GET['act']==''||$_GET['c']=="right"&&$_GET['act']=="time"||$_GET['c']=="right"&&$_GET['act']=="added") {?> class="style01 left_nav_hover" <?php } else { ?> class="style12" <?php }?>>
					<span>
						<a href="index.php?c=right" style="color:red;">
							<i class="com_left_icon com_left_icon_fw"></i>VIP招聘服务
							<i class="com_icon com_icon_new"></i>
						</a>
					</span>
				</li>
			
				<li <?php if ($_GET['c']=="paylog") {?> class="style01 left_nav_hover" <?php } else { ?> class="style09" <?php }?>>
					<span><a href="index.php?c=paylog" title="财务明细"><i class="com_left_icon com_left_icon_mx"></i>财务明细</a></span>
				</li>


				<li <?php if ($_GET['act']=="loglist") {?> class="style01 left_nav_hover" <?php } else { ?> class="style09" <?php }?>>
					<span>
						<a href="index.php?c=jobpack&act=loglist" title="赏金收益">
							<i class="com_left_icon com_left_icon_hb"></i>赏金收益
						</a>
					</span>
				</li>

				<li <?php if ($_GET['c']=="integral"||$_GET['c']=="reward_list"||$_GET['c']=="integral_reduce") {?> class="style01 left_nav_hover" <?php } else { ?> class="style12" <?php }?>>
					<span>
						<a href="index.php?c=integral"><i class="com_left_icon com_left_icon_gl"></i><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</a>
					</span>
				</li>

				<li <?php if ($_GET['c']=="coupon_list") {?> class="style01 left_nav_hover" <?php } else { ?> class="style12" <?php }?>>
					<span><a href="index.php?c=coupon_list"><i class="com_left_icon com_left_icon_yhq"></i>优惠卡券</a></span>
				</li>
				
	
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_com_invoice']=='1') {?>
				<li <?php if ($_GET['c']=="invoice") {?> class="style01 left_nav_hover" <?php } else { ?> class="style08" <?php }?>>
					<span><a href="index.php?c=invoice" title="发票列表"><i class="com_left_icon com_left_icon_fp"></i>我的发票</a></span>
				</li>
				<?php }?>
				<li <?php if ($_GET['c']=="ad_order"||$_GET['c']=="ad") {?> class="style01 left_nav_hover" <?php } else { ?> class="style07" <?php }?>>
					<span>
						<a href="index.php?c=ad" title="购买广告位"><i class="com_left_icon com_left_icon_ban"></i>购买广告位</a>
					</span>
				</li>
			
			</ul>
		
			
	
			<ul class="left_nav_ul  <?php if ($_smarty_tpl->tpl_vars['js_def']->value!=7) {?>none<?php }?>" id='def7'>
				<li <?php if ($_GET['c']=="vs") {?> class="style01 left_nav_hover" <?php } else { ?> class="style03" <?php }?>>
					<span><a href="index.php?c=vs" title="修改密码"><i class="com_left_icon com_left_icon_m"></i>修改密码</a></span> 
				</li>  
				
					
				<li <?php if ($_GET['c']=="sysnews") {?> class="style01 left_nav_hover" <?php } else { ?> class="style11" <?php }?>>
					<span><a href="index.php?c=sysnews" title="系统消息"><i class="com_left_icon com_left_icon_xin"></i>系统消息</a></span> 
				</li>
				
				<li <?php if ($_GET['c']=="msg") {?> class="style01 left_nav_hover" <?php } else { ?> class="style03" <?php }?>>
					<span><a href="index.php?c=msg" title="求职咨询"><i class="com_left_icon com_left_icon_zx"></i>求职咨询</a></span> 
				</li>
				
				<li <?php if ($_GET['c']=="pl") {?> class="style01 left_nav_hover" <?php } else { ?> class="style05" <?php }?>>
					<span><a href="index.php?c=pl" title="企业评论"><i class="com_left_icon com_left_icon_pl"></i>面试评价</a></span> 
				</li>
				
			</ul>
	</div>
</div>	
<?php echo '<script'; ?>
>
$(function(){
	$('.left_box_nav_list li').click(function(){
		
		var datadef = $(this).attr('data-def');
		$('.left_nav_ul').addClass('none');
		$('#def'+datadef).removeClass('none');
		$('.left_box_nav_cur').removeClass('left_box_nav_cur');
		$(this).addClass('left_box_nav_cur');
	});
})
<?php echo '</script'; ?>
><?php }} ?>
