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

<!-- Block permanent links module -->
<section id="permanent_links" class="block column_box">
<h4><span>{l s='Link' mod='blockpermanentlinks'}</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
<ul class="store_list toggle_content">
	<li class="sitemap"><a href="{$link->getPageLink('sitemap')|escape:'html'}" title="{l s='Shop sitemap' mod='blockpermanentlinks'}">{l s='sitemap' mod='blockpermanentlinks'}</a></li>
	<li class="contact"><a href="{$link->getPageLink('contact', true)|escape:'html'}" title="{l s='Contact form' mod='blockpermanentlinks'}">{l s='contact' mod='blockpermanentlinks'}</a></li>
	<li class="add_bookmark"><script type="text/javascript">writeBookmarkLink('{$come_from}', '{$meta_title|addslashes|addslashes}', '{l s='bookmark' mod='blockpermanentlinks' js=1}');</script></li>
</ul>
</section>
<!-- /Block permanent links module -->