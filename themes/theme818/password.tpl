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



{capture name=path}<a href="{$link->getPageLink('authentication', true)|escape:'html'}" title="{l s='Autenticação'}" rel="nofollow">{l s='Autenticação'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Esqueceu sua senha'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1><span>{l s='Esqueceu sua senha?'}</span></h1>



{include file="$tpl_dir./errors.tpl"}



{if isset($confirmation) && $confirmation == 1}

	<p class="alert alert-success">

    <button class="close" data-dismiss="alert" type="button">×</button>

	{l s='Sua senha foi redefinida com sucesso e uma confirmação foi enviada para o seu endereço de e-mail:'} {if isset($email)}{$email|escape:'htmlall':'UTF-8'|stripslashes}{/if}

    </p>

	{elseif isset($confirmation) && $confirmation == 2}

		<p class="alert alert-success"><button class="close" data-dismiss="alert" type="button">×</button> {l s='Um email de confirmação foi enviado para o seu endereço:'} {if isset($email)}{$email|escape:'htmlall':'UTF-8'|stripslashes}{/if}</p>

	{else}

<p>{l s='Por favor insira o endereço de e-mail que você usou para se cadastrar. Em seguida enviaremos uma nova senha. '}</p>

<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post" class="std" id="form_forgotpassword">

	<fieldset>

		<p class="form-group">

			<label for="email">{l s='Email'}</label>

			<input class="form-control" type="email" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall':'UTF-8'|stripslashes}{/if}" />

		</p>

		<div class="submit">

			<input type="submit" class="button btn btn-default" value="{l s='Recuperar Senha'}" />

		</div>

	</fieldset>

</form>

{/if}

<p class="clear clearfix">

    <a class="button btn btn-default fr" href="{$link->getPageLink('authentication')|escape:'html'}" title="{l s='Voltar para o Login'}" rel="nofollow">{l s='Voltar para o Login'}</a> 

</p>

