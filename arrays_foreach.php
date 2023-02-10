<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays - For each</title>
</head>
<body>

	<?php 

		//For each: Percorrendo arrays multidimensionais

		/*Pra percorrer cada valor especifico de um array contido dentro de outro array é
		possivel usarmos for eachs encadeados, ou seja um dentro do outro. Exemplo:*/

		$lista_funcionarios = [
		  array('nome' => 'José', 'salario' => '2500'),
		  array('nome' => 'Martha', 'salario' => '3000'),
		];

		foreach($lista_funcionarios as $funcionarios){

		/*Nesse caso nao é preciso passar como parametro a variavel que representa o indice
		pois nao iremos utilizar o indice. A cada loop a variavel $funcionarios recebe o
		valor de uma posicao do array externo, e cada posicao desse array externo é
		referente a um array, ou seja, a cada loop a variavel $funcionarios é igual a um
		array, e para percorrermos esse sub-array precisamos de mais um for each*/
		  
		  foreach($funcionarios as $idx => $dados){

		  /*Aqui estamos tbm recuperando os indices do sub-array pois nesse caso foi
		     necessario para deixar a demonstração mais dinamica*/

		    echo "$idx: $dados <br>";
		  //Aqui estamos imprimindo de forma personalizade o indice e seu respectivo valor;

		  }

		  echo '<hr>';

		}

	?>

</body>
</html>