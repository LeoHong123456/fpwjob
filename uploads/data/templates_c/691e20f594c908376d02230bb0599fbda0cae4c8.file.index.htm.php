<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 03:57:49
         compiled from "/www/fpwjob/uploads/app/template/default/once/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:18476785485e2f40bdd4f5f6-17489826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '691e20f594c908376d02230bb0599fbda0cae4c8' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/once/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18476785485e2f40bdd4f5f6-17489826',
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
    'num' => 0,
    'ordernum' => 0,
    'add_time' => 0,
    'key' => 0,
    'v' => 0,
    'oncekeyword' => 0,
    'keylist' => 0,
    'once' => 0,
    'uid' => 0,
    'pagenav' => 0,
    'total' => 0,
    'top_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2f40bde62ba6_06602967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2f40bde62ba6_06602967')) {function content_5e2f40bde62ba6_06602967($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/microresume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

    </head>

<body class="once_bg">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="clear"></div>
	
	<div class="tiny_banner" style="background:#b8daf6">
		<div class="tiny_banner_cont">
			<div class="tiny_banner_cur">您当前的位置：
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> >
				<a href="<?php echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);?>
">店铺招聘</a>
			</div>
			<div class="once_banner_cont_b"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/once_bg.jpg" width="1200" height="220" /></div>
			<div class="tiny_banner_bg"></div>
			<div class="tiny_banner_fb">
				<div class="tiny_banner_fb_h1">发布店铺招聘</div>
				<div class="tiny_banner_fb_p">不用注册，快速发布招聘信息，这里也能找到满意人才！</div>
				
				<div class="tiny_banner_fb_fb">
					<?php if ($_smarty_tpl->tpl_vars['num']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['ordernum']->value) {?>
							<a href='javascript:;' onclick="showOrder('<?php echo $_smarty_tpl->tpl_vars['ordernum']->value;?>
')"  class="recruit_user_public">发布店铺招聘</a>
						<?php } else { ?>
							<a href='<?php echo smarty_function_url(array('m'=>'once','c'=>'add'),$_smarty_tpl);?>
'  class="recruit_user_public">发布店铺招聘</a>
						<?php }?>
					<?php } else { ?>
						<a href="javascript:;" onclick="layer.msg('每天最多可发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once'];?>
份店铺招聘！',2,8)" class="">发布店铺招聘</a>
					<?php }?>   
								   
           </div>
    </div>
    
        </div>    </div>    </div>
        <div class="yun_content">
        <div class="tiny_search">
         <form action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_oncedir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);
}?>" method="get" onsubmit="return search_keyword(this,'请输入关键字');">
                         
  <div class="tiny_search_list"><span class="tiny_search_name">筛选条件：</span>
  <div class="tiny_search_choice">
  <input type="button" value="<?php if ($_smarty_tpl->tpl_vars['add_time']->value[$_GET['add_time']]) {
echo $_smarty_tpl->tpl_vars['add_time']->value[$_GET['add_time']];
} else { ?>时间范围<?php }?>" id="add_times" class="tiny_search_but">
  <input type="hidden" value="" id="add_time" name="add_time">
  <div class="tiny_search_select none"id="res_menu"> <ul class="" >
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['add_time']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<li onclick="selectonce('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
');">
			<a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
		</li>
		<?php } ?>
	</ul></div>
  </div>

 
  
  <div class="tiny_search_text">
   <input id="key_word" class="tiny_search_t" type="text" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入关键字<?php }?>" name="keyword" onclick="if(this.value=='请输入关键字'){this.value=''}" placeholder="请输入关键字" onblur="if(this.value==''){this.value='请输入关键字'}" /></div>
    <input type="submit" value="搜索" id="search_button" class="tiny_search_bth yun_bg_color" />
  </div>    </form>
  <div class="tiny_search_want"><span class="tiny_search_name">关&nbsp;键&nbsp; 字：</span>  
  <?php if ($_smarty_tpl->tpl_vars['oncekeyword']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"17","type"=>"1","item"=>"\'keylist\'","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}elseif($v['type']=="6"){
						$v['url'] = Url("lietou",array("c"=>"service","keyword"=>$v['key_name']));
						$v['type_name']='猎头';
					}elseif($v['type']=="7"){
						$v['url'] = Url("lietou",array("c"=>"post","keyword"=>$v['key_name']));
						$v['type_name']='猎头职位';
					}else if($v['type']=="9"){
						$v['url'] = Url("train",array("c"=>"subject","keyword"=>$v['key_name']));
						$v['type_name']='培训课程';
					}else if($v['type']=="10"){
						$v['url'] = Url("train",array("c"=>"agency","keyword"=>$v['key_name']));
						$v['type_name']='培训机构';
					}else if($v['type']=="11"){
						$v['url'] = Url("train",array("c"=>"teacher","keyword"=>$v['key_name']));
						$v['type_name']='培训师';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"> <?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?> 
	<?php } else { ?>

	<?php }?> 
	
   </div>
  </div>
  
        <div class="once_list_left">
  
          
 <div class="once_list_tit"> 共为您找到 <span class="tiny_list_tit_n" id="totalshow">0</span> 条店铺信息</div>
<div class="once_list_left_box">
 <?php  $_smarty_tpl->tpl_vars['once'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['once']->_loop = false;
$once=array();global $db,$db_config,$config;eval('$paramer=array("item"=>"\'once\'","ispage"=>"1","limit"=>"20","keyword"=>"\'auto.keyword\'","add_time"=>"\'auto.add_time\'","nocache"=>"")
;');
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

    if(isUseSphinx()){
      $now = time();
      $where = array();

      $where [] = array("setFilter", "status", array(1));
      $where [] = array("setFilterRange", "edate", $now, 9999999999);

      if($paramer["add_time"]>0){
        $time = $now - $paramer['add_time']*86400;
        $where [] = array("setFilterRange", "ctime", $time, 9999999999);
      }

      //关键字
      if($paramer[keyword]){
        $where["keywords"] = $paramer[keyword];
      }

      if($paramer['delid']){
        $where [] = array("setFilter", "id", array($paramer['delid']), true);
      }

      //排序字段默认为更新时间
      if($paramer[order]){
        $orderField = str_replace("'","",$paramer[order]);
      }else{
        $orderField = "ctime";
      }

      //排序规则 默认为倒序
      if(strtoupper(trim($paramer[sort])) == "ASC"){
        $orderType = "ASC";
      }else{
        $orderType = "DESC";
      }

      $sphinx = new sphinx();

      $sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

      if($paramer[ispage]){
        
        $limitArr = PageNav($paramer,$_GET,"once_job",$where,$Purl, "","0",$_smarty_tpl);
        if($limitArr["offset"] >= 0){
          $ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "once_job");
        }
        else{
          $ids = array();
        }
      }
      else if($paramer[limit]){
        $ids = $sphinx->getIds($where, 0, $paramer[limit], "once_job");
      }
      else{
        $ids = $sphinx->getIds($where, 0, 20, "once_job");
      }

      if(count(ids) > 0){
        $ids = implode(",", $ids);
        $where = "id in ($ids) order by field(id, $ids) ";
      }
      else{
        $where = "0";
      }
    }//end if($config["useSphinx"])
    else{
      $where = "`status`='1' and `pay`<>'1' and `edate`>".time();
      if($config[did]){
        $where.=" AND `did`='".$config['did']."'";
      }
          if($paramer['add_time']>0){
        $time=time()-$paramer['add_time']*86400;
        $where.=" and `ctime`>".$time;
      }
      //关键字
      if($paramer[keyword]){
        $where.=" AND (`title` LIKE '%".$paramer[keyword]."%' or `companyname` LIKE '%".$paramer[keyword]."%')";
      }
      if($paramer['delid']){
        $where.=" AND `id`<>'".$paramer['delid']."'";
      }
      //排序字段默认为更新时间
      if($paramer[order]){
        $order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
      }else{
        $order = " ORDER BY ctime ";
      }
      //排序规则 默认为倒序
      if($paramer[sort]){
        $sort = $paramer[sort];
      }else{
        $sort = " DESC";
      }
      //查询条数
      if($paramer[limit]){
        $limit=" LIMIT ".$paramer[limit];
      }else{
        $limit=" LIMIT 20";
      }
      //自定义查询条件，默认取代上面任何参数直接使用该语句
      if($paramer[where]){
        $where = $paramer[where];
      }
      if($paramer[ispage]){
        $limit = PageNav($paramer,$_GET,"once_job",$where,$Purl,'','0',$_smarty_tpl);
      }
      $where.=$order.$sort.$limit;
    }//end if($config["useSphinx"]) else
		
		$once=$db->select_all("once_job",$where);
		if(is_array($once)){
			foreach($once as $key=>$value){
				$time=time()-$value['ctime'];
				if($time>86400 && $time<604800){
					$once[$key]['ctime'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$once[$key]['ctime'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$once[$key]['ctime'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$once[$key]['ctime'] = "刚刚";
					$once[$key]['redtime'] =1;
				}else{
					$once[$key]['ctime'] = date("Y-m-d",$value['ctime']);
				}
				if(!$value['pic']||!file_exists(str_replace('./',APP_PATH,$value['pic']))){
					$once[$key]['pic'] = $config['sy_weburl']."/".$config['sy_once_icon'];
				}else{
					$once[$key]['pic']= $config['sy_weburl']."/".$value['pic'];
				}
			}
			if($paramer[keyword]!=""&&!empty($once)){
				addkeywords('1',$paramer[keyword]);
			}
		}$once = $once; if (!is_array($once) && !is_object($once)) { settype($once, 'array');}
foreach ($once as $_smarty_tpl->tpl_vars['once']->key => $_smarty_tpl->tpl_vars['once']->value) {
$_smarty_tpl->tpl_vars['once']->_loop = true;
?>
     <div class="once_list">
         <div class="once_list_pic">
         <img src="<?php echo $_smarty_tpl->tpl_vars['once']->value['pic'];?>
" width="200" height="130" />
         
         </div>
        <div class="once_list_info">
        <div class="once_list_name">  <a href="<?php echo smarty_function_url(array('m'=>'once','c'=>'show','id'=>'`$once.id`'),$_smarty_tpl);?>
" target="_blank"  class="once_list_name_a"><?php echo mb_substr($_smarty_tpl->tpl_vars['once']->value['title'],0,8,'utf-8');?>
</a>  <span class="once_list_gx"> <?php if ($_smarty_tpl->tpl_vars['once']->value['redtime']==1||$_smarty_tpl->tpl_vars['once']->value['ctime']<60) {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['once']->value['ctime'];?>
</span> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['once']->value['ctime'];?>
 <?php }?>更新</span>
        
        </div>
         
        <div class="once_list_dpname"><?php echo $_smarty_tpl->tpl_vars['once']->value['companyname'];?>
</div>
       <div class="once_list_p">要求：<?php echo mb_substr($_smarty_tpl->tpl_vars['once']->value['require'],0,38,'utf-8');?>
<a href="<?php echo smarty_function_url(array('m'=>'once','c'=>'show','id'=>'`$once.id`'),$_smarty_tpl);?>
" class="once_list_p_a">详情</a></div>
        <span class="once_list_xz"><?php if ($_smarty_tpl->tpl_vars['once']->value['salary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['once']->value['salary'];
} else { ?>面议<?php }?></span>
      
        <?php if ($_smarty_tpl->tpl_vars['config']->value['user_wzp_link']==1&&$_smarty_tpl->tpl_vars['uid']->value<=0) {?><div class="once_list_login">
          <a href="javascript:void(0);" onclick="showlogin('');" style="color:#1c99ef">[登录]</a> 后才可以查看联系方式</div>
		<?php } else { ?>
		 <?php if ($_smarty_tpl->tpl_vars['once']->value['phone']) {?>
	<div class="once_list_tel"><?php echo $_smarty_tpl->tpl_vars['once']->value['phone'];?>

	  <span class="once_list_tel_man"><?php echo $_smarty_tpl->tpl_vars['once']->value['linkman'];?>
</span></div>
	  <div class="once_list_tel_bg"></div>
		<?php }?>
		 <?php if ($_smarty_tpl->tpl_vars['once']->value['address']) {?>
	  <div class="once_list_add">联系地址：<?php echo $_smarty_tpl->tpl_vars['once']->value['address'];?>
</div>
		<?php } else { ?>
	   <?php }?> <?php }?>                
        </div>
        </div>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['pagenav']->value) {?>
<div class="clear"></div>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>

<div class="onceseachno">
	<div class="onceseachno_left"> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif" /></div>
	<div class="onceseachno_content"> <strong>很抱歉，没有找到满足条件的职位</strong><br/>
		<span> 建议您：<br/>
  1、适当减少已选择的条件<br/>
  2、适当删减或更改搜索关键字<br/>
  </span> <span> 热门关键字：<br/>
  <?php  $_smarty_tpl->tpl_vars['top_key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_key']->_loop = false;
global $config;eval('$paramer=array("limit"=>"6","recom"=>"1","type"=>"1","item"=>"\'top_key\'","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}elseif($v['type']=="6"){
						$v['url'] = Url("lietou",array("c"=>"service","keyword"=>$v['key_name']));
						$v['type_name']='猎头';
					}elseif($v['type']=="7"){
						$v['url'] = Url("lietou",array("c"=>"post","keyword"=>$v['key_name']));
						$v['type_name']='猎头职位';
					}else if($v['type']=="9"){
						$v['url'] = Url("train",array("c"=>"subject","keyword"=>$v['key_name']));
						$v['type_name']='培训课程';
					}else if($v['type']=="10"){
						$v['url'] = Url("train",array("c"=>"agency","keyword"=>$v['key_name']));
						$v['type_name']='培训机构';
					}else if($v['type']=="11"){
						$v['url'] = Url("train",array("c"=>"teacher","keyword"=>$v['key_name']));
						$v['type_name']='培训师';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['top_key']->key => $_smarty_tpl->tpl_vars['top_key']->value) {
$_smarty_tpl->tpl_vars['top_key']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['top_key']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['top_key']->value['key_name'];?>
</a> <?php } ?> </span> </div>
			</div>
			<?php }?> 
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
" rel="stylesheet" type="text/css" />
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
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/fast.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
        <style>
            .once_tel_add1 {
                width: 330px;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
                height: 25px;
                line-height: 25px;
                font-size: 12px;
                padding-left: 20px;
            }
        </style>
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
 type="text/javascript">
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scroll_Top = $(window).scrollTop();
                    var width = document.body.clientWidth;
                    if(scroll_Top > 520) {
                        if(window.XMLHttpRequest) {
                            var top = 0;
                            var right = (width - 970) / 2 + "px";
                        } else {
                            var top = parseInt(scroll_Top) - (520);
                            var right = 0;
                        }
                        $(".Fast_left").attr("style", "position:fixed;top:" + top + "px;_position:absolute;right:" + right + ";");
                    } else {
                        $(".Fast_left").attr("style", "");
                    }
                });
            });

            $(function() {
                $(".tiny_search_choice").hover(function() {
                    $(this).find("#res_menu").show();

                }, function() {
                    $(this).find("#res_menu").hide();
                });
            });

            function selectonce(val, name) {
                $("#add_time").val(val);
                $('#add_times').val(name)
                $("#res_menu").hide();
            }
			'<?php if ($_smarty_tpl->tpl_vars['total']->value) {?>'
				$(function() {
					$("#totalshow").html('<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
');
				})
			'<?php }?>'
						
            
        <?php echo '</script'; ?>
>
         <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/once/fast.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
