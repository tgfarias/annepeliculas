<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 05:32:32
         compiled from "/home/annepeliculas/www/site/modules/addsharethis/addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1346971715546701909cb3f7-06663273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa413d2e3863348c5ce3807eae2066ca5d605c89' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/addsharethis/addsharethis_header.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1346971715546701909cb3f7-06663273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54670190a5d5b6_40261374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54670190a5d5b6_40261374')) {function content_54670190a5d5b6_40261374($_smarty_tpl) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />

<?php }} ?>
