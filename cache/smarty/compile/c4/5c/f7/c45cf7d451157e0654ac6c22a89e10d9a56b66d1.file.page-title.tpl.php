<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 23:27:46
         compiled from "/home/annepeliculas/www/site/themes/theme818/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6456468785467fd92b474e8-57485358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c45cf7d451157e0654ac6c22a89e10d9a56b66d1' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/mobile/page-title.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6456468785467fd92b474e8-57485358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467fd92b7d4e8_19905382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467fd92b7d4e8_19905382')) {function content_5467fd92b7d4e8_19905382($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value) {?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)) {?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>
