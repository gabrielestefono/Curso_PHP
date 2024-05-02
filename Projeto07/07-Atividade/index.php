<?php
$x = 0;
$array = [10,20,30,40,50,60,70,80,90,100];
while($x <= 100){
    if(in_array($x, $array) && $x != 40 && $x != 30){
        echo $x . "<br>";
    }
    $x++;
}