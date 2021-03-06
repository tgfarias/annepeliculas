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

<div class="pagenotfound titled_box">

	<h1><span>{l s='Esta página não está disponível'}</span></h1>



	<p class="alert alert-info">

    	<button class="close" data-dismiss="alert" type="button">×</button>

		<i class="icon-info-sign"></i>{l s='Lamentamos, mas o endereço da Web que você digitou não está mais disponível.'}

	</p>



	<h2><span>{l s='Para encontrar um produto, por favor, digite seu nome no campo abaixo.'}</span></h2>

	<form action="{$link->getPageLink('search')|escape:'html'}" method="post" class="std">

		<fieldset>

			<p class="form-group">

				<label for="search">{l s='Procure em nosso catálogo de produtos:'}</label>

				<input class="form-control" id="search_query" name="search_query" type="text" />

			</p>

            <input type="submit" name="Submit" value="OK" class="button_small btn btn-default" />

		</fieldset>

	</form>



	<p class="footer_link_bottom"><a href="{$base_dir}" title="{l s='Home'}"><i class="icon-home"></i> {l s='Home'}</a></p>

</div>