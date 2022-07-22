<?php
    session_start(); //activacion de sesiones

    class PlantillaController{
        public function ctrPlantilla(){

            if (isset($_SESSION["login"]) && $_SESSION["login"] == true){
                include_once "view/module/home.usuario.php";

            }else{
                include_once "view/module/login.php";
            }
            
            
        }
    }
    
?>