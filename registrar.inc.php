<?php require_once('conexion.php'); ?>
<h1>Registrar Usuarios - Control Nutricional</h1>
<form action="registramedidas.inc.php" method="post">
	<label><b>Usuario</b></label><input type="text" name="usuario" required><br><br>
	<label><b>Nombres</b></label><input type="text" name="nombre" required><br><br>
	<label><b>Apellidos</b></label><input type="text" name="apellido" required><br><br>
	<button name="registrar" type="submit">Registrar</button><br>
</form>
<?php 
	if (isset($_POST['registrar'])) {
		$usuario=$_POST['usuario'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$query="INSERT INTO paciente VALUES ('$usuario','$nombre','$apellido','','');";
		$query_run = mysqli_query($con,$query);
			
	}
?>