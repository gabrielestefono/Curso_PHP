<?php

$array = [];
for($i = 1; $i <= 20; $i++){
    $array[$i - 1] = $i;
}

for($j = 0; $j < 20; $j++){
    if($array[$j] % 2 == 0){
        echo $array[$j] . "<br>";
    }
}

