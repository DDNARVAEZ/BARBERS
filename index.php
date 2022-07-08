<?php

//controller
require_once "controller/plantilla.controller.php";
require_once "controller/conexion.controller.php";


//modelos

require_once "model/conexion.php";
require_once "model/dao/conexion.dao.php";



//creacion objeto de arranque
$objPlantillla = new PlantillaController();
$objPlantillla ->ctrPlantilla();


?>