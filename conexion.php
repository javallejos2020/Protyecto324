<?php
$con=mysqli_connect("localhost","javallejos","123456");
mysqli_select_db($con,"academico_3");
if(!$con){
	die("No hay conexion:".mysql_connect_error());
}

?>