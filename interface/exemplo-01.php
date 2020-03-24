<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

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

$carro = new Civic();
$carro->acelerar(80);
echo "<br>";
$carro->trocarMarcha(5);
echo "<br>";

?>
