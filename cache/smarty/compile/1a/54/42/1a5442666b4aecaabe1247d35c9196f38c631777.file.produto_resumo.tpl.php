<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:46:26
         compiled from "/home/annepeliculas/www/site/modules/fkcorreioslite/views/produto_resumo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12721260695467bba2784ca8-36487188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a5442666b4aecaabe1247d35c9196f38c631777' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/fkcorreioslite/views/produto_resumo.tpl',
      1 => 1415975813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12721260695467bba2784ca8-36487188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fkcorreios_foco' => 0,
    'link' => 0,
    'fkcorreios_id_produto' => 0,
    'fkcorreios_cep' => 0,
    'fkcorreios_msg' => 0,
    'fkcorreios_frete' => 0,
    'frete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467bba27f9532_55637782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467bba27f9532_55637782')) {function content_5467bba27f9532_55637782($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['fkcorreios_foco']->value==true) {?>

    <a name="fkcorreios-foco"></a>

    <a href="#fkcorreios-foco" id="fkcorreios-foco"></a>

    

    <script type="text/javascript">

        $(document).ready(function(){

            document.getElementById("fkcorreios-foco").click();

        });

    </script>

<?php }?>



<div class="fkcorreios-box">



    <div class="fkcorreios-legenda-resumo">

    

        <p><?php echo smartyTranslate(array('s'=>'Informe o CEP para cálculo do frete do produto','mod'=>'fkcorreios'),$_smarty_tpl);?>
</p>

    

        <div class="fkcorreios-form">

            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('product',true), ENT_QUOTES, 'UTF-8', true);?>
&id_product=<?php echo $_smarty_tpl->tpl_vars['fkcorreios_id_produto']->value;?>
" method="post">

                <input type="text" class="fkcorreios_cep_mask" size="10" name="fkcorreios_cep_prod" value="<?php echo $_smarty_tpl->tpl_vars['fkcorreios_cep']->value;?>
" required />

                <input type="submit" class="fkcorreios-button" value="<?php echo smartyTranslate(array('s'=>'Calcular frete','mod'=>'fkcorreios'),$_smarty_tpl);?>
" name="submitProd"/>

            </form>

        </div>



    </div>

    

    <div class="fkcorreios-transportadoras-resumo ">

    

        <p><?php echo $_smarty_tpl->tpl_vars['fkcorreios_msg']->value;?>
</p>

    

        <?php if (isset($_smarty_tpl->tpl_vars['fkcorreios_frete']->value)) {?>

            <div>

                <table>

                    <?php  $_smarty_tpl->tpl_vars['frete'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frete']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fkcorreios_frete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['frete']->key => $_smarty_tpl->tpl_vars['frete']->value) {
$_smarty_tpl->tpl_vars['frete']->_loop = true;
?>

                        <tr>

                            <td id="fkcorreios-img-resumo">

                                <img src="<?php echo $_smarty_tpl->tpl_vars['frete']->value['url_imagem'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['frete']->value['nome_carrier'];?>
"/>

                            </td>

                            <td id="fkcorreios-nome-resumo">

                                <b><?php echo $_smarty_tpl->tpl_vars['frete']->value['nome_carrier'];?>
</b>

                                <br>

                                <?php echo smartyTranslate(array('s'=>'Entrega:','mod'=>'fkcorreios'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['frete']->value['prazo_entrega'];?>


                            </td>

                            <td id="fkcorreios-valor-resumo">

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['frete']->value['valor_frete']),$_smarty_tpl);?>


                            </td>

                        </tr>

                    <?php } ?>

                </table>

            </div>

        <?php }?>

    

    </div>

    

</div>

<?php }} ?>
