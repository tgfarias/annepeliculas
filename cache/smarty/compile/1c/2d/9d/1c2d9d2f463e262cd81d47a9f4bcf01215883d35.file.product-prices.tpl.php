<?php /* Smarty version Smarty-3.1.19, created on 2014-11-19 22:36:07
         compiled from "/home/annepeliculas/www/site/themes/theme818/mobile/product-prices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2127575843546d3777e56f67-28230594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c2d9d2f463e262cd81d47a9f4bcf01215883d35' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/mobile/product-prices.tpl',
      1 => 1415737279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2127575843546d3777e56f67-28230594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'priceDisplay' => 0,
    'productPrice' => 0,
    'productPriceWithoutReduction' => 0,
    'packItems' => 0,
    'ecotax_tax_exc' => 0,
    'ecotax_tax_inc' => 0,
    'unit_price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546d3778079184_73718217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d3778079184_73718217')) {function content_546d3778079184_73718217($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/annepeliculas/www/site/tools/smarty/plugins/function.math.php';
?>

<div class="content_prices">
	<?php if ($_smarty_tpl->tpl_vars['product']->value->online_only) {?>
	<p class="online_only"><?php echo smartyTranslate(array('s'=>'On-line'),$_smarty_tpl);?>
</p>
	<?php }?>
	
	<div class="price">
		<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
			<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(true,@constant('NULL')), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,@constant('NULL')), null, 0);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
			<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL')), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,@constant('NULL')), null, 0);?>
		<?php }?>
	
		<p class="our_price_display">
		<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2) {?>
			<span id="our_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPrice']->value),$_smarty_tpl);?>
</span>
		<?php }?>
		</p><!-- .our_price_display -->
	
		<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
			<span class="on_sale"><?php echo smartyTranslate(array('s'=>'À venda!'),$_smarty_tpl);?>
</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
			<span id="pretaxe_price"><span id="pretaxe_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'))),$_smarty_tpl);?>
</span>&nbsp;<?php echo smartyTranslate(array('s'=>'sem taxa'),$_smarty_tpl);?>
</span>
		<?php }?>
		

		<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) {?>
			<p class="old_price">
			<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2) {?>
				<?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value) {?>
					<span class="old_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value),$_smarty_tpl);?>
</span>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage') {?>
				<span class="reduction_percent">-<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*100;?>
%</span>
			<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount') {?>
				<span class="reduction_amount_display">-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl);?>
</span>
			<?php }?>
			
			</p><!-- .old_price -->
		<?php }?>
	
	<?php if (count($_smarty_tpl->tpl_vars['packItems']->value)&&$_smarty_tpl->tpl_vars['productPrice']->value<$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()) {?>
		<p class="pack_price"><?php echo smartyTranslate(array('s'=>'em vez de'),$_smarty_tpl);?>
 <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()),$_smarty_tpl);?>
</span></p>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['product']->value->ecotax!=0) {?>
		<p class="price-ecotax"><?php echo smartyTranslate(array('s'=>'incluir'),$_smarty_tpl);?>
 <span id="ecotax_price_display"><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_exc']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_inc']->value);?>
<?php }?></span> <?php echo smartyTranslate(array('s'=>'para taxa verde'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) {?>
			<br /><?php echo smartyTranslate(array('s'=>'(não impactado pelo desconto)'),$_smarty_tpl);?>

			<?php }?>
		</p>
	<?php }?>
	
	<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000) {?>
		 <?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['productPrice']->value,'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

		<p class="unit-price"><span id="unit_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'por'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->unity, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
	<?php }?>
	</div><!-- .price -->
</div><!-- .content_prices --><?php }} ?>
