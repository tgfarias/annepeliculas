<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 16:37:29
         compiled from "/home/annepeliculas/www/site/themes/theme818/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70361387954679d6941f8d1-85744059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0c390e58e5f28c76a8ff572b55af6da349674cd' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/modules/blockwishlist/my-account.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70361387954679d6941f8d1-85744059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlist_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54679d694922b7_39889576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54679d694922b7_39889576')) {function content_54679d694922b7_39889576($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo $_smarty_tpl->tpl_vars['wishlist_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
"><i class="icon-heart-empty"></i><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
