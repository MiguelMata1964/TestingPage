<?php 
session_start();
	$conexion=mysqli_connect('localhost','root','root1234');
	$nombre=$_POST['nombres'];
	$contra=$_POST['contra'];
	$contra2= hash('sha512',$contra);
	if (!$conexion) {
		//echo "error de conexion";
	}else{
		//echo "Exito de conexion<br>";
		//echo $nombre;
		//echo $contra;
		$base=mysqli_select_db($conexion,'terranova');
		$consulta="SELECT*FROM usuarios where nombre='$nombre' AND contraseña='$contra2'";
		if (!$base) {
			//echo "error al conectar con la base de datos";
		}else{
			//echo "<br>Conexion con la base de datos exitosa";
			$validar_usuario=mysqli_query($conexion,$consulta);
			if (!$validar_usuario) {
				//echo "El usuario no exite o los datos son incorrectos";
			}else{
				//echo "<br>Exito al verificar el usuario";
				if (mysqli_num_rows($validar_usuario)>0) {
					$_SESSION['Usuario']=$nombre;
					header("location: index.php");
					exit();
				}else{
					echo '
					<script>
					alert("Usuario no existente Por favor verifique los datos");
					window.location="login.php";
					</script>
					';
				}
			}
		}
	}
 ?>