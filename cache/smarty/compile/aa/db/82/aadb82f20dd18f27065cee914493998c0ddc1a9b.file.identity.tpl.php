<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 16:37:43
         compiled from "/home/annepeliculas/www/site/themes/theme818/identity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187049341554679d77886d57-42954218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aadb82f20dd18f27065cee914493998c0ddc1a9b' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/identity.tpl',
      1 => 1415391513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187049341554679d77886d57-42954218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'confirmation' => 0,
    'pwd_changed' => 0,
    'email' => 0,
    'days' => 0,
    'v' => 0,
    'sl_day' => 0,
    'months' => 0,
    'k' => 0,
    'sl_month' => 0,
    'years' => 0,
    'sl_year' => 0,
    'newsletter' => 0,
    'genders' => 0,
    'gender' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54679d77a89274_94359826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54679d77a89274_94359826')) {function content_54679d77a89274_94359826($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Minha Conta'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Suas Informações Pessoais'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Suas Informações Pessoais'),$_smarty_tpl);?>
</span></h1>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value) {?>

	<p class="alert alert-success">

    	<button class="close" data-dismiss="alert" type="button">×</button>

		<?php echo smartyTranslate(array('s'=>'A sua informação pessoal foi atualizado com sucesso.'),$_smarty_tpl);?>


		<?php if (isset($_smarty_tpl->tpl_vars['pwd_changed']->value)) {?><br /><?php echo smartyTranslate(array('s'=>'Sua senha foi enviada para o seu e-mail:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<?php }?>

	</p>

<?php } else { ?>

   <div class="titled_box">

	<h2><span><?php echo smartyTranslate(array('s'=>'Por favor, não esqueça de atualizar suas informações pessoais.'),$_smarty_tpl);?>
</span></h2>

    </div>

   

	<p class="required"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Campo obrigatório'),$_smarty_tpl);?>
</p>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">

		<fieldset>



                    <div class="row">

        <div class="col-xs-12 col-sm-6">

			<p class="required form-group">

				<label for="firstname"><?php echo smartyTranslate(array('s'=>'Nome'),$_smarty_tpl);?>
 <sup>*</sup></label>

				<input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $_POST['firstname'];?>
" />

			</p>

			<p class="required form-group">

				<label for="lastname"><?php echo smartyTranslate(array('s'=>'Sobrenome'),$_smarty_tpl);?>
 <sup>*</sup></label>

				<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $_POST['lastname'];?>
" />

			</p>

			<p class="required form-group">

				<label for="email"><?php echo smartyTranslate(array('s'=>'E-mail'),$_smarty_tpl);?>
 <sup>*</sup></label>

				<input type="text" name="email" id="email" class="form-control" value="<?php echo $_POST['email'];?>
" />

			</p>

            </div>

        

                 

        <div class="col-xs-12 col-sm-6">

			<p class="required form-group">

				<label for="old_passwd"><?php echo smartyTranslate(array('s'=>'Senha atual'),$_smarty_tpl);?>
 <sup>*</sup></label>

				<input type="password" name="old_passwd" id="old_passwd" class="form-control" />

			</p>

			<p class="password form-group">

				<label for="passwd"><?php echo smartyTranslate(array('s'=>'Nova Senha'),$_smarty_tpl);?>
</label>

				<input type="password" name="passwd" id="passwd" class="form-control" />

			</p>

			<p class="password form-group">

				<label for="confirmation"><?php echo smartyTranslate(array('s'=>'Confirmação'),$_smarty_tpl);?>
</label>

				<input type="password" name="confirmation" id="confirmation" class="form-control" />

			</p>

            </div>

            </div>

                   <div class="row bottom_indent">

        <div class="col-xs-12 col-sm-6">

			<div class="form-group">

				<label><?php echo smartyTranslate(array('s'=>'Data de nascimento'),$_smarty_tpl);?>
</label>

                <div class="row">

                	<div class="col-xs-4">

                    <select name="days" id="days" class="form-control">

                        <option value="">-</option>

                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value==$_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>

                        <?php } ?>

                    </select>

                    

                </div>

                    <div class="col-xs-4">

                        <select id="months" name="months" class="form-control">

                        <option value="">-</option>

                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>

                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value==$_smarty_tpl->tpl_vars['k']->value)) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
&nbsp;</option>

                        <?php } ?>

                    </select>

                    </div>

                	<div class="col-xs-4">

					<select id="years" name="years" class="form-control">

					<option value="">-</option>

					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value==$_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>

					<?php } ?>

				</select>

                </div>

                </div>

			</div>

			<?php if ($_smarty_tpl->tpl_vars['newsletter']->value) {?>

			<p class="checkbox-inline clearfix">

				<input type="checkbox" id="newsletter" name="newsletter" value="1" <?php if (isset($_POST['newsletter'])&&$_POST['newsletter']==1) {?> checked="checked"<?php }?> autocomplete="off"/>

				<label for="newsletter"><?php echo smartyTranslate(array('s'=>'Assine nossa newsletter!'),$_smarty_tpl);?>
</label>

			</p>

            <br />

			<p class="checkbox-inline ml_none clearfix">

				<input type="checkbox" name="optin" id="optin" value="1" <?php if (isset($_POST['optin'])&&$_POST['optin']==1) {?> checked="checked"<?php }?> autocomplete="off"/>

				<label for="optin"><?php echo smartyTranslate(array('s'=>'Receber ofertas especiais de nossos parceiros!'),$_smarty_tpl);?>
</label>

			</p>

            </div>

            <div class="col-xs-12 col-sm-6">

            			<p class="radio">

				<span class="radio_title"><?php echo smartyTranslate(array('s'=>'Título'),$_smarty_tpl);?>
</span>

				<?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['gender']->key;
?>

					<input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['gender']->value->id);?>
" <?php if (isset($_POST['id_gender'])&&$_POST['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?> />

					<label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="top"><?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</label>

				<?php } ?>

			</p>

            </div>

            </div>

			<?php }?>

			<p class="submit">

				<input type="submit" class="button btn btn-default" name="submitIdentity" value="<?php echo smartyTranslate(array('s'=>'Salvar'),$_smarty_tpl);?>
" />

			</p>

			<div id="security_informations">

				<i><?php echo smartyTranslate(array('s'=>'[Insira cliente cláusula de privacidade de dados aqui, se for o caso]'),$_smarty_tpl);?>
</i>

			</div>

		</fieldset>

	</form>

<?php }?>



<ul class="footer_links clearfix">

	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-user"></i><?php echo smartyTranslate(array('s'=>'Voltar para a sua conta'),$_smarty_tpl);?>
</a></li>

	<li class="f_right"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><i class="icon-home"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>

</ul>

<?php }} ?>
