<?php
    $host = "localhost";
    $user = "gabriel";
    $pass = "teste123";
    $db = "cursophp";
    
    $conn = new mysqli($host,$user,$pass,$db);
    
    //Assunto da aula

    $q = "SELECT  * FROM itens";

    $result = $conn->query($q);

    // Um resultado

    $item = $result->fetch_assoc();

    print_r($item);

    echo "<br>";

    // Todos os resultados

    $itens = $result->fetch_all();

    print_r($itens);

    $conn->close();
?>