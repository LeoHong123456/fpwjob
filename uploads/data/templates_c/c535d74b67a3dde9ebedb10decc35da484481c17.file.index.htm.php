<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:05:29
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:7508235025dc521c93ce572-33324287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c535d74b67a3dde9ebedb10decc35da484481c17' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7508235025dc521c93ce572-33324287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lietou_style' => 0,
    'user' => 0,
    'jobnum' => 0,
    'ypnum' => 0,
    'downnum' => 0,
    'yqresume' => 0,
    'v' => 0,
    'recresume' => 0,
    'statis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc521c94a9278_85991067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc521c94a9278_85991067')) {function content_5dc521c94a9278_85991067($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!--[if IE 6]>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			DD_belatedPNG.fix('.png,.inter_con .inter_con_new,.vip_pic_xg a,.vip_mes h2 a');
		<?php echo '</script'; ?>
>
		<![endif]-->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/jobadd.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/pop_up.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			$(document).ready(function() {
				$("#newyqresume").hover(function() {
					$("#newyqresumeshow").show();
				}, function() {
					$("#newyqresumeshow").hide();
				})
			})
		<?php echo '</script'; ?>
>
	</head>

	<body>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="m_content">
			<div class="wrap">
				<div class="lietou_index_left">
					<?php if ($_smarty_tpl->tpl_vars['user']->value['yyzz_status']=="0") {?>
					<div class="lietou_tips">
						<div class="lietou_tips_p">您还没进行职业资格验证，人才搜索不到您，会影响您的招聘效果哦，赶快去进行验证吧。</div>
						<a href="index.php?c=binding">立即认证</a>
					</div>
					<?php }?>
					<div class="lietou_index_dt_box">
						<div class="lietou_index_dt">
							<dl class="lietou_index_dt_list">
								<a href="index.php?c=job&s=1">
									<dt>招聘中职位</dt>
									<dd <?php if ($_smarty_tpl->tpl_vars['jobnum']->value>0) {?>class="invite_zpz"<?php }?>><?php echo $_smarty_tpl->tpl_vars['jobnum']->value;?>
<i>(个)</i></dd>
								</a>
							</dl>
							<dl class="lietou_index_dt_list">
								<a href="index.php?c=yp_resume">
									<dt class="lietou_index_dt_list_djl">应聘来的简历</dt>
									<dd <?php if ($_smarty_tpl->tpl_vars['ypnum']->value>0) {?>class="invite_zpz"<?php }?>><?php echo $_smarty_tpl->tpl_vars['ypnum']->value;?>
<i>(份)</i></dd>
								</a>
							</dl>
							<dl class="lietou_index_dt_list">
								<a href="index.php?c=down_resume">
									<dt class="lietou_index_dt_list_xjl">已下载简历</dt>
									<dd <?php if ($_smarty_tpl->tpl_vars['downnum']->value>0) {?>class="invite_zpz"<?php }?>><?php echo $_smarty_tpl->tpl_vars['downnum']->value;?>
<i>(份)</i></dd>
								</a>
							</dl>
							<dl class="lietou_index_dt_list" style="border:none">
								<dt class="lietou_index_dt_list_xjl">被访问次数</dt>
								<dd><?php echo $_smarty_tpl->tpl_vars['user']->value['hits'];?>
<i>(次)</i></dd>
 							</dl>
						</div>
					</div>

					<div class="lietou_index_date">
						<div class="lietou_index_date_tit">
							<ul>
								<li <?php if ($_GET['type']=='') {?>class="lietou_index_date_tit_cur" <?php }?>>
									<a href="index.php">新应聘简历</a><i class="lietou_index_date_tit_curline"></i></li>
								<li <?php if ($_GET['type']=='recresume') {?> class="lietou_index_date_tit_cur" <?php }?>>
									<a href="index.php?type=recresume">待处理的推荐简历</a><i class="lietou_index_date_tit_curline"></i></li>
								<li>
									<a a href="index.php?c=right">猎头服务</a><i class="lietou_index_date_tit_curline"></i></li>
							</ul>
						</div>
						<?php if ($_GET['type']=='') {?> <?php if ($_smarty_tpl->tpl_vars['yqresume']->value) {?>
						
						<div class="lt_m_table" style="width:870px; margin-left:10px;">

							<table>
								<tbody>
									<tr>
										<th scope="col"><span>姓名</span></th>
										<th scope="col"><span>期望行业</span></th>
										<th scope="col"><span>意向职位</span></th>
										<th scope="col"><span>工作地点</span></th>
										<th scope="col"><span>  更新时间</span></th>
										<th scope="col">操作</th>
									</tr>

									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yqresume']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<tr>
										<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
										<td align="center"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['hyname'];?>
</span></td>
										<td align="center"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['jobclassname'];?>
</span></td>
										<td align="center"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['cityclassname'];?>
</span></td>
										<td align="center"><span> <?php echo $_smarty_tpl->tpl_vars['v']->value['lastupdate_n'];?>
</span></td>
										<td align="center">
											<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','type'=>2,'id'=>$_smarty_tpl->tpl_vars['v']->value['eid']),$_smarty_tpl);?>
" target="_blank" class="cont_del">查看</a>
										</td>
									</tr>
									<?php } ?>

								</tbody>
							</table>
						</div>
						<?php if (count($_smarty_tpl->tpl_vars['yqresume']->value)>10) {?>
						<div class="looresume_more">
							<a href="index.php?c=yp_resume">查看更多</a>
						</div><?php }?> <?php } else { ?>
						
						<div class="lietou_nomsg">
							<p>暂无未处理的简历，您可以去人才库里面找找心仪的精英！</p>
							<a href="index.php?c=search_resume" class="lietou_nomsg_a">找简历</a>
						</div>
						<?php }?> <?php }?> <?php if ($_GET['type']=='recresume') {?>
						
						<?php if ($_smarty_tpl->tpl_vars['recresume']->value) {?>
						<div class="lt_m_table" style="width:870px; margin-left:10px;">

							<table>
								<tbody>
									<tr>
										<th scope="col"><span>姓名</span></th>
										<th scope="col"><span>期望行业</span></th>
										<th scope="col"><span>意向职位</span></th>
										<th scope="col"><span>工作地点</span></th>
										<th scope="col"><span>更新时间</span></th>
										<th scope="col">操作</th>
									</tr>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recresume']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<tr>
										<td>
											<a class="" target="_blank" href="index.php?c=give_rebates"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
										</td>
										<td align="center"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['hyname'];?>
</span></td>
										<td align="center"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['jobclassname'];?>
</span></td>
										<td align="center"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['cityname'];?>
</span></td>
										<td align="center"><span> <?php echo $_smarty_tpl->tpl_vars['v']->value['lastupdate_n'];?>
</span></td>
										<td align="center">
											<a href="index.php?c=give_rebates" target="_blank" class="cont_del">查看</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<?php if (count($_smarty_tpl->tpl_vars['recresume']->value)>10) {?>
						<div class="looresume_more">
							<a href="index.php?c=give_rebates">查看更多</a>
						</div><?php }?> <?php } else { ?>
						
						<div class="lietou_nomsg">
							<p>暂无未处理的简历，您可以去人才库里面找找心仪的精英！</p>
							<a href="index.php?c=search_resume" class="lietou_nomsg_a">找简历</a>
						</div>
						<?php }?> <?php }?>
					</div>

				</div>
				<div class="lietou_index_right">
					<div class="lietou_index_rightbox">
						<div class="lietou_index_rightbox_tit"><span class="lietou_index_rightbox_tit_s">会员服务</span></div>
						<div class="lietou_index_rightbox_fw">

							<p> 会员级别：<?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>

								<a href="index.php?c=right" class="index_vip_sj">升级</a>
							</p>
							<p>
								目前<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：
								<i class="lietou_index_rightbox_fw_c"> <span class="jifen"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span></i> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

							</p>
							<p>增值包：什么是
								<a href="index.php?c=right&act=added" class="index_vip_zzb">增值包</a>？</p>

							<div class="inter_det">
								<a href="index.php?c=pay&type=integral" class="inter_det_cz">充值</a>
								<a href="index.php?c=paylog" class="inter_det_cz">明细</a>
								<a href="index.php?c=integral" class="inter_det_why">如何获得<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
？</a>
							</div>
							<div class="lietou_index_rightbox_fw_tit">服务热线</div>
							<div class="">联系电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
							<div class="">联系QQ：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qq'];?>

								<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qq'];?>
&site=qq&menu=yes" class="" target="_blank">
									<img src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/firmicon06.png">
								</a>
							</div>
						</div>
					</div>
					<div class="lietou_index_rightbox">
						<div class="lietou_index_rightbox_tit"><span class="lietou_index_rightbox_tit_s">精英推荐</span></div>
						<div class="lietou_index_rightbox_fw" style="padding-top:0px; padding-bottom:0px;">
							<ul class="index_user_box">
								<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$user=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("height_status"=>"\'2\'","limit"=>"4","post_len"=>"14","item"=>"\'user\'","key"=>"\'key\'","name"=>"\'userlist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    //处理类别字段
		$cache_array = $db->cacheget();
        $fscache_array = $db->fscacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
        $city_index     = $cache_array["city_index"];
		$job_name		= $cache_array["job_name"];
        $job_index		= $cache_array["job_index"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
        $city_parent       = $fscache_array["city_parent"];
        $job_parent     = $fscache_array["job_parent"];

		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}

		
			$where = "a.`defaults`='1' and a.`status`='1' and a.`r_status`='1'";
            //关注我公司的人才--条件
			if($paramer[where_uid]){
				$where .=" AND a.`uid` in (".$paramer['where_uid'].")";
			}
			//黑名单不能查看已拉黑的个人用户简历
			if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
				$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
				if(is_array($blacklist)&&$blacklist){
					foreach($blacklist as $v){
						$buid[]=$v['c_uid'];
					}
				    $where .=" AND a.`uid` NOT IN (".@implode(",",$buid).")";
				}
			}
            //置顶
			if($paramer[topdate]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
			if($paramer[top]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
            //身份认证
			if($paramer[idcard]){
				$where .=" AND a.`idcard_status`='1'";
			}
			//高级人才
			if($paramer[height_status]){
				$where .=" AND a.`height_status`=".$paramer[height_status];
			}else{
				$where .=" AND a.`height_status`='0'";
			}
			//高级人才推荐
			if($paramer[rec]){
				$where .=" AND a.`rec`=1";
			}
			//普通推荐
			if($paramer[rec_resume]){
				$where .=" AND a.`rec_resume`=1";
			}
			//作品
			if($paramer[work]){
				$show=$db->select_all("resume_show","1 group by eid","`eid`");
				if(is_array($show)){
					foreach($show as $v){
						$eid[]=$v['eid'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$eid).")";
			}
			//标签
			if($paramer[tag]){
			    $tagname=$userclass_name[$paramer[tag]];
				$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
				if(is_array($tag)){
					foreach($tag as $v){
						$tagid[]=$v['def_job'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$tagid).")";
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND a.`lastupdate`>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND a.`lastupdate`>$uptime";
	    		}
			}
			//添加时间区间，即审核时间
			if($paramer[adtime]){
				$time=time();
				$adtime = $time-($paramer[adtime]*86400);
				$where.=" AND a.`status_time`>$adtime";
			}
			//是否有照片
			if($paramer[pic]=="0" || $paramer[pic]){
				$where .=" AND a.`photo`<>'' AND a.`phototype`!=1";
			}
            //行业
			if($paramer['hy']!=""){
				$where .= " AND a.`hy` IN (".$paramer['hy'].")";
			}
            $citywhere = "1";
			//城市大类
			if($paramer[provinceid]){
                $citywhere .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer[cityid]){
                $citywhere .= " AND `cityid` = $paramer[cityid]";
			}
			//城市三级子类
			if($paramer[three_cityid]){
                $citywhere .= " AND `three_cityid` = $paramer[three_cityid]";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
                if($city_parent[$paramer[cityin]]=='0'){
					$citywhere .= " AND `provinceid` = $paramer[cityin]";
				}elseif(in_array($city_parent[$paramer[cityin]],$city_index)){
					$citywhere .= " AND `cityid` = $paramer[cityin]";
				}elseif($city_parent[$paramer[cityin]]>0){
					$citywhere .= " AND `three_cityid` = $paramer[cityin]";
				}
			}
            //职位类别
            $jobwhere = "1";
			if($paramer[job1]){
				$jobwhere.=" AND `job1`= $paramer[job1]";
			}
			if($paramer[job1_son]){
                $jobwhere.=" AND `job1_son`= $paramer[job1_son]";
			}
			if($paramer[job_post]){
                $jobwhere.=" AND `job_post`= $paramer[job_post]";
			}
            //职位区间,不建议执行该查询
			if($paramer[jobin]){
                if($job_parent[$paramer[jobin]]=='0'){
					$jobwhere.=" AND `job1`= $paramer[jobin]";
				}elseif(in_array($job_parent[$paramer[jobin]],$job_index)){
					$jobwhere.=" AND `job1_son`= $paramer[jobin]";
				}elseif($job_parent[$paramer[jobin]]>0){
					$jobwhere.=" AND `job_post`= $paramer[jobin]";
				}
			}
			//工作经验
			if($paramer[exp]){
				$where .=" AND a.`exp`=$paramer[exp]";
			}
			//学历
			if($paramer[edu]){
				$where .=" AND a.`edu`=$paramer[edu]";
			}
			//性别
			if($paramer[sex]){
				$where .=" AND a.`sex`=$paramer[sex]";
			}
			//到岗时间
			if($paramer[report]){
				$where .=" AND a.`report`=$paramer[report]";
			}
			//工作性质
			if($paramer[type]){
				$where .= " AND a.`type`=$paramer[type]";
			}
			//关键字
			if($paramer[keyword]){
				$jobid = array();
				$where1[]="a.`name` LIKE '%$paramer[keyword]%'";
				$where1[]="a.`uname` LIKE '%$paramer[keyword]%'";
                //关键字带期望职位搜索(已有城市选择搜索，这个有点累赘，影响效率)
//              $jobid=array();
// 				foreach($job_name as $k=>$v){
// 					if(strpos($v,$paramer[keyword])!==false){
// 						$jobid[]=$k;
// 					}
// 				}
// 				if(!empty($jobid)){
//                  $class=array();
// 					foreach($jobid as $value){
// 						$class[]="FIND_IN_SET('".$value."',`job_classid`)";
// 					}
// 					$where1[]=@implode(" or ",$class);
// 				}
                //关键字带期望城市搜索
			    $cityid=array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
                //只取匹配到的第一个城市，已选省则匹配省下面的城市、未选择城市则按关键字匹配城市
				if(!empty($cityid)){
                    $ckwhere = "1";
                    if(in_array($cityid[0],$city_index)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `provinceid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_two)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `cityid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_three)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `three_cityid` = $cityid[0]";
                    }
                    $cityresume = $db->select_all("resume_city",$ckwhere);
                    if($cityresume){
                        foreach ($cityresume as $v){
                            $where1[]=" `a.id`=".$v['eid'];
                        }
                    }
				}
                $where.=" AND (".@implode(" or ",$where1).")";
			}
			//薪资待遇
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary])."))";
			}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`>=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).")
							or (a.`minsalary`!=0 and  a.`maxsalary`=0))";
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary]).")
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`<=".intval($paramer[maxsalary]).")  
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`=0) 
							or (a.`minsalary`=0 and a.`maxsalary`!=0)
							)";
			}
	        //排序字段默认为更新时间
			if($paramer[order] && $paramer[order]!="lastdate"){
				if($paramer[order]=='topdate'){
					$nowtime=time();
					$order = " ORDER BY if(a.`topdate`>$nowtime,a.`topdate`,a.`lastupdate`)";
				}else{
					$order = " ORDER BY a.`".$paramer[order]."`";
				}
			}else{
				$order = " ORDER BY a.`lastupdate` ";
			}
			//排序规则 默认为倒序
			$sort = $paramer[sort]?$paramer[sort]:'DESC';
			//查询条数
			if($paramer[limit]){
				$limit=" LIMIT ".$paramer[limit];
			}
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
 			}
            $pagewhere = "";$joinwhere = "";
            if($citywhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_cityclass` where ".$citywhere." group by `eid`) b";
                $joinwhere .= " a.`id`=b.`eid` and ";
            }
            if($jobwhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_jobclass` where ".$jobwhere." group by `eid`) c";
                $joinwhere .= " a.`id`=c.`eid` and ";
            }
			if($paramer[ispage]){
				if($paramer["height_status"]){
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl,$pagewhere,$joinwhere);
				}else{
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl,$pagewhere,$joinwhere);
				}
			}
	
			if($paramer[topdate] && $_GET[page]>1){
				$user = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere.$where.$order.$sort.$limit;
					$user=$db->DB_query_all($sql,"all");
				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$user=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($user) && is_array($user)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($user as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($user as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $user[$k]['where']=$citywhere;
			    		$user[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$user[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1){
            					$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$user[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1){
									$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $user[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user[$k]['nametype']=$val[nametype];
                        $user[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $user[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$user[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				//更新时间显示方式
				$time=$v['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$user[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user[$k]['time'] = date("H:i",$v['lastupdate']);
					$user[$k]['redtime'] =1;
				}else{
					$user[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				$user[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
// 				$user[$k]['job_city_one']=$city_name[$v['provinceid']];
// 				$user[$k]['job_city_two']=$city_name[$v['cityid']];
// 				$user[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$user[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user[$k]["salary_n"] = "面议";
    			}
				$user[$k]['report_n']=$userclass_name[$v['report']];
				$user[$k]['type_n']=$userclass_name[$v['type']];
				$user[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user[$k]['m_name']=$m_name[$v['uid']];
					$user[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				//$user[$k]['job_post']=@implode(",",$jobname);
				$user[$k]['expectjob']=$jobname;
				$kcity_classid=@explode(",",$v['city_classid']);
				$kcity_classid=array_unique($kcity_classid);	
				$cityname=array();
				if(is_array($kcity_classid)){
					foreach($kcity_classid as $val){
					    if($val!=''){
					       
                            $cityname[]=$city_name[$val];
                            
                        }
					}
				}
                //$user[$k]['citylist']=@implode("/",$cityname);
				$user[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$user[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($user as $k=>$v){
               if($paramer['keyword']){
					$user[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['job_post']);
					$user[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['job_post_n']);
					$user[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['city_name_n']);
				}
            }
			if($paramer['keyword']!=""&&!empty($user)){
				addkeywords('5',$paramer['keyword']);
			}
		}$user = $user; if (!is_array($user) && !is_object($user)) { settype($user, 'array');}
foreach ($user as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user']->key;
?> 
								<li>
									<div class="ess_pic">
										<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id'],'type'=>2),$_smarty_tpl);?>
" target="_blank">
										
											<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" width="40" height="40" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" />
										</a>
									</div>
									<div class="ess_mes">
										<span><a  target="_blank" href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id'],'type'=>2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username_n'];?>
</a></span>
										<p>意向职位：<i><?php echo mb_substr($_smarty_tpl->tpl_vars['user']->value['job_post_n'],0,15,'utf-8');?>
</i></p>
										<p>工作经验：<i><?php echo $_smarty_tpl->tpl_vars['user']->value['exp_n'];?>
</i></p>
									</div>
								</li>
								<?php } ?>
							</ul>
							<div class="lietou_index_rightbox_jlk">
								<a href="index.php?c=search_resume">进入简历库>></a>
							</div>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
