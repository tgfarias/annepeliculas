<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 05:32:33
         compiled from "/home/annepeliculas/www/site/modules/tmhtmlcontent/views/templates/hooks/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141464583554670191cdc633-52140597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2661bce55e89957c9611c4bbcda9d6cf6bcac33' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/tmhtmlcontent/views/templates/hooks/left.tpl',
      1 => 1415369655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141464583554670191cdc633-52140597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'hItem' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54670191d3c7c3_91772636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54670191d3c7c3_91772636')) {function content_54670191d3c7c3_91772636($_smarty_tpl) {?><div id="htmlcontent_left">
    <ul class="htmlcontent-home clearfix">
        <?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
?>
        	<li class="htmlcontent-item">
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
            </li>
        <?php } ?>
    </ul>
</div>
<?php }} ?>
