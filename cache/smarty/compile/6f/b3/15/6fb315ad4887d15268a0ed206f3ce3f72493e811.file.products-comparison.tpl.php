<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 16:54:34
         compiled from "/home/annepeliculas/www/site/themes/theme818/products-comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:335125301546a446a75ef22-80667465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb315ad4887d15268a0ed206f3ce3f72493e811' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/products-comparison.tpl',
      1 => 1415627983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '335125301546a446a75ef22-80667465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasProduct' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'img_dir' => 0,
    'lang_iso' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'taxes_behavior' => 0,
    'unit_price' => 0,
    'allow_oosp' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'ordered_features' => 0,
    'classname' => 0,
    'feature' => 0,
    'product_id' => 0,
    'product_features' => 0,
    'width' => 0,
    'feature_id' => 0,
    'tab' => 0,
    'HOOK_EXTRA_PRODUCT_COMPARISON' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a446ab28802_22332923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a446ab28802_22332923')) {function content_546a446ab28802_22332923($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/annepeliculas/www/site/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_cycle')) include '/home/annepeliculas/www/site/tools/smarty/plugins/function.cycle.php';
?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Comparação de produtos'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1><span><?php echo smartyTranslate(array('s'=>'Comparação de produtos'),$_smarty_tpl);?>
</span></h1>

<?php if ($_smarty_tpl->tpl_vars['hasProduct']->value) {?>

		<?php $_smarty_tpl->tpl_vars['taxes_behavior'] = new Smarty_variable(false, null, 0);?>

		<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&(!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2)) {?>

			<?php $_smarty_tpl->tpl_vars['taxes_behavior'] = new Smarty_variable(true, null, 0);?>

		<?php }?>

<table id="product_comparison" class="table table-hover table-bordered table-responsive" >

   <thead>

	<tr class="comparison_header">

		<th></th>

		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

			<th>   				

				  <a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->name,30,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->name,25,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>

			</th>

		<?php } ?>

	</tr>

       </thead>

           <tbody>

		<td class="title_compare" ><?php echo smartyTranslate(array('s'=>'Características:'),$_smarty_tpl);?>
</td>

	

	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

		<?php $_smarty_tpl->tpl_vars['replace_id'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value->id).('|'), null, 0);?>

		<td class="ajax_block_product">

		

			<div class="comparison_product_infos">

            <div class="product_image_div">

                            <a class="cmp_remove" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><i class="icon-trash"></i></a>



			<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="product_image" >

            		<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>

                    

							<span class="on_sale"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
onsale_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
.gif" alt="<?php echo smartyTranslate(array('s'=>'À venda'),$_smarty_tpl);?>
" class="on_sale_img"/></span>

						<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) {?>

							<span class="discount"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
onsale_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
.gif" alt="<?php echo smartyTranslate(array('s'=>'À venda'),$_smarty_tpl);?>
" class="on_sale_img"/></span>

						<?php }?>

				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"  />

                

                	

				

			</a>

         </div>

          

            	<p class="product_desc"><a class="product_descr" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smartyTranslate(array('s'=>'Mais'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->description_short),60,'...');?>
</a></p>

                	<?php if (isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>

					<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value)),$_smarty_tpl);?>
</span>

					

			



						<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000) {?>

								<?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value),'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>


							<p class="comparison_unit_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'por %s','sprintf'=>mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->unity, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')),$_smarty_tpl);?>
</p>

						<?php } else { ?>

						&nbsp;

						<?php }?>

					<?php }?>

			<!-- availability -->

			<div class="comparison_availability_statut">

					<?php if (!(($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['product']->value->available_later)||($_smarty_tpl->tpl_vars['product']->value->quantity!=0&&!$_smarty_tpl->tpl_vars['product']->value->available_now)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>

						<span id="availability_label"><?php echo smartyTranslate(array('s'=>'Disponibilidade:'),$_smarty_tpl);?>
</span>

						<span id="availability_value"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?> class="warning-inline"<?php }?>>

							<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?>

								<?php if ($_smarty_tpl->tpl_vars['allow_oosp']->value) {?>

									<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->available_later, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


								<?php } else { ?>

									<?php echo smartyTranslate(array('s'=>'Este produto não está mais em estoque.'),$_smarty_tpl);?>


								<?php }?>

							<?php } else { ?>

								<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->available_now, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


							<?php }?>

						</span>

					<?php }?>

			</div>

			<div class="row-compare-button">

				<a class="button btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smartyTranslate(array('s'=>'Ver'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Ver'),$_smarty_tpl);?>
</a>

			

				<?php if ((!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value->minimal_quantity==1&&$_smarty_tpl->tpl_vars['product']->value->customizable!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>

					<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>0||$_smarty_tpl->tpl_vars['product']->value->allow_oosp)) {?>

							<a class="exclusive ajax_add_to_cart_button btn btn-default btn_add_cart" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".((string)$_smarty_tpl->tpl_vars['product']->value->id)."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Adicionar ao carrinho'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Adicionar ao carrinho'),$_smarty_tpl);?>
</span></a>

					<?php } else { ?>

						<span class="exclusive btn btn-default disabled"><?php echo smartyTranslate(array('s'=>'Adicionar ao carrinho'),$_smarty_tpl);?>
</span>

					<?php }?>

				<?php } else { ?>

					

				<?php }?>

                </div>

			</div>

		</td>

	<?php } ?>

	</tr>

	<?php if ($_smarty_tpl->tpl_vars['ordered_features']->value) {?>

	<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordered_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>

	<tr>

		<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>


		<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" >

			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


		</td>

			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

				<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->id, null, 0);?>

				<?php $_smarty_tpl->tpl_vars['feature_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['id_feature'], null, 0);?>

				<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value])) {?>

					<?php $_smarty_tpl->tpl_vars['tab'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value], null, 0);?>

					<td  width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos"><?php if ((isset($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value]))) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></td>

				<?php } else { ?>

					<td width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos"></td>

				<?php }?>

			<?php } ?>

	</tr>

	<?php } ?>

	<?php } else { ?>

	<tr>

		<td></td>

		<td colspan="<?php echo count($_smarty_tpl->tpl_vars['products']->value)+1;?>
"><?php echo smartyTranslate(array('s'=>'Não há recursos para comparar'),$_smarty_tpl);?>
</td>

	</tr>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_PRODUCT_COMPARISON']->value;?>


        </tbody>

</table>

<?php } else { ?>

	<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Não há produtos selecionados para comparação.'),$_smarty_tpl);?>
</p>

<?php }?>



<?php }} ?>
