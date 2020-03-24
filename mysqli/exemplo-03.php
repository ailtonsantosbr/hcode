<?php

// Não será executado por não executa o SQL SERVER

$conn = new mysqli('server=localhost\SQLEXPRESS', '', '', 'dbphp7');


if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare('INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)');

$stmt->bind_param("ss", $login, $pass);

$login = 'user';
$pass = '123456';

$stmt->execute();


$login = "ailton";
$pass = "123456";

$stmt->execute();


$login = 'root';
$pass = '456789';

$stmt->execute();

$login = 'master';
$pass = 'root';

$stmt->execute();


$login = 'Ailton';
$pass = '456789';

$stmt->execute();

 ?>
