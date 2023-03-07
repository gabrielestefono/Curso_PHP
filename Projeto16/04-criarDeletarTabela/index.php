<?php
    $host = "localhost";
    $user = "gabriel";
    $pass = "teste123";
    $db = "cursophp";
    
    $conn = new mysqli($host,$user,$pass,$db);
    
    //Assunto da aula
    // $q = "CREATE TABLE teste(nome VARCHAR(100), sobrenome VARCHAR(100));";
    $q = "DROP TABLE teste";

    $conn->query($q);

    $conn->close();