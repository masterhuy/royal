<?php /* Smarty version Smarty-3.1.19, created on 2018-04-11 00:41:23
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\checkout\_partials\customer-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238105acd91f32c4ee6-27245670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0644b9076a078973834a46268644d4f0a084afe9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\checkout\\_partials\\customer-form.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '60a38b48f164da78ea3d1cfbfe5d92a352554860' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\customer\\_partials\\customer-form.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238105acd91f32c4ee6-27245670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acd91f33130e9_24938744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acd91f33130e9_24938744')) {function content_5acd91f33130e9_24938744($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0);?>


<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
  <section>
    
      <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
        
  <?php if ($_smarty_tpl->tpl_vars['field']->value['name']==='password'&&$_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
      <p>
        <span class="font-weight-bold"><?php echo smartyTranslate(array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span> <span class="font-italic"><?php echo smartyTranslate(array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <br>
        <span class="text-muted"><?php echo smartyTranslate(array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
      </p>
      
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
  <?php } else { ?>
    
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
  <?php }?>

      <?php } ?>
    
  </section>

  <footer class="form-footer clearfix">
    <input type="hidden" name="submitCreate" value="1">
    
    <button
      class="continue btn btn-primary button-small pull-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

    </button>

  </footer>

</form>
<?php }} ?>
