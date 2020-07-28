<?php 
include 'conexion.php';
if (isset($_POST["Verifica"])):
	$ci=$_POST["ci"];
	$facu=$_POST["facultad"];
	$fecha=$_POST["fecha"];
	$mensaje='';
     $obt=$_POST["ci"];


	

	$sql="SELECT * FROM cronograma WHERE facultad like 'Agronomia' and('$fecha' >=fecha_inicio AND '$fecha' <= fecha_fin)";
	$result=mysqli_query($con,$sql);
	
// SELECT * FROM cronograma WHERE facultad like 'Agronomia' and('2020-08-01' >=fecha_inicio AND '2020-08-01' <= fecha_fin)
// SELECT * FROM cronograma as c,estudiante as e WHERE e.facultad like 'Agronomia' and('2020-08-01' >=fecha_inicio AND '2020-08-01' <= fecha_fin) AND (e.ci like '3')
// SELECT * FROM estudiante as e WHERE (e.ci like '3') AND (e.facultad like 'Ciencias Puras y Naturales')
		// echo'<tr><td>'.$mensaje.'</td></tr>';
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
				$sw='si';

			}


			if(empty($mensaje)){
				echo'<tr><td>NO SE ENCUENTRA EN EL RANGO</td></tr>';
				$sw='no';
			}
	echo '</table><br><caption>EL Universitario</caption><table class="datos">';

			$sql="SELECT * FROM estudiante as e WHERE (e.ci_estudiante like '$ci') AND (e.facultad like '$facu')";
			$mensaje='NO SE ENCUENTRA EN LA CARRERA';
			$result=mysqli_query($con,$sql);
//			echo $sql;
			while($fila=mysqli_fetch_row($result))
			{
				$mensaje='';
				echo "<tr>";
				echo "<td>".$fila[1]."</td>";
				echo "<td>".$fila[2]."</td>";
				echo "<td>".$fila[3]."</td>";
				echo "<td>".$fila[4]."</td>";
				echo "</tr>";

			}
			if (!empty($mensaje)) {
				$sw='no';
				echo'<tr><td colspan="4">'.$mensaje.'</td></tr>';
			}
			
echo "</table>";


	

endif ?>
<p>Campo que se llena una vez verificado</p>
<br>
<input type="text" name="cond" value='<?php if(!empty($sw))echo $sw; ?>'>
<br><br>


