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

{capture assign='page_title'}{l s='Suas informações pessoais'}{/capture}
{include file='./page-title.tpl'}

<div data-role="content" id="content">
<a data-role="button" data-icon="arrow-l" data-theme="a" data-mini="true" data-inline="true" href="{$link->getPageLink('my-account', true)}" data-ajax="false">{l s='Minha Conta'}</a>

{include file="./errors.tpl"}

{if isset($confirmation) && $confirmation}
	<p class="success">
		{l s='A sua informação pessoal foi atualizado com sucesso.'}
		{if isset($pwd_changed)}<br />{l s='Sua senha foi enviada para o seu e-mail:'} {$email|escape:'htmlall':'UTF-8'}{/if}
	</p>
{else}
	<h3>{l s='Por favor, não se esqueça de atualizar suas informações pessoais.'}</h3>
	<p class="required bold"><sup>*</sup>{l s='Campos obrigatórios'}</p>
	<form action="{$link->getPageLink('identity', true)}" method="post" class="std">
		<label>{l s='Título'}</label>
		<fieldset data-role="controlgroup">
		{foreach from=$genders key=k item=gender}
			<input type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id}checked="checked"{/if} />
			<label for="id_gender{$gender->id}" class="top">{$gender->name}</label>
		{/foreach}
		</fieldset>
		<fieldset class="required text">
			<label for="firstname">{l s='Nome'} <sup>*</sup></label>
			<input type="text" id="firstname" name="firstname" value="{$smarty.post.firstname}" />
		</fieldset>
		<fieldset class="required text">
			<label for="lastname">{l s='Sobrenome'} <sup>*</sup></label>
			<input type="text" name="lastname" id="lastname" value="{$smarty.post.lastname}" />
		</fieldset>
		<fieldset class="required text">
			<label for="email">{l s='Email'} <sup>*</sup></label>
			<input type="text" name="email" id="email" value="{$smarty.post.email}" />
		</fieldset>
		<fieldset class="required text">
			<label for="old_passwd">{l s='Senha atual'} <sup>*</sup></label>
			<input type="password" name="old_passwd" id="old_passwd" />
		</fieldset>
		<fieldset class="password">
			<label for="passwd">{l s='Nova senha'}</label>
			<input type="password" name="passwd" id="passwd" />
		</fieldset>
		<fieldset class="password">
			<label for="confirmation">{l s='Confirmação'}</label>
			<input type="password" name="confirmation" id="confirmation" />
		</fieldset>
		<label>{l s='Data de aniversário'}</label>
		<fieldset data-type="horizontal" data-role="controlgroup">
			<select name="days" id="days">
				<option value="">-</option>
				{foreach from=$days item=v}
					<option value="{$v|escape:'htmlall':'UTF-8'}" {if ($sl_day == $v)}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
				{/foreach}
			</select>
			<select id="months" name="months">
				<option value="">-</option>
				{foreach from=$months key=k item=v}
					<option value="{$k|escape:'htmlall':'UTF-8'}" {if ($sl_month == $k)}selected="selected"{/if}>{l s=$v}&nbsp;</option>
				{/foreach}
			</select>
			<select id="years" name="years">
				<option value="">-</option>
				{foreach from=$years item=v}
					<option value="{$v|escape:'htmlall':'UTF-8'}" {if ($sl_year == $v)}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
				{/foreach}
			</select>
		</fieldset>
		{if $newsletter}
		<fieldset data-role="controlgroup">
			<input type="checkbox" id="newsletter" name="newsletter" value="1" {if isset($smarty.post.newsletter) && $smarty.post.newsletter == 1} checked="checked"{/if} />
			<label for="newsletter">{l s='Assine nosso boletim informativo!'}</label>
			<input type="checkbox" name="optin" id="optin" value="1" {if isset($smarty.post.optin) && $smarty.post.optin == 1} checked="checked"{/if} />
			<label for="optin">{l s='Receber ofertas especiais de nossos parceiros!'}</label>
		</fieldset>
		{/if}
		<input type="submit" data-theme="a" class="button" name="submitIdentity" value="{l s='Salvar'}" />
		<p id="security_informations">
			{l s='[Inserir cláusula de privacidade dos dados dos clientes aqui]'}
		</p>
	</form>
{/if}
</div><!-- /content -->
