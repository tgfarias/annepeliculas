<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 16:54:21
         compiled from "/home/annepeliculas/www/site/themes/theme818/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1844487390546a445deea2b8-51505064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52018ff04a00ac29157c372c216f0cb7e6c67812' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/manufacturer.tpl',
      1 => 1415391793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844487390546a445deea2b8-51505064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a445e0c9cf9_92054490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a445e0c9cf9_92054490')) {function content_546a445e0c9cf9_92054490($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>

	<h1><span><?php echo smartyTranslate(array('s'=>'Lista de produtos por fabricante'),$_smarty_tpl);?>
&nbsp;<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></h1>

	<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)) {?>

		<div class="description_box cat_desc">

			<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)) {?>

				

				<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>

			

			<?php } else { ?>

				<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>

			<?php }?>

		</div>

	<?php }?>

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

		<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Não há produtos deste fabricante.'),$_smarty_tpl);?>
</p>

	<?php }?>

<?php }?>

<?php }} ?>
