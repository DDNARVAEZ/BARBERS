<?php
    if (isset($_GET['ruta']))/* aqui podemos encontrar las rutas del proyecto*/
    {switch ($_GET['ruta']) {
        case 'Usuario':
            require_once "view/module/modulo.usuario.php";
        break;
        case 'Citas':
            require_once "view/module/modulo.citas.php";
        break;
        case 'registrar':
            require_once "view/module/Form_Usua.php";
        break;
       
        default:
            require_once "view/module/home.usuario.php";
        break;
       
    }
 }else{require_once "view/module/home.usuario.php";
    }
       
 
?>
 
