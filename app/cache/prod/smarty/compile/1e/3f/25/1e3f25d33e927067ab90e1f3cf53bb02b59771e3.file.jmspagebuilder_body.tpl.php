<?php /* Smarty version Smarty-3.1.19, created on 2018-04-11 00:39:32
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\modules\jmspagebuilder\views\templates\hook\jmspagebuilder_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21615acd9184342ec3-25917271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3f25d33e927067ab90e1f3cf53bb02b59771e3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\modules\\jmspagebuilder\\views\\templates\\hook\\jmspagebuilder_body.tpl',
      1 => 1521426482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21615acd9184342ec3-25917271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'root_url' => 0,
    'column' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acd91843910c0_43364383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acd91843910c0_43364383')) {function content_5acd91843910c0_43364383($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<div class="jms-row<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->custom_class)&&$_smarty_tpl->tpl_vars['row']->value->settings->custom_class) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->settings->custom_class,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>style="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>background-image:url('<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->settings->background_img,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
');<?php }?><?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_size)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_size) {?>background-size:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->settings->background_size,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_attachment)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_attachment) {?>background-attachment:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->settings->background_attachment,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_position)&&$_smarty_tpl->tpl_vars['row']->value->settings->background_position) {?>background-position:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['row']->value->settings->background_position,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->fluid)&&$_smarty_tpl->tpl_vars['row']->value->settings->fluid=='0') {?>
			<div class="container">
		<?php } else { ?>
			<div class="container-fluid">
		<?php }?>
		<div class="row">
		<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_smarty_tpl->tpl_vars['cindex'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value->cols; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
 $_smarty_tpl->tpl_vars['cindex']->value = $_smarty_tpl->tpl_vars['column']->key;
?>
			<div class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['column']->value->className,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->custom_class)&&$_smarty_tpl->tpl_vars['column']->value->settings->custom_class) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['column']->value->settings->custom_class,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_img)&&$_smarty_tpl->tpl_vars['column']->value->settings->background_img) {?>background-image:url('<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['column']->value->settings->background_img,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
');<?php }?><?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_size)&&$_smarty_tpl->tpl_vars['column']->value->settings->background_size) {?>background-size:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['column']->value->settings->background_size,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_attachment)&&$_smarty_tpl->tpl_vars['column']->value->settings->background_attachment) {?>background-attachment:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['column']->value->settings->background_attachment,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_position)&&$_smarty_tpl->tpl_vars['column']->value->settings->background_position) {?>background-position:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['column']->value->settings->background_position,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_smarty_tpl->tpl_vars['aindex'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['column']->value->addons; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
 $_smarty_tpl->tpl_vars['aindex']->value = $_smarty_tpl->tpl_vars['addon']->key;
?>
					<div class="addon-box">
						<?php if (isset($_smarty_tpl->tpl_vars['addon']->value->return_value)&&$_smarty_tpl->tpl_vars['addon']->value->return_value) {?><?php echo $_smarty_tpl->tpl_vars['addon']->value->return_value;?>
<?php }?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		</div>
		</div>
	</div>
<?php } ?><?php }} ?>
