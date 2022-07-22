<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1Usuarios</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="../../../view/css/usuariosStyle.css">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="logo1u">
                <img  class="logo1a" src="logo.jpg">
            </div>
            <div class="R_usuari">REGISTRO DE USUARIOS</div> 
        </header>
        <main class="main1">
            <form class="Form_datper">
                <fieldset class="DatPers1">
                    <legend class="Lege_txto">Datos Personales</legend>
                    <div>
                    <br>
                    <input type="text" placeholder="Nombre" class="BotDatPer" required> 
                    </div>
                    <br>
                    <br>
                    <div>
                        <input type="text" placeholder="apellido"class="BotDatPer" required> 
                    </div>
                    <br>
                    <br>
                    <div>
                        <select name="indicativos" class="indi">
                            <option value="colombia">+57</option>
                            <option value="argentina">+54</option>
                            <option value="peru">+51</option>
                            <option value="Bolivia">+591</option>
                        </select><input type="number" placeholder="# Movil"class="BotDa_Num" required> 
                    </div>
                    <br>
                    <br>
                    <div>
                        <input type="date" placeholder="fecha de nacimiento"class="BotDatPer" required>
                        <br>
                        *Fecha de Nacimiento 
                    </div>
                    <br>
                    <button type="reset" class="btnCa">Cancelar</button>
                    <button class="btnCon">Continuar</button>
                </fieldset>
            </form>

        </main>
        <footer>
            <div class="frase1">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
    
    </body>
    
</html>