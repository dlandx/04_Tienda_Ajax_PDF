<?php
/* Smarty version 3.1.33, created on 2019-02-18 10:40:22
  from '/var/www/T_Ajax/Smarty/template/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6a7d86134103_07330343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4235687b7ff74416dd915ea52c42a8cecd6fe59' => 
    array (
      0 => '/var/www/T_Ajax/Smarty/template/login.tpl',
      1 => 1550482747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a7d86134103_07330343 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    
    <body>
        <div class="content c_login">
            <img src="https://image.flaticon.com/icons/png/512/419/419280.png" alt="" class="img">
            
            <div class="login">
                <span class="info"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                
                <form action="./login.php" method="POST">
                    <h1>Login</h1>
                    <input type="text" placeholder="Ingresar usuario" name="user" value="" class="campo" autocomplete="off">
                    <input type="password" placeholder="Ingresar contraseña" name="pass" value="" class="campo">
                    <button type="submit" name="btn" value="Login" class="btn">Login</button>
                    <!-- <input type="submit" class="success" value="Login" name="btn"> -->
                </form>
            </div>
        </div>
    </body>
</html><?php }
}
