<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 03:41:11
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\catalog\_partials\active_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162415ac7249763b7d1-71248697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85320c8d2dfdd9947064b3796edaef32628e5d7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\catalog\\_partials\\active_filters.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162415ac7249763b7d1-71248697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeFilters' => 0,
    'filter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac72497668692_04776139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac72497668692_04776139')) {function content_5ac72497668692_04776139($_smarty_tpl) {?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
  
    <h3 class=" active-filter-title"><?php echo smartyTranslate(array('s'=>'Active filters','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
  

  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
        
          <li class="filter-block">
            <?php echo smartyTranslate(array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl);?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a>
          </li>
        
      <?php } ?>
    </ul>
  <?php }?>
</section>
<?php }} ?>
