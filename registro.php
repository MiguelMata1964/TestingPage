
<?php  
	$name=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['correo'];
	$contra=$_POST['contra'];
	$contra2= hash('sha512',$contra);
	$conexion=mysqli_connect('localhost','root','root1234');
	$consulta="SELECT*FROM usuarios where nombre='$name' AND $apellidos='apellidos' AND $correo='correo'";
	$validar_usuario=mysqli_query($conexion,$consulta);
	if ($validar_usuario=="ok") {
		
	}else{
	if (!$conexion) {
		echo "error de conexion";
	}else{
		echo "<br>exito de conexion";
		$base=mysqli_select_db($conexion,'terranova');
		if (!$base){
			echo "<br>error al conectar con la base de datos <br>";
		}else{
			echo "<br>Exito al conectar con la bd <br>";
			$sql="INSERT INTO usuarios (id, nombre, apellidos, correo, contraseña) VALUES (NULL, '$name', '$apellidos', '$correo', '$contra2');";
			$resultado=mysqli_query($conexion,$sql);
			if (!$resultado){
				echo "error al ingresar los datos";
			}else{
				echo $sql;
					header("location: login.php");
					exit();
			}
		}
	}		
}
?>