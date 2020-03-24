<?php

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	private function getModelo() {
		return $this->modelo;
	}

	private function setModelo($modelo) {
		$this->modelo = $modelo;
	}

	private function getMotor(): float {
		return $this->motor;
	}

	private function setMotor($motor) {
		$this->motor = $motor;
	}

	private function getAno(): int {
		return $this->ano;
	}

	private function setAno($ano) {
		$this->ano = $ano;
	}

	private function exibir() {
		return array(
			"modelo" => $this->getModelo(),
			"motor" => $this->getMotor(),
			"ano" => $this->getAno(),
		);
	}
}

$parati = new Carro();
$parati->setModelo("Parati");
$parati->setMotor("2.0");
$parati->setAno("1969");

// print_r($parati->exibir());

echo $parati->exibir();

?>
