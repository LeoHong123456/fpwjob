<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-25 18:44:35
         compiled from "/www/fpwjob/uploads/app/template/wap/member/user/invitecont.htm" */ ?>
<?php /*%%SmartyHeaderCode:14074971645e54fa93e879d8-62062590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be524beaa4561947753b1b02cf2a87cc767a19a3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/member/user/invitecont.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14074971645e54fa93e879d8-62062590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e54fa93ed7307_26356139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54fa93ed7307_26356139')) {function content_5e54fa93ed7307_26356139($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main_member_cot_box">
    <div class="wap_member_Receive">
        <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='3') {?>
        <div class="member_invite_c">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'ltjob','id'=>$_smarty_tpl->tpl_vars['info']->value['jobid']),$_smarty_tpl);?>
"><span class="member_c9">职位：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['jobname'];?>
</a>
        </div>
        <div class="member_invite_c"><span class="member_c9">公司：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['fname'];?>
</div>
        <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['type']=='2') {?>
        <div class="member_invite_c">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'ltjob','id'=>$_smarty_tpl->tpl_vars['info']->value['jobid']),$_smarty_tpl);?>
"><span class="member_c9">职位：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['jobname'];?>
</a>
        </div>
        <div class="member_invite_c">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['info']->value['fid']),$_smarty_tpl);?>
"><span class="member_c9">公司：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['fname'];?>
</a>
        </div>
        <?php } else { ?>
        <div class="member_invite_c">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['info']->value['jobid']),$_smarty_tpl);?>
"><span class="member_c9">职位：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['jobname'];?>
</a>
        </div>
        <div class="member_invite_c">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['info']->value['fid']),$_smarty_tpl);?>
"><span class="member_c9">公司：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['fname'];?>
</a>
        </div>
        <?php }?>
        <div class="member_invitecont_list"><span class="member_invitecont_list_s">面试时间：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['intertime'];?>
&nbsp; </div>
        <div class="member_invitecont_list"><span class="member_invitecont_list_s">联&nbsp;系&nbsp; 人：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['linkman'];?>
&nbsp; </div>
        <div class="member_invitecont_list"><span class="member_invitecont_list_s">联系电话：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['linktel'];?>
&nbsp; </div>
        <div class="member_invitecont_list"><span class="member_invitecont_list_s">面试地点：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
&nbsp; </div>
        <?php if ($_smarty_tpl->tpl_vars['info']->value['content']) {?>
        <div class="member_invitecont_list"><span class="member_invitecont_list_s">面试备注：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
&nbsp; </div><?php }?>
        <div class="">
            <?php if ($_smarty_tpl->tpl_vars['info']->value['is_browse']=='4') {?>
            <div class="member_invitecont_list"><span class="member_invitecont_list_s">面试状态：</span>
                <div class="invitecont_linebox_zt">您已拒绝面试</div>
            </div>
            <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=delinvite&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
')" class="member_invitecont_jsc">删除</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['is_browse']=='3') {?>
            <div class="member_invitecont_list"><span class="member_invitecont_list_s">面试状态：</span>
                <div class="invitecont_linebox_zt">您已同意面试</div>
            </div>
            <div class="member_invitecont_cz">
                <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=delinvite&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
')" class="member_invitecont_sc">删除</a>
                <a class="member_invitecont_cz_pl" href="index.php?c=comment&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">我要评价</a>

            </div>
            <?php } else { ?>
            <div class="member_invitecont_newcz">
                <a href="javascript:void(0)" onclick="layer_del('确定要同意面试邀请？','index.php?c=inviteset&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
&browse=3')" class="member_invitecont_newcz_ty">同意面试</a>

                <div class="member_invitecont_newcz_a">
                    <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=delinvite&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
')" class="member_invitecont_sc">删除</a>
                    <a href="javascript:void(0)" onclick="layer_del('您确定要屏蔽该公司并删除该邀请？','index.php?c=invite&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
')" class="member_invitecont_pb">屏蔽企业</a>
                    <a href="javascript:void(0)" onclick="layer_del('确定要拒绝面试邀请？','index.php?c=inviteset&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
&browse=4')" class="member_invitecont_jj ">拒绝面试</a>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
</div>
<!-----------屏蔽企业弹出框-------------------->
<div class="layermbox layermbox0 layermshow" index="2" style="display:none;">
    <div class="laymshade"></div>
    <div class="layermmain">
        <div class="section">
            <div class="layermchild  layermanim">
                <div class="layermcont">您确定要屏蔽该公司并删除该邀请？</div>
                <div class="layermbtn"><span type="0">取消</span><span type="1">确认</span></div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
