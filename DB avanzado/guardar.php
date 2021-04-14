<?php
require_once "conexion2.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty(trim($_POST["nombre"])) && !empty(trim($_POST["apellido"])) && !empty(trim($_POST["correo"])) && !empty(trim($_POST["disfraz"])) && !empty(trim($_POST["bebida"])) && !empty(trim($_POST["asistencia"]))){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$correo=$_POST['correo'];
		$disfraz=$_POST['disfraz'];
		$bebida=$_POST['bebida'];
		$asistencia=$_POST['asistencia'];

		$sql="SELECT nombre,apellido,correo from lista_asistencia_invitados where nombre='$nombre' AND apellido='$apellido' AND correo='$correo'";
		$repetido=$conexion->query($sql);
		if(mysqli_num_rows($repetido)>0){
			echo "Ya se registro";
			die;
		}

		$sql="INSERT INTO lista_asistencia_invitados(nombre,apellido,correo,disfraz,bebida,asistencia) VALUES ('$nombre','$apellido','$correo','$disfraz','$bebida','$asistencia')";

		if($conexion->query($sql)===false){
			die($conexion->error);
		}
	}
}

?>