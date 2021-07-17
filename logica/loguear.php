<?php

			include('conexion.php');
			session_start();

			$usuario = $_POST['usuario'];
			$password = $_POST['password'];

			$sql = $conexion->prepare('SELECT * FROM usuarios WHERE usuario= ? AND password=?');
			$sql->bind_param('ss', $usuario, $password);

			$sql->execute();

			$resultado = $sql->get_result();

			if ($row = $resultado->fetch_assoc()) {
				$_SESSION['username'] = $usuario;
				header("location: ../home.php");
			}else{

				header("location: error.php");
			}			

			?>

