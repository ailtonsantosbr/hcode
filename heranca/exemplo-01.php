<?php

class Documento {

	private $numero;

	public function getNumero() {
		echo $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}
}

class CPF extends Documento {
	public function validar(): bool{
		$numeroCPF = $this->getNumero();
		return true;
	}
}

$doc = new CPF();

$doc->setNumero("123.456.845-75");

var_dump($doc->validar());
echo "<br>";
echo "CPF.:";
echo $doc->getNumero();

?>
