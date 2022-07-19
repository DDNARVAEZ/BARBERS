<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3Usuarios</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="usuariosStyle.css">
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
                        <img class="img_perf" src="" alt="" id="img-imagen">
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
                            <br>
                            <br>
                            <i class="fa-solid fa-cat"></i>
                            <i class="fa-solid fa-child-reaching"></i>
                            <i class="fa-solid fa-crow"></i>
                            <i class="fa-regular fa-face-grin-tongue"></i>
                            <i class="fa-solid fa-user-astronaut"></i>
                            <i class="fa-solid fa-poo"></i>
                            <br>
                            <br>
                            <br>
                            <i class="fa-solid fa-ghost"></i>
                            <i class="fa-solid fa-dragon"></i>
                            <i class="fa-solid fa-hippo"></i>
                            <i class="fa-solid fa-dog"></i>
                            <i class="fa-regular fa-face-smile-wink"></i>
                            <i class="fa-solid fa-user-ninja"></i>
                              
                        </div>
                        </div>
                    </fieldset>
                        <br>
                    <div class="btnCA">
                        <button type="reset" class="btnC3">Cancelar</button>
                        <button class="btnCo3">Continuar</button>
                    </div>    
                    
                </form>
            </fieldset>    
                

        </main>
        <footer>
            <div class="frase3">
                <h2> I LOVE BARBER    <i class="fa-solid fa-face-grin-hearts icon2"></i></h2>
            </div>
          
        </footer>
            
        
    <script src="./funciones.js"></script>
    </body>
    php
</html>