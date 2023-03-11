<?php
    $host = "localhost";
    $user = "gabriel";
    $pass = "teste123";
    $db = "cursophp";
    
    $conn = new mysqli($host,$user,$pass,$db);
    
    //ASSUNTO DA AULA

    $id = 8;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    $nome = "Sofá";
    $descricao = "Sofá seminovo com madeira de demolição";

    $stmt->bind_param('ssi', $nome, $descricao, $id);

    $stmt->execute();

    if($stmt->error){
        echo "Erro no stmt";
    }