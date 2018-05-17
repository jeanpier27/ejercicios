<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 21</title>
</head>
<body>
	<form action="ejercicios22.php" method="post">
		<label for="">Ingrese sueldo </label>
		<input type="text" name="sueldo"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$sueldo=$_POST['sueldo'];

			if($sueldo>=1000){
				$t_sueldo=$sueldo+($sueldo*0.12);
			}else{
				$t_sueldo=$sueldo+($sueldo*0.15);
			}
			echo "<h1>Total sueldo $".$t_sueldo."</h1>";

		}
	 ?>
</body>
</html>