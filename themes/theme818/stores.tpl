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



{capture name=path}{l s='Nossas lojas'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}



<h1><span>{l s='Nossas lojas'}</span></h1>

{if $simplifiedStoresDiplay}

	{if $stores|@count}

	<p>{l s='Aqui você pode encontrar os nossos locais de armazenamento. Por favor, não hesite em contactar-nos:'}</p>

	{foreach $stores as $store}

		<div class="store-small">

		{if $store.has_picture}<p><img src="{$img_store_dir}{$store.id_store}-medium_default.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" /></p>{/if}

			<p>

				<b>{$store.name|escape:'htmlall':'UTF-8'}</b><br />

				{$store.address1|escape:'htmlall':'UTF-8'}<br />

				{if $store.address2}{$store.address2|escape:'htmlall':'UTF-8'}{/if}<br />

				{$store.postcode} {$store.city|escape:'htmlall':'UTF-8'}{if $store.state}, {$store.state}{/if}<br />

				{$store.country|escape:'htmlall':'UTF-8'}<br />

				{if $store.phone}{l s='Telefone:' js=0} {$store.phone}{/if}

			</p>

				{if isset($store.working_hours)}{$store.working_hours}{/if}

		</div>

	{/foreach}

	{/if}

{else}

	<script type="text/javascript">

		// <![CDATA[

		var map;

		var markers = [];

		var infoWindow;

		var locationSelect;



		var defaultLat = '{$defaultLat}';

		var defaultLong = '{$defaultLong}';

		

		var translation_1 = '{l s='Nenhuma loja foi encontrada. Por favor, tente selecionar um raio mais amplo.' js=1}';

		var translation_2 = '{l s='loja encontrada - veja detalhes:' js=1}';

		var translation_3 = '{l s='lojas encontradas - Ver todos os resultados:' js=1}';

		var translation_4 = '{l s='Telefone:' js=1}';

		var translation_5 = '{l s='Obter direções' js=1}';

		var translation_6 = '{l s='Não encontrado' js=1}';

		

		var hasStoreIcon = '{$hasStoreIcon}';

		var distance_unit = '{$distance_unit}';

		var img_store_dir = '{$img_store_dir}';

		var img_ps_dir = '{$img_ps_dir}';

		var searchUrl = '{$searchUrl}';

		var logo_store = '{$logo_store}';

		//]]>

	</script>



	<p>{l s='Digite um local (por exemplo, cep, endereço, cidade ou país) de forma a encontrar as lojas mais próximas.'}</p>

	<p class="form-group">

		<label for="addressInput">{l s='Sua localização:'}</label>

		<input class="form-control" type="text" name="location" id="addressInput" value="{l s='Endereço, cep, cidade, estado ou país'}" onclick="this.value='';" />

	</p>

    <div class="row">

    	<div class="col-xs-6">

    		<p class="form-group">

                <label for="radiusSelect">{l s='Raio:'} ( {$distance_unit} )</label> 

                <select class="form-control" name="radius" id="radiusSelect">

                    <option value="15">15</option>

                    <option value="25">25</option>

                    <option value="50">50</option>

                    <option value="100">100</option>

                </select> 

            </p>

    	</div>

        <div class="col-xs-6">

        	<select class="form-control" id="locationSelect"><option></option></select>

        </div>

    </div>

    <p class="locationbutton ">

            <input type="button" class="button btn btn-default" onclick="searchLocations();" value="{l s='Buscar'}" /> 

            <img src="{$img_ps_dir}loader.gif" class="middle" alt="" id="stores_loader" />

        </p>

    <div id="map"></div>

	<table  id="stores-table" class="table table-bordered table-hover table-responsive">

            <thead>

            <tr>

			<th >{l s='#'}</th>

			<th >{l s='Store'}</th>

			<th >{l s='Address'}</th>

			<th >{l s='Distance'}</th>

              </tr>

        </thead>

        <tbody>

        <tr>

        </tr>

        </tbody>

	</table>

                

{/if}