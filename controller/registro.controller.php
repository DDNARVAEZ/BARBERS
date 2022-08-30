<?php
    class ControllerRegistro{ 

        public function ctrInsertarUsuario($cedula,$nombre,$apellido,$num_celular,$f_nacimiento,$email,$contrasena){ #se crea el controlador de insertar usuarios
           
             /*se crea un trycatch ; luego creamos un objdto e instanciamos la clase registrousu y capturamos sus atributos
            enseguida creamos un objdao e instanciamos la clase modelregistro capturamos el objdto, luego mediante un alerta nos informa
            si el usuario ah sido registrado o no. */

            try {
                $objDtoregistro = new RegistroUsu ($cedula, $nombre, $apellido, $num_celular, $f_nacimiento, $email, $contrasena );
                $objDaoregistro = new ModelRegistro ( $objDtoregistro );
               
                if ( $objDaoregistro -> mdlInsertarUsuario() ) {
                    echo  
                       "<script>
                        Swal.fire(
                        'GENIAL !!',
                        'El Usuario ha sido Registrado',
                        'success'
                          );</script>";
   
                } else {
                    echo"ha ocurrido un error";
                }  
               
            } catch (PDOException $e) {
                echo"error en la funcion insertar usuario" . $e -> getMessage();
            }
 
        }//fin del controlador insertar
 
        public function ctrVerUsuario(){ #se crea el controlador de ver usuario
            /*se crea una variable llamada array de estado false; luego creamos un objdto e instanciamos la clase registrousu
            enseguida creamos un objdao e instanciamos la clase modelregistro capturamos el objdto, luego utilizamos la variable 
            array para capturar los datos de la funcion verusuario y si existen datos los captura en un arreglo  */
           
            $array = false;
            try {
                $objDtoRegistro = new RegistroUsu (null, null, null, null, null, null,null );
                $objDaoRegistro = new ModelRegistro ( $objDtoRegistro );
                $array =$objDaoRegistro -> mdlVerUsuario() -> fetchAll();
               
               
            } catch (PDOException $e) {
                echo"error en el controlador" .$e ->getMessage();
            }
            return $array;
           
        }//fin del controlador ver usuario
 
        public function ctrEditarUsuario(){ #se crea el controlador de editar usuario

            /* creamos el objdto y  asignamos un nuevo registro y atraves del metodo post traemos la informacion insertada en la vista */

            $objDtoRegistro = new RegistroUsu(
                $_POST["txtcedula"],
                $_POST["txtnombre"],
                $_POST["txtapellido"],
                $_POST["txtnumerocel"],
                $_POST["txtfnacimiento"],
                $_POST["txtemail"],
                $_POST["txtcontrasena"]
            );
           
               
           
            $objDaoRegistro = new ModelRegistro($objDtoRegistro);
            if ($objDaoRegistro -> mdlEditarUsuario()){
                echo "<script>
                Swal.fire({
                    title: 'EXITO',
                    text: 'SU USUARIO A SIDO EDITADO CON EXITO',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'CONFIRMAR'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location ='index.php?ruta=Usuario';
                    }else{
                        window.location='index.php?ruta=Usuario';
                    }
                })
                </script>";
            
                /*"<script>
                    Swal.fire(
                        'Genial!!',
                        'El usuario ha sido modificado',
                        'success'
                    );
                    </script>
                ";*/
            } else{
                    echo "<script>
                        Swal.fire(
                            'ups!!',
                            'No se pudo modificar',
                            'danger'
                        );
                        </script>
                    ";
                }    
        }//fin del  controlador editar usuario 
 
 

        public function ctrEliminarUsuario(){ #se crea el controlador de eliminar usuario
            $objDtoRegistro = new RegistroUsu(
                $_GET['Eliminar'],
                null,
                null,
                null,
                null,
                null,
                null
               
            );
            $objDaoRegistro = new ModelRegistro($objDtoRegistro);
            $objDaoRegistro -> mdlEliminarUsuario();
            echo"<script>
                    window.location ='index.php?ruta=Usuario';
                </script>";
 
 
 
         
        }//fin del controlador de eliminar usuario  
 
 
    } //fin de la clase 
 
 
 
 
?>
 
