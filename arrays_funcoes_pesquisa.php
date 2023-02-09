<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays - Funções de pesquisa em arrays</title>
</head>
<body>

	<?php 

		$lista_frutas = ['Uva','Abacaxi','Abacate','Banana'];
		$lista_pessoas = ['João','Maria','José'];

		//Funcão in_array retorna true ou false ao pesquisar o item

		echo '<pre>';
		print_r($lista_frutas);
		echo '</pre>';

		$existe = in_array('Uva', $lista_frutas);

		if ($existe) {
			echo 'O item existe dentro do array <br>';
		}else {
			echo 'O item não existe dentro do array <br>';
		}

		//Funçao array_search retorna o indice do item no array

		echo 'Na posição '.array_search('João', $lista_pessoas);

		//Pesquisa em arrays multidimensionais APENAS USANDO ESSAS FUNÇÕES

		$lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => $lista_pessoas];

		echo '<pre>';
		print_r($lista_coisas);
		echo '</pre>';

		$existe2 = in_array('Abacaxi', $lista_coisas['frutas']);

		if ($existe2) {
			echo 'O item existe dentro do array <br>';
		}else {
			echo 'O item não existe dentro do array <br>';
		}

		echo 'Na posição '.array_search('Maria', $lista_coisas['pessoas']);

	?>

</body>
</html>