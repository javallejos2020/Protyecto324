<html>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<?php
$codFlujo=$_GET["codflujo"];
$codProceso=$_GET["codproceso"];
echo $codProceso."-------";
include "conexion.php";
$sql="select * from proceso where codFlujo='$codFlujo' and codproceso='$codProceso'";
$result=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($result);
$tipo=$fila['tipo'];
$codprocesosiguiente=$fila['codProcesoSiguiente'];
$archivo=$fila['pantalla'];
echo "$archivo";
?>
<body>

  <?php 
  include 'procesos.php';
  ?>

  <form action="controlador.php" method="GET">
  <?php 
  include $archivo;
  ?>

  <input type="hidden" value="<?php echo $codFlujo;?>" name="codflujo"/>
  <input type="hidden" value="<?php echo $codProceso;?>" name="codproceso"/>
  <input type="hidden" value="<?php echo $codprocesosiguiente;?>" name="codprocesosiguiente"/>
  <input type="hidden" value="<?php echo $tipo;?>" name="tipo" />
  <input type="hidden" value="<?php echo $archivo;?>" name="archivo"/>
  <?php 
  if ($codProceso=='P5' or $codProceso=='P8') {
  //echo $codProceso;  
  echo "<input type=\"submit\" value=\"Anterior\" name=\"Anterior\" style='width:200px; height:40px'/>";
  //echo "-------------------------------------";    
  }else{
    if($codProceso=='P1'){
    echo "<input type=\"submit\" value=\"Siguiente\" name=\"Siguiente\" style='width:200px; height:40px'/> ";
    }else{
      echo "<input type=\"submit\" value=\"Anterior\" name=\"Anterior\" style='width:200px; height:40px'/>";
      echo "<input type=\"submit\" value=\"Siguiente\" name=\"Siguiente\" style='width:200px; height:40px'/>";
    }
  }
  ?>
  </form>
</body>
</html>







