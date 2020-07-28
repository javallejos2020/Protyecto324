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
				$sql = "select apellidos, nombre from estudiante where ci_estudiante like '$user'";
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
                <table border="1" align="center">
                    <tr>
                        <td>CI</td>
                        <td>Peso</td>
                        <td>Talla</td>
                        <td>Estado</td>
                    </tr>
                <?php
                $user=$_SESSION['username'];
                //echo $user."---------------";
                $sql="select ci_estudiante, peso, talla, estado from valoracion where ci_estudiante like '$user'";
                $query = mysqli_query($con,$sql);
                //echo $query;
                while ($mostrar=mysqli_fetch_array($query)) {
                ?>
                <tr>
                <td><?php echo $mostrar['ci_estudiante']?></td>
                <td><?php echo $mostrar['peso']?></td>
                <td><?php echo $mostrar['talla']?></td>
                <td><?php echo $mostrar['estado']?></td>
                </tr>
                <?php
                }
                ?>
                </table>
        </form>
        </div>
</body>
</html>
<?php 
} 
?>