<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:56:47
         compiled from "/www/fpwjob/uploads/app/template/wap/article_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:8267618675e4903cf84b171-08352739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126f376229cc9d97e12463e439de6d0864fe0551' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/article_show.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8267618675e4903cf84b171-08352739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Info' => 0,
    'config' => 0,
    'about' => 0,
    'alist' => 0,
    'v' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4903cf8a4c24_21836597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4903cf8a4c24_21836597')) {function content_5e4903cf8a4c24_21836597($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_replace')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
    .wap_news_cont pre {
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
    }

	table[align="center"] { margin: 0 auto; }
	table,table tr th, table tr td { border:1px solid #666; }
</style>
<div class="news_cont_box">
    <div class="news_cont_box_tit">
        <h1><?php echo $_smarty_tpl->tpl_vars['Info']->value['title'];?>
</h1>
    </div>
    <div class="news_cont_ms"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['datetime'],"%Y-%m-%d");?>
<span class="news_list_box_ly">来源：<?php if ($_smarty_tpl->tpl_vars['Info']->value['source']) {
echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['source'],0,16,'utf-8');
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];
}?></span>点击：<span id="click"><?php echo '<script'; ?>
 language="javascript" src="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'GetHits','id'=>'`$Info.id`'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
></span> 次<span class="news_list_box_ly">作者：<?php if ($_smarty_tpl->tpl_vars['Info']->value['author']) {
echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['author'],0,16,'utf-8');
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];
}?></span> </div>
    <div class="wap_news_cont">
        <div class="wap_txt link_lan"> <?php echo $_smarty_tpl->tpl_vars['Info']->value['content'];?>
 </div>
    </div>
    <div class="atc_news_tj">
        <div class="atc_news_tj_h1"><span>相关推荐</span></div>
        <div>
            <?php if ($_smarty_tpl->tpl_vars['about']->value) {?>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['about']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value) {
$_smarty_tpl->tpl_vars['alist']->_loop = true;
?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['alist']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
</a>
                </li>
                <?php } ?>
            </ul>
            <?php } else { ?>
            <div class="evaluate_pj_no"><i class="evaluate_pj_no_icon"></i>暂无相关推荐</div>
            <?php }?>
        </div>
    </div>
    <a href="javascript:void(0);" id="shareClick" style="display:block; background:#f60;border:1px solid #f60; padding:5px;color:#fff; text-align:center">分享</a>
    <div class="clear"></div>
    <div class="news_in_tit">分类浏览</div>
    <div class="clear"></div>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'v\'","nocache"=>"")
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
?>
    <div class="news_in_tag ">
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','nid'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 </a>
    </div>
    <?php } ?>
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
>
    var config = {
        url: '<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
',
        title: '<?php echo $_smarty_tpl->tpl_vars['Info']->value['title'];?>
',
        desc: '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['Info']->value['description'],"\r\n",'');?>
',
        img: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
        img_title: '<?php echo $_smarty_tpl->tpl_vars['Info']->value['title'];?>
',
        from: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
    };
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
