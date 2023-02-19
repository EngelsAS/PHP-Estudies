<?php 

	class Pessoa {

		public $nome = null;

		function __get($atributo){
			return $this->$atributo;
		}

		function __construct($nome){
			echo 'Objeto foi iniciado<br>';
			$this->nome = $nome;
		}

		function __destruct(){
			echo 'Objeto removido da mémoria';
		}

	}

	$pessoa = new Pessoa('André');
	echo 'Nome: '.$pessoa->__get('nome').'<br>';

?>