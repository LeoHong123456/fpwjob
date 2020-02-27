<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-20 10:59:02
         compiled from "/www/fpwjob/uploads/app/template/wap/school_academy_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:3430382915e4df5f68e4023-39353357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d092f73fa89da375d3a63ea7a80b613d414cffb' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/school_academy_show.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3430382915e4df5f68e4023-39353357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'rows' => 0,
    'config' => 0,
    'schoolclass_name' => 0,
    'xjhlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4df5f68fb280_01404625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4df5f68fb280_01404625')) {function content_5e4df5f68fb280_01404625($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_school.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wap_school_yx_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['schoolname'];?>

        <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
         <a href="javascript:void(0);" onclick="academy('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')" class="school_show_qxatn">取消关注</a> 
        <?php } else { ?>
         <a href="javascript:;" onclick="academy('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')" class="school_show_atn">关注</a>
        <?php }?>
</div>

<div class="wap_school_yx_show_info">
<div class="wap_school_yx_show_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
" width="50" height="50"></div>

<div class="">学科类别：<?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['school_categty']];?>
 </div>
<div class="">就业信息网：<?php echo $_smarty_tpl->tpl_vars['row']->value['schoolinternet'];?>
 </div>
<div class="">主管部门：<?php echo $_smarty_tpl->tpl_vars['schoolclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['school_department']];?>
 </div>
<div class="">学校地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</div>
<div class="">联系电话：<?php echo $_smarty_tpl->tpl_vars['row']->value['school_phone'];?>
</div>
</div>
<div class="wap_school_yx_tit">本校宣讲会</div>
<?php  $_smarty_tpl->tpl_vars['xjhlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xjhlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'xjhlist\'","sid"=>"$_smarty_tpl->tpl_vars[\'row\']->value[\'id\']","limit"=>"5","islt"=>"4","nocache"=>"")
;');$xjhlist=array();
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
		$xjhlist=$db->select_all("school_xjh",$where.$limit);
		if(is_array($xjhlist)){
			$cache_array = $db->cacheget();
			foreach($xjhlist as $v){
                $xjhid[]=$v['id'];
				$comuid[]=$v['uid'];
				$suid[]=$v['schoolid'];
    		}
            $atnlist=$db->select_all("atn","`xjhid` IN (".@implode(',',$xjhid).") and `uid`='".$_COOKIE['uid']."'");
			$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`logo`");
			$academy=$db->select_all("school_academy","`id` IN (".@implode(',',$suid).")","`id`,`schoolname`");
			$week=array("周日","周一","周二","周三","周四","周五","周六");
			foreach($xjhlist as $k=>$v){
				$xjhlist[$k]["city_two"] = $cache_array['city_name'][$v["cityid"]];
				$xjhlist[$k]["xjh_url"] = Url("school",array("c"=>"xjhshow","id"=>$v['id']));
				$xjhlist[$k]["com_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
				$xjhlist[$k]["sch_url"] = Url("school",array("c"=>"academyshow","id"=>$v['schoolid']));
				$xjhlist[$k]["ctime"] = date("Y-m-d",$v["ctime"]);
				$xjhlist[$k]["xjh_date"] = date("Y-m-d",$v["stime"]);
				$xjhlist[$k]["xjh_shour"] = date("H:i",$v["stime"]);
				$xjhlist[$k]["xjh_ehour"] = date("H:i",$v["etime"]);
				$xjhlist[$k]["xjh_week"] = $week[date("w",$v["stime"])];
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
						if($paramer[comlen]){
							$xjhlist[$k]["com_name"]=mb_substr($val['name'],0,$paramer[comlen],"utf-8");
						}else{
							$xjhlist[$k]["com_name"]=$val['name'];
						}
						if(!$val['logo'] || !file_exists(str_replace("./",APP_PATH,$val['logo']))){
							$xjhlist[$k]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$xjhlist[$k]['pic'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
						}
    				}
				}
				foreach($academy as $val){
					if($v['schoolid']==$val['id']&&$val['schoolname']){
    					$xjhlist[$k]["sch_name"]=$val['schoolname'];
    				}
				}
                foreach($atnlist as $val){
					if($v['id']==$val['xjhid']){
    					$xjhlist[$k]["xjhid_n"]=$val['xjhid'];
    				}
				}
			}
		}$xjhlist = $xjhlist; if (!is_array($xjhlist) && !is_object($xjhlist)) { settype($xjhlist, 'array');}
foreach ($xjhlist as $_smarty_tpl->tpl_vars['xjhlist']->key => $_smarty_tpl->tpl_vars['xjhlist']->value) {
$_smarty_tpl->tpl_vars['xjhlist']->_loop = true;
?>
<div class="wap_school_joblist">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['xjhlist']->value['uid']),$_smarty_tpl);?>
">
<div class="wap_school_jobname"><?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['com_name'];?>
</div>
<div class="wap_school_xjhtime"><i class="wap_school_xjhtime_icon"></i><?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['xjh_date'];?>
 <?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['xjh_shour'];?>
</div>
<div class="wap_school_xjh_add"><i class="wap_school_xjhadd_icon"></i><?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['address'];?>
</div>
</a>
</div>
<?php } ?>

<div class="wap_school_yx_tip">
<div class="wap_school_yx_tip_name">温馨提示</div>
<div class="">同学们：</div>
<div class="">少数宣讲会场次可能临时改变时间、地点、甚至取消。宣讲会开始前，可与相关企业和承办学校联系确认哦~
</div>
</div>

<?php echo '<script'; ?>
>var wapurl="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function academy(id){
        if(id){
            $.post(wapurl+'index.php?c=ajax&a=atn_academy',{id:id},function(data){
                if(data==1){
                layermsg('请先登录！只有个人才能关注院校！',2);
                }else if(data==2){
                 layermsg('当前不是个人用户！',2);
                }else if(data==3){
                    layermsg('取消关注成功！',2,function(){location.reload(true);});
                }else if(data==4){
                    layermsg('关注成功！',2,function(){location.reload(true);});
                }
                
            });
        }
    }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
