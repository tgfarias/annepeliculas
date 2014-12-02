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

{capture assign='page_title'}{l s='Autorização de Devolução de Mercadoria (ADM)'}{/capture}
{include file='./page-title.tpl'}

<div data-role="content" id="content">
	<a data-role="button" data-icon="arrow-l" data-theme="a" data-mini="true" data-inline="true" href="{$link->getPageLink('my-account', true)}" data-ajax="false">{l s='Minha Conta'}</a>

	{if isset($errorQuantity) && $errorQuantity}<p class="error">{l s='Você não tem produtos suficientes para solicitar uma devolução de mercadoria.'}</p>{/if}
	{if isset($errorMsg) && $errorMsg}<p class="error">{l s='Por favor, fornecer uma explicação para o seu ADM.'}</p>{/if}
	{if isset($errorDetail1) && $errorDetail1}<p class="error">{l s='Por favor, verifique pelo menos um produto que você gostaria de devolver.'}</p>{/if}
	{if isset($errorDetail2) && $errorDetail2}<p class="error">{l s='Para cada produto que você deseja adicionar, por favor, especificar a quantidade desejada.'}</p>{/if}
	{if isset($errorNotReturnable) && $errorNotReturnable}<p class="error">{l s='Esta pedido não pode ser devolvido.'}</p>{/if}
	
	<p>{l s='Aqui está uma lista de devolução de mercadorias pendentes'}.</p>
	<div class="block-center" id="block-history">
		{if $ordersReturn && count($ordersReturn)}
		<table id="order-list" class="std">
			<thead>
				<tr>
					<th class="first_item">{l s='Retorno'}</th>
					<th class="item">{l s='Pedido'}</th>
					<th class="item">{l s='Status do pacote'}</th>
					<th class="item">{l s='data de emissão'}</th>
					<th class="last_item">{l s='Devolução'}</th>
				</tr>
			</thead>
			<tbody>
			{foreach from=$ordersReturn item=return name=myLoop}
				<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
					<td class="bold"><a class="color-myaccount" href="javascript:showOrder(0, {$return.id_order_return|intval}, '{$link->getPageLink('order-return')}');" data-ajax="false">{l s='#'}{$return.id_order_return|string_format:"%06d"}</a></td>
					<td class="history_method"><a class="color-myaccount" href="javascript:showOrder(1, {$return.id_order|intval}, '{$link->getPageLink('order-detail')}');" data-ajax="false">{l s='#'}{$return.id_order|string_format:"%06d"}</a></td>
					<td class="history_method"><span class="bold">{$return.state_name|escape:'htmlall':'UTF-8'}</span></td>
					<td class="bold">{dateFormat date=$return.date_add full=0}</td>
					<td class="history_invoice">
					{if $return.state == 2}
						<a href="{$link->getPageLink('pdf-order-return', true, NULL, "id_order_return={$return.id_order_return|intval}")}" title="{l s='Devolução de pedido'} {l s='#'}{$return.id_order_return|string_format:"%06d"}" data-ajax="false"><img src="{$img_dir}icon/pdf.gif" alt="{l s='Devolução de pedido'} {l s='#'}{$return.id_order_return|string_format:"%06d"}" class="icon" /></a>
						<a href="{$link->getPageLink('pdf-order-return', true, NULL, "id_order_return={$return.id_order_return|intval}")}" title="{l s='Devolução de pedido'} {l s='#'}{$return.id_order_return|string_format:"%06d"}" data-ajax="false">{l s='Imprimir'}</a>
					{else}
						--
					{/if}
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
		<div id="block-order-detail" class="hidden">&nbsp;</div>
		{else}
			<p class="warning">{l s='Você não tem autorização para devolução de mercadoria.'}</p>
		{/if}
	</div>
</div><!-- /content -->
