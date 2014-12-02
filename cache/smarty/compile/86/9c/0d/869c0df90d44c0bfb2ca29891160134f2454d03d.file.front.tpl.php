<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 05:32:33
         compiled from "/home/annepeliculas/www/site/themes/theme818/modules/minicslider/views/templates/front/front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15219471635467019170d8a0-94623346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869c0df90d44c0bfb2ca29891160134f2454d03d' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/modules/minicslider/views/templates/front/front.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15219471635467019170d8a0-94623346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'minicSlider' => 0,
    'page_name' => 0,
    'image' => 0,
    'caption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546701918eb313_98829750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546701918eb313_98829750')) {function content_546701918eb313_98829750($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['slides']->value)!=0) {?>
    <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['front']==1&&$_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
        <!-- Minic Slider -->
    <?php } else { ?>
        <div id="minic_slider" class="theme-default<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1&&$_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']!=0) {?> controlnav-thumbs<?php }?>">   
            <div id="slider" class="nivoSlider" style="<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['width']) {?>width:<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['width'];?>
px;<?php }?><?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['height']) {?>height:<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['height'];?>
px;<?php }?><?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']!=1) {?>margin-bottom:0;<?php }?><?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['position']=='top') {?>display:inline-block;<?php }?>">
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value['target']==1) {?>target="_blank"<?php }?>><?php }?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['images'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" class="slider_image" 
                            <?php if ($_smarty_tpl->tpl_vars['image']->value['alt']) {?>alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
"<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['image']->value['title']!=''||$_smarty_tpl->tpl_vars['image']->value['caption']!='') {?>title="#htmlcaption_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_slide'];?>
"<?php }?> 
                            <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1) {?>data-thumb="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['thumbs'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
"<?php }?>/>
                    <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?></a><?php }?>
                <?php } ?>
            </div>
            <?php  $_smarty_tpl->tpl_vars['caption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['caption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['caption']->key => $_smarty_tpl->tpl_vars['caption']->value) {
$_smarty_tpl->tpl_vars['caption']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['caption']->value['title']!=''||$_smarty_tpl->tpl_vars['caption']->value['caption']!='') {?>
                    <div id="htmlcaption_<?php echo $_smarty_tpl->tpl_vars['caption']->value['id_slide'];?>
" class="nivo-html-caption">
                        <h3><?php echo $_smarty_tpl->tpl_vars['caption']->value['title'];?>
</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['caption']->value['caption'];?>
</p>
                    </div>
                <?php }?>
            <?php } ?>
        </div> 
           

        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect: '<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['current']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['current'];?>
<?php } else { ?>random<?php }?>', 
                slices: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['slices']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['slices'];?>
<?php } else { ?>15<?php }?>, 
                boxCols: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['slices']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['cols'];?>
<?php } else { ?>8<?php }?>, 
                boxRows: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['rows']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['rows'];?>
<?php } else { ?>4<?php }?>, 
                animSpeed: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed'];?>
<?php } else { ?>500<?php }?>, 
                pauseTime: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause'];?>
<?php } else { ?>3000<?php }?>, 
                startSlide: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['startSlide']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['startSlide'];?>
<?php } else { ?>0<?php }?>,
                directionNav:true, 
                controlNav: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']==1) {?>true<?php } else { ?>false<?php }?>, 
                controlNavThumbs: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1) {?>true<?php } else { ?>false<?php }?>,
                pauseOnHover: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['hover']==1) {?>true<?php } else { ?>false<?php }?>, 
                manualAdvance: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['manual']==1) {?>true<?php } else { ?>false<?php }?>, 
                prevText: '<?php echo smartyTranslate(array('s'=>'Prev','mod'=>'minicslider'),$_smarty_tpl);?>
', 
                nextText: '<?php echo smartyTranslate(array('s'=>'Next','mod'=>'minicslider'),$_smarty_tpl);?>
', 
                randomStart: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['random']==1) {?>true<?php } else { ?>false<?php }?>,
				afterLoad:function() {
										var hidden = <?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['buttons'];?>

										if (hidden == 0) {
											$('body').find('#slider .nivo-directionNav').hide();	
										}
           								$("#slider").swipe( {
										swipeLeft:function(event, phase, direction, distance){
											$('body').find('#slider a.nivo-nextNav').trigger('click');
										},
						 				swipeRight:function(event, phase, direction, distance)
										{
											$('body').find('#slider a.nivo-prevNav').trigger('click');
										},
										triggerOnTouchEnd:false,
										threshold:100
					  				});		  
            				}
            });
        });
        </script>   
    <?php }?>
<?php }?><?php }} ?>
