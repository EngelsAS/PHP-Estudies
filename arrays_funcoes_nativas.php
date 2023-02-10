<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays - Funções nativas</title>
</head>
<body>

	<?php 

		echo '<h4>Função is_array:</h4>';
		$exemplo1 = 'String';
		$resultado_exemplo1 = is_array($exemplo1); //retorna true ou false

		if($resultado_exemplo1) {
			echo 'É um array';
		}else {
			echo 'Não é um array';
		}

		echo '<hr>';

		//--------------------------------

		echo '<h4>Função array_keys:</h4>';

		$exemplo2 = ['chave1'=>'a','chave2'=>'b','chave3'=>'c'];

		echo '<pre>';
		print_r($exemplo2);
		echo '</pre>';

		echo 'Recuperando um array com as chaves do array passado como parametro:';

		$chaves_exemplo2 = array_keys($exemplo2);

		echo '<pre>';
		print_r($chaves_exemplo2);
		echo '</pre>';

		echo '<hr>';

		//--------------------------------

		echo '<h4>Função sort:</h4>';
		//Ordena itens e reajusta os indices

		$exemplo3 = [2,7,1,8,12,4];

		echo 'Array antes de ordenar: <pre>';
		print_r($exemplo3);
		echo '</pre>';

		sort($exemplo3);

		echo 'Array depos de ordenar: <pre>';
		print_r($exemplo3);
		echo '</pre>OBS: Tambem funciona para ordenação em ordem afabetica';

		echo '<hr>';

		//--------------------------------

		echo '<h4>Função asort:</h4>';
		//Apenas ordena os itens

		$exemplo4 = [1=>'b',3=>'a',2=>'c'];

		echo 'Array antes de ordenar: <pre>';
		print_r($exemplo4);
		echo '</pre>';

		asort($exemplo4);

		echo 'Array depos de ordenar: <pre>';
		print_r($exemplo4);
		echo '</pre>OBS: Tambem funciona para ordenação em sequencias numericas';

		echo '<hr>';

		//--------------------------------

		echo '<h4>Função count:</h4>';
		//Usando o mesmo array do exemplo anterior:

		echo '<pre>';
		print_r($exemplo4);
		echo '</pre>';
		echo 'Esse array tem '.count($exemplo4).' elementos';

		echo '<hr>';

		//--------------------------------

		echo '<h4>Função array_merge:</h4>';

		$exemplo5 = ['OSX','Windows'];
		$exemplo6 = ['Linux'];

		echo 'Array 1:<pre>';
		print_r($exemplo5);
		echo '</pre>';

		echo 'Array 2:<pre>';
		print_r($exemplo6);
		echo '</pre>';

		$retorno_exemplos_5_6 = array_merge($exemplo5,$exemplo6);

		echo 'Junção dos dois arrays com a função array_merge:<pre>';
		print_r($retorno_exemplos_5_6);
		echo '</pre>';

		echo '<hr>';

		//--------------------------------

		echo '<h4>Função explode:</h4>';

		$exemplo7 = '10/02/2023';

		echo 'String a ser submetida a função explode: '.$exemplo7.'<br>';

		$retorno_exemplo_7 = explode('/', $exemplo7);

		echo 'Array retornado apos usar a função explode:<pre>';
		print_r($retorno_exemplo_7);
		echo '</pre>';

		echo '<hr>';

		//--------------------------------

		echo '<h4>Função implode:</h4>';

		$exemplo8 = ['a','b','c','d'];

		echo 'Array a ser submetido a função implode:<pre>';
		print_r($exemplo8);
		echo '</pre>';

		$retorno_exemplo_8 = implode('-', $exemplo8);

		echo 'String retornado apos usar a função implode:<br>'.$retorno_exemplo_8;


	?>

</body>
</html>