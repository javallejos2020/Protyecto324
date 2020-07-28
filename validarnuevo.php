<h2>¿Eres nuevo?</h2>
<?php 
include 'conexion.php';
if (isset($_POST['envia'])) {
	if (!empty($_POST["ci"])) {
		$ci=$_POST["ci"];
		$sql="SELECT * FROM historial WHERE ci_estudiante='$ci'";
		// echo $sql;
		$result=mysqli_query($con,$sql);
		$fila=mysqli_fetch_array($result);
if (!$fila) {
echo "<h2>NO SE ENCUENTRA REGISTRADO</h2>";
$mensaje='SI';
}else{
echo'<table class="datos">';
$mensaje='NO';
	echo'<tr>';
		echo'<td>'.$fila[0].'</td>';
		echo'<td>'.$fila[1].'</td>';
		echo'<td>'.$fila[2].'</td>';
	echo'</tr>';
echo'</table>';
}
	}
}
?>
 <br>
<input type="text" name="cond" value='<?php if(!empty($mensaje)) echo($mensaje); ?>'>
<br>
