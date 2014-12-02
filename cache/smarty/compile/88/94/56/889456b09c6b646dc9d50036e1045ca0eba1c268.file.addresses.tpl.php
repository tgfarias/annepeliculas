<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 16:38:04
         compiled from "/home/annepeliculas/www/site/themes/theme818/addresses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190257932254679d8ccc6814-04547230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889456b09c6b646dc9d50036e1045ca0eba1c268' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/addresses.tpl',
      1 => 1415303401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190257932254679d8ccc6814-04547230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'multipleAddresses' => 0,
    'addresses' => 0,
    'address' => 0,
    'address_key' => 0,
    'ignoreList' => 0,
    'address_number' => 0,
    'address_key_number' => 0,
    'address_content' => 0,
    'addresses_style' => 0,
    'link' => 0,
    'navigationPipe' => 0,
    'pattern' => 0,
    'addressKey' => 0,
    'key' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54679d8d0cb521_64145116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54679d8d0cb521_64145116')) {function content_54679d8d0cb521_64145116($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/annepeliculas/www/site/tools/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_replace')) include '/home/annepeliculas/www/site/tools/smarty/plugins/modifier.replace.php';
?>











<?php if (!isset($_smarty_tpl->tpl_vars['multipleAddresses']->value)) {?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[0] = "id_address";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[1] = "id_country";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[2] = "id_state";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[3] = "id_customer";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[4] = "id_manufacturer";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[5] = "id_supplier";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[6] = "date_add";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[7] = "date_upd";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[8] = "active";?>

	<?php $_smarty_tpl->createLocalArrayVariable('ignoreList', null, 0);
$_smarty_tpl->tpl_vars['ignoreList']->value[9] = "deleted";?>



	

	<?php if (isset($_smarty_tpl->tpl_vars['addresses']->value)) {?>

		<?php $_smarty_tpl->tpl_vars['address_number'] = new Smarty_variable(0, null, 0);?>

		<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['address']->key;
?>

			<?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>'address_key_number'),$_smarty_tpl);?>


			<?php  $_smarty_tpl->tpl_vars['address_content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address_content']->_loop = false;
 $_smarty_tpl->tpl_vars['address_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['address']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address_content']->key => $_smarty_tpl->tpl_vars['address_content']->value) {
$_smarty_tpl->tpl_vars['address_content']->_loop = true;
 $_smarty_tpl->tpl_vars['address_key']->value = $_smarty_tpl->tpl_vars['address_content']->key;
?>

				<?php if (!in_array($_smarty_tpl->tpl_vars['address_key']->value,$_smarty_tpl->tpl_vars['ignoreList']->value)) {?>

					<?php $_smarty_tpl->createLocalArrayVariable('multipleAddresses', null, 0);
$_smarty_tpl->tpl_vars['multipleAddresses']->value[$_smarty_tpl->tpl_vars['address_number']->value]['ordered'][$_smarty_tpl->tpl_vars['address_key_number']->value] = $_smarty_tpl->tpl_vars['address_key']->value;?>

					<?php $_smarty_tpl->createLocalArrayVariable('multipleAddresses', null, 0);
$_smarty_tpl->tpl_vars['multipleAddresses']->value[$_smarty_tpl->tpl_vars['address_number']->value]['formated'][$_smarty_tpl->tpl_vars['address_key']->value] = $_smarty_tpl->tpl_vars['address_content']->value;?>

					<?php echo smarty_function_counter(array(),$_smarty_tpl);?>


				<?php }?>

			<?php } ?>

		<?php $_smarty_tpl->createLocalArrayVariable('multipleAddresses', null, 0);
$_smarty_tpl->tpl_vars['multipleAddresses']->value[$_smarty_tpl->tpl_vars['address_number']->value]['object'] = $_smarty_tpl->tpl_vars['address']->value;?>

		<?php $_smarty_tpl->tpl_vars['address_number'] = new Smarty_variable($_smarty_tpl->tpl_vars['address_number']->value+1, null, 0);?>

		<?php } ?>

	<?php }?>

<?php }?>







<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']->value)) {?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['company'] = 'address_company';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['vat_number'] = 'address_company';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['firstname'] = 'address_name';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['lastname'] = 'address_name';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['address1'] = 'address_address1';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['address2'] = 'address_address2';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['city'] = 'address_city';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['country'] = 'address_country';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['phone'] = 'address_phone';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['phone_mobile'] = 'address_phone_mobile';?>

	<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['alias'] = 'address_title';?>

<?php }?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Minha Conta'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Meus Endereços'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Meus Endereços'),$_smarty_tpl);?>
</span></h1>

<p><?php echo smartyTranslate(array('s'=>'Por favor configurar seu faturamento padrão e endereços de entrega ao colocar em ordem. Você também pode adicionar endereços adicionais, que podem ser úteis para o envio de presentes ou receber uma ordem em seu escritório.'),$_smarty_tpl);?>
</p>



<?php if (isset($_smarty_tpl->tpl_vars['multipleAddresses']->value)&&$_smarty_tpl->tpl_vars['multipleAddresses']->value) {?>

<div class="addresses titled_box">

	<h2><span><?php echo smartyTranslate(array('s'=>'Seus endereços estão listados abaixo.'),$_smarty_tpl);?>
</span></h2>

	<p><?php echo smartyTranslate(array('s'=>'Certifique-se de atualizar suas informações pessoais.'),$_smarty_tpl);?>
</p>

	<?php $_smarty_tpl->tpl_vars["adrs_style"] = new Smarty_variable($_smarty_tpl->tpl_vars['addresses_style']->value, null, 0);?>

	<div class="bloc_adresses row clearfix">

	<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multipleAddresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['address']->iteration=0;
 $_smarty_tpl->tpl_vars['address']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['address']->iteration++;
 $_smarty_tpl->tpl_vars['address']->index++;
 $_smarty_tpl->tpl_vars['address']->first = $_smarty_tpl->tpl_vars['address']->index === 0;
 $_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['address']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['address']->last;
?>

    	<div class="col-xs-12 col-sm-6 col-md-4">

			<ul class="address <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">

			<li class="address_title"><?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
</li>

			<?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address']->value['ordered']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>

				<?php $_smarty_tpl->tpl_vars['addressKey'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['pattern']->value), null, 0);?>

				<li>

				<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addressKey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>

					<span <?php if (isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value])) {?> class="<?php echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"<?php }?>>

						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


					</span>

				<?php } ?>

				</li>

			<?php } ?>

			<li class="address_update"><a class="btn btn-success" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_tmp1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Atualizar'),$_smarty_tpl);?>
</a></li>

			<li class="address_delete"><a class="btn btn-danger" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_tmp2."&delete"), ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Você tem certeza? js=1'),$_smarty_tpl);?>
');" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Deletar'),$_smarty_tpl);?>
</a></li>

		</ul>

        </div>

	<?php } ?>

	</div>

</div>

<?php } else { ?>

	<p class="alert alert-info">

    <button class="close" data-dismiss="alert" type="button">×</button>

    <i class="icon-info-sign"></i><?php echo smartyTranslate(array('s'=>'Nenhum endereço disponível.'),$_smarty_tpl);?>
&nbsp;<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Adicione um novo endereço'),$_smarty_tpl);?>
</a></p>

<?php }?>



<div class="clear address_add"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Adicionar um endereço'),$_smarty_tpl);?>
" class="button_large btn btn-default"><?php echo smartyTranslate(array('s'=>'Adicionar um endereço'),$_smarty_tpl);?>
</a></div>



<ul class="footer_links clearfix">

	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-user"></i><?php echo smartyTranslate(array('s'=>'Voltar para a sua conta'),$_smarty_tpl);?>
</a></li>

	<li class="f_right"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><i class="icon-home"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>

</ul><?php }} ?>
