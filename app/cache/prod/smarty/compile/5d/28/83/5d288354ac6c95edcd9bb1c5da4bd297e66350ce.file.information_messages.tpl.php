<?php /* Smarty version Smarty-3.1.19, created on 2018-03-30 05:39:09
         compiled from "D:\xampp\htdocs\jms_royal\admin217tuwokq\themes\new-theme\template\components\layout\information_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125495abe05bdf0b399-73948726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d288354ac6c95edcd9bb1c5da4bd297e66350ce' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\admin217tuwokq\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1519628150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125495abe05bdf0b399-73948726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informations' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abe05bdf16f17_96259196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abe05bdf16f17_96259196')) {function content_5abe05bdf16f17_96259196($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
