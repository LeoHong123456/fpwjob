<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:36:49
         compiled from "/www/fpwjob/uploads//app/template/default/backtop.htm" */ ?>
<?php /*%%SmartyHeaderCode:12110875155dc51b11a044f9-37280251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6af9f297fd3b9bcfbc01e41a257f1198d2bc762' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/default/backtop.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12110875155dc51b11a044f9-37280251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51b11a06b99_45964443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51b11a06b99_45964443')) {function content_5dc51b11a06b99_45964443($_smarty_tpl) {?><?php echo '<script'; ?>
>
	function goTopEx(){
        var obj=document.getElementById("goTopBtn");
        function getScrollTop(){
                return document.documentElement.scrollTop;
            }
        function setScrollTop(value){
                document.documentElement.scrollTop=value;
            }    
        window.onscroll=function(){getScrollTop()>0?obj.style.display="":obj.style.display="none";}
        obj.onclick=function(){
            var goTop=setInterval(scrollMove,10);
            function scrollMove(){
                    setScrollTop(getScrollTop()/1.1);
                    if(getScrollTop()<1)clearInterval(goTop);
                }
        }
    }
<?php echo '</script'; ?>
>
<div class="clear"></div>
<div id="goTopBtn" class="png none" ><img  border=0 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/lanren_top.png" class="png"></div>
<?php echo '<script'; ?>
 type=text/javascript>goTopEx();<?php echo '</script'; ?>
>
<style>
#goTopBtn {
	POSITION: fixed; 
	TEXT-ALIGN: center; 
	WIDTH: 47px; 
	BOTTOM:3px; 
	HEIGHT: 78px; 
	FONT-SIZE: 12px; 
	CURSOR: pointer; 
	RIGHT:  40px; 
	_position: absolute; 
	_right: 40;
	_position:absolute;
	_bottom:auto;
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||15)-(parseInt(this.currentStyle.marginBottom,10)||15)));
	_background:url(<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/lanren_top.png) no-repeat
}
*html{
background-image:url(about:blank);
background-attachment:fixed;
}
</style><?php }} ?>
