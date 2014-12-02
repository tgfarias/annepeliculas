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



{*

** Retro compatibility for PrestaShop version < 1.4.2.5 with a recent theme

*}



{* Two variable are necessaries to display the address with the new layout system *}

{* Will be deleted for 1.5 version and more *}

{if !isset($multipleAddresses)}

	{$ignoreList.0 = "id_address"}

	{$ignoreList.1 = "id_country"}

	{$ignoreList.2 = "id_state"}

	{$ignoreList.3 = "id_customer"}

	{$ignoreList.4 = "id_manufacturer"}

	{$ignoreList.5 = "id_supplier"}

	{$ignoreList.6 = "date_add"}

	{$ignoreList.7 = "date_upd"}

	{$ignoreList.8 = "active"}

	{$ignoreList.9 = "deleted"}



	{* PrestaShop < 1.4.2 compatibility *}

	{if isset($addresses)}

		{$address_number = 0}

		{foreach from=$addresses key=k item=address}

			{counter start=0 skip=1 assign=address_key_number}

			{foreach from=$address key=address_key item=address_content}

				{if !in_array($address_key, $ignoreList)}

					{$multipleAddresses.$address_number.ordered.$address_key_number = $address_key}

					{$multipleAddresses.$address_number.formated.$address_key = $address_content}

					{counter}

				{/if}

			{/foreach}

		{$multipleAddresses.$address_number.object = $address}

		{$address_number = $address_number  + 1}

		{/foreach}

	{/if}

{/if}



{* Define the style if it doesn't exist in the PrestaShop version*}

{* Will be deleted for 1.5 version and more *}

{if !isset($addresses_style)}

	{$addresses_style.company = 'address_company'}

	{$addresses_style.vat_number = 'address_company'}

	{$addresses_style.firstname = 'address_name'}

	{$addresses_style.lastname = 'address_name'}

	{$addresses_style.address1 = 'address_address1'}

	{$addresses_style.address2 = 'address_address2'}

	{$addresses_style.city = 'address_city'}

	{$addresses_style.country = 'address_country'}

	{$addresses_style.phone = 'address_phone'}

	{$addresses_style.phone_mobile = 'address_phone_mobile'}

	{$addresses_style.alias = 'address_title'}

{/if}



{capture name=path}<a href="{$link->getPageLink('my-account', true)|escape:'html'}">{l s='Minha Conta'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Meus Endereços'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1><span>{l s='Meus Endereços'}</span></h1>

<p>{l s='Por favor configurar seu faturamento padrão e endereços de entrega ao colocar em ordem. Você também pode adicionar endereços adicionais, que podem ser úteis para o envio de presentes ou receber uma ordem em seu escritório.'}</p>



{if isset($multipleAddresses) && $multipleAddresses}

<div class="addresses titled_box">

	<h2><span>{l s='Seus endereços estão listados abaixo.'}</span></h2>

	<p>{l s='Certifique-se de atualizar suas informações pessoais.'}</p>

	{assign var="adrs_style" value=$addresses_style}

	<div class="bloc_adresses row clearfix">

	{foreach from=$multipleAddresses item=address name=myLoop}

    	<div class="col-xs-12 col-sm-6 col-md-4">

			<ul class="address {if $smarty.foreach.myLoop.last}last_item{elseif $smarty.foreach.myLoop.first}first_item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{else}item{/if}">

			<li class="address_title">{$address.object.alias}</li>

			{foreach from=$address.ordered name=adr_loop item=pattern}

				{assign var=addressKey value=" "|explode:$pattern}

				<li>

				{foreach from=$addressKey item=key name="word_loop"}

					<span {if isset($addresses_style[$key])} class="{$addresses_style[$key]}"{/if}>

						{$address.formated[$key|replace:',':'']|escape:'htmlall':'UTF-8'}

					</span>

				{/foreach}

				</li>

			{/foreach}

			<li class="address_update"><a class="btn btn-success" href="{$link->getPageLink('address', true, null, "id_address={$address.object.id|intval}")|escape:'html'}" title="{l s='Update'}">{l s='Atualizar'}</a></li>

			<li class="address_delete"><a class="btn btn-danger" href="{$link->getPageLink('address', true, null, "id_address={$address.object.id|intval}&delete")|escape:'html'}" onclick="return confirm('{l s='Você tem certeza? js=1'}');" title="{l s='Delete'}">{l s='Deletar'}</a></li>

		</ul>

        </div>

	{/foreach}

	</div>

</div>

{else}

	<p class="alert alert-info">

    <button class="close" data-dismiss="alert" type="button">×</button>

    <i class="icon-info-sign"></i>{l s='Nenhum endereço disponível.'}&nbsp;<a href="{$link->getPageLink('address', true)|escape:'html'}">{l s='Adicione um novo endereço'}</a></p>

{/if}



<div class="clear address_add"><a href="{$link->getPageLink('address', true)|escape:'html'}" title="{l s='Adicionar um endereço'}" class="button_large btn btn-default">{l s='Adicionar um endereço'}</a></div>



<ul class="footer_links clearfix">

	<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}"><i class="icon-user"></i>{l s='Voltar para a sua conta'}</a></li>

	<li class="f_right"><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>

</ul>