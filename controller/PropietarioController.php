<?php
class PropietarioController {

  public $propietarios;

  public function __construct() {
    $this->propietarios = [
      new Propietario("Rebeca", 23),
      new Propietario("Marcos", 33),
      new Propietario("Mario", 43),
      new Propietario("Jairo", 53),
      new Propietario("Pepe", 63)
    ];
  }

  public function listado() {
    $propietarios = $this->propietarios;
    require("view/propietarios/listado.php");
  }
}