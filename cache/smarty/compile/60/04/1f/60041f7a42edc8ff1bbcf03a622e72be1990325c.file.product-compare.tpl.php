<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 11:26:26
         compiled from "/home/annepeliculas/www/site/themes/theme818/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1621993868546754820f3f38-58155419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60041f7a42edc8ff1bbcf03a622e72be1990325c' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/product-compare.tpl',
      1 => 1415247939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621993868546754820f3f38-58155419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'paginationId' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54675482139204_26212104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54675482139204_26212104')) {function content_54675482139204_26212104($_smarty_tpl) {?>



<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>

<script type="text/javascript">

// <![CDATA[

	var min_item = "<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
";

	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";



//]]>

</script>

<?php if (!isset($_smarty_tpl->tpl_vars['paginationId']->value)||$_smarty_tpl->tpl_vars['paginationId']->value=='') {?>

<?php }?>

	<form class="form_compare hidden-xs" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" onsubmit="true">

		<p>

		<input type="submit" id="bt_compare<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="button btn btn-default" value="<?php echo smartyTranslate(array('s'=>'Comparar'),$_smarty_tpl);?>
" />

		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />

		</p>

	</form>

<?php }?>



<?php }} ?>
