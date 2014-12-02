<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 05:32:34
         compiled from "/home/annepeliculas/www/site/themes/theme818/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112671477254670192cd7f47-98845273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c35d322dd31e03ee66193c233be0c5d30a984bcf' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/footer.tpl',
      1 => 1415386340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112671477254670192cd7f47-98845273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'RightColumn' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54670192d2dde3_77834143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54670192d2dde3_77834143')) {function content_54670192d2dde3_77834143($_smarty_tpl) {?>



		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>

				</div>



<!-- Right -->

			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&(str_replace(" ",'',$_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value))!='') {?><?php $_smarty_tpl->tpl_vars['RightColumn'] = new Smarty_variable(3, null, 0);?><?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['RightColumn']->value)&&$_smarty_tpl->tpl_vars['RightColumn']->value!=0) {?>

				<div id="right_column" class="col-xs-12 col-sm-3 column">

					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>


				</div>

            <?php }?>

			</div>

            </div>

</div>

<!-- Footer -->

			<div class="page_wrapper_3 clearfix">

                <footer id="footer" class="container">

                <div class="row modules">

                    <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>


                     <?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value) {?>

                        <p class="center clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Versão mobile'),$_smarty_tpl);?>
</a></p>

                    <?php }?>

                </div>

                   

                </footer>

            </div>

		</div>

	<?php }?>

	</body>

</html>

<?php }} ?>
