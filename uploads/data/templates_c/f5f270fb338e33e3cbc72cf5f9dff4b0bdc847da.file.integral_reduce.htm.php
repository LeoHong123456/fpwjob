<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 18:27:37
         compiled from "/www/fpwjob/uploads/app/template/member/com/integral_reduce.htm" */ ?>
<?php /*%%SmartyHeaderCode:13659548245dc54319566135-70867381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f270fb338e33e3cbc72cf5f9dff4b0bdc847da' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/integral_reduce.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13659548245dc54319566135-70867381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc54319593c80_21752847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc54319593c80_21752847')) {function content_5dc54319593c80_21752847($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody">
		<style>.my_table_msg th{ text-align:right}</style>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class=right_box>
			<div class=admincont_box>
				
				<div class="yun_com_tit">
					<span class="yun_com_tit_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</span>
				</div>

				<div class="job_list_tit">
					<ul class="">
						<li <?php if ($_GET['c']=="integral") {?>class="job_list_tit_cur"<?php }?>>
							<a href="index.php?c=integral"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
任务</a></li>
						
						<li <?php if ($_GET['c']=="integral_reduce") {?>  class="job_list_tit_cur"<?php }?>>
							<a href="index.php?c=integral_reduce">消费规则</a></li>
						
						<li <?php if ($_GET['c']=="reward_list") {?>  class="job_list_tit_cur"<?php }?>>
							<a href="index.php?c=reward_list"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a></li>
					</ul>
				</div>
        
				<div class="com_body">
					<div class="integral_cont">

						<ul class="integral_cont_list">
							<li> 
								<span class="integral_cont_list_span">发布职位</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
</b>  元/ 份 </span> 
							</li>

							<li> 
								<span class="integral_cont_list_span">刷新职位</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
</b>  元/ 份 </span> 
							</li>

							<li> 
								<span class="integral_cont_list_span">发布兼职</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_partjob'];?>
</b>  元/ 份 </span>
							</li>

							<li> 
								<span class="integral_cont_list_span">刷新兼职</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_partjobefresh'];?>
</b>  元/ 份 </span> 
							</li>
					  
							<li> 
								<span class="integral_cont_list_span">下载人才简历</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_down_resume'];?>
</b>  元/ 份 </span> 
							</li>
							
							<li> 
								<span class="integral_cont_list_span">发送面试人才</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_interview'];?>
</b>  元/ 份 </span> 
							</li>
														
							<li> 
								<span class="integral_cont_list_span">发布紧急招聘</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['com_urgent'];?>
</b>  元/ 天 </span> 
							</li>

							<li> 
								<span class="integral_cont_list_span">发布推荐招聘</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['com_recjob'];?>
</b>   元/ 天 </span> 
							</li>
							
							<li> 
								<span class="integral_cont_list_span">职位自动刷新</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
</b>  元/ 天 </span> 
							</li>
							<li> 
								<span class="integral_cont_list_span">发布置顶职位</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job_top'];?>
</b>  元/ 天 </span> 
							</li>
							<li> 
								<span class="integral_cont_list_span">发布推荐兼职</span> 
								<span class="integral_cont_list_span_c" style="border:none"> 消费 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['com_recpartjob'];?>
</b>  元/ 天 </span> 
							</li>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
