<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 22:52:45
         compiled from "/home/annepeliculas/www/site/themes/theme818/best-sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10126470805467f55d524738-29251232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '415fe7d6ffb9fbe8efa9eab821c10973da34f056' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/best-sales.tpl',
      1 => 1415385452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10126470805467f55d524738-29251232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467f55d5d6330_90214698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467f55d5d6330_90214698')) {function content_5467f55d5d6330_90214698($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Mais Vendidos'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Mais Vendidos'),$_smarty_tpl);?>
</span></h1>



<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

            <div class="sortPagiBar shop_box_row shop_box_row clearfix">

            	<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            	<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            </div>

				<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


            <div class="bottom_pagination shop_box_row  clearfix">

            	<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>


            	<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>


            </div>

<?php } else { ?>

	<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Não há mais vendidos neste momento.'),$_smarty_tpl);?>
</p>

<?php }?>

<?php }} ?>
