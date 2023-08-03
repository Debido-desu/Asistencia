<?php

//function conexion(){
    $hostname= "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "asistencia";

    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
   // return $conectar;
//}

if (!$conectar) {
  echo "conexión fallida";
}
?>  