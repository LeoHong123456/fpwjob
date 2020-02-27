<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-23 23:11:02
         compiled from "/www/fpwjob/uploads/app/template/member/com/news.htm" */ ?>
<?php /*%%SmartyHeaderCode:12835148335e529606ef6957-01205163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731a58d5f0e857169fe6eef92ffb6153690f53a6' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/news.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12835148335e529606ef6957-01205163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'now_url' => 0,
    'rows' => 0,
    'v' => 0,
    'uid' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e529606f3c852_36829973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e529606f3c852_36829973')) {function content_5e529606f3c852_36829973($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class=right_box>
    <div class=admincont_box>
      <div class="com_tit"><span class="com_tit_span">企业资料</span></div>
      <div class="job_list_tit">
        <ul class="">
          <li><a href="index.php?c=info">基本信息</a></li>
          <li><a href="index.php?c=map">企业地图</a></li>
          <li class="job_list_tit_cur"><a href="index.php?c=news">企业新闻</a></li>
          <li><a href="index.php?c=show">企业环境</a></li>
          <li><a href="index.php?c=product">企业产品</a></li>
        </ul>
      </div>
      <div class="com_m_search">
        <input class="com_m_tj"  onclick="location.href='index.php?c=news&act=add'" type="button" value="+ 添加新闻">
        <form action="index.php" method="get">
          <div class="com_m_search_box">
            <input name="c" type="hidden" value="news">
            <input name="keyword" type="text" class="com_m_search_box_text" placeholder="请输入新闻关键字">
            <input name="" type="submit" class="com_m_search_box_bth" value=" ">
          </div>
        </form>
      </div>
      <div class="com_body">
        <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del" method="post" target="supportiframe" id='myform'>
          <div id="job_checkbokid">
          <table class="com_table">
          <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
          <tr>
            <th width="20">&nbsp;</th>
            <th>新闻标题</th>
            <th>添加时间</th>
            <th>状态 </th>
            <th width="200">操作</th>
          </tr>
          <?php }?>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr>
            <td><input class="job_news_input" type=checkbox name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ></td>
            <td><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'newsshow','id'=>'`$uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
            <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],'%Y-%m-%d');?>
 </td>
            <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="0") {?><span class="wate_verify">等待审核</span><?php }?>
              <?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="1") {?> <span class="y_verify">已审核</span><?php }?>
              <?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="2") {?> <span class="n_verify">未通过</span><span class="com_show_b_line">|</span><a class="job_news_reason" href="javascript:;" onclick="show_msg('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">原因</a><?php }?> </td>
            <td><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'newsshow','id'=>$_smarty_tpl->tpl_vars['uid']->value,'nid'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" target="_blank" class=" com_bth cblue">预览</a> <a href="index.php?c=news&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class=" com_bth cblue">修改</a> <a href="javascript:void(0)" class=" com_bth cblue"onclick="layer_del('确定要删除该新闻？','index.php?c=news&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a></td>
          </tr>
          <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
          
          <?php if ($_GET['keyword']!='') {?>
          <tr>
            <td colspan="8" class="table_end"><div class="msg_no">没有搜索相关新闻。</div></td>
          </tr>
          <?php } else { ?>
          <tr>
            <td colspan="8" class="table_end"><div class="com_msg_no">
                <p>亲爱的用户，目前您还没有添加新闻信息</p>
                <p>添加新闻信息有利于宣传企业文化信息</p>
                <a href="index.php?c=news&act=add" class="com_msg_no_bth com_submit">点击添加</a> </div></td>
          </tr>
          <?php }?>
          
          <?php } ?>  
          
          <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
          <tr>
            <td colspan="8" class="table_end"><div class="com_Release_job_bot"> <span class="com_Release_job_qx">
                <input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)'>
                全选</span>
                <input class='c_btn_02' type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
              </div>
              <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></td>
          </tr>
          <?php }?>
        </form>
        </table>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
function show_msg(id){
	$.post("index.php?c=news&act=show",{id:id},function(data){
		if(data){
			data=eval('('+data+')');
			$("#msgs").html(data.statusbody);
			var layindex = $.layer({
				type : 1,
				title :'查看原因', 
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['400px','200px'],
				page : {dom :"#showmsg"}
			});
			$("#layindex").val(layindex);
		}
	});
}
<?php echo '</script'; ?>
>
<div id="showmsg"  style="display:none; width: 400px;">
  <div>
    <div id="infobox">
      <div class="admin_Operating_sh" style="padding:10px; ">
        <div class="admin_Operating_sh_h1" style="padding:5px;">
          <div style="height:80px;overflow:auto;" id="msgs"></div>
        </div>
        <div class="admin_Operating_sub" style="margin-top:10px;"> &nbsp;&nbsp;
          <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="cancel_btn" value='确认'>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
