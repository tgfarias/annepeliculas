<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 13:20:06
         compiled from "/home/annepeliculas/www/site/themes/theme818/order-steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154111172554676f26250064-42464576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83df51873c8744217504c7d9f31ff209fdabbfdb' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/order-steps.tpl',
      1 => 1415251135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154111172554676f26250064-42464576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'back' => 0,
    'multi_shipping' => 0,
    'opc' => 0,
    'current_step' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54676f26436c90_15576265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54676f26436c90_15576265')) {function content_54676f26436c90_15576265($_smarty_tpl) {?>





<?php $_smarty_tpl->_capture_stack[0][] = array("url_back", null, null); ob_start(); ?>

<?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>back=<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php if (!isset($_smarty_tpl->tpl_vars['multi_shipping']->value)) {?>

	<?php $_smarty_tpl->tpl_vars['multi_shipping'] = new Smarty_variable('0', null, 0);?>

<?php }?>



<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>

<script>

	$(document).ready(function() {

       $ ('#order_steps li:even').addClass ('even');

       $ ('#order_steps li:odd').addClass ('odd');

	   $ ('.list-order-step li').last().addClass ('last');

	});

</script>

<!-- Steps -->

<ul id="order_steps" class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='summary') {?>step1<?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value=='login') {?>step2<?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value=='address') {?>step3<?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value=='shipping') {?>step4<?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value=='payment') {?>step5<?php }?>">

	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='summary') {?>step_current<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'||$_smarty_tpl->tpl_vars['current_step']->value=='address'||$_smarty_tpl->tpl_vars['current_step']->value=='login') {?>step_done<?php } else { ?>step_todo<?php }?><?php }?>">

		<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'||$_smarty_tpl->tpl_vars['current_step']->value=='address'||$_smarty_tpl->tpl_vars['current_step']->value=='login') {?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
">

			<span><span>01</span> <?php echo smartyTranslate(array('s'=>'Resumo'),$_smarty_tpl);?>
</span>

		</a>

		<?php } else { ?>

			<span><span>01</span> <?php echo smartyTranslate(array('s'=>'Resumo'),$_smarty_tpl);?>
</span>

		<?php }?>

	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='login') {?>step_current<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'||$_smarty_tpl->tpl_vars['current_step']->value=='address') {?>step_done<?php } else { ?>step_todo<?php }?><?php }?>">

		<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'||$_smarty_tpl->tpl_vars['current_step']->value=='address') {?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&step=1&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
">

			<span><span>02</span> <?php echo smartyTranslate(array('s'=>'Login'),$_smarty_tpl);?>
</span>

		</a>

		<?php } else { ?>

			<span><span>02</span> <?php echo smartyTranslate(array('s'=>'Login'),$_smarty_tpl);?>
</span>

		<?php }?>

	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='address') {?>step_current<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping') {?>step_done<?php } else { ?>step_todo<?php }?><?php }?>">

		<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping') {?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&step=1&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
">

		<span><span>03</span> <?php echo smartyTranslate(array('s'=>'Endereço'),$_smarty_tpl);?>
</span>

		</a>

		<?php } else { ?>

			<span><span>03</span> <?php echo smartyTranslate(array('s'=>'Endereço'),$_smarty_tpl);?>
</span>

		<?php }?>

	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='shipping') {?>step_current<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment') {?>step_done<?php } else { ?>step_todo<?php }?><?php }?>">

		<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment') {?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&step=2&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
">

		<span><span>04</span> <?php echo smartyTranslate(array('s'=>'Envio'),$_smarty_tpl);?>
</span>

		</a>

		<?php } else { ?>

			<span><span>04</span> <?php echo smartyTranslate(array('s'=>'Envio'),$_smarty_tpl);?>
</span>

		<?php }?>

	</li>

	<li id="step_end" class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment') {?>step_current<?php } else { ?>step_todo<?php }?>">

		<span><span>05</span> <?php echo smartyTranslate(array('s'=>'Pagamento'),$_smarty_tpl);?>
</span>

	</li>

</ul>

<!-- /Steps -->

<?php }?>

<?php }} ?>
