
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home.usuario</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="view/css/home.usuario.css">
        <link rel="stylesheet" href="view/css/sweetalert2.min.css">
        <script src="view/js/sweetalert2.all.min.js"></script>
       
       
       
    </head>
    <body>
 
    <!-- contenedores -->
      <div class="contenedor1">
          <img src="view/img/logo.jpg" alt="logo" width= "100" heigth= 200>
        
        </div>

        <div class="user">
            <div class="imag">
                <img src="view/img/colombia.png" class="img-circ" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="name">Nombre de usuario</a>
            </div>
        </div>
 
            
 
 
 
       
        <!-- cerrar sesion -->  
       
        <form method="post" class="formulario">
            <input type="hidden" name="txtOcu">
            <input type="submit" class="salir" value=" SALIR ">      
        </form>
 
        <?php
            if (isset($_POST["txtOcu"])){
                $_SESSION["login"] = false;
                header("location:index.php");
            }
        ?>

      </div>
        <!-- fecha actual-->
        <div class="date">
            <?php
            date_default_timezone_set("America/Bogota");
            echo date(" D / d / M / Y");

            echo " <script>
            let timerInterval
Swal.fire({
  title: 'Bienvenido!',
  html: 'Interactua con BARBERS en <b></b> milliseconds.',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
            
            </script>"
            
           
            ?>
        </div>
 
        <!-- ingreso a modulos -->
      <div class="cont-user">
     
        <a href="index.php?ruta=registrar"><button type="button" class="btn-mod-user"><i class="fa-solid fa-address-card"></i> Registrar Usuario</button></a>
        <a href="index.php?ruta=Usuario"><button type="button" class="btn-mod-user"><i class="fa fa-bell"></i> Usuarios</button></a>
       
        <a href="index.php?ruta=Citas"><button type="button" class="btn-mod-user"><i class="fa-solid fa-clock"></i> Citas </button></a>
        </div>

      <div class="cont-barb">
     
          <a href="index.php?ruta=registrar"><button type="button" class="btn-mod-user"><i class="fa-solid fa-address-card"></i> Registrar Barbero</button></a>
          <a href="index.php?ruta=Usuario"><button type="button" class="btn-mod-user"><i class="fa fa-bell"></i> Barberos</button></a>
    
          <a href="index.php?ruta=Citas"><button type="button" class="btn-mod-user"><i class="fa-solid fa-clock"></i> Agenda </button></a>
      </div>

      <div class="frase">
        I LOVE <i class="fa-solid fa-face-grin-hearts icon-love"></i><br>BARBER
      </div>

       
            
        
 
       


 
 
 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   
</body>
</html>
 
