<?php
include "conexion.php";
$cond=$_GET["cond"];
$sql="select * from procesocon where codFlujo='$codFlujo' and codProceso='$codProceso'";
$result=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($result);

if($cond=='si'or $cond=='SI'){
	$codProceso=$fila['codProcesoSi'];
	echo "Si".$codProceso;
}else{
	if ($cond=='no'or $cond=='NO') {
	$codProceso=$fila['codProcesoNo'];
	echo "No".$codProceso;		
	}
}


?>