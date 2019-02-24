<?php
/* Smarty version 3.1.33, created on 2019-02-24 18:11:09
  from 'C:\xampp\htdocs\EX\Tienda\07_T_Ajax\Smarty\template\pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c72d02dc21e78_68756250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '134084614e7dd1b949de13ec463e2b4aadd22453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EX\\Tienda\\07_T_Ajax\\Smarty\\template\\pagar.tpl',
      1 => 1550822132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c72d02dc21e78_68756250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Factura</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
        <style>
            body {
                padding: 0;
                margin: 0;
                height: 100vh;
                background-image: radial-gradient(#f66c6a, #c1403d);
            }
        </style>
    </head>
    
    <body>
        <div class="content_factura">  
            <div class="logout">
                <h1>Factura a pagar</h1>
                <form action="./logout.php" method="POST">
                    <button type='submit' name='btn' value="LogOut" class="btn_exit">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="50" viewBox="0 0 224 224" style=" fill:#000000;"><g transform="translate(2.464,2.464) scale(0.978,0.978)">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#e74c3c" stroke="#000000" stroke-width="5" stroke-linejoin="round"><g id="surface1 1"><path d="M115.1675,10.2025c0.8575,0.8575 1.33,2.03 1.3125,3.2375v98.56c0.0175,1.61 -0.8225,3.115 -2.2225,3.9375c-1.4,0.805 -3.115,0.805 -4.515,0c-1.4,-0.8225 -2.24,-2.3275 -2.2225,-3.9375v-98.56c-0.035,-2.4675 1.9425,-4.4975 4.41,-4.55c1.2075,-0.0175 2.38,0.455 3.2375,1.3125zM85.12,17.92c0.315,2.17 -0.98,4.2175 -3.0625,4.9c-37.2575,12.495 -64.1375,47.6525 -64.1375,89.18c0,52.01 42.07,94.08 94.08,94.08c52.01,0 94.08,-42.07 94.08,-94.08c0,-41.5275 -26.88,-76.685 -64.1375,-89.18c-2.3625,-0.805 -3.6225,-3.3425 -2.835,-5.6875c0.7875,-2.345 3.325,-3.605 5.67,-2.8175c40.845,13.7025 70.2625,52.29 70.2625,97.685c0,56.8575 -46.1825,103.04 -103.04,103.04c-56.8575,0 -103.04,-46.1825 -103.04,-103.04c0,-45.395 29.4175,-83.9825 70.2625,-97.685c0.5075,-0.175 1.0675,-0.2625 1.6275,-0.245c2.17,0.07 3.9725,1.6975 4.27,3.85z"></path></g></g><path d="M0,224v-224h224v224z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#e74c3c" stroke="none" stroke-width="1" stroke-linejoin="miter"><g id="surface1"><path d="M111.93,8.89c-2.4675,0.0525 -4.445,2.0825 -4.41,4.55v98.56c-0.0175,1.61 0.8225,3.115 2.2225,3.9375c1.4,0.805 3.115,0.805 4.515,0c1.4,-0.8225 2.24,-2.3275 2.2225,-3.9375v-98.56c0.0175,-1.2075 -0.455,-2.38 -1.3125,-3.2375c-0.8575,-0.8575 -2.03,-1.33 -3.2375,-1.3125zM80.85,14.07c-0.56,-0.0175 -1.12,0.07 -1.6275,0.245c-40.845,13.7025 -70.2625,52.29 -70.2625,97.685c0,56.8575 46.1825,103.04 103.04,103.04c56.8575,0 103.04,-46.1825 103.04,-103.04c0,-45.395 -29.4175,-83.9825 -70.2625,-97.685c-2.345,-0.7875 -4.8825,0.4725 -5.67,2.8175c-0.7875,2.345 0.4725,4.8825 2.835,5.6875c37.2575,12.495 64.1375,47.6525 64.1375,89.18c0,52.01 -42.07,94.08 -94.08,94.08c-52.01,0 -94.08,-42.07 -94.08,-94.08c0,-41.5275 26.88,-76.685 64.1375,-89.18c2.0825,-0.6825 3.3775,-2.73 3.0625,-4.9c-0.2975,-2.1525 -2.1,-3.78 -4.27,-3.85z"></path></g></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>
                    </button>
                </form>
            </div>
            
            <div class="factura">
                <section class="cont_btn">
                    <div>
                       <h2>Factura #45</h2>
                        <p><i><?php echo smarty_modifier_date_format(time(),"%D (%H:%M %p)");?>
</i></p>
                        <span>@<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span> 
                    </div>

                    <div class="fact_btn">
                        <!--
                        <form action="./pagar.php" method="POST">
                            <button type='submit' name='Pay' value="Pay" class="btn_pay btn">Pagar</button>
                        </form>
                        -->
                        
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
                            <input name="cmd" type="hidden" value="_cart" /> <!-- Varios productos -->
            
                            <input name="business" type="hidden" value="xploredroidx-facilitator@gmail.com" />
                            <input name="shopping_url" type="hidden" value="http://localhost/T_Ajax/productos.php" />
                            <input name="currency_code" type="hidden" value="EUR" />
                            <input name="return" type="hidden" value="http://localhost/T_Ajax/productos.php" />
                            <input name="notify_url" type="hidden" value="http://localhost/T_Ajax/productos.php" />
                            <input name="rm" type="hidden" value="2" />

                            <input name="upload" type="hidden" value="1" />  
                            <?php $_smarty_tpl->_assignInScope('cont', 1);?>                            
                            <?php $_smarty_tpl->_assignInScope('iva', 0);?> 
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datosFactura']->value, 'producto', false, NULL, 'pos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>                                    
                                <input type="hidden" name="item_name_<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value[0];?>
">
                                <input type="hidden" name="amount_<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value[2];?>
">
                                <?php $_smarty_tpl->_assignInScope('iva', $_smarty_tpl->tpl_vars['iva']->value+$_smarty_tpl->tpl_vars['producto']->value[2]);?>                                 <?php $_smarty_tpl->_assignInScope('cont', $_smarty_tpl->tpl_vars['cont']->value+1);?>       
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <input type="hidden" name="item_name_<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" value="IVA">
                            <input type="hidden" name="amount_<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['iva']->value*0.21;?>
">
                            
                            <button type='submit' name='Pay' value="Pay" class="btn_pay btn">Pagar</button>
                        </form> <br /><br />
                            
                            
                                                <form action="./pagar.php" method="POST">
                            <button type='submit' name='pdf' value="pdf" class="btn_pay btn">PDF</button>
                        </form>
                    </div>
                </section>

                <section>                
                    <div class="tabla">
                        <table>
                            <thead>
                                <tr>
                                    <th>Articulo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $_smarty_tpl->_assignInScope('result', '<tr>');?> 
                                                    
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datosFactura']->value, 'producto', false, NULL, 'pos', array (
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
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', (($_smarty_tpl->tpl_vars['result']->value).("<td>")).($_prefixVariable1));?>
                                                                                <?php if (($_smarty_tpl->tpl_vars['key']->value == 2)) {?>
                                            <?php $_smarty_tpl->_assignInScope('result', ($_smarty_tpl->tpl_vars['result']->value).("</td></tr>"));?>
                                        <?php }?> 
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

                            </tbody>
                        </table>
                    </div>

                    <div class="resumen">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan='2'>Resumen factura</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $_smarty_tpl->_assignInScope('result', '<tr>');?> 
                                                    
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['factura']->value, 'datos', false, 'key', 'pos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['datos']->value) {
?>
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', (($_smarty_tpl->tpl_vars['result']->value).("<td>")).($_prefixVariable2));?>
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['datos']->value;
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("</td><td>")).($_prefixVariable3)).("</td></tr>"));?>


                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

                            </tbody>
                        </table>
                    </div> 
                </section>
            </div>
        </div>        
    </body>
</html><?php }
}
