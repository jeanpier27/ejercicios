<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 13</title>
</head>
<body>
	<form action="ejercicios13.php" method="post">
		
		<label for="">Ingrese número de autos</label>
		<input type="text" name="autos"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$autos=$_POST['autos'];
			for($j=1;$j<=$autos;$j++){
				$placa=rand(0,9);
				echo "Auto ".$j.": ultimo digito de la Placa: ".$placa."<br>";
				if($placa>=1 and $placa<=2){
					$amarillo++;
				}else if($placa>=3 and $placa<=4){
					$rosa++;
				}else if($placa>=5 and $placa<=6){
					$roja++;
				}else if($placa>=7 and $placa<=8){
					$verde++;
				}else if($placa==9 or $placa==0){
					$azul++;
				}

			}
				echo "<h1>Autos con placa amarilla: ".$amarillo."</h1>";	
				echo "<h1>Autos con placa rosa: ".$rosa."</h1>";
				echo "<h1>Autos con placa roja: ".$roja."</h1>";
				echo "<h1>Autos con placa verde: ".$verde."</h1>";
				echo "<h1>Autos con placa azul: ".$azul."</h1>";
		}
	 ?>
</body>
</html>