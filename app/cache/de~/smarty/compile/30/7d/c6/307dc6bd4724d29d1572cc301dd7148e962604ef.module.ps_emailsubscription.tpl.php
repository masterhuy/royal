<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 03:06:22
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237955ac71c6e29bb18-96385929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1522813305,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '237955ac71c6e29bb18-96385929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jpb_homepage' => 0,
    'urls' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac71c6e324691_35801118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac71c6e324691_35801118')) {function content_5ac71c6e324691_35801118($_smarty_tpl) {?><!-- begin D:\xampp\htdocs\jms_royal/themes/jms_royal/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->

<!-- Block Newsletter module-->
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1||$_smarty_tpl->tpl_vars['jpb_homepage']->value==5) {?>
	<div class="title">
		<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1) {?>
		<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
img/newsletter.jpg" alt="">
		<?php }?>
		<h2>
			<?php echo smartyTranslate(array('s'=>'Sign Up Our Newsletter','d'=>'Shop.Theme'),$_smarty_tpl);?>

		</h2>
	</div>
	<div id="newsletter_block_left" class="block">	
		<div class="block_content">
		
				<div class="textnews_h1 addon-title">
				<h3><?php echo smartyTranslate(array('s'=>'newsletter','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
				<span><?php echo smartyTranslate(array('s'=>'Sign up to get  exclusive offers from our all favorite brands','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
				</div>
			
			<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1) {?>
					<div class="textnews_popup addon-title">
						<span>
							<?php echo smartyTranslate(array('s'=>'Subscribe to the ROYAL mailing list to receive updates on new arrivals, special offers and other discount information','d'=>'Shop.Theme'),$_smarty_tpl);?>

						</span>
					</div>
			<?php }?>
			<div class="news_content">
	         <div  class="block_content block_c_right">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
					   <button type="submit" name="submitNewsletter" class="newsletter-btn button">
							<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme'),$_smarty_tpl);?>

						</button>
						<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
						<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==1||$_smarty_tpl->tpl_vars['jpb_homepage']->value==5||$_smarty_tpl->tpl_vars['jpb_homepage']->value==8) {?>
						<input class="inputNew footer form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
						
						<button type="submit" name="submitNewsletter" class="newsletter-btn footer btn-effect">
							<i class="icon-paper-plane icons" aria-hidden="true"></i>
						</button>
						<?php }?>
						<button type="submit" name="submitNewsletter" class="newsletter-btn popup btn-default btn-effect">
							<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme'),$_smarty_tpl);?>

						</button>
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
				</div>
	       </div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
        <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
    <div id="social_block">
		<ul class="find-us">
	       <li class="divider"><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
	       <li class="divider"><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
	       <li class="divider"><a href="#" class="gplus"><span class="fa fa-google-plus"></span></a></li>
		   <li class="divider"><a href="#" class="pinterest"><span class="fa fa-pinterest"></span></a></li>
		   <li class="divider"><a href="#" class="instagram"><span class="fa fa-instagram"></span></a></li>
	    </ul>
	</div>
<?php }?>	
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==2||$_smarty_tpl->tpl_vars['jpb_homepage']->value==7) {?>
<div class="textnews addon-title">
	<h2>
		<?php echo smartyTranslate(array('s'=>'Sign Up Newsletter','d'=>'Shop.Theme'),$_smarty_tpl);?>

	</h2>
	<span><?php echo smartyTranslate(array('s'=>'Sign up to get exclusive offers from our favorite brands','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
</div>
<div id="newsletter_block_left" class="block">
	<div class="block_content">
		<div class="news_content">
        <div  class="block_content block_c_right">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
				<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
					<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
					<button type="submit" name="submitNewsletter" class="newsletter-btn footer btn-effect">
						<i class="icon-paper-plane icons" aria-hidden="true"></i>
					</button>
					<input type="hidden" name="action" value="0" />
				</div>
			</form>
		</div>
       </div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==3||$_smarty_tpl->tpl_vars['jpb_homepage']->value==4) {?>
<div id="newsletter_block_left" class="block">
	<div class="block_content">
		<div class="news_content">
        <div  class="block_content block_c_right">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
				<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
					<div class="text-customs">subcribe</div>
					<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
					<button type="submit" name="submitNewsletter" class="newsletter-btn footer btn-effect">
						<i class="icon-paper-plane icons" aria-hidden="true"></i>
					</button>
					<input type="hidden" name="action" value="0" />
				</div>
			</form>
		</div>
       </div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==6) {?>
<div id="newsletter_block_left" class="block">
	<div class="block_content">
		<div class="textnews addon-title">
			<h3><?php echo smartyTranslate(array('s'=>'SIGN UP NEWSLETTER','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
			<span>Sign up to get exclusive offers from our favorite brands and get 20% off for your next purchase!</span>
		</div>
		<div class="news_content">
        <div  class="block_content block_c_right">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
				<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
					<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
					<button type="submit" name="submitNewsletter" class="newsletter-btn footer btn-effect">
						<i class="icon-paper-plane icons" aria-hidden="true"></i>
					</button>
					<input type="hidden" name="action" value="0" />
				</div>
			</form>
		</div>
       </div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==8) {?>
<div id="newsletter_block_left" class="block">
	<div class="block_content">
		<div class="textnews addon-title">
			<h3><?php echo smartyTranslate(array('s'=>'NEWSLETTER','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
			<span>Enter your email and we’ll send you a coupon with 10% off your next order</span>
		</div>
		<div class="news_content">
        <div  class="block_content block_c_right">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
				<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
					<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
					<button type="submit" name="submitNewsletter" class="newsletter-btn footer btn-effect">
						<i class="icon-paper-plane icons" aria-hidden="true"></i>
					</button>
					<input type="hidden" name="action" value="0" />
				</div>
			</form>
			<span>Don’t worry we don’t spam</span>
		</div>
       	</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
<?php }?>
<?php }?><!-- end D:\xampp\htdocs\jms_royal/themes/jms_royal/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }} ?>
