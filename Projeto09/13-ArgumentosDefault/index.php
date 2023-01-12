<?php

function teste($a = "Teste"){
    echo "O valor de A é: " . $a . "<br>";   
}

teste();
teste("teste");
teste("Cabelo");
teste("Liso");

function teste2($a = "Teste", $b = "Teste2"){
    echo "O valor de A é: " . $a . " e o de B é " . $b . "<br>";   
}

teste2();