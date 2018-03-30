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
<!-- Block languages module -->
{if $jpb_homepage == 10}
	{if count($languages) > 1}
		<div class="btn-group compact-hidden languages-info">
			<span class="btn-name">{l s='Select Language:' d='Shop.Theme.Global'}</span>
			<ul class="languages-list">
				{foreach from=$languages key=k item=language name="languages"}
					<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
						<a href="{url entity='language' id=$language.id_lang}" class="dropdown-item">
						  <img alt="{$language.iso_code}" src="{$urls.base_url}img/l/{$language.id_lang}.jpg" width="20" height="14"/>
						</a>
					</li>
				{/foreach}		
			</ul>
		</div>
	{/if}	
{elseif $jpb_homepage == 1 || $jpb_homepage == 2 || $jpb_homepage == 3 || $jpb_homepage == 4 || $jpb_homepage == 5  || $jpb_homepage == 6 || $jpb_homepage == 7 || $jpb_homepage == 8}
	{if count($languages) > 1}
		<div class="btn-group compact-hidden languages-info">
			<a href="#"  class="btn-xs dropdown-toggle" data-toggle="dropdown">
				<span class="btn-name">{$current_language.name_simple|truncate:3:''}</span>
			</a>
			<ul class="dropdown-menu" role="menu">
				{foreach from=$languages key=k item=language name="languages"}
					<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
						<a href="{url entity='language' id=$language.id_lang}" class="dropdown-item">
							{$language.name_simple|truncate:3:''}
						</a>
					</li>
				{/foreach}		
			</ul>
		</div>
	{/if}
{else}
{if count($languages) > 1}
		<div class="btn-group compact-hidden languages-info">
			<a href="#"  class="btn-xs dropdown-toggle" data-toggle="dropdown">
				<span class="btn-name">{l s='Languages:' d='Shop.Theme.Global'}</span>			
			</a>
			<ul>
				{foreach from=$languages key=k item=language name="languages"}
					<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
						<a href="{url entity='language' id=$language.id_lang}" class="dropdown-item">
							{$language.name_simple}
						</a>
					</li>
				{/foreach}		
			</ul>
		</div>
	{/if}
{/if}
<!-- /Block languages module -->