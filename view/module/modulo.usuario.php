<!DOCTYPE html>
<html lang="en">
 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="view/css/modulo.usuario.css">
          <!-- DataTables -->
        <link rel="stylesheet" href="view/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 
 
 
    </head>
 
    <body>
 
        <header class="header">
            <nav class="nav">
                <a href="index.php?ruta"><button type="button" class="btn-home">HOME <i class="fa-solid fa-house-user"></i></i></button></a>
            </nav>
        </header>
 
        <div class="user">
            <div class="imag">
                <img src="view/img/colombia.png" class="img-circ" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="name">Nombre de usuario</a>
            </div>
        </div>
 
        <div class="col">
            <h1 class="titulo">Usuario</h1>
            <div class="nav" id="tab" role="tablist" aria-orientation="vertical">
                <a href="index.php?ruta=Citas" class="btn btn-app">
                    <i class="fas fa-clock"></i><br> CITAS
                </a>
            </div>
        </div>
 
 
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Datos De Ususario</h3>
            </div>
 
            <div class="card-body">
                <table id="td-Registro" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Numero Celular</th>
                            <th>Fecha Nacimiento</th>
                            <th>Email</th>
                            <th>Contrasena</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $objCtrUsu = new  ControllerRegistro();
                        $listaRegistro = $objCtrUsu -> ctrVerUsuario();
                       
                        foreach($listaRegistro as $dato){
                       
                            echo"
                                <tr>
                                    <td>" . $dato["CEDULA"] .       "</td>
                                    <td>" . $dato["NOMBRE"] .       "</td>
                                    <td>" . $dato["APELLIDO"] .     "</td>
                                    <td>" . $dato["NUM_CELULAR"] .  "</td>
                                    <td>" . $dato["F_NACIMIENTO"] . "</td>
                                    <td>" . $dato["EMAIL"] .        "</td>
                                    <td>" . $dato["CONTRASENA"] .   "</td>
                                    <td>
                                    <button type='button' class='btn btn-danger'><i class='fa fa-trash-o'></i></button>
                                    <button type='button' class='btn btn-info' data-toggle='modal' data-target='#modal-modificar'onclick='modificar(this.parentElement.parentElement);'><i class='fa fa-edit'></i></button>
 
                                       
                                       
                                    </td>
                                </tr>
                            ";
                        }  
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
 
       
       
       
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <!-- DataTables -->
        <script src="view/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="view/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>    
   
        <script>
            $(function () {
            $('#td-Registro').DataTable()
            })
        </script>
      <div class="modal modal-info fade" id="modal-modificar">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Datos De Usuario</h4>
              </div>
              <div class="modal-body">
                <!-- FORMULARIO EDIT-->
                <form class="Form_datper" method="POST" id="form_edi">
               
                   
                    <div>
                        <br>
                        <input type="text" id="txtnombre" name="txtnombre" placeholder="Nombres" class="BotDatPer" required>
                    </div>
                    <br>
                    <div>
                        <input type="text" id="txtapellido" name="txtapellido" placeholder="Apellidos" class="BotDatPer" required>
                    </div>
                    <br>
                    <div>
                        <input type="text" id="txtcedula" name="txtcedula" placeholder="cedula" class="BotDatPer" required>
                    </div>
                    <br>
                    <div>
                        <select class="indi">
                            <option>+57</option>
                            <option>+54</option>
                            <option>+51</option>
                            <option>+591</option>
                        </select><input type="number" id="txtnumerocel" name="txtnumerocel" placeholder="# Movil" class="BotDa_Num" required>
                    </div>
                    <br>
                    <div>
                        <input type="date" id="txtfecha" name="txtfecha" placeholder="Fecha De Nacimiento" class="BotDatPer" required>
                        <br>
                        *Fecha de Nacimiento
                    </div>
                    <br>
                    <div>
                        <input type="email" id="txtemail" name="txtemail" placeholder="E-mail" class="Bot_emai" required>
                        <br>
                        *este funcionara como tu usuario
                    </div>
                    <br>
                    <div>
                        <input type="password" id="txtcontraseña" name="txtcontraseña" placeholder="Contraseña" class="BotDatUsu" required>
                        <br>
                        *minimo 6 caracteres maximo 12
 
                    </div>  
                </form>
 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info " data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-info">Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <script src=../js/crud.js "></script>
    </body>
   
</html>
 
 
