<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 18:47:25
         compiled from "/home/annepeliculas/www/site/modules/fkcorreioslite/views/carrinho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9680177995467bbdd5cd610-64799968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ceaa37f78446ea8e630497801c39c4bcaf948f1' => 
    array (
      0 => '/home/annepeliculas/www/site/modules/fkcorreioslite/views/carrinho.tpl',
      1 => 1415364290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9680177995467bbdd5cd610-64799968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fkcorreios_foco' => 0,
    'fkcorreios_cep' => 0,
    'fkcorreios_msg' => 0,
    'fkcorreios_frete' => 0,
    'frete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5467bbdd68e4e9_90330175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5467bbdd68e4e9_90330175')) {function content_5467bbdd68e4e9_90330175($_smarty_tpl) {?>
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

    <div class="fkcorreios-legenda">
    
        <p><?php echo smartyTranslate(array('s'=>'Informe o CEP para cálculo do frete do produto','mod'=>'fkcorreios'),$_smarty_tpl);?>
</p>
    
        <div class="fkcorreios-form">
            <form action="#" method="post">
                <input type="text" class="fkcorreios_cep_mask" size="10" name="fkcorreios_cep_carrinho" value="<?php echo $_smarty_tpl->tpl_vars['fkcorreios_cep']->value;?>
"/>
                <input type="submit" class="fkcorreios-button" value="<?php echo smartyTranslate(array('s'=>'Calcular frete','mod'=>'fkcorreios'),$_smarty_tpl);?>
" name="submitCarrinho"/>
            </form>
        </div>

    </div>
    
    <div class="fkcorreios-transportadoras">
    
        <p><?php echo $_smarty_tpl->tpl_vars['fkcorreios_msg']->value;?>
</p>
    
        <?php if (isset($_smarty_tpl->tpl_vars['fkcorreios_frete']->value)) {?>
            <table>
                <?php  $_smarty_tpl->tpl_vars['frete'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frete']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fkcorreios_frete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['frete']->key => $_smarty_tpl->tpl_vars['frete']->value) {
$_smarty_tpl->tpl_vars['frete']->_loop = true;
?>
                    <tr>
                        <td id="fkcorreios-img">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['frete']->value['url_imagem'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['frete']->value['nome_carrier'];?>
"/>
                        </td>
                        <td id="fkcorreios-nome">
                            <b><?php echo $_smarty_tpl->tpl_vars['frete']->value['nome_carrier'];?>
</b>
                            <br>
                            <?php echo smartyTranslate(array('s'=>'Entrega:','mod'=>'fkcorreios'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['frete']->value['prazo_entrega'];?>

                        </td>
                        <td id="fkcorreios-valor">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['frete']->value['valor_frete']),$_smarty_tpl);?>

                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php }?>
    
    </div>
    
</div>
<?php }} ?>
