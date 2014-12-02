<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 23:18:43
         compiled from "/home/annepeliculas/www/site/admin7882/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1751997701546beff35cc240-94713573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd29ce6d742752564fe60afbdbdf09cdf3778eb86' => 
    array (
      0 => '/home/annepeliculas/www/site/admin7882/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1415213544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751997701546beff35cc240-94713573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546beff35e8326_03870688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546beff35e8326_03870688')) {function content_546beff35e8326_03870688($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
