<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 12:17:24
         compiled from "/home/annepeliculas/www/site/admin7882/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5482592546a0374c9b2a0-03368850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70984767b1f630611c7e85b32a4691172ecc7e64' => 
    array (
      0 => '/home/annepeliculas/www/site/admin7882/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1415213541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5482592546a0374c9b2a0-03368850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a0374cb8074_26516808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a0374cb8074_26516808')) {function content_546a0374cb8074_26516808($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
