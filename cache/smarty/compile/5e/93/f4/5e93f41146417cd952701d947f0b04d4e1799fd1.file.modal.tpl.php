<?php /* Smarty version Smarty-3.1.19, created on 2014-11-14 16:12:29
         compiled from "/home/annepeliculas/www/site/admin7882/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18853305955466460d655819-58630194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e93f41146417cd952701d947f0b04d4e1799fd1' => 
    array (
      0 => '/home/annepeliculas/www/site/admin7882/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1415213542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18853305955466460d655819-58630194',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5466460d65b865_74600835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5466460d65b865_74600835')) {function content_5466460d65b865_74600835($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
