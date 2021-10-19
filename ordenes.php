<?php 
	$conexion=mysqli_connect('localhost','root','root1234');
	$base=mysqli_select_db($conexion,'terranova');
	
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/ordenes.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Ordenes</title>
</head>
<body>
    <div id="menu">
    <ul>
    <li><a href="index.php">Inicio</a></li>
    </ul>
  </div>  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Producto</th>
        <th>Cliente</th>
        <th>Apellidos</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql="SELECT o.id, o.nombre AS producto, u.nombre , u.apellidos, o.precio  FROM usuarios u, ordenes o WHERE o.id_usuario=u.id;";
      $resultado=mysqli_query($conexion,$sql);
      while ($mostrar=mysqli_fetch_array($resultado)){        
       ?>
      <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['producto'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['apellidos'] ?></td>
        <td><?php echo $mostrar['precio'] ?></td>
        <td><div class="btn-group">
            <div class="px-1">
            <form method="post" action="eliminar.php"> 
            <input type="hidden" name="eliminarRegistro" value="<?php echo $mostrar['id'];?>">
            <button type="submit" class="btn btn-danger">Eliminar<i class="fas fa-trash"></i></button>
          </form>
             
            </div>
          </div></td>
      </tr>
      <?php 
        }
       ?>
    </tbody>
  </table>
  
</body>
</html>