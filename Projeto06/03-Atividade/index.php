<?php

$array = [7,12,15,21,23,23,25,28,29,31,35,40,42,44,49,52,58,60,65,68];

for ($i = 0; $i < sizeof($array); $i++) {
    if($array[$i] > 18){
        echo "$array[$i] é maior que 18 anos <br>";
    }
}
