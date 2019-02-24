<?php 

    /* Fichero login.php -> Su función es autentificar al usuario con la aplicación web.
     *      - Para acceder a las demas páginas es necesario autentificarse...
     */
        
    // Cargamos los fichero '.php' que se van a utilizar...
    spl_autoload_register(function ($class){
        if (strpos($class,"Smarty")!==false){
             require_once('Smarty.class.php');  
        } else {
             require_once("./POO/$class.php");  
        }
    });
    
    session_start(); // Crear o Abrir sesión... 
    $view_login = new Smarty(); // Creamos un objeto para gestionar la plantilla Smarty...
    // Configuramos los directorios
    $view_login->template_dir = './Smarty/template/';
    $view_login->compile_dir = './Smarty/template_c/';

    // BTN Login -> Comprobar en la BD el usuario ingresado en el FORM...
    if(filter_input(INPUT_POST, 'btn')){
        $_SESSION['user'] = filter_input(INPUT_POST, 'user');
        $_SESSION['pass'] = filter_input(INPUT_POST, 'pass');
        
        // Controlar que ingrese datos en los inputs...
        if($_SESSION['user'] == "" || $_SESSION['pass'] == "") {
            // Informamos al usuario de que debe ingresar datos en los campos...
            $view_login->assign('error', "Debes introducir un nombre de usuario y una contraseña");
        } else {
            // Comprobar que el usuario ingresado este en la BBDD...
            $result = BBDD::verificaCliente($_SESSION['user'], $_SESSION['pass']);
            if ($result === true) { // Usuario existe en la BBDD...
                header("Location: productos.php");
                exit();
            } else { // Usuario NO existe en la BBDD... 
                $view_login->assign('error', $result); //"Se produjo un error: [el usuario no existe en la BD]");
            }
        }
        $view_login->display('login.tpl'); // Mostrar plantilla -> Login    
    } else {
        $view_login->assign('error', filter_input(INPUT_GET, 'info') ?? null); // Evitar (Undefined - non-object) Intanciamos...
        $view_login->display('login.tpl'); // Mostrar plantilla -> Login
    }
