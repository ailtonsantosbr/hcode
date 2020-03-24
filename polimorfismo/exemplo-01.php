<?php
/**
 *
 */
abstract class Animal {

	public function falar() {
		return "som";
	}

	public function mover() {
		return "anda";
	}
}

class Cachorro extends Animal {
	public function falar() {
		echo get_class($this) . " esta e a minha classe";
		echo "<br>";
		echo "late";
	}
}

class Gato extends Animal {
	public function falar() {
		return "mia";
	}
}

class Passaro extends Animal {
	public function falar() {
		return "pia";
	}

	public function mover() {
		return "voa " . " e " . parent::mover();
	}
}

$pluto = new Cachorro;

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "====================" . "<br>";

$tom = new Gato;

echo $tom->falar() . "<br>";
echo $tom->mover() . "<br>";

echo "====================" . "<br>";

$piu = new passaro;

echo $piu->falar() . "<br>";
echo $piu->mover() . "<br>";

?>
