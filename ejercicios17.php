<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 17</title>
</head>
<body>
	<form action="ejercicios17.php" method="post">
		
		<label for="">Ingrese nombre del vendedor</label>
		<input type="text" name="nombre"><br><br>
		<label for="">Ingrese número de vehículos vendidos</label>
		<input type="text" name="n_vehiculos"><br><br>
		<label for="">Ingrese valor total de automóviles</label>
		<input type="text" name="v_autos"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$nombre=$_POST['nombre'];
			$n_vehiculos=$_POST['n_vehiculos'];
			$v_autos=$_POST['v_autos'];
			$salario=250;
			$comision=150;
			$subtotal=$n_vehiculos*$comision;
			$t_salario=$salario+$subtotal+($v_autos*0.05);
				echo "<h1>El salario a recibir del vendedor ".$nombre." es: $".$t_salario."</h1>";	
		}
	 ?>
</body>
</html>