<?php require_once('conexion.php'); 
?>
<form action="listarfecha.inc.php" method="post" enctype="multipart/form-data">

	<label><b>Introduzca fecha</b></label>
	<input type="date" name="fecha" min="2020-07-01"  required><br><br>
	<button name="mostrarfechas" type="submit">Mostrar fechas ocupadas</button><br><br><br>
	<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
		<td><font face="fechora"><b>Cod Usuario</b></font></td>
        <td><font face="fechora"><b>Fecha</b></font></td>
        <td><font face="fechora"><b>Hora</b></font></td>
        </tr>
	<?php
    if(isset($_POST['mostrarfechas'])){
    	$fecha=$_POST['fecha'];
    	echo $fecha;
		$query = "select codU, fecha_reserva, hora_reserva from reserva where '$fecha'=fecha_reserva order by fecha_reserva";
        $result = mysqli_query($con,$query);
  
         while($row = mysqli_fetch_array($result))
         {
            echo "<tr><td width=\"25%\"><font face=\"fechora\">" . 
               $row["codU"] . "</font></td>";
            echo "<td width=\"25%\"><font face=\"fechora\">" . 
               $row["fecha_reserva"] . "</font></td>";
            echo "<td width=\"25%\"><font face=\"fechora\">" . 
               $row["hora_reserva"] . "</font></td></tr>";
          }
	}     
    ?>   
    </table>	
</form>
<form action="listarfecha.inc.php" method="post" enctype="multipart/form-data">
	<label><b>CI</b></label><input type="text" name="usuario" required><br>
	<label><b>Fecha Reserva</b></label><input type="date" name="fechare" min="2020-07-01" required><br>
	<label><b>Hora Reserva</b></label><input type="time" name="horare" required><br>
	<button name="reservar" type="submit">Reservar fecha</button><br>
	
	<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
		<td><font face="fechora"><b>Cod Usuario</b></font></td>
        <td><font face="fechora"><b>Fecha</b></font></td>
        <td><font face="fechora"><b>Hora</b></font></td>
        </tr>
	<?php 
	if (isset($_POST['reservar'])) {
		$usuario=$_POST['usuario'];
		$fecha=$_POST['fechare'];
		$hora=$_POST['horare'];

		$query = "INSERT INTO reserva VALUES ('$usuario','$fecha','$hora');";
		$query_run = mysqli_query($con,$query);
		
		$query = "select codU, fecha_reserva, hora_reserva from reserva order by fecha_reserva";
        $result = mysqli_query($con,$query);
  
         while($row = mysqli_fetch_array($result))
         {
            echo "<tr><td width=\"25%\"><font face=\"fechora\">" . 
               $row["codU"] . "</font></td>";
            echo "<td width=\"25%\"><font face=\"fechora\">" . 
               $row["fecha_reserva"] . "</font></td>";
            echo "<td width=\"25%\"><font face=\"fechora\">" . 
               $row["hora_reserva"] . "</font></td></tr>";
          }
	}
	?>
</form>
