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



<tr id="product_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}{if !empty($product.gift)}_gift{/if}" class="bordercolor {if isset($productLast) && $productLast && (!isset($ignoreProductLast) || !$ignoreProductLast)}last_item{/if}{if isset($productFirst) && $productFirst}first_item{/if} {if isset($customizedDatas.$productId.$productAttributeId) AND $quantityDisplayed == 0}alternate_item{/if} cart_item address_{$product.id_address_delivery|intval} {if $odd}odd{else}even{/if}">



	<td class="cart_product">

		<a href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)|escape:'htmlall':'UTF-8'}">

        <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'medium_default')|escape:'html'}" alt="{$product.name|escape:'htmlall':'UTF-8'}" />

        </a>

	</td>

	<td class="cart">

    	<h5><a class="product_link" href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)|escape:'htmlall':'UTF-8'}">{$product.name|escape:'htmlall':'UTF-8'}</a></h5>

    	{if isset($product.attributes) && $product.attributes}<a class="cart-atr" href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)|escape:'htmlall':'UTF-8'}">{$product.attributes|escape:'htmlall':'UTF-8'}</a>{/if}

 <div class="clearfix insset-bottom">

    <span class="title-th">{l s='Ref.'}:</span>  {if $product.reference}{$product.reference|escape:'htmlall':'UTF-8'}{else}--{/if}

</div>

 <div class="clearfix insset-bottom">

    <span class="title-th">{l s='Preço Unit.'}:</span>

    <span class="price" id="product_price_{$product.id_product}_{$product.id_product_attribute}_{$product.id_address_delivery|intval}{if !empty($product.gift)}_gift{/if}">

			{if !empty($product.gift)}

				<span class="gift-icon">{l s='Presente!'}</span>

			{else}

				{if isset($product.is_discounted) && $product.is_discounted}

					<span class="price-old">{convertPrice price=$product.price_without_specific_price}</span>

				{/if}

				{if !$priceDisplay}

					{convertPrice price=$product.price_wt}

				{else}

					{convertPrice price=$product.price}

				{/if}

			{/if}

		</span>

</div>

 <div class="clearfix insset-bottom">

        <span class="title-th cart_quantity_title">{l s='Qnt'}:</span>

        

        <div class="cart_quantity">

        		{if isset($cannotModify) AND $cannotModify == 1}

			<span class="f_left">

				{if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}{$customizedDatas.$productId.$productAttributeId|@count}

				{else}

					{$product.cart_quantity-$quantityDisplayed}

				{/if}

			</span>

		{else}

			{if isset($customizedDatas.$productId.$productAttributeId) AND $quantityDisplayed == 0}

				<span id="cart_quantity_custom_{$product.id_product}_{$product.id_product_attribute}_{$product.id_address_delivery|intval}" >{$product.customizationQuantityTotal}</span>

			{/if}

			{if !isset($customizedDatas.$productId.$productAttributeId) OR $quantityDisplayed > 0}

				<div id="cart_quantity_button" class="cart_quantity_button f_left">

                

                {if $product.minimal_quantity < ($product.cart_quantity-$quantityDisplayed) OR $product.minimal_quantity <= 1}

				<a rel="nofollow" class="cart_quantity_down" id="cart_quantity_down_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" href="{$link->getPageLink('cart', true, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_address_delivery={$product.id_address_delivery|intval}&amp;op=down&amp;token={$token_cart}")|escape:'html'}" title="{l s='Retirar'}">

				<img src="{$img_dir}icon/quantity_down.gif" alt="{l s='Retirar'}" width="23" height="24" />

				</a>

				{else}

				<a class="cart_quantity_down low_opacity" href="#" id="cart_quantity_down_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" title="{l s='Você deve adquirir um mínimo de %d deste produto.' sprintf=$product.minimal_quantity}">

				<img src="{$img_dir}icon/quantity_down.gif" width="23" height="24" alt="{l s='Retirar'}" />

				</a>

				{/if}

                		<input type="hidden" value="{if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}{$customizedDatas.$productId.$productAttributeId|@count}{else}{$product.cart_quantity-$quantityDisplayed}{/if}" name="quantity_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}_hidden" />

				<input size="2" type="text" autocomplete="off" class="cart_quantity_input" value="{if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}{$customizedDatas.$productId.$productAttributeId|@count}{else}{$product.cart_quantity-$quantityDisplayed}{/if}"  name="quantity_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" />

                

				<a rel="nofollow" class="cart_quantity_up" id="cart_quantity_up_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" href="{$link->getPageLink('cart', true, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_address_delivery={$product.id_address_delivery|intval}&amp;token={$token_cart}")|escape:'html'}" title="{l s='Add'}"><img src="{$img_dir}icon/quantity_up.gif" alt="{l s='Add'}" width="23" height="24" /></a>



				</div>

		

				

			{/if}

		{/if}

        

        	{if !isset($noDeleteButton) || !$noDeleteButton}



		{if (!isset($customizedDatas.$productId.$productAttributeId) OR $quantityDisplayed > 0) && empty($product.gift)}

			<div class="div_cart_quantity_delete">

				<a rel="nofollow" class="cart_quantity_delete" id="{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" href="{$link->getPageLink('cart', true, NULL, "delete=1&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_address_delivery={$product.id_address_delivery|intval}&amp;token={$token_cart}")|escape:'html'}"><i class="icon-trash"></i></a>

			</div>

		{/if}



	{/if}

        </div>

        </div>

        <span class="title-th">{l s='Total'}:</span>

        		<span class="price total-pr" id="total_product_price_{$product.id_product}_{$product.id_product_attribute}_{$product.id_address_delivery|intval}{if !empty($product.gift)}_gift{/if}">

			{if !empty($product.gift)}

				<span class="gift-icon">{l s='Presente!'}</span>

			{else}

				{if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}

					{if !$priceDisplay}{displayPrice price=$product.total_customization_wt}{else}{displayPrice price=$product.total_customization}{/if}

				{else}

					{if !$priceDisplay}{displayPrice price=$product.total_wt}{else}{displayPrice price=$product.total}{/if}

				{/if}

			{/if}

		</span>   

    </td>

</tr>

