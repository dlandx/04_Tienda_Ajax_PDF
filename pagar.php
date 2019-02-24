<?php

    /* Fichero pagar.php -> Realizar el pago de los productos de la cesta.
     *      - (Lo ideal de esta página seria que una vez confirmada la compra, 
     *        el usuario escoge el método de pago y forma de envío...)
     *      - Nos llevará a una página con un resumen del pago de los productos 
     *        a modo de especie de factura...
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
        
    $view_pay = new Smarty(); // Creamos un objeto para gestionar la plantilla Smarty...
    // Configuramos los directorios
    $view_pay->template_dir = './Smarty/template/';
    $view_pay->compile_dir = './Smarty/template_c/';
    
    $datosFactura = []; // Almacenamos los datos para la factura...
    $und = 0; // Unidades o cantitad total de los productos...
    $precio = 0; // Precio total de los productos...
    $cesta = Cesta::getProductos(); // Cargamos la cesta con los productos que haya...
    $productos = BBDD::obtenerProductos(); // Obtenemos los producto de la BBDD...

    foreach ($productos as $key => $product) { // Recorremos todos los productos de la BBDD...
        foreach ($cesta as $pos => $cod) { // Recorremos los productos de la cesta...
            // Del código del producto de la cesta obtenemos el nombre...
            if ($product->getCod() == $cod[1]){
                // Montamos datos de la factura (Nombre del producto, unidades, precio)...
                $datosFactura[] = [$product->getName_short(), $cod[0], $cod[2]];
                $und += Cesta::getUnidades($cod[1]); // Obtenemos las cantidades de cada producto y las sumamos.
                $precio += $cod[2]; // Cesta::getCoste($cod[1])
            }
        }        
    }
    $iva = $precio * 0.21;
    $resumen = ["Total articulos" => $und, 
                "Precio sin IVA" => round($precio, 2),
                "IVA" => round($iva, 2), 
                "Total" => round(($precio+$iva), 2)]; // Datos del resumen factura...
    
    // BTN PDF -> Generar el pdf 
    if(filter_input(INPUT_POST, 'pdf')){
        header("Location: pdf.php?datos=".serialize($datosFactura));
    }
    
    
    $view_pay->assign('user', $_SESSION['user']); // Usuario
    $view_pay->assign('datosFactura', $datosFactura); // Datos del producto o articulo...
    $view_pay->assign('factura', $resumen); // Datos del resumen (Total a pagar)...
    $view_pay->display('pagar.tpl'); // Mostrar plantilla -> Pagar
