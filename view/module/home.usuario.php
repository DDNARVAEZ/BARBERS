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
        <i class="fa-solid fa-circle-user icon a" > user</i>
        
        </div>
        
    
    <form method="post" class="formulario">
    
        <div class= >
        <input type="hidden" name="txtOcu">
        <input type="submit" value="SALIR"> 
        <i class="fa-solid fa-arrow-right-to-bracket"></i>
        </div>
        
    </form>

    </div>
    <?php
        if (isset($_POST["txtOcu"])){
            $_SESSION["login"] = false;
            header("location:index.php");
        }



    ?>



    
</body>
</html>