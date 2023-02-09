<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções para a manipulação de datas</title>
</head>
<body>

	<?php 

		echo '<h4>Antes de setar o timezone</h4>';

		echo date('d/m/Y H:i');
		echo '<br>';
		echo date_default_timezone_get();

		echo '<hr>';

		echo '<h4>Depois de setar o timezone</h4>';

		echo date('d/m/Y H:i');
		echo '<br>';
		echo date_default_timezone_get();

		echo '<hr>';

		echo '<h4>Calculos de diferenças entre datas</h4>';

		//Os segundos sao caulculados a partir do dia 01/01/1970 até a data passada como parametro

		$data_inicial = '2023/02/08';
		$data_final = '2023/02/28';

		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);

		$dia_segundos = 24*60*60;

		$diferenca_datas_segundos = $time_final - $time_inicial;

		$diferenca_datas_dias = $diferenca_datas_segundos/$dia_segundos;

		echo $data_inicial.' segundos: '.$time_inicial.'<br>';
		echo $data_final.' segundos: '.$time_final.'<br>';

		echo 'A diferença entre essas datas em segundos é: '.$diferenca_datas_segundos.' segundos .Cada dia tem: '.$dia_segundos.' segundos.<br>';

		echo 'A diferença entre essas datas em dias é: '.$diferenca_datas_dias.' dias.';

	?>

</body>
</html>