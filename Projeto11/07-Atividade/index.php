<?php

$arrar[0] = range(1,4);
$arrar[1] = range(5,8);
$arrar[2] = range(9,12);

foreach($arrar as $elemento){
    echo "Entrando em um novo Array <br>";
    foreach($elemento as $element){
        echo $element . "<br>";
    }
}