<?php
$servidor = "localhost";
$usuariodb = "root";
$password ="123";
$db = "luis_miguel_velasco_bogota";

$conexion=mysqli_connect($servidor,$usuariodb,$password);
if($conexion===false){
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS luis_miguel_velasco_bogota";
if($conexion->query($sql) === false){
    die("Conexión fallida: " . mysqli_connect_error());
}

$conexion=mysqli_connect($servidor,$usuariodb,$password ,$db);
if($conexion===false){
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS programa(
codigo INT(10) PRIMARY KEY,
nombre_programa VARCHAR(255) NOT NULL,
sede VARCHAR(255) NOT NULL,
timestamp TIMESTAMP
)";
if($conexion->query($sql) === false){
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS estudiantes(
codigo INT(10) PRIMARY KEY,
nombre VARCHAR(255) NOT NULL,
correo VARCHAR(255) NOT NULL,
promedio_acumulado INT(10),
programa_id INT(10),
timestamp TIMESTAMP,
FOREIGN KEY estudiantes(programa_id) REFERENCES programa(codigo)
)";
if($conexion->query($sql) === false){
    die("Conexión fallida: " . mysqli_connect_error());
}  
?>