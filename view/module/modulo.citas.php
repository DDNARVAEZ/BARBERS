<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/modulo.citas.css">
    
    

</head>
<body>

<header class="header">
    <nav class="nav">
        
        <a href="../../view/module/home.usuario.php"><button type="button" class="btn-home">HOME <i class="fa-solid fa-house-user"></i></i></button></a>

    </nav>
</header>

<div class="user">
<div class="imag">
<img src="view/img/colombia.png" class="img-circ"  alt="User Image">
</div>
<div class="info">
<a href="#" class="name">Nombre de usuario</a>
</div>
</div>



<div class="col">
    <h1 class = "titulo">Citas</h1>
<div class="nav" id="tab" role="tablist" aria-orientation="vertical">

<a class="btn btn-app">
<i class="fa-solid fa-calendar-days"></i><br> Solicitar 
</a>

<a class="btn btn-app">
<i class="fa-solid fa-trash-can"></i><br> Eliminar
</a>

<a class="btn btn-app">
<i class="fas fa-edit"></i><br> Editar
</a>

<a class="btn btn-app">
<i class="fa-solid fa-clipboard-list"></i><br> Listar
</a>

</div>
</div>


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">¡Citas!</h3>
</div>

<div class="card-body">
<form>
<div class="form-group">
<label for="exampleInputEmail1">Nombre</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese nombre">



<label for="exampleInputPassword1">Servicio adicional</label>
<select name="servicio" class="form-control" id="exampleInputPassword1">
    <option value="">Agregar servicio</option>
    <option value="">Barba</option>
    <option value="">Mascarilla</option>

</select>


<label for="exampleInputPassword1">Barberia</label>
<select name="servicio" class="form-control" id="exampleInputPassword1">
    <option value="">Seleccionar Barberia</option>
    <option value="">BarberShop</option>
    <option value="">NewyorkInc</option>
</select>


</div>

<div class="form-group2">
<label for="exampleInputEmail1">fecha</label>
<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">



<label for="exampleInputPassword1">hora</label>
<input type="time" class="form-control" id="exampleInputPassword1" placeholder="Password">


<label for="exampleInputPassword1">Barbero</label>
<select name="servicio" class="form-control" id="exampleInputPassword1">
    <option value="">Seleccionar Barbero</option>
    <option value="">Billy</option>
    <option value="">Will</option>
</select>


</div>




<div class="card-footer">
<h1>Diligenciar todos los campos</h1>
</div>


</form>

</div>











<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>