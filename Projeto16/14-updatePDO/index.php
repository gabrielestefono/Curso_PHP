<?php

$host = "localhost";
$db = "cursophp";
$user = "gabriel";
$password = "teste123";
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

// ASSUNTO DA AULA
$descricao = "O suporte está novo e na caixa ainda";
$id = "10";

$stmt = $conn->prepare("UPDATE itens SET descricao = :descricao WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->bindParam(":descricao", $descricao);
$stmt->execute();

?>