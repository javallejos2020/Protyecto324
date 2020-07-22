<?php 
session_start(); 
if (isset($_SESSION['usuario']))
{
	$nom=$_SESSION['usuario'];
}
include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Principal Nutricionista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<header><h2>Bienvenido<?php if(!empty($nom))echo $nom;?></h2> </header>
<body>
	<form action="consulta.inc.php" method="GET">
		<table>
			<tr>
				<td>CI del Universitario:</td>
				<td><input type="text" name="ci"></td>
				<td><input type="submit" value="Verifica"></td>
			</tr>
		</table>
		</form>
		<caption>Consultas Pendientes</caption>
		<table>
			<tr>
				<th>CI</th><th>Fecha</th><th>Hora</th>
			</tr>
			<?php
			$sql="SELECT * FROM reserva";
			$result=mysqli_query($conn,$sql);
			while ($col=mysqli_fetch_array($result) ) {
				echo '<tr>';
				echo '<td>'.$col[0].'</td>'.'<td>'.$col[1].'</td>'.'<td>'.$col[2].'</td>';
				echo'</tr>';
			}
			?>
		</table>
		<?php 
		if (!empty($_GET["ci"])) {
		# code...
			$ci=$_GET["ci"];
			$sql="SELECT u.ci,u.nombre,u.apellidos,r.fecha_reserva,r.hora_reserva FROM reserva as r,usuario as u WHERE '$ci'like u.ci and r.codU like '$ci'";
	 //echo $sql;
			
			$result=mysqli_query($conn,$sql);
			$col=mysqli_fetch_array($result);

			if (!empty($col)) {

			echo '<table style="borde:solid">';
			echo'<tr>
				<th>CI</th><th>Nombre</th><th>Apellidos</th><th>Fecha</th><th>Hora</th>
			</tr>';
			$result=mysqli_query($conn,$sql);
			while ($col=mysqli_fetch_array($result)) {
		// echo $col[1];
				echo '<tr>';
				echo '<td>'.$col[0].'</td>'.'<td>'.$col[1].'</td>'.'<td>'.$col[2].'</td>'.'<td>'.$col[3].'</td>'.'<td>'.$col[4].'</td>';
				echo'</tr>';
			}
			echo '</table>';
		}else{
			echo '<script type="text/javascript">alert("No realizo una reserva de consulta")</script>';
		}
	}
		?>	
	</table>
	<form action="registrar.inc.php" method="GET">
	<input type="submit" value="Reserva" name="reserva">
	</form>
</body>
</html>