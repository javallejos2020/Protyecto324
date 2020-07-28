<?php
include "conexion.php";
$codProceso=$_GET["codproceso"];
/*$sql="select codProceso from procesocon where (codProcesoSi='$codProceso' || codProcesoNo='$codProceso')";

$result=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($result);

$codProceso=$fila['codProceso'];
*/
echo "--------".$codProceso."-----";

?>