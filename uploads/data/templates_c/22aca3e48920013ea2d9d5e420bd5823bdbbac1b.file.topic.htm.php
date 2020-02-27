<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-26 21:25:12
         compiled from "/www/fpwjob/uploads/app/template/ask/topic.htm" */ ?>
<?php /*%%SmartyHeaderCode:21110665175e5671b861e863-66905073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22aca3e48920013ea2d9d5e420bd5823bdbbac1b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/ask/topic.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21110665175e5671b861e863-66905073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'qclasslist' => 0,
    'config' => 0,
    'qlist' => 0,
    'uid' => 0,
    'recom' => 0,
    'rlist' => 0,
    'ask_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5671b8775069_30006576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5671b8775069_30006576')) {function content_5e5671b8775069_30006576($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['askstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="content">
    <div class="ask_navcur">当前位置：首页 > 话题</div>

    <div class="left_cen">
        <div class="ask_tit mt15" style="padding-bottom:0px;"><span class="ask_tit_icon_s"><i class="ask_tit_icon"></i>话题广场</span></div>
        <div class="hot_tagfl_con" style="padding-bottom:0px;">
            <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'topic'),$_smarty_tpl);?>
" <?php if (($_GET['pid']<1)) {?>class="cur" <?php }?>>全部话题</a>
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
            <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'topic','pid'=>'`$qclasslist.id`'),$_smarty_tpl);?>
" <?php if (($_GET['pid']==$_smarty_tpl->tpl_vars['qclasslist']->value['id'])) {?>class="cur" <?php }?>><?php echo $_smarty_tpl->tpl_vars['qclasslist']->value['name'];?>
</a>
            <?php } ?>
        </div>
        <?php  $_smarty_tpl->tpl_vars['qlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("classid"=>"\'auto.pid\'","order"=>"\'atn\'","item"=>"\'qlist\'","name"=>"\'qlist_one\'","nocache"=>"")
;');$qlist_one=array();
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

		$where=1;
		include(PLUS_PATH.'/ask.cache.php');

		//没有传输问答类别ID 则默认取第一个
		/*if(!$paramer[classid])
		{
			$paramer[classid] = $ask_index[0];
		}*/
		//按统计排序获取相关数据
		if(is_array($ask_type[$paramer[classid]]) && !empty($ask_type[$paramer[classid]]))
		{ 
			$Count = $ask_type[$paramer[classid]]; 
		}else{
			$aList = $db->select_all("q_class","`pid` IN (".@implode(',',$ask_index).")","id");
			foreach($aList as $v){
				$aid[] =$v[id]; 
			} 
			$Count = $aid; 
		}
		if(is_array($Count)){ 
			if($_COOKIE['uid']){$atn=$db->DB_select_once("attention","`uid`='".$_COOKIE['uid']."' and `type`='2'","`ids`");} 
			$ids=@explode(',',$atn['ids']);
			foreach($Count as $value){
				$QclassInfo=array();
				if(in_array($value,$ids)){
					$QclassInfo['isatn']='1';
				}
				$QclassInfo['id'] = $value;
				$QclassInfo['name'] = $ask_name[$value];
				$QclassInfo['pic'] = $ask_pic[$value];
				$QclassInfo['atnnum'] = $ask_atnnum[$value];
				$QclassInfo['qusnum'] = $ask_qusnum[$value];
				$QclassInfo['intro'] = strip_tags($ask_intro[$value]);
				$QclassInfo['list'] = $QusList[$value];				
				$qlist_one[] = $QclassInfo;
			}
			
		}
		$qlist_one = $qlist_one; if (!is_array($qlist_one) && !is_object($qlist_one)) { settype($qlist_one, 'array');}
foreach ($qlist_one as $_smarty_tpl->tpl_vars['qlist']->key => $_smarty_tpl->tpl_vars['qlist']->value) {
$_smarty_tpl->tpl_vars['qlist']->_loop = true;
?>
        <dl class="toppic_leftlist">
            <dt><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['qlist']->value['pic'];?>
" /></dt>
            <dd>
                <div class="toppic_name">
                    <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'search','cid'=>'`$qlist.id`'),$_smarty_tpl);?>
" class="toppic_name_a"><?php echo $_smarty_tpl->tpl_vars['qlist']->value['name'];?>
</a>
                    <!-- <span class="att q<?php echo $_smarty_tpl->tpl_vars['qlist']->value['id'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['qlist']->value['isatn']=='1') {?>				
								<a href="javascript:void(0)" onclick="attention('<?php echo $_smarty_tpl->tpl_vars['qlist']->value['id'];?>
','2','<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'attention'),$_smarty_tpl);?>
');" class="watch_qxgz" title="取消关注">取消关注</a>
							<?php } else { ?>
                         	   <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
								<a href="javascript:void(0)" class="watch_gz" onclick="attention('<?php echo $_smarty_tpl->tpl_vars['qlist']->value['id'];?>
','2','<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'attention'),$_smarty_tpl);?>
');">+  关注</a>
                                <?php } else { ?>
                                <a href="javascript:void(0)"  onclick="showlogin('');" class='watch_gz'>+  关注</a>
                                <?php }?>
							<?php }?>  </span>--></div>
                <div class="toppic_p"><?php echo mb_substr($_smarty_tpl->tpl_vars['qlist']->value['intro'],0,80,'utf-8');?>
</div>
            </dd>
        </dl>

        <?php } ?>

    </div>
    <div class="ask_index_right">

        <div class="ask_tw" style="margin-top:0px;">
            <div class="ask_tw_t">职场问答</div>
            <div class="ask_tw_p">给你职场领域最专业的帮助</div>

            <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
            <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'addquestion'),$_smarty_tpl);?>
" target="_blank" class="ask_tw_btn">+ 我要提问</a>
            <?php } else { ?>
            <a href="javascript:void(0);" onclick="showlogin('');" class="ask_tw_btn">+ 我要提问</a>
            <?php }?>

        </div>

        <div class="ask_index_right_box">
            <div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">话题达人</span></div>
            <div style="padding-top:10px;">
                <?php  $_smarty_tpl->tpl_vars['rlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rlist']->key => $_smarty_tpl->tpl_vars['rlist']->value) {
$_smarty_tpl->tpl_vars['rlist']->_loop = true;
?>
                <div class="hot_userdet">
                    <div class="user_det1">
                        <div class="user_mes">
                            <div class="user_pho">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);" />
                            </div>
                            <div class="user_name">
                                <p>
                                    <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$rlist.uid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['nickname'];?>
</a>
                                </p>
                                <span>回答总数：<font><?php echo $_smarty_tpl->tpl_vars['rlist']->value['num'];?>
</font> 被赞同总数：<font><?php echo $_smarty_tpl->tpl_vars['rlist']->value['support'];?>
</font></span>

                            </div>
                        </div>

                    </div>
                </div>
                <?php }
if (!$_smarty_tpl->tpl_vars['rlist']->_loop) {
?>
                <div class="ask_r_no fl">暂无数据！</div>
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
