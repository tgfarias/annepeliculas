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

{capture assign='page_title'}{l s='Nossas lojas'}{/capture}
{include file='./page-title.tpl'}

<script type="text/javascript">
		// <![CDATA[
		var map;
		var markers = [];
		var infoWindow;
		var locationSelect;

		var defaultLat = '{$defaultLat}';
		var defaultLong = '{$defaultLong}';
		
		var translation_1 = '{l s='Nenhuma loja foi encontrada. Por favor, selecione um raio maior.' js=1}';
		var translation_2 = '{l s='Loja encontrada -- veja detalhes:' js=1}';
		var translation_3 = '{l s='Lojas encontradas -- veja todos os detalhes:' js=1}';
		var translation_4 = '{l s='Telefone:' js=1}';
		var translation_5 = '{l s='Obter direções' js=1}';
		var translation_6 = '{l s='Não encontrada' js=1}';
		
		var hasStoreIcon = '{$hasStoreIcon}';
		var distance_unit = '{$distance_unit}';
		var img_store_dir = '{$img_store_dir}';
		var img_ps_dir = '{$img_ps_dir}';
		var searchUrl = '{$searchUrl}';
		//]]>
</script>

<!-- Stores -->
<div data-role="content" id="content" class="stores">

	<div id="stores_search_block">
		<label for="location">
			{l s='Digite um local (ex. cep, endereço, cidade ou país) a fim de encontrar as lojas mais próximas.'}
		</label>
	    <input type="text" name="location" id="location" value="" />
	</div>
	
	<div id="stores_search_block">
		<label for="radius">{l s='Raio:'} ({$distance_unit})</label>
		<input type="range" name="radius_slider" id="radius" value="15" min="0" max="100" data-highlight="true"/>
	</div>
	
	<div id="stores_search_block">
		<button type="submit" data-theme="a" name="submit" value="submit-value" class="ui-btn-hidden" aria-disabled="false">
			{l s='Procurar'}
		</button>
	</div>
	
	<div class="stores_block">
		<h3 class="bg">{l s='Nossas lojas'}</h3>
		<ul data-role="listview" data-theme="c" id="stores_list">
		</ul>
	</div>
	{include file="./sitemap.tpl"}
</div> 
<!-- END Stores -->