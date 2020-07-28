<?php
	session_start();
	require_once('../conexion.php');
	$usuario=$_SESSION['username'];
	if (!isset($usuario)) {
		header("Location: login.php");
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
<title>Pagina inf 324</title>

<link rel="stylesheet" href="style1.css">
</head>
<body>
	<div id="menu-fondo" >
		<form action="salir.php" method="post">
			<div class="imgcontainer" >
 				<header>
 				<?php	
				$user=$_SESSION['username'];
				?>
				<img src="avatar.png" width="80" height="80" />
				<?php 
				$sql = "select apellidos, nombre from nutriologo where ci_nutriologo like '$user'";
                
				$query = mysqli_query($con,$sql);
				while ($mostrar=mysqli_fetch_array($query)) {
				?>
				<td><?php echo $mostrar['apellidos']?></td>
                <td><?php echo $mostrar['nombre']?></td>
				<?php
				}
				?>	
				<nav>
					<button class="logout_bntSesion" type="submit" name="cerrar">Cerrar Sesion</button>
				</nav>
    			</header>
			</div>
                <br><br><br><br><br><br>
                <center><h2>BIENVENIDO A MI PAGINA DE INF-324</h2></center>
                <a href="../motor.php?codflujo=F1&codproceso=P1"><button type="button" class="register_btn">Inicar Flujo</button></a>
        </form>
        </div>
</body>
</html>
<?php 
} 
?>