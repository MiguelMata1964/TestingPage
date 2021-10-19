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
	<link rel="stylesheet" type="text/css" href="css/Productos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>TerraNova</title>
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
		<?php
			session_start();
			$user=$_SESSION['Usuario'];
			if ($user=="nora") {
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
</head>
<body>
	<center>
		<form action="comprar.php" method="POST">
		<div id="cuerpo">
	<div id="producto">
		<img src="img/p2.jpg">
		<section><h3>Taladro Inalámbrico 12 V 3/8 Truper Truper</h3>
		<h3>$2,500.00</h3></section>
		<button type="submit" class="btn btn-success" value="1" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p1.jpeg">
		<section><h3>Taladro Inalámbrico Ión Litio 12 V 3/8</h3>
		<h3>$1,615.00</h3></section>
		<button type="submit" class="btn btn-success" value="2" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p3.webp">
		<section><h3>Rotomartillo taladro industrial 1/2", Truper, 16666</h3>
		<h3>$2,726.00</h3></section>
		<button type="submit" class="btn btn-success" value="3" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p4.jpg">
		<section><h3>Taladro 3/8" Profesional TRUPER</h3>
		<h3>$1,375.00</h3></section>
		<button type="submit" class="btn btn-success" value="4" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p5.webp">
		<section><h3>Taladro 3/8 Profesional 380 W Truper 16708</h3>
		<h3>$850.00</h3></section>
		<button type="submit" class="btn btn-success" value="5" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p6.jpg">
		<section><h3>Taladro Inalámbrico 20v Pretul</h3>
		<h3>$895.00</h3></section>
		<button type="submit" class="btn btn-success" value="6" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p7.jpg">
		<section><h4>Juego de herramienta para mecánico 20 piezas</h4>
		<h3>$965.00</h3></section>
		<button type="submit" class="btn btn-success" value="7" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p8.jpg">
		<section><h4>Flexómetro Gripper, contra impacto, 5.5 m, cinta 25 mm</h4>
		<h3>$145.00</h3></section>
		<button type="submit" class="btn btn-success" value="8" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p9.jpg">
		<section><h3>Juego de desarmador tipo matraca, 56 piezas</h3>
		<h3>$355.00</h3></section>
		<button type="submit" class="btn btn-success" value="9" name="p" id="p">Comprar</button>
	</div>
	<div id="producto">
		<img src="img/p10.jpg">
		<section><h4>Juego de herramientas Comfort Grip, 42 piezas</h4>
		<h3>$775.00</h3></section>
		<button type="submit" class="btn btn-success" value="10" name="p" id="p">Comprar</button>
	</div>
	</div>
	</form>
	</center>
</body>