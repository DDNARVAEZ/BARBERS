<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>6Usuarios</title>
        
        <link rel="stylesheet" href="usuariosStyle.css"> <!-- link del CSS  -->
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script> <!-- script de la libreria font awesome  -->
        

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
        <nav class="Boto_usuar6"> 
           
            <div class="Desplegable6">
                <button class="btnDesp6">Usuario</button>
                <div class="links">
                    <a href="5perfilUsuario.html">Ver usuario</a>
                    <a href="6EditPerfil.html">Editar Usuario</a>
                    <a href="7Eliminar.html">Eliminar Usuario</a>
                </div>
            </div>
        </nav>
        <article>
            <fieldset class="DatPers6">

                <legend class="DP6">Editar Perfil</legend>
                <div class="IcoUse6">
                    <i class="fa-solid fa-circle-user"></i>
                </div>
                
                <form class="F_edi_per">
                    <button class="BtnDatsP6">DATOS PERSONALES</button>
                    <button class="BtnD_usu6">DATOS DE USUARIO</button>
                    <br>
                    <br>
                    <div>
                        <input type="text" placeholder="Nombre" class="txt_edi_usu6" required> 
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="apellido"class="txt_edi_usu6" required> 
                    </div>
                    <br>
                    <div>
                        <input type="number" placeholder="# Movil"class="txt_edi_usu6" required> 
                    </div>
                    <br>
                    <div>
                        <input type="date" placeholder="fecha de nacimiento"class="txt_edi_usu6" required>
                    </div>
                    <div>
                        <button class="btnGuar" type="submit">Guardar Cambios</button>
                    </div>
                </form>
            </fieldset>
        </article>
        
        <footer>
            <div class="frase">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
    
    </body>
    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>