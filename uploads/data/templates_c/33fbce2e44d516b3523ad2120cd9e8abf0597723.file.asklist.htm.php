<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 14:12:39
         compiled from "/www/fpwjob/uploads/app/template/wap/asklist.htm" */ ?>
<?php /*%%SmartyHeaderCode:7448938715e4cd1d759c5f9-83288144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33fbce2e44d516b3523ad2120cd9e8abf0597723' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/asklist.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7448938715e4cd1d759c5f9-83288144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getinfo' => 0,
    'config' => 0,
    'cache' => 0,
    'list' => 0,
    'total' => 0,
    'uid' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4cd1d75dd3e7_14041665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4cd1d75dd3e7_14041665')) {function content_5e4cd1d75dd3e7_14041665($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<?php if ($_smarty_tpl->tpl_vars['getinfo']->value['cid']) {?>
<?php  $_smarty_tpl->tpl_vars['cache'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cache']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("classid"=>"\'auto.cid\'","limit"=>"1","item"=>"\'cache\'","name"=>"\'cache_one\'","nocache"=>"")
;');$cache=array();
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
			$cache[] = $askArray;
			if($paramer[limit] && $i>=$paramer[limit])
			{
				break;
			} 
		}
		if($paramer[son]){
			foreach($cache as $key=>$val){ 
				foreach($ask_type[$val['id']] as $v){
					$cache[$key][son][]=array('name'=>$ask_name[$v],"id"=>$v);
				} 
			}
		}  
		$cache = $cache; if (!is_array($cache) && !is_object($cache)) { settype($cache, 'array');}
foreach ($cache as $_smarty_tpl->tpl_vars['cache']->key => $_smarty_tpl->tpl_vars['cache']->value) {
$_smarty_tpl->tpl_vars['cache']->_loop = true;
?>
<div class="asktoppic_tt">
     <div class="asktopic_tt_img"><img style="width:50px;height:50px;" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['cache']->value['pic'];?>
"></div>
     <div class="asktopic_tt_wr"># <?php echo $_smarty_tpl->tpl_vars['cache']->value['name'];?>
 #</div>
     <div class="asktopic_tt_ct"><?php echo $_smarty_tpl->tpl_vars['cache']->value['intro'];?>
</div>
</div>
<?php } ?>
<?php }?>


<!--top-->

    
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'list\'","name"=>"\'list\'","keyword"=>"\'auto.keyword\'","ispage"=>"1","t_len"=>"42","order"=>"\'auto.order\'","cid"=>"\'auto.cid\'","limit"=>"20","nocache"=>"")
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
<div class="ask_ct_list mt10">
 <div class="ask_hotweek_name"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'content','id'=>'`$list.id`'),$_smarty_tpl);?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['title'],0,42,"utf-8");?>
</a></div>
       <div class="ask_hotweek_p"> <?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['content']),0,36,'utf-8');?>
</div>
    
         <div class="ask_jx_info"><span class="ask_jx_data ask_jx_data_hd"><?php echo $_smarty_tpl->tpl_vars['list']->value['answer_num'];?>
 回答</span><span class="ask_jx_data ask_jx_data_yl"><?php echo $_smarty_tpl->tpl_vars['list']->value['visit'];?>
 阅读</span><span class="ask_jx_data ask_jx_data_gz"><?php echo $_smarty_tpl->tpl_vars['list']->value['atnnum'];?>
 关注</span></div>
         
       <div class="ask_jx_info_img" style="margin-top:5px;"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['pic'];?>
" width="20" height="20"> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'myquestion','uid'=>'`$list.uid`'),$_smarty_tpl);?>
" class="ask_jx_username"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['nickname'],0,15,'utf-8');?>
</a> <span class="ask_jx_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['add_time'],"%Y-%m-%d");?>
</span></div>
       

</div>
<?php } ?> 
<?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
<div style="padding:0px 10px 10px 10px;">
<div class="wap_member_no">
 暂时没有相关问题
 <div class=""><a href="<?php if ($_smarty_tpl->tpl_vars['uid']->value) {
echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'addquestion'),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);
}?>" class="wap_member_bth">我来提问</a></div>               	
</div></div>
<?php } else { ?> 
<div class="pages" style="margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div> 
<?php }?>  
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
