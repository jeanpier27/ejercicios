<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
</head>
<body>
	<form action="ejercicio3.php" method="post">
		<label for="">Tipo de combustible</label><br>
		<label for="">a</label><br>
		<label for="">b</label><br>
		<label for="">c</label><br>
		<label for="">Ingrese tipo de combustible</label>
		<input type="text" name="tipo"><br><br>
		<label for="">Ingrese cantidad de galones</label>
		<input type="text" name="cantidad"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$galon=3.785;
			$tipo=$_POST['tipo'];
			$cantidad=$_POST['cantidad'];
			switch($tipo){
				case a:
				$total=($cantidad*$galon)*1.50;
				echo "<h1>Total $".$total."</h1>";
				break;
				case b:
				$total=($cantidad*$galon)*2;
				echo "<h1>Total $".$total."</h1>";
				break;
				case c:
				$total=($cantidad*$galon)*3;
				echo "<h1>Total $".$total."</h1>";
				break;
				default: 
				echo "<h1>Error ingrese bien los datos</h1>";
			}
			
		}
	 ?>
</body>
</html>