<?php
// En esta parte se enfoca en la coñexión de la base de datos 
$host = "localhost";
$user = "root";
$password = "root123";
$dbname = "sakila";

$conexion = new mysqli($host, $user, $password, $dbname);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


?>