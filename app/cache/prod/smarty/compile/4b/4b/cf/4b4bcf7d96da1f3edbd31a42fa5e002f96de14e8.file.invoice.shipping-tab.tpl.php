<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:36:30
         compiled from "D:\xampp\htdocs\jms_royal\pdf\\invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127705ac7318e9af958-71950660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4bcf7d96da1f3edbd31a42fa5e002f96de14e8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\pdf\\\\invoice.shipping-tab.tpl',
      1 => 1519628150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127705ac7318e9af958-71950660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac7318e9b9595_10664546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac7318e9b9595_10664546')) {function content_5ac7318e9b9595_10664546($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
