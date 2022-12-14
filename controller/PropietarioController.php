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

  private function buscarPropietario($nombre) {
    foreach ($this->propietarios as $propietario) {
      if ($propietario->nombre == $nombre) {
        return $propietario;
      }
    }
    return null;
  }

  public function ver($nombre) {
    $propietario = $this->buscarPropietario($nombre);
    if ($propietario == null) {
      require("view/error.php");  
    } else {
      require("view/propietarios/ver.php");
    }
  }

}