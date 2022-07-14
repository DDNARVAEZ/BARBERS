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
            <div class="R_usuar6">REGISTRO DE USUARIOS</div> 
        </header>
        <nav class="Boto_usuar6"> 
            <br>
            <div class="conte_boto6">
                <button class="Botons_stlo6" >
                    Registro De Usuario
                </button>
            </div>
            <br>
            <div class="conte_boto6">
                <button class="Botons_stlo6">Ver Usuario
                    <a href=""></a> </button>
            </div>
            <br>
            <div class="conte_boto6">
                <button class="Botons_stlo6">Editar Usuario</button>
            </div>
            <br>
            <div class="conte_boto6">
                <button class="Botons_stlo6">Eliminar o Inhabilitar</button>
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
        <main class="cont_elim">
            <div class="DP">
                <h2>Eliminar-Inhabilitar Usuario</h2>
            </div>
            <div class="IcoUse">
                <i class="fa-solid fa-circle-user"></i>
            </div>
            <br>
            <br>
            <form class="cont_Elimi_usu">
                <br>
                <br>
                <button onclick='resultado()' class="BtnDatsP1" >Eliminar Usuario</button>
                <button onclick='resultado1()' class="BtnDatsP">Inhabilitar Usuario</button>
                <br>
                <br>
                <br>
                <br>
                <div>
                 <div>
                    <button class="btnCanc" type="submit">Cancelar</button>
                 </div>
                </div>
            </form>

        </main>
        <footer>
            <div class="frase">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
        <script type="text/javascript" src="funciones.js"></script>
    </body>
    
</html>