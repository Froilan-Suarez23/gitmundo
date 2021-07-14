<?php

$host = "localhost";
$usuario = "root";
$passwor = "";
$bd = "gitmundo-2";

$conexion = mysqli_connect($host,$usuario,$passwor,$bd);

if($conexion){
    echo "";
}else{
    echo "no se pudo conectar";
}


?>