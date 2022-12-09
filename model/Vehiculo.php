<?php
class Vehiculo
{
  private $marca;
  private $modelo;
  private $color;
  private $propietario;
  private $planta;

  function __construct($marca, $modelo, $color, $propietario)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    // Si queremos hacer comprobaciones de los valores, se hacen en el set.
    $this->setColor($color);
    $this->setPropietario($propietario);
  }
  function getMarca()
  {
    return $this->marca;
  }

  function setMarca($miMarca)
  {
    $this->marca = $miMarca;
  }

  function setModelo($miModelo)
  {
    $this->modelo = $miModelo;
  }

  function getModelo()
  {
    return $this->modelo;
  }

  function setColor($miColor)
  {
    $this->color = $miColor;
  }

  function getColor()
  {
    return $this->color;
  }

  function setPropietario($miPropietario)
  {
    $this->propietario = $miPropietario;
  }

  function getPropietario()
  {
    return $this->propietario;
  }

  function getPlanta() { return $this->planta; }

  function setPlanta($planta) {
    $this->planta = $planta;
  }
}
