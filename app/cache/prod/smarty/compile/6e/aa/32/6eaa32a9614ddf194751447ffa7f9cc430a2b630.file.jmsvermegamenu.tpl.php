<?php /* Smarty version Smarty-3.1.19, created on 2018-04-11 03:00:18
         compiled from "modules\jmsvermegamenu\views\templates\hook\jmsvermegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229865acdb28273f482-42546328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eaa32a9614ddf194751447ffa7f9cc430a2b630' => 
    array (
      0 => 'modules\\jmsvermegamenu\\views\\templates\\hook\\jmsvermegamenu.tpl',
      1 => 1522306714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229865acdb28273f482-42546328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vermenu_html' => 0,
    'JMSVMM_MOUSEEVENT' => 0,
    'JMSVMM_DURATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acdb282781b14_90620966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acdb282781b14_90620966')) {function content_5acdb282781b14_90620966($_smarty_tpl) {?>

<?php echo $_smarty_tpl->tpl_vars['vermenu_html']->value;?>

<script type="text/javascript">
	var jmvmm_event = '<?php echo $_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value;?>
';
	var jmvmm_duration = <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
;	
</script>
<style type="text/css">
.jms-vermegamenu .dropdown-menu {    
	transition:all <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
ms;
}
</style><?php }} ?>
