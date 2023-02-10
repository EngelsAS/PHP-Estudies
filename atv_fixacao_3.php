<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atividade de fixação 3</title>
</head>
<body>

	<?php 

		echo 'Crie um script capaz de produzir, atraves de um laço de repeticao, um array com 6 elementos numericos aleatorios entre 1 e 60, simulando o funcionamento do sorteio da mega sena.<br> Atente-se ao fato de que os numeros aleatorios contidos dentro do array nao podem ser repetidos';

		$lista_numeros = [];

		for($i = 0; $i < 6; $i++) {

			$numero = rand(1,60);

			while(in_array($numero, $lista_numeros)) {

				$numero = rand(1,60);

			}

			$lista_numeros[$i] = $numero;

		}

		echo '<pre>';
		print_r($lista_numeros);
		echo '</pre>';

	?>

</body>
</html>