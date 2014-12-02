<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 10:33:48
         compiled from "/home/annepeliculas/www/site/modules/pagseguro/views/templates/front/payment_execution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618761457546b3cacac5df4-50754599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f67a17339a25a04e2dea806fe9116931c0b9bb' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/pagseguro/views/templates/front/payment_execution.tpl',
      1 => 1415285286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '618761457546b3cacac5df4-50754599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'environment' => 0,
    'action_url' => 0,
    'errurl' => 0,
    'width_center_column' => 0,
    'nbProducts' => 0,
    'image_payment' => 0,
    'total' => 0,
    'use_taxes' => 0,
    'current_currency_name' => 0,
    'current_currency_id' => 0,
    'total_real' => 0,
    'currency_real' => 0,
    'checkout' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546b3cacc7f821_26304709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b3cacc7f821_26304709')) {function content_546b3cacc7f821_26304709($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/annepeliculas/www/site/tools/smarty/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['environment']->value!='production') {?>
<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<?php } else { ?>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<?php }?>
<script type="text/javascript">
function checkout()
{
    var url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_url']->value, ENT_QUOTES, 'UTF-8', true);?>
";
    url = url.replace("&amp;","&");
    url = url.replace("&amp;","&");
    var query = $.ajax({
        type: 'POST',
        url: url,
        success: function(response) {
        var json = $.parseJSON(response);
            PagSeguroLightbox(
            json.code,{
                success: function(token){
                    window.location.href = json.redirect;
                },
                abort: function(){
                	window.location.href = json.urlCompleta;
                }
            });
        },
        error: function(error) {
            redirecToPageError();            
        }
    });
}
function redirecToPageError(){
    window.location.href = baseDir + "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['errurl']->value, 'none');?>
";
}
</script>

<style type="text/css" media="all"> 
	div#center_column{ width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width_center_column']->value, ENT_QUOTES, 'UTF-8', true);?>
; }
</style>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Pagamento via PagSeguro','mod'=>'pagseguro'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h2><?php echo smartyTranslate(array('s'=>'Resumo da compra','mod'=>'pagseguro'),$_smarty_tpl);?>
</h2>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['nbProducts']->value)&&$_smarty_tpl->tpl_vars['nbProducts']->value<=0) {?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'Seu carrinho de compras está vazio.','mod'=>'pagseguro'),$_smarty_tpl);?>
</p>
<?php } else { ?>

<h3><?php echo smartyTranslate(array('s'=>'Pagamento via PagSeguro','mod'=>'pagseguro'),$_smarty_tpl);?>
</h3>
<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
	<p>
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_payment']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smartyTranslate(array('s'=>'pagseguro','mod'=>'pagseguro'),$_smarty_tpl);?>
" width="86" height="49" style="float:left; margin: 0px 10px 5px 0px;" />
        <?php echo smartyTranslate(array('s'=>'Você escolheu efetuar o pagamento via PagSeguro','mod'=>'pagseguro'),$_smarty_tpl);?>

        <br/><br />
        <?php echo smartyTranslate(array('s'=>'Breve resumo da sua compra:','mod'=>'pagseguro'),$_smarty_tpl);?>

	</p>
	<p style="margin-top:20px;">
        - <?php echo smartyTranslate(array('s'=>'O valor total de sua compra é ','mod'=>'pagseguro'),$_smarty_tpl);?>

        <span id="amount" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl);?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?>
        	<?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'pagseguro'),$_smarty_tpl);?>

        <?php }?>
	</p>
    <?php if ($_smarty_tpl->tpl_vars['current_currency_name']->value!="Real") {?>
        <p>
        <?php echo smartyTranslate(array('s'=>'Moeda atual: ','mod'=>'pagseguro'),$_smarty_tpl);?>
&nbsp;<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</b>
                <input type="hidden" name="currency_payment" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	</p>
        <?php }?>
	<p style="margin-top:20px;">
            <?php echo smartyTranslate(array('s'=>'Aceitamos a seguinte moeda para efetuar seu pagamento via PagSeguro: ','mod'=>'pagseguro'),$_smarty_tpl);?>
&nbsp;<b>Real</b>
                <input type="hidden" name="currency_payment" />
	</p>
        <?php if ($_smarty_tpl->tpl_vars['current_currency_name']->value!="Real"&&$_smarty_tpl->tpl_vars['total_real']->value>0.00) {?>
	<p>
        - <?php echo smartyTranslate(array('s'=>'O valor total de sua compra convertido é ','mod'=>'pagseguro'),$_smarty_tpl);?>

                <span id="amount" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_real']->value,'currency'=>$_smarty_tpl->tpl_vars['currency_real']->value),$_smarty_tpl);?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?>
        	<?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'pagseguro'),$_smarty_tpl);?>

        <?php }?>
	</p>
        <?php }?>
	<p>
        <br /><br />
        <b><?php echo smartyTranslate(array('s'=>'Por favor, confirme sua compra clicando no botão \'Confirmo minha compra\'','mod'=>'pagseguro'),$_smarty_tpl);?>
</b>
	</p>
	<p class="cart_navigation">
    	<?php if (($_smarty_tpl->tpl_vars['checkout']->value)) {?>
            <input type="button" name="submit" value="<?php echo smartyTranslate(array('s'=>'Confirmo minha compra','mod'=>'pagseguro'),$_smarty_tpl);?>
" class="exclusive_large" onclick="checkout()" />
        <?php } else { ?>
            <input type="submit" name="submit" value="<?php echo smartyTranslate(array('s'=>'Confirmo minha compra','mod'=>'pagseguro'),$_smarty_tpl);?>
" class="exclusive_large" />
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=3");?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'Outros formas de pagamento','mod'=>'pagseguro'),$_smarty_tpl);?>
</a>
	</p>
</form>
<?php }?>
<?php }} ?>
