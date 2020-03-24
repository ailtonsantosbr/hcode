<?php

$name = "images";

if (!is_dir($name)) {

	mkdir($name);
	echo "Diretorio criado com sucesso." . $name;
} else {

	rmdir($name);
	echo "Diretorio existente!!! $name foi removido...";
}







?>
