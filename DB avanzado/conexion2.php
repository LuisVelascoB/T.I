<?php
    //variables de myphpadmin para la conexion
    $servidor = "localhost";
    $usuariodb = "root";
    $password ="root";
    $db = "evento_especial";

    //se conecta usando servidor,user y password
    $conexion=mysqli_connect($servidor,$usuariodb,$password );
    if($conexion===false){
    	die("Conexión fallida: " . mysqli_connect_error());
    }

     //Si la base de datos no existe, la crea
     $sql = "CREATE DATABASE IF NOT EXISTS evento_especial";
     if($conexion->query($sql) === false){
         die("Conexión fallida: " . mysqli_connect_error());
     }

    //se conecta pero ahora usando la base de datos tambien
    $conexion=mysqli_connect($servidor,$usuariodb,$password ,$db);
    if($conexion===false){
    	die("Conexión fallida: " . mysqli_connect_error());
    }

    //crea la tabla si no existe
    $sql = "CREATE TABLE IF NOT EXISTS Lista_Asistencia_Invitados(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(255) NOT NULL,
        Apellido VARCHAR(255) NOT NULL,
        Correo VARCHAR(255) NOT NULL,
        Disfraz VARCHAR(255) NOT NULL,
        Bebida VARCHAR(255) NOT NULL,
        Asistencia VARCHAR(255) NOT NULL,
        timestamp TIMESTAMP
    )";
    if($conexion->query($sql) === false){
         die("Conexión fallida: " . mysqli_connect_error());
    }

?>