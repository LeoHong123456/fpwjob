<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-23 21:10:24
         compiled from "/www/fpwjob/uploads/app/template/school/school_academy_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:5062903555e5279c0ea5ec0-15930928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd857eb292b6e9eb5122fa85f073b90a84add26' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/school/school_academy_show.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5062903555e5279c0ea5ec0-15930928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'row' => 0,
    'uid' => 0,
    'usertype' => 0,
    'rows' => 0,
    'schoolclass_name' => 0,
    'slist' => 0,
    'academy' => 0,
    'key' => 0,
    'v' => 0,
    'school_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5279c0f3da01_05857647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5279c0f3da01_05857647')) {function content_5e5279c0f3da01_05857647($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
</head>
<body class="body_bg">
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['schoolstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
 <div class="school_show_header">
  <div class="school_w1200">
  <div class="school_show_logo">
 <div class=""><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
"width="120" height="120"></div>
  <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
                <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                     <a href="javascript:void(0);" onclick="layer_del('您确定要取消关注？', '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_url(array('m'=>'school','c'=>'del_school_academy','id'=>$_tmp1),$_smarty_tpl);?>
');"  class="school_show_atn">取消关注</a> 
                <?php } else { ?>
                     <a href="javascript:;" onclick="atn_academy('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')" class="school_show_atn">关注</a>
                <?php }?>
            <?php } else { ?>
                <a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能关注', 2, 8)" class="school_show_atn">关注</a> 
            <?php }?>
   <?php } else { ?>
            <a href="javascript:void(0);" class="school_show_atn" onclick="showlogin('1');" >关注</a> 
  <?php }?>

 </div>
 <div class="school_show_info">
<div class="school_show_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['schoolname'];?>
<span class="school_show_name_n"><?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['schooltag']];?>
</span></div>
<div class="school_show_p">学科类别：<?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['school_categty']];?>
</div>
<div class="school_show_p">就业信息网：<?php echo $_smarty_tpl->tpl_vars['row']->value['schoolinternet'];?>
</div>
<div class="school_show_p">主管部门：<?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['school_department']];?>
</div>
<div class="school_show_p">学校地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</div>
<div class="school_show_p">联系电话：<?php echo $_smarty_tpl->tpl_vars['row']->value['school_phone'];?>
</div>
</div>
</div>
</div>
  <div class="school_w1200">
<div class="school_show_left">
<div class="school_show_tit"><span class="school_show_tit_s">本校宣讲会</span></div>
<ul class="school_show_list">
<?php  $_smarty_tpl->tpl_vars['slist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("sid"=>"$_smarty_tpl->tpl_vars[\'row\']->value[\'id\']","item"=>"\'slist\'","limit"=>"10","ispage"=>"1","nocache"=>"")
;');$slist=array();
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
		$slist=$db->select_all("school_xjh",$where.$limit);
		if(is_array($slist)){
			$cache_array = $db->cacheget();
			foreach($slist as $v){
                $xjhid[]=$v['id'];
				$comuid[]=$v['uid'];
				$suid[]=$v['schoolid'];
    		}
            $atnlist=$db->select_all("atn","`xjhid` IN (".@implode(',',$xjhid).") and `uid`='".$_COOKIE['uid']."'");
			$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`logo`");
			$academy=$db->select_all("school_academy","`id` IN (".@implode(',',$suid).")","`id`,`schoolname`");
			$week=array("周日","周一","周二","周三","周四","周五","周六");
			foreach($slist as $k=>$v){
				$slist[$k]["city_two"] = $cache_array['city_name'][$v["cityid"]];
				$slist[$k]["xjh_url"] = Url("school",array("c"=>"xjhshow","id"=>$v['id']));
				$slist[$k]["com_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
				$slist[$k]["sch_url"] = Url("school",array("c"=>"academyshow","id"=>$v['schoolid']));
				$slist[$k]["ctime"] = date("Y-m-d",$v["ctime"]);
				$slist[$k]["xjh_date"] = date("Y-m-d",$v["stime"]);
				$slist[$k]["xjh_shour"] = date("H:i",$v["stime"]);
				$slist[$k]["xjh_ehour"] = date("H:i",$v["etime"]);
				$slist[$k]["xjh_week"] = $week[date("w",$v["stime"])];
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
						if($paramer[comlen]){
							$slist[$k]["com_name"]=mb_substr($val['name'],0,$paramer[comlen],"utf-8");
						}else{
							$slist[$k]["com_name"]=$val['name'];
						}
						if(!$val['logo'] || !file_exists(str_replace("./",APP_PATH,$val['logo']))){
							$slist[$k]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$slist[$k]['pic'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
						}
    				}
				}
				foreach($academy as $val){
					if($v['schoolid']==$val['id']&&$val['schoolname']){
    					$slist[$k]["sch_name"]=$val['schoolname'];
    				}
				}
                foreach($atnlist as $val){
					if($v['id']==$val['xjhid']){
    					$slist[$k]["xjhid_n"]=$val['xjhid'];
    				}
				}
			}
		}$slist = $slist; if (!is_array($slist) && !is_object($slist)) { settype($slist, 'array');}
foreach ($slist as $_smarty_tpl->tpl_vars['slist']->key => $_smarty_tpl->tpl_vars['slist']->value) {
$_smarty_tpl->tpl_vars['slist']->_loop = true;
?>
<li>
<div class="school_show_list_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slist']->value['stime'],'%Y-%m-%d');?>
 <?php echo $_smarty_tpl->tpl_vars['slist']->value['xjh_week'];?>
 </div>
<div class="school_show_listcomname"><a href="<?php echo $_smarty_tpl->tpl_vars['slist']->value['com_url'];?>
" class="school_show_listcomname_a"><?php echo $_smarty_tpl->tpl_vars['slist']->value['com_name'];?>
</a></div>
<div class="school_show_list_add">宣讲地点：<i class="school_show_listmap"></i><?php echo $_smarty_tpl->tpl_vars['slist']->value['address'];?>
</div>
<div class="school_show_list_zt">
<?php if ($_smarty_tpl->tpl_vars['slist']->value['stime']<time()&&$_smarty_tpl->tpl_vars['slist']->value['etime']>time()) {?>
<font color="#009933">举办中</font>
<?php } elseif ($_smarty_tpl->tpl_vars['slist']->value['etime']<time()) {?>
已举办
<?php } elseif ($_smarty_tpl->tpl_vars['slist']->value['stime']>time()) {?>
<?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?>
<a href="javascript:;" onclick="showlogin()" class="school_show_listgz">关注</a>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['slist']->value['xjhid_n']) {?>
        <a href="javascript:;"  class="school_show_listgz">已关注</a>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
         <a href="javascript:;" onclick="atnxjh('<?php echo $_smarty_tpl->tpl_vars['slist']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['slist']->value['uid'];?>
')" class="school_show_listgz">关注</a>
        <?php } else { ?>
            <a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能关注', 2, 8)" class="school_show_listgz">关注</a> 
        <?php }?>
   <?php }?>

<?php }?>
<?php }?>
</div>
</li>
<?php }
if (!$_smarty_tpl->tpl_vars['slist']->_loop) {
?>
</ul>
<div class="school_show_nomsg">暂无宣讲会信息</div>
<?php } ?>
</div>
<div class="school_show_right">
<div class="school_show_right_tip">
<div class="school_show_right_tip_t">温馨提示</div>
<div class="school_show_right_tip_h">同学们！</div>
<div class="school_show_right_tip_p">少数宣讲会场次可能临时改变时间、地点、甚至取消。宣讲会开始前，可与相关企业和承办学校联系确认哦~
</div>
</div>
<div class="school_show_right_may_box">
<div class="school_show_right_may">猜你感兴趣的高校</div>
<ul class="school_show_right_may_list">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['academy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['key']->value<9) {?>
<li><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_url(array('m'=>'school','c'=>'academyshow','id'=>$_tmp2),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
"width="25" height="25"><?php echo $_smarty_tpl->tpl_vars['v']->value['schoolname'];?>
 宣讲会 (<font color="#CC0000"><?php if ($_smarty_tpl->tpl_vars['v']->value['atnnum']) {
echo $_smarty_tpl->tpl_vars['v']->value['atnnum'];
} else { ?>0<?php }?></font>)</a></li>
<?php }?>
<?php } ?>
</ul>
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
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
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
 src="<?php echo $_smarty_tpl->tpl_vars['school_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function atn_academy(id){
        $.post(weburl+'/school/index.php?c=add_school_academy',{id:id},function(data){
		var data=eval('('+data+')');
            if(data.status==9){
                layer.msg(data.msg,2,9,function(){window.location.reload();});return false;
            }else{
                layer.msg(data.msg,2,8);return false;
            }
        });
    }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
</body><?php }} ?>
