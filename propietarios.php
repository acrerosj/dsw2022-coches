<?php
require("./model/Propietario.php");
require("./controller/PropietarioController.php");

$controller = new PropietarioController();

if (isset( $_SERVER['PATH_INFO'])) {
  $partes = explode('/', $_SERVER['PATH_INFO']);
  if ($partes[1]=='ver' && isset($partes[2])) {
    $controller->ver($partes[2]);
  } else {
    $controller->listado();
  }
} else {
  $controller->listado();
}