<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 16:24:56
         compiled from "/home/annepeliculas/www/site/themes/theme818/order-slip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7425947775467be098f9df7-48633889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a480e7084620f998d92b28704f44b920d69ccb28' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/order-slip.tpl',
      1 => 1416248639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7425947775467be098f9df7-48633889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467be09aaeac0_28915416',
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'ordersSlip' => 0,
    'slip' => 0,
    'img_dir' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467be09aaeac0_28915416')) {function content_5467be09aaeac0_28915416($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Minha Conta'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Meus Créditos'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Meus Créditos'),$_smarty_tpl);?>
</span></h1>

<p><?php echo smartyTranslate(array('s'=>'Créditos recebidos após cancelamento de pedidos'),$_smarty_tpl);?>
.</p>

<script type="text/javascript">

    $(function() {

      $('#order-list').footable();

	  breakpoints: {

  	  phone:851

	  tablet:1170

}

    });

  </script>

<div class="block-center" id="block-history">

	<?php if ($_smarty_tpl->tpl_vars['ordersSlip']->value&&count($_smarty_tpl->tpl_vars['ordersSlip']->value)) {?>

	<table id="order-list" class="table table-hover table-bordered footable">

		<thead>

			<tr>

				<th data-class="expand" class="first_item"><?php echo smartyTranslate(array('s'=>'Créditos'),$_smarty_tpl);?>
</th>

				<th data-hide="phone" class="item"><?php echo smartyTranslate(array('s'=>'Pedido'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Data de emissão'),$_smarty_tpl);?>
</th>

				<th data-hide="phone,tablet" class="last_item"><?php echo smartyTranslate(array('s'=>'Ver créditos'),$_smarty_tpl);?>
</th>

			</tr>

		</thead>

		<tbody>

		<?php  $_smarty_tpl->tpl_vars['slip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordersSlip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slip']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['slip']->iteration=0;
 $_smarty_tpl->tpl_vars['slip']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slip']->key => $_smarty_tpl->tpl_vars['slip']->value) {
$_smarty_tpl->tpl_vars['slip']->_loop = true;
 $_smarty_tpl->tpl_vars['slip']->iteration++;
 $_smarty_tpl->tpl_vars['slip']->index++;
 $_smarty_tpl->tpl_vars['slip']->first = $_smarty_tpl->tpl_vars['slip']->index === 0;
 $_smarty_tpl->tpl_vars['slip']->last = $_smarty_tpl->tpl_vars['slip']->iteration === $_smarty_tpl->tpl_vars['slip']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['slip']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['slip']->last;
?>

			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } else { ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?>alternate_item<?php }?>">

				<td class="bold"><span class="color-myaccount"><?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
</span></td>

				<td class="history_method"><a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail'), ENT_QUOTES, 'UTF-8', true);?>
');"><?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order'])),$_smarty_tpl);?>
</a></td>

				<td class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['slip']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>

				<td class="history_invoice">

					<a href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-slip',true,null,"id_order_slip=".$_tmp1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Meus créditos'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/pdf.gif" alt="<?php echo smartyTranslate(array('s'=>'Pedidos devolvidos'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
" class="icon" /></a>

					<a href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-slip',true,null,"id_order_slip=".$_tmp2), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Meus créditos'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>
</a>

				</td>

			</tr>

		<?php } ?>

		</tbody>

	</table>

	<div id="block-order-detail" style="display:none;">&nbsp;</div>

	<?php } else { ?>

		<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Você não possui créditos à receber.'),$_smarty_tpl);?>
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

</ul><?php }} ?>