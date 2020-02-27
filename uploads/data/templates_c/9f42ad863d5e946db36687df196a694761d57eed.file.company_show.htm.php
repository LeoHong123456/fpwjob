<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 12:01:59
         compiled from "/www/fpwjob/uploads/app/template/wap/company_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:7953603315e2e60b759f6a1-55091543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f42ad863d5e946db36687df196a694761d57eed' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/company_show.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7953603315e2e60b759f6a1-55091543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'config' => 0,
    'comrat' => 0,
    'industry_name' => 0,
    'city_name' => 0,
    'comclass_name' => 0,
    'waflist' => 0,
    'mapx' => 0,
    'mapy' => 0,
    'wap_style' => 0,
    'show' => 0,
    'v' => 0,
    'userid_job' => 0,
    'usertype' => 0,
    'looktype' => 0,
    'look_msg' => 0,
    'job' => 0,
    'school_xjh' => 0,
    'clist' => 0,
    'companymsg' => 0,
    'score' => 0,
    'mlist' => 0,
    'job_list' => 0,
    'isatn' => 0,
    'typename' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e60b776d268_61317419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e60b776d268_61317419')) {function content_5e2e60b776d268_61317419($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_score')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.score.php';
?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="header_navlist">
    <a href="javascript:void(0);" id="jobclick"><i class="naviconfont"></i></a>
</div>
<style>
    .img_auto img {
        max-width: 100%;
    }
</style>
<section>
    <div class="company_info">

        <div class="company_info_logo muipreview">
            <img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);">
        </div>
    </div>

    <div class="company_cominfo">
        <div class="company_infonname">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['comrat']->value['com_pic']!="0"&&$_smarty_tpl->tpl_vars['comrat']->value['com_pic']!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['comrat']->value['com_pic'];?>
" width="14" height="14" style="vertical-align:middle" /> <?php }?> <?php if ($_smarty_tpl->tpl_vars['row']->value['yyzz_status']=='1') {?><i class="job_qy_rz_icon"></i><?php }?>
        </div>

        <div class="company_cominfo_p">
            <div class="company_cominfo_p_hy"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];?>
</div>
           <?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]) {?> <span class="company_info_basic"> <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
if ($_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]) {?>/<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
}?></span><?php }?> <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['pr']]) {?><span class="company_info_basic company_info_basic_xz"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['pr']];?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['row']->value['money']!=0) {?><span class="company_info_basic company_info_basic_zz"><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];
if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==1) {?>万元<?php } else { ?>万美元<?php }?></span><?php }
if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['mun']]) {?><span class="company_info_basic company_info_basic_rs"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['mun']];?>
</span><?php }?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['row']->value['welfare_n']) {?>
        <div class="com_show_fl com_show_fl_ct">
            <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['welfare_n']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
            <span class="com_show_fl_s"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span><?php } ?>
        </div>
        <?php }?>

    </div>
</section>
<?php if ($_smarty_tpl->tpl_vars['row']->value['address']) {?>
<div class="com_map ">
    <?php if ($_smarty_tpl->tpl_vars['row']->value['x']&&$_smarty_tpl->tpl_vars['row']->value['y']) {?>
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'jobmap','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
"><span class="com_map_name">地址</span><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
<em id="distance"></em><i class="com_map_name_icon"></i><i class="com_map_name_jt"></i></a>
    <input type="hidden" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['mapx']->value;?>
" />
    <input type="hidden" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['mapy']->value;?>
" /> 
	<?php } else { ?>
    <span class="com_map_name">地址</span><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
 <?php }?>
</div>
<?php }?>
    <div class="clear"></div>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_haibao_isopen']==1) {?>
    <div class="zphb_show">
   <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'whb','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
"> <div class="zphb_show_c">生成招聘海报分享到朋友圈~</div></a>
  </div>
  <?php }?>
    <div class="clear"></div>
<section>
    <div class=" mt15 none" id="businessInfo">
        <div class="com_new_contnet_box ">
            <div class="wap_title"><span class="">工商信息</span></div>

            

            <div class="business">
                <div class="businessInfo">
                    <ul class="basicMsgList clearfix" style="line-height:30px;height:275px; overflow:hidden" id="com_business">
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
                        <li>
                            <div class="clearfix"><span>注册地址：</span><em id="regLocation"></em></div>
                        </li>
						<li>
							<div class="clearfix"><span>经营范围：</span><em id="businessScope"></em></div>
						</li>
                    </ul>
					<div class="qxb clearfix">
						<div class="qxb_tg" style="background:#fafafa; padding:5px 10px ; text-align:center"><span>以上内容由</span> <span class="hxb"><a href="" class="tianyancha" id="tianyancha" target='_blank'><img src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/images/tycc.png" height="30" style="vertical-align:middle"></a> </span> <span>提供</span></div>
					</div>
				</div>
				<div class="on-off" style="background:#f8f8f8; padding:5px 10px ;text-align: center"><a href="javascript:void(0);" onclick="showbb()">展开信息</a></div>
			</div>
			
        </div>
  </div>
</section>  

<section id='content'>
  <div class=" mt15">
    <div class="com_new_contnet_box ">
       <div class="wap_title"><span class="">公司简介</span></div>

      <div class="user_contnet_box_p  jobshow_content_lh muipreview">  
       
      <?php if ($_smarty_tpl->tpl_vars['row']->value['content']) {?>
      <div style="width:100%;height:auto; overflow:hidden" id="com_content" class="img_auto">
      <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

      </div>
      <div class="com_show_cont none" onclick="showcc()">展开信息 </div>
      <?php } else { ?> 
      <div class="evaluate_pj_no"><i class="evaluate_pj_no_icon"></i>该企业还没有填写公司简介! </div>      
      <?php }?> 
      
       </div>
       
      </div>
  </div>
</section>
<?php if ($_smarty_tpl->tpl_vars['show']->value) {?>
<section id='content'>
  <div class=" mt15">
    <div class="com_new_contnet_box ">
       <div class="wap_title"><span class="">公司环境</span></div>
			<div class="swiper_banner" style=" text-align:center">
				<div class="swiper-container" id="imgswiper">
					<div class="swiper-wrapper">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<div class="swiper-slide">
						<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" style="max-width:100%;height:160px;" />
					</div>
					<?php } ?>
					</div>
				</div>
			</div>
      </div>
  </div>
</section>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
	<div class="yun_chat_new" onclick="jobChat('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
',<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_type'];?>
,'<?php echo $_smarty_tpl->tpl_vars['userid_job']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
','com')"><span class="yun_chat_new_bth">聊聊</span></div>
	</div>
<?php }?>
<section id='tel'>
  <div class=" mt15">
    <div class="com_new_contnet_box ">
      <div class="wap_title"><span class="">联系方式</span></div>
       <?php if ($_smarty_tpl->tpl_vars['looktype']->value=="1") {?>
		   <ul class="com_post_msg com_post_msg_touch ">
			<?php if ($_smarty_tpl->tpl_vars['row']->value['linkman']) {?>
			<li><i class="com_post_msg_touch_icon iconfont_jobshow_teluser"></i>联&nbsp;系&nbsp;人：<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];
if ($_smarty_tpl->tpl_vars['row']->value['linkjob']) {?><em class="com_post_msg_zw">( <?php echo $_smarty_tpl->tpl_vars['row']->value['linkjob'];?>
 )</em><?php }?></li>
			<?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['row']->value['linktel']) {?>
			<li class="com_post_msg_tel"><i class="com_post_msg_touch_icon iconfont_jobshow_telip"></i>联系手机：
				<a href="tel:<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" class="com_post_msg_tel_n"><?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
<span class="com_post_tel_bd"><i class="com_post_sj iconfont"></i>  <div class="com_post_tel_bd_p">拨打</div></span></a>
			</li>
			<?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['row']->value['linkphone']) {?>
			<li class="com_post_msg_tel"><i class="com_post_msg_touch_icon iconfont_jobshow_tel"></i>联系电话：
				<a href="tel:<?php echo $_smarty_tpl->tpl_vars['row']->value['callphone'];?>
" class="com_post_msg_tel_n"><?php echo $_smarty_tpl->tpl_vars['row']->value['linkphone'];?>
<span class="com_post_tel_bd"><i class="com_post_zx iconfont"></i>  <div class="com_post_tel_bd_p">拨打</div></span></a>
			</li>
			<?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['row']->value['busstops']) {?>
			<li><i class="com_post_msg_touch_icon iconfont_jobshow_bus"></i>公交站点：</span><?php echo $_smarty_tpl->tpl_vars['row']->value['busstops'];?>
</li>
			<?php }?>
			</ul>
		<?php } else { ?> 
			<?php if ($_smarty_tpl->tpl_vars['looktype']->value=="3"||$_smarty_tpl->tpl_vars['looktype']->value=="2"||$_smarty_tpl->tpl_vars['looktype']->value=="5"||$_smarty_tpl->tpl_vars['looktype']->value=="7") {?>
				<div class="com_post_login"> <i class="com_post_tel iconfont"></i><?php echo $_smarty_tpl->tpl_vars['look_msg']->value;?>
 </div>
			<?php } elseif ($_smarty_tpl->tpl_vars['looktype']->value=="4") {?> 
				<?php if ($_smarty_tpl->tpl_vars['row']->value['linkman']) {?>
				<div class="com_tel_p">联&nbsp;系&nbsp; 人：<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['row']->value['linktel']) {?>
				<div class="com_tel_p">联系手机：
					<font color="#f00"><?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
</font>
				</div>
				<?php }?> 
				<?php if ($_smarty_tpl->tpl_vars['row']->value['linkphone']) {?>
				<div class="com_tel_p">联系电话：<?php echo $_smarty_tpl->tpl_vars['row']->value['linkphone'];?>
</div>
				<?php }?>
				<div class="com_tel_p">公司地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</div>
				<div class=" ">
					<div class="com_post_login com_post_login_no">
						<div class="com_post_login_no_tip"><span class="">登录后查看联系方式</span>
						</div>
						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login','job'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="com_s_logoin">登录</a>

						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="com_s_reg">注册</a>
					</div>
				</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['looktype']->value=="6") {?>
			<div class="com_post_login"> <i class="com_post_tel iconfont"></i><?php echo $_smarty_tpl->tpl_vars['look_msg']->value;?>
 </div>
			<div class="company_tit_p_touch_l_c">
				<a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
member/index.php?c=addresume" class="company_tit_p_touch_log">创建简历</a>
			</div>
			<?php }?> 
		<?php }?>
		</div>
	</div>
</section>
<section>
    <?php if ($_smarty_tpl->tpl_vars['school_xjh']->value) {?>
    <div class=" mt15">
        <div class="com_new_contnet_box ">
            <div class="wap_title"><span class="">宣讲会</span></div>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['clist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("uid"=>"$_smarty_tpl->tpl_vars[\'row\']->value[\'uid\']","item"=>"\'clist\'","nocache"=>"")
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
                    <div class="wap_school_jobname">
                        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school','a'=>'schoolacademyshow','id'=>$_smarty_tpl->tpl_vars['clist']->value['schoolid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['clist']->value['sch_name'];?>
</a>
                    </div>
                    <div class="wap_school_xjhtime"><i class="wap_school_xjhtime_icon"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['clist']->value['stime'],'%Y-%m-%d %H:%M');?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['clist']->value['etime'],'%H:%M');?>
</div>
                    <div class="wap_school_xjh_add"><i class="wap_school_xjhadd_icon"></i><?php echo $_smarty_tpl->tpl_vars['clist']->value['address'];?>
</div>
                </li>

                <?php } ?>
            </ul>
        </div>
    </div>
    <?php }?>
</section>
<section>
    <?php if ($_smarty_tpl->tpl_vars['companymsg']->value) {?>
    <div class=" mt15">
        <div class="com_new_contnet_box ">
            <div class="wap_title"><span class="">面试评价</span></div>
            <?php echo smarty_function_score(array('uid'=>$_smarty_tpl->tpl_vars['row']->value['uid'],'item'=>'score'),$_smarty_tpl);?>

            <div class="evaluate">
                <?php if ($_smarty_tpl->tpl_vars['score']->value['num']) {?>
                <div class="evaluate_pf_otherbox evaluate_pf_otherbox_bor">
                    <div class="evaluate_pf_left">
                        <div class="evaluate_pf_left_tit">综合评分<span class="evaluate_pf_left_tit_n">( 来自<?php echo $_smarty_tpl->tpl_vars['score']->value['num'];?>
人评价 )</span></div>
                        <div class="evaluate_pf_other">
                            <div class="evaluate_pf_other_name">描述相符：</div>
                            <div class="evaluate_pf_other_start">
                                <div class="evaluate_pf_other_startbox" style="width:<?php echo $_smarty_tpl->tpl_vars['score']->value['desscore']/5*100;?>
%"><i class="evaluate_pf_other_start_p"></i></div>
                            </div>
                            <div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['score']->value['desscore'];?>
</div>
                        </div>
                        <div class="evaluate_pf_other">
                            <div class="evaluate_pf_other_name">面试官：</div>
                            <div class="evaluate_pf_other_start">
                                <div class="evaluate_pf_other_startbox" style="width:<?php echo $_smarty_tpl->tpl_vars['score']->value['hrscore']/5*100;?>
%"><i class="evaluate_pf_other_start_p"></i></div>
                            </div>
                            <div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['score']->value['hrscore'];?>
</div>
                        </div>
                        <div class="evaluate_pf_other">
                            <div class="evaluate_pf_other_name"> 公司环境：</div>
                            <div class="evaluate_pf_other_start">
                                <div class="evaluate_pf_other_startbox" style="width:<?php echo $_smarty_tpl->tpl_vars['score']->value['comscore']/5*100;?>
%"><i class="evaluate_pf_other_start_p"></i></div>
                            </div>
                            <div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['score']->value['comscore'];?>
</div>
                        </div>
                    </div>

                    <div class="evaluate_pf_right">
                        <div class="evaluate_pf_right_name">综合</div><span class="evaluate_pf_right_fs"><?php echo $_smarty_tpl->tpl_vars['score']->value['score'];?>
</span> 分
                    </div>

                </div>
                <?php }?>
                
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
',2);"></div>
                        <div class="evaluate_username_u"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['name'];?>
</div>
                    </div>
                    <div class="evaluate_user_pf">
                        <div class="evaluate_ms_box">
                            <div class="evaluate_pf_userzh">
                                <div class="evaluate_pf_userzh_l">综合评分：</div>
                                <div class="evaluate_pf_other_start">
                                    <div class="evaluate_pf_other_startbox" style="width:<?php echo $_smarty_tpl->tpl_vars['mlist']->value['score']*20;?>
%"><i class="evaluate_pf_other_start_p"></i></div>
                                </div>
                                <div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['score'];?>
</div>
                            </div>
                            <div class="evaluate_pf_job">面试职位：<?php if ($_smarty_tpl->tpl_vars['mlist']->value['jobname']) {?>
                                <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['mlist']->value['jobid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['jobname'];?>
</a><?php } else { ?>职位已下架<?php }?></div>
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
                            <?php if ($_smarty_tpl->tpl_vars['mlist']->value['othercontent']) {?><div class="evaluate_pj">[其他评价] <?php echo $_smarty_tpl->tpl_vars['mlist']->value['othercontent'];?>
</div><?php }?>
                        </div>
                    </div>
                </div>
                <?php }
if (!$_smarty_tpl->tpl_vars['mlist']->_loop) {
?>
                <div class="evaluate_pj_no"><i class="evaluate_pj_no_icon"></i>该企业尚未收到面试评价! </div>

                <?php } ?>
                
                <?php if ($_smarty_tpl->tpl_vars['mlist']->value) {?>
                <div class="evaluate_look_compj">
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'msg','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
">查看公司全部评价>></a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <?php }?>
</section>

<section id="job">
    <div class=" mt15">
        <div class="index_warp_content">
            <div class="wap_title"><span class="">正在招聘的职位</span></div>
            <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['uid'], null, 0);?> <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("namelen"=>"8","comlen"=>"12","ispage"=>"0","uid"=>"\'@row.uid\'","order"=>"\'xuanshang\'","islt"=>"4","item"=>"\'job_list\'","name"=>"\'joblist1\'","nocache"=>"")
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
		
		
			
		$job_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job_list) && !empty($job_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_list as $key=>$value){
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
			foreach($job_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_list[$key]);
					continue;
				}else{
					$job_list[$key] = $db->array_action($value,$cache_array);
					$job_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_list[$key][logo] =$r_uid[$value['uid']][logo];
					$job_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_list[$key]['redtime'] =1;
					}else{
						$job_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job_list[$key][ratlogo] = $v[com_pic];
							}else{
								$job_list[$key][ratlogo] ='';
							}
							$job_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][name_n]);
						$job_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][com_n]);
						$job_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_list)){
				if($paramer[keyword]!=""&&!empty($job_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
?>
            <div class="com_show_joblist">
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job_list']->value['id']),$_smarty_tpl);?>
" class="job_list">
                    <h3><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];
if ($_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()) {?><i class="urgent">急招</i><?php }?></h3>
                    <aside class="job_qy_name">
                        <strong style="color:#ff6a6a; font-weight:normal"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_salary']!='面议') {?>￥<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];
} else { ?>面议<?php }?></strong>
                    </aside>
                    <div class="com_show_jiobc">
                        <span class="com_show_city"><i class="com_show_city_icon"></i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_two'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_exp']) {?><span class="com_show_jy"><i class="com_show_jy_icon"></i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_exp'];?>
经验 </span><?php }?> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_edu']) {?><span class="com_show_jy"><i class="com_show_xl_icon"></i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_edu'];?>
学历 </span><?php }?>
                    </div>
                    <aside class="job_pay"><span class="job_t_date job_t_date_t"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['job_list']->value['time']=='昨天') {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
</span> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
 <?php }?>
                        </span>
                    </aside>
                </a>
            </div>
            <?php }
if (!$_smarty_tpl->tpl_vars['job_list']->_loop) {
?>
            <div class="evaluate_pj_no"><i class="evaluate_pj_no_icon"></i>该企业还没有发布职位信息! </div>
            <?php } ?>
        </div>
    </div>
</section>


<section>
    <div class="yun_job_footer">
        <div class="yun_job_footer_fixed">
            <div class="com_footer_bg">
                <div class="com_footer">
                    <div class="com_footer_pd">
                        <a href="javascript:void(0);" data-url='<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'share','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
' class="" id="shareClick">分享企业</a>
                    </div>
                </div>

                <div class="com_footer">
                    <div class="com_footer_pd">
                        <?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?> 
                        	<?php if ($_smarty_tpl->tpl_vars['isatn']->value['id']) {?>
                        		<span class="  atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' class=" com_footer_gz_qx">取消关注</a> </span> 
                        	<?php } else { ?>
                        		<span class=" atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' class="com_footer_gz">关注企业</a> </span> 
                        	<?php }?> 
                        <?php } else { ?>
                        	<?php if ($_smarty_tpl->tpl_vars['usertype']->value) {?> 
                        		<a href="javascript:void(0)" class="com_footer_gz" onclick="notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','');">关注企业</a>
                    		<?php } else { ?>
                    			<a href="javascript:void(0)" class="com_footer_gz" onclick="pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')">关注企业</a>
                    		<?php }?>
                    	<?php }?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

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
/chat/chat.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var config = {
        url: '<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'share','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
',
        title: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
',
        desc: '',
        img: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
        img_title: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
',
        from: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
    };
    $(function() {
        $.post('<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'getbusiness'),$_smarty_tpl);?>
', {
            name: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
'
        }, function(data) {

            if(data) {
                var business = eval('(' + data + ')');
                $('#creditCode').html(business.creditCode);
                $('#estiblishTime').html(business.estiblishTime);
                $('#orgNumber').html(business.orgNumber);
                $('#Time').html(business.fromTime + '至' + business.toTime);
                $('#companyOrgType').html(business.companyOrgType);
                $('#regInstitute').html(business.regInstitute);
                $('#regStatus').html(business.regStatus);
                $('#regLocation').html(business.regLocation);
                $('#regCapital').html(business.regCapital);
                $('#businessScope').html(business.businessScope);
                $('#tianyancha').attr('href', 'https://www.tianyancha.com/company/' + business.companyId);
                $('#businessInfo').show();
                
            }
        });
    })
    $(function() {
        var myimgswiper = new Swiper('#imgswiper', {
            direction: 'horizontal',
            autoplay: true,
            loop: true
        });
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['row']->value['x']&&$_smarty_tpl->tpl_vars['row']->value['y']) {?>
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
        var x = '<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
',
            y = '<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
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
<?php echo '<script'; ?>
>
    $(function() {
        var cheight = $("#com_content").height();
        var bheight = $("#com_business").height();
        if(parseInt(cheight) > 275) {
            $("#com_content").attr('style', 'width:100%;height:275px; overflow:hidden');
            $(".com_show_cont").show();
        }
        if(parseInt(bheight) > 275) {
            $("#com_business").attr('style', 'line-height:30px;height:auto; overflow:hidden');
            $(".on-off").show();
        }
    });

    function showcc() {
        $("#com_content").attr('style', 'width:100%;height:auto; overflow:hidden');
        $(".com_show_cont").html('收起');
        $(".com_show_cont").attr('onclick', 'hidecc()');
    }

    function hidecc() {
        $("#com_content").attr('style', 'width:100%;height:275px; overflow:hidden');
        $(".com_show_cont").html('展开信息');
        $(".com_show_cont").attr('onclick', 'showcc()');
    }

    function showbb() {
        $("#com_business").attr('style', 'line-height:30px;height:auto; overflow:hidden');
        $(".on-off").find('a').html('收起');
        $(".on-off").find('a').attr('onclick', 'hidebb()');
    }

    function hidebb() {
        $("#com_business").attr('style', 'line-height:30px;height:275px; overflow:hidden');
        $(".on-off").find('a').html('展开信息');
        $(".on-off").find('a').attr('onclick', 'showbb()');
    }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public_previewimage.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
