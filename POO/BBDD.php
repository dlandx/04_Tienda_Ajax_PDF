<?php

/**
 * Clase BBDD.php -> Conexión con la BBDD (acceder/consultar/validar en la BD).
 */

class BBDD {
    
    private static $conexion;
    //public static $info;

    // Conectar con la BD...
    private static function conexion(): PDO {
        try {
            $dsn =  "mysql:host=localhost; dbname=dwes"; //"mysql:host=172.17.0.2; dbname=dwes";
            $atributos = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
                PDO::ATTR_ERRMODE => true, // True o false da igual si esta BIEN... 
                PDO::ERRMODE_EXCEPTION => true]; // Errores para Excepciones (Solo para desarrollo)...
            // Para establecer una conexión lo que hacemos es instanciar un objeto de la clase PDO()...
            $con = new PDO($dsn, "root", "", $atributos);
        } catch (PDOException $ex) {
            //self::$info = $ex->getMessage(); // Información de el Error...
            die("Se produjo un error en la conexion: ".$ex->getMessage());
        } // try
        
        return $con; //return ($con === null) ? self::$info : $con; // String - PDO
    }
    
    // Realizar una consulta 
    private static function ejecutarConsulta($sql, $valores) {
        $numFilas = 0;
        $stmt = self::$conexion->prepare($sql); // Preparar una sentencia SQL parametrizada...
        if ($stmt->execute($valores)) { // Ejecuta una sentencia preparada (Retorna True | False)
            // Devuelve el número de filas afectadas por la última sentencia SQL...
            $numFilas = $stmt->rowCount(); // Retorna 0 si no hay filas y 1 si hay filas afectadas...
        }        
        $stmt->closeCursor(); // Cerramos el cursor
        
        return ($numFilas != 0) ? true : false; //(true=OK | false=ERROR)...
    }
    
    // Verificar que la consulta contenga un registro (OK! Usuario existe), o no (Usuario no registrado)
    public static function verificaCliente($user, $pass) {
        $result = null;        
        $con = self::conexion(); // Realizar conexión con la BD
        
        if($con) { // Conexion satisfactoria
            self::$conexion = $con;
            // Realizar una consulta parametrizada con PDO...
            $sql = "SELECT * FROM usuarios WHERE nombre=:nombre AND password=:password";
            $valores = array(':nombre' => $user, ':password' => $pass); // Creamos los valores...
            // Realizamos la consulta en la BBDD si el usuario existe o no...
            $usuario = self::ejecutarConsulta($sql, $valores); // info usuario (true=OK | false=NO) existe...      
            $result = ($usuario === true) ? true : "Usuario o contraseña no válidos!!!";
        }
        
        return $result;
    }   
    
    // Consultar a la BBDD para obtener todos los productos...
    public static function obtenerProductos() {
        $consulta = self::conexion()->query("SELECT * FROM producto"); // Preparar una sentencia SQL...
        // Devuelve un array que contiene todas las filas del conjunto de resultados...
        //$productos = $consulta->fetchAll(PDO::FETCH_ASSOC); // Array asociativo con todas las tuplas.
        $productos = [];
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
            $p = new Productos($fila['cod'], $fila['nombre']??"", $fila['nombre_corto'], 
                    $fila['descripcion'], $fila['PVP'], $fila['familia']);
            array_push($productos, $p);
        }
        $consulta->closeCursor(); // Cerramos el cursor
        return $productos;
    }
}
