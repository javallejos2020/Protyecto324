<?php
	session_start();
	require_once('../conexion.php');	
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style1.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Iniciar Sesion</h2></center>
			<div class="imgcontainer">
				<img src="avatar.png" alt="Avatar" class="avatar">
			</div>
			<form action="login.php" method="get">
			<div class="inner_container">
				<label><b>Usuario</b></label>
				<input type="text" name="username" required>
				<label><b>Password</b></label>
				<input type="password" name="password" required>
				<button class="login_button" name="login" type="submit">Entrar</button>
				
			</div>
			<?php
			if(isset($_GET['login']))
			{
				$username=$_GET['username'];
				$password=$_GET['password'];
				$query = "select l.ci, l.clave from login l, estudiante e where l.ci='$username' and l.clave='$password' and e.ci_estudiante='$username'";
				echo $query;
				$query_run = mysqli_query($con,$query);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					header( "Location: principal.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No existe el usuario")</script>';
					}
				}

				$username=$_GET['username'];
				$password=$_GET['password'];
				$query = "select l.ci, l.clave from login l, nutriologo n where l.ci='$username' and l.clave='$password' and n.ci_nutriologo='$username'";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					header( "Location: principalnutri.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No existe el usuario")</script>';
					}
				}

				
			}
			?>
		</form>	
		
	</div>
</body>
</html>