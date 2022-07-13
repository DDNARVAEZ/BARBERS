<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home.usuario</title>
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/home.usuario.css">
    
    
    
</head>
<body>

<!-- contenedores -->
    <div class="contenedor1">
        <img src="view/img/logo.jpg" alt="logo" width= "100" heigth= 200>
        <div class="contenedor2">
            <i class="fa-solid fa-circle-user icon" ></i> 
        
    </div>

    
      <!-- cerrar sesion -->  
    
    <form method="post" class="formulario">
        <input type="hidden" name="txtOcu">
        <input type="submit" class="salir" value=" SALIR">      
    </form>

    <?php
        if (isset($_POST["txtOcu"])){
            $_SESSION["login"] = false;
            header("location:index.php");
        }
    ?>
    <!-- fecha actual-->
    <div class="date">
        <?php
        date_default_timezone_set("America/Bogota");
        echo date(" D / d / M / Y");
        
        ?>
    </div>

    <!-- ingreso a modulos -->
    
    <div class="contenedor4">
    <a href=""><input class="btn-mod-user" type="button" value="   USUARIO"></a>
    </div>
    
    <div class="contenedor5">
    <a href=""><input class="btn-mod-citas" type="button" value="   CITAS"></a>
    </div>

    <div class="frase">
        I LOVE <br> BARBER <i class="fa-solid fa-face-grin-hearts icon-love"></i>
    </div>



    
</body>
</html>