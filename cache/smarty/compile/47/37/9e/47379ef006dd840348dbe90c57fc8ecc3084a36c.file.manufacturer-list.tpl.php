<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 16:54:09
         compiled from "/home/annepeliculas/www/site/themes/theme818/manufacturer-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517900546546a4451c9f352-94128683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47379ef006dd840348dbe90c57fc8ecc3084a36c' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/manufacturer-list.tpl',
      1 => 1415391713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517900546546a4451c9f352-94128683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbManufacturers' => 0,
    'errors' => 0,
    'manufacturers' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a4451ecc916_31514528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a4451ecc916_31514528')) {function content_546a4451ecc916_31514528($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Fabricantes:'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Fabricantes'),$_smarty_tpl);?>
<strong>

<?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value==0) {?><?php echo smartyTranslate(array('s'=>'Não há fabricantes.'),$_smarty_tpl);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value==1) {?><?php echo smartyTranslate(array('s'=>'Existe %d fabricante.','sprintf'=>$_smarty_tpl->tpl_vars['nbManufacturers']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Existem %d fabricantes.','sprintf'=>$_smarty_tpl->tpl_vars['nbManufacturers']->value),$_smarty_tpl);?>
<?php }?><?php }?>

	</strong></span></h1>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } else { ?>

	<?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value>0) {?>

		<ul id="manufacturers_list"  class="mnf_sup_list clearfix">

		<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturers']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturers']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>

			<li class="shop_box clearfix <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturers']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturers']['last']) {?>last_item<?php } else { ?>item<?php }?>"> 

            	<div class="col-xs-12 col-sm-8 col-lg-9 border_sep">

                	<div class="row">

                        <!-- logo -->

                        <div class="logo col-xs-3">

                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="lnk_img"><?php }?>

                            <img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-medium_default.jpg" alt="" />

                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?></a><?php }?>

                        </div>

                        <!-- name -->

                        <div class="left_side col-xs-9">

                        <h3>

                            <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?><a class="product_link" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php }?>

                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['manufacturer']->value['name'],60,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


                            <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?></a><?php }?>

                        </h3>

                        <div>

                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?><p class="product_desc"><?php }?>

                            <span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['manufacturer']->value['description'],150,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>

                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?></p><?php }?>

                                    </div>

                    </div>

                    </div>

                </div>

                <div class="right_side col-xs-12 col-sm-4 col-lg-3">

                        <p>

                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?><a class="title_shop" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php }?>

                            <span><?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']==1) {?><?php echo smartyTranslate(array('s'=>'%d produto','sprintf'=>intval($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products'])),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d produtos','sprintf'=>intval($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products'])),$_smarty_tpl);?>
<?php }?></span>

                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?></a><?php }?>

                        </p>

                    <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?>

                        <a class="button btn btn-default" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Ver produtos'),$_smarty_tpl);?>
</a>

                    <?php }?>

                    </div>

			</li>

		<?php } ?>

		</ul>

        <div class="bottom_pagination shop_box_row  clearfix">

			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </div>

	<?php }?>

<?php }?><?php }} ?>
