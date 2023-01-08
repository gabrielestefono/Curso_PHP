<?php
$array = ["Gabriel", 1763.50, true, 500, "Leme", "Estéfono", "Sim", "Maçã", 33159, 109455, 1217];

$x = 0;
while($x < sizeof($array)){
    if(is_string($array[$x])){
        echo $array[$x] . "<br>";
    }
    $x++;
}