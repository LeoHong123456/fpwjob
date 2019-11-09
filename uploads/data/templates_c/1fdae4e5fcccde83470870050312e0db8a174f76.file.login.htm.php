<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:36:52
         compiled from "/www/fpwjob/uploads/app/template/default/ajax/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:9046861025dc51b148f4207-57885684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fdae4e5fcccde83470870050312e0db8a174f76' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/ajax/login.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9046861025dc51b148f4207-57885684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usertype' => 0,
    'member' => 0,
    'config' => 0,
    'username' => 0,
    'uid' => 0,
    'company' => 0,
    'addjobnum' => 0,
    'lt' => 0,
    'reg_com_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51b14978ca9_97816966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51b14978ca9_97816966')) {function content_5dc51b14978ca9_97816966($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php if ($_smarty_tpl->tpl_vars['usertype']->value=="1") {?>  
	<div class="login_after_box">
		<div class="login_after_user_box">
			<div class="login_after_user_photo"> 
				<img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['member']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"> 
			</div>
			<div class="login_after_user_name">
				<div class="">尊敬的个人用户：</div>
				<div class="login_after_user_uname"><span class="login_after_username_id"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></div>
			</div>
		</div>

		<div class="login_after_ztbox">
			<div class="login_after_zt_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=resume">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['member']->value['resume_num'];?>
</span>我的简历
				</a>
			</div>

			<div class="login_after_zt_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job"> 
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['member']->value['sq_jobnum'];?>
</span>申请职位
				</a>
			</div>
			<div class="login_after_zt_list login_after_zt_list_end">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=favorite">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['member']->value['fav_jobnum'];?>
</span>收藏职位
				</a>
			</div>
		</div>

		<div class="login_after_bthbox"> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=expect&add=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="login_after_userbth">创建简历</a> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=resume" class="login_after_usergz">简历管理</a> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=atn" class="login_after_userbth">关注的企业</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class=" login_after_userbthend">进入管理中心</a> 
			<a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');" class="login_after_bttc"> 安全退出</a>
		</div>	
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=="2") {?>
	<div class="login_after_box">
		<div class="login_after_userlogo">
			<div class="login_after_comlogo">
				<img width="80" height="80"src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);">
			</div>
			<div class="login_after_combg"></div>		
		</div>
		<div class="login_after_username">你好！<span class="login_after_username_id"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></div>
		<div class="login_after_ztbox">
			<div class="login_after_zt_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=hr">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['company']->value['sq_job'];?>
</span>应聘简历
				</a>
			</div>
			<div class="login_after_zt_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job&w=1">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['company']->value['job'];?>
</span>招聘职位
				</a>
			</div>
			<div class="login_after_zt_list login_after_zt_list_end">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=talent_pool">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['company']->value['status2'];?>
</span>收藏简历
				</a>
			</div>

			<div class="login_after_bthbox"> 
				<?php if ($_smarty_tpl->tpl_vars['addjobnum']->value=='1') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=jobadd" class="login_after_bth">发布职位</a> 
				<?php } else { ?> 
					<a href="javascript:void(0)" onclick="jobaddurl('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
')" class="login_after_bth">发布职位</a>
				<?php }?> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class=" login_after_bthend">进入管理中心</a> 
				<a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');" class="login_after_bttc"> 安全退出</a> 
			</div>
		</div>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=="3") {?>
	<div class="login_after_box">
		<div class="login_after_user_box">
			<div class="login_after_user_photo"> 
				<img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['lt']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);"> 
			</div>
			<div class="login_after_user_name">
				<div class="">尊敬的猎头用户：</div>
				<div class="login_after_user_uname"><span class="login_after_username_id"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></div>
			 </div>
		</div>
		
		<div class="login_after_ztbox">
			<div class="login_after_zt_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=entrust_resume">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['lt']->value['entrust'];?>
</span>委托简历
				</a>
			</div>
			<div class="login_after_zt_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job&s=1">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['lt']->value['lt_job'];?>
</span>招聘职位
				</a>
			</div>
			<div class="login_after_zt_list login_after_zt_list_end">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=down_resume">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['lt']->value['lt_status2'];?>
</span>下载简历
				</a>
			</div>
		</div>
		<div class="login_after_bthbox"> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=jobadd" class="login_after_userbth">发布职位</a> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=search_resume" class="login_after_usergz">搜索简历</a> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=yp_resume" class="login_after_userbth">收到简历</a> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class=" login_after_userbthend">进入管理中心</a> 
			<a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');" class="login_after_bttc"> 安全退出</a> 
		</div>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=="4") {?>
	<div class="login_after_box">
		<div class="login_after_user_box">
			<div class="login_after_user_photo"> 
				<img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['member']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);">
			</div>
			<div class="login_after_user_name">
				<div class="">尊敬用户你好！</div>
				<div class="login_after_user_uname">
					<span class="login_after_username_id"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
				</div>
			</div>
			<div class="login_after_ztbox">
				  <div class="login_after_zt_list">
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=subject">
						<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['member']->value['subject'];?>
</span>发布课程
					</a>
				</div>
			<div class="login_after_zt_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=sign_up&status=2">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['member']->value['baoming'];?>
</span>未联系
				</a>
			</div>
			<div class="login_after_zt_list login_after_zt_list_end">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=message&status=1">
					<span class="login_after_zt_list_n"><?php echo $_smarty_tpl->tpl_vars['member']->value['zixun'];?>
</span>未回复
				</a>
			</div>
		</div>
		<div class="login_after_bthbox"> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=subject_add" class="login_after_userbth">发布课程</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=team" class="login_after_usergz">管理讲师</a> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=sign_up" class="login_after_userbth">预约名单</a> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class=" login_after_userbthend">进入管理中心</a> 
			<a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');" class="login_after_bttc"> 安全退出</a>
		</div>
	</div>
<?php } else { ?>
 	<div class="index_frame_right_tit">
		<span class="index_frame_right_tit_s"><i class="index_frame_right_tit_line"></i>用户登录</span> 
	</div>
	
 
	<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']=='1') {?>
		<div class="wxcode_login" title="微信扫一扫登录" style="display:block;"><span class="wxcode_login_c"><i class="wxcode_login_c_icon">扫码登录</i></span></div>
		<div class="normal_login none" title="普通登录"></div>
	<?php }?>
	<div class="wx_login_show none">
		<div id="wx_login_qrcode" class="wxlogintext">正在获取二维码...</div>
		<div class="wxlogintxt">请使用微信扫一扫登录</div>
	</div>
	
	<div id="login_normal">
		<div class="index_frist_pic"> <span class="index_frist_pic_bg"></span></div>
		<div class="index_frist_hi"> Hi , 你好！</div>
		<div class="index_frist_login_bth">
			<a href="<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
" class="index_frist_login_bth_l">登录</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['reg_com_url']->value;?>
" class="index_frist_login_bth_reg">注册</a>
		</div>
		<div class="index_frist_login_sj">
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
" class="index_frist_login_bth_sj_a">使用手机动态码登录</a> 
			<?php }?>

			<a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
"  class="index_frist_login_bth_m">找回密码？</a>
		</div>
        
		<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1||$_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
			<div class="index_frist_login_other"> 
				<div class="index_frist_login_other_tit"> 
					<span class="index_frist_login_other_tit_s">其他账号登录</span>
				</div>
			</div>
			<div class="index_frist_login_other_box">
				<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
" class="index_frist_login_other_wx"></a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php" class="index_frist_login_other_qq"></a>
				<?php }?> 
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
" class=" index_frist_login_other_xl"></a>
				<?php }?> 
				
				
			</div>
		<?php }?>
	</div>      
<?php }?>

<style>#label{height:34px; line-height:34px;border:1px solid #e6e6e6}</style>

<?php echo '<script'; ?>
>
	$(document).ready(function(){
 		 
		var setval;
		$('.wxcode_login').click(function(data){
			$('.wxcode_login').hide();
			$('.normal_login').show();
			$('#login_normal').hide();
			$('.login_box_h_list').hide();
			$('.wx_login_show').show();
			$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'wxlogin'),$_smarty_tpl);?>
',{t:1},function(data){
				if(data==0){
					$('#wx_login_qrcode').html('二维码获取失败..');
				}else{
					$('#wx_login_qrcode').html('<img src="'+data+'" width="100" height="100">');
					setval = setInterval("wxorderstatus()", 2000); 
				}
			});

		});
		$('.normal_login').click(function(data){
			$('.wxcode_login').show();
			$('.normal_login').hide();
			$('#login_normal').show();
			$('.login_box_h_list').show();
			$('.wx_login_show').hide();
			clearInterval(setval);
		});
	});

function wxorderstatus() { 
	$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'getwxloginstatus'),$_smarty_tpl);?>
',{t:1},function(data){
		var data=eval('('+data+')');
		if(data.url!='' && data.msg!=''){
			layer.msg(data.msg, 2, 9,function(){window.location.href=data.url;});
		}else if(data.url){
			window.location.href=data.url;
		}
	});
}
function jobaddurl(num,integral_job){ 
	var gourl= weburl+'/member/index.php?c=jobadd';
		checkType = 'addjob';

	var url = weburl + '/index.php?m=ajax&c=ajax_day_action_check';
		$.post(url,
			{'type': checkType},
			function(data){
				data = eval('(' + data + ')');
				if(data.status == -1){
					layer.msg(data.msg, 2, 8);
				}else if(data.status == 1){
					if(num==1){
						window.location.href=gourl;
						window.event.returnValue = false;
						return false;
					}else if(num==2){
						var msg='套餐已用完，您可以<a href="'+weburl+'/member/index.php?c=right&act=added" style="color:red;">购买增值包</a>！是否继续？';
						layer.confirm(msg, function(){
							layer.closeAll();
							window.location.href=weburl+"/member/index.php?c=right&act=added"; 
							
						});
					}else if(num==0){
						var msg='会员已到期，您可以<a href="'+weburl+'/member/index.php?c=right" style="color:red">购买会员</a>！是否继续？';

						layer.confirm(msg, function(){
							window.location.href=weburl+"/member/index.php?c=right"; 
						});  
 						
 					}
				}
			}
		);
	}
<?php echo '</script'; ?>
><?php }} ?>
