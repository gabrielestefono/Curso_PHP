<?php

$array = [];
for($i = 0; $i <= 10; $i++){
    array_push($array, $i+10);
}

print_r($array);
echo "<br>";

for($j = 0; $j <= 10; $j++){
    if($array[$j] % 2 != 0){
        echo $array[$j] . "<br>";
    }
}
