{*
* 2007-2011 PrestaShop
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
*  @copyright  2007-2011 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="hook_mobile_top_site_map">
{hook h="displayMobileTopSiteMap"}
</div>
<hr/>
{if isset($categoriesTree.children)}
	<h2>{l s='Nossas ofertas'}</h2>

	<ul data-role="listview" data-inset="true">
		{for $i=0 to 4}
			{if isset($categoriesTree.children.$i)}
				{if isset($categoriesTree.children.$i.children) && ($categoriesTree.children.$i.children|@count > 0)}
						{include file="./category-tree-branch.tpl" node=$categoriesTree.children.$i}
				{else}
				<li data-icon="arrow-d">
					<a href="{$categoriesTree.children.$i.link|escape:'htmlall':'UTF-8'}" title="{$categoriesTree.children.$i.desc|escape:'htmlall':'UTF-8'}">
						{$categoriesTree.children.$i.name|escape:'htmlall':'UTF-8'}
					</a>
				</li>
				{/if}
			{/if}
		{/for}
		<li>
			{l s='Todas as categorias'}
			<ul data-role="listview" data-inset="true">
				{foreach $categoriesTree.children as $child}
					{include file="./category-tree-branch.tpl" node=$child last='true'}
				{/foreach}
			</ul>
		</li>
	</ul>
{/if}

<hr/>
<h2>{l s='Mapa do site'}</h2>
<ul data-role="listview" data-inset="true" id="category">
	{if $controller_name != 'index'}<li><a href="{$link->getPageLink('index', true)}">{l s='Home'}</a></li>{/if}
	<li>{l s='Nossas ofertas'}
		<ul data-role="listview" data-inset="true">
			<li><a href="{$link->getPageLink('new-products')}" title="{l s='Novos produtos'}">{l s='Novos produtos'}</a></li>
			{if !$PS_CATALOG_MODE}
			<li><a href="{$link->getPageLink('prices-drop')}" title="{l s='Preço baixo'}">{l s='Preço baixo'}</a></li>
			<li><a href="{$link->getPageLink('best-sales', true)}" title="{l s='O mais vendido'}">{l s='Os mais vendidos'}</a></li>
			{/if}
			{if $display_manufacturer_link OR $PS_DISPLAY_SUPPLIERS}<li><a href="{$link->getPageLink('manufacturer')}">{l s='Fabricantes:'}</a></li>{/if}
			{if $display_supplier_link OR $PS_DISPLAY_SUPPLIERS}<li><a href="{$link->getPageLink('supplier')}">{l s='Fornecedores:'}</a></li>{/if}
		</ul>
	</li>
	<li>{l s='Sua Conta'}
		<ul data-role="listview" data-inset="true">
			<li><a href="{$link->getPageLink('my-account', true)}">{l s='Sua conta'}</a></li>
			<li><a href="{$link->getPageLink('identity', true)}">{l s='Informações pessoais'}</a></li>
			<li><a href="{$link->getPageLink('addresses', true)}">{l s='Endereços'}</a></li>
			{if $voucherAllowed}<li><a href="{$link->getPageLink('discount', true)}">{l s='Descontos'}</a></li>{/if}
			<li><a href="{$link->getPageLink('history', true)}">{l s='Histórico de pedidos'}</a></li>
		</ul>
	</li>
	<li>{l s='Páginas'}
		<ul data-role="listview" data-inset="true">
			{if isset($categoriescmsTree.children)}
				{foreach $categoriescmsTree.children as $child}
					{if (isset($child.children) && $child.children|@count > 0) || $child.cms|@count > 0}
						{include file="./category-cms-tree-branch.tpl" node=$child}
					{/if}
				{/foreach}
			{/if}
			{foreach from=$categoriescmsTree.cms item=cms name=cmsTree}
				<li><a href="{$cms.link|escape:'htmlall':'UTF-8'}" title="{$cms.meta_title|escape:'htmlall':'UTF-8'}">{$cms.meta_title|escape:'htmlall':'UTF-8'}</a></li>
			{/foreach}
			<li><a href="{$link->getPageLink('contact', true)}" title="{l s='Contato'}">{l s='Contato'}</a></li>
			{if $display_store}<li><a href="{$link->getPageLink('stores')}" title="{l s='Nossas lojas'}">{l s='Nossas lojas'}</a></li>{/if}
		</ul>
	</li>
</ul>
