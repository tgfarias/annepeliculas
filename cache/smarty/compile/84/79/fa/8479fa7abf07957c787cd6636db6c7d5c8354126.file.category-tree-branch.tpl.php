<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 23:23:30
         compiled from "/home/annepeliculas/www/site/themes/theme818/mobile/category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10283034485467fc927e21d1-75562245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8479fa7abf07957c787cd6636db6c7d5c8354126' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/mobile/category-tree-branch.tpl',
      1 => 1415794944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10283034485467fc927e21d1-75562245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467fc9285c072_83368963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467fc9285c072_83368963')) {function content_5467fc9285c072_83368963($_smarty_tpl) {?>

<li <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>data-icon="more"<?php }?>>
	<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
		<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		<ul data-inset="true">
			<li>
				<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['desc'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-ajax="false">
					<?php echo smartyTranslate(array('s'=>'Veja os produtos'),$_smarty_tpl);?>

				</a>
			</li>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

		<?php } ?>
		</ul>
	<?php } else { ?>
		<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['desc'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-ajax="false">
			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		</a>
	<?php }?>
</li>
<?php }} ?>
