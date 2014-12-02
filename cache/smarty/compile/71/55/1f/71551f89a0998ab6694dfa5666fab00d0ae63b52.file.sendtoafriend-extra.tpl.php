<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:46:26
         compiled from "/home/annepeliculas/www/site/themes/theme818/modules/sendtoafriend/sendtoafriend-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7963723045467bba25b5da4-36831175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71551f89a0998ab6694dfa5666fab00d0ae63b52' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/modules/sendtoafriend/sendtoafriend-extra.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7963723045467bba25b5da4-36831175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'stf_secure_key' => 0,
    'stf_product' => 0,
    'stf_product_cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467bba2637be5_71961937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467bba2637be5_71961937')) {function content_5467bba2637be5_71961937($_smarty_tpl) {?>
<script text="javascript">

$('document').ready(function(){
	$('#send_friend_button').fancybox({
		autoScale : true,
		'hideOnContentClick': false,
		'hideOnOverlayClick': true
	});

	$('#sendEmail').click(function(){
		var datas = [];
		$('#send_friend_form_content').find(':input').each(function(index){
			var o = {};
			o.key = $(this).attr('name');
			o.value = $(this).val();
			if (o.value != '')
				datas.push(o);
		});
		if (datas.length >= 3)
		{
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
sendtoafriend_ajax.php",
				type: "POST",
				headers: {"cache-control": "no-cache"},
				data: {action: 'sendToMyFriend', secure_key: '<?php echo $_smarty_tpl->tpl_vars['stf_secure_key']->value;?>
', friend: unescape(JSON.stringify(datas).replace(/\\u/g, '%u'))},
				dataType: "json",
				success: function(result){
					$.fancybox.close();
				}
			});
		}
		else
			$('#send_friend_form_error').show().text("<?php echo smartyTranslate(array('s'=>'You did not fill required fields','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
");
	});
});

</script>
<li class="sendtofriend">
	<a id="send_friend_button" href="#send_friend_form"><i class="icon-envelope"></i><?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</a>
</li>

<div style="display: none;"> 
	<div id="send_friend_form">
    	<div id="send_friend_form_content">
			<h1 class="title clearfix"><?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</h1>
            <div class="row">
            <div class="col-xs-12 col-sm-6 titled_box">
            	<h2 class="product_name"><span><?php echo $_smarty_tpl->tpl_vars['stf_product']->value->name;?>
</span></h2>
                <div class="product media clearfix">
                    <img class="img-thumbnail pull-left" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['stf_product']->value->link_rewrite,$_smarty_tpl->tpl_vars['stf_product_cover']->value,'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stf_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                    <div class="product_desc">
                        <?php echo $_smarty_tpl->tpl_vars['stf_product']->value->description_short;?>

                    </div>
                </div>
			</div>
            <div class="col-xs-12 col-sm-6">
			<div class="send_friend_form_content">
				<div id="send_friend_form_error" class="alert alert-danger" style="display:none;"></div>
				<div class="form_container titled_box">
					<h2 class="intro_form "><span><?php echo smartyTranslate(array('s'=>'Recipient','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 :</span></h2>
					<p class="form-group">
						<label for="friend_name"><?php echo smartyTranslate(array('s'=>'Name of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :</label>
						<input class="form-control" id="friend_name" name="friend_name" type="text" value=""/>
					</p>
					<p class="form-group">
						<label for="friend_email"><?php echo smartyTranslate(array('s'=>'E-mail address of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :</label>
						<input class="form-control" id="friend_email" name="friend_email" type="email" value=""/>
					</p>
					<p class="txt_required"><sup class="required">*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</p>
				</div>
			</div>
            </div>
            </div>
            <p class="submit sendfrend_footer">
					<input id="id_product_comment_send" name="id_product" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['stf_product']->value->id;?>
" />
					<button class="btn btn-default" onclick="$.fancybox.close();"><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</button>
					<button id="sendEmail" class="btn btn-default" name="sendEmail" type="submit" /><?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</button>
                    <!--input id="sendEmail" class="btn btn-inverse" name="sendEmail" type="submit" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendtoafriend'),$_smarty_tpl);?>
" /-->
				</p>
	</div>
</div>
</div>
<?php }} ?>
