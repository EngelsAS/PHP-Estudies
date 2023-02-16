<?php 

class Funcionario {

	public $nome = null;
	public $telefone = null;
	public $numFilhos = null;

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

}

$x = new Funcionario();
$x->setNome('André');
$x->setNumFilhos(2);
echo $x->exibirInformacoes();


?>