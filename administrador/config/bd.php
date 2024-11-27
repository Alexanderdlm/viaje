<?php
$host="localhost";
$bd="viajes";
$usuario="root";
$contrasenia="";


try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if ($conexion) {
        echo "";
    }
} catch (Exception $ex) {
   echo $ex->getMessage();
}
?>