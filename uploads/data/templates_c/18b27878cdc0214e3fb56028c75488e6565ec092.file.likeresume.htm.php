<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 17:03:21
         compiled from "/www/fpwjob/uploads/app/template/member/com/likeresume.htm" */ ?>
<?php /*%%SmartyHeaderCode:4688918105dc52f59f261b2-23865874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18b27878cdc0214e3fb56028c75488e6565ec092' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/likeresume.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4688918105dc52f59f261b2-23865874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comstyle' => 0,
    'config' => 0,
    'job' => 0,
    'now_url' => 0,
    'resume' => 0,
    'key' => 0,
    'v' => 0,
    'userclass_name' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc52f5a01e112_76399099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc52f5a01e112_76399099')) {function content_5dc52f5a01e112_76399099($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['comstyle']->value;?>
/images/index_style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type=text/css rel=stylesheet>
<div class=right_box>
  <div class=admincont_box>
   <div class="com_tit"><span class="com_tit_span">“<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
”的匹配简历</span></div>
      <div class="com_body">

    <div class=admin_textbox_04>
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
      <form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
" target="supportiframe" method="post" id='myform'>
        <div class=table>
          <table id="job_checkbokid" cellspacing=1 align=center border=0 class="com_table">
			<tbody>
            <?php if ($_smarty_tpl->tpl_vars['resume']->value) {?>
              <tr align=middle style="height:30px">
                <th scope=col style="width: 8%">姓名/性别</th>
                <th scope=col style="width: 6%">学历/经验</th>
                <th scope=col style="width: 6%">期望职位</th>
                <th scope=col style="width: 6%">期望城市</th>
                <th scope=col style="width: 6%">期望月薪</th>
                <th scope=col style="width: 5%">匹配度</th>
                <th scope=col style="width: 10%">操作</th>
              </tr>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resume']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value<10) {?>

				<tr align=middle  style="height:30px">
					<td style="width: 8%"><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.id`'),$_smarty_tpl);?>
" target=_blank><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</a></td>
					<td style="width: 6%"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value['edu']];?>
/<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value['exp']];?>
</td>
					<td style="width: 6%"><?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>
</td>
					<td style="width: 6%"><?php echo $_smarty_tpl->tpl_vars['v']->value['citys_name'];?>
</td>
					<td style="width: 6%"><?php if ($_smarty_tpl->tpl_vars['v']->value['maxsalary']&&$_smarty_tpl->tpl_vars['v']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['v']->value['maxsalary'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
以上<?php } else { ?>面议<?php }?></td>
					<td style="width: 5%"><?php echo $_smarty_tpl->tpl_vars['v']->value['pre'];?>
%</td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value['yq']!=1) {?>
						<td style="width: 10%"><a href="javascript:;" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" eid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" jobname="<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
" jobid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"  class="sq_resume">邀请面试</a></td>
					<?php } else { ?>
						<td style="width: 10%"><a href="javascript:void(0);">已邀请</a></td>
					<?php }?>
				</tr>
				<?php }?>
            <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
				<tr style="height:30px">
					<td colspan="8"><div class="msg_no">没有合适的简历</div></td>
				</tr>
            <?php } ?>
			</tbody>
            
          </table>
        </div> 
            <div class="diggg mt10 fltR"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>  
          <div class="clear"></div> 
      </form>
    </div>
  </div>
</div>
</div>
</div> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
