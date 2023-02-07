<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funcoes para tarefas matematicas</title>
</head>
<body>

	<?php 

		$numero = 4.78;

		echo 'Valor original:<br>';
		echo "$numero <hr>";

		echo 'ceil(): <br>';
		echo ceil($numero) . '<hr>';

		echo 'floor(): <br>';
		echo floor($numero) . '<hr>';

		echo 'round(): <br>';
		echo round($numero) . '<hr>';

		echo 'rand(); SEM PASSAGEM DE PARAMETROS; Função que retorna um valor aleatorio entre 0 e o maior possivel: <br>';
		echo rand() .'<br> O valor maximo aleatorio do rand é obtido atraves da funcao getrandmax(). O valor maximo nessa ocasião é de: '.getrandmax().'<hr>';

		echo 'rand(); COM PARAMETROS, definindo intervalo entre 0 e 500: <br>';
		echo rand(0,500) . '<hr>';

		echo 'sqrt(): <br>';
		echo sqrt($numero). '<br> Essa é a raiz quadrada de '.$numero.'<hr>';

	?>

</body>
</html>