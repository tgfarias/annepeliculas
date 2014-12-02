<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 22:52:52
         compiled from "/home/annepeliculas/www/site/themes/theme818/stores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19353145515467f56436e619-68720413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b63684f7641830e7397666eb91f24add5d7808d' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/stores.tpl',
      1 => 1415627372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19353145515467f56436e619-68720413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simplifiedStoresDiplay' => 0,
    'stores' => 0,
    'store' => 0,
    'img_store_dir' => 0,
    'mediumSize' => 0,
    'defaultLat' => 0,
    'defaultLong' => 0,
    'hasStoreIcon' => 0,
    'distance_unit' => 0,
    'img_ps_dir' => 0,
    'searchUrl' => 0,
    'logo_store' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467f564553d17_12996347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467f564553d17_12996347')) {function content_5467f564553d17_12996347($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Nossas lojas'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1><span><?php echo smartyTranslate(array('s'=>'Nossas lojas'),$_smarty_tpl);?>
</span></h1>

<?php if ($_smarty_tpl->tpl_vars['simplifiedStoresDiplay']->value) {?>

	<?php if (count($_smarty_tpl->tpl_vars['stores']->value)) {?>

	<p><?php echo smartyTranslate(array('s'=>'Aqui você pode encontrar os nossos locais de armazenamento. Por favor, não hesite em contactar-nos:'),$_smarty_tpl);?>
</p>

	<?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>

		<div class="store-small">

		<?php if ($_smarty_tpl->tpl_vars['store']->value['has_picture']) {?><p><img src="<?php echo $_smarty_tpl->tpl_vars['img_store_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store']->value['id_store'];?>
-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" /></p><?php }?>

			<p>

				<b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br />

				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['address1'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br />

				<?php if ($_smarty_tpl->tpl_vars['store']->value['address2']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['address2'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><br />

				<?php echo $_smarty_tpl->tpl_vars['store']->value['postcode'];?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['city'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['store']->value['state']) {?>, <?php echo $_smarty_tpl->tpl_vars['store']->value['state'];?>
<?php }?><br />

				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['country'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br />

				<?php if ($_smarty_tpl->tpl_vars['store']->value['phone']) {?><?php echo smartyTranslate(array('s'=>'Telefone:','js'=>0),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['store']->value['phone'];?>
<?php }?>

			</p>

				<?php if (isset($_smarty_tpl->tpl_vars['store']->value['working_hours'])) {?><?php echo $_smarty_tpl->tpl_vars['store']->value['working_hours'];?>
<?php }?>

		</div>

	<?php } ?>

	<?php }?>

<?php } else { ?>

	<script type="text/javascript">

		// <![CDATA[

		var map;

		var markers = [];

		var infoWindow;

		var locationSelect;



		var defaultLat = '<?php echo $_smarty_tpl->tpl_vars['defaultLat']->value;?>
';

		var defaultLong = '<?php echo $_smarty_tpl->tpl_vars['defaultLong']->value;?>
';

		

		var translation_1 = '<?php echo smartyTranslate(array('s'=>'Nenhuma loja foi encontrada. Por favor, tente selecionar um raio mais amplo.','js'=>1),$_smarty_tpl);?>
';

		var translation_2 = '<?php echo smartyTranslate(array('s'=>'loja encontrada - veja detalhes:','js'=>1),$_smarty_tpl);?>
';

		var translation_3 = '<?php echo smartyTranslate(array('s'=>'lojas encontradas - Ver todos os resultados:','js'=>1),$_smarty_tpl);?>
';

		var translation_4 = '<?php echo smartyTranslate(array('s'=>'Telefone:','js'=>1),$_smarty_tpl);?>
';

		var translation_5 = '<?php echo smartyTranslate(array('s'=>'Obter direções','js'=>1),$_smarty_tpl);?>
';

		var translation_6 = '<?php echo smartyTranslate(array('s'=>'Não encontrado','js'=>1),$_smarty_tpl);?>
';

		

		var hasStoreIcon = '<?php echo $_smarty_tpl->tpl_vars['hasStoreIcon']->value;?>
';

		var distance_unit = '<?php echo $_smarty_tpl->tpl_vars['distance_unit']->value;?>
';

		var img_store_dir = '<?php echo $_smarty_tpl->tpl_vars['img_store_dir']->value;?>
';

		var img_ps_dir = '<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
';

		var searchUrl = '<?php echo $_smarty_tpl->tpl_vars['searchUrl']->value;?>
';

		var logo_store = '<?php echo $_smarty_tpl->tpl_vars['logo_store']->value;?>
';

		//]]>

	</script>



	<p><?php echo smartyTranslate(array('s'=>'Digite um local (por exemplo, cep, endereço, cidade ou país) de forma a encontrar as lojas mais próximas.'),$_smarty_tpl);?>
</p>

	<p class="form-group">

		<label for="addressInput"><?php echo smartyTranslate(array('s'=>'Sua localização:'),$_smarty_tpl);?>
</label>

		<input class="form-control" type="text" name="location" id="addressInput" value="<?php echo smartyTranslate(array('s'=>'Endereço, cep, cidade, estado ou país'),$_smarty_tpl);?>
" onclick="this.value='';" />

	</p>

    <div class="row">

    	<div class="col-xs-6">

    		<p class="form-group">

                <label for="radiusSelect"><?php echo smartyTranslate(array('s'=>'Raio:'),$_smarty_tpl);?>
 ( <?php echo $_smarty_tpl->tpl_vars['distance_unit']->value;?>
 )</label> 

                <select class="form-control" name="radius" id="radiusSelect">

                    <option value="15">15</option>

                    <option value="25">25</option>

                    <option value="50">50</option>

                    <option value="100">100</option>

                </select> 

            </p>

    	</div>

        <div class="col-xs-6">

        	<select class="form-control" id="locationSelect"><option></option></select>

        </div>

    </div>

    <p class="locationbutton ">

            <input type="button" class="button btn btn-default" onclick="searchLocations();" value="<?php echo smartyTranslate(array('s'=>'Buscar'),$_smarty_tpl);?>
" /> 

            <img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" class="middle" alt="" id="stores_loader" />

        </p>

    <div id="map"></div>

	<table  id="stores-table" class="table table-bordered table-hover table-responsive">

            <thead>

            <tr>

			<th ><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
</th>

			<th ><?php echo smartyTranslate(array('s'=>'Store'),$_smarty_tpl);?>
</th>

			<th ><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</th>

			<th ><?php echo smartyTranslate(array('s'=>'Distance'),$_smarty_tpl);?>
</th>

              </tr>

        </thead>

        <tbody>

        <tr>

        </tr>

        </tbody>

	</table>

                

<?php }?><?php }} ?>
