<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../../view/css/usuariosStyle.css">
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="view/css/sweetalert2.min.css">
    <script src="view/js/sweetalert2.all.min.js"></script>
   
</head>
 
<body>
    <header>
        <div class="logo1u">
            <img class="logo1a" src="../img/logo.jpg">
        </div>
        <div class="R_usuari">REGISTRO DE USUARIOS</div>
    </header>
    <main class="main1">
        <form class="Form_datper" method="POST">
            <fieldset class="DatPers1">
                <legend class="Lege_txto">Datos Personales</legend>
                <div>
                    <br>
                    <input type="text" id="txtnombre" name="txtnombre" placeholder="Nombres" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="text" id="txtapellido" name="txtapellido" placeholder="Apellidos" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="text" name="txtcedula" placeholder="cedula" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <select class="indi">
                        <option>+57</option>
                        <option>+54</option>
                        <option>+51</option>
                        <option>+591</option>
                    </select><input type="number" name="txtnumerocel" placeholder="# Movil" class="BotDa_Num" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="date" name="txtfecha" placeholder="Fecha De Nacimiento" class="BotDatPer" required>
                    <br>
                    *Fecha de Nacimiento
                </div>
                <br>
                <div>
                    <input type="email" name="txtemail" placeholder="E-mail" class="Bot_emai" required>
                    <br>
                    *este funcionara como tu usuario
                </div>
                <br>
                <br>
                <div>
                    <input type="password" name="txtcontraseña" placeholder="Contraseña" class="BotDatUsu" required>
                    <br>
                    *minimo 6 caracteres maximo 12
 
                </div>
                <br>
                <br>
                <br>
                <p class="TyC"><input type="checkbox" required>Acepto terminos y condiciones <a href="ver TyC">ver tyc</a> </p>
 
                <p class="TyC"><input type="checkbox" required>Acepto tratamientos de datos personales </p>
                <br>
                <div class="b">
                    <button type="submit" class="btnCo4" onclick="validar(event);">Guardar</button>
                </div>
                <br>
            </fieldset>
        </form>
        <?php
        if (isset($_POST["txtcedula"])) {
            $objCtrUsu = new ControllerRegistro();
            $objCtrUsu->ctrInsertarUsuario(
                $_POST["txtcedula"],
                $_POST["txtnombre"],
                $_POST["txtapellido"],
                $_POST["txtnumerocel"],
                $_POST["txtfecha"],
                $_POST["txtemail"],
                $_POST["txtcontraseña"]
            );
        }
 
        ?>
        <script src=../js/crud.js "></script>
    </body>
</html>
 
