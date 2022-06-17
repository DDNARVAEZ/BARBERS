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
    
    <form class="formulario">
        <div class="bienvenido">¡Bienvenido!</div>
        <div class="contenedor">
        
            <div class="input-contenedor">
                <i class="fa-solid fa-message icon"></i>
                <input type="text" placeholder="Correo Electronico">
            </div>
            <div class="input-contenedor">
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>
            
            <input type="submit" value="Login" class="button">
            <input type="submit" value="Registrar Cuenta" class="button" href="registro.usuario.php">
            <p>Al registrarte, aceptas nuestras condicones de uso y politicas de privacidad</p>
            <p>¿No tienes una cuenta?<a class="link" href="registro.usuario.php">Registrate</a></p>
          

        </div>
    </form>
    <div class="frase">
        I LOVE BARBER <i class="fa-solid fa-face-grin-hearts icon2"></i>
    </div>
</body>
</html>