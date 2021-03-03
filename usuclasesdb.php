<?php 

require_once('./classes/DBOperations.php');
require_once('./classes/Usuario.php');

$usuarioInstancia = new Usuario;

$usuarioEncontrado = $usuarioInstancia->get("danyjavierb","123412343214");

print_r($usuarioEncontrado);


?>