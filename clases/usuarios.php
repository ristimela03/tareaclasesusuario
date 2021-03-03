<?php
class Usuario extends DBOperations
{
    
    private $nombre;
    private $username;
    private $password;
    private $email;
    public $id;

    public function get($username, $password)
    {
        $this->query = "
        SELECT  * 
        FROM usuarios 
        WHERE username = :username AND password = :password";

        $params = array('username' => $username, 'password' => $password);
        $resultado =  $this->executeQuery($params);
        return $resultado;
    }

    
}

 

    public function __construct($nombre,$username,$password,$email,$id)
    {
        $this->nombre=$nombre;
        $this->username= $username;
        $this->password= $password;
        $this->email= $email;
        $this->id= $id;
        
    }

    public static $id = 2;
    public function inicio () {
        return "bienvenido, tu nombre es $this->nombre, tienes asigado el usuario $this->username tu contraseña de acceso es $this->password el correo que se registro es $this-> email ". self::$id . " numero de registro";
    }


    public function getNombre () {
        return $this->nombre;
    }

    public function setNombre ($nuevoNombre) {
         $this->nombre = $nuevoNombre;
    }

    public function getUsername () {
        return $this->username;
    }

    public function setUsurname ($nuevoUsername) {
         $this->username = $nuevoUsername;
    }

    public function getPassword () {
        return $this->password;
    }

    public function setPassword ($nuevoPassword) {
         $this->password = $nuevoPassword;
    }

    public function getEmail () {
        return $this->email;
    }

    public function setEmail ($nuevoEmail) {
         $this->email= $nuevoEmail;
    }

    

}

// la herencia es la capacidad de una clase de traer todos los metodos y atributos de otra clase de orden
// superior

class Empleado extends Usuario{

    private $id;

    public function __construct($nuevoNombre,$nuevoUsername, $nuevoPassword,$nuevoId)
    {
        parent::__construct($nuevoNombre,$nuevoUsername,$nuevoId);
        $this->id= $nuevoId;
    }

    public function inicio()
    {
        return parent::inicio(). " y el numero de registro $this->id "; 
    }

}




$personaEjemplo = new Empleado("pedro","alfa",2524,01);
echo $personaEjemplo->inicio();










//tarea completar esta clase
    // consejo: usar los metodos sets para usar esa data en la creacion y actualizacion