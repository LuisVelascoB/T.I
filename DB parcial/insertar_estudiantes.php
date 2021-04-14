<?php
require_once "conexion.php";

$codigo=$nombre=$correo=$promedio_acumulado=$programa=$aux="";

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['tipo_boton']=="Enviar"){
	if(!empty(trim($_POST["codigo"])) && !empty(trim($_POST["nombre"])) && !empty(trim($_POST["correo"])) && !empty(trim($_POST["promedio_acumulado"]))){

		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$promedio_acumulado=$_POST['promedio_acumulado'];
		$aux=$_POST['programa'];


		$sql=$conexion->query("SELECT codigo FROM programa WHERE nombre_programa='$aux'");
		$resultado=mysqli_fetch_array($sql);
		$programa=$resultado['codigo'];

		$sql="SELECT codigo FROM estudiantes WHERE codigo='$codigo'";
		$aux=$conexion->query($sql);
		if(mysqli_num_rows($aux)>0){
			header("location:principal.php");
			echo "Estudiante ya registrado";
		}else{
			$sql="INSERT INTO estudiantes(codigo,nombre,correo,promedio_acumulado,programa_id) VALUES ('$codigo','$nombre','$correo','$promedio_acumulado','$programa')";
			if($conexion->query($sql)===false){
				die($conexion->error);
			}
		}
	}
}
?>