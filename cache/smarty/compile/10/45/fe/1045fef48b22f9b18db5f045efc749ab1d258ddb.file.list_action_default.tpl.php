<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 17:50:50
         compiled from "/home/annepeliculas/www/site/admin7882/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:541861616546a519a9edbd9-05794858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1045fef48b22f9b18db5f045efc749ab1d258ddb' => 
    array (
      0 => '/home/annepeliculas/www/site/admin7882/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1415213540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '541861616546a519a9edbd9-05794858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a519aa120d2_21392652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a519aa120d2_21392652')) {function content_546a519aa120d2_21392652($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
