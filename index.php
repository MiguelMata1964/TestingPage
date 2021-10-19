<?php
  session_start();
  if (!isset($_SESSION['Usuario'])) {
    echo '
    <script>
    alert("iniciar sesion por favor");
    </script>
    ';
    header("location: login.php");
    session_destroy();
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>TerraNova</title>
	<style>
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>
	<section id="encabezado">
	<center>
		<img src="img/logo.png" id="logo">
		<br>
		<div id="tiramenu">
		<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="Productos.php">Productos</a></li>
		<li><a href="Somos.php">¿Quienes Somos?</a></li>
		<li><a href="Ubicacion.php">Ubicacion</a></li>
		<li><a href="Formulario.php">Registrame</a></li>
    <?php
      session_start();
      $user=$_SESSION['Usuario'];
      if ($user=="miguel") {
        echo '<li><a href="ordenes.php">Ordenes</a></li>;';
        }  
      ?>
    <li><a href="cerrar.php">Cerrar Sesion</a></li>
		</ul>
		</li> 
		</ul>
		</div>
		</section>
	</center>
	<center>
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img3.jpg" alt="Los Angeles" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" alt="Chicago" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="img1.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</center>
</body>