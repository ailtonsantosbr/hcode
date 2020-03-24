<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade) {
		echo "O veiculo acelerou até " . $velocidade . " km/h";
	}

	public function frenar($velocidade) {
		echo "O veiculo frenou " . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha) {
		echo "O Condutor trocou a marcha " . $marcha;
	}

}

class DelRey extends Automovel {

	public function quebrar() {

		echo "O veiculo quebrou";

	}

}

$carro = new DelRey();
$carro->acelerar(200);
echo "<br>";
$carro->quebrar();

?>
