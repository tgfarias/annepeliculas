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



{capture name=path}<a href="{$link->getPageLink('my-account', true)|escape:'html'}">{l s='Minha Conta'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Meus Créditos'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1><span>{l s='Meus Créditos'}</span></h1>

<p>{l s='Créditos recebidos após cancelamento de pedidos'}.</p>

<script type="text/javascript">

    $(function() {

      $('#order-list').footable();

	  breakpoints: {

  	  phone:851

	  tablet:1170

}

    });

  </script>

<div class="block-center" id="block-history">

	{if $ordersSlip && count($ordersSlip)}

	<table id="order-list" class="table table-hover table-bordered footable">

		<thead>

			<tr>

				<th data-class="expand" class="first_item">{l s='Créditos'}</th>

				<th data-hide="phone" class="item">{l s='Pedido'}</th>

				<th data-hide="phone,tablet" class="item">{l s='Data de emissão'}</th>

				<th data-hide="phone,tablet" class="last_item">{l s='Ver créditos'}</th>

			</tr>

		</thead>

		<tbody>

		{foreach from=$ordersSlip item=slip name=myLoop}

			<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">

				<td class="bold"><span class="color-myaccount">{l s='#%s' sprintf=$slip.id_order_slip|string_format:"%06d"}</span></td>

				<td class="history_method"><a class="color-myaccount" href="javascript:showOrder(1, {$slip.id_order|intval}, '{$link->getPageLink('order-detail')|escape:'html'}');">{l s='#%s' sprintf=$slip.id_order|string_format:"%06d"}</a></td>

				<td class="bold">{dateFormat date=$slip.date_add full=0}</td>

				<td class="history_invoice">

					<a href="{$link->getPageLink('pdf-order-slip', true, NULL, "id_order_slip={$slip.id_order_slip|intval}")|escape:'html'}" title="{l s='Meus créditos'} {l s='#%s' sprintf=$slip.id_order_slip|string_format:"%06d"}"><img src="{$img_dir}icon/pdf.gif" alt="{l s='Pedidos devolvidos'} {l s='#%s' sprintf=$slip.id_order_slip|string_format:"%06d"}" class="icon" /></a>

					<a href="{$link->getPageLink('pdf-order-slip', true, NULL, "id_order_slip={$slip.id_order_slip|intval}")|escape:'html'}" title="{l s='Meus créditos'} {l s='#%s' sprintf=$slip.id_order_slip|string_format:"%06d"}">{l s='PDF'}</a>

				</td>

			</tr>

		{/foreach}

		</tbody>

	</table>

	<div id="block-order-detail" style="display:none;">&nbsp;</div>

	{else}

		<p class="alert alert-info">{l s='Você não possui créditos à receber.'}</p>

	{/if}

</div>

<ul class="footer_links clearfix">

	<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}"><i class="icon-user"></i>{l s='Voltar para sua conta'}</a></li>

	<li class="f_right"><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>

</ul>