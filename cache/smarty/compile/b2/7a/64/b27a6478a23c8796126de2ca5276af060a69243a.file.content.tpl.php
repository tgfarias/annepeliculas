<?php /* Smarty version Smarty-3.1.19, created on 2014-11-14 16:12:29
         compiled from "/home/annepeliculas/www/site/admin7882/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8463347155466460d339dc2-60457469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27a6478a23c8796126de2ca5276af060a69243a' => 
    array (
      0 => '/home/annepeliculas/www/site/admin7882/themes/default/template/content.tpl',
      1 => 1415213467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8463347155466460d339dc2-60457469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5466460d34a870_28742964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5466460d34a870_28742964')) {function content_5466460d34a870_28742964($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
