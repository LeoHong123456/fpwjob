<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:57:35
         compiled from "/www/fpwjob/uploads//app/template/member/lietou//header.htm" */ ?>
<?php /*%%SmartyHeaderCode:5470408205e4c87ff22a2e0-54862696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9da6f8cb9124a799bce51e9f6ccb9fe27c57c6ac' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/lietou//header.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5470408205e4c87ff22a2e0-54862696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'maplist' => 0,
    'navlist_app' => 0,
    'username' => 0,
    'addltjobnum' => 0,
    'isdef' => 0,
    'user' => 0,
    'member' => 0,
    'statis' => 0,
    'giverebatenum' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c87ff2b0e56_70662699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c87ff2b0e56_70662699')) {function content_5e4c87ff2b0e56_70662699($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_sign')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.sign.php';
?><?php echo '<script'; ?>
>
$(document).ready(function(){
	$(".meau_down").hover(function(){
		var aid=$(this).attr("aid");
		$("#nav"+aid).show();
		$("#navtop"+aid).addClass("m_nav_curre");
	},function(){
		var aid=$(this).attr("aid");
		$("#nav"+aid).hide();	
		$("#navtop"+aid).removeClass("m_nav_curre");
	}) 
	$(".mobliestatus").hover(function(){
		$(".mobliestatustype").show();
	},function(){
		$(".mobliestatustype").hide();
	})
	$(".emailstatus").hover(function(){
		$(".emailstatustype").show();
	},function(){
		$(".emailstatustype").hide();
	})
	$(".yyzzstatus").hover(function(){
		$(".yyzzstatustype").show();
	},function(){
		$(".yyzzstatustype").hide();
	})
})
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<div class="m_top_box"><div class="wrap">
<div class="m_top_box_l">客服热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
<span style="padding-left:30px;">QQ：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qq'];?>
</span></div>
<div class="m_top_box_r">
<div class="m_header_right fr">
    
    <div class="yun_topNav fr"> <a class="yun_navMore png" href="javascript:void(0)">网站导航</a>
        <div class="yun_webMoredown" style="display:none">
          <ul class="yun_top_nav_box_l">
                <?php  $_smarty_tpl->tpl_vars['maplist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maplist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("key"=>"\'key\'","item"=>"\'maplist\'","nocache"=>"")
;');
		include(PLUS_PATH."/navmap.cache.php");$Navlist=array();
		if(is_array($navmap)){
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];
		}
		
		$Navlist =$navmap[0];
		if(is_array($navmap)){
			foreach($navmap as $k=>$v){
				foreach($Navlist as $key=>$val){
					if($k==$val[id]){
						foreach($v as $kk=>$value){
							if($value[type]=='1'){
								if($config[sy_seo_rewrite]=="1" && $value[furl]!=''){
									$v[$kk][url] = $config[sy_weburl]."/".$value[furl];
								}else{
									$v[$kk][url] = $config[sy_weburl]."/".$value[url];
								}
							}
						}
						$Navlist[$key]['list'][]=$v;
					}
				}
			}
			foreach($Navlist as $key=>$value){
				if($value[type]=='1'){
					if($config[sy_seo_rewrite]=="1" && $value[furl]!=''){
						$Navlist[$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$Navlist[$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
			}
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['maplist']->key => $_smarty_tpl->tpl_vars['maplist']->value) {
$_smarty_tpl->tpl_vars['maplist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['maplist']->key;
?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['maplist']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['maplist']->value['eject']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['maplist']->value['name'];?>
</a></li>
                <?php } ?> 
                 </ul>
                <ul class="yun_top_nav_box_wx">
               <?php  $_smarty_tpl->tpl_vars['navlist_app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navlist_app']->_loop = false;
global $db,$db_config,$config;include(PLUS_PATH."/menu.cache.php");$Navlist=array();
		if(is_array($menu_name)){
            eval('$paramer=array("item"=>"\'navlist_app\'","hovclass"=>"\'nav_list_hover\'","nid"=>"11","nocache"=>"")
;');
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];

			foreach($menu_name[12] as $key=>$val){
				
				if($val['type']=='2'){
					if($config['sy_seo_rewrite']=="1" && $val[furl]!=''){
						$menu_name[12][$key][url] = $val[furl];
					}else{
						$menu_name[12][$key][url] = $val[url];
					}
					$menu_name[12][$key][navclass] = navcalss($val,$paramer[hovclass]);
				}
			}
			foreach($menu_name[1] as $key=>$value){
				if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[1][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
			foreach($menu_name[2] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[2][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
            $isCurrentFind=false;
			foreach($menu_name[4] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1' && $value[furl]!=''){
					if($config['sy_seo_rewrite']=="1"){
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
                if($isCurrentFind==false){
				    $menu_name[4][$key][navclass] = navcalss($value,$paramer[hovclass]);
                }
                if($menu_name[4][$key][navclass]){
                    $isCurrentFind=true;
                }
			}
			foreach($menu_name[5] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[5][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
		}
		
		if($paramer[nid]){
			$Navlist =$menu_name[$paramer[nid]];
		}else{
			$Navlist =$menu_name[1];
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['navlist_app']->key => $_smarty_tpl->tpl_vars['navlist_app']->value) {
$_smarty_tpl->tpl_vars['navlist_app']->_loop = true;
?>          
            <li> <a class="move_0<?php echo $_smarty_tpl->tpl_vars['navlist_app']->value['sort'];?>
"<?php if ($_smarty_tpl->tpl_vars['navlist_app']->value['eject']) {?> target="_blank"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['navlist_app']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlist_app']->value['name'];?>
</a> </li>
          <?php } ?>
                </ul>
                
        </div>
      </div>
      
        <div class="header_Remind fr header_Remind_hover" style="width:0px;height:0px;display:none;" id="tzmsgNum">
            <em class="header_Remind_em "><i class="header_Remind_msg"></i></em>
            <div class="header_Remind_list" style="display:none;">
                <div class="header_Remind_list_a">
                   <a href="index.php?c=yp_resume" class="fl">应聘简历</a>
                    <span class="header_Remind_list_r fr" id="userid_jobNum">(0)</span>
                </div>
                <div class="header_Remind_list_a">
          <a href="index.php?c=entrust_resume" class="fl">委托简历</a>
                    <span class="header_Remind_list_r fr" id="entrustNum">(0)</span>
                </div>
                
                <div class="header_Remind_list_a">
                  <a href="index.php?c=sysnews" class="fl">系统消息</a>
                    <span class="header_Remind_list_r fr" id="sysmsgNum">(0)</span>
                </div>
                   <div class="header_Remind_list_a">
                    <a href="index.php?c=zixun" class="fl">求职咨询</a>
                    <span class="header_Remind_list_r fr" id="commsgNum">(0)</span>
                </div>
            </div>
        </div>
    
    </div>
    <span class="m_top_box_rhi">您好 <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
，欢迎来到<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
！ <span class="m_top_box_rhtc">[<a href="javascript:void(0)" onClick="logout('index.php?act=logout')">退出</a>]</span></span></div>

</div></div>
<div class=""></div>
<div class="m_header">
  <div class="wrap">
    <div class="m_header_logo fl"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">
    <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ltmember_logo'];?>
" >
    </a></div><a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addltjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_job'];?>
','lietou','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="can_sign_btn">发布职位</a>
        <div class="m_nav_dh">
      <ul>
        <li class="m_nav_first"><a href="index.php">首页</a></li>
           <li id="navtop2" <?php if ($_smarty_tpl->tpl_vars['isdef']->value==2) {?>class="m_nav_curre"<?php }?>>
          
          <div class="meau_down" aid="2"> <a href="index.php?c=job&s=1">职位管理</a> 
            

          </div>
        </li>
     
          <li id="navtop4" <?php if ($_smarty_tpl->tpl_vars['isdef']->value==4) {?>class="m_nav_curre"<?php }?>>
          <div class="meau_down" aid="4"> <a href="index.php?c=yp_resume">简历管理</a> 
           
          </div>
        </li>
       <li id="navtop3" <?php if ($_smarty_tpl->tpl_vars['isdef']->value==3) {?>class="m_nav_curre"<?php }?>>
          <div class="meau_down" aid="3"> <a href="index.php?c=paylog">财务管理</a> 
            
          </div>
        </li>
        <li id="navtop1" <?php if ($_smarty_tpl->tpl_vars['isdef']->value==1) {?>class="m_nav_curre"<?php }?>>
          <div class="meau_down" aid="1"> <a href="index.php?c=info">账号管理</a> 
            
          
          </div>
        </li>
       
       <li style="background:none"><a href="<?php echo smarty_function_url(array('m'=>'lietou'),$_smarty_tpl);?>
" target="_blank">猎头首页</a></li>
      </ul>
    </div>
  
  </div>
  <div class="clear"></div>
</div>
<div class="header_info">
  <div class="wrap">
  <div class="header_info_pic">
   <a href="index.php?c=uppic"> <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo_big'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);"/ width="80" height="80">
</a>
</div>
  <div class="header_info_cont">
<div class="header_info_name">您好，<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
！</div>
<div class="header_info_time">上次登录时间：<?php if ($_smarty_tpl->tpl_vars['member']->value['login_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member']->value['login_date'],"%Y-%m-%d %H:%M:%S");
} else { ?>未登录<?php }?></div>
<div class="header_info_rz">

<?php if ($_smarty_tpl->tpl_vars['user']->value['moblie_status']==1) {?>
<div class="header_info_rz_list mobliestatus"><a href="index.php?c=binding" class="sjrz"></a>
<div class="box_con prompt mobliestatustype" style="display: none;"><i class="arrow-down"></i><b>手机已绑定</b></div><em></em></div>
<?php } else { ?>
<div class="header_info_rz_list mobliestatus"><a href="index.php?c=binding" class="sjwrz"></a>
<div class="box_con prompt mobliestatustype" style="display: none;"><i class="arrow-down"></i><b>手机未绑定</b></div><em></em></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['email_status']==1) {?>
<div class="header_info_rz_list emailstatus"><a href="index.php?c=binding" class="yxrz"></a>
<div class="box_con prompt emailstatustype" style="display: none;"><i class="arrow-down"></i><b>邮箱已验证</b></div><em></em></div>
<?php } else { ?>
<div class="header_info_rz_list emailstatus"><a href="index.php?c=binding" class="yxwrz"></a>
<div class="box_con prompt emailstatustype" style="display: none;"><i class="arrow-down"></i><b>邮箱未验证</b></div><em></em></div>	
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['yyzz_status']==1) {?>
<div class="header_info_rz_list yyzzstatus"><a href="index.php?c=binding" class="zzrz"></a>
<div class="box_con prompt yyzzstatustype" style="display: none;"><i class="arrow-down"></i><b>职业资格已验证</b></div><em></em></div>
<?php } else { ?>
<div class="header_info_rz_list yyzzstatus"><a href="index.php?c=binding" class="zzwrz"></a>
<div class="box_con prompt yyzzstatustype" style="display: none;"><i class="arrow-down"></i><b>职业资格未验证</b></div><em></em></div>
<?php }?>
				

</div>
</div>
<div class="com_index_sign_box">
					<div class="com_index_sign"><?php echo smarty_function_sign(array(),$_smarty_tpl);?>
</div>
				</div>
  <div class="header_info_right">
<ul class="main_data_info_r">
<li><a href="index.php?c=mypay"class="main_data_info_r_a"><h6>账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</h6><p><i><span class="jifen"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span></i></p></a></li>
<li><a href="index.php?c=jobpack" class="main_data_info_r_a"><h6>我的赏金</h6><p><i id="hbText"><?php if ($_smarty_tpl->tpl_vars['statis']->value['packpay']) {
echo $_smarty_tpl->tpl_vars['statis']->value['packpay'];
} else { ?>0<?php }?></i><em>元</em></p></a></li>
<li><a href="index.php?c=give_rebates"class="main_data_info_r_a"><h6>悬赏职位</h6><p><i id="czText"><?php echo $_smarty_tpl->tpl_vars['giverebatenum']->value;?>
</i><em>个</em></p></a></li>
<li><span class="main_data_info_r_span"><a href="index.php?c=pay&type=integral" class="main_data_info_r_span_a">充值</a><a href="index.php?c=paylog" class="main_data_info_r_span_mx">明细</a></span></li>
<li style="border:none;"><span class="main_data_info_r_span"><a href="index.php?c=info" class="main_data_info_r_span_mx">编辑</a><a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'headhunter','uid'=>$_smarty_tpl->tpl_vars['uid']->value),$_smarty_tpl);?>
" target="_blank" class="main_data_info_r_span_mx">预览</a></span></li>
</ul>
            
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/jobserver.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php }} ?>
