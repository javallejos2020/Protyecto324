<?php
include "conexion.php";
$codFlujo=$_GET["codflujo"];
$codProceso=$_GET["codproceso"];
echo "////////".$codProceso;
$codProcesoSiguiente=$_GET["codprocesosiguiente"];
$tipo=$_GET["tipo"];

$archivo=$_GET["archivo"];
include "controlador".$archivo;
if($tipo=='C'){
	echo "CCCC";
	//echo "controlador".$codProceso;
	$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProceso'";
	if (isset($_GET["Anterior"]) ) {	
		if ($archivo=='validarnuevo.php') {
			$sql="select codProceso from procesocon where (codProcesoSi='$codProceso' || codProcesoNo='$codProceso')";
				//echo $sql;
		}else{
		$sql="select * from proceso where codFlujo='$codFlujo' and codProcesoSiguiente='$codProceso'";
		echo $sql."AAAAAAA";
		}
	}
	$result=mysqli_query($conn,$sql);
	//echo "$sql";
	$fila=mysqli_fetch_array($result);
	$codprocesoEnvia=$fila['codProceso'];
	$archivoEnvia="motor.php?codflujo=".$codFlujo."&codproceso=".$codprocesoEnvia;
	echo $archivoEnvia;
	header("Location: ".$archivoEnvia);
}
else{
	//echo "else";
	if (isset($_GET["Anterior"]) ) {
		if ($codProcesoSiguiente=='P10') {
				$sql="select codProceso from procesocon where (codProcesoSi='$codProceso' || codProcesoNo='$codProceso')";
				echo $sql;
		}else{	
			if ($codProceso=='P6') {
				$sql="select codProceso from procesocon where (codProcesoSi='$codProceso' || codProcesoNo='$codProceso')";
					echo "HOLA SARAHI".$sql;
			}else{
				$sql="select * from proceso where codFlujo='$codFlujo' and codProcesoSiguiente='$codProceso'";
				echo "sarahi".$sql;		
				}
			}
	}
	if(isset($_GET["Siguiente"]))
	{
		$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProcesoSiguiente'";
	}
}
//include "conexion.inc.php";

$result=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($result);
//controla el error del anterior
if (isset($fila['codProceso'])) {
	$codprocesoEnvia=$fila['codProceso'];
	//echo $fila['codProceso'];
	$archivoEnvia="motor.php?codflujo=".$codFlujo."&codproceso=".$codprocesoEnvia;
	echo $archivoEnvia."++++++";
	header("Location: ".$archivoEnvia);
}
?>