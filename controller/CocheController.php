<?php

class CocheController {

  var $coches;

  function __construct() {
    $this->coches = [
      1 => new Coche("Wolkswagen","Polo","negro","Rebeca"),
      2 => new Coche("Toyota","Corolla","verde","Marcos"),
      3 => new Coche("Skoda","Octavia","gris","Marcos"),
      4 => new Coche("Kia","Niro","azul","Jairo")
    ];
  }

  public function listado() {
    $rowset = $this->coches;

    require("view/listado.php");
  }

  public function ver($id) {
    if (array_key_exists($id,$this->coches)){ 
      $row = $this->coches[$id];
      require("view/ver.php");
    } else {
      //$this->listado();
      require("view/error.php");
    }  
  }

  public function propiedadDe($nombre) {
    $rowset = array_filter($this->coches, fn($coche) => $coche->getPropietario() == $nombre);

    require("view/listado.php");

  }
}