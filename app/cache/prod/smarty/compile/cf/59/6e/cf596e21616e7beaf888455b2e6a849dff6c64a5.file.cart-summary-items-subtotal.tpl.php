<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:31:19
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\checkout\_partials\cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258895ac7305742e508-09660947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf596e21616e7beaf888455b2e6a849dff6c64a5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258895ac7305742e508-09660947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac73057438146_82633867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac73057438146_82633867')) {function content_5ac73057438146_82633867($_smarty_tpl) {?>
<div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
  <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php }} ?>
