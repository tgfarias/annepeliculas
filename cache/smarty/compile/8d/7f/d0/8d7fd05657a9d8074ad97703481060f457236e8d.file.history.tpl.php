<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 12:18:15
         compiled from "/home/annepeliculas/www/site/themes/theme818/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2084051152546a03a72672c6-49765866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d7fd05657a9d8074ad97703481060f457236e8d' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/history.tpl',
      1 => 1415304450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2084051152546a03a72672c6-49765866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'slowValidation' => 0,
    'orders' => 0,
    'order' => 0,
    'img_dir' => 0,
    'invoiceAllowed' => 0,
    'opc' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a03a74abfd5_53064396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a03a74abfd5_53064396')) {function content_546a03a74abfd5_53064396($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Minha Conta'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Histórico de pedidos'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Histórico de pedidos'),$_smarty_tpl);?>
</span></h1>

<p><?php echo smartyTranslate(array('s'=>'Aqui estão os pedidos que você realizou desde a sua conta foi criada.'),$_smarty_tpl);?>
</p>



<?php if ($_smarty_tpl->tpl_vars['slowValidation']->value) {?><p class="alert alert-info">

<button class="close" data-dismiss="alert" type="button">×</button>

<?php echo smartyTranslate(array('s'=>'Se você acabou de realizar um pedido, pode demorar alguns minutos para ser validado. Por favor, atualize esta página se seu pedido está faltando.'),$_smarty_tpl);?>
</p><?php }?>



<div class="block-center" id="block-history">



	<?php if ($_smarty_tpl->tpl_vars['orders']->value&&count($_smarty_tpl->tpl_vars['orders']->value)) {?>

      <script type="text/javascript">

 $(function() {

      $('#order-list').footable();

	  	  breakpoints: {

	  tablet:1000

	}

    });

  </script>

	<table id="order-list" class="footable table table-hover table-bordered">

		<thead>

			<tr>

				<th data-class="expand" class="first_item "><?php echo smartyTranslate(array('s'=>'Código do pedido'),$_smarty_tpl);?>
</th>

				<th data-hide="phone"  class="item"><?php echo smartyTranslate(array('s'=>'Data'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet"  class="item"><?php echo smartyTranslate(array('s'=>'Valor total'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Pagamento: '),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>

				<th data-hide="phone" class="item"><?php echo smartyTranslate(array('s'=>'Fatura'),$_smarty_tpl);?>
</th>

				<th data-hide="phone" class="last_item" ><?php echo smartyTranslate(array('s'=>'detalhes'),$_smarty_tpl);?>
</th>

			</tr>

		</thead>

		<tbody>

		<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['order']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['order']->iteration=0;
 $_smarty_tpl->tpl_vars['order']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['order']->iteration++;
 $_smarty_tpl->tpl_vars['order']->index++;
 $_smarty_tpl->tpl_vars['order']->first = $_smarty_tpl->tpl_vars['order']->index === 0;
 $_smarty_tpl->tpl_vars['order']->last = $_smarty_tpl->tpl_vars['order']->iteration === $_smarty_tpl->tpl_vars['order']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['order']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['order']->last;
?>

			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } else { ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?>alternate_item<?php }?>">

				<td class="history_link bold">

					<?php if (isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['virtual'])&&$_smarty_tpl->tpl_vars['order']->value['virtual']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.png" class="icon" alt="<?php echo smartyTranslate(array('s'=>'Produtos para download'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Produtos para download'),$_smarty_tpl);?>
" /><?php }?>

					<?php echo Order::getUniqReferenceOf($_smarty_tpl->tpl_vars['order']->value['id_order']);?>


				</td>

				<td class="history_date bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>

				<td class="history_price"><span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl);?>
</span></td>

				<td class="history_method"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['payment'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>

				<td class="history_state"><?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state'])) {?><i class="icon-angle-right"></i> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>---<?php }?></td>

				<td class="history_invoice">

				<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&$_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&isset($_smarty_tpl->tpl_vars['invoiceAllowed']->value)&&$_smarty_tpl->tpl_vars['invoiceAllowed']->value==true) {?>

					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true,null,"id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Fatura'),$_smarty_tpl);?>
" target="_blank"><i class="icon-file-alt"></i></a>

					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true,null,"id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Fatura'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>
</a>

				<?php } else { ?>-<?php }?>

				</td>

				<td class="history_detail">

					<a class="color-myaccount btn btn-info" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
');"><?php echo smartyTranslate(array('s'=>'detalhes'),$_smarty_tpl);?>
</a>

					<?php if (isset($_smarty_tpl->tpl_vars['opc']->value)&&$_smarty_tpl->tpl_vars['opc']->value) {?>

					

                    <a class="btn btn-info" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true,null,"submitReorder&id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Reordenar'),$_smarty_tpl);?>
">

					<?php } else { ?>

					<a class="btn btn-info" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"submitReorder&id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Reordenar'),$_smarty_tpl);?>
">

					<?php }?>

					<?php echo smartyTranslate(array('s'=>'Reordenar'),$_smarty_tpl);?>


					</a>

				</td>

			</tr>

		<?php } ?>

		</tbody>

	</table>

	<div id="block-order-detail" style="display:none;">&nbsp;</div>

	<?php } else { ?>

		<p class="alert alert-info"><button class="close" data-dismiss="alert" type="button">×</button> <?php echo smartyTranslate(array('s'=>'Você não realizou nenhum pedido'),$_smarty_tpl);?>
</p>

	<?php }?>

</div>



<ul class="footer_links clearfix">

	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-user"></i><?php echo smartyTranslate(array('s'=>'Voltar para sua conta'),$_smarty_tpl);?>
</a></li>

	<li class="f_right"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><i class="icon-home"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>

</ul>

<?php }} ?>
