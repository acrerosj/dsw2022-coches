<?php
require_once('Vehiculo.php');

class Autobus extends Vehiculo {
  static $plantas = ["superficie"];

  private $empresa;

  function __construct($marca, $modelo, $color, $propietario, $empresa) {
    parent::__construct($marca, $modelo, $color, $propietario);
    $this->empresa = $empresa;
  }

  function getEmpresa() { return $this->empresa; }

  function setEmpresa($empresa) {
    $this->empresa = $empresa;
  }

  function puedeAparcar($planta) {
    return in_array($planta, self::$plantas);
  }
}