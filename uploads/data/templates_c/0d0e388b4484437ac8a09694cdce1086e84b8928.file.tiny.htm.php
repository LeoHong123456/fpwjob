<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-25 08:24:50
         compiled from "/www/fpwjob/uploads/app/template/wap/tiny.htm" */ ?>
<?php /*%%SmartyHeaderCode:3933350175e546952830348-06740362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d0e388b4484437ac8a09694cdce1086e84b8928' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/tiny.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3933350175e546952830348-06740362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'config' => 0,
    'wres' => 0,
    'userclass_name' => 0,
    'total' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5469528c5c33_93987384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5469528c5c33_93987384')) {function content_5e5469528c5c33_93987384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="once_fb">
<?php if ($_smarty_tpl->tpl_vars['num']->value>0) {?> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'tiny','a'=>'add'),$_smarty_tpl);?>
" class="once_fb_a"> <span class="once_fb_a_s">发布</span>简历</a> <?php } else { ?> <a href="javascript:void(0);" onclick="layermsg('一天内只能发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_tiny'];?>
次！')"class="once_fb_a"> <span class="once_fb_a_s">发布</span>简历</a> <?php }?>
</div>
<div class="clear"></div>
<section>
  <div class="warp_content clear">
    <div class="job_list_content"> <?php  $_smarty_tpl->tpl_vars['wres'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wres']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'wres\'","islt"=>"4","ispage"=>"1","limit"=>"20","keyword"=>"\'auto.keyword\'","nocache"=>"")
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
      
       <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'tiny','a'=>'show','id'=>$_smarty_tpl->tpl_vars['wres']->value['id']),$_smarty_tpl);?>
">
        <div class="tiny_list_content">
        <div class=""> <h3>求职：<?php echo $_smarty_tpl->tpl_vars['wres']->value['job'];?>
</h3></div>
            
          <div class="tiny_list_content_p">
          <?php if ($_smarty_tpl->tpl_vars['wres']->value['username']) {?><span class="tiny_list_content_username c288"><?php echo $_smarty_tpl->tpl_vars['wres']->value['username'];?>
 </span><?php }?>
           <?php if ($_smarty_tpl->tpl_vars['wres']->value['sex']) {?><span class="tiny_list_content_userxb"><i class="tiny_list_content_userxb_icon"></i><?php echo $_smarty_tpl->tpl_vars['wres']->value['sex'];?>
</span><?php }?>
           <span class="tiny_list_content_userjy"><i class="tiny_list_content_userjy_icon"></i><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['wres']->value['exp']];?>
经验</span></div>
              <div class="tiny_list_content_time"><?php if ($_smarty_tpl->tpl_vars['wres']->value['lastupdate']=='今天'||$_smarty_tpl->tpl_vars['wres']->value['lastupdate']=='昨天') {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['wres']->value['lastupdate'];?>
</span> <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['wres']->value['lastupdate'];?>

            <?php }?></div>
  
       </div> 
       <?php if ($_smarty_tpl->tpl_vars['wres']->value['production']) {?>
          <div class="tiny_list_content_js"> <span class="tiny_list_content_js_s">简介：<?php echo mb_substr($_smarty_tpl->tpl_vars['wres']->value['production'],0,100,'utf-8');?>
</span></div><?php }?>
          </a> 
        </div>
      <?php } ?> </div>
  </div>
</section>
<?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
  <?php if ($_GET['keyword']!='') {?>
  <div class="wap_member_no">没有搜索到普工简历<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'tiny'),$_smarty_tpl);?>
">重新搜索</a></div></div>
<?php } else { ?>
<div class="wap_member_no">暂无普工简历<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'tiny'),$_smarty_tpl);?>
">重新搜索</a></div></div>
<?php }?>
  <?php } else { ?>
<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php }?>
<!--功能条 -->

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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
