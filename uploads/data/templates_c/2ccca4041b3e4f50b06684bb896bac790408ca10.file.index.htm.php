<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:51:11
         compiled from "/www/fpwjob/uploads/app/template/default/zph/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:1222276135dc51e6f37d851-19886445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ccca4041b3e4f50b06684bb896bac790408ca10' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/zph/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1222276135dc51e6f37d851-19886445',
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
    'zphs' => 0,
    'usertype' => 0,
    'uid' => 0,
    'zph' => 0,
    'total' => 0,
    'pagenav' => 0,
    'zphback' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51e6f3e96b1_99982351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51e6f3e96b1_99982351')) {function content_5dc51e6f3e96b1_99982351($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
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
</head>
<body class="body_bg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="clear"></div>
    
   <?php  $_smarty_tpl->tpl_vars['zphs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zphs']->_loop = false;
$zphs=array();$time=time();eval('$paramer=array("item"=>"\'zphs\'","limit"=>"1","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "1";
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}
		//$time = date("Y-m-d",time());
        $time = time();
		//未开始
		if($paramer[state]=='1'){//尚未开始
			$where .=" AND unix_timestamp(`starttime`)>'$time'";
		}elseif($paramer[state]=='2'){//进行中
			$where .=" AND unix_timestamp(`starttime`)<'$time' AND unix_timestamp(`endtime`)>'$time'";
		}elseif($paramer[state]=='3'){//已结束
			$where .=" AND unix_timestamp(`endtime`)<'$time'";
		}else{//尚未结束
        	//$where .=" AND `endtime`>'$time'";
			$where .=" AND unix_timestamp(`endtime`)>'$time'";
		}
		
		
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"zhaopinhui",$where,$Purl,"",6,$_smarty_tpl);
		}
		//排序字段（默认按照开始时间排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY unix_timestamp(`starttime`) ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$zphs=$db->select_all("zhaopinhui",$where.$limit);
		if(is_array($zphs)){
			foreach($zphs as $key=>$v){
				$array_zid[]=$v[id];
			}
			$rows=$db->select_all("zhaopinhui_com","`zid` in (".implode(',',$array_zid).") and `status`=1","`uid`,`zid`,`jobid`");
			$zph_com=array();
			foreach($rows as $key=>$v){ 
				$jobarr=explode(',',$v[jobid]);
				$zph_com[$v[zid]][comnum]++;
				$zph_com[$v[zid]][jobnum]=$zph_com[$v[zid]][jobnum]+count($jobarr);
			}
			
			foreach($zphs as $key=>$v){
				$zphs[$key]["starttime_n"]=date('Y',strtotime($v[starttime])).'年'.date('n',strtotime($v[starttime]))."月";
				$zphs[$key]["stime"]=strtotime($v[starttime])-mktime();
				
				$comnum=$zph_com[$v[id]][comnum]?$zph_com[$v[id]][comnum]:0;
				$jobnum=$zph_com[$v[id]][jobnum]?$zph_com[$v[id]][jobnum]:0;
				
				$zphs[$key]["comnum"]=$comnum;
				$zphs[$key]["jobnum"]=$jobnum;
				
				$zphs[$key]["etime"]=strtotime($v[endtime])-mktime();
				if($paramer[len]){
					$zphs[$key]["title"]=mb_substr($v['title'],0,$paramer[len],"utf-8");
				}
				$zphs[$key]["url"]=Url("zph",array("c"=>'show',"id"=>$v['id']),"1");
				 $weekarray=array("日","一","二","三","四","五","六",);            
                $zphs[$key]["week"] = $weekarray[date('w',strtotime($v['starttime']))];	
				if(!$v['is_themb']||!file_exists(str_replace('./',APP_PATH,$v['is_themb']))){
					$zphs[$key]['is_themb'] = $config['sy_weburl']."/".$config['sy_zph_icon'];
				}else{
					$zphs[$key]['is_themb']= $config['sy_weburl']."/".$v['is_themb'];
				}
			}
		}$zphs = $zphs; if (!is_array($zphs) && !is_object($zphs)) { settype($zphs, 'array');}
foreach ($zphs as $_smarty_tpl->tpl_vars['zphs']->key => $_smarty_tpl->tpl_vars['zphs']->value) {
$_smarty_tpl->tpl_vars['zphs']->_loop = true;
?> 
   <div class="zph_bannner_box">
   <div class="zph_bannner">
   <div class="zph_bn_ct_new"><div class="zph_bn_ct_new_f"><i class="zph_bn_ct_new_f_c"></i>NEW</div>最新招聘会</div>
     <div class="zph_bn_ct">
     <div class="zph_bn_ct_kh">招  /  聘  /  更  /  简  /  单  / &nbsp;&nbsp; .&nbsp;&nbsp;  求  /  职  /  更  /  轻  /  松</div>
          <div class="zph_bn_tit"> <a class="" href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'show','id'=>$_smarty_tpl->tpl_vars['zphs']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zphs']->value['title'];?>
</a></div>
           <div class="zph_bn_g">已有 <a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'com','id'=>$_smarty_tpl->tpl_vars['zphs']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zphs']->value['jobnum'];?>
</a> 个职位，共有 <a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'com','id'=>$_smarty_tpl->tpl_vars['zphs']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zphs']->value['comnum'];?>
</a> 家企业参会</div>
          <div class="zph_bn_tm">举办时间：<?php echo $_smarty_tpl->tpl_vars['zphs']->value['starttime'];?>
 至 <?php echo $_smarty_tpl->tpl_vars['zphs']->value['endtime'];?>
</div>
            <div class="zph_bn_tm">举办地址：<?php echo $_smarty_tpl->tpl_vars['zphs']->value['address'];?>
</div>
             
          <div class="zph_bn_bt">
            <?php if ($_smarty_tpl->tpl_vars['zphs']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zphs']->value['etime']>'0') {?>
              	<span class="zph_bn_bt_z">停止预定</span>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['usertype']->value==2) {?>
                <a class="zph_bn_bt_y" href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'reserve','id'=>$_smarty_tpl->tpl_vars['zphs']->value['id']),$_smarty_tpl);?>
">在线预订</a>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                    <a href="javascript:void(0);" class="zph_bn_bt_y" onclick="layer.msg('只有企业用户才能预定', 2, 8)">在线预订</a>
                    <?php } else { ?>
                    <a href="javascript:void(0);" class="zph_bn_bt_y" onclick="showlogin('2');">在线预订</a>
                    <?php }?>
                <?php }?>
             <?php }?>
               <a class="zph_bn_bt_z" href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'show','id'=>$_smarty_tpl->tpl_vars['zphs']->value['id']),$_smarty_tpl);?>
">查看详情</a>
          </div>
          
     </div>  
     
     
     </div>
     
</div>
   <?php } ?> 
   <div class="yun_content">
   

  <div class="current_Location png "> 您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'zph'),$_smarty_tpl);?>
">招聘会 </a></div>
   <div class="zph_left">
   <div class="zph_left_tit" style="margin-top:0px;"><span class="zph_left_tit_s"><i class="zph_left_tit_line"></i>招聘会</span><!--<a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'review'),$_smarty_tpl);?>
" class="fr">往期回顾>></a>--></div>
   <div class="zph_left_box">
   
      <?php  $_smarty_tpl->tpl_vars['zph'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zph']->_loop = false;
$zph=array();$time=time();eval('$paramer=array("ispage"=>"1","item"=>"\'zph\'","limit"=>"10","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "1";
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}
		//$time = date("Y-m-d",time());
        $time = time();
		//未开始
		if($paramer[state]=='1'){//尚未开始
			$where .=" AND unix_timestamp(`starttime`)>'$time'";
		}elseif($paramer[state]=='2'){//进行中
			$where .=" AND unix_timestamp(`starttime`)<'$time' AND unix_timestamp(`endtime`)>'$time'";
		}elseif($paramer[state]=='3'){//已结束
			$where .=" AND unix_timestamp(`endtime`)<'$time'";
		}else{//尚未结束
        	//$where .=" AND `endtime`>'$time'";
			$where .=" AND unix_timestamp(`endtime`)>'$time'";
		}
		
		
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"zhaopinhui",$where,$Purl,"",6,$_smarty_tpl);
		}
		//排序字段（默认按照开始时间排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY unix_timestamp(`starttime`) ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$zph=$db->select_all("zhaopinhui",$where.$limit);
		if(is_array($zph)){
			foreach($zph as $key=>$v){
				$array_zid[]=$v[id];
			}
			$rows=$db->select_all("zhaopinhui_com","`zid` in (".implode(',',$array_zid).") and `status`=1","`uid`,`zid`,`jobid`");
			$zph_com=array();
			foreach($rows as $key=>$v){ 
				$jobarr=explode(',',$v[jobid]);
				$zph_com[$v[zid]][comnum]++;
				$zph_com[$v[zid]][jobnum]=$zph_com[$v[zid]][jobnum]+count($jobarr);
			}
			
			foreach($zph as $key=>$v){
				$zph[$key]["starttime_n"]=date('Y',strtotime($v[starttime])).'年'.date('n',strtotime($v[starttime]))."月";
				$zph[$key]["stime"]=strtotime($v[starttime])-mktime();
				
				$comnum=$zph_com[$v[id]][comnum]?$zph_com[$v[id]][comnum]:0;
				$jobnum=$zph_com[$v[id]][jobnum]?$zph_com[$v[id]][jobnum]:0;
				
				$zph[$key]["comnum"]=$comnum;
				$zph[$key]["jobnum"]=$jobnum;
				
				$zph[$key]["etime"]=strtotime($v[endtime])-mktime();
				if($paramer[len]){
					$zph[$key]["title"]=mb_substr($v['title'],0,$paramer[len],"utf-8");
				}
				$zph[$key]["url"]=Url("zph",array("c"=>'show',"id"=>$v['id']),"1");
				 $weekarray=array("日","一","二","三","四","五","六",);            
                $zph[$key]["week"] = $weekarray[date('w',strtotime($v['starttime']))];	
				if(!$v['is_themb']||!file_exists(str_replace('./',APP_PATH,$v['is_themb']))){
					$zph[$key]['is_themb'] = $config['sy_weburl']."/".$config['sy_zph_icon'];
				}else{
					$zph[$key]['is_themb']= $config['sy_weburl']."/".$v['is_themb'];
				}
			}
		}$zph = $zph; if (!is_array($zph) && !is_object($zph)) { settype($zph, 'array');}
foreach ($zph as $_smarty_tpl->tpl_vars['zph']->key => $_smarty_tpl->tpl_vars['zph']->value) {
$_smarty_tpl->tpl_vars['zph']->_loop = true;
?>
      <div class="zph_left_list">
   <div class="zph_left_list_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['zph']->value['is_themb'];?>
" width="200" height="120"></div>
   <div class="zph_left_box_r">
   <h2 class="zph_left_box_name"><a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'show','id'=>'`$zph.id`'),$_smarty_tpl);?>
" class="title<?php echo $_smarty_tpl->tpl_vars['zph']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['zph']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zph']->value['etime']<'0') {?>yun_text_color_stop<?php } else { ?>yun_text_color<?php }?>"><?php echo $_smarty_tpl->tpl_vars['zph']->value['title'];?>
</a>
	        <?php if ($_smarty_tpl->tpl_vars['zph']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zph']->value['etime']<'0') {?>
	        	<span class="yun_text_color_stop">【已结束】</span>
	        <?php }?>
      </h2>
  
   <?php if ($_smarty_tpl->tpl_vars['zph']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zph']->value['etime']>'0') {?>
         <div class="zph_left_box_sj">	共有<span class="zph_left_box_sj_n"><?php echo $_smarty_tpl->tpl_vars['zph']->value['comnum'];?>
</span>家企业参会，共有<span class="zph_left_box_sj_n"><?php echo $_smarty_tpl->tpl_vars['zph']->value['jobnum'];?>
</span>个职位</div>	
        <?php } else { ?>
        	 <div class="zph_left_box_sj">已有<span class="zph_left_box_sj_n"><?php echo $_smarty_tpl->tpl_vars['zph']->value['comnum'];?>
</span>家企业参会，已有有<span class="zph_left_box_sj_n"><?php echo $_smarty_tpl->tpl_vars['zph']->value['jobnum'];?>
</span>个职位，火速报名中……</div>
        <?php }?> 
        
   <div class="zph_left_box_icon zph_left_box_time">举办时间：<?php echo $_smarty_tpl->tpl_vars['zph']->value['starttime'];?>
至<?php echo $_smarty_tpl->tpl_vars['zph']->value['endtime'];?>
 </div>
   <div class="zph_left_box_icon zph_left_box_add">举办地点：<?php echo $_smarty_tpl->tpl_vars['zph']->value['address'];?>
  </div>
   <div class="zph_left_box_cz">
   <?php if ($_smarty_tpl->tpl_vars['zph']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zph']->value['etime']>'0') {?>
              	<span class="car_ord_orded">停止预定</span>
              <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['usertype']->value==2) {?>
                <a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'reserve','id'=>'`$zph.id`'),$_smarty_tpl);?>
" class="">在线预定</a>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                    <a href="javascript:void(0);" class="" onclick="layer.msg('只有企业用户才能预定', 2, 8)">在线预订</a>
                    <?php } else { ?>
                    <a href="javascript:void(0);" class="" onclick="showlogin('2');">在线预订</a>
                    <?php }?>
                <?php }?>
              <?php }?>
              <a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'com','id'=>$_smarty_tpl->tpl_vars['zph']->value['id']),$_smarty_tpl);?>
" class="zph_left_box_cz_com">参会企业</a>
     </div>
      </div>
    


    
    <?php if ($_smarty_tpl->tpl_vars['zph']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zph']->value['etime']<'0') {?>
    <div class="car_state car_stateed"></div> 
    <?php } elseif ($_smarty_tpl->tpl_vars['zph']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zph']->value['etime']>'0') {?>
    	<div class="car_state car_stateed"></div>
    <?php } else { ?>
    	<div class="car_state"></div>
    <?php }?> 
    </div>
  <?php } ?>

<?php if (!$_smarty_tpl->tpl_vars['total']->value) {?> 
<div class="no_tip">很抱歉，还没有布招聘会的相关信息</div>
<?php } else { ?>


<div class="clear"></div>
<div class="search_pages">
  <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
</div>
<?php }?>
</div>
    
    
   </div>
   
      
 
    <div class="zph_right"> 
    <div class="zph_right_box"  style="margin-top:0px;">
    <div class="zph_right_tit"><span class="">精彩回顾</span></div> 
	<?php  $_smarty_tpl->tpl_vars['zphback'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zphback']->_loop = false;
$zphback=array();$time=time();eval('$paramer=array("item"=>"\'zphback\'","limit"=>"1","state"=>"3","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "1";
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}
		//$time = date("Y-m-d",time());
        $time = time();
		//未开始
		if($paramer[state]=='1'){//尚未开始
			$where .=" AND unix_timestamp(`starttime`)>'$time'";
		}elseif($paramer[state]=='2'){//进行中
			$where .=" AND unix_timestamp(`starttime`)<'$time' AND unix_timestamp(`endtime`)>'$time'";
		}elseif($paramer[state]=='3'){//已结束
			$where .=" AND unix_timestamp(`endtime`)<'$time'";
		}else{//尚未结束
        	//$where .=" AND `endtime`>'$time'";
			$where .=" AND unix_timestamp(`endtime`)>'$time'";
		}
		
		
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"zhaopinhui",$where,$Purl,"",6,$_smarty_tpl);
		}
		//排序字段（默认按照开始时间排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY unix_timestamp(`starttime`) ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$zphback=$db->select_all("zhaopinhui",$where.$limit);
		if(is_array($zphback)){
			foreach($zphback as $key=>$v){
				$array_zid[]=$v[id];
			}
			$rows=$db->select_all("zhaopinhui_com","`zid` in (".implode(',',$array_zid).") and `status`=1","`uid`,`zid`,`jobid`");
			$zph_com=array();
			foreach($rows as $key=>$v){ 
				$jobarr=explode(',',$v[jobid]);
				$zph_com[$v[zid]][comnum]++;
				$zph_com[$v[zid]][jobnum]=$zph_com[$v[zid]][jobnum]+count($jobarr);
			}
			
			foreach($zphback as $key=>$v){
				$zphback[$key]["starttime_n"]=date('Y',strtotime($v[starttime])).'年'.date('n',strtotime($v[starttime]))."月";
				$zphback[$key]["stime"]=strtotime($v[starttime])-mktime();
				
				$comnum=$zph_com[$v[id]][comnum]?$zph_com[$v[id]][comnum]:0;
				$jobnum=$zph_com[$v[id]][jobnum]?$zph_com[$v[id]][jobnum]:0;
				
				$zphback[$key]["comnum"]=$comnum;
				$zphback[$key]["jobnum"]=$jobnum;
				
				$zphback[$key]["etime"]=strtotime($v[endtime])-mktime();
				if($paramer[len]){
					$zphback[$key]["title"]=mb_substr($v['title'],0,$paramer[len],"utf-8");
				}
				$zphback[$key]["url"]=Url("zph",array("c"=>'show',"id"=>$v['id']),"1");
				 $weekarray=array("日","一","二","三","四","五","六",);            
                $zphback[$key]["week"] = $weekarray[date('w',strtotime($v['starttime']))];	
				if(!$v['is_themb']||!file_exists(str_replace('./',APP_PATH,$v['is_themb']))){
					$zphback[$key]['is_themb'] = $config['sy_weburl']."/".$config['sy_zph_icon'];
				}else{
					$zphback[$key]['is_themb']= $config['sy_weburl']."/".$v['is_themb'];
				}
			}
		}$zphback = $zphback; if (!is_array($zphback) && !is_object($zphback)) { settype($zphback, 'array');}
foreach ($zphback as $_smarty_tpl->tpl_vars['zphback']->key => $_smarty_tpl->tpl_vars['zphback']->value) {
$_smarty_tpl->tpl_vars['zphback']->_loop = true;
?>	
	<?php if ($_smarty_tpl->tpl_vars['zphback']->value['etime']<'0') {?>
    <div class="zph_right_hg_box">
    <div class=""><img src="<?php echo $_smarty_tpl->tpl_vars['zphback']->value['is_themb'];?>
" width="240" height="160"></div>
    <div class="zph_right_hg_p"><a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'show','id'=>'`$zphback.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zphback']->value['title'];?>
</a></div>
    </div>
	<?php }?>
	<?php } ?>
    <div class="zph_right_hg_more"><a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'review'),$_smarty_tpl);?>
">更多往期回顾>></a></div>
    
     </div> 
      <div class="zph_right_box">
      <div class="zph_right_wx_box">
      <div class="zph_right_wx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
"  width="130" height="130"></div>
       <div class="zph_right_wx">关注微信公众号</div>

    <div class="zph_right_wx">随时随地查看招聘会信息  </div>
     </div>  </div>
     </div>
     
     
     
  </div>
</div>
<div id="TB_window" class="Corporate_box none">
  <div id="error_zph" class="error_zph"></div>
  <div id="TB_ajaxContent" class="Corporate_box_cont" style="padding:10px;">
    <input name="pid" value="0" type="hidden"/>
    <input name="uid" value="0" type="hidden"/>
    <div class="zph_tck_box_close">参与的招聘会名称：</div>
    <div class="zph_tck_box_bg" style="padding:5px;margin-top:5px;"><span id="zph_name">正在获取...</span> </div>
    <div class="zph_tck_box_close_post">
      <div class="zph_tck_box_close">选择参与招聘会的职位：</div>
      <div id="joblist" class="zph_tck_post" style="padding-bottom:10px;"></div>
    </div>
    <div class="Corporate_box_sub" style="margin-top: 10px; padding-left: 150px;">
      <input type='button' value="提交" onclick="clickzph()" class="Corporate_box_tj"/>
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
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
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
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.car_time,.car_the_time,.car_the_add,.car_the_per,.car_state');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
