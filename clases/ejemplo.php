<?php
 class empleado{
 private nombre;
 private apellido;
 private dependencia;
 
 public function __construct($nombre,$apellido){
 $this->nombre = $nombre;
 $this->apellido = $apellido;
 }
 
public function __set($var, $valor)
{
// convierte a minúsculas toda una cadena la función strtolower
$temporal = strtolower($var);
// Verifica que la propiedad exista, en este caso el nombre es la cadena en "$temporal"
if (property_exists('empleado',$temporal))
 {
$this->$temporal = $valor;
 }
 else
 {
echo $var . " No existe.";
 }
 }
 
 public function __get($var)
 {
$temporal = strtolower($var);
// Verifica que exista
 
if (property_exists('empleado', $temporal))
 {
return $this->$temporal;
 }
 
// Retorna nulo si no existe
return NULL;
}
 }
 
$empleado = new empleado('Andres','Lara');
$empleado -> dependencia = 'Programador Junior';
 
echo $empleado -> nombre . ' - '. $empleado -> apellido .' Y la dependencia es: ' . $empleado -> dependencia;
?>