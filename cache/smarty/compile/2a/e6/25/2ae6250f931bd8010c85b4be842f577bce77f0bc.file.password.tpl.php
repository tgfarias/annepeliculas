<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 10:35:55
         compiled from "/home/annepeliculas/www/site/themes/theme818/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6311215455469ebab24b243-34925969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ae6250f931bd8010c85b4be842f577bce77f0bc' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/password.tpl',
      1 => 1415628090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6311215455469ebab24b243-34925969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'confirmation' => 0,
    'email' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5469ebab39c583_40212807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5469ebab39c583_40212807')) {function content_5469ebab39c583_40212807($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Autenticação'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Autenticação'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Esqueceu sua senha'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Esqueceu sua senha?'),$_smarty_tpl);?>
</span></h1>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==1) {?>

	<p class="alert alert-success">

    <button class="close" data-dismiss="alert" type="button">×</button>

	<?php echo smartyTranslate(array('s'=>'Sua senha foi redefinida com sucesso e uma confirmação foi enviada para o seu endereço de e-mail:'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {?><?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
<?php }?>

    </p>

	<?php } elseif (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==2) {?>

		<p class="alert alert-success"><button class="close" data-dismiss="alert" type="button">×</button> <?php echo smartyTranslate(array('s'=>'Um email de confirmação foi enviado para o seu endereço:'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {?><?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
<?php }?></p>

	<?php } else { ?>

<p><?php echo smartyTranslate(array('s'=>'Por favor insira o endereço de e-mail que você usou para se cadastrar. Em seguida enviaremos uma nova senha. '),$_smarty_tpl);?>
</p>

<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['request_uri']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="std" id="form_forgotpassword">

	<fieldset>

		<p class="form-group">

			<label for="email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
</label>

			<input class="form-control" type="email" id="email" name="email" value="<?php if (isset($_POST['email'])) {?><?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
<?php }?>" />

		</p>

		<div class="submit">

			<input type="submit" class="button btn btn-default" value="<?php echo smartyTranslate(array('s'=>'Recuperar Senha'),$_smarty_tpl);?>
" />

		</div>

	</fieldset>

</form>

<?php }?>

<p class="clear clearfix">

    <a class="button btn btn-default fr" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Voltar para o Login'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Voltar para o Login'),$_smarty_tpl);?>
</a> 

</p>

<?php }} ?>
