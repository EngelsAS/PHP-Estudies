<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casting de Tipos</title>
</head>
<body>

	<?php 

		$valor = '10';
		$valor2 = (int) $valor;

		echo $valor.' '.gettype($valor).'<br>';
		echo $valor2.' '.gettype($valor2).'<hr>';

		$exemplo = '19.4';
		$exemplo2 = (float) $exemplo;
		$exemplo3 = (int) $exemplo;
		$exemplo4 = (boolean) $exemplo;

		echo $exemplo.' '.gettype($exemplo).'<br>';
		echo $exemplo2.' '.gettype($exemplo2).'<br>';
		echo $exemplo3.' '.gettype($exemplo3).'<br>';
		echo $exemplo4.' '.gettype($exemplo4).'<hr>';


	?>

</body>
</html>