<?php
    $host = "localhost";
    $user = "gabriel";
    $pass = "teste123";
    $db = "cursophp";
    
    $conn = new mysqli($host,$user,$pass,$db);
    
    //Assunto da aula

    $nome = "Suporte de Microfone";

    $descricao = "Suporte é novo e foi fabricado na china";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");

    $stmt->bind_param("ss", $nome, $descricao); // S = string I = integer e D = Double;

    $stmt->execute();

    $stmt->close();