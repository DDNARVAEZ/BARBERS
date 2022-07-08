<?php

class ConexionController{
    public function ctrLogin($user, $pass){
        $objModelConexion = new ModelConexion($user, $pass);
        $rest = $objModelConexion -> getLogin() -> fetch();
        if(gettype($rest) != "boolean"){
            echo "<script>alert('ha ingresado');</script>";

        }else{
            echo "<script>alert('contraseña errada');</script>";

        }
    }
}

?>