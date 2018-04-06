<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 03:13:42
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\modules\jmspagebuilder\views\templates\hook\addoncountdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305715ac71e263d4728-22686864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f37625abf4580aba4945a125728c849b51beadfd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncountdown.tpl',
      1 => 1521797734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305715ac71e263d4728-22686864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'box_class' => 0,
    'image' => 0,
    'root_url' => 0,
    'html_content' => 0,
    'expire_time' => 0,
    'button_text' => 0,
    'button_link' => 0,
    'target' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac71e263fb822_47959455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac71e263fb822_47959455')) {function content_5ac71e263fb822_47959455($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>	
<div class="addon-title">
<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>
<div class="countdown-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> addon-title">
<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>	
	<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />	
<?php }?>
<div class="content">
	<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

	<?php }?>
	<div class="countdown">
		<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['expire_time']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
		<a href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_link']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value=='new window') {?> target="_blank"<?php }?> class="btn-default btn-shopnow btn-effect"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_text']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

		</a>
	<?php }?>
</div>
</div>	<?php }} ?>
