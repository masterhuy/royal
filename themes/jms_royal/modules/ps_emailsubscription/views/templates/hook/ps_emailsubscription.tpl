{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block Newsletter module-->
{if $jpb_homepage == 1 || $jpb_homepage == 5}
	<div class="title">
		{if $jpb_homepage == 1}
		<img class="img-responsive" src="{$urls.base_url}img/newsletter.jpg" alt="">
		{/if}
		<h2>
			{l s='Sign Up Our Newsletter' d='Shop.Theme'}
		</h2>
	</div>
	<div id="newsletter_block_left" class="block">	
		<div class="block_content">
		
				<div class="textnews_h1 addon-title">
				<h3>{l s='newsletter' d='Shop.Theme'}</h3>
				<span>{l s='Sign up to get  exclusive offers from our all favorite brands' d='Shop.Theme'}</span>
				</div>
			
			{if $jpb_homepage == 1}
					<div class="textnews_popup addon-title">
						<span>
							{l s='Subscribe to the ROYAL mailing list to receive updates on new arrivals, special offers and other discount information' d='Shop.Theme'}
						</span>
					</div>
			{/if}
			<div class="news_content">
	         <div  class="block_content block_c_right">
			<form action="{$urls.pages.index}#footer" method="post">
					<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
					   <button type="submit" name="submitNewsletter" class="newsletter-btn button">
							{l s='Subscribe' d='Shop.Theme'}
						</button>
						<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Enter your email...' d='Shop.Forms.Labels'}" />
						{if $jpb_homepage == 1 || $jpb_homepage == 5 || $jpb_homepage == 8}
						<input class="inputNew footer form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Your email...' d='Shop.Forms.Labels'}" />
						
						<button type="submit" name="submitNewsletter" class="newsletter-btn footer btn-effect">
							<i class="icon-paper-plane icons" aria-hidden="true"></i>
						</button>
						{/if}
						<button type="submit" name="submitNewsletter" class="newsletter-btn popup btn-default btn-effect">
							{l s='Subscribe' d='Shop.Theme'}
						</button>
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
				</div>
	       </div>
		</div>
	</div>
	{if $msg}
        <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
            {$msg}
        </div>
    {/if}
    <div id="social_block">
		<ul class="find-us">
	       <li class="divider"><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
	       <li class="divider"><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
	       <li class="divider"><a href="#" class="gplus"><span class="fa fa-google-plus"></span></a></li>
		   <li class="divider"><a href="#" class="pinterest"><span class="fa fa-pinterest"></span></a></li>
		   <li class="divider"><a href="#" class="instagram"><span class="fa fa-instagram"></span></a></li>
	    </ul>
	</div>
{/if}	
{if $jpb_homepage == 2 || $jpb_homepage == 7}
<div class="textnews addon-title">
	<h2>
		{l s='Sign Up Newsletter' d='Shop.Theme'}
	</h2>
	<span>{l s='Sign up to get exclusive offers from our favorite brands' d='Shop.Theme'}</span>
</div>
<div id="newsletter_block_left" class="block">
	<div class="block_content">
		<div class="news_content">
        <div  class="block_content block_c_right">
			<form action="{$urls.pages.index}#footer" method="post">
				<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
					<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Your email...' d='Shop.Forms.Labels'}" />
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
{if $msg}
    <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
        {$msg}
    </div>
{/if}
{/if}
{if $jpb_homepage == 3 || $jpb_homepage == 4}
<div id="newsletter_block_left" class="block">
	<div class="block_content">
		<div class="news_content">
        <div  class="block_content block_c_right">
			<form action="{$urls.pages.index}#footer" method="post">
				<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
					<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Your email...' d='Shop.Forms.Labels'}" />
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
{if $msg}
    <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
        {$msg}
    </div>
{/if}
{/if}
{if $jpb_homepage == 6}
<div id="newsletter_block_left" class="block">
	<div class="block_content">
		<div class="textnews addon-title">
			<h3>{l s='SIGN UP NEWSLETTER' d='Shop.Theme'}</h3>
			<span>Sign up to get exclusive offers from our favorite brands and get 20% off for your next purchase!</span>
		</div>
		<div class="news_content">
        <div  class="block_content block_c_right">
			<form action="{$urls.pages.index}#footer" method="post">
				<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
					<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Your email...' d='Shop.Forms.Labels'}" />
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
{if $msg}
    <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
        {$msg}
    </div>
{/if}
{/if}

{if $jpb_homepage == 8}
<div id="newsletter_block_left" class="block">
	<div class="block_content">
		<div class="textnews addon-title">
			<h3>{l s='NEWSLETTER' d='Shop.Theme'}</h3>
			<span>Enter your email and we’ll send you a coupon with 10% off your next order</span>
		</div>
		<div class="news_content">
        <div  class="block_content block_c_right">
			<form action="{$urls.pages.index}#footer" method="post">
				<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}" >
					<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{$value}" placeholder="{l s='Enter your email...' d='Shop.Forms.Labels'}" />
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
{if $msg}
    <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
        {$msg}
    </div>
{/if}
{/if}