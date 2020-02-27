<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 09:25:34
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/down_resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:12931359565e4c8e8eba49e3-03681133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbbe669c99686d9690a2ad41e811604b57a4b96' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/down_resume.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12931359565e4c8e8eba49e3-03681133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lietou_style' => 0,
    'list' => 0,
    'v' => 0,
    'com_style' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c8e8ec10d70_61984626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c8e8ec10d70_61984626')) {function content_5e4c8e8ec10d70_61984626($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/jianli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<!--内容部分content-->
<div class="m_content">
  <div class="wrap"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="m_inner_youb fr">
           <div class="lt_m_tit"><span class="lt_m_tit_s">已下载的简历</span></div>
           <div class="lt_m_box">
          <div class="lt_m_table">
          <table>
                <tbody>
   
      <?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
        <tr>          <th width="15">&nbsp;</th >                  
                 <th scope="col" ><span>姓名</span></th>
                  <th scope="col"><span>期望行业</span></th>
                  <th scope="col" ><span>意向职位</span></th>
                  <th scope="col" ><span>工作地点</span></th>
                 <th scope="col" ><span>  更新时间</span></th>
                  <th scope="col">操作</th>
                </tr>
        <?php }?>
          <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <form action="index.php?c=down_resume&act=del" target="supportiframe" method="post" id='myform'>
      
        <?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr>                   
          <td width="15"> <input type="checkbox" name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="m_cont_check"></td >         
                 <td>
              <a class="m_name" target="_blank" href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['eid'],'type'=>2),$_smarty_tpl);?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,8,"utf-8");
if ($_smarty_tpl->tpl_vars['v']->value['height_status']==2) {?><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/yun_gj.png" title="高级简历"><?php }?> </a></td>
                 <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['hy'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['joblist'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['citylist'];?>
</td>
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['lastupdate'],"%Y-%m-%d");?>
</td>
               <td  align="center"><a  onclick="layer_del('确定要删除？', 'index.php?c=down_resume&act=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" href="javascript:void(0)" class="cont_del">删除</a></td>
                </tr>
         
          <?php } ?>
          <?php } else { ?>
         <tr>
                    <td colspan="7" class="lt_m_table_end">   <div class="member_no_content">你还没有下载的简历<div class="lt_src"><a href="index.php?c=search_resume">主动搜索人才</a></div></div></td>
                </tr>
          <?php }?>
        
         <?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
         
        <tr>
                    <td colspan="7" class="lt_m_table_end">  <div class="m_browse_del m_browse_del01">
        <input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)' class="m_del_che">
          全选<a href="javascript:void(0);" onclick="return really('delid[]');">批量删除</a> </div>
        <div class="clear"></div>
        <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></td>
                </tr>
        <?php }?>
        </form>
               </tbody></table>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="clear"></div>
</div>
<!--内容结束--> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
