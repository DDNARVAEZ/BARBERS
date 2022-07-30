<?php
    class ControllerRegistro{
        public function ctrInsertarUsuario($cedula,$nombre,$apellido,$num_celular,$f_nacimiento,$email,$contrasena,){
            try {
                $objDtoregistro = new RegistroUsu ($cedula, $nombre, $apellido, $num_celular, $f_nacimiento, $email, $contrasena );
                $objDaoregistro = new ModelRegistro ( $objDtoregistro );
               
                if ( $objDaoregistro -> mdlInsertarUsuario() ) {
                    echo "<script>
                        Swal.fire(
                        'REGISTRO',
                        'El Usuario ah sido Registrado',
                        'success'
                        );</script>";
   
                } else {
                    echo"ha ocurrido un error";
                }  
               
            } catch (PDOException $e) {
                echo"error en la funcion insertar usuario" . $e -> getMessage();
            }
 
        }//FIN DEL CONTROLLER INSERTAR
 
        public function ctrVerUsuario(){
            $array = false;
            try {
                $objDtoregistro = new RegistroUsu (null, null, null, null, null, null, null );
                $objDaoregistro = new ModelRegistro ( $objDtoregistro );
                $array =$objDaoregistro -> mdlVerUsuario() -> fetchAll();
               
            } catch (PDOException $e) {
                echo"error en el controlador" .$e ->getMessage();
            }
            return $array;
        }
 
    }
 
 
 
 
?>

