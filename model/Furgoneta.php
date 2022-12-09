<?php
require_once('Vehiculo.php');

class Furgoneta extends Vehiculo {
  static $plantas = ["superficie","subterraneo1"];

  private $altura;

  function __construct($marca, $modelo, $color, $propietario, $altura) {
    parent::__construct($marca, $modelo, $color, $propietario);
    $this->altura = $altura;
  }

  function getAltura() { return $this->altura; }

  function setAltura($altura) {
    $this->altura = $altura;
  }

  function puedeAparcar($planta) {
    return in_array($planta, self::$plantas);
  }
}