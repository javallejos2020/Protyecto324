<?php require_once('conexion.php');
/*delete from reserva
where fecha_reserva='2020-07-24'*/
while ($fila=mysqli_fetch_row($result)) {
			echo "<tr>";
			echo "<td>".$fila[0]."</td>";
			echo "<td>".$fila[1]."</td>";
			echo "<td>".$fila[2]."</td>";
			echo "</tr>";
}

?>