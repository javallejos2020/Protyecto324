<html>
<?php
$codFlujo=$_GET["codflujo"];
$codProceso=$_GET["codproceso"];
include "conexion.php";
$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProceso'";

$result=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($result);
$codprocesosiguiente=$fila['codProcesoSiguiente'];
$archivo=$fila['pantalla'];
$tipo=$fila['tipo'];
echo "$archivo";
?>
<body>
  <h1>Motor de Flujo</h1>
  <br>
  
  <form action="controlador.php" method="GET">
  <?php 
  include $archivo;
  ?>
  <input type="hidden" value="<?php echo $codFlujo;?>" name="codflujo"/>
  <input type="hidden" value="<?php echo $codProceso;?>" name="codproceso"/>
  <input type="hidden" value="<?php echo $codprocesosiguiente;?>" name="codprocesosiguiente"/>
  <input type="hidden" name="tipo" value="<?php echo $tipo;?>"/>
  <input type="hidden" value="<?php echo $archivo;?>" name="archivo"/>
  <input type="submit" value="Anterior" name="Anterior"/>
  <input type="submit" value="Siguiente" name="Siguiente"/>
  </form>

</body>
</html>