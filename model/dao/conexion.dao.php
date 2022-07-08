<?php
class ModelConexion{

//ATRIBUTOS
    private $user;
    private $pass;

    //CONSTRUCTOR

    public function __construct($user,$pass){

        $this -> user = $user;
        $this -> pass = $pass;
    }
     

    public function getLogin(){
        
        $resultSet = false;


        $sql = "SELECT CONTRASEÑA FROM USUARIOS
        WHERE EMAIL = ? AND CONTRASEÑA = ?";

        try {
            $con = new Conexion();
            $stmt = $con -> conexion() -> prepare($sql);
            $stmt -> bindParam(1, $this -> user, PDO::PARAM_STR);
            $stmt -> bindParam(1, $this -> pass, PDO::PARAM_STR);
            
            $stmt -> execute();
            $resultSet = $stmt;                
            
        } catch (PDOException $e) {
            echo "Error en el metodo buscar password " . $e->getMessage();
        }
        return $resultSet;
    }
       
       



    
}
?>