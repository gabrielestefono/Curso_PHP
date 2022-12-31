<?php

$a = true;


if(is_bool($a)){
    echo "É um booleano 1 ";
}
echo "<br>";
if(is_bool(0)){
    echo "É um booleano 2 ";
}
if(is_bool(false)){
    echo "É um booleano 3 ";
}
echo "<br>";
if(0 == false){
    echo "É considerado falso!";
}


?>