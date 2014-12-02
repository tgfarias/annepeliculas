<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 22:42:34
         compiled from "/home/annepeliculas/www/site/themes/theme818/sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6883808545467f2faa6ba34-12122822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc20cfcb9e3cc1fbf1b37d5688afa8589b9ac65b' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/sitemap.tpl',
      1 => 1415627728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6883808545467f2faa6ba34-12122822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'display_manufacturer_link' => 0,
    'PS_DISPLAY_SUPPLIERS' => 0,
    'display_supplier_link' => 0,
    'logged' => 0,
    'voucherAllowed' => 0,
    'categoriescmsTree' => 0,
    'child' => 0,
    'cms' => 0,
    'display_store' => 0,
    'base_dir_ssl' => 0,
    'categoriesTree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467f2fad3d576_47024401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467f2fad3d576_47024401')) {function content_5467f2fad3d576_47024401($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Mapa do Site'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Mapa do Site'),$_smarty_tpl);?>
</span></h1>

<div id="sitemap_content" class="row">

	<div class="sitemap_block titled_box col-xs-12 col-sm-4">

		<h2><span><?php echo smartyTranslate(array('s'=>'Nossas ofertas'),$_smarty_tpl);?>
</span></h2>

		<ul class="content_list">

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Ver um novo produto'),$_smarty_tpl);?>
"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Novos produtos'),$_smarty_tpl);?>
</a></li>

			<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Ver produtos mais vendidos'),$_smarty_tpl);?>
"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Mais vendidos'),$_smarty_tpl);?>
</a></li>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Ver produtos com menor preço'),$_smarty_tpl);?>
"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Mais baratos'),$_smarty_tpl);?>
</a></li>

			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['display_manufacturer_link']->value||$_smarty_tpl->tpl_vars['PS_DISPLAY_SUPPLIERS']->value) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Lista de fabricantes'),$_smarty_tpl);?>
"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Fabricantes:'),$_smarty_tpl);?>
</a></li><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['display_supplier_link']->value||$_smarty_tpl->tpl_vars['PS_DISPLAY_SUPPLIERS']->value) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Lista de fornecedores'),$_smarty_tpl);?>
"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Fornecedores:'),$_smarty_tpl);?>
</a></li><?php }?>

		</ul>

	</div>

	<div class="sitemap_block titled_box col-xs-12 col-sm-4">

		<h2><span><?php echo smartyTranslate(array('s'=>'Sua Conta'),$_smarty_tpl);?>
</span></h2>

		<ul class="content_list">

		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Gerenciar sua conta'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Sua Conta'),$_smarty_tpl);?>
</a></li>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Gerencie suas informações pessoais'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Informações pessoais'),$_smarty_tpl);?>
</a></li>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Veja uma lista dos meus endereços'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Endereços'),$_smarty_tpl);?>
</a></li>

			<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Veja uma lista dos meus descontos'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Descontos'),$_smarty_tpl);?>
</a></li><?php }?>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Meus pedidos'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Histórico de Pedidos'),$_smarty_tpl);?>
</a></li>

		<?php } else { ?>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Autenticação'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Autenticação'),$_smarty_tpl);?>
</a></li>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Criar uma nova conta'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Nova conta'),$_smarty_tpl);?>
</a></li>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sair'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Sair'),$_smarty_tpl);?>
</a></li>

		<?php }?>

		</ul>

	</div>

	<div class="sitemap_block titled_box col-xs-12 col-sm-4">

			<h2><span><?php echo smartyTranslate(array('s'=>'Páginas'),$_smarty_tpl);?>
</span></h2>

				<ul class="content_list">

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['categoriescmsTree']->value['link'];?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['categoriescmsTree']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><i class="icon-caret-right"></i> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['categoriescmsTree']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>

                        <?php if (isset($_smarty_tpl->tpl_vars['categoriescmsTree']->value['children'])) {?>

                            <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriescmsTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['child']->value['children'])&&count($_smarty_tpl->tpl_vars['child']->value['children'])>0)||count($_smarty_tpl->tpl_vars['child']->value['cms'])>0) {?>

                                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>


                                <?php }?>

                            <?php } ?>

                        <?php }?>

                        <?php  $_smarty_tpl->tpl_vars['cms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriescmsTree']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms']->key => $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->_loop = true;
?>

                            <li><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><i class="icon-caret-right"></i> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>

                        <?php } ?>

                        <li <?php if (!$_smarty_tpl->tpl_vars['display_store']->value) {?> class="last"<?php }?>><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contato'),$_smarty_tpl);?>
"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Contato'),$_smarty_tpl);?>
</a></li>

                        <?php if ($_smarty_tpl->tpl_vars['display_store']->value) {?><li class="last"><a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Lista das lojas'),$_smarty_tpl);?>
"><i class="icon-caret-right"></i> <?php echo smartyTranslate(array('s'=>'Lojas'),$_smarty_tpl);?>
</a></li><?php }?>

				</ul>

	</div>

</div>

<div id="listpage_content">

	<div class="categTree titled_box">

		<h2><span><?php echo smartyTranslate(array('s'=>'Categorias'),$_smarty_tpl);?>
</span></h2>

		<div class="tree_top"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['categoriesTree']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['categoriesTree']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></div>

		<ul class="tree">

		<?php if (isset($_smarty_tpl->tpl_vars['categoriesTree']->value['children'])) {?>

			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriesTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
?>

				<?php if ($_smarty_tpl->tpl_vars['child']->last) {?>

					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>


				<?php } else { ?>

					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>


				<?php }?>

			<?php } ?>

		<?php }?>

		</ul>

	</div>



</div>

<?php }} ?>
