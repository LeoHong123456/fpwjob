<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 11:21:53
         compiled from "/www/fpwjob/uploads/app/template/wap/ask.htm" */ ?>
<?php /*%%SmartyHeaderCode:11256738445e2e5751194998-20607727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bba1366f896a6ae19e74c30009c65467bb8f5b4' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/ask.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11256738445e2e5751194998-20607727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uid' => 0,
    'lunbo' => 0,
    'config' => 0,
    'qindex' => 0,
    'rlist' => 0,
    'recom' => 0,
    'k' => 0,
    'list' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e57512570f3_12231214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e57512570f3_12231214')) {function content_5e2e57512570f3_12231214($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
    .header_h {
        display: none
    }
</style>
<!--搜索-->
<div class="ask_header_bg">
    <div class="ask_search_box">

        <a <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'addquestion'),$_smarty_tpl);?>
" <?php } else { ?>href="javascript:void(0)" onclick="pleaselogin('您还未登录账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" <?php }?> class="ask_search_box_tw">
        	<span class="ask_search_box_tw_c">提问</span></a>
        <div class="ask_search_ct">
            <form name="myform" method="get" action="index.php">
                <input type="hidden" name="c" value="ask" />
                <input type="hidden" name="a" value="list" />
                <input type="text" value="<?php echo $_GET['keyword'];?>
" name="keyword" id="keyword" class="ask_search_text" placeholder="搜一搜感兴趣的问题">
                <i class="ask_btn_icon"><input type="submit" value="" class="ask_search_bth"></i>
            </form>
        </div>
    </div>
</div>
<div class="askindex_banner">
    <div class="swiper_banner" style="height:80px">
        <div class="swiper-container" id="imgswiper">
            <div class="swiper-wrapper">
                <?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[69];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
                <div class="swiper-slide">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['src'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%' /></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="ask_top_nav_icon" onclick="$('.ask_top_nav').toggle();">

    <div class="ask_top_nav" style="display:none;">
        <div class="ask_top_nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
" class="ask_top_nav_iconhome">问答首页</a>
            <a <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'myquestion','uid'=>$_smarty_tpl->tpl_vars['uid']->value),$_smarty_tpl);?>
" <?php } else { ?>href="javascript:void(0)" onclick="pleaselogin('您还未登录账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" <?php }?> class="ask_top_nav_iconzy">我的主页</a>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'hotweek'),$_smarty_tpl);?>
" class="ask_top_nav_iconhot">一周热点</a>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'topic'),$_smarty_tpl);?>
" class="ask_top_nav_iconht">职场话题</a>
            <a <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'addquestion'),$_smarty_tpl);?>
" <?php } else { ?>href="javascript:void(0)" onclick="pleaselogin('您还未登录账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" <?php }?> class="ask_top_nav_icontw">我要提问</a>
        </div>
    </div>

</div>

<ul class="ask_indexnav mt10">
    <li>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'topic'),$_smarty_tpl);?>
">职场话题</a>
    </li>
    <li>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'hotweek'),$_smarty_tpl);?>
">一周热点</a>
    </li>
    <li>
        <a <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'myquestion','uid'=>$_smarty_tpl->tpl_vars['uid']->value),$_smarty_tpl);?>
" <?php } else { ?>href="javascript:void(0)" onclick="pleaselogin('您还未登录账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" <?php }?>>我的主页</a>
    </li>

</ul>

<!--msg-->
<div class="ask_msg mt10">
    <ul class="ask_msg_up">
        <?php  $_smarty_tpl->tpl_vars['qindex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qindex']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"4","son"=>"1","item"=>"\'qindex\'","nocache"=>"")
;');$qindex=array();
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;

		include(PLUS_PATH.'/ask.cache.php');
		
		if(!$paramer[classid])
		{
			$askArr = $ask_index;

		}else{
			$askArr = @explode(',',$paramer[classid]);
		}
		$i=0;
		foreach($askArr as $key=>$value)
		{
			$i++;
			$askArray['key'] = $i;
			$askArray['id'] = $value;
			$askArray['name'] = $ask_name[$value];
			$askArray['pic'] = $ask_pic[$value]; 
			$askArray['intro'] = $ask_intro[$value];
			$qindex[] = $askArray;
			if($paramer[limit] && $i>=$paramer[limit])
			{
				break;
			} 
		}
		if($paramer[son]){
			foreach($qindex as $key=>$val){ 
				foreach($ask_type[$val['id']] as $v){
					$qindex[$key][son][]=array('name'=>$ask_name[$v],"id"=>$v);
				} 
			}
		}  
		$qindex = $qindex; if (!is_array($qindex) && !is_object($qindex)) { settype($qindex, 'array');}
foreach ($qindex as $_smarty_tpl->tpl_vars['qindex']->key => $_smarty_tpl->tpl_vars['qindex']->value) {
$_smarty_tpl->tpl_vars['qindex']->_loop = true;
?>
        <li>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'topic','pid'=>'`$qindex.id`'),$_smarty_tpl);?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['qindex']->value['pic'];?>
" />
                <h3><?php echo $_smarty_tpl->tpl_vars['qindex']->value['name'];?>
</h3>
            </a>
        </li>
        <?php } ?>
        <li>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'topic'),$_smarty_tpl);?>
">
                <span class="ask_msg_more"></span>
                <h3>更多</h3>
            </a>
        </li>
    </ul>
</div>
<div class="clear"></div>
<!--nav-->

<div class="ask_jxtit mt10"><span class="ask_jxtit_name">精选问答</span></div>

<ul class="ask_jx">
    <?php  $_smarty_tpl->tpl_vars['rlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("is_recom"=>"1","name"=>"\'list\'","t_len"=>"30","limit"=>"5","item"=>"\'rlist\'","nocache"=>"")
;');$rlist=array();
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
         
        if($paramer[state]){
           $where=1;
        }else{
           $where = "`state`=1 ";
        }
		
		
		if($_COOKIE['uid']&&$paramer['friend']){
			$atn=$db->select_all("atn","`uid`='".$_COOKIE['uid']."'","`sc_uid`");
			$friend=array();
			foreach($atn as $val){
				$friend[]=$val['sc_uid'];
			}
			$where.=" and `id` in(".@implode(',',$friend).")";
			unset($friend);
		} 
		if($paramer[hot]){
			$time=strtotime("-".(int)$paramer[hot]." day");
			$where.=" and `add_time`>'".$time."'";
		}
		if($paramer[noid]){
			$where.=" and `id`<>'".$paramer[noid]."'";
		}
		if($paramer[keyword]){
			$where.=" and `title` like '%".$paramer['keyword']."%'";
		}
		if($paramer[nonum]){
			$where.=" and `answer_num`='0'";
		}
		if($paramer[yesnum]){
			$where.=" and `answer_num`>0";
		}
		//排序字段默认为更新时间
		if($paramer[order]){ 
			if($paramer[order]=="addtime"){
				$paramer[order]="add_time";
			}
			if($paramer[order]=="answernum"){
				$paramer[order]="answer_num";
			}
			$order = " ORDER BY `".$paramer[order]."`  desc";
		}else{
			$order = " ORDER BY `add_time` desc";
		}
		if($paramer[cid]){
			$where .=" and `cid`='".$paramer[cid]."'";
		}
		if($paramer[uid]){
			$where .=" and `uid`='".$paramer[uid]."'";
		}
		if($paramer[is_recom]){//推荐 字段
			$where .=" and `is_recom`='1'";
		}
		//if($config['ask_check']){//问答审核开启
			
		//}
		
		if($paramer[limit]){
			$limit=" limit ".$paramer[limit];
		}
		
		if($paramer['ispage']){
			$limit = PageNav($paramer,$_GET,"question",$where,$Purl,"","6",$_smarty_tpl);
		}
		$rlist = $db->select_all("question",$where.$order.$limit);  
		if(count($rlist)){
			foreach($rlist as $key=>$val){
				if(intval($paramer[t_len])>0){
					$len = intval($paramer[t_len]);
					$rlist[$key][title]  = mb_substr($val[title],0,$len,"utf-8");
				}
				if($paramer['keyword']){ 
					$rlist[$key][title] =str_replace($paramer[keyword],"<font color='#FF6600' >".$paramer[keyword]."</font>",$rlist[$key][title]);
				}
				if($val['pic']&&file_exists(str_replace($config['sy_weburl'],APP_PATH,".".$val['pic']))){
					$rlist[$key]['pic']=$config["sy_weburl"]."/".$val['pic'];
				}else{
					$rlist[$key]['pic']=$config["sy_weburl"]."/".$config['sy_friend_icon'];
				}
				
				$rlist[$key][url] = Url("ask",array("c"=>"content","id"=>$val[id]));
				$rlist[$key][userurl] = Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$val[uid]));
				if(in_array($val[uid],$ListId)==false){$ListId[] =  $val[uid];} 
				$Qclass[]=$val[cid];//问题类别
			}
			//获得提问者uid，并根据uid 获得头像、昵称
			$uids=@implode(",",$ListId);
			$_GET["total"]=1;  
			foreach($rlist as $r_k=>$r_v){
				if($r_v['uid']==$_COOKIE['uid']){
					$rlist[$r_k]['isatn']='2';//表示这是本人，不显示关注按钮
				} 
			}	
		}$rlist = $rlist; if (!is_array($rlist) && !is_object($rlist)) { settype($rlist, 'array');}
foreach ($rlist as $_smarty_tpl->tpl_vars['rlist']->key => $_smarty_tpl->tpl_vars['rlist']->value) {
$_smarty_tpl->tpl_vars['rlist']->_loop = true;
?>

    <li style="padding:0px;">
        <div class="home_indexquestion">
            <div class="ask_jx_name">
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'content','id'=>'`$rlist.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['title'];?>
</a>
            </div>
            <div class="ask_jx_info"><span class="ask_jx_data ask_jx_data_hd"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['answer_num'];?>
 回答</span><span class="ask_jx_data ask_jx_data_yl"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['visit'];?>
 阅读</span><span class="ask_jx_data ask_jx_data_gz"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['atnnum'];?>
 关注</span></div>

            <div class="ask_jx_info_img"><img src="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['pic'];?>
" width="20" height="20">
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'myquestion','uid'=>'`$rlist.uid`'),$_smarty_tpl);?>
" class="ask_jx_username"><?php echo mb_substr($_smarty_tpl->tpl_vars['rlist']->value['nickname'],0,25,'utf-8');?>
</a> <span class="ask_jx_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rlist']->value['add_time'],"%Y-%m-%d");?>
</span></div>
        </div>

    </li>
    <?php } ?>
</ul>

<div class="clear"></div>
<div class="index_newbox" style="float:left;width:100%; background:none">
    <div class="ask_jxtit" style="background:none"><span class="ask_jxtit_name">达人推荐</span></div>
    <div class="ask_box_list_c">
        <ul class="ask_box_list">
            <?php  $_smarty_tpl->tpl_vars['rlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlist']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rlist']->key => $_smarty_tpl->tpl_vars['rlist']->value) {
$_smarty_tpl->tpl_vars['rlist']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rlist']->key;
?>
            <li>
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'myquestion','uid'=>'`$rlist.uid`'),$_smarty_tpl);?>
">
                    <div class="ask_box">
                        <i class="ask_box_px ask_box_px1"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</i>
                        <div class="dr_user_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['pic'];?>
"></div>
                        <div class="ask_comname"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['nickname'];?>
</div>
                        <div class="dr_user_p"><span class="mq_comjob_n"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['num'];?>
</span> 回答</div>
                    </div>
            </li>
            </a>
            <?php } ?>
        </ul>

    </div>

</div>
<div class="clear"></div>
<div class="ask_ct" id="fontshow">
    <div class="ask_jxtit"><span class="ask_jxtit_name">最新问题</span></div>

    <ul class="ask_new">
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'list\'","name"=>"\'list\'","keyword"=>"\'auto.keyword\'","ispage"=>"1","t_len"=>"40","limit"=>"10","nocache"=>"")
;');$list=array();
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
         
        if($paramer[state]){
           $where=1;
        }else{
           $where = "`state`=1 ";
        }
		
		
		if($_COOKIE['uid']&&$paramer['friend']){
			$atn=$db->select_all("atn","`uid`='".$_COOKIE['uid']."'","`sc_uid`");
			$friend=array();
			foreach($atn as $val){
				$friend[]=$val['sc_uid'];
			}
			$where.=" and `id` in(".@implode(',',$friend).")";
			unset($friend);
		} 
		if($paramer[hot]){
			$time=strtotime("-".(int)$paramer[hot]." day");
			$where.=" and `add_time`>'".$time."'";
		}
		if($paramer[noid]){
			$where.=" and `id`<>'".$paramer[noid]."'";
		}
		if($paramer[keyword]){
			$where.=" and `title` like '%".$paramer['keyword']."%'";
		}
		if($paramer[nonum]){
			$where.=" and `answer_num`='0'";
		}
		if($paramer[yesnum]){
			$where.=" and `answer_num`>0";
		}
		//排序字段默认为更新时间
		if($paramer[order]){ 
			if($paramer[order]=="addtime"){
				$paramer[order]="add_time";
			}
			if($paramer[order]=="answernum"){
				$paramer[order]="answer_num";
			}
			$order = " ORDER BY `".$paramer[order]."`  desc";
		}else{
			$order = " ORDER BY `add_time` desc";
		}
		if($paramer[cid]){
			$where .=" and `cid`='".$paramer[cid]."'";
		}
		if($paramer[uid]){
			$where .=" and `uid`='".$paramer[uid]."'";
		}
		if($paramer[is_recom]){//推荐 字段
			$where .=" and `is_recom`='1'";
		}
		//if($config['ask_check']){//问答审核开启
			
		//}
		
		if($paramer[limit]){
			$limit=" limit ".$paramer[limit];
		}
		
		if($paramer['ispage']){
			$limit = PageNav($paramer,$_GET,"question",$where,$Purl,"","6",$_smarty_tpl);
		}
		$list = $db->select_all("question",$where.$order.$limit);  
		if(count($list)){
			foreach($list as $key=>$val){
				if(intval($paramer[t_len])>0){
					$len = intval($paramer[t_len]);
					$list[$key][title]  = mb_substr($val[title],0,$len,"utf-8");
				}
				if($paramer['keyword']){ 
					$list[$key][title] =str_replace($paramer[keyword],"<font color='#FF6600' >".$paramer[keyword]."</font>",$list[$key][title]);
				}
				if($val['pic']&&file_exists(str_replace($config['sy_weburl'],APP_PATH,".".$val['pic']))){
					$list[$key]['pic']=$config["sy_weburl"]."/".$val['pic'];
				}else{
					$list[$key]['pic']=$config["sy_weburl"]."/".$config['sy_friend_icon'];
				}
				
				$list[$key][url] = Url("ask",array("c"=>"content","id"=>$val[id]));
				$list[$key][userurl] = Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$val[uid]));
				if(in_array($val[uid],$ListId)==false){$ListId[] =  $val[uid];} 
				$Qclass[]=$val[cid];//问题类别
			}
			//获得提问者uid，并根据uid 获得头像、昵称
			$uids=@implode(",",$ListId);
			$_GET["total"]=1;  
			foreach($list as $r_k=>$r_v){
				if($r_v['uid']==$_COOKIE['uid']){
					$list[$r_k]['isatn']='2';//表示这是本人，不显示关注按钮
				} 
			}	
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
        <li>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'content','id'=>'`$list.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
            <span class="ask_new_n"><?php echo $_smarty_tpl->tpl_vars['list']->value['answer_num'];?>
个回答</span>

        </li>

        <?php }
if (!$_smarty_tpl->tpl_vars['list']->_loop) {
?>
        <div class="wap_notip">暂无问题</div>
        <?php } ?>
        <div class="ask_new_more">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'list'),$_smarty_tpl);?>
" class="">查看更多</a>
        </div>
    </ul>
</div>
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
        var myimgswiper = new Swiper('#imgswiper', {
            direction: 'horizontal',
            autoplay: true,
            loop: true
        });
    });
    marquee_l("2000", ".ask_box_list");
	if($('.askindex_banner a').length<=0){
		$('.askindex_banner').hide();
	}
<?php echo '</script'; ?>
>
<div class="ask_tw">
    <a <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'addquestion'),$_smarty_tpl);?>
" <?php } else { ?>href="javascript:void(0)" onclick="pleaselogin('您还未登录账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" <?php }?> class=""><span class="ask_tw_p">提问</span></a>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
