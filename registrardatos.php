<html>
<head>
	<title>Registrar Estudiante</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo1.css">
</head>
<body>
       <?php 

    include("conexion.php");
   
if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['ci']) >= 1
	            && strlen($_POST['facultad']) >= 1 && strlen($_POST['carrera']) >= 1) {
					 $nombre=trim($_POST['nombre']);
	                 $apellidos=trim($_POST['apellidos']);
	                 $ci=trim($_POST['ci']);
	                 $facultad=trim($_POST['facultad']);
	                 $carrera=trim($_POST['carrera']);
	                 $consulta = "INSERT INTO estudiante(ci_estudiante,nombre,apellidos,facultad,carrera) VALUES ('$ci','$nombre','$apellidos','$facultad','$carrera')";
					 $consulta2 = "INSERT INTO login(ci,clave) VALUES ('$ci','$ci')";
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

   