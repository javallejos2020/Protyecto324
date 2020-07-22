<?php 

require_once('conexion.php');
session_start();
	echo "<table border=".'1'." cellspacing=1 cellpadding=2 style=".'font-size: 8pt'.">";
	echo "<tr><td>Fecha reservada</td><td>";
	echo "Hora reservada</td><td>Peso</td><td>Talla</td><tr>";	
	$nutri =$_SESSION['username']; 
	$query = "select p.codU, r.fecha_reserva, r.hora_reserva 
	from paciente p, reserva r  
	where p.codU='$nutri'and r.codU='$nutri'
	order by fecha_reserva";
        $result = mysqli_query($con,$query);
  		while ($fila=mysqli_fetch_row($result)) {
			echo "<tr>";
			echo "<td>".$fila[0]."</td>";
			echo "<td>".$fila[1]."</td>";
			echo "<td>".$fila[2]."</td>";
			echo "</tr>";
		}
	echo "</table";

?>