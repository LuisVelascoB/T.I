<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio</title>
    </head>
<body>
	<?php
	$string='hola como estas';
	$palabras=str_word_count($string);
	$mayus=strtoupper($string);
	$longitud=strlen($string);
	explode(",", $string);
	echo $string;
	echo "<br>";
	echo "Longitud de la cadena: ".$palabras;
	echo "<br>";
	echo $mayus;
	echo "<br>";
	for($i=0;$i<$longitud;$i++){
		echo $string[$i];
	}

	?>
</body>
</html>