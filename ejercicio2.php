<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<form action="ejercicio2.php" method="post">
		<label for="">Ingrese cantidad de artículos comprados</label>
		<input type="text" name="articulos"><br><br>
		<label for="">Total</label>
		<input type="text" name="total"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$articulos=$_POST['articulos'];
			$total=$_POST['total'];
			if($articulos>=5){
				$porcentaje=0.20;				
			}else{
				$porcentaje=0.05;	
			}
			$descuento=($total*$porcentaje);
			$total_p=$total-$descuento;

			echo "<h1>Descuento $".$descuento."</h1>";
			echo "<h1>Total a pagar $".$total_p."</h1>";

		}
	 ?>
</body>
</html>