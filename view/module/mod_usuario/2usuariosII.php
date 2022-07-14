<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2Usuarios</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="usuariosStyle.css">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <img  class="logo2" src="logo.jpg">
            </div>
            <div class="R_usuar1">REGISTRO DE USUARIOS</div> 
        </header>
        <nav class="Boto_usuar1"> 
            <br>
            <div class="conte_boto1">
                <button class="Botons_stlo1" >
                    Registro De Usuario
                </button>
            </div>
            <br>
            <div class="conte_boto1">
                <button class="Botons_stlo1">Ver Usuario
                    <a href=""></a> </button>
            </div>
            <br>
            <div class="conte_boto1">
                <button class="Botons_stlo1">Editar Usuario</button>
            </div>
            <br>
            <div class="conte_boto1">
                <button class="Botons_stlo1">Eliminar o Inhabilitar</button>
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
        <main class="main">
            <br>
            <form class="Form_datusu">
                <fieldset class="Dat_usu">
                    <legend class="Lege_txt">Datos De Usuario</legend>
                    <br>
                    <div>
                    <input type="email" placeholder="E-mail" class="Bot_emai">
                    <br>
                    *este funcionara como tu usuario
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="Contraseña"class="BotDatUsu">
                        <br>
                        *minimo 6 caracteres maximo 12 
                        
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="Confirmar Contraseña"class="BotDatUsu"> 
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