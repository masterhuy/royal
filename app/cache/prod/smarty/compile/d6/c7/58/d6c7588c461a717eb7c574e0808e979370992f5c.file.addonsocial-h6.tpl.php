<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:08:04
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\modules\jmspagebuilder\views\templates\hook\addonsocial-h6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304885ac72ae4de8662-80040297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c7588c461a717eb7c574e0808e979370992f5c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\modules\\jmspagebuilder\\views\\templates\\hook\\addonsocial-h6.tpl',
      1 => 1522223706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304885ac72ae4de8662-80040297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'linkedin_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'instagram_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac72ae4e98307_33827607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac72ae4e98307_33827607')) {function content_5ac72ae4e98307_33827607($_smarty_tpl) {?>

<div id="social_block">
  <h3 class="title">SOCIALS CHANNEL</h3>
	<ul class="find-us">
    <?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['facebook_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="facebook"><span class="fa fa-facebook"></span>Facebook</a></li><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['twitter_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="twitter"><span class="fa fa-twitter"></span>Twitter</a></li><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['linkedin_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['linkedin_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="linkedin"><span class="fa fa-linkedin"></span>Linkedin</a></li><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['youtube_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="youtube"><span class="fa fa-youtube"></span>Youtube</a></li><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['google_plus_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="gplus"><span class="fa fa-google-plus"></span>Google+</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pinterest_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="pinterest"><span class="fa fa-pinterest"></span>Pinterest</a></li><?php }?>            
		<?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!='') {?><li class="divider"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['instagram_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="instagram"><span class="fa fa-instagram"></span>Instagram</a></li><?php }?>
  </ul>
</div>
<?php }} ?>
