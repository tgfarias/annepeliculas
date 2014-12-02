<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 16:30:44
         compiled from "/home/annepeliculas/www/site/admin7882/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2109237618546a3ed4d7a482-34740354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09a7fff7f039a2faee57ea54aa4104bb3d6b7a37' => 
    array (
      0 => '/home/annepeliculas/www/site/admin7882/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1415213507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2109237618546a3ed4d7a482-34740354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a3ed4d83f20_46135915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3ed4d83f20_46135915')) {function content_546a3ed4d83f20_46135915($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
