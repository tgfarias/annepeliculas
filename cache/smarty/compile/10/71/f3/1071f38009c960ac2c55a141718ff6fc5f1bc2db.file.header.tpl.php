<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 05:32:32
         compiled from "/home/annepeliculas/www/site/modules/homeslider/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166765930554670190a916d3-71595199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1071f38009c960ac2c55a141718ff6fc5f1bc2db' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/homeslider/views/templates/hook/header.tpl',
      1 => 1415285979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166765930554670190a916d3-71595199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54670190aba3a1_18628629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54670190aba3a1_18628629')) {function content_54670190aba3a1_18628629($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
<script type="text/javascript">
     var homeslider_loop=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['loop']);?>
;
     var homeslider_width=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
;
     var homeslider_speed=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['speed']);?>
;
     var homeslider_pause=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['pause']);?>
;
</script>
<?php }?><?php }} ?>
