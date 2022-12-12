<?php
require("./model/Propietario.php");
require("./controller/PropietarioController.php");

$controller = new PropietarioController();

$controller->listado();