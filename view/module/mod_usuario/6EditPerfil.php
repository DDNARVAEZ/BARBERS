<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>6Usuarios</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="usuariosStyle.css">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <img  class="logo1" src="logo.jpg">
            </div>
            <div class="R_usuar5">REGISTRO DE USUARIOS</div> 
        </header>
        <nav class="Boto_usuar5"> 
            <br>
            <div class="conte_boto5">
                <button class="Botons_stlo5" >
                    Registro De Usuario
                </button>
            </div>
            <br>
            <div class="conte_boto5">
                <button class="Botons_stlo5">Ver Usuario
                    <a href=""></a> </button>
            </div>
            <br>
            <div class="conte_boto5">
                <button class="Botons_stlo5">Editar Usuario</button>
            </div>
            <br>
            <div class="conte_boto5">
                <button class="Botons_stlo5">Eliminar o Inhabilitar</button>
            </div>
            <br>
            <div class="Desplegable">
                <button class="btnDesp">Boton Despegable</button>
                <div class="links">
                    <a href="citas">Citas</a>
                    <a href="Barberos">Barberos</a>
                    <a href="Agenda">Agenda</a>
                    <a href="Inicio De Sesion">Inicio De Sesion</a>
                </div>
            </div>
        </nav>
        <main class="Cont_Edit">
            <div class="DP">
                <h2>Editar Perfil</h2>
            </div>
            <div class="IcoUse">
                <i class="fa-solid fa-circle-user"></i>
            </div>
            <form class="FEditPer">
                <button class="BtnDatsP1">DATOS PERSONALES</button>
                <button class="BtnDatsP">DATOS DE USUARIO</button>
                <br>
                <br>
                <div>
                    <input type="text" placeholder="Nombre" class="txt_edit_per"> 
                 </div>
                 <br>
                 <div>
                     <input type="text" placeholder="apellido"class="txt_edit_per"> 
                 </div>
                 <br>
                 <div>
                     <input type="text" placeholder="# Movil"class="txt_edit_per"> 
                 </div>
                 <br>
                 <div>
                     <input type="datetime" placeholder="fecha de nacimiento"class="txt_edit_per"> 
                 </div>
                 
                 <div>
                    <button class="btnGuar" type="submit">Guardar Cambios</button>
                 </div>
                </div>
            </form>

        </main>
        <footer>
            <div class="frase">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
    
    </body>
    
</html>