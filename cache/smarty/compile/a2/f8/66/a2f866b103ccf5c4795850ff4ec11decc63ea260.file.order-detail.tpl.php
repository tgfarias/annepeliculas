<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 16:57:12
         compiled from "/home/annepeliculas/www/site/themes/theme818/order-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:792652726546a45080cd231-88850758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2f866b103ccf5c4795850ff4ec11decc63ea260' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/order-detail.tpl',
      1 => 1415393988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '792652726546a45080cd231-88850758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'link' => 0,
    'order' => 0,
    'carrier' => 0,
    'shop_name' => 0,
    'invoice' => 0,
    'invoiceAllowed' => 0,
    'is_guest' => 0,
    'img_dir' => 0,
    'order_history' => 0,
    'state' => 0,
    'followup' => 0,
    'inv_adr_fields' => 0,
    'field_item' => 0,
    'address_invoice' => 0,
    'address_words' => 0,
    'word_item' => 0,
    'invoiceAddressFormatedValues' => 0,
    'dlv_adr_fields' => 0,
    'address_delivery' => 0,
    'deliveryAddressFormatedValues' => 0,
    'HOOK_ORDERDETAILDISPLAYED' => 0,
    'return_allowed' => 0,
    'priceDisplay' => 0,
    'use_tax' => 0,
    'currency' => 0,
    'products' => 0,
    'product' => 0,
    'group_use_tax' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'customizationPerAddress' => 0,
    'customizationId' => 0,
    'customization' => 0,
    'type' => 0,
    'CUSTOMIZE_FILE' => 0,
    'datas' => 0,
    'pic_dir' => 0,
    'data' => 0,
    'CUSTOMIZE_TEXTFIELD' => 0,
    'customizationFieldName' => 0,
    'productQuantity' => 0,
    'discounts' => 0,
    'discount' => 0,
    'line' => 0,
    'messages' => 0,
    'message' => 0,
    'errors' => 0,
    'error' => 0,
    'message_confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a4508f0e543_11535686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a4508f0e543_11535686')) {function content_546a4508f0e543_11535686($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/annepeliculas/www/site/tools/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_counter')) include '/home/annepeliculas/www/site/tools/smarty/plugins/function.counter.php';
?>



<form action="<?php if (isset($_smarty_tpl->tpl_vars['opc']->value)&&$_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" class="submit">

	<div class="titled_box">

		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" name="id_order"/>

		<h2 class="bottom_indent">

        <span>

			<?php echo smartyTranslate(array('s'=>'Ordem de Referência %s - placed on','sprintf'=>$_smarty_tpl->tpl_vars['order']->value->getUniqReference()),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>


		</span></h2>

        <input  type="submit" value="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
" name="submitReorder" class="btn btn-success" />

	</div>

</form>



<div class="info-order">

<?php if ($_smarty_tpl->tpl_vars['carrier']->value->id) {?><p class="tit-ord"><strong><?php echo smartyTranslate(array('s'=>'Portador'),$_smarty_tpl);?>
</strong> <?php if ($_smarty_tpl->tpl_vars['carrier']->value->name=="0") {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></p><?php }?>

<p class="tit-ord"><strong><?php echo smartyTranslate(array('s'=>'Forma de pagamento'),$_smarty_tpl);?>
</strong> <span class="color-myaccount"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></p>

<?php if ($_smarty_tpl->tpl_vars['invoice']->value&&$_smarty_tpl->tpl_vars['invoiceAllowed']->value) {?>

<p>

	<a class="btn btn-success" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
<?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>&secure_key=<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'Baixe sua fatura em PDF.'),$_smarty_tpl);?>
</a>

</p>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order']->value->recyclable) {?>

<p  class="tit-ord"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/recyclable.png" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s'=>'Você deu permissão para receber seu pedido em embalagens recicladas.'),$_smarty_tpl);?>
</p>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order']->value->gift) {?>

	<p><i class="icon-gift"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Pedido embalado para presente.'),$_smarty_tpl);?>
</p>

	<p><?php echo smartyTranslate(array('s'=>'Mensagem'),$_smarty_tpl);?>
 <?php echo nl2br($_smarty_tpl->tpl_vars['order']->value->gift_message);?>
</p>

<?php }?>

</div>



<?php if (count($_smarty_tpl->tpl_vars['order_history']->value)) {?>

<div class="titled_box"> 

<h2><span><?php echo smartyTranslate(array('s'=>'Siga o status do seu pedido passo-a-passo'),$_smarty_tpl);?>
</span></h2>

</div>

	<table class="detail_step_by_step table table-hover table-bordered">

		<thead>

			<tr>

				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Data'),$_smarty_tpl);?>
</th>

				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>

			</tr>

		</thead>

		<tbody>

		<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['state']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['state']->iteration=0;
 $_smarty_tpl->tpl_vars['state']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['state']->iteration++;
 $_smarty_tpl->tpl_vars['state']->index++;
 $_smarty_tpl->tpl_vars['state']->first = $_smarty_tpl->tpl_vars['state']->index === 0;
 $_smarty_tpl->tpl_vars['state']->last = $_smarty_tpl->tpl_vars['state']->iteration === $_smarty_tpl->tpl_vars['state']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['first'] = $_smarty_tpl->tpl_vars['state']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['last'] = $_smarty_tpl->tpl_vars['state']->last;
?>

			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['last']) {?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">

				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['state']->value['date_add'],'full'=>1),$_smarty_tpl);?>
</td>

				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>

			</tr>

		<?php } ?>

		</tbody>

	</table>

<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['followup']->value)) {?>

<p class="bold"><?php echo smartyTranslate(array('s'=>'Clique no link abaixo para rastrear a entrega do seu pedido'),$_smarty_tpl);?>
</p>

<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['followup']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['followup']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>

<?php }?>



<div class="adresses_bloc row">

	<div class="col-xs-12 col-sm-6">

        <ul class="address item <?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>full_width<?php }?>">

            <li class="address_title"><?php echo smartyTranslate(array('s'=>'Faturamento'),$_smarty_tpl);?>
</li>

            <?php  $_smarty_tpl->tpl_vars['field_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inv_adr_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->key => $_smarty_tpl->tpl_vars['field_item']->value) {
$_smarty_tpl->tpl_vars['field_item']->_loop = true;
?>

                <?php if ($_smarty_tpl->tpl_vars['field_item']->value=="company"&&isset($_smarty_tpl->tpl_vars['address_invoice']->value->company)) {?><li class="address_company"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->company, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['field_item']->value=="address2"&&$_smarty_tpl->tpl_vars['address_invoice']->value->address2) {?><li class="address_address2"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->address2, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['field_item']->value=="phone_mobile"&&$_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile) {?><li class="address_phone_mobile"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>

                <?php } else { ?>

                        <?php $_smarty_tpl->tpl_vars['address_words'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['field_item']->value), null, 0);?>

                        <li><?php  $_smarty_tpl->tpl_vars['word_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['word_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_words']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['word_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->key => $_smarty_tpl->tpl_vars['word_item']->value) {
$_smarty_tpl->tpl_vars['word_item']->_loop = true;
 $_smarty_tpl->tpl_vars['word_item']->index++;
 $_smarty_tpl->tpl_vars['word_item']->first = $_smarty_tpl->tpl_vars['word_item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["word_loop"]['first'] = $_smarty_tpl->tpl_vars['word_item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['word_loop']['first']) {?> <?php }?><span class="address_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['invoiceAddressFormatedValues']->value[smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','')], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span><?php } ?></li>

                <?php }?>

        

            <?php } ?>

        </ul>

    </div>

    <div class="col-xs-12 col-sm-6">

        <ul class="address alternate_item" <?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>style="display:none;"<?php }?>> 

            <li class="address_title"><?php echo smartyTranslate(array('s'=>'Entrega'),$_smarty_tpl);?>
</li>

            <?php  $_smarty_tpl->tpl_vars['field_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_adr_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->key => $_smarty_tpl->tpl_vars['field_item']->value) {
$_smarty_tpl->tpl_vars['field_item']->_loop = true;
?>

                <?php if ($_smarty_tpl->tpl_vars['field_item']->value=="company"&&isset($_smarty_tpl->tpl_vars['address_delivery']->value->company)) {?><li class="address_company"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['address_delivery']->value->company, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['field_item']->value=="address2"&&$_smarty_tpl->tpl_vars['address_delivery']->value->address2) {?><li class="address_address2"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['address_delivery']->value->address2, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>

                <?php } elseif ($_smarty_tpl->tpl_vars['field_item']->value=="phone_mobile"&&$_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile) {?><li class="address_phone_mobile"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>

                <?php } else { ?>

                        <?php $_smarty_tpl->tpl_vars['address_words'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['field_item']->value), null, 0);?> 

                        <li><?php  $_smarty_tpl->tpl_vars['word_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['word_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_words']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['word_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->key => $_smarty_tpl->tpl_vars['word_item']->value) {
$_smarty_tpl->tpl_vars['word_item']->_loop = true;
 $_smarty_tpl->tpl_vars['word_item']->index++;
 $_smarty_tpl->tpl_vars['word_item']->first = $_smarty_tpl->tpl_vars['word_item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["word_loop"]['first'] = $_smarty_tpl->tpl_vars['word_item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['word_loop']['first']) {?> <?php }?><span class="address_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['deliveryAddressFormatedValues']->value[smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','')], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span><?php } ?></li>

                <?php }?>

            <?php } ?>

        </ul>

    </div>

</div>

<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDERDETAILDISPLAYED']->value;?>


<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post"><?php }?>

 <script type="text/javascript">

    $(function() {

      $('#order-detail-content-table').footable();

	  breakpoints: {

  	  phone:751

	  tablet:1170

}

    });

  </script>

<div id="order-detail-content" class="table_block">

	<table id="order-detail-content-table" class="std table table-bordered shop_table footable table-hover">

		<thead>

			<tr>

            	<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?><th  class="first_item  checkbox_type"><input type="checkbox" /></th><?php }?>

                <th data-hide="phone,tablet" class="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>item<?php } else { ?>first_item<?php }?>"><?php echo smartyTranslate(array('s'=>'Referência'),$_smarty_tpl);?>
</th>

            	<th  data-class="expand" class="item"><?php echo smartyTranslate(array('s'=>'Produto'),$_smarty_tpl);?>
</th>

				<th class="item"><?php echo smartyTranslate(array('s'=>'Quantidade'),$_smarty_tpl);?>
</th>

				<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>

					<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Devolvido'),$_smarty_tpl);?>
</th>

				<?php }?>

				<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Valor unitário'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="last_item"><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</th>

			</tr>

		</thead>

		<tfoot>

			<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value&&$_smarty_tpl->tpl_vars['use_tax']->value) {?>

				<tr class="item">

					<td  colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value) {?>7<?php } else { ?>6<?php }?><?php } else { ?>5<?php }?>">

						<strong><?php echo smartyTranslate(array('s'=>'Total de produtos (sem taxa)'),$_smarty_tpl);?>
 </strong><span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>

					</td>

				</tr>

			<?php }?>

			<tr class="item">

				<td  colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value) {?>7<?php } else { ?>6<?php }?><?php } else { ?>5<?php }?>">

					<strong><?php echo smartyTranslate(array('s'=>'Total de produtos'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {?><?php echo smartyTranslate(array('s'=>'(com taxa)'),$_smarty_tpl);?>
<?php }?>: </strong> <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>

				</td>

			</tr>

			<?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts>0) {?>

			<tr class="item">

				<td  colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value) {?>7<?php } else { ?>6<?php }?><?php } else { ?>5<?php }?>">

					<strong><?php echo smartyTranslate(array('s'=>'Total de vales:'),$_smarty_tpl);?>
 </strong> <span class="price-discount"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl);?>
</span>

				</td>

			</tr>

			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping>0) {?>

			<tr class="item">

				<td  colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value) {?>7<?php } else { ?>6<?php }?><?php } else { ?>5<?php }?>">

					<strong><?php echo smartyTranslate(array('s'=>'O custo total de embrulho:'),$_smarty_tpl);?>
 </strong> <span class="price-wrapping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_wrapping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>

				</td>

			</tr>

			<?php }?>

			<tr class="item">

				<td  colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value) {?>7<?php } else { ?>6<?php }?><?php } else { ?>5<?php }?>">

					<strong><?php echo smartyTranslate(array('s'=>'Total de envio'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {?><?php echo smartyTranslate(array('s'=>'(com taxa)'),$_smarty_tpl);?>
<?php }?>: </strong> <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_shipping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>

				</td>

			</tr>

			<tr class="totalprice item">

				<td  colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value) {?>7<?php } else { ?>6<?php }?><?php } else { ?>5<?php }?>">

					<strong><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</strong> <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>

				</td>

			</tr>

		</tfoot>

		<tbody>

		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>

			<?php if (!isset($_smarty_tpl->tpl_vars['product']->value['deleted'])) {?>

				<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>

				<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_attribute_id'], null, 0);?>

				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['customizedDatas'])) {?>

					<?php $_smarty_tpl->tpl_vars['productQuantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_quantity']-$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'], null, 0);?>

				<?php } else { ?>

					<?php $_smarty_tpl->tpl_vars['productQuantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_quantity'], null, 0);?>

				<?php }?>

				<!-- Customized products -->

				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['customizedDatas'])) {?>

					<tr class="item">

						<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?><td class="order_cb"></td><?php }?>

						<td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_reference'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>--<?php }?></label></td>

						<td class="bold">

							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>

						</td>

						<td><input class="order_qte_input"  name="order_qte_input[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index'];?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
</span></label></td>

						<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>

							<td>

								<?php echo $_smarty_tpl->tpl_vars['product']->value['qty_returned'];?>


							</td>

						<?php }?>

						<td>

							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">

								<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>

									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


								<?php } else { ?>

									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


								<?php }?>

							</label>

						</td>

						<td>

							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">

								<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>

									<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>

										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


									<?php } else { ?>

										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


									<?php }?>

								<?php } else { ?>

									<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>

										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


									<?php } else { ?>

										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


									<?php }?>

								<?php }?>

							</label>

						</td>

					</tr>

					<?php  $_smarty_tpl->tpl_vars['customizationPerAddress'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customizationPerAddress']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizedDatas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customizationPerAddress']->key => $_smarty_tpl->tpl_vars['customizationPerAddress']->value) {
$_smarty_tpl->tpl_vars['customizationPerAddress']->_loop = true;
?>

						<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_smarty_tpl->tpl_vars['customizationId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customizationPerAddress']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
 $_smarty_tpl->tpl_vars['customizationId']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>

						<tr class="alternate_item">

							<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="customization_ids[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
][]" value="<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
" /></td><?php }?>

							<td colspan="2">

							<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datas']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>

								<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value) {?>

								<ul class="customizationUploaded">

									<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>

										<li><img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li>

									<?php } ?>

								</ul>

								<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value) {?>

								<ul class="typedText"><?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>


									<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>

										<?php $_smarty_tpl->tpl_vars['customizationFieldName'] = new Smarty_variable(("Text #").($_smarty_tpl->tpl_vars['data']->value['id_customization_field']), null, 0);?>

										<li><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['customizationFieldName']->value : $tmp);?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
</li>

									<?php } ?>

								</ul>

								<?php }?>

							<?php } ?>

							</td>

							<td>

								<input class="order_qte_input" name="customization_qty_input[<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
</span></label>

							</td>

							<td colspan="2"></td>

						</tr>

						<?php } ?>

					<?php } ?>

				<?php }?>

				<!-- Classic products -->

				<?php if ($_smarty_tpl->tpl_vars['product']->value['product_quantity']>$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']) {?>

					<tr class="item">

						<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="ids_order_detail[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" /></td><?php }?>

						<td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_reference'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>--<?php }?></label></td>

						<td class="bold">

							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">

								<?php if ($_smarty_tpl->tpl_vars['product']->value['download_hash']&&$_smarty_tpl->tpl_vars['invoice']->value&&$_smarty_tpl->tpl_vars['product']->value['display_filename']!=''&&$_smarty_tpl->tpl_vars['product']->value['product_quantity_refunded']==0&&$_smarty_tpl->tpl_vars['product']->value['product_quantity_return']==0) {?>

									<?php if (isset($_smarty_tpl->tpl_vars['is_guest']->value)&&$_smarty_tpl->tpl_vars['is_guest']->value) {?>

									<a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['filename'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['download_hash'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp1."-".$_tmp2."&amp;id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Baixar este produto'),$_smarty_tpl);?>
">

									<?php } else { ?>

										<a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['filename'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['download_hash'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp3."-".$_tmp4), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Baixar este produto'),$_smarty_tpl);?>
">

									<?php }?>

										<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s'=>'Baixar produto'),$_smarty_tpl);?>
" />

									</a>

									<?php if (isset($_smarty_tpl->tpl_vars['is_guest']->value)&&$_smarty_tpl->tpl_vars['is_guest']->value) {?>

										<a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['filename'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['download_hash'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp6=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp5."-".$_tmp6."&id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Baixar este produto'),$_smarty_tpl);?>
"> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 	</a>

									<?php } else { ?>

									<a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['filename'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['download_hash'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp7."-".$_tmp8), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Baixar este produto'),$_smarty_tpl);?>
"> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 	</a>

									<?php }?>

								<?php } else { ?>

									<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


								<?php }?>

							</label>

						</td>

						<td><input style="display:none;" class="order_qte_input" name="order_qte_input[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
</span></label></td>

						<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>

							<td>

								<?php echo $_smarty_tpl->tpl_vars['product']->value['qty_returned'];?>


							</td>

						<?php }?>

						<td>

							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">

							<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


							<?php } else { ?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


							<?php }?>

							</label>

						</td>

						<td>

							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">

							<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


							<?php } else { ?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>


							<?php }?>

							</label>

						</td>

					</tr>

				<?php }?>

			<?php }?>

		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>

			<tr class="item">

				<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>

				<td><?php echo smartyTranslate(array('s'=>'Vale'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>

				<td><span class="order_qte_span editable">1</span></td>

				<td>&nbsp;</td>

				<td><?php if ($_smarty_tpl->tpl_vars['discount']->value['value']!=0.00) {?>-<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</td>

				<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>

				<td>&nbsp;</td>

				<?php }?>

			</tr>

		<?php } ?>

		</tbody>

	</table>

</div>

<script type="text/javascript">

    $(function() {

      $('#shipping-table').footable();

	  breakpoints: {

  	  phone:851

	  tablet:1170

}

    });

  </script>

<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>

	<div id="returnOrderMessage" class="titled_box">

		<h2><span><?php echo smartyTranslate(array('s'=>'Devolução de mercadoria'),$_smarty_tpl);?>
</span></h2>

		<p class="textarea">

        	<label><?php echo smartyTranslate(array('s'=>'Se você deseja retornar um ou mais produtos, por favor, marque as caixas correspondentes e fornecer uma explicação para o retorno. Em seguida, clique no botão abaixo.'),$_smarty_tpl);?>
</label>

			<textarea class="form-control" cols="67" rows="3" name="returnText"></textarea>

		</p>

		<p class="submit">

			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Make an RMA slip'),$_smarty_tpl);?>
" name="submitReturnMerchandise" class="btn btn-default" />

			<input type="hidden" class="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
" name="id_order" />

		</p>

	</div>

	<?php }?>

	</form>

<?php if (count($_smarty_tpl->tpl_vars['order']->value->getShipping())>0) {?>

	<table id="shipping-table" class="table table-bordered shop_table footable table-hover">

		<thead>

			<tr>

				<th data-class="expand"  class="first_item"><?php echo smartyTranslate(array('s'=>'Data'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Portador'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Peso'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Custo de envio'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="last_item"><?php echo smartyTranslate(array('s'=>'Número de rastreamento'),$_smarty_tpl);?>
</th>

			</tr>

		</thead>

		<tbody>

			<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->getShipping(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>

			<tr class="item">

				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['line']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['line']->value['carrier_name'];?>
</td>

				<td><?php if ($_smarty_tpl->tpl_vars['line']->value['weight']>0) {?><?php echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
 <?php echo Configuration::get('PS_WEIGHT_UNIT');?>
<?php } else { ?>-<?php }?></td>

				<td><?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod()==@constant('PS_TAX_INC')) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
<?php }?></td>

				<td>

					<span id="shipping_number_show"><?php if ($_smarty_tpl->tpl_vars['line']->value['tracking_number']) {?><?php if ($_smarty_tpl->tpl_vars['line']->value['url']&&$_smarty_tpl->tpl_vars['line']->value['tracking_number']) {?><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['line']->value['url'],'@',$_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
<?php }?><?php } else { ?>-<?php }?></span>

				</td>

			</tr>

			<?php } ?>

		</tbody>

	</table>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>

	



	<?php if (count($_smarty_tpl->tpl_vars['messages']->value)) {?>

    <div class="titled_box">

		<h2><span><?php echo smartyTranslate(array('s'=>'Mensagens'),$_smarty_tpl);?>
</span></h2>

    </div>

	 

		<table class="detail_step_by_step table table-hover table-bordered">

			<thead>

				<tr>

					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Para'),$_smarty_tpl);?>
</th>

					<th class="last_item"><?php echo smartyTranslate(array('s'=>'Mensagem'),$_smarty_tpl);?>
</th>

				</tr>

			</thead>

			<tbody>

			<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['message']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['message']->iteration=0;
 $_smarty_tpl->tpl_vars['message']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['message']->iteration++;
 $_smarty_tpl->tpl_vars['message']->index++;
 $_smarty_tpl->tpl_vars['message']->first = $_smarty_tpl->tpl_vars['message']->index === 0;
 $_smarty_tpl->tpl_vars['message']->last = $_smarty_tpl->tpl_vars['message']->iteration === $_smarty_tpl->tpl_vars['message']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['first'] = $_smarty_tpl->tpl_vars['message']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['last'] = $_smarty_tpl->tpl_vars['message']->last;
?>

				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['last']) {?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">

					<td>

						<?php if (isset($_smarty_tpl->tpl_vars['message']->value['elastname'])&&$_smarty_tpl->tpl_vars['message']->value['elastname']) {?>

							<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['efirstname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['elastname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


						<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['clastname']) {?>

							<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['cfirstname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['clastname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


						<?php } else { ?>

							<b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b>

						<?php }?>

						<br />

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl);?>


					</td>

					<td><?php echo nl2br(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</td>

				</tr>

			<?php } ?>

			</tbody>

		</table>

	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>

		<div class="alert alert-danger">

        	<button class="close" data-dismiss="alert" type="button">×</button>

			<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1) {?><?php echo smartyTranslate(array('s'=>'Existem %d erros','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Existe %d erro','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?></p>

			<ol>

			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>

				<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>

			<?php } ?>

			</ol>

		</div>

	<?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['message_confirmation']->value)&&$_smarty_tpl->tpl_vars['message_confirmation']->value) {?>

	<p class="alert alert-suces">

		<?php echo smartyTranslate(array('s'=>'Mensagem enviada com sucesso!'),$_smarty_tpl);?>


	</p>

	<?php }?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true);?>
" method="post" class="std titled_box" id="sendOrderMessage">

		<h2><span><?php echo smartyTranslate(array('s'=>'Add uma mensagem'),$_smarty_tpl);?>
</span></h2>

		<p><?php echo smartyTranslate(array('s'=>'Se você gostaria de adicionar um comentário sobre seu pedido, por favor, escreva-o no campo abaixo.'),$_smarty_tpl);?>
</p>

		<p class="form-group">

		<label for="id_product"><?php echo smartyTranslate(array('s'=>'Produto'),$_smarty_tpl);?>
</label>

			<select name="id_product" class="form-control" >

				<option value="0"><?php echo smartyTranslate(array('s'=>'-- Escolha --'),$_smarty_tpl);?>
</option>

				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>

					<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</option>

				<?php } ?>

			</select>

		</p>

		<p class="form-group">

			<textarea  class="form-control"cols="67" rows="3" name="msgText"></textarea>

		</p>

		<p class="submit">

			<input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
" />

			<input type="submit" class="btn btn-default" name="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Enviar'),$_smarty_tpl);?>
"/>

		</p>

	</form>

<?php } else { ?>

<p><i class="icon-info-sign"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Você não pode retornar a mercadoria com uma conta de convidado'),$_smarty_tpl);?>
</p>

<?php }?>

<?php }} ?>
