<?php
/* Smarty version 3.1.33, created on 2019-02-22 10:14:03
  from '/var/www/T_Ajax/Smarty/template/productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6fbd5b50f616_39857845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a76aa52d015b5854251e7d606094973fd2dfbf23' => 
    array (
      0 => '/var/www/T_Ajax/Smarty/template/productos.tpl',
      1 => 1550824428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listaProductos.tpl' => 1,
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5c6fbd5b50f616_39857845 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lista de productos</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    
    <body>
                <?php echo $_smarty_tpl->tpl_vars['getCSS']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['getJS']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['getScript']->value;?>

        
        <div class="content_product">        
            <div class="logout">
                <h1>Listado de productos</h1>
                <form action="./logout.php" method="POST">
                    <button type='submit' name='btn' value="LogOut" class="btn_exit">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="50" viewBox="0 0 224 224" style=" fill:#000000;"><g transform="translate(2.464,2.464) scale(0.978,0.978)">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#e74c3c" stroke="#000000" stroke-width="5" stroke-linejoin="round"><g id="surface1 1"><path d="M115.1675,10.2025c0.8575,0.8575 1.33,2.03 1.3125,3.2375v98.56c0.0175,1.61 -0.8225,3.115 -2.2225,3.9375c-1.4,0.805 -3.115,0.805 -4.515,0c-1.4,-0.8225 -2.24,-2.3275 -2.2225,-3.9375v-98.56c-0.035,-2.4675 1.9425,-4.4975 4.41,-4.55c1.2075,-0.0175 2.38,0.455 3.2375,1.3125zM85.12,17.92c0.315,2.17 -0.98,4.2175 -3.0625,4.9c-37.2575,12.495 -64.1375,47.6525 -64.1375,89.18c0,52.01 42.07,94.08 94.08,94.08c52.01,0 94.08,-42.07 94.08,-94.08c0,-41.5275 -26.88,-76.685 -64.1375,-89.18c-2.3625,-0.805 -3.6225,-3.3425 -2.835,-5.6875c0.7875,-2.345 3.325,-3.605 5.67,-2.8175c40.845,13.7025 70.2625,52.29 70.2625,97.685c0,56.8575 -46.1825,103.04 -103.04,103.04c-56.8575,0 -103.04,-46.1825 -103.04,-103.04c0,-45.395 29.4175,-83.9825 70.2625,-97.685c0.5075,-0.175 1.0675,-0.2625 1.6275,-0.245c2.17,0.07 3.9725,1.6975 4.27,3.85z"></path></g></g><path d="M0,224v-224h224v224z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#e74c3c" stroke="none" stroke-width="1" stroke-linejoin="miter"><g id="surface1"><path d="M111.93,8.89c-2.4675,0.0525 -4.445,2.0825 -4.41,4.55v98.56c-0.0175,1.61 0.8225,3.115 2.2225,3.9375c1.4,0.805 3.115,0.805 4.515,0c1.4,-0.8225 2.24,-2.3275 2.2225,-3.9375v-98.56c0.0175,-1.2075 -0.455,-2.38 -1.3125,-3.2375c-0.8575,-0.8575 -2.03,-1.33 -3.2375,-1.3125zM80.85,14.07c-0.56,-0.0175 -1.12,0.07 -1.6275,0.245c-40.845,13.7025 -70.2625,52.29 -70.2625,97.685c0,56.8575 46.1825,103.04 103.04,103.04c56.8575,0 103.04,-46.1825 103.04,-103.04c0,-45.395 -29.4175,-83.9825 -70.2625,-97.685c-2.345,-0.7875 -4.8825,0.4725 -5.67,2.8175c-0.7875,2.345 0.4725,4.8825 2.835,5.6875c37.2575,12.495 64.1375,47.6525 64.1375,89.18c0,52.01 -42.07,94.08 -94.08,94.08c-52.01,0 -94.08,-42.07 -94.08,-94.08c0,-41.5275 26.88,-76.685 64.1375,-89.18c2.0825,-0.6825 3.3775,-2.73 3.0625,-4.9c-0.2975,-2.1525 -2.1,-3.78 -4.27,-3.85z"></path></g></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>
                    </button>
                </form>
            </div>

            <form action="./productos.php" method="POST">
                                <?php $_smarty_tpl->_subTemplateRender("file:listaProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <?php $_smarty_tpl->_subTemplateRender("file:cesta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </form>
        </div>
    </body>
</html><?php }
}
