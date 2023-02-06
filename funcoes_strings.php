<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funcoes nativas para strings</title>
</head>
<body>

	<?php 

		$texto = 'funcoes nativas para Strings';
		echo "String original:<br> $texto <hr>";

		echo 'strtolower: <br>';
		echo strtolower($texto).'<hr>';

		echo 'strtoupper: <br>';
		echo strtoupper($texto).'<hr>';

		echo 'ucfirst: <br>';
		echo ucfirst($texto).'<hr>';

		echo 'strlen: <br>';
		echo strlen($texto).'<hr>';

		echo 'str_replace: <br>';
		echo str_replace('funcoes nativas', 'metodos nativos', $texto).'<hr>';

		echo 'substr: <br>';
		echo substr($texto, 20, 7).'<hr>';





	?>

</body>
</html>