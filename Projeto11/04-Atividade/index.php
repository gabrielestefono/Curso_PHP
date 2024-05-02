<?php

$arr = range(10,45);

foreach($arr as $numero){
    $numero += 6;
    echo $numero . "<br>";
    if($numero > 30){
        echo "Numero muito alto <br>";
    }
}