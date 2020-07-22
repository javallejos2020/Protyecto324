<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Registro de Medidas</h2>
<div>
	<h3>Historial</h3>
	<?php
	$ci=$_GET['usuario'];
	include 'conexion.php';
	if (!empty($ci)) {
		$sql="SELECT * FROM paciente Where codU like '$ci'";
			$result=mysqli_query($con,$sql);
	echo'<table>';
			echo'<tr>';
				echo'<th>CI</th><th>Nombre</th><th>Apellidos</th><th>Peso</th><th>Talla</th>';
			echo'</tr>';
			while ($col=mysqli_fetch_array($result) ) {
				echo '<tr>';
				echo '<td>'.$col[0].'</td>'.'<td>'.$col[1].'</td>'.'<td>'.$col[2].'</td>'.'<td>'.$col[3].'</td>'.'<td>'.$col[4].'</td>';
				echo'</tr>';
			}
	echo'</table>';
	}
	if (isset($_GET["peso"]) and isset($_GET["talla"])) {
		$peso=$_GET["peso"];
		$talla=$_GET["talla"];
		$sql="UPDATE paciente SET peso = '$peso',talla= '$talla' WHERE paciente.codU ='$ci'";
		$result=mysqli_query($con,$sql);
	}
	 ?>
</div>
<div>
<form action="registrarmedidas.inc.php" method="GET">
<table>
	<tr>
		<th>Peso :</th><td><input type="text" name="peso"></td>
	</tr>
	<tr>
		<th>Talla :</th><td><input type="text" name="talla"></td>
	</tr>
</table>
<input type="submit" name="Enviar datos">
</form>
</div>
</body>
</html>