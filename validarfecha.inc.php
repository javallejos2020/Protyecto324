<?php 
require_once('conexion.php');
session_start();
	echo "<table border=".'1'." cellspacing=1 cellpadding=2 style=".'font-size: 8pt'.">";
	echo "<tr><td>Fecha reservada</td><td>";
	echo "Hora reservada</td><td>Peso</td><td>Talla</td><tr>";	
	//$user =$_SESSION['username']; 
	$user="1";
	$query = "select p.codU, r.fecha_reserva, r.hora_reserva, p.peso, p.talla 
	from paciente p, reserva r  
	where p.codU='$user'and r.codU='$user'
	order by fecha_reserva";
        $result = mysqli_query($con,$query);
  		while ($fila=mysqli_fetch_row($result)) {
			echo "<tr>";
			echo "<td>".$fila[1]."</td>";
			echo "<td>".$fila[2]."</td>";
			echo "<td>".$fila[3]."</td>";
			echo "<td>".$fila[4]."</td>";
			echo "<td>".$fila[4]."</td>";
			echo "</tr>";
		}
	echo "</table>";
?>