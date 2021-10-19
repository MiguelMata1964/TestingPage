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
	<link rel="stylesheet" type="text/css" href="css/Ubicacion.css">
	<title>TerraNova</title>

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
		<li><a href="cerrar.php">Cerrar Sesion</a></li>
		</ul>
		</li> 
		</ul>
		</div>
		</section>
	</center>
	<center>
		<section id="bordemapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d548.8392031408455!2d-99.15327583949315!3d19.607094658932294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f664fac85fc5%3A0x8a9a2f5820a3c2c4!2sAv.%20Estado%20de%20M%C3%A9xico%202745%2C%20Las%20Torres%2C%2054943%20Buenavista%2C%20M%C3%A9x.!5e1!3m2!1ses-419!2smx!4v1625353588230!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" id="mapa"></iframe>
	</section>

	</center>
	
</body>
<footer>
	
</footer>