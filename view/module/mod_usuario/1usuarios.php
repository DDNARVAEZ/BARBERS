<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1Usuarios</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="usuariosStyle.css">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <img  class="logo1" src="logo.jpg">
            </div>
            <div class="R_usuar">REGISTRO DE USUARIOS</div> 
        </header>
        <nav class="Boto_usuar"> 
            <br>
            <div class="conte_boto">
                <button class="Botons_stlo" >
                    Registro De Usuario
                </button>
            </div>
            <br>
            <div class="conte_boto">
                <button class="Botons_stlo">Ver Usuario
                    <a href=""></a> </button>
            </div>
            <br>
            <div class="conte_boto">
                <button class="Botons_stlo">Editar Usuario</button>
            </div>
            <br>
            <div class="conte_boto">
                <button class="Botons_stlo">Eliminar o Inhabilitar</button>
            </div>
            <br>
            <div class="Desplegable">
                <button class="btnDesp">Boton Desplegable</button>
                <div class="links">
                    <a href="#">Citas</a>
                    <a href="#">Barberos</a>
                    <a href="#">Agenda</a>
                    <a href="#">Inicio De Sesion</a>
                </div>
            </div>
        </nav>
        <main class="main1">
            <form class="Form_datper">
                <fieldset class="DatPers1">
                    <legend class="Lege_txt1">Datos Personales</legend>
                    <div>
                    <input type="text" placeholder="Nombre" class="BotDatPer"> 
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="apellido"class="BotDatPer"> 
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="# Movil"class="BotDatPer"> 
                    </div>
                    <br>
                    <div>
                        <input type="datetime" placeholder="fecha de nacimiento"class="BotDatPer"> 
                    </div>
                    <br>
                    <button type="reset" class="btnC">Cancelar</button>
                    <button class="btnCo">Continuar</button>
                </fieldset>
            </form>

        </main>
        <footer>
            <div class="frase">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
    
    </body>
    
</html>