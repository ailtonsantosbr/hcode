<?php

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados() {
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}

	protected function tratarDados() {
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}

	private function privDados() {
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$objeto = new Pessoa();

echo $objeto->nome . "<br>";
// $objeto->idade . "<br>";
// $objeto->senha . "<br>";
echo get_class($objeto) . "<br>";
$objeto->verDados() . "<br>";
$objeto->tratarDados() . "<br>";
$objeto->privDados() . "<br>";
?>
