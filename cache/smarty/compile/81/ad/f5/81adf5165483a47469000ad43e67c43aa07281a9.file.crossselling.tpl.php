<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:47:16
         compiled from "/home/annepeliculas/www/site/modules/blockcart/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18334575975467bbd4e1ac42-00563261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81adf5165483a47469000ad43e67c43aa07281a9' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/blockcart/crossselling.tpl',
      1 => 1415285681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18334575975467bbd4e1ac42-00563261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'orderProduct' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467bbd50005e2_80009868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467bbd50005e2_80009868')) {function content_5467bbd50005e2_80009868($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/annepeliculas/www/site/tools/smarty/plugins/function.math.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)>0) {?>
	<h2><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'blockcart'),$_smarty_tpl);?>
</h2>
	<a id="blockcart_scroll_left" class="blockcart_scroll_left<?php if (count($_smarty_tpl->tpl_vars['orderProducts']->value)<5) {?> hidden<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'blockcart'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'blockcart'),$_smarty_tpl);?>
</a>
	<div id="blockcart_list">
		<ul <?php if (count($_smarty_tpl->tpl_vars['orderProducts']->value)>4) {?>style="width: <?php echo smarty_function_math(array('equation'=>"width * nbImages",'width'=>58,'nbImages'=>count($_smarty_tpl->tpl_vars['orderProducts']->value)),$_smarty_tpl);?>
px"<?php }?>>
			<?php  $_smarty_tpl->tpl_vars['orderProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->key => $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->_loop = true;
?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" class="lnk_img"><img src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" /></a>
				<p class="product_name"><a href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['orderProduct']->value['name'],15,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></p>
				<?php if ($_smarty_tpl->tpl_vars['orderProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
					<span class="price_display">
						<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
					</span>
				<?php } else { ?>
					<br />
				<?php }?>
				<!-- <a title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcart'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" class="button_small"><?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcart'),$_smarty_tpl);?>
</a><br /> -->
			</li>
			<?php } ?>
		</ul>
	</div>
	<a id="blockcart_scroll_right" class="blockcart_scroll_right<?php if (count($_smarty_tpl->tpl_vars['orderProducts']->value)<5) {?> hidden<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Next','mod'=>'blockcart'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'blockcart'),$_smarty_tpl);?>
</a>
<?php }?><?php }} ?>