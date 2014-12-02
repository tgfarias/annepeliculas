<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:51:01
         compiled from "/home/annepeliculas/www/site/themes/theme818/order-carrier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5993064825467bcb5e37a64-40992128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b5bb12b2b05198646ce24b688b59c44b3f48d0' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/order-carrier.tpl',
      1 => 1415392633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5993064825467bcb5e37a64-40992128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'link' => 0,
    'virtual_cart' => 0,
    'giftAllowed' => 0,
    'cart' => 0,
    'multi_shipping' => 0,
    'carriers' => 0,
    'HOOK_BEFORECARRIER' => 0,
    'isVirtualCart' => 0,
    'recyclablePackAllowed' => 0,
    'recyclable' => 0,
    'delivery_option_list' => 0,
    'id_address' => 0,
    'address_collection' => 0,
    'option_list' => 0,
    'key' => 0,
    'delivery_option' => 0,
    'option' => 0,
    'carrier' => 0,
    'cookie' => 0,
    'free_shipping' => 0,
    'use_taxes' => 0,
    'product' => 0,
    'HOOK_EXTRACARRIER_ADDR' => 0,
    'address' => 0,
    'gift_wrapping_price' => 0,
    'priceDisplay' => 0,
    'total_wrapping_tax_exc_cost' => 0,
    'total_wrapping_cost' => 0,
    'conditions' => 0,
    'cms_id' => 0,
    'checkedTOS' => 0,
    'link_conditions' => 0,
    'back' => 0,
    'is_guest' => 0,
    'oldMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467bcb65c9e18_19448834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467bcb65c9e18_19448834')) {function content_5467bcb65c9e18_19448834($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<script type="text/javascript">

	//<![CDATA[

	var orderProcess = 'order';

	var currencySign = '<?php echo html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8");?>
';

	var currencyRate = '<?php echo floatval($_smarty_tpl->tpl_vars['currencyRate']->value);?>
';

	var currencyFormat = '<?php echo intval($_smarty_tpl->tpl_vars['currencyFormat']->value);?>
';

	var currencyBlank = '<?php echo intval($_smarty_tpl->tpl_vars['currencyBlank']->value);?>
';

	var txtProduct = "<?php echo smartyTranslate(array('s'=>'produto','js'=>1),$_smarty_tpl);?>
";

	var txtProducts = "<?php echo smartyTranslate(array('s'=>'produtos','js'=>1),$_smarty_tpl);?>
";

	var orderUrl = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("order",true));?>
';



	var msg = "<?php echo smartyTranslate(array('s'=>'Você deve concordar com os termos de serviço antes de continuar.','js'=>1),$_smarty_tpl);?>
";

	

	function acceptCGV()

	{

		if ($('#cgv').length && !$('input#cgv:checked').length)

		{

			alert(msg);

			return false;

		}

		else

			return true;

	}

	

	//]]>

	</script>

<?php } else { ?>

	<script type="text/javascript">

		var txtFree = "<?php echo smartyTranslate(array('s'=>'Grátis'),$_smarty_tpl);?>
";

	</script>

<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['virtual_cart']->value)&&!$_smarty_tpl->tpl_vars['virtual_cart']->value&&$_smarty_tpl->tpl_vars['giftAllowed']->value&&$_smarty_tpl->tpl_vars['cart']->value->gift==1) {?>

<script type="text/javascript">



// <![CDATA[

	$('document').ready( function(){

		if ($('input#gift').is(':checked'))

			$('p#gift_div').show();

	});

//]]>



</script>

<?php }?>



<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Envio:'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<div id="carrier_area">

<?php } else { ?>

	<div id="carrier_area" class="opc-main-block">

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<h1><span><?php echo smartyTranslate(array('s'=>'Envio'),$_smarty_tpl);?>
</span></h1>

<?php } else { ?>

	<h1><span>2</span> <?php echo smartyTranslate(array('s'=>'Os métodos de entrega'),$_smarty_tpl);?>
</h1>

<?php }?>



<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('shipping', null, 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	

	<form id="form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
" method="post" onsubmit="return acceptCGV();" class="titled_box">

<?php } else { ?>

	<div id="opc_delivery_methods" class="opc-main-block">

	<div id="opc_delivery_methods-overlay" class="opc-overlay" style="display: none;"></div>

<?php }?>



<div class="order_carrier_content">



<?php if (isset($_smarty_tpl->tpl_vars['virtual_cart']->value)&&$_smarty_tpl->tpl_vars['virtual_cart']->value) {?>

	<input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />

<?php } else { ?>

	<div class="titled_box">

		<h2 class="carrier_title"><span><?php echo smartyTranslate(array('s'=>'Escolha o seu método de entrega'),$_smarty_tpl);?>
</span></h2>

	</div>

	<div id="HOOK_BEFORECARRIER">

		<?php if (isset($_smarty_tpl->tpl_vars['carriers']->value)&&isset($_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value)) {?>

			<?php echo $_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value;?>


		<?php }?>

	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)&&$_smarty_tpl->tpl_vars['isVirtualCart']->value) {?>

		<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Nenhuma transportadora é necessário para este fim.'),$_smarty_tpl);?>
</p>

	<?php } else { ?>

		<?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>

			<p class="checkbox-inline">

				<input type="checkbox" name="recyclable" id="recyclable" value="1" <?php if ($_smarty_tpl->tpl_vars['recyclable']->value==1) {?>checked="checked"<?php }?> autocomplete="off"/>

				<label for="recyclable"><?php echo smartyTranslate(array('s'=>'Gostaria de receber a minha encomenda em embalagens recicladas.'),$_smarty_tpl);?>
.</label>

			</p>

		<?php }?>

	<div class="delivery_options_address titled_box">

	<?php if (isset($_smarty_tpl->tpl_vars['delivery_option_list']->value)) {?>

		<?php  $_smarty_tpl->tpl_vars['option_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_list']->_loop = false;
 $_smarty_tpl->tpl_vars['id_address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_list']->key => $_smarty_tpl->tpl_vars['option_list']->value) {
$_smarty_tpl->tpl_vars['option_list']->_loop = true;
 $_smarty_tpl->tpl_vars['id_address']->value = $_smarty_tpl->tpl_vars['option_list']->key;
?>

			<h2><span>

				<?php if (isset($_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value])) {?>

					<?php echo smartyTranslate(array('s'=>'Escolha uma opção de envio para este endereço:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value]->alias;?>


				<?php } else { ?>

					<?php echo smartyTranslate(array('s'=>'Escolha uma opção de envio'),$_smarty_tpl);?>


				<?php }?></span>

			</h2>

			<div class="delivery_options">

			<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
 $_smarty_tpl->tpl_vars['option']->index++;
?>

				<div class="delivery_option <?php if (($_smarty_tpl->tpl_vars['option']->index%2)) {?>alternate_<?php }?>item">

					<label for="delivery_option_<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
">

						<table class="resume table table-bordered">

							<tr>

                            <td>

                            					<input class="delivery_option_radio" type="radio" name="delivery_option[<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
]" onchange="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>updateCarrierSelectionAndGift();<?php } else { ?>updateExtraCarrier('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
);<?php }?>" id="delivery_option_<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])&&$_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value]==$_smarty_tpl->tpl_vars['key']->value) {?>checked="checked"<?php }?> />

                            </td>

								<td class="delivery_option_logo">

									<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>

										<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>

											<img src="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>
"/>

										<?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>

											<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>


											<?php if (!$_smarty_tpl->tpl_vars['carrier']->last) {?> - <?php }?>

										<?php }?>

									<?php } ?>

								</td>

								<td>

								<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>

									<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>

										<div class="delivery_option_title"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>
</div>

									<?php } ?>

									<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>

										<div class="delivery_option_delay"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>
</div>

									<?php }?>

								<?php }?>

								<?php if (count($_smarty_tpl->tpl_vars['option_list']->value)>1) {?>

									<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_grade']) {?>

										<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>

										<div class="delivery_option_best delivery_option_icon"><?php echo smartyTranslate(array('s'=>'O melhor preço e velocidade'),$_smarty_tpl);?>
</div>

										<?php } else { ?>

										<div class="delivery_option_fast delivery_option_icon"><?php echo smartyTranslate(array('s'=>'O mais rápido'),$_smarty_tpl);?>
</div>

										<?php }?>

									<?php } else { ?>

										<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>

										<div class="delivery_option_best_price delivery_option_icon"><?php echo smartyTranslate(array('s'=>'O melhor preço'),$_smarty_tpl);?>
</div>

										<?php }?>

									<?php }?>

								<?php }?>

								</td>

								<td>

								<div class="delivery_option_price">

									<?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']&&(!isset($_smarty_tpl->tpl_vars['free_shipping']->value)||(isset($_smarty_tpl->tpl_vars['free_shipping']->value)&&!$_smarty_tpl->tpl_vars['free_shipping']->value))) {?>

										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?>

											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(com taxa)'),$_smarty_tpl);?>


										<?php } else { ?>

											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(sem taxa)'),$_smarty_tpl);?>


										<?php }?>

									<?php } else { ?>

										<?php echo smartyTranslate(array('s'=>'Grátis'),$_smarty_tpl);?>


									<?php }?>

								</div>

								</td>

							</tr>

						</table>

						<table class="delivery_option_carrier table <?php if (isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])&&$_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value]==$_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>not-displayable<?php }?>">

							<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>

							<tr>

								<?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>

								<td class="first_item">

								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->id;?>
" name="id_carrier" />

									<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>

										<img src="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>
"/>

									<?php }?>

								</td>

								<td>

									<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>


								</td>

								<?php }?>

								<td <?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>class="first_item" colspan="2"<?php }?>>

									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->id;?>
" name="id_carrier" />

									<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang])) {?>

										<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>
<br />

										<?php if (count($_smarty_tpl->tpl_vars['carrier']->value['product_list'])<=1) {?>

											(<?php echo smartyTranslate(array('s'=>'produto em causa:'),$_smarty_tpl);?>


										<?php } else { ?>

											(<?php echo smartyTranslate(array('s'=>'produtos em causa:'),$_smarty_tpl);?>


										<?php }?>

										

										<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrier']->value['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>

										<?php if ($_smarty_tpl->tpl_vars['product']->index==4) {?><acronym title="<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->index>=4) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<?php if (!$_smarty_tpl->tpl_vars['product']->last) {?>, <?php } else { ?>">...</acronym>)<?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<?php if (!$_smarty_tpl->tpl_vars['product']->last) {?>, <?php } else { ?>)<?php }?><?php }?><?php } ?>

									<?php }?>

								</td>

							</tr>

						<?php } ?>

						</table>

					</label>

				</div>

			<?php } ?>

			</div>

			<div class="hook_extracarrier" id="HOOK_EXTRACARRIER_<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
"><?php if (isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value)&&isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value])) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value];?>
<?php }?></div>

			<?php }
if (!$_smarty_tpl->tpl_vars['option_list']->_loop) {
?>

			<p class="alert alert-info" id="noCarrierWarning">

				<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->getDeliveryAddressesWithoutCarriers(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['address']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['address']->iteration++;
 $_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
?>

					<?php if (empty($_smarty_tpl->tpl_vars['address']->value->alias)) {?>

						<?php echo smartyTranslate(array('s'=>'Operadoras indisponíveis.'),$_smarty_tpl);?>


					<?php } else { ?>

						<?php echo smartyTranslate(array('s'=>'Operadoras indisponíveis para este endereço "%s".','sprintf'=>$_smarty_tpl->tpl_vars['address']->value->alias),$_smarty_tpl);?>


					<?php }?>

					<?php if (!$_smarty_tpl->tpl_vars['address']->last) {?>

					<br />

					<?php }?>

                    <?php }
if (!$_smarty_tpl->tpl_vars['address']->_loop) {
?>

					<?php echo smartyTranslate(array('s'=>'Operadoras indisponíveis.'),$_smarty_tpl);?>


				<?php } ?>

			</p>

		<?php } ?>

	<?php }?>

	

	</div>

	<div style="display: none;" id="extra_carrier"></div>

	

		<?php if ($_smarty_tpl->tpl_vars['giftAllowed']->value) {?>

        <div class="titled_box">

		<h2 class="gift_title"><span><?php echo smartyTranslate(array('s'=>'Presente'),$_smarty_tpl);?>
</span></h2>

		</div>

        <p class="checkbox-inline">

			<input type="checkbox" name="gift" id="gift" value="1" <?php if ($_smarty_tpl->tpl_vars['cart']->value->gift==1) {?>checked="checked"<?php }?> autocomplete="off"/>

			<label for="gift"><?php echo smartyTranslate(array('s'=>'Gostaria que o meu produto seja embrulhado para presente.'),$_smarty_tpl);?>
</label>

		</p>

        <?php if ($_smarty_tpl->tpl_vars['gift_wrapping_price']->value>0) {?>

				<small>(<?php echo smartyTranslate(array('s'=>'Custo adicional para'),$_smarty_tpl);?>


				<span class="price" id="gift-price">

					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc_cost']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_cost']->value),$_smarty_tpl);?>
<?php }?>

				</span>

				<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?> <?php echo smartyTranslate(array('s'=>'(sem taxa)'),$_smarty_tpl);?>
<?php } else { ?> <?php echo smartyTranslate(array('s'=>'(com taxa)'),$_smarty_tpl);?>
<?php }?><?php }?>)</small>

             

			<?php }?>

		<p id="gift_div" class="form-group unvisible double">

			<label for="gift_message"><?php echo smartyTranslate(array('s'=>'Se você quiser, você pode adicionar uma nota ao presente:'),$_smarty_tpl);?>
</label>

			<textarea rows="5" cols="35" id="gift_message" name="gift_message" class="form-control"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->gift_message, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea>

		</p>

		<?php }?>

	<?php }?>

<?php }?>



<?php if ($_smarty_tpl->tpl_vars['conditions']->value&&$_smarty_tpl->tpl_vars['cms_id']->value) {?>

	<div class="titled_box">

		<h2><span><?php echo smartyTranslate(array('s'=>'Termos de serviço'),$_smarty_tpl);?>
</span></h2>

	</div>

    <p class="checkbox-inline">

		<input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> autocomplete="off"/>

		<label for="cgv"><?php echo smartyTranslate(array('s'=>'Concordo com os Termos de Serviço e aderir a eles incondicionalmente.'),$_smarty_tpl);?>
</label> <a href="<?php echo $_smarty_tpl->tpl_vars['link_conditions']->value;?>
" class="iframe"><?php echo smartyTranslate(array('s'=>'(Leia Termos de serviço)'),$_smarty_tpl);?>
</a>

	</p>

	<script type="text/javascript">$("a.iframe").fancybox({

  		'hideOnContentClick' : true,

		'hideOnOverlayClick': true,

  		'width' : 500,

  		'type' : 'iframe',

  		'onComplete' : function() {

    		$('#fancybox-frame').load(function() { // wait for frame to load and then gets it's height

      		$('#fancybox-content').height($(this).contents().find('body').height()+10);

    		});

  		}

	});</script>

<?php }?>

</div>



<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<p class="cart_navigation clearfix submit">

		<input type="hidden" name="step" value="3" />

		<input type="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" />

		<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>

			<?php if ($_smarty_tpl->tpl_vars['back']->value) {?>

				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=1&back=".((string)$_smarty_tpl->tpl_vars['back']->value)."&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Retornar'),$_smarty_tpl);?>
" class="button btn btn-default">&laquo; <?php echo smartyTranslate(array('s'=>'Retornar'),$_smarty_tpl);?>
</a>

			<?php } else { ?>

				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=1&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Retornar'),$_smarty_tpl);?>
" class="button btn btn-default">&laquo; <?php echo smartyTranslate(array('s'=>'Retornar'),$_smarty_tpl);?>
</a>

			<?php }?>

		<?php } else { ?>

				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Retornar'),$_smarty_tpl);?>
" class="button btn btn-default">&laquo; <?php echo smartyTranslate(array('s'=>'Retornar'),$_smarty_tpl);?>
</a>

		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['virtual_cart']->value)&&$_smarty_tpl->tpl_vars['virtual_cart']->value||(isset($_smarty_tpl->tpl_vars['delivery_option_list']->value)&&!empty($_smarty_tpl->tpl_vars['delivery_option_list']->value))) {?>

			<input type="submit" name="processCarrier" value="<?php echo smartyTranslate(array('s'=>'Próximo'),$_smarty_tpl);?>
 &raquo;" class="exclusive btn btn-default" />

		<?php }?>

	</p>

</form>

<?php } else { ?>

	<div class="titled_box">

		<h2><span><?php echo smartyTranslate(array('s'=>'Deixe um recado'),$_smarty_tpl);?>
</span></h2>

    </div>

	<div class="form-group">

		<label><?php echo smartyTranslate(array('s'=>'Se você gostaria de adicionar um comentário sobre seu pedido, por favor, escreva-o no campo abaixo.'),$_smarty_tpl);?>
</label>

		<textarea class="form-control" cols="120" rows="3" name="message" id="message"><?php if (isset($_smarty_tpl->tpl_vars['oldMessage']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['oldMessage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></textarea>

	</div>

</div>

<?php }?>

</div>

<?php }} ?>
