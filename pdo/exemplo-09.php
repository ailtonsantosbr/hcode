<?php

$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS;ConnectionPooling=0; database=dbphp7", '', '');

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado com sucesso OK..." . $id;

 ?>
