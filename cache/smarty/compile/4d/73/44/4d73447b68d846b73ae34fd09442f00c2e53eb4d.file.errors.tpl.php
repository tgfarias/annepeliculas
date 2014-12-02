<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 11:26:25
         compiled from "/home/annepeliculas/www/site/themes/theme818/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79017923054675481568a36-35172865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d73447b68d846b73ae34fd09442f00c2e53eb4d' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/errors.tpl',
      1 => 1415247446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79017923054675481568a36-35172865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54675481600f52_22374754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54675481600f52_22374754')) {function content_54675481600f52_22374754($_smarty_tpl) {?>



<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>

	<div class="alert alert-danger">

    	<button class="close" data-dismiss="alert" type="button">×</button>

		<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1) {?><?php echo smartyTranslate(array('s'=>'Há %d erros','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Existe %d erro','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?></p>

		<ol class="list_styled">

		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>

			<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>

		<?php } ?>

		</ol>

		<?php if (isset($_SERVER['HTTP_REFERER'])&&!strstr($_smarty_tpl->tpl_vars['request_uri']->value,'authentication')&&preg_replace('#^https?://[^/]+/#','/',$_SERVER['HTTP_REFERER'])!=$_smarty_tpl->tpl_vars['request_uri']->value) {?>

			<p class="lnk"><a class="btn btn-inverse" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(mb_convert_encoding(htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" title="<?php echo smartyTranslate(array('s'=>'Voltar'),$_smarty_tpl);?>
">&laquo; <?php echo smartyTranslate(array('s'=>'Voltar'),$_smarty_tpl);?>
</a></p>

		<?php }?>

	</div>

<?php }?><?php }} ?>
