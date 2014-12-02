{*

* 2007-2013 PrestaShop

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

*  @copyright  2007-2013 PrestaShop SA

*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)

*  International Registered Trademark & Property of PrestaShop SA

*}



{capture name=path}{l s='Mapa do Site'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1><span>{l s='Mapa do Site'}</span></h1>

<div id="sitemap_content" class="row">

	<div class="sitemap_block titled_box col-xs-12 col-sm-4">

		<h2><span>{l s='Nossas ofertas'}</span></h2>

		<ul class="content_list">

			<li><a href="{$link->getPageLink('new-products')|escape:'html'}" title="{l s='Ver um novo produto'}"><i class="icon-caret-right"></i> {l s='Novos produtos'}</a></li>

			{if !$PS_CATALOG_MODE}

			<li><a href="{$link->getPageLink('best-sales')|escape:'html'}" title="{l s='Ver produtos mais vendidos'}"><i class="icon-caret-right"></i> {l s='Mais vendidos'}</a></li>

			<li><a href="{$link->getPageLink('prices-drop')|escape:'html'}" title="{l s='Ver produtos com menor preço'}"><i class="icon-caret-right"></i> {l s='Mais baratos'}</a></li>

			{/if}

			{if $display_manufacturer_link OR $PS_DISPLAY_SUPPLIERS}<li><a href="{$link->getPageLink('manufacturer')|escape:'html'}" title="{l s='Lista de fabricantes'}"><i class="icon-caret-right"></i> {l s='Fabricantes:'}</a></li>{/if}

			{if $display_supplier_link OR $PS_DISPLAY_SUPPLIERS}<li><a href="{$link->getPageLink('supplier')|escape:'html'}" title="{l s='Lista de fornecedores'}"><i class="icon-caret-right"></i> {l s='Fornecedores:'}</a></li>{/if}

		</ul>

	</div>

	<div class="sitemap_block titled_box col-xs-12 col-sm-4">

		<h2><span>{l s='Sua Conta'}</span></h2>

		<ul class="content_list">

		{if $logged}

			<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Gerenciar sua conta'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Sua Conta'}</a></li>

			<li><a href="{$link->getPageLink('identity', true)|escape:'html'}" title="{l s='Gerencie suas informações pessoais'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Informações pessoais'}</a></li>

			<li><a href="{$link->getPageLink('addresses', true)|escape:'html'}" title="{l s='Veja uma lista dos meus endereços'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Endereços'}</a></li>

			{if $voucherAllowed}<li><a href="{$link->getPageLink('discount', true)|escape:'html'}" title="{l s='Veja uma lista dos meus descontos'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Descontos'}</a></li>{/if}

			<li><a href="{$link->getPageLink('history', true)|escape:'html'}" title="{l s='Meus pedidos'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Histórico de Pedidos'}</a></li>

		{else}

			<li><a href="{$link->getPageLink('authentication', true)|escape:'html'}" title="{l s='Autenticação'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Autenticação'}</a></li>

			<li><a href="{$link->getPageLink('authentication', true)|escape:'html'}" title="{l s='Criar uma nova conta'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Nova conta'}</a></li>

		{/if}

		{if $logged}

			<li><a href="{$link->getPageLink('index')}?mylogout" title="{l s='Sair'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Sair'}</a></li>

		{/if}

		</ul>

	</div>

	<div class="sitemap_block titled_box col-xs-12 col-sm-4">

			<h2><span>{l s='Páginas'}</span></h2>

				<ul class="content_list">

                    <li><a href="{$categoriescmsTree.link}" title="{$categoriescmsTree.name|escape:'htmlall':'UTF-8'}"><i class="icon-caret-right"></i> {$categoriescmsTree.name|escape:'htmlall':'UTF-8'}</a></li>

                        {if isset($categoriescmsTree.children)}

                            {foreach $categoriescmsTree.children as $child}

                                {if (isset($child.children) && $child.children|@count > 0) || $child.cms|@count > 0}

                                    {include file="$tpl_dir./category-cms-tree-branch.tpl" node=$child}

                                {/if}

                            {/foreach}

                        {/if}

                        {foreach from=$categoriescmsTree.cms item=cms name=cmsTree}

                            <li><a href="{$cms.link|escape:'htmlall':'UTF-8'}" title="{$cms.meta_title|escape:'htmlall':'UTF-8'}"><i class="icon-caret-right"></i> {$cms.meta_title|escape:'htmlall':'UTF-8'}</a></li>

                        {/foreach}

                        <li {if !$display_store} class="last"{/if}><a href="{$link->getPageLink('contact', true)|escape:'html'}" title="{l s='Contato'}"><i class="icon-caret-right"></i> {l s='Contato'}</a></li>

                        {if $display_store}<li class="last"><a  href="{$link->getPageLink('stores')}" title="{l s='Lista das lojas'}"><i class="icon-caret-right"></i> {l s='Lojas'}</a></li>{/if}

				</ul>

	</div>

</div>

<div id="listpage_content">

	<div class="categTree titled_box">

		<h2><span>{l s='Categorias'}</span></h2>

		<div class="tree_top"><a href="{$base_dir_ssl}" title="{$categoriesTree.name|escape:'htmlall':'UTF-8'}">{$categoriesTree.name|escape:'htmlall':'UTF-8'}</a></div>

		<ul class="tree">

		{if isset($categoriesTree.children)}

			{foreach $categoriesTree.children as $child}

				{if $child@last}

					{include file="$tpl_dir./category-tree-branch.tpl" node=$child last='true'}

				{else}

					{include file="$tpl_dir./category-tree-branch.tpl" node=$child}

				{/if}

			{/foreach}

		{/if}

		</ul>

	</div>



</div>

