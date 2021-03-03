<?php

class Persona {

    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $identificacion;

    public static $NUM_OJOS = 2;

    public function __construct($nombre,$edad)
    {
        $this->nombre=$nombre;
        $this->edad= $edad;
        
    }
    public function saludar () {
        return "Hola, me llamo $this->nombre, tengo $this->edad años y tengo ". self::$NUM_OJOS . " ojos";
    }

    public function getNombre () {
        return $this->nombre;
    }

    public function setNombre ($nuevoNombre) {
         $this->nombre = $nuevoNombre;
    }

    public function getEdad () {
        return $this->edad;
    }

    public function setEdad ($nuevaEdad) {
         $this->edad = $nuevaEdad;
    }

}

// la herencia es la capacidad de una clase de traer todos los metodos y atributos de otra clase de orden
// superior

class Empleado extends Persona{

    private $salario;

    public function __construct($nuevoNombre,$nuevaEdad, $nuevoSalario)
    {
        parent::__construct($nuevoNombre,$nuevaEdad);
        $this->salario = $nuevoSalario;
    }

    public function saludar()
    {
        return parent::saludar(). " y gano $this->salario pesos"; 
    }

}




$personaEjemplo = new Empleado("Julio","50",28000000);
echo $personaEjemplo->saludar();


?>