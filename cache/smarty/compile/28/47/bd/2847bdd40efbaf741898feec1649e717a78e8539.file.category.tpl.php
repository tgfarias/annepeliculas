<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 11:26:25
         compiled from "/home/annepeliculas/www/site/themes/theme818/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1919752747546754812b47a1-98025354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2847bdd40efbaf741898feec1649e717a78e8539' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/category.tpl',
      1 => 1415248545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1919752747546754812b47a1-98025354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'categoryNameComplement' => 0,
    'scenes' => 0,
    'link' => 0,
    'subcategories' => 0,
    'subcategory' => 0,
    'img_cat_dir' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546754814e3f32_36976750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546754814e3f32_36976750')) {function content_546754814e3f32_36976750($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>

	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active) {?>

		<h1>

        <span>

			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['categoryNameComplement']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><strong class="category-product-count"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</strong>

           </span>

		</h1>

        <div class="row_category clearfix">

		<?php if ($_smarty_tpl->tpl_vars['scenes']->value) {?>

			<!-- Scenes -->

			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./scenes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('scenes'=>$_smarty_tpl->tpl_vars['scenes']->value), 0);?>




		<?php } else { ?>

			<!-- Category image -->

			<?php if ($_smarty_tpl->tpl_vars['category']->value->id_image) {?>

			<div class="align_center category_image ">

				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value->link_rewrite,$_smarty_tpl->tpl_vars['category']->value->id_image,'category_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="categoryImage"  />

			</div>

			<?php }?>



		<?php }?>

        		<?php if ($_smarty_tpl->tpl_vars['category']->value->description) {?>

			<?php if (strlen($_smarty_tpl->tpl_vars['category']->value->description)>480) {?>

				<p class="cat_desc clearfix" id="category_description_short"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['category']->value->description,480);?>
&nbsp;<span onclick="$('#category_description_short').hide(); $('#category_description_full').show();" class="lnk_more_cat"><i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Mais'),$_smarty_tpl);?>
</span></p>

			<p class="cat_desc clearfix" id="category_description_full" style="display:none"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
<span onclick="$('#category_description_short').show(); $('#category_description_full').hide();" class="lnk_more_cat close_cat"><i class="icon-minus-sign"></i> <?php echo smartyTranslate(array('s'=>'Esconder'),$_smarty_tpl);?>
</span></p>

			<?php } else { ?>

			<p class="cat_desc clearfix"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</p>

			<?php }?>

        

            		<?php }?>

                        </div>

		<?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>

		<!-- Subcategories -->

		<div id="subcategories" class="titled_box">

			<h2><?php echo smartyTranslate(array('s'=>'Sub-categorias'),$_smarty_tpl);?>
</h2>

			<ul class="row">

			<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['subcategories']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['subcategories']['iteration']++;
?>

				<li class="categories_box col-xs-4 col-sm-3 col-md-3 col-lg-2 <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['subcategories']['iteration'] % 5)) {?>product_list_5<?php }?> <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['subcategories']['iteration'] % 4)) {?>product_list_4<?php }?> <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['subcategories']['iteration'] % 3)) {?>product_list_3<?php }?> <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['subcategories']['iteration'] % 4)) {?>product_list_4<?php }?>">

					<a class="" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">

						<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>

							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'category_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="" />

						<?php } else { ?>

						<img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
default-medium_default.jpg" alt="" />

						<?php }?>

					

					</a>

              <a class="lnk_more_sub" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><i class="icon-caret-right "></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),15,'...');?>
</a>

				</li>

			<?php } ?>

			</ul>

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

        <?php }?>

	<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>

		<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Esta categoria está indisponível no momento.'),$_smarty_tpl);?>
</p>

	<?php }?>

<?php }?>

<?php }} ?>
