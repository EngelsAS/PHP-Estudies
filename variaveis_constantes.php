<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<?php

		//Criando as variaveies constantes:
		define('BD_NOME', 'nome_usuario');
		define('BD_EMAIL', 'email_usuario');
		define('BD_SENHA', 'senha_usuario');

		//Acessando o conteudo das variaveis constantes:
		echo BD_NOME .'<br>'. BD_EMAIL .'<br>'. BD_SENHA;

		//O valor de uma variavel constante so pode ser modificado no ponto onde ela foi definida;

		/*Caso tente modificar o valor de uma variavel constante em outro ponto que nao seja o local 
		onde essa variavel foi criada inicialmente, o interpretador ira apontar um erro*/

	?>
</head>
<body>

</body>
</html>