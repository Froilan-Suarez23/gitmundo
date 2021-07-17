<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>GitMundo Login</title>
</head>
<body>
	<br>

	<div class="container">
	   <ul class="nav nav-tabs">
	  
	    <li class="nav-item">
	      <a class="nav-link" href="index.php">Inicio</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="contacto.php">Contactos</a>
	    </li>
	  </ul>
</div>


	
	<div class="container-fluid">
  
	  <div class="row">
	    <div class="col" style="background-color:border;"></div>
	    <div class="col" style="background-color:border;">
	    	<div class="container p-3 my-3 border">
		<div class="container">
		  <h2></h2>
		  <form action="logica/loguear.php" method="POST" class="was-validated">
		    <div class="form-group">
		      <label for="usuario">Usuario:</label>
		      <input type="text" class="form-control" required id="usuario" placeholder="Escriba su Usuario" name="usuario">
		      <div class="valid-feedback">Verificar.</div>
    		  <div class="invalid-feedback">Ingrese su usuario.</div>
		    </div>
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control" required id="pwd" placeholder="Su password" name="password">
		      <div class="valid-feedback">Verificar.</div>
    		  <div class="invalid-feedback">Ingrese su password.</div>
		    </div>
		    <div class="form-group form-check">
		      <label class="form-check-label">
		        <input class="form-check-input" type="checkbox" name="remember"> Recordar
		      </label>
		    </div>
		    <div class="center">
		    	<button type="submit" class="btn btn-primary center">Ingresar</button>
		    </div>
		  </form>
		</div>
	</div>
	</div>
	    <div class="col" style="background-color:border	;"></div>
	  </div>
	</div>

	
</body>
</html>