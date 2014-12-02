<?php /* Smarty version Smarty-3.1.19, created on 2014-11-19 22:36:08
         compiled from "/home/annepeliculas/www/site/themes/theme818/mobile/product-desc-features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1880645339546d3778103065-48431521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6732acd9150c2b09136c3ffbae36a1c422d14c6' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/mobile/product-desc-features.tpl',
      1 => 1415737278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880645339546d3778103065-48431521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'features' => 0,
    'feature' => 0,
    'attachments' => 0,
    'attachment' => 0,
    'link' => 0,
    'accessories' => 0,
    'accessory' => 0,
    'accessoryLink' => 0,
    'mediumSize' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'static_token' => 0,
    'btn_class' => 0,
    'btn_href' => 0,
    'btn_more' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546d37782b78f5_63048339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d37782b78f5_63048339')) {function content_546d37782b78f5_63048339($_smarty_tpl) {?><div data-role="content" id="more_info_block" class="clearfix">
	<div data-role="collapsible-set" data-content-theme="a">
		
		<!-- full description -->
		<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description) {?>
		<div data-role="collapsible" data-theme="a" data-content-theme="a">
			<h3><?php echo smartyTranslate(array('s'=>'Mais informações'),$_smarty_tpl);?>
</h3>
			<div><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
		</div>
		<?php }?>
		
		<!-- product's features -->
		<?php if (isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value&&count($_smarty_tpl->tpl_vars['features']->value)>0) {?>
		<div data-role="collapsible" data-theme="a" data-content-theme="a">
			<h3><?php echo smartyTranslate(array('s'=>'Ficha de dados'),$_smarty_tpl);?>
</h3>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['feature']->value['value'])) {?>
					<li><span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
				<?php }?>
			<?php } ?>
			</ul>
		</div>
		<?php }?>
		
		<!-- attachments -->
		<?php if (isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value) {?>
		<div data-role="collapsible" data-theme="a" data-content-theme="a">
			<h3><?php echo smartyTranslate(array('s'=>'Baixar'),$_smarty_tpl);?>
</h3>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,null,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment']));?>
" data-ajax="false"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a><br /><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
				<?php } ?>
			</ul>
		</div>
		<?php }?>
		
		<!-- accessories -->
		<?php if (isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value) {?>
		<div data-role="collapsible" data-theme="a" data-content-theme="a" class="accessories_block">
			<h3><?php echo smartyTranslate(array('s'=>'Acessórios'),$_smarty_tpl);?>
</h3>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['accessory']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['accessory']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
 $_smarty_tpl->tpl_vars['accessory']->iteration++;
 $_smarty_tpl->tpl_vars['accessory']->last = $_smarty_tpl->tpl_vars['accessory']->iteration === $_smarty_tpl->tpl_vars['accessory']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessories_list']['last'] = $_smarty_tpl->tpl_vars['accessory']->last;
?>
					<?php $_smarty_tpl->tpl_vars['accessoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['accessory']->value['id_product'],$_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['category']), null, 0);?>
					<li class="ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['accessories_list']['last']) {?>last_item<?php } else { ?>item<?php }?> product_accessories_description clearfix">
						<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-ajax="false">
							<div class="clearfix" >
								<div class="col-left" style="width:<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width']+10;?>
px;">
									<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['id_image'],'medium_default');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
								</div><!-- .col-left -->
								<div class="col-right">
									<div class="inner">
										<p class="s_title_block"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
										<p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['accessory']->value['description_short']),70,'...');?>
</p>
									</div>
								</div>
							</div>
						</a>
						<?php if ($_smarty_tpl->tpl_vars['accessory']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<div class="price">
								<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value!=1) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
							</div>
						<?php }?>
						<div class="btn-row">
							<a class="" data-theme="a" data-role="button" data-mini="true" data-inline="true" data-icon="arrow-r" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Ver'),$_smarty_tpl);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Ver'),$_smarty_tpl);?>
</a>
							<?php $_smarty_tpl->tpl_vars["btn_more"] = new Smarty_variable('', null, 0);?>
							<?php $_smarty_tpl->tpl_vars["btn_href"] = new Smarty_variable('', null, 0);?>
							<?php $_smarty_tpl->tpl_vars["btn_class"] = new Smarty_variable('', null, 0);?>
							<?php if (($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessory']->value['quantity']>0)&&$_smarty_tpl->tpl_vars['accessory']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
								<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["btn_href"] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), null, 0);?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars["btn_class"] = new Smarty_variable("disabled", null, 0);?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', "btn_more", null); ob_start(); ?><span class="availability"><?php if ((isset($_smarty_tpl->tpl_vars['accessory']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['accessory']->value['quantity_all_versions']>0)) {?><?php echo smartyTranslate(array('s'=>'Produto disponível com diferentes opções'),$_smarty_tpl);?>
<?php } else { ?><?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><?php echo smartyTranslate(array('s'=>'Fora de estoque'),$_smarty_tpl);?>
<?php }?><?php }?></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php }?>
							<a class="<?php echo $_smarty_tpl->tpl_vars['btn_class']->value;?>
" data-role="button" data-inline="true" data-theme="e" data-icon="plus" data-mini="true" class="exclusive button ajax_add_to_cart_button" href="<?php echo $_smarty_tpl->tpl_vars['btn_href']->value;?>
" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Adicionar ao carrinho'),$_smarty_tpl);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Adicionar ao carrinho'),$_smarty_tpl);?>
</a>
							<?php echo $_smarty_tpl->tpl_vars['btn_more']->value;?>

						</div><!-- .btn-row -->
					</li>
				<?php } ?>
			</ul>
		</div>
		<?php }?>
	</div><!-- role:collapsible-set-->
</div><!-- #more_info_block -->
<?php }} ?>
