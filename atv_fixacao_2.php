<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atividade</title>
</head>
<body>

	<?php

		function calcularImposto($salario){
			if($salario <= 1903.98){
				return 0;
			}else if($salario >= 1903.99 && $salario <= 2826.65){
				return $salario * (7.5/100);
			}else if($salario >= 2826.66 && $salario <= 3751.05){
				return $salario * (15/100);
			}else if($salario >= 3751.06 && $salario <= 4664.68){
				return $salario * (22.5/100);
			}else{
				return $salario * (27.5/100);
			}
		}

		$imposto = calcularImposto(3500.50);

		echo "O imposto a ser pago de acordo com o seu salario é de R$ $imposto";

	?>


</body>
</html>