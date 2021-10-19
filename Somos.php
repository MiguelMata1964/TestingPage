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
	<link rel="stylesheet" type="text/css" href="css/Quien.css">
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
		<div id="cuerpo">
			<section id="cultura">
				<h1>Mision</h1>
			<p> "Satisfacer a nuestros clientes a través de la excelencia en la calidad de nuestros productos y servicios."</p>
			<img src="img/logo.png">
			</section>
			<section id="cultura">
			<h1>Visión</h1>
			<p>Ser reconocidos como distribuidores y detallistas líderes en proveer soluciones completas en materiales de ferretería, productos de línea industrial y semi-industrial</p>
			<img src="img/calidad.png">
		</section>
		</div>	
	</center>
</body>
<footer>
	
</footer>