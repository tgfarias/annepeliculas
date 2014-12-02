<?php /* Smarty version Smarty-3.1.19, created on 2014-11-19 22:36:07
         compiled from "/home/annepeliculas/www/site/themes/theme818/mobile/product-attributes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1989300174546d3777d7e667-26387230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25af4611d4f897e47f0db7c9a6d41568cf59195e' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/mobile/product-attributes.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1989300174546d3777d7e667-26387230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
    'id_attribute_group' => 0,
    'groupName' => 0,
    'id_attribute' => 0,
    'group_attribute' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546d3777e4f496_91584386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d3777e4f496_91584386')) {function content_546d3777e4f496_91584386($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
<hr class="margin_less"/>

<div id="attributes">
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute_group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute_group']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
	<?php if (count($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
	<div class="attributes_group">
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'groupName', null); ob_start(); ?>group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<label class="attribute_label" for="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 :</label>
		<?php if (($_smarty_tpl->tpl_vars['group']->value['group_type']=='select'||$_smarty_tpl->tpl_vars['group']->value['group_type']=='color')) {?>
			<select name="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" class="attribute_select<?php if (($_smarty_tpl->tpl_vars['group']->value['group_type']=='color')) {?> select_color<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
					<option value="<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php if ((isset($_GET[$_smarty_tpl->tpl_vars['groupName']->value])&&intval($_GET[$_smarty_tpl->tpl_vars['groupName']->value])==$_smarty_tpl->tpl_vars['id_attribute']->value)||$_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value) {?> selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
				<?php } ?>
			</select>
		<?php } elseif (($_smarty_tpl->tpl_vars['group']->value['group_type']=='radio')) {?>
			<fieldset data-role="controlgroup">
			<?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
				<input type="radio" class="attribute_radio" name="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_attribute']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_attribute']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)) {?> checked="checked"<?php }?>>
				<label for="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_attribute']->value;?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label>
			<?php } ?>
			</fieldset>
		<?php }?>
	</div>
	<?php }?>
<?php } ?>
</div><!-- #attributes -->
<?php }?>
<?php }} ?>
