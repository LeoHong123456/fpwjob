<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 08:47:23
         compiled from "/www/fpwjob/uploads/app/template/default/article/show.htm" */ ?>
<?php /*%%SmartyHeaderCode:12052478885e2f849b69dc84-51330053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b6ac17a1eea0a73154f217106dcec91260fa335' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/article/show.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12052478885e2f849b69dc84-51330053',
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
    'Info' => 0,
    'about' => 0,
    'v' => 0,
    'val' => 0,
    'news_jian' => 0,
    'key' => 0,
    'news_hits' => 0,
    'indexnews1' => 0,
    'indexnews2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2f849b77a440_96576046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2f849b77a440_96576046')) {function content_5e2f849b77a440_96576046($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/news.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<style>
.zx_art_content pre{ white-space: pre-wrap; white-space: -moz-pre-wrap;  white-space: -pre-wrap; white-space: -o-pre-wrap;   }
table[align="center"] { margin: 0 auto; }
table,table tr th, table tr td { border:1px solid #666; }
</style>
<body  class="body_bg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="yun_content">
  <div class="current_Location  png"> 您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'article'),$_smarty_tpl);?>
">职场资讯</a> > <a href="<?php echo smarty_function_url(array('m'=>'article','c'=>'list','nid'=>'`$Info.nid`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['Info']->value['news_class'];?>
</a></div>
  <div class="n_list_box">
 
<div class="n_show_box_cont">
<div class="zx_show_cont fl">
        <div class="zx_cont_main">
          <h1 class="zx_show_cont_h1" <?php if ($_smarty_tpl->tpl_vars['Info']->value['color']) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['Info']->value['color'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['Info']->value['title'];?>
</h1>
          <div class="zx_main_source">
			<span class="zx_main_source_r"><em>来源：</em><?php if ($_smarty_tpl->tpl_vars['Info']->value['source']) {
echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['source'],0,16,'utf-8');
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];
}?></span>
			<span class="zx_main_source_r"><em>时间：</em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['datetime'],"%Y-%m-%d");?>
</span>
			<span class="zx_main_source_r"><em>作者：</em><?php if ($_smarty_tpl->tpl_vars['Info']->value['author']) {
echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['author'],0,16,'utf-8');
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];
}?></span>              
			<span class="zx_main_source_r"><em>浏览量：</em>
				<?php echo '<script'; ?>
 language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/index.php?m=index&c=GetHits&id=<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
">
				<?php echo '</script'; ?>
>
			</span>
			
          </div>
          <div class="zx_art_content"> <?php echo $_smarty_tpl->tpl_vars['Info']->value['content'];?>
  </div>
          <div style="padding:20px 0;">
           <span class="sour_share fl"><em class="fl" style="line-height:28px;">分享到：</em>
         
		
			<div class="pyshare bdsharebuttonbox bdshare-button-style0-16" data-tag="share_1">
				<a class="li s1 bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
				<a class="li s2 bds_renren" data-cmd="renren" title="分享到人人网"></a>
				<a class="li s3 bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
				<a class="li s4 bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
				<a class="li s5 bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
				<a class="li s6 bds_weixin" data-cmd="weixin" title="分享到微信"></a>
				<div class="clear"></div>
			</div></span>
			</div>
		  
				
            <div class="zx_well_flip"> 
			<?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['next'])) {?> <span>上一篇： <a title="<?php echo $_smarty_tpl->tpl_vars['Info']->value['next']['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['Info']->value['next']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['Info']->value['next']['title'];?>
</a> </span> <?php }?>
			
			<?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['last'])) {?> <span>下一篇： <a title="<?php echo $_smarty_tpl->tpl_vars['Info']->value['last']['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['Info']->value['last']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['Info']->value['last']['title'];?>
</a></span> <?php }?>
              
              <div class="clear"></div>
              
            </div>
            <div class="zx_well_with">
              <div class="zx_with_recom">相关推荐</div>
              <div class="zx_with_list">
              <?php if ($_smarty_tpl->tpl_vars['Info']->value['like']) {?>
                <ul style="width:100%">
                  <?php  $_smarty_tpl->tpl_vars['about'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['about']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['like']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['about']->key => $_smarty_tpl->tpl_vars['about']->value) {
$_smarty_tpl->tpl_vars['about']->_loop = true;
?>
                  <li style="width:310px;float:left"><a title="<?php echo $_smarty_tpl->tpl_vars['about']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['about']->value['url'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['about']->value['title'],0,16,'utf-8');?>
</a></li>
                  <?php } ?>
                </ul>
                <?php } else { ?> <div class="news_tip_no">暂无相关推荐</div> <?php }?>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="news_index_box_right">
    <div class="clear"></div>
            <div class="news_index_today_h1" style="margin-top:0px;"> <span class="news_index_today_hot_s">热门话题</span></div>
    <div class="n_list_box_left"id="news_nav" style="margin-top:35px;">
 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("r_list"=>"1","item"=>"\'v\'","nocache"=>"")
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
            <div class="zx_fl_list">
            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" class="zx_fl_list_a"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
            <div class="zx_fl_list_box">
            <div class="zx_fl_list_t_fl">
            <div class="zx_fl_list_box_h1">  <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['r_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"  class="zx_fl_list_t_fl_a"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a>
            <?php } ?>
            </div>
            </div>
              </div>
             <?php } ?>

</div>

 <div class="news_index_today_h1"> <span class="news_index_today_tj_s">推荐文章</span></div>
  <div class="clear"></div>
 
 
 
 
 <div class="zx_rig_rom mt20" >
          <div class="zx_article">
           
			<?php  $_smarty_tpl->tpl_vars['news_jian'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news_jian']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$news_jian=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"1","type"=>"\'tj\'","pic"=>"1","t_len"=>"7","urlstatic"=>"1","key"=>"\'key\'","item"=>"\'news_jian\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($news_jian[$rs['nid']]['pic'])<$piclimit){
              $news_jian[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($news_jian[$rs['nid']]['arclist'])<$paramer[limit]){
          $news_jian[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $news_jian[] = $rs;
        }//end while
      }$news_jian = $news_jian; if (!is_array($news_jian) && !is_object($news_jian)) { settype($news_jian, 'array');}
foreach ($news_jian as $_smarty_tpl->tpl_vars['news_jian']->key => $_smarty_tpl->tpl_vars['news_jian']->value) {
$_smarty_tpl->tpl_vars['news_jian']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['news_jian']->key;
?>  
              <?php if ($_smarty_tpl->tpl_vars['news_jian']->value) {?>
              <div class="zx_art_hot"> 
              <dl>
                <dt><a href="<?php echo $_smarty_tpl->tpl_vars['news_jian']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['news_jian']->value['picurl'];?>
" style="width:84px; height:63px;" alt="<?php echo $_smarty_tpl->tpl_vars['news_jian']->value['title'];?>
"/></a></dt>
                <dd>
                  <div class="art_fanfu"><a href="<?php echo $_smarty_tpl->tpl_vars['news_jian']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['news_jian']->value['title'];?>
</a></div>
                  <div class="art_xq"><?php echo mb_substr($_smarty_tpl->tpl_vars['news_jian']->value['description'],0,22,'utf-8');?>
</div>
                </dd>
              </dl>
			  <div class="clear"></div>
            </div>
              <?php }?>
		  <?php } ?>
              
            <div class="zx_art_list">
              <ul>
                <?php  $_smarty_tpl->tpl_vars['news_hits'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news_hits']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$news_hits=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"6","order"=>"\'hits\'","t_len"=>"17","urlstatic"=>"1","key"=>"\'key\'","item"=>"\'news_hits\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($news_hits[$rs['nid']]['pic'])<$piclimit){
              $news_hits[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($news_hits[$rs['nid']]['arclist'])<$paramer[limit]){
          $news_hits[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $news_hits[] = $rs;
        }//end while
      }$news_hits = $news_hits; if (!is_array($news_hits) && !is_object($news_hits)) { settype($news_hits, 'array');}
foreach ($news_hits as $_smarty_tpl->tpl_vars['news_hits']->key => $_smarty_tpl->tpl_vars['news_hits']->value) {
$_smarty_tpl->tpl_vars['news_hits']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['news_hits']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value=='0'&&empty($_smarty_tpl->tpl_vars['news_hits']->value)) {?>
                <li>暂无文章</li>
                <?php } else { ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['news_hits']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['news_hits']->value['title'];?>
</a></li>
                <?php }?> 
                <?php } ?>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
                 <div class="news_index_today_h1"> <span class="news_index_today_news_s">最新文章</span></div>
                        <div class="clear"></div>
          <div class="zx_article mt20">
   
              <?php  $_smarty_tpl->tpl_vars['indexnews1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indexnews1']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$indexnews1=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"1","pic"=>"1","t_len"=>"7","d_len"=>"24","urlstatic"=>"1","item"=>"\'indexnews1\'","key"=>"\'key\'","name"=>"\'indexnews1\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($indexnews1[$rs['nid']]['pic'])<$piclimit){
              $indexnews1[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($indexnews1[$rs['nid']]['arclist'])<$paramer[limit]){
          $indexnews1[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $indexnews1[] = $rs;
        }//end while
      }$indexnews1 = $indexnews1; if (!is_array($indexnews1) && !is_object($indexnews1)) { settype($indexnews1, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['indexnews1']['index']=-1;
foreach ($indexnews1 as $_smarty_tpl->tpl_vars['indexnews1']->key => $_smarty_tpl->tpl_vars['indexnews1']->value) {
$_smarty_tpl->tpl_vars['indexnews1']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['indexnews1']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['indexnews1']['index']++;
?>
              <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['indexnews1']['index']==0) {?>
            <div class="zx_art_hot">
              <dl>
                <dt><a href="<?php echo $_smarty_tpl->tpl_vars['indexnews1']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['indexnews1']->value['picurl'];?>
" width="84" height="63" alt="<?php echo $_smarty_tpl->tpl_vars['indexnews1']->value['title'];?>
" /></a></dt>
                <dd>
                  <div class="art_fanfu"><a href="<?php echo $_smarty_tpl->tpl_vars['indexnews1']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['indexnews1']->value['title'];?>
</a></div>
                  <div class="art_xq"><?php echo $_smarty_tpl->tpl_vars['indexnews1']->value['description'];?>
..</div>
                </dd>
              </dl>
              <div class="clear"></div>
            </div>
              <?php }?>
              <?php } ?>
            <div class="zx_art_list">
              <ul>
                  <?php  $_smarty_tpl->tpl_vars['indexnews2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indexnews2']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$indexnews2=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("limit"=>"6","t_len"=>"16","d_len"=>"24","urlstatic"=>"1","item"=>"\'indexnews2\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($indexnews2[$rs['nid']]['pic'])<$piclimit){
              $indexnews2[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($indexnews2[$rs['nid']]['arclist'])<$paramer[limit]){
          $indexnews2[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $indexnews2[] = $rs;
        }//end while
      }$indexnews2 = $indexnews2; if (!is_array($indexnews2) && !is_object($indexnews2)) { settype($indexnews2, 'array');}
foreach ($indexnews2 as $_smarty_tpl->tpl_vars['indexnews2']->key => $_smarty_tpl->tpl_vars['indexnews2']->value) {
$_smarty_tpl->tpl_vars['indexnews2']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['indexnews2']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['indexnews2']->value['title'];?>
</a></li>
                  <?php } ?>
              </ul>
            </div>

</div>
  
</div></div></div>
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
$(function() {
	
	 var sfEls = $("#news_nav").find("div");
	 for (var i=0; i<sfEls.length; i++) {
		  sfEls[i].onmouseover=function() {
		  this.className+=(this.className.length>0? " ": "") + "zx_fl_list_hover";
		  }
		  sfEls[i].onMouseDown=function() {
		  this.className+=(this.className.length>0? " ": "") + "zx_fl_list_hover";
		  }
		  sfEls[i].onMouseUp=function() {
		  this.className+=(this.className.length>0? " ": "") + "zx_fl_list_hover";
		  }
		  sfEls[i].onmouseout=function() {
		  this.className=this.className.replace(new RegExp("( ?|^)zx_fl_list_hover\\b"),"");
		  }
	 }
});
<?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
>
	window._bd_share_config = {
		common : {
			bdText : '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
			bdDesc : '<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
',	
			bdUrl : '<?php echo smarty_function_url(array('m'=>'article','c'=>'show','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
',
			bdPic : '<?php if ($_smarty_tpl->tpl_vars['Info']->value['newsphoto']) {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['Info']->value['newsphoto'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];
}?>'
		},
		share : [{
			"tag" : "share_1",
			"bdSize" : 24,
			"bdCustomStyle":'<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/share.css'
		}]
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=weburl+'/js/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
<?php echo '</script'; ?>
>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
