<?php /* Smarty version Smarty-3.1.19, created on 2018-04-11 00:25:45
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\modules\jmsmegamenu\views\templates\hook\jmsmegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47555acd8e49e7a238-99607105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da7c8517a01500e866b172950ccd243f36e98fec' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\modules\\jmsmegamenu\\views\\templates\\hook\\jmsmegamenu.tpl',
      1 => 1521426482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47555acd8e49e7a238-99607105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_html' => 0,
    'JMSMM_MOUSEEVENT' => 0,
    'JMSMM_DURATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acd8e49e91937_05454823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acd8e49e91937_05454823')) {function content_5acd8e49e91937_05454823($_smarty_tpl) {?>

<div class="jms-megamenu-wrap">
	<a id="open-button" class="open-button hidden-lg hidden-md" href="#"></a>
    <span class="text_menu"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'jmsmegamenu'),$_smarty_tpl);?>
</span><span class="pe pe-7s-close"></span>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu_html']->value,'');?>

</div>
<script type="text/javascript">
	var jmmm_event = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_MOUSEEVENT']->value, ENT_QUOTES, 'UTF-8');?>
';
	var jmmm_duration = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_DURATION']->value, ENT_QUOTES, 'UTF-8');?>
;	
</script><?php }} ?>
