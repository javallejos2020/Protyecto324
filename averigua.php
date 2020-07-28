<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cronograma</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header id="main-header">
		<a id="logo-header" href="#">
			<img src="img/logoumsa.png" width="145">
		</a> <!-- / #logo-header -->
		<nav>
			<ul>
				<span class="site-name">UMSA - Universad Mayor de San Andrés</span>
			</ul>
		</nav><!-- / nav -->
	</header><!-- / #main-header -->
	<section id="main-content">
		<article>
			<header>
				<h1>Cronograma</h1>
			</header>
			<div class="content">
				<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
				<tr>
    			<td align="center"><font face="crono" size="4"><b>FACULTAD</b></font></td>
    			<td align="center"><font face="crono" size="4"><b>FECHAS</b></font></td>
    			<td align="center"><font face="crono" size="4"><b>HORA DE ATENCION</b></font></td>
    			<!--<td align="center"><font face="crono" size="4"><b>FECHA FIN</b></font></td>
    			<td align="center"><font face="crono" size="4"><b>HORA FIN</b></font></td>-->
    			</tr>   
				<?php
				include "conexion.php";
				$sql="SELECT facultad,concat_ws(' ',fecha_inicio,' Al ',' ', fecha_fin) as Fechas, concat_ws(' ',hora_inicio,'   A   ', hora_fin) as Hora_Atencion FROM cronograma order by fecha_inicio";
				$result=mysqli_query($con, $sql);
				//echo $result."--------";
    			while($row = mysqli_fetch_array($result))
    			{
    			 echo "<tr><td width=\"40%\"><font face=\"crono\" size=\"4\">".$row["facultad"]."</font></td>";
    			 echo "<td width=\"30%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["Fechas"]."</font></td>";
    			 //echo "<td width=\"17.5%\" align=\"center\"><font face=\"crono\" size=\"4\">".$row["fecha_fin"]."</font></td>";
    			 echo "<td width=\"30%\" align=\"center\"><font face=\"crono\" size=\"3\">".$row["Hora_Atencion"]."</font></td>";
    			 //echo "<td width=\"17.5%\" align=\"center\"><font face=\"crono\" size=\"4\">".$row["hora_fin"]."</font></td></tr>";
    			}
				?>
				</table>
			</div>
		</article> <!-- /article -->
	</section> <!-- / #main-content -->
</body>
</html>




