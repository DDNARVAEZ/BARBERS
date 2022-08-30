<?php

//controlladores
require_once "controller/plantilla.controller.php";
require_once "controller/conexion.controller.php";
require_once "controller/cita.controller.php";
require_once "controller/registro.controller.php";


//modelos dao y dto

require_once "model/conexion.php";
require_once "model/dao/conexion.dao.php";
require_once "model/dao/cita.dao.php";
require_once "model/dto/cita.dto.php";
require_once "model/dao/registro.dao.php";
require_once "model/dto/registro.dto.php";




//creacion objeto de arranque
/*cuando se valida el usuario se crea un obj y se instancia la plantilla y se ejecuta la funcion para direccionar al usuario al menu principal */
$objPlantillla = new PlantillaController();
$objPlantillla ->ctrPlantilla();


?>