<?php

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c) {

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct() {

		// var_dump("DESTRUIR");
	}

	public function __toString() {
		return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
	}

}

$newEndereco = new Endereco("Rua inocencio", "123", "Sao Paulo");

// var_dump($newEndereco);
// echo "<br>";

// print_r($newEndereco);
// echo "<br>";
// unset($newEndereco);

// echo "<br>";

print_r($newEndereco);

?>
