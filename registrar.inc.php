<?php require_once('conexion.php'); ?>
<h1>Registrar Usuarios - Control Nutricional</h1>
<form action="registramedidas.inc.php" method="get">
	<label><b>Usuario</b></label><input type="text" name="usuario" required><br><br>
	<label><b>Nombres</b></label><input type="text" name="nombre" required><br><br>
	<label><b>Apellidos</b></label><input type="text" name="apellido" required><br><br>
	<button name="registrar" type="submit">Registrar</button><br>
</form>
<?php 
	if (isset($_GET['registrar'])) {
		$usuario=$_GET['usuario'];
		$nombre=$_GET['nombre'];
		$apellido=$_GET['apellido'];
		$query="INSERT INTO paciente VALUES ('$usuario','$nombre','$apellido','','');";
		$query_run = mysqli_query($con,$query);
			
	}
?>