<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 9</title>
</head>
<body>
	<form action="ejercicios9.php" method="post">
		<!-- <label for="">Tipo de combustible</label><br>
		<label for="">a</label><br>
		<label for="">b</label><br>
		<label for="">c</label><br>
		<label for="">Ingrese tipo de combustible</label>
		<input type="text" name="tipo"><br><br>
		<label for="">Ingrese cantidad de galones</label>
		<input type="text" name="cantidad"><br><br> -->
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$galon=3.785;
			$a=array('A Bs','B Bs','C Cs');
			for($i=1;$i<20;$i++){
				$tipo=rand(0,2);
				$cantidad=rand(1,10);
				echo "<strong>Cliente".$i.":</strong> Tipo de combustible ".$a[$tipo].", cantidad de galones: ".$cantidad."<br>";
				switch($a[$tipo]){
					case 'A Bs':
					$s_total=($cantidad*$galon)*50;
					echo "<strong>Total $".$s_total."</strong><br>";					
					break;
					case 'B Bs':
					$s_total=($cantidad*$galon)*55;
					echo "<strong>Total $".$s_total."</strong><br>";
					break;
					case 'C Cs':
					$s_total=($cantidad*$galon)*60;
					echo "<strong>Total $".$s_total."</strong><br>";
					break;
				}
				$total=$total+$s_total;
			}
			echo "<h1>Total recaudado: $".$total."</h1>";
			
		}
	 ?>
</body>
</html>