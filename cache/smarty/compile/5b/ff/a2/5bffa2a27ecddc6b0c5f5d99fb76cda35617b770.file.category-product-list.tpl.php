<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 23:27:46
         compiled from "/home/annepeliculas/www/site/themes/theme818/mobile/category-product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20143974215467fd92ee0f90-31040979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bffa2a27ecddc6b0c5f5d99fb76cda35617b770' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/mobile/category-product-list.tpl',
      1 => 1415794942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20143974215467fd92ee0f90-31040979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'info3_class' => 0,
    'info3_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467fd930f9c27_06472198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467fd930f9c27_06472198')) {function content_5467fd930f9c27_06472198($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>
	<ul data-role="listview" id="category-list" class="ui-listview ui-grid-a">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>
		<li class="ui-block-<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']%2) {?>b<?php } else { ?>a<?php }?> product-list-row">
			<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-ajax="false">
				<div class="product_img_wrapper"><img class="ui-li-thumb" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /></div>
				<h3 class="ui-li-heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>
				<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
					<p class="ui-li-price">
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
						<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
					<?php }?>
					</p>
					<?php $_smarty_tpl->tpl_vars['info3_str'] = new Smarty_variable('&nbsp;', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['info3_class'] = new Smarty_variable('on_sale', null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info3_str', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'À Venda!'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'info3_str', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Desconto!'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php $_smarty_tpl->tpl_vars['info3_class'] = new Smarty_variable('discount', null, 0);?>
					<?php }?>
					<p class="ui-li-price-info <?php echo $_smarty_tpl->tpl_vars['info3_class']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['info3_str']->value;?>
</span></p>
					<p class="availability">
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
						<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?><?php echo smartyTranslate(array('s'=>'Disponível'),$_smarty_tpl);?>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?><?php echo smartyTranslate(array('s'=>'Produto disponível com diferentes opções'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Fora de estoque'),$_smarty_tpl);?>
<?php }?>
					<?php } else { ?>
						&nbsp;
					<?php }?>
					</p>
					
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']) {?>
						<p class="online_only"><?php echo smartyTranslate(array('s'=>'Online!'),$_smarty_tpl);?>
</p>
					<?php }?>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?><p class="new"><?php echo smartyTranslate(array('s'=>'Novo'),$_smarty_tpl);?>
</p><?php }?>
			</a>
		</li>
	<?php } ?>
	</ul><!-- #category-list -->
<?php }?>
<?php }} ?>
