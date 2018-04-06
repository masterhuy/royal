<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:31:26
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22495ac7305e4655d0-44113220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4828721d35075589d3ddde59fe7f7e790f0ae672' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22495ac7305e4655d0-44113220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac7305e46f218_58979670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac7305e46f218_58979670')) {function content_5ac7305e46f218_58979670($_smarty_tpl) {?>
<section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
  <h1 class="step-title">
    <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

  </h1>
</section>
<?php }} ?>
