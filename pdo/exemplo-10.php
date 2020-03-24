<?php

$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS;ConnectionPooling=0; database=dbphp7", '', '');

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));

$conn->rollBack();
// $conn->commit();

echo "Deletado com sucesso OK..." . $id;

 ?>
