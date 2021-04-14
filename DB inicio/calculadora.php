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
		<input type="number" name="x">
		<input type="number" name="y">


		<input type="submit" name="operacion" value="suma" />
		<input type="submit" name="operacion" value="resta" />
		<input type="submit" name="operacion" value="multiplicacion" />
		<input type="submit" name="operacion" value="division" />

		<?php 
		$x=$_POST['x'];
		$y=$_POST['y'];
		$i=$_POST['operacion'];
		switch ($i) {
			case "suma":
			$resultado=$x+$y;
			echo "<br> la suma es igual a: ".$resultado;
			break;

			case "resta":
			$resultado=$x-$y;
			echo "<br>la resta es igual a: ".$resultado;
			break;

			case "multiplicacion":
			$resultado=$x*$y;
			echo "<br>la multiplicacion es igual a: " .$resultado;
			break;

			case "division":
			$resultado=$x/$y;
			echo "<br>la division es igual a: ".$resultado;
			break;
		}
		?>

	</form>
</body>
</html>