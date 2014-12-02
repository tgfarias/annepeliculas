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



{capture name=path}{l s='Contato'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1><span>{l s='Atendimento ao Cliente'} - {if isset($customerThread) && $customerThread}{l s='Sua resposta'}{else}{l s='Entre em contato'}{/if}</span></h1>

{if isset($confirmation)}

	<p class="alert alert-success">

    	<button class="close" data-dismiss="alert" type="button">×</button>

    	<i class="icon-ok"></i>{l s='Sua mensagem foi enviada com sucesso para a nossa equipe.'}</p>

	<ul class="footer_links clearfix">

		<li><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>

	</ul>

{elseif isset($alreadySent)}

	<p>{l s='Sua mensagem já foi enviada.'}</p>

	<ul class="footer_links clearfix">

		<li><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>

	</ul>

{else}

	<p class="title-pagecontact"><i class="icon-comment-alt"></i>{l s='Para perguntas sobre uma encomenda ou para obter mais informações sobre nossos produtos'}.</p>

	{include file="$tpl_dir./errors.tpl"}

	<form id="contact_form" action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post" class="std" enctype="multipart/form-data">

		<fieldset class="titled_box">

			<h2><span>{l s='enviar uma mensagem'}</span></h2>

            <div class="row">

            <div class="col-xs-12 col-sm-6">

                <p class="form-group">

                    <label for="id_contact">{l s='Assunto'}</label>

                {if isset($customerThread.id_contact)}

                    {foreach from=$contacts item=contact}

                        {if $contact.id_contact == $customerThread.id_contact}

                            <input type="text" id="contact_name" name="contact_name" value="{$contact.name|escape:'htmlall':'UTF-8'}" readonly="readonly" class="form-control" />

                            <input type="hidden" name="id_contact" value="{$contact.id_contact}" />

                        {/if}

                    {/foreach}

                </p>

                {else}

                    <select id="id_contact" class="form-control" name="id_contact" onchange="showElemFromSelect('id_contact', 'desc_contact')">

                        <option value="0">{l s='-- Escolha --'}</option>

                    {foreach from=$contacts item=contact}

                        <option value="{$contact.id_contact|intval}" {if isset($smarty.post.id_contact) && $smarty.post.id_contact == $contact.id_contact}selected="selected"{/if}>{$contact.name|escape:'htmlall':'UTF-8'}</option>

                    {/foreach}

                    </select>

                </p>

                <p id="desc_contact0" class="desc_contact">&nbsp;</p>

                    {foreach from=$contacts item=contact}

                        <p id="desc_contact{$contact.id_contact|intval}" class="desc_contact" style="display:none;">

                            {$contact.description|escape:'htmlall':'UTF-8'}

                        </p>

                    {/foreach}

                {/if}

                <p class="form-group">

                    <label for="email">{l s='Email'}</label>

                    {if isset($customerThread.email)}

                        <input type="email" id="email" class="form-control" name="from" value="{$customerThread.email|escape:'htmlall':'UTF-8'}" readonly="readonly" />

                    {else}

                        <input type="email" id="email" class="form-control" name="from" value="{$email|escape:'htmlall':'UTF-8'}" />

                    {/if}

                </p>

            {if !$PS_CATALOG_MODE}

                {if (!isset($customerThread.id_order) || $customerThread.id_order > 0)}

                <p class="form-group">

                    <label for="id_order">{l s='Código do pedido'}</label>

                    {if !isset($customerThread.id_order) && isset($isLogged) && $isLogged == 1}

                        <select name="id_order" class="form-control" >

                            <option value="0">{l s='-- Escolha --'}</option>

                            {foreach from=$orderList item=order}

                                <option value="{$order.value|intval}" {if $order.selected|intval}selected="selected"{/if}>{$order.label|escape:'htmlall':'UTF-8'}</option>

                            {/foreach}

                        </select>

                    {elseif !isset($customerThread.id_order) && !isset($isLogged)}

                        <input class="form-control" type="text" name="id_order" id="id_order" value="{if isset($customerThread.id_order) && $customerThread.id_order|intval > 0}{$customerThread.id_order|intval}{else}{if isset($smarty.post.id_order) && !empty($smarty.post.id_order)}{$smarty.post.id_order|intval}{/if}{/if}" />

                    {elseif $customerThread.id_order|intval > 0}

                        <input class="form-control" type="text" name="id_order" id="id_order" value="{$customerThread.id_order|intval}" readonly="readonly" />

                    {/if}

                </p>

                {/if}

                {if isset($isLogged) && $isLogged}

                <p class="text form-group">

                <label for="id_product">{l s='Produto'}</label>

                    {if !isset($customerThread.id_product)}

                    {foreach from=$orderedProductList key=id_order item=products name=products}

                        <select name="id_product" id="{$id_order}_order_products" class="product_select form-control" style="{if !$smarty.foreach.products.first} display:none; {/if}" {if !$smarty.foreach.products.first}disabled="disabled" {/if}>

                            <option value="0">{l s='-- Escolha --'}</option>

                            {foreach from=$products item=product}

                                <option value="{$product.value|intval}">{$product.label|escape:'htmlall':'UTF-8'}</option>

                            {/foreach}

                        </select>

                    {/foreach}

                    {elseif $customerThread.id_product > 0}

                        <input class="form-control" type="text" name="id_product" id="id_product" value="{$customerThread.id_product|intval}" readonly="readonly" />

                    {/if}

                </p>

                {/if}

            {/if}

            {if $fileupload == 1}

                <p class="form-group upload-file">

                <label for="fileUpload">{l s='Anexar arquivo'}</label>

                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />

                    <input  type="file" name="fileUpload" id="fileUpload" />

                </p>

            {/if}

            </div>

            <div class="col-xs-12 col-sm-6">

            <p class="form-group">

                <label for="message">{l s='Mensagem'}</label>

                 <textarea id="message" class="form-control" name="message" rows="15" cols="10">{if isset($message)}{$message|escape:'htmlall':'UTF-8'|stripslashes}{/if}</textarea>

            </p>

            </div>

        </div>

		<div class="submit">

			<input  class="button btn btn-default" type="submit" name="submitMessage" id="submitMessage" value="{l s='Enviar'}"/>

		</div>

	</fieldset>

</form>

{/if}

