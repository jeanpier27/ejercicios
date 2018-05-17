<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<form action="ejercicio1.php" method="post">
		<label for="">Ingrese nota primer parcial</label>
		<input type="text" name="nota1"><br><br>
		<label for="">Ingrese segundo parcial</label>
		<input type="text" name="nota2"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$nota1=$_POST['nota1'];
			$nota2=$_POST['nota2'];
			$promedio=($nota1+$nota2)/2;
			if($promedio>=6.5){
				echo "<h1>Aprobado</h1>";
			}else if($promedio<=3){
				echo "<h1>Reprobado </h1>";
			}else{
				echo "<h1>Supletorio </h1>";
			}
		}
	 ?>
</body>
</html>