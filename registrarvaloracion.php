<html>
<head>
	<title>Valoracion Nutricional</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	
	<?php 

	include("conexion.php");
	
	if (isset($_POST['register'])) {
		if (strlen($_POST['ci']) >= 1 && strlen($_POST['peso']) >= 1 && strlen($_POST['talla']) >= 1 && strlen($_POST['estado']) >= 1) {
			$ci=trim($_POST['ci']);
			$peso=trim($_POST['peso']);
			$talla=trim($_POST['talla']);
			$estado=trim($_POST['estado']);
			$consulta = "INSERT INTO valoracion(ci_estudiante,peso,talla,estado) VALUES('$ci','$peso','$talla','$estado')";
			$consulta2 = "INSERT INTO historial(ci_estudiante,nombre,apellidos,peso,talla,estado) VALUES('$ci','','','$peso','$talla','$estado')";
			$resultado = mysqli_query($con,$consulta);
			$resultado2 = mysqli_query($con,$consulta2);
			if ($resultado) {
				?> 
				<h3 class="ok">¡Registrado correctamente!</h3>
				<?php
			} else {
				?> 
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
				<?php
			}
		}   else {
			?> 
			<h3 class="bad">¡Por favor complete los campos!</h3>
			<?php
		}
	}

	?>
</body>
</html>