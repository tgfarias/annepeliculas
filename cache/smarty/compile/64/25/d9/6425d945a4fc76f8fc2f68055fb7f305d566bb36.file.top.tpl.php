<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 05:32:33
         compiled from "/home/annepeliculas/www/site/modules/tmhtmlcontent/views/templates/hooks/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1927517668546701919b8175-32030312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6425d945a4fc76f8fc2f68055fb7f305d566bb36' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/tmhtmlcontent/views/templates/hooks/top.tpl',
      1 => 1415369655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927517668546701919b8175-32030312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'htmlitems' => 0,
    'hItem' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54670191a2afc9_55109451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54670191a2afc9_55109451')) {function content_54670191a2afc9_55109451($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
<div id="htmlcontent_top">
    <ul class="htmlcontent-top row">
        <?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
?>
        	<li class="htmlcontent-item col-xs-4 col-md-12">
            <div>
            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['url'];?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1) {?> target="_blank"<?php }?>>
                <?php }?>
	            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
	                	<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image'];?>
" class="item-img" alt="" />
	                <?php }?>
	            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']&&$_smarty_tpl->tpl_vars['hItem']->value['title_use']==1) {?>
                        <h3 class="item-title"><?php echo $_smarty_tpl->tpl_vars['hItem']->value['title'];?>
</h3>
	                <?php }?>
	            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']) {?>
	                	<div class="item-html">
                        	<?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>
                            
                        </div>
	                <?php }?>
            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
                	</a>
                <?php }?>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<?php }?>
<?php }} ?>
