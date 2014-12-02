<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 10:33:45
         compiled from "/home/annepeliculas/www/site/modules/pagseguro//views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1733538964546b3ca91d25f9-20529487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc02d1d3958bb108007785c095cc729bb862d5d' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/pagseguro//views/templates/hook/payment.tpl',
      1 => 1415285286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1733538964546b3ca91d25f9-20529487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'image' => 0,
    'action_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546b3ca927b215_36598978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b3ca927b215_36598978')) {function content_546b3ca927b215_36598978($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['version']->value==false) {?>
<div class="row">
	<div class="col-xs-12 col-md-6">
		<p class="payment_module">
		    <a style="background: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8', true);?>
) 1% 50% no-repeat;" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>

		    </a>
		</p> 
	</div>
</div>
<?php } else { ?>
<p class="payment_module">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>
" />
            <?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>

    </a>
</p> 
<?php }?>
<?php }} ?>
