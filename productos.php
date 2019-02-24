<?php

    /* Fichero productos.php -> Listado de productos.
     *      - Listar los productos de la tienda.
     *      - Permitir al usuario seleccionar productos que va a comprar.
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
    
    require_once './vendor/autoload.php'; // Ajax
    use Jaxon\Jaxon; // Require Jaxon\Jaxon...
    use Jaxon\Response\Response; // usar la clase...
        
    $view_products = new Smarty(); // Creamos un objeto para gestionar la plantilla Smarty...
    // Configuramos los directorios
    $view_products->template_dir = './Smarty/template/';
    $view_products->compile_dir = './Smarty/template_c/';
    
    $ajax = jaxon(); // Usar clase de Ajax - Singleton...
    // Funcionalidad Ajax...
    class RespuestaAjax {
        public function addCesta($cod){
            $respuesta = new Response(); // Class que entrega al cliente cuando solicite datos.
            $respuesta->alert($cod);            
            Cesta::nuevoArticulo($cod); // Añadimos el producto a la cesta...
            return $respuesta;
        }
        
        public function deleteProducto($cod){
            $respuesta = new Response(); // Class que entrega al cliente cuando solicite datos.
            Cesta::eliminar($cod);
            return $respuesta;
        }
        
        public function clearCesta(){
            $respuesta = new Response(); // Class que entrega al cliente cuando solicite datos.
            if(isset($_SESSION['producto'])) { // SI hay productos en la cesta...
                Cesta::vaciar();
            }
            return $respuesta;
        }
    }
    // Dejamos disponible la Funcion  para el cliente
    $ajax->register(Jaxon::CALLABLE_OBJECT, new RespuestaAjax());
    $ajax->processRequest(); // Procesar la respuesta cuando es invocada...
    
/*  echo $ajax->getCss();
    echo $ajax->getJs();
    echo $ajax->getScript();*/
    
    $view_products->assign('getCSS', $ajax->getCss()); 
    $view_products->assign('getJS', $ajax->getJs());
    $view_products->assign('getScript', $ajax->getScript());
    
    
    $productos = BBDD::obtenerProductos(); // Obtenemos los producto de la BBDD...
    $cesta = Cesta::getProductos(); // Cargamos la cesta con los productos que haya...

    // Array de BTN donde realizamos las siguientes operaciones...
    $btn = filter_input(INPUT_POST, 'cesta', FILTER_DEFAULT, FILTER_FORCE_ARRAY);
    foreach ($btn ?? [] as $key => $value) { // Según la KEY del array realizaremos 'x' acción... 
        switch ($key) {
            case "agregar":      
                // BTN agregar -> Añadir el producto elegido a la Cesta...                
//                Cesta::nuevoArticulo($value); // Añadimos el producto a la cesta...
                break;
            
            case "descripcion":
                // BTN descripción -> Mostrar más información del producto... 
                header("Location: descripcion.php?cod=$value");
                exit();
                break;
            
            case "eliminar": 
                // BTN eliminar -> Eliminar o restar un producto de la cesta de compra...
//                Cesta::eliminar($value);
                break;

            case "pagar":
                // BTN pagar -> Pagar los productos de la cesta - pagar.php...
                if(isset($_SESSION['producto'])) { // SI hay productos en la cesta...
                    header("Location: pagar.php");
                    exit();
                }
                break;

            case "vaciar":
                // BTN vaciar -> Vaciar todos los productos de la cesta...
//                if(isset($_SESSION['producto'])) { // SI hay productos en la cesta...
//                    Cesta::vaciar();
//                }
                break;
            
            default:
                break;
        } // Switch
    }
    
    $view_products->assign('cestaProductos', $cesta); // Utilizado en cesta.tpl
    $view_products->assign('listaProductos', $productos); // Utilizado en listaProductos.tpl
    $view_products->display('productos.tpl'); // Mostrar plantilla -> Productos
    