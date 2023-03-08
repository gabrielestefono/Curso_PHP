<?php

    $host = "localhost";
    $user = "gabriel";
    $pass = "teste123";
    $db = "cursophp";
    
    $conn = new mysqli($host,$user,$pass,$db);

    // Assunto da aula

    $table = "itens";
    $nome = "Xícara";
    $descricao = "É uma xícara usada de cor rosa";

    $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();