<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:36:30
         compiled from "D:\xampp\htdocs\jms_royal\pdf\\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253885ac7318e65cfb7-68297598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b536a8c767c146099a12c6921e6578b2d9f97b7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\pdf\\\\footer.tpl',
      1 => 1519628150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253885ac7318e65cfb7-68297598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'available_in_your_account' => 0,
    'shop_address' => 0,
    'shop_phone' => 0,
    'shop_fax' => 0,
    'shop_details' => 0,
    'free_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac7318e6840b4_88840447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac7318e6840b4_88840447')) {function content_5ac7318e6840b4_88840447($_smarty_tpl) {?>
<table style="width: 100%;">
	<tr>
		<td style="text-align: center; font-size: 6pt; color: #444;  width:100%;">
			<?php if ($_smarty_tpl->tpl_vars['available_in_your_account']->value) {?>
				<?php echo smartyTranslate(array('s'=>'An electronic version of this invoice is available in your account. To access it, log in to our website using your e-mail address and password (which you created when placing your first order).','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

				<br />
			<?php }?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['shop_address']->value,'html','UTF-8');?>
<br />

			<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)||!empty($_smarty_tpl->tpl_vars['shop_fax']->value)) {?>
				<?php echo smartyTranslate(array('s'=>'For more assistance, contact Support:','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
<br />
				<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)) {?>
					<?php echo smartyTranslate(array('s'=>'Tel: %s','sprintf'=>array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['shop_phone']->value,'html','UTF-8')),'d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

				<?php }?>

				<?php if (!empty($_smarty_tpl->tpl_vars['shop_fax']->value)) {?>
					<?php echo smartyTranslate(array('s'=>'Fax: %s','sprintf'=>array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['shop_fax']->value,'html','UTF-8')),'d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

				<?php }?>
				<br />
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['shop_details']->value)) {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['shop_details']->value,'html','UTF-8');?>
<br />
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['free_text']->value)) {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['free_text']->value,'html','UTF-8');?>
<br />
			<?php }?>
		</td>
	</tr>
</table>

<?php }} ?>
