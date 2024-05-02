<?php

$numeros = [];

for($i = 0; $i <= 100; $i++){
    array_push($numeros, $i);
}

foreach($numeros as $numero){
    if($numero > 20){
        break;
    }
    echo "O numero do índice atual é $numero <br>";
}