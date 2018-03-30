<?php /* Smarty version Smarty-3.1.19, created on 2018-03-30 05:58:32
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\modules\jmspagebuilder\views\templates\hook\addoninstagram.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256715abe0a480f8c20-53643224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a88aabcb9fbc4f713ab33dff005e6c174478355' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram.tpl',
      1 => 1521539781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256715abe0a480f8c20-53643224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'insta_images' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abe0a48108634_75226243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abe0a48108634_75226243')) {function content_5abe0a48108634_75226243($_smarty_tpl) {?>
<div class="addon-title">
	<h3>
		<?php echo smartyTranslate(array('s'=>'INSTAGRAM RECENT','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

	</h3>
</div>
<div class="instagram-images">
	<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['insta_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
		<a class="grouped_elements" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" alt="<?php echo smartyTranslate(array('s'=>'Instagram Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
"/>
		</a>
	<?php } ?>
</div>
<?php }} ?>
