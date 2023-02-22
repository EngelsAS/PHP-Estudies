<?php 

	/*Aqui estamos criando uma classe personalizada que herda a classe nativa Exception, fazemos isso pois a instrucao
	throw so é capaz de trabalhar com objetos da classe Error ou Exception, dessa forma, objetos que herdarem o 
	comportamento dessas classes tbm podem ser usados*/

	class MinhaExceptionCustomizada extends Exception {

		/*Dentro da classe customizada trabalharemos normalmente com a criacao de atributos e metodos, pois como esse
		objeto sera recebido como parametro no bloco de codigos catch, poderemos usar normalmente seus metodos,
		lembrando que esse metodo precisa de uma funcao construtora para receber o erro customizavel como parametro*/

		private $erro = '';

		public function __construct($erro){
			$this->erro = $erro;
		}

		public function exibirErroCustomizado() {

			//Nesse caso decidi fazer uma funcao void para imprimir na tela o erro de forma customizada

			echo '<div style = "background-color: red; padding: 15px; color: white" align = "center">';
				echo $this->erro;
			echo '</div>';

		}

	}

	try {

		//Na instrucao throw precisamos nos atentar a passar corretamente o objeto que queremos lançar

		throw new MinhaExceptionCustomizada('Mensagem de erro customizada');
		
	} catch(MinhaExceptionCustomizada $e) { /*É necessario especificar o tipo do objeto que nos vamos receber como
		parametro, nesse caso passaremos o nome da classe de exception customizada na definicao da tipagem*/

		$e->exibirErroCustomizado();

		/*E ja que estamos recebendo esse objeto customizado, podemos acessar os metodos publicos dentro dele, e
		dessa forma podemos exibir nossa mensagem customizada*/

	}


?>