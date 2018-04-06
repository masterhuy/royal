<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\customer\order-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22585ac73166bd37b9-00365643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1482c2ccfc0d23824dd2d052ae29c42f05c0d9b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\customer\\order-detail.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    'b6c51d73855e9affa87c3fe4da0cb94b71d78c11' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\customer\\page.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '4812c52255cb94b8c73e683ebb322caec52f495c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\page.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    'd415abef144f42da5033e8c9909b645ef85508b3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\layouts\\layout-full-width.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '0a341e30eb0e44da04e387842adc850f753be296' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '36e77a81e09cd2355260abe3413d08134452629d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\_partials\\stylesheets.tpl',
      1 => 1521535250,
      2 => 'file',
    ),
    'db90ab50833a2808a6fce6e81e8a5eea29798a27' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\_partials\\javascript.tpl',
      1 => 1522915320,
      2 => 'file',
    ),
    'c65b84717c32735bafdfd16145d4c4cdee3166d8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\_partials\\head.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '06b8562f6332acb944b4587a38436e3d751c8b66' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '16180ff6ef8469127d1d3496c5d2ba898b8511fe' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\_partials\\header.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    'c0f2784640bed33ad25ae73dbd1fbd0f6bce0cc4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\_partials\\breadcrumb.tpl',
      1 => 1521429234,
      2 => 'file',
    ),
    '24a3485ecde802b19f754f50f80549cea888766d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\_partials\\notifications.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '5700375c4797f293c091eb40b7c5cf102c3f4a54' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\customer\\_partials\\order-detail-return.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '215a012b10aa9bdc0f54634836678f23de3e9292' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\customer\\_partials\\order-detail-no-return.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    '6d8ec089e6733cb308243f77c7f43edf13e4d0f8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\customer\\_partials\\order-messages.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
    'a124dd58e12e48d94c49b40aa04c73e06118ac0a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_royal\\themes\\jms_royal\\templates\\_partials\\footer.tpl',
      1 => 1521426483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22585ac73166bd37b9-00365643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'jpb_homeclass' => 0,
    'jpb_rtl' => 0,
    'jpb_loadingstyle' => 0,
    'jpb_mobilemenu' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac731671251c6_09801412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac731671251c6_09801412')) {function content_5ac731671251c6_09801412($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac73166c6fbb6_94541014($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['jpb_homeclass']->value)&&$_smarty_tpl->tpl_vars['jpb_homeclass']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_homeclass']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value) {?>
		<div class="preloader">
			<div class="spinner<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value, ENT_QUOTES, 'UTF-8');?>
">
				<div class="dot1"></div>
				<div class="dot2"></div>
			    <div class="bounce1"></div>
			    <div class="bounce2"></div>
			    <div class="bounce3"></div>
			</div>
		</div>
	<?php }?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['jpb_mobilemenu']->value) {?>
		<div class="menu-wrap hidden-lg hidden-md">
			<button id="close-button" class="close-button"> <?php echo smartyTranslate(array('s'=>'Menu','d'=>'Shop.Theme'),$_smarty_tpl);?>
</button>
				<nav id="off-canvas-menu">					
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

				</nav>				
				
			</div>
	<?php }?>
    <div class="main-site">
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac73166d0bfb8_41445285($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac73166d0bfb4_33773203($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
      
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
			
			   <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac73166d330b9_40969288($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
			
		<?php }?>
        <div id="wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>class="container"<?php }?>> 
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
		<div class="row">
		<?php }?>
          

          
  <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!="index") {?>class="col-lg-12 col-md-12 col-sm-12 col-xs-12"<?php }?>>
    

  <section id="main">
	
    
      <section id="content" class="page-content card card-block row">
        
  
    <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac73166d812b1_52621580($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
  

        
  
    <div id="order-infos">
      <div class="box">
          <div class="row">
            <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>9<?php } else { ?>12<?php }?> col-xs-12">
              <strong>
                <?php echo smartyTranslate(array('s'=>'Order Reference %reference% - placed on %date%','d'=>'Shop.Theme.CustomerAccount','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'],'%date%'=>$_smarty_tpl->tpl_vars['order']->value['details']['order_date'])),$_smarty_tpl);?>

              </strong>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
              <div class="col-md-3 text-xs-right col-xs-12">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
" class="btn-default btn-effect"><?php echo smartyTranslate(array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
              </div>
            <?php }?>
            <div class="clearfix"></div>
          </div>
      </div>

      <div class="box">
          <ul>
            <li><strong><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['name'], ENT_QUOTES, 'UTF-8');?>
</li>
            <li><strong><?php echo smartyTranslate(array('s'=>'Payment method','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['payment'], ENT_QUOTES, 'UTF-8');?>
</li>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
              <li>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo smartyTranslate(array('s'=>'Download your invoice as a PDF file.','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['recyclable']) {?>
              <li>
                <?php echo smartyTranslate(array('s'=>'You have given permission to receive your order in recycled packaging.','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

              </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['gift_message']) {?>
              <li><?php echo smartyTranslate(array('s'=>'You have requested gift wrapping for this order.','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</li>
              <li><?php echo smartyTranslate(array('s'=>'Message','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['details']['gift_message'];?>
</li>
            <?php }?>
          </ul>
      </div>
    </div>
  

  
    <section id="order-history" class="box">
      <h3><?php echo smartyTranslate(array('s'=>'Follow your order\'s status step-by-step','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</h3>
      <table class="table table-striped table-bordered table-labeled hidden-xs-down">
        <thead class="thead-default">
          <tr>
            <th><?php echo smartyTranslate(array('s'=>'Date','d'=>'Shop.Theme'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Status','d'=>'Shop.Theme'),$_smarty_tpl);?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
            <tr>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['history_date'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td>
                <span class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['contrast'], ENT_QUOTES, 'UTF-8');?>
" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="hidden-sm-up history-lines">
        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
          <div class="history-line">
            <div class="date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['history_date'], ENT_QUOTES, 'UTF-8');?>
</div>
            <div class="state">
              <span class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['contrast'], ENT_QUOTES, 'UTF-8');?>
" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'UTF-8');?>

              </span>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
  

  <?php if ($_smarty_tpl->tpl_vars['order']->value['follow_up']) {?>
    <div class="box">
      <p><?php echo smartyTranslate(array('s'=>'Click the following link to track the delivery of your order','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</p>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['follow_up'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['follow_up'], ENT_QUOTES, 'UTF-8');?>
</a>
    </div>
  <?php }?>

  
    <div class="addresses">
      <?php if ($_smarty_tpl->tpl_vars['order']->value['addresses']['delivery']) {?>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <article id="delivery-address" class="box">
            <h4><?php echo smartyTranslate(array('s'=>'Delivery address %alias%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%alias%'=>$_smarty_tpl->tpl_vars['order']->value['addresses']['delivery']['alias'])),$_smarty_tpl);?>
</h4>
            <address><?php echo $_smarty_tpl->tpl_vars['order']->value['addresses']['delivery']['formatted'];?>
</address>
          </article>
        </div>
      <?php }?>

      <div class="col-lg-6 col-md-6 col-sm-6">
        <article id="invoice-address" class="box">
          <h4><?php echo smartyTranslate(array('s'=>'Invoice address %alias%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%alias%'=>$_smarty_tpl->tpl_vars['order']->value['addresses']['invoice']['alias'])),$_smarty_tpl);?>
</h4>
          <address><?php echo $_smarty_tpl->tpl_vars['order']->value['addresses']['invoice']['formatted'];?>
</address>
        </article>
      </div>
      <div class="clearfix"></div>
    </div>
  

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['HOOK_DISPLAYORDERDETAIL']->value, ENT_QUOTES, 'UTF-8');?>


  
    <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['is_returnable']) {?>
      <?php /*  Call merged included template "customer/_partials/order-detail-return.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/order-detail-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac73166df65b0_82550194($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/order-detail-return.tpl" */?>
    <?php } else { ?>
      <?php /*  Call merged included template "customer/_partials/order-detail-no-return.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/order-detail-no-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac73166eb9ac5_69053133($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/order-detail-no-return.tpl" */?>
    <?php }?>
  

  
    <?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']) {?>
      <div class="box-last">
        <table class="table table-striped table-bordered hidden-sm-down">
          <thead class="thead-default">
            <tr>
              <th><?php echo smartyTranslate(array('s'=>'Date','d'=>'Shop.Theme'),$_smarty_tpl);?>
</th>
              <th><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
              <th><?php echo smartyTranslate(array('s'=>'Weight','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
              <th><?php echo smartyTranslate(array('s'=>'Shipping cost','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
              <th><?php echo smartyTranslate(array('s'=>'Tracking number','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
              <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_date'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['carrier_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_weight'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_cost'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['tracking'], ENT_QUOTES, 'UTF-8');?>
</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <div class="hidden-md-up shipping-lines">
          <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
            <div class="shipping-line">
              <ul>
                <li>
                  <strong><?php echo smartyTranslate(array('s'=>'Date','d'=>'Shop.Theme'),$_smarty_tpl);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_date'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <li>
                  <strong><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['carrier_name'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <li>
                  <strong><?php echo smartyTranslate(array('s'=>'Weight','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_weight'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <li>
                  <strong><?php echo smartyTranslate(array('s'=>'Shipping cost','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_cost'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <li>
                  <strong><?php echo smartyTranslate(array('s'=>'Tracking number','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['tracking'], ENT_QUOTES, 'UTF-8');?>

                </li>
              </ul>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php }?>
  

  
    <?php /*  Call merged included template "customer/_partials/order-messages.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/order-messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac73167013ac9_86967020($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/order-messages.tpl" */?>
  

      </section>
    

    
     
    

  </section>


  </div>


          
			
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
		</div>
		<?php }?>
      </div>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '22585ac73166bd37b9-00365643');
content_5ac731671251c5_18488117($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </div>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '22585ac73166bd37b9-00365643');
content_5ac73166cbddb8_57041981($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='cms') {?>		 
		 <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv9p77jYCRrlLa3xx1hwemtEjUyH3YcZo&callback=initMap">
        </script>
		<?php }?>
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\_partials\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166c6fbb6_94541014')) {function content_5ac73166c6fbb6_94541014($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">

  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '22585ac73166bd37b9-00365643');
content_5ac73166c96cb8_12107975($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '22585ac73166bd37b9-00365643');
content_5ac73166cbddb8_57041981($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\_partials\stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166c96cb8_12107975')) {function content_5ac73166c96cb8_12107975($_smarty_tpl) {?>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
/css/neueeinstellung/neueeinstellung.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
/css/simple-line-icons.css" />
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\_partials\javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166cbddb8_57041981')) {function content_5ac73166cbddb8_57041981($_smarty_tpl) {?>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa-7rjIFsM7jSLL6n02aAqC0mZRVh7ZIY &callback=initMap"
  type="text/javascript"></script>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==8) {?>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['themename']->value, ENT_QUOTES, 'UTF-8');?>
/assets/js/jquery.multiscroll.extensions.min.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['themename']->value, ENT_QUOTES, 'UTF-8');?>
/assets/js/jquery.multiscroll.js"></script>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\catalog\_partials\product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166d0bfb8_41445285')) {function content_5ac73166d0bfb8_41445285($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\_partials\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166d0bfb4_33773203')) {function content_5ac73166d0bfb4_33773203($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\_partials\breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166d330b9_40969288')) {function content_5ac73166d330b9_40969288($_smarty_tpl) {?>
 <div class="breadcrumb">
<div class="breadcrumb-box container">
<span class="title_meta"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</span>
	<div data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb-inner hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
           <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
      </li>
    <?php } ?>
  </ol>
</div>
</div>
</div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\_partials\notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166d812b1_52621580')) {function content_5ac73166d812b1_52621580($_smarty_tpl) {?>

<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <article class="alert alert-danger" role="alert" data-alert="danger">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <article class="alert alert-warning" role="alert" data-alert="warning">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <article class="alert alert-success" role="alert" data-alert="success">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <article class="alert alert-info" role="alert" data-alert="info">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>
  </div>
</aside>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\customer\_partials\order-detail-return.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166df65b0_82550194')) {function content_5ac73166df65b0_82550194($_smarty_tpl) {?>
<form id="order-return-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow'], ENT_QUOTES, 'UTF-8');?>
" method="post">

<div class="box hidden-sm-down">
  <table id="order-products" class="table table-bordered return">
    <thead class="thead-default">
      <tr>
        <th class="head-checkbox"><input type="checkbox"/></th>
        <th><?php echo smartyTranslate(array('s'=>'Product','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        <th><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        <th><?php echo smartyTranslate(array('s'=>'Returned','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</th>
        <th><?php echo smartyTranslate(array('s'=>'Unit price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        <th><?php echo smartyTranslate(array('s'=>'Total price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
      </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
      <tr>
        <td>
          <?php if (!$_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
            <span id="_desktop_product_line_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
">
              <input type="checkbox" id="cb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
" name="ids_order_detail[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
">
            </span>
          <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
              <span id="_desktop_product_customization_line_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
">
                <input type="checkbox" id="cb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
" name="customization_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
">
              </span>
            <?php } ?>
          <?php }?>
        </td>
        <td>
          <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong><br/>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
            <?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
<br/>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
            <?php  $_smarty_tpl->tpl_vars["customization"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["customization"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["customization"]->key => $_smarty_tpl->tpl_vars["customization"]->value) {
$_smarty_tpl->tpl_vars["customization"]->_loop = true;
?>
              <div class="customization">
                <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
              </div>
              <div id="_desktop_product_customization_modal_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h4>
                      </div>
                      <div class="modal-body">
                        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                          <div class="product-customization-line row">
                            <div class="col-sm-3 col-xs-4 label">
                              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                            <div class="col-sm-9 col-xs-8 value">
                              <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                                <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                  <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                <?php } else { ?>
                                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                              <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                              <?php }?>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          <?php }?>
        </td>
        <td class="qty">
          <?php if (!$_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
            <div class="current">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>$_smarty_tpl->tpl_vars['product']->value['qty_returned']) {?>
              <div class="select" id="_desktop_return_qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
">
                <select name="order_qte_input[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
]" class="form-control form-control-select">
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['name'] = 'quantity';
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['product']->value['quantity']+1-$_smarty_tpl->tpl_vars['product']->value['qty_returned']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total']);
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['quantity']['index'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['quantity']['index'], ENT_QUOTES, 'UTF-8');?>
</option>
                  <?php endfor; endif; ?>
                </select>
              </div>
            <?php }?>
          <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
               <div class="current">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

              </div>
              <div class="select" id="_desktop_return_qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
">
                <select
                  name="customization_qty_input[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
]"
                  class="form-control form-control-select"
                >
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['name'] = 'quantity';
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['customization']->value['quantity']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total']);
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['quantity']['index'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['quantity']['index'], ENT_QUOTES, 'UTF-8');?>
</option>
                  <?php endfor; endif; ?>
                </select>
              </div>
            <?php } ?>
            <div class="clearfix"></div>
          <?php }?>
        </td>
        <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_returned'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
    <?php } ?>
    <tfoot>
      <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['line']->value['value']) {?>
          <tr class="text-xs-right line-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
            <td colspan="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['label'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['value'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
        <?php }?>
      <?php } ?>
      <tr class="text-xs-right line-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['type'], ENT_QUOTES, 'UTF-8');?>
">
        <td colspan="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
    </tfoot>
  </table>
</div>

<div class="order-items hidden-md-up box">
  <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <div class="order-item">
      <div class="row">
        <div class="checkbox">
          <?php if (!$_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
            <span id="_mobile_product_line_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
"></span>
          <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
              <span id="_mobile_product_customization_line_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"></span>
            <?php } ?>
          <?php }?>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-sm-5 desc">
              <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                <div class="ref"><?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                  <div class="customization">
                    <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
                  </div>
                  <div id="_mobile_product_customization_modal_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
">
                  </div>
                <?php } ?>
              <?php }?>
            </div>
            <div class="col-sm-7 qty">
              <div class="row">
                <div class="col-xs-4 text-sm-left text-xs-left">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                </div>
                <div class="col-xs-4">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                    <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                      <div class="q"><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</div>
                      <div class="s" id="_mobile_return_qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"></div>
                    <?php } ?>
                  <?php } else { ?>
                    <div class="q"><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>$_smarty_tpl->tpl_vars['product']->value['qty_returned']) {?>
                      <div class="s" id="_mobile_return_qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'UTF-8');?>
"></div>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['qty_returned']>0) {?>
                    <div><?php echo smartyTranslate(array('s'=>'Returned','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_returned'], ENT_QUOTES, 'UTF-8');?>
</div>
                  <?php }?>
                </div>
                <div class="col-xs-4 text-xs-right">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
<div class="order-totals hidden-md-up box">
  <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['line']->value['value']) {?>
      <div class="order-total row">
        <div class="col-xs-8"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['label'], ENT_QUOTES, 'UTF-8');?>
</strong></div>
        <div class="col-xs-4 text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['value'], ENT_QUOTES, 'UTF-8');?>
</div>
      </div>
    <?php }?>
  <?php } ?>
  <div class="order-total row">
    <div class="col-xs-8"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</strong></div>
    <div class="col-xs-4 text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</div>
  </div>
</div>

<div class="box">
  <header>
    <h3><?php echo smartyTranslate(array('s'=>'Merchandise return','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</h3>
    <p><?php echo smartyTranslate(array('s'=>'If you wish to return one or more products, please mark the corresponding boxes and provide an explanation for the return. When complete, click the button below.','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</p>
  </header>
  <section class="form-fields">
    <div class="form-group">
      <textarea cols="67" rows="3" name="returnText" class="form-control"></textarea>
    </div>
  </section>
  <footer class="form-footer">
    <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'UTF-8');?>
">
    <button class="form-control-submit btn btn-default btn-effect" type="submit" name="submitReturnMerchandise">
      <?php echo smartyTranslate(array('s'=>'Request a return','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

    </button>
  </footer>
</div>

</form>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:50
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\customer\_partials\order-detail-no-return.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73166eb9ac5_69053133')) {function content_5ac73166eb9ac5_69053133($_smarty_tpl) {?>
<div class="box hidden-sm-down">
  <table id="order-products" class="table table-bordered">
    <thead class="thead-default">
      <tr>
		<th class="order-title"><?php echo smartyTranslate(array('s'=>'Product image','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        <th class="order-title"><?php echo smartyTranslate(array('s'=>'Product info','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        <th class="order-title"><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        <th class="order-title"><?php echo smartyTranslate(array('s'=>'Unit price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        <th class="order-title"><?php echo smartyTranslate(array('s'=>'Total price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
      </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
      <tr>
		<td class="product-image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" /></td>
        <td>
          <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong><br/>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
            <?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
<br/>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
            <?php  $_smarty_tpl->tpl_vars["customization"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["customization"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["customization"]->key => $_smarty_tpl->tpl_vars["customization"]->value) {
$_smarty_tpl->tpl_vars["customization"]->_loop = true;
?>
              <div class="customization">
                <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
              </div>
              <div id="_desktop_product_customization_modal_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h4>
                      </div>
                      <div class="modal-body">
                        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                          <div class="product-customization-line row">
                            <div class="col-sm-3 col-xs-4 label">
                              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                            <div class="col-sm-9 col-xs-8 value">
                              <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                                <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                  <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                <?php } else { ?>
                                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                              <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                              <?php }?>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          <?php }?>
        </td>
        <td>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
            <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

            <?php } ?>
          <?php } else { ?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

          <?php }?>
        </td>
        <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
    <?php } ?>
    <tfoot>
      <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['line']->value['value']) {?>  
          <tr class="text-xs-right line-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
            <td colspan="3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['label'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['value'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
        <?php }?>
      <?php } ?>
      <tr class="text-xs-right line-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['type'], ENT_QUOTES, 'UTF-8');?>
">
        <td colspan="3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
    </tfoot>
  </table>
</div>

<div class="order-items hidden-md-up box">
  <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <div class="order-item">
      <div class="row">
        <div class="col-sm-5 desc">
          <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
            <div class="ref"><?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
            <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
              <div class="customization">
                <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
              </div>
              <div id="_mobile_product_customization_modal_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
">
              </div>
            <?php } ?>
          <?php }?>
        </div>
        <div class="col-sm-7 qty">
          <div class="row">
            <div class="col-xs-4 text-sm-left text-xs-left">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

            </div>
            <div class="col-xs-4">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

                <?php } ?>
              <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </div>
            <div class="col-xs-4 text-xs-right">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
<div class="order-totals hidden-md-up box">
  <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['line']->value['value']) {?>
      <div class="order-total row">
        <div class="col-xs-8"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['label'], ENT_QUOTES, 'UTF-8');?>
</strong></div>
        <div class="col-xs-4 text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['value'], ENT_QUOTES, 'UTF-8');?>
</div>
      </div>
    <?php }?>
  <?php } ?>
  <div class="order-total row">
    <div class="col-xs-8"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</strong></div>
    <div class="col-xs-4 text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</div>
  </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:51
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\customer\_partials\order-messages.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac73167013ac9_86967020')) {function content_5ac73167013ac9_86967020($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['order']->value['messages']) {?>
<div class="box messages">
  <h3><?php echo smartyTranslate(array('s'=>'Messages','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</h3>
  <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
    <div class="message row">
      <div class="col-sm-4">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['name'], ENT_QUOTES, 'UTF-8');?>
<br/>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message_date'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="col-sm-8">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

      </div>
    </div>
  <?php } ?>
</div>
<?php }?>

<section class="order-message-form box">
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_detail'], ENT_QUOTES, 'UTF-8');?>
" method="post">

    <header>
      <h3><?php echo smartyTranslate(array('s'=>'Add a message','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</h3>
      <p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it in the field below.','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
</p>
    </header>

    <section class="form-fields">

      <div class="form-group row">
        <label class="col-md-3 form-control-label"><?php echo smartyTranslate(array('s'=>'Product','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
</label>
        <div class="col-md-5 select-box">
          <select name="id_product" class="form-control form-control-select">
            <option value="0"><?php echo smartyTranslate(array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
</option>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 form-control-label"></label>
        <div class="col-md-9">
          <textarea rows="3" name="msgText" class="form-control"></textarea>
        </div>
      </div>

    </section>

    <footer class="form-footer text-xs-center">
      <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'UTF-8');?>
">
      <button type="submit" name="submitMessage" class="btn btn-default btn-effect form-control-submit">
        <?php echo smartyTranslate(array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
    </footer>

  </form>
</section>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 04:35:51
         compiled from "D:\xampp\htdocs\jms_royal\themes\jms_royal\templates\_partials\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac731671251c5_18488117')) {function content_5ac731671251c5_18488117($_smarty_tpl) {?>
 <div class="back-to-top" id="back-to-top">
			<span class="fa fa-angle-up"></span>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>


<?php }} ?>
