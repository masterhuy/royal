{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
{if $jpb_homepage == 1}
	<div class="btn-group compact-hidden left jms_ajax_search" id="jms_ajax_search">
		<div class="search-box">
			<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
				
			</a>
			<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="{l s='Search everything...' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search" />
				<button type="submit" name="submit_search" class="button-search">
					<img src="{$urls.base_url}img/search.png" alt="">
				</button>
			</form>
			<div id="search_result"></div>
		</div>	
	</div>
{elseif $jpb_homepage == 8}
	<div class="btn-group compact-hidden left jms_ajax_search" id="jms_ajax_search">
		<div class="search-box">
			<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
				
			</a>
			<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="{l s='Search everything...' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search" />
				<button type="submit" name="submit_search" class="button-search">
					<img src="{$urls.base_url}img/search.png" alt="">
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
			<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="{l s='Search everything...' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search"  />

				 <button type="submit" name="submit_search" class="button-search pe pe-7s-search">

				</button>
			</form>
			<div id="search_result"></div>
		</div>	
	</div>
{else}
	<div class="btn-group compact-hidden jms_ajax_search" id="jms_ajax_search">
		<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
			<span class="icon-magnifier icons"></span>
		</a>
		<div class="dropdown-menu search-box" role="menu">	
			<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="{l s='Search everything...' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search"  />

				 <button type="submit" name="submit_search" class="button-search pe pe-7s-search">

				</button>
			</form>
			<div id="search_result"></div>
		</div>	
	</div>
{/if}
