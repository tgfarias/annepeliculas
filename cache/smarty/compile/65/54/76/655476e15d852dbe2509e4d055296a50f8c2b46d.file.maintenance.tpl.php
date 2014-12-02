<?php /* Smarty version Smarty-3.1.19, created on 2014-11-19 17:56:47
         compiled from "/home/annepeliculas/www/site/themes/theme818/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1635298978546cf5ff851480-62720896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '655476e15d852dbe2509e4d055296a50f8c2b46d' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/maintenance.tpl',
      1 => 1415391549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1635298978546cf5ff851480-62720896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'css_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546cf5ff977dc5_28010895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546cf5ff977dc5_28010895')) {function content_546cf5ff977dc5_28010895($_smarty_tpl) {?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">

	<head>

		<title><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</title>	

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)) {?>

		<meta name="description" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>

		<meta name="keywords" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />

<?php }?>

		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,follow" />

		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
" />

		<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
bootstrap.min.css" rel="stylesheet" type="text/css" />

	</head>

	<body>

		<div id="maintenance" class="container">

			 <p><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="logo" /><br /><br /></p>

			 <p id="message">

				<h2><?php echo smartyTranslate(array('s'=>'Para realizar a manutenção do site, a nossa loja on-line será temporariamente offline.'),$_smarty_tpl);?>
</h2>

				<h3><?php echo smartyTranslate(array('s'=>'Pedimos desculpas pelo inconveniente e pedimos que você tente novamente mais tarde.'),$_smarty_tpl);?>
</h3>

			 </p>

			 <span class="clearfix">&nbsp;</span>

		</div>

	</body>

</html>

<?php }} ?>
