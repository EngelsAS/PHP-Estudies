<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<?php 

		//String:
		$nome = 'André Marques';

		//Int:
		$idade = 23;

		//Float:
		$peso = 77.5;

		//Boolean:
		$fumante = true; //booleans retornam 1 se for verdadeiro e vazio se for falso.

	?>

</head>
<body>

	<h3>Ficha de paciente</h3>
	<hr>
	<p> Nome: <?= $nome ?><br>
		Idade: <?= $idade ?><br>
		Peso: <?= $peso ?><br>
		Fumante: <?= $fumante ?><br>
	</p>

</body>
</html>