<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>
		GitMundo Volver
	</title>
</head>
<body>
<br>
<br>
<div class="container">
    <div >
		<div class="text-center" style="border:2px solid gray;padding:50px;">

			<?php

			require 'conexion.php';
			session_start();

			$usuario = $_POST['usuario'];
			$password = $_POST['password'];

			$sql = "SELECT COUNT(*) as contar from usuarios where usuario ='$usuario' and password = '$password'";

			$consulta = mysqli_query($conexion, $sql);
			$array = mysqli_fetch_array($consulta);

			if($array['contar']>0){
				$_SESSION['username'] = $usuario;
				header("location: ../home.php");
			}else{

				echo "<img src='../imag/error.png' width='70' height='70'>";
				echo "<h3 class='text-info specialHead text-center'><strong> Parece que no conciden los su datos.</strong></h3>";
				echo "<a href='../login.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Volver</strong> </a>";
				
			}

			?>
		</div>
	</div>
</div>
</body>
</html>

