<br>
<?php 
  if (isset($_POST['ver'])) {?>
    <table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
        <tr>
          <td align="center"><font face="crono" size="4"><b>CI</b></font></td>
          <td align="center"><font face="crono" size="4"><b>NOMBRE</b></font></td>
          <td align="center"><font face="crono" size="4"><b>APELLIDOS</b></font></td>
          <td align="center"><font face="crono" size="4"><b>PESO</b></font></td>
          <td align="center"><font face="crono" size="4"><b>TALLA</b></font></td>
          <td align="center"><font face="crono" size="4"><b>ESTADO</b></font></td>
          </tr>
    <?php $ci=$_POST['ci'];
    //echo $ci."MMMMMM";
    $sql="select ci_estudiante, nombre, apellidos, peso, talla, estado from historial where ci_estudiante='$ci'";
    //echo $sql."_______";
    $result=mysqli_query($con, $sql);
        //echo $result."--------";
          while($row = mysqli_fetch_array($result))
          {
           echo "<tr><td width=\"16%\"><font face=\"crono\" size=\"3\">".$row["ci_estudiante"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["nombre"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["apellidos"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["peso"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["talla"]."</font></td>";
           echo "<td width=\"16%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["estado"]."</font></td></tr>";
          }
     ?>
 	 </table>
     <?php }
  
  ?>  
  <br>