<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 18:24:50
         compiled from "/www/fpwjob/uploads/app/template/default/redeem/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:4817160595dc54272b89b79-56917808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ce489f4ce831a635c3186a4d3d04e408690c66e' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/redeem/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4817160595dc54272b89b79-56917808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'uid' => 0,
    'statis' => 0,
    'lunbo' => 0,
    'lipin' => 0,
    'v' => 0,
    'val' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc54272c1d8a5_28660981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc54272c1d8a5_28660981')) {function content_5dc54272c1d8a5_28660981($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/yun_job_fairs.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
</head>
<body class="Integral_body">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="yun_Integral">
 
<div class="integral_login">
<?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?>
<div class="integral_login_tx"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/zc-lawyer.jpg" width="70" height="70"></div>
<div class="integral_login_hi">欢迎访问<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
商城 !</div>

<div class="integral_login_box"><a href="<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
" class="integral_login_box_dl">登录</a> <a href="<?php echo smarty_function_url(array('m'=>'register'),$_smarty_tpl);?>
">注册</a></div>

<div class="integral_login_p">登录积分查询</div>
    <?php } else { ?>
    <div class="integral_login_hi"> 欢迎访问<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
商城 !</div> 
      <div class="integral_login_zjf"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</div>
    <div class="integral_login_zjf_p">您当前总<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

   </div>
    
     <div class="integral_loginbth_box"> 
   <div class="integral_loginbth"> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=integral">赚取<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</a></div>
   <div class="integral_loginbth"> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=integral_reduce">消费规则</a></div>
   <div class="integral_loginbth"> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=reward_list">兑换记录</a></div>
    </div>
        <?php }?>
        
</div>

  <div class="Projector">
  	<div class="Projector_img">
      <div id="slides" class="s_lb">
        <div class="slides_container"> 
	        <div class="layui-carousel" id="test1" lay-filter="test1">
			  <div carousel-item="">
			  	<?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[34];if(is_array($add_arr) && !empty($add_arr)){
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
			      <div><?php echo $_smarty_tpl->tpl_vars['lunbo']->value['html'];?>
</div>
			    <?php } ?>
			  </div>
			</div> 
          </div>
      </div>
    </div>
  </div>
  <div class="yun_Integral_top_right"> 
   <div class="yun_Integral_ta_h1">TA们正在换好礼…</div>
    <div class="yun_Integral_ta">
     
      <ul class="yun_Integral_ta_box fl">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lipin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li>
          <dl class="yun_Integral_ta_box_list  fl">
            <dt><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="50" height="50"></dt>
            <dd>
              <div class="yun_Integral_ta_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
 会员</div>
              <div class="yun_Integral_ta_dh">兑换了<a href="<?php echo smarty_function_url(array('m'=>'redeem','c'=>'show','id'=>'`$v.gid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
              <em>花了<?php echo $_smarty_tpl->tpl_vars['v']->value['integral'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</em> </dd>
          </dl>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  
 
  <!--推荐商品-->
  
  <div class="yun_Integral_box">
    <div class="yun_Integral_box_h1"><span class="yun_Integral_box_h1_name">推荐商品</span><a href="<?php echo smarty_function_url(array('m'=>'redeem','c'=>'list'),$_smarty_tpl);?>
" class="yun_Integral_box_h1_more">更多>></a></div>
    <div class="yun_Integral_cont">
      <div class="yun_Integral_cont_w"> 
	  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
$val=array();$time=time();eval('$paramer=array("item"=>"\'val\'","rec"=>"1","limit"=>"16","nocache"=>"")
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
        <div class="yun_Integral_cont_list"> <div class="yun_Integral_cont_list_a">
          <dl class="yun_Integral_list_dl">
            <dt> <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" width="260" height="210"></a></dt>
            <dd class="yun_Integral_list_dl_name"> <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a></dd>
            <dd class="yun_Integral_list_dl_n"><?php echo $_smarty_tpl->tpl_vars['val']->value['integral'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</dd>
          </dl>
          </div> </div>
        <?php } ?> </div>
    </div>
  </div>
  <!--热门兑换-->
  <div class="yun_Integral_box">
    <div class="yun_Integral_box_h1"><span class="yun_Integral_box_h1_name yun_Integral_box_h1_name_hot">热门兑换</span><a href="<?php echo smarty_function_url(array('m'=>'redeem','c'=>'list'),$_smarty_tpl);?>
" class="yun_Integral_box_h1_more">更多>></a></div>
    <div class="yun_Integral_cont">
      <div class="yun_Integral_cont_w"> 
	  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
$v=array();$time=time();eval('$paramer=array("item"=>"\'v\'","hot"=>"1","limit"=>"16","nocache"=>"")
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
        <div class="yun_Integral_cont_list">
         <div class="yun_Integral_cont_list_a">
          <dl class="yun_Integral_list_dl">
            <dt><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="260" height="210"></a></dt>
            <dd class="yun_Integral_list_dl_name"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 </a></dd>
            <dd class="yun_Integral_list_dl_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['integral'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</dd>
          </dl>
         
          </div> </div>
        <?php } ?> </div>
    </div>
  </div>
   <!--热门兑换-->
    <div class="yun_Integral_box">
    <div class="yun_Integral_box_h1"><span class="yun_Integral_box_h1_name yun_Integral_box_h1_name_hot">最新礼品</span><a href="<?php echo smarty_function_url(array('m'=>'redeem','c'=>'list'),$_smarty_tpl);?>
" class="yun_Integral_box_h1_more">更多>></a></div>
    <div class="yun_Integral_cont">
      <div class="yun_Integral_cont_w"> 
         <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
$new=array();$time=time();eval('$paramer=array("item"=>"\'new\'","limit"=>"16","nocache"=>"")
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
		$new=$db->select_all("reward",$where.$limit);
		if(is_array($new)){
			foreach($new as $key=>$value){
				if(!$value['pic'] || !file_exists(APP_PATH.$value['pic'])){
					$new[$key]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$new[$key]['pic']= $config['sy_weburl']."/".$value['pic'];
				}
				if($paramer[islt]==6){
					$new[$key][url] = Url("wap",array("c"=>"redeem","a"=>"show","id"=>$value[id]));
				}else{
					$new[$key][url] = Url("redeem",array("c"=>"show","id"=>$value[id]));
				}
			}
		}
		$new = $new; if (!is_array($new) && !is_object($new)) { settype($new, 'array');}
foreach ($new as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
        <div class="yun_Integral_cont_list">
         <div class="yun_Integral_cont_list_a">
          <dl class="yun_Integral_list_dl">
            <dt><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['new']->value['pic'];?>
" width="260" height="210"></a></dt>
            <dd class="yun_Integral_list_dl_name"><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['new']->value['name'];?>
 </a></dd>
            <dd class="yun_Integral_list_dl_n"><?php echo $_smarty_tpl->tpl_vars['new']->value['integral'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</dd>
          </dl>
         
          </div> </div>
        <?php } ?> </div>
    </div>
  </div>
   
   
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
/js/slides.jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
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
 language="javascript">
layui.use(['carousel'], function(){
  var carousel = layui.carousel;
  carousel.render({
    elem: '#test1'
    ,width: '650px'
    ,height: '280px'
  });
});
$(function(){
	$("#slides").slides({
		preload: true,
		preloadImage: '<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true
	});
	marquee("2000",".yun_Integral_ta ul");
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
