<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 11:26:25
         compiled from "/home/annepeliculas/www/site/themes/theme818/product-sort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120846805654675481653387-44359276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ed1f31a0a95ccd0ffe09395578f88797f0bf6a' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/product-sort.tpl',
      1 => 1415248169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120846805654675481653387-44359276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderby' => 0,
    'orderway' => 0,
    'request' => 0,
    'category' => 0,
    'link' => 0,
    'manufacturer' => 0,
    'supplier' => 0,
    'paginationId' => 0,
    'orderbydefault' => 0,
    'orderwaydefault' => 0,
    'PS_CATALOG_MODE' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546754818eea67_48924636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546754818eea67_48924636')) {function content_546754818eea67_48924636($_smarty_tpl) {?>



<?php if (isset($_smarty_tpl->tpl_vars['orderby']->value)&&isset($_smarty_tpl->tpl_vars['orderway']->value)) {?>





<?php if (!isset($_smarty_tpl->tpl_vars['request']->value)) {?>

	<!-- Sort products -->

	<?php if (isset($_GET['id_category'])&&$_GET['id_category']) {?>

		<?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,true), null, 0);?>

	<?php } elseif (isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']) {?>

		<?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,true), null, 0);?>

	<?php } elseif (isset($_GET['id_supplier'])&&$_GET['id_supplier']) {?>

		<?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,true), null, 0);?>

	<?php } else { ?>

		<?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,true), null, 0);?>

	<?php }?>

<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['paginationId']->value)||$_smarty_tpl->tpl_vars['paginationId']->value=='') {?>

<script type="text/javascript">

//<![CDATA[

$(document).ready(function(){

	if($('#layered_form').length == 0)

	{

 		$('.selectProductSort').change(function(){

			var requestSortProducts = '<?php echo $_smarty_tpl->tpl_vars['request']->value;?>
';

 			var splitData = $(this).val().split(':');

			document.location.href = requestSortProducts + ((requestSortProducts.indexOf('?') < 0) ? '?' : '&') + 'orderby=' + splitData[0] + '&orderway=' + splitData[1];

    	});

  	}

});

//]]>

</script>

<?php }?>

<script type="text/javascript">

//<![CDATA[

	$(document).ready(function(){

		$('#productsSortForm .selectProductSort, .nb_item').uniform();

	});

//]]>

</script>     

<ul class="product_view clearfix hidden-xs">

	<li id="product_view_grid" class="current "><i class="icon-th-large"></i></li>

	<li id="product_view_list" class=""><i class="icon-th-list"></i></li>

</ul>

<form id="productsSortForm<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['request']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="nbrItemPage productsSortForm">

        		<label for="selectPrductSort<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'Ordenar por'),$_smarty_tpl);?>
</label>

		<select id="selectPrductSort<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="selectProductSort">

			<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['orderbydefault']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['orderwaydefault']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['orderby']->value==$_smarty_tpl->tpl_vars['orderbydefault']->value) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'--'),$_smarty_tpl);?>
</option>

			<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>

				<option value="price:asc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='price'&&$_smarty_tpl->tpl_vars['orderway']->value=='asc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Preço: Menor p/ Maior'),$_smarty_tpl);?>
</option>

				<option value="price:desc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='price'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Preço: Maior p/ Menor'),$_smarty_tpl);?>
</option>

			<?php }?>

			<option value="name:asc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='name'&&$_smarty_tpl->tpl_vars['orderway']->value=='asc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Nome: Crescente'),$_smarty_tpl);?>
</option>

			<option value="name:desc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='name'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Nome: Descrescente'),$_smarty_tpl);?>
</option>

			<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>

				<option value="quantity:desc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='quantity'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Em estoque'),$_smarty_tpl);?>
</option>

			<?php }?>

			<option value="reference:asc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='reference'&&$_smarty_tpl->tpl_vars['orderway']->value=='asc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Referência: Menor'),$_smarty_tpl);?>
</option>

			<option value="reference:desc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='reference'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Referência: Maior'),$_smarty_tpl);?>
</option>

		</select>



</form>

<!-- /Sort products -->

<?php }?><?php }} ?>
