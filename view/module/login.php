
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/login.css">
</head>
<body>
<!-- FORMULARIO INICIO DE SESION-->
    
    <form method="post" class="formulario">
        <div class="bienvenido">¡Bienvenido!</div>
        <i class="fa-solid fa-circle-user icon3"></i>
<!-- INICIA EL CONTENEDOR-->
        <div class="contenedor">
        
            <div class="input-contenedor">             
                <input type="text" name="txtUser" placeholder="Ingresar E-mail">
            </div>
            <div class="input-contenedor">
                <input type="password" name="txtPass" placeholder="Ingresar Contraseña">
            </div>

            
<!-- ENLACES -->
            <a class="link" href="">Recordar Contraseña</a><br/>
            <a class="link2" href="">Cambiar Contraseña</a>
<!-- BOTONES-->        
            <input class="btn" type="submit" value="Iniciar Sesion">
            <a href="view/module/registro.usuario.php"><input class="btn2" type="button" value="Registrar Cuenta"></a>
        </div>
            
    </form>
    <!--CONTRALADOR CONEXION -->
    <?php
    if (isset($_POST["txtUser"])){
        $user = $_POST["txtUser"];
        $pass = $_POST["txtPass"];
        $objCon = new ConexionController();
        $objCon -> ctrLogin($user, $pass);
    }

    ?>

    <div class="frase">
        I LOVE BARBER <i class="fa-solid fa-face-grin-hearts icon2"></i>
    </div>
</body>
</html>
