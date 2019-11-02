<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 17:35:20
         compiled from "/www/fpwjob/uploads/app/template/member/com/sysnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:7443598735dbd4dd8d06070-17141866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268765a949eb955591f2912a43d69d4d2c2f0018' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/sysnews.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7443598735dbd4dd8d06070-17141866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'item' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd4dd8d1a0e7_75107065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd4dd8d1a0e7_75107065')) {function content_5dbd4dd8d1a0e7_75107065($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
  <?php echo '<script'; ?>
 type="text/javascript" language="javascript">
function unselectall(){
	if(document.getElementById('chkAll').checked){
		document.getElementById('chkAll').checked = document.getElementById('chkAll').checked&0;
	}
}
function CheckAll(form){
	for (var i=0;i<form.elements.length;i++){
	var e = form.elements[i];
	if (e.Name != 'chkAll'&&e.disabled==false)
	e.checked = form.chkAll.checked;
	}
}
<?php echo '</script'; ?>
>
  <div class=right_box>
    <div class=admincont_box >
      <div class="com_tit"><span class="com_tit_span">系统消息</span></div>
      <div class="com_body">
        <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form action="index.php?c=sysnews&act=del" name="myform" method="post" target="supportiframe" id='myform'>
          <div class='admin_note2'>
            <table class="com_table">
             <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
              <tr>
               <th>
                <label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)' style=" margin-top:9px;"/></label>
                </th>
                <th>编号</th>
                 <th align="left">内容</th> 
                 <th>时间</th> 
                 <th width="160"> 操作</th> 
              </tr>
              <?php }?>
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
              <tr> 
              <td align="center">
              <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" />
              </td>
              <td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td> 
              <td  <?php if ($_smarty_tpl->tpl_vars['item']->value['remind_status']==0) {?>style="font-weight:bold"<?php }?>><?php echo mb_substr($_smarty_tpl->tpl_vars['item']->value['content'],0,50,'utf-8');?>
</td> 
              <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['ctime'],"%Y-%m-%d %H:%M");?>
</td> 
              <td align="center"> 
			   <a href="javascript:void(0)" onclick="showsys('<?php echo $_smarty_tpl->tpl_vars['item']->value['content_all'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['ctime'],"%Y-%m-%d %H:%M");?>
'); " class=" com_bth cblue"> 查看</a>
              <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=sysnews&act=del&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); " class=" com_bth cblue"> 删除</a> </td> </tr>
              <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
               <tr>
                  <td colspan="5" class="table_end">
              <div class="msg_no">暂无信息！</div>
                </td></tr>
              <?php } ?> 
            <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
             <tr>
                  <td colspan="5" class="table_end">
            <div class="com_Release_job_bot mt20"><span class="com_Release_job_qx">
                    <input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)' class="com_Release_job_qx_check">
                    全选</span>
              <input type="button" name="delsub" class='c_btn_02' value="删除所选" onclick="return really('del[]');"/>
            </div>
            <div class="clear"></div>
            <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
            </td></tr>
            <?php }?> </table>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<div id="show" style="display:none;width:100%;">
	<div class="sys_tm">
	<p><i>时间：</i><span id="systime"></span></p>
	<p><i>内容：</i><span id="sysshow"></span></p>
	</div>
	<div class="sys_bot" style="padding-bottom:20px;">
	<a class="sys_bot_del" href="javascript:void(0)" id="delsys"> 删除</a><a class="sys_bot_qx" href="javascript:void(0)" onclick="window.location.reload();" class="cblue">关闭</a>
	</div>
</div>
<style>.layui-layer-setwin{display:none}</style>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
