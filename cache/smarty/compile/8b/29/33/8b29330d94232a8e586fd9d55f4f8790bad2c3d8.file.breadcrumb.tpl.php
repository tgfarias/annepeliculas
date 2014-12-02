<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 11:26:25
         compiled from "/home/annepeliculas/www/site/themes/theme818/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2079612434546754814ebe37-27419499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b29330d94232a8e586fd9d55f4f8790bad2c3d8' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/breadcrumb.tpl',
      1 => 1415251077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2079612434546754814ebe37-27419499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467548155d8a6_96746915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467548155d8a6_96746915')) {function content_5467548155d8a6_96746915($_smarty_tpl) {?>



<!-- Breadcrumb -->

<?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>

<div class="breadcrumb">

<div class="breadcrumb_inset">

	<a class="breadcrumb-home" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Retornar para Página Inicial'),$_smarty_tpl);?>
"><i class="icon-home"></i></a>

	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>

		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1) {?>style="display:none;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);?>
</span> 

		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')) {?>

			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>

		<?php } else { ?>

			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>


		<?php }?>

	<?php }?>

</div>

</div>

<!-- /Breadcrumb --><?php }} ?>
