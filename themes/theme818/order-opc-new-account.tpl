<div id="opc_new_account" class="opc-main-block">

	<div id="opc_new_account-overlay" class="opc-overlay" style="display: none;"></div> 

	<h1><span>1</span> {l s='Conta'}</h1>

	<form action="{$link->getPageLink('authentication', true, NULL, "back=order-opc")|escape:'html'}" method="post" id="login_form" class="std">

		<fieldset>

			<div class="titled_box"><h2><span>{l s='Já é registrado?'}</span></h2></div>

			<p><a href="#" class="button btn btn-default" id="openLoginFormBlock">{l s='Clique aqui'}</a></p>

			<div id="login_form_content" style="display:none;">

				<!-- Error return block -->

				<div id="opc_login_errors" class="error alert alert-danger" style="display:none;"></div>

				<!-- END Error return block -->

				<div class="form-group">

					<label for="login_email">{l s='Email'}</label>

					<input type="text" id="login_email" class="form-control" name="email" />

				</div>

				<div class="form-group">

					<label for="login_passwd">{l s='Senha'}</label>

					<input type="password" id="login_passwd" class="form-control" name="login_passwd" />

				</div>

                <div class="form-group">

                	<a href="{$link->getPageLink('password', true)|escape:'html'}" class="lost_password">{l s='Esqueceu sua senha?'}</a>

                </div>

				<div class="submit">

					{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}

					<input type="submit" id="SubmitLogin" name="SubmitLogin" class="button btn btn-default" value="{l s='Login'}" />

				</div>

			</div>

		</fieldset>

	</form>

	<form action="javascript:;" method="post" id="new_account_form" class="std" autocomplete="on" autofill="on">

		<fieldset>

        	<div id="opc_account_errors" class="error alert-danger" style="display:none;"></div>

			<div class="titled_box"><h2 id="new_account_title">{l s='Novo cliente'}</h2></div>

			<div id="opc_account_choice">

				<div class="opc_float">

					<h4>{l s='Checkout instantâneo'}</h4>

					<p>

						<input type="button" class="exclusive_large btn btn-default" id="opc_guestCheckout" value="{l s='Checkout de visitante'}" />

					</p>

				</div>



				<div class="opc_float">

					<h4>{l s='Crie sua conta hoje e desfrute:'}</h4>

					<ul class="bullet">

						<li>{l s='Acesso personalizado e seguro'}</li>

						<li>{l s='Um processo de check-out fácil e rápido'}</li>

						<li>{l s='Endereços de cobrança e entrega separados'}</li>

					</ul>

					<p>

						<input type="button" class="button_large btn btn-default" id="opc_createAccount" value="{l s='Criar uma conta'}" />

					</p>

				</div>

				<div class="clear"></div>

			</div>

			<div id="opc_account_form">

				{$HOOK_CREATE_ACCOUNT_TOP}

				<script type="text/javascript">

				// <![CDATA[

				idSelectedCountry = {if isset($guestInformations) && $guestInformations.id_state}{$guestInformations.id_state|intval}{else}false{/if};

				{if isset($countries)}

					{foreach from=$countries item='country'}

						{if isset($country.states) && $country.contains_states}

							countries[{$country.id_country|intval}] = new Array();

							{foreach from=$country.states item='state' name='states'}

								countries[{$country.id_country|intval}].push({ldelim}'id' : '{$state.id_state}', 'name' : '{$state.name|escape:'htmlall':'UTF-8'}'{rdelim});

							{/foreach}

						{/if}

						{if $country.need_identification_number}

							countriesNeedIDNumber.push({$country.id_country|intval});

						{/if}	

						{if isset($country.need_zip_code)}

							countriesNeedZipCode[{$country.id_country|intval}] = {$country.need_zip_code};

						{/if}

					{/foreach}

				{/if}

				//]]>

					{literal}

					function vat_number()

					{

						if ($('#company').val() != '')

							$('#vat_number_block').show();

						else

							$('#vat_number_block').hide();

					}

					function vat_number_invoice()

					{

						if ($('#company_invoice').val() != '')

							$('#vat_number_block_invoice').show();

						else

							$('#vat_number_block_invoice').hide();

					}

					

					$(document).ready(function() {

						$('#company').on('input',function(){

							vat_number();

						});

						$('#company_invoice').on('input',function(){

							vat_number_invoice();

						});

						vat_number();

						vat_number_invoice();

					});

					{/literal}

				</script>

				<!-- Error return block -->

				

				<!-- END Error return block -->

                <div class="row">

                	<div class="col-xs-12 col-sm-6">

				<!-- Account -->

				<input type="hidden" id="is_new_customer" name="is_new_customer" value="0" />

				<input type="hidden" id="opc_id_customer" name="opc_id_customer" value="{if isset($guestInformations) && $guestInformations.id_customer}{$guestInformations.id_customer}{else}0{/if}" />

				<input type="hidden" id="opc_id_address_delivery" name="opc_id_address_delivery" value="{if isset($guestInformations) && $guestInformations.id_address_delivery}{$guestInformations.id_address_delivery}{else}0{/if}" />

				<input type="hidden" id="opc_id_address_invoice" name="opc_id_address_invoice" value="{if isset($guestInformations) && $guestInformations.id_address_delivery}{$guestInformations.id_address_delivery}{else}0{/if}" />

				<p class="required form-group">

					<label for="email">{l s='Email'} <sup>*</sup></label>

					<input type="email" class="form-control" id="email" name="email" value="{if isset($guestInformations) && $guestInformations.email}{$guestInformations.email}{/if}" />

				</p>

				<p class="required password is_customer_param form-group">

					<label for="passwd">{l s='Senha'} <sup>*</sup></label>

					<input type="password" class="form-control" name="passwd" id="passwd" />

					<small class="form_info">{l s='(mínimo 5 caracteres.)'}</small>

				</p>

				<p class="radio required form-group bottom_indent clearfix">

					<span class="radio_title">{l s='Título'}</span>

					{foreach from=$genders key=k item=gender}

						<input type="radio" name="id_gender" id="id_gender{$gender->id_gender}" value="{$gender->id_gender}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id_gender}checked="checked"{/if} />

						<label for="id_gender{$gender->id_gender}" class="top">{$gender->name}</label>

					{/foreach}

				</p>

				<p class="required form-group">

					<label for="firstname">{l s='Nome'} <sup>*</sup></label>

					<input type="text" class="form-control" id="customer_firstname" name="customer_firstname" onblur="$('#firstname').val($(this).val());" value="{if isset($guestInformations) && $guestInformations.customer_firstname}{$guestInformations.customer_firstname}{/if}" />

				</p>

				<p class="required form-group">

					<label for="lastname">{l s='Sobrenome'} <sup>*</sup></label>

					<input type="text" class="form-control" id="customer_lastname" name="customer_lastname" onblur="$('#lastname').val($(this).val());" value="{if isset($guestInformations) && $guestInformations.customer_lastname}{$guestInformations.customer_lastname}{/if}" />

				</p>

				<div class="form-group">

					<label>{l s='Data de nascimento'}</label>

                    <div class="row">

                    	<div class="col-xs-4">

                            <select id="days" name="days" class="form-control">

                                <option value="">-</option>

                                {foreach from=$days item=day}

                                    <option value="{$day|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_day == $day)} selected="selected"{/if}>{$day|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>

                                {/foreach}

                            </select>

                            {*

                                {l s='Janeiro'}

                                {l s='Fevereiro'}

                                {l s='Março'}

                                {l s='Abril'}

                                {l s='Maio'}

                                {l s='Junho'}

                                {l s='Julho'}

                                {l s='Agosto'}

                                {l s='Setembro'}

                                {l s='Outubro'}

                                {l s='Novembro'}

                                {l s='Dezembro'}

                            *}

                        </div>

                        <div class="col-xs-4">

                            <select id="months" name="months" class="form-control">

                                <option value="">-</option>

                                {foreach from=$months key=k item=month}

                                    <option value="{$k|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_month == $k)} selected="selected"{/if}>{l s=$month}&nbsp;</option>

                                {/foreach}

                            </select>

                        </div>

                        <div class="col-xs-4">

                            <select id="years" name="years" class="form-control">

                                <option value="">-</option>

                                {foreach from=$years item=year}

                                    <option value="{$year|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_year == $year)} selected="selected"{/if}>{$year|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>

                                {/foreach}

                            </select>

                        </div>

                    </div>

				</div>

				{if isset($newsletter) && $newsletter}

				<p class="checkbox-inline">

					<input type="checkbox" name="newsletter" id="newsletter" value="1" {if isset($guestInformations) && $guestInformations.newsletter}checked="checked"{/if} autocomplete="off"/>

					<label for="newsletter">{l s='Assine nosso boletim informativo!'}</label>

				</p>

                <br />

				<p class="checkbox-inline ml_none" >

					<input type="checkbox"name="optin" id="optin" value="1" {if isset($guestInformations) && $guestInformations.optin}checked="checked"{/if} autocomplete="off"/>

					<label for="optin">{l s='Receber ofertas especiais de nossos parceiros!'}</label>

				</p>

				{/if}

                </div>

                	<div class="col-xs-12 col-sm-6 top_up">

                <div class="titled_box">

                	<h2><span>{l s='Endereço de entrega'}</span></h2>

                </div>

				{$stateExist = false}

				{foreach from=$dlv_all_fields item=field_name}

				{if $field_name eq "company" && $b2b_enable}

				<p class="form-group">

					<label for="company">{l s='Companhia'}</label>

					<input type="text" class="form-control" id="company" name="company" value="{if isset($guestInformations) && $guestInformations.company}{$guestInformations.company}{/if}" />

				</p>

				{elseif $field_name eq "firstname"}

				<p class="required form-group">

					<label for="firstname">{l s='Nome'} <sup>*</sup></label>

					<input type="text" class="form-control" id="firstname" name="firstname" value="{if isset($guestInformations) && $guestInformations.firstname}{$guestInformations.firstname}{/if}" />

				</p>

				{elseif $field_name eq "lastname"}

				<p class="required form-group">

					<label for="lastname">{l s='Sobrenome'} <sup>*</sup></label>

					<input type="text" class="form-control" id="lastname" name="lastname" value="{if isset($guestInformations) && $guestInformations.lastname}{$guestInformations.lastname}{/if}" />

				</p>

				{elseif $field_name eq "address1"}

				<p class="required form-group">

					<label for="address1">{l s='Endereço'} <sup>*</sup></label>

					<input type="text" class="form-control" name="address1" id="address1" value="{if isset($guestInformations) && $guestInformations.address1}{$guestInformations.address1}{/if}" />

				</p>

				{elseif $field_name eq "address2"}

				<p class="form-group is_customer_param">

					<label for="address2">{l s='Endereço (Linha 2)'}</label>

					<input type="text" class="form-control" name="address2" id="address2" value="" />

				</p>

				{elseif $field_name eq "postcode"}

                {$postCodeExist = true}

				<p class="required postcode form-group">

					<label for="postcode">{l s='CEP'} <sup>*</sup></label>

					<input type="tel" class="form-control" name="postcode" id="postcode" value="{if isset($guestInformations) && $guestInformations.postcode}{$guestInformations.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />

				</p>

				{elseif $field_name eq "city"}

				<p class="required form-group">

					<label for="city">{l s='Cidade'} <sup>*</sup></label>

					<input type="text" class="form-control" name="city" id="city" value="{if isset($guestInformations) && $guestInformations.city}{$guestInformations.city}{/if}" />

					

				</p>

				{elseif $field_name eq "country" || $field_name eq "Country:name"}

				<p class="required form-group">

					<label for="id_country">{l s='País'} <sup>*</sup></label>

					<select name="id_country" id="id_country" class="form-control">

						{foreach from=$countries item=v}

						<option value="{$v.id_country}"{if (isset($guestInformations) AND $guestInformations.id_country == $v.id_country) OR (!isset($guestInformations) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name|escape:'htmlall':'UTF-8'}</option>

						{/foreach}

					</select>

				</p>

				{elseif $field_name eq "vat_number"}	

				<div id="vat_number_block" style="display:none;">

					<!-- <p class="form-group">

						<label for="vat_number">{l s='VAT number'}</label>

						<input type="text" class="form-control" name="vat_number" id="vat_number" value="{if isset($guestInformations) && $guestInformations.vat_number}{$guestInformations.vat_number}{/if}" />

					</p>
 -->
				</div>

				{elseif $field_name eq "state" || $field_name eq 'State:name'}

				{$stateExist = true}

				<p class="required id_state form-group" style="display:none;"> 

					<label for="id_state">{l s='Estado'} <sup>*</sup></label>

					<select name="id_state" id="id_state" class="form-control">

						<option value="">-</option>

					</select>

				</p>

				{/if}

				{/foreach}

				<p class="required form-group dni">

					<label for="dni">{l s='Número de identificação'}</label>

					<input type="text" class="form-control" name="dni" id="dni" value="{if isset($guestInformations) && $guestInformations.dni}{$guestInformations.dni}{/if}" />

					<small class="form_info">{l s='DNI / NIF / NIE'}</small>

				</p>

                {if !$postCodeExist}

				<p class="required postcode form-group unvisible">

					<label for="postcode">{l s='CEP'} <sup>*</sup></label>

					<input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($guestInformations) && $guestInformations.postcode}{$guestInformations.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />

				</p>

				{/if}

				{if !$stateExist}

				<p class="required id_state form-group unvisible">

					<label for="id_state">{l s='Estado'} <sup>*</sup></label>

					<select name="id_state" id="id_state" class="form-control">

						<option value="">-</option>

					</select>

				</p>

				{/if}

				<p class="textarea is_customer_param">

					<label for="other">{l s='Informação Adicional'}</label>

					<textarea class="form-control" name="other" id="other" cols="26" rows="3"></textarea>

				</p>

				{if isset($one_phone_at_least) && $one_phone_at_least}

					<p class="inline-infos required is_customer_param">{l s='Você deve registrar pelo menos um número de telefone.'}</p>

				{/if}								

				<p class="form-group is_customer_param">

					<label for="phone">{l s='Fone residencial'}</label>

					<input type="tel" class="form-control" name="phone" id="phone" value="{if isset($guestInformations) && $guestInformations.phone}{$guestInformations.phone}{/if}" />

				</p>

				<p class="{if isset($one_phone_at_least) && $one_phone_at_least}required {/if}form-group">

					<label for="phone_mobile">{l s='Fone celular'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>*</sup>{/if}</label>

					<input type="tel" class="form-control" name="phone_mobile" value="{if isset($guestInformations) && $guestInformations.phone_mobile}{$guestInformations.phone_mobile}{/if}" />

				</p>

				<input type="hidden" name="alias" id="alias" value="{l s='Meu endereço'}"/>



				<p class="checkbox-inline is_customer_param">

					<input type="checkbox" name="invoice_address" id="invoice_address" autocomplete="off"/>

					<label for="invoice_address"><b>{l s='Por favor, use um outro endereço para cobrança'}</b></label>

				</p>



				<div id="opc_invoice_address" class="titled_box is_customer_param">

					{assign var=stateExist value=false}

					<h2><span>{l s='Endereço de cobrança'}</span></h2>

					{foreach from=$inv_all_fields item=field_name}

					{if $field_name eq "company" &&  $b2b_enable}

					<p class="form-group is_customer_param">

						<label for="company_invoice">{l s='Companhia'}</label>

						<input type="text" class="form-control" id="company_invoice" name="company_invoice" value="" />

					</p>

					{elseif $field_name eq "vat_number"}

				  <div id="vat_number_block_invoice" class="is_customer_param" style="display:none;">

						<p class="form-group">

							<label for="vat_number_invoice">{l s='Número VAT'}</label>

							<input type="text" class="form-control" id="vat_number_invoice" name="vat_number_invoice" value="" />

						</p>

					</div>

					<p class="required form-group dni_invoice">

						<label for="dni">{l s='Número de identificação'}</label>

						<input type="text" class="form-control" name="dni_invoice" id="dni_invoice" value="{if isset($guestInformations) && $guestInformations.dni_invoice}{$guestInformations.dni_invoice}{/if}" />

						<small class="form_info">{l s='DNI / NIF / NIE'}</small>

					</p>

					{elseif $field_name eq "firstname"}

					<p class="required form-group">

						<label for="firstname_invoice">{l s='Nome'} <sup>*</sup></label>

						<input type="text" class="form-control" id="firstname_invoice" name="firstname_invoice" value="{if isset($guestInformations) && $guestInformations.firstname_invoice}{$guestInformations.firstname_invoice}{/if}" />

					</p>

					{elseif $field_name eq "lastname"}

					<p class="required form-group">

						<label for="lastname_invoice">{l s='Sobrenome'} <sup>*</sup></label>

						<input type="text" class="form-control" id="lastname_invoice" name="lastname_invoice" value="{if isset($guestInformations) && $guestInformations.firstname_invoice}{$guestInformations.firstname_invoice}{/if}" />

					</p>

					{elseif $field_name eq "address1"}

					<p class="required form-group">

						<label for="address1_invoice">{l s='Endereço'} <sup>*</sup></label>

						<input type="text" class="form-control" name="address1_invoice" id="address1_invoice" value="{if isset($guestInformations) && $guestInformations.address1_invoice}{$guestInformations.address1_invoice}{/if}" />

					</p>

					{elseif $field_name eq "address2"}

					<p class="form-group is_customer_param">

						<label for="address2_invoice">{l s='Endereço (Linha 2)'}</label>

						<input type="text" class="form-control" name="address2_invoice" id="address2_invoice" value="{if isset($guestInformations) && $guestInformations.address2_invoice}{$guestInformations.address2_invoice}{/if}" />

					</p>

					{elseif $field_name eq "postcode"}

                    {$postCodeExist = true}

					<p class="required postcode form-group">

						<label for="postcode_invoice">{l s='CEP'} <sup>*</sup></label>

						<input type="text" class="form-control" name="postcode_invoice" id="postcode_invoice" value="{if isset($guestInformations) && $guestInformations.postcode_invoice}{$guestInformations.postcode_invoice}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />

					</p>

					{elseif $field_name eq "city"}

					<p class="required form-group">

						<label for="city_invoice">{l s='Cidade'} <sup>*</sup></label>

						<input type="text" class="form-control" name="city_invoice" id="city_invoice" value="{if isset($guestInformations) && $guestInformations.city_invoice}{$guestInformations.city_invoice}{/if}" />

					</p>

					{elseif $field_name eq "country" || $field_name eq "Country:name"}

					<p class="required form-group">

						<label for="id_country_invoice">{l s='País'} <sup>*</sup></label>

						<select name="id_country_invoice" id="id_country_invoice" class="form-control">

							<option value="">-</option>

							{foreach from=$countries item=v}

							<option value="{$v.id_country}"{if (isset($guestInformations) AND $guestInformations.id_country_invoice == $v.id_country) OR (!isset($guestInformations) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name|escape:'htmlall':'UTF-8'}</option>

							{/foreach}

						</select>

					</p>

					{elseif $field_name eq "state" || $field_name eq 'State:name'}

					{$stateExist = true}

				  <p class="required id_state_invoice form-group " style="display:none;">

						<label for="id_state_invoice">{l s='Estado'} <sup>*</sup></label>

						<select name="id_state_invoice" id="id_state_invoice" class="form-control">

							<option value="">-</option>

						</select>

					</p>

					{/if}

					{/foreach}

                {if !$postCodeExist}

					<p class="required postcode_invoice form-group unvisible">

						<label for="postcode_invoice">{l s='CEP'} <sup>*</sup></label>

						<input type="text" class="form-control" name="postcode_invoice" id="postcode_invoice" value="" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />

					</p>

					{/if}

				{if !$stateExist}

				  <p class="required id_state_invoice form-group unvisible">

						<label for="id_state_invoice">{l s='Estado'} <sup>*</sup></label>

						<select name="id_state_invoice" id="id_state_invoice" class="form-control">

							<option value="">-</option>

						</select>

					</p>

					{/if}

                   <p class="textarea is_customer_param">

						<label for="other_invoice">{l s='Informação adicional'}</label>

						<textarea class="form-control" name="other_invoice" id="other_invoice" cols="26" rows="3"></textarea>

				  </p>

					{if isset($one_phone_at_least) && $one_phone_at_least}

						<p class="inline-infos required">{l s='Você deve registrar pelo menos um número de telefone.'}</p>

					{/if}					

					<p class="form-group">

						<label for="phone_invoice">{l s='Fone residencial'}</label>

						<input type="tel" class="form-control" name="phone_invoice" id="phone_invoice" value="{if isset($guestInformations) && $guestInformations.phone_invoice}{$guestInformations.phone_invoice}{/if}" />

					</p>

					<p class="{if isset($one_phone_at_least) && $one_phone_at_least}required {/if}text is_customer_param form-group">

						<label for="phone_mobile_invoice">{l s='Fone celular'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>*</sup>{/if}</label>

						<input type="tel" class="form-control" name="phone_mobile_invoice" id="phone_mobile_invoice" value="{if isset($guestInformations) && $guestInformations.phone_mobile_invoice}{$guestInformations.phone_mobile_invoice}{/if}" />

					</p>

					<input type="hidden" name="alias_invoice" id="alias_invoice" value="{l s='Meus endereços de cobrança'}" />

				</div>

                </div>

                </div>

				{$HOOK_CREATE_ACCOUNT_FORM}

				<p class="submit">

					<input type="submit" class="exclusive button btn btn-default" name="submitAccount" id="submitAccount" value="{l s='Salvar'}" />

				</p>

				<p id="opc_account_saved" style="display:none;">

					{l s='Informações da conta salvas com sucesso'}

				</p>

				<p class="required opc-required clearfix">

					<sup>*</sup>{l s='Campos obrigatórios'}

				</p>

				<!-- END Account -->

			</div>

		</fieldset>

	</form>

	<div class="clear"></div>

</div>