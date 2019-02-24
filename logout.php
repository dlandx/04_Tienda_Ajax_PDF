<?php

    /* Fichero logoff.php -> Desconectar al usuario de la aplicación.
     *      - Desconectar al usuario y redirigir al login automáticamente.
     *      - No muestra ninguna información en pantalla (NO es visible para user)
     */

    session_start(); // Crear o Abrir sesión...
    session_destroy();
    // Cerrar Conexion con BBDD... ????
    header("Location: login.php");
    exit();
