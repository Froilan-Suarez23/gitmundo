<?php
session_start();
$sesion = $_SESSION['username'];

if(!isset($sesion)){
    header("location: login.php");

}else{
}
?>

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
	<title>GitMundo Home..</title>
</head>
<body>
	<br>
<div class="container">
 
   <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="#">.......</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">.......</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">.......</a>
    </li>
    <li class="nav-item ">
    <?php

    echo "<a href='logica/salir.php'>Salir</a>";
    ?>
    </li>
  </ul>
</div>


<div class="container mt-3">
  <h2>Bienvenido</h2>
  <p>Esta es la materia de Desarrollo Web Integral</p>
  <div class="media border p-3">
    <img src="imag/froilan.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4><?php echo "$sesion"; ?></h4>
      <p>En la materia de web integral se realiza una aplicación de votos en línea para los alumnos de la universidad, en dicha aplicación el alumno con su matrícula podrá ejercer su voto en algunos aspectos propios de la universidad, tales como el proceso de elección de estudiantes.</p>      
    </div>
  </div>
</div>



</body>
</html>

