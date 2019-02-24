<?php
    
    /** Fichero descripcion.php -> Mostrar la información del productos.
     *      - Información del producto (Caracteristicas, descripción...).
     */

    session_start(); // Crear o Abrir sesión..
    // Antes comprobar que el usuario esta logueado...
    if(!isset($_SESSION['user'])){
        header("Location: login.php?info='Debes loguearte primero'");
        exit();
    }
    
    // Cargamos los fichero '.php' que se van a utilizar...
    spl_autoload_register(function ($class){
        if (strpos($class,"Smarty")!==false){
             require_once('Smarty.class.php');  
        } else {
             require_once("./POO/$class.php");  
        }
    });
        
    $view_products = new Smarty(); // Creamos un objeto para gestionar la plantilla Smarty...
    // Configuramos los directorios
    $view_products->template_dir = './Smarty/template/';
    $view_products->compile_dir = './Smarty/template_c/';

    $productos = BBDD::obtenerProductos(); // Obtenemos los producto de la BBDD...
    $cod = filter_input(INPUT_GET, 'cod'); // Obtenemos el código enviado...
    $info = []; // Almacenar la información del producto...
    //var_dump($productos);
    foreach ($productos as $key => $product) {
        if ($product->getCod() === $cod) { // $product->getFamilia() === "ORDENA" &&
            $info[] = "<h2>{$product->getName_short()}</h2>";
            $info[] = "<b>CODIGO</b> {$product->getCod()}";
            $info[] = "<b>FAMILIA</b> ".$product->getFamilia();
            $info[] = "<b>PRECIO</b> {$product->getPrecio()} €";
            $info[] = $product->getDescripcion();
        }
    }

    $view_products->assign('infoProduct', $info); // Utilizado en descripcion.tpl
    $view_products->display('descripcion.tpl'); // Mostrar plantilla -> Descripcion