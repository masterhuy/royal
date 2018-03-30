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
{if $jpb_homepage == 10}
	<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info">
		<span class="btn-name">{l s='Select Currency:' d='Shop.Theme.Global'}</span>
		<ul class="curentry-list">
			
			{foreach from=$currencies item=currency}
				<li {if $currency.current} class="current" {/if}>
				  <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item"> {$currency.sign}</a>
				</li>
           {/foreach}
		</ul>
	</div>
{elseif $jpb_homepage == 1 ||  $jpb_homepage == 2 || $jpb_homepage == 3 || $jpb_homepage == 4 || $jpb_homepage == 5 || $jpb_homepage == 6 || $jpb_homepage == 7 || $jpb_homepage == 8}
	<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info">
	   <a href="#"  class="btn-xs dropdown-toggle" data-toggle="dropdown">
			<span class="btn-name">{$current_currency.iso_code}</span>
		</a>
		<ul class="dropdown-menu hidden-sm-down" aria-labelledby="currency-selector-label">
			
			{foreach from=$currencies item=currency}
				<li {if $currency.current} class="current" {/if}>
				  <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">
                 {$currency.iso_code}</a>
				</li>
           {/foreach}
		</ul>
	</div>
{else}
	
	<div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info">
		<span class="btn-name">{l s='Currency:' d='Shop.Theme.Global'}</span>	
		 <ul>
      {foreach from=$currencies item=currency}
        <li {if $currency.current} class="current" {/if}>
          <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">{$currency.iso_code} {$currency.sign}</a>
        </li>
      {/foreach}
    </ul>
	</div>
	
{/if}
