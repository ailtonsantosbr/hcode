<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", 'root', '');

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Ailton";
$pass = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);

$stmt->execute();

$loginn = "teste";
$password = "123456";

$stmt->bindParam(":LOGIN", $loginn);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com sucesso OK...";



 ?>
