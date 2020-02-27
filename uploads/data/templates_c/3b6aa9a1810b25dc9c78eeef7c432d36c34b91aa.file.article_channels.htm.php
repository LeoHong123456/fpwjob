<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-20 11:24:42
         compiled from "/www/fpwjob/uploads/app/template/wap/article_channels.htm" */ ?>
<?php /*%%SmartyHeaderCode:9976317175e4dfbfa344781-72191501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6aa9a1810b25dc9c78eeef7c432d36c34b91aa' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/article_channels.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9976317175e4dfbfa344781-72191501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newc' => 0,
    'v' => 0,
    'group_name' => 0,
    'key' => 0,
    'oldc' => 0,
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4dfbfa3b7530_73476671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4dfbfa3b7530_73476671')) {function content_5e4dfbfa3b7530_73476671($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="" id="editnone">
<div class="articlemune_tit">我的频道<a href="javascript:void(0);" onclick="editshow();" class="articlemune_tit_bj">编辑</a></div>
<section>
<div>
<ul class="articlemune">
<?php if ($_smarty_tpl->tpl_vars['newc']->value) {?>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li><a><?php echo $_smarty_tpl->tpl_vars['group_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
		<?php } ?>
	<?php } else { ?>	
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("key"=>"\'key\'","item"=>"\'v\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
		include PLUS_PATH."/group.cache.php";

		$group = array();
		if($paramer['classid']){
			$classid = @explode(',',$paramer['classid']);
			if(is_array($classid)){
				foreach($classid as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['rec']){
			if(is_array($group_rec)){
				foreach($group_rec as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['r_news']){
			if(is_array($group_recnews)){
				foreach($group_recnews as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];        
					$group[] = $Info;
				}
			}
		}else{
			if(is_array($group_index)){
				foreach($group_index as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}
		if(is_array($group)){
			foreach($group as $key=>$value){
              if($paramer[r_list]){
				  if(is_array($group_type)){
					  foreach($group_type as $k=>$v){           
						 if($value['id']==strval($k)){
							foreach($v as $ke=>$va){
							  $rs['id']=$va;
							  $rs['name']=$group_name[$va];
							  if($config[sy_news_rewrite]=="2"){
								$rs[url] = $config['sy_weburl']."/news/".$va."/";
								}else{
								  $rs[url]= Url('article',array('c'=>'list',"nid"=>$va),"1");
								}
							  $r_list[] = $rs;
							}
						  }
					  }
				  }
				 
					$group[$key][r_list] = $r_list;
					unset($r_list);
				}
				if(intval($paramer[len])>0){
					$len = intval($paramer[len]);
					$group[$key][name] = mb_substr($value[name],0,$len,"utf-8");
				}
				if($group_type[$value['id']]){
					$nids = $value['id'].",".@implode(',',$group_type[$value['id']]);
				}else{
					$nids = $value['id'];
				}
				if($config[sy_news_rewrite]=="2"){
					$group[$key][url] = $config['sy_weburl']."/news/".$value[id]."/";
				}else{
					 $group[$key][url] = Url('article',array('c'=>'list',"nid"=>$value[id]),"1");


				}
				if($config[did]){
					$newswhere=" and `did`=$config[did]";
				}
				if($paramer[arcpic]){
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid` IN ($nids) AND `newsphoto`<>'' $newswhere  ORDER BY `datetime` DESC limit $paramer[arcpic]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[pt_len])>0){
							$len = intval($paramer[pt_len]);
							$rs[title] = mb_substr($rs[title],0,$len,"utf-8");
						}

						if($rs[color]){

							$rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";

						}
						if(intval($paramer[pd_len])>0){
							$len = intval($paramer[pd_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"utf-8");
						}
						foreach($group as $k=>$v){
							if($v[id]==$rs[nid]){
								$rs[name] = $v[name];
							}
						}
						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
                        $picid[]=$rs['id'];
						$arcpic[] = $rs;
					}
					$group[$key][arcpic] = $arcpic;
					unset($arcpic);
				}
				if($paramer[arclist]){
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid` IN ($nids) $newswhere  ORDER BY `datetime` DESC limit $paramer[arclist]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[t_len])>0){
							$len = intval($paramer[t_len]);
							$rs[title] = mb_substr($rs[title],0,$len,"utf-8");
						}

						if($rs[color]){

							$rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";

						}
						if(intval($paramer[d_len])>0){
							$len = intval($paramer[d_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"utf-8");
						}
						foreach($group as $k=>$v){
							if($v[id]==$rs[nid]){
								$rs[name] = $v[name];
							}
						}
						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
                        
                        if($paramer[arcpic]){
                            if(!in_array($rs['id'],$picid)){
                               if(count($arclist)<($paramer[arclist]-1)){
            					    $arclist[] = $rs;
            					}
                            } 
                        }else{
                            if(count($arclist)<($paramer[arclist]-1)){
        					    $arclist[] = $rs;
        					}
                        }
					}
					$group[$key][arclist] = $arclist;
					unset($arclist);
				}
			}
		}$group = $group; if (!is_array($group) && !is_object($group)) { settype($group, 'array');}
foreach ($group as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value<6) {?>
		<li><a><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
		<?php }?>
		<?php } ?>
<?php }?>	
</ul>
</div>
</section>
<div class="articlemune_tit">推荐频道</div>
<section>
<div>
<ul class="articlemune">
<?php if ($_smarty_tpl->tpl_vars['newc']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oldc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<li><a><?php echo $_smarty_tpl->tpl_vars['group_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
	<?php } ?>
<?php } else { ?>	
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("key"=>"\'key\'","item"=>"\'v\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
		include PLUS_PATH."/group.cache.php";

		$group = array();
		if($paramer['classid']){
			$classid = @explode(',',$paramer['classid']);
			if(is_array($classid)){
				foreach($classid as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['rec']){
			if(is_array($group_rec)){
				foreach($group_rec as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['r_news']){
			if(is_array($group_recnews)){
				foreach($group_recnews as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];        
					$group[] = $Info;
				}
			}
		}else{
			if(is_array($group_index)){
				foreach($group_index as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}
		if(is_array($group)){
			foreach($group as $key=>$value){
              if($paramer[r_list]){
				  if(is_array($group_type)){
					  foreach($group_type as $k=>$v){           
						 if($value['id']==strval($k)){
							foreach($v as $ke=>$va){
							  $rs['id']=$va;
							  $rs['name']=$group_name[$va];
							  if($config[sy_news_rewrite]=="2"){
								$rs[url] = $config['sy_weburl']."/news/".$va."/";
								}else{
								  $rs[url]= Url('article',array('c'=>'list',"nid"=>$va),"1");
								}
							  $r_list[] = $rs;
							}
						  }
					  }
				  }
				 
					$group[$key][r_list] = $r_list;
					unset($r_list);
				}
				if(intval($paramer[len])>0){
					$len = intval($paramer[len]);
					$group[$key][name] = mb_substr($value[name],0,$len,"utf-8");
				}
				if($group_type[$value['id']]){
					$nids = $value['id'].",".@implode(',',$group_type[$value['id']]);
				}else{
					$nids = $value['id'];
				}
				if($config[sy_news_rewrite]=="2"){
					$group[$key][url] = $config['sy_weburl']."/news/".$value[id]."/";
				}else{
					 $group[$key][url] = Url('article',array('c'=>'list',"nid"=>$value[id]),"1");


				}
				if($config[did]){
					$newswhere=" and `did`=$config[did]";
				}
				if($paramer[arcpic]){
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid` IN ($nids) AND `newsphoto`<>'' $newswhere  ORDER BY `datetime` DESC limit $paramer[arcpic]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[pt_len])>0){
							$len = intval($paramer[pt_len]);
							$rs[title] = mb_substr($rs[title],0,$len,"utf-8");
						}

						if($rs[color]){

							$rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";

						}
						if(intval($paramer[pd_len])>0){
							$len = intval($paramer[pd_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"utf-8");
						}
						foreach($group as $k=>$v){
							if($v[id]==$rs[nid]){
								$rs[name] = $v[name];
							}
						}
						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
                        $picid[]=$rs['id'];
						$arcpic[] = $rs;
					}
					$group[$key][arcpic] = $arcpic;
					unset($arcpic);
				}
				if($paramer[arclist]){
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid` IN ($nids) $newswhere  ORDER BY `datetime` DESC limit $paramer[arclist]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[t_len])>0){
							$len = intval($paramer[t_len]);
							$rs[title] = mb_substr($rs[title],0,$len,"utf-8");
						}

						if($rs[color]){

							$rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";

						}
						if(intval($paramer[d_len])>0){
							$len = intval($paramer[d_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"utf-8");
						}
						foreach($group as $k=>$v){
							if($v[id]==$rs[nid]){
								$rs[name] = $v[name];
							}
						}
						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
                        
                        if($paramer[arcpic]){
                            if(!in_array($rs['id'],$picid)){
                               if(count($arclist)<($paramer[arclist]-1)){
            					    $arclist[] = $rs;
            					}
                            } 
                        }else{
                            if(count($arclist)<($paramer[arclist]-1)){
        					    $arclist[] = $rs;
        					}
                        }
					}
					$group[$key][arclist] = $arclist;
					unset($arclist);
				}
			}
		}$group = $group; if (!is_array($group) && !is_object($group)) { settype($group, 'array');}
foreach ($group as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['key']->value>5) {?>
	<li><a><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
	<?php }?>
	<?php } ?>
<?php }?>	
</ul>
</div>
</section>
<div class="clear"></div>
</div>
<!-- 编辑 -->
<div class="" style="display:none" id="editshow">
<div class="articlemune_tit">我的频道<a href="javascript:void(0);" onclick="edit('<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'editchannels'),$_smarty_tpl);?>
');" class="articlemune_tit_bj">完成</a></div>
<section>
<div>
<ul id="newc" class="articlemune">
<?php if ($_smarty_tpl->tpl_vars['newc']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<li id="new<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="delchannels('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['group_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
')"><a><?php echo $_smarty_tpl->tpl_vars['group_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
<i class="articlemune_icon"></i></a></li>
	<?php } ?>
<?php } else { ?>	
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("key"=>"\'key\'","item"=>"\'v\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
		include PLUS_PATH."/group.cache.php";

		$group = array();
		if($paramer['classid']){
			$classid = @explode(',',$paramer['classid']);
			if(is_array($classid)){
				foreach($classid as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['rec']){
			if(is_array($group_rec)){
				foreach($group_rec as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['r_news']){
			if(is_array($group_recnews)){
				foreach($group_recnews as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];        
					$group[] = $Info;
				}
			}
		}else{
			if(is_array($group_index)){
				foreach($group_index as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}
		if(is_array($group)){
			foreach($group as $key=>$value){
              if($paramer[r_list]){
				  if(is_array($group_type)){
					  foreach($group_type as $k=>$v){           
						 if($value['id']==strval($k)){
							foreach($v as $ke=>$va){
							  $rs['id']=$va;
							  $rs['name']=$group_name[$va];
							  if($config[sy_news_rewrite]=="2"){
								$rs[url] = $config['sy_weburl']."/news/".$va."/";
								}else{
								  $rs[url]= Url('article',array('c'=>'list',"nid"=>$va),"1");
								}
							  $r_list[] = $rs;
							}
						  }
					  }
				  }
				 
					$group[$key][r_list] = $r_list;
					unset($r_list);
				}
				if(intval($paramer[len])>0){
					$len = intval($paramer[len]);
					$group[$key][name] = mb_substr($value[name],0,$len,"utf-8");
				}
				if($group_type[$value['id']]){
					$nids = $value['id'].",".@implode(',',$group_type[$value['id']]);
				}else{
					$nids = $value['id'];
				}
				if($config[sy_news_rewrite]=="2"){
					$group[$key][url] = $config['sy_weburl']."/news/".$value[id]."/";
				}else{
					 $group[$key][url] = Url('article',array('c'=>'list',"nid"=>$value[id]),"1");


				}
				if($config[did]){
					$newswhere=" and `did`=$config[did]";
				}
				if($paramer[arcpic]){
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid` IN ($nids) AND `newsphoto`<>'' $newswhere  ORDER BY `datetime` DESC limit $paramer[arcpic]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[pt_len])>0){
							$len = intval($paramer[pt_len]);
							$rs[title] = mb_substr($rs[title],0,$len,"utf-8");
						}

						if($rs[color]){

							$rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";

						}
						if(intval($paramer[pd_len])>0){
							$len = intval($paramer[pd_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"utf-8");
						}
						foreach($group as $k=>$v){
							if($v[id]==$rs[nid]){
								$rs[name] = $v[name];
							}
						}
						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
                        $picid[]=$rs['id'];
						$arcpic[] = $rs;
					}
					$group[$key][arcpic] = $arcpic;
					unset($arcpic);
				}
				if($paramer[arclist]){
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid` IN ($nids) $newswhere  ORDER BY `datetime` DESC limit $paramer[arclist]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[t_len])>0){
							$len = intval($paramer[t_len]);
							$rs[title] = mb_substr($rs[title],0,$len,"utf-8");
						}

						if($rs[color]){

							$rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";

						}
						if(intval($paramer[d_len])>0){
							$len = intval($paramer[d_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"utf-8");
						}
						foreach($group as $k=>$v){
							if($v[id]==$rs[nid]){
								$rs[name] = $v[name];
							}
						}
						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
                        
                        if($paramer[arcpic]){
                            if(!in_array($rs['id'],$picid)){
                               if(count($arclist)<($paramer[arclist]-1)){
            					    $arclist[] = $rs;
            					}
                            } 
                        }else{
                            if(count($arclist)<($paramer[arclist]-1)){
        					    $arclist[] = $rs;
        					}
                        }
					}
					$group[$key][arclist] = $arclist;
					unset($arclist);
				}
			}
		}$group = $group; if (!is_array($group) && !is_object($group)) { settype($group, 'array');}
foreach ($group as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['key']->value<6) {?>
	<li id="new<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="delchannels('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
')"><a><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<i class="articlemune_icon"></i></a></li>
	<?php }?>
	<?php } ?>
<?php }?>	
</ul>
</div>
</section>
<div class="articlemune_tit">推荐频道</div>
<section>
<div>
<ul id="oldc" class="articlemune">
<?php if ($_smarty_tpl->tpl_vars['newc']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oldc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<li id="old<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="addchannels('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['group_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
')"><a><?php echo $_smarty_tpl->tpl_vars['group_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
	<?php } ?>
<?php } else { ?>	
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("key"=>"\'key\'","item"=>"\'v\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
		include PLUS_PATH."/group.cache.php";

		$group = array();
		if($paramer['classid']){
			$classid = @explode(',',$paramer['classid']);
			if(is_array($classid)){
				foreach($classid as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['rec']){
			if(is_array($group_rec)){
				foreach($group_rec as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['r_news']){
			if(is_array($group_recnews)){
				foreach($group_recnews as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];        
					$group[] = $Info;
				}
			}
		}else{
			if(is_array($group_index)){
				foreach($group_index as $key=>$value){
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}
		if(is_array($group)){
			foreach($group as $key=>$value){
              if($paramer[r_list]){
				  if(is_array($group_type)){
					  foreach($group_type as $k=>$v){           
						 if($value['id']==strval($k)){
							foreach($v as $ke=>$va){
							  $rs['id']=$va;
							  $rs['name']=$group_name[$va];
							  if($config[sy_news_rewrite]=="2"){
								$rs[url] = $config['sy_weburl']."/news/".$va."/";
								}else{
								  $rs[url]= Url('article',array('c'=>'list',"nid"=>$va),"1");
								}
							  $r_list[] = $rs;
							}
						  }
					  }
				  }
				 
					$group[$key][r_list] = $r_list;
					unset($r_list);
				}
				if(intval($paramer[len])>0){
					$len = intval($paramer[len]);
					$group[$key][name] = mb_substr($value[name],0,$len,"utf-8");
				}
				if($group_type[$value['id']]){
					$nids = $value['id'].",".@implode(',',$group_type[$value['id']]);
				}else{
					$nids = $value['id'];
				}
				if($config[sy_news_rewrite]=="2"){
					$group[$key][url] = $config['sy_weburl']."/news/".$value[id]."/";
				}else{
					 $group[$key][url] = Url('article',array('c'=>'list',"nid"=>$value[id]),"1");


				}
				if($config[did]){
					$newswhere=" and `did`=$config[did]";
				}
				if($paramer[arcpic]){
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid` IN ($nids) AND `newsphoto`<>'' $newswhere  ORDER BY `datetime` DESC limit $paramer[arcpic]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[pt_len])>0){
							$len = intval($paramer[pt_len]);
							$rs[title] = mb_substr($rs[title],0,$len,"utf-8");
						}

						if($rs[color]){

							$rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";

						}
						if(intval($paramer[pd_len])>0){
							$len = intval($paramer[pd_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"utf-8");
						}
						foreach($group as $k=>$v){
							if($v[id]==$rs[nid]){
								$rs[name] = $v[name];
							}
						}
						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
                        $picid[]=$rs['id'];
						$arcpic[] = $rs;
					}
					$group[$key][arcpic] = $arcpic;
					unset($arcpic);
				}
				if($paramer[arclist]){
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid` IN ($nids) $newswhere  ORDER BY `datetime` DESC limit $paramer[arclist]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[t_len])>0){
							$len = intval($paramer[t_len]);
							$rs[title] = mb_substr($rs[title],0,$len,"utf-8");
						}

						if($rs[color]){

							$rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";

						}
						if(intval($paramer[d_len])>0){
							$len = intval($paramer[d_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"utf-8");
						}
						foreach($group as $k=>$v){
							if($v[id]==$rs[nid]){
								$rs[name] = $v[name];
							}
						}
						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
                        
                        if($paramer[arcpic]){
                            if(!in_array($rs['id'],$picid)){
                               if(count($arclist)<($paramer[arclist]-1)){
            					    $arclist[] = $rs;
            					}
                            } 
                        }else{
                            if(count($arclist)<($paramer[arclist]-1)){
        					    $arclist[] = $rs;
        					}
                        }
					}
					$group[$key][arclist] = $arclist;
					unset($arclist);
				}
			}
		}$group = $group; if (!is_array($group) && !is_object($group)) { settype($group, 'array');}
foreach ($group as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['key']->value>5) {?>
	<li id="old<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="addchannels('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
')"><a><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
	<?php }?>
	<?php } ?>
<?php }?>	
</ul>
</div>
</section>
<div class="clear"></div>
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
<?php echo '<script'; ?>
 type="text/javascript"> 
function editshow(){
	$("#editnone").hide();
	$("#editshow").show();
}
function addchannels(category,name){
	$("#old"+category).remove();
	$("#newc").append(function(){
		var html="<li id=\"new"+category+"\" data-category=\""+category+"\" onclick=\"delchannels('"+category+"','"+name+"')\"><a>"+name+"<i class=\"articlemune_icon\"></i></a></li>";
		return html;
	});
}
function delchannels(category,name){
	$("#new"+category).remove();
	$("#oldc").append(function(){
		var html="<li id=\"old"+category+"\" data-category=\""+category+"\" onclick=\"addchannels('"+category+"','"+name+"')\"><a>"+name+"</a></li>";
		return html;
	});
}
function edit(url){
	var oldc=[],newc=[];
	$("#oldc").find('li').each(function(){
		oldc.push($(this).attr('data-category'));
	  });
	$("#newc").find('li').each(function(){
		newc.push($(this).attr('data-category'));
	  });
	$.post(url,{oldc:oldc,newc:newc},function(data){
		if(data){
			if(data==1){
				layermsg('我的频道最少要有一个');
			}else{
				window.location.href=data;
			}
		}
	});
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
