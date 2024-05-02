<?php

$arr = [1,2,4,19,234,12,35,5,12];

function soma($a, $b){
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";

?>