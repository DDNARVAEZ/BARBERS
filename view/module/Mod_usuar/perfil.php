<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3Usuarios</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="../../../view/css/usuariosStyle.css">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <header>
            <div class="logo3">
                <img  class="logoi3" src="logo.jpg">
            </div>
            <div class="R_usuar3">REGISTRO DE USUARIOS</div> 
        </header>
        <nav>
            
        </nav>
        <main class="main3" >
            <fieldset class="FPerf">
                <legend class="Lege_txt3">Perfil</legend>

                <div class="txtfotPe">
                    Foto De Perfil
                </div> 
                <div class="IcoUse">
                    <div>
                        <img class="img_perf" src="img/colombia.png" alt="" id="img-imagen">
                    </div>
                </div>
                <form class="for_3">
                        <br>
                    <div class="ImgPer">
                         <p class="txtFot">Subir una foto</p>
                        <div class="icon3">
                         <i class="fa-solid fa-circle-arrow-up" id="icon_bot"></i>
                    </div>
                    <input class="img3" type="file" name="imagen" id="img_3" onchange="vista_preliminar(event)" >
                    </div>
                        <fieldset class="Savatar"> 
                            <legend class="Lege_txt3a">Seleccionar Avatar </legend>
                                <div>
                                    <img class="imgns active" src="../../img/colombia.png">
                                    <img class="imgns active" src="../../img/_Ninja-2-512.webp">
                                    <img class="imgns active" src="../../img/cientifico.png">
                                    <br>
                                    <img class="imgns active" src="../../img/man (2).png">
                                    <img class="imgns active" src="../../img/super-poder.png">
                                    <img class="imgns active" src="../../img/147140.png">

                                </div>
                        </fieldset>
                        <br> 
                    <div class="btn3">
                        <button class="btnC3" type="reset">Cancelar</button>
                        <button class="btnCo3" type="submit">Continuar</button>
                    </div>         

                </form>
                  
            </fieldset>    
                

        </main>
        <footer>
            <div class="frase3">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
    <script src="../../js/F_Mod_Usu.js "></script>
    </body>
     <!-- <div>
        <img id="img_avat1" class="img_avat1" src="img/man (2).png">
    </div> 
    <div>
        <img class="img_avat2" src="img/cientifico.png">
    </div>  
    <div>
        <img class="img_avat3" src="img/147140.png">
    </div>
    <div>
        <img class="img_avat4" src="img/colombia.png">
    </div>
    <div>
        <img class="img_avat5" src="img/super-poder.png">
    </div>
    
    <div>
        <img class="img_avat6" src="img/_Ninja-2-512.webp">
    </div> -->
</html>