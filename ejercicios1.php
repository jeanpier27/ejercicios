<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1.1</title>
</head>
<body>
	<form action="ejercicios1.php" method="post">
		<label for="">Ingrese el tamaño de la lista</label>
		<input type="text" name="lista"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$lista=$_POST['lista'];
			$inicio=1;
			if($lista>0){
				while($inicio<=$lista){
					$num=rand(1,10);
					$suma=$suma+$num;
					echo $num."<br>";
					$inicio++;
				}
				$total=$suma/$lista;
				echo "<h1>Promedio $".$total."</h1>";

			}
		}
	 ?>
</body>
</html>