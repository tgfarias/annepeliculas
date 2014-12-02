<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 05:32:33
         compiled from "/home/annepeliculas/www/site/themes/theme818/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7182607595467019167b753-77171910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '905841e8d4b13829d266e6dd7acf56e38fac45ba' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7182607595467019167b753-77171910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546701916b8a24_85789891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546701916b8a24_85789891')) {function content_546701916b8a24_85789891($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
<div id="menu-wrap" class="clearfix desktop">
	<div id="menu-trigger"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blocktopmenu'),$_smarty_tpl);?>
<i class="menu-icon icon-plus-sign-alt"></i></div>
	<ul id="menu-custom">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="search">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
								<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" placeholder="Search..." />
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
<?php }?><?php }} ?>
