<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:24:29
         compiled from "/www/fpwjob/uploads/app/template/ask/search.htm" */ ?>
<?php /*%%SmartyHeaderCode:3514765865e2e3bcd489710-11390123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb2b3adccc6bd556101e0a95a6876462d6e1ca5' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/ask/search.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3514765865e2e3bcd489710-11390123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getinfo' => 0,
    'config' => 0,
    'cache' => 0,
    'list' => 0,
    'uid' => 0,
    'my_atten' => 0,
    'total' => 0,
    'pagenav' => 0,
    'hkey' => 0,
    'hlist' => 0,
    'hotclass' => 0,
    'hclist' => 0,
    'hotuser' => 0,
    'hulist' => 0,
    'ask_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3bcd536e01_32673667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3bcd536e01_32673667')) {function content_5e2e3bcd536e01_32673667($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['askstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
<div class="content">	
	<div>
		<div class="left"> 			
			<div class="answer">
				<?php if ($_smarty_tpl->tpl_vars['getinfo']->value['cid']) {?>
				<div class="left_top">
					<div class="topic_search_tip">
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
					<dl>
						<dt><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['cache']->value['pic'];?>
" /></dt> 
						<dd>
							<h2><?php echo $_smarty_tpl->tpl_vars['cache']->value['name'];?>
</h2>
							<p><?php echo $_smarty_tpl->tpl_vars['cache']->value['intro'];?>
</p>
						</dd>
					</dl>
					<?php } ?>
					</div>
				</div>
				<?php }?>
				<div class="clear"></div>
                <div class="ask_tit mt15"><span class="ask_tit_icon_s"><i class="ask_tit_icon"></i><?php if ($_smarty_tpl->tpl_vars['getinfo']->value['keyword']) {?>关于“<?php echo $_smarty_tpl->tpl_vars['getinfo']->value['keyword'];?>
”的问题<?php } else { ?>所有问题<?php }?></span>
                <div class="ans_disc">
						<a <?php if ($_smarty_tpl->tpl_vars['getinfo']->value['order']!='answernum') {?>class='cur'<?php }?> href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'search','keyword'=>'`$getinfo.keyword`','cid'=>'`$getinfo.cid`'),$_smarty_tpl);?>
" >时间排序</a> 
						<a <?php if ($_smarty_tpl->tpl_vars['getinfo']->value['order']=='answernum') {?>class='cur'<?php }?> href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'search','keyword'=>'`$getinfo.keyword`','cid'=>'`$getinfo.cid`','order'=>'answernum'),$_smarty_tpl);?>
">回答次数</a>
					</div>
                </div>
                
				<div class="answer_tit">
				
					
				</div>
				
				<div class="answer_list">
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'list\'","name"=>"\'list\'","keyword"=>"\'auto.keyword\'","ispage"=>"1","t_len"=>"20","order"=>"\'auto.order\'","cid"=>"\'auto.cid\'","limit"=>"10","nocache"=>"")
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
					<div class="answer_det">
                    <div class="answer_det_hh">
						<h4>
							<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
							
						</h4>
                        <span class="attention q<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['list']->value['isatn']!='2'&&$_smarty_tpl->tpl_vars['list']->value['uid']!=$_smarty_tpl->tpl_vars['uid']->value) {?>
									<?php if (in_array($_smarty_tpl->tpl_vars['list']->value['id'],$_smarty_tpl->tpl_vars['my_atten']->value)) {?>
									<a href="javascript:void(0);"  onclick="attention('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','1','<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'attention'),$_smarty_tpl);?>
');" class="watch_qxgz">取消关注</a>
									<?php } else { ?>
									<a href="javascript:void(0);" onclick="attention('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','1','<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'attention'),$_smarty_tpl);?>
');" class="watch_gz" title="关注问题">关注问题</a>
									<?php }?> 
								<?php }?>
							</span>
                            </div>
						<dl>
							<dt><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['pic'];?>
" width='49' height="49"onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);" /></dt>
							<dd>
								<p><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['content']),0,100,'utf-8');?>
</p> 
								<div class="answer_on">
									<span><font><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$list.uid`'),$_smarty_tpl);?>
" TARGET="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['nickname'];?>
</a></font>发起了话题 </span>&middot;
									<span><font class="index_num<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['atnnum'];?>
</font>人关注 </span>&middot;
									<span><font><?php echo $_smarty_tpl->tpl_vars['list']->value['answer_num'];?>
</font>个回答 </span>&middot;
									<span><font><?php echo $_smarty_tpl->tpl_vars['list']->value['visit'];?>
</font>次浏览 </span>&middot;
									<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['add_time'],"%Y-%m-%d %H:%M");?>
</span>
								</div>
								
							</dd>
							<div class="clear"></div>
						</dl>
					</div>
					<?php } ?>  
					<div class="clear"></div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
                <div style="padding:0px 10px 10px 10px;">
				 <div class="noresult">
               		 暂时没有提问相关问题 <br>
                	<span><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'addquestion'),$_smarty_tpl);?>
">抓紧提问吧!</a></span>
            	</div>	</div>
				<?php } else { ?> 
				<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div> 
				<?php }?>  
			</div>
		</div>
        
        
        
       <div class="ask_index_right">
        <div class="ask_index_right_box" >
        <div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">热门问题</span></div>
		
		<div class="hotask">
				<ul class="">
					<?php  $_smarty_tpl->tpl_vars['hlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hlist']->_loop = false;
 $_smarty_tpl->tpl_vars['hkey'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'hlist\'","name"=>"\'hlist\'","key"=>"\'hkey\'","hot"=>"1","order"=>"\'answernum\'","t_len"=>"20","limit"=>"6","nocache"=>"")
;');$hlist=array();
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
		$hlist = $db->select_all("question",$where.$order.$limit);  
		if(count($hlist)){
			foreach($hlist as $key=>$val){
				if(intval($paramer[t_len])>0){
					$len = intval($paramer[t_len]);
					$hlist[$key][title]  = mb_substr($val[title],0,$len,"utf-8");
				}
				if($paramer['keyword']){ 
					$hlist[$key][title] =str_replace($paramer[keyword],"<font color='#FF6600' >".$paramer[keyword]."</font>",$hlist[$key][title]);
				}
				if($val['pic']&&file_exists(str_replace($config['sy_weburl'],APP_PATH,".".$val['pic']))){
					$hlist[$key]['pic']=$config["sy_weburl"]."/".$val['pic'];
				}else{
					$hlist[$key]['pic']=$config["sy_weburl"]."/".$config['sy_friend_icon'];
				}
				
				$hlist[$key][url] = Url("ask",array("c"=>"content","id"=>$val[id]));
				$hlist[$key][userurl] = Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$val[uid]));
				if(in_array($val[uid],$ListId)==false){$ListId[] =  $val[uid];} 
				$Qclass[]=$val[cid];//问题类别
			}
			//获得提问者uid，并根据uid 获得头像、昵称
			$uids=@implode(",",$ListId);
			$_GET["total"]=1;  
			foreach($hlist as $r_k=>$r_v){
				if($r_v['uid']==$_COOKIE['uid']){
					$hlist[$r_k]['isatn']='2';//表示这是本人，不显示关注按钮
				} 
			}	
		}$hlist = $hlist; if (!is_array($hlist) && !is_object($hlist)) { settype($hlist, 'array');}
foreach ($hlist as $_smarty_tpl->tpl_vars['hlist']->key => $_smarty_tpl->tpl_vars['hlist']->value) {
$_smarty_tpl->tpl_vars['hlist']->_loop = true;
 $_smarty_tpl->tpl_vars['hkey']->value = $_smarty_tpl->tpl_vars['hlist']->key;
?>
					<li>
						<span class="<?php if ($_smarty_tpl->tpl_vars['hkey']->value>2) {?>hot_cur<?php }?>"><?php echo $_smarty_tpl->tpl_vars['hkey']->value+1;?>
</span> 
						<p><a href="<?php echo $_smarty_tpl->tpl_vars['hlist']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['hlist']->value['title'];?>
</a></p>
					</li>
                    <?php }
if (!$_smarty_tpl->tpl_vars['hlist']->_loop) {
?>
                    <dl class="hot_pro_no">
                    <dt></dt>
                    <dd>还没有热门问题</dd>
                    </dl>
					<?php } ?> 
					<div class="clear"></div>
				</ul>
			</div></div>
			
              <div class="ask_index_right_box" >
        <div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">热门标签</span></div>
        
			
				<div class="hot_tag_con">
					<?php  $_smarty_tpl->tpl_vars['hclist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hclist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotclass']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hclist']->key => $_smarty_tpl->tpl_vars['hclist']->value) {
$_smarty_tpl->tpl_vars['hclist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hclist']->key;
?>
					<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'search','cid'=>'`$key`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['hclist']->value;?>
</a>
					<?php } ?> 
				</div>
			</div>
                <div class="ask_index_right_box" >
        <div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">本月答人</span></div>
        
			
				<?php  $_smarty_tpl->tpl_vars['hulist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hulist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hulist']->key => $_smarty_tpl->tpl_vars['hulist']->value) {
$_smarty_tpl->tpl_vars['hulist']->_loop = true;
?>
				<div class="hot_userdet">
					<div class="user_det1">
						<div class="user_mes">
							<div class="user_pho">
								<img src="<?php echo $_smarty_tpl->tpl_vars['hulist']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);"/>
							</div>
							<div class="user_name">
								<p><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$hulist.uid`'),$_smarty_tpl);?>
" TARGET="_blank"><?php echo $_smarty_tpl->tpl_vars['hulist']->value['nickname'];?>
</a></p>
								<span><font><?php echo $_smarty_tpl->tpl_vars['hulist']->value['num'];?>
</font>个回答，<font><?php echo $_smarty_tpl->tpl_vars['hulist']->value['support'];?>
</font>次赞同</span>
							</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['hulist']->value['description']) {?><div class="user_tag">签名：<?php echo $_smarty_tpl->tpl_vars['hulist']->value['description'];?>
</div><?php }?>
					</div> 
				</div>
				<?php } ?> 
			</div>
		</div>
	</div>
</div> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['ask_style']->value;?>
/js/question.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.attention .watch_gz');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['askstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
<?php }} ?>
