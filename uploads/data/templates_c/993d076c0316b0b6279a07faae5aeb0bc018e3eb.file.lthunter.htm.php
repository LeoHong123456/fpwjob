<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-20 09:59:32
         compiled from "/www/fpwjob/uploads/app/template/wap/lthunter.htm" */ ?>
<?php /*%%SmartyHeaderCode:17855839275e4de804861b65-25764452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993d076c0316b0b6279a07faae5aeb0bc018e3eb' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/lthunter.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17855839275e4de804861b65-25764452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'info' => 0,
    'vip_pic' => 0,
    'usertype' => 0,
    'atn' => 0,
    'uid' => 0,
    'typename' => 0,
    'username' => 0,
    'user' => 0,
    't_count' => 0,
    'list' => 0,
    'v' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4de8048e72a4_29533789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4de8048e72a4_29533789')) {function content_5e4de8048e72a4_29533789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_lt.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/itwap.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div class="lt_hunter_info_box">
    <div class="lt_hunter_info">
        <div class="lt_hunter_info_c">
            <div class="lt_hunter_info_photo"><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['photo_big'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);" /></div>
            <div class="lt_hunter_info_name"><?php echo $_smarty_tpl->tpl_vars['info']->value['realname'];?>
 <?php if ($_smarty_tpl->tpl_vars['vip_pic']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['vip_pic']->value;?>
" width="14"><?php }?>

            </div>
            <div class="lt_hunter_info_hy"><?php echo $_smarty_tpl->tpl_vars['info']->value['hy_info'];?>
</div>
            
            <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
            	<a href="javascript:void(0);" onclick="ltatn('<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
');" id="guanzhu<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
" class="lt_hunter_info_gz"><?php if (is_array($_smarty_tpl->tpl_vars['atn']->value)) {?>取消关注<?php } else { ?>+关注<?php }?></a>
            <?php } else { ?> 
            
           	 	<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
            		<a href="javascript:void(0)" onclick="notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','');" class="lt_hunter_info_gz">+关注</a>
            	<?php } else { ?>
            		<a href="javascript:void(0)" onclick="pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" class="lt_hunter_info_gz">+关注</a>
            	<?php }?> 
            <?php }?>
        </div>
        <div class="lt_hunter_info_n_b">
            <div class="lt_hunter_info_sj"><span class="lt_hunter_info_n" id="atn<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['ant_num'];?>
</span> 关注</div>
            <div class="lt_hunter_info_sj"><span class="lt_hunter_info_n"><?php echo $_smarty_tpl->tpl_vars['info']->value['exp_info'];?>
</span> 从业经验</div>
            <div class="lt_hunter_info_sj lt_hunter_info_sj_end"><span class="lt_hunter_info_n"><?php if ($_smarty_tpl->tpl_vars['user']->value['login_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['login_date'],"%Y-%m-%d ");
} else { ?>未登录<?php }?></span> 上次登录</div>
        </div>
    </div>
    <div class=""> <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
        <a href="javascript:void(0);" onclick="entrust('<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['info']->value['realname'];?>
');" class="lt_hunter_info_wt"> 委托简历</a>
        <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
        <a href="javascript:void(0)" onclick="notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','');" class="lt_hunter_info_wt">委托简历</a>
        <?php } else { ?>
        <a href="javascript:void(0)" onclick="pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" class="lt_hunter_info_wt">委托简历</a>
        <?php }?> <?php }?>
    </div>
</div>

<div class="lt_hunter_info_box">
    <div class="lt_hunter_info">
        <div class="lt_hunter_tit">基本信息</div>
        <div class="lt_hunter_info_p">
            <?php if ($_smarty_tpl->tpl_vars['info']->value['rzid']) {?>
            <div>认证ID号：<?php echo $_smarty_tpl->tpl_vars['info']->value['rzid'];?>
 </div><?php }?>

            <div>上次登录：<?php if ($_smarty_tpl->tpl_vars['user']->value['login_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['login_date'],"%Y-%m-%d %H:%M:%S");
} else { ?>尚未登录 <?php }?> </div>
            <div>擅长行业：<?php echo $_smarty_tpl->tpl_vars['info']->value['hy_info'];?>
</div>
            <div>擅长职位：<?php echo $_smarty_tpl->tpl_vars['info']->value['job_info'];?>
</div>
        </div>
    </div>

</div>
<div class="lt_hunter_info_box">
    <div class="lt_hunter_info">
        <div class="lt_hunter_tit">顾问介绍</div>
        <div class="lt_hunter_info_p">
            <?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

        </div>
    </div>
</div>
<div class="lt_hunter_info_box">
    <div class="lt_hunter_info">
        <div class="lt_hunter_tit">正在运作的职位</div>
        <div class="">
            <?php if ($_smarty_tpl->tpl_vars['t_count']->value>0) {?> <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("uid"=>"\'auto.uid\'","item"=>"\'list\'","nocache"=>"")
;');$list=array();
        include_once  PLUS_PATH."/ltjob.cache.php";
		include_once  PLUS_PATH."/lthy.cache.php";
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
        $cache_array = $db->cacheget();
        $industry_name	= $cache_array["industry_name"];
		$where = " `status`='1' and `zp_status`='0' and `r_status`<>'2'";
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
			$where.=" AND (`com_name` like '%".$paramer["keyword"]."%' or `job_name` like '%".$paramer["keyword"]."%')";
		}
		/*//期望行业大类
		if($paramer["hyclass"]){
			$hyid=$lthy_type[$paramer["hyclass"]];
			foreach($hyid as $v)
			{
				$hyarr[]= "FIND_IN_SET('".$v."',qw_hy)";
			}
			$hyarr=@implode(" or ",$hyarr);
			$where.=" AND ($hyarr)";
		}
		//期望行业子类
		if($paramer["qw_hy"]){
			$where.= " AND FIND_IN_SET('".$paramer["qw_hy"]."',qw_hy)";
		}
		//期望行业
		if($paramer["hyid"]){
			$hyid=@explode(",",$paramer["hyid"]);
			foreach($hyid as $v){
				$hyall[].= "FIND_IN_SET('".$v."',qw_hy)";
			}
			$where .= " and (".@implode(" or ",$hyall).")";
		}*/

		//擅长职位
		if($paramer["jobid"]){
			$jobid=@explode(",",$paramer["jobid"]);
			foreach($jobid as $v){
				$joball[].= "`jobone`='".$v."'";
				$joball[].= "`jobtwo`='".$v."'";
			}
			$where .= " and (".@implode(" or ",$joball).")";
		}
		 
		if($paramer["citys"]){
			$citys=@explode(",",$paramer["citys"]);
			foreach($citys as $v){
				$cityall[].= "`provinceid`='".$v."'";
				$cityall[].= "`cityid`='".$v."'";
				$cityall[].= "`three_cityid`='".$v."'";
			}
			$where .= " and (".@implode(" or ",$cityall).")";
		}
		//职位大类
		if($paramer["jobone"]){
			$where.=" AND `jobone`='".$paramer["jobone"]."'";
		}
		//职位子类
		if($paramer["jobtwo"]){
			$where.=" AND `jobtwo`='".$paramer["jobtwo"]."'";
		}
		//年薪
		if($paramer["salary"]){
			$where.=" AND `salary`='".$paramer["salary"]."'";
		}
		if($paramer[minsalary]&&$paramer[maxsalary]){
			$where.= "AND `minsalary`>=".intval($paramer[minsalary])." and `maxsalary`<=".intval($paramer[maxsalary])."";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND `minsalary`>=".intval($paramer[minsalary])."";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])."";
		}
        //公司所属行业
		if($paramer["hy"]){
			$where.=" AND `hy`='".$paramer["hy"]."'";
		}
        //公司性质
		if($paramer["pr"]){
			$where.=" AND `pr`='".$paramer["pr"]."'";
		}
        //公司规模
		if($paramer["mun"]){
			$where.=" AND `mun`='".$paramer["mun"]."'";
		}
        //工作经验
		if($paramer["exp"]){
			$where.=" AND `exp`='".$paramer["exp"]."'";
		}
        //学历要求
		if($paramer["edu"]){
			$where.=" AND `edu`='".$paramer["edu"]."'";
		}
		//发布时间
		if($paramer["uptime"]){
			if($paramer["uptime"]>0){
				$time=time()-86400*30*$paramer["uptime"];
				$where.=" AND `lastupdate`>$time";
			}else{
				$time=time()-86400*30*12;
				$where.=" AND `lastupdate`<$time";
			}
		}
		//推荐
		if($paramer["rec"]){
			$where.=" AND `rec`='".$paramer["rec"]."'";
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
		//用户uid
		if($paramer["uid"]){
			$where.=" AND `uid`='".$paramer["uid"]."'";
		}
		if($paramer["rebates"]=='1'){
			$where.=" AND `rebates`<>''";
		}
		if($paramer["limit"]){
			$limit= " limit $paramer[limit]";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"lt_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"1",$_smarty_tpl);
         
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order]";
		}else{
			$where .= " ORDER BY  `lastupdate`  ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		 
		$list=$db->select_all("lt_job",$where.$limit);
		if(!$paramer[ispage]){
			$_smarty_tpl->tpl_vars["t_count"]->value=count($list);
		}
		
		if(is_array($list)){
			foreach($list as $v){
				if($v['usertype']==2){
					$comuid[]=$v['uid'];
    			}
                if($v['usertype']==3){
					$comuid[]=$v['uid'];
    			}
    		}
    	}
		$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`hy`,`logo`");
        $ltlist=$db->select_all("lt_info","`uid` IN (".@implode(',',$comuid).")","`uid`,`hy`,`photo_big`");
		
		
		if(is_array($list)){
			foreach($list as $k=>$v){
				if(is_array($list)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$list[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]company_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($list as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$list[$k]["com_pic"]=$val["com_pic"];
						}
                        
					}
				}
				
			}
		}
		if(is_array($list)){
			foreach($list as $k=>$v){
				$list[$k] = $db->lt_array_action($v);
				//对job_name 截取
				if(intval($paramer['t_len'])>0){
					$len = intval($paramer['t_len']);
					$list[$k]['job_name'] = mb_substr($v['job_name'],0,$len,"utf-8");
				}
				if($v['usertype']==3){
                    $list[$k]["lt_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));
					$list[$k]["job_url"] = Url("lietou",array("c"=>"jobshow","id"=>$v['id']));
					 $list[$k]["wap_lt_url"] = Url("wap",array("c"=>"ltjob","a"=>"hunter","uid"=>$v[uid]));
				}else{
                    $list[$k]["lt_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
					$list[$k]["job_url"] = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
					$list[$k]["wap_lt_url"] = Url("wap",array("c"=>"company","a"=>"show","id"=>$v['uid']));
				}		
				if($v['minsalary']>0&&$v['maxsalary']>0){
					$list[$k]["salary_info"] = "￥".floatval($v['minsalary'])."-".floatval($v['maxsalary'])."万";    
                }else if($v['minsalary']>0){
                    $list[$k]["salary_info"] = "￥".floatval($v['minsalary'])."万以上";  
                }else{
    				$list[$k]["salary_info"] = "面议";
    			}
                
				$list[$k]["lastupdate"] = date("Y-m-d",$v["lastupdate"]);
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
    					$list[$k]["com_name"]=$val['name'];
                       
                        $list[$k]["hy_n"]=$industry_name[$val['hy']];
                       if(!$val['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['logo']))){
                            $list[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
                        }else{
                            $list[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
                        } 
    				}
				}
                foreach($ltlist as $val){
					if($v['uid']==$val['uid']){
                        if($val[hy]!=""){
                           $hy="";
                           $hyarr=@explode(",",$val[hy]);
                            foreach($hyarr as $vall){
                                $hy.=$lthy_name[$vall]." ";
                            }
                            $list[$k][hy_n] = mb_substr($hy,0,$paramer[comlen],"utf-8");
                        }
                        if(!$val['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo_big']))){
                            $list[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
                        }else{
                            $list[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['photo_big']);
                        } 
                        
    				}
				}
			}
		} 
		if($paramer['keyword']!=""&&!empty($list)){
			addkeywords('7',$paramer['keyword']);
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <div class="itwap_job_ds_job_b">
                <div class="itwap_job_b_nm">
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'recshow','id'=>$_smarty_tpl->tpl_vars['list']->value['id']),$_smarty_tpl);?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['job_name'],0,12,'utf-8');?>
</a>
                </div>
                <div class="itwap_job_b_city"><?php echo $_smarty_tpl->tpl_vars['list']->value['cityid_info'];?>
<span class="lt_hunter_info_line">|</span> <?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['com_name'],0,12,'utf-8');?>
</div>
                <div class="itwap_job_b_jy"><i>  <?php echo $_smarty_tpl->tpl_vars['list']->value['salary_info'];?>
</i><span class="lt_hunter_info_line">|</span><?php echo $_smarty_tpl->tpl_vars['list']->value['exp_info'];?>
经验<span class="lt_hunter_info_line">|</span><?php echo $_smarty_tpl->tpl_vars['list']->value['edu_info'];?>
</div>
            </div>
            <?php } ?> <?php } else { ?>
            <div class="it_wap_notip"><i class="it_wap_notipiocn"></i>该顾问暂时没有运作的职位</div>
            <?php }?>
        </div>
    </div>

</div>

<div class="lt_hunter_info_box">
    <div class="lt_hunter_info">
        <div class="lt_hunter_tit">合作过的客户</div>
        <div class="lt_hunter_info_p">
            <?php if (count($_smarty_tpl->tpl_vars['info']->value['client'])&&$_smarty_tpl->tpl_vars['info']->value['client']) {?>
            <div class="itwap_job_ds_kh">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['client']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <span class="itwap_job_ds_hzkh"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> <?php } ?>
            </div>
            <?php } else { ?>
            <div class="it_wap_notip"><i class="it_wap_notipiocn"></i>暂时没有合作客户</div>
            <?php }?>
        </div>
    </div>
</div>

<!--私信弹出框-->
<div id="reply" style=" display:none; width:330px; margin: 0 auto; padding: 0;">
    <div><textarea name="reply" id="content" rows="4" cols="30"></textarea></div>
    <div><input type="submit" name="submit" value="发送 " class="lt_recuser_box_tj_list_sub" onclick="send_ltmsg();" />
        <input class="" type="hidden" id="fid" name="id" value="" /></div>
</div>
<!--私信弹出框-->
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
/js/lt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
