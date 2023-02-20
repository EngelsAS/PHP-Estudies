<?php 

  interface Mamifero {
  	public function respirar();
  }

  interface Terrestre {
  	public function andar();
  }

  interface Aquatico {
  	public function nadar();
  }

  class Pessoa implements Mamifero, Terrestre {

  	public function respirar() {
  		echo 'Respirar<br>';
  	}

  	public function andar() {
  		echo 'Andar<br>';
  	}

  }

  class Baleia implements Mamifero, Aquatico {

  	public function respirar() {
  		echo 'Respirar<br>';
  	}

  	public function nadar() {
  		echo 'Nadar<br>';
  	}

  }

  $x = new Pessoa();
  $y = new Baleia();

  $x->andar();
  $y->nadar();



?>