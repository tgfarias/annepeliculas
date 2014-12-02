<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 13:20:05
         compiled from "/home/annepeliculas/www/site/themes/theme818/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29403475354676f256bda43-53744519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84857c6ed5a51663835b90abffee965867aceb7' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29403475354676f256bda43-53744519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54676f25740b08_80884752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54676f25740b08_80884752')) {function content_54676f25740b08_80884752($_smarty_tpl) {?>

<div class="error_customerprivacy" class="error alert alert-danger"></div>
<fieldset class="account_creation customerprivacy titled_box">
	<h2><span><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</span></h2>
	<p class="required checkbox-inline">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy"  autocomplete="off"/>
        
        <label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>			
	</p>		
</fieldset><?php }} ?>
