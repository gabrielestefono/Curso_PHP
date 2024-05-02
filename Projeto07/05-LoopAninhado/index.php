<?php

$i = 1;
while($i <= 10){
    echo "loop externo $i <br>";
    $i++;
    $j = 1;
    while($j <=5){
        echo "Loop interno $j <br>";
        $j++;
    }
}

$a = 1;
while($a <= 10){
    $b = 1;
    while($b <=10){
        $resultado = $a * $b;
        echo "$a * $b = $resultado <br>";
        $b++;
    }
    $a++;
}
