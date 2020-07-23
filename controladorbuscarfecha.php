<?php
include "conexion.inc.php";
$cond=$_GET["cond"];
$sql="select * from proceso_cond where codFlujo='$codFlujo' and codProceso='$codProceso'";
$result=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($result);

if($cond=='si'or $cond=='SI'){
	$codProceso=$fila['codProcesoSI'];
	echo "Si".$codProceso;
}else{
	$codProceso=$fila['codProcesoNO'];
	echo "No".$codProceso;
}


?>