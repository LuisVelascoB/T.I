<?php
require_once "conexion.php";

$sql="INSERT INTO programa(codigo,nombre_programa,sede) VALUES ('111','Multimedia','calle 100')";
if($conexion->query($sql)===false){
	die($conexion->error);
}
$sql="INSERT INTO programa(codigo,nombre_programa,sede) VALUES ('222','mecatronica','calle 100')";
if($conexion->query($sql)===false){
	die($conexion->error);
}
$sql="INSERT INTO programa(codigo,nombre_programa,sede) VALUES ('333','civil','cajica')";
if($conexion->query($sql)===false){
	die($conexion->error);
}
$sql="INSERT INTO programa(codigo,nombre_programa,sede) VALUES ('444','industrial','cajica')";
if($conexion->query($sql)===false){
	die($conexion->error);
}
?>