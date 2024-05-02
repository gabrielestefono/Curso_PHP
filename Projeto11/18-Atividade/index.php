<?php

$pes = 4;
$polegadas = 32;
$led = false;
$lcd = true;

$arr = compact("pes", "polegadas", "led", "lcd");

foreach($arr as $propriedade){
    echo "$propriedade <br>";
}