<?php
/* Smarty version 3.1.33, created on 2019-02-24 18:10:13
  from 'C:\xampp\htdocs\EX\Tienda\07_T_Ajax\Smarty\template\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c72cff5885876_66289990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87896b270d4fece9e6c0f8182f666b259df66168' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EX\\Tienda\\07_T_Ajax\\Smarty\\template\\cesta.tpl',
      1 => 1550821439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c72cff5885876_66289990 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content_cesta">
    
    <div class="cesta">
        <h1>Cesta</h1>

        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Unidades</th>
                        <th>Producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $_smarty_tpl->_assignInScope('total', 0);?>
                    <?php $_smarty_tpl->_assignInScope('result', '<tr>');?>                     
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cestaProductos']->value, 'producto', false, NULL, 'pos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value;
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', (($_smarty_tpl->tpl_vars['result']->value).("<td>")).($_prefixVariable3));?>
                                                        <?php if (($_smarty_tpl->tpl_vars['key']->value == 2)) {?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value[1];
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("</td><td><button onclick='JaxonRespuestaAjax.deleteProducto(\"")).($_prefixVariable4)).("\")' id='delete'></button></td></tr>"));?>
                                                                <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['producto']->value[2]);?>
                            <?php }?> 
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['total']->value;
$_prefixVariable5 = ob_get_clean();
echo ((($_smarty_tpl->tpl_vars['result']->value).("<tr class='tb_footer'><td colspan='2'>TOTAL</td><td>")).($_prefixVariable5)).("</td><td></td></tr>");?>
 
                </tbody>
            </table>
        </div>
            
        <div class="btn_cesta">
            <button type='submit' name='cesta[pagar]' value='pagar' id="pay"></button>
            <!--<button type='submit' name='cesta[vaciar]' value='vaciar' id="clear"></button>-->
            <button onclick='JaxonRespuestaAjax.clearCesta()' id="clear"></button>
        </div>
            
    </div>
    
</div><?php }
}
