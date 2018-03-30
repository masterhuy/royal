<?php /* Smarty version Smarty-3.1.19, created on 2018-03-30 05:39:09
         compiled from "D:\xampp\htdocs\jms_royal\admin217tuwokq\themes\new-theme\template\components\layout\confirmation_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54665abe05bdf22a93-01337160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9082ba4e9a24f870afe34fa103d59a2f6551f2c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\admin217tuwokq\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1519628150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54665abe05bdf22a93-01337160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmations' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abe05bdf2e610_87900658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abe05bdf2e610_87900658')) {function content_5abe05bdf2e610_87900658($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
