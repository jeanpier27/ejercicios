<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 18</title>
</head>
<body>
	<form action="ejercicios18.php" method="post">
		
		<label for="">Ingrese un número</label>
		<input type="text" name="numero"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$numero=$_POST['numero'];
			if($numero>=1){
				echo "<h1>1</h1>";	
			}else if($numero<0){
				echo "<h1>-1</h1>";
			}else{
				echo "<h1>0</h1>";
			}
		}
	 ?>
</body>
</html>