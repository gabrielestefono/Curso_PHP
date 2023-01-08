<?php

$x = 0;
while($x < 10){
    echo "O X é $x <br>";
    $x++;
    if($x == 5){
        echo "Terminando o Loop <br>";
        break;
    }
}