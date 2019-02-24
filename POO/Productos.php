<?php

/**
 * Clase Producto.php -> Interactuar con un producto concreto.
 */

class Productos {
    
    private $cod;
    private $nombre;
    private $name_short;
    private $descripcion;
    private $precio;
    private $familia;
    
    /**
     * Contructor de la clase donde intanciamos los atributos...
     */
    public function __construct(string $cod, string $nombre, string $name_short, string $descripcion, float $precio, string $familia) {
        $this->cod = $cod;
        $this->nombre = $nombre;
        $this->name_short = $name_short;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->familia = $familia;
    }

    // GETTER AND SETTER
    function getCod() {
        return $this->cod;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getName_short() {
        return $this->name_short;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getFamilia() {
        return $this->familia;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setName_short($name_short) {
        $this->name_short = $name_short;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setFamilia($familia) {
        $this->familia = $familia;
    }

}
