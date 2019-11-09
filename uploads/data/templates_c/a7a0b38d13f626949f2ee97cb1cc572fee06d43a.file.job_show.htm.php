<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:28:44
         compiled from "/www/fpwjob/uploads/app/template/wap/job_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:6436829045dc5273c6fe1c8-89071777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a0b38d13f626949f2ee97cb1cc572fee06d43a' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/job_show.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6436829045dc5273c6fe1c8-89071777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'job' => 0,
    'city_name' => 0,
    'comclass_name' => 0,
    'reward' => 0,
    'company' => 0,
    'comrat' => 0,
    'industry_name' => 0,
    'mapx' => 0,
    'mapy' => 0,
    'wlist' => 0,
    'usertype' => 0,
    'chatunread' => 0,
    'wlists' => 0,
    'look_msg' => 0,
    'Info' => 0,
    'pre' => 0,
    'company_msg' => 0,
    'mlist' => 0,
    'v' => 0,
    'uid' => 0,
    'typename' => 0,
    'username' => 0,
    'job_jia' => 0,
    'waflist' => 0,
    'usertypemsg' => 0,
    'wap_style' => 0,
    'title' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc5273c8accf9_78395546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc5273c8accf9_78395546')) {function content_5dc5273c8accf9_78395546($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="header_navlist">
    <a href="javascript:void(0);" id="jobclick"><i class="naviconfont"></i></a>
</div>
<?php echo '<script'; ?>
>
    wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"
<?php echo '</script'; ?>
>

<section>
    <div class="com_show_t1_box">
        <div class="com_show_t1">
            <h2><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
 
        <?php if ($_smarty_tpl->tpl_vars['job']->value['rec']=='1'&&$_smarty_tpl->tpl_vars['job']->value['rec_time']>time()) {?> <i class="yun_wap_tjshow" >推荐</i><?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['job']->value['urgent']=='1'&&$_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()) {?><i class="yun_wap_jp">急招</i><?php }?></h2>
            <span class="job_gx_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],"%Y-%m-%d");?>
更新</span>
        </div>
        <div class="com_shw_xz"><?php if ($_smarty_tpl->tpl_vars['job']->value['minsalary']&&$_smarty_tpl->tpl_vars['job']->value['maxsalary']) {?><em class="com_show_xzcolor"><?php echo $_smarty_tpl->tpl_vars['job']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['maxsalary'];?>
</em> 元/月<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['minsalary']) {?><em class="com_show_xzcolor"><?php echo $_smarty_tpl->tpl_vars['job']->value['minsalary'];?>
</em>以上 元/月<?php } else { ?><em class="com_show_xzcolor">面议</em><?php }?>
      <span class="com_shw_xz_yl">  <?php echo '<script'; ?>
 language="javascript" src="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'GetHits','id'=>'`$job.id`'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
></span>
        </div>

    </div>

    <div class="com_show_joblb">
        <ul>
            <li><i class="com_show_useryq_icon com_show_useryq_icon_city"></i><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['job']->value['provinceid']];?>
 -<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['job']->value['cityid']];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['exp']]) {?>
            <li><i class="com_show_useryq_icon com_show_useryq_icon_jy"></i><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['exp']];?>
经验</li> <?php }?> <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['edu']]) {?>
            <li><i class="com_show_useryq_icon com_show_useryq_icon_xl"></i><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['edu']];?>
学历<?php if ($_smarty_tpl->tpl_vars['job']->value['is_graduate']) {?>（接受应届生)<?php }?></li> <?php }?>
        </ul>

    </div>

</section>
<div>
    <?php if (!$_smarty_tpl->tpl_vars['job']->value['userid_job']&&!$_smarty_tpl->tpl_vars['job']->value['invite_job']&&!empty($_smarty_tpl->tpl_vars['reward']->value)) {?>
    <div class="sj_job_box mt15">
        <span class="sj_job_box_name">赏金</span> 总赏金 <span class="sj_job_box_name_sj">￥<?php echo floatval($_smarty_tpl->tpl_vars['reward']->value['money']);?>
</span>
        <div class="sj_job_box_b"><span class="sj_job_box_name sj_job_box_name">发放</span> 投递 ￥<?php echo floatval($_smarty_tpl->tpl_vars['reward']->value['sqmoney']);?>
 . 面试 ￥<?php echo floatval($_smarty_tpl->tpl_vars['reward']->value['invitemoney']);?>
 . 入职 ￥<?php echo floatval($_smarty_tpl->tpl_vars['reward']->value['offermoney']);?>
</div>
        <div class="sj_job_box_b"><span class="sj_job_box_name sj_job_box_name_fs">提示</span> 点击~
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward','a'=>'ajaxreward','jobid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" rel="nofollow">赏金投递</a>~找到好工作还能赚赏金</div>

        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward','a'=>'ajaxreward','jobid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="sj_job_box_bth" rel="nofollow">赏金投递</a>
    </div>
    <?php }?>

    <section>
        <div class="com_new_contnet_box mt15">

            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
" class="com_show_firm">
                <div class="com_show_firm_pic"> <img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" ></div>
                <aside class="com_show_firm_name"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['comrat']->value['com_pic']!="0"&&$_smarty_tpl->tpl_vars['comrat']->value['com_pic']!='') {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['comrat']->value['com_pic'];?>
" /> <?php }?> <?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']=='1') {?>
                    <i class="job_qy_rz_icon"></i> <?php }?>
                </aside>
                <aside class="com_show_firm_guim" style="color:#999">
                    <?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['company']->value['pr']];?>
<span class="yun_jobline">|</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['company']->value['mun']];?>
 <span class="yun_jobline">|</span><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['company']->value['hy']];?>
</aside><i class="com_show_firm_icon"></i>

            </a>

        </div>
    </section>

    <?php if ($_smarty_tpl->tpl_vars['company']->value['address']) {?>
    <div class="com_map">
        <?php if ($_smarty_tpl->tpl_vars['company']->value['x']&&$_smarty_tpl->tpl_vars['company']->value['y']) {?>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'jobmap','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
"><span class="com_map_name">地址</span><?php echo $_smarty_tpl->tpl_vars['company']->value['address'];?>
<em id="distance"></em><i class="com_map_name_icon"></i></a>
        <input type="hidden" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['mapx']->value;?>
" />
        <input type="hidden" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['mapy']->value;?>
" /> 
		<?php } else { ?>
        <span class="com_map_name">地址</span><?php echo $_smarty_tpl->tpl_vars['company']->value['address'];?>
 
		<?php }?>
    </div>
    <?php }?> 
	
	<?php if (count($_smarty_tpl->tpl_vars['job']->value['welfare'])>0) {?>
    <div class="com_welfare ">
        <aside class="com_show_fl"> <?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job']->value['welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
?>
            <span class="com_show_fl_s"><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</span> <?php } ?> </aside>
    </div>
    <?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>

    <div class="yun_chat_new" onclick="jobChat('<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
',<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_type'];?>
,'<?php echo $_smarty_tpl->tpl_vars['job']->value['userid_job'];?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
','com')"><span class="yun_chat_new_bth">聊聊<?php if ($_smarty_tpl->tpl_vars['chatunread']->value>0) {?><i class="yun_chat_new_bth_n"><?php echo $_smarty_tpl->tpl_vars['chatunread']->value;?>
</i><?php }?></span>
    </div>
    <?php }?>
    <div class="clear"></div>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_haibao_isopen']==1) {?>
    <div class="zphb_show">
   <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'whb','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
"> <div class="zphb_show_c">生成招聘海报分享到朋友圈~</div></a>
  </div>
  <?php }?>
    <div class="clear"></div>
    <section>

        <div class="com_new_contnet_box  mt15">
            <div class="wap_title"><span class="">任职要求</span></div>
            <ul class="user_contnet_ul user_contnet_ul_wip4">

                <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['number']]) {?>
                <li> <span class="user_contnet_info_n">招聘：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['number']];?>
</li> <?php }?> <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['report']]) {?>
                <li><span class="user_contnet_info_n">到岗：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['report']];?>
</li> <?php }?> <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['age']]) {?>
                <li><span class="user_contnet_info_n">年龄：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['age']];?>
</li> <?php }?> <?php if ($_smarty_tpl->tpl_vars['job']->value['sex']) {?>
                <li><span class="user_contnet_info_n">性别：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['sex'];?>
</li> <?php }?> <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['marriage']]) {?>
                <li><span class="user_contnet_info_n">婚况：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['marriage']];?>
</li> <?php }?> <?php if ($_smarty_tpl->tpl_vars['job']->value['lang']) {?>
                <li class="com_show_li"><span class="user_contnet_info_n">语言：</span><?php  $_smarty_tpl->tpl_vars['wlists'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlists']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job']->value['lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlists']->key => $_smarty_tpl->tpl_vars['wlists']->value) {
$_smarty_tpl->tpl_vars['wlists']->_loop = true;
?>
                    <span class="yun_com_fl_dy "><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['wlists']->value];?>
</span> <?php } ?>
                </li>
                <?php }?>
            </ul>

        </div>
    </section>

    <section>
        <div class="com_new_contnet_box mt15">
          	<div class="wap_title"><span class="">联系方式</span></div>
            <?php if ($_smarty_tpl->tpl_vars['look_msg']->value=='2') {?>
            	<div class="com_post_login"> <i class="com_post_tel iconfont"></i>联系方式未开放，请直接申请职位！ </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='3') {?>
            	
	            <ul class="com_post_msg com_post_msg_touch">
	                <?php if ($_smarty_tpl->tpl_vars['job']->value['linkman']) {?>
	                <li><i class="com_post_msg_touch_icon iconfont_jobshow_teluser"></i>联&nbsp;系 &nbsp;人：<?php echo $_smarty_tpl->tpl_vars['job']->value['linkman'];?>
</li>
	                <?php }?> 
	                
	                <?php if ($_smarty_tpl->tpl_vars['job']->value['linktel']) {?>
	                <li class="com_post_msg_tel">
	                	<i class="com_post_msg_touch_icon iconfont_jobshow_telip"></i>联系电话：
	                    <a href="tel:<?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
</a>
	                </li>
	                <?php }?>
	            </ul>
	
	            <div class="com_post_login com_post_login_no">
	                <div class="com_post_login_no_tip">请登录后查看联系方式 </div>
	                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login','job'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="com_s_logoin">登录</a>
	                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="com_s_reg">注册</a>
	            </div>

            <?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='31') {?>
            	<div class="com_post_login"> <i class="com_post_tel iconfont"></i>您不是个人用户，不能查看联系方式 </div>
           	
           	<?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='4') {?>
	
	            <div class="com_post_login">
	                <i class="com_post_tel iconfont"></i>发布简历查看联系方式
	                <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
/member/index.php?c=addresume" class="com_s_logoin">发布简历</a>
	            </div>
			<?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='5') {?>
	
	            <div class="com_post_login">
	                <i class="com_post_tel iconfont"></i>投递简历查看联系方式
	                <a href="javascript:jobapply('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="com_s_logoin">投递简历</a>
 	            </div>
	            
            <?php } else { ?>
	
	            <ul class="com_post_msg com_post_msg_touch ">
	                <?php if ($_smarty_tpl->tpl_vars['job']->value['linkman']) {?>
	                <li><i class="com_post_msg_touch_icon iconfont_jobshow_teluser"></i>联&nbsp;系 &nbsp;人：<?php echo $_smarty_tpl->tpl_vars['job']->value['linkman'];?>
</li>
	                <?php }?> 
	                <?php if ($_smarty_tpl->tpl_vars['job']->value['linktel']) {?>
	                <li class="com_post_msg_tel">
	                    <i class="com_post_msg_touch_icon iconfont_jobshow_telip"></i>联系手机：
	                    <a href="tel:<?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
" class="com_post_msg_tel_n"><?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
<span class="com_post_tel_bd" style="color:grey"><i class="com_post_sj iconfont"></i><div class="com_post_tel_bd_p">拨打</div></span></a>
	                </li>
	                <?php }?> 
	                
	                <?php if ($_smarty_tpl->tpl_vars['company']->value['linkphone']) {?>
	                <li class="com_post_msg_tel">
	                    <i class="com_post_msg_touch_icon iconfont_jobshow_tel"></i>联系电话：
	                    <a href="tel:<?php echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];?>
" class="com_post_msg_tel_n"><?php echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];?>
<span class="com_post_tel_bd"><i class="com_post_zx iconfont"style="color:#16DC34;"></i><div class="com_post_tel_bd_p">拨打</div></span></a>
	                </li>
	                <?php }?> 
	                
	                <?php if ($_smarty_tpl->tpl_vars['company']->value['busstops']) {?>
	                <li><i class="com_post_msg_touch_icon iconfont_jobshow_bus"></i>公交站点：<?php echo $_smarty_tpl->tpl_vars['company']->value['busstops'];?>
</li>
	                <?php }?>
	            </ul>

            <?php }?>
        </div>
    </section>

    <section>
        <div class="com_new_contnet_box  mt15 muipreview" id="description">
            <div class="wap_title"><span class="">职位描述</span></div>
            <div class="jobshow_content jobshow_content_lh"><?php echo $_smarty_tpl->tpl_vars['job']->value['description'];?>
 </div>
            <div class="jobshow_hr"><?php if ($_smarty_tpl->tpl_vars['config']->value['com_message']==1) {?> 
						<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
                <div class="job_hr_tit">职位发布者</div>
                <div class="job_hr_ly" style="">
                    <div class="job_hr_ly_hr">HR</div>
                    你好！我是企业的HR<br> 
					
						想了解更多职位信息请留言给我
						<span  onclick="zixun();" class="job_hr_left_ly">给我留言</span>
					  
                </div> <?php }?>
                    <?php }?>
                <ul class="job_hr_zk">
                    <li><em class="job_hr_zk_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['snum'];?>
</em>简历投递</li>
                    <li><em class="job_hr_zk_n"><?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
%</em>简历回复率</li>
                    <li><em class="job_hr_zk_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['operatime'];?>
</em>简历回复时长</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <?php if ($_smarty_tpl->tpl_vars['company_msg']->value) {?>
        <div class="com_new_contnet_box  mt15">
            <div class="wap_title"><span class="">面试评价</span></div>
            <div class="evaluate">

                
                <?php  $_smarty_tpl->tpl_vars['mlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"2","id"=>"\'@job.uid\'","jobid"=>"\'@job.id\'","item"=>"\'mlist\'","nocache"=>"")
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
" width="80" height="100">
                            <div class="evaluate_photouser_bg"></div>
                        </div>
                        <div class="evaluate_username_u"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['name'];?>
</div>
                    </div>
                    <div class="evaluate_user_pf">
                        <div class="evaluate_ms_box">
                            <div class="">

                                <div class="evaluate_pf_userzh_list">
                                    <div class="evaluate_pf_userzh_l">企业环境：</div>
                                    <div class="evaluate_pf_other_start">
                                        <div class="evaluate_pf_other_startbox" style="width:<?php echo $_smarty_tpl->tpl_vars['mlist']->value['comscorepf'];?>
%"><i class="evaluate_pf_other_start_p"></i></div>
                                    </div>
                                    <div class="evaluate_pf_other_zhfs"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['comscore'];?>
</div>
                                </div>
                                <div class="evaluate_pf_userzh_list">
                                    <div class="evaluate_pf_userzh_l">面试官：</div>
                                    <div class="evaluate_pf_other_start">
                                        <div class="evaluate_pf_other_startbox" style="width:<?php echo $_smarty_tpl->tpl_vars['mlist']->value['hrscorepf'];?>
%"><i class="evaluate_pf_other_start_p"></i></div>
                                    </div>
                                    <div class="evaluate_pf_other_zhfs"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['hrscore'];?>
</div>
                                </div>
                                <div class="evaluate_pf_userzh_list">
                                    <div class="evaluate_pf_userzh_l">描述相符：</div>
                                    <div class="evaluate_pf_other_start">
                                        <div class="evaluate_pf_other_startbox" style="width:<?php echo $_smarty_tpl->tpl_vars['mlist']->value['desscorepf'];?>
%"><i class="evaluate_pf_other_start_p"></i></div>
                                    </div>
                                    <div class="evaluate_pf_other_zhfs"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['desscore'];?>
</div>
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
</span> <?php } ?>

                            </div>
                            <div class="evaluate_pj_box">
                                <div class="evaluate_pj">[面试过程] <?php echo $_smarty_tpl->tpl_vars['mlist']->value['content'];?>
</div>
                                <div class="evaluate_pj">[其他评价] <?php echo $_smarty_tpl->tpl_vars['mlist']->value['othercontent'];?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
                <?php if ($_smarty_tpl->tpl_vars['mlist']->value) {?>
                <div class="evaluate_look_compj">
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'msg','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
">查看公司全部评价>></a>
                </div>
                <?php }?>
            </div>

        </div>
        <?php }?>
    </section>

    <section>
        <div class="job_show_tip">
            <div class="job_show_tip_jb">

                 <?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?>
                <a href="javascript:void(0)" onclick="reportcom('<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
');"><span class="job_show_tip_tip_i"></span>举报</a>
                <?php } elseif ($_smarty_tpl->tpl_vars['uid']->value) {?>
                <a href="javascript:void(0)" href="javascript:void(0)" onclick="notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');"><span class="job_show_tip_tip_i"></span>举报</a>
                <?php } else { ?>
                <a href="javascript:void(0)" onclick="pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" ><span class="job_show_tip_tip_i"></span>举报</a>
                <?php }?>  

            </div>
            <div class="job_show_tip_p">
                <div class="job_show_tip_p_t">如遇无效、虚假、诈骗信息，请立即举报</div>
                <div><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_shenming'];?>
</div>
            </div>
        </div>
    </section>
   
    <section id="job">
        <div class="com_new_contnet_box  mt15">

            <div class="wap_title"><span class="">推荐职位</span></div>

            <?php  $_smarty_tpl->tpl_vars['job_jia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_jia']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"4","rec"=>"1","noid"=>"\'@job.id\'","jobids"=>"\'@job.job1\'","namelen"=>"15","item"=>"\'job_jia\'","key"=>"\'key\'","nocache"=>"")
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
		
		
			
		$job_jia = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job_jia) && !empty($job_jia)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_jia as $key=>$value){
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
			foreach($job_jia as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_jia[$key]);
					continue;
				}else{
					$job_jia[$key] = $db->array_action($value,$cache_array);
					$job_jia[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_jia[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_jia[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_jia[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_jia[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_jia[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_jia[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_jia[$key][logo] =$r_uid[$value['uid']][logo];
					$job_jia[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_jia[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_jia[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_jia[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_jia[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_jia[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_jia[$key]['redtime'] =1;
					}else{
						$job_jia[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job_jia[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_jia[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_jia[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_jia[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_jia[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_jia[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_jia[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_jia[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_jia[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job_jia[$key][ratlogo] = $v[com_pic];
							}else{
								$job_jia[$key][ratlogo] ='';
							}
							$job_jia[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_jia[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_jia[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_jia[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][name_n]);
						$job_jia[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][com_n]);
						$job_jia[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_jia[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_jia)){
				if($paramer[keyword]!=""&&!empty($job_jia)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_jia = $job_jia; if (!is_array($job_jia) && !is_object($job_jia)) { settype($job_jia, 'array');}
foreach ($job_jia as $_smarty_tpl->tpl_vars['job_jia']->key => $_smarty_tpl->tpl_vars['job_jia']->value) {
$_smarty_tpl->tpl_vars['job_jia']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_jia']->key;
?>
            <div class="yun_jobshow_tj">
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job_jia']->value['id']),$_smarty_tpl);?>
">
                    <div class="yun_jobshow_tjname">
                        <h3><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['name_n'];?>
</h3></div>
                    <div class="yun_jobshow_tjinfo"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_two'];?>
 <span class="yun_jobshow_tjline">|</span><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_exp'];?>
经验<span class="yun_jobshow_tjline">|</span><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_edu'];?>
学历</div>

                    <span class="yun_jobshow_tj_xz"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_salary'];?>
</span >
       				<?php if ($_smarty_tpl->tpl_vars['job_jia']->value['urgent_time']>time()) {?> <span class="yun_jobshow_tj_jz">急招</span><?php }?>
                    <div class="">
                        <?php echo $_smarty_tpl->tpl_vars['job_jia']->value['com_name'];
if ($_smarty_tpl->tpl_vars['job_jia']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['job_jia']->value['ratlogo']!="0") {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['ratlogo'];?>
" style="vertical-align:middle; width:16px; height:16px;" /> <?php }?> <?php if ($_smarty_tpl->tpl_vars['job_jia']->value['yyzz_status']=='1') {?>
                        <i class="job_qy_rz_icon"></i> <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['job_jia']->value['welfarename']) {?> <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_jia']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
                    <span class="yun_jobshow_tj_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span> <?php } ?> <?php } else { ?>
                    <div class="yunwap_jobcom_info"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['pr_n'];?>
<span class="yunwap_jobcom_info_line">|</span><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['mun_n'];?>
<span class="yunwap_jobcom_info_line">|</span><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['hy_n'];?>
</div>
                    <?php }?>

                </a>
            </div>
            
            <?php }
if (!$_smarty_tpl->tpl_vars['job_jia']->_loop) {
?>
				<div class="wap_member_nosearch">
		         	<div class="wap_member_no_tip"> 很抱歉,暂无推荐职位！</div>
		        </div>
            <?php } ?>
        </div>
    </section>
</div>

<section>
    <div class="yun_job_footer">
        <div class="yun_job_footer_fixed">
            <div class="yun_job_footer_bg">
                <div class="yun_job_footer_fx_left">
                    <div class="yun_job_footer_fx">

                        <?php if ($_smarty_tpl->tpl_vars['job']->value['fav_job']) {?>
                        <a href="javascript:void(0);" class="">
                            <i class="iconfont_ysc"></i> <span class="yun_job_footer_s yun_job_footer_s_y">	已收藏</span></a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['usertypemsg']->value) {?>
                        <a href="javascript:void(0)" onclick="notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="">
                            <i class="iconfont_sc"></i> <span class="yun_job_footer_s">收藏</span></a>
                        <?php } else { ?>
                        <a href="javascript:jobfav('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="">
                            <i class="iconfont_sc"></i> <span class="yun_job_footer_s">收藏</span></a>
                        <?php }?>

                    </div>
                    <div class="yun_job_footer_fx">
                    	
                        <?php if ($_smarty_tpl->tpl_vars['look_msg']->value=='2'||$_smarty_tpl->tpl_vars['look_msg']->value=='3'||$_smarty_tpl->tpl_vars['look_msg']->value=='31'||$_smarty_tpl->tpl_vars['look_msg']->value=='4'||$_smarty_tpl->tpl_vars['look_msg']->value=='5') {?>
                        	<a><i class="iconfont_usershowtel"></i> <span style="color: #d0d0d0;">拨号</span></a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['job']->value['linktel']) {?>
                        	<a href="tel:<?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
"><i class="iconfont_tel"></i> <span class="yun_job_footer_s">拨号</span></a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['company']->value['linkphone']) {?>
                        	<a href="tel:<?php echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];?>
"><i class="iconfont_tel"></i> <span class="yun_job_footer_s">拨号</span></a>
                        <?php }?>
                    </div>

                    <div class="yun_job_footer_fx">
                        <a href="javascript:void(0);" data-url='<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'share','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
' id="shareClick" class=""> <i class="iconfont_jobshare"></i> <span class="yun_job_footer_s">分享</span></a>
                    </div>

                </div>

                <div class="yun_job_footer_fx_right">
                    <?php if ($_smarty_tpl->tpl_vars['job']->value['userid_job']) {?>
                    <span class="yun_job_footer_fx_right_ytd_bth">已投递简历</span> <?php } elseif ($_smarty_tpl->tpl_vars['job']->value['invite_job']) {?>
                    <span class="yun_job_footer_fx_right_ytd_bth">已邀请面试</span> <?php } elseif ($_smarty_tpl->tpl_vars['uid']->value=='') {?>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'applyjobuid','jobid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="yun_job_footer_fx_right_bth">投递简历</a>

                    <?php } elseif ($_smarty_tpl->tpl_vars['usertypemsg']->value) {?>
                    <a  href="javascript:void(0)" href="javascript:void(0)" onclick="notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="yun_job_footer_fx_right_bth">投递简历</a>
                    <?php } else { ?>
                    <a href="javascript:jobapply('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="yun_job_footer_fx_right_bth">投递简历</a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>




<div style="display:none" id="reportcom">
    <div class="report_box_h1"><span class="report_box_h1_s">举报此职位</span>
        <span class="report_box_h1_qx"><input class="" type="button" value="取消"  onclick="reportqx();"/></span>
    </div>
    <div class="report_box" style="width:320px;">

        <div class="report_job_ly_tip">请选择您的举报理由</div>

        
        <span class="report_job_ly" id="r1" onclick="add_reason(1);">电话空号</span>
        <span class="report_job_ly" id="r2" onclick="add_reason(2);">电话没人接</span>
        <span class="report_job_ly" id="r3" onclick="add_reason(3);">工资虚假</span>
        <span class="report_job_ly" id="r4" onclick="add_reason(4);">非法收费</span>
        <span class="report_job_ly" id="r5" onclick="add_reason(5);">职介冒充</span>

        <div class="report_job_ly_tip">备注说明</div>
        <div class="report_job_textarea_box">
            <input id="r_uid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" type="hidden" />
            <input id="id" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" type="hidden" />
            <input id="r_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" type="hidden" />
            <textarea placeholder="请简明扼要的阐述你的理由，以便工作人员更好的判断" id="r_reason" class="report_job_textarea"></textarea>
        </div>

        <div class="report_job_ly_tip">验证码</div>
        <div class="report_box_yz">
            <input type="text" class="report_box_text" id="authcode" maxlength="6" placeholder="输入图片验证码" onfocus="checkCode('vcode_img')" autocomplete="off">
            <img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" class="report_box_yz_img" />
            <a onclick="checkCode('vcode_img');">看不清?</a>
        </div>
        <div class="report_box_bth"> <input class="login_button_jb" type="button" value="举 报" onclick="reportSub();" /> </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/pack.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/chat/chat.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var config = {
        url: '<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'share','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
',
        title: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
        desc: '<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
',
        img: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
        img_title: '<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
',
        from: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
    };
    var content = '';

    function reportcom(usertype) {
        if(usertype == 1) {
            content = $("#reportcom").html();
            $("#reportcom").html('');
            layer.open({
                type: 1,
                shadeClose: false,
                content: content
            });
        }
    }

    function add_reason(s) {
        if($("#r" + s).hasClass('report_job_ly_cur')) {
            $("#r" + s).removeClass('report_job_ly_cur');
        } else {
            $("#r" + s).addClass('report_job_ly_cur');
        }
    }

    function reportqx() {
        $("#reportcom").html(content);
        layer.closeAll();
    }
    function reportSub() {
        var authcode = $("#authcode").val();
        var r1 = $("#r1").html(),
            r2 = $("#r2").html(),
            r3 = $("#r3").html(),
            r4 = $("#r4").html(),
            r5 = $("#r5").html();
        var reason = "理由：";
        if($("#r1").hasClass('report_job_ly_cur')) {
            var reason = reason + r1 + "，";
        }
        if($("#r2").hasClass('report_job_ly_cur')) {
            var reason = reason + r2 + "，";
        }
        if($("#r3").hasClass('report_job_ly_cur')) {
            var reason = reason + r3 + "，";
        }
        if($("#r4").hasClass('report_job_ly_cur')) {
            var reason = reason + r4 + "，";
        }
        if($("#r5").hasClass('report_job_ly_cur')) {
            var reason = reason + r5 + "；";
        }

        if(reason == '理由：') {
            layermsg('请选择举报原因！');
            return false;
        }

        var r6 = $("#r_reason").val();

        var reason = reason + r6;

        if(authcode == '') {
            layermsg('请填写验证码！');
            return false;
        }
        layer.closeAll();
        layer_load('执行中，请稍候...');
        $.post(wapurl + "?c=job&a=report", {
            id: '<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
',
            authcode: authcode,
            reason: reason
        }, function(data) {
            layer.closeAll();
            var data = eval('(' + data + ')');
            if(data.url) {
                layermsg(data.msg, 2, function() {
                    location.href = data.url;
                });
            } else {
                layermsg(data.msg, 2, function() {
                    location.reload(true);
                });
            }
        });
    }

    function zixun() {
        layer.open({
            type: 1,
            title: '对职位感兴趣？',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['300px', '320px'],
            content: '<div class="consultation_box"><textarea class="report_box_textarea mt10" id="reasons" placeholder="您可以提出对该职位的疑问。比如所在地、年薪、福利等等，我会及时给您回复！期待与您合作" 。></textarea><input type="hidden" name="jobid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" /><input type="hidden" name="job_uid" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
" /><input type="hidden" name="com_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" /><input type="hidden" name="job_name" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
" /><div class="report_box_yz"><span class="report_box_yz_name">验证码： </span> <input type="text" class="report_box_text" id="authcodes" maxlength="6"><img id="vcode_imgs" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" class="report_box_yz_img"/> <a onclick="checkCode(\'vcode_imgs\');">看不清?</a></div><div class="report_box_bth"><input class="login_button_jb" type="button" value="提交咨询"  onclick="zixunSubs();"/></div></div>'
        });
    }

    function zixunqxs() {
        $("#zixuns").html();
        layer.closeAll();
    }

    function zixunSubs() {
        var authcode = $("#authcodes").val();
        var reason = $("#reasons").val();
        var jobid = $.trim($("input[name='jobid']").val());
        var job_uid = $.trim($("input[name='job_uid']").val());
        var com_name = $.trim($("input[name='com_name']").val());
        var job_name = $.trim($("input[name='job_name']").val());
        if(reason == '') {
            layermsg('请填写咨询内容！');
            return false;
        }
        if(authcode == '') {
            layermsg('请填写验证码！');
            return false;
        }

        layer_load('执行中，请稍候...');
        $.post(wapurl + "?c=job&a=msg", {
            id: '<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
',
            authcode: authcode,
            reason: reason,
            jobid: jobid,
            job_uid: job_uid,
            com_name: com_name,
            job_name: job_name
        }, function(data) {
            layer.closeAll();
            var data = eval('(' + data + ')');
            if(data.url) {
                layermsg(data.msg, 2, function() {
                    location.href = data.url;
                });
            } else {
                layermsg(data.msg, 2, function() {
                    location.reload(true);
                });
            }
        });
    }

    function jobapply(jobid) {
        layer_load('执行中，请稍候...');
        $.get(wapurl + "?c=job&a=view&type=sq&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
", function(data) {
            layer.closeAll();
            var data = eval('(' + data + ')');
            if(data.state==1){
				pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')
			}else if(data.state==2){
				notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');
			}else if(data.url) {
                if(data.url == '1') {
                    url = location.href;
                }
                layermsg(data.msg, 2, function() {
                    location.href = data.url;
                });
            } else {
                layermsg(data.msg, 2);
            }
        });
    }
    function jobfav(jobid) {
        layer_load('执行中，请稍候...');
        $.get(wapurl + "?c=job&a=view&type=fav&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
", function(data) {
            layer.closeAll();
            var data = eval('(' + data + ')');
			if(data.state==1){
				pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')
			}else if(data.state==2){
				notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');
			}else if(data.url) {
                if(data.url == '1') {
                    url = location.href;
                }
                layermsg(data.msg, 2, function() {
                    location.href = data.url;
                });
            } else {
                layermsg(data.msg, 2, function() {
                    location.reload(true);
                });
            }
        })
    };

    function checkshenming() {
        $('#shenming').hide();
        $("#smtext").show();
    }

    function subsm(id) {
        var shenming = $("#smname").val();
        $.post(wapurl + "?c=job&a=shenming", {
            id: id,
            shenming: shenming
        }, function(data) {
            if(data) {
                location.reload(true);
            }
        });
    }
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['company']->value['x']&&$_smarty_tpl->tpl_vars['company']->value['y']) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var map=null;
    function getdistance() {
        var map_x = $("#map_x").val();
        var map_y = $("#map_y").val();
        if(map_x == 0 && map_y == 0) {
            var geolocation = new BMap.Geolocation();
            geolocation.getCurrentPosition(function(r) {
                if(this.getStatus() == BMAP_STATUS_SUCCESS) {
                    $.post(wapurl + 'index.php?c=job&a=distance', {
                        x: r.point.lng,
                        y: r.point.lat
                    }, function(data) {})
                    $("#map_x").val(r.point.lng);
                    $("#map_y").val(r.point.lat);
					map_x=r.point.lng;
					map_y=r.point.lat;
                } else {
                    if(this.getStatus() == "6") {
                        layermsg("开启手机定位后才能使用此功能", 2);
                        return false;
                    } else if(this.getStatus() == "7") {
                        layermsg("开启手机定位后才能使用此功能", 2);
                        return false;
                    } else {
                        layermsg("地图定位出错", 2);
                        return false;
                    }
                }
            }, {
                enableHighAccuracy: true
            })
        }
        var x = '<?php echo $_smarty_tpl->tpl_vars['company']->value['x'];?>
',
            y = '<?php echo $_smarty_tpl->tpl_vars['company']->value['y'];?>
';
		setTimeout(function(){
			if(map_x > 0 && map_y > 0) {
				var pointA = new BMap.Point(x, y);
				var pointB = new BMap.Point(map_x, map_y);
				var mapdistance = '(' + (map.getDistance(pointA, pointB) / 1000).toFixed(1) + 'km)';
				$("#distance").html(mapdistance);
			} else {
				setTimeout(function() {
					getdistance();
				}, 3000);
			}
		},1000);
    }
    $(function() {
		map = new BMap.Map();
        getdistance();
    })
<?php echo '</script'; ?>
>
<?php }?>

<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public_previewimage.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
