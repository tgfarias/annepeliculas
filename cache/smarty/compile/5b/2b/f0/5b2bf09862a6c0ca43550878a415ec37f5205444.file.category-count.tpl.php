<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 11:26:25
         compiled from "/home/annepeliculas/www/site/themes/theme818/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151175942254675481608214-14577306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b2bf09862a6c0ca43550878a415ec37f5205444' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/category-count.tpl',
      1 => 1415385547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151175942254675481608214-14577306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546754816497e6_99250420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546754816497e6_99250420')) {function content_546754816497e6_99250420($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?>
	<?php echo smartyTranslate(array('s'=>'Não existem produtos nesta categoria'),$_smarty_tpl);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?>
		<?php echo smartyTranslate(array('s'=>'Tem %d produto.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'Tem %d produtos.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>
