<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio</title>
    </head>
<body>
	<form action="#" method="POST">
		<label for="dolares">Dolares: </label>
		<input type="number" name="dolares">

		<input type="submit" value="Convertir"></input>

		<?php 
		$dolares=$_POST['dolares'];
		$pesos=3638.60*$dolares;
		echo "<br>$".$dolares ." dolares equivalen a $".$pesos ." pesos colombianos";
		?>

	</form>
</body>
</html>