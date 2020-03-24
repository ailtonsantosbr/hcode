<?php

class Pessoa {

	public $name; //Atributo

	public function falar() //metodo
	{
		return "Meu nome é.: " . $this->name;
	}
}

$app = new Pessoa();

$app->name = "Ailton Santos";
echo $app->falar();

?>
