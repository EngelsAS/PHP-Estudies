<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<?php

		$nome = 'Lucas';
		$cor = 'azul';
		$idade = 23;
		$hobby = 'jogar vôlei';

	?>

</head>
<body>

	<h3>Concatenação utilizando o operador ponto '.' :</h3>
	<?= 'Olá ' . $nome .', vi que sua cor preferida é ' . $cor . ', estou vendo tambem que voce tem '. $idade .' anos e gosta de '. $hobby ?>

	<h3>Concatenação utilizando aspas duplas "" :</h3>
	<?= "Olá $nome, vi que sua cor preferida é $cor, estou vendo tambem que voce tem $idade anos e gosta de $hobby" ?>

	<!-- Nas duas formas o resultado é o mesmo, a unica diferença é que a utilização de aspas duplas se torna um
	pouco mais lenta por precisar fazer uma verificação previa das variaveis e so depois concatenar os
	resultados com a string. Mesmo que nao existam variaveis a serem concatenadas, essa verificação irá ocorrer, ou
	seja, caso nao va aplicar um processo de concatenacao, recomenda-se usar sempre aspas simples -->

</body>
</html>