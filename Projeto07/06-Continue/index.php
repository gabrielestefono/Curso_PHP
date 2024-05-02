<?php

$a = 10;

while($a > 0){
    if($a == 5 || $a == 7){
        echo "Vamos pular essa execução! <br>";
        $a--;
        continue;
    }
    if($a == 2){
        echo "Terminando a execução! <br>";
        break;
    }
    echo $a . "<br>";
    $a--;
}