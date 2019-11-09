<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:06:03
         compiled from "/www/fpwjob/uploads/app/template/lietou/headhunter.htm" */ ?>
<?php /*%%SmartyHeaderCode:13981459205dc521eb124745-36871622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72c8360f0c230f81f2c7043a87861a4663a815c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/lietou/headhunter.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13981459205dc521eb124745-36871622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'config' => 0,
    'user' => 0,
    'usertype' => 0,
    'atn' => 0,
    'uid' => 0,
    't_count' => 0,
    'list' => 0,
    'v' => 0,
    'lietou_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc521eb186909_00436436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc521eb186909_00436436')) {function content_5dc521eb186909_00436436($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    <div class="clear"></div>
    <div class="content">
         <div class="headerhunter_cont">
     
                <div class="headerhunter_cont_box">
        <div class="headerhunter_cont_photo"><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['photo_big'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);" width="100" height="100"/></div>
        <div class="headerhunter_cont_c">
              <div class="headerhunter_cont_name"><?php echo $_smarty_tpl->tpl_vars['info']->value['realname'];?>
</div>
              <div class="headerhunter_cont_p"><?php if ($_smarty_tpl->tpl_vars['info']->value['rzid']) {?>TD：<?php echo $_smarty_tpl->tpl_vars['info']->value['rzid'];
}?><span class="headerhunter_cont_gun"><?php echo $_smarty_tpl->tpl_vars['info']->value['ant_num'];?>
人已关注</span>
             <span class="headerhunter_cont_gun">上次登录：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['login_date'],"%Y-%m-%d");?>
</span>
                </div>
              <div class="headerhunter_cont_bth_box">
               <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
                    <a href="javascript:void(0);" onclick="ltatn('<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
');" id="guanzhu<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
" class="headerhunter_cont_gz"><?php if (is_array($_smarty_tpl->tpl_vars['atn']->value)) {?>取消关注<?php } else { ?>+关注<?php }?></a>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                            <a href="javascript:void(0)" onclick="layer.msg('只有个人用户才能关注', 2, 8)" class="headerhunter_cont_gz">+ 关注</a>
                        <?php } else { ?>
                            <a href="javascript:void(0)" onclick="showlogin('1');" class="headerhunter_cont_gz">+ 关注</a>
                        <?php }?>
                    <?php }?>
             <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
                        <a href="javascript:entrust('<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['info']->value['realname'];?>
');" class="headerhunter_cont_wt">委托简历</a>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                                <a href="javascript:void(0)" onclick="layer.msg('只有个人用户才能委托简历', 2, 8)" class="headerhunter_cont_wt">委托简历</a>
                            <?php } else { ?>
                                <a href="javascript:void(0)" onclick="showlogin('1');" class="headerhunter_cont_wt">委托简历</a>
                            <?php }?>
                        <?php }?>
                        </div>
             
               </div>
              <div class="headerhunter_cont_r">  
                    <ul class="headerhunter_cont_list fl">
                     <li><span>从业年限：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['exp_info'];?>
</li>
                        <li><span>擅长行业：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['hy_info'];?>
</li>
                        <li><span>擅长职位：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['job_info'];?>
</li>
                    </ul>
              
               </div>
               </div>
        </div>
        
        
        <div class="job_main fl">
    
            <div class="job_point  fl">
            <div class="job_resp_title f16 fb fl">
                    <span class="job_lt_line"></span>
                        顾问介绍
                    </div>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['content']) {?>
                <div class="job_details fl"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</div>
                <?php } else { ?>
                <div class="hunter_nodetails fl">该顾问暂时没有顾问介绍</div>
                <?php }?>
            </div>
            <div class="hunter_point  fl">
                 <div class="job_resp_title f16 fb fl">
                    <span class="job_lt_line"></span>
                        正在运作的职位
                    </div>
              
                <?php if ($_smarty_tpl->tpl_vars['t_count']->value>0) {?>
                <ul class="hunter_con fl">
                <li>
                  <div class="hunter_con_job fl">职位</div>
                         <div class="hunter_con_city fl">公司/地点</div>
                          <div class="hunter_con_money fl">
                          <div class="hunter_con_le fl">薪资</div></div>
                        </li>
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
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
                     
                    <li>
                        <div class="hunter_con_job fl"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['job_url'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['job_name'],0,22,'utf-8');?>
</a></div>
                        <div class="hunter_con_city fl"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['com_name'],0,22,'utf-8');?>
<font color="#999"> 丨 </font><?php echo $_smarty_tpl->tpl_vars['list']->value['cityid_info'];?>
</div>
                        <div class="hunter_con_money fl">
                            <div class="hunter_con_le fl">年薪：</div>
                            <?php if ($_smarty_tpl->tpl_vars['list']->value['salary_info']) {
echo $_smarty_tpl->tpl_vars['list']->value['salary_info'];
}?>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
                <?php } else { ?>
                <div class="hunter_nocon fl">该顾问暂时没有运作的职位</div>
                <?php }?>
            </div>
        </div>
        <div class="job_sidebar fr" style="padding-bottom:10px;">
            <div class="job_sidebar_lt_hz">
             <div class="job_resp_title f16 fb fl" style="width:100px;">
                    <span class="job_lt_line"></span>
                        合作过的客户
                    </div>
        
            <?php if (count($_smarty_tpl->tpl_vars['info']->value['client'])&&$_smarty_tpl->tpl_vars['info']->value['client']) {?>
            <ul class="hunter_coorlist fl">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['client']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
                <?php } ?>
            </ul>
            <?php } else { ?>
            <div class="hunter_nocoor fl">暂时没有合作客户</div>
            <?php }?>
        </div>
        </div>
    </div>
     <div id="reply" class="none" style=" width:330px; margin: 0 auto; padding: 0;">
        <table class="table_form " id="infobox">
            <tr>
                <td><textarea name="reply" id="content" rows="4" cols="35" class="infor_text"></textarea></td>
            </tr>
            <tr>
                <td style="text-align:center">
				<input type="button" name="submit" value="发送 " class="Reply_cont_submit" onclick="send_msg();" />
				<input class="" type="hidden" id="fid" name="id" value="" />
				</td>
            </tr>
            
        </table>
    </div>
     <div class="clear"></div>
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
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/public_lt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
