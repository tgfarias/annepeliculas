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



{capture name=path}{l s='Rastreamento dos visitantes'}{/capture}

{include file="./breadcrumb.tpl"}



<h1>{l s='Rastreamento dos visitantes'}</h1>



{if isset($order_collection)}

	{foreach $order_collection as $order}

		{assign var=order_state value=$order->getCurrentState()}

		{assign var=invoice value=$order->invoice}

		{assign var=order_history value=$order->order_history}

		{assign var=carrier value=$order->carrier}

		{assign var=address_invoice value=$order->address_invoice}

		{assign var=address_delivery value=$order->address_delivery}

		{assign var=inv_adr_fields value=$order->inv_adr_fields}

		{assign var=dlv_adr_fields value=$order->dlv_adr_fields}

		{assign var=invoiceAddressFormatedValues value=$order->invoiceAddressFormatedValues}

		{assign var=deliveryAddressFormatedValues value=$order->deliveryAddressFormatedValues}

		{assign var=currency value=$order->currency}

		{assign var=discounts value=$order->discounts}

		{assign var=invoiceState value=$order->invoiceState}

		{assign var=deliveryState value=$order->deliveryState}

		{assign var=products value=$order->products}

		{assign var=customizedDatas value=$order->customizedDatas}

		{assign var=HOOK_ORDERDETAILDISPLAYED value=$order->hook_orderdetaildisplayed}

		{if isset($order->total_old)}

			{assign var=total_old value=$order->total_old}

		{/if}

		{if isset($order->followup)}

			{assign var=followup value=$order->followup}

		{/if}

		

		<div id="block-history">

			<div id="block-order-detail" class="std" style="zoom:1">

			{include file="./order-detail.tpl"}

			</div>

		</div>

	{/foreach}



	<h2 id="guestToCustomer">{l s='Para mais vantagens...'}</h2>



	{include file="$tpl_dir./errors.tpl"}

	

	{if isset($transformSuccess)}

		<p class="alert alert-success">{l s='Sua conta de convidado foi transformado com sucesso em uma conta de cliente. Agora você pode fazer login como um cliente registrado. '} <a href="{$link->getPageLink('authentication', true)|escape:'html'}">{l s='página.'}</a></p>

	{else}

		<form method="post" action="{$action|escape:'htmlall':'UTF-8'}#guestToCustomer" class="std">

			<fieldset class="description_box">

				<p class="bold">{l s='Transforme a sua conta de convidado em uma conta de cliente e desfrute:'}</p>

				<ul class="bullet">

					<li>{l s='Acesso personalizado e seguro'}</li>

					<li>{l s='Check-out fácil e rápido'}</li>

					<li>{l s='Mais fácil devolução de mercadoria'}</li>

				</ul>

				<p class="form-group">

					<label>{l s='Defina sua senha:'}</label>

					<input type="password" name="password" class="form-control" />

				</p>

				

				<input type="hidden" name="id_order" value="{if isset($order->id)}{$order->id}{else}{if isset($smarty.get.id_order)}{$smarty.get.id_order|escape:'htmlall':'UTF-8'}{else}{if isset($smarty.post.id_order)}{$smarty.post.id_order|escape:'htmlall':'UTF-8'}{/if}{/if}{/if}" />

				<input type="hidden" name="order_reference" value="{if isset($smarty.get.order_reference)}{$smarty.get.order_reference|escape:'htmlall':'UTF-8'}{else}{if isset($smarty.post.order_reference)}{$smarty.post.order_reference|escape:'htmlall':'UTF-8'}{/if}{/if}" />

				<input type="hidden" name="email" value="{if isset($smarty.get.email)}{$smarty.get.email|escape:'htmlall':'UTF-8'}{else}{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall':'UTF-8'}{/if}{/if}" />

				

				<p class="center"><input type="submit" class="exclusive_large btn btn-default" name="submitTransformGuestToCustomer" value="{l s='Enviar'}" /></p>

			</fieldset>

		</form>

	{/if}

{else}

	{include file="$tpl_dir./errors.tpl"}

	{if isset($show_login_link) && $show_login_link}

		<p><a href="{$link->getPageLink('my-account', true)|escape:'html'}"><i class="icon-user"></i> {l s='Clique aqui para acessar sua conta de cliente.'}</a><br /><br /></p>

	{/if}

	<form method="post" action="{$action|escape:'htmlall':'UTF-8'}" class="std">

		<fieldset class="description_box">

			<p>{l s='Para acompanhar o seu pedido, por favor, insira as seguintes informações:'}</p>

			<p class="form-group">

				<label>{l s='Referência do pedido:'} </label>

				<input type="text" name="order_reference" class="form-control" value="{if isset($smarty.get.id_order)}{$smarty.get.id_order|escape:'htmlall':'UTF-8'}{else}{if isset($smarty.post.id_order)}{$smarty.post.id_order|escape:'htmlall':'UTF-8'}{/if}{/if}" size="8" />

				<i><small>{l s='Por exemplo: QIIXJXNUI or QIIXJXNUI#1'}</small></i>

			</p>



			<p class="form-group">

				<label>{l s='Email'}</label>

				<input type="text" class="form-control" name="email" value="{if isset($smarty.get.email)}{$smarty.get.email|escape:'htmlall':'UTF-8'}{else}{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall':'UTF-8'}{/if}{/if}" />

			</p>



			<p class="center"><input type="submit" class="button btn btn-default" name="submitGuestTracking" value="{l s='Enviar'}" /></p>

		</fieldset>

	</form>

{/if}