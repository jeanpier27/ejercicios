<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<form action="ejercicios2.php" method="post">
		<label for="">Ingrese el valor del prestamo </label>
		<input type="text" name="prestamo"><br><br>
		<label for="">Ingrese acuerdo a devolver </label>
		<input type="text" name="devolver"><br><br>
		<label for="">Ingrese el interes </label>
		<input type="text" name="interes"><br><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['calcular'])){
			$prestamo=$_POST['prestamo'];
			$devolver=$_POST['devolver'];
			$interes=$_POST['interes'];
			$b=$devolver;
			$a=0;
			unset($pagos_mens);
			while($a==0){
				if($b<$prestamo){
					$pagos_mens[]=$b;
				}else{
						if($sum==$prestamo){
							$a=1;
						}else{
							foreach ($pagos_mens as $valor) {
								$sum=$sum+$devolver;
							}
							$pagos_mens[]=($prestamo-$sum);
							$sum=$prestamo;
							$a=$prestamo;
							$i=1;
							foreach ($pagos_mens as $valor) {
								if(end($pagos_mens)==$valor){
									echo "Cuota N.-".$i." $".$valor." más el interes $".($a*($interes*0.01))." Total $".($valor+($a*($interes*0.01)))." Restante: $".($a-$valor)."<br>";
								}else{
									echo "Cuota N.-".$i." $".$devolver." más el interes $".($a*($interes*0.01))." Total $".($devolver+($a*($interes*0.01)))." Restante: $".($a-$devolver)."<br>";
								}
								$a=$a-$devolver;
								$i++;
							}
						}
				}

				$b=$b+$devolver;
			}
		}
	 ?>
</body>
</html>