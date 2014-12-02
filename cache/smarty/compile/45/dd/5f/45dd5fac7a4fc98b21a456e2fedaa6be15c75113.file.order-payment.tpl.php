<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 10:33:45
         compiled from "/home/annepeliculas/www/site/themes/theme818/order-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1035081605546b3ca93217e7-68314024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45dd5fac7a4fc98b21a456e2fedaa6be15c75113' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/order-payment.tpl',
      1 => 1415628188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1035081605546b3ca93217e7-68314024',
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
    'HOOK_TOP_PAYMENT' => 0,
    'HOOK_PAYMENT' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546b3ca9409016_18176887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b3ca9409016_18176887')) {function content_546b3ca9409016_18176887($_smarty_tpl) {?>



<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<script type="text/javascript">

	// <![CDATA[

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

	// ]]>

	</script>



	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Forma de pagamento'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }?>



<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?><h1><span><?php echo smartyTranslate(array('s'=>'Por favor, escolha a forma de pagamento'),$_smarty_tpl);?>
</span></h1><?php } else { ?><h1><span>3</span> <?php echo smartyTranslate(array('s'=>'Por favor, escolha a forma de pagamento'),$_smarty_tpl);?>
</h1><?php }?>



<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } else { ?>

	<div id="opc_payment_methods" class="opc-main-block">

		<div id="opc_payment_methods-overlay" class="opc-overlay" style="display:none;"></div>

<?php }?>



<div class="paiement_block">



<div id="HOOK_TOP_PAYMENT"><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP_PAYMENT']->value;?>
</div>



<?php if ($_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value) {?>

	<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><div id="opc_payment_methods-content"><?php }?>

		<div id="HOOK_PAYMENT"><?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value;?>
</div>

	<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?></div><?php }?>

<?php } else { ?>

	<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Nenhum módulo de pagamento foram instalados.'),$_smarty_tpl);?>
</p>

<?php }?>



<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

	<p class="cart_navigation clearfix"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=2"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Anterior'),$_smarty_tpl);?>
" class="button btn btn-default">&laquo; <?php echo smartyTranslate(array('s'=>'Anterior'),$_smarty_tpl);?>
</a></p>

<?php } else { ?>

	</div>

<?php }?>

</div>

<?php }} ?>
