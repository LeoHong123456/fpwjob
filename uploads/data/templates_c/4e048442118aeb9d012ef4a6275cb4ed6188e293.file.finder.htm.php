<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-09 09:06:12
         compiled from "/www/fpwjob/uploads/app/template/member/user/finder.htm" */ ?>
<?php /*%%SmartyHeaderCode:10569288745dc61104f09016-80535764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e048442118aeb9d012ef4a6275cb4ed6188e293' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/user/finder.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10569288745dc61104f09016-80535764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'syfinder' => 0,
    'config' => 0,
    'finder' => 0,
    'flist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc61104f2db66_60343443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc61104f2db66_60343443')) {function content_5dc61104f2db66_60343443($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
     <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">职位搜索器</span> <i class="member_right_h1_icon user_bg"></i></div>
    
     <div  class="resume_Prompt_box">

      <?php if ($_smarty_tpl->tpl_vars['syfinder']->value>0) {?> 
				<div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>温馨提示：
               共可创建<span class="job_search_box_msg_n"><?php echo $_smarty_tpl->tpl_vars['config']->value['user_finder'];?>
</span>个，还可创建<span class="job_search_box_msg_n"><?php echo $_smarty_tpl->tpl_vars['syfinder']->value;?>
</span>个搜索器 <a href="index.php?c=finder&act=edit" class="finder_btn">新增搜索器</a> 
				</div></div>
				<?php }?>
        <div class="resume_box_list">
         <?php  $_smarty_tpl->tpl_vars['flist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['finder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flist']->key => $_smarty_tpl->tpl_vars['flist']->value) {
$_smarty_tpl->tpl_vars['flist']->_loop = true;
?>

           <div class="job_search_box">
           <div class="job_search_box_left">
          <div class="job_search_box_jobmane"> <a href="<?php echo $_smarty_tpl->tpl_vars['flist']->value['url'];?>
" class="index_Job_Finder_cont_name_a"><?php if ($_smarty_tpl->tpl_vars['flist']->value['name']) {
echo $_smarty_tpl->tpl_vars['flist']->value['name'];
} else { ?>未命名<?php }?></a>
		  </div>
          <div class="job_search_box_tj">搜索条件：<?php echo $_smarty_tpl->tpl_vars['flist']->value['findername'];?>
 </div>
		  <div class="job_search_box_tj">创建时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['flist']->value['addtime'],'%Y-%m-%d %H:%M');?>
 </div>
		
		  </div>
         <div class="job_search_box_right">
		    <div class="job_search_box_bth"><a class="job_search_box_bth_a" title="搜索" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['flist']->value['url'];?>
"><i class="job_search_box_bth_a_icon"></i>搜索</a> </div>
			
			<a href="index.php?c=finder&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['flist']->value['id'];?>
" title="修改" class="cblue">修改</a> 
			<i class="job_search_box_line">|</i> 
                            <a  onclick="layer_del('确定要删除？', 'index.php?c=finder&act=del&id=<?php echo $_smarty_tpl->tpl_vars['flist']->value['id'];?>
');" href="javascript:void(0)" class="cblue">删除</a> </div>

		  </div>

			
                <?php }
if (!$_smarty_tpl->tpl_vars['flist']->_loop) {
?>
        <div class="msg_no">
        <p>您还没有创建搜索器</p>
        <a href="index.php?c=finder&act=edit" class="msg_no_bth">新增搜索器</a> 
        </div>
        
                <?php } ?>
                <div class="job_search_box_cj fltL">
              
                </div>
            </div>
        </div>


        </div>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
