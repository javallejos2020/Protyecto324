<?php
$con=mysqli_connect("localhost","javallejos","123456");
mysqli_select_db($con,"academico_3");
if(!$con){
	die("No hay conexion:".mysql_connect_error());
}

?>
<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"flujo2");
if(!$conn){
	die("No hay conexion:".mysql_connect_error());
}
?>