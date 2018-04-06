<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 03:12:25
         compiled from "D:\xampp\htdocs\jms_royal\admin217tuwokq\themes\new-theme\template\components\layout\employee_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104115ac71dd9519e68-92975435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039ba916baf674f724510fb88140b66b88df5a09' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\admin217tuwokq\\themes\\new-theme\\template\\components\\layout\\employee_dropdown.tpl',
      1 => 1519628150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104115ac71dd9519e68-92975435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'link' => 0,
    'login_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac71dd9519e63_57621211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac71dd9519e63_57621211')) {function content_5ac71dd9519e63_57621211($_smarty_tpl) {?>
<div class="employee-dropdown dropdown">
  <?php if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
    <div class="rounded-circle person" data-toggle="dropdown">
      <i class="material-icons">person</i>
    </div>
  <?php }?>
  <div class="dropdown-menu dropdown-menu-right">
    <div class="text-xs-center employee_avatar">
      <img class="avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /><br>
      <span><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</span>
    </div>
    <div>
      <a class="employee-link profile-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'),'html','UTF-8');?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee">
        <i class="material-icons">settings_applications</i> <?php echo smartyTranslate(array('s'=>'Your profile'),$_smarty_tpl);?>

      </a>
    </div>
    <div>
      <a class="employee-link" id="header_logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['login_link']->value,'html','UTF-8');?>
&amp;logout">
        <i class="material-icons">power_settings_new</i> <?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>

      </a>
    </div>
  </div>
</div>
<?php }} ?>
