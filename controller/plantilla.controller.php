<?php
    session_start(); //activacion de sesiones
 
    class PlantillaController{
        public function ctrPlantilla(){
                /*se hace la validacion correspondiente para que el usuario sea enviado a la interfaz de home de usuario 
                de lo contrario permanecera en la interfaz de login */
 
            if (isset($_SESSION["login"]) and $_SESSION["login"] == true){
                include_once "view/module/direcc.php";
               
            }else{
                include_once "view/module/login.php";
               
            }
           
           
        }
    }
   
    ?>
 
