<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4</title>
</head>
<body>
	<form action="ejercicio4.php" method="post">
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$capital=10000;
			$año=360;//un año contable tiene 360 dias
			$meses=300;//un mes contable tiene 30 dias
			$dia=5;
			$t_dias=$año+$meses+$dia;
			//primero 20% se divide para los 12 meses, de ahi se divide para los 30 dias
			$p_diario=((20/12)/30);
			$interes=(($p_diario*0.01)*$capital)*$t_dias;
			echo "<h1>Ganancia de interes $".$interes."</h1>";
		}
	 ?>
</body>
</html>