<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 03:06:21
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\modules\jmspagebuilder\views\templates\hook\addonhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104125ac71c6d752b37-25288980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e061dddf676dfdf0265423e1844565c773c54c8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\modules\\jmspagebuilder\\views\\templates\\hook\\addonhtml.tpl',
      1 => 1521426482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104125ac71c6d752b37-25288980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'addon_desc' => 0,
    'html_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac71c6d752b37_72763147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac71c6d752b37_72763147')) {function content_5ac71c6d752b37_72763147($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>
<?php }} ?>
