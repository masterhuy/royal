<?php /* Smarty version Smarty-3.1.19, created on 2018-04-11 00:25:45
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129455acd8e494ae392-80934255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1522637393,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '129455acd8e494ae392-80934255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jpb_homepage' => 0,
    'logged' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
    'link' => 0,
    'logout_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acd8e495524b0_22347615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acd8e495524b0_22347615')) {function content_5acd8e495524b0_22347615($_smarty_tpl) {?>
<div id="_desktop_user_info">
  <?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==6||$_smarty_tpl->tpl_vars['jpb_homepage']->value==3||$_smarty_tpl->tpl_vars['jpb_homepage']->value==5||$_smarty_tpl->tpl_vars['jpb_homepage']->value==7) {?>
   <div class="user-info btn-group compact-hidden  ">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> 
	  <a  class="account2 btn-xs dropdown-toggle" data-toggle="dropdown" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"  title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" rel="nofollow">    
        
        <span class="hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
 </span>
      </a><ul role="menu" class="dropdown-menu">
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 </a></li>		
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 </a></li>
		
	</ul>
	  <a
        class="btn-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" >
        <?php echo smartyTranslate(array('s'=>'/Log out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </a>
    <?php } else { ?>   
	  <a
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        rel="nofollow"  class="logout2 hidden-sm-down  btn-xs dropdown-toggle" data-toggle="dropdown">

        <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Login / Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
      </a>
	  <ul role="menu" class="dropdown-menu">
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 </a></li>		
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 </a></li>
		</ul> 
    <?php }?>
  </div>
<?php } else { ?>
    <div class="user-info btn-group compact-hidden  ">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> 
	  <a  class="btn-name dropdown-toggle" data-toggle="dropdown" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"  title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" rel="nofollow" target="_blank">      
       <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>

      </a>
	  <a
        class="btn-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" >
        <?php echo smartyTranslate(array('s'=>'/Log out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </a>
	  <ul>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 </a></li>		
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 </a></li>
		
	</ul>
    <?php } else { ?>
     
	 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow">
		<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1) {?>
    <span class="icon-user icons"></span>
        <p class="account">Account</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==2||$_smarty_tpl->tpl_vars['jpb_homepage']->value==4||$_smarty_tpl->tpl_vars['jpb_homepage']->value==8) {?>
    <span>Login</span>
    <?php }?>
    </a>
	  <ul>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 </a></li>		
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
" class="account" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 </a></li>
	  </ul> 
    <?php }?>
  </div>
<?php }?>
</div>
<?php }} ?>
