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



{capture name=path}{l s='Fabricantes:'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1><span>{l s='Fabricantes'}<strong>

{strip}

	{if $nbManufacturers == 0}{l s='Não há fabricantes.'}

			{else}

				{if $nbManufacturers == 1}

					{l s='Existe %d fabricante.' sprintf=$nbManufacturers}

				{else}

					{l s='Existem %d fabricantes.' sprintf=$nbManufacturers}

				{/if}

			{/if}

		{/strip}

	</strong></span></h1>

{if isset($errors) AND $errors}

	{include file="$tpl_dir./errors.tpl"}

{else}

	{if $nbManufacturers > 0}

		<ul id="manufacturers_list"  class="mnf_sup_list clearfix">

		{foreach from=$manufacturers item=manufacturer name=manufacturers}

			<li class="shop_box clearfix {if $smarty.foreach.manufacturers.first}first_item{elseif $smarty.foreach.manufacturers.last}last_item{else}item{/if}"> 

            	<div class="col-xs-12 col-sm-8 col-lg-9 border_sep">

                	<div class="row">

                        <!-- logo -->

                        <div class="logo col-xs-3">

                        {if $manufacturer.nb_products > 0}<a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$manufacturer.name|escape:'htmlall':'UTF-8'}" class="lnk_img">{/if}

                            <img src="{$img_manu_dir}{$manufacturer.image|escape:'htmlall':'UTF-8'}-medium_default.jpg" alt="" />

                        {if $manufacturer.nb_products > 0}</a>{/if}

                        </div>

                        <!-- name -->

                        <div class="left_side col-xs-9">

                        <h3>

                            {if $manufacturer.nb_products > 0}<a class="product_link" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'htmlall':'UTF-8'}">{/if}

                            {$manufacturer.name|truncate:60:'...'|escape:'htmlall':'UTF-8'}

                            {if $manufacturer.nb_products > 0}</a>{/if}

                        </h3>

                        <div>

                        {if $manufacturer.nb_products > 0}<p class="product_desc">{/if}

                            <span>{$manufacturer.description|truncate:150:'...'|escape:'htmlall':'UTF-8'}</span>

                        {if $manufacturer.nb_products > 0}</p>{/if}

                                    </div>

                    </div>

                    </div>

                </div>

                <div class="right_side col-xs-12 col-sm-4 col-lg-3">

                        <p>

                        {if $manufacturer.nb_products > 0}<a class="title_shop" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'htmlall':'UTF-8'}">{/if}

                            <span>{if $manufacturer.nb_products == 1}{l s='%d produto' sprintf=$manufacturer.nb_products|intval}{else}{l s='%d produtos' sprintf=$manufacturer.nb_products|intval}{/if}</span>

                        {if $manufacturer.nb_products > 0}</a>{/if}

                        </p>

                    {if $manufacturer.nb_products > 0}

                        <a class="button btn btn-default" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'htmlall':'UTF-8'}">{l s='Ver produtos'}</a>

                    {/if}

                    </div>

			</li>

		{/foreach}

		</ul>

        <div class="bottom_pagination shop_box_row  clearfix">

			{include file="$tpl_dir./pagination.tpl"}

        </div>

	{/if}

{/if}