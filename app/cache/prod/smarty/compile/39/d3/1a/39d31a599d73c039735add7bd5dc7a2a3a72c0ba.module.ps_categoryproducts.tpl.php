<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 03:40:58
         compiled from "module:ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157205ac7248ac330e8-51450252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl',
      1 => 1521700904,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '157205ac7248ac330e8-51450252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac7248ac46965_62140007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac7248ac46965_62140007')) {function content_5ac7248ac46965_62140007($_smarty_tpl) {?>
<section class="featured-products clearfix mt-3  addon-title">
  <h3>
    related products
  </h3>
  <div class="products customs-carousel-product">
      <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
          <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

      <?php } ?>
  </div>
</section>
<?php }} ?>
