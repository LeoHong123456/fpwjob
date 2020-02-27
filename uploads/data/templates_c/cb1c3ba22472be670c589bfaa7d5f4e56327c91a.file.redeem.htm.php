<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-26 20:35:47
         compiled from "/www/fpwjob/uploads/app/template/wap/redeem.htm" */ ?>
<?php /*%%SmartyHeaderCode:18590472435e566623ecff00-89623929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb1c3ba22472be670c589bfaa7d5f4e56327c91a' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/redeem.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18590472435e566623ecff00-89623929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'photo' => 0,
    'uid' => 0,
    'username' => 0,
    'statis' => 0,
    'lunbo' => 0,
    'val' => 0,
    'rec' => 0,
    'lipin' => 0,
    'v' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5666241542d5_29630252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5666241542d5_29630252')) {function content_5e5666241542d5_29630252($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
    .header_h {
        display: none;
    }
</style>
<div style="height:30px; background:#3366cc"></div>
<div class="redeem_header_box">
    <i class="redeem_header_box_q"></i>
    <div class="redeem_header_photo">
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/images/r_tx.png',2);">
    </div>
    <div class="redeem_header_info">
        <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
        <div class="redeem_header_info_name">Hi , <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 你好 !</div>
		 <em class="redeem_header_info_f">您的<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</em> <span class="redeem_header_info_n"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span> 
		<?php } else { ?>
        <div class="redeem_header_info_name">Hi , 你好 !</div>
        <div class="redeem_header_info_login">请
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="redeem_header_info_login_c">登录</a><span class="redeem_header_info_login_line">|</span>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="redeem_header_info_login_c">注册</a>
        </div>
       <?php }?>
    </div>

    <div class="redeem_header_nav">
        <div class="redeem_header_nav_c">
            <ul class="redeem_header_nav_list">
                <?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="redeem_header_nav_icon redeem_header_nav_icon_all">我能兑换</a>
                </li>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="redeem_header_nav_icon redeem_header_nav_icon_jl">兑换记录</a>
                </li>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="redeem_header_nav_icon redeem_header_nav_icon_zjf">赚积分</a>
                </li>
                <?php } else { ?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem','a'=>'list','intinfo'=>$_smarty_tpl->tpl_vars['statis']->value['integral']),$_smarty_tpl);?>
" class="redeem_header_nav_icon redeem_header_nav_icon_all">我能兑换</a>
                </li>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
/member/index.php?c=reward_list&back=1" class="redeem_header_nav_icon redeem_header_nav_icon_jl">兑换记录</a>
                </li>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
/member/index.php?c=integral&back=1" class="redeem_header_nav_icon redeem_header_nav_icon_zjf">赚积分</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>

<!--banner-->
<div class="redeem_index_banner" style="height: auto;">
    <!--<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/images/6.png"/>-->
    <div class="swiper-container" id="imgswiper">
        <div class="swiper-wrapper">
            <?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[70];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
            <div class="swiper-slide">
                <a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['src'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%' /></a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="redeem_hot">
    <div class="redeem_hot_h1"><span class="redeem_hot_s">热门兑换</span>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem','a'=>'list','hot'=>1),$_smarty_tpl);?>
" class="redeem_hot_more">更多礼品 ></a>
    </div>
    <div class="redeem_hotlist_box">
        <ul class="redeem_hotlist">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
$val=array();$time=time();eval('$paramer=array("item"=>"\'val\'","hot"=>"1","limit"=>"10","islt"=>"6","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`=1 ";
		if($paramer[hot]){
			$where.=" AND `hot`=".$paramer[hot]."";
		}
		if($paramer[rec]){
			$where.=" AND `rec`=".$paramer[rec]."";
		}
		if($paramer[nid]){
			$where.=" AND `nid`=".$paramer[nid]."";
		}
		if($paramer[tnid]){
			$where.=" AND `tnid`=".$paramer[tnid]."";
		}
		if($paramer[intinfo]){
			$bninfo=@explode('_',$paramer[intinfo]);
			if($bninfo[1]){
				$where.=" and `integral` between '".$bninfo[0]."' and '".$bninfo[1]."'";
			}else{
				$where.=" and `integral` <".$bninfo[0]."";
			}
			
		}
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"reward",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
		}
		//排序字段（默认按照开始时间排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY integral ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$val=$db->select_all("reward",$where.$limit);
		if(is_array($val)){
			foreach($val as $key=>$value){
				if(!$value['pic'] || !file_exists(APP_PATH.$value['pic'])){
					$val[$key]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$val[$key]['pic']= $config['sy_weburl']."/".$value['pic'];
				}
				if($paramer[islt]==6){
					$val[$key][url] = Url("wap",array("c"=>"redeem","a"=>"show","id"=>$value[id]));
				}else{
					$val[$key][url] = Url("redeem",array("c"=>"show","id"=>$value[id]));
				}
			}
		}
		$val = $val; if (!is_array($val) && !is_object($val)) { settype($val, 'array');}
foreach ($val as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            <li>
                <div class="redeem_hot_li">
                    <div class="redeem_hot_pic">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" /></a>
                    </div>
                    <div class="redeem_hot_name">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['val']->value['name'],0,10,'utf-8');?>
</a>
                    </div>
                    <div class="redeem_hot_jf"><span class="redeem_hot_jf_s"><?php echo $_smarty_tpl->tpl_vars['val']->value['integral'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span></div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="redeem_jx_box mt10">
    <div class="redeem_jx_h1 "><span class="redeem_jx_s">精选好货</span>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem','a'=>'list','rec'=>1),$_smarty_tpl);?>
" class="redeem_hot_more">更多礼品 ></a>
    </div>

    <ul class="redeem_list">
        <?php  $_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rec']->_loop = false;
$rec=array();$time=time();eval('$paramer=array("item"=>"\'rec\'","rec"=>"1","limit"=>"9","islt"=>"6","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`=1 ";
		if($paramer[hot]){
			$where.=" AND `hot`=".$paramer[hot]."";
		}
		if($paramer[rec]){
			$where.=" AND `rec`=".$paramer[rec]."";
		}
		if($paramer[nid]){
			$where.=" AND `nid`=".$paramer[nid]."";
		}
		if($paramer[tnid]){
			$where.=" AND `tnid`=".$paramer[tnid]."";
		}
		if($paramer[intinfo]){
			$bninfo=@explode('_',$paramer[intinfo]);
			if($bninfo[1]){
				$where.=" and `integral` between '".$bninfo[0]."' and '".$bninfo[1]."'";
			}else{
				$where.=" and `integral` <".$bninfo[0]."";
			}
			
		}
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"reward",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
		}
		//排序字段（默认按照开始时间排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY integral ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$rec=$db->select_all("reward",$where.$limit);
		if(is_array($rec)){
			foreach($rec as $key=>$value){
				if(!$value['pic'] || !file_exists(APP_PATH.$value['pic'])){
					$rec[$key]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$rec[$key]['pic']= $config['sy_weburl']."/".$value['pic'];
				}
				if($paramer[islt]==6){
					$rec[$key][url] = Url("wap",array("c"=>"redeem","a"=>"show","id"=>$value[id]));
				}else{
					$rec[$key][url] = Url("redeem",array("c"=>"show","id"=>$value[id]));
				}
			}
		}
		$rec = $rec; if (!is_array($rec) && !is_object($rec)) { settype($rec, 'array');}
foreach ($rec as $_smarty_tpl->tpl_vars['rec']->key => $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
?>
        <li>
            <div class="redeem_list_b">
                <div class="redeem_list_pic">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['rec']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['rec']->value['pic'];?>
" width="90" height="90" /></a>
                </div>
                <div class="redeem_list_name">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['rec']->value['url'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['rec']->value['name'],0,5,'utf-8');?>
</a>
                </div>
                <div class="redeem_list_money"><?php echo $_smarty_tpl->tpl_vars['rec']->value['integral'];?>
 <span class="redeem_list_money_n"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span></div>
            </div>
        </li>

        <?php } ?>
    </ul>

</div>

<div class="clear"></div>

<div class="wap_store_ps">
    <div class="wap_store_ps_c">

        <div class="wap_store_ps_rt">
            <div class="wap_store_ps_rt_wr sxl" style="height:35px;overflow:hidden;">
                <ul class="sxlist">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lipin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <li>
                        <div><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
 会员 花了 <b style="color:#093"><?php echo $_smarty_tpl->tpl_vars['v']->value['integral'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                        <div> 兑换了<i><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem','a'=>'show','id'=>'`$v.gid`'),$_smarty_tpl);?>
" style="color:#f60"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></i> </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="redeem_jx_box mt10">
    <div class="redeem_jx_h1 "><span class="redeem_new_s">最新礼品</span>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem','a'=>'list','order'=>'sdate','sort'=>'desc'),$_smarty_tpl);?>
" class="redeem_hot_more">更多礼品 ></a>
    </div>
    <ul class="redeem_list">

        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
$v=array();$time=time();eval('$paramer=array("item"=>"\'v\'","order"=>"\'sdate\'","sort"=>"\'desc\'","islt"=>"6","limit"=>"6","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`=1 ";
		if($paramer[hot]){
			$where.=" AND `hot`=".$paramer[hot]."";
		}
		if($paramer[rec]){
			$where.=" AND `rec`=".$paramer[rec]."";
		}
		if($paramer[nid]){
			$where.=" AND `nid`=".$paramer[nid]."";
		}
		if($paramer[tnid]){
			$where.=" AND `tnid`=".$paramer[tnid]."";
		}
		if($paramer[intinfo]){
			$bninfo=@explode('_',$paramer[intinfo]);
			if($bninfo[1]){
				$where.=" and `integral` between '".$bninfo[0]."' and '".$bninfo[1]."'";
			}else{
				$where.=" and `integral` <".$bninfo[0]."";
			}
			
		}
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"reward",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
		}
		//排序字段（默认按照开始时间排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY integral ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$v=$db->select_all("reward",$where.$limit);
		if(is_array($v)){
			foreach($v as $key=>$value){
				if(!$value['pic'] || !file_exists(APP_PATH.$value['pic'])){
					$v[$key]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$v[$key]['pic']= $config['sy_weburl']."/".$value['pic'];
				}
				if($paramer[islt]==6){
					$v[$key][url] = Url("wap",array("c"=>"redeem","a"=>"show","id"=>$value[id]));
				}else{
					$v[$key][url] = Url("redeem",array("c"=>"show","id"=>$value[id]));
				}
			}
		}
		$v = $v; if (!is_array($v) && !is_object($v)) { settype($v, 'array');}
foreach ($v as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li>
            <div class="redeem_list_b">
                <div class="redeem_list_pic">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="90" height="90" /></a>
                </div>
                <div class="redeem_list_name">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,7,'utf-8');?>
</a>
                </div>
                <div class="redeem_list_money"><?php echo $_smarty_tpl->tpl_vars['v']->value['integral'];?>
 <span class="redeem_list_money_n"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span></div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>

<style>
    .tips {
        display: none;
    }
</style>
<div class="wap_store">

    <div class="clear"></div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
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
/js/redeem.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/jquery.flexslider-min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
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
 type="text/javascript">
        $(function() {
            var myimgswiper = new Swiper('#imgswiper', {
                direction: 'horizontal',
                autoplay: true,
                loop: true
            });
        });
        marquee_l("2000", ".redeem_hotlist");
        marquee("2000", ".sxl .sxlist");
    <?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
