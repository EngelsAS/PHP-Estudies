<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

		$idade = 25;
		$peso = 75.29;

		if($idade >= 16 && $idade <= 69 && $peso >= 50){
			echo 'Atende aos requisitos';
		} else{
			echo 'Não atende aos requisitos';
		}

	?>

</body>
</html>