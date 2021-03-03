<?php

require_once('./classes/Tarea.php');

// creacion de Objetos a partir de una clase
// usando la palabra reservada new
// a un objeto creado a partir de una clase se le llama instancia
$tarea1 = new Tarea("Comprar queso y jamon","completado");
$tarea2 = new Tarea("comprar el soat del carro","pendiende");
$tarea3 = new Tarea("pagar recibo de agua","pendiente");
//uso de metodos

// consistencia reduce el riesgo
// riegos es algo por lo que les pagan a ustedes
// disminuir el riesgo es parte de lo que motivo el uso de las computadoras


echo $tarea1->getNombre();
echo "<br>";
echo $tarea1->getEstado();
echo "<br>";


?>