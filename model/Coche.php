<?php
require_once('Vehiculo.php');

class Coche extends Vehiculo {
  static $plantas = ["subterraneo1","subterraneo2"];
 
  function puedeAparcar($planta) {
    return in_array($planta, self::$plantas);
  }
}