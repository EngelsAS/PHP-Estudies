<?php 

class Funcionario {

	public $nome = null;
	public $telefone = null;
	public $numFilhos = null;

	//Usando os metodos get e set magicos

	function __set($atributo,$valor){
		$this->$atributo = $valor;
	}

	function __get($atributo){
		return $this->$atributo;
	}

	/*
	function setNome($nome) {
		$this->nome = $nome;
	}

	function setNumFilhos($numFilhos) {
		$this->numFilhos = $numFilhos;
	}

	function getNome() {
		return $this->nome;
	}

	function getNumFilhos() {
		return $this->numFilhos;
	}

	function exibirInformacoes(){
		return "$this->nome tem $this->numFilhos filho(a)s";
	}
	*/

}

$x = new Funcionario();
$x->__set('nome','André');
$x->__set('numFilhos', 2);
$x->__set('telefone', '00 97777-8888');
echo 'Nome: '. $x->__get('nome') . '<br>Telefone: ' . $x->__get('telefone') . '<br>Filhos: ' . $x->__get('numFilhos');


?>
