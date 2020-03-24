<?php
require_once "config.php";

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setEmail("ailton.sa@gmail.com");
$cad->setNome("Ailton Santos");
$cad->setSenha("123456");

$cad->registraVenda();
// echo $cad;
?>
