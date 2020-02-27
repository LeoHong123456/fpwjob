<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:58:48
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/member_right.htm" */ ?>
<?php /*%%SmartyHeaderCode:69694205e4c884871fd70-50154622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02f7b1bf1f7afdab219043cf84849657277cc312' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/member_right.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69694205e4c884871fd70-50154622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
    'rows' => 0,
    'list' => 0,
    'v' => 0,
    'statis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c8848787795_43894491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c8848787795_43894491')) {function content_5e4c8848787795_43894491($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>会员服务</title>
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/account.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
</head> 

<body>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="m_content">
	<div class="wrap">
		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div class="m_inner_youb fr">
			<div class="report_uaer_list fl">
				<ul>
					<li class="report_uaer_list_cur"><a href="index.php?c=right" >套餐会员</a></li>
					<li><a href="index.php?c=right&act=time" >时间会员</a></li> 
					<li><a href="index.php?c=right&act=added" >增值包</a></li> 
				</ul>
			</div>
			
			<div class="clear"></div>
			
			<div class="package_box">
				<div class="search_con fl">
				
					<iframe id="fdingdan"  name="fdingdan" onload="returnmessage('fdingdan');" style="display:none"></iframe>
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['list']->value['service_time']>0) {?>	
							<div class="com_grade_box fl">
								<ul>
									<li>
										<div class="com_grade_rline"></div>
										<div class="com_grade_tit"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</div>
										
										<div class="com_grade_money">
											<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?>
											
												<span class="com_grade_money_n" id="need_integral<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
													<?php if ($_smarty_tpl->tpl_vars['list']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['list']->value['time_end']>time()) {?>
														<?php echo $_smarty_tpl->tpl_vars['list']->value['yh_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['list']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

													<?php }?>
												</span>

												<?php if ($_smarty_tpl->tpl_vars['list']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['list']->value['time_end']>time()) {?>
													<i class="serve_zz_h_nmb_tcjg"><?php echo $_smarty_tpl->tpl_vars['list']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
</i>
												<?php }?>
												<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
/
												<span><?php if ($_smarty_tpl->tpl_vars['list']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['list']->value['service_time'];?>
天<?php } else { ?>永久<?php }?></span>
											
											<?php } else { ?>
												<span class="com_grade_money_n"> ￥</span>
												<span class="com_grade_money_n" id="need_price<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
													<?php if ($_smarty_tpl->tpl_vars['list']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['list']->value['time_end']>time()) {?>
														<?php echo $_smarty_tpl->tpl_vars['list']->value['yh_price'];?>

													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['list']->value['service_price'];?>

													<?php }?>
												</span>

												<?php if ($_smarty_tpl->tpl_vars['list']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['list']->value['time_end']>time()) {?>
													<i class="serve_zz_h_nmb_tcjg">￥<?php echo $_smarty_tpl->tpl_vars['list']->value['service_price'];?>
</i>
												<?php }?>
												/
												<span><?php if ($_smarty_tpl->tpl_vars['list']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['list']->value['service_time'];?>
天<?php } else { ?>永久<?php }?></span>
											 
											<?php }?>

										</div>
										
										<?php if ($_smarty_tpl->tpl_vars['list']->value['type']==1) {?>
											<div class="com_grade_list">
												<i class="com_grade_list_icon"></i>
												<span class="com_grade_list_name">可发布职位数：</span>       
												<span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['list']->value['lt_job_num'];?>
个</span>
											</div>
											
											<div class="com_grade_list">
												<i class="com_grade_list_icon"></i>
												<span class="com_grade_list_name">可下载简历数：</span>   
												<span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['list']->value['lt_resume'];?>
次</span>
											</div>
											
											<div class="com_grade_list">
												<i class="com_grade_list_icon"></i><span class="com_grade_list_name">刷新职位数：</span>   
												<span class="com_grade_list_n"><?php echo $_smarty_tpl->tpl_vars['list']->value['lt_breakjob_num'];?>
次</span>
											</div>
										<?php } else { ?> 
											<div class="com_grade_list"><?php echo $_smarty_tpl->tpl_vars['list']->value['explains'];?>
 </div>
										<?php }?> 


										<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?>
 										
											<div class="serve_zz_but">
												<a href="javascript:jfbuy('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');" class="added_list_gm">立即购买</a>
											</div>
										
										<?php } else { ?>

											<div class="serve_zz_but">
												<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" id='myform<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
' >
													<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" name="comvip" />
													<a href="javascript:buyvip('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');" class="added_list_gm">立即购买</a>
												</form>
											</div>
										
										<?php }?>

										<div class="clear"></div>
										
										<div class="yhtime_box">
											<?php if ($_smarty_tpl->tpl_vars['list']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['list']->value['time_end']>time()&&$_smarty_tpl->tpl_vars['list']->value['coupon']) {?>
												赠送：<?php echo $_smarty_tpl->tpl_vars['list']->value['coupon'];?>

											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['list']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['list']->value['time_end']>time()) {?> 
												<div class="yhtime">
													<div class="">活动优惠时间：</div>
													<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['time_start'],'%Y-%m-%d');?>
至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['time_start'],'%Y-%m-%d');?>

												</div>
											<?php }?>
										</div>
									</li>           
								</ul>
							</div>
						<?php }?>
					<?php } ?> 
				</div>
			</div>
		</div>
	</div>  
</div>

<?php echo '<script'; ?>
>
	function buyvip(id){
		$('#myform'+id).submit();
	}
	
	var ky = '<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
';

	function jfbuy(id){
		
		var need = $.trim($("#need_integral"+id).html());
	
		if(parseInt(ky)<parseInt(need)){
			
			layer.msg("您的积分不足，请先充值！", 2,8,function(){
				window.location.href="index.php?c=pay";
			});
			
		}else{
			
			$.post('index.php?c=pay&act=dkzf',{id:id,integral:need},function(data){
				
				if(data){
					data=eval('('+data+')'); 
					
					if(data.error==1){
						
						if(data.url){
							layer.msg(data.msg, 2,8,function(){
								window.location.href=data.url;
							});
						}else{
							layer.msg(data.msg, 2,8);
						}
		     			
		     		}else if(data.error==0){
		     			layer.msg(data.msg, 2,9,function(){
							window.location.href='index.php?c=paylogtc';
						}); 
		    		}
				}
				
			})
			
		}
	
	}

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
