<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:24:29
         compiled from "/www/fpwjob/uploads//app/template/ask/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:10262954575e2e3bcd5b5658-31479285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aab060e4cb1b620e71a572fc3dfd79b354711a5' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/ask/footer.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10262954575e2e3bcd5b5658-31479285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3bcd5bc3c4_45757005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3bcd5bc3c4_45757005')) {function content_5e2e3bcd5bc3c4_45757005($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><div id="formsg" class="none" style="width: 350px; ">   
	<form action="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'save'),$_smarty_tpl);?>
" target="supportiframe" method="post" id="formstatus">
		<table cellspacing='2' cellpadding='3' width='330px' align="center"> 
          <tr> 
            <td align="left"><textarea id="statusbody"  name="content" class="ask_textarea_tw"></textarea></td>
          </tr>
          <tr style="text-align:center;margin-top:10px">
            <td ><input type="submit" name='submit' value='确认' class="submit_btn">
              &nbsp;&nbsp;
              <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></td>
          </tr>
        </table> 
        <input name="uid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
" type="hidden">
	</form> 
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
