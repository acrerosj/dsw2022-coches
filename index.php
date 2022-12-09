<?php
//Incluyo los archivos necesarios
require("./model/Coche.php");
require("./controller/CocheController.php");

//Instancio el controlador
$controller = new CocheController;

/* 
if (isset($_GET['ver'])) {
  $controller->ver($_GET['ver']);
} else {
  //Ejecuto el método
  $controller->listado();
} */

$partes = explode('/', $_SERVER['PATH_INFO']);
var_dump($partes);

if ($partes[1]=='ver' && is_numeric($partes[2])) {
  $controller->ver($partes[2]);
} else {
  $controller->listado();
}
