<?php

/**
 * Clase CestaCompra.php -> realizar acciones relacionadas con la cesta de la compra.
 */

class Cesta {

    // Añadir un nuevo producto a la cesta...
    public static function nuevoArticulo($cod) {
        $_SESSION['producto'][$cod]++;
        header("Location: productos.php"); // Evitar que incremente al recargar página 'icon'...
        exit();
    }
    
    // Obtener los productos de la cesta de compra...
    public static function getProductos(){
        $cesta = [];
        if(isset($_SESSION['producto'])) { // SI la sesión existe obtenemos los datos...
            //recorremos sessión y montamos en array la cesta...
            foreach ($_SESSION['producto'] as $key => $value) {
                // Creamos el array con los productos (und, código, precio)...
                $cesta[] = [self::getUnidades($key), $key, self::getCoste($key)];
            }
        }
        return $cesta;
    }
    
    // Obtener las unidades de un producto...
    public static function getUnidades($cod){
        $unidades = $_SESSION['producto'][$cod];
        return $unidades;
    }
    
    // Obtener el precio total de un producto...
    public static function getCoste($cod){
        $precio = 0;
        $listProduct = BBDD::obtenerProductos();// Obtenemos todos los productos de la BBDD...
        foreach ($listProduct as $product) {
            // Obtenemos los datos de la BD (DTO Productos.class) del código al pulsar el BTN de añadir cesta...
            if ($product->getCod() == $cod){
                $precio = $product->getPrecio() * $_SESSION['producto'][$cod];
            }
        }
        return $precio;
    }
    
    // Vaciar toda la cesta de compra...
    public static function vaciar(){
        unset($_SESSION['producto']);
        header("Location: productos.php"); // Recargar página...
        exit();
    }
    
    public static function eliminar($cod) {
        $_SESSION['producto'][$cod]--;
        var_dump($_SESSION['producto']);
        // Controlar que si es 0 o menos quite de la session...
        foreach ($_SESSION['producto'] as $key => $value) {
            if ($value <= 0) {
                unset($_SESSION['producto'][$key]);
            }
        }
        
        header("Location: productos.php"); // Evitar que incremente al recargar página 'icon'...
        exit();
    }
}
