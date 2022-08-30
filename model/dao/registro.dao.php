<?php
 
    class ModelRegistro{ # se crea la clase 
        /* acontinuacion observamos los atributos de la clase */
        private $cedula;
        private $nombre;
        private $apellido;
        private $num_celular;
        private $f_nacimiento;
        private $email;
        private $contrasena;
   
        private $estado;
       
        public function __construct($objDtoregistro){ #inicia el constructor 
            /*se capturan los datos de los get del dto  para poder utilizarlos en las funciones  */
            $this->cedula       = $objDtoregistro -> getCedula();
            $this->nombre       = $objDtoregistro -> getNombre();
            $this->apellido     = $objDtoregistro -> getApellido();
            $this->num_celular  = $objDtoregistro -> getNum_celular();
            $this->f_nacimiento = $objDtoregistro -> getF_nacimiento();
            $this->email        = $objDtoregistro -> getEmail();
            $this->contrasena   = $objDtoregistro -> getContrasena();
             
        }//FIN DEL CONSTRUCTOR
        public function mdlInsertarUsuario(){  #funcion para insertar un usuario 
            
            /*creamos la variable que contiene el procedimiento almacenado que se utiliza en la funcion; luego creamos el objeto
            en el cual instanciamos la clase de conexion; luego se crea una variable la cual ejecutara la funcion conexion y
            preparara el procedimiento almacenado, se capturaran los datos y se ejecutara el procedimiento almacenado  */
           
            $sql = "CALL SpInsertarUsuario(?, ?, ?, ?, ?, ?, ?);"; # <-----procedimiento almacenado
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->cedula, PDO::PARAM_INT);
                $stmt -> bindParam ( 2, $this->nombre, PDO::PARAM_STR);
                $stmt -> bindParam ( 3, $this->apellido, PDO::PARAM_STR);
                $stmt -> bindParam ( 4, $this->num_celular, PDO::PARAM_INT);
                $stmt -> bindParam ( 5, $this->f_nacimiento, PDO::PARAM_STR);
                $stmt -> bindParam ( 6, $this->email, PDO::PARAM_STR);
                $stmt -> bindParam ( 7, $this->contrasena , PDO::PARAM_STR);
           
                $stmt -> execute();
                $this ->estado = true;
               
 
            }catch (PDOException $ex) {
                echo "Hay un error en el dao de registro" . $ex -> getMessage();
            }
            return $this -> estado;
        }//FIN INSERTAR USUARIO
       
        public function mdlVerUsuario(){ #funcion para ver usuario

            /* creamos la variable que contiene el procedimiento almacenado de ver usuario que se utiliza en la funcion;luego creamos 
            la variable resulset con un estado de false; luego creamos el objeto en el cual instanciamos la clase de conexion; 
            luego se crea una variable la cual ejecutara la funcion conexion y preparara el procedimiento almacenado, se capturaran
            los datos y se ejecutara el procedimiento almacenado */ 

            $sql = "CALL `SpVerUsuario`()"; #<-----procedimiento almacenado
            $resultset = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
               
            } catch (PDOException $e) {
                echo"error al ver el registro" . $e -> getMessage();
            }
            return $resultset;
           
        }//FIN VER USUARIO
       
       
       
       
 
        public function mdlEditarUsuario(){#funcion para editar usuario

            /* creamos la variable que contiene el procedimiento almacenado de editar usuario que se utiliza en la funcion;luego creamos 
            la variable this con un estado de false; luego creamos el objeto en el cual instanciamos la clase de conexion; 
            luego se crea una variable la cual ejecutara la funcion conexion y preparara el procedimiento almacenado, se capturaran
             los datos y se ejecutara el procedimiento almacenado */

            $sql = "CALL SpEditarUsuario(?, ?, ?, ?, ?, ?);";  #<-----procedimiento almacenado
            $this -> estado = false;    
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->cedula, PDO::PARAM_INT);
                $stmt -> bindParam ( 2, $this->nombre, PDO::PARAM_STR);
                $stmt -> bindParam ( 3, $this->apellido, PDO::PARAM_STR);
                $stmt -> bindParam ( 4, $this->num_celular, PDO::PARAM_INT);
                $stmt -> bindParam ( 5, $this->f_nacimiento, PDO::PARAM_INT);
                $stmt -> bindParam ( 6, $this->email, PDO::PARAM_STR);
                //$stmt -> bindParam ( 7, $this->contrasena, PDO::PARAM_STR);
           
                $stmt -> execute();
                $this ->estado = true;
               
 
            }catch (PDOException $ex) {
                echo "Hay un error en el dao de registro" . $ex -> getMessage();
            }
            return $this -> estado;  
        }//FIN EDITAR USUARIO
 

        public function mdlEliminarUsuario(){ #funcion para eliminar un usuario

            /* creamos la variable que contiene el procedimiento almacenado de eliminar usuario que se utiliza en la funcion;luego creamos 
            la variable this con un estado de false; luego creamos el objeto en el cual instanciamos la clase de conexion; 
            luego se crea una variable la cual ejecutara la funcion conexion y preparara el procedimiento almacenado, se capturaran
            los datos y se ejecutara el procedimiento almacenado */

            $sql = "CALL SpEliminarUsuario(?);"; #<-----procedimiento almacenado
            $this -> estado = false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam ( 1, $this->cedula, PDO::PARAM_INT);
                $stmt -> execute();
                $this ->estado = true;
            }catch (PDOException $ex) {
                echo "Hay un error en el dao al eliminar el registro" . $ex -> getMessage();
            }
            return $this -> estado;
        } //FIN ELIMINAR USUARIO
 
    } //FIN DE LA CLASE
 
    /*$objDtoregistro = new RegistroUsu ("1048849714", "wilmer", "Daza",4555, 19940531, "WD@GMAIL.COM", "123" );
    $objDaoregistro = new ModelRegistro ( $objDtoregistro );
 
    if ( $objDaoregistro -> mdlEditarUsuario() ) {
        echo "producto modificado";
    } else {
        echo"ha ocurrido un error";
    } */  
   
?>
 
