<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 10:34:12
         compiled from "/home/annepeliculas/www/site/themes/theme818/cms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42801916546b3cc48db256-68856647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f92f5341ffa6af393451488e19c44bbb4e35272' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/cms.tpl',
      1 => 1415385633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42801916546b3cc48db256-68856647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'cms' => 0,
    'cms_category' => 0,
    'base_dir' => 0,
    'link' => 0,
    'sub_category' => 0,
    'subcategory' => 0,
    'cms_pages' => 0,
    'cmspages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546b3cc4b30ec3_28518076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b3cc4b30ec3_28518076')) {function content_546b3cc4b30ec3_28518076($_smarty_tpl) {?>

<?php if (($_smarty_tpl->tpl_vars['content_only']->value==0)) {?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['cms']->value)&&!isset($_smarty_tpl->tpl_vars['cms_category']->value)) {?>

	<?php if (!$_smarty_tpl->tpl_vars['cms']->value->active) {?>

		<br />

		<div id="admin-action-cms">

			<p><?php echo smartyTranslate(array('s'=>'Esta página não é visível para seus clientes.'),$_smarty_tpl);?>


			<input type="hidden" id="admin-action-cms-id" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value->id;?>
" />

			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publicar'),$_smarty_tpl);?>
" class="exclusive btn btn-default" onclick="submitPublishCMS('<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_GET['ad'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
', 0, '<?php echo mb_convert_encoding(htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')"/>

			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Voltar'),$_smarty_tpl);?>
" class="exclusive btn btn-default" onclick="submitPublishCMS('<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_GET['ad'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
', 1, '<?php echo mb_convert_encoding(htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')"/>

			</p>

			<div class="clear" ></div>

			<p id="admin-action-result"></p>

			</p>

		</div>

	<?php }?>

	<div class="rte<?php if ($_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?>">

		<?php echo $_smarty_tpl->tpl_vars['cms']->value->content;?>


	</div>

<?php } elseif (isset($_smarty_tpl->tpl_vars['cms_category']->value)) {?>

	<div class="block-cms">

		<h1><a href="<?php if ($_smarty_tpl->tpl_vars['cms_category']->value->id==1) {?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['cms_category']->value->id,$_smarty_tpl->tpl_vars['cms_category']->value->link_rewrite);?>
<?php }?>"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h1>

		<?php if (isset($_smarty_tpl->tpl_vars['sub_category']->value)&&!empty($_smarty_tpl->tpl_vars['sub_category']->value)) {?>	

			<p class="title_block"><?php echo smartyTranslate(array('s'=>'Lista de sub-categorias em %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</p>

			<ul class="bullet">

				<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>

					<li>

						<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_cms_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>

					</li>

				<?php } ?>

			</ul>

		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['cms_pages']->value)&&!empty($_smarty_tpl->tpl_vars['cms_pages']->value)) {?>

		<p class="title_block"><?php echo smartyTranslate(array('s'=>'Lista de páginas em %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</p>

			<ul class="bullet">

				<?php  $_smarty_tpl->tpl_vars['cmspages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmspages']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmspages']->key => $_smarty_tpl->tpl_vars['cmspages']->value) {
$_smarty_tpl->tpl_vars['cmspages']->_loop = true;
?>

					<li>

						<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cmspages']->value['id_cms'],$_smarty_tpl->tpl_vars['cmspages']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>

					</li>

				<?php } ?>

			</ul>

		<?php }?>

	</div>

<?php } else { ?>

	<div class="error">

		<?php echo smartyTranslate(array('s'=>'Esta página não existe.'),$_smarty_tpl);?>


	</div>

<?php }?>

<br /><?php }} ?>
