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

{capture name=path}<a href="{$link->getPageLink('my-account', true)|escape:'html'}">{l s='Minha Conta'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Meus descontos'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1>{l s='Meus descontos'}</h1>



{if isset($cart_rules) && count($cart_rules) && $nb_cart_rules}

<script type="text/javascript">

    $(function() {

      $('#discount_table table').footable()

	  breakpoints: {

 		phone:480

		tablet:1170

		}

    });

  </script>

<div id="discount_table">

    <table class="discount footable table table-hover table-bordered">

        <thead>

            <tr>

                <th data-class="expand" class="discount_code first_item">{l s='#'}</th>

                <th data-hide="phone" class="discount_description item">{l s='Descrição'}</th>

                <th data-hide="phone" class="discount_quantity item">{l s='Quantidade'}</th>

                <th data-hide="phone" class="discount_value item">{l s='Valor'}*</th>

                <th data-hide="phone,tablet" class="discount_minimum item">{l s='Mínimo'}</th>

                <th data-hide="phone,tablet" class="discount_cumulative item">{l s='Acumulativo'}</th>

                <th data-hide="phone,tablet" class="discount_expiration_date last_item">{l s='Data Expiração'}</th>

            </tr>

        </thead>

        <tbody>

        {foreach from=$cart_rules item=discountDetail name=myLoop}

            <tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">

                <td class="discount_code">{$discountDetail.code}</td>

                <td class="discount_description">{$discountDetail.name}</td>

                <td class="discount_quantity">{$discountDetail.quantity_for_user}</td>

                <td class="discount_value">

                    {if $discountDetail.id_discount_type == 1}

                        {$discountDetail.value|escape:'htmlall':'UTF-8'}%

                    {elseif $discountDetail.id_discount_type == 2}

                        {convertPrice price=$discountDetail.value} ({if $discountDetail.reduction_tax == 1}{l s='taxas incluídas'}{else}{l s='taxas excluídas'}{/if})

                    {elseif $discountDetail.id_discount_type == 3}

                        {l s='Frete grátis'}

                    {else}

                        -

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

</div>

{else}

	<p class="alert alert-info">{l s='Você não tem nenhum desconto.'}</p>

{/if}



<ul class="footer_links clearfix">

	<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}"><i class="icon-user"></i>{l s='Voltar para a sua conta'}</a></li>

	<li class="f_right"><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>

</ul>

