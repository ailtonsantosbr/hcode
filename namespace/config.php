<?php

spl_autoload_register(function ($nameClasse) {
	// var_dump($nameClasse);
	$dirClass = "class";
	$fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClasse . ".php";

	if (file_exists($fileName)) {
		require_once ($fileName);
	}
});
?>
