<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 12:02:44
         compiled from "/home/annepeliculas/www/site/themes/theme818/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1695338134546a0004a05945-37822160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a155bf70f15649b52f535cbf3e390680f3f49fa8' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/404.tpl',
      1 => 1415294840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1695338134546a0004a05945-37822160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a0004a917d4_77273731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a0004a917d4_77273731')) {function content_546a0004a917d4_77273731($_smarty_tpl) {?>

<div class="pagenotfound titled_box">

	<h1><span><?php echo smartyTranslate(array('s'=>'Esta página não está disponível'),$_smarty_tpl);?>
</span></h1>



	<p class="alert alert-info">

    	<button class="close" data-dismiss="alert" type="button">×</button>

		<i class="icon-info-sign"></i><?php echo smartyTranslate(array('s'=>'Lamentamos, mas o endereço da Web que você digitou não está mais disponível.'),$_smarty_tpl);?>


	</p>



	<h2><span><?php echo smartyTranslate(array('s'=>'Para encontrar um produto, por favor, digite seu nome no campo abaixo.'),$_smarty_tpl);?>
</span></h2>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">

		<fieldset>

			<p class="form-group">

				<label for="search"><?php echo smartyTranslate(array('s'=>'Procure em nosso catálogo de produtos:'),$_smarty_tpl);?>
</label>

				<input class="form-control" id="search_query" name="search_query" type="text" />

			</p>

            <input type="submit" name="Submit" value="OK" class="button_small btn btn-default" />

		</fieldset>

	</form>



	<p class="footer_link_bottom"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><i class="icon-home"></i> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></p>

</div><?php }} ?>
