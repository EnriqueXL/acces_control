<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="login.php">Instituto Tecnologico de Tlaxcala</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
</nav>

<div class="container-fluid">
<h2 class="form-heading">Registrate</h2>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <p>Por favor ingresa un nombre de usuario</p>
   </div>
    <form id="Login" method="POST">

        <div class="form-group">


            <input type="user" class="form-control" name="usuar" placeholder="Ingresa tu usuario">

        </div>
          <p>Por favor ingresa una contraseña</p>
        <div class="form-group">

            <input type="password" class="form-control" name="contras" placeholder="Ingresa Tu contraseña"><br>
            <input type="password" class="form-control" name="aaa" placeholder="Confirma tu contraseña">

        </div>
        <div class="form-group">
            <p>Por favor selecciona un Area</p>
            <select name="OS">
               <option value="1">Administracion</option> 
               <option value="2">Ejecutivo</option> 
               <option value="3">Mercadotecnia</option>
               <option value="10">Diseño</option> 
               <option value="11">Implementacion</option> 
               <option value="12">Otro</option> 
            </select>

        </div>
          <p>Por favor ingresa una contraseña</p>
        <div class="form-group">

            <p>Elegir tu genero </p>
            <p>
              Femenino: <input type="radio" name="citizenship"/><br>
              Masculino: <input type="radio" name="citizenship" /><br>
              Otro: <input type="radio" name="citizenship" />
            </p>

        </div>
        <a href="login.php"><button type="submit" class="btn btn-primary">Registrarse</button></a>

    </form>
    </div>
</div>
</div>
<?php
if($_POST){
  $u=$_POST['usuar'];
  $p=$_POST['contras'];
  $link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"usuarios");
mysqli_query($link,"insert into personan value ('$a','$b')");
mysqli_close($link);
}
?>
</html>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>