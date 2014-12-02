<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 23:23:30
         compiled from "/home/annepeliculas/www/site/themes/theme818/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16735032265467fc92131aa2-65139664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b83d9a4a676bb8db2ab95f0afd5f6e60659877' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/mobile/index.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16735032265467fc92131aa2-65139664',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467fc925c1f92_23599876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467fc925c1f92_23599876')) {function content_5467fc925c1f92_23599876($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>
