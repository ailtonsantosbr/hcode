<?php

$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", '', '');

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Ailton Santos";
$pass = "12345678";
$id = 4;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);
$stmt->bindParam(":ID", $id);

$stmt->execute();

$loginn = "teste123";
$password = "123456789";
$id = 5;

$stmt->bindParam(":LOGIN", $loginn);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

// var_dump($stmt);

echo "Alterado com sucesso OK...";



?>
