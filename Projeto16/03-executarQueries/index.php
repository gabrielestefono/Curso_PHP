<?php
    $host = "localhost";
    $user = "gabriel";
    $pass = "teste123";
    $db = "cursophp";
    
    $conn = new mysqli($host,$user,$pass,$db);
    
    //Assunto da aula

    $sql = "SELECT  * FROM itens";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();
?>