<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 03:57:45
         compiled from "/www/fpwjob/uploads/app/template/default/tiny/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2930238235e2f40b98c3114-28655894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92c4771e396bc6906ccc9a5fea124e44c72b1f0a' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/tiny/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2930238235e2f40b98c3114-28655894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'title' => 0,
    'num' => 0,
    'add_time' => 0,
    'key' => 0,
    'v' => 0,
    'arr_data1' => 0,
    'arr_data' => 0,
    'userclass_name' => 0,
    'userdata' => 0,
    'keylist' => 0,
    'wres' => 0,
    'uid' => 0,
    'total' => 0,
    'pagenav' => 0,
    'totalshow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2f40b9938a98_85347280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2f40b9938a98_85347280')) {function content_5e2f40b9938a98_85347280($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/microresume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body class="once_bg">

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="clear"></div>

<div class="tiny_banner">
	<div class="tiny_banner_cont">
		<div class="tiny_banner_cur">您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'tiny'),$_smarty_tpl);?>
">普工专区</a></div>
		<div class="once_banner_cont_b"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/resume_banner.jpg" /> </div>
		
		<div class="tiny_banner_bg"></div>
		
		<div class="tiny_banner_fb">
			<div class="tiny_banner_fb_h1"> 我要发布简历</div>
			<div class="tiny_banner_fb_p">用简短的文字介绍自己的优势，针对性的找到自己满意的工作！</div>
			<div class="tiny_banner_fb_fb"> 
			<?php if ($_smarty_tpl->tpl_vars['num']->value>0||$_smarty_tpl->tpl_vars['config']->value['sy_tiny']==0) {?>
			<a href='<?php echo smarty_function_url(array('m'=>'tiny','c'=>'add'),$_smarty_tpl);?>
' title="发布普工简历" >发布普工简历</a> 
			<?php } else { ?>
			<a href='javascript:void(0);' onclick="layer.msg('每个IP每天最多可发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_tiny'];?>
份普工简历！',2,8)" title="发布普工简历" >发布普工简历</a> 
			<?php }?>
				
			</div>
		</div>
        

        
  </div>
 </div>
<div class="micro_resume_bg">
  <div class="micro_resume">
  <form action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_tinydir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'tiny'),$_smarty_tpl);
}?>"   method="get" onsubmit="return search_keyword(this,'请输入普工简历的关键字');">
  <div class="tiny_search">
  <div class="tiny_search_list"><span class="tiny_search_name">筛选条件：</span>
  <div class="tiny_search_choice">
  <input type="button" value="<?php if ($_smarty_tpl->tpl_vars['add_time']->value[$_GET['add_time']]) {
echo $_smarty_tpl->tpl_vars['add_time']->value[$_GET['add_time']];
} else { ?>时间范围<?php }?>" id="add_times" class="tiny_search_but">
   <input type="hidden" value="" id="add_time" name="add_time">
  <div class="tiny_search_select none" id="tiny_time">
  <ul> 
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['add_time']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
     <li onclick="selecttiny('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','time');"><a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
   <?php } ?>
   </ul></div>
  </div>
  <div class="tiny_search_choice">  
  <input type="button" value="<?php if ($_GET['sex']) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} else { ?>性别要求<?php }?>" id="add_sexs" class="tiny_search_but">
   <input type="hidden" value="" id="add_sex" name="sex">
    <div class="tiny_search_select none"  id="tiny_sex">
    <ul> 
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
     <li onclick="selecttiny('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','sex');"><a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
   <?php } ?>
  </ul></div>
  </div>
  <div class="tiny_search_choice">
  <input type="button" value="<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['exp']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['exp']];
} else { ?>工作经验<?php }?>" id="add_exps" class="tiny_search_but">
   <input type="hidden" value="" id="add_exp" name="exp">
    <div class="tiny_search_select none"  id="tiny_exp">
    <ul> 
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<li onclick="selecttiny('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','exp');"><a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
	</ul></div>
   </div>
  
  <div class="tiny_search_text">
	<input id="key_word" class="tiny_search_t" type="text" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入普工简历的关键字<?php }?>"  name="keyword" onclick="if(this.value=='请输入普工简历的关键字'){this.value=''}" placeholder="请输入普工简历的关键字" onblur="if(this.value==''){this.value='请输入普工简历的关键字'}"/>
  </div>
   <input type="submit"  value="搜索" id="search_button" class="tiny_search_bth"/>
  </div>
   </form> 
  <div class="tiny_search_want"><span class="tiny_search_name">关&nbsp;键&nbsp; 字：</span> <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"8","type"=>"13","item"=>"\'keylist\'","nocache"=>"")
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
?> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"> <?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?></div>
  </div>
     
    <div class="micro_resume_cont">
     
      
      <div class="tiny_list_box">
      <div class="tiny_list_tit"> 共为您找到 <span class="tiny_list_tit_n" id="totalshow">0</span> 条普工信息</div>
          <div class="tiny_list_box_c">
       <?php  $_smarty_tpl->tpl_vars['wres'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wres']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("add_time"=>"\'auto.add_time\'","sex"=>"\'auto.sex\'","exp"=>"\'auto.exp\'","item"=>"\'wres\'","ispage"=>"1","limit"=>"24","keyword"=>"\'auto.keyword\'","nocache"=>"")
;');$wres=array();
		include PLUS_PATH."/user.cache.php";
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

      //关键字
      if($paramer[keyword]){
        $where["keywords"] = $paramer[keyword];
      }
      
      if($paramer['add_time']>0){
        $time= $now - $paramer['add_time']*86400;
        $where [] = array("setFilterRange", "lastupdate", $time, 9999999999);
      }
      if($paramer['delid']){
        $where [] = array("setFilter", "id", array($paramer['delid']), true);
      }

      //排序字段默认为更新时间
      if($paramer['order']){
        $orderField = str_replace("'","",$paramer[order]);
      }else{
        $orderField = "lastupdate";
      }

      //排序规则 默认为倒序
      if(strtoupper(trim($paramer[sort])) == "ASC"){
        $orderType = "ASC";
      }else{
        $orderType = "DESC";
      }

      include_once(LIB_PATH."sphinx.class.php");
      $sphinx = new sphinx();

      $sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

      if($paramer[ispage]){
        $limitArr = PageNav($paramer,$_GET,"resume_tiny",$where,$Purl, "","0",$_smarty_tpl);
        if($limitArr["offset"] >= 0){
          $ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "resume_tiny");
        }
        else{
          $ids = array();
        }
      }
      else if($paramer[limit]){
        $ids = $sphinx->getIds($where, 0, $paramer[limit], "resume_tiny");
      }
      else{
        $ids = $sphinx->getIds($where, 0, 20, "resume_tiny");
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
      $where = "status='1' ";
      
      //关键字
      if($paramer[keyword]){
        $where.=" AND `username` LIKE '%".$paramer[keyword]."%' or `job` LIKE '%".$paramer[keyword]."%'";
      }
      if($config[did]){
        $where.=" AND `did`='".$config['did']."'";
      }
	  if($paramer[sex]){
        $where.=" AND `sex`='".$paramer['sex']."'";
      }
	  if($paramer[exp]){
        $where.=" AND `exp`='".$paramer['exp']."'";
      }
      if($paramer['add_time']>0){
        $time=time()-$paramer['add_time']*86400;
        $where.=" and `lastupdate`>".$time;
      }
      if($paramer['delid']){
        $where.=" AND `id`<>'".$paramer['delid']."'";
      }
      //排序字段默认为更新时间
      if($paramer['order']){
        $order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
      }else{
        $order = " ORDER BY lastupdate ";
      }
      //排序规则 默认为倒序
      if($paramer['sort']){
        $sort = $paramer['sort'];
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
        $limit = PageNav($paramer,$_GET,"resume_tiny",$where,$Purl,'','0',$_smarty_tpl);
      }
      $where.=$order.$sort.$limit;
    }//end if($config["useSphinx"]) else

		$wres=$db->select_all("resume_tiny",$where);
		include(CONFIG_PATH."db.data.php");		
		if(is_array($wres)){
			foreach($wres as $key=>$value){				
				$time=$value['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$wres[$key]['lastupdate'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$wres[$key]['lastupdate'] = "昨天";
				}elseif($time>$beginToday){
					$wres[$key]['lastupdate'] = "今天";
					$wres[$key]['redtime'] =1;
				}else{
					$wres[$key]['lastupdate'] = date("Y-m-d",$value['lastupdate']);					
				}
				$wres[$key]['sex'] =$arr_data['sex'][$value['sex']];
				$wres[$key]['exp_name'] =$userclass_name[$value['exp']];
			}
		}
		if(is_array($wres)){
			if($paramer[keyword]!=""&&!empty($wres)){
				addkeywords('1',$paramer[keyword]);
			}
		}$wres = $wres; if (!is_array($wres) && !is_object($wres)) { settype($wres, 'array');}
foreach ($wres as $_smarty_tpl->tpl_vars['wres']->key => $_smarty_tpl->tpl_vars['wres']->value) {
$_smarty_tpl->tpl_vars['wres']->_loop = true;
?>
       
          <div class="tiny_list">
          <div class="tiny_list_name"><a href="<?php echo smarty_function_url(array('m'=>'tiny','c'=>'show','id'=>$_smarty_tpl->tpl_vars['wres']->value['id']),$_smarty_tpl);?>
" > <?php echo mb_substr($_smarty_tpl->tpl_vars['wres']->value['job'],0,30,'utf-8');?>
</a></div>
          <span class="tiny_list_time"><?php if ($_smarty_tpl->tpl_vars['wres']->value['redtime']==1||$_smarty_tpl->tpl_vars['wres']->value['lastupdate']=='昨天') {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['wres']->value['lastupdate'];?>
</span> <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['wres']->value['lastupdate'];?>

                <?php }?>更新</span>
                 <div class="tiny_list_info"><?php echo $_smarty_tpl->tpl_vars['wres']->value['username'];?>
 <i>|</i><?php echo $_smarty_tpl->tpl_vars['wres']->value['sex'];?>
<i>|</i> <?php echo $_smarty_tpl->tpl_vars['wres']->value['exp_name'];?>
经验</div>
                <div class="tiny_list_info_tel">  <?php if ($_smarty_tpl->tpl_vars['config']->value['user_wjl_link']==1&&$_smarty_tpl->tpl_vars['uid']->value<=0) {?> <span>登录查看联系方式<a href="javascript:void(0);" onclick="showlogin('');" class="tiny_list_info_tel_login">登录</a></span> <?php } else { ?>
                <span class="tiny_tel">联系电话：<?php echo $_smarty_tpl->tpl_vars['wres']->value['mobile'];?>
</span>
                <?php }?></div>
     
        </div>
        <?php } ?> </div>
      <div class="clear"></div>
      <?php if ($_smarty_tpl->tpl_vars['total']->value!=0) {?>
      <div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;
echo $_smarty_tpl->tpl_vars['totalshow']->value;?>
</div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
      <div class="onceseachno">
            <div class="onceseachno_left"> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif"/></div>
            <div class="onceseachno_content"> <strong>很抱歉，没有找到满足条件的简历</strong><br/>
          <span> 建议您：<br/>
          1、适当减少已选择的条件<br/>
          2、适当删减或更改搜索关键字<br/>
          </span> </div>
      </div>
      <?php }?> </div>
  </div>
</div></div>
 
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
 
$(function(){
	$(".tiny_search_choice").hover(function(){
		$(this).find("#tiny_time").show();
		
	},function(){
		$(this).find("#tiny_time").hide();		
	});
	$(".tiny_search_choice").hover(function(){
		$(this).find("#tiny_sex").show();
		
	},function(){
		$(this).find("#tiny_sex").hide();		
	});
	$(".tiny_search_choice").hover(function(){
		$(this).find("#tiny_exp").show();
		
	},function(){
		$(this).find("#tiny_exp").hide();		
	});
});
 
function selecttiny(val,name,type){
	$("#add_"+type).val(val);	
	$("#add_"+type+"s").val(name)
	$("#tiny_"+type).hide();
}
layui.use(['form'],function(){});
<?php echo '</script'; ?>
>
 <div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
