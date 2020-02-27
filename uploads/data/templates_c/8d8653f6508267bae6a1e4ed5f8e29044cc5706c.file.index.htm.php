<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 10:09:36
         compiled from "/www/fpwjob/uploads/app/template/company/default/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:933415855e2e46605e96e9-34669853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d8653f6508267bae6a1e4ed5f8e29044cc5706c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/company/default/index.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '933415855e2e46605e96e9-34669853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'com_style' => 0,
    'title' => 0,
    'com' => 0,
    'comrat' => 0,
    'row' => 0,
    'usertype' => 0,
    'isatn' => 0,
    'uid' => 0,
    'ComMember' => 0,
    'userid_job' => 0,
    'wlist' => 0,
    'num' => 0,
    'pre' => 0,
    'invite_resume' => 0,
    'show' => 0,
    'ProductList' => 0,
    'score' => 0,
    'mlist' => 0,
    'v' => 0,
    'urlmsg' => 0,
    'jlist' => 0,
    'pagenav' => 0,
    'city' => 0,
    'city_type' => 0,
    'city_name' => 0,
    'city_index' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'keylist' => 0,
    'looktype' => 0,
    'look_msg' => 0,
    'xjh' => 0,
    'clist' => 0,
    'NewsList' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e46607e3836_68072326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e46607e3836_68072326')) {function content_5e2e46607e3836_68072326($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_show')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.show.php';
if (!is_callable('smarty_function_score')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.score.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
if (!is_callable('smarty_function_image')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.image.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/comapply.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="yun_content">
		<div class="current_Location png"> 您当前的位置：
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> >
			<a href="<?php echo smarty_function_url(array('m'=>'company'),$_smarty_tpl);?>
">企业列表</a> > 
			<span>企业详情 </span>
		</div>

		<div class="com_show_topbox" >
			<div class="com_show_topleft">
				<div class="com_show_toplogo">
					<img src="<?php echo $_smarty_tpl->tpl_vars['com']->value['logo'];?>
" width="140" height="140" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" alt="<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
" />
				</div>
			</div>
			
			<div class="com_show_topcont">
				<div class="com_show_comname">
					<h1 class="com_show_comname_n">
						<?php echo mb_substr($_smarty_tpl->tpl_vars['com']->value['name'],0,20,'utf-8');?>
  
						<?php if ($_smarty_tpl->tpl_vars['comrat']->value['com_pic']!="0"&&$_smarty_tpl->tpl_vars['comrat']->value['com_pic']!='') {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['comrat']->value['com_pic'];?>
" width="18" height="18" title="会员等级" /> 
						<?php }?>    
						<?php if ($_smarty_tpl->tpl_vars['row']->value['yyzz_status']=='1') {?><i class="job_qy_rz_icon"></i><?php }?>
					</h1> 
					
					<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?> 
						<?php if ($_smarty_tpl->tpl_vars['isatn']->value['id']) {?>
							<a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
' class="com_show_comgz company_att">取消关注</a>
						<?php } else { ?>
							<a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
' class="com_show_comgz">关注</a>
						<?php }?> 
					<?php } else { ?> 
						<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
							<a href="javascript:void(0)" onclick="layer.msg('只有个人用户才能关注', 2, 8)" class="com_show_comgz">+ 关注</a>
                        <?php } else { ?>
							<a href="javascript:void(0)" onclick="showlogin('1');" class="com_show_comgz">+ 关注</a>
                        <?php }?>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['ComMember']->value['source']==6&&$_smarty_tpl->tpl_vars['ComMember']->value['claim']==0&&$_smarty_tpl->tpl_vars['ComMember']->value['email']!='') {?>
						<a href="javascript:claim('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'claim','uid'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
');" class="com_show_comgz">认领</a>
					<?php }?>
					
					<div id="status_div" style="display:none; width:350px;">
						<div id="claimmsg"></div>
						<div class="admin_qx_bth" style="text-align:center;padding:10px;border-radius:20px;">
							<input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" style="width:70px;height:29px;color:#fff;border:none;font-size:14px;border-radius:3px;background:#f60;" value='关闭'>
						</div>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
						<div class="jobhr_chat">
							<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
							<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
                            <a href="javascript:void(0);" onclick="jobChat('<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
',<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_type'];?>
,'<?php echo $_smarty_tpl->tpl_vars['userid_job']->value['id'];?>
','com')">主管直聊</a>
                            <?php } else { ?>
                            <a href="javascript:void(0);" onclick="layer.msg('求职者才能和主管直聊',2,8)">主管直聊</a>
                            <?php }?> 
							<?php } else { ?>
                            <a href="javascript:void(0);" onclick="showlogin('1')">主管直聊</a>
                            <?php }?>
                        </div>
					<?php }?>
				</div>

				<div class="com_show_cominfo">
					<?php if ($_smarty_tpl->tpl_vars['com']->value['hy_info']) {?>
						<span class="com_show_cominfo_s">
							<i class="com_show_cominfo_icon com_show_cominfo_icon_hy"></i>
							<?php echo $_smarty_tpl->tpl_vars['com']->value['hy_info'];?>

						</span>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['com']->value['provinceid']) {?>
						<span class="com_show_cominfo_s">
							<i class="com_show_cominfo_icon com_show_cominfo_icon_city"></i>
							<?php echo $_smarty_tpl->tpl_vars['com']->value['provinceid'];?>

							<?php if ($_smarty_tpl->tpl_vars['com']->value['cityid']) {?> - <?php echo $_smarty_tpl->tpl_vars['com']->value['cityid'];
}?>
						</span> 
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['com']->value['pr_info']) {?>
						<span class="com_show_cominfo_s">
							<i class="com_show_cominfo_icon com_show_cominfo_icon_xz"></i>
							<?php echo $_smarty_tpl->tpl_vars['com']->value['pr_info'];?>
 
						</span>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['com']->value['mun_info']) {?>
						<span class="com_show_cominfo_s ">
							<i class="com_show_cominfo_icon com_show_cominfo_icon_rs"></i>
							<?php echo $_smarty_tpl->tpl_vars['com']->value['mun_info'];?>
 
						</span> 
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['com']->value['money']) {?>
						<span class="com_show_cominfo_s">
							<i class="com_show_cominfo_icon  com_show_cominfo_icon_zj"></i>
							注资<?php echo $_smarty_tpl->tpl_vars['com']->value['money'];?>

							<?php if ($_smarty_tpl->tpl_vars['com']->value['moneytype']==1) {?>万元<?php } else { ?>万美元<?php }?> 
						</span>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['com']->value['sdate']) {?>
						<span class="com_show_cominfo_s">
							<i class="com_show_cominfo_icon  com_show_cominfo_icon_time"></i>
							<?php echo $_smarty_tpl->tpl_vars['com']->value['sdate'];?>
创办
						</span>
					<?php }?>
				</div>
				
				<?php if ($_smarty_tpl->tpl_vars['com']->value['welfare_n']) {?>
					<div class="com_welfare ">
						<?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['com']->value['welfare_n']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
?>
							<span class="com_welfare_s "><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</span>
						<?php } ?> 
					</div>
				<?php }?>

				<div class="com_show_info_sj_box">
					<div class="com_show_info_sj">
						<div class="com_show_info_sj_list com_show_info_sj_list_frist">
							<span class="com_show_info_sj_list_n"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</span>
							招聘职位 
						</div>
						<div class="com_show_info_sj_list">
							<span class="com_show_info_sj_list_n"><?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
%</span>
							简历及时处理率
						</div>
						<div class="com_show_info_sj_list">
							<span class="com_show_info_sj_list_n"><?php echo $_smarty_tpl->tpl_vars['invite_resume']->value;?>
</span>
							邀请面试
						</div>
						<div class="com_show_info_sj_list com_show_info_sj_list_end">
							<span class="com_show_info_sj_list_n">
								<?php if ($_smarty_tpl->tpl_vars['ComMember']->value['login_date']) {?>
									<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ComMember']->value['login_date'],"%Y-%m-%d");?>

								<?php } else { ?>
									未登录 
								<?php }?>
							</span>企业最近登录
						</div>
					</div>
				</div>
			</div>

<div class="com_mokewm">
<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_haibao_isopen']==1) {?>
 <div class="com_mok"> <a href="javascript:void(0);" onmousemove="$('#whb').show();" onmouseout="$('#whb').hide();" class="com_job_cz_wxhb " rel="nofollow">微信招聘海报</a>
            <div class="job_hb_box none "  id="whb">
              <div class="job_hb_box_left">
                <div class="job_hb_box_leftewm"> <img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'company','toa'=>'whb','toid'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
" width="150" height="150" /></div>
                <div class="job_hb_box_leftewm_p"> ↑微信扫上方二维码↑</div>
              </div>
              <div class="job_hb_box_right">
                <div class="job_hb_box_list"> <span class="job_hb_box_list_s">1</span> 微信扫描二维码<br>
                  选择要生成的海报风格 </div>
                <div class="job_hb_box_list"> <span class="job_hb_box_list_s">2</span> 长按图片保存到相册-分享到朋友圈<br>
                  转发给朋友/群/员工内推打印张贴 </div>
                <div class="job_hb_box_list"> <span class="job_hb_box_list_s">3</span> 求职者只需扫海报二维码<br>
                  即可应聘 </div>
              </div>
            </div>
          </div>
		  <?php }?>
          <div class="com_mok"> <a href="javascript:void(0);" onmousemove="$('#getwapurl').show();" onmouseout="$('#getwapurl').hide();" class="com_job_cz_wx" rel="nofollow">分享到微信</a>
            <div class="comapply_sq_r_cy none" id="getwapurl">
              <div class="comapply_sq_r_cont"> 
                <div class="comapply_sq_r_tipa"> 微信扫一扫：分享</div>
                <img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'company','toa'=>'show','toid'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
" width="130" height="130" />
                <div class="comapply_sq_r_tipsm"> ↑微信扫上方二维码↑<br>
                  便可将本文分享至朋友圈</div>
              </div>
            </div>
            </div>      
            
            </div>
			
            
		</div>

		<div class="con_show_left">
            <div class="com_show_leftbox none"  id="companybusiness" data-slide='1'>
           <div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>工商信息</span></div>
           
				<div class="com_show_leftcont">
 				<div class="business none" id="businessInfo">
					<div class="businessInfo">
						<ul class="basicMsgList clearfix">
							<li>
								<div class="clearfix"><span>统一社会信用代码：</span><em id="creditCode"></em></div>
							</li>
							<li>
								<div class="clearfix"><span>成立日期：</span><em id="estiblishTime"></em></div>
							</li>
							<li>
								<div class="clearfix"><span>组织机构代码：</span><em id="orgNumber"></em></div>
							</li>
							<li>
								<div class="clearfix"><span>经营期限：</span><em id="Time"></em></div>
							</li>
							<li>
								<div class="clearfix"><span>企业类型：</span><em id="companyOrgType"></em></div>
							</li>
							<li>
								<div class="clearfix"><span>登记机关：</span><em id="regInstitute"></em></div>
							</li>
							<li>
								<div class="clearfix"><span>经营状态：</span><em id="regStatus"></em></div>
							</li>
							<li>
								<div class="clearfix"><span>注册资本：</span><em id="regCapital"></em></div>
							</li>
						</ul>
						
						<dl class="basicMsgList"><dt>注册地址：</dt><dd id="regLocation"></dd></dl>
						<dl class="basicMsgList mt20"><dt>经营范围：</dt><dd id="businessScope"></dd></dl>
						
						<div class="qxb clearfix">
							<div class="qxb_tg">
								<span>以上内容由</span>
								<div class="hxb">
									<a href="" class="tianyancha" id="tianyancha" target='_blank'></a>
								</div>
								<span>提供</span>
							</div>
						</div>

					</div>
				</div>	</div>
                </div>
                 <div class="com_show_leftbox">
           <div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>公司简介</span></div>
                <div class="com_show_leftcont" id="company" >
                 <div class="con_show_introduction">
					<?php if ($_smarty_tpl->tpl_vars['com']->value['content']) {?>
                        <div style="width:100%;height:auto; overflow:hidden" id="com_content" class="company_img_auto">
                            <?php echo $_smarty_tpl->tpl_vars['com']->value['content'];?>

                        </div>
                        <div class="company_show_more none">
                            <a href="javascript:;" onclick="showcc()">查看更多</a>
                        </div>
					<?php } else { ?>
                        <div class="firm_ment">
                            <div class="firm_tips_no"> 该企业还没有填写公司简介! </div>
                        </div>
					<?php }?>
				</div>

				<div class="clear"></div>
                
				<div class="complay_h1_share">
					<span class="Company_post_s_fl">分享到：</span>
					<span>
						<div class="pyshare bdsharebuttonbox bdshare-button-style0-16" data-tag="share_1">
							<a class="li s1 bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
							<a class="li s2 bds_renren" data-cmd="renren" title="分享到人人网"></a>
							<a class="li s3 bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
							<a class="li s4 bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
							<a class="li s5 bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
							<a class="li s6 bds_weixin" data-cmd="weixin" title="分享到微信"></a>
							<div class="clear"></div>
						</div>
 					</span>
				</div>
				</div>
                </div>
				<?php echo smarty_function_show(array(),$_smarty_tpl);?>

				
				<?php if (!empty($_smarty_tpl->tpl_vars['show']->value)) {?>
                    <div class="com_show_leftbox">
           <div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>公司环境</span></div>
                    <div class="com_show_leftcont">

                    <div class="com_show_l_box">
                        <div class="com_show_image_box">
                            <div class="com_show_image" id="layer-pic">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <div class="com_show_image_list">
                                    <a class="image_gall" href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['picurl'];?>
" lay-src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['picurl'];?>
" width="210" height="160" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" /> </a>
                                </div>
                                <?php } ?>
							</div>
                        </div>
                    </div>       </div>
				</div>
                <?php }?> 
                
				
				<?php if (!empty($_smarty_tpl->tpl_vars['ProductList']->value)) {?>
                 <div class="com_show_leftbox">
           <div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>公司产品</span></div>
           
                    <div class="com_show_leftcont">

                    <div class="com_show_l_box">
                        <div class="com_show_cp_box">
                            <ul class="com_show_cp">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ProductList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <li>
                                    <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'productshow','id'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'pid'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" target="_blank"> 
										<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" width="208" height="145" />
                                        <div class="com_show_cp_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</div>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>      </div>  </div> 
				<?php }?> 
				
				<?php echo smarty_function_score(array('uid'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'item'=>'score'),$_smarty_tpl);?>
 
					
				<?php if ($_smarty_tpl->tpl_vars['score']->value['num']) {?>
                 <div class="com_show_leftbox">
           <div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>面试评价</span></div>
				            <div class="com_show_leftcont">
					<div class="evaluate">
						<div class="evaluate_pf_otherbox evaluate_pf_otherbox_bor">
							<div class="evaluate_pf_left">
								<div class="evaluate_pf_left_tit">
									综合评分<span class="evaluate_pf_left_tit_n">( 来自<?php echo $_smarty_tpl->tpl_vars['score']->value['num'];?>
人评价 )</span>
								</div>
								<div class="evaluate_pf_other">
									<div class="evaluate_pf_other_name">描述相符：</div>
									<div class="evaluate_pf_other_start">
										<i class="evaluate_pf_other_start_p" style="width:<?php echo $_smarty_tpl->tpl_vars['score']->value['desscore']/5*100;?>
%"></i>
									</div>
									<div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['score']->value['desscore'];?>
</div>
								</div>
								<div class="evaluate_pf_other">
									<div class="evaluate_pf_other_name">面试官：</div>
									<div class="evaluate_pf_other_start">
										<i class="evaluate_pf_other_start_p" style="width:<?php echo $_smarty_tpl->tpl_vars['score']->value['hrscore']/5*100;?>
%"></i>
									</div>
									<div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['score']->value['hrscore'];?>
</div>
								</div>
								<div class="evaluate_pf_other">
									<div class="evaluate_pf_other_name"> 公司环境：</div>
									<div class="evaluate_pf_other_start">
										<i class="evaluate_pf_other_start_p" style="width:<?php echo $_smarty_tpl->tpl_vars['score']->value['comscore']/5*100;?>
%"></i>
									</div>
									<div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['score']->value['comscore'];?>
</div>
								</div>
							</div>

							<div class="evaluate_pf_right">
								综合：<span class="evaluate_pf_right_fs"><?php echo $_smarty_tpl->tpl_vars['score']->value['score'];?>
</span> 分
							</div>
						</div>

						<?php  $_smarty_tpl->tpl_vars['mlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"5","id"=>"\'auto.id\'","item"=>"\'mlist\'","nocache"=>"")
;');$List=array();
		
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
		$where = "`status`='1'";
		global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		if($paramer['id']){
			$where.=" and `cuid`='".$paramer['id']."'";
		}
		if($paramer['jobid']){
			$where.=" and `jobid`='".$paramer['jobid']."'";
		}
		
		
		if($paramer['limit']){
			$limit=" LIMIT ".$paramer['limit'];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_msg",$where,$Purl,'','0',$_smarty_tpl);
		}
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer['order']."`";
		}else{
			$where.="  ORDER BY `id`";
		}
		if($paramer['sort']){
			$where.=" ".$paramer['sort'];
		}else{
			$where.=" DESC";
		}

		$mlist=$db->select_all("company_msg",$where.$limit);
		
		if(is_array($mlist)){
			include  PLUS_PATH."/com.cache.php";
			foreach($mlist as $key=>$value){
				
				$UIDList[]=$value['uid'];
				$Jobid[] = $value['jobid'];
			
			}
			$userlist=$db->select_all("resume","`uid` IN (".@implode(',',$UIDList).")","`uid`,`name`,`photo`,`sex`");

			$jobList=$db->select_all("company_job","`id` IN (".@implode(',',$Jobid).")","`id`,`name`");
			
			if(is_array($userlist)){
				foreach($userlist as $v){
							
					$msgUser[$v['uid']]= $v['name'];
					$msgPhoto[$v['uid']]= $v['photo'];
					$msgSex[$v['uid']]= $v['sex'];
				}
			}
			
			if(is_array($jobList)){
				foreach($jobList as $vv){
							
					$msgJob[$vv['id']]= $vv['name'];
						
				}
				$_smarty_tpl->tpl_vars['msgjob']=new Smarty_Variable;
				$_smarty_tpl->tpl_vars['msgjob']->value = $jobList;
			}
			
            foreach($mlist as $k=>$v){
				if($v['isnm']=='1'){
					$mlist[$k]['name']= '匿名';
					$mlist[$k]['photo']= $config['sy_weburl']."/".$config['sy_member_icon'];
				}else{
					if($msgPhoto[$v['uid']] &&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$msgPhoto[$v['uid']]))){
						$mlist[$k]['photo']= ".".$msgPhoto[$v['uid']];
					}else{
 						if($msgSex[$v['uid']]==1){
							$mlist[$k]['photo']= $config['sy_weburl']."/".$config['sy_member_icon'];
						}else{
							$mlist[$k]['photo']= $config['sy_weburl']."/".$config['sy_member_iconv'];
						}
						
					}
					$mlist[$k]['name']= $msgUser[$v['uid']];
				}
				$mlist[$k]['comscore']= sprintf("%.1f", $v[comscore]);
				$mlist[$k]['hrscore']= sprintf("%.1f", $v[hrscore]);
				$mlist[$k]['desscore']= sprintf("%.1f", $v[desscore]);
			
				$mlist[$k]['scorepf']= round( $v[score]/5 * 100,2);
				$mlist[$k]['comscorepf']= round( $v[comscore]/5 * 100,2);
				$mlist[$k]['hrscorepf']= round( $v[hrscore]/5 * 100,2);
				$mlist[$k]['desscorepf']= round( $v[desscore]/5 * 100,2);
				if($v[tag]){
					$tags = explode(',',$v[tag]);
					$newtags = array();
					foreach($tags as $tv){
						$newtags[] = $comclass_name[$tv];
					}
					
					$mlist[$k]['tags']= $newtags;
				}
				$mlist[$k]['jobname']= $msgJob[$v['jobid']];
            }
		}
		$mlist = $mlist; if (!is_array($mlist) && !is_object($mlist)) { settype($mlist, 'array');}
foreach ($mlist as $_smarty_tpl->tpl_vars['mlist']->key => $_smarty_tpl->tpl_vars['mlist']->value) {
$_smarty_tpl->tpl_vars['mlist']->_loop = true;
?>
							<div class="evaluate_userlist">
								<div class="evaluate_username">
									<div class="evaluate_userphoto"><img src="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" width="80" height="80"></div>
									<div class="evaluate_username_u"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['name'];?>
</div>
								</div>
								<div class="evaluate_user_pf">
									<div class="evaluate_ms_box">
										<div class="evaluate_pf_userzh">
											<div class="evaluate_pf_userzh_l">综合评分：</div>
											<div class="evaluate_pf_other_start">
												<i class="evaluate_pf_other_start_p" style="width:<?php echo $_smarty_tpl->tpl_vars['mlist']->value['score']*20;?>
%"></i>
											</div>
											<div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['score'];?>
</div>
										</div>
										<div class="evaluate_pf_job">
											面试职位：
											<?php if ($_smarty_tpl->tpl_vars['mlist']->value['jobname']) {?>
												<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['mlist']->value['jobid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['jobname'];?>
</a>
											<?php } else { ?>
												职位已下架
											<?php }?>
										</div>
										<div class="evaluate_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mlist']->value['ctime'],"%Y-%m-%d");?>
</div>
									</div>
									<div class="evaluate_tag">
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mlist']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<span class="evaluate_tag_s"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
										<?php } ?>
									</div>
									<div class="evaluate_pj_box">
										<div class="evaluate_pj">[面试过程] <?php echo $_smarty_tpl->tpl_vars['mlist']->value['content'];?>
</div>
										<div class="evaluate_pj">[其他评价] <?php echo $_smarty_tpl->tpl_vars['mlist']->value['othercontent'];?>
</div>
									</div>
								</div>
							</div>
						<?php } ?>

						<?php if ($_smarty_tpl->tpl_vars['mlist']->value) {?>
							<div class="evaluate_look_compj">
								<a href="<?php echo $_smarty_tpl->tpl_vars['urlmsg']->value;?>
">查看公司全部评价>></a>
							</div>
						<?php }?>
					</div></div>
                    </div>
				<?php }?>

                  <div class="com_show_leftbox">
           <div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>招聘职位</span></div>
           
				     <div class="com_show_leftcont">

				<div class="comshow_job" id="company_job_list">
					<?php if ($_smarty_tpl->tpl_vars['num']->value=='0') {?>
                        <div class="firm_tips_no"> 该企业还没有发布职位信息!</div>
					<?php } else { ?> 
					
						<?php  $_smarty_tpl->tpl_vars['jlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jlist']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("ispage"=>"1","limit"=>"5","item"=>"\'jlist\'","uid"=>"\'auto.id\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$jlist = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($jlist) && !empty($jlist)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($jlist as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($jlist as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($jlist[$key]);
					continue;
				}else{
					$jlist[$key] = $db->array_action($value,$cache_array);
					$jlist[$key][stime] = date("Y-m-d",$value[sdate]);
					$jlist[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$jlist[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$jlist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$jlist[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$jlist[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$jlist[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$jlist[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$jlist[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$jlist[$key][logo] =$r_uid[$value['uid']][logo];
					$jlist[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$jlist[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$jlist[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$jlist[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$jlist[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$jlist[$key]['time'] = date("H:i",$value['lastupdate']);
						$jlist[$key]['redtime'] =1;
					}else{
						$jlist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$jlist[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$jlist[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$jlist[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$jlist[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$jlist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$jlist[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$jlist[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$jlist[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$jlist[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$jlist[$key][ratlogo] = $v[com_pic];
							}else{
								$jlist[$key][ratlogo] ='';
							}
							$jlist[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$jlist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$jlist[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$jlist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$jlist[$key][name_n]);
						$jlist[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$jlist[$key][com_n]);
						$jlist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$jlist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($jlist)){
				if($paramer[keyword]!=""&&!empty($jlist)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$jlist = $jlist; if (!is_array($jlist) && !is_object($jlist)) { settype($jlist, 'array');}
foreach ($jlist as $_smarty_tpl->tpl_vars['jlist']->key => $_smarty_tpl->tpl_vars['jlist']->value) {
$_smarty_tpl->tpl_vars['jlist']->_loop = true;
?>
							<div class="firm_post">
								<div class="fpc_name">
									<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['jlist']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['name'];?>
</a>
								</div>
								
								<div class="firm_post_joblist">
									<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_salary']) {?>
										<span class="comshow_job_xz"><i><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_salary'];?>
</i></span> 
									<?php }?> 

									<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_city_two']) {?>
										<span class="comshow_job_city"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_city_two'];?>
</span>
									<?php }?> 
									
									<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_exp']) {?>
										<span class="comshow_job_jy"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_exp'];?>
经验</span>
									<?php }?> 
									
									<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_edu']) {?>
										<span class="comshow_job_xl"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_edu'];?>
学历</span> 
									<?php }?>
								</div>

								<?php if ($_smarty_tpl->tpl_vars['jlist']->value['lastupdate']) {?>
									<div class="firm_post_jobtime">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jlist']->value['lastupdate'],"%Y-%m-%d");?>
</div>
								<?php }?>
								<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['jlist']->value['id']),$_smarty_tpl);?>
" class="firm_post_jobbth">立即查看</a>
							</div>
                        <?php } ?> 
						
						<?php if ($_smarty_tpl->tpl_vars['pagenav']->value) {?>
							<div class="pages">
								<a href="javascript:void(0);" onclick="page('<?php echo $_GET['id'];?>
','<?php if ($_GET['page']) {
echo $_GET['page'];
} else { ?>1<?php }?>','5','1');">上一页</a>
								<a href="javascript:void(0);" onclick="page('<?php echo $_GET['id'];?>
','<?php if ($_GET['page']) {
echo $_GET['page'];
} else { ?>1<?php }?>','5','2');">下一页</a>
							</div>
                        <?php }?> 

					<?php }?>
				</div>	</div>
	</div>
				<div class="maincenters mt20">
					<div id="sortBoxs">
						<div class="search_menuBoxs">
							<ul>
								<li class="search_curs" id="typezb" onmousemove="searchtype('zb');">周边招聘</li>
								<li id="typezp" onmousemove="searchtype('zp');">招聘频道</li>
								<li id="typerm" onmousemove="searchtype('rm');">热门搜索</li>
							</ul>
						</div>

						<div class="contentBoxs">
 							<div class="contentBox_conts " id="type_zb">
								<div class="Industry_lists">
									<?php if ($_smarty_tpl->tpl_vars['city']->value['three_cityid']) {?>
									
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['city']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<a href="<?php echo smarty_function_listurl(array('provinceid'=>$_smarty_tpl->tpl_vars['city']->value['provinceid'],'cityid'=>$_smarty_tpl->tpl_vars['city']->value['cityid'],'type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['v']->value,'page'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a>
                                        <?php } ?> 

									<?php } elseif ($_smarty_tpl->tpl_vars['city']->value['cityid']) {?> 
										
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['city']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<a href="<?php echo smarty_function_listurl(array('provinceid'=>$_smarty_tpl->tpl_vars['city']->value['provinceid'],'type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['v']->value,'page'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a>
                                        <?php } ?> 
									
									<?php } else { ?> 
										
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<a href="<?php echo smarty_function_listurl(array('type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['v']->value,'page'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a>
                                        <?php } ?> 

									<?php }?>
								</div>
							</div>
                            
 							<div class="contentBox_conts none" id="type_zp">
								<div class="Industry_lists">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
										<a href="<?php echo smarty_function_listurl(array('type'=>'hy','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a>
									<?php } ?>
								</div>
							</div>
							
 							<div class="contentBox_conts none" id="type_rm">
								<div class="Industry_lists">
									<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"20","recom"=>"1","type"=>"3","item"=>"\'keylist\'","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}elseif($v['type']=="6"){
						$v['url'] = Url("lietou",array("c"=>"service","keyword"=>$v['key_name']));
						$v['type_name']='猎头';
					}elseif($v['type']=="7"){
						$v['url'] = Url("lietou",array("c"=>"post","keyword"=>$v['key_name']));
						$v['type_name']='猎头职位';
					}else if($v['type']=="9"){
						$v['url'] = Url("train",array("c"=>"subject","keyword"=>$v['key_name']));
						$v['type_name']='培训课程';
					}else if($v['type']=="10"){
						$v['url'] = Url("train",array("c"=>"agency","keyword"=>$v['key_name']));
						$v['type_name']='培训机构';
					}else if($v['type']=="11"){
						$v['url'] = Url("train",array("c"=>"teacher","keyword"=>$v['key_name']));
						$v['type_name']='培训师';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a>
									<?php } ?>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		

		<div class="con_show_right">
        
        		


			<div class="con_show_right_box">
				<div class="com_aut">
					<?php if ($_smarty_tpl->tpl_vars['com']->value['email_status']=="1") {?>
						<dl class="com_aut_list">
							<dt> <img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_yx2.png" alt="邮箱未认证" title="邮箱已认证" class="png" />  </dt>
                            <dd>邮箱已认证</dd>
						</dl>
					<?php } else { ?>
						<dl class="com_aut_list">
							<dt><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_yx.png" alt="邮箱未认证" title="邮箱未认证" class="png" /></dt>
							<dd>邮箱未认证</dd>
                        </dl> 
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['com']->value['moblie_status']=="1") {?>
						<dl class="com_aut_list">
							<dt><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_sj2.png" alt="手机未认证" title="手机已认证" class="png" /></dt>
                            <dd>手机已认证</dd>
                        </dl>
					<?php } else { ?>
						<dl class="com_aut_list">
							<dt><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_sj.png" alt="手机未认证" title="手机未认证" class="png" /></dt>
                            <dd>手机未认证</dd>
                        </dl>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['com']->value['yyzz_status']=="1") {?>
                        <dl class="com_aut_list">
							<dt><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_zz2.png" alt="执照未认证" title="执照已认证" class="png" /></dt>
                            <dd>执照已认证</dd>
                        </dl> 
					<?php } else { ?>
						<dl class="com_aut_list">
							<dt><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_zz.png" alt="执照未认证" title="执照未认证" class="png" /></dt>
                            <dd>执照未认证</dd>
                        </dl>
					<?php }?>
				</div>
			</div>

			<div class="con_show_right_box">
            <div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>联系方式</span></div>
				
			
				
				<div class="com_show_touch">
					<?php if ($_smarty_tpl->tpl_vars['looktype']->value=="1") {?>
						<div class="com_show_touch_list">
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linkman']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_user"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['linkman'];?>

								</div>
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linkjob']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_zw"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['linkjob'];?>

								</div>
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linkphone']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_dh"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['linkphone'];?>

								</div>
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linktel']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_sj"></i>
									<?php echo smarty_function_image(array('number'=>$_smarty_tpl->tpl_vars['com']->value['linktel'],'uid'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'action'=>'linktel'),$_smarty_tpl);?>

								</div>
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linkmail']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_yx"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['linkmail'];?>

								</div> 
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linkqq']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_qq"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['linkqq'];?>

								</div>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['com']->value['zip']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_yb"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['zip'];?>

								</div>
							<?php }?> 

							<?php if ($_smarty_tpl->tpl_vars['com']->value['website']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_web"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['website'];?>

								</div>
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['busstops']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_bus"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['busstops'];?>

								</div>
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['address']) {?>
								<div class="com_show_touch_p">
									<i class="com_show_touch_p_icon com_show_touch_add"></i>
									<?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>

								</div> 
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['comqcode']) {?>
								<div class="com_show_touch_p">
									<img src="<?php echo $_smarty_tpl->tpl_vars['com']->value['comqcode'];?>
" width="120" height="120">
								</div> 
							<?php }?>
                        </div>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['looktype']->value=="3"||$_smarty_tpl->tpl_vars['looktype']->value=="2"||$_smarty_tpl->tpl_vars['looktype']->value=="5"||$_smarty_tpl->tpl_vars['looktype']->value=="7") {?>
							<div class="com_show_touch_login_box">
								<div class="com_show_touch_login">
									<div class="com_show_touch_login_p"><?php echo $_smarty_tpl->tpl_vars['look_msg']->value;?>
</div>
								</div>
							</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['looktype']->value=="6") {?>
							<div class="com_show_touch_login_box">
								<div class="com_show_touch_login">
									<div class="com_show_touch_login_p"><?php echo $_smarty_tpl->tpl_vars['look_msg']->value;?>
</div>
									<div class="com_show_touch_login_bth">
										<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=expect" class="com_show_touch_dl">创建简历</a>
									</div>
								</div>
							</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['looktype']->value=="4") {?>
							<div class="com_show_touch_login_box">
								<div class="com_show_touch_login">
									<div class="com_show_touch_login_p"><?php echo $_smarty_tpl->tpl_vars['look_msg']->value;?>
</div>
									<div class="com_show_touch_login_bth">
										<a class="com_show_touch_dl" href="javascript:void(0);" onclick="showlogin('1');">立即登录</a>
										<a class="com_show_touch_reg" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>1,'type'=>1),$_smarty_tpl);?>
">立即注册</a>
									</div>
								</div>
							</div>
                        <?php }?> 
					<?php }?>

				</div>
			</div>
            <?php if ($_smarty_tpl->tpl_vars['xjh']->value) {?>
			<div class="con_show_right_box">
				<div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>宣讲会</span></div>
				

				<ul class="comshow_xjh">
					<?php  $_smarty_tpl->tpl_vars['clist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("uid"=>"$_smarty_tpl->tpl_vars[\'com\']->value[\'uid\']","item"=>"\'clist\'","limit"=>"3","nocache"=>"")
;');$clist=array();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`=1";
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid]=$config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}
		//关键字
		if($paramer["keyword"]){
			$com=$db->select_all("company","`name` like '%".$paramer["keyword"]."%'","uid");
			foreach($com as $v){
				$cuids[]=$v[uid];
			}
			$where.=" AND `uid` in (".@implode(",",$cuids).")";
		}
		//城市
		if($paramer["provinceid"]){
			$where.=" AND `provinceid`='".$paramer["provinceid"]."'";
		}
		if($paramer["cityid"]){
			$where.=" AND `cityid`='".$paramer["cityid"]."'";
		}
		if($paramer["three_cityid"]){
			$where.=" AND `three_cityid`='".$paramer["three_cityid"]."'";
		}
		//所属行业：
		if($paramer["level"]){
			$sch=$db->select_all("school_academy","`school_level`='".$paramer["level"]."'","id");
			foreach($sch as $v){
				$sids[]=$v[id];
			}
			$where.=" AND `schoolid` in (".@implode(",",$sids).")";
		}
		//用户uid
		if($paramer["uid"]){
			$where.=" AND `uid`='".$paramer["uid"]."'";
		}
		//院校uid
		if($paramer["sid"]){
			$where.=" AND `schoolid`='".$paramer["sid"]."'";
		}
		//近期，往期
		if($paramer["tp"]){
			$where.=" AND `etime`<'".time()."'";
		}else{
			$where.=" AND `etime`>'".time()."'";
		}
		if($paramer[adtime]){
			if($paramer[adtime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			if($paramer["tp"]){
					$where.=" AND stime>$beginToday";
				}else{
					$where.=" AND stime<$beginToday";
				}
    		}else{
    			$time=time();
				if($paramer["tp"]){
					$adtime = $time-($paramer[adtime]*86400);
					$where.=" AND stime>$adtime";
				}else{
					$adtime = $time+($paramer[adtime]*86400);
					$where.=" AND stime<$adtime";
				}
    		}
		}
		if($paramer["limit"]){
			$limit= " limit $paramer[limit]";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"school_xjh",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"0",$_smarty_tpl);
         
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order]";
		}else{
			$where .= " ORDER BY  `ctime`  ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		$clist=$db->select_all("school_xjh",$where.$limit);
		if(is_array($clist)){
			$cache_array = $db->cacheget();
			foreach($clist as $v){
                $xjhid[]=$v['id'];
				$comuid[]=$v['uid'];
				$suid[]=$v['schoolid'];
    		}
            $atnlist=$db->select_all("atn","`xjhid` IN (".@implode(',',$xjhid).") and `uid`='".$_COOKIE['uid']."'");
			$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`logo`");
			$academy=$db->select_all("school_academy","`id` IN (".@implode(',',$suid).")","`id`,`schoolname`");
			$week=array("周日","周一","周二","周三","周四","周五","周六");
			foreach($clist as $k=>$v){
				$clist[$k]["city_two"] = $cache_array['city_name'][$v["cityid"]];
				$clist[$k]["xjh_url"] = Url("school",array("c"=>"xjhshow","id"=>$v['id']));
				$clist[$k]["com_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
				$clist[$k]["sch_url"] = Url("school",array("c"=>"academyshow","id"=>$v['schoolid']));
				$clist[$k]["ctime"] = date("Y-m-d",$v["ctime"]);
				$clist[$k]["xjh_date"] = date("Y-m-d",$v["stime"]);
				$clist[$k]["xjh_shour"] = date("H:i",$v["stime"]);
				$clist[$k]["xjh_ehour"] = date("H:i",$v["etime"]);
				$clist[$k]["xjh_week"] = $week[date("w",$v["stime"])];
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
						if($paramer[comlen]){
							$clist[$k]["com_name"]=mb_substr($val['name'],0,$paramer[comlen],"utf-8");
						}else{
							$clist[$k]["com_name"]=$val['name'];
						}
						if(!$val['logo'] || !file_exists(str_replace("./",APP_PATH,$val['logo']))){
							$clist[$k]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$clist[$k]['pic'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
						}
    				}
				}
				foreach($academy as $val){
					if($v['schoolid']==$val['id']&&$val['schoolname']){
    					$clist[$k]["sch_name"]=$val['schoolname'];
    				}
				}
                foreach($atnlist as $val){
					if($v['id']==$val['xjhid']){
    					$clist[$k]["xjhid_n"]=$val['xjhid'];
    				}
				}
			}
		}$clist = $clist; if (!is_array($clist) && !is_object($clist)) { settype($clist, 'array');}
foreach ($clist as $_smarty_tpl->tpl_vars['clist']->key => $_smarty_tpl->tpl_vars['clist']->value) {
$_smarty_tpl->tpl_vars['clist']->_loop = true;
?>
						<li>
							<div class="comshow_xjh_name">
								<a href="<?php echo $_smarty_tpl->tpl_vars['clist']->value['sch_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['clist']->value['sch_name'];?>
</a>
							</div>
							<div class="comshow_xjh_time">
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['clist']->value['stime'],'%Y-%m-%d %H:%M');?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['clist']->value['etime'],'%H:%M');?>
 
							</div>
							<div class="comshow_xjh_city"><?php echo $_smarty_tpl->tpl_vars['clist']->value['address'];?>
</div>
						</li>
					<?php } ?>
				</ul>  

			</div>
			<?php }?>
            
            
			<?php if ($_smarty_tpl->tpl_vars['com']->value['y']!=''&&$_smarty_tpl->tpl_vars['com']->value['x']!='') {?>
                <div class="con_show_right_box">
                 <div class="com_show_tit"><span class="com_show_tit_s"><i class="com_show_tit_line"></i>企业地图</span></div>
                    <div class="com_show_lmap">
                        <div class="frc_map" id="company_baidu_map">
                            <div id="maps_container" style="width:218px;height:155px;"></div>
                            <input type="hidden" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
" />
                            <input type="hidden" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
" />
                        </div>
                        <div class="frc_map_look">
                            <a href="javascript:showmap('map_show');">查看完整地图</a>
                        </div>
                    </div>
                </div>
			<?php }?> 
			
			<?php if (!empty($_smarty_tpl->tpl_vars['NewsList']->value)) {?>
                <div class="con_show_right_box">
                    <div class="Company_post_msg">
						<i class="Company_h1_line yun_bg_color"></i>
						<i class="Company_h1_line_bor"></i>
						<span class="Company_co">企业新闻</span>
					</div>

                    <ul class="com_show_news">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<li>
								<p>
									<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'newsshow','id'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'nid'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
								</p>
							</li>
                        <?php } ?>
                    </ul>
                </div> 
			<?php }?>

		</div>

	</div>
	
	<div class="clear"></div>
		
	<div class="commpay_Comment">
		<div id="map_show" class="none">
			<div class="map_query_box">
				
				<div id="map_container" style="width:1100px;height:450px;"></div>
				
				<div class="map_query" id="map_search">
					<div class="map_query_tit">线路查询 <span class="map_query_tit_s">注：地图可以左击拖拽任意位置</span></div>
					<div class="map_query_list">
						<span class="map_query_list_s">起点</span>
						<i class="map_query_list_line"></i> 
						<input type="text" class="map_startlist map_query_text" placeholder="输入起点" id="map_start" name="map_start" />
					</div>
					<div class="map_query_list">
						<span class="map_query_list_s">终点</span>
						<i class="map_query_list_line"></i> 
						
						<?php if ($_smarty_tpl->tpl_vars['com']->value['x']) {?>
						<input type="text" id="map_end" class="map_startend map_query_text" name="map_end" /> 
						<?php } else { ?>
						<input type="text" placeholder="输入终点" class="map_startend map_query_text" value="" id="map_end" name="map_end" /> 
						<?php }?>

					</div>
					<div class="map_query_bth_box">
						<input type="submit" class="mapsubmit map_query_bth " value="公交查询" name="submit" onclick="bus_query();" />
 						<span><input type="submit" class="mapsubmit map_query_bth map_query_bth_car"  value="驾车查询"  name="submit" onclick="map_drving();"/></span>
					</div>
				</div>
				<div class="map_query_result">
					<div id="r-result"></div>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery.json.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<!--[if IE 6]>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			DD_belatedPNG.fix('.png');
		<?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
" charset="utf-8"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/ScrollPic.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
		<!--//--><![CDATA[//><!--
		var li_num = $("#layer-pic div").length;
		if(li_num > 3) {  
			var scrollPic_02 = new ScrollPic();
				scrollPic_02.scrollContId = "layer-pic";  
				scrollPic_02.arrLeftId = "LeftArr";  
				scrollPic_02.arrRightId = "RightArr";  
				scrollPic_02.frameWidth = 880;  
				scrollPic_02.pageWidth = 225; 
				scrollPic_02.speed = 10; 
				scrollPic_02.space = 10; 
				scrollPic_02.autoPlay = true; 
				scrollPic_02.autoPlayTime = 2; 
				scrollPic_02.initialize(); 
			}
		//--><!]]>

		var f1 = $('#company').offset().top;
		var fs = $('.broadside_con').children().size();
		var fss = new Array();
		$(function() {
			tianyancha('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'getbusiness'),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
');
			setTimeout(function(){
				layer.photos({
					photos: '#layer-pic',
					anim: 5
				});
			},1000);
			
			<?php if ($_smarty_tpl->tpl_vars['com']->value['y']!=''&&$_smarty_tpl->tpl_vars['com']->value['x']!='') {?>
			getmapnoshowcont_diffDomains('maps_container', "<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
", "<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
", "map_x", "map_y", 'company_baidu_map'); 
			<?php }?>

			$(".firm_post").hover(function() {
				
				$(this).css("background", "#f4f4f4");
				$(this).find(".firm_post_right").show();

			}, function() { 
				
				$(this).css("background", "");
					$(this).find(".firm_post_right").hide();
				});

				$(".broadside_con>a").click(function() {
					$(".broadside_con>a").removeClass('bro_con_cur');
					$(this).addClass('bro_con_cur');
				});

				for(i = 0; i < fs; i++) {
					j = i + 1;
					fss[i] = $('div[data-slide="' + j + '"]').offset().top;
				}

				$(window).scroll(function() {
					var currentTOP = $(window).scrollTop();
					currentTOP = parseInt(currentTOP) + parseInt(20);
					if(currentTOP <= f1) {
						$('.broadside_con a').removeClass('bro_con_cur');
						$('.broadside_con a:eq(0)').addClass('bro_con_cur');
						return;
					} else {
						changefl(getFloor(currentTOP));
					}
				});
				var cheight = $("#com_content").height();
				if(parseInt(cheight) > 270) {
					$("#com_content").attr('style', 'width:100%;height:270px; overflow:hidden');
					$(".company_show_more").show();
				}

			});

			function showcc() {
				$("#com_content").attr('style', 'width:100%;height:auto; overflow:hidden');
				$(".company_show_more").find('a').html('收起');
				$(".company_show_more").find('a').attr('onclick', 'hidecc()');
			}

			function hidecc() {

				$("#com_content").attr('style', 'width:100%;height:270px; overflow:hidden');
				$(".company_show_more").find('a').html('查看更多');
				$(".company_show_more").find('a').attr('onclick', 'showcc()');

			}

			function getFloor(fh) {
				if(fs == 0 || fh <= f1) {
					return 1;
				}
				if(fh >= fss[fs - 1]) {
					 return fs;
				}
				for(k = 0; k < fs; k++) {
					if(fh > fss[k] && fh < fss[k + 1]) {
						return k + 1;
					}
				}
			}

			function changefl(fno) {
				fno = parseInt(fno) - parseInt(1);
				$('.broadside_con a').removeClass('bro_con_cur');
				$('.broadside_con a:eq(' + fno + ')').addClass('bro_con_cur');
			}

			function showmap(id) {
				$.layer({
					type: 1,
					title: '地图展示',
					closeBtn: [0, true],
					offset: ['100px', ''],
					border: [10, 0.3, '#000', true],
					area: ['1100px', 'auto'],
					page: {
						dom: "#" + id
					}
				});
				getmapshowcont('map_container', "<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
", "<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
", "<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>
");
			}

			
			function bus_query() {
				var map_start = $.trim($("#map_start").val());
				if(map_start == "") {
					layer.msg("请输入线路查询起点");
					return false;
				}
				var map_end = $.trim($("#map_end").val());
				var map = new BMap.Map("map_container");
				map.centerAndZoom(new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
', '<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
'), 12);
				
				var start = map_start;
				var end = map_end;
				
				var transit = new BMap.TransitRoute(map, {
					renderOptions: {
						map: map,
						panel: "r-result"
					}
				});
				transit.search(start, end);

				 
			}
			
 			function map_drving() {
				var map_start = $.trim($("#map_start").val());
				if(map_start == "") {
					layer.msg("请输入线路查询起点");
					return false;
				}
				var map_end = $.trim($("#map_end").val());
				var map = new BMap.Map("map_container");
				map.centerAndZoom(new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
', '<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
'), 12);
				var driving = new BMap.DrivingRoute(map, {
					renderOptions: {
						map: map,
						panel: "r-result",
						autoViewport: true
					}
				});
				driving.search(map_start, map_end);
			}

			function page(id, page, limit, updown) {
				if(page < 1) {
					page == 1;
				}
				$.ajax({
					type: "POST",
					global: false,
					url: "<?php echo smarty_function_url(array('m'=>'company','c'=>'prestr'),$_smarty_tpl);?>
",
					data: {
						id: id,
						page: page,
						limit: limit,
						updown: updown
					},
					success: function(data) {
						var data = eval("(" + data + ")");
						if(data.num < 0) {
							var $html = '<div class="firm_tips_no"> 该企业还没有发布职位信息!</div>'
						} else {
							var $html = data.joblist;
						}
						$("#company_job_list").html($html);
					}
				});
			}

			function searchtype(id) {
				$(".search_curs").removeClass("search_curs");
				$("#type" + id).addClass("search_curs");
				$(".contentBox_conts").hide();
				$("#type_" + id).show();
			}
		<?php echo '</script'; ?>
>
 		<?php echo '<script'; ?>
>
			window._bd_share_config = {
				common: {
					bdText: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
					bdDesc: '<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
',
					bdUrl: '<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>
',
					bdPic: '<?php if ($_smarty_tpl->tpl_vars['com']->value['logo']) {
echo $_smarty_tpl->tpl_vars['com']->value['logo'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];
}?>'
				},
				share: [{
					"tag": "share_1",
					"bdSize": 24,
					"bdCustomStyle": '<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/share.css'
				}]
			}
			with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = weburl+'/js/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)];
		<?php echo '</script'; ?>
>
 		<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" class="none"></iframe> 
		<?php if ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==1&&$_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?> 
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==2) {?> 
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_easemob.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==3) {?> 
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_rongcloud.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
			<?php }?> 
			
		<?php }?>
		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
