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

{capture name=path}<a href="{$link->getPageLink('my-account', true)|escape:'html'}">{l s='Minha Conta'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Histórico de pedidos'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}

{include file="$tpl_dir./errors.tpl"}



<h1><span>{l s='Histórico de pedidos'}</span></h1>

<p>{l s='Aqui estão os pedidos que você realizou desde a sua conta foi criada.'}</p>



{if $slowValidation}<p class="alert alert-info">

<button class="close" data-dismiss="alert" type="button">×</button>

{l s='Se você acabou de realizar um pedido, pode demorar alguns minutos para ser validado. Por favor, atualize esta página se seu pedido está faltando.'}</p>{/if}



<div class="block-center" id="block-history">



	{if $orders && count($orders)}

      <script type="text/javascript">

 $(function() {

      $('#order-list').footable();

	  	  breakpoints: {

	  tablet:1000

	}

    });

  </script>

	<table id="order-list" class="footable table table-hover table-bordered">

		<thead>

			<tr>

				<th data-class="expand" class="first_item ">{l s='Código do pedido'}</th>

				<th data-hide="phone"  class="item">{l s='Data'}</th>

				<th data-hide="phone,tablet"  class="item">{l s='Valor total'}</th>

				<th data-hide="phone,tablet" class="item">{l s='Pagamento: '}</th>

				<th data-hide="phone,tablet" class="item">{l s='Status'}</th>

				<th data-hide="phone" class="item">{l s='Fatura'}</th>

				<th data-hide="phone" class="last_item" >{l s='detalhes'}</th>

			</tr>

		</thead>

		<tbody>

		{foreach from=$orders item=order name=myLoop}

			<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">

				<td class="history_link bold">

					{if isset($order.invoice) && $order.invoice && isset($order.virtual) && $order.virtual}<img src="{$img_dir}icon/download_product.png" class="icon" alt="{l s='Produtos para download'}" title="{l s='Produtos para download'}" />{/if}

					{Order::getUniqReferenceOf($order.id_order)}

				</td>

				<td class="history_date bold">{dateFormat date=$order.date_add full=0}</td>

				<td class="history_price"><span class="price">{displayPrice price=$order.total_paid currency=$order.id_currency no_utf8=false convert=false}</span></td>

				<td class="history_method">{$order.payment|escape:'htmlall':'UTF-8'}</td>

				<td class="history_state">{if isset($order.order_state)}<i class="icon-angle-right"></i> {$order.order_state|escape:'htmlall':'UTF-8'}{else}---{/if}</td>

				<td class="history_invoice">

				{if (isset($order.invoice) && $order.invoice && isset($order.invoice_number) && $order.invoice_number) && isset($invoiceAllowed) && $invoiceAllowed == true}

					<a href="{$link->getPageLink('pdf-invoice', true, NULL, "id_order={$order.id_order}")|escape:'html'}" title="{l s='Fatura'}" target="_blank"><i class="icon-file-alt"></i></a>

					<a href="{$link->getPageLink('pdf-invoice', true, NULL, "id_order={$order.id_order}")|escape:'html'}" title="{l s='Fatura'}" target="_blank">{l s='PDF'}</a>

				{else}-{/if}

				</td>

				<td class="history_detail">

					<a class="color-myaccount btn btn-info" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html'}');">{l s='detalhes'}</a>

					{if isset($opc) && $opc}

					

                    <a class="btn btn-info" href="{$link->getPageLink('order-opc', true, NULL, "submitReorder&id_order={$order.id_order}")|escape:'html'}" title="{l s='Reordenar'}">

					{else}

					<a class="btn btn-info" href="{$link->getPageLink('order', true, NULL, "submitReorder&id_order={$order.id_order}")|escape:'html'}" title="{l s='Reordenar'}">

					{/if}

					{l s='Reordenar'}

					</a>

				</td>

			</tr>

		{/foreach}

		</tbody>

	</table>

	<div id="block-order-detail" style="display:none;">&nbsp;</div>

	{else}

		<p class="alert alert-info"><button class="close" data-dismiss="alert" type="button">×</button> {l s='Você não realizou nenhum pedido'}</p>

	{/if}

</div>



<ul class="footer_links clearfix">

	<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}"><i class="icon-user"></i>{l s='Voltar para sua conta'}</a></li>

	<li class="f_right"><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>

</ul>

