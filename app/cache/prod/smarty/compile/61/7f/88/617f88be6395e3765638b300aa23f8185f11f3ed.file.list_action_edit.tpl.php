<?php /* Smarty version Smarty-3.1.19, created on 2018-03-30 05:41:04
         compiled from "D:\xampp\htdocs\jms_royal\admin217tuwokq\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53175abe06302b6531-80902932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '617f88be6395e3765638b300aa23f8185f11f3ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\admin217tuwokq\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1519628150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53175abe06302b6531-80902932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abe0630317fc0_61504196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abe0630317fc0_61504196')) {function content_5abe0630317fc0_61504196($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
