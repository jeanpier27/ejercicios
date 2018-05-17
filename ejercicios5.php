<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>
</head>
<body>
	<form action="ejercicios5.php" method="post">
		<label for="">Ingrese un número</label>
		<input type="text" name="numero"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$numero=$_POST['numero'];
			$i=1;
			while($i<=12){
				echo "".$numero."*".$i."=".($numero*$i)."<br>";
				$i++;
			}
		}
	 ?>
</body>
</html>