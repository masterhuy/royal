<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 03:12:57
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\modules\jmsajaxsearch\views\templates\hook\jmsajaxsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245995ac71df9585280-27271245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cdfce82a79e28e9e1622b6b418698706a1db638' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\modules\\jmsajaxsearch\\views\\templates\\hook\\jmsajaxsearch.tpl',
      1 => 1522904485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245995ac71df9585280-27271245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jpb_homepage' => 0,
    'link' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac71df95b4096_25563769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac71df95b4096_25563769')) {function content_5ac71df95b4096_25563769($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1) {?>
	<div class="btn-group compact-hidden left jms_ajax_search" id="jms_ajax_search">
		<div class="search-box">
			<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
				
			</a>
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search everything...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl);?>
" class="form-control ajax_search" />
				<button type="submit" name="submit_search" class="button-search">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
img/search.png" alt="">
				</button>
			</form>
			<div id="search_result"></div>
		</div>	
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['jpb_homepage']->value==8) {?>
	<div class="btn-group compact-hidden left jms_ajax_search" id="jms_ajax_search">
		<div class="search-box">
			<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
				
			</a>
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search everything...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl);?>
" class="form-control ajax_search" />
				<button type="submit" name="submit_search" class="button-search">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
img/search.png" alt="">
				</button>
			</form>
			<div id="search_result"></div>
		</div>	
	</div>
	<div class="btn-group compact-hidden right jms_ajax_search" id="jms_ajax_search">
		<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
			<span class="icon-magnifier icons"></span>
		</a>
		<div class="dropdown-menu search-box" role="menu">	
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search everything...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl);?>
" class="form-control ajax_search"  />

				 <button type="submit" name="submit_search" class="button-search pe pe-7s-search">

				</button>
			</form>
			<div id="search_result"></div>
		</div>	
	</div>
<?php } else { ?>
	<div class="btn-group compact-hidden jms_ajax_search" id="jms_ajax_search">
		<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
			<span class="icon-magnifier icons"></span>
		</a>
		<div class="dropdown-menu search-box" role="menu">	
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search everything...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl);?>
" class="form-control ajax_search"  />

				 <button type="submit" name="submit_search" class="button-search pe pe-7s-search">

				</button>
			</form>
			<div id="search_result"></div>
		</div>	
	</div>
<?php }?>
<?php }} ?>
