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

{capture assign='page_title'}{l s='My vouchers'}{/capture}
{include file='./page-title.tpl'}

<div data-role="content" id="content">
	<a data-role="button" data-icon="arrow-l" data-theme="a" data-mini="true" data-inline="true" href="{$link->getPageLink('my-account', true)}" data-ajax="false">{l s='Minha Conta'}</a>
	
	{if isset($discount) && count($discount) && $nbDiscounts}
	<table class="discount std table_block">
		<thead>
			<tr>
				<th class="discount_code first_item">{l s='#'}</th>
				<th class="discount_description item">{l s='Descrição'}</th>
				<th class="discount_quantity item">{l s='Quantidade'}</th>
				<th class="discount_value item">{l s='Valor'}*</th>
				<th class="discount_minimum item">{l s='Mínimo'}</th>
				<th class="discount_cumulative item">{l s='Acumulado'}</th>
				<th class="discount_expiration_date last_item">{l s='Data de expiração'}</th>
			</tr>
		</thead>
		<tbody>
		{foreach from=$discount item=discountDetail name=myLoop}
			<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
				<td class="discount_code">{$discountDetail.name}</td>
				<td class="discount_description">{$discountDetail.description}</td>
				<td class="discount_quantity">{$discountDetail.quantity_for_user}</td>
				<td class="discount_value">
					{if $discountDetail.id_discount_type == 1}
						{$discountDetail.value|escape:'htmlall':'UTF-8'}%
					{elseif $discountDetail.id_discount_type == 2}
						{convertPrice price=$discountDetail.value}
					{else}
						{l s='Frete Grátis'}
					{/if}
				</td>
				<td class="discount_minimum">
					{if $discountDetail.minimal == 0}
						{l s='Nenhum'}
					{else}
						{convertPrice price=$discountDetail.minimal}
					{/if}
				</td>
				<td class="discount_cumulative">
					{if $discountDetail.cumulable == 1}
						<img src="{$img_dir}icon/yes.gif" alt="{l s='Sim'}" class="icon" /> {l s='Sim'}
					{else}
						<img src="{$img_dir}icon/no.gif" alt="{l s='Não'}" class="icon" valign="middle" /> {l s='Não'}
					{/if}
				</td>
				<td class="discount_expiration_date">{dateFormat date=$discountDetail.date_to}</td>
			</tr>
		{/foreach}
		</tbody>
	</table>
	<p>
		*{l s='Taxas inclusas'}
	</p>
	{else}
		<p class="warning">{l s='Você não tem nenhum comprovantes.'}</p>
	{/if}
	
</div><!-- /content -->
