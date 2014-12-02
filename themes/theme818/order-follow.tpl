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



{capture name=path}<a href="{$link->getPageLink('my-account', true)|escape:'html'}">{l s='Minha Conta'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Autorização de Devolução de Mercadoria (ADM)'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1><span>{l s='Autorização de Devolução de Mercadoria (ADM)'}</span></h1>

{if isset($errorQuantity) && $errorQuantity}<p class="error alert alert-danger">{l s='Você não tem produtos suficientes para solicitar uma devolução de mercadoria.'}</p>{/if}

{if isset($errorMsg) && $errorMsg}

	<p class="error alert alert-danger">

		{l s='Por favor, fornecer uma explicação para o seu ADM.'}

	</p>

    <div class="titled_box">

		<h2>{l s='Por favor, fornecer uma explicação para o seu ADM:'}</h2>

    

		<form method="POST"  id="returnOrderMessage"/>

			<p class="textarea">

				<textarea class="form-control" name="returnText"></textarea>

			</p>

			{foreach $ids_order_detail as $id_order_detail}

				<input type="hidden" name="ids_order_detail[{$id_order_detail}]" value="{$id_order_detail}"/>

			{/foreach}

			{foreach $order_qte_input as $key => $value}

				<input type="hidden" name="order_qte_input[{$key}]" value="{$value}"/>

			{/foreach}

			<input type="hidden" name="id_order" value="{$id_order}"/>

			<input class="btn btn-default" type="submit" name="submitReturnMerchandise" value="{l s='Faça um ADM'}"/>

		</form>

	</div>

{/if}

{if isset($errorDetail1) && $errorDetail1}<p class="error alert alert-danger">{l s='Por favor, verifique pelo menos um produto que você gostaria de devolução.'}</p>{/if}

{if isset($errorDetail2) && $errorDetail2}<p class="error alert alert-danger">{l s='Para cada produto que você deseja adicionar, por favor, especificar a quantidade desejada.'}</p>{/if}

{if isset($errorNotReturnable) && $errorNotReturnable}<p class="error alert alert-danger">{l s='Este pedido não pode ser devolvido.'}</p>{/if}



<p>{l s='Lista de devolução de mercadorias pendentes'}.</p>

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

	{if $ordersReturn && count($ordersReturn)}

	<table id="order-list" class="std table table-bordered table-hover footable">

		<thead>

			<tr>

				<th data-class="expand" class="first_item">{l s='Return'}</th>

				<th class="item">{l s='Ordem'}</th>

				<th data-hide="phone,tablet" class="item">{l s='Status do pacote'}</th>

				<th data-hide="phone,tablet" class="item">{l s='Data de emissão'}</th>

				<th data-hide="phone,tablet" class="last_item">{l s='Return slip'}</th>

			</tr>

		</thead>

		<tbody>

		{foreach from=$ordersReturn item=return name=myLoop}

			<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">

				<td class="bold"><a class="color-myaccount" href="javascript:showOrder(0, {$return.id_order_return|intval}, '{$link->getPageLink('order-return', true)|escape:'html'}');">{l s='#'}{$return.id_order_return|string_format:"%06d"}</a></td>

				<td class="history_method"><a class="color-myaccount" href="javascript:showOrder(1, {$return.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html'}');">{l s='#'}{$return.id_order|string_format:"%06d"}</a></td>

				<td class="history_method"><span class="bold">{$return.state_name|escape:'htmlall':'UTF-8'}</span></td>

				<td class="bold">{dateFormat date=$return.date_add full=0}</td>

				<td class="history_invoice">

				{if $return.state == 2}

					<a href="{$link->getPageLink('pdf-order-return', true, NULL, "id_order_return={$return.id_order_return|intval}")|escape:'html'}" title="{l s='Order return'} {l s='#'}{$return.id_order_return|string_format:"%06d"}"><img src="{$img_dir}icon/pdf.gif" alt="{l s='Retorno do pedido'} {l s='#'}{$return.id_order_return|string_format:"%06d"}" class="icon" /></a>

					<a href="{$link->getPageLink('pdf-order-return', true, NULL, "id_order_return={$return.id_order_return|intval}")|escape:'html'}" title="{l s='Retorno do pedido'} {l s='#'}{$return.id_order_return|string_format:"%06d"}">{l s='Imprimir'}</a>

				{else}

					--

				{/if}

				</td>

			</tr>

		{/foreach}

		</tbody>

	</table>

	<div id="block-order-detail" style="display:none;">&nbsp;</div>

	{else}

		<p class="alert alert-info">{l s='Você não tem autorização para devolução de mercadoria.'}</p>

	{/if}

</div>



<ul class="footer_links clearfix">

	<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}"><i class="icon-user"></i>{l s='Voltar para sua conta'}</a></li>

	<li class="f_right"><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>

</ul>

