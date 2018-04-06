<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 03:12:56
         compiled from "module:jmsblog/views/templates/front/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297615ac71df8a82676-61501798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84ae11415e9cebb8b0f593e712edea456efea9d9' => 
    array (
      0 => 'module:jmsblog/views/templates/front/category.tpl',
      1 => 1521426482,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '297615ac71df8a82676-61501798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac71df8a9fb39_69085640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac71df8a9fb39_69085640')) {function content_5ac71df8a9fb39_69085640($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['sidebar']->value=='left') {?> 
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-left-column.tpl", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=='right') {?>
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-right-column.tpl", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=='no') {?>	
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-full-width.tpl", null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("module:jmsblog/views/templates/front/".((string)$_smarty_tpl->tpl_vars['category_layout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
