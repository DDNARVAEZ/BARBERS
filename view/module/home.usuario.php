<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home.usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view/css/home.usuario.css">
    
    
    
</head>
<body>

<!-- contenedores -->
    <div class="contenedor1">
        <img src="../img/logo.jpg" alt="logo" width= "100" heigth= 200>
        <div class="contenedor2">
        <i class="fa-solid fa-circle-user icon" ></i> 
    </div>

        <div class="users">
            <div class="imags">
            <img src="../img/colombia.png" class="img-circs"  alt="imgUser">
            </div>
            <div class="infos">
            <a href="#" class="name">Nombre de usuario</a>
            </div>
        </div>
        
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
    
    <a href=""><button type="button" class="btn-mod-user"><i class="fa fa-bell"></i> Usuarios</button></a>
    
    <a href="view/module/modulo.citas.php"><button type="button" class="btn-mod-citas"><i class="fa-solid fa-clock"></i> Citas </button></a>
   

    <!-- <div class="frase">
        I LOVE <i class="fa-solid fa-face-grin-hearts icon-love"></i><br> BARBER 
    </div>
-->


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   
</body>
</html>