<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:46:26
         compiled from "/home/annepeliculas/www/site/modules/addsharethis/addsharethis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8586147625467bba26630e4-33777582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dcc7cd4beb7ca89e3e2f51e03d84def1d83741e' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/addsharethis/addsharethis.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8586147625467bba26630e4-33777582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'addsharethis_data' => 0,
    'conf_row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467bba26c17c5_90817581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467bba26c17c5_90817581')) {function content_5467bba26c17c5_90817581($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
css/addsharethis.css"/>
<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value)) {?>
<div id="ShareDiv" class="addsharethis">
<div class="addsharethisinner">
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    
    <script type="text/javascript">stLight.options({publisher: "<?php echo $_smarty_tpl->tpl_vars['conf_row']->value;?>
", nativeCount:true });</script>
    
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['twitter'])) {?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['twitter'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['google'])) {?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['google'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['pinterest'])) {?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['pinterest'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['facebook'])) {?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['facebook'];?>

	<?php }?>
</div>
</div>
<?php }?>

<?php }} ?>
