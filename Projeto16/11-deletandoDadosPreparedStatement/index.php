<?php

$host = "localhost";
$user = "gabriel";
$pass = "teste123";
$db= "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$nome = "Caneta";

$stmt = $conn->prepare("DELETE from itens WHERE nome = ?");

$stmt->bind_param("s", $nome);

$stmt->execute();

$conn->close();

?>