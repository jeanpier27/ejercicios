<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 12</title>
</head>
<body>
	<form action="ejercicios12.php" method="post">
		
		<label for="">Ingrese número de vendedores</label>
		<input type="text" name="vendedores"><br><br>
		<label for="">Ingrese sueldo base</label>
		<input type="text" name="sueldo"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$vendedores=$_POST['vendedores'];
			$sueldo=$_POST['sueldo'];
			$i=0;
			for($j=1;$j<=$vendedores;$j++){
				unset($ventas);
				while($i<3){
					$ventas[]=rand(200,2000);
					$comision=$comision+($ventas[$i]*0.10);
					$i++;
				}
				$i=0;
				echo "<strong>Vendedor ".$j.":</strong> Ventas: 1 $".$ventas[0]."- 2 $".$ventas[1]."- 3 $".$ventas[2]." Comision $".$comision." Valor total sueldo + comision $".($sueldo+$comision)."<br>";	
			}
		}
	 ?>
</body>
</html>