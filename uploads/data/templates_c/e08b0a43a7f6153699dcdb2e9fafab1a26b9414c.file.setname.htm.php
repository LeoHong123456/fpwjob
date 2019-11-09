<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:25:08
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/setname.htm" */ ?>
<?php /*%%SmartyHeaderCode:14716122905dc52664c38f85-78070169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e08b0a43a7f6153699dcdb2e9fafab1a26b9414c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/setname.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14716122905dc52664c38f85-78070169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc52664c4c829_44495342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc52664c4c829_44495342')) {function content_5dc52664c4c829_44495342($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/jobadd.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
    </head>

    <body>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!--内容部分content-->
        <div class="m_content">
            <div class="wrap">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div class="m_inner_youb fr">
                    <div class="m_inner_name">
                        <div class="m_name_left fl">新用户名：</div>
                        <div class="m_name_right fl">
                            <input type="text" class="m_name_text" id="username" name="username" value="">
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="m_inner_name">
                        <div class="m_name_left fl">密码：</div>
                        <div class="m_name_right fl">
                            <input type="password" class="m_name_text" name="password" id="password">
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="m_inner_name">
                        <div class="m_name_left fl">&nbsp;</div>
                        <div class="m_name_right fl">
                            <input type="button" name="submit" class="m_name_button" value=" 修 改 " onclick="Savenamepost();">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--内容结束-->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
