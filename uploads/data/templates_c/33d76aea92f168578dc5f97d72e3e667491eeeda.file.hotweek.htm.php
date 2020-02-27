<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-25 17:54:50
         compiled from "/www/fpwjob/uploads/app/template/ask/hotweek.htm" */ ?>
<?php /*%%SmartyHeaderCode:15396402825e54eeeac50f79-48527171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d76aea92f168578dc5f97d72e3e667491eeeda' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/ask/hotweek.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15396402825e54eeeac50f79-48527171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'config' => 0,
    'my_atten' => 0,
    'uid' => 0,
    'total' => 0,
    'pagenav' => 0,
    'qclasslist' => 0,
    'recom' => 0,
    'rlist' => 0,
    'ask_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e54eeeacb5158_94616995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54eeeacb5158_94616995')) {function content_5e54eeeacb5158_94616995($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['askstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="content "> 
<div class="ask_navcur">当前位置：首页 > 一周热点</div>
	<div class="content_hot">
    			<div class="left_cen">
             <div class="ask_tit"style="padding-bottom:0px;"><span class="ask_tit_icon_s"><i class="ask_tit_icon"></i>一周热点</span></div> 
		
			
             
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("hot"=>"7","order"=>"\'answernum\'","item"=>"\'list\'","ispage"=>"1","t_len"=>"20","limit"=>"10","nocache"=>"")
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
					<h4>
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
" ><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
					</h4>
					<dl>
						<dt><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);"/></dt>
						<dd>
							
							<div class="answer_on">
									<p><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['content']),0,100,'utf-8');?>
</p>
								<div class="wt_jl " >
                                 <div class="clear"></div>
								<div style="width:100%; float:left">	<span class="answer_per"><font><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$list.uid`'),$_smarty_tpl);?>
" TARGET="_blank"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['nickname'],0,8,'utf-8');?>
</a></font> 发起了话题 </span>
                                    <span class="attention q<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" style="margin-top:3px; float:right">
								<?php if ($_smarty_tpl->tpl_vars['list']->value['isatn']!='2') {?>
									<?php if (in_array($_smarty_tpl->tpl_vars['list']->value['id'],$_smarty_tpl->tpl_vars['my_atten']->value)) {?>
									<a href="javascript:void(0);" class="watch_qxgz" onclick="attention('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','1','<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'attention'),$_smarty_tpl);?>
');" >取消关注</a>
									<?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                                        <a href="javascript:void(0);" class="watch_gz" onclick="attention('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','1','<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'attention'),$_smarty_tpl);?>
');">关注问题</a>
                                        <?php } else { ?>
                                        <a href="javascript:void(0)"  onclick="showlogin('');" class='watch_gz'>关注问题</a>
                                        <?php }?>
									<?php }?> 
								<?php }?>
							</span>
                            </div>
                            <div class="clear"></div>
								<div style="width:100%; float:left"><span class="gz_icon"><font class="index_num<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['atnnum'];?>
</font>人关注</span>
                                    
									<span class="hd_icon"><font><?php echo $_smarty_tpl->tpl_vars['list']->value['answer_num'];?>
</font>个回答</span>
									<span class="ll_icon"><font><?php echo $_smarty_tpl->tpl_vars['list']->value['visit'];?>
</font>次浏览</span>
									<span class="time_icon"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['add_time'],"%Y-%m-%d %H:%M");?>
</span>
								</div></div>
							</div>
							
						</dd>
						<div class="clear"></div>
					</dl>
				</div>
				<?php } ?>  
				<?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
			<div class="noresult png" >您还没有任何问题，抓紧提问吧！</div>
				<?php } else { ?> 
				<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
				<?php }?>  
				<div class="clear"></div>
			
		</div>
        <div class="ask_index_right">
        <div class="ask_tw"style="margin-top:0px" > 
<div class="ask_tw_t">职场问答</div>
<div class="ask_tw_p">给你职场领域最专业的帮助</div>

 <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'addquestion'),$_smarty_tpl);?>
" target="_blank"class="ask_tw_btn" >+ 我要提问</a>
			<?php } else { ?>
				<a href="javascript:void(0);" onclick="showlogin('');"class="ask_tw_btn" >+ 我要提问</a>
			<?php }?>
            
   </div>

        <div class="ask_index_right_box" >
        <div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">话题分类</span></div>
        <div class="hot_tagfl_con">
		<?php  $_smarty_tpl->tpl_vars['qclasslist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qclasslist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("key"=>"\'key\'","item"=>"\'qclasslist\'","name"=>"\'qcache\'","nocache"=>"")
;');$qclasslist=array();
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
			$qclasslist[] = $askArray;
			if($paramer[limit] && $i>=$paramer[limit])
			{
				break;
			} 
		}
		if($paramer[son]){
			foreach($qclasslist as $key=>$val){ 
				foreach($ask_type[$val['id']] as $v){
					$qclasslist[$key][son][]=array('name'=>$ask_name[$v],"id"=>$v);
				} 
			}
		}  
		$qclasslist = $qclasslist; if (!is_array($qclasslist) && !is_object($qclasslist)) { settype($qclasslist, 'array');}
foreach ($qclasslist as $_smarty_tpl->tpl_vars['qclasslist']->key => $_smarty_tpl->tpl_vars['qclasslist']->value) {
$_smarty_tpl->tpl_vars['qclasslist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['qclasslist']->key;
?>
						<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'topic','id'=>'`$qclasslist.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['qclasslist']->value['name'];?>
</a>
						<?php } ?> 
				</div>


	</div>	
     <div class="ask_index_right_box"  >
        <div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">推荐达人</span></div>
    <div class="recom_con">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['rlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rlist']->key => $_smarty_tpl->tpl_vars['rlist']->value) {
$_smarty_tpl->tpl_vars['rlist']->_loop = true;
?>
						<li>
							<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$rlist.uid`'),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);"/></a>
                            <div class="recom_con_name"><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$rlist.uid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['nickname'];?>
</a></div>
						</li>
						<?php } ?> 
					</ul>
				</div>	</div>
                
                
</div>		


	
	<div class="clear"></div>
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
