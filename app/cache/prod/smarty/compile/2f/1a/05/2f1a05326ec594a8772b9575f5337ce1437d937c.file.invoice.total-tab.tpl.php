<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:36:30
         compiled from "D:\xampp\htdocs\jms_royal\pdf\\invoice.total-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191175ac7318e94ded1-78917318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f1a05326ec594a8772b9575f5337ce1437d937c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\pdf\\\\invoice.total-tab.tpl',
      1 => 1519628150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191175ac7318e94ded1-78917318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac7318e983a30_89492377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac7318e983a30_89492377')) {function content_5ac7318e983a30_89492377($_smarty_tpl) {?>
<table id="total-tab" width="100%">

	<tr>
		<td class="grey" width="50%">
			<?php echo smartyTranslate(array('s'=>'Total Products','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white" width="50%">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['products_before_discounts_tax_excl']),$_smarty_tpl);?>

		</td>
	</tr>

	<?php if ($_smarty_tpl->tpl_vars['footer']->value['product_discounts_tax_excl']>0) {?>

		<tr>
			<td class="grey" width="50%">
				<?php echo smartyTranslate(array('s'=>'Total Discounts','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="50%">
				- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['product_discounts_tax_excl']),$_smarty_tpl);?>

			</td>
		</tr>

	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>
	<tr>
		<td class="grey" width="50%">
			<?php echo smartyTranslate(array('s'=>'Shipping Costs','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white" width="50%">
			<?php if ($_smarty_tpl->tpl_vars['footer']->value['shipping_tax_excl']>0) {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['shipping_tax_excl']),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smartyTranslate(array('s'=>'Free Shipping','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

			<?php }?>
		</td>
	</tr>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['footer']->value['wrapping_tax_excl']>0) {?>
		<tr>
			<td class="grey">
				<?php echo smartyTranslate(array('s'=>'Wrapping Costs','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['wrapping_tax_excl']),$_smarty_tpl);?>
</td>
		</tr>
	<?php }?>

	<tr class="bold">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total (Tax excl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_paid_tax_excl']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['footer']->value['total_taxes']>0) {?>
	<tr class="bold">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total Tax','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_taxes']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php }?>
	<tr class="bold big">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_paid_tax_incl']),$_smarty_tpl);?>

		</td>
	</tr>
</table>
<?php }} ?>
