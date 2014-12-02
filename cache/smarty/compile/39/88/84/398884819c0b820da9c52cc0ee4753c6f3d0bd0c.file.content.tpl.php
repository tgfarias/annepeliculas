<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 16:40:27
         compiled from "/home/annepeliculas/www/site/admin7882/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76922940546a411b8f0e00-04913299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '398884819c0b820da9c52cc0ee4753c6f3d0bd0c' => 
    array (
      0 => '/home/annepeliculas/www/site/admin7882/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1415213497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76922940546a411b8f0e00-04913299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a411b9616a1_99291339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a411b9616a1_99291339')) {function content_546a411b9616a1_99291339($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
