<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-22 11:02:33
         compiled from "/www/fpwjob/uploads/app/template/wap/once.htm" */ ?>
<?php /*%%SmartyHeaderCode:3738202365e5099c965e288-60268252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11c1c87337cb819c2083bda4a13e51ae898938af' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/once.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3738202365e5099c965e288-60268252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'num' => 0,
    'once' => 0,
    'total' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5099c96ee3e8_98327112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5099c96ee3e8_98327112')) {function content_5e5099c96ee3e8_98327112($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="once_fb">
    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_once']==0) {?>
    	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once','a'=>'add'),$_smarty_tpl);?>
" class="once_fb_a"> <span class="once_fb_a_s">发布</span>招聘</a>
    <?php } elseif ($_smarty_tpl->tpl_vars['num']->value>0) {?>
    	<a href="javascript:void(0);" onclick="onceadd('一天内只能发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once'];?>
次，剩余可发布<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
次','<?php echo smarty_function_url(array('m'=>'wap','c'=>'once','a'=>'add'),$_smarty_tpl);?>
')" class="once_fb_a"> <span class="once_fb_a_s">发布</span>招聘</a>
   	<?php } else { ?>
    	<a href="javascript:void(0);" onclick="layermsg('一天内只能发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once'];?>
次！')" class="once_fb_a"> <span class="once_fb_a_s">发布</span>招聘</a>
    <?php }?>
</div>

<?php echo '<script'; ?>
>
	function onceadd(msg,url){
		layer.open({
			content:msg,
			btn: ['确定', '取消'],
			shadeClose: false,
			yes: function(){
				window.location.href=url;
			} 
		});
	}
<?php echo '</script'; ?>
>

<section>
    <div class="once_box ">
        <?php  $_smarty_tpl->tpl_vars['once'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['once']->_loop = false;
$once=array();global $db,$db_config,$config;eval('$paramer=array("item"=>"\'once\'","ispage"=>"1","limit"=>"20","keyword"=>"\'auto.keyword\'","islt"=>"4","nocache"=>"")
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
        <div class="list_once_box">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once','a'=>'show','id'=>$_smarty_tpl->tpl_vars['once']->value['id']),$_smarty_tpl);?>
">
                <div class="list_once_name"><?php echo $_smarty_tpl->tpl_vars['once']->value['title'];?>
</div>
                <span class="list_once_xz"><?php if ($_smarty_tpl->tpl_vars['once']->value['salary']) {?> ￥<?php echo $_smarty_tpl->tpl_vars['once']->value['salary'];
} else { ?>面议<?php }?></span>
                <div class="list_once_name_P"><?php echo mb_substr($_smarty_tpl->tpl_vars['once']->value['require'],0,100,'utf-8');?>
</div>
                <div class="list_once_name_P_tel">
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['user_wzp_link']=='1'&&!$_COOKIE['uid']) {?>
                    <a href='<?php echo smarty_function_url(array('m'=>'wap','c'=>'login','usertype'=>2),$_smarty_tpl);?>
'>
                        <font color='red'>登录后查看联系电话</font>
                    </a>
                    <?php } else { ?>
                    <span class="list_once_touch"> 电话： <?php echo $_smarty_tpl->tpl_vars['once']->value['phone'];?>
 (<?php echo $_smarty_tpl->tpl_vars['once']->value['linkman'];?>
)</span>
                    <a href="tel:<?php echo $_smarty_tpl->tpl_vars['once']->value['phone'];?>
">
                        <div class="list_once_touch_tel"><i class="list_once_touch_tel_icon"></i><span class="list_once_touch_tel_p">拨打</span></div>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['once']->value['address']) {?>
                    <div class="list_once_touch_add">地址：<?php echo $_smarty_tpl->tpl_vars['once']->value['address'];?>
</div>
                    <?php }?> <?php }?>

                    <div class="list_once_gxtime"> 更新于： <?php if ($_smarty_tpl->tpl_vars['once']->value['redtime']==1||$_smarty_tpl->tpl_vars['once']->value['ctime']<60) {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['once']->value['ctime'];?>
</span> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['once']->value['ctime'];?>
 <?php }?> </div>
                </div>
        </div>
        <?php } ?> <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?> <?php if ($_GET['keyword']!='') {?> <div class="wap_member_no">没有搜索到店铺招聘
            <div>
                <a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once'),$_smarty_tpl);?>
">重新搜索</a>
            </div>
    </div>
    <?php } else { ?>
    <div class="wap_member_no">暂无店铺招聘
        <div>
            <a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once'),$_smarty_tpl);?>
">重新搜索</a>
        </div>
    </div>
    <?php }?> <?php } else { ?>
    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
    <?php }?> </div>
</section>
<!--功能条-->
<!--<div id="yun_cz" class="fn-dbox center">
  <div id="resumeBtn" class="deep fn-dbox-flex fn-dbox-flex-flex1">
   <?php if ($_smarty_tpl->tpl_vars['num']->value>0) {?> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once','a'=>'add'),$_smarty_tpl);?>
" class="once_t_fb"> <i class="fa fa-pencil-square-o"></i> 发布招聘</a> 
   <?php } else { ?> <a href="javascript:void(0);" onclick="layermsg('一天内只能发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once'];?>
次！')" class="once_t_fb"> 
   <i class="fa fa-pencil-square-o"></i> 我要发布招聘信息</a> 
   <?php }?> 
   </div>
</div>-->
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
