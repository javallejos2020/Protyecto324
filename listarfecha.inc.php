<?php require_once('conexion.php'); ?>
<form action="listarfecha.inc.php" method="post" enctype="multipart/form-data">

	<label><b>Introduzca fecha</b></label>
	<input type="date" name="fecha" min="2020-07-01"  required><br><br>
	<button name="mostrarfechas" type="submit">Mostrar fechas ocupadas</button><br><br><br>    	
</form>
<form action="listarfecha.inc.php" method="post" enctype="multipart/form-data">
	<label><b>CI</b></label><input type="text" name="usuario" required><br>
	<label><b>Fecha Reserva</b></label><input type="date" name="fechare" min="2020-07-01" required><br>
	<label><b>Hora Reserva</b></label><input type="time" name="horare" required><br>
	<button name="reservar" type="submit">Reservar fecha</button><br>
</form>
<form action="listarfecha.inc.php" method="post" enctype="multipart/form-data">
	<button name="actualizar" type="submit">Actualizar</button><br>
</form>
<?php
	echo "<table border=".'1'." cellspacing=1 cellpadding=2 style=".'font-size: 8pt'.">";
	echo "<tr><td>CI</td><td>Fecha</td><td>";
	echo "Hora</td><tr>";	

	$query = "select codU, fecha_reserva, hora_reserva from reserva order by fecha_reserva";
        		$result = mysqli_query($con,$query);
  				while ($fila=mysqli_fetch_row($result)) {
					echo "<tr>";
					echo "<td>".$fila[0]."</td>";
					echo "<td>".$fila[1]."</td>";
					echo "<td>".$fila[2]."</td>";
					echo "</tr>";
				}
	echo "</table";
    if(isset($_POST['mostrarfechas'])){
    	$fecha=$_POST['fecha'];
    	//echo $fecha;
		$query = "select codU, fecha_reserva, hora_reserva from reserva where '$fecha'=fecha_reserva order by fecha_reserva";
        $result = mysqli_query($con,$query);
  		while ($fila=mysqli_fetch_row($result)) {
			echo "<tr>";
			echo "<td>".$fila[0]."</td>";
			echo "<td>".$fila[1]."</td>";
			echo "<td>".$fila[2]."</td>";
			echo "</tr>";
		}
	echo "</table>";
        
	}else{
		if (isset($_POST['reservar'])) {
		$usuario=$_POST['usuario'];
		$fecha=$_POST['fechare'];
		$hora=$_POST['horare'];
		$query = "INSERT INTO reserva VALUES ('$usuario','$fecha','$hora');";
		$query_run = mysqli_query($con,$query);		
		$sql = "select codU, fecha_reserva, hora_reserva from reserva order by fecha_reserva";
        $result = mysqli_query($con,$sql);
        echo "**********";
  		while ($fila=mysqli_fetch_row($result)) {
			echo "<tr>";
			echo "<td>".$fila[0]."</td>";
			echo "<td>".$fila[1]."</td>";
			echo "<td>".$fila[2]."</td>";
			echo "</tr>";
		}
	echo "</table>";
         
		}else {
			if(isset($_POST['actualizar'])){
				$query = "select codU, fecha_reserva, hora_reserva from reserva order by fecha_reserva";
        		$result = mysqli_query($con,$query);
  				while ($fila=mysqli_fetch_row($result)) {
					echo "<tr>";
					echo "<td>".$fila[0]."</td>";
					echo "<td>".$fila[1]."</td>";
					echo "<td>".$fila[2]."</td>";
					echo "</tr>";
				}
	echo "</table>";       
			}
		}
	}     
?>
