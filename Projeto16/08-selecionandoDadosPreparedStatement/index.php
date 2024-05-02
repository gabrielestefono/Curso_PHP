<?php
    $host = "localhost";
    $user = "gabriel";
    $pass = "teste123";
    $db = "cursophp";
    
    $conn = new mysqli($host,$user,$pass,$db);
    
    //Assunto da aula

    $id = 4;

    $stmt = $conn->prepare("SELECT  * FROM itens WHERE id > ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all();

    print_r($data);

    $conn->close();