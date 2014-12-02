<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 23:23:08
         compiled from "/home/annepeliculas/www/site/themes/theme818/contact-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16388210985467fc7c8594a4-65133108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6963810b52e6c1beee6ccdcbcf7ee34542835c' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/contact-form.tpl',
      1 => 1415386098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16388210985467fc7c8594a4-65133108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customerThread' => 0,
    'confirmation' => 0,
    'base_dir' => 0,
    'alreadySent' => 0,
    'request_uri' => 0,
    'contacts' => 0,
    'contact' => 0,
    'email' => 0,
    'PS_CATALOG_MODE' => 0,
    'isLogged' => 0,
    'orderList' => 0,
    'order' => 0,
    'orderedProductList' => 0,
    'id_order' => 0,
    'products' => 0,
    'product' => 0,
    'fileupload' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467fc7cb5c982_29491840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467fc7cb5c982_29491840')) {function content_5467fc7cb5c982_29491840($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Contato'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Atendimento ao Cliente'),$_smarty_tpl);?>
 - <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value)&&$_smarty_tpl->tpl_vars['customerThread']->value) {?><?php echo smartyTranslate(array('s'=>'Sua resposta'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Entre em contato'),$_smarty_tpl);?>
<?php }?></span></h1>

<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>

	<p class="alert alert-success">

    	<button class="close" data-dismiss="alert" type="button">×</button>

    	<i class="icon-ok"></i><?php echo smartyTranslate(array('s'=>'Sua mensagem foi enviada com sucesso para a nossa equipe.'),$_smarty_tpl);?>
</p>

	<ul class="footer_links clearfix">

		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><i class="icon-home"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>

	</ul>

<?php } elseif (isset($_smarty_tpl->tpl_vars['alreadySent']->value)) {?>

	<p><?php echo smartyTranslate(array('s'=>'Sua mensagem já foi enviada.'),$_smarty_tpl);?>
</p>

	<ul class="footer_links clearfix">

		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><i class="icon-home"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>

	</ul>

<?php } else { ?>

	<p class="title-pagecontact"><i class="icon-comment-alt"></i><?php echo smartyTranslate(array('s'=>'Para perguntas sobre uma encomenda ou para obter mais informações sobre nossos produtos'),$_smarty_tpl);?>
.</p>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<form id="contact_form" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['request_uri']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="std" enctype="multipart/form-data">

		<fieldset class="titled_box">

			<h2><span><?php echo smartyTranslate(array('s'=>'enviar uma mensagem'),$_smarty_tpl);?>
</span></h2>

            <div class="row">

            <div class="col-xs-12 col-sm-6">

                <p class="form-group">

                    <label for="id_contact"><?php echo smartyTranslate(array('s'=>'Assunto'),$_smarty_tpl);?>
</label>

                <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['id_contact'])) {?>

                    <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>

                        <?php if ($_smarty_tpl->tpl_vars['contact']->value['id_contact']==$_smarty_tpl->tpl_vars['customerThread']->value['id_contact']) {?>

                            <input type="text" id="contact_name" name="contact_name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" readonly="readonly" class="form-control" />

                            <input type="hidden" name="id_contact" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
" />

                        <?php }?>

                    <?php } ?>

                </p>

                <?php } else { ?>

                    <select id="id_contact" class="form-control" name="id_contact" onchange="showElemFromSelect('id_contact', 'desc_contact')">

                        <option value="0"><?php echo smartyTranslate(array('s'=>'-- Escolha --'),$_smarty_tpl);?>
</option>

                    <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>

                        <option value="<?php echo intval($_smarty_tpl->tpl_vars['contact']->value['id_contact']);?>
" <?php if (isset($_POST['id_contact'])&&$_POST['id_contact']==$_smarty_tpl->tpl_vars['contact']->value['id_contact']) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>

                    <?php } ?>

                    </select>

                </p>

                <p id="desc_contact0" class="desc_contact">&nbsp;</p>

                    <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>

                        <p id="desc_contact<?php echo intval($_smarty_tpl->tpl_vars['contact']->value['id_contact']);?>
" class="desc_contact" style="display:none;">

                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


                        </p>

                    <?php } ?>

                <?php }?>

                <p class="form-group">

                    <label for="email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
</label>

                    <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['email'])) {?>

                        <input type="email" id="email" class="form-control" name="from" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['customerThread']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" readonly="readonly" />

                    <?php } else { ?>

                        <input type="email" id="email" class="form-control" name="from" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />

                    <?php }?>

                </p>

            <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>

                <?php if ((!isset($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])||$_smarty_tpl->tpl_vars['customerThread']->value['id_order']>0)) {?>

                <p class="form-group">

                    <label for="id_order"><?php echo smartyTranslate(array('s'=>'Código do pedido'),$_smarty_tpl);?>
</label>

                    <?php if (!isset($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])&&isset($_smarty_tpl->tpl_vars['isLogged']->value)&&$_smarty_tpl->tpl_vars['isLogged']->value==1) {?>

                        <select name="id_order" class="form-control" >

                            <option value="0"><?php echo smartyTranslate(array('s'=>'-- Escolha --'),$_smarty_tpl);?>
</option>

                            <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>

                                <option value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value['value']);?>
" <?php if (intval($_smarty_tpl->tpl_vars['order']->value['selected'])) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['label'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>

                            <?php } ?>

                        </select>

                    <?php } elseif (!isset($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])&&!isset($_smarty_tpl->tpl_vars['isLogged']->value)) {?>

                        <input class="form-control" type="text" name="id_order" id="id_order" value="<?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])&&intval($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])>0) {?><?php echo intval($_smarty_tpl->tpl_vars['customerThread']->value['id_order']);?>
<?php } else { ?><?php if (isset($_POST['id_order'])&&!empty($_POST['id_order'])) {?><?php echo intval($_POST['id_order']);?>
<?php }?><?php }?>" />

                    <?php } elseif (intval($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])>0) {?>

                        <input class="form-control" type="text" name="id_order" id="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['customerThread']->value['id_order']);?>
" readonly="readonly" />

                    <?php }?>

                </p>

                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['isLogged']->value)&&$_smarty_tpl->tpl_vars['isLogged']->value) {?>

                <p class="text form-group">

                <label for="id_product"><?php echo smartyTranslate(array('s'=>'Produto'),$_smarty_tpl);?>
</label>

                    <?php if (!isset($_smarty_tpl->tpl_vars['customerThread']->value['id_product'])) {?>

                    <?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_smarty_tpl->tpl_vars['id_order'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orderedProductList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['products']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
 $_smarty_tpl->tpl_vars['id_order']->value = $_smarty_tpl->tpl_vars['products']->key;
 $_smarty_tpl->tpl_vars['products']->index++;
 $_smarty_tpl->tpl_vars['products']->first = $_smarty_tpl->tpl_vars['products']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['products']->first;
?>

                        <select name="id_product" id="<?php echo $_smarty_tpl->tpl_vars['id_order']->value;?>
_order_products" class="product_select form-control" style="<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?> display:none; <?php }?>" <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>disabled="disabled" <?php }?>>

                            <option value="0"><?php echo smartyTranslate(array('s'=>'-- Escolha --'),$_smarty_tpl);?>
</option>

                            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

                                <option value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['value']);?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['label'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>

                            <?php } ?>

                        </select>

                    <?php } ?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['customerThread']->value['id_product']>0) {?>

                        <input class="form-control" type="text" name="id_product" id="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['customerThread']->value['id_product']);?>
" readonly="readonly" />

                    <?php }?>

                </p>

                <?php }?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['fileupload']->value==1) {?>

                <p class="form-group upload-file">

                <label for="fileUpload"><?php echo smartyTranslate(array('s'=>'Anexar arquivo'),$_smarty_tpl);?>
</label>

                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />

                    <input  type="file" name="fileUpload" id="fileUpload" />

                </p>

            <?php }?>

            </div>

            <div class="col-xs-12 col-sm-6">

            <p class="form-group">

                <label for="message"><?php echo smartyTranslate(array('s'=>'Mensagem'),$_smarty_tpl);?>
</label>

                 <textarea id="message" class="form-control" name="message" rows="15" cols="10"><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
<?php }?></textarea>

            </p>

            </div>

        </div>

		<div class="submit">

			<input  class="button btn btn-default" type="submit" name="submitMessage" id="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Enviar'),$_smarty_tpl);?>
"/>

		</div>

	</fieldset>

</form>

<?php }?>

<?php }} ?>
