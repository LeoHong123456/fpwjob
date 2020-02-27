<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 18:17:50
         compiled from "/www/fpwjob/uploads/app/template/wap/article.htm" */ ?>
<?php /*%%SmartyHeaderCode:19078675535e4916ceed96f6-01730401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '119354cdef3df80ed6f9eb9f550d58e40f03a0c8' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/article.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19078675535e4916ceed96f6-01730401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newc' => 0,
    'key' => 0,
    'v' => 0,
    'group_name' => 0,
    'item' => 0,
    'total' => 0,
    'pagenav' => 0,
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4916cf0097a6_54832304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4916cf0097a6_54832304')) {function content_5e4916cf0097a6_54832304($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="news_in_body">
    <div style="height:50px; position:relative">
        <section>
            <div id="header">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" <?php if ($_GET['type']=='tj') {?>class="swiper-slidea" <?php }?>>推荐</a>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['newc']->value) {?> 
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <div class="swiper-slide" data-hash="slide<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">
                        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','nid'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
#slide<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" <?php if ($_GET['nid']==$_smarty_tpl->tpl_vars['v']->value) {?>class="swiper-slidea" <?php }?>><?php echo $_smarty_tpl->tpl_vars['group_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </a>
                    </div>
                    <?php } ?> <?php } else { ?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
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
                    <div class="swiper-slide" data-hash="slide<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">
                        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','nid'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
#slide<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" <?php if ($_GET['nid']==$_smarty_tpl->tpl_vars['v']->value['id']) {?>class="swiper-slidea" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 </a>
                    </div>
                    <?php } ?> <?php }?>
                </div>
            </div>
        </section>
        <a class="news_nav_box_more" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'channels'),$_smarty_tpl);?>
">+</a>
    </div>
    <section class="search_cont">
        <form method="get" action="index.php">
            <input name='m' value="wap" type="hidden">
            <input name='c' value="article" type="hidden">
            <div class="formFiled">
                <input type="text" value="<?php echo $_GET['keyword'];?>
" id="keyword" name="keyword" class="input_search" placeholder="请输入文章关键字">
                <input type="submit" value=" " class="input_btn"> <i class="input_btn_icon iconfont"></i>
            </div>
        </form>
    </section>
    <section class="news_in_cont" id="fontshow">

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$item=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("nid"=>"\'auto.nid\'","keyword"=>"\'auto.keyword\'","type"=>"\'auto.type\'","ispage"=>"1","urlstatic"=>"1","limit"=>"10","t_len"=>"30","item"=>"\'item\'","nocache"=>"")
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
            if(count($item[$rs['nid']]['pic'])<$piclimit){
              $item[$rs['nid']]['pic'][] = $rs;
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
          if(count($item[$rs['nid']]['arclist'])<$paramer[limit]){
          $item[$rs['nid']]['arclist'][] = $rs;
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
          $item[] = $rs;
        }//end while
      }$item = $item; if (!is_array($item) && !is_object($item)) { settype($item, 'array');}
foreach ($item as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','a'=>'show','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">
            <div class="news_in_list">
                
                    <div class="news_in_list_box_left">
                        <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2>
                        <div class="news_in_list_w65" <?php if (!$_smarty_tpl->tpl_vars['item']->value['s_thumb']) {?> style="width:100%" <?php }?>>
                            <div class="news_in_list_p"> <?php echo mb_substr($_smarty_tpl->tpl_vars['item']->value['description'],0,47,'utf-8');?>
</div>
                            <div class="news_in_list_date">
                                <span class="news_in_eye_n"><i class="news_in_eye"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['hits'];?>
</span>
                                <span class="news_in_eye_n"><i class="news_in_date"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</span></div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['s_thumb']) {?>
                        <div class="news_in_cont_img"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['picurl'];?>
" width="120" height="80"></div><?php }?> </div>
                </div>
        </a>
        <?php } ?> <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?> <?php if ($_GET['keyword']!='') {?> <div class="wap_member_no">没有搜索到资讯
            <div>
                <a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article'),$_smarty_tpl);?>
">重新搜索</a>
            </div>
</div>
<?php } else { ?>
<div class="wap_member_no">暂无资讯
    <div>
        <a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article'),$_smarty_tpl);?>
">重新搜索</a>
    </div>
</div>
<?php }?> <?php } else { ?>
<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
 <?php }?>
</div>
<div class="clear"></div>
<div>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    function zhankaiShouqi(control) {
        $(control).parent().find('.news_Category_a:gt(6)').slideToggle();
        $(control).parent().find('.news_Category_line:gt(6)').slideToggle();
        if($(control).html() == '更多') {
            $(control).html('收起');
        } else {
            $(control).html('更多');

        }
    }
    window.onload = function() {
        var mySwiper1 = new Swiper('#header', {
            freeMode: true,
            slidesPerView: 'auto',
            hashnav: true
        });
    }
    $(function() {
        var $keyword = $("#keyword").val();
        setHeightKeyWord('fontshow', $keyword, 'Red', true);
    });

    function setHeightKeyWord(id, keyword, color, bold) {
        if(keyword == "")
            return;
        var tempHTML = $("#" + id).html();
        var htmlReg = new RegExp("\<.*?\>", "i");
        var arrA = new Array();
        for(var i = 0; true; i++) {
            var m = htmlReg.exec(tempHTML);
            if(m) {
                arrA[i] = m;
            } else {
                break;
            }
            tempHTML = tempHTML.replace(m, "[[[[" + i + "]]]]");
        }
        var replaceText
        if(bold)
            replaceText = "<b style='color:" + color + ";'>$1</b>";
        else
            replaceText = "<font style='color:" + color + ";'>$1</font>";
        var arrayWord = keyword.split(',');
        for(var w = 0; w < arrayWord.length; w++) {
            var r = new RegExp("(" + arrayWord[w].replace(/[(){}.+*?^$|\\\[\]]/g, "\\$&") + ")", "ig");
            tempHTML = tempHTML.replace(r, replaceText);
        }
        for(var i = 0; i < arrA.length; i++) {
            tempHTML = tempHTML.replace("[[[[" + i + "]]]]", arrA[i]);
        }
        $("#" + id).html(tempHTML);
    }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
