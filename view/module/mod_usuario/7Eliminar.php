<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>7Usuarios</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="usuariosStyle.css">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="hom2">
                <a class="home2" href="view/module/home.usuario.php" ><b>HOME</b> l</a>
                <i class="fa-solid fa-house"></i>
            </div>
            <div class="hom1a">
                <b>nombre de usuario</b>  
            </div>
            <div>
                <i class="fa-solid fa-face-smile"></i>
            </div> 
        </header>
        <nav class="Boto_usuar7"> 
            
            <div class="Desplegable7">
                <button class="btnDesp7">Usuario</button>
                <div class="links">
                    <a href="5perfilUsuario.html">Ver usuario</a>
                    <a href="6EditPerfil.html">Editar Usuario</a>
                    <a href="7Eliminar.html">Eliminar Usuario</a>
                </div>
            </div>
        </nav>
        <article>
            <fieldset class="cont_elim">
                <legend class="DP7">Eliminar o inhabilitar</legend>
                <br>
                <div class="IcoUse7">
                    <i class="fa-solid fa-circle-user"></i>
                </div>
                <div class="name-">
                    <p >Nombres-Apellidos del usuario</p> 
                </div>
                <form class="cont_Elimi_usu">
                    <br>
                    <br>
                    <br>
                    <button onclick='resultado()' class="BtnDatsP1" >Eliminar Usuario</button>
                    <button onclick='resultado1()' class="BtnDatsP">Inhabilitar Usuario</button>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div>
                    <br>
                    <div>
                        <button class="btnCanc" type="submit">Cancelar</button>
                    </div>
                </form>
            
            
            </fieldset>
        </article>
    
        <footer>
            <div class="frase">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
        <script type="text/javascript" src="F_Mod_Usu.js"></script>
    </body>
    
</html>