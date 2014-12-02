<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 16:37:29
         compiled from "/home/annepeliculas/www/site/themes/theme818/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33915308754679d694f2ec2-99026965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbbe74a38ed8ea9f7ebe57099181e78333d144bd' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/my-account.tpl',
      1 => 1415364682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33915308754679d694f2ec2-99026965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'account_created' => 0,
    'has_customer_an_address' => 0,
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_CUSTOMER_ACCOUNT' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54679d6963c360_98528384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54679d6963c360_98528384')) {function content_54679d6963c360_98528384($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Minha Conta'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Minha Conta'),$_smarty_tpl);?>
</span></h1>

<?php if (isset($_smarty_tpl->tpl_vars['account_created']->value)) {?>

	<p class="alert alert-info">

    	<button class="close" data-dismiss="alert" type="button">×</button>

		<?php echo smartyTranslate(array('s'=>'Sua conta foi criada.'),$_smarty_tpl);?>


	</p>

<?php }?>

<div class="titled_box">

<h2><span><?php echo smartyTranslate(array('s'=>'Bem-vindo à sua conta. Aqui você pode gerenciar todas suas informações pessoais e pedidos. '),$_smarty_tpl);?>
</span></h2>

<ul class="myaccount_lnk_list content_list">

	<?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value) {?>

		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Adicionar o meu primeiro endereço'),$_smarty_tpl);?>
"><i class="icon-building"></i> <?php echo smartyTranslate(array('s'=>'Adicionar o meu primeiro endereço'),$_smarty_tpl);?>
</a></li>

	<?php }?>

	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pedidos'),$_smarty_tpl);?>
"><i class="icon-list-ol"></i> <?php echo smartyTranslate(array('s'=>'Histórico e detalhes dos pedidos'),$_smarty_tpl);?>
</a></li>

	<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>

		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Minha devolução de mercadoria'),$_smarty_tpl);?>
"><i class="icon-reply"></i> <?php echo smartyTranslate(array('s'=>'Minha devolução de mercadorias'),$_smarty_tpl);?>
</a></li>

	<?php }?>

	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Meus créditos'),$_smarty_tpl);?>
"><i class="icon-ban-circle"></i> <?php echo smartyTranslate(array('s'=>'Meus créditos'),$_smarty_tpl);?>
</a></li>

	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Endereços'),$_smarty_tpl);?>
"><i class="icon-building"></i> <?php echo smartyTranslate(array('s'=>'Meus endereços'),$_smarty_tpl);?>
</a></li>

	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Informação'),$_smarty_tpl);?>
"><i class="icon-user"></i> <?php echo smartyTranslate(array('s'=>'Minhas informações pessoais'),$_smarty_tpl);?>
</a></li>

	<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>

		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
"><i class="icon-tag"></i> <?php echo smartyTranslate(array('s'=>'Meus vouchers'),$_smarty_tpl);?>
</a></li>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value;?>


</ul>

</div>

<ul class="footer_links clearfix">

<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><i class="icon-home"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>

</ul><?php }} ?>
