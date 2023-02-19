<?php 

	class Veiculo {

		public $placa = null;
		public $cor = null;

		function __get($atributo) {
			return $this->$atributo;
		}

		function acelerar() {
			echo 'Acelerar<br>';
		}

		function freiar() {
			echo 'Freiar<br>';
		}

	}

	class Carro extends Veiculo {

		function __construct($placa,$cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar<br>';
		}

	}

	class Moto extends Veiculo {

		function __construct($placa,$cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar<br>';
		}

	}

	$carro = new Carro('QJKL023','Vinho');
	echo 'Placa: '.$carro->__get('placa').'<br>';
	echo 'Cor: '.$carro->__get('cor').'<br>';
	$carro->acelerar();
	$carro->abrirTetoSolar();
	$carro->freiar();
	echo '<hr>';

	$moto = new Moto('YTZI872','Preta');
	echo 'Placa: '.$moto->__get('placa').'<br>';
	echo 'Cor: '.$moto->__get('cor').'<br>';
	$moto->acelerar();
	$moto->empinar();
	$moto->freiar();
	echo '<hr>';

?>