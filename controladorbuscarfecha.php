<?php
include "conexion.php";
$cond=$_GET['cond'];
echo "$cond";
$sql="select * from procesocon where codFlujo='$codFlujo' and codProceso='$codProceso'";
$result=mysqli_query($conn,$sql);

$fila=mysqli_fetch_array($result);

if($cond=='si'or $cond=='SI'){
	$codProceso=$fila['codProcesoSi'];
	echo "Si".$codProceso;
}else{
	$codProceso=$fila['codProcesoNo'];
	echo "No".$codProceso;
}


?>