<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 21</title>
</head>
<body>
	<form action="ejercicios21.php" method="post">
		<label for="">Ingrese sueldo base</label>
		<input type="text" name="sueldo"><br><br>
		<label for="">Ingrese prendas vendidas</label>
		<input type="text" name="prendas"><br><br>
		<label for="">Ingrese valor total de ventas</label>
		<input type="text" name="ventas"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$sueldo=$_POST['sueldo'];
			$prendas=$_POST['prendas'];
			$ventas=$_POST['ventas'];
			if($prendas>=10){
				$comision=$ventas*0.10;
			}
			$t_sueldo=$sueldo+$comision;
			echo "<h1>Comision ganada $".$comision."</h1>";
			echo "<h1>Total sueldo $".$t_sueldo."</h1>";

		}
	 ?>
</body>
</html>