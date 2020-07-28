<?php 
include 'conexion.php';
if (isset($_POST["Verifica"])):
	$facu=$_POST["facultad"];
	$fecha=$_POST["fecha"];
	$mensaje='';
	$sql="SELECT * FROM cronograma WHERE facultad like '$facu' and('$fecha' >=fecha_inicio AND '$fecha' <= fecha_fin)";
	$result=mysqli_query($con,$sql);
	echo '<table class="datos">';
	while($fila=mysqli_fetch_row($result))
			{
				$mensaje='Si se encuentra en el rango de la fecha';
				echo "<tr>";
				echo "<td>".$fila[0]."</td>";
				echo "<td>".$fila[1]."</td>";
				echo "<td>".$fila[2]."</td>";
				echo "</tr>";
				echo'<tr><td colspan="3">'.$mensaje.'</td></tr>';
				echo '<tr><td colspan="3">'.$fecha.'</td></tr>';
				$mensaje='SI'
			}
			if(empty($mensaje)){
				echo'<tr><td>NO SE ENCUENTRA EN EL RANGO</td></tr>';
				$mensaje='NO';
			}
	echo '</table>';

endif ?>
<p>Campo que se llena una vez verificado</p>
<br>
<input type="text" name="cond" value='<?php if(!empty($mensaje))echo $mensaje; ?>'>
<br><br>


