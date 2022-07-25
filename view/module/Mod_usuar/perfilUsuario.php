<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>5Usuarios</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="../../../view/css/usuariosStyle.css">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header> 
            <div class="hom">
                <a class="homE" href="view/module/home.usuario.php" ><b>HOME</b> l</a>
                <i class="fa-solid fa-house"></i>
            </div>
            <div class="hom1">
                <b>nombre de usuario</b>  
            </div>
            <div>
                <i class="fa-solid fa-face-smile"></i>
            </div>
             
        </header>
        <br>
        <nav class="Boto_usuar5"> 
            <br>
            <div class="Desplegable">
                <button class="btnDesp">Usuario</button>
                <div class="links">
                    <a href="perfilUsuario.php">Ver usuario</a>
                    <a href="EditPerfil.php">Editar Usuario</a>
                    <a href="Eliminar.php">Eliminar Usuario</a>
                </div>
            </div>
            <br>
        </nav>
        <article>
            <fieldset class="DatPers5">

                <legend class="DP5">Perfil De Usuario</legend>
                <div class="IcoUse5">
                    <i class="fa-solid fa-circle-user"></i>
                </div>
                
                <form class="F_perf_usu">
                    <button class="BtnDatsP5">DATOS PERSONALES</button>
                    <button class="BtnD_usu5">DATOS DE USUARIO</button>
                    <br>
                    <br>
                    <div>
                        <input type="text" placeholder="Nombre" class="txt_per_usu5"> 
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="apellido"class="txt_per_usu5"> 
                    </div>
                    <br>
                    <div>
                        <input type="number" placeholder="# Movil"class="txt_per_usu5"> 
                    </div>
                    <br>
                    <div>
                        <input type="date" placeholder="fecha de nacimiento"class="txt_per_usu5">
                    </div>
                    </div>
                </form>
            </fieldset>
        </article>
        <br>
        <footer>
            <div class="frase5">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
    
    </body>
    
</html>