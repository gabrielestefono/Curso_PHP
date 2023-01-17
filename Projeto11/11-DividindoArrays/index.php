<?php

$arr = range(1,20);

foreach(array_chunk($arr, 4) as $numeros){
    print_r($numeros);
    echo "<br>";
}