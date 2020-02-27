<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-21 00:29:46
         compiled from "/www/fpwjob/uploads/app/template/wap/announcement.htm" */ ?>
<?php /*%%SmartyHeaderCode:16771977965e4eb3fadfe2d6-15696632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47ca94ca2a2584d9d745835b6143791e3b60d407' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/announcement.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16771977965e4eb3fadfe2d6-15696632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alist' => 0,
    'total' => 0,
    'pagenav' => 0,
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4eb3fae20ff1_30625128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4eb3fae20ff1_30625128')) {function content_5e4eb3fae20ff1_30625128($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="news_in_body">
    <section class="news_in_cont" id="fontshow">
        <?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
$alist=array();$time=time();eval('$paramer=array("limit"=>"10","ispage"=>"1","item"=>"\'alist\'","t_len"=>"28","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = 1;
		//分站
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}else if($config['sy_web_site']=="1"){
			$where.=" and `did`='0'";
		}  
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"admin_announcement",$where,$Purl,"",0,$_smarty_tpl);
		}
		//排序字段 默认按照xuanshang排序
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer[order]."`";
		}else{
			$where.="  ORDER BY `datetime`";
		}
		//排序方式默认倒序
		if($paramer[sort]){
			$where.=" ".$paramer[sort];
		}else{
			$where.=" DESC";
		}

		$alist=$db->select_all("admin_announcement",$where.$limit);
		if(is_array($alist)){
			foreach($alist as $key=>$value){
				//截取标题
				if($paramer[t_len]){
					$alist[$key][title_n] = mb_substr($value['title'],0,$paramer[t_len],"utf-8");
				}
				$alist[$key][time]=date("Y-m-d",$value[datetime]);
				$alist[$key][url] = Url("announcement",array("id"=>$value[id]),"1");
			}
		}$alist = $alist; if (!is_array($alist) && !is_object($alist)) { settype($alist, 'array');}
foreach ($alist as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value) {
$_smarty_tpl->tpl_vars['alist']->_loop = true;
?>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'announcement','id'=>$_smarty_tpl->tpl_vars['alist']->value['id']),$_smarty_tpl);?>
">
            <div class="news_in_list">
                
                    <div class="news_in_list_box_left">
                        <h2><?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
</h2>
                        <div class="news_in_list_w65"  style="width:100%;margin-top:2px;">
                            <div class="news_in_list_date" >
                                <span class="news_in_eye_n"><i class="news_in_date"></i><?php echo $_smarty_tpl->tpl_vars['alist']->value['time'];?>
</span></div>
                        </div> </div>
                </div>
        </a>
        <?php } ?> 
		<?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?> 
		<div class="wap_member_no">暂无公告
			<div>
				<a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'announcement'),$_smarty_tpl);?>
">重新搜索</a>
			</div>
		</div>
		 <?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['pagenav']->value) {?> <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
 <?php }?> 
		<?php }?>
</div>
<div class="clear"></div>
<div>
</div>
</section>
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

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
