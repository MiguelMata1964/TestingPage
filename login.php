<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Formulario.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel = "preconnect" href = "https://fonts.googleapis.com">
  <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
  <link href = "https: //fonts.googleapis.com/css2? family = Roboto: ital, wght @ 1300 & display = swap "rel =" stylesheet ">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="">
	<title>Login</title>
</head>
<body background="fondo.jpg">
<section class="form-register">
    <center><h1>Login</h1></center>
    <form method="POST" name="login" class="formulario" action="iniciar_sesion.php">
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="password" name="contra" id="contra" placeholder="Ingrese su Contraseña">
        <input type="submit" class="btn btn-success">
    <p><a href="formulario.php">¿Aun no tienes cuenta?</a></p>
    </form>
  </section>	
</body>
</html>