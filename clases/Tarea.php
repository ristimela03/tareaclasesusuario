
<?php
// atributos de la clase
    var $id;
    var $nombre;
    var $estado;
    var $pdo;

    // function initPdo () {
    //     require_once("../db.php");
    //     $this->pdo = getPdo();
    // }
    
    //constructores
    function __construct($nuevoNombre, $nuevoEstado = "pendiente") 
    {
        $this->nombre = $nuevoNombre;
        $this->estado = $nuevoEstado;
        //$this -> initPdo();
    }

    // metodos set (actualidar atributos de un objeto)

    function setNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    function setEstado($nuevoEstado)
    {
        $this->estado = $nuevoEstado;
    }

    function delete() {

    }

    // metodos get (para traer valores de atributos

    function getNombre() {
        return $this ->nombre;
    }

    function getEstado () {
        return $this -> estado;
    }

}

