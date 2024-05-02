<?php
    $host = "localhost";
    $user = "gabriel";
    $pass = "teste123";
    $db = "cursophpa";
    
    $conn = new mysqli($host,$user,$pass,$db);

    if($conn->connect_errno){
        echo "Erro na conexão <br>";
    }
?>